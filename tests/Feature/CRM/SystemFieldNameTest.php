<?php

declare(strict_types=1);

use App\Enums\CrmEntity;
use App\Filament\Resources\CompanyResource\Pages\ListCompanies;
use App\Filament\Resources\OpportunityResource\Pages\ListOpportunities;
use App\Listeners\CreateWorkspaceCustomFields;
use App\Models\CustomField;
use App\Models\User;
use Filament\Facades\Filament;
use Illuminate\Support\Facades\Lang;
use Relaticle\CustomFields\Livewire\ManageFieldsTable;

mutates(CustomField::class, CrmEntity::class, CreateWorkspaceCustomFields::class);

beforeEach(function (): void {
    Lang::addLines([
        'custom-fields.fields.opportunity.stage' => 'Etapa',
        'custom-fields.fields.company.icp' => 'Cliente ideal',
        'custom-fields.fields.people.phone_number' => 'Teléfono',
    ], 'es');
});

function workspaceField(User $user, string $entityType, string $code): CustomField
{
    return CustomField::query()
        ->withoutGlobalScopes()
        ->where('tenant_id', $user->currentWorkspace->getKey())
        ->where('entity_type', $entityType)
        ->where('code', $code)
        ->firstOrFail();
}

it('shows a system field under its name in the app locale', function (): void {
    $user = User::factory()->withWorkspace()->create();
    $this->actingAs($user);
    Filament::setTenant($user->currentWorkspace);
    app()->setLocale('es');

    livewire(ListOpportunities::class)->assertSee('Etapa');

    $this->assertDatabaseHas('custom_fields', ['id' => workspaceField($user, 'opportunity', 'stage')->getKey(), 'name' => 'Stage']);
});

it('keeps the name a workspace gave a field it can rename', function (): void {
    $user = User::factory()->withWorkspace()->create();
    $this->actingAs($user);
    Filament::setTenant($user->currentWorkspace);
    workspaceField($user, 'company', 'icp')->update(['name' => 'Target account']);
    app()->setLocale('es');

    livewire(ListCompanies::class)
        ->assertSee('Target account')
        ->assertDontSee('Cliente ideal');
});

it('saves a system field from settings while its name is translated', function (): void {
    $user = User::factory()->withWorkspace()->create();
    $this->actingAs($user);
    Filament::setTenant($user->currentWorkspace);
    $stage = workspaceField($user, 'opportunity', 'stage');
    app()->setLocale('es');

    livewire(ManageFieldsTable::class, ['entityType' => 'opportunity'])
        ->callAction('editField', arguments: ['fieldId' => $stage->getKey()])
        ->assertHasNoActionErrors();

    expect($stage->fresh()->getRawOriginal('name'))->toBe('Stage');
});

it('seeds the fields of a new workspace in the app locale', function (): void {
    app()->setLocale('es');

    $user = User::factory()->withWorkspace()->create();

    expect(workspaceField($user, 'people', 'phone_number')->getRawOriginal('name'))->toBe('Teléfono');
});

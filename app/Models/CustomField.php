<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\CrmEntity;
use Database\Factories\CustomFieldFactory;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Attributes\ScopedBy;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\Factory;
use Relaticle\CustomFields\Models\CustomField as BaseCustomField;
use Relaticle\CustomFields\Models\Scopes\SortOrderScope;
use Relaticle\CustomFields\Models\Scopes\TenantScope;
use Relaticle\CustomFields\Observers\CustomFieldObserver;
use Spatie\Activitylog\Models\Concerns\LogsActivity;
use Spatie\Activitylog\Support\LogOptions;

/**
 * @property string $tenant_id
 */
#[ScopedBy([TenantScope::class, SortOrderScope::class])]
#[ObservedBy(CustomFieldObserver::class)]
final class CustomField extends BaseCustomField
{
    use HasUlids;
    use LogsActivity;

    /**
     * Whether saving an arbitrary value to this field should promote that value
     * into the field's user-managed option list. True for tags-input; false for
     * email/phone/link, which also accept arbitrary values but own no option list.
     */
    public function promotesValuesToOptions(): bool
    {
        return $this->typeData->acceptsArbitraryValues && ! $this->typeData->withoutUserOptions;
    }

    // Saving a record writes a row for every field, so a row alone does not mean a value.
    public function hasValues(): bool
    {
        return CustomFieldValue::query()->holdingAValue($this)->exists();
    }

    // A system field's name is locked, so it follows the app locale while the row keeps the seeded name.
    /** @return Attribute<string, never> */
    protected function name(): Attribute
    {
        return Attribute::get(function (string $value, array $attributes): string {
            if (! (bool) ($attributes['system_defined'] ?? false)) {
                return $value;
            }

            $definition = CrmEntity::tryFrom((string) ($attributes['entity_type'] ?? ''))
                ?->customFieldEnum()::tryFrom((string) ($attributes['code'] ?? ''));

            return $definition?->getDisplayName() ?? $value;
        });
    }

    /** @return CustomFieldFactory */
    protected static function newFactory(): Factory
    {
        return CustomFieldFactory::new();
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['name', 'active', 'settings'])
            ->logOnlyDirty()
            ->dontLogEmptyChanges()
            ->useLogName('crm')
            ->setDescriptionForEvent(fn (string $eventName): string => $eventName);
    }
}

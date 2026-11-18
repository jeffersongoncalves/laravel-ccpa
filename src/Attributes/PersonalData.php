<?php

namespace JeffersonGoncalves\Ccpa\Attributes;

use Attribute;
use JeffersonGoncalves\Ccpa\Enums\AnonymizeStrategy;
use JeffersonGoncalves\Ccpa\Enums\DataCategory;
use JeffersonGoncalves\Ccpa\Enums\PiCategory;
use JeffersonGoncalves\Privacy\Attributes\PersonalDataAttribute;

/**
 * Declares one column of an Eloquent model as personal information (Cal. Civ. Code §1798.140(v)).
 */
#[Attribute(Attribute::TARGET_CLASS | Attribute::IS_REPEATABLE)]
final class PersonalData extends PersonalDataAttribute
{
    public function __construct(
        public string $column,
        public DataCategory $category = DataCategory::Personal,
        public ?string $purpose = null,
        public ?PiCategory $piCategory = null,
        public ?string $retention = null,
        AnonymizeStrategy $anonymize = AnonymizeStrategy::Nullify,
        public bool $sold = false,
        public bool $shared = false,
    ) {
        $this->anonymize = $anonymize;
    }

    /**
     * @return array{column: string, category: string, purpose: string|null, pi_category: string|null, retention: string|null, anonymize: string, sold: bool, shared: bool}
     */
    public function toArray(): array
    {
        return [
            'column' => $this->column,
            'category' => $this->category->value,
            'purpose' => $this->purpose,
            'pi_category' => $this->piCategory?->value,
            'retention' => $this->retention,
            'anonymize' => $this->anonymize->value,
            'sold' => $this->sold,
            'shared' => $this->shared,
        ];
    }
}

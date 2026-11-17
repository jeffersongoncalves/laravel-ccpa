<?php

namespace JeffersonGoncalves\Ccpa\Tests\Fixtures;

use Illuminate\Database\Eloquent\Model;
use JeffersonGoncalves\Ccpa\Attributes\PersonalData;
use JeffersonGoncalves\Ccpa\Concerns\InteractsWithPersonalData;
use JeffersonGoncalves\Ccpa\Contracts\HasPersonalData;
use JeffersonGoncalves\Ccpa\Enums\AnonymizeStrategy;
use JeffersonGoncalves\Ccpa\Enums\DataCategory;
use JeffersonGoncalves\Ccpa\Enums\PiCategory;

#[PersonalData('name', purpose: 'Identification', piCategory: PiCategory::Identifiers, anonymize: AnonymizeStrategy::Mask)]
#[PersonalData('email', piCategory: PiCategory::Identifiers, retention: '5 years', anonymize: AnonymizeStrategy::Hash, shared: true)]
#[PersonalData('health_notes', category: DataCategory::Sensitive, piCategory: PiCategory::ProtectedClassifications)]
#[PersonalData('tax_id', category: DataCategory::Sensitive, piCategory: PiCategory::Identifiers, anonymize: AnonymizeStrategy::Keep)]
class Customer extends Model implements HasPersonalData
{
    use InteractsWithPersonalData;

    protected $guarded = [];

    public $timestamps = false;

    protected function casts(): array
    {
        return ['health_notes' => 'encrypted'];
    }
}

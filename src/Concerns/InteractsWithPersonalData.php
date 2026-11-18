<?php

namespace JeffersonGoncalves\Ccpa\Concerns;

use Illuminate\Database\Eloquent\Model;
use JeffersonGoncalves\Ccpa\Attributes\PersonalData;
use JeffersonGoncalves\Ccpa\Events\PersonalDataAnonymized;
use JeffersonGoncalves\Privacy\Concerns\InteractsWithPersonalData as BaseInteractsWithPersonalData;

/**
 * Default HasPersonalData implementation for Eloquent models, driven by #[PersonalData] attributes.
 * Reads only this suite's declarations and fires this suite's PersonalDataAnonymized.
 *
 * @mixin Model
 */
trait InteractsWithPersonalData
{
    use BaseInteractsWithPersonalData;

    protected static function personalDataAttribute(): string
    {
        return PersonalData::class;
    }

    protected static function personalDataAnonymizedEvent(): string
    {
        return PersonalDataAnonymized::class;
    }
}

<?php

namespace JeffersonGoncalves\Ccpa\Contracts;

use JeffersonGoncalves\Ccpa\Attributes\PersonalData;
use JeffersonGoncalves\Privacy\Contracts\HasPersonalData as BaseHasPersonalData;

interface HasPersonalData extends BaseHasPersonalData
{
    /**
     * @return list<PersonalData>
     */
    public static function personalDataFields(): array;

    /**
     * Declared personal data of this record, keyed by column (right to know, Cal. Civ. Code §1798.110).
     *
     * @return array<string, mixed>
     */
    public function exportPersonalData(): array;

    /**
     * Apply each column's anonymize strategy and persist (right to delete, §1798.105; deidentified data, §1798.140(m)).
     */
    public function anonymizePersonalData(): void;
}

<?php

namespace JeffersonGoncalves\Ccpa;

use JeffersonGoncalves\Ccpa\Contracts\HasPersonalData;
use JeffersonGoncalves\Privacy\Privacy;

class Ccpa extends Privacy
{
    protected string $config = 'ccpa';

    protected string $contract = HasPersonalData::class;
}

<?php

namespace JeffersonGoncalves\Ccpa\Commands;

use JeffersonGoncalves\Ccpa\Ccpa;
use JeffersonGoncalves\Privacy\Commands\KAnonymityCommand as BaseKAnonymityCommand;

class KAnonymityCommand extends BaseKAnonymityCommand
{
    protected $signature = 'ccpa:k-anonymity
        {model : Eloquent model class}
        {columns* : Quasi-identifier columns}
        {--k=5 : Minimum group size}
        {--sensitive= : Sensitive column for l-diversity}';

    protected string $privacy = Ccpa::class;
}

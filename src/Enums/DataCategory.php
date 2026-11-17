<?php

namespace JeffersonGoncalves\Ccpa\Enums;

enum DataCategory: string
{
    /** Personal information (Cal. Civ. Code §1798.140(v)). */
    case Personal = 'personal';

    /**
     * Sensitive personal information (§1798.140(ae)): government identifiers, account log-in with
     * credentials, financial account with access codes, precise geolocation, racial or ethnic origin,
     * religion, union membership, private communications, genetic, biometric, health, sex life or orientation.
     */
    case Sensitive = 'sensitive';
}

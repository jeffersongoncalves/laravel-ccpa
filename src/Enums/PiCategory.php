<?php

namespace JeffersonGoncalves\Ccpa\Enums;

/**
 * Categories of personal information (Cal. Civ. Code §1798.140(v)(1)(A)-(K)). Sensitive personal
 * information (§1798.140(ae)) is flagged separately with DataCategory::Sensitive.
 */
enum PiCategory: string
{
    case Identifiers = 'identifiers';                           // (A) name, alias, email, IP, account name, SSN...
    case CustomerRecords = 'customer_records';                  // (B) §1798.80(e): signature, address, phone, bank...
    case ProtectedClassifications = 'protected_classifications'; // (C) characteristics protected under California or federal law
    case Commercial = 'commercial';                             // (D) purchase history and tendencies
    case Biometric = 'biometric';                               // (E)
    case InternetActivity = 'internet_activity';                // (F) browsing, search, interactions
    case Geolocation = 'geolocation';                           // (G)
    case Sensory = 'sensory';                                   // (H) audio, electronic, visual, thermal, olfactory
    case Professional = 'professional';                         // (I) employment-related information
    case Education = 'education';                               // (J) non-public education information
    case Inferences = 'inferences';                             // (K) profiles drawn from the above
}

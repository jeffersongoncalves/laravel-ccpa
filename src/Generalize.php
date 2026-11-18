<?php

namespace JeffersonGoncalves\Ccpa;

use JeffersonGoncalves\Privacy\Generalize as BaseGeneralize;

/**
 * Generalizers for quasi-identifiers: each returns a closure that coarsens a value
 * (null stays null), for Ccpa::kAnonymity() or for building an anonymized dataset.
 */
final class Generalize extends BaseGeneralize {}

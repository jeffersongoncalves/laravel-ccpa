# Changelog

All notable changes to this project will be documented in this file.

## 2.0.0 - 2026-11-18

### Breaking

- The engine moves to [laravel-privacy](https://github.com/jeffersongoncalves/laravel-privacy), the base shared by the LGPD, GDPR, CCPA, US privacy and Quebec suites. Every class of this package keeps its name and now extends its `JeffersonGoncalves\Privacy` base. If you extend one of them, check your overrides.

### Unchanged

- Config keys, tables, migrations, commands, events and the `#[PersonalData]` declarations: apps need no change.

### Added

- Suites installed side by side (e.g. LGPD and GDPR) only see their own declarations and events.

## 1.0.0 - 2026-11-17

First release: core of a CCPA/CPRA (Cal. Civ. Code §1798.100 et seq.) toolkit for Laravel.

- `#[PersonalData]` on Eloquent models: column, category (personal, or sensitive under §1798.140(ae)), purpose, the §1798.140(v)(1) personal information category, retention, deidentify strategy, and whether the column is sold or shared.
- `Ccpa::inventory()` and `ccpa:inventory [--json]` list what you collect, what is sensitive and what you sell or share, which is what your notices must disclose.
- `exportPersonalData()` (right to know) and `anonymizePersonalData()` (right to delete), using the Nullify, Hash (HMAC), Mask or Keep strategies. Deidentifying dispatches `PersonalDataAnonymized`.
- `Ccpa::kAnonymity()`, the `Generalize` helpers and `ccpa:k-anonymity` check that deidentified data cannot reasonably be linked back to a consumer (§1798.140(m)).

## [Unreleased]

# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [0.1.0] - 2025-12-29

### Added
- **UI/UX**: Created authenticated main menu and navigation links for products and cart (shop-12).
- **Authentication**: Implemented authentication scaffolding using Laravel Breeze with Livewire and custom components (shop-11).
- **Frontend**: Added Tailwind CSS and PostCSS configuration (shop-9).
- **Application**: bootstrapped Laravel project with initial setup in the `src` directory (shop-7, shop-8).
- **Infrastructure**: Added Docker configuration including Nginx, PHP, MySQL, Queue, and Scheduler services (shop-2, shop-3, shop-4, shop-5).
- **Repository**: Initialized repository structure and added `.gitignore` for common exclusions (shop-1).

### Changed
- **Infrastructure**: Configured Vite server for Dockerized development and enhanced Nginx compatibility (shop-9, shop-12).
- **Dependencies**: Updated `composer.lock` with new Laravel and test packages (shop-11).
- **Documentation**: Updated `README.md` with bootstrapping instructions (shop-1).

### Fixed
- **Authentication**: Handled missing email input in the reset-password flow (shop-11).

[0.1.0]: https://github.com/tri-suli/trisnna.id/compare/initial...v0.1.0

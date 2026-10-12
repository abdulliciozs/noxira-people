# Noxira People

Noxira People is a rebranded and modified fork of [OrangeHRM Starter 5.9](https://github.com/orangehrm/orangehrm), maintained in the [Noxira People repository](https://github.com/abdulliciozs/noxira-people). It retains OrangeHRM's PHP/Symfony and Vue application architecture and its existing HR workflows; it was not built from scratch.

The fork keeps the upstream GPL license and copyright notices. Noxira People is an independent project and is not affiliated with or endorsed by OrangeHRM. See [LICENSE](LICENSE) and [MODIFICATIONS.md](MODIFICATIONS.md) for license and source details.

## What it includes

The existing application source includes employee and personnel records, recruitment, leave, time and attendance, performance, a corporate directory, Buzz, claims, administration and role permissions, authentication integrations, corporate branding, and reporting. Availability of individual features depends on the installed configuration and enabled modules.

This change updates visible product branding, default theme colors, logos, favicon, page titles, login and installer presentation, and the About/legal notice. It preserves the upstream application and its existing feature set.

## Development setup

The root `Dockerfile` is inherited upstream packaging for an official OrangeHRM release; it does not build this fork's source. For local development, use the upstream [OrangeHRM OS development environment](https://github.com/orangehrm/orangehrm-os-dev-environment), following its current environment setup and service documentation.

In that environment, configure `LOCAL_SRC` to the parent directory containing this checkout, so it mounts as `/var/www/noxira-people`. Configure the companion environment file, database, and local host routing as its guide specifies. Build and start its documented PHP, MariaDB, and nginx services, then install the PHP dependencies in `src` and `devTools/core`, and install/build the Vue applications in `src/client` and `installer/client`. The web installer is served at `/noxira-people/installer/`; complete it against the configured database before opening the application.

Use fictional employee and organization data in development and screenshots. Do not commit database dumps, credentials, uploaded employee files, or personal data.

The supported source stack is described in `AGENTS.md` and the companion environment repository. This checkout has not been run or built in the current environment. PHP, Composer, Docker, Yarn, and a usable database runtime were unavailable here, so setup and application flows have not been verified locally.

## Tests

The upstream source includes PHPUnit tests and Vue unit tests. Run them using the commands and database/bootstrap requirements in `AGENTS.md`, `src/client/package.json`, and the companion development environment guide. No tests were run for this branding change because the required toolchain and database were unavailable.

## Screenshots and demo

No application screenshots are included: the application could not be launched here, and this repository contains no genuine post-change captures. There is no live demo link. Screenshots should be captured from a running instance using fictional data after installation.

## Attribution and license

Copyright &#169; 2006 OrangeHRM Inc. The original source and this fork are distributed under the GNU General Public License, version 3 or (at your option) any later version. See [LICENSE](LICENSE) for the full license text and [MODIFICATIONS.md](MODIFICATIONS.md) for the fork's branding changes and source attribution. Existing upstream copyright and license headers remain in place.


Hereldar's Easy Coding Standards configuration
==============================================

[![License][license-badge]][license-url]

[license-badge]: https://img.shields.io/badge/license-MIT-brightgreen.svg
[license-url]: LICENSE

Opinionated linting configuration inspired on [Codely's Coding Style](https://github.com/CodelyTV/php-coding_style-codely).

**Currently under development.**

How to use
----------

Install the package via Composer:

```bash
composer require --dev hereldar/coding-style
```

Create a `ecs.php` file in the root of your project:

```php
use Hereldar\CodingStyle;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return ECSConfig
    ::configure()
    ->withSets([
        CodingStyle::PROJECTS,
    ])
    ->withPaths([
        __DIR__.'/src',
        __DIR__.'/tests',
    ])
    ->withRootFiles();
```

Execute the following command to see the suggested changes:

```bash
vendor/bin/ecs
```

To actually fix your code, add `--fix`:

```bash
vendor/bin/ecs --fix
```

For more information, check the [Easy Coding Standard documentation](https://github.com/easy-coding-standard/easy-coding-standard)

What it does
------------

Checks the code style of your project using:

- [PER Coding Style](https://www.php-fig.org/per/coding-style/)
- [Symfony](https://symfony.com/doc/current/contributing/code/standards.html)
- Some custom rules (you can see them [here](sets)).

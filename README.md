# Nova Heroicons-ui

[![Latest Version on Packagist](https://img.shields.io/packagist/v/rmsj/nova-hero-icon.svg?style=flat-square)](https://packagist.org/packages/rmsj/nova-hero-icon)
[![Total Downloads](https://img.shields.io/packagist/dt/rmsj/nova-hero-icon.svg?style=flat-square)](https://packagist.org/packages/rmsj/nova-hero-icon)


This tool allows you to use all icons on [heroicons-ui](https://github.com/sschoger/heroicons-ui) on Laravel Nova
on your custom tool, resource-tool, custom index/detail tool bars - which was actually what started me on this package.

This package makes usage of the awesome [heroicons-ui](https://github.com/sschoger/heroicons-ui) from Steve Schoger. 

## Installation

You can install the package in to a Laravel app that uses [Nova](https://nova.laravel.com) via composer:

```bash
composer require rmsj/nova-hero-icon
```
## Usage

When using the icons, you can use Nova own <icon> component, usin the types with a slightly different naming convention.

```vue
<icon
    type="h-exclamation"
    class="text-80"
/>
```
or the one included with the package.

```vue
<icon-h
    type="h-exclamation"
    class="text-80"
/>
```
All the icons have the `h` prefix (h for heroicons) to avoid clashes with possible updates from nova when they could include more icons.

## Credits

- [Ronaldo Santana](https://github.com/rmsj)

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

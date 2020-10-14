
## Using this skeleton (remove this section after you have completed these steps)

First clone this repo to your development machine and remove the `.git` directory. Next run `git init` to create another repo. Create a new repo on GitHub (or another source control saas) and point the origin remote of your cloned repo to the one you just created. Here's an example: `git remote add origin git@github.com:facade/newly-created-repo.git`. Commit all files and push to master.

Next replace these variables in all files of the project and delete this paragraph:
 - `Ryan Kildea` (example: 'Marcel Pociot')
 - `rckildea` (example: 'mpociot')
 - `rckildea@gmail.com` (example: 'marcel@flareapp.io')
 - `ignition-better-debug` (example: 'ignition-stack-overflow')
 - `Better control over debug messages in Ignition.` (example: 'A tab to fetch stackoverflow answers')
 - `rckildea` (example: 'facade')
 - `rckildea` (example: 'Facade')
 - `BetterDebug` (example: 'StackOverflowTab')
 - `Better Debug` (example: 'Stack Overflow')
 
 Next run `composer install`, `yarn` and `yarn production`.
 
 To use the tab in a Laravel app add this line in the `require` section of `composer.json`.
 
 ```
    "rckildea/ignition-better-debug": "*",
```
 
 In your Laravel app add a `repositiories` section to the `composer.json` with the path to your package repo.
 
 ```
     "repositories": [
         {
             "type": "path",
             "url": "../your-new-package-repo"
         }
     ]
```
 
Now you're ready to develop your package inside a Laravel app. 
 
**When you are done with the steps above delete everything above!**

# Better control over debug messages in Ignition.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/rckildea/ignition-better-debug.svg?style=flat-square)](https://packagist.org/packages/rckildea/ignition-better-debug)
[![Build Status](https://img.shields.io/travis/rckildea/ignition-better-debug/master.svg?style=flat-square)](https://travis-ci.org/rckildea/ignition-better-debug)
[![Quality Score](https://img.shields.io/scrutinizer/g/rckildea/ignition-better-debug.svg?style=flat-square)](https://scrutinizer-ci.com/g/rckildea/ignition-better-debug)
[![Total Downloads](https://img.shields.io/packagist/dt/rckildea/ignition-better-debug.svg?style=flat-square)](https://packagist.org/packages/rckildea/ignition-better-debug)


This is where your description should go. Try and limit it to a paragraph or two.

Add a screenshot of the tab here.

## Installation

You can install the package in to a Laravel app that uses [Ignition](https://flareapp.io) via composer:

```bash
composer require rckildea/ignition-better-debug
```

## Usage

Click on the "Better Debug" tab on your Ignition screen to see the tool provided by this package.

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email rckildea@gmail.com instead of using the issue tracker.

## Credits

- [Ryan Kildea](https://github.com/rckildea)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

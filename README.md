# PHPStan rules for amphp/file

[amphp/file](https://github.com/amphp/file) provides a set of async filesystem functions that don't block. If you're using the amp framework, you want to eliminate calls to blocking PHP functions as much as possible.

This PHPStan rule will help you detect calls to blocking PHP functions and will propose replacement functions from `amphp/file` instead. Use this rule to ensure that you don't have any blocking filesystem calls in your code.

## Usage

Add the package to your repository with `composer require --dev nadyita/phpstan-amp-file-rule`.

Edit your project's `phpstan.neon` file and add this rule:

```neon
includes:
    - vendor/nadyita/phpstan-amp-file-rule/phpstan-amp-file-rule.neon
```

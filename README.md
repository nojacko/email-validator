# Email Validator
Small PHP library to valid email addresses using a number of methods.

[![License](https://img.shields.io/github/license/nojacko/email-validator.svg)](https://github.com/nojacko/email-validator/blob/master/LICENSE)
[![Build Status](https://img.shields.io/travis/nojacko/email-validator.svg)](https://travis-ci.org/nojacko/email-validator)
[![Code Quality](https://img.shields.io/codacy/7b3a2c246622431abd1fc4e2750aae1b.svg)](https://www.codacy.com/app/nojacko/email-validator)
[![Downloads](https://img.shields.io/packagist/dm/nojacko/email-validator.svg)](https://packagist.org/packages/nojacko/email-validator)
[![Github Stars](https://img.shields.io/github/stars/nojacko/email-validator.svg)](https://github.com/nojacko/email-validator/stargazers)

## Features
* Validates email address
* Checks for **example** domains (e.g. example.com)
* Checks for **disposable** email domains (e.g. mailinator.com)
* Checks for **role-based** addresses (e.g. abuse@)
* Checks for **MX records** (i.e. can receive email)

## Install (using Composer)
```
composer require nojacko/email-validator:~1.0
```

## Usage
### Generalised Functions
* ```isValid($email)``` Runs all the tests within this library. Returns true or false.
* ```isSendable($email)``` Checks isEmail, isExample and hasMx. Returns true or false.


### Specific Functions
If you want more control, use these functions seperately.

* ```isEmail($email)``` Note: returns true or false only.
* ```isExample($email)```
* ```isDisposable($email)```
* ```isRole($email)```
* ```hasMx($email)```

These functions take a single argument (an email address) and return:

* true, when function name is satisfied.
* false, when function name is not satisfied.
* null, when check is not possible, i.e. an invalid email is given.


## Examples
```
$validator = new \EmailValidator\Validator();

$validator->isValid('example@google.com');              // true
$validator->isValid('abuse@google.com');                // false
$validator->isValid('example@example.com');             // false

$validator->isSendable('example@google.com');           // true
$validator->isSendable('abuse@google.com');             // true
$validator->isSendable('example@example.com');          // false

$validator->isEmail('example@example.com');             // true
$validator->isEmail('example@example');                 // false

$validator->isExample('example@example.com');           // true
$validator->isExample('example@google.com');            // false
$validator->isExample('example.com');                   // null

$validator->isDisposable('example@example.com');        // false
$validator->isDisposable('example@mailinater.com');     // true
$validator->isDisposable('example.com');                // null

$validator->isRole('example@example.com');              // false
$validator->isRole('abuse@example.com');                // true
$validator->isRole('example.com');                      // null

$validator->hasMx('example@example.com');               // false
$validator->hasMx('example@google.com');                // true
$validator->hasMx('example.com');                       // null
```

## Contribute
Contributions welcome!

### Requirements
* [Test-driven development](http://en.wikipedia.org/wiki/Test-driven_development)
* Follow [PSR-2 Coding Style Guide](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md)
* One change per pull request

### Add/Remove Disposable Domain
See the  [email-data-disposable](https://github.com/nojacko/email-data-disposable) project.

### New Feature
If you're planning a new feature, please raise an issue first to ensure it's in scope. The aim is to keep this library small and with one specific purpose.

### Other Contributions
For anything that isn't a new feature (bug fix, tests, etc) just create a pull request.


## Testing
Test are all located in ```tests``` folder.

Run tests with phpunit. In root folder, execute ```phpunit``` in a CLI.


## Versioning
[Semantic Versioning 2.0.0](http://semver.org/spec/v2.0.0.html)

## License
The MIT License (MIT). See LICENCE file.

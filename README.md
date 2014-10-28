# Email Validator (beta)

Small PHP library to valid email addresses using a number of methods. 

## Features

* Validates email address
* Checks for **example** domains (e.g. example.com)
* Checks for **disposable** email domains (e.g. mailinator.com)
* Checks for **role-based** addresses (e.g. abuse@)
* Checks for **MX records** (i.e. can receive email)

## Install
### Composer
```
"nojacko/email-validator": "*"
```

## Usage 
### Main Function

* ```isValid($email)``` is the main function and it'll run all the tests within this library. Returns true or false.

### Other Functions
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

$validator->isEmail('example@example.com');             // true
$validator->isEmail('example@example');                 // false

$validator->isExample('example@example.com');           // true
$validator->isExample('example@google.com');            // false
$validator->isExample('example.com);                    // null

$validator->isDisposable('example@example.com');        // false
$validator->isDisposable('example@mailinater.com');     // true
$validator->isDisposable('example.com);                 // null

$validator->isRole('example@example.com');              // false
$validator->isRole('abuse@example.com');                // true
$validator->isRole('example.com);                       // null

$validator->hasMx('example@example.com');               // false
$validator->hasMx('example@google.com');                // true
$validator->hasMx('example.com);                        // null
```

## Testing

Test are all located in ```tests``` folder.

Run tests with phpunit. In root folder, execute ```phpunit``` in a CLI.


## Contribute

* Fork it
* Write tests ([Test-driven development](http://en.wikipedia.org/wiki/Test-driven_development))
* Write code (Follow [PSR-2 Coding Style Guide](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md))
* Submit pull request

## License

The MIT License (MIT). See LICENCE file.
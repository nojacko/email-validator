# Email Validator (beta)

A small library to valid email addresses using a number of methods.

## Install
### Composer
```
"nojacko/email-validator": "*"
```

## Usage 

The functions:

* ```isExample()```
* ```hasMx()```
* ```isDisposable()```

All 3 functions return:

* true, when function name is satisfied.
* false, when function name is not satisfied.
* null, when check is not possible, i.e. an invalid email is given.


## Example

```
$validator = new \EmailValidator\Validator();

$validator->isExample('example@example.com');           // true
$validator->isExample('example@gmail.com');             // false
$validator->isExample('example.com);                    // null

$validator->hasMx('example@example.com');               // false
$validator->hasMx('example@gmail.com');                 // true
$validator->hasMx('example.com);                        // null

$validator->isDisposable('example@example.com');        // false
$validator->isDisposable('example@mailinater.com');     // true
$validator->isDisposable('example.com);                 // null
```

## Contribute

* Fork it
* Write tests
* Write code (follow PSR-2 standards)
* Submit pull request

## License

The MIT License (MIT). See LICENCE file.
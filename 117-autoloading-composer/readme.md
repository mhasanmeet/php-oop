## Autoloading 
Autoloading in PHP is a mechanism that allows classes to be automatically loaded or included when they are needed, without the need for manual `require` or `include` statements for each class file. This simplifies the process of managing dependencies in PHP projects, especially in larger applications where many classes are used.

Autoloading works on `composer` by the standard rules of [PSR-4](https://www.php-fig.org/psr/psr-4/) from php-fig. 

## Install composer 
if we do not have composer install, then we need to install it 

* [Go to Composer website](https://getcomposer.org/download/)
* Download and run the Composer-Setup.exe installer.
* After install check version `composer -v`
* Update composer by the command `composer self-update`

## Initiate Autoload
* Create composer.json file by the command `composer init`
* After creating run command `composer install` for dependency install
* Add `autoload` object to the `composer.json` file 

```php
{
    "name": "mhasan/php_oop",
    "authors": [
        {
            "name": "mhasanmeet",
            "email": "mhasan.meet@gmail.com"
        }
    ],
    "require": {},
    "autoload": {
        "psr-4": {
            "App\\" : "app"
        }
    }
}
```
* After that we need to initiate autoload by the command `composer dump-autoload`
* Import think: class name should be same as file name
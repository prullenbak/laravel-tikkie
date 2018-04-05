#### Easily use [PHPTikkie](https://github.com/jarnovanleeuwen/php-tikkie) in your Laravel app.

# Installation

Add this package to your project using [Composer](https://getcomposer.org/):

`composer require prullenbak/laravel-tikkie`

### Package Discovery
Laravel-Tikkie supports [Package Discovery](https://laravel.com/docs/5.6/packages#package-discovery).

## Configuration
Publish the config file:
`php artisan vendor:publish`

and add your tikkie key and secret to your .env file. Also, generate a public and private key and provide the path in `app/config/tikkie.php` .See the [ABN Developer Portal](https://developer.abnamro.com/content/tikkie) for more info.

# Usage

You can use the Tikkie Facade to access all methods on the PHPTikkie class (see [PHPTikkie documentation](https://github.com/jarnovanleeuwen/php-tikkie) for more info and examples)

#### Create payment request
```php
$paymentRequest = Tikkie::newPaymentRequest($platformToken, $userToken, $bankAccountToken, [
    // Mandatory attributes
    'amountInCents' => '1250',
    'currency' => 'EUR',
    'description' => 'Thank you',

    // Optional attributes
    'externalId' => 'Order 1234'
])->save();
```

You can also  inject or resolve the `PHPTikkie\PHPTikkie` from the App Container to use it:

```php
$tikkie = app('PHPTikkie\PHPTikkie');
$users = $tikkie->users(string $platformToken);
...
```

```php
Route::get('/tikkie/users', function (PHPTikkie\PHPTikkie $tikkie) {
    $users = $tikkie->users(string $platformToken);
...
```


 

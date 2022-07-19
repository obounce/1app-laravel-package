<br>
<div style="margin:0 auto!important;text-align: center">
<img style="width:200px; height: 100px" src="https://new.1app.online/img/1appnewlogo.8e95dfd0.png">
</div>

# 1APP Laravel Library

Learn how to integrate our APIs to build a web or mobile integration to accept payments, make payment of Bills and as well custom integration for your application and businesses.
On this page, we'll go over some  payment services we offer to give you a quick overview of what is obtainable with 1app.
<br><br>
<b style='font-size:16px'>Payment Collection</b>
<p>
If you're a business owner, here are a few ways we make it possible for you to collect payments from customers all over the world:
Direct Bank Account Payments (Nigeria) - Customers can pay you directly from their bank accounts.
</p>

 <hr>

## Installation

```sh
 composer require oneapp/oneapp
```


## Configuration
You can publish the configuration file using this command:
```sh
 php artisan vendor:publish --provider="Oneapp\Oneapp\OneappServiceProvider"
```
A configuration-file named oneapp.php with some sensible defaults will be placed in your config directory:

```sh
 <?php 

 return [

    /**
    * The secret key from 1app Dashboard
    */

    'secretKey' => getenv('ONEAPP_SECRET_KEY'),

    /**
    * the public key from 1app Dashboard
    */

    'publicKey' => getenv('ONEAPP_PUBLIC_KEY'),

    /**
     * 1app Payment gateway url
     */

    'baseUrl' => getenv('ONEAPP_PAYMENT_URL'),
 ];
```

# Usage

Open your .env file and add your public key, secret key, merchant email and payment url like so:
```sh
   ONEAPP_SECRET_KEY=
   ONEAPP_PUBLIC_KEY=
   ONEAPP_PAYMENT_URL=https://api.1app.online/v1
```
If you are using a hosting service like heroku, ensure to add the above details to your configuration variables.
## Credits

-   [Samuel Damilola](https://github.com/odevlab)
-   [Jokotagba Oreoluwa](https://github.com/kvngjokes)
-   [Adeniyi Elijah](https://github.com/elieonline)
-   [Adeniyi Elijah](https://github.com/elieonline)
-   [Samuel Adekunle](https://github.com/techwithsam)
-   [Olajide Olatunji](https://github.com/ojidex)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

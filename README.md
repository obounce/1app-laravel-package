<p style="text-align: center">
   <a href="https://1app.online"><img style="width:200px;" src="https://new.1app.online/img/1appnewlogo.8e95dfd0.png"></a>
</p>

# 1APP Laravel Library

Learn how to integrate our APIs to build a web or mobile integration to accept payments, make payment of Bills and as well custom integration for your application and businesses.
On this page, we'll go over some  payment services we offer to give you a quick overview of what is obtainable with 1app.
<br><br>

 <hr>
 
 [![Latest Stable Version](http://poser.pugx.org/phpunit/phpunit/v)](https://packagist.org/packages/phpunit/phpunit) [![Total Downloads](http://poser.pugx.org/phpunit/phpunit/downloads)](https://packagist.org/packages/phpunit/phpunit) [![Latest Unstable Version](http://poser.pugx.org/phpunit/phpunit/v/unstable)](https://packagist.org/packages/phpunit/phpunit) [![License](http://poser.pugx.org/phpunit/phpunit/license)](https://packagist.org/packages/phpunit/phpunit) [![PHP Version Require](http://poser.pugx.org/phpunit/phpunit/require/php)](https://packagist.org/packages/phpunit/phpunit)

## Installation

```php
 composer require oneapp/oneapp
```
<hr>

## Configuration
You can publish the configuration file using this command:
```php
 php artisan vendor:publish --provider="Oneapp\Oneapp\OneappServiceProvider"
```
A configuration-file named oneapp.php with some sensible defaults will be placed in your config directory:

```php
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
<hr>
# Usage

Open your .env file and add your public key, secret key, payment url like so:
```php
   ONEAPP_SECRET_KEY=
   ONEAPP_PUBLIC_KEY=
   ONEAPP_PAYMENT_URL=https://api.1app.online/v1
```
If you are using a hosting service like heroku, ensure to add the above details to your configuration variables.
<hr>

# Bills 
### ```Instantiate 1app```
```php
   $oneapp = new Oneapp();
```
### ```Check Account Balance```
```php
   $oneapp->checkBalance();
```
### ```Send Money```
 ```php
   //defined request types
   $moneypayload = [
      'amount' => '', //string
      'bankcode'=> '', //string
      'bankname'=> '', //string
      'reference'=> '', //string
      'accountno'=> '', //string
      'narration'=> '', //string
      'currency'=> '', //string
      'acctname'=> '' //string
   ];
   
   $oneapp->sendMoney(array $moneypayload);

   //sample request
   $moneypayload = [
      'amount' => '100',
      'bankcode'=> '000013',
      'bankname'=> 'GT BANK',
      'reference'=> 'shudgyutg876542',
      'accountno'=> '0245000000',
      'narration'=> 'Transfer to client',
      'currency'=> 'NGN',
      'acctname'=> 'John Doe'
   ];

```
### ```Data Plans```
   Get Data List for the provided Provider
```php
   //providers 'MTN' || 'GLO' || 'AIRTEL' || '9MOBILE'
   $ntwk = 'MTN';
   $oneapp->dataPlans($ntwk);
```
### ```Purchase Data Bundle```
```php
   //defined request types
   $dataB = [
      'datacode' => '', //string
      'network_id' => '', //string
      'phoneno' => '', //string
      'reference' => '' //string
   ];
   
   $oneapp->dataBundle(array $dataB);

   //sample request
   // Network ID - GLO = 1, MTN = 2, AIRTEL = 3, 9MOBILE = 4
   $dataB = [
      'datacode' => '1000',
      'network_id' => '2',
      'phoneno' => '07012345678',
      'reference' => 'DJIEJ2MEUE2EN34'
      ];
```
### ```Purchase Airtime```
```php
   $phoneDet = [
      'phoneno' => '', //string
      'network_id' => '', //string
      'reference' => '', //string
      'amount' => '' //string
   ];
   $oneapp->airtime($phoneDet);

   //Sample Request
   // Network ID - GLO = 1, MTN = 2, AIRTEL = 3, 9MOBILE = 4
   $phoneDet = [
      'phoneno' => '07012345678',
      'network_id' => '2',
      'reference' => 'O4I3U8SRNYOIYT',
      'amount' => '100'
   ];
```

### ```Verify Electricity```
```php
   $electDet = [
      'meterno' => '', //string
      'provider' => '', //string
    ];
   $oneapp->verifyElectricity($electDet);

   //Sample Request
   $electDet = [
      'meterno' => '78632746282',
      'provider' => 'KANO',
   ];
```

### ```Buy Electricity```
```php
   $vendDet = [
      'meterno' => '', //string
      'metername' => '', //string
      'provider' => '', //string
      'amount' => '', //string
      'vendtype' => '', //string
      'reference' => '' //string
   ];
   $oneapp->vendElect($vendDet);

   $vendDet = [
      'meterno' => '67537283728',
      'metername' => 'JOHN DOE',
      'provider' => 'KANO',
      'amount' => '100',
      'vendtype' => 'PREPAID',
      'reference' => 'O4I3U8SRNYOIYT'
   ];
```

### ```Get Cable TV Lists```
   Get Cable TV List for the provided Provider
```php
   //providers 'DSTV' || 'GOTV' || 'STARTIMES'
   $tv = 'STARTIMES';
   $oneapp->getCableTV($tv);
```

### ```Verify IUC ```
```php
      $iuc = ''; //string
      $type = ''; //string
      $oneapp->verifyCable($type, $iuc);

      //Sample Request
      $iuc = '87675656325',
      $type = 'DSTV'
```

### ```Purchase Cable TV```

```php
   $buyCable = [
         'tvno' => '', //string
         'tv' => '', //string
         'custname' => '', //string
         'custno' => '', //string
         'amount' => '', //string
         'reference' => '' //string
     ];
     $oneapp->buyCableTV($buyCable);
     
     
     //sample request
   $buyCable = [
      'tvno' => '87675656325',
      'tv' => 'DSTV',
      'custname' => 'JOHN DOE',
      'custno' => '171747582',
      'amount' => '50',
      'reference' => 'OI8UYTEFYDTYTG7'
     ];
```

### ```Get Bank Lists```
```php
   $oneapp->getBankList();
```
<hr>

# Payments

### ```Initialize Payments```

```php
   $transaction = [
      'amount' => '', // string,
      'fname' => '', // string,
      'lname' => '', // string,
      'customer_email' => '', // string,
      'phone' => '', // string,
      'reference' => '', // string,
      'currency' => '', // string,
      'redirecturl' => '', // string
   ];
   $oneapp->initTrans($transaction);

   //sample request
   $transaction = [
      "amount"=> '1000',
      "fname"=> 'John',
      "lname"=> 'Doe',
      "customer_email"=> 'johndoe@gmail.com',
      "phone"=> '0801234567789',
      "reference"=> 'OI8UYTEFYDTYTG7',
      "currency"=> 'NGN', //NGN or USD supported for now
      "redirecturl"=> 'https://mywebsite.com'
   ];
```

### ```Verify transaction```
```php
   $reference = ''; //string
   $oneapp->verifyTrans($reference);

   //sample request
   'reference'=> 'OI8UYTEFYDTYTG7';
```

### ```Transaction Lists```

```php
//Get Transaction List
   $oneapp->transList();
```

### ```Get Transaction Details```

```php
   $reference = ''; //string
   $oneapp->getTrans($reference);

   //sample request
   'reference'=> 'OI8UYTEFYDTYTG7';
```

### ```Get Customers ```
```php
   $oneapp->getCusts();
```

### ```Get Payouts / Settlements ```
```php
   $oneapp->payouts();
```

### ```Get Payouts / Settlements Transactions```
```php
   $reference = ''; //string
   $oneapp->getPayoutTrans($reference);

   //sample request
   'reference'=> 'OI8UYTEFYDTYTG7';
```
### ```Disputes```
```php
   $oneapp->disputes();
```

### ```Accept Disputes ```
```php
   $oneapp->acceptDispute();
```
### ```Decline Disputes ```
```php
   $oneapp->rejectDispute();
```
# Wallet
<hr>

### ```Create Wallet```
```php
   $details = [

   ];

   $oneapp->createWallet($details);
   
   //Sample Requests
```

## Credits

-   [Samuel Owadayo](https://github.com/odevlab)
-   [Paul Jokotagba](https://github.com/kingjokes)
-   [Elijah Adeniyi](https://github.com/elieonline)
-   [Samuel Adekunle](https://github.com/techwithsam)
-   [Olajide Olatunji](https://github.com/devOjidex)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

<?php

/* This file is part of the 1app package.
 *
 * (c) Oneapp <support@1appgo.com>
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 * @date: 2022-07-15
 */ 

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
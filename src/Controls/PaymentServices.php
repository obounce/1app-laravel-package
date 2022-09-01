<?php

/* This file is part of the Oneapp package.
 *
 * (c) Oneapp <support@1appgo.com>
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 * @date: 2022-07-15
 *
 */

namespace Oneapp\Oneapp\Controls;

use Exception;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Config;

class PaymentServices
{

    protected $setPublic;
    protected $setSecret;
    protected $baseUrl;


    /**
     *
     * public Key from Oneapp Dashboard
     *
     */
    public function setPublic()
    {
        return 'Bearer ' . Config::get('oneapp.publicKey');
    }
    /**
     *
     * secret Key from Oneapp Dashboard
     *
     */
    public function setSecret()
    {
        return 'Bearer ' . Config::get('oneapp.secretKey');
    }

    public function baseUrl()
    {
        return config('oneapp.baseUrl');
    }

    public function __construct()
    {
        $this->baseUrl();
        $this->setPublic();
        $this->setSecret();
    }

    public function initializeTransaction($trans)
    {
        try{
            $headers = [
                'Authorization' => $this->setSecret(),
            ];
            $response = Http::withHeaders($headers)->post($this->baseUrl() . '/business/initiatetrans', $trans);  //request to initialize transaction
            return $response;
        }catch(Exception $exception){
            return [
                'status' => false,
                'message' => 'Something went wrong',
                'error' => $exception->getMessage(),
            ];
        }
    }

    public function verifyTransaction($data)
    {
        try{
            $headers = [
                'Authorization' => $this->setSecret(),
            ];
            $response = Http::withHeaders($headers)->post($this->baseUrl() . '/business/verifytrans', $data);  //request to verify transaction
            return $response;
        }catch(Exception $exception){
            return [
                'status' => false,
                'message' => 'Something went wrong',
                'error' => $exception->getMessage(),
            ];
        }
    }

    public function transactionList()
    {
        try{
            $headers = [
                'Authorization' => $this->setSecret(),
            ];
              //request to get transaction list
            $response = Http::withHeaders($headers)->get($this->baseUrl().'/business/transactions');
            return $response;
        }catch(Exception $exception){
            return [
                'status' => false,
                'message' => 'Something went wrong',
                'error' => $exception->getMessage(),
            ];
        }
    }

    public function getTransaction($reference)
    {
        try{
            $headers = [
                'Authorization' => $this->setSecret(),
            ];
            $response = Http::withHeaders($headers)->get($this->baseUrl(). '/business/fetchtrans?reference='. $reference);  //request to get transaction data
            return $response;
        }catch(Exception $exception){
            return [
                'status' => false,
                'message' => 'Something went wrong',
                'error' => $exception->getMessage(),
            ];
        }
    }

    public function getCustomer()
    {
        try{
            $headers = [
                'Authorization' => $this->setSecret(),
            ];
            $response = Http::withHeaders($headers)->get($this->baseUrl(). '/business/customers');  //request to get customer data
            return $response;
        }catch(Exception $exception){
            return [
                'status' => false,
                'message' => 'Something went wrong',
                'error' => $exception->getMessage(),
            ];
        }
    }

    public function getPayouts()
    {
        try{
            $headers = [
                'Authorization' => $this->setSecret(),
            ];
            $response = Http::withHeaders($headers)->get($this->baseUrl(). '/business/payouts');  //request to get payouts data
            return $response;
        }catch(Exception $exception){
            return [
                'status' => false,
                'message' => 'Something went wrong',
                'error' => $exception->getMessage(),
            ];
        }
    }

    public function getPayoutTrans($reference)
    {
        try{
            $headers = [
                'Authorization' => $this->setSecret(),
            ];
            $response = Http::withHeaders($headers)->get($this->baseUrl(). '/business/payout-transactions?payoutref='. $reference);  //request to get payouts data
            return $response;
        }catch(Exception $exception){
            return [
                'status' => false,
                'message' => 'Something went wrong',
                'error' => $exception->getMessage(),
            ];
        }
    }

    public function getDisputes()
    {
        try{
            $headers = [
                'Authorization' => $this->setSecret(),
            ];
            $response = Http::withHeaders($headers)->get($this->baseUrl(). '/business/disputes');  //request to get disputes data
            return $response;
        }catch(Exception $exception){
            return [
                'status' => false,
                'message' => 'Something went wrong',
                'error' => $exception->getMessage(),
            ];
        }
    }

    public function acceptDispute()
    {
        try{
            $headers = [
                'Authorization' => $this->setSecret(),
            ];
            $response = Http::withHeaders($headers)->post($this->baseUrl(). '/business/accept-dispute');  //request to get accept disputes
            return $response;
        }catch(Exception $exception){
            return [
                'status' => false,
                'message' => 'Something went wrong',
                'error' => $exception->getMessage(),
            ];
        }
    }

    public function declineDispute()
    {
        try{
            $headers = [
                'Authorization' => $this->setSecret(),
            ];
            $response = Http::withHeaders($headers)->post($this->baseUrl(). '/business/decline-dispute');  //request to get decline disputes
            return $response;
        }catch(Exception $exception){
            return [
                'status' => false,
                'message' => 'Something went wrong',
                'error' => $exception->getMessage(),
            ];
        }
    }

    public function createWallet($details)
    {
        try{
            $headers = [
                'Authorization' => $this->setSecret(),
            ];
            $response = Http::withHeaders($headers)->post($this->baseUrl(). '/business/createwallet', $details);  //request to get create wallet
            return $response;
        }catch(Exception $exception){
            return [
                'status' => false,
                'message' => 'Something went wrong',
                'error' => $exception->getMessage(),
            ];
        }
    }
}

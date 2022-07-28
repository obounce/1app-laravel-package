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

class BillServices
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

    /**
     *
     * Check Balance
     *
     */
    public function checkBalance()
    {
        try{
            $headers = [
                'Authorization' => $this->setSecret(),
            ];
            $response = Http::withHeaders($headers)->get($this->baseUrl() . '/balance');
            return $response;
        }catch(Exception $exception){
            return [
                'status' => false,
                'message' => 'Something went wrong',
                'error' => $exception->getMessage(),
            ];
        }
    }

    /**
     *
     * Send Money
     *
     */
    public function sendMoney($moneypayload)
    {
        try{
            $headers = [
                'Authorization' => $this->setSecret(),
            ];
            $response = Http::withHeaders($headers)->asForm()->post($this->baseUrl() .'/sendmoney', 
                        $moneypayload
                    );
    
            return $response;
        }catch(Exception $exception){
            return [
                'status' => false,
                'message' => 'Something went wrong',
                'error' => $exception->getMessage(),
            ];
        }
    }

    /**
     *
     * data plans
     *
     */
    public function dataPlans($ntwk)
    {
        try{
            $headers = [
                'Authorization' => $this->setPublic(),
            ];
            $response = Http::withHeaders($headers)->get($this->baseUrl() . '/getdataplans?provider=' . $ntwk);
            return $response;
        }catch(Exception $exception){
            return [
                'status' => false,
                'message' => 'Something went wrong',
                'error' => $exception->getMessage(),
            ];
        }
    }

    /**
     *
     * data bundle
     *
     */
    public function dataBundle($dataB)
    {
        try{
            $headers = [
                'Authorization' => $this->setSecret(),
            ];
            $response = Http::withHeaders($headers)->asForm()->post($this->baseUrl() . '/databundle', $dataB);
            return $response;
        }catch(Exception $exception){
            return [
                'status' => false,
                'message' => 'Something went wrong',
                'error' => $exception->getMessage(),
            ];
        }
    }

    /**
     *
     * airtime
     *
     */
    public function airtime($phoneDet)
    {
        try{
            $headers = [
                'Authorization' => $this->setSecret(),
            ];
            $response = Http::withHeaders($headers)->asForm()->post($this->baseUrl() . '/airtime', $phoneDet);
            return $response;
        }catch(Exception $exception){
            return [
                'status' => false,
                'message' => 'Something went wrong',
                'error' => $exception->getMessage(),
            ];
        }
    }

    /**
     *
     * verify Electricity
     *
     */
    public function verifyElect($electDet)
    {
        try{
            $meterno = $electDet['meterno'];
            $provider = $electDet['provider'];

            $headers = [
                'Authorization' => $this->setPublic(),
            ];
            $response = Http::withHeaders($headers)->get($this->baseUrl() . '/verifyelect?meterno=' . $meterno . '&provider=' . $provider);
            return $response;
        }catch(Exception $exception){
            return [
                'status' => false,
                'message' => 'Something went wrong',
                'error' => $exception->getMessage(),
            ];
        }
    }

    /**
     *
     * vend Electricity
     *
     */
    public function vendElect($vendDet)
    {
        try{
            $headers = [
                'Authorization' => $this->setSecret(),
            ];
            $response = Http::withHeaders($headers)->asForm()->post($this->baseUrl() . '/electricity', $vendDet);
            return $response;
        }catch(Exception $exception){
            return [
                'status' => false,
                'message' => 'Something went wrong',
                'error' => $exception->getMessage(),
            ];
        }
    }

    /**
     *
     * get cableTV
     *
     */

    public function getCableTV($tv)
    {
        try{
            $headers = [
                'Authorization' => $this->setPublic(),
            ];
            $response = Http::withHeaders($headers)->get($this->baseUrl() . '/listcabletv?tv=' . $tv);
            return $response;
        }catch(Exception $exception){
            return [
                'status' => false,
                'message' => 'Something went wrong',
                'error' => $exception->getMessage(),
            ];
        }
    }

    /**
     *
     * verify cabletv
     *
     */
    public function verifyCable($type, $iuc)
    {
        try{
            $headers = [
                'Authorization' => $this->setPublic(),
            ];
            $response = Http::withHeaders($headers)->get($this->baseUrl() . '/verifycable?type=' .$type .'&iuc='. $iuc);
            return $response;
        }catch(Exception $exception){
            return [
                'status' => false,
                'message' => 'Something went wrong',
                'error' => $exception->getMessage(),
            ];
        }
    }

    /**
     *
     * vend cabletv
     *
     */
    public function buyCable($buyCable)
    {
        try{
            $headers = [
                'Authorization' => $this->setSecret(),
            ];
            $response = Http::withHeaders($headers)->asForm()->post($this->baseUrl() . '/cabletv', $buyCable);
            return $response;
        }catch(Exception $exception){
            return [
                'status' => false,
                'message' => 'Something went wrong',
                'error' => $exception->getMessage(),
            ];
        }
    }

    /**
     *
     * get banklist
     *
     */
    public function getBankList()
    {
        try{
            $headers = [
                'Authorization' => $this->setPublic(),
            ];
            $response = Http::withHeaders($headers)->get($this->baseUrl() . '/listbanks');
            return $response;
        }catch(Exception $exception){
            return [
                'status' => false,
                'message' => 'Something went wrong',
                'error' => $exception->getMessage(),
            ];
        }
    }

     /**
     *
     * Verify Account Number
     *
     */
    public function verifyAccount($acctno, $bankcode)
    {
        try{
            $headers = [
                'Authorization' => $this->setPublic(),
            ];
            $response = Http::withHeaders($headers)->get($this->baseUrl() . '/validate-acctname?acctno='.$acctno.'&bankcode='.$bankcode);
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

<?php

/* This file is part of the Oneapp package.
 *
 * (c) Oneapp <support@1appgo.com>
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 * @date: 2022-07-15
 * 
 */ 


namespace Oneapp\Oneapp;

use Oneapp\Oneapp\Controls\BillServices;

class Oneapp
 {
    private $billServices;
    
    public function __construct()
    {
        $this->billServices = new BillServices();
    }   
    /**
     *
     * Check Balance
     *
     */
    public function checkBalance()
    {
        return $this->billServices->checkBalance();
    }

    /**
     *
     * Send Money
     *
     */
    public function sendMoney(array $moneypayload)
    {
        return $this->billServices->sendMoney($moneypayload);
    }

    public function dataPlans($ntwk)
    {
        return $this->billServices->dataPlans($ntwk);
    }
    /**
     *
     * databundle
     *
     */
    public function dataBundle(array $dataB)
    {
        return $this->billServices->dataBundle($dataB);
    }
    /**
     *
     * airtime
     *
     */
    public function airtime(array $phoneDet)
    {
        return $this->billServices->airtime($phoneDet);
    }
    /**
     *
     * verify electricity
     *
     */
    public function verifyElectricity(array $electDet)
    {
        return $this->billServices->verifyElect($electDet);
    }
    /**
     *
     * vend electricity
     *
     */
    public function vendElect(array $vendDet)
    {
        return $this->billServices->vendElect($vendDet);
    }
    /**
     *
     * get cabletv
     *
     */
    public function getCableTV(string $tv)
    {
        return $this->billServices->getCableTV($tv);
    }
    /**
     *
     * verify cabletv
     *
     */
    public function verifyCable(string $type, int $iuc)
    {
        return $this->billServices->verifyCable($type, $iuc);
    }
    /**
     *
     * buy cable sub
     *
     */
    public function buyCableTV(array $buyCable)
    {
        return $this->billServices->buyCable($buyCable);
    }
    /**
     *
     * get bank lists
     *
     */
    public function getBankList()
    {
        return $this->billServices->getBankList();
    }
 }
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
use Oneapp\Oneapp\Controls\PaymentServices;

class Oneapp
 {
    private $billServices;
    private $paymentServices;
    
    public function __construct()
    {
        $this->billServices = new BillServices();
        $this->paymentServices = new PaymentServices();
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

    /**
     *
     * initialize transaction
     *
     */
    public function initTrans(array $trans)
    {
        return $this->paymentServices->initializeTransaction($trans);
    }

    /**
     * Verify Transaction
     */

    public function verifyTrans(string $reference)
    {
        return $this->paymentServices->verifyTransaction($reference);
    }

    /**
     * Get Transaction list
     * 
     */
    public function transList()
    {
        return $this->paymentServices->transactionList();
    }

    /**
     * Get Transaction
     * @param string $reference
     * 
     */

    public function getTrans(string $reference)
    {
        return $this->paymentServices->getTransaction($reference);
    }

    /**
     * Get customer list
     * 
     */

    public function getCusts()
    {
        return $this->paymentServices->getCustomer();
    }

    /**
     * Get payout lists
     */
    public function payouts()
    {
        return $this->paymentServices->getPayouts();
    }

    /**
     * Get payout transactions
     * @param string $reference
     */
    public function getPayoutTrans(string $reference)
    {
        return $this->paymentServices->getPayoutTrans($reference);
    }

    /**
     * Get disputes
     */
    public function disputes()
    {
        return $this->paymentServices->getDisputes();
    }

    /**
     * accept dispute
     */
    public function acceptDispute()
    {
        return $this->paymentServices->acceptDispute();
    }

    /**
     * decline dispute
     *
     */
    public function rejectDispute()
    {
        return $this->paymentServices->declineDispute();
    }
    /**
     * create wallet
     * @param array $details
     */
    public function createWallet(array $details)
    {
        return $this->paymentServices->createWallet($details);
    }
 }
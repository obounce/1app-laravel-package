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
     * @param array $moneypayload
     *
     */
    public function sendMoney(array $moneypayload)
    {
        return $this->billServices->sendMoney($moneypayload);
    }

    /**
     *
     * Get Data Plan
     * @param string $ntwk
     *
     */
    public function dataPlans($ntwk)
    {
        return $this->billServices->dataPlans($ntwk);
    }
    /**
     *
     * databundle
     * @param array $dataB
     *
     */
    public function dataBundle(array $dataB)
    {
        return $this->billServices->dataBundle($dataB);
    }
    /**
     *
     * airtime
     * @param array $phoneDet
     *
     */
    public function airtime(array $phoneDet)
    {
        return $this->billServices->airtime($phoneDet);
    }
    /**
     *
     * verify electricity
     * @param array $electDet
     *
     */
    public function verifyElectricity(array $electDet)
    {
        return $this->billServices->verifyElect($electDet);
    }
    /**
     *
     * vend electricity
     * @param array $vendDet
     *
     */
    public function vendElect(array $vendDet)
    {
        return $this->billServices->vendElect($vendDet);
    }
    /**
     *
     * get cabletv
     * @param string $tv
     *
     */
    public function getCableTV(string $tv)
    {
        return $this->billServices->getCableTV($tv);
    }
    /**
     *
     * verify cabletv
     * @param string $type, int $iuc
     *
     */
    public function verifyCable(string $type, int $iuc)
    {
        return $this->billServices->verifyCable($type, $iuc);
    }
    /**
     *
     * buy cable sub
     * @param array $buyCable
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
     * get bank lists
     *
     */
    public function verNumber($acctno, $bankcode)
    {
        return $this->billServices->verifyAccount($acctno, $bankcode);
    }


    /**
     *
     * initialize transaction
     * @param array $trans
     *
     */
    public function initTrans(array $trans)
    {
        return $this->paymentServices->initializeTransaction($trans);
    }

    /**
     * Verify Transaction
     * @param array $reference
     */

    public function verifyTrans(array $reference)
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
     * @param array $accept
     *
     */
    public function acceptDispute(array $accept)
    {
        return $this->paymentServices->acceptDispute($accept);
    }

    /**
     * decline dispute
     * @param array $decline
     */
    public function rejectDispute(array $decline)
    {
        return $this->paymentServices->declineDispute($decline);
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
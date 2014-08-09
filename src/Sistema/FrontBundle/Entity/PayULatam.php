<?php

namespace Sistema\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PayULatam
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Sistema\FrontBundle\Entity\PayULatamRepository")
 */
class PayULatam
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="merchantId", type="string", length=255)
     */
    private $merchantId;

    /**
     * @var string
     *
     * @ORM\Column(name="accountId", type="string", length=255)
     */
    private $accountId;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="referenceCode", type="string", length=255)
     */
    private $referenceCode;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="string", length=255)
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="tax", type="string", length=255)
     */
    private $tax;

    /**
     * @var string
     *
     * @ORM\Column(name="taxReturnBase", type="string", length=255)
     */
    private $taxReturnBase;

    /**
     * @var string
     *
     * @ORM\Column(name="shipmentValue", type="string", length=255)
     */
    private $shipmentValue;

    /**
     * @var string
     *
     * @ORM\Column(name="currency", type="string", length=255)
     */
    private $currency;

    /**
     * @var string
     *
     * @ORM\Column(name="lng", type="string", length=255)
     */
    private $lng;

    /**
     * @var string
     *
     * @ORM\Column(name="sourceUrl", type="string", length=255)
     */
    private $sourceUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="signature", type="string", length=255)
     */
    private $signature;

    /** 
     * @var string
     *
     */
    private $responseUrl; 

    /**
     * @var string
     *
     */
    private $urlOrigen;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set merchantId
     *
     * @param string $merchantId
     * @return PayULatam
     */
    public function setMerchantId($merchantId)
    {
        $this->merchantId = $merchantId;

        return $this;
    }

    /**
     * Get merchantId
     *
     * @return string 
     */
    public function getMerchantId()
    {
        return $this->merchantId;
    }

    /**
     * Set accountId
     *
     * @param string $accountId
     * @return PayULatam
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;

        return $this;
    }

    /**
     * Get accountId
     *
     * @return string 
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return PayULatam
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set referenceCode
     *
     * @param string $referenceCode
     * @return PayULatam
     */
    public function setReferenceCode($referenceCode)
    {
        $this->referenceCode = $referenceCode;

        return $this;
    }

    /**
     * Get referenceCode
     *
     * @return string 
     */
    public function getReferenceCode()
    {
        return $this->referenceCode;
    }

    /**
     * Set amount
     *
     * @param string $amount
     * @return PayULatam
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return string 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set tax
     *
     * @param string $tax
     * @return PayULatam
     */
    public function setTax($tax)
    {
        $this->tax = $tax;

        return $this;
    }

    /**
     * Get tax
     *
     * @return string 
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * Set taxReturnBase
     *
     * @param string $taxReturnBase
     * @return PayULatam
     */
    public function setTaxReturnBase($taxReturnBase)
    {
        $this->taxReturnBase = $taxReturnBase;

        return $this;
    }

    /**
     * Get taxReturnBase
     *
     * @return string 
     */
    public function getTaxReturnBase()
    {
        return $this->taxReturnBase;
    }

    /**
     * Set shipmentValue
     *
     * @param string $shipmentValue
     * @return PayULatam
     */
    public function setShipmentValue($shipmentValue)
    {
        $this->shipmentValue = $shipmentValue;

        return $this;
    }

    /**
     * Get shipmentValue
     *
     * @return string 
     */
    public function getShipmentValue()
    {
        return $this->shipmentValue;
    }

    /**
     * Set currency
     *
     * @param string $currency
     * @return PayULatam
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get currency
     *
     * @return string 
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set lng
     *
     * @param string $lng
     * @return PayULatam
     */
    public function setLng($lng)
    {
        $this->lng = $lng;

        return $this;
    }

    /**
     * Get lng
     *
     * @return string 
     */
    public function getLng()
    {
        return $this->lng;
    }

    /**
     * Set sourceUrl
     *
     * @param string $sourceUrl
     * @return PayULatam
     */
    public function setSourceUrl($sourceUrl)
    {
        $this->sourceUrl = $sourceUrl;

        return $this;
    }

    /**
     * Get sourceUrl
     *
     * @return string 
     */
    public function getSourceUrl()
    {
        return $this->sourceUrl;
    }

    /**
     * Set buttonType
     *
     * @param string $buttonType
     * @return PayULatam
     */
    public function setButtonType($buttonType)
    {
        $this->buttonType = $buttonType;

        return $this;
    }

    /**
     * Get buttonType
     *
     * @return string 
     */
    public function getButtonType()
    {
        return $this->buttonType;
    }

    /**
     * Set signature
     *
     * @param string $signature
     * @return PayULatam
     */
    public function setSignature($signature)
    {
        $this->signature = $signature;

        return $this;
    }

    /**
     * Get signature
     *
     * @return string 
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
    * Generate Random String 
    *
    * @param integer $length length of random string
    *    
    * @return $randomString
    */
    public function generateRandomString($length = 5)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $randomString;
    }

    /**
     * Set responseUrl
     *
     * @param string $responseUrl
     * @return PayULatam
     */
    public function setResponseUrl($responseUrl)
    {
        $this->responseUrl = $responseUrl;

        return $this;
    }

    /**
     * Get responseUrl
     *
     * @return string 
     */
    public function getResponseUrl()
    {
        return $this->responseUrl;
    }

    /**
     * Set urlOrigen
     *
     * @param string $urlOrigen
     * @return PayULatam
     */
    public function setUrlOrigen($urlOrigen)
    {
        $this->urlOrigen = $urlOrigen;

        return $this;
    }

    /**
     * Get urlOrigen
     *
     * @return string 
     */
    public function getUrlOrigen()
    {
        return $this->urlOrigen;
    }
}

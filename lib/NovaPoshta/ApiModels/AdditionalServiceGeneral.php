<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 16.04.18
 * Time: 14:27
 */

namespace NovaPoshta\ApiModels;


use NovaPoshta\Core\ApiModel;
use NovaPoshta\MethodParameters\MethodParameters;
use stdClass;

/**
 * AdditionalServiceGeneral -  Модель для переадресации отправлений
 *
 * @property string Number
 * @property string OrderType
 * @property int IntDocNumber
 * @property string Customer
 * @property string ServiceType
 * @property string RecipientSettlement
 * @property string RecipientSettlementStreet
 * @property string BuildingNumber
 * @property string NoteAddressRecipient
 * @property string RecipientWarehouse
 * @property string Recipient
 * @property string RecipientContactName
 * @property string RecipientPhone
 * @property string PayerType
 * @property string PaymentMethod
 * @property string Note
 * @property string Ref
 *
 * Class AdditionalServiceGeneral
 * @package NovaPoshta\ApiModels
 */
class AdditionalServiceGeneral extends  ApiModel
{
    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->Number;
    }

    /**
     * @param string $Number
     */
    public function setNumber($Number)
    {
        $this->Number = $Number;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrderType()
    {
        return $this->OrderType;
    }

    /**
     * @param string $OrderType
     */
    public function setOrderType($OrderType)
    {
        $this->OrderType = $OrderType;

        return $this;
    }

    /**
     * @return int
     */
    public function getIntDocNumber()
    {
        return $this->IntDocNumber;
    }

    /**
     * @param int $IntDocNumber
     */
    public function setIntDocNumber($IntDocNumber)
    {
        $this->IntDocNumber = $IntDocNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomer()
    {
        return $this->Customer;
    }

    /**
     * @param string $Customer
     */
    public function setCustomer($Customer)
    {
        $this->Customer = $Customer;

        return $this;
    }

    /**
     * @return string
     */
    public function getServiceType()
    {
        return $this->ServiceType;
    }

    /**
     * @param string $ServiceType
     */
    public function setServiceType($ServiceType)
    {
        $this->ServiceType = $ServiceType;

        return $this;
    }

    /**
     * @return string
     */
    public function getRecipientSettlement()
    {
        return $this->RecipientSettlement;
    }

    /**
     * @param string $RecipientSettlement
     */
    public function setRecipientSettlement($RecipientSettlement)
    {
        $this->RecipientSettlement = $RecipientSettlement;

        return $this;
    }

    /**
     * @return string
     */
    public function getRecipientSettlementStreet()
    {
        return $this->RecipientSettlementStreet;
    }

    /**
     * @param string $RecipientSettlementStreet
     */
    public function setRecipientSettlementStreet($RecipientSettlementStreet)
    {
        $this->RecipientSettlementStreet = $RecipientSettlementStreet;

        return $this;
    }

    /**
     * @return string
     */
    public function getBuildingNumber()
    {
        return $this->BuildingNumber;
    }

    /**
     * @param string $BuildingNumber
     */
    public function setBuildingNumber($BuildingNumber)
    {
        $this->BuildingNumber = $BuildingNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getNoteAddressRecipient()
    {
        return $this->NoteAddressRecipient;
    }

    /**
     * @param string $NoteAddressRecipient
     */
    public function setNoteAddressRecipient($NoteAddressRecipient)
    {
        $this->NoteAddressRecipient = $NoteAddressRecipient;

        return $this;
    }

    /**
     * @return string
     */
    public function getRecipientWarehouse()
    {
        return $this->RecipientWarehouse;
    }

    /**
     * @param string $RecipientWarehouse
     */
    public function setRecipientWarehouse($RecipientWarehouse)
    {
        $this->RecipientWarehouse = $RecipientWarehouse;

        return $this;
    }

    /**
     * @return string
     */
    public function getRecipient()
    {
        return $this->Recipient;
    }

    /**
     * @param string $Recipient
     */
    public function setRecipient($Recipient)
    {
        $this->Recipient = $Recipient;

        return $this;
    }

    /**
     * @return string
     */
    public function getRecipientContactName()
    {
        return $this->RecipientContactName;
    }

    /**
     * @param string $RecipientContactName
     */
    public function setRecipientContactName($RecipientContactName)
    {
        $this->RecipientContactName = $RecipientContactName;

        return $this;
    }

    /**
     * @return string
     */
    public function getRecipientPhone()
    {
        return $this->RecipientPhone;
    }

    /**
     * @param string $RecipientPhone
     */
    public function setRecipientPhone($RecipientPhone)
    {
        $this->RecipientPhone = $RecipientPhone;

        return $this;
    }

    /**
     * @return string
     */
    public function getPayerType()
    {
        return $this->PayerType;
    }

    /**
     * @param string $PayerType
     */
    public function setPayerType($PayerType)
    {
        $this->PayerType = $PayerType;

        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->PaymentMethod;
    }

    /**
     * @param string $PaymentMethod
     */
    public function setPaymentMethod($PaymentMethod)
    {
        $this->PaymentMethod = $PaymentMethod;

        return $this;
    }

    /**
     * @return string
     */
    public function getNote()
    {
        return $this->Note;
    }

    /**
     * @param string $Note
     */
    public function setNote($Note)
    {
        $this->Note = $Note;

        return $this;
    }

    /**
     * @return string
     */
    public function getRef()
    {
        return $this->Ref;
    }

    /**
     * @param string $Ref
     */
    public function setRef($Ref)
    {
        $this->Ref = $Ref;

        return $this;
    }

    public function checkPossibilityForRedirecting(){
        return self::sendData(__FUNCTION__, $this->getData());
    }

    public function save(){
        return self::sendData(__FUNCTION__, $this->getData());
    }

    private function getData()
    {
        $data = new stdClass();

        foreach ($this as $key => $attr) {
           if (isset($this->{$key})) {
                $data->{$key} = $attr;
            }
        }

        return $data;
    }

}
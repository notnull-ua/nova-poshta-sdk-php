<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12.02.2015
 * Time: 22:00
 */

include_once "../NovaPoshta/autoload.php";

use NovaPoshta\ApiModels\AddressExpanded;
use NovaPoshta\DataMethods\AddressExpanded_getSettlements;
use NovaPoshta\DataMethods\AddressExpanded_getCountryRegions;
use NovaPoshta\DataMethods\AddressExpanded_getSettlementStreets;

class AddressExpanded_example
{
    static public function getCountryRegions()
    {
        $data = new AddressExpanded_getCountryRegions();
        $data->setParent('dcaadf02-4b33-11e4-ab6d-005056801329');

        return AddressExpanded::getCountryRegions();
    }

    static public function getSettlements()
    {
        $data = new AddressExpanded_getSettlements();
        $data->setCountryRegion('dcaad3d6-4b33-11e4-ab6d-005056801329');

        return AddressExpanded::getSettlements($data);
    }

    static public function getSettlementStreets()
    {
        $data = new AddressExpanded_getSettlementStreets();
        $data->setSettlement('04324fde-4d5f-11e4-ab6d-005056801329');

        return AddressExpanded::getSettlementStreets($data);
    }
}


$result = AddressExpanded_example::getCountryRegions();

var_dump($result);
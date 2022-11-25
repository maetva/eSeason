<?php

declare(strict_types=1);

namespace Maetva\ESeason\PrivateServices;

/**
 * Class which returns the class map definition
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get(): array
    {
        return [
            'CampsiteStatus' => '\\Maetva\\ESeason\\PrivateServices\\StructType\\CampsiteStatus',
            'SearchPlace' => '\\Maetva\\ESeason\\PrivateServices\\StructType\\SearchPlace',
            'IdProduct' => '\\Maetva\\ESeason\\PrivateServices\\StructType\\IdProduct',
            'CategoTariff' => '\\Maetva\\ESeason\\PrivateServices\\StructType\\CategoTariff',
            'ExternalCriterion' => '\\Maetva\\ESeason\\PrivateServices\\StructType\\ExternalCriterion',
            'SpecificParam' => '\\Maetva\\ESeason\\PrivateServices\\StructType\\SpecificParam',
            'Stay' => '\\Maetva\\ESeason\\PrivateServices\\StructType\\Stay',
            'IdStay' => '\\Maetva\\ESeason\\PrivateServices\\StructType\\IdStay',
            'IdTariffProduct' => '\\Maetva\\ESeason\\PrivateServices\\StructType\\IdTariffProduct',
            'PromoInfo' => '\\Maetva\\ESeason\\PrivateServices\\StructType\\PromoInfo',
            'Promo' => '\\Maetva\\ESeason\\PrivateServices\\StructType\\Promo',
            'RequestCpgSiteAvailability' => '\\Maetva\\ESeason\\PrivateServices\\StructType\\RequestCpgSiteAvailability',
            'ResponseCpgSiteAvailability' => '\\Maetva\\ESeason\\PrivateServices\\StructType\\ResponseCpgSiteAvailability',
            'RequestCpgBoolSiteAvailability' => '\\Maetva\\ESeason\\PrivateServices\\StructType\\RequestCpgBoolSiteAvailability',
            'ResponseCpgBoolSiteAvailability' => '\\Maetva\\ESeason\\PrivateServices\\StructType\\ResponseCpgBoolSiteAvailability',
            'RequestCpgCategAvailability' => '\\Maetva\\ESeason\\PrivateServices\\StructType\\RequestCpgCategAvailability',
            'ResponseCpgCategAvailability' => '\\Maetva\\ESeason\\PrivateServices\\StructType\\ResponseCpgCategAvailability',
            'RequestCheckStay' => '\\Maetva\\ESeason\\PrivateServices\\StructType\\RequestCheckStay',
            'ResponseCheckStay' => '\\Maetva\\ESeason\\PrivateServices\\StructType\\ResponseCheckStay',
            'RequestListCategoTariff' => '\\Maetva\\ESeason\\PrivateServices\\StructType\\RequestListCategoTariff',
            'ResponseListCategoTariff' => '\\Maetva\\ESeason\\PrivateServices\\StructType\\ResponseListCategoTariff',
            'RequestListTariff' => '\\Maetva\\ESeason\\PrivateServices\\StructType\\RequestListTariff',
            'ResponseListTariff' => '\\Maetva\\ESeason\\PrivateServices\\StructType\\ResponseListTariff',
        ];
    }
}

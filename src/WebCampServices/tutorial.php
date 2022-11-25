<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = [
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://beta.webcamp.fr/WebCampServices/?wsdl',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * ];
 * etc...
 * ################################################################################
 * Don't forget to add wsdltophp/packagebase:~5.0 to your main composer.json.
 * ################################################################################
 */
/**
 * Minimal options
 */
$options = [
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://beta.webcamp.fr/WebCampServices/?wsdl',
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Maetva\ESeason\WebCampServices\ClassMap::get(),
];
/**
 * Samples for Service ServiceType
 */
$service = new \Maetva\ESeason\WebCampServices\ServiceType\Service($options);
/**
 * Sample call for cpg_Availability operation/method
 */
if ($service->cpg_Availability(new \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailability()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for cpg_AvailabilityNoPrice operation/method
 */
if ($service->cpg_AvailabilityNoPrice(new \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailabilityNoPrice()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for cpg_AvailableCEStock operation/method
 */
if ($service->cpg_AvailableCEStock(new \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailableCEStock()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for cpg_SimpleSearch operation/method
 */
if ($service->cpg_SimpleSearch(new \Maetva\ESeason\WebCampServices\StructType\RequestCpgSimpleSearch()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for cpg_BoolAvailability operation/method
 */
if ($service->cpg_BoolAvailability(new \Maetva\ESeason\WebCampServices\StructType\RequestCpgBoolAvailability()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for cpg_BoolCategAvailability operation/method
 */
if ($service->cpg_BoolCategAvailability(new \Maetva\ESeason\WebCampServices\StructType\RequestCpgBoolCategAvailability()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for cpg_Context operation/method
 */
if ($service->cpg_Context(new \Maetva\ESeason\WebCampServices\StructType\RequestCpgContext()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for cpg_Order operation/method
 */
if ($service->cpg_Order(new \Maetva\ESeason\WebCampServices\StructType\RequestCpgOrder()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for cpg_MultiOrder operation/method
 */
if ($service->cpg_MultiOrder(new \Maetva\ESeason\WebCampServices\StructType\RequestCpgMultiOrder()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for cpg_OrderStatus operation/method
 */
if ($service->cpg_OrderStatus(new \Maetva\ESeason\WebCampServices\StructType\RequestCpgOrderStatus()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for cpg_ChangeOrder operation/method
 */
if ($service->cpg_ChangeOrder(new \Maetva\ESeason\WebCampServices\StructType\RequestCpgChangeOrder()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for cpg_Payment operation/method
 */
if ($service->cpg_Payment(new \Maetva\ESeason\WebCampServices\StructType\RequestCpgPayment()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for cpg_MultiPayment operation/method
 */
if ($service->cpg_MultiPayment(new \Maetva\ESeason\WebCampServices\StructType\RequestCpgMultiPayment()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for cpg_PaymentStatus operation/method
 */
if ($service->cpg_PaymentStatus(new \Maetva\ESeason\WebCampServices\StructType\RequestCpgPaymentStatus()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for cpg_Price operation/method
 */
if ($service->cpg_Price(new \Maetva\ESeason\WebCampServices\StructType\RequestCpgPrice()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for cpg_UnitPrice operation/method
 */
if ($service->cpg_UnitPrice(new \Maetva\ESeason\WebCampServices\StructType\RequestCpgUnitPrice()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for cpg_PlaceList operation/method
 */
if ($service->cpg_PlaceList(new \Maetva\ESeason\WebCampServices\StructType\RequestCpgPlaceList()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for cpg_Favorites operation/method
 */
if ($service->cpg_Favorites(new \Maetva\ESeason\WebCampServices\StructType\RequestCpgFavorites()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for cpg_GetIdOrder operation/method
 */
if ($service->cpg_GetIdOrder(new \Maetva\ESeason\WebCampServices\StructType\RequestCpgGetIdOrder()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for cpg_ChangeOrderPrice operation/method
 */
if ($service->cpg_ChangeOrderPrice(new \Maetva\ESeason\WebCampServices\StructType\RequestCpgChangeOrderPrice()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for cpg_Cancel operation/method
 */
if ($service->cpg_Cancel(new \Maetva\ESeason\WebCampServices\StructType\RequestCpgCancel()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for cpg_ConfirmOrCancelOrder operation/method
 */
if ($service->cpg_ConfirmOrCancelOrder(new \Maetva\ESeason\WebCampServices\StructType\RequestCpgConfirmOrCancelOrder()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for cpg_DayStock operation/method
 */
if ($service->cpg_DayStock(new \Maetva\ESeason\WebCampServices\StructType\RequestCpgDayStock()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for cpg_CheckStay operation/method
 */
if ($service->cpg_CheckStay(new \Maetva\ESeason\WebCampServices\StructType\RequestCpgCheckStay()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for cpg_CancelInsurances operation/method
 */
if ($service->cpg_CancelInsurances(new \Maetva\ESeason\WebCampServices\StructType\RequestCpgCancelInsurances()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for cpg_GetSupplementsForOneStay operation/method
 */
if ($service->cpg_GetSupplementsForOneStay(new \Maetva\ESeason\WebCampServices\StructType\RequestCpgGetSupplementsForOneStay()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for cpg_ArrivalDate operation/method
 */
if ($service->cpg_ArrivalDate(new \Maetva\ESeason\WebCampServices\StructType\RequestCpgArrivalDate()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}

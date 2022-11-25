<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = [
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://beta.webcamp.fr/PrivateServices/?wsdl',
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
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://beta.webcamp.fr/PrivateServices/?wsdl',
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Maetva\ESeason\PrivateServices\ClassMap::get(),
];
/**
 * Samples for Service ServiceType
 */
$service = new \Maetva\ESeason\PrivateServices\ServiceType\Service($options);
/**
 * Sample call for cpg_SiteAvailability operation/method
 */
if ($service->cpg_SiteAvailability(new \Maetva\ESeason\PrivateServices\StructType\RequestCpgSiteAvailability()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for cpg_CategAvailability operation/method
 */
if ($service->cpg_CategAvailability(new \Maetva\ESeason\PrivateServices\StructType\RequestCpgCategAvailability()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for checkStay operation/method
 */
if ($service->checkStay(new \Maetva\ESeason\PrivateServices\StructType\RequestCheckStay()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for listCategoTariff operation/method
 */
if ($service->listCategoTariff(new \Maetva\ESeason\PrivateServices\StructType\RequestListCategoTariff()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for listTariff operation/method
 */
if ($service->listTariff(new \Maetva\ESeason\PrivateServices\StructType\RequestListTariff()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for cpg_BoolSiteAvailability operation/method
 */
if ($service->cpg_BoolSiteAvailability(new \Maetva\ESeason\PrivateServices\StructType\RequestCpgBoolSiteAvailability()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}

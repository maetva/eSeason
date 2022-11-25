<?php

declare(strict_types=1);

namespace Maetva\ESeason\PrivateServices\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for all operations
 * @subpackage Services
 */
class Service extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named cpg_SiteAvailability
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maetva\ESeason\PrivateServices\StructType\RequestCpgSiteAvailability $requestCpgSiteAvailability_1
     * @return \Maetva\ESeason\PrivateServices\StructType\ResponseCpgSiteAvailability|bool
     */
    public function cpg_SiteAvailability(\Maetva\ESeason\PrivateServices\StructType\RequestCpgSiteAvailability $requestCpgSiteAvailability_1)
    {
        try {
            $this->setResult($resultCpg_SiteAvailability = $this->getSoapClient()->__soapCall('cpg_SiteAvailability', [
                $requestCpgSiteAvailability_1,
            ], [], [], $this->outputHeaders));
        
            return $resultCpg_SiteAvailability;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named cpg_CategAvailability
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maetva\ESeason\PrivateServices\StructType\RequestCpgCategAvailability $requestCpgCategAvailability_1
     * @return \Maetva\ESeason\PrivateServices\StructType\ResponseCpgCategAvailability|bool
     */
    public function cpg_CategAvailability(\Maetva\ESeason\PrivateServices\StructType\RequestCpgCategAvailability $requestCpgCategAvailability_1)
    {
        try {
            $this->setResult($resultCpg_CategAvailability = $this->getSoapClient()->__soapCall('cpg_CategAvailability', [
                $requestCpgCategAvailability_1,
            ], [], [], $this->outputHeaders));
        
            return $resultCpg_CategAvailability;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named checkStay
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maetva\ESeason\PrivateServices\StructType\RequestCheckStay $requestCheckStay_1
     * @return \Maetva\ESeason\PrivateServices\StructType\ResponseCheckStay|bool
     */
    public function checkStay(\Maetva\ESeason\PrivateServices\StructType\RequestCheckStay $requestCheckStay_1)
    {
        try {
            $this->setResult($resultCheckStay = $this->getSoapClient()->__soapCall('checkStay', [
                $requestCheckStay_1,
            ], [], [], $this->outputHeaders));
        
            return $resultCheckStay;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named listCategoTariff
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maetva\ESeason\PrivateServices\StructType\RequestListCategoTariff $requestListCategoTariff_1
     * @return \Maetva\ESeason\PrivateServices\StructType\ResponseListCategoTariff|bool
     */
    public function listCategoTariff(\Maetva\ESeason\PrivateServices\StructType\RequestListCategoTariff $requestListCategoTariff_1)
    {
        try {
            $this->setResult($resultListCategoTariff = $this->getSoapClient()->__soapCall('listCategoTariff', [
                $requestListCategoTariff_1,
            ], [], [], $this->outputHeaders));
        
            return $resultListCategoTariff;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named listTariff
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maetva\ESeason\PrivateServices\StructType\RequestListTariff $requestListTariff_1
     * @return \Maetva\ESeason\PrivateServices\StructType\ResponseListTariff|bool
     */
    public function listTariff(\Maetva\ESeason\PrivateServices\StructType\RequestListTariff $requestListTariff_1)
    {
        try {
            $this->setResult($resultListTariff = $this->getSoapClient()->__soapCall('listTariff', [
                $requestListTariff_1,
            ], [], [], $this->outputHeaders));
        
            return $resultListTariff;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named cpg_BoolSiteAvailability
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maetva\ESeason\PrivateServices\StructType\RequestCpgBoolSiteAvailability $requestCpgBoolSiteAvailability_1
     * @return \Maetva\ESeason\PrivateServices\StructType\ResponseCpgBoolSiteAvailability|bool
     */
    public function cpg_BoolSiteAvailability(\Maetva\ESeason\PrivateServices\StructType\RequestCpgBoolSiteAvailability $requestCpgBoolSiteAvailability_1)
    {
        try {
            $this->setResult($resultCpg_BoolSiteAvailability = $this->getSoapClient()->__soapCall('cpg_BoolSiteAvailability', [
                $requestCpgBoolSiteAvailability_1,
            ], [], [], $this->outputHeaders));
        
            return $resultCpg_BoolSiteAvailability;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Maetva\ESeason\PrivateServices\StructType\ResponseCheckStay|\Maetva\ESeason\PrivateServices\StructType\ResponseCpgBoolSiteAvailability|\Maetva\ESeason\PrivateServices\StructType\ResponseCpgCategAvailability|\Maetva\ESeason\PrivateServices\StructType\ResponseCpgSiteAvailability|\Maetva\ESeason\PrivateServices\StructType\ResponseListCategoTariff|\Maetva\ESeason\PrivateServices\StructType\ResponseListTariff
     */
    public function getResult()
    {
        return parent::getResult();
    }
}

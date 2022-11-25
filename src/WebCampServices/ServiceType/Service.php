<?php

declare(strict_types=1);

namespace Maetva\ESeason\WebCampServices\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for all operations
 * @subpackage Services
 */
class Service extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named cpg_Availability
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailability $requestCpgAvailability_1
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgAvailability|bool
     */
    public function cpg_Availability(\Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailability $requestCpgAvailability_1)
    {
        try {
            $this->setResult($resultCpg_Availability = $this->getSoapClient()->__soapCall('cpg_Availability', [
                $requestCpgAvailability_1,
            ], [], [], $this->outputHeaders));
        
            return $resultCpg_Availability;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named cpg_AvailabilityNoPrice
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailabilityNoPrice $requestCpgAvailabilityNoPrice_1
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgAvailability|bool
     */
    public function cpg_AvailabilityNoPrice(\Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailabilityNoPrice $requestCpgAvailabilityNoPrice_1)
    {
        try {
            $this->setResult($resultCpg_AvailabilityNoPrice = $this->getSoapClient()->__soapCall('cpg_AvailabilityNoPrice', [
                $requestCpgAvailabilityNoPrice_1,
            ], [], [], $this->outputHeaders));
        
            return $resultCpg_AvailabilityNoPrice;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named cpg_AvailableCEStock
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailableCEStock $requestCpgAvailableCEStock_1
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgAvailableCEStock|bool
     */
    public function cpg_AvailableCEStock(\Maetva\ESeason\WebCampServices\StructType\RequestCpgAvailableCEStock $requestCpgAvailableCEStock_1)
    {
        try {
            $this->setResult($resultCpg_AvailableCEStock = $this->getSoapClient()->__soapCall('cpg_AvailableCEStock', [
                $requestCpgAvailableCEStock_1,
            ], [], [], $this->outputHeaders));
        
            return $resultCpg_AvailableCEStock;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named cpg_SimpleSearch
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maetva\ESeason\WebCampServices\StructType\RequestCpgSimpleSearch $requestCpgSimpleSearch_1
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgSimpleSearch|bool
     */
    public function cpg_SimpleSearch(\Maetva\ESeason\WebCampServices\StructType\RequestCpgSimpleSearch $requestCpgSimpleSearch_1)
    {
        try {
            $this->setResult($resultCpg_SimpleSearch = $this->getSoapClient()->__soapCall('cpg_SimpleSearch', [
                $requestCpgSimpleSearch_1,
            ], [], [], $this->outputHeaders));
        
            return $resultCpg_SimpleSearch;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named cpg_BoolAvailability
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maetva\ESeason\WebCampServices\StructType\RequestCpgBoolAvailability $requestCpgBoolAvailability_1
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgBoolAvailability|bool
     */
    public function cpg_BoolAvailability(\Maetva\ESeason\WebCampServices\StructType\RequestCpgBoolAvailability $requestCpgBoolAvailability_1)
    {
        try {
            $this->setResult($resultCpg_BoolAvailability = $this->getSoapClient()->__soapCall('cpg_BoolAvailability', [
                $requestCpgBoolAvailability_1,
            ], [], [], $this->outputHeaders));
        
            return $resultCpg_BoolAvailability;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named cpg_BoolCategAvailability
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maetva\ESeason\WebCampServices\StructType\RequestCpgBoolCategAvailability $requestCpgBoolCategAvailability_1
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgBoolCategAvailability|bool
     */
    public function cpg_BoolCategAvailability(\Maetva\ESeason\WebCampServices\StructType\RequestCpgBoolCategAvailability $requestCpgBoolCategAvailability_1)
    {
        try {
            $this->setResult($resultCpg_BoolCategAvailability = $this->getSoapClient()->__soapCall('cpg_BoolCategAvailability', [
                $requestCpgBoolCategAvailability_1,
            ], [], [], $this->outputHeaders));
        
            return $resultCpg_BoolCategAvailability;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named cpg_Context
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maetva\ESeason\WebCampServices\StructType\RequestCpgContext $requestCpgContext_1
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgContext|bool
     */
    public function cpg_Context(\Maetva\ESeason\WebCampServices\StructType\RequestCpgContext $requestCpgContext_1)
    {
        try {
            $this->setResult($resultCpg_Context = $this->getSoapClient()->__soapCall('cpg_Context', [
                $requestCpgContext_1,
            ], [], [], $this->outputHeaders));
        
            return $resultCpg_Context;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named cpg_Order
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maetva\ESeason\WebCampServices\StructType\RequestCpgOrder $requestCpgOrder_1
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgOrder|bool
     */
    public function cpg_Order(\Maetva\ESeason\WebCampServices\StructType\RequestCpgOrder $requestCpgOrder_1)
    {
        try {
            $this->setResult($resultCpg_Order = $this->getSoapClient()->__soapCall('cpg_Order', [
                $requestCpgOrder_1,
            ], [], [], $this->outputHeaders));
        
            return $resultCpg_Order;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named cpg_MultiOrder
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maetva\ESeason\WebCampServices\StructType\RequestCpgMultiOrder $requestCpgMultiOrder_1
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgMultiOrder|bool
     */
    public function cpg_MultiOrder(\Maetva\ESeason\WebCampServices\StructType\RequestCpgMultiOrder $requestCpgMultiOrder_1)
    {
        try {
            $this->setResult($resultCpg_MultiOrder = $this->getSoapClient()->__soapCall('cpg_MultiOrder', [
                $requestCpgMultiOrder_1,
            ], [], [], $this->outputHeaders));
        
            return $resultCpg_MultiOrder;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named cpg_OrderStatus
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maetva\ESeason\WebCampServices\StructType\RequestCpgOrderStatus $requestCpgOrderStatus_1
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgOrderStatus|bool
     */
    public function cpg_OrderStatus(\Maetva\ESeason\WebCampServices\StructType\RequestCpgOrderStatus $requestCpgOrderStatus_1)
    {
        try {
            $this->setResult($resultCpg_OrderStatus = $this->getSoapClient()->__soapCall('cpg_OrderStatus', [
                $requestCpgOrderStatus_1,
            ], [], [], $this->outputHeaders));
        
            return $resultCpg_OrderStatus;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named cpg_ChangeOrder
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maetva\ESeason\WebCampServices\StructType\RequestCpgChangeOrder $requestCpgChangeOrder_1
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgChangeOrder|bool
     */
    public function cpg_ChangeOrder(\Maetva\ESeason\WebCampServices\StructType\RequestCpgChangeOrder $requestCpgChangeOrder_1)
    {
        try {
            $this->setResult($resultCpg_ChangeOrder = $this->getSoapClient()->__soapCall('cpg_ChangeOrder', [
                $requestCpgChangeOrder_1,
            ], [], [], $this->outputHeaders));
        
            return $resultCpg_ChangeOrder;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named cpg_Payment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maetva\ESeason\WebCampServices\StructType\RequestCpgPayment $requestCpgPayment_1
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgPayment|bool
     */
    public function cpg_Payment(\Maetva\ESeason\WebCampServices\StructType\RequestCpgPayment $requestCpgPayment_1)
    {
        try {
            $this->setResult($resultCpg_Payment = $this->getSoapClient()->__soapCall('cpg_Payment', [
                $requestCpgPayment_1,
            ], [], [], $this->outputHeaders));
        
            return $resultCpg_Payment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named cpg_MultiPayment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maetva\ESeason\WebCampServices\StructType\RequestCpgMultiPayment $requestCpgMultiPayment_1
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgMultiPayment|bool
     */
    public function cpg_MultiPayment(\Maetva\ESeason\WebCampServices\StructType\RequestCpgMultiPayment $requestCpgMultiPayment_1)
    {
        try {
            $this->setResult($resultCpg_MultiPayment = $this->getSoapClient()->__soapCall('cpg_MultiPayment', [
                $requestCpgMultiPayment_1,
            ], [], [], $this->outputHeaders));
        
            return $resultCpg_MultiPayment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named cpg_PaymentStatus
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maetva\ESeason\WebCampServices\StructType\RequestCpgPaymentStatus $requestCpgPaymentStatus_1
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgPaymentStatus|bool
     */
    public function cpg_PaymentStatus(\Maetva\ESeason\WebCampServices\StructType\RequestCpgPaymentStatus $requestCpgPaymentStatus_1)
    {
        try {
            $this->setResult($resultCpg_PaymentStatus = $this->getSoapClient()->__soapCall('cpg_PaymentStatus', [
                $requestCpgPaymentStatus_1,
            ], [], [], $this->outputHeaders));
        
            return $resultCpg_PaymentStatus;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named cpg_Price
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maetva\ESeason\WebCampServices\StructType\RequestCpgPrice $requestCpgPrice_1
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgPrice|bool
     */
    public function cpg_Price(\Maetva\ESeason\WebCampServices\StructType\RequestCpgPrice $requestCpgPrice_1)
    {
        try {
            $this->setResult($resultCpg_Price = $this->getSoapClient()->__soapCall('cpg_Price', [
                $requestCpgPrice_1,
            ], [], [], $this->outputHeaders));
        
            return $resultCpg_Price;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named cpg_UnitPrice
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maetva\ESeason\WebCampServices\StructType\RequestCpgUnitPrice $requestCpgUnitPrice_1
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgUnitPrice|bool
     */
    public function cpg_UnitPrice(\Maetva\ESeason\WebCampServices\StructType\RequestCpgUnitPrice $requestCpgUnitPrice_1)
    {
        try {
            $this->setResult($resultCpg_UnitPrice = $this->getSoapClient()->__soapCall('cpg_UnitPrice', [
                $requestCpgUnitPrice_1,
            ], [], [], $this->outputHeaders));
        
            return $resultCpg_UnitPrice;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named cpg_PlaceList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maetva\ESeason\WebCampServices\StructType\RequestCpgPlaceList $requestCpgPlaceList_1
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgPlaceList|bool
     */
    public function cpg_PlaceList(\Maetva\ESeason\WebCampServices\StructType\RequestCpgPlaceList $requestCpgPlaceList_1)
    {
        try {
            $this->setResult($resultCpg_PlaceList = $this->getSoapClient()->__soapCall('cpg_PlaceList', [
                $requestCpgPlaceList_1,
            ], [], [], $this->outputHeaders));
        
            return $resultCpg_PlaceList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named cpg_Favorites
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maetva\ESeason\WebCampServices\StructType\RequestCpgFavorites $requestCpgFavorites_1
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgFavorites|bool
     */
    public function cpg_Favorites(\Maetva\ESeason\WebCampServices\StructType\RequestCpgFavorites $requestCpgFavorites_1)
    {
        try {
            $this->setResult($resultCpg_Favorites = $this->getSoapClient()->__soapCall('cpg_Favorites', [
                $requestCpgFavorites_1,
            ], [], [], $this->outputHeaders));
        
            return $resultCpg_Favorites;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named cpg_GetIdOrder
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maetva\ESeason\WebCampServices\StructType\RequestCpgGetIdOrder $requestCpgGetIdOrder_1
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgGetIdOrder|bool
     */
    public function cpg_GetIdOrder(\Maetva\ESeason\WebCampServices\StructType\RequestCpgGetIdOrder $requestCpgGetIdOrder_1)
    {
        try {
            $this->setResult($resultCpg_GetIdOrder = $this->getSoapClient()->__soapCall('cpg_GetIdOrder', [
                $requestCpgGetIdOrder_1,
            ], [], [], $this->outputHeaders));
        
            return $resultCpg_GetIdOrder;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named cpg_ChangeOrderPrice
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maetva\ESeason\WebCampServices\StructType\RequestCpgChangeOrderPrice $requestCpgChangeOrderPrice_1
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgChangeOrderPrice|bool
     */
    public function cpg_ChangeOrderPrice(\Maetva\ESeason\WebCampServices\StructType\RequestCpgChangeOrderPrice $requestCpgChangeOrderPrice_1)
    {
        try {
            $this->setResult($resultCpg_ChangeOrderPrice = $this->getSoapClient()->__soapCall('cpg_ChangeOrderPrice', [
                $requestCpgChangeOrderPrice_1,
            ], [], [], $this->outputHeaders));
        
            return $resultCpg_ChangeOrderPrice;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named cpg_Cancel
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maetva\ESeason\WebCampServices\StructType\RequestCpgCancel $requestCpgCancel_1
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgCancel|bool
     */
    public function cpg_Cancel(\Maetva\ESeason\WebCampServices\StructType\RequestCpgCancel $requestCpgCancel_1)
    {
        try {
            $this->setResult($resultCpg_Cancel = $this->getSoapClient()->__soapCall('cpg_Cancel', [
                $requestCpgCancel_1,
            ], [], [], $this->outputHeaders));
        
            return $resultCpg_Cancel;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named cpg_ConfirmOrCancelOrder
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maetva\ESeason\WebCampServices\StructType\RequestCpgConfirmOrCancelOrder $requestCpgConfirmOrCancelOrder_1
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgConfirmOrCancelOrder|bool
     */
    public function cpg_ConfirmOrCancelOrder(\Maetva\ESeason\WebCampServices\StructType\RequestCpgConfirmOrCancelOrder $requestCpgConfirmOrCancelOrder_1)
    {
        try {
            $this->setResult($resultCpg_ConfirmOrCancelOrder = $this->getSoapClient()->__soapCall('cpg_ConfirmOrCancelOrder', [
                $requestCpgConfirmOrCancelOrder_1,
            ], [], [], $this->outputHeaders));
        
            return $resultCpg_ConfirmOrCancelOrder;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named cpg_DayStock
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maetva\ESeason\WebCampServices\StructType\RequestCpgDayStock $requestCpgDayStock_1
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgDayStock|bool
     */
    public function cpg_DayStock(\Maetva\ESeason\WebCampServices\StructType\RequestCpgDayStock $requestCpgDayStock_1)
    {
        try {
            $this->setResult($resultCpg_DayStock = $this->getSoapClient()->__soapCall('cpg_DayStock', [
                $requestCpgDayStock_1,
            ], [], [], $this->outputHeaders));
        
            return $resultCpg_DayStock;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named cpg_CheckStay
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maetva\ESeason\WebCampServices\StructType\RequestCpgCheckStay $requestCpgCheckStay_1
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgCheckStay|bool
     */
    public function cpg_CheckStay(\Maetva\ESeason\WebCampServices\StructType\RequestCpgCheckStay $requestCpgCheckStay_1)
    {
        try {
            $this->setResult($resultCpg_CheckStay = $this->getSoapClient()->__soapCall('cpg_CheckStay', [
                $requestCpgCheckStay_1,
            ], [], [], $this->outputHeaders));
        
            return $resultCpg_CheckStay;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named cpg_CancelInsurances
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maetva\ESeason\WebCampServices\StructType\RequestCpgCancelInsurances $requestCpgCancelInsurances_1
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgCancelInsurances|bool
     */
    public function cpg_CancelInsurances(\Maetva\ESeason\WebCampServices\StructType\RequestCpgCancelInsurances $requestCpgCancelInsurances_1)
    {
        try {
            $this->setResult($resultCpg_CancelInsurances = $this->getSoapClient()->__soapCall('cpg_CancelInsurances', [
                $requestCpgCancelInsurances_1,
            ], [], [], $this->outputHeaders));
        
            return $resultCpg_CancelInsurances;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named cpg_GetSupplementsForOneStay
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maetva\ESeason\WebCampServices\StructType\RequestCpgGetSupplementsForOneStay $requestCpgGetSupplementsForOneStay_1
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgGetSupplementsForOneStay|bool
     */
    public function cpg_GetSupplementsForOneStay(\Maetva\ESeason\WebCampServices\StructType\RequestCpgGetSupplementsForOneStay $requestCpgGetSupplementsForOneStay_1)
    {
        try {
            $this->setResult($resultCpg_GetSupplementsForOneStay = $this->getSoapClient()->__soapCall('cpg_GetSupplementsForOneStay', [
                $requestCpgGetSupplementsForOneStay_1,
            ], [], [], $this->outputHeaders));
        
            return $resultCpg_GetSupplementsForOneStay;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named cpg_ArrivalDate
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maetva\ESeason\WebCampServices\StructType\RequestCpgArrivalDate $requestCpgArrivalDate_1
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgArrivalDate|bool
     */
    public function cpg_ArrivalDate(\Maetva\ESeason\WebCampServices\StructType\RequestCpgArrivalDate $requestCpgArrivalDate_1)
    {
        try {
            $this->setResult($resultCpg_ArrivalDate = $this->getSoapClient()->__soapCall('cpg_ArrivalDate', [
                $requestCpgArrivalDate_1,
            ], [], [], $this->outputHeaders));
        
            return $resultCpg_ArrivalDate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Maetva\ESeason\WebCampServices\StructType\ResponseCpgArrivalDate|\Maetva\ESeason\WebCampServices\StructType\ResponseCpgAvailability|\Maetva\ESeason\WebCampServices\StructType\ResponseCpgAvailableCEStock|\Maetva\ESeason\WebCampServices\StructType\ResponseCpgBoolAvailability|\Maetva\ESeason\WebCampServices\StructType\ResponseCpgBoolCategAvailability|\Maetva\ESeason\WebCampServices\StructType\ResponseCpgCancel|\Maetva\ESeason\WebCampServices\StructType\ResponseCpgCancelInsurances|\Maetva\ESeason\WebCampServices\StructType\ResponseCpgChangeOrder|\Maetva\ESeason\WebCampServices\StructType\ResponseCpgChangeOrderPrice|\Maetva\ESeason\WebCampServices\StructType\ResponseCpgCheckStay|\Maetva\ESeason\WebCampServices\StructType\ResponseCpgConfirmOrCancelOrder|\Maetva\ESeason\WebCampServices\StructType\ResponseCpgContext|\Maetva\ESeason\WebCampServices\StructType\ResponseCpgDayStock|\Maetva\ESeason\WebCampServices\StructType\ResponseCpgFavorites|\Maetva\ESeason\WebCampServices\StructType\ResponseCpgGetIdOrder|\Maetva\ESeason\WebCampServices\StructType\ResponseCpgGetSupplementsForOneStay|\Maetva\ESeason\WebCampServices\StructType\ResponseCpgMultiOrder|\Maetva\ESeason\WebCampServices\StructType\ResponseCpgMultiPayment|\Maetva\ESeason\WebCampServices\StructType\ResponseCpgOrder|\Maetva\ESeason\WebCampServices\StructType\ResponseCpgOrderStatus|\Maetva\ESeason\WebCampServices\StructType\ResponseCpgPayment|\Maetva\ESeason\WebCampServices\StructType\ResponseCpgPaymentStatus|\Maetva\ESeason\WebCampServices\StructType\ResponseCpgPlaceList|\Maetva\ESeason\WebCampServices\StructType\ResponseCpgPrice|\Maetva\ESeason\WebCampServices\StructType\ResponseCpgSimpleSearch|\Maetva\ESeason\WebCampServices\StructType\ResponseCpgUnitPrice
     */
    public function getResult()
    {
        return parent::getResult();
    }
}

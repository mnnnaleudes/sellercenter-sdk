<?php

namespace RocketLabs\SellerCenterSdk\Endpoint\Order\Request;

use RocketLabs\SellerCenterSdk\Core\Client;
use RocketLabs\SellerCenterSdk\Core\Request\GenericRequest;

/**
 * Class SetStatusToReadyToShip
 */
class SetStatusToReadyToShip extends GenericRequest
{
    const ACTION = 'SetStatusToReadyToShip';
    const ORDER_ITEM_IDS = 'OrderItemIds';
    const DELIVERY_TYPE = 'DeliveryType';
    const SHIPPING_PROVIDER = 'ShippingProvider';
    const TRACKING_NUMBER = 'TrackingNumber';
    const DOCUMENT_URL = 'DocumentUrl';
    const ACCESS_KEY = 'AccessKey';

    /**
     * @param int[] $orderItemIds
     * @param string $deliveryType
     * @param string $shippingProvider
     * @param string $trackingNumber
     * @param string $documentUrl
     * @param string $accessKey
     */
    public function __construct(array $orderItemIds, $deliveryType, $shippingProvider, $trackingNumber, $documentUrl, $accessKey)
    {
        parent::__construct(
            Client::POST,
            static::ACTION,
            static::V1,
            [
                static::ORDER_ITEM_IDS => implode(',', $orderItemIds),
                static::DELIVERY_TYPE => $deliveryType,
                static::SHIPPING_PROVIDER => $shippingProvider,
                static::TRACKING_NUMBER => $trackingNumber,
                static::DOCUMENT_URL => $documentUrl,
                static::ACCESS_KEY => $accessKey
            ]
        );
    }
}

<?php

class Openstream_Notifications_Model_Feed extends Mage_AdminNotification_Model_Feed
{
    public function getFeedUrl()
    {
        return (Mage::getStoreConfigFlag(self::XML_USE_HTTPS_PATH) ? 'https://' : 'http://') . Mage::getStoreConfig('system/openstream_notifications/feed_url');
    }
}
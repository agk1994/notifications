<?php

class Openstream_Notifications_Model_Observer
{
    public function controllerActionPredispatch($observer)
    {
        if (Mage::getSingleton('admin/session')->isLoggedIn()) {
            /** @var $model Openstream_Notifications_Model_Feed */
            $model = Mage::getModel('openstream_notifications/feed');
            $model->checkUpdate();
        }
    }
}
<?php
class fixuserbaskets_oxbasket extends fixuserbaskets_oxbasket_parent
{
    
    protected function _save()
    {
        if ($this->getOrderId()) return;
        return parent::_save();
    }
}
<?php

namespace Smith\UltimateKopokopo\Requests;

class StatusRequest extends BaseRequest
{
    public function getLocation()
    {
        return $this->getRequestData('location');
    }
}

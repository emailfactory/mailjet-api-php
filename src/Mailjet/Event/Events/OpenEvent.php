<?php

namespace Mailjet\Event\Events;

use Mailjet\Event\Data\EventData;

class OpenEvent extends EmailEvent
{
    public function getGeo()
    {
        return $this->data[EventData::DATA_GEO];
    }

    public function getIp()
    {
        return $this->data[EventData::DATA_IP];
    }

    public function getUserAgent()
    {
        return $this->data[EventData::DATA_USER_AGENT];
    }
}

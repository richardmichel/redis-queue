<?php

namespace MichiHelper\Common\Events;

abstract class Event
{
    public function toJson(): string
    {
        return json_encode($this);
    }
}
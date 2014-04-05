<?php

namespace ZG\Authentication\Adapter;

interface ChainableAdapter
{
    public function authenticate(AdapterChainEvent $e);
}

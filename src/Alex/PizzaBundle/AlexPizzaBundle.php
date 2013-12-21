<?php

namespace Alex\PizzaBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AlexPizzaBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}

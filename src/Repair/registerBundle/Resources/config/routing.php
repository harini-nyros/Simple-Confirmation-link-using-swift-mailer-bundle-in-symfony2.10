<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();
$collection->add('repairregister_homepage', new Route('/hello/{name}', array(
    '_controller' => 'RepairregisterBundle:Default:index',
)));

return $collection;

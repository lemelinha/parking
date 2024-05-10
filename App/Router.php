<?php

namespace App;

abstract class Router {
    protected function declareRoutes(){
        $routes['Index'] = [
            'router' => '/',
            'controller' => 'IndexController',
            'action' => 'index'
        ];

        $routes['LoginAuth'] = [
            'router' => '/login/auth',
            'controller' => 'IndexController',
            'action' => 'loginAuth'
        ];

        $this->routes = $routes;
    }
}
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

        $routes['logout'] = [
            'router' => '/logout',
            'controller' => 'IndexController',
            'action' => 'logout'
        ];

        $this->routes = $routes;
    }
}
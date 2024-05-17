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

        $routes['Logout'] = [
            'router' => '/logout',
            'controller' => 'IndexController',
            'action' => 'logout'
        ];

        $routes['AbrirTicket'] = [
            'router' => '/abrir/ticket',
            'controller' => 'PainelController',
            'action' => 'AbrirTicket'
        ];

        $this->routes = $routes;
    }
}
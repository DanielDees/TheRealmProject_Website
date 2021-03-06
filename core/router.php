<?php

namespace App\Core;

class Router {
 	
 	public $routes = [
 		'GET' => [],
 		'POST' => []
 	];	

 	public static function load($file) {

 		$router = new static;

 		require $file;

 		return $router;
 	}

 	public function get($uri, $controller) {
 		$this->routes['GET'][$uri] = $controller;
 	}

 	public function post($uri, $controller) {
 		$this->routes['POST'][$uri] = $controller;
 	}

 	public function direct($uri, $requestType) {

 		if (array_key_exists($uri, $this->routes[$requestType])) {
 			return $this->callAction(
	 			...explode('@', $this->routes[$requestType][$uri])
 			);
 		};

 		throw new \Exception(
 			"No route defined for the uri: " . $uri . " requestType: " . $requestType
 		);
 	}

 	protected function callAction($controller, $action) {

 		//Cannot throw $controller because unable to convert class to string
 		$controller = "App\\Controllers\\{$controller}";
 		$debug = $controller;
 		$controller = new $controller;

 		if (!method_exists($controller, $action)) {
 			throw new \Exception(
 				"{$debug} does not respond to the {$action} action."
 			);  
 		}

 		return $controller->$action();
 	}
}
<?php
/**
 * App Core Class
 * Creates URL and loads core controller
 * URL FORMAT - /controller/methods/params
 */
class Core 
{
  protected $currentController = 'Pages';
  protected $currentMethod = 'index';
  protected $params = [];

  public function __construct() 
  {
      $url = $this->getUrl();

      // Look into controller for controller (first value)
      if(file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
        // If exists, set as current controller
        $this->currentController = ucwords($url[0]);
        // Unset 0 Index
        unset($url[0]);
      }

      // Require the controller
      require_once '../app/controllers/' . $this->currentController . '.php';

      // Instaniate the controller class
      $this->currentController = new $this->currentController;
  }

  // Get the current url
  public function getUrl() 
  {
      if(isset($_GET['url'])) {
        // Remove ending slash
        $url = rtrim($_GET['url'], '/');
        // Sanitize
        $url = filter_var($url, FILTER_SANITIZE_URL);
        // Break it into an array
        $url = explode('/', $url);
        return $url;
      } 
  }
}
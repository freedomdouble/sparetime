<?php
namespace Admin\Controller;

class TestController extends CommonController {
  
  public function index()
  {
    
    print_r($GLOBALS);
  }
}
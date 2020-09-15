<?php

class Pages
{
  public function __construct()
  {
    echo 'Pages is loaded';
  }

  public function index()
  {
    echo 'Default method';
  }

  public function about($id)
  {
    echo $id;
  }
}
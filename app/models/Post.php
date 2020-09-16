<?php
class Post
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getPosts()
  {
    
    $test = $this->db->query("SELECT * FROM posts");
    
    return $this->db->resultSet();
  }
}
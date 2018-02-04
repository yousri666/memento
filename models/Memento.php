<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Memento
 *
 * @author Yousri
 */
class Memento extends CI_Model{
     function __construct() { 
         parent::__construct(); 
      }
      function getMementoByTitle($title) {
         $result = $this->mongo_db->where(array('title'=> $title));
         print_r($result);
      }
}

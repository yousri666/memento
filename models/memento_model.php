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
class Memento_model extends CI_Model{
    private $db;
    private $memento;
     function __construct() { 
         parent::__construct(); 
         try {
             
         $this->db = (new MongoDB\Client('mongodb://localhost:27017/Memento'))->selectDatabase('Memento');
         $this->memento = $this->db->selectCollection('memento');
         } catch (MongoDB\Exception $e) {
             show_error("Unable to connect to MongoDB: {$e->getMessage()}", 500);
         }
      }
      function getMementoByTitle($title) {
        $CI = &get_instance();
        $CI->load->helper('debug');
        $result = $this->memento->findOne(array('title' => $title), array('typeMap' => ['root' => 'array']));
        //print_r(MongoDB\BSON\toJSON(MongoDB\BSON\fromPHP($result)));//convert bson to json
        //echo $result['title'];
        return $result;
      }
}

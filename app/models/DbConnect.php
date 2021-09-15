<?php namespace App\models;

class dbconnect{
    public function connect(){
         $host = 'localhost';
         $user = 'root';
         $pass = '';
         $db = 'test';
         $connection = mysqli_connect($host,$user,$pass,$db); 
         return $connection;
     }
}
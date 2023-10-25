<?php

class Dbh{
    protected function connect(){
        try {
            $username = 'root';
            $password = "";
            $database = "cars2sale";
            $dbh = new PDO("mysql:host=localhost;dbname=$database", $username, $password);
            return $dbh;
        } catch (PDOException $e){
            echo "<h3> unable to connect with db ~~|= -]~~ </h3>";
            print $e->getMessage();
            die();
        }
    } 
}

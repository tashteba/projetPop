<?php
try{
    $bdd = new PDO('mysql:host=localhost;dbname=photoprivate;charset=utf8;', 'root', 'root');
}catch(Exception $e){
    die('There is problem here :'.$e->getMessage());
}

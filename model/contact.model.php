<?php
require_once '../database/db_connection.php';
class message{
    static public function add_message($data){
        $db=Database::connect()->prepare('INSERT INTO contact(username,email,Message)
                                         VALUES (:username,:email,:message)');
        $db->bindParam(':username',$data['username']);
        $db->bindParam(':email',$data['email']);
        $db->bindParam(':message',$data['message']);
        $db->execute();
    }
}
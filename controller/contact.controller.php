<?php
require_once '../model/contact.model.php';
class send_message{
    public function send_msg(){
        $data =array(
            'username'=>$_POST['username'],
            'email'=>$_POST['email'],
            'message'=>$_POST['message'],
        );
        $result=message::add_message($data);
    }
}
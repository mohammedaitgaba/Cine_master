<?php

// use post as GlobalPost;

require_once '../model/posts.model.php';
    class ADD_Post{
        
        public function add_post(){
            // session_start();
            $data = array(
                'username' => $_SESSION['username'],
                'title'=>$_POST['title'],
                'description'=>$_POST['description'],
                'category'=>$_POST['category'],
                'post_img'=>$_POST['post_img'],
            );
            $result=Post::addpost($data);
        }
        public function getposts(){
            return post::getAllPosts();
            header('location:posts.php');
        }
        public function getpost(){
            $id =array('id_post'=> $_POST['id_post']);
            return post::getOnePost($id);
            header('location:posts.php');
        }
        
        public function delete_post(){
            $data = array(
                'id_post' => $_POST['id_post']
            );
            post::delete_post($data);
            header('location:posts.php');
        }
        public function update_post(){
            $data_update = array(
                'id_post'=>$_POST['id_post'],
                'title'  =>$_POST['title'],
                'description'=>$_POST['description'],
                'category'=>$_POST['category'],
                'post_img'=>$_POST['post_img'],
            );
            $result=post::update_post($data_update);
            // print_r();
            header('location:posts.php');
        }
    }

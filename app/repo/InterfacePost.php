<?php

interface InterfacePost {

    public function showAllPosts();
    public function save(array $data);
    public function showPost($id);

}
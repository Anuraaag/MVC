<?php

class homeController{

    function __construct(){
        include('model/home.php');
        $this->obj = new homeModel();
    }

    function home(){
        $arr = $this->obj->page('1');
        $this->include_views($arr);
    }

    function about(){
        $arr = $this->obj->page('2');
        $this->include_views($arr);
    }

    function contact(){
        $arr = $this->obj->page('3');
        $this->include_views($arr);
    }

    function include_views($arr){
        include('view/header.php');
        include('view/page.php');
        include('view/footer.php');
    }
}

?>
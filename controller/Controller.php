<?php

class Controller
{
    protected string $page = 'homePage';

    public function invoke(){
        if (isset($_GET['page'])){
            $this->page = $_GET['page'];
        }
        switch ($this->page){
            case 'form':
                include 'view/formView.php';
                break;
            default:
                include 'view/homePageView.php';
                break;
        }
    }
}
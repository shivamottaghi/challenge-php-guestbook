<?php
include 'model/Post.php';
class Controller
{
    protected string $page = 'homePage';

    public function invoke(){
        if (isset($_POST['submitForm'])){
            return;
        }
        if (isset($_GET['page'])){
            $this->page = $_GET['page'];
        }
        switch ($this->page){
            case 'form':
                include 'view/formView.php';
                break;
            case 'homePage':
                include 'view/homePageView.php';
                break;
            default:
                include 'view/homePageView.php';
                break;
        }
    }

    public function formControll(){
        if (isset($_POST['submitForm'])){
            $post = new Post($_POST['name'], $_POST['lastName'], $_POST['email'], $_POST['message']);
            $_SESSION['newPost'] = $post;
            include 'view/submissionView.php';
        }
    }
}
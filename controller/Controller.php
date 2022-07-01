<?php
include_once ('model/Post.php');
include_once('model/Loader.php');
class Controller
{
    protected string $page = 'homePage';
    protected Loader $loader;

    public function __construct()
    {
        $this->loader = new Loader();
    }

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
            $this->loader->writeDataInFile($post);
            include 'view/submissionView.php';
        }
    }
}
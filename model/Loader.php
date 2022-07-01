<?php

class Loader
{
    protected $post;
    protected array $data;


    public function writeDataInFile(Post $post){
        $this->post = $post;
        $this->defineTheArray();
        $file = 'posts.txt';
        $currentFile = file_get_contents($file);
        $stdClass = json_decode($currentFile);
        $decodeArr = json_decode(json_encode($stdClass));
        $decodeArr[] = $this->data;
        $encodedArr = json_encode($decodeArr);
        file_put_contents($file, $encodedArr);
    }
    public function defineTheArray(){
        $this->data['name'] = $this->post->getName();
        $this->data['lastName'] = $this->post->getLastName();
        $this->data['email'] = $this->post->getEmail();
        $this->data['message'] = $this->post->getMessage();
        $this->data['date'] = $this->post->getDate();
    }
    private function saveDataInJson()
    {
        $jsonString = json_encode($this->data);
        var_dump($jsonString);
    }
}
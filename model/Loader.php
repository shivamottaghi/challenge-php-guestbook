<?php

class Loader
{
    protected $post;
    protected array $data;


    public function writeDataInFile(Post $post): void{
        $this->post = $post;
        $this->defineTheArray();
        $file = 'posts.txt';
        $currentFile = file_get_contents($file);
        $tempArr = json_decode($currentFile);
        $tempArr[] = $this->data;
        $encodedArr = json_encode($tempArr);
        file_put_contents($file, $encodedArr);
    }
    public function defineTheArray(): void{
        $this->data['name'] = $this->post->getName();
        $this->data['lastName'] = $this->post->getLastName();
        $this->data['email'] = $this->post->getEmail();
        $this->data['message'] = $this->post->getMessage();
        $this->data['date'] = $this->post->getDate();
    }
    public function getAllPosts() : array
    {
        $stdClass = json_decode(file_get_contents('posts.txt'));
        $posts = [];
        foreach ($stdClass as $obj){
            $posts[] = ['name'=>$obj->name, 'lastName' => $obj->lastName, 'email'=>$obj->email, 'date'=>$obj->date, 'message'=>$obj->message];
        }
        return $posts;
    }
}
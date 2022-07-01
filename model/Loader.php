<?php

class SaveData
{
    protected $post;
    protected array $data;

    public function __construct($post)
    {
        $this->post = $post;
        $this->saveDataInArray();
        $this->saveDataInJson();
    }

    public function saveDataInArray(): array{
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
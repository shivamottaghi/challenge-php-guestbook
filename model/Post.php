<?php

class Post
{
    protected string $name;
    protected string $lastName;
    protected string $email;
    protected string $message;
    protected string $date;

    public function __construct($name , $lastName, $email, $message)
    {
        date_default_timezone_set('UTC');
        $this->name = $name;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->message = $message;
        $this->date = date('m/d/Y');
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }


}
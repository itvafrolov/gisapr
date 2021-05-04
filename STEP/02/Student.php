<?php
class Student
{
    protected $id;
    protected $fname;
    protected $email;

    public function getId()
    {
        return $this->id;
    }
    public function getFname()
    {
        return $this->fname;
    }

    public function getEmail()
    {
        return $this->email;
    }
}
?>
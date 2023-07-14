<?php


namespace App\classes;


class FileUpload
{
    public $name, $email, $phone;

    public $image, $imageName, $imageDirectory;

    public function __construct($post, $file)
    {

//        echo '<pre>';
//        print_r($post);
//        print_r($_FILES);
//        exit();

        if ($post)
        {
            $this->name = $post['name'];
            $this->email = $post['email'];
            $this->phone = $post['phone'];

            $this->image = $file['image'];
        }
    }

    public function uploadFile ()
    {
        if (isset($this->image))
        {
            $this->imageName = $this->image['name'];
            $this->imageDirectory = 'assets/img/upload/'.$this->imageName;
            move_uploaded_file($this->image['tmp_name'], $this->imageDirectory);
        }
        return 'success';
    }
}
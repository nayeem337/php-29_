<?php


namespace App\classes;


class User
{
    public $email, $password, $users;

    public function __construct($post)
    {
        if ($post)
        {
            $this->email = $post['email'];
            $this->password = $post['password'];
        }
    }

    public function allUsers ()
    {
        return [
            0 => [
                'id' => 1,
                'email' => 'admin@admin.com',
                'password' => '123'
            ],
            1 => [
                'id' => 2,
                'email' => 'teacher@teacher.com',
                'password' => '123'
            ],
            2 => [
                'id' => 3,
                'email' => 'student@student.com',
                'password' => '123'
            ],
        ];
    }

    public function checkUser()
    {

        $this->users = $this->allUsers();
        foreach ($this->users as $user)
        {
            if (($user['email'] == $this->email) && ($user['password'] == $this->password))
            {
                header('Location: action.php?page=home');
            }
        }
        return 'Email or Password is invalid';
    }
}
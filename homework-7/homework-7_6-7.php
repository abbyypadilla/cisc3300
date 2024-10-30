<?php
class User 
{
    private $username;
    private $email;

    public function __construct($username, $email) 
    {
        $this->username = $username;
        $this->email = $email;
    }

    public function getUsername() 
    {
        return $this->username;
    }

    public function setUsername($username) 
    {
        $this->username = $username;
    }

    public function getEmail() 
    {
        return $this->email;
    }

    public function setEmail($email) 
    {
        $this->email = $email;
    }

    public static function isValidEmail($email) 
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }
}

$user = new User("abbyypadilla", "apadilla26@fordham.edu");
echo $user->getUsername() . "<br>"; 
echo $user->getEmail() . "<br>"; 

$user->setEmail("new_email@gmail.com");
echo $user->getEmail() . "<br>"; 

echo (User::isValidEmail($user->getEmail()) ? 'Valid Email' : 'Invalid Email') . "<br>";
?>

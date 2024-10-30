<?php

// part b
require_once __DIR__ . '/../models/UserModel.php';

class UserController 
{
    // part b 
    private $userModel;

    public function __construct() 
    {
        $this->userModel = new UserModel();
    }

    public function serveHtmlPage() 
    {
        echo "<h1>User List</h1>";
        echo "<ul>";
        
        // Fetch users and display them in a list
        $users = $this->userModel->getAllUsers();
        foreach ($users as $user) {
            echo "<li>{$user['name']} - {$user['email']} - {$user['role']}</li>";
        }
        
        echo "</ul>";

        // originally for part a
        // echo "<!DOCTYPE html>
        // <html>
        // <head>
        //     <title>Welcome</title>
        // </head>
        // <body>
        //     <h1>Welcome to the User Page</h1>
        //     <p>This is a sample HTML page served by the UserController.</p>
        // </body>
        // </html>";
    }

    // originally for part a
    // public function serveJsonData() 
    // {
    //     header('Content-Type: application/json');
    //     $data = 
    //     [
    //         'name' => 'Abby',
    //         'email' => 'apadilla26@fordham.edu',
    //         'role' => 'user'
    //     ];
    //     echo json_encode($data);
    // }

    // part b
    public function serveJsonData() 
    {
        header('Content-Type: application/json');
        $data = $this->userModel->getAllUsers();
        echo json_encode($data);
    }
    
}

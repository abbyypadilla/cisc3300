<?php

class UserModel 
{
    public function getAllUsers() 
    {
        return 
        [
            [
                'name' => 'Nala',
                'email' => 'nala@gmail.com',
                'role' => 'admin'
            ],
            [
                'name' => 'Bailey',
                'email' => 'bailey@gmail.com',
                'role' => 'editor'
            ],
            [
                'name' => 'Brady',
                'email' => 'brady@gmail.com',
                'role' => 'user'
            ]
        ];
    }
}

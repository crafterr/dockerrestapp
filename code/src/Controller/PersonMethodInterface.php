<?php


namespace NginxAndPhp\Controller;


interface PersonMethodInterface
{
    public function getUser(int $id);

    public function getUsers();

    public function createUser();

    public function updateUser(int $id);

    public function deleteUser(int $id);
}
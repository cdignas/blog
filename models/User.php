<?php

class User extends Model {

    private $table = 'users';

    public function create($username, $email, $password) {
        $query = 'INSERT INTO ' . $this->table . ' (username, email, password, created_at) 
                  VALUES (:username, :email, :password, :created_at)';
        $connection = Database::getConnection()->prepare($query);
        $params = [
            'username'   => $username,
            'email'      => $email,
            'password'   => $password,
            'created_at' => date('Y-m-d H:i:s'),
        ];

        return $connection->execute($params);
    }

    public function edit($id, $username, $email, $password) {
        $query = 'UPDATE ' . $this->table . ' SET username = :username, email = :email, password = :password, updated_at = :updated_at 
                  WHERE id = :id';
        $connection = Database::getConnection()->prepare($query);
        $params = [
            'id'         => $id,
            'username'   => $username,
            'email'      => $email,
            'password'   => $password,
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        return $connection->execute($params);
    }

    public function view($id) {
        $query = 'SELECT * FROM ' . $this->table . ' WHERE id = :id';
        $connection = Database::getConnection()->prepare($query);
        $params = [
            'id'         => $id,
        ];
        $connection->execute($params);
        return $connection->fetch();
    }

    public function viewAll() {
        $query = 'SELECT * FROM ' . $this->table;
        $connection = Database::getConnection()->prepare($query);
        $connection->execute();
        return $connection->fetchAll();
    }

    public function delete($id) {
        $query = 'DELETE FROM ' . $this->table . ' WHERE id = :id';
        $connection = Database::getConnection()->prepare($query);
        $params = [
            'id'    => $id,
        ];
        return $connection->execute($params);
    }

}
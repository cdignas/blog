<?php

class Post extends Model {

    private $table = 'posts';

    public function create($title, $text) {
        $query = 'INSERT INTO ' . $this->table . ' (title, text, created_at) 
                  VALUES (:title, :text, :created_at)';
        $connection = Database::getConnection()->prepare($query);
        $params = [
            'title'      => $title,
            'text'       => $text,
            'created_at' => date('Y-m-d H:i:s'),
        ];

        return $connection->execute($params);
    }

    public function edit($id, $title, $text) {
        $query = 'UPDATE ' . $this->table . ' SET title = :title, text = :text, updated_at = :updated_at 
                  WHERE id = :id';
        $connection = Database::getConnection()->prepare($query);
        $params = [
            'id'         => $id,
            'title'      => $title,
            'text'       => $text,
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
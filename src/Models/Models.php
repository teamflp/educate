<?php
class Crud 
{
     private $pdo;

     public function __construct($pdo)
     {
          $this->pdo = $pdo;
     }

     // Creation de la table
     public function create($table, $data)
     {
          $sql = "INSERT INTO $table SET ";
          $attributes = array_keys($data);
          $values = array_values($data);
          $sql .= implode(' = ?, ', $attributes) . ' = ?';
          $req = $this->pdo->prepare($sql);
          $req->execute($values);
          return $this->pdo->lastInsertId();
     }

     // Lecture de la table
     public function read($table, $id)
     {
          $sql = "SELECT * FROM $table WHERE id = ?";
          $req = $this->pdo->prepare($sql);
          $req->execute([$id]);
          return $req->fetch();
     }

     // Mise à jour de la table

     public function update($table, $data, $id)
     {
          $sql = "UPDATE $table SET ";
          $attributes = array_keys($data);
          $values = array_values($data);
          $sql .= implode(' = ?, ', $attributes) . ' = ?';
          $sql .= " WHERE id = ?";
          $values[] = $id;
          $req = $this->pdo->prepare($sql);
          $req->execute($values);
          return $req->rowCount();
     }

     // Suppression de la table
     public function delete($table, $id)
     {
          $sql = "DELETE FROM $table WHERE id = ?";
          $req = $this->pdo->prepare($sql);
          $req->execute([$id]);
          return $req->rowCount();
     }
}
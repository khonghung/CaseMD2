<?php

namespace App\Models;

class CustomerModel extends BaseModel
{
    protected $table;

    public function __construct()
    {
        $this->table = "customers";
        parent::__construct($this->table);
    }

    public function store($data)
    {
        $sql = "INSERT INTO `customers` ( `name`, `email`, `address`, `phone`) 
        VALUES (?,?,?,?)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $data['name']);
        $stmt->bindParam(2, $data['email']);
        $stmt->bindParam(3, $data['address']);
        $stmt->bindParam(4, $data['phone']);
        $stmt->execute();
        
    }


    public function update($id, $data)
    {
        $sql = "UPDATE `customers` SET `name`=?,`email`=?,`address`=?,`phone`=? WHERE id = $id";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $data['name']);
        $stmt->bindParam(2, $data['email']);
        $stmt->bindParam(3, $data['address']);
        $stmt->bindParam(4, $data['phone']);
        $stmt->execute();
    }


   



}

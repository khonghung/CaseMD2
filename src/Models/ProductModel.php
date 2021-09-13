<?php

namespace App\Models;

class ProductModel extends BaseModel
{
    protected $table ;

    public function __construct()
    {
        $this->table = "products";
        parent::__construct($this->table);
    }



    public function store($data)
    {
        $sql = "INSERT INTO `products`( `name`, `price`, `image`) 
        VALUES (?,?,?)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $data['name']);
        $stmt->bindParam(2, $data['price']);
        $stmt->bindParam(3, $data['image']);
        $stmt->execute();
        
    }


    public function update($id, $data)
    {
        $sql = "UPDATE `products` SET `name`=?,`price`=?,`image`=? WHERE id = $id";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $data['name']);
        $stmt->bindParam(2, $data['price']);
        $stmt->bindParam(3, $data['image']);
        $stmt->execute();
    }

}
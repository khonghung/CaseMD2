<?php
namespace App\Controllers;
use App\Models\CustomerModel; 

class CustomerController extends BaseController
{
    protected $model;


    public function __construct(){
        $this->model = new CustomerModel();
        parent::__construct($this->model);
    }
    

    public function index(){
        $customers = parent::index();
        include "src/Views/Customer/list.php";
        
    }

    public function store()
    {
        if($_SERVER["REQUEST_METHOD"] == "GET"){
            include "src/Views/Customer/create.php";
        } else {
            $data = [
                "name" => $_POST["name"],
                "email" => $_POST["email"],
                "address" => $_POST["address"],
                "phone" => $_POST["phone"],
            
            ];
            $this->model->store($data);
            header("Location:index.php?page=customer-list");
        }
        
    }

    public function delete($id) {
        $this->model->delete($id);
        header("Location:index.php?page=customer-list");
    }

    public function update($id) {

        if($_SERVER["REQUEST_METHOD"] == "GET"){
            $customers = $this->model->getById($id);
            include "src/Views/Customer/update.php";
        } else {
            $data = [
                "name" => $_POST["name"],
                "email" => $_POST["email"],
                "address" => $_POST["address"],
                "phone" => $_POST["phone"],
            
            ];
            $this->model->update($id, $data);
            header("Location:index.php?page=customer-list");
        }
    }


    public function search($keyword){
        $customers = $this->model->search($keyword);
        include "src/Views/Customer/list.php";
    }

}
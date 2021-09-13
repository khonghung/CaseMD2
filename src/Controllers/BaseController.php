<?php
namespace App\Controllers;

class BaseController 
{
    protected $model;

    public function __construct($model){
        $this->model = $model;
    
    }

    public function index()
    {
        // var_dump($this->model->getAll);
        // die();
        return $this->model->getAll();
    }

}
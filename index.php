<?php
require_once __DIR__ . '/vendor/autoload.php';


use App\Controllers;
$page = isset($_GET['page']) ? $_GET['page'] : "";

$customerController = new Controllers\CustomerController();
$productController = new Controllers\ProductController();
$loginController = new Controllers\LoginController();

include "src/Views/layout/header.php";
switch ($page) {
    case "customer-list":
        if (isset($_GET['search'])) {
            $customerController->search($_GET['search']);
        } else {
            $customerController->index();
        }
        break;

    case "customer-create":
        $customerController->store();
        break;

    case "customer-delete":
        $id = $_GET['id'];
        $customerController->delete($id);
        break;

    case "customer-update":
        $id = $_GET['id'];
        $customerController->update($id);
        break;




    case "product-list":
        if (isset($_GET['search'])) {
            $productController->search($_GET['search']);
        } else {
            $productController->list();
        }
        break;

    case "product-create":
        $productController->store();
        break;

    case "product-delete":
        $id = $_GET['id'];
        $productController->delete($id);
        break;

    case "product-update":
        $id = $_GET['id'];
        $productController->update($id);
        break;


    case "register":
        $loginController->register();
        break;
    case "login":
        $loginController->showLogin();
        break;
    case "logout":
        $loginController->logout();
        break;


    // default:
    //     if (isset($_GET['search'])) {
    //         $productController->search($_GET['search']);
    //     } else {
    //         $productController->index();
    //     } 
}


include "src/Views/layout/footer.php";

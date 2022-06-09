<?php
require_once './Model/ProductModel.php';
require_once './Controller/Auth.php';
require_once './Model/PayModel.php';
require_once './Model/OrderModel.php';
require_once './Model/OrderDetailModel.php';

class HomeController {
    private $productModel;
    public $auth;

    public function __construct() {
        $this->productModel = new ProductModel();
        $this->auth = new Auth();
    }

    public function invoke() {
        if(!isset($_GET['page'])) die();

        switch($_GET['page']){
            case 'home':
                $this->homePage();
                break;
            case 'single':
                $this->singlePage();
                break;
                
            case 'introduce':
                $this->introducePage();
                break;
            case 'shop':
                $this->shopPage();
                break;
            case 'list':
                $this->listPage();
                break;
            case 'knowledge':
                $this->knowledgePage();
                break;
            case 'contact':
                $this->contactPage();
                break;
            case 'search':
                $this->searchPage();
                break;
            case 'login':
                $this->loginPage();
                break;
            case 'news':
                    $this->newsPage();
                    break;
            case 'cart':
                $this->cartPage();
                break;
            case 'order':
                $this->orderPage();
                break;
            case 'payProcess':
                $this->payProcess();
                break;
            case 'signup':
                    $this->signupPage();
                    break;
        }
    }

    private function homePage() {
        $productList = $this->productModel->all();
        require_once './View/home.php';
    }

    private function singlePage() {
        if(!isset($_GET['id'])) die();

        $product = $this->productModel->find($_GET['id']);
        require_once './View/single.php';
       
    }
    private function introducePage() {
        require_once './View/introduce.php';
    }
    private function shopPage() {
        $productList = $this->productModel->all();
        require_once './View/shop.php';
    }
    private function listPage() {
        require_once './View/list.php';
    }
    private function knowledgePage() {
        require_once './View/knowledge.php';
    }
    private function contactPage() {
        require_once './View/contact.php';
    }
    private function searchPage() {
        require_once './View/search.php';
    }
    private function loginPage() {
        require_once './View/login.php';
    }
    private function newsPage() {
        require_once './View/news.php';
    }
    private function signupPage() {
        require_once './View/signup.php';
    }
    private function cartPage() {
        if(isset($_GET['id'])){
            //order 
            $productModel = new ProductModel();
            $product = $productModel->find($_GET['id']);
            create_order($product->id, $product->name, $product->image, $product->price, 1);
        }

        if(isset($_SESSION['cart'])) 
            $productList = $_SESSION['cart'];
        else 
            $productList = array();

        if(isset($_SESSION['infoUser']))
            $infoUser = $_SESSION['infoUser'];

        require_once './View/cart.php';
    }
    private function orderPage() {
        require_once './Model/ProductModel.php';
        $productModel = new ProductModel();
        $productList = $productModel->all();
        require_once './View/order.php';
    }
    
    private function payProcess()
    {
        //Kiem tra nguoi dung da login chua
        $auth = new Auth();
        $user = $auth->user();
        if($user == NULL || $user['role'] != 'admin'){ //login thanh cong
            redirect(url_pattern('homeController', 'home'));
        }

        //Da login
        $user = (new Auth())->user();

        $orderModel = new OrderModel();
        $orders_code = substr(md5(mt_rand()), 0, 7);
        $orderModel->create(
            array(
                'code' => $orders_code,
                'description' => '001',
                'users_id' => $user['id']
            )
        );

        $orderDetailModel = new OrderDetailModel();
        $cart = $_SESSION['cart'];
        foreach($cart as $orderDetail){
            $orderDetailModel->create(
                array(
                    'orders_code' => $orders_code,
                    'products_id' => $orderDetail['productId'],	
                    'quantity' => $orderDetail['quantity']
                )
            );
        }
        unset($_SESSION['cart']);

        redirect(url_pattern('homeController', 'home'));
        
    }
}

<?php
class HomeController {
    public function __construct() {

    }

    public function invoke() {
        if(isset($_GET['page'])){
            switch($_GET['page']){
                case 'allotment':
                    $this->allotmentPage();
                    break;
                case 'bookstore':
                    $this->bookstorePage();
                    break;   
                case 'cart':
                    $this->cartPage();
                    break;
                case 'communications':
                    $this->communicationsPage();
                    break;
                case 'home':
                    $this->homePage();
                    break;
                case 'login':
                    $this->loginPage();
                    break;
                case 'news':
                    $this->newsPage();
                    break;
                case 'order':
                    $this->orderPage();
                    break;
                case 'product':
                    $this->productPage();
                    break;
                case 'product_details':
                    $this->product_detailsPage();
                    break;
                case 'signin':
                    $this->signinPage();
                    break;
            }
        }
    }

    private function homePage() {
        require_once './Model/ProductModel.php';
        $productModel = new ProductModel();
        $productList = $productModel->all();
        require_once './View/home.php';
    }

    private function product_detailsPage() {
        require_once './Model/ProductModel.php';
        if(isset($_GET['id'])){
            $product = (new ProductModel())->find($_GET['id']);
            require_once './View/product_details.php';
        }
       
    }
    private function signinPage() {
        require_once './View/signin.php';
    }
    private function productPage() {
        require_once './Model/ProductModel.php';
        $productModel = new ProductModel();
        $productList = $productModel->all();
        require_once './View/product.php';
    }
    private function bookstorePage() {
        require_once './View/bookstore.php';
    }
    private function allotmentPage() {
        require_once './View/allotment.php';
    }
    private function communicationsPage() {
        require_once './View/communications.php';
    }
    private function newsPage() {
        require_once './View/news.php';
    }
    private function loginPage() {
        require_once './View/login.php';
    }
    private function cartPage() {
        require_once './Model/ProductModel.php';
        require_once './Helpers/functions.php';
        if(isset($_GET['id'])){
            //order 
            $productModel = new ProductModel();
            $product = $productModel->find($_GET['id']);
            create_order($product->id, $product->name, $product->image, $product->price, 1);
        }
        $productList = $_SESSION['cart'];
         
        require_once './View/cart.php';
    }
    private function orderPage() {
        require_once './Model/ProductModel.php';
        $productModel = new ProductModel();
        $productList = $productModel->all();
        require_once './View/order.php';
    }
}
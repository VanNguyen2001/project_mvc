<?php include_once './libs/functions.php'; ?>
<?php
    function create_order($productId, $name, $image, $price, $quantity) {
        if(isset($_SESSION['cart'])){
            $cart = $_SESSION['cart'];
        }else{
            $cart = array();  
        }
    
        $productExists = false;
    
        foreach($cart as $key => $value){
            if($productId == $value['productId']){
                $value['quantity'] = $value['quantity'] + $quantity;
                $cart[$key] = $value;
                $productExists = true;
                break;
            }
        }
    
        if(!$productExists) {
            $product = array(
                'productId' => $productId,
                'name' => $name,
                'image' => $image,
                'price' => $price,
                'quantity' => $quantity,
            );
        
            $cart[] = $product;
        }
       
        $_SESSION['cart'] = $cart;
    }
    if(!isset($_GET['id'])) die();
    $product = getProduct($_GET['id']);
    order($product['id'], $product['name'], $product['image'], $product['price'], 1);

    redirect("cart.php");
?>
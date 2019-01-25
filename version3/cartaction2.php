<?php
// initialize shopping cart class
include 'Cart.php';
$cart = new Cart;

// include database configuration file
include 'admin/config.php';
if(isset($_REQUEST['action']) && !empty($_REQUEST['action'])){
    if($_REQUEST['action'] == 'addToCart' && !empty($_REQUEST['id'])){
        $productID = $_REQUEST['id'];
        // get product details
        $query = $db->query("SELECT * FROM addproducts WHERE id = ".$productID);
        $row = $query->fetch_assoc();
        $_SESSION['name']=$row['name'];
        $_SESSION['image']=$row['image'];
        $_SESSION['btc_code']=$row['btc_code'];
        $itemData = array(
            'id' => $row['id'],
            'name' => $row['name'],
            'category_name' => $row['category_name'],
            'image' => $row['image'],
            'price' => $row['price'],
            'qty' => 1
        );
        
        $insertItem = $cart->insert($itemData);
        $redirectLoc = $insertItem?'login.php':'index.php';
        header("Location: ".$redirectLoc);
    }elseif($_REQUEST['action'] == 'updateCartItem' && !empty($_REQUEST['id'])){
        $itemData = array(
            'rowid' => $_REQUEST['id'],
            'qty' => $_REQUEST['qty']
        );
        $updateItem = $cart->update($itemData);
        echo $updateItem?'ok':'err';die;
    }elseif($_REQUEST['action'] == 'removeCartItem' && !empty($_REQUEST['id'])){
        $deleteItem = $cart->remove($_REQUEST['id']);
        header("Location: checkout.php");
    }elseif($_REQUEST['action'] == 'placeOrder' && $cart->total_items() > 0 && !empty($_SESSION['sessCustomerID']) && !empty($_POST['btc_code'])){
        // insert order details into database
        $insertOrder = $db->query("INSERT INTO orders(customer_id,email,username,phone,city,street,zipcode,name,image,total_price,created, modified,status,btc_code) VALUES ('".$_SESSION['sessCustomerID']."','". $_SESSION['email']."','". $_SESSION['username']."','". $_SESSION['phone']."','". $_SESSION['city']."','". $_SESSION['street']."','". $_SESSION['zipcode']."','". $_SESSION['name']."','". $_SESSION['image']."','".$cart->total()."','".date("Y-m-d H:i:s")."', '".date("Y-m-d H:i:s")."','".progressing."','".$_POST['btc_code']."')");
        
        if($insertOrder){
            $orderID = $db->insert_id;
            $sql = '';
            
            // get cart items
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
                $item['username']=$_SESSION['username'];
                $item['email']=$_SESSION['email'];
                $item['phone']=$_SESSION['phone'];
                $item['city']=$_SESSION['city'];
                $item['street']=$_SESSION['street'];
                $item['zipcode']=$_SESSION['zipcode'];
                $item['btc_code']=$_POST['btc_code'];
                $item['created']=date_default_timezone_set('Asia/Calcutta');
                  $sql .= "INSERT INTO order_items (order_id, product_id, quantity,username,name,email,phone,city,street,zipcode,image,price,total_price,created, modified,status,btc_code) VALUES ('".$orderID."', '".$item['id']."','".$item['qty']."','".$item['username']."','".$item['name']."','".$item['email']."','".$item['phone']."','".$item['city']."','".$item['street']."','".$item['zipcode']."','".$item['image']."','".$item['subtotal']."','".$cart->total()."','".date("Y-m-d H:i:s")."', '".date("Y-m-d H:i:s")."','".progressing."','".$item['btc_code']."');";
            }
            // insert order items into database
            $insertOrderItems = $db->multi_query($sql);
            
            if($insertOrderItems){
                $cart->destroy();
                header("Location: orderSuccess.php?id=$orderID");
            }else{
                header("Location: checkout.php");
            }
        }else{
            header("Location: checkout.php");
        }
    }else{
        header("Location: indexk.php");
    }
}else{
    header("Location: indexk.php");
}

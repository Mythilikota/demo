<?php
// initializ shopping cart class
include 'Cart.php';
?>
<?php
$cart = new Cart;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>View Cart - PHP Shopping Cart Tutorial
    </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
    </script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
    </script>
    <link rel="stylesheet" href="style.css"/>
    <style>
      input[type="number"]{
        width: 30%;
      }
    </style>
    <script>
      function updateCartItem(obj,id){
        $.get("cartAction.php", {
          action:"updateCartItem", id:id, qty:obj.value}
              , function(data){
          if(data == 'ok'){
            location.reload();
          }
          else{
            alert('Cart update failed, please try again.');
          }
        }
             );
      }
    </script>
  </head>
<body>
  <?php
require 'header.php';
?>
  </nav>
</header>
<div class="container">
  <br>
  <br>
  <div class="page-content page-order">
    <div class="page-title">
      <h2>Shopping Cart
      </h2>
    </div>
    <div class="order-detail-content">
      <div class="table-responsive">
        <table class="table table-bordered cart_summary">
          <thead>
            <tr>
              <th>Product
              </th>
              <th>category
              </th>
              <th>Image
              </th>
              <th>Price
              </th>
              <th>Quantity
              </th>
              <th>Subtotal
              </th>
              <th>&nbsp;
              </th>
            </tr>
          </thead>
          <tbody>
            <?php
if($cart->total_items() > 0){
//get cart items from session
$cartItems = $cart->contents();
foreach($cartItems as $item){
?>
            <tr>
              <td>
                <?php echo $item["name"]; ?>
              </td>
              <td>
                <?php echo $item["category_name"]; ?>
              </td>
              <td class="cart_product">
                <img src="uploads/<?php echo $item['image']; ?>" class="img-rounded" width="75px" height="100px" />
              </td>
              <td>
                <?php echo ''.$item["price"].' Rs'; ?>
              </td>
              <td>
                <input type="number" class="form-control" value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')">
              </td>
              <td>
                <?php echo ''.$item["subtotal"].' Rs'; ?>
              </td>
              <td>
                <!--<a href="cartAction.php?action=updateCartItem&id=" class="btn btn-info"><i class="glyphicon glyphicon-refresh"></i></a>-->
                <a href="cartAction.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                  <i class="glyphicon glyphicon-trash">
                  </i>
                </a>

              </td>
            </tr>
            <?php } }else{ ?>
            <tr>
              <td colspan="5">
                <p>Your cart is empty.....
                </p>
              </td>
              <?php } ?>
			  </tr>
          </tbody>
          <tfoot>
            <tr>
              <td>
                <a href="indexk.php" class="btn btn-warning">
                  <i class="glyphicon glyphicon-menu-left">
                  </i> Continue Shopping
                </a>
              </td>
              <td colspan="4">
              </td>
              <?php if($cart->total_items() > 0){ ?>
              <td class="text-center">
                <strong>Total 
                  <?php echo ''.$cart->total().' Rs'; ?>
                </strong>
              </td>
              <td>
                <a href="login.php" class="btn btn-success btn-block">Checkout 
                  <i class="glyphicon glyphicon-menu-right">
                  </i>
                </a>
              </td>
              <?php } ?>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
</div>
<?php include 'footer.php';
?>
<!-- jquery js --> 
<script type="text/javascript" src="js/jquery.min.js">
</script> 
<!-- bootstrap js --> 
<script type="text/javascript" src="js/bootstrap.min.js">
</script> 
<!-- Mean Menu js --> 
<script type="text/javascript" src="js/jquery.meanMenu.min.html">
</script> 
<!-- owl.carousel.min js --> 
<script type="text/javascript" src="js/owl.carousel.min.js">
</script> 
<!-- bxslider js --> 
<script type="text/javascript" src="js/jquery.bxslider.js">
</script> 
<!--jquery-ui.min js --> 
<script type="text/javascript" src="js/jquery-ui.js">
</script> 
<!-- wow JS --> 
<script type="text/javascript" src="js/wow.min.js">
</script> 
<!-- flexslider js --> 
<script type="text/javascript" src="js/jquery.flexslider.js">
</script> 
<!-- mobile Menu JS --> 
<script type="text/javascript" src="js/jtv-mobile-Menu.js">
</script> 
<!-- main js --> 
<script type="text/javascript" src="js/main.js">
</script> 
<!-- countdown js --> 
<script type="text/javascript" src="js/countdown.js">
</script> 
<!-- nivo slider js --> 
<script type="text/javascript" src="js/jquery.nivo.slider.js">
</script> 
<!-- revolution slider js --> 
<script type="text/javascript" src="js/revolution-slider.js">
</script> 
<script type='text/javascript'>
  jQuery(document).ready(function(){
    jQuery('#rev_slider_6').show().revolution({
      dottedOverlay: 'none',
      delay: 5000,
      startwidth: 870,
      startheight: 450,			          
      hideThumbs: 200,
      thumbWidth: 200,
      thumbHeight: 50,
      thumbAmount: 2,
      navigationType: 'thumb',
      navigationArrows: 'solo',
      navigationStyle: 'round',
      touchenabled: 'on',
      onHoverStop: 'on',
      swipe_velocity: 0.7,
      swipe_min_touches: 1,
      swipe_max_touches: 1,
      drag_block_vertical: false,
      spinner: 'spinner0',
      keyboardNavigation: 'off',
      navigationHAlign: 'center',
      navigationVAlign: 'bottom',
      navigationHOffset: 0,
      navigationVOffset: 20,
      soloArrowLeftHalign: 'left',
      soloArrowLeftValign: 'center',
      soloArrowLeftHOffset: 20,
      soloArrowLeftVOffset: 0,
      soloArrowRightHalign: 'right',
      soloArrowRightValign: 'center',
      soloArrowRightHOffset: 20,
      soloArrowRightVOffset: 0,
      shadow: 0,
      fullWidth: 'off',
      fullScreen: 'off',
      stopLoop: 'off',
      stopAfterLoops: -1,
      stopAtSlide: -1,
      shuffle: 'off',
      autoHeight: 'off',
      forceFullWidth: 'off',
      fullScreenAlignForce: 'off',
      minFullScreenHeight: 0,
      hideNavDelayOnMobile: 1500,
      hideThumbsOnMobile: 'off',
      hideBulletsOnMobile: 'off',
      hideArrowsOnMobile: 'off',
      hideThumbsUnderResolution: 0,
      hideSliderAtLimit: 0,
      hideCaptionAtLimit: 0,
      hideAllCaptionAtLilmit: 0,
      startWithSlide: 0,
      fullScreenOffsetContainer: ''
    }
                                             );
  }
                        );
</script>
</body>
<!-- Mirrored from htmlmystore.justthemevalley.com/fancy/version3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Aug 2017 08:09:45 GMT -->
</html>

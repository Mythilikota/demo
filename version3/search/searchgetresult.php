<?php
require_once("dbcontroller.php");
require_once("pagination.class.php");
$db_handle = new DBController();
$perPage = new PerPage();

$qer = @$_GET['my'];
$pagination_setting = @$_GET["pagination_setting"];
$paginationlink = "searchgetresult.php?page=";	

$sql = "SELECT * FROM addproducts  WHERE (`name` like '%$qer%')OR (`brandname` LIKE '%$qer%')   ORDER BY rand()";
		
$page = 1;
if(!empty($_GET["page"])) {
$page = $_GET["page"];
}

$start = ($page-1)*$perPage->perpage;
if($start < 0) $start = 0;

$query =  $sql . " limit " . $start . "," . $perPage->perpage; 
$faq = $db_handle->runQuery($query);

if(empty($_GET["rowcount"])) {
$_GET["rowcount"] = $db_handle->numRows($sql);
}

if($pagination_setting == "prev-next") {
	$perpageresult = $perPage->getPrevNext($_GET["rowcount"], $paginationlink,$pagination_setting);	
} else {
	$perpageresult = $perPage->getAllPageLinks($_GET["rowcount"], $paginationlink,$pagination_setting);	
}


$output = '
 
                                        ';
                                        $di = 0;
foreach($faq as $k=>$v) {
 $output .= '
   <div class="main-container col1-layout">
    <div class="container">
      <div class="row">
        <div class="col-main">
          <div class="product-view-area">
            <div class="product-big-image col-xs-12 col-sm-5 col-lg-5 col-md-5">
              <div class="icon-sale-label sale-left">Sale</div>
              <div class="large-image"> <a href=" " src="../uploads/'.$faq[$k]['image'].'" class="cloud-zoom" id="zoom1" rel="useWrapper: false, adjustY:0, adjustX:20"> <img class="zoom-img" src="../uploads/'.$faq[$k]['image'].'" alt="products"> </a> </div>

           
              
              
              <!-- end: more-images --> 
              
            </div>
                <div class="col-xs-12 col-sm-7 col-lg-7 col-md-7 product-details-area">
              <div class="product-name">
                <h2>'.$faq[$k]["name"].'</h2>
				
              </div>
			   <div class="product-name">
                <h3>'.$faq[$k]["brandname"].'</h3>
				
              </div><br>
              <div class="price-box">
                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price">'.$faq[$k]["price"].' Rs</span> </p>
                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price">'.$faq[$k]["oldprice"].' Rs</span> </p>
              </div>
              <div class="ratings">
                <div class="rating"> <i class="fa fa-star"> '.$faq[$k]["rating"].'</i></div>
             

              </div>
              <div class="short-description">
                <h4>Quick Overview</h4>
                <p>'.$faq[$k]["description"].'</p>
               
              </div>
              
              <div class="product-variation">
                <form action="#" method="post">
                  <div class="cart-plus-minus">
                    
                   
                  </div>
				  <div class="col-md-6">
                            <a class="btn btn-success" href="../cartAction.php?action=addToCart&id='.$faq[$k]["id"].'; ?>">Add to cart</a>
                        </div>
                 
                </form>
              </div>
              
            </div>
          </div>
        </div>
      
            </div>
          </div>
        </div>
 
			  ';
}
if(!empty($perpageresult)) {
$output .= '<div id="pagination">' . $perpageresult . '</div>';
}
print $output;
?>
 
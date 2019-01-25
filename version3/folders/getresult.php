<?php
require_once("dbcontroller.php");
require_once("pagination.class.php");
$db_handle = new DBController();
$perPage = new PerPage();

$paginationlink = "getresult.php?page=";	
$pagination_setting = @$_GET["pagination_setting"];
$my = @$_GET['my'];
$sql = "SELECT * FROM addproducts  WHERE subcategory like '%$my%' ORDER BY rand()";
		
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
 


 <div id="productTabContent" class="tab-content">
            <div class="tab-pane active in" id="all">
 <div class="product-item col-md-3 col-sm-6">
                <div class="item-inner">
                  <div class="product-thumbnail">
                    <div class="icon-sale-label sale-left">Sale</div>
                    <div class="box-hover">
                      <div class="btn-quickview"> <a href="#" data-toggle="modal" data-target="#modal-quickview"><i class="fa fa-search-plus" aria-hidden="true"></i> Quick View</a> </div>
                      <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"></a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"></a> </div>
                    </div>
                    <a href="../singlepage.php?id='.$faq[$k]['id'].'" class="product-item-photo"> <img class="product-image-photo" src="../uploads/'.$faq[$k]['image'].'" height="200" alt=""></a>
                    <div class="jtv-box-timer">
                      <div class="countbox_1 jtv-timer-grid"></div>
                    </div>
                  </div>
                  <div class="pro-box-info">
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title">
                          <h4> <a title="Product Title Here" href="folders/subcategory.php?category_name='.$faq[$k]['name'].'">'.$faq[$k]['name'].'</a></h4>
                        </div>
                        <div class="item-content">
																		
                          <div class="rating"><i class="fa fa-star" ></i>'.$faq[$k]['rating'].' </div>
                          <div class="price-box">
                              <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> '.$faq[$k]['price'].' </span> </p>
                              <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> '.$faq[$k]['oldprice'].' </span> </p>
                            </div>
							<div class="box-hover">
											<div class="product-item-actions">
												<div class="pro-actions">
											<a class="action add-to-cart btn btn-lg" onclick="myFunction()" href="../cartAction.php?action=addToCart&id='.$faq[$k]['id'].'">Add To Cart</a>
											<a class="action add-to-cart btn btn-lg"  href="../cartaction2.php?action=addToCart&id='.$faq[$k]['id'].'">Buy Now</a>
											</div>
											</div>
										</div>
                        </div>
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

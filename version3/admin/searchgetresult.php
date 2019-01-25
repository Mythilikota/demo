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
 <table class="table table-stripped table-bordered">
      <thead style="background-color:#337ab7; color:white">
	  
       <tr>
            <th></th>
          <th>Name</th>
          <th>Category</th>
          <th>Subcategory</th>
          <th>Price</th>
		  <th>oldprice</th>
		  <th>Rating</th>
          <th>Brand</th>
		  <th>Type</th>
          <th>Image</th>
		  <th>Add Image</th>
		  <th>Edit Products</th>
		  <th>Edit Image</th>
          <th>Delete</th>
        </tr>
      </thead>
                                        ';
                                        $di =0;
foreach($faq as $k=>$v) {
 $output .= '<tr><td>'.$di++.'</td><td><input type="hidden" id="rowcount" name="rowcount" value="' . $_GET["rowcount"] . '" />' . $faq[$k]["name"] .'</td>';
 $output .= '<td>' . $faq[$k]["category_name"] . '</td><td>'. $faq[$k]["subcategory"].'</td><td>'.$faq[$k]["price"].'</td><td>'.$faq[$k]["oldprice"].'</td><td>'.$faq[$k]["rating"].'</td><td>'.$faq[$k]["brandname"].'</td><td>'.$faq[$k]["type"].'</td><td><img height="100" src="../uploads/'.$faq[$k]["image"].'"></td> <td><a href="addimage.php?id='.$faq[$k]['id'].'">Add image</a></td><td><a href="editproducts.php?id='.$faq[$k]['id'].'">EditProducts</a></td><td><a href="editimage.php?id='.$faq[$k]['id'].'">EditImage</a></td><td><a href="delete.php?id='.$faq[$k]['id'].'">Delete</a></td>';
}
if(!empty($perpageresult)) {
$output .= '<div id="pagination">' . $perpageresult . '</div>';
}
print $output;
?>
 
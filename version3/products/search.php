
<?php

include('session.php');
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from htmlmystore.justthemevalley.com/fancy/version3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Aug 2017 08:06:58 GMT -->
<head>
<!-- Basic page needs -->
<meta charset="utf-8">
<!--[if IE]>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <![endif]-->
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Shopping &amp; CSS3 template</title>
<meta name="description" content="best template, template free, responsive theme, fashion store, responsive theme, responsive html theme, Premium website templates, web templates, Multi-Purpose Responsive HTML5 Template">
<meta name="keywords" content="bootstrap, ecommerce, fashion, layout, responsive, responsive template, responsive template download, responsive theme, retail, shop, shopping, store, Premium website templates, web templates, Multi-Purpose Responsive HTML5 Template"/>

<!-- Mobile specific metas  -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Favicon  -->
<link rel="shortcut icon" type="image/x-icon" href="favicon.png">

<!-- CSS Style -->

<link rel="stylesheet" href="../style.css">

<script src="http://code.jquery.com/jquery-2.1.1.js"></script>


<script>
function getresult(url) {
  $.ajax({
    url: url,
    type: "GET",
    data:  {rowcount:$("#rowcount").val(),"pagination_setting":$("#pagination-setting").val(),
	"my":"<?php echo $_GET['search']; ?>"},
    beforeSend: function(){$("#overlay").show();},
    success: function(data){
    $("#pagination-result").html(data);
    setInterval(function() {$("#overlay").hide(); },500);
    },
    error: function() 
    {}          
   });
}
/*function changePagination(option) {
  if(option!= "") {
    getresult("searchgetresult.php");
  }
}*/
</script>
 <style>
  *{padding:0px; margin:0px;}
  .my {
	  margin-left:-50px;
  }

 .page a{
	  font-size:20px;
	  padding:0px 7px;
	  margin:0px 5px;
	  border:1px solid #000;
	 
  }
   
  p a { 
   margin-left:650px; 
   margin-bottom:-20px;
  }
 #skills {
	 margin-bottom:-40px;
	 margin-left:120px;
	 
 } 
 .btn {
	 margin-bottom:-40px;
 }
  </style>
</HEAD>
<BODY>

  <nav class="navbar navbar-default">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Online Shopping</a>
		  <p class="navbar-brand "> Welcome:&nbsp <?php echo $login_session; ?></p>
        </div>
       <form class="form-inline my-2 my-lg-0 " action="search.php" method="get">
			<input style="width:400px" class="form-control input-sm" id="skills" type="text" placeholder="Search" aria-label="Search" name="search">
			<button class="btn btn-outline-success my-2 my-sm-0"  type="submit">Search</button>
			<p><a href="logout.php"><b>Logout</b></a></p>
		</form>
        <!-- Collect the nav links, forms, and other content for toggling -->
       <!-- <div class=" navbar-collapse" id="navbar-collapse-1">
          <ul class="h">
            <p><a href="../loginapp/logout.php"><b>Logout</b></a></p>
          </ul>
         
        </div> */<!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
	
   <div class="container">
    <div class="row">
      <div class="my">
        <div class="col-md-2">
             <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#"><i class="fa fa-home fa-fw"></i>Home</a></li>
               		<li><a href="allproducts.php"></i>All Products</a></li>
					<li><a href="addcategory.php"></i>Add Category</a></li>
					<li><a href="addsubcategory.php"></i>Add SubCategory</a></li>
			      <li><a href="addproduct.php"></i>Add NewProduct</a></li>
              

            </ul>
        </div>
</div>
<div class="col-md-10" >
<div id="overlay"><div><img src="loading.gif" width="64px" height="64px"/></div></div>
  <div class="content" width="100%">
            
                   
                        <div class="card">
                            
                            <div class="content table-responsive table-full-width">
                               <div id="pagination-result">
									<input type="hidden" name="rowcount" id="rowcount" />
								</div>

                            </div>
                        </div>
                    </div>
                </div>
           
                  
		 </div>			

	
<script>
getresult("searchgetresult.php");
</script>
<!-- jquery js --> 
<script type="text/javascript" src="js/jquery.min.js"></script> 

<!-- bootstrap js --> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 

<!-- Mean Menu js --> 
<script type="text/javascript" src="js/jquery.meanMenu.min.html"></script> 

<!-- owl.carousel.min js --> 
<script type="text/javascript" src="js/owl.carousel.min.js"></script> 

<!-- bxslider js --> 
<script type="text/javascript" src="js/jquery.bxslider.js"></script> 

<!--jquery-ui.min js --> 
<script type="text/javascript" src="js/jquery-ui.js"></script> 

<!-- wow JS --> 
<script type="text/javascript" src="js/wow.min.js"></script> 

<!-- flexslider js --> 
<script type="text/javascript" src="js/jquery.flexslider.js"></script> 

<!-- mobile Menu JS --> 
<script type="text/javascript" src="js/jtv-mobile-Menu.js"></script> 
<!-- main js --> 
<script type="text/javascript" src="js/main.js"></script> 

<!-- countdown js --> 
<script type="text/javascript" src="js/countdown.js"></script> 

<!-- nivo slider js --> 
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script> 

<!-- revolution slider js --> 
<script type="text/javascript" src="js/revolution-slider.js"></script> 
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
            });
        });
        </script>
		
</BODY>
</HTML>

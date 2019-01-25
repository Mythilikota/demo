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
<title>Fancy premium HTML &amp; CSS3 template</title>
<meta name="description" content="best template, template free, responsive theme, fashion store, responsive theme, responsive html theme, Premium website templates, web templates, Multi-Purpose Responsive HTML5 Template">
<meta name="keywords" content="bootstrap, ecommerce, fashion, layout, responsive, responsive template, responsive template download, responsive theme, retail, shop, shopping, store, Premium website templates, web templates, Multi-Purpose Responsive HTML5 Template"/>

<!-- Mobile specific metas  -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Favicon  -->
<link rel="shortcut icon" type="image/x-icon" href="favicon.png">

<!-- CSS Style -->
<link rel="stylesheet" href="../style.css">

</head> 
<script>
function getresult(url) {
  $.ajax({
    url: url,
    type: "GET",
    data:  {rowcount:$("#rowcount").val(),"pagination_setting":$("#pagination-setting").val(),
	"my":"<?php echo $_GET['category_name']; ?>"},
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
    getresult("getresult.php");
  }
}*/
</script>
</head>
<body class="cms-index-index cms-home-page">
<?php include_once '../header.php';
?>

 </nav>
  </header>
<div id="overlay"><div><img src="loading.gif" width="64px" height="64px"/></div></div>
<div class="home-tab">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12"> 
          <!-- Home Tabs  -->
          
          <div class="tab-info">
            <h3 class="new-product-title pull-left"></h3>
            <ul class="nav home-nav-tabs home-product-tabs">
              
            </ul>
            <!-- /.nav-tabs --> 
          </div>
	 <div class="product-item col-md-12 col-sm-12">
                <div class="item-inner">
                  <div class="product-thumbnail">
                  
                    <div class="box-hover">
                      
                    </div>
                    
                    <div class="jtv-box-timer">
                      <div class="countbox_1 jtv-timer-grid"></div>
                    </div>
                  </div>
                  <div class="pro-box-info">
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title">
                          <h4> </h4>
                        </div>
                        <div class="item-content">
                         
                          
                        </div>
                      </div>
                    </div>
                  
					

	<div id="pagination-result">
	<input type="hidden" name="rowcount" id="rowcount" />
	</div>
</div>
                  </div>
                </div>
              </div>
			    </div>
                </div>
              </div>
			  <?php include '../footer.php'; ?>
<script src="http://code.jquery.com/jquery-2.1.1.js"></script>

<script>
getresult("getresult.php");
</script>
<!-- jquery js --> 
<script type="text/javascript" src="../js/jquery.min.js"></script> 

<!-- bootstrap js --> 
<script type="text/javascript" src="../js/bootstrap.min.js"></script> 

<!-- Mean Menu js --> 
<script type="text/javascript" src="../js/jquery.meanMenu.min.html"></script> 

<!-- owl.carousel.min js --> 
<script type="text/javascript" src="../js/owl.carousel.min.js"></script> 

<!-- bxslider js --> 
<script type="text/javascript" src="../js/jquery.bxslider.js"></script> 

<!--jquery-ui.min js --> 
<script type="text/javascript" src="../js/jquery-ui.js"></script> 

<!-- wow JS --> 
<script type="text/javascript" src="../js/wow.min.js"></script> 

<!-- flexslider js --> 
<script type="text/javascript" src="../js/jquery.flexslider.js"></script> 

<!-- mobile Menu JS --> 
<script type="text/javascript" src="../js/jtv-mobile-Menu.js"></script> 
<!-- main js --> 
<script type="text/javascript" src="../js/main.js"></script> 

<!-- countdown js --> 
<script type="text/javascript" src="../js/countdown.js"></script> 

<!-- nivo slider js --> 
<script type="text/javascript" src="../js/jquery.nivo.slider.js"></script> 

<!-- revolution slider js --> 
<script type="text/javascript" src="../js/revolution-slider.js"></script> 
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
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Divisima | eCommerce Template</title>
	<meta charset="UTF-8">
	<meta name="description" content=" Divisima | eCommerce Template">
	<meta name="keywords" content="divisima, eCommerce, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/jquery-ui.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<!-- Header section -->
	@include('UI.navbar')
	<!-- Header section end -->


	<!-- Page info -->
	{{-- <div class="page-top-info">
		<div class="container">
			<h4>Your cart</h4>
			<div class="site-pagination">
				<a href="">Home</a> /
				<a href="">Your cart</a>
			</div>
		</div>
	</div> --}}
	<!-- Page info end -->


	<!-- cart section end -->
	<section class="cart-section " style="margin-top:3%;margin-bottom:3%">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="cart-table">
						<div class="cart-table-warp">
							<table>
							<thead>
								<tr>
									<th class="product-th"><b><h3>Product</h3></b></th>
									
									<th class="total-th"><h3><b>Price</h3></b></th>
								</tr>
							</thead>
							<tbody>
									
								<?php $total=0 ?>
								@foreach($products as $prod)
								<?php 
									
									$category=$prod[0]->prod_category;
									if($category==0)
									$category1="bags";
									if($category==1)
									$category1="keychains";
									if($category==2)
									$category1="bookmarks";
									if($category==4)
									$category1="greeting_cards";
									if($category==5)
									$category1="jewellery";
									if($category==6)
									$category1="candles";

									$total+=$prod[0]->prod_price;
								?>
								
								<tr>
									<td class="product-col">
										<img src="../img/product/{{$category1}}/{{$category1}}_{{$prod[0]->prod_id}}.jpg" alt="" style="height:75px">
										<div class="pc-title">
											<h4>{{$prod[0]->prod_name}}</h4>
										</div>
									</td>
									
									<td class="total-col"><h4><b>₹ {{$prod[0]->prod_price}}</b></h4></td>
									
								</tr>
								
								@endforeach
								{{-- <tr>
									<td class="product-col">
										<img src="img/cart/2.jpg" alt="">
										<div class="pc-title">
											<h4>Ruffle Pink Top</h4>
											<p>$45.90</p>
										</div>
									</td>
									<td class="quy-col">
										<div class="quantity">
					                        <div class="pro-qty">
												<input type="text" value="1">
											</div>
                    					</div>
									</td>
									<td class="size-col"><h4>Size M</h4></td>
									<td class="total-col"><h4>$45.90</h4></td>
								</tr>
								<tr>
									<td class="product-col">
										<img src="img/cart/3.jpg" alt="">
										<div class="pc-title">
											<h4>Skinny Jeans</h4>
											<p>$45.90</p>
										</div>
									</td>
									<td class="quy-col">
										<div class="quantity">
					                        <div class="pro-qty">
												<input type="text" value="1">
											</div>
                    					</div>
									</td>
									<td class="size-col"><h4>Size M</h4></td>
									<td class="total-col"><h4>$45.90</h4></td>
								</tr> --}}
							</tbody>
						</table>
						</div>
						<div class="total-cost">
						<h6 style="float:right;margin-right:20px;">Total <span>₹ {{$total}}</span></h6>
						<a style="float:left;margin-left:20px" href="" class="btn btn-dark">Proceed to checkout</a><br>
						</div>
					</div>
				</div>
				<div class="col-lg-4 card-right">
					{{-- <form class="promo-code-form">
						<input type="text" placeholder="Enter promo code">
						<button>Submit</button>
					</form> --}}
					
				</div>
			</div>
		</div>
	</section>
	<!-- cart section end -->

	<!-- Related product section --><!-- Related product section end -->



	<!-- Footer section -->
	
	<!-- Footer section end -->



	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/main.js"></script>
	
<script type="text/javascript">
    /* NOTE : Use web server to view HTML files as real-time update will not work if you directly open the HTML file in the browser. */
    (function(d, m){
      var kommunicateSettings = {"appId":"1c12616223f5cff7e3926090b28d4b9bc","conversationTitle":"DILIP NARINGREKAR","popupWidget":true,
       "onInit": function() {
                   var style = document.createElement('style');
                   var heightAndWidth = ".change-kommunicate-iframe-height{height:390px!important;width: 350px!important;}";
                   var classSettings = ".change-kommunicate-iframe-height{box-shadow: rgba(0, 0, 0, 0.3) 0px 1.5rem 2rem!important;max-height:calc(100% - 30px) !important;}" + heightAndWidth;
                   style.type = 'text/css';
                   style.innerHTML = classSettings;
                   document.getElementsByTagName('head')[0].appendChild(style);

                   KommunicateGlobal.document.getElementById('mck-sidebox-launcher').addEventListener('click',function(){ var testClick = parent.document.getElementById("kommunicate-widget-iframe"); testClick.classList.add("change-kommunicate-iframe-height"); });

                   KommunicateGlobal.document.getElementById('km-chat-widget-close-button').addEventListener('click',function(){ var testClick = parent.document.getElementById("kommunicate-widget-iframe"); testClick.classList.remove("change-kommunicate-iframe-height"); });
               }
           };
      var s = document.createElement("script"); s.type = "text/javascript"; s.async = true;
      s.src = "https://widget.kommunicate.io/v2/kommunicate.app";
      var h = document.getElementsByTagName("head")[0]; h.appendChild(s);
      window.kommunicate = m; m._globals = kommunicateSettings;
    })(document, window.kommunicate || {});
</script>
	</body>
</html>

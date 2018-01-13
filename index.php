<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pizza Point</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- =======================================================
        Theme Name: Pizza_Point
        Theme URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
        Author: BootstrapMade.com
        Author URL: https://bootstrapmade.com
    ======================================================= -->
	<script language="javascript">
	 function book()
	 {
		  var n=document.bookfrm.name.value;
		  var d=document.bookfrm.date.value;
		  var e=document.bookfrm.email.value;
		  var t=document.bookfrm.time.value;
		  var ph=document.bookfrm.phone.value;
		  var pe=document.bookfrm.people.value;
		   
		if(n=='')	
		{	
		  document.getElementById("name").focus();
		  //document.write('enter your name');
		   //alert('enter your name');
		}
		else if(d=='')
		{		
		  document.getElementById("date").focus();
		}
		else if(e=='')		
		  document.getElementById("email").focus();
		else if(t=='')		
		  document.getElementById("time").focus();
		else if(ph=='')		
		 document.getElementById("phone").focus();
		else 
		  document.getElementById("people").focus();
		
	 }
	</script>
	
  </head>
  <body>
  
    <!--banner-->
    <section id="banner">
      <div class="bg-color">
        <header id="header">
            <div class="container">
                <div id="mySidenav" class="sidenav">
                  <a href="javascript:void(0)" class="closebtn" onClick="closeNav()">&times;</a>
                  <a href="#about">About</a>
                  <a href="#event">Event</a>
                  <a href="#menu-list">Menu Book</a>
                  <a href="#contact">Book a table</a>
		<a href="#map">Map</a>
		<a href="#pics_of_pizza">Pics Of Pizza</a>
		<a href="#home_delivery">Home Delivery</a>
		<a href="#discount_offers">Discount Offers</a>

                </div>
                <!-- Use any element to open the sidenav -->
                <span onClick="openNav()" class="pull-right menu-icon">☰</span>
            </div>
        </header>
        <div class="container">
        <div class="row">
          <div class="inner text-center">
            <h1 class="logo-name">Pizza Point</h1>
            <h2>Food To fit your lifestyle & health.</h2>
            <p>Specialized in Indian!!</p>
          </div>
        </div>
        </div>
      </div>
    </section>
    <!-- / banner -->
    <!--about-->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center marb-35">
                    <h1 class="header-h">Pizza Point Journey</h1>
                    
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="col-md-6 col-sm-6">
                        <div class="about-info">
                            <h2 class="heading"></h2>
                            <p>Chirag Raval is Started Pizza Point.</p>
                            <div class="details-list">
                                <ul>
                                    <li><i class="fa fa-check"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                                    <li><i class="fa fa-check"></i>Quisque finibus eu lorem quis elementum</li>
                                    <li><i class="fa fa-check"></i>Vivamus accumsan porttitor justo sed </li>
                                    <li><i class="fa fa-check"></i>Curabitur at massa id tortor fermentum luctus</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <img src="img/res01.jpg" alt="" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </section>
    <!--/about-->
    <!-- event -->
    <section id="event">
       <div class="bg-color" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center" style="padding:60px;">
                      <h1 class="header-h">Up Coming events</h1>
                      <p class="header-p">Decorations 100% complete here</p>
                    </div>
                    <div class="col-md-12" style="padding-bottom:60px;">
                        <div class="item active left">
                          <div class="col-md-6 col-sm-6 left-images">
                           <img src="img/res02.jpg" class="img-responsive">
                         </div>
                         <div class="col-md-6 col-sm-6 details-text">
                          <div class="content-holder">
                            <h2>Joyful party</h2>
                            <p>7/8, First Floor, Radhe shopping Mall, Khokhra Circle,<br> Maninagar East, Khokhra, Ahmedabad,<br> Gujarat 380008
                              <br>Time:
                              07:30pm
                            </p>
                            <a class="btn btn-imfo btn-read-more" href="events-details.html">Read more</a>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
       </div>
    </section>
    <!--/ event -->
    <!-- menu -->
    <section id="menu-list" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center marb-35">
                    <h1 class="header-h">Menu List</h1>
                    </div>
                <div class="col-md-12  text-center gallery-trigger">
                    <ul>
                        <li><a class="filter" data-filter=".category-1">Classic Pizza</a></li>
                        <li><a class="filter" data-filter=".category-2">Supreme Pizza</a></li>
                        <li><a class="filter" data-filter=".category-3">Stuffed Panini</a></li>
                        <li><a class="filter" data-filter=".category-4">Choice of Bread</a></li>
						<li><a class="filter" data-filter=".category-5">Hot Pasta</a></li>
						<li><a class="filter" data-filter=".category-6">Fun Time(Desserts)</a></li>
                        
                    </ul>
                </div>
                <div id="Container">			
				<div class="mix category-1 menu-restaurant  menu-cat" data-myorder="2">
                                              
                        <span class="menu-title" style="color:#FF9900;">Small</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<span class="menu-title" style="color:#FF9900;">Medium</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<span class="menu-title" style="color:#FF9900;">Large</span>	
                                          
                    </div>
				<div class="mix category-1 menu-restaurant" data-myorder="2">
                        <span class="clearfix">							
                       <br/><br/> <a class="menu-title" href="#">Margherita</a>
                        <span style="left: 166px; right: 44px;" class="menu-line"></span>
                        <span class="menu-price" style="left:590px;">₹.49.00</span>
						<span class="menu-price" style="left:690px;">₹.130.00</span>
						<span class="menu-price" style="left:810px;">₹.160.00</span>
                      </span>
                      <span class="menu-subtitle">Cheesy</span>
                    </div>		
						
					<div class="mix category-1 menu-restaurant" data-myorder="2">
					  <span class="clearfix">
					 <a class="menu-title" href="#">Simply veg</a>   
					  <span style="left: 166px; right: 44px;" class="menu-line"></span>             
                        <span class="menu-price" style="left:590px;">₹.70.00</span>
						<span class="menu-price" style="left:690px;">₹.135.00</span>
						<span class="menu-price" style="left:810px;">₹.165.00</span>
                      </span>
                      <span class="menu-subtitle">Cheese , Tomato & Onion</span>
					  </div>
                    
                   <div class="mix category-1 menu-restaurant" data-myorder="2">
					  <span class="clearfix">
					 <a class="menu-title" href="#">American margheria</a>   
					  <span style="left: 166px; right: 44px;" class="menu-line"></span>             
                        <span class="menu-price" style="left:590px;">₹.70.00</span>
						<span class="menu-price" style="left:690px;">₹.135.00</span>
						<span class="menu-price" style="left:810px;">₹.165.00</span>
                      </span>
                      <span class="menu-subtitle">Cheese , Tomato , Onion & Capsicum</span>
					  </div>
					  <div class="mix category-1 menu-restaurant" data-myorder="2">
					  <span class="clearfix">
					 <a class="menu-title" href="#">Spicy veg</a>   
					  <span style="left: 166px; right: 44px;" class="menu-line"></span>             
                        <span class="menu-price" style="left:590px;">₹.80.00</span>
						<span class="menu-price" style="left:690px;">₹.145.00</span>
						<span class="menu-price" style="left:810px;">₹.175.00</span>
                      </span>
                      <span class="menu-subtitle">Cheese , Tomato , Onion & Green Chilly</span>
					  </div>
					  <div class="mix category-1 menu-restaurant" data-myorder="2">
					  <span class="clearfix">
					 <a class="menu-title" href="#">Extra</a> <br/>					  
                      <span style="display: block;float: left;color:#000000;font-family:arial;font-size: 1.7rem;">Cheese</span>
					  <span style="left: 166px; right: 44px;" class="menu-line"></span>             
                        <span class="menu-price" style="left:590px;">₹.30.00</span>
						<span class="menu-price" style="left:690px;">₹.45.00</span>
						<span class="menu-price" style="left:810px;">₹.65.00</span>
                      </span>
					  </div>
					  <div class="mix category-1 menu-restaurant" data-myorder="2">
					  <span class="clearfix">
					   <span style="display: block;float: left;color:#000000;font-family:arial;font-size: 1.7rem;">Topping</span>
					  <span style="left: 166px; right: 44px;" class="menu-line"></span>             
                        <span class="menu-price" style="left:590px;">₹.45.00</span>
						<span class="menu-price" style="left:690px;">₹.25.00</span>
						<span class="menu-price" style="left:810px;">₹.35.00</span>
                      </span>
					  </div>
					  <div class="mix category-1 menu-restaurant" data-myorder="2">
					  <span class="clearfix">
					 <a class="menu-title" href="#">Small & Medium Thin Crust Pizza Available </a> <br/>			  
          
                        <span class="menu-price" style="left:590px;">₹.20.00(Extra)</span>
						<span class="menu-price" style="left:690px;">₹.35.00(Extra)</span>
                      </span>
					  </div>
					  <div class="mix category-2 menu-restaurant  menu-cat" data-myorder="2">
                                              
                        <span class="menu-title" style="color:#FF9900;">Small</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<span class="menu-title" style="color:#FF9900;">Medium</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<span class="menu-title" style="color:#FF9900;">Large</span>	
                                          
                    </div>
				<div class="mix category-2 menu-restaurant" data-myorder="2">
                        <span class="clearfix">							
                       <br/><br/> <a class="menu-title" href="#">Italian Special</a>
                        <span style="left: 166px; right: 44px;" class="menu-line"></span>
                        <span class="menu-price" style="left:590px;">₹.85.00</span>
						<span class="menu-price" style="left:690px;">₹.155.00</span>
						<span class="menu-price" style="left:810px;">₹.190.00</span>
                      </span>
                      <span class="menu-subtitle">Cheesy , Onion , Capsicum & Jalapeno</span>
                    </div>		
						
					<div class="mix category-2 menu-restaurant" data-myorder="2">
					  <span class="clearfix">
					 <a class="menu-title" href="#">Mix veg</a>   
					  <span style="left: 166px; right: 44px;" class="menu-line"></span>             
                        <span class="menu-price" style="left:590px;">₹.85.00</span>
						<span class="menu-price" style="left:690px;">₹.155.00</span>
						<span class="menu-price" style="left:810px;">₹.190.00</span>
                      </span>
                      <span class="menu-subtitle">Cheese , Corn , Capsicum & Paneer</span>
					  </div>
                    
                   <div class="mix category-2 menu-restaurant" data-myorder="2">
					  <span class="clearfix">
					 <a class="menu-title" href="#">Kids Special</a>   
					  <span style="left: 166px; right: 44px;" class="menu-line"></span>             
                        <span class="menu-price" style="left:590px;">₹.85.00</span>
						<span class="menu-price" style="left:690px;">₹.155.00</span>
						<span class="menu-price" style="left:810px;">₹.190.00</span>
                      </span>
                      <span class="menu-subtitle">Cheese , Pineapple , Corn & Tomato</span>
					  </div>
					  <div class="mix category-2 menu-restaurant" data-myorder="2">
					  <span class="clearfix">
					 <a class="menu-title" href="#">Spicy veg</a>   
					  <span style="left: 166px; right: 44px;" class="menu-line"></span>             
                        <span class="menu-price" style="left:590px;">₹.85.00</span>
						<span class="menu-price" style="left:690px;">₹.155.00</span>
						<span class="menu-price" style="left:810px;">₹.190.00</span>
                      </span>
                      <span class="menu-subtitle">Cheese , Tomato , Onion & Green Chilly</span>
					  </div>
					  <div class="mix category-2 menu-restaurant" data-myorder="2">
					  <span class="clearfix">
					 <a class="menu-title" href="#">Mashroom Delight</a>   
					  <span style="left: 166px; right: 44px;" class="menu-line"></span>             
                        <span class="menu-price" style="left:590px;">₹.85.00</span>
						<span class="menu-price" style="left:690px;">₹.155.00</span>
						<span class="menu-price" style="left:810px;">₹.190.00</span>
                      </span>
                      <span class="menu-subtitle">Cheese , Mashroom , Onion ,Capsicum & Tomato</span>
					  </div>
                    <div class="mix category-2 menu-restaurant" data-myorder="2">
					  <span class="clearfix">
					 <a class="menu-title" href="#">4 In One</a>   
					  <span style="left: 166px; right: 44px;" class="menu-line"></span>             
                        <span class="menu-price" style="left:590px;">₹.95.00</span>
						<span class="menu-price" style="left:690px;">₹.165.00</span>
						<span class="menu-price" style="left:810px;">₹.210.00</span>
                      </span>
                      <span class="menu-subtitle">Cheese , Onion , Capsicum , Tomato & Olive</span>
					  </div>
					  <div class="mix category-2 menu-restaurant" data-myorder="2">
					  <span class="clearfix">
					 <a class="menu-title" href="#">Tandoori Paneer</a>   
					  <span style="left: 166px; right: 44px;" class="menu-line"></span>             
                         <span class="menu-price" style="left:590px;">₹.95.00</span>
						<span class="menu-price" style="left:690px;">₹.165.00</span>
						<span class="menu-price" style="left:810px;">₹.210.00</span>
                      </span>
                      <span class="menu-subtitle">Cheese , Onion , Capsicum , Green Chilly & Paneer</span>
					  </div>
					  <div class="mix category-2 menu-restaurant" data-myorder="2">
					  <span class="clearfix">
					 <a class="menu-title" href="#">Golden Fantasy</a>   
					  <span style="left: 166px; right: 44px;" class="menu-line"></span>             
                         <span class="menu-price" style="left:590px;">₹.95.00</span>
						<span class="menu-price" style="left:690px;">₹.165.00</span>
						<span class="menu-price" style="left:810px;">₹.210.00</span>
                      </span>
                      <span class="menu-subtitle">Cheese , Pineapple & Paneer</span>
					  </div>
					  <div class="mix category-2 menu-restaurant" data-myorder="2">
					  <span class="clearfix">
					 <a class="menu-title" href="#">Hot & Spicy</a>   
					  <span style="left: 166px; right: 44px;" class="menu-line"></span>             
                         <span class="menu-price" style="left:590px;">₹.105.00</span>
						<span class="menu-price" style="left:690px;">₹.175.00</span>
						<span class="menu-price" style="left:810px;">₹.220.00</span>
                      </span>
                      <span class="menu-subtitle">Cheese , Jalapeno , Capsicum , Onion & Green Chilly</span>
					  </div>
					  <div class="mix category-2 menu-restaurant" data-myorder="2">
					  <span class="clearfix">
					 <a class="menu-title" href="#">Ahmedabad Treat</a>   
					  <span style="left: 166px; right: 44px;" class="menu-line"></span>             
                         <span class="menu-price" style="left:590px;">₹.105.00</span>
						<span class="menu-price" style="left:690px;">₹.175.00</span>
						<span class="menu-price" style="left:810px;">₹.220.00</span>
                      </span>
                      <span class="menu-subtitle">Cheese , Jalapeno , Pineapple , Paneer , Corn & Onion</span>
					  </div>
					  <div class="mix category-2 menu-restaurant" data-myorder="2">
					  <span class="clearfix">
					 <a class="menu-title" href="#">Pizza Point Special</a>   
					  <span style="left: 166px; right: 44px;" class="menu-line"></span>             
                         <span class="menu-price" style="left:590px;">₹.110.00</span>
						<span class="menu-price" style="left:690px;">₹.180.00</span>
						<span class="menu-price" style="left:810px;">₹.230.00</span>
                      </span>
                      <span class="menu-subtitle">Cheese , Jalapeno , Pineapple , Paneer , Corn , Onion ,Tomato & Olive</span>
					  </div>
                    <div class="mix category-3 menu-restaurant" data-myorder="2">
                        <span class="clearfix">
                        <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Italian Magic</a>
                        <span style="left: 166px; right: 44px;" class="menu-line"></span>
                        <span class="menu-price">₹.65.00</span>
                      </span>
                      <span class="menu-subtitle">Cabbage , Cucumber , Capsicum & Mayonnaise</span>
                    </div>
                    <div class="mix category-3 menu-restaurant" data-myorder="2">
                        <span class="clearfix">
                        <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Green House</a>
                        <span style="left: 166px; right: 44px;" class="menu-line"></span>
                        <span class="menu-price">₹.70.00</span>
                      </span>
                      <span class="menu-subtitle">Cabbage , Cucumber , Capsicum , Mayonnaise & Redsource</span>
                    </div>
                    <div class="mix category-3 menu-restaurant" data-myorder="2">
                        <span class="clearfix">
                        <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Chili Garlic</a>
                        <span style="left: 166px; right: 44px;" class="menu-line"></span>
                        <span class="menu-price">₹.80.00</span>
                      </span>
                      <span class="menu-subtitle">Cabbage , Cucumber , Capsicum & Cheesy Cheese Source</span>
                    </div>
					<div class="mix category-3 menu-restaurant" data-myorder="2">
                        <span class="clearfix">
                        <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Tandoori Paneer</a>
                        <span style="left: 166px; right: 44px;" class="menu-line"></span>
                        <span class="menu-price">₹.80.00</span>
                      </span>
                      <span class="menu-subtitle">Onion , Capsicum , Paneer & Tandoori Source</span>
                    </div>
					<div class="mix category-4 menu-restaurant" data-myorder="2">
                        <span class="clearfix">
                        <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Plain Garlic bread</a>
                        <span style="left: 66px; right: 44px;">(4 NOS)</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span class="menu-price">₹.55.00</span>
                      </span>
                    </div>
					<div class="mix category-4 menu-restaurant" data-myorder="2">
                        <span class="clearfix">
                        <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Cheese Garlic bread</a>
                        <span style="left: 166px; right: 44px;">(4 NOS)</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span class="menu-price">₹.65.00</span>
                      </span>
                    </div>
					<div class="mix category-4 menu-restaurant" data-myorder="2">
                        <span class="clearfix">
                        <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Masala Cheese Garlic bread</a>
                        <span style="left: 166px; right: 44px;">(4 NOS)</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span class="menu-price">₹.70.00</span>
                      </span>
                    </div>
					<div class="mix category-4 menu-restaurant" data-myorder="2">
                        <span class="clearfix">
                        <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Premium bread</a>
                        <span style="left: 166px; right: 44px;">(4 NOS)</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span class="menu-price">₹.70.00</span>
                      </span>
                    </div>
					<div class="mix category-4 menu-restaurant" data-myorder="2">
                        <span class="clearfix">
                        <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Corn Capsicum bread</a>
                        <span style="left: 166px; right: 44px;">(4 NOS)</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span class="menu-price">₹.80.00</span>
                      </span>
                    </div>
					<div class="mix category-4 menu-restaurant" data-myorder="2">
                        <span class="clearfix">
                        <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Olive jalapeno bread</a>
                        <span style="left: 166px; right: 44px;">(4 NOS)</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span class="menu-price">₹.80.00</span>
                      </span>
                    </div>
					<div class="mix category-4 menu-restaurant" data-myorder="2">
                        <span class="clearfix">
                        <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Pizza point special bread</a>
                        <span style="left: 166px; right: 44px;">(4 NOS)</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span class="menu-price">₹.90.00</span>
                      </span>
                    </div>
					
					<div class="mix category-5 menu-restaurant" data-myorder="2">
                        <span class="clearfix">
                        <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Red spicy pasta</a>
						 <span style="left: 166px; right: 44px;" class="menu-line"></span>                        
                        <span class="menu-price">₹.85.00</span>
                      </span>
                    </div>
					<div class="mix category-5 menu-restaurant" data-myorder="2">
                        <span class="clearfix">
                        <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">White cheesy pasta</a> 
						 <span style="left: 166px; right: 44px;" class="menu-line"></span>                       
                        <span class="menu-price">₹.85.00</span>
                      </span>
                    </div>
					<div class="mix category-5 menu-restaurant" data-myorder="2">
                        <span class="clearfix">
                        <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Hot noodles</a> 
						 <span style="left: 166px; right: 44px;" class="menu-line"></span>                       
                        <span class="menu-price">₹.90.00</span>
                      </span>
                    </div>
					<div class="mix category-5 menu-restaurant" data-myorder="2">
                        <span class="clearfix">
                        <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Salad bowl</a> 
						 <span style="left: 166px; right: 44px;" class="menu-line"></span>                       
                        <span class="menu-price">₹.90.00</span>
                      </span>
                    </div>
					<div class="mix category-5 menu-restaurant" data-myorder="2">
                        <span class="clearfix">
                        <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Unlimited salad</a> 
						 <span style="left: 166px; right: 44px;" class="menu-line"></span>                       
                        <span class="menu-price">₹.119.00</span>
                      </span>
                    </div>
					<div class="mix category-6 menu-restaurant" data-myorder="2">
                        <span class="clearfix">
                        <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Vanila ice cream</a> 
						 <span style="left: 166px; right: 44px;" class="menu-line"></span>                       
                        <span class="menu-price">₹.20.00</span>
                      </span>
                    </div>
					<div class="mix category-6 menu-restaurant" data-myorder="2">
                        <span class="clearfix">
                        <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Brownie with ice cream</a> 
						 <span style="left: 166px; right: 44px;" class="menu-line"></span>                       
                        <span class="menu-price">₹.40.00</span>
                      </span>
                    </div>
					<div class="mix category-6 menu-restaurant" data-myorder="2">
                        <span class="clearfix">
                        <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Mineral water</a> 
						 <span style="left: 166px; right: 44px;" class="menu-line"></span>                       
                        <span class="menu-price">₹.25.00</span>
                      </span>
                    </div>
					<div class="mix category-6 menu-restaurant" data-myorder="2">
                        <span class="clearfix">
                        <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Soft drinks 200ml</a> 
						 <span style="left: 166px; right: 44px;" class="menu-line"></span>                       
                        <span class="menu-price">₹.15.00</span>
                      </span>
                    </div>
					<div class="mix category-6 menu-restaurant" data-myorder="2">
                        <span class="clearfix">
                        <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Soft drinks 750ml</a> 
						 <span style="left: 166px; right: 44px;" class="menu-line"></span>                       
                        <span class="menu-price">₹.45.00</span>
                      </span>
                    </div>
                </div>
            </div>
				<?php			
						
						/* $con = mysql_connect("localhost","root","");
					 	 mysql_select_db("pizza_point",$con);	
						 $res=mysql_query("SELECT item_name,item_price FROM item");
						 while($row=mysql_fetch_array($res))
							{
							    $i_name=$row['item_name'];
								$i_price=$row['item_price'];
								
							 echo '<div class="mix category-1 menu-restaurant" data-myorder="2">';
					
                        echo '<span class="clearfix">';
						
                       echo '<br/><a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">'.$i_name.'</a>
                        <span style="left: 166px; right: 44px;" class="menu-line"></span>
                        <span class="menu-price">₹.'.$i_price.'</span><br/>';
						
						/*echo '<tr><td><a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">'.$i_name.'</a></td><td><span style="left: 166px; right: 44px;" class="menu-line"></span></td><td> <span class="menu-price">₹.'.$i_price.'</td></tr>';*/
						
						
                     /* echo '</span>';
               
                    echo '</div>';
					}*/
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!--/ menu -->
    <!-- contact -->
    <section id="contact" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="header-h">Book Your table</h1>
                    
                </div>
            </div>
            <div class="row msg-row">
                <div class="col-md-4 col-sm-4 mr-15">
                    <div class="media-2">
                        <div class="media-left">
                            <div class="contact-phone bg-1 text-center"><span class="phone-in-talk fa fa-phone"></span></div>
                        </div>
                        <div class="media-body">
                            <h4 class="dark-blue regular">Phone Numbers</h4>
                            <p class="light-blue regular alt-p">097244 33888 <span class="contacts-sp">Phone Booking</span></p>
                        </div>
                    </div>
                    <div class="media-2">
                        <div class="media-left">
                            <div class="contact-email bg-14 text-center"><span class="hour-icon fa fa-clock-o"></span></div>
                        </div>
                        <div class="media-body">
                            <h4 class="dark-blue regular">Opening Hours</h4>
                            <p class="light-blue regular alt-p"> 11:00 AM - 3:00 PM</p>
                            <p class="light-blue regular alt-p">
                                 6:00 PM - 10:30 PM
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8">
                    <form method="get" role="form" class="contactForm" name="bookfrm">

                    <div id="sendmessage">Your booking request has been sent. Thank you!</div>
                    <div id="errormessage"></div>
                    <div class="col-md-6 col-sm-6 contact-form pad-form">
                        <div class="form-group label-floating is-empty">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" onBlur="book()" />
                            <div class="validation"></div>
                        </div>
                        
                    </div>
                    <div class="col-md-6 col-sm-6 contact-form">
                        <div class="form-group">
                            <input type="date" class="form-control label-floating is-empty" name="date" id="date" placeholder="Date (dd/mm/yyyy)" data-rule="required" data-msg="This field is required"  onBlur="book()" />
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 contact-form pad-form">
                        <div class="form-group">
                            <input type="email" class="form-control label-floating is-empty" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email"  onBlur="book()"/>
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 contact-form">
                        <div class="form-group">
                            <input type="time" class="form-control label-floating is-empty" name="time" id="time" placeholder="Time (In Opening Hours)" data-rule="required" data-msg="This field is required"  onBlur="book()"/>
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 contact-form">
                        <div class="form-group">
                            <input type="text" class="form-control label-floating is-empty" name="phone" id="phone" placeholder="Phone" data-rule="required" data-msg="This field is required"  onBlur="book()" maxlength="10"/>
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 contact-form">
                        <div class="form-group">
                            <input type="text" class="form-control label-floating is-empty" name="people" id="people" placeholder="People" data-rule="required" data-msg="This field is required" />
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="col-md-12 contact-form">
                        <div class="form-group label-floating is-empty">
                            <textarea class="form-control" name="message" rows="5" rows="3" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
                        </div>
                        
                    </div>
                    <div class="col-md-12 btnpad">
                        <div class="contacts-btn-pad">
                            <button class="contacts-btn" name="b1" value="BookTable">Book Table</button>
   				
                        </div>
                    </div>
                    </form>
 
  			
                </div>
            </div>
        </div>
    </section>
      <?php
			
  					/* $con = mysql_connect("localhost","root","");
					  mysql_select_db("pizza_point",$con);	*/
					   $con = mysql_connect("localhost","id2145189_dhara","Dhara@2494");
		  			 mysql_select_db($con,"id2145189_pizza_point");	
					
								
         if(isset($_GET['b1']))
           {
		$n=$_GET['name'];
		$d=$_GET['date'];
		$e=$_GET['email'];
		$t=$_GET['time'];
		$ph=$_GET['phone'];
		$pe=$_GET['people'];
		$msg=$_GET['message'];
		 //echo "name".$n;
		 //$i=mysql_query("INSERT INTO book_table (bk_id,bk_name,bk_email,bk_phone,bk_date,bk_time,bk_people,bk_msg) 			VALUES (2,'abc','abc@gmail.com','9898056685',2017-04-02,02:11:00,3,'nice')");
            
		$i=mysql_query("INSERT INTO book_table (bk_name,bk_email,bk_phone,bk_date,bk_time,bk_people,bk_msg)VALUES 			('$n','$e','$ph','$d','$t',$pe,'$msg')");
		mysql_query("INSERT INTO user (u_name,u_email,u_phone)VALUES('$n','$e','$ph')");
         // $i=mysql_query("INSERT INTO book_table,user (u_name.user,u_email.user,u_phone.user,bk_name.book_table,bk_email.book_table,bk_phone.book_table,bk_date.book_table,bk_time.book_table,bk_people.book_table,bk_msg.book_table )VALUES ('$n','$e','$ph','$n','$e','$ph','$d','$t',$pe,'$msg')"); 
		
		if($i>0)
		   echo "<script>alert('Thankyou for Choosing Us........ plz ! Note :: That you will be come at Pizza Point Before 15 Minitus to Timming of order Otherwise Your Order will be Cancel....')</script>";
		else
			echo "<script>alert('plz ! try again')</script>";
           }
	
	?>
    <!-- / contact -->
<!--map-->
    <section id="map" class="section-padding">
    <div class="col-md-12 text-center marb-35">
                    <h1 class="header-h">Map</h1>
                        
                
        <a target="_blank" href="https://www.google.co.in/maps/place/Pizza+Point/@23.002856,72.6159891,17z/data=!3m1!4b1!4m5!3m4!1s0x395e86744ae90791:0x144950af1d5dd4cc!8m2!3d23.002856!4d72.6181778">
                        <img src="img/map.jpg" width="1200" height="500" alt="map">
       </a>
    </div>
    </section>
<!--/map-->


 <!--pics_of_pizza-->
    <section id="pics_of_pizza" class="section-padding">
   <div class="col-md-12 text-center marb-35">
     <h1 class="header-h">Pics of Pizza</h1>
   </div>
        <a target="_blank" href="img/images19.jpg">
                        <img src="img/images19.jpg" width="300" height="200" alt="" class="img_gallery">
                   </a>
   <a target="_blank" href="img/images20.jpg">
                        <img src="img/images20.jpg" width="300" height="200" alt="" class="img_gallery">
                   </a>
<a target="_blank" href="img/images21.jpg">
                        <img src="img/images21.jpg" width="300" height="200" alt="" class="img_gallery">
                   </a>
		
<a target="_blank" href="img/images8.jpg">
                        <img src="img/images8.jpg" width="300" height="200" alt="" class="img_gallery">
                   </a>

<a target="_blank" href="img/images22.jpg">
                        <img src="img/images22.jpg" width="300" height="200" alt="" class="img_gallery">
                   </a>

<a target="_blank" href="img/images10.jpg">
                        <img src="img/images10.jpg" width="300" height="200" alt="" class="img_gallery">
                   </a>
<a target="_blank" href="img/index2.jpg">
                        <img src="img/index2.jpg" width="300" height="200" alt="" class="img_gallery">
                   </a>
<a target="_blank" href="img/index3.jpg">
                        <img src="img/index3.jpg" width="300" height="200" alt="" class="img_gallery">
                   </a>

    </section>
    <!--/pics_of_pizza-->

    <!-- home delivery -->
    <section id="home_delivery" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="header-h">Home Delivery</h1>
                    
                </div>
            </div>
            <div class="row msg-row">
                <div class="col-md-4 col-sm-4 mr-15">
                    
                    <div class="media-2">
                        <div class="media-left">
                            <div class="contact-email bg-14 text-center"><span class="hour-icon fa fa-clock-o"></span></div>
                        </div>
                        <div class="media-body">
                            <h4 class="dark-blue regular">Opening Hours</h4>
                            <p class="light-blue regular alt-p"> 11:00 AM - 3:00 PM</p>
                            <p class="light-blue regular alt-p">
                                 6:00 PM - 10:30 PM
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8">
                    <form method="get" role="form" class="contactForm" name="frm" >

                    
                    <div class="col-md-6 col-sm-6 contact-form pad-form">
                       <!-- <div class="form-group label-floating is-empty">-->
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                       <!-- </div>-->
                        
                    </div>
                  <br/><br/><br/>
                    <div class="col-md-6 col-sm-6 contact-form pad-form">
                       <!-- <div class="form-group" >-->
                            <input type="email" class="form-control label-floating is-empty" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        <!--</div>-->
                    </div>
                  
                    <div class="col-md-6 col-sm-6 contact-form">
                       <!-- <div class="form-group">-->
                            <input type="text" class="form-control label-floating is-empty" name="phone" id="phone" placeholder="Phone" data-rule="required" data-msg="This field is required" />
                            <div class="validation"></div>
                     <!--   </div>-->
                    </div>
                   
                    <div class="col-md-12 contact-form">
                        <div class="form-group label-floating is-empty">
                            <textarea class="form-control" name="address" rows="5" rows="3" data-rule="required" data-msg="Please write Address" placeholder="Address"></textarea>
                            <div class="validation"></div>
                        </div>
                        
                    </div>
                    <div class="col-md-12 btnpad">
                        <div class="contacts-btn-pad">
                            <button class="contacts-btn" name="b2" value="Give Order">Give Order</button>
   				
                        </div>
                    </div>
                    </form>
 
  			
                </div>
            </div>
        </div>
    </section>
      <?php
			
  					 /*$con = mysql_connect("localhost","root","");
					  mysql_select_db("pizza_point",$con);		*/
					   $con = mysql_connect("localhost","id2145189_dhara","Dhara@2494");
		   mysql_select_db($con,"id2145189_pizza_point");
					
								
         if(isset($_GET['b2']))
           {
		$na=$_GET['name'];
		
		$em=$_GET['email'];
		
		$pho=$_GET['phone'];
		$add=$_GET['address'];
		
		 //echo "name".$n;
		 //$i=mysql_query("INSERT INTO home_delivery (hm_name,hm_email,hm_phone,hm_add) VALUES ('abc','abc@gmail.com','9898056685','nice .vxxvxvaj')");
            
		$i=mysql_query("INSERT INTO home_delivery (hm_name,hm_email,hm_phone,hm_address)VALUES('$na','$em','$pho','$add')");
		mysql_query("INSERT INTO user (u_name,u_email,u_phone)VALUES('$na','$em','$pho')");
		
		if($i>0)
		   echo "<script>alert('Thanks for Choosing Us.....')</script>";
		else
			echo "<script>alert('plz ! try again....')</script>";
           }
		   
	
	?>
    <!-- / home delivery -->

<!--discount_offers-->
    <section id="discount_offers" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center marb-35">
                    <h1 class="header-h">Discount Offer</h1>
                    
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="col-md-6 col-sm-6">
                        <div class="about-info">
                            <h2 class="heading">Today's Offer</h2>
                            <?php
                          
                              echo  '<ul>';
							  $res=mysql_query($con,"SELECT * FROM discount_offer");
							  while($row1=mysql_fetch_array($res))
							  {
							    $i_name=$row1['do_item_name'];
								$d_i_price=$row1['do_item_price'];
								$d_i_qty=$row1['do_item_quantity'];
								$des=$row1['description'];
								$image=$row1['do_image'];
                                   echo '<li><img src='.$image.' alt="" class="img-responsive"></li>
								   <li><i class="fa fa-check"></i>Item Name :: '.$i_name.'</li>
                                    <li><i class="fa fa-check"></i>Item Quntity :: '.$d_i_qty.'</li>
                                    <li><i class="fa fa-check"></i>Item Price :: '.$d_i_price .'</li>
                                    <li><i class="fa fa-check"></i>'.$des.'</li><br/><br/>';
							 }
                               echo '</ul>';
                          
                      
                 
					?>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </section>
    <!--/discount_offers-->




    <!-- footer -->
    <footer class="footer text-center">
        <div class="footer-top">
            <div class="row">
                <div class="col-md-offset-3 col-md-6 text-center">
                    <div class="widget">
                        <h4 class="widget-title">Pizza Point</h4>
                        <address>7/8, First Floor, Radhe shopping Mall, Khokhra Circle,<br> Maninagar East, Khokhra, Ahmedabad,<br> Gujarat 380008</address>
                        <div class="social-list">
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </div>
                        <p class="copyright clear-float">
                           
                            <div class="credits">
                                <!-- 
                                    All the links in the footer should remain intact. 
                                    You can delete the links only if you purchased the pro version.
                                    Licensing information: https://bootstrapmade.com/license/
                                    Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Delicious
                                -->
                                Designed and Developed by Dhara Patel 
                            </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- / footer -->
    
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>
    
</body>
</html>
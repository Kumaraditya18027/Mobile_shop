<html>
    <head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>WELCOME</title>
        <style>
		
		/**************************************************************W3 SCHOOLS(for header)f********************************************************************************/
* {
    box-sizing: border-box;
}

/* Style the body */
body {
    font-family: Arial, Helvetica, sans-serif;
    margin: 0;
}

/* Header/logo Title */
.header {
    padding: 40px;
    text-align: center;
    background: #1abc9c;
    color: white;
}

/* Increase the font size of the heading */
.header h1 {
    font-size: 40px;
}


    .back
      {
         width:100%;
            
                height: 100%;
                background-color: rgba(0,0,0,0.5);
            }

/* Sticky navbar - toggles between relative and fixed, depending on the scroll position. It is positioned relative until a given offset position is met in the viewport - then it "sticks" in place (like position:fixed). The sticky value is not supported in IE or Edge 15 and earlier versions. However, for these versions the navbar will inherit default position */
.navbar {
    overflow: hidden;
    background-color: #333;
    position: sticky;
    position: -webkit-sticky;
    top: 0;
}

/* Style the navigation bar links */
.navbar a {
    float: left;
    display: block;
    color: white;
    text-align: center;
    padding: 14px 20px;
    text-decoration: none;
}


/* Right-aligned link */
.navbar a.right {
    float: right;
}

/* Change color on hover */
.navbar a:hover {
    background-color: #ddd;
    color: black;
}

/* Active/current link */
.navbar a.active {
    background-color: #666;
    color: white;
}

/* Column container */
.row {  
    display: -ms-flexbox; /* IE10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE10 */
    flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
    -ms-flex: 30%; /* IE10 */
    flex: 30%;
    background-color: #f1f1f1;
    padding: 20px;
}

/* Main column */
.main {   
    -ms-flex: 70%; /* IE10 */
    flex: 70%;
    background-color: white;
    padding: 20px;
}

/* Fake image, just for this example */
.fakeimg {
    background-color: #aaa;
    width: 100%;
    padding: 20px;
}

/* Footer */
.footer {
    padding: 20px;
    text-align: center;
    background: #ddd;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
    .row {   
        flex-direction: column;
    }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
    .navbar a {
        float: none;
        width: 100%;
    }
}
 
/**************************************************************************************************************************************************************************/  
/*******************************************************W3 SCHOOLS(for header)f********************************************************************************/
         .topnav {
        background-color: cornflowerblue;
        overflow: hidden;
    }

    /* Style the links inside the navigation bar */
    .topnav a {
        float: left;
        color: azure;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }

    /* Change the color of links on hover */
    .topnav a:hover {
        background-color: #ddd;
        color: black;
    }

    /* Add a color to the active/current link */
    .topnav a.active {
        background-color:darkblue;
        color: white;
    }
	
	.card {
	margin:0 auto;	
    box-shadow: 0PX 04px 08px 0px rgba(0,0,0,0.6);
    transition: 0.3s;
    width:25%;
}

.card:hover {
    box-shadow: 0 8px 16px 0px rgba(0,0,0,0.6);
	
}

.container {
	
    padding: 20px 50px;
	margin:0 auto;
	
}

/**************************************************************************************************************************************************************************/   
        </style>
    </head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <body >
	          <div class="back" >
        <div class="hero-image">
    <div class="header">
      <h1>A1 Mobile Shop</h1>
      <p><b>Be Wise Shop Wise</b> </p>
    </div>
<!------------------------------------------------------------W3 SCHOLLS (FOR HEADER)------------------------------------------------------------------------------------->
        <div class="navbar">
          <a class="active" href="index.php">Home</a>
           <a href="mobile.php">Mobile</a>
          <a href="about.php">About</a>
           <a href="login.php" style="float: right;">ADMIN SECTION</a>
        </div>
        <br>
<!----------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    
        <div class="row">
  <div class="side">
      <h2>Latest Mobiles</h2>
      <h5>FUTURE OF MOBILE IS HERE:</h5>
      <div class="fakeimg" style="height:200px"><img src="future_image.jpg" height=100% width="100%" ></div>
      <p>We Provide all types of mobile phones but in reasonable rate</p>
      <h3>POPULAR NOW DAYS ARE:</h3>
      <div class="fakeimg" style="height:70px;"><h2><b>REDME</b></h2></div><br>
      <div class="fakeimg" style="height:70px;"><h2><b>IPHONE</b></h2></div><br>
      <div class="fakeimg" style="height:70px;"><h2><b>PANASONIC</b></h2></div>
  </div>
  <div class="main">
             <div class="xyz"><strong>WHAT DO WE DO?</strong>
<br><hr>
A1 MobileShop gives you a chance to quickly and easily find the phone you want and have it delivered to your home in no time, regardless of your location, as long as it is in one of the countries of the EU.
<br><br><strong>
WHY DO CUSTOMERS LOVE US?</strong>
<br><hr>
We have been in the business for quite a while now, and it that time we have not only managed to make close relationships with numerous suppliers all over the world, but also to recognize what people need. This means that we are always able to offer all the latest phones, great prices, reliable service, fast delivery and premium customer support.
<br><br></div>

        <P align="center"><strong><u>MEET THE TEAM</u></strong></p><BR><BR>

    
	<div class="card" align="center">
        <img src="img_avatar.png" alt="Avatar" style="width:22%  ">
		<div class="container">
		<h4><b>AJINKYA PAWAR</b></h4> 
		<p>  SENIOR Engineer</p> 
		<img src="img_avatar.png" alt="Avatar" style="width:22%  ">
		<div class="container" align="center">
		<h4><b>NIKHIL PATIL</b></h4> 
		<p> SENIOR Engineer</p> 
	</div>
	</div>
	</div><br><br>

	<div class="card" align="center">
		<img src="img_avatar.png" alt="Avatar" style="width:22%  ">
		<div class="container">
		<h4><b>HARSHIT MISHRA</b></h4> 
		<p> OWNER</p> 
		<img src="img_avatar.png" alt="Avatar" style="width:22%  ">
		<div class="container">
		<h4><b>VALABH SAKLANI</b></h4> 
		<p> OWNER</p> 
	</div>
	</div>
	</div><br><br>
       
        
  </div>
</div>
</div>
</div>               
  </div>
  
    </body>
</html>



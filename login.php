
<html>
    <head>
        <title>WELCOME</title>
        <style>
           

           body {font-family: Arial, Helvetica, sans-serif;}


input[type=text], input[type=password] {
    width: 100%;
	text-align:center;
    padding: 12px 20px;
	align: center;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
	text-align:center;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}
    .hero-image {
	width:100%;
    color:black;
    font-size: 20px;    
    opacity:0.8.5;
  background-image: url("ghj.jpg");
  height:100%;
  background-repeat: no-repeat;
  background-size: cover;
}


button:hover {
    opacity: 0.8;
}

.imgcontainer {
    text-align:center;
    margin: 30px 0 08px 0;
}

img.avatar {
	
    width: 18%;
    border-radius: 50%;
}

.container {
	text-align:center;
	margin:0 auto;
    padding: 19px;
	width:30%;
	border-radius:10%;
}	
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
    -ms-flex: 32%; /* IE10 */
    flex: 30%;
    background-color: #f1f1f1;
    padding: px;
}

/* Main column */
.main {   
    -ms-flex: 50%; /* IE10 */
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
 
/***********************************************************************************************************************************************************/  
/****************************************W3 SCHOOLS(for header)f********************************************************************************/
        </style>
    </head>
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
        </div>
<!----------------------------------------------------------------------------------------------------------------------------------------------------------------------->
        
              
        <div class="row">
  <div class="side">
      <h2>Latest Mobiles</h2>
      <h5>FUTURE OF MOBILE IS HERE:</h5>
      <div class="fakeimg" style="height:200px"><img src="future_image.jpg" height=100% width="100%" ></div>
      <p>We Provide all types of mobile phones but in reasonable rate</p>
      <h3>POPULAR NOW DAYS ARE:</h3>
      <div class="fakeimg" style="height:80px;"><h2><b>REDME</b></h2></div><br>
      <div class="fakeimg" style="height:80px;"><h2><b>IPHONE</b></h2></div><br>
      <div class="fakeimg" style="height:80px;"><h2><b>PANASONIC</b></h2></div>
  </div>
  <div class="main">
    
        <H2 align="center">ADMIN LOGIN</H2>
        
        <form method="post" action="check.php">
           <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar"></div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit" value="LOGIN">Login</button>
    
            </div>
        </form>
        
		</div>
        </table>          
  </div>
</div>
</div>
</div>   
        
    </body>
</html>
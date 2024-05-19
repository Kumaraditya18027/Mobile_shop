<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
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
.fakeimgL {
    background-color: #aaa;
    width: 100%;
    padding: 20px;
}
.fakeimgR {
    background-color: #aaa;
    width: 50%;
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
 
</style>
</head>
<body>
<div class="back" >
	<div class="hero-image">
    <div class="header">
      <h1>A1 Mobile Shop</h1>
      <p><b>Be Wise Shop Wise</b> </p>
    </div>


    <div class="navbar">
      <a href="index.php" class="active">Home</a>
        <a  href="mobile.php">Mobiles</a>
       <a href="about.php">About</a> 
          <a href="login.php" style="float: right;">ADMIN SECTION</a>
    </div>

    <div class="row">
      <div class="side">
          <h2>WELCOME </h2>
          <h5>Photo of me:</h5>
          <div class="fakeimgL" style="height:200px"><img src="downloada.jpg" height=100% width="100%" ></div>
          <p>We Provide all types of mobile phones but in reasonable rate</p>
          <h3>OUR BRACHES</h3>
          <p>Three Main Branches:</p>
          <div class="fakeimg" style="height:70px;"><h2><b>ANDHERI</b></h2></div><br>
          <div class="fakeimg" style="height:70px;"><h2><b>KANDIVALI</b></h2></div><br>
          <div class="fakeimg" style="height:70px;"><h2><b>BORIVALI</b></h2></div>
      </div>
      <div class="main">
          <h2>MAIN BRACH</h2>
          <h5>Opening Ceremony, Dec 7, 2017</h5>
          <div class="fakeimgR" style="height:200px;"><img src="open1.jpg" height=100% width=100%></div>
          <p>On Dec 7, 2017,We open our main branch at andheri east.</p>
          <p>That was opening day so we gave a huge discount on every product and for every person who visited our shop and people loved it.</p>
          <br>
          <h2>Second Branch</h2>
          <h5>Opening Ceremony, Sep 2, 2017</h5>
          <div class="fakeimgR" style="height:200px;"><img src="open2.jpg" height=100% width=100%></div>
          <p>This is our second shop.</p>
          <p>On Sep 2, 2017,On the ocassion of cristmas we open our second shop because of getting huge response from customers.</p>
      </div>
    </div>
  </div>
</div>
</body>
</html>

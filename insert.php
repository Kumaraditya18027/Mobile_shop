<html>
    <head>
        <title>INSERT</title>
        <style>
            table{
                width: 25%;
                font-size: 25px;
            }
            .button{
                width: 380px;
                height: 35x;
                color: red;
                font-size: 20px;
            }
/**************************************************************W3 SCHOOLS(for header)f********************************************************************************/
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


.container {
    width: auto;
    margin:0 auto;
    border-radius: 5px;
    background-color: lightcyan;
    padding: 20px;
}
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}
/**************************************************************************************************************************************************************************/   
        </style>
        <script>
            function validate(pass){
                if (document.valueOf(pass) > 10){
                    document.getElementById("msg").innerHTML="rating sholud be less than 10";
                }
                else{
                     document.getElementById("msg").innerHTML="";
                }
            }
        </script>
    </head>
    <body bgcolor="lightblue">
        <div class="back" >
        <div class="hero-image">
    <div class="header">
      <h1>A1 Mobile Shop</h1>
      <p><b>Be Wise Shop Wise</b> </p>
    </div>
<!--------------------------------------------------------W3 SCHOLLS (FOR HEADER)------------------------------------------------------------------------------------->
        <div class="navbar">
            <a href="login.php" style="float: right;">Log Out</a>
          <a href="welcome.php" style="float: right;">All Mobiles</a>
        </div>
        <br>
<!----------------------------------------------------------------------------------------------------------------------------------------------------------------->

    
    
     
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
                     <p align="center"><h2>INSERT NEW ITEM HERE</h2></p>
		<div class="container" align="center">
        <form action="welcome.php" method="post" onsubmit="return validate()">
            <table>
            <tr>
                <td>MOBILE NAME:</td>
                <td><input  type="text" name="mname" required></td>
            </tr> 
            <tr>
                <td>Brand:</td>
                <td><input  type="text" name="brand" required></td>
            </tr>
            <tr>
                <td>Price:</td>
                <td><input  type="text" name="price" required></td>
            </tr>
            <tr>
                <td>Description:</td>
                <td><input type="text" name="description" required></td>
            </tr>
            <tr>
                <td>Rating:</td>
                <td><input type="text" name="rating" onkeyup="validate(this.value)"><div id="msg"></div></td>
            </tr>
            </table>
                <input class="button" type="submit" value="ADD TO LIST" name="submit">
        </form>
		</div>
  </div>
</div>
</div>
</div>
    </body>
</html>
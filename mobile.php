<html lang="en">
    <head>
        <title>WELCOME</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <style>
               <?php
            error_reporting(0);
       $conne = mysqli_connect("localhost","id7605178_a1mobile_shop","50515256","id7605178_mobile_shop");
	   if($conne->connect_error){
           echo "connection was failed";
	   }
	   else
	   {
           echo"";
	   }
        $mid= $_GET['mid'];
		$mname= $_GET['mname'];
		$price= $_GET['price'];
    
            //------------------------INSERT-----------------------------
			if($mid!="0"){
                $sql="INSERT into cart(mid,mname,price)
                values('$mid','$mname','$price');";
                $conne->query($sql);
            }
            //------------------------------------------------------------
            
            
            //------------------------CART_COUNT----------------------------
                $sql = "SELECT * FROM cart";
                $result = $conne -> query($sql);
                $total=$result -> num_rows;
            //--------------------------------------------------------------
        $conne->close();
            ?>
            table{
                border-collapse: collapse;
                width: 100%;
                color:black;
                font-family: monospace;
                font-size: 22px;
                text-align: left;
            }
            th{
                background-color:green;
                color:lightcyan;
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
 
/****************************************************************************************************************************/           
        </style>
    </head>
<body>
<div class="back" >
<div class="hero-image">
    <div class="header">
      <h1>A1 Mobile Shop</h1>
      <p><b>Be Wise Shop Wise</b> </p>
    </div>

<!------------------------------------------------------------W3 SCHOLLS (FOR ER)----------------------------------------->
        <div class="navbar">
          <a class="active" href="index.php">Home</a>
          <a href="cart.php">CART(<?php echo $total; ?>)</a>
          <a href="about.php">About</a>
           <a href="login.php" style="float: right;">ADMIN SECTION</a>
        </div>
        <br>
<!------------------------------------------------------------------------------------------------------------------------>        
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
                <table>
                    <tr>
                        <th>Sr.NO</th>
                        <th>MOBILE NAME</th>
                        <th>BRAND</th>
                        <th>PRICE</th>
                        <th>DESCRIPTION</th>
                        <th>RATING</th>
                        <th>ADD<BR>TO<BR>CART</th>
                    </tr>
                    <?php
                        error_reporting(0);
                       $conne = mysqli_connect("localhost","id7605178_a1mobile_shop","50515256","id7605178_mobile_shop");
                        if($conne -> connect_error){
                            die("CONNECTION FAILED:" . $conne -> connect_error);
                        }
                    $sql = "SELECT * FROM  mobile";
                    $result = $conne -> query($sql);
                    if($result -> num_rows > 0){
                        while ($row = $result -> fetch_assoc()){
                            $count=$count+1;
                            $mname=$row["mname"];
                            $price=$row["price"];
                            $mid=$row["mid"];
                            echo "<tr><td>".$count."</td><td>".$row["mname"]."</td><td>".$row["brand"]."</td><td>".$row["price"]."</td><td>".$row["description"]."</td><td>".$row["rating"]."</td><td><a href=\"mobile.php?mid=$mid&mname=$mname&price=$price\">ADD</a></td></tr>";
                        }
                        echo "</table>";
                    }
                    else{
                        echo "0 result";
                    }
                    
                    $conne -> close();
                    ?>
                </table>
          </div>
    </div>
</div>
</div>
</body>
</html>             


 
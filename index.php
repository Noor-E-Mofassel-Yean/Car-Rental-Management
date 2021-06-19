<!DOCTYPE html>
<html>
<head>
	<title>Online Car Rental Management System</title>
	<link rel="stylesheet" type="text/css" href="styleindex.css">
</head>
<body>

<div class="flex-container">

<header align="center">
<h1>Online Car Rental Management System</h1>
</header>

<ul>
  <li><a href="index.php">Home</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Insert Data</a>
    <div class="dropdown-content">	
      <a href="Booking_Information_Form.php">Car Booking</a>
      <a href="Customer_Information_Form.php">Customer Information</a>
      <a href="Driver_Information_form.php">Driver Information</a> 
	  <a href="form.php">Car Information</a>
	  <a href="Payment_Information_Form.php">Payment Information</a>
	  <a href="Time_&_Location_Form.php">Car Time & Location</a>
	  
    </div>
  </li>
  
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">View Information</a>
    <div class="dropdown-content">     
	  <a href="Booking_view.php">Booked Car</a>
      <a href="car_view.php">Car Information</a>
      <a href="Customer_view.php">Customer Information</a> 
	  <a href="Driver_view.php">Driver Information</a>
	  <a href="payment_view.php">Car's Payment Information</a>
	  <a href="Time_&_Location_view.php">Time & Location Information</a>	  
    </div>	
  </li>
  <li><a href="inner_join.php">Car List</a></li>
  <li><a href="car_info_search.php">Search Car</a></li>
  <li><a href="admin.php">Admin</a></li>
  <li><a href="about.php">About</a></li>
  
  
</ul>






<div class="part_2">
    <div class="w3-content w3-section">
  

  <img class="mySlides w3-animate-fading" src="images/a.jpeg" style="width:65%">
  <img class="mySlides w3-animate-fading" src="images/b.jpg" style="width:65%">
  <img class="mySlides w3-animate-fading" src="images/c.jfif" style="width:65%">
  <img class="mySlides w3-animate-fading" src="images/d.png" style="width:65%">
  <img class="mySlides w3-animate-fading" src="images/e.jpg" style="width:65%">

  <img class="mySlides w3-animate-fading" src="images/f.jpg" style="width:65%">
  <img class="mySlides w3-animate-fading" src="images/g.jpg" style="width:65%">
  <img class="mySlides w3-animate-fading" src="images/h.jpg" style="width:65%">
  <img class="mySlides w3-animate-fading" src="images/i.jpg" style="width:65%">
  <img class="mySlides w3-animate-fading" src="images/j.jpg" style="width:65%">

  <img class="mySlides w3-animate-fading" src="images/k.jpg" style="width:65%">
  <img class="mySlides w3-animate-fading" src="images/l.jpg" style="width:65%">
  <img class="mySlides w3-animate-fading" src="images/m.jpg" style="width:65%">
  <img class="mySlides w3-animate-fading" src="images/n.jpg" style="width:65%">
  <img class="mySlides w3-animate-fading" src="images/o.jpg" style="width:65%">

  <img class="mySlides w3-animate-fading" src="images/p.jpg" style="width:65%">
  <img class="mySlides w3-animate-fading" src="images/q.jpg" style="width:65%">
  
</div>
    </div>










  



  <div class="footer">
    
    <h4>Developed by -NEXUS | The students of IUBAT | Department of CSE</h4>

  </div>







<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 3000);    
}
</script>


</body>
</html>
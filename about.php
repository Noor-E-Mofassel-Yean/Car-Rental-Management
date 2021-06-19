<!DOCTYPE html>
<html>
<head>
<style>
table {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
	
	
}

table td, table th {
    border: 1px solid #ddd;
    padding: 8px;
	text-align: center;
}

table tr:nth-child(even){background-color: #f2f2f2;}

table tr:hover {background-color: #ddd;}

table th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: #4CAF50;
    color: white;
}
</style>
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
  <li><a href="car_info_search.php">Search</a></li>
  <li><a href="admin.php">Admin</a></li>
  <li><a href="about.php">About</a></li>
  
  
</ul>






<h2 align=center>Group Name: Nexus </h2>
<h2 align=center>Member Information </h2>
<table>
  <tr>
    <th>SN</th>
    <th>Name</th>
    <th>ID</th>
  </tr>
  
  <tr>
    <td>01.</td>
    <td>Md. Mahadi Hassan Rasel</td>
    <td>13103058</td>
  </tr>
  <tr>
    <td>02. </td>
    <td>Noor-E-Mofassel</td>
    <td>14103036</td>
  </tr>
  <tr>
    <td>03.</td>
    <td>Muhammad Aminul Islam</td>
    <td>14203048</td>
  </tr>
  <tr>
    <td>04.</td>
    <td>Binay Krishna Majumder</td>
    <td>16303053</td>
  </tr>
    <tr>  
  <td>05. </td>
    <td>Umma Jinnatunnasa(L)</td>
    <td>17103168</td> 
  </tr>
</table>
<br><br>





  <div class="footer">
    
    <h4>Developed by -Nexus| The students of IUBAT | Department of CSE</h4>

  </div>


</body>
</html>
<?php include('depdataphp.php')?>
<!DOCTYPE html>
<html lang="en">
<title>Department Data</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/font.css">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
    
    table {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
    }

    td,th {
  border: 1px solid #ddd;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2;}

tr:hover {background-color: #ddd;}

th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-black w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
    <div class="w3-container w3-white">
    <h3>MENU</h3>
    </div>
    <img src="images/homepic4.jpg" alt="Snow" style="width:100%;padding-top: 15px;padding-bottom: 15px">
    <div class="w3-container w3-white">
    <h3>Payroll System</h3>
    </div>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    
      
  </div>
  <div class="w3-bar-block">
      
      <dl>
          <dt><a href="home.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white w3-green">Home</a> </dt>
  <dt><a href="department.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Department</a> </dt>
          <dd></dd>
    <dt><a href="employee.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">  Employee  </a></dt>
          
          <dt><a href="employee-payment.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Payment Parameters</a> </dt>
          <dt><a href="employee-payslip.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Pay slip</a> </dt>
          <dt><a href="employee-setsalary.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Set salary</a> </dt>
          <dt><a href="employee-payhistory.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Payment history</a> </dt>

                 
          <dt><a href="logout.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white w3-red">Logout</a> </dt>
</dl>
      
    
     
   
    
    
    
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>Payroll system</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
  <div class="w3-main" style="margin-left:290px;margin-right:-10px;margin-top: -5px;margin-bottom: 0px">

  <!-- Header -->
      
      <div class="w3-display-container w3-text-white" style="font-size: 100px">
          <img src="images/banner3.jpg" alt="Lights" style="width:100%" style="height: 50%">
          <div class="w3-display-middle w3-large" > <h1 >DEPARTMENT</h1></div>
      </div>
   <div class="w3-container">
      <h3>Department Data</h3>
       
       <a href="department-add.php" class="w3-button w3-black w3-right">Add Department <span class="w3-text-red">+</span></a>
       <table>
            <tr><th>Department id</th><th>Department Name</th><th colspan="2">Action</th></tr>
           <?php while($row=mysqli_fetch_array($result)) {?>
           <tr>
               <td><?php echo $row['Depart_id']; ?></td>
               <td><?php echo $row['Depart_name']; ?></td>
              
               <td><a href="dep-deletephp.php?del=<?php echo $row['Depart_id']; ?>" class="w3-button w3-red">Delete</a></td>
           </tr>
           <?php } ?>
       </table>
      </div>
      
          
  </div>



<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

</body>
</html>

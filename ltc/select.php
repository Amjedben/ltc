<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">

.btn-group .button {
  background-color: #3a5567;
  border: 1px solid #f6f7f7;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  float: left;
  width: 100%;

    } 
.btn-group .button:not(:last-child) {
  border-right: none; 
    }

.btn-group .button:hover {
  background-color: #0096884d;
}
.btn-group{
    margin-left: 0%;
    margin-top: 0%;
    border: inset;
    border-color: cadetblue;
    height: 95%;
    position: absolute;
    width: 17%;
    border-radius: 4%;
    background-image:url(border.jpg);
  
}
.input1[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

.button1 {
  background-color: #0b9285;
  border: 1px solid #f6f7f7;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}
.container {
  padding: 16px;
}
span.psw {
  float: right;
  padding-top: 16px;
}
.modal {
  display: none; 
  position: fixed; 
  z-index: 1; 
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  overflow: auto; 
  background-color: rgb(0,0,0); 
  background-color: rgba(0,0,0,0.4); 
  padding-top: 60px;
}

.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; 
  border: 1px solid #888;
  width: 30%; 
}   
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #3e8e41;
}
.dropdown-content {
  display: none;
}
.dropdown-content1{
    margin-top: 4%;
    position: absolute;
    margin-left: 12%;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}


.show {display: block;}
.img{
border-radius: 36%;
    position: absolute;
    width: 8%;
    height: initial;
    margin-left: 44%;
    margin-top: -1%;
}
.a{
    background-color: #279fff3b;
    width: 27%;
    height: 21%;
    background-image: url(img.png);
    position: absolute;
    margin-left: 35%;
  
  }
  #customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}
#customers tr:hover {background-color: #ddd;}
#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
.table{
    margin-left: 20%;
    position: absolute;
    overflow: auto;
    height: 73%;
    margin-top: 10%;
    width: 78%;
}
</style>
<body>
  <div class="a">

</div>
<div class="btn-group">
  <br>
           <button class="button" onclick="window.location.href = 'min.html';">Home</button><br><br><br><br>
    <div class="dropdown">
            <button class="button" onclick="myFunction()" class="dropbtn">Tools</button>
            <div id="myDropdown" class="dropdown-content">
            <button class="button" onclick= "window.location.href = 'delete.php'";>Delate</button>
            <button class="button">Add</button>
            <br><br><br><br>
           </div>
    </div>
            
</div>
<div id="id01" class="modal">
  <form class="modal-content animate" action="insert.php" method="get">
    <div class="container">
      <label>Invoice:#</label>
      <input type="number" name="inv" id="inv" required="">
      <br><br>
        <label>Amount</label>
        <input type="number" name="amount" id="amount" required="">
        <br><br>
        <label>Date</label>
        <input type="Date" name="data" id="data" required="">
        <br><br>
        <label>Note</label>
        <input type="text" name="note" id="note">
        <button class="button1" type="submit" id="submit">Submit</button>
    </div>
    <div class="container" style="background-color:#f1f1f1">
        <button  type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>
<div id="id02" class="modal">
  <form class="modal-content animate" action="insert1.php" method="get">
    <div class="container">
      <label>Invoice:#</label>
      <input type="number" name="inv" id="inv" required="">
      <br><br>
        <label>Amount</label>
        <input type="number" name="amount" id="amount" required="">
        <br><br>
        <label>Date</label>
        <input type="Date" name="data" id="data" required="">
        <br><br>
        <label>Note</label>
        <input type="text" name="note" id="note">
        <button class="button1" type="submit" id="submit">Submit</button>
    </div>
    <div class="container" style="background-color:#f1f1f1">
        <button  type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "ltc";
$conn = mysqli_connect($servername, $username, $password,$db);
if (!$conn) {

  die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM income";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<div class=table>
    <h1>الدخول من خالد</h1>

    <table id=customers>
      <tr>
        <th>Invoice:#</th>
        <th>Amount</th>
        <th>Date</th>
        <th>Note</th>
      </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo"<tr>
            <td>".$row["id"]."</td>
            <td>".$row["amount"]."</td>
            <td>".$row["data"]."</td>
            <td>".$row["note"]."</td>
          </tr>";
    }
    echo "</table></div>";
} else {
    echo "0 results";
}
mysqli_close($conn);
?>
</body>
<script type="text/javascript">
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}
</script>
</html>




<?php

/*connnection*/
 $conn=mysqli_connect("localhost","root","","vellelogzdb") or die("DB connection failure");

/*search_flight*/
if(isset($_POST['search'])){
  /*  $from=mysql_real_escape_string($conn,$_POST['from']);
    $to=mysql_real_escape_string($conn,$_POST['to']);
    */    
    $from=$_POST['from'];
    $to=$_POST['to'];
    $qry1="SELECT * FROM `air_info` WHERE a_src= '$from' AND a_dest= '$to' ";
    
    $result =mysqli_query($conn,$qry1) or die("bad query");
    #echo{"$res=mysqli_fetch_array($result)"};
    echo"<table border='1'>"; 
    echo"<tr><td>Flight_no</td><td>Dept</td><td>Arr</td><td>fare</td><tr>";    
    while($row=mysqli_fetch_assoc($result)){
          echo"<tr><td>{$row['a_no']}</td><td>{$row['a_tdpt']}</td><td>{$row['a_tavl']}</td><td>{$row['a_fare']}</td><tr>"; 
     }
    echo"</table>";
}
else{
    header("Location: ../index.php");
    exit();
}



?>
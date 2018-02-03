
<!DOCTYPE HTML>
<HEAD>


<style>
header{
  border:1px solid grey;
    margin:1px;margin-bottom:5px;padding:8px;
    background-color:black;

}

section{

  border:2px solid black;
    margin:1px;margin-bottom:1px;padding:8px;
    background-color:	#717171;


}

p#title{
font-size:300%;
text-align:center;
color:white;
font-family:verdana;

}
nav{
margin-top:5px;
}



body{
background-color:lightgrey;

}
 
figure#tb{
margin:0px 5px;

}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    border: 1px solid #e7e7e7;
    background-color: #f3f3f3;
   
}

li {
    float: left;
}

li a {
    display: block;
    color: #666;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #ddd;
	
}


.active {
    color: white;
    background-color: grey;

}

article{

  border:2px solid grey;
    margin:10px;padding:18px;
    background-color:	#e1e1e1;


}



</style>
</HEAD>
<BODY>
<header>
<p id="title"> FALTU COLLEGE OF ENGINEERING </p>
</header>
<figure id = "tb">
  <img src="a.jpg" alt="FALTU COLLEGE OF ENGINEERING" width="100%" height="200px">
  <figcaption>Faltu College of Engineering (Autonomous College Affiliated to University of Mumbai)</figcaption>
</figure>
<nav>
<ul>
<li><a class="active" href="homepage.html">ABOUT US</a></li>
<li><a href="academics.html">ACADEMICS</a></li>
<li><a href="placement.html" >PLACEMENT</a></li>
<li><a href="placement.html" >ADMISSION</a></li>
<li><a href="contactus.html">CONTACT US</a></li>
<ul>
</nav>
<section>


<article>
<a href="fe_applicants.php" ><h2>Click here to know the details about FE applicants</h2></a>




</article>



<article>
<a href="se_applicants.php"><h2>Click here to know the details about SE applicants</h2></a>

<?php
$con=mysqli_connect("localhost","root","","college");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM seadmission");

while($row = mysqli_fetch_array($result)) {
  echo $row['Name'] . " " . $row['Contact'] . " " .$row['Address'] . " " .$row['Diploma_Percent']  . " " . $row['DOB'];
  echo "<br>";
}

mysqli_close($con);
?>


</article>

<article>
<a href="staff.php"><h2>Click here to know the details about Staff</h2></a>

</article>

<article>
<a href="toppers.php"><h2>Click here to know the details about Toppers</h2></a>

</article>

</section>

</BODY>
</HTML>
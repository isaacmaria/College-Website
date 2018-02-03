

<!DOCTYPE HTML>
<HEAD>


<SCRIPT Language="JavaScript">




function validateForm() {

var x = document.forms["feedback"]["fullname"].value;
var y = document.forms["feedback"]["email"].value;

if (x==null || x==""||y==null||y=="") {
alert("Details must be filled out");
return false;
}
else
{
window.confirm("Are you sure you want to submit?");

}



}

function validateEmail()
{

var y = document.forms["feedback"]["email"].value;
var atpos = y.indexOf("@");
var dotpos = y.lastIndexOf(".");

if(atpos<1||dotpos<(atpos+2)||(dotpos+2)>=y.length){
alert("Not a valid E-mail address");
return false;
}

}







</script>



<style>
header{
  border:1px solid grey;
    margin:1px;margin-bottom:5px;padding:8px;
    background-color:black;

}

section{

  border:2px solid grey;
    margin:1px;margin-bottom:10px;padding:8px;
    background-color:	#b1b1b1;


}

article{

  border:2px solid grey;
    margin:10px;padding:8px;
    background-color:	#e1e1e1;


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


li a.active {
    color: white;
    background-color: grey;


article{

  border:2px solid grey;
    margin:10px;padding:8px;
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
<li><a href="homepage.html">ABOUT US</a></li>
<li><a href="academics.html">ACADEMICS</a></li>
<li><a href="placement.html">PLACEMENT</a></li>
<li><a href="admission.html">ADMISSION</a></li>
<li><a class="active" href="contactus.html">CONTACT US</a></li>
<ul>
</nav>

<h1> Contact Us </h1>

<section>
<p> Faltu College of Engineering</p>
<p>Vidyanagar, Vidyavihar(E), Mumbai - 400 077, Maharashtra.</p>
<p>Phone 91-22-99999999</p>
<p>Fax : 91-22-88888888</p>
<p>Website : www.faltucollege.edu</p>
<p>Email : equiry@engg.faltu.edu</p>

</section>

<h1> Feedback </h1>
<section>
<article>

<fieldset>
<legend>    FEEDBACK  </legend>

<form name="feedback" action="feedback.php" onsubmit="return validateForm()" method="post">
Full Name : 
<input type="text" name="fullname"><br>
Email : 
<input type="email" name="email"><br>
Comments : <br>
<textarea name="comment" rows="10" cols="40"></textarea><br>

<br><br>

<input type="submit" name="submit">
</form>

</fieldset>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$fullname =  $_POST['fullname'];
$email = $_POST['email'];
$comment = $_POST['comment'];


$sql = "INSERT INTO feedback(Name, Email, Comment)
VALUES ('$fullname', '$email', '$comment')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>


</article>
</section>




</BODY>
</HTML>


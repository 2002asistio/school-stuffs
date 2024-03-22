<style>

.styled-text {
    color: blue;
    font-size: 20px;
    font-weight: bold;
    text-align: center;
     }

.name{
  border-style:solid;
}
.age{
  border-style:solid;
}
.address{
  border-style:solid;
}
.contact{
  border-style:solid;
}

.gender{
text-wrap:initial;
}

.bdate{
  border-style:solid;
}
.BloodType{
  border-style:solid;
}

.finale{

background-color:aquamarine;
width:380px;
height:400px;
text-align:justify;
float:right;
margin-right:250px;
border-style:solid;
border-radius:5%;
padding: 40px 20px 0px 0px;  

}
.info{

    background-color:bisque;
    width:380px;
    height:400px;
    text-align:center;
    float:left;
    margin-left:250px;
    border-style:solid;
    border-radius:5%;
    padding: 40px 20px 0px 0px;  
    
  
}
.gender{
  margin-right:20%;

}


label{
    
    display: inline-block;
    text-align: right;
    width: 100px;
    padding-top:10px;
    padding-bottom:10px;
}




    </style>





<button onclick="window.location.href='storeBMI.php'" style="font-size:20px;color:cadetblue;">Proceed to BMI</button>

<h1 align="center">Body Mass Calculator</h1>



<form method = "post">
  <div class="info">
<label for="name">Name:</label>
<input type="text" id="name" name="name">

<label for="age">Age:</label>
<input type="text" id="age" name="age">

<label for="address">Address:</label>
<input type="text" id="address" name="address">

<label for="contact">Contact Number:</label>
<input type="text" id="contact" name="contact">

<label for="bdate">Birth Date:</label>
<input type="text" id="bdate" name="bdate">

<div class="gender">  
<label for="gender">Gender:</label>
<label for="male">Male</label>
<input type="radio" id="male" name="gender" value="male" >
<label for="female">Female</label>
<input type="radio" id="female" name="gender" value="female">
</div>

<label for="bloodtype">Blood Type:</label>
<form action ="phpBMI#1">

<label for="BloodType">Bloodtype</label>
  <select id="BloodType" name="BloodType">


    <option value="A+">A+</option>
    <option value="A-">A-</option>
    <option value="B+">B+</option>
    <option value="B-">B-</option>
    <option value="AB+">AB+</option>
    <option value="AB-">AB-</option>
    <option value="O+">O+</option>
    <option value="O-">O-</option>
  </select>
<form>
<input type="Submit" value="Submit" >
</div>



</form>



<div class="finale">


<?php


if($_SERVER ["REQUEST_METHOD"]== "POST"){

  $name = $_POST["name"];
  $age = $_POST["age"];
  $address = $_POST["address"];
  $contact = $_POST["contact"];
  $bdate = $_POST["bdate"];
  $gender = $_POST["gender"];
  $bloodtype = $_POST["BloodType"];


 
 echo "Name:$name";
 echo "Age:$age";
 echo "Address:$address";
 echo "Contact Number:$contact";
 echo "Birth Date:$bdate";
 echo "Gender: $gender";
 echo "Blood Type:$bloodtype";
 
 
}

?>

</div>



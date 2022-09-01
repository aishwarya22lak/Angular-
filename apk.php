<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>



    <style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Courier New', Courier, monospace;
    font-size: medium;
}

body{
    height: auto;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 25px;

  
}

.container{
    width:auto ;
     padding: 30px;
    border-radius: 10px; 
 border-style: outset;
        box-shadow: 1px 1px 2px rgba(0,0,0,0.125);
   border-radius: 5px;
}
.container h2{
  font-size: 24px;
        font-weight: 700;
        font-family: 'Courier New', Courier, monospace;
        margin-bottom: 25px;
        color: black;
        background-color: rgb(255, 204, 0);
        text-transform: uppercase;
        text-align: center;
        box-shadow: 1px 1px 2px rgba(5, 5, 5, 0.125);
}

.container .form{
    height: 40px;
    width: 100%;
    position: relative;
    margin-bottom: 10px;
}

.container .form input{
    width: 100%;
    height: 40px;
    border: none;
    border-bottom: 2px solid rgb(242, 124, 69);
    outline: none;
    font-size: 16px;
    transition: 0.3s;
}

.container .for{
  height: 40px;
    width: 100%;
    position: relative;
    margin-bottom: 10px;
}
.container .for{

  width: 100%;
    height: 40px;
    border: none;
    border-bottom: 2px solid rgb(242, 124, 69);
    outline: none;
    font-size: 16px;
    transition: 0.3s;
}  
.container button{
  width: 100%;
    height: 40px;
   
}
    </style>
</head>
<body> 
  
  <div class="container">
    
    <h2>REGISTRATION FORM</h2>
    <form method="post"  name="myform" action="display.php">
<div class="form">
 <input type="text" class="form-control" name="name" id=""  pattern="[a-z A-Z]*" placeholder="Name" required>
 </div>
   
<div class="form">

  <input type="email" class="form-control" name="email" id=""  placeholder="Email" required>
 </div>
<div class="form">

    <input type="text" class="form-control" name="mobile" id="" placeholder="Mobile Number" maxlength="10"  required >
   
  </div>
  <div class="form">
    <label>occupation</label>
    <select class="for" name="occu" id="" required > <option value="sub-caste"> pls select ocupation</option>
    <option value="doctor">doctor</option>
    <option value="engineer">engineer</option>
    </select>
  </div>
  <div class="form"><br>
  <label for="">Mandal</label>
    <select class="for" id="" placeholder="Mandal" name="mandal" required> <option value="val1">pls select Mandal</option>
        <option value="Mandal1">Mandal1</option>
        <option value="Mandal2">Mandal2</option>
        </select>
  </div><br>
  <div class="form"><br>
   <label for="">caste</label>
    <select class="for" id="" name="caste" required> <option value="val1">Please select below caste</option>
        <option value="aaa">aaa</option>
        <option value="bbb">bbb</option>
        </select>   
   
  </div><br>
  <div class="form"><br>
    <label for=""> sub-caste</label>
     <select class="for" id="" name="subcaste" required> <option value="val1">Please select below caste</option>
         <option value="aaa">aaa</option>
         <option value="aaa">aaa</option>
         </select>   
    
   </div><br>
 
  <div class="form"><br>
    
   
  <input type="text" class="form-control" name="refn" id=""  placeholder="Refered By-Name" required>
 
  </div><br> 

  <div class="form">
    
   
  <input type="text" class="form-control" name="refm" id=""    placeholder="Refered By-Mobile Number" maxlength="10"   required>


</div>

<div class="form">
     
<input type="password" name="password" id="" placeholder="password" required>

 </div>

 <div class="form">
   
    <input type="password" name="cpassword" id="" placeholder="confirm password" required>
    
     </div>
    <div class="form"><button onclick="return validate()" name="submit">
      submit
      
       
    </button></div>
    </form>

  </div>
<a href="display.php">click here</a>
    <script>

 function validate(){
var password1=document.forms["myform"]["password"].value;
  var password2=document.forms["myform"]["cpassword"].value;



if(password1!=password2)
{
  alert("password didn't match");
  return false;
}

}
</script>

</body>
<?php
include 'connection.php';
if(isset($_POST['submit'])){

$Name=$_POST['name'];
$Email=$_POST['email'];
$mobileno=$_POST['mobile'];
$occupation=$_POST['occu'];
$Mandal=$_POST['mandal'];
$Caste=$_POST['caste'];
$sub=$_POST['subcaste'];
$refname=$_POST['refn'];
$refmob=$_POST['refm'];
$password=$_POST['password'];
$confirm=$_POST['cpassword'];

$sql = "insert into form (name,email,mobile,occu,mandal,caste,subcaste,refn,refm,password,cpassword)
values ('$Name','$Email','$mobileno','$occupation','$Mandal','$Caste','$sub','$refname','$refmob','$password','$confirm')";
 
  $result=mysqli_query($con,$sql);
  if($result){
    echo 'data inserted successfully';
  }
  else
  {
      die(mysqli_error("Error",$con));
  }
}
?>

</html>


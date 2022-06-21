<?php
$con = mysqli_connect("localhost","root","") or die("Unable to connect");
mysqli_select_db($con,'userdb');
?>

<!DOCTYPE html>
<html>
<head>
<title>LOG IN / SIGN UP</title>








</head>

<div class="cotn_principal">
  <br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="admin.php"><input type="button" id="ad_btn" value=" LOGIN AS ADMIN "style="color:#0f0f0f; padding: 12px 28px ; background-color:#f0d802; border-radius: 3px; border: 2px solid white;"/></a>

  <div class="cont_centrar">

    <div class="cont_login">
      <div class="cont_info_log_sign_up">
         <div class="col_md_login">
            <div class="cont_ba_opcitiy">
        
               <h2>LOGIN</h2>  
               <p>Use your Username & Password Details to LOGIN</p> 
               <button class="btn_login"  onclick="cambiar_login()">LOG IN</button>
            </div>
          </div>
              <div class="col_md_sign_up">
                 <div class="cont_ba_opcitiy">
                  
                  <h2>SIGN UP</h2>
                  <p>Fill Up your Details to SIGNUP</p>
                  <button class="btn_sign_up"  onclick="cambiar_sign_up()">SIGN UP</button>
                </div>
              </div>
      </div>

      <form method="post">
       <div class="cont_back_info">
        <div class="cont_img_back_">
         <img src="https://www.geu.ac.in/content/dam/geu/Image-Galleries/rules/dress-02.jpg" alt="" />
       </div>
       
    </div>
<div class="cont_forms" >
    <div class="cont_img_back_">
       <img src="https://www.geu.ac.in/content/dam/geu/Image-Galleries/rules/dress-02.jpg" alt="" />
       </div>
 <div class="cont_form_login">
<a href="#" onclick="ocultar_login_sign_up()" ><i class="material-icons">&#xE5C4;</i></a>
   <h2>LOGIN</h2>
 <input type="text" id="username" name="username" placeholder="Username" />
<input type="password" id="password" name="password" placeholder="Password" />
<button class="btn_login" id="login" name="login" onclick="cambiar_login()">LOGIN</button>
  </div>
  
   <div class="cont_form_sign_up">
<a href="#" onclick="ocultar_login_sign_up()"><i class="material-icons">&#xE5C4;</i></a>
     <h2>SIGN UP</h2>
<input id ="email" name="email" type="text" placeholder="Email" />
<input id="username" name="username" type="text" placeholder="User" />
<input id="password" name="password" type="password" placeholder="Password" />
<input id="cpassword" name="cpassword" type="password" placeholder="Confirm Password" />
<button id="signup" name="signup" class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button>

  </div>

    </div>
    
  </div>
 </div>
</div>
</form>


<?php

    if(isset($_POST['login']))
    {
      $username = $_POST['username'];
      $password = $_POST['password'];

      
      $query="select * from user WHERE username='$username' AND password='$password'";
      
      $query_run = mysqli_query($con,$query);

    
      if(mysqli_num_rows($query_run)>0)
      {
        // valid
        $_SESSION['username']= $username;
        echo '<script type="text/javascript"> alert("Login Successfull") </script>';
           echo "<script>window.location.href='homepage.php'</script>";

      }
      else
      {
        // invalid
        echo '<script type="text/javascript"> alert("Invalid credentials") </script>';
      }


    }
    
    
    
      if(isset($_POST['signup']))
      {

        $email= $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

      
        if($password==$cpassword)
        {
          $query= "select * from user WHERE username='$username'";
          $query_run = mysqli_query($con,$query);
          
          if(mysqli_num_rows($query_run)>0)
          {
            // there is already a user with the same username
            echo '<script type="text/javascript"> alert("User already exists.. try another username") </script>';
          }
          else
          {
            $query= "insert into user values('','$email','$username','$password')";
            $query_run = mysqli_query($con,$query);
            
            if($query_run)
            {
              echo '<script type="text/javascript"> alert("User Registered") </script>';
            }
            else
            {
              echo '<script type="text/javascript"> alert("'.mysqli_error($con).'") </script>';
            }
          }
          
          
        }
        else{
        echo '<script type="text/javascript"> alert("Password and confirm password does not match!") </script>';  
        }
        
        
        
        
      }
?>
<style>
/* ------------------------------------ Click on login and Sign Up to  changue and view the effect
---------------------------------------
*/

* {
  margin: 0px auto;
  padding: 0px;
  text-align: center;
  font-family: 'Open Sans', sans-serif;
}

.cotn_principal {
  position: absolute;
  width: 100%;
  height: 100%;
  background-image: url(https://eedgeu.files.wordpress.com/2017/07/cropped-main-building-11.jpg);
  background-size: cover;

}


.cont_centrar {
  position: relative;
  float: left;
   width: 100%;
}

.cont_login {
  position: relative;
  width: 640px;
left: 50%;
margin-left: -320px;
  
}

.cont_back_info {  
position: relative;
  float: left;
  width: 640px;
  height: 280px;
overflow: hidden;
  background-color: #fff;
  margin-top: 100px;
box-shadow: 1px 10px 30px -10px rgba(0,0,0,0.5);
}

.cont_forms {
  position: absolute;
  overflow: hidden;
  top:100px;
left: 0px;
  width: 320px;
  height: 280px;
  background-color: #eee;
-webkit-transition: all 0.5s;
-moz-transition: all 0.5s;
-ms-transition: all 0.5s;
-o-transition: all 0.5s;
transition: all 0.5s;
}

.cont_forms_active_login {
box-shadow: 1px 10px 30px -10px rgba(0,0,0,0.5);
  height: 420px;  
top:20px;
left: 0px;
  -webkit-transition: all 0.5s;
-moz-transition: all 0.5s;
-ms-transition: all 0.5s;
-o-transition: all 0.5s;
transition: all 0.5s;

}

.cont_forms_active_sign_up {
box-shadow: 1px 10px 30px -10px rgba(0,0,0,0.5);
  height: 420px;  
top:20px;
left:320px;
-webkit-transition: all 0.5s;
-moz-transition: all 0.5s;
-ms-transition: all 0.5s;
-o-transition: all 0.5s;
transition: all 0.5s;
}

.cont_img_back_grey {
  position: absolute;
  width: 950px;
top:-80px;
  left: -116px;
}

.cont_img_back_grey > img {
  width: 100%;
 -webkit-filter: grayscale(100%);     filter: grayscale(100%);
opacity: 0.2;
animation-name: animar_fondo;
  animation-duration: 20s;
animation-timing-function: linear;
animation-iteration-count: infinite;
animation-direction: alternate;

}

.cont_img_back_ {
  position: absolute;
  width: 950px;
top:-80px;
  left: -116px;
}

.cont_img_back_ > img {
  width: 100%;
opacity: 0.3;
animation-name: animar_fondo;
animation-duration: 20s;
animation-timing-function: linear;
animation-iteration-count: infinite;
animation-direction: alternate;
}

.cont_forms_active_login > .cont_img_back_ {
top:0px;  
  -webkit-transition: all 0.5s;
-moz-transition: all 0.5s;
-ms-transition: all 0.5s;
-o-transition: all 0.5s;
transition: all 0.5s;
}

.cont_forms_active_sign_up > .cont_img_back_ {
top:0px;  
left: -435px;
  -webkit-transition: all 0.5s;
-moz-transition: all 0.5s;
-ms-transition: all 0.5s;
-o-transition: all 0.5s;
transition: all 0.5s;
}
 

.cont_info_log_sign_up {
position: absolute;
  width: 640px;
  height: 280px;
  top: 100px;
z-index: 1;
} 

.col_md_login {
  position: relative;
  float: left;
  width: 50%;
}

.col_md_login > h2 {
  font-weight: 400;
margin-top: 70px;
    color: #757575;
}

.col_md_login > p {
 font-weight: 400;
margin-top: 15px;
width: 80%;
    color: #37474F;
}

.btn_login { 
background-color: #26C6DA;
  border: none;
  padding: 10px;
width: 200px;
border-radius:3px;
box-shadow: 1px 5px 20px -5px rgba(0,0,0,0.4);
  color: #fff;
margin-top: 10px;
cursor: pointer;
}

.col_md_sign_up {
  position: relative;
  float: left;
  width: 50%;  
}

.cont_ba_opcitiy > h2 {
  font-weight: 400;
  color: #fff;
}

.cont_ba_opcitiy > p {
 font-weight: 400;
margin-top: 15px;
 color: #fff;
}
/* ----------------------------------
background text    
------------------------------------
 */
.cont_ba_opcitiy {
  position: relative;
  background-color: rgba(120, 144, 156, 0.55);
  width: 80%;
  border-radius:3px ;
margin-top: 60px;
padding: 15px 0px;
}

.btn_sign_up { 
background-color: #ef5350;
  border: none;
  padding: 10px;
width: 200px;
border-radius:3px;
box-shadow: 1px 5px 20px -5px rgba(0,0,0,0.4);
  color: #fff;
margin-top: 10px;
cursor: pointer;
}
.cont_forms_active_sign_up {
z-index: 2;  
}


@-webkit-keyframes animar_fondo {
  from { -webkit-transform: scale(1) translate(0px);
-moz-transform: scale(1) translate(0px);
-ms-transform: scale(1) translate(0px);
-o-transform: scale(1) translate(0px);
transform: scale(1) translate(0px); }
  to { -webkit-transform: scale(1.5) translate(50px);
-moz-transform: scale(1.5) translate(50px);
-ms-transform: scale(1.5) translate(50px);
-o-transform: scale(1.5) translate(50px);
transform: scale(1.5) translate(50px); }
}
@-o-keyframes identifier {
  from { -webkit-transform: scale(1);
-moz-transform: scale(1);
-ms-transform: scale(1);
-o-transform: scale(1);
transform: scale(1); }
  to { -webkit-transform: scale(1.5);
-moz-transform: scale(1.5);
-ms-transform: scale(1.5);
-o-transform: scale(1.5);
transform: scale(1.5); }

}
@-moz-keyframes identifier {
  from { -webkit-transform: scale(1);
-moz-transform: scale(1);
-ms-transform: scale(1);
-o-transform: scale(1);
transform: scale(1); }
  to { -webkit-transform: scale(1.5);
-moz-transform: scale(1.5);
-ms-transform: scale(1.5);
-o-transform: scale(1.5);
transform: scale(1.5); }

}
@keyframes identifier {
  from { -webkit-transform: scale(1);
-moz-transform: scale(1);
-ms-transform: scale(1);
-o-transform: scale(1);
transform: scale(1); }
  to { -webkit-transform: scale(1.5);
-moz-transform: scale(1.5);
-ms-transform: scale(1.5);
-o-transform: scale(1.5);
transform: scale(1.5); }
}
.cont_form_login {
  position: absolute;
  opacity: 0;
display: none;
  width: 320px;
  -webkit-transition: all 0.5s;
-moz-transition: all 0.5s;
-ms-transition: all 0.5s;
-o-transition: all 0.5s;
transition: all 0.5s;
}

.cont_forms_active_login {
z-index: 2;  
}
.cont_forms_active_login  >.cont_form_login {
}

.cont_form_sign_up {
  position: absolute;
  width: 320px;
float: left;
  opacity: 0;
display: none;
  -webkit-transition: all 0.5s;
-moz-transition: all 0.5s;
-ms-transition: all 0.5s;
-o-transition: all 0.5s;
transition: all 0.5s;
}

  
.cont_form_sign_up > input {
text-align: left;
  padding: 15px 5px;
margin-left: 10px;
margin-top: 20px;
  width: 260px;
border: none;
    color: #757575;
}

.cont_form_sign_up > h2 {
margin-top: 50px; 
font-weight: 400;
  color: #757575;
}


.cont_form_login > input {
  padding: 15px 5px;
margin-left: 10px;
margin-top: 20px;
  width: 260px;
border: none;
text-align: left;
  color: #757575;
}

.cont_form_login > h2 {
margin-top: 110px; 
font-weight: 400;
  color: #757575;
}
.cont_form_login > a,.cont_form_sign_up > a  {
  color: #757575;
    position: relative;
    float: left;
    margin: 10px;
margin-left: 30px;
}


</style>
<script type="text/JavaScript"> 


/* ------------------------------------ Click on login and Sign Up to  changue and view the effect
---------------------------------------
*/

function cambiar_login() {
  document.querySelector('.cont_forms').className = "cont_forms cont_forms_active_login";  
document.querySelector('.cont_form_login').style.display = "block";
document.querySelector('.cont_form_sign_up').style.opacity = "0";               

setTimeout(function(){  document.querySelector('.cont_form_login').style.opacity = "1"; },400);  
  
setTimeout(function(){    
document.querySelector('.cont_form_sign_up').style.display = "none";
},200);  
  }

function cambiar_sign_up(at) {
  document.querySelector('.cont_forms').className = "cont_forms cont_forms_active_sign_up";
  document.querySelector('.cont_form_sign_up').style.display = "block";
document.querySelector('.cont_form_login').style.opacity = "0";
  
setTimeout(function(){  document.querySelector('.cont_form_sign_up').style.opacity = "1";
},100);  

setTimeout(function(){   document.querySelector('.cont_form_login').style.display = "none";
},400);  


}    



function ocultar_login_sign_up() {

document.querySelector('.cont_forms').className = "cont_forms";  
document.querySelector('.cont_form_sign_up').style.opacity = "0";               
document.querySelector('.cont_form_login').style.opacity = "0"; 

setTimeout(function(){
document.querySelector('.cont_form_sign_up').style.display = "none";
document.querySelector('.cont_form_login').style.display = "none";
},500);  
  
  }



</script>
</body>
</html>
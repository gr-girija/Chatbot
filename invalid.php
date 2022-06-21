<?php
    $conn = mysqli_connect("localhost", "root", "", "bot") or die("Database Error");

?>


<!DOCTYPE html>
<html>
<body>
  <title>INVALID RESPONSES/ COMPLAINTS</title>
<div class="vid-container">
  <video class="bgvid" autoplay="autoplay" muted="muted" preload="auto" loop>
      <source src="y" type="video/webm">
  </video>
  <div class="inner-container">
    <video class="bgvid inner" autoplay="autoplay" muted="muted" preload="auto" loop>
    <source src="y" type="video/webm">
    </video>
    <div class="box">
      <form action="" method="POST">
      <h1>INVALID RESPONSES</h1>
      <input placeholder="Input any Complaint/Invalid Response below:" style="color:#0f0f0f; font-weight: bold; padding: 12px 28px ; background-color:#ffffff; border-radius: 3px; border: 2px solid white;"/>
      <input type="text" placeholder="Text" name="messages" style="color:#0f0f0f; padding: 12px 28px ; background-color:#ffffff; border-radius: 3px; border: 2px solid white;"/>

      <!--<button>SUBMIT</button>-->
        <a href="homepage.php"><input type="submit" id="back_btn" name="submit" value=" SUBMIT " style="color:#ffffff; padding: 12px 28px ; background-color:#0f0f0f; border-radius: 3px; border: 2px solid white;"/></a>
       <a href="homepage.php"><input type="button" id="back_btn" value=" BACK " style="color:#ffffff; padding: 12px 28px ; background-color:#0f0f0f; border-radius: 3px; border: 2px solid white;"/></a>
       <!--<a href="homepage.php"><button>BACK</button></a>-->
    </form>
      <p> <span></span></p>
    </div>
  </div>
</div>

<style>
  body{
  padding:0;
  margin:0;
}
.vid-container{
  position:relative;
  height:100vh;
  overflow:hidden;
  /*size: cover;*/
}
.bgvid{
  position:absolute;
  left:0;
  top:0;
  width:100vw;
  height:100%;
}
.inner-container{
  width:500px;
  height:520px;
  position:absolute;
  top:calc(50vh - 300px);
  left:calc(50vw - 200px);
  overflow:hidden;
}
.bgvid.inner{
  top:calc(-50vh + 300px);
  left:calc(-50vw + 300px);
  filter: url("data:image/svg+xml;utf9,<svg%20version='1.1'%20xmlns='http://www.w3.org/2000/svg'><filter%20id='blur'><feGaussianBlur%20stdDeviation='10'%20/></filter></svg>#blur");
  -webkit-filter:blur(10px);
  -ms-filter: blur(10px);
  -o-filter: blur(10px);
  filter:blur(50px);
}
.box{
  position:absolute;
  height:100%;
  width:100%;
  font-family:Helvetica;
  color:#fff;
  background:rgba(0,0,0,0.13);
  padding:30px 0px;
}
.box h1{
  text-align:center;
  margin:30px 0;
  font-size:30px;
}
.box input{
  display:block;
  width:400px;
  font-size: 15px;
  height:50px;
  margin:20px auto;
  padding:15px;
  background:rgba(0,0,0,0.2);
  color:#fff;
  border:0;
}
.box input:focus,.box input:active,.box button:focus,.box button:active{
  outline:none;
}
.box button{
  background:#0f0f0f;
  border:0;
  color:#fff;
  padding:10px;
  font-size:20px;
  width:330px;
  margin:20px auto;
  display:block;
  cursor:pointer;
}
.box button:active{
  background:#27ae60;
}
.box p{
  font-size:14px;
  text-align:center;
}
.box p span{
  cursor:pointer;
  color:#666;
}
</style>

<?php
if(isset($_POST['submit']))
{
  
  $messages=$_POST['messages'];


$query="insert into complaint values('','$messages')";
$query_run = mysqli_query($conn,$query);


            
            if($query_run)
            {
              echo '<script type="text/javascript"> alert("Success! Complaint Submitted") </script>';           
            }
            else
            {
              echo '<script type="text/javascript"> alert("'.mysqli_error($conn).'") </script>';
            
              
             }


          }


?>
</body>
</html>
<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['Login']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT `Login`, `password` FROM `client` WHERE  Login = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
           if (!$result) {
    printf("Error: %s\n", mysqli_error($db));
    exit();
}
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    //  $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result mat//ched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
       //  session_register("myusername");
         $_SESSION['login_user'] = $myusername;

       header("location: MarchéCadre.pdf");

      }else {
     echo "Your Login Name or Password is invalid". $db->error;
      }
   }
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
<link rel="stylesheet" type="text/css" href="ClientLydecStyle.css">
</head>
<body bgcolor="white">
<div id="entete" >
  <img src="crc.png " id="imgsrc"  >
  <img src="lydec.jpg" id="imgly">
</div>
 <div id="center">
   <img src="bienvenue.png" id="imgbienv">
        
 <div id="idinsc" align="center" >
          
    <form action="" method="post" class="form-signin">
         
          <label id="user" > Nom Utilisateur  </label>&nbsp;&nbsp;&nbsp;
               <input type = "text" name = "Login" id="login" class="form-control"  required />
                    <br><br>
          <label id="password" > Mot De Passe  </label> &nbsp;&nbsp;&nbsp;&nbsp;
               <input type = "password" name = "password"  id="inputpassword" class="form-control" required />
                    <br><br>
          <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
          <label for="loginkeeping">Se Souvenir de moi</label>
         <br><br>
<input type = "submit" value ="Connexion" id="btn-conn"  class="idbtn" >

                <br>
  <a id="img-inscr" href="inscription.php"><br>   
                <img src="inscription.png" id="img-inscr">

                </a>                  
                  



    
   </form>
</div>



 </div>


<div class="pieds-page" id="footer">
  <img src="imgfooter.jpg" id="imgfoot" >
</div>
</body>
</html>
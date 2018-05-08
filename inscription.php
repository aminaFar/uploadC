<!DOCTYPE html>
<html>
<head>
  

  <title></title>
  <link rel="stylesheet" type="text/css" href="styleinscription.CSS">
  <script src='https://www.google.com/recaptcha/api.js'></script>
    <script>
         function myfun(argument) {
                    var pass =document.getElementById('mdp').value;
                    var confirmpass =document.getElementById('mdp2').value;
                    var eml =document.getElementById('email').value;
                    var confirmeml =document.getElementById('confirm-eml').value;

                        if (pass.length<8) {
                                 document.getElementById('message').innerHTML="**vous de devez entrer au moins 8 caractéres";
                                 return false;
                          }
                      if (pass!=confirmpass) {
                        document.getElementById('message').innerHTML="Les deux Mots  de passe ne sont pas identiques";
                        return false;
                      }    
                                     if (eml!=confirmeml) {
                        document.getElementById('messages').innerHTML="Les deux adresses e-mails ne sont pas identiques";
                        return false;
                      }    
                   }
                   function myFunction() {
    var x = document.getElementById("mdp");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
 function Function() {
    var y = document.getElementById("mdp2");
    if (y.type === "password") {
        y.type = "text";
    } else {
        y.type = "password";
    }
}
      


    </script>
  
</head>


  
  <body >
  <P >Page Inscription</P>
  <hr>
  <br>
  <br>
       <form id="form_ins" action="" method="post" onsubmit="return myfun()">
 

  <label id="lb1">Nom:</label>  <br><br>           
    <input type="text" name="nom" id="nm" required/>
<br>
<br>
     <label id="lb2">Prénom:</label> <br><br>          
       <input type="text" name="prenom" id="prnm" required />
<br><br>

   <label id="lb3">Service:</label><br><br>             
        <input type="text" name="service" id="serv" required />
<br><br>

<label id="lb4">E-mail:</label><br><br> 
       <input type="text" name="email_Prof"  placeholder="email@example.com" 
       id="email" required />
        <span id="messages" style="color: red;"></span>
<br><br>
  <label id="lb5">Confirm-Email:</label>  <br><br>    
    <input type="text" name="confirm_Email"  placeholder="email@example.com" 
    id="confirm-eml" required />
    <span id="messages" style="color: red;"></span>
    
<br><br>
  <label id="lb6" >Fax_prof:</label> <br><br>               
<input type="text" name="fax_Pro" id="fax-prof" required />
<br><br>
   <label id="lb7" >Télé_Prof:</label><br><br>         
    <input type="text " id="tele-prof" name="tele_Pro_Direct" required />
      <br><br>
 <label id="lb8" >Nom Utilisateur:</label> <br><br>            
 <input type="text" name="login" id="log" required />
<br><br> 


     <label id="lb9">Mot de passe:</label> <br><br>       
        <input type="password" name="password" id="mdp" required /> 
        <span id="message" style="color: red;"></span><br>

        <input type="checkbox" id="check" onclick="myFunction()">
         <label id="lb11">Montrer Password</label>
<br><br><br>

<label id="lb10">Confirm-Mdp:</label> <br><br>  
<input type="password" name="confirm_password" id="mdp2" required /> 
 <span id="message" style="color: red;"></span><br>

 <input type="checkbox"  id="check2"   onclick="Function()">
   <label id="lb11">Montrer Password</label>
<br><br><br><br>



 <div class="g-recaptcha" data-sitekey="6Lfp1lUUAAAAAFWfsXfy0nlx_jswL9IYaJJeSPsJ" id="capt" align="center"></div><br>
    
<input type="submit" name="inscription" value="S'INSCRIRE" id="btn" />

 </form>
 



</body>
</html>
                                      

<?php
   include("config.php");


if(isset($_POST['g-recaptcha-response'])&& $_POST['g-recaptcha-response']){
        
        $secret = "6Lfp1lUUAAAAAAm2bMCSp0o-Lt5W1rLjpNoXIHoA";
        $ip = $_SERVER['REMOTE_ADDR'];
        $captcha = $_POST['g-recaptcha-response'];
        $rsp  = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip$ip");
        var_dump($rsp);
        $arr = json_decode($rsp,TRUE);
        if($arr['success']){
           
           if (isset($_POST["inscription"])) {
    $sql = "INSERT INTO client (`Nom`, `Prenom`, `Service`, `Email_Prof`, `Confirm_Email`, `Fax_Prof`, `Tele_Prof`,`Login`,`password`,`Confirm_password`) 
    VALUES ('".$_POST['nom']."','".$_POST['prenom']."', '".$_POST['service']."', '".$_POST['email_Prof'].
    "', '".$_POST['confirm_Email']."', '".$_POST['fax_Pro']. "','".$_POST['tele_Pro_Direct']."','" .$_POST['login']."','"
    .$_POST['password']."','".$_POST['confirm_password']."');";
      
if ($db->multi_query($sql) === TRUE) { 

    header("location:inscriptionreussie.php");
    } 
else {
    echo "Error: " . $sql . "<br>" . $db->error;
}
        }else{
            echo 'SPam';
        }
        }
  

$db->close();
} 

?>
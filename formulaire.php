  <?php
   include("config.php");



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
        }
          

$db->close();


?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
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

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="formulaire.css">


<body>

<form id="regForm" action="" method="post"  oninput="return myfun()">
  <h1>Page Inscription :</h1>
 
  
<div class="tab">Nom Complet:
    <p><input placeholder="Nom ..." oninput="this.className = ''" name="nom" required></p>
    <p><input placeholder="Prénom..." oninput="this.className = ''" name="prenom" required></p>
</div>


 <div class="tab">Contact Info:
  	<p><input placeholder="Service" oninput="this.className = ''" name="service" required></p>
    <p><input placeholder="E-mail..." oninput="this.className = ''"     name="Email_Prof" id="email" required></p>
     <p><input placeholder="Confirm-E-mail..." oninput="this.className = ''"  name="confirm_Email" 
     	id="confirm-eml" required></p>
     <span id="messages" style="color: red;"></span>
 </div>



 <div class="tab">Contact Info:
  <p><input placeholder="Fax..." oninput="this.className = ''" name="fax_Pro" required></p>
  <p><input placeholder="Téléphone..." oninput="this.className = ''" name="tele_Pro_Direct" required></p>
 </div>


  
<div class="tab">Login Info:
      <p><input placeholder="Nom Utilisateur..." oninput="this.className = ''" name="login" required></p>
         <p><input placeholder="Mot De Passe..." oninput="this.className = ''"     
                 	  name="password" type="password" id="mdp" required></p>

               <span id="message" style="color: red;"></span>
                   <input type="checkbox" onclick="myFunction()">Montrer Password

      <p><input placeholder="Confirm-Mot De Passe..." oninput="this.className = ''"  
                      name="confirm_password" type="password" id="mdp2" required> </p>  

               <span id="message" style="color: red;"></span>
                    <input type="checkbox"  id="check2"   oninput="Function()">Montrer Password

 
  </div>

 <div style="overflow:auto;">
      <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)" >Précédent</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)" >Suivant</button><br><br>
       <input type="submit" name="inscription" value="S'INSCRIRE" id="btn" />
    

    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>

</form>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script>

  
        
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the crurrent tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("btn").innerHTML = "S'inscrire";
  } else {
    document.getElementById("nextBtn").innerHTML = "Suivant";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
                   
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);

}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}

</script>

</body>
</html>





                
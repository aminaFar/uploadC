<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
         
   
   $ses_sql = mysqli_query($db,"select * from telechargement ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
 session_id('Id_telechrg_Clt');
   $login_idtelchrg = $row['Id_telechrg_Clt'];
   $refclt= $row['Ref_Client'];
 $Num= $row['Num_Appels_Offres'];
   $login_datetelechrg = $row['Date_Telechergt'] ;


   if(!isset($_SESSION['login_user'])){
      header("location:ClientLydec.php");
   }
?>
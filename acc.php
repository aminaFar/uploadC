 <?php  //Connection avec la BDD 

include("config.php");

 if (isset($_POST)) {
        $sql = "INSERT Into appels_offres (`Num_Appels_Offres`, `Objet`, `Date_Heure_Pub`, `Date_Heure_limit_depot_offrApre_Report`) 
    VALUES ('".$_POST['Num_Appels_Offres']."','".$_POST['Objet']."', '".$_POST['Date_Heure_Pub']."', '".
    $_POST['Date_Heure_limit_depot_offrApre_Report']. "');";
    



}







        ?>
         <form method="post">
        <table border="1">

  
  
                <tr>
                    <th>Num_Appels_Offres</th>
                    <th>Objet</th>
                    <th>Date_Heure_Pub</th>
                   <th>Date_Heure_limit_depot_offrApre_Report </th>
            
                    
                </tr>
            <?php //On affiche les lignes du tableau une à une à l'aide d'une boucle
            while( $_POST = $sql->fetch())
            {
            ?> 
                <tr>    
                   <td><?php echo $_POST['Num_Appels_Offres']; ?></td>
                   <td><?php echo $_POST['Objet']; ?></td>
                   <td> <?php echo date('d/m/Y H:i:s'); ?> </td>
                   <td><?php echo $_POST['Date_Heure_limit_depot_offrApre_Report']; ?></td>
                   
                   
                </tr>
          <?php

           
            
       
       } ?> </table> </form>
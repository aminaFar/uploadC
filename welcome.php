<?php
   //include('session.php');
?>

 <!DOCTYPE html>
 <html>
 
 <head>
        <title>Test Base de donnée</title>
        <script type="text/javascript">

</script>

        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    </head>
    <body>
        <?php  //Connection avec la BDD 

    
$bdd= new PDO('mysql:host=localhost;dbname=cdc;charset=utf8','root','');

        $sql = $bdd->query('SELECT * FROM telechargement ');



        ?>
         
        <table border="1">

  
  
                <tr>
                    <th>Id_telechrg_Clt</th>
                    <th>Ref_client</th>
                    <th>Num_Appels_Offres</th>
                   <th>Date de telechargement </th>
            
                    
                </tr>
            <?php //On affiche les lignes du tableau une à une à l'aide d'une boucle
            while( $donnees = $sql->fetch())
            {
            ?> 
                <tr>    
                   <td><?php echo $donnees['Id_telechrg_Clt']; ?></td>
                   <td><?php echo $donnees['Ref_Client']; ?></td>
                   <td><?php echo $donnees['Num_Appels_Offres']; ?></td>
                   <td> <?php echo date('d/m/Y H:i:s'); ?> </td>
            
                   
                   
                </tr>
          <?php 
            
            
       
       } ?> </table>
        <h2><a href = "logout.php">Sign Out</a></h2>
    </body>
</html>



















<?php 

$bdd = mysqli_connect('localhost','root','','jour08');
mysqli_set_charset($bdd,'utf8');
$requete = mysqli_query($bdd,"SELECT SUM(capacite) FROM salles");
$etudiants = mysqli_fetch_all($requete,MYSQLI_ASSOC);


?>
<html>
<table>
    <thead>
        <tr>
            <th>Capacite_Totale</th>
        </tr>   
    </thead>
    <tbody>
    <?php 
        foreach($etudiants as $etudiant){
            echo '<tr>';
            echo '<td>'.$etudiant["SUM(capacite)"].' '.'</td>';
            echo '</tr>';
        }
?>
    </tbody>
</table>
</html>
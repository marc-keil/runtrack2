<?php 

$bdd = mysqli_connect('localhost','root','','jour08');
mysqli_set_charset($bdd,'utf8');
$requete = mysqli_query($bdd,"SELECT prenom,nom,naissance FROM étudiants WHERE YEAR(naissance)<2018 AND YEAR(naissance)>1998");
$etudiants = mysqli_fetch_all($requete,MYSQLI_ASSOC);


?>
<html>
<table>
    <thead>
        <tr>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Date de naissance</th>
        </tr>   
    </thead>
    <tbody>
    <?php 
        foreach($etudiants as $etudiant){
            echo '<tr>';
            echo '<td>'.$etudiant["prenom"].' '.'</td>';
            echo '<td>'.$etudiant["nom"].' '.'</td>';
            echo '<td>'.$etudiant["naissance"].' '.'</td>';
            echo '</tr>';
        }
?>
    </tbody>
</table>
</html>
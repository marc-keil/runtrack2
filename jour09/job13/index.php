<?php 

$bdd = mysqli_connect('localhost','root','','jour08');
mysqli_set_charset($bdd,'utf8');
$requete = mysqli_query($bdd,"SELECT salles.nom AS 'Oui', etage.nom FROM salles INNER JOIN etage ON salles.id_etage = etage.id");
$etudiants = mysqli_fetch_all($requete,MYSQLI_ASSOC);


?>
<html>
<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Etage</th>
        </tr>   
    </thead>
    <tbody>
    <?php 
        foreach($etudiants as $etudiant){
            echo '<tr>';
            echo '<td>'.$etudiant["Oui"].' '.'</td>';
            echo '<td>'.$etudiant["nom"].' '.'</td>';
            echo '</tr>';
        }
?>
    </tbody>
</table>
</html>
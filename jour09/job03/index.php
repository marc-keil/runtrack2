<?php 

$bdd = mysqli_connect('localhost','root','','jour08');
mysqli_set_charset($bdd,'utf8');
$requete = mysqli_query($bdd,"SELECT `prenom`, `nom`, `naissance` FROM `étudiants` WHERE `sexe` = 'Femme'");
$etudiantf = mysqli_fetch_all($requete,MYSQLI_ASSOC);

?>
<html>
<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Date de Naissance</td>
        </tr>   
    </thead>
    <tbody>
    <?php 
        foreach($etudiantf as $etudiante){
            echo '<tr>';
            echo '<td>'.$etudiante['nom'].' '.'</td>';
            echo '<td>'.$etudiante['prenom'].' '.'</td>';
            echo '<td>'.$etudiante['naissance'].' '.'</td>';
            echo '</tr>';
        }
?>
    </tbody>
</table>
</html>

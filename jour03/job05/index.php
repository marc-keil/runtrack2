<html>
    <?php
 $str = "On n est pas le meilleur quandon le croit mais quand on le sait.";
 $i = 0;
 $v = 0;
 $c = 0;

 $dico = ["voyelles" => ['a', 'e', 'i', 'u', 'o', 'y','A','E','I','U','O','Y' ],
          "consonnes" => ['B', 'C', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'N', 'P', 'Q', 'R', 'S', 'T', 'V', 'W', 'X', 'Z' ,'b', 'c', 'd', 'f', 'f', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'z']];

 while (isset($str[$i]) == true)
{ 
        foreach ($dico["voyelles"] as $voyelle) {
            if ($voyelle == $str[$i])
            $v++;
        }
        foreach ($dico["consonnes"] as $consonnes) {
            if ($consonnes == $str[$i] )
            $c++;
        }
        
        $i++;
}

?>

<header>
    <table border=1>
      <tr>
           <td>Voyelles</td>
           <td>Consonnes</td>
      </tr>
</header>
<body>
   <tr>
      <td><?php echo $c ?></td>
      <td><?php echo $v ?></td>
</tr>
</body>
</table>
<body><html>



<?php 


// 1 : on ouvre le fichier
$niwa = fopen('niwa.html', 'r+');
fseek($niwa, 0); // On remet le curseur au début du fichier

$headerhtml = fopen('header.html', 'r+');
$footerhtml = fopen('footer.html', 'r+');

$mavar = fgets($headerhtml); // On lit la première ligne (nombre de pages vues)
while($mavar != null){
    echo $mavar;
    fputs($niwa, $mavar); // On écrit le nouveau nombre de pages vues
    $mavar = fgets($headerhtml); 
}


$mavar = fgets($footerhtml); // On lit la première ligne (nombre de pages vues)
while($mavar != null){
    echo $mavar;
    fputs($niwa, $mavar); // On écrit le nouveau nombre de pages vues
    $mavar = fgets($footerhtml); 
}

fclose($niwa);
fclose($headerhtml);

fclose($footerhtml);

?>
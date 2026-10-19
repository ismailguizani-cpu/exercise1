<?php
$notes = ["Mohamed" => 14, "Sami" => 9, "Amel" => 17,
"Yassine" => 8, "Ines" => 12];
foreach ($notes as $nom=>$note){
    echo "$nom :  $note <br>";
}
$moyenne=array_sum($notes)/count($notes);
echo "la moyenne:$moyenne";
echo "<br>";

$admis=array_filter($notes,fn($note)=>$note>=10); 
print_r($admis);
echo "<br>";
foreach ($admis as $nom=>$note){
    echo "$nom :  $note <br>";
}
$valeurs=$notes;
    sort($valeurs);
//print_r($notes);
echo"<br>";
foreach ($valeurs as $nom=>$note){
echo "$nom :  $note <br>";
}
echo "<br>";


$doubles = array_map(fn($note) => $note +1,$notes);
//print_r($doubles);
echo "<br>";
foreach ($doubles as $nom=>$note){
    echo "$nom :  $note <br>";
}
?>
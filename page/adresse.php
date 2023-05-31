<!-- L. Kieweg, 15.5.23
-->
<?php
echo '<h1>Adresse</h1>';
$query= 'select plz_nr as PLZ, 
ort_name as Ort, 
str_name as Strasse 
from strasse_ort_plz natural join ort_plz 
natural join strasse 
natural join ort natural join plz';

makeTable($query)
?>
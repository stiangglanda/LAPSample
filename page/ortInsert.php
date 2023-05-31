<?php
echo '<h2>Ort insert</h>';

if(isset($_POST['safety']))
{
    $ort = $_POST['ort_name'];
?>
    <form method="post">
        <label name="ort_name">Wollen sie <?php echo $ort  ?> hinzufügen</label>
        <input type ="submit" name="save" value="ja">
        <input type ="submit" name="" value="nein">
        <input type="hidden" id="ort_name" name="ort_name" value=<?php echo $ort  ?> >
    </form>
    <?php

} else if(isset($_POST['save']))
{
$ort=$_POST['ort_name'];

$insertStmt='insert into ort(ort_name) values(?)';

try
{
    $array=array($ort);
    $stmt=makeStatement($insertStmt,$array);
    echo '<h3>Ort wurde hinzugefügt</h3>';

}catch (Exception $e)
{
    switch ($e->getCode()) {
        case 23000:
            echo '<h4>Ort: '.$ort.' existiert bereits!</h4>';
            break;
        
        default:
            echo 'Error - Ort: '.$e->getCode().': '.$e->getMessage().'<br>';
            break;
    }
}
}else
{//formular anzeigen
    ?>
    <form method="post">
        <input type="text" id="ort_name" name="ort_name"
            placeholder="z.b. Wien" required>
        <input type ="submit" name="safety" value="speichern">
    </form>
    <?php
}           
$query='select ort_id as id, ort_name as ort from ort';

makeTable($query);
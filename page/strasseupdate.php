<?php
echo '<h2>strasseinsert</h>';

if(isset($_POST['save']))
{//Daten Speichern
$strid=$_POST['str_id'];
$strasse=$_POST['str_name'];

$insertStmt='update strasse SET str_name = ? WHERE str_id=?';
'insert into strasse(str_name) values(?)';

try
{
    $array=array($strasse, $strid);
    $stmt=makeStatement($insertStmt,$array);
    echo '<h3>Strasse wurde aktualisiert</h3>';

}catch (Exception $e)
{
    switch ($e->getCode()) {
        case 23000:
            echo '<h4>Der Straßenname existiert bereits!</h4>';
            break;
        
        default:
            echo 'Error - Strasse: '.$e->getCode().': '.$e->getMessage().'<br>';
            break;
    }
}
}else
{//formular anzeigen
    ?>
    <form method="post">
        <label for="strasse">Straßennamen ändern:</label>
        
            <?php
            $query='select str_id, str_name from strasse';

            $stmt=$conn->prepare($query);
            $stmt->execute();
            echo '<br><select name="str_id">';
            while($row=$stmt->fetch(PDO::FETCH_NUM))
            {
                echo '<option value="'.$row[0].'">'.$row[1];
            }
            echo '</select><br>';
            ?>
            <input type="text" id="str_name" name="str_name"
            placeholder="z.b. Wiener straße" required>
        <input type ="submit" name="save" value="speichern">
    </form>
    <?php
}
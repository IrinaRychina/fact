<?php
session_start();
$_SERVER['REQUEST_METHOD'] = 'POST';
$_SESSION['2task'] = $_GET["2task"];
if ( isset( $_GET["submit"] ) ) {
    header( "Location: 3task.php" );
    exit;
}
?>
<form>
    <p>2 + 2 равно</p>
    <select name="2task">
        <option value="1">4</option>
        <option value="0">2</option>
        <option value="0">3</option>
    </select>
    <p>
        <input type="submit" name="submit">
    </p>
</form>
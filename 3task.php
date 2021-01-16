<?php
session_start();
$_SERVER['REQUEST_METHOD'] = 'POST';
$_SESSION['3task'] = $_GET["3task"];
if ( isset( $_GET["submit"] ) ) {
    header( "Location: result.php" );
    exit;
}
?>
<form>
    <p>3 + 3 равно</p>
    <select name="3task">
        <option value="1">6</option>
        <option value="0">5</option>
        <option value="0">4</option>
    </select>
    <p>
        <input type="submit" name="submit">
    </p>
</form>

<?php
session_start();

// эта строчка не работает, все равно отправляется по умолчанию в get, я не нашла как устранить это
$_SERVER['REQUEST_METHOD'] = 'POST';
$_SESSION['1task'] = $_GET["1task"];
if ( isset( $_GET["submit"] ) ) {
    header( "Location: 2task.php" );
    exit;
}
?>
<form>
    <p>1 + 1 равно</p>
    <select name="1task">
        <option value="0">1</option>
        <option value="1">2</option>
        <option value="0">3</option>
    </select>
    <p>
        <input type="submit" name="submit">
    </p>
</form>

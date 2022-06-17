<?php
    session_start();
    $csrf = $_SESSION['csrf'] = md5(date('Y-m-d H:i:s'));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Javascript Data Type, Pass Value & Reference</title>
</head>
<body>
<form method="post" action="csrf-handler.php">
    <input type="hidden" value="<?=$csrf?>">
    <table>
        <tr>
            <td>No Rekening</td>
            <td><input type="text" name="nomor_rekening" placeholder="nomor rekening"></td>
        </tr>
        <tr>
            <td>Jumlah Transfer</td>
            <td><input type="number" name="jumlah_transfer" placeholder="jumlah transfer"></td>
        </tr>
        <tr>
            <td colspan="2"><button type="submit">Transfer</button></td>
        </tr>
    </table>
</form>
</body>
</html>
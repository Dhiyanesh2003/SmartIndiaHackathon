<?php
include '../../security/encryption.php';
include '../../security/decryption.php';
$encrypted=encryption("ernakulam");
echo $encrypted;
echo "<br>";
$decrypted=decryption($encrypted);
echo $decrypted;
?>
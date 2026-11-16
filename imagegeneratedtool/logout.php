<?php
include './config.php';

session_destroy();

echo"
<script>
alert('logout successfully')
window.location.href ='login.php';
</script>";
?>
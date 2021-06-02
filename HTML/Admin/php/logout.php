<?php
session_start();
session_destroy();
header('Location: /mercado-paid-egua/HTML/admin/login.html');
exit();
?>
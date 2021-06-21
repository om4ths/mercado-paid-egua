<?php
session_start();
session_destroy();
header('Location: /mercado-paid-egua/HTML/frontend/sign_in.php');
exit();
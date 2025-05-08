<?php
session_start();
session_unset();
session_destroy();

// Expira os cookies
setcookie("usuario", "", time() - 3600, "/");
setcookie("senha", "", time() - 3600, "/");

header("Location: login.php?logout=1");
exit;

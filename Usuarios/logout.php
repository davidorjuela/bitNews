<?php

session_start();
unset ($SESSION['username']);
unset ($SESSION['user_ID']);
session_destroy();

header('Location: ./../index.php');

?>
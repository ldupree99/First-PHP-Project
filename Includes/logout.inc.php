<?php
session_start();
session_unset();
session_destroy();
header("Location: ../LoginV3.php");
die();
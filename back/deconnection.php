<?php
session_start();
session_unset();
session_destroy();
header('location: http://moviecollection/index.php');

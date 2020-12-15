<?php
session_start();
include_once('Controls/Controllers.class.php');
 session_destroy();
 self::loadView("indexViews.php");;
 ?>
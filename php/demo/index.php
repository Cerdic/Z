<?php
/**
 * Z Framework's PHP implementation
 * Demonstration
 * 
 */


require_once '../Z.php';

$Z = new Z(array('content','header','footer'),dirname(__FILE__));
include Z::getPageFile(
				isset($_REQUEST['page'])?$_REQUEST['page']:'home',
				isset($_REQUEST['zajax'])?$_REQUEST['zajax']:null);
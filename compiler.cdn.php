<?php

function smarty_compiler_cdn($params, $smarty) {
	$cdnSync = isset($params['sync']) ? $params['sync'] : '""';
    $cdnAsync = isset($params['async']) ? $params['async'] : '""';
	$strCode = '';
	$strCode .= '<?php ';
	$strCode .= 'if (class_exists("FISPagelet", false)) {';
	$strCode .= 'FISPagelet::setCdn('.$cdnSync.', '.$cdnAsync.');';
	$strCode .= '}';
	$strCode .= ' ?>';
	return $strCode;
}

<?php
//zend by QQ:124861234  月梦网络  禁止倒卖 一经发现停止任何服务
ob_start();
include dirname(__FILE__) . '/res/exemple00.php';
$content = ob_get_clean();
require_once dirname(__FILE__) . '/../html2pdf.class.php';

try {
	$html2pdf = new HTML2PDF('P', 'A4', 'fr');
	$html2pdf->setDefaultFont('Arial');
	$html2pdf->writeHTML($content, isset($_GET['vuehtml']));
	$html2pdf->Output('exemple00.pdf');
}
catch (HTML2PDF_exception $e) {
	echo $e;
	exit();
}

?>

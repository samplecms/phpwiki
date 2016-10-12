
<?php 
error_reporting(E_ALL & ~(E_STRICT | E_NOTICE));
if(!is_ajax_request()){
	return;
}
//为了省下页面，AJAX请求就当前页面吧
$page = $_GET['page']?:0;
//最后一页是什么。
$endPage = 10;
//逻辑部分自己写

$arr[] = "http://www.jacklmoore.com/colorbox/content/ohoopee1.jpg";
$arr[] = "http://www.jacklmoore.com/colorbox/content/ohoopee2.jpg";
$arr[] = "http://www.jacklmoore.com/colorbox/content/ohoopee3.jpg";

if($page >= $endPage){
	exit;
}


$string = "";
foreach($arr as $v){
	
	$string .='
			<div class="post">
				<a class="fancybox"  rel="group"  href="'.$v.'"  >
						<img src="'.$v.'" width="80px" height="80px" />
				</a>
			</div>';
	
	
}
$output['string'] = $string;
exit("<div id='content'>".$string."</div>");

/**
 * 判断是否Ajax请求
 */
function is_ajax_request(){
	if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
	{
		return true;
	}
	else
	{
		return false;
	}
}

 

?>
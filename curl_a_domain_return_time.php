<?php
//取得一个域名访问的时间 ，返回 秒
class Index
{
    public function index()
    {

        $urls[] = "http://www.10fd.com/";
        

    	foreach($urls as $url){
	         $a  = microtime(true);


	         $h = $this->curl($url);
	         $b  = microtime(true);

	         $t = round($b-$a,3);
	         if($h>1)
	         echo $url." - ".$t.'-'.$h.' '."<br>";
	     }

    }

    function curl($url){
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322)');
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
			curl_setopt($ch, CURLOPT_TIMEOUT, 5);
			$data = curl_exec($ch);
			$info = curl_getinfo($ch);
			$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
			curl_close($ch);
			//print_r('<pre>');
			//print_r($info);
			return number_format($info['total_time'] , 2);
			return ($httpcode>=200 && $httpcode<300) ? $data : false;
	}

}

?>

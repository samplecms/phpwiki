<?php
class chart{
	
	
	static function show($opt = []){
		$canvas = "canvas_".\Core\Str::rand(10);
		$danwei = $opt['value']?:'人数';
		$data  = $opt['data'];
		if(!$data){
			$data = [
				[
						'value'=> 300,
						'color'=>"#F7464A",
						'highlight'=>"#FF5A5E",
						'label'=> "Red",
				],
					
				[
						'value'=> 50,
						'color'=>"#46BFBD",
						'highlight'=> "#5AD3D1",
						'label'=>"Green"
						
				],
				[
						'value'=>100,
						'color' =>"#FDB45C",
						'highlight'=> "#FFC870",
						'label'=> "Yellow"
						
				]
			];
		}
		$sum = 0;
		foreach($data as $v){
			$next[$v['label']] = [
					$v['color'],
					$v['value'],
			];
			$sum += $v['value'];
			
			$arsort[$v['label']] = $v['value'];
		}
		
		
		arsort($arsort);
		$data = json_encode($data);
		
		$next_str = "<div style='float:left;'>";
		
		foreach($arsort as $k=>$v1){
			$v = $next[$k];
			$bai = number_format(($v[1]/$sum)*100,2)."%";
			$k_show = $k."(".$v[1]." , ".$bai.") ";
			$next_str .="<span style='background:".$v[0].";display:block;margin-top:10px;' class='label label-default'>$k_show</span>";
		}
		$next_str .= "</div>";
		
		
		$tpl = '
		<canvas style="float:left;" id="'.$canvas.'" width="200" height="200"></canvas>'.$next_str.'
		<script type="text/javascript">
		$(function(){
		
			var data = '.$data.'
			var opt = { tooltipTemplate : "<%if (label){%><%=label%>: <%}%><%= value %>'.$danwei.'", animation: true };
		
			var ctx = document.getElementById("'.$canvas.'").getContext("2d");
			var myNewChart = new Chart(ctx).Pie(data,opt); //Pie Doughnut
		
		
		
		});
		
		
		
			</script>';
			
		return $tpl;
	}
	
	
	
	
}


使用：
<?php 

$data = [
		[
				'value'=> 50,
				'color'=>"#F7464A",
				'highlight'=>"#FF5A5E",
				'label'=> "购买用户",
		],
			
		 
		[
				'value'=>100,
				'color' =>"#FDB45C",
				'highlight'=> "#FFC870",
				'label'=> "注册用户"

		]
];
echo chart::show(['data'=>$data,'value'=>' 人']);
?>

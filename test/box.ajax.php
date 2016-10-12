<meta charset='utf-8'/>
<meta name="viewport" content="width=device-width,initial-scale=1">
<script src="http://cdn.bootcss.com/jquery/1.12.0/jquery.js"></script>
<script src="http://cdn.bootcss.com/jquery.touchswipe/1.6.18/jquery.touchSwipe.js"></script>

<script src="http://cdn.bootcss.com/fancybox/2.1.5/jquery.fancybox.pack.js"></script>
<script src="http://cdn.bootcss.com/jquery-mousewheel/3.1.13/jquery.mousewheel.js"></script>
<script src="http://cdn.bootcss.com/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="http://cdn.bootcss.com/fancybox/2.1.5/helpers/jquery.fancybox-buttons.js"></script>
<script src="http://cdn.bootcss.com/fancybox/2.1.5/helpers/jquery.fancybox-media.js"></script>
<script src="http://cdn.bootcss.com/fancybox/2.1.5/helpers/jquery.fancybox-thumbs.js"></script>


<link href="http://cdn.bootcss.com/fancybox/2.1.5/jquery.fancybox.css" rel="stylesheet">
<link href="http://cdn.bootcss.com/fancybox/2.1.5/helpers/jquery.fancybox-buttons.css" rel="stylesheet">
<link href="http://cdn.bootcss.com/fancybox/2.1.5/helpers/jquery.fancybox-thumbs.css" rel="stylesheet">


<script src="http://cdn.bootcss.com/jquery-infinitescroll/2.0b2.120520/jquery.infinitescroll.js"></script>

<script>
$(function(){

	 
    
	$("a.fancybox").fancybox({
		'transitionIn'	:	'elastic',
		'transitionOut'	:	'elastic',
		'speedIn'		:	600, 
		'speedOut'		:	200
	});


	$(document.body).swipe( {
	    //Generic swipe handler for all directions
	    swipeLeft:function(event, direction, distance, duration, fingerCount) {
		    console.log('left');
		    $.fancybox.prev();
	    },
	    swipeRight:function(event, direction, distance, duration, fingerCount) {
	    	console.log('right');
	    	$.fancybox.next();
	    },
	    //Default is 75px, set to 0 for demo so any distance triggers swipe
	    threshold:0
	});

 

	 $('#content').infinitescroll({
		    navSelector  : "div.navigation",            
		    nextSelector : "div.navigation a:last",    
		    itemSelector : "#content div.post",
		    loading      :
			    {
			msgText  : "内容加载中,请稍等",
		    finishedMsg     : '内容全部加载好了，没有更多内容了！'
			    }
		    
	});


	 

	
	
});

</script>	


<div id='content'>
<?php for($i=0;$i<55;$i++){?>
	<div class='post'>第一页请循环输出</div>
<?php }?>
</div>

<div class='navigation'>
	<a href="box.ajax.request.php?page=1">1</a>
</div>

 
 
<style>
a{
display:block;
margin:20px;
}

</style>



<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name = "viewport" content = "width = device-width, initial-scale = 1.0, maximum-scale = 1.0, user-scalable = 0" />
		<title></title>
		<script src="/check/Public/Home/js/rem.js"></script>
		<link rel="stylesheet" href="/check/Public/Home/css/style.css">
		<link rel="stylesheet" href="/check/Public/Home/css/base.css">
		<script src="/check/Public/Home/js/jquery-1.12.0.min.js"></script>
		<script src="/check/Public/Home/js/style.js"></script>
	</head>
	<body style="overflow: hidden">
		<div id="background">
			
			<div class="top">
				<img src="/check/Public/Home/images/bg2.png">
			</div>
			<div class="top_aa">
				<img src="/check/Public/Home/images/bg1.png">
			</div>
			<div class="mid">

				<?php if(is_array($timestamp)): $i = 0; $__LIST__ = $timestamp;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$foo): $mod = ($i % 2 );++$i;?><div class="mid_a">
					<div class="mid_a_a">
						<img src="/check/Public/Home/images/icon1.png" class="dj">
						<img src="/check/Public/Home/images/bg3.png">
						<span class="mid_a_a_p"><?php echo ($foo["timestamp"]); ?></span>
					</div>
							
						

						<ul class="mid_aa">
							<!-- 4是保修 5是ok -->
							<!-- 7是ok 8是保修 -->
							<?php if(is_array($foo["program"])): $i = 0; $__LIST__ = $foo["program"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$childfoo): $mod = ($i % 2 );++$i;?><li>

									<a href="<?php echo U('index2',array('program_id'=>$childfoo['id']));?>">
										<ol>

											<?php if($childfoo["status"] == 0): ?><img src="/check/Public/Home/images/icon4.png">
											<?php else: ?> 
												<img src="/check/Public/Home/images/icon5.png"><?php endif; ?>
											

											<p><?php echo ($childfoo["title"]); ?></p>
										</ol>

										<ol>
											<p></p>

											<?php if($childfoo["status"] == 0): ?><img src="/check/Public/Home/images/icon8.png" class="imgList2" >
											<?php else: ?> 
												<img src="/check/Public/Home/images/icon7.png" class="imgList2" ><?php endif; ?>

										</ol>
									</a>
								</li><?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
					</div><?php endforeach; endif; else: echo "" ;endif; ?>

				<p class="dj2">*点击类别查看更多</p>

			</div>
			</div>
		</div>
	</body>
</html>

<script>
    $(".Jumps").click(function () {
        $(".imgList2").css({
            'display':'block',
        })
    })
    var r = 0;

	$('.mid_a').click(function () {
		
        var audios = $('#music');
        var auio ='<audio src="/check/Public/Home/Music/Music.mp3" controls="" id="music" >';
        audios.remove();
        $(this).append(auio);
        $("#music")[0].play();
        $('#music').css({
			display:'none',
		});

		$(this).find('.mid_aa').slideToggle();

		if($(this).find('mid_aa').css('display')=='block'){

            $(this).find('mid_aa').slideUp();
        }
        r += 45;
        $(this).find('.dj').css('transform','rotate('+ r + 'deg)');
    })  
</script>
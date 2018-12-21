<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<head>
    <title></title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta id="jdouview" name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <meta name="format-detection" content="telephone=no">

    <!--<meta name="description" content="WebRTC code samples">-->
    <!--<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1, maximum-scale=1">-->
    <!--<meta itemprop="description" content="Client-side WebRTC code samples">-->
    <!--&lt;!&ndash;<meta itemprop="image" content="../../../images/webrtc-icon-192x192.png">&ndash;&gt;-->
    <!--<meta itemprop="name" content="WebRTC code samples">-->
    <!--<meta name="mobile-web-app-capable" content="yes">-->

    <!--<link rel="stylesheet" href="swiper-4.3.3.min.css">-->
    <link rel="stylesheet" href="/gt/Public/Home/css/style.css">
    <!--<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet" type="text/css">-->
    <link rel="stylesheet" href="/gt/Public/Home/css/main.css">
    <link rel="stylesheet" type="text/css" href="/gt/Public/Home/layer/mobile/need/layer.css">

    <script src="/gt/Public/Home/js/rem.js"></script>
    <script src="/gt/Public/Home/js/jquery-1.12.0.min.js"></script>

    <!-- 弹窗插件放在下面 -->
    <script type="text/javascript" src="/gt/Public/Home/layer/layer.js"></script>    

</head>

<body>
<!--
<div id="controlBtn" class="controlBtn controlIconae"></div> -->
<!-- 陀螺仪开启按钮 -->
<div id="pano">
    <!-- 正方体的六个面 -->
    <div id="bg_section_0" class="bg_section bg_section_4 scale_test">
        <img class="bg" src="/gt/Public/Home/img/vr/r.jpg" alt="">
        <div class="room1">
            <div class="btn" value=0 id="r1btn0"></div>
            <div class="btn" value=1 id="r1btn1"></div>
        </div>
        <!-- <div class="btn1 bounceant1"></div> -->
        <!-- 可点击按钮1 -->
    </div>
    <div id="bg_section_1" class="bg_section bg_section_5 scale_test">
        <img class="bg" src="/gt/Public/Home/img/vr/l.jpg" alt="">
        <div class="room1">
            <div class="btn" value=2 id="r1btn2"></div>
        </div>
    </div>
    <div id="bg_section_2" class="bg_section bg_section_2 scale_test">
        <img class="bg" src="/gt/Public/Home/img/vr/t.jpg" alt="">
    </div>
    <div id="bg_section_3" class="bg_section bg_section_3 scale_test">
        <img class="bg" src="/gt/Public/Home/img/vr/d.jpg" alt="">
    </div>
    <div id="bg_section_4" class="bg_section bg_section_1 scale_test">
        <img class="bg" src="/gt/Public/Home/img/vr/f.jpg" alt="">
        <div class="room0">
            <div class="btn" value=0 id="r0btn1"></div>
            <div class="btn" value=1 id="r0btn2"></div>
            <div class="btn" value=2 id="r0btn3"></div>
        </div>
        <div class="room1">
            <div class="btn" value=3 id="r1btn3"></div>
        </div>
        <!-- 可点击按钮2 -->
    </div>
    <div id="bg_section_5" class="bg_section bg_section_0 scale_test">
        <img class="bg" src="/gt/Public/Home/img/vr/b.jpg" alt="">
    </div>
</div>




<!--点击面板后的轮播-->
<div class="tplane" style="display: none">
    <div class="tclose">X</div>

    <!-- Swiper -->
    <!-- 隐藏的轮播图，用于js的获取 -->
    <input type="hidden" id="hiddenhall1img" value="<?php echo ($hallimg1); ?>">
    <input type="hidden" id="hiddenhall2img" value="<?php echo ($hallimg2); ?>">

    <div class="swiper-container" >
        <div class="swiper-wrapper">

            <img width="100%" height="auto" src="">

            <img width="100%" height="auto" src="" style="display: none">

            <img width="100%" height="auto" src="" style="display: none">

            <img width="100%" height="auto" src="" style="display: none">

        </div>
        <!-- Add Arrows -->
        <div class="button-next"></div>
        <div class="button-prev"></div>
    </div>

</div>
<!--点击面板后的轮播end-->

<div id="hall1mp3" name="<?php echo ($hall1mp3); ?>"></div>
<div id="hall2mp3" name="<?php echo ($hall2mp3); ?>"></div>
<audio id="audioTalk" preload="auto" src=""></audio>
<!--一号厅面板轮播图的语音end-->

<audio id="room2_audio" preload="auto" src="/gt/Public/Home/audio/2.mp3"></audio>
<!--二号厅轮播面板语音end-->


<!--6个展厅切换图片导航-->
<div class="navplane" style="overflow: hidden;">

    <ul class="nav_img" style="width: 100%;padding: 0;overflow: hidden;position: relative;z-index: 9999;display: flex;justify-content: space-between;">
        <li value=0>
            <img class="btnnav" id="btnnav0"  src="/gt/Public/<?php echo (ltrim($hallimg['0']['hallimg_img'],'./Public')); ?>" alt="">
        </li>
        <li value=1>
            <img class="btnnav" id="btnnav1"  src="/gt/Public/<?php echo (ltrim($hallimg['1']['hallimg_img'],'./Public')); ?>" alt="">
        </li>
        <li value=2>
            <img class="btnnav" id="btnnav2"  src="/gt/Public/Home/img/show3.jpg" alt="">
        </li>
        <li  value=3>
            <img class="btnnav" id="btnnav3"  src="/gt/Public/Home/img/show4.jpg" alt="">
        </li>
        <li  value=4>
            <img class="btnnav" id="btnnav4"  src="/gt/Public/Home/img/show5.jpg" alt="">
        </li>
        <li value=5>
            <img class="btnnav" id="btnnav5"  src="/gt/Public/Home/img/show6.jpg" alt="">
        </li>

    </ul>
</div>
<!--6个展厅切换图片导航end-->

<!-- newman -->
<div class="freshman" style="display: none;">

</div>

<!-- login -->



<!--登陆后显示内容end-->



<!-- tip -->
<!--弹窗提示-->

<div class="tan" style="display: none">
    <div class="tan_content">
        <p class="tip_con">是否返回上一页？</p>
        <div class="t_btns">
            <b>确认</b>
            <b>取消</b>
        </div>
    </div>
</div>
<!--弹窗提示end-->



<!--厅内最底部三个按钮-->
<div class="footnav">
    <div>

        <!-- 后台传送考试情况 -->
        <div id="kaoshistatus1" name="<?php echo ($kaoshistatus1); ?>"></div>
        <div id="kaoshistatus2" name="<?php echo ($kaoshistatus2); ?>"></div>

        <!-- 隐藏展厅缩略图用于考试完成后，ajax给证书添加图片 -->
<!--         <input type="hidden" name="/gt/Public/<?php echo (ltrim($hallimg['0']['hallimg_img'],'./Public')); ?>" id="hiddensuolue1">
        <input type="hidden" name="/gt/Public/<?php echo (ltrim($hallimg['1']['hallimg_img'],'./Public')); ?>" id="hiddensuolue2"> -->

        <img id="footback" src="/gt/Public/Home/img/footback.png" alt="">
        <img id="foottest" src="/gt/Public/Home/img/foottests.png" alt="">
        <img id="foothuman" src="/gt/Public/Home/img/foothuman.png" alt="">
    </div>
</div>
<!--厅内最底部三个按钮end-->

<!--最终成绩弹窗-->
<div class="result" style="display: none">
    <div class="res_content">
        <ul class="halls hall01">
            <li>
                <img class="rongyu1" style="width:100%;height:100%;" src="/gt/Public/<?php echo (ltrim($hallimg['0']['hallimg_img'],'./Public')); ?>">          
            </li>
            <li>一号厅</li>
            <li><img id="paizhao1" src="/gt/Public/<?php echo (ltrim($ting1img,'./Public')); ?>" style="width:100%;height:100%;"></li>
        </ul>
        <ul class="halls hall02">
            <li>
                <img class="rongyu2" style="width:100%;height:100%;" src="/gt/Public/<?php echo (ltrim($hallimg['1']['hallimg_img'],'./Public')); ?>">
            </li>
            <li>二号厅</li>
            <li><img id="paizhao2" src="/gt/Public/<?php echo (ltrim($ting2img,'./Public')); ?>" style="width: 100%;height: 100%;"></li>
        </ul>
        <ul class="halls hall03">
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <ul class="halls hall04">
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <ul class="halls hall05">
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <ul class="halls hall06">
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <div class="get_result"></div>
    <img src="/gt/Public/Home/img/out.png" alt="" class="out">
</div>

<!--最终成绩弹窗end-->

<!--自拍页面-->
<!-- 定义一个空的判断进入考试前是否拍照 -->
<div id="container2" style="display: none;" name=""></div>

<div id="container" name="" style="display:none">
    <video playsinline autoplay class="came"></video>
    <button class="pai" id="pai">拍摄</button>
    <canvas id="cava" style="display: none"></canvas>
    <img src="" id="cava_img" alt="" style="display: none">
    <script>
        $(function () {
            var screen_h = $(window).height();
            $('.came').css('height',screen_h*0.8);
            $('#container').css('height',screen_h);
        })
    </script>
    <script type="text/javascript">
    
// Put variables in global scope to make them available to the browser console.
const video = document.querySelector('video');
const canvas = window.canvas = document.querySelector('canvas');
canvas.width = 480;
canvas.height = 360;

const button = document.querySelector('button');
button.onclick = function() {

  canvas.width = video.videoWidth;
  canvas.height = video.videoHeight;
  canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
  // 生成cavas
    
    var imgSrc = document.getElementById("cava").toDataURL("image/png");
// console.log(imgSrc);return false;
    var ting = $('.now').index();

    // document.getElementById("cava_img").src = imgSrc;
        if(ting=='0'){
                $('#container').hide();
                $('#container').attr('name','1');
        }
        if(ting=='1'){
                $('#container').hide();
                $('#container2').attr('name','1');
        }
        
        $.post("<?php echo U('Home/exam/canvas');?>",{imgSrc:imgSrc,ting:ting},function(data){
               console.log(data);return false;
        })  
//    将cavas转成png
        $('#container').hide();
};

const constraints = {
  audio: false,
  video: true
};

function handleSuccess(stream) {
  window.stream = stream; // make stream available to browser console
  video.srcObject = stream;
}

function handleError(error) {
  console.log('navigator.getUserMedia error: ', error);
}

navigator.mediaDevices.getUserMedia(constraints).then(handleSuccess).catch(handleError);
</script>
</div>
<!--自拍页面end-->


<!--考试页面-->
<div class="exam" style="display: none">
    <div class="exam_before" >
        <div class="into" >开始答题</div>
        <div class="quit">退出答题</div>
        <img src="/gt/Public/Home/img/camera.png" alt="相机按钮" class="camera">
    </div>
    <!--**********-->

    <script>
        $('.camera').click(function () {
            // window.location='samples/src/content/getusermedia/canvas/index.html';
            $('#container').show();
        })      
    </script>

    <div id="examtype1" name="<?php echo ($examone1["type"]); ?>"></div>
    <div id="choiceanswer1" name="<?php echo ($examone1["choice_true"]); ?>"></div>
    <div id="judgeanswer1" name="<?php echo ($examone1["judge_true"]); ?>"></div>



    <div class="question" style="display: none">
        <div class="question_content">
            <p class="question_txt">
                <?php echo ($examone1["choice_content"]); ?>
            </p>
            <div class="choose">
                <label for="a"><input type="radio" name="question01" id="a" value="false"><?php echo ($examone1["choice_a"]); ?></label>
                <label for="b"><input type="radio" name="question01" id="b" value="false"><?php echo ($examone1["choice_b"]); ?></label>
                <label for="c"><input type="radio" name="question01" id="c" value="false"><?php echo ($examone1["choice_c"]); ?></label>
            </div>
        </div>
        <img src="/gt/Public/Home/img/sure.png" alt="" class="sure">
    </div>

    <div class="question1" style="display: none">
        <div class="question_content">
            <p class="question_txt">
                <?php echo ($examone1["judge_content"]); ?>
            </p>
            <div class="choose">
                <label for="a"><input type="radio" name="question01" id="a" value="false">对</label>
                <label for="b"><input type="radio" name="question01" id="b" value="false">错</label>
            </div>
        </div>
        <img src="/gt/Public/Home/img/sure.png" alt="" class="sure">
    </div>

    <!-- 厅二试题 -->
    <div id="examtype2" name="<?php echo ($examone2["type"]); ?>"></div>
    <div id="choiceanswer2" name="<?php echo ($examone2["choice_true"]); ?>"></div>
    <div id="judgeanswer2" name="<?php echo ($examone2["judge_true"]); ?>"></div>

    <div class="question2" style="display: none">
        <div class="question_content">
            <p class="question_txt">
                <?php echo ($examone2["choice_content"]); ?>
            </p>
            <div class="choose">
                <label for="a"><input type="radio" name="question01" id="a" value="false"><?php echo ($examone2["choice_a"]); ?></label>
                <label for="b"><input type="radio" name="question01" id="b" value="false"><?php echo ($examone2["choice_b"]); ?></label>
                <label for="c"><input type="radio" name="question01" id="c" value="false"><?php echo ($examone2["choice_c"]); ?></label>
            </div>
        </div>
        <img src="/gt/Public/Home/img/sure.png" alt="" class="sure">
    </div>

    <div class="question3" style="display: none">
        <div class="question_content">
            <p class="question_txt">
                <?php echo ($examone2["judge_content"]); ?>
            </p>
            <div class="choose">
                <label for="a"><input type="radio" name="question01" id="a" value="false">对</label>
                <label for="b"><input type="radio" name="question01" id="b" value="false">错</label>
            </div>
        </div>
        <img src="/gt/Public/Home/img/sure.png" alt="" class="sure">
    </div>

</div>
<!--考试页面结束 -->

<!--完成所有考试的证书-->
<div class="certi" style="display: none">
    <img src="/gt/Public/Home/img/turnback.png" alt="" class="turnback" style="width: 0.6rem">
    <div class="cer_content">
        <div class="cer_name">
            <img src="/gt/Public/Home/img/logo.png" alt="">
            <p>警示教育合格证</p>
        </div>
        <input type="hidden" name="<?php echo ($userimg); ?>" id="userimg">
        <div class="photo">
            <img style="width:1.6rem ;
                height: 1.6rem;margin: 0 auto;" src="/gt/Public/<?php echo (ltrim($userimg,'./Public')); ?>">
        </div>

        <style type="text/css">
            .photo {
                width:1.6rem ;
                height: 1.6rem;
                /*background: url("../img/wyz.jpg") no-repeat;*/
                background-size: cover;
                background-position: center;
                margin: 0 auto;
            }

        </style>
        <div class="personal_msg">
            <ul>
                <li><b>工&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;号：</b><span></span></li>
                <li><b>姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名：</b><span></span></li>
                <li><b>考评通过时间：</b><span></span></li>
            </ul>
        </div>
    </div>
</div>
<!--证书结束-->

<script>
    var kaoshistatus1 = $('#kaoshistatus1').attr('name');
    var kaoshistatus2 = $('#kaoshistatus2').attr('name');

    if(kaoshistatus1=='1'){

        $('.rongyu1').css('display','block');
        $('#paizhao1').css('display','block');
    }else{
        $('.rongyu1').css('display','none');
        $('#paizhao1').css('display','none');
    }

    if(kaoshistatus2=='1'){

        $('.rongyu2').css('display','block');
        $('#paizhao2').css('display','block');
    }else{
        $('.rongyu2').css('display','none');
        $('#paizhao2').css('display','none');
    }

    $('.turnback').click(function () {
        $('.certi').hide();
    })
    // 证书页面的返回end

    $('.camera').click(function () {

    })
    // 点击拍照按钮

    // 开始答题按钮
    $('.into').click(function (){
        var into_id = $('#container').attr('name');
        var into_id2 = $('#container2').attr('name');

        // 获取考试题目类型：1：选择题 0：判断题
        var examtype1 = $('#examtype1').attr('name');
        var examtype2 = $('#examtype2').attr('name');

        var ting = $('.now').index();

        

            // 一号厅
            if(ting=='0'){

                if(into_id!=='1'){
                    $('.tan').attr('name','camera');
                    $('.tan').show();
                    $('.tan').find('p').text('请先点击橙色按钮拍正面照再开始答题！');
                    
                }else{
                    if(examtype1=='1'){
                    var choiceanswer1 = $('#choiceanswer1').attr('name');
                    $('.question label').eq(choiceanswer1).find('input').attr('value','true');
                    $('.question').show();
                    }else{
                        var judgeanswer1 = $('#judgeanswer1').attr('name');
                        $('.question1 label').eq(judgeanswer1).find('input').attr('value','true');
                        $('.question1').show();
                    }
                    $('.exam_before').hide();
                }


                
            }

            if(ting=='1'){
                if(into_id2!=='1'){
                    $('.tan').attr('name','camera');
                    $('.tan').show();
                    $('.tan').find('p').text('请先点击橙色按钮拍正面照再开始答题！');
                }else{
                    if(examtype2=='1'){
                    var choiceanswer2 = $('#choiceanswer2').attr('name');
                    $('.question2 label').eq(choiceanswer2).find('input').attr('value','true');
                    $('.question2').show();
                    }else{
                        var judgeanswer2 = $('#judgeanswer2').attr('name');
                        $('.question3 label').eq(judgeanswer2).find('input').attr('value','true');
                        $('.question3').show();
                    }
                    $('.exam_before').hide();
                }
                
            }

        return false;
        // 提示自拍结束


    });
    // 点击开始答题按钮end


    $('.quit').click(function () {
        $('.exam').hide();
    });
    // 点击退出答题按钮end

    $('.sure').click(function () {
        var vae=$('input:radio[name="question01"]:checked').val();

        // 当前的厅
        var ting = $('.now').index()

        if(vae=='true'){
            $('.question').hide();
            $('.question1').hide();
            $('.question2').hide();
            $('.question3').hide();
            $('.exam_before').show();
            $('.tan').attr('name','pass');
            $('.tan').show();

            $('.tan').find('p').text('恭喜你通过本厅考试!');
            $.ajax({
              type: 'POST',
              url: "home/exam/kaoshi?ting="+ting,
                // async:true：异步提交
              async:true,
              dataType: 'json',
                // form中设置了enctype="multipart/form-data" ，请求中的contentType会默认为multipart/form-data。contentType设置为false，避免JQuery对其操作，从而失去分界符，导致服务器不能正常解析文件
               contentType:false,
                // processData默认为true，设置为true时提交时不会序列化data
               processData:false,
              success: function(data){
                var img = data;
                // console.log(img);return false;
                if(ting=='0'){
                    // 完成考试后给kaoshistatus1个1值，下次点击考试时，提示已经考过试
                    $('#kaoshistatus1').attr('name','1');

                    // ajax给荣誉墙添加数据
                    $('.rongyu1').css('display','block');

                    $('#paizhao1').attr('src','gt'+img);
                    $('#paizhao1').css('display','block');
                }
                if(ting=='1'){
                    // 完成考试后给kaoshistatus1个1值，下次点击考试时，提示已经考过试
                    $('#kaoshistatus2').attr('name','1');

                    // ajax给荣誉墙添加数据
                    $('.rongyu2').css('display','block');

                    $('#paizhao2').attr('src','gt'+img);
                    $('#paizhao2').css('display','block');
                }
                
              },

             
            });
            return false; 

    
        }else if(vae=='false'){
            $('.question').hide();
            $('.question1').hide();
            $('.question2').hide();
            $('.question3').hide();
            $('.exam_before').show();
            $('.tan').attr('name','erro');
            $('.tan').show();
            $('.tan').find('p').text('回答错误！请重新学习再来答题！');
        }else if(vae==null){
            // $('.question').hide();
            // $('.exam_before').show();
            $('.tan').attr('name','no_choose');
            $('.tan').show();
            $('.tan').find('p').text('请选择一个选项！');

        }
    })
    // 答完题点击确认按钮end


</script>
<!--答题的js代码end-->

<!--js-->
<script src="/gt/Public/Home/js/zepto.min.js"></script>
<script src="/gt/Public/Home/js/three.min.js"></script>
<script src="/gt/Public/Home/js/CSS3DRenderer.min.js"></script>
<script src="/gt/Public/Home/js/DeviceOrientationControls.js"></script>
<script src="/gt/Public/Home/js/teemo.js"></script>
<script src="/gt/Public/Home/js/03js.js"></script>

<script src="https://webrtc.github.io/adapter/adapter-latest.js"></script>
<!-- <script src="/gt/Public/Home/js/main.js" async></script> -->
<script src="/gt/Public/Home/js/ga.js"></script>





<script>
    $(function () {
        var screen_h = $(window).height();

        var zz;
        $('.result').css('height',screen_h);<!--设置成绩弹窗的高度-->
        $('.tan').css('height',screen_h);<!--设置提示弹窗的高度-->
        $('.log').css('height',screen_h);<!--设置登录弹窗的高度-->
        $('.tips').css('height',screen_h);<!--设置登陆后提示页的高度-->
        $('.exam').css('height',screen_h);<!--设置考试页的高度-->
        $('.certi').css('height',screen_h);<!--设置合格证的高度-->
        // $('.cer_content').css('height',screen_h*0.7);<!--设置合格证内容区的高度-->

        $('#foothuman').click(function () {
            $('.result').show();
        })
        $('.result .out').click(function () {
            $('.result').hide();
        })
        // 成绩弹窗的出现和退出

        $('#footback').click(function () {
            $('.tan').attr('name','1');
            $('.tan').show();
            $('.tan').find('p').text('是否返回上一页？');
        })
        //返回上一层按钮
        $('.nav_img li').click(function () {
            $(this).attr('class','now').siblings('li').attr('class','');
        })
        // 切换大厅时添加当前大厅标记
        $('#foottest').click(function () {

            var kaoshistatus1 = $('#kaoshistatus1').attr('name');
            var kaoshistatus2 = $('#kaoshistatus2').attr('name');
            // console.log('考试状态'+kaoshistatus1);   考过试就1

            var v01 = $('.room0').attr('value');
            var v02 = $('.room1').attr('value');
            var bg01 = $('.nav_img li').eq(0).attr('class');
            var bg02 = $('.nav_img li').eq(1).attr('class');

            if(bg01=='now'){
                if(v01=='finish'){

                    if(kaoshistatus1=='1'){
                        layer.msg('已经完成考试');return false;
                    }else{
                        $('.exam').show();
                    }
                }else{
                    $('.tan').attr('name','2');
                    $('.tan').show();
                    $('.tan').find('p').text('请完成全部学习任务再来！1');
                }
            }
            //    是否在第一个厅end
            if(bg02=='now'){
                if(v02=='finish'){
                    if(kaoshistatus2=='1'){
                        layer.msg('已经完成考试');return false;
                    }else{
                        $('.exam').show();
                    }
                }else{
                    $('.tan').attr('name','2');
                    $('.tan').show();
                    $('.tan').find('p').text('请完成全部学习任务再来！2');
                }
            }
            //    是否在第二个厅end

        })
        // 考试系统按钮

        $('.t_btns b:nth-child(2)').click(function () {
            zz = $('.tan').attr('name');
            $(this).parents('.tan').hide();
            if(zz=='pass'){
                $('.tan').hide();
                $('.exam').hide();
            }else if(zz=='erro'){
                $('.tan').hide();
                $('.exam').hide();
            }else if(zz=='no_choose'){
                $('.tan').hide();
            }else if(zz=='number01'){
                $('.tan').hide();
            } else if(zz=='camera'){
                $('.tan').hide();
            }
        })
        // 提示弹窗的取消按钮

        $('.t_btns b:nth-child(1)').click(function () {
            zz = $('.tan').attr('name');
            if(zz==1){
                // $('.selectplane').show();
                // $('.tan').hide();
                window.location.href = 'index.html?v=back';
            }else if(zz==2){
                $('.tan').hide();
            }else if(zz=='pass'){
                $('.exam').hide();
                $('.tan').hide();
            }else if(zz=='erro'){
                $('.exam').hide();
                $('.tan').hide();
            }else if(zz=='no_choose'){
                $('.tan').hide();
            }else if(zz=='number01'){
                $('.tan').hide();
            }else if(zz=='number02'){
                $('.tan').hide();
            } else if(zz=='camera'){
                $('.tan').hide();
            }
        })
        // 提示弹窗的确认按钮

        $('.login_out').click(function () {
            $('.log').hide();
            $('.selectplane').show();
        })
        //    登录框点×

        $('.log .submit').click(function () {
            $('.log').hide();
            $('.tips').show();
        })
        // 登陆后显示提示

        $('.tips .yes').click(function () {

        })

        $('.get_result').click(function () {
            $('.certi').show();

        })



    })
</script>

<!--学习进度判断-->
<script>
    var judeg = function () {
        var c = 0;
        var btn_num_01 = $('.room0 .btn').size();
        var finish_01 = 0;
        var add_01 = function(){
            finish_01++;
        }

        var eo_one = <?php echo ($eo_one); ?>;
        var eo_two = <?php echo ($eo_two); ?>;
        var eo_three = <?php echo ($eo_three); ?>;
        if(eo_one=='1'&&eo_two=='1'&&eo_three=='1'){
            $('.room0').attr('value','finish');
        }

        if(eo_one=='1'){
            $('#r0btn1').css({'background':'url(/gt/Public/Home/img/mark.png) no-repeat','background-size':'100% 100%'});
            add_01();
        }
        if(eo_two=='1'){
            $('#r0btn2').css({'background':'url(/gt/Public/Home/img/mark.png) no-repeat','background-size':'100% 100%'});
            add_01();
        }
        if(eo_three=='1'){
            $('#r0btn3').css({'background':'url(/gt/Public/Home/img/mark.png) no-repeat','background-size':'100% 100%'});
            add_01();
        }

        $('#audioTalk').off('ended');
        $('#audioTalk').on('ended',function () {
            var tm_n = $(this).attr('name');
            var ting = 1;
            // 向后台传数据
            $.post("<?php echo U('text');?>",{tm_n:tm_n,ting:ting},function(data){
               console.log(data);
            })

            if(tm_n=='1'){

                if($('#r0btn1').css('background-image')=='none')
                {
                    $('#r0btn1').css({'background':'url(/gt/Public/Home/img/mark.png) no-repeat','background-size':'100% 100%'});
                    add_01();
                }
            }else if(tm_n=='2'){

                if($('#r0btn2').css('background-image')=='none'){
                    $('#r0btn2').css({'background':'url(/gt/Public/Home/img/mark.png) no-repeat','background-size':'100% 100%'});
                    add_01();
                }

            }else if(tm_n=='3'){
                if($('#r0btn3').css('background-image')=='none'){
                    $('#r0btn3').css({'background':'url(/gt/Public/Home/img/mark.png) no-repeat','background-size':'100% 100%'});
                    add_01();
                }
            }
            if(finish_01==btn_num_01){
                $('.room0').attr('value','finish');
                $('.tan').attr('name','number01');
                $('.tan').show();
                $('.tan').find('p').text('已完成本厅学习！请进入考试系统考试！1');
                add_01();
            }
        })
        //    一号厅语音判断是否播完

        var btn_num_02 = $('.room1 .btn').size();
        var finish_02 = 0;
        var perfect = 0;
        var add_02 = function(){
            finish_02++;
        }
        var ok = function(){
            perfect++;
        }
        $('#room2_audio').on('ended',function () {
            var tm_n = $(this).attr('name');
            var ting =2;
            
            // 向后台传数据
            $.post("<?php echo U('text');?>",{tm_n:tm_n,ting:ting},function(data){
                console.log(data);
            })

            if(tm_n=='0'){
                if($('#r1btn0').css('background-image')=='none'){
                    $('#r1btn0').css({'background':'url(/gt/Public/Home/img/mark.png) no-repeat','background-size':'100% 100%'});
                    add_02();
                }
            }else if(tm_n=='1'){
                if($('#r1btn1').css('background-image')=='none'){
                    $('#r1btn1').css({'background':'url(/gt/Public/Home/img/mark.png) no-repeat','background-size':'100% 100%'});
                    add_02();
                }

            }else if(tm_n=='2'){
                if($('#r1btn2').css('background-image')=='none'){
                    $('#r1btn2').css({'background':'url(/gt/Public/Home/img/mark.png) no-repeat','background-size':'100% 100%'});
                    add_02();
                }

            }
            else if(tm_n=='3'){
                if($('#r1btn3').css('background-image')=='none'){
                    $('#r1btn3').css({'background':'url(/gt/Public/Home/img/mark.png) no-repeat','background-size':'100% 100%'});
                    add_02();
                }
            }

            if(finish_02==btn_num_02){
            $('.room1').attr('value','finish');
            $('.tan').attr('name','number02');
            $('.tan').show();
            $('.tan').find('p').text('已完成本厅学习！请进入考试系统考试！');
            add_02();
            }

        })
        // room2_audio结束
        
        // 判断该用户的第二个厅的考试情况
        var examtwo = '<?php echo ($examtwo); ?>';
        examtwo = examtwo.split(',');
        for (var i = 1; i <= 15; i++) {
            if(examtwo[i]=='1'){
                $('#r1btn'+(i-1)).css({'background':'url(/gt/Public/Home/img/mark.png) no-repeat','background-size':'100% 100%'});
                add_02();
            }
        }
            
         

    }
    // judeg结束
    // 把板块学习进度的判断代码封装起来end

    judeg();

    </script>
<!--厅内版块学习是否完成的判断end-->



</body>

</html>
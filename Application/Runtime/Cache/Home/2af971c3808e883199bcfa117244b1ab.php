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

    <script src="/gt/Public/Home/js/rem.js"></script>
    <script src="/gt/Public/Home/js/jquery-1.12.0.min.js"></script>

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
<div class="tplane" style="display: none;">
    <div class="tclose">X</div>

    <!-- 隐藏的轮播图，用于js的获取 -->
    <input type="hidden" id="hiddenhall1img" value="<?php echo ($hallimg1); ?>">
    <input type="hidden" id="hiddenhall2img" value="<?php echo ($hallimg2); ?>">

    <!-- Swiper -->
    <div class="swiper-container">
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
        <img id="footback" src="/gt/Public/Home/img/footback.png" alt="">
    </div>
</div>
<!--厅内最底部三个按钮end-->




<script>
    $('.turnback').click(function () {
        $('.certi').hide();

    })
    // 证书页面的返回end

    $('.camera').click(function () {

    })
    // 点击拍照按钮

    $('.into').click(function () {
        var into_id = $('#container').attr('name');
        if(into_id=='1'){
            $('.exam_before').hide();
            $('.question').show();
        }else if(into_id==''){
            $('.tan').attr('name','camera');
            $('.tan').show();
            $('.tan').find('p').text('请先点击橙色按钮拍正面照再开始答题！');
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

        if(vae=='true'){
            $('.question').hide();
            $('.exam_before').show();
            $('.tan').attr('name','pass');
            $('.tan').show();
            $('.tan').find('p').text('恭喜你通过本厅考试!');
        }else if(vae=='false'){
            $('.question').hide();
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
<script src="/gt/Public/Home/js/02js.js"></script>

<script src="https://webrtc.github.io/adapter/adapter-latest.js"></script>
<!-- Cannot set property 'width' of null -->
<!-- <script src="/gt/Public/Home/js/main.js" async></script> -->
<script src="/gt/Public/Home/js/ga.js"></script>

<script>
    $(function () {
        var o_one = <?php echo ($o_one); ?>;
        var o_two = <?php echo ($o_two); ?>;
        var o_three = <?php echo ($o_three); ?>;
        if(o_one=='1'){
        $('#r0btn1').css({'background':'url(/gt/Public/Home/img/mark.png) no-repeat','background-size':'100% 100%'});
        }
        if(o_two=='1'){
        $('#r0btn2').css({'background':'url(/gt/Public/Home/img/mark.png) no-repeat','background-size':'100% 100%'});
        }
        if(o_three=='1'){
        $('#r0btn3').css({'background':'url(/gt/Public/Home/img/mark.png) no-repeat','background-size':'100% 100%'});
        }

        // 判断该用户的第二个厅的学习情况
        var tw_one = <?php echo ($tw_one); ?>;
        var tw_two = <?php echo ($tw_two); ?>;
        var tw_three = <?php echo ($tw_three); ?>;
        var tw_four = <?php echo ($tw_four); ?>;

        if(tw_one=='1'){
            $('#r1btn0').css({'background':'url(/gt/Public/Home/img/mark.png) no-repeat','background-size':'100% 100%'});
        }
        if(tw_two=='1'){
            $('#r1btn1').css({'background':'url(/gt/Public/Home/img/mark.png) no-repeat','background-size':'100% 100%'});
        }
        if(tw_three=='1'){
            $('#r1btn2').css({'background':'url(/gt/Public/Home/img/mark.png) no-repeat','background-size':'100% 100%'});
        }
        if(tw_four=='1'){
            $('#r1btn3').css({'background':'url(/gt/Public/Home/img/mark.png) no-repeat','background-size':'100% 100%'});
        }

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
            var v01 = $('.room0').attr('value');
            var v02 = $('.room1').attr('value');
            var bg01 = $('.nav_img li').eq(0).attr('class');
            var bg02 = $('.nav_img li').eq(1).attr('class');

            // console.log(bg01);
            if(bg01=='now'){
                if(v01=='finish'){
                    $('.exam').show();
                }else{
                    $('.tan').attr('name','2');
                    $('.tan').show();
                    $('.tan').find('p').text('请完成全部学习任务再来！1');
                }
            }
            //    是否在第一个厅end

            if(bg02=='now'){
                if(v02=='finish'){
                    $('.exam').show();
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

$(function () {

    var judeg = function () {
        var c = 0;
        var btn_num_01 = $('.room0 .btn').size();
        var finish_01 = 0;
        var add_01 = function(){
            finish_01++;
        }
        $('#audioTalk').off('ended');
        $('#audioTalk').on('ended',function () {
            var m_n = $(this).attr('name');
            var ting = 1;
            // 向后台传数据
            $.post("<?php echo U('index');?>",{m_n:m_n,ting:ting},function(data){
               console.log(data);
            })
            
            if(m_n=='1'){
                if($('#r0btn1').css('background-image')=='none')
                {
                    $('#r0btn1').css({'background':'url(/gt/Public/Home/img/mark.png) no-repeat','background-size':'100% 100%'});
                    add_01();
                }
            }else if(m_n=='2'){

                if($('#r0btn2').css('background-image')=='none'){
                    $('#r0btn2').css({'background':'url(/gt/Public/Home/img/mark.png) no-repeat','background-size':'100% 100%'});
                    add_01();
                }

            }else if(m_n=='3'){
                if($('#r0btn3').css('background-image')=='none'){
                    $('#r0btn3').css({'background':'url(/gt/Public/Home/img/mark.png) no-repeat','background-size':'100% 100%'});
                    add_01();
                }
            }

        })
        //    一号厅语音判断是否播完

        var btn_num_02 = $('.room1 .btn').size();
        var finish_02 = 0;
        var perfect = 0;
        var add_02 = function(){
            finish_02++;
        }

        $('#room2_audio').off('ended');
        $('#room2_audio').on('ended',function () {
            var m_n = $(this).attr('name');
            console.log(m_n);
            var ting =2;
            // 向后台传数据
            $.post("<?php echo U('index');?>",{m_n:m_n,ting:ting},function(data){
                console.log(data);
                
            })

            if(m_n=='0'){
                if($('#r1btn0').css('background-image')=='none'){
                    $('#r1btn0').css({'background':'url(/gt/Public/Home/img/mark.png) no-repeat','background-size':'100% 100%'});
                    add_02();
                }

            }else if(m_n=='1'){
                if($('#r1btn1').css('background-image')=='none'){
                    $('#r1btn1').css({'background':'url(/gt/Public/Home/img/mark.png) no-repeat','background-size':'100% 100%'});
                    add_02();
                }

            }else if(m_n=='2'){
                if($('#r1btn2').css('background-image')=='none'){
                    $('#r1btn2').css({'background':'url(/gt/Public/Home/img/mark.png) no-repeat','background-size':'100% 100%'});
                    add_02();
                }

            }
            else if(m_n=='3'){
                if($('#r1btn3').css('background-image')=='none'){
                    $('#r1btn3').css({'background':'url(/gt/Public/Home/img/mark.png) no-repeat','background-size':'100% 100%'});
                    add_02();
                }
            }
     
               
        })
        //    2号厅语音判断是否播完

    }
    // 把板块学习进度的判断代码封装起来end
    judeg();
})

</script>
<!--厅内版块学习是否完成的判断end-->



</body>

</html>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1.0, maximum-scale = 1.0, user-scalable = 0" />
    <title></title>
    <link rel="stylesheet" href="/check/Public/Home/css/load.css">
    <link rel="stylesheet" href="/check/Public/Home/css/base.css">
    <script src="/check/Public/Home/js/jquery-1.12.0.min.js"></script>
    <script src="/check/Public/Home/js/style.js"></script>
    <script src="/check/Public/Home/js/rem.js"></script>
    <script src="/check/Public/Home/js/jQueryRotate.js"></script>
    <script src="/check/Public/Home/js/jquery.animateNumber.min.js"></script>
</head>
<body>
    <div id="background">
        <div class="bg2">
            <img src="/check/Public/Home/images/load/bg2.png">
        </div>
        <div class="mid">
            <img src="/check/Public/Home/images/load/icon.png" alt="">
            <img src="/check/Public/Home/images/load/icon2.png" alt="">
            <p id="target">0 %</p>
        </div>
    </div>
</body>
</html>

<script>
    $(function () {
        var rotation = function () {
            $(".mid img:nth-child(2)").rotate({
                angle:0,
                animateTo:100,
                callback:rotation,
                easing:function (x,t,b,c,d) {
                    return c*(t/d)+b;
                }
            });
        }
        rotation();
    })
</script>
<script>
    var initial = 0;
    var increase = initial === 0 ? 1:initial * 10;

    $("#target").animateNumber({
        number:100 * increase,

        numberStep:function (now,tween) {
            var increase_number = Math.round(now) / increase,
                target = $(tween.elem);
            if (initial > 0){
                increase_number = increase_number.toFixed(initial);
            }
            target.text(increase_number + '%');
        }
    },2500)
    setTimeout(function () {
       window.location.href = "<?php echo U('Index/login');?>";
    },3000)
</script>
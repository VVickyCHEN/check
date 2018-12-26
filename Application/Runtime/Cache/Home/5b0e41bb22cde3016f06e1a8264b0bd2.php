<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1.0, maximum-scale = 1.0, user-scalable = 0" />
    <title></title>
    <script src="/check/Public/Home/js/rem.js"></script>
    <link rel="stylesheet" href="/check/Public/Home/css/style4.css">
    <link rel="stylesheet" href="/check/Public/Home/css/base.css">
    <script src="/check/Public/Home/js/jquery-1.12.0.min.js"></script>
    <script src="/check/Public/Home/js/style.js"></script>
</head>
<body>
    <div id="background">
        <div class="top">
            <img src="/check/Public/Home/images/index2/icon.png" alt="">
            <span><img src="/check/Public/Home/images/icon3.png"><p id="list" class="li"><?php echo ($title); ?></p></span>
        </div>
        <div class="mid">
            <p><img src="/check/Public/Home/images/index4/icon1.png">

            </p>
            <span>已成功保存到后台！</span>
            <textarea>

            </textarea>
            <ul>
                <li><img src="/check/Public/Home/images/index3/icon3.png" alt=""></li>
                <li><img src="/check/Public/Home/images/index3/icon3.png" alt=""></li>
            </ul>

        </div>
        <div class="but">
            <a href="<?php echo U('index1');?>" class="jump"> <img src="/check/Public/Home/images/index4/icon2.png" alt=""></a>
        </div>
    </div>
</body>
</html>
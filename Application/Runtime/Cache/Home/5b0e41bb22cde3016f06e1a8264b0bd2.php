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
            <span><img src="/check/Public/Home/images/icon3.png"><p id="list" class="li"></p></span>
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
        <div class="but" onclick="load_sound(url)">
            <a href="index1.html" class="jump" onclick="load_sound(url)"> <img src="/check/Public/Home/images/index4/icon2.png" onclick="load_sound(url)" alt=""></a>
        </div>
    </div>
</body>
</html>

<script>
    //按钮声效
    var url = 'Music/Music.mp3';
    var con = new AudioContext();
    function load_sound(url_data) {
        var req = new XMLHttpRequest();
        req.open('GET',url_data,true);
        req.responseType = 'arraybuffer';
        req.onload = function () {
            con.decodeAudioData(req.response,function (buffer) {
                //
                var source = con.createBufferSource();
                source.buffer = buffer;
                source.connect(con.destination);
                source.start(0);
            },function (e) {
                console.info('错误');
            });
        }
        req.send();
    }
</script>

<script>
    function getUrlParam(name) {
        var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)"); //构造一个含有目标参数的正则表达式对象
        var r = window.location.search.substr(1).match(reg); //匹配目标参数
        if (r != null) return unescape(r[2]); return null; //返回参数值
    }
    var name = getUrlParam('name');
    $(function () {
        if(name=='li1'){
            $('.li').text('1-1检查左侧盖板8块完整干净');
        }
        if(name=='li2'){
            $('.li').text('1-2检查左侧龙门柱外观');
        }
        if(name=='li3'){
            $('.li').text('1-3检查加载装置横梁外观');
        }
        if(name=='li4'){
            $('.li').text('1-4检查液压站压力表完好');
        }
        if(name=='li5'){
            $('.li').text('1-5检查加载适配器外观');
        }
        if(name=='li6'){
            $('.li').text('1-6检查导轨装置外观');
        }
        if(name=='li7'){
            $('.li').text('1-7检查左边转向架支撑装置外观');
        }
        if(name=='li8'){
            $('.li').text('1-8检查右边转向架支撑装置外观');
        }
        if(name=='li9'){
            $('.li').text('1-9检查右侧盖板共8块完整 干净');
        }
        if(name=='li10'){
            $('.li').text('1-10检查右侧龙门柱外观');
        }
        if(name=='li11'){
            $('.li').text('2-1检查设备信号灯完好');
        }
        if(name=='li12'){
            $('.li').text('2-2检查加载油缸无漏油');
        }
        if(name=='li13'){
            $('.li').text('2-3检查左边导轨举升油缸1无漏油');
        }
        if(name=='li14'){
            $('.li').text('2-4检查左边导轨举升油缸2无漏油');
        }
        if(name=='li15'){
            $('.li').text('2-5检查左边导轨举升油缸3无漏油');
        }
        if(name=='li16'){
            $('.li').text('2-6检查右边导轨举升油缸4无漏油');
        }
        if(name=='li17'){
            $('.li').text('2-7检查右边导轨举升油缸5无漏油');
        }
        if(name=='li18'){
            $('.li').text('2-8检查右边导轨举升油缸6无漏油');
        }
        if(name=='li19'){
            $('.li').text('2-9检查左边称重滑台无漏油');
        }
        if(name=='li20'){
            $('.li').text('2-10检查左边称重滑台无漏油');
        }
        if(name=='li21'){
            $('.li').text('2-11检查左边主油缸无漏油');
        }
        if(name=='li22'){
            $('.li').text('2-12检查右边主油缸无漏油');
        }
        if(name=='li23'){
            $('.li').text('3-1检查地坑无积水');
        }
        if(name=='li24'){
            $('.li').text('3-2清洁车轮测量单元操作台');
        }
        if(name=='li25'){
            $('.li').text('3-3清洁车轮测量单元下降导轨');
        }
        if(name=='li26'){
            $('.li').text('3-4清洁车轮测量单元线性滑槽');
        }
        if(name=='li27'){
            $('.li').text('3-5清洁车轮测量单元测量辊');
        }
        if(name=='li28'){
            $('.li').text('3-6清洁车轮测量液压单元');
        }
        if(name=='li29'){
            $('.li').text('3-7清洁门式钢架龙门立柱表面');
        }
        if(name=='li30'){
            $('.li').text('3-8清洁门式钢架横梁表面');
        }
        if(name=='li31'){
            $('.li').text('3-9清洁门式钢架主油缸');
        }
        if(name=='li32'){
            $('.li').text('3-10清洁门式钢架光杠');
        }
        if(name=='li33'){
            $('.li').text('3-11清洁门式钢架丝杠');
        }
        if(name=='li34'){
            $('.li').text('3-12清洁门式钢架电机1');
        }
        if(name=='li35'){
            $('.li').text('3-13清洁门式钢架电机2');
        }
        if(name=='li36'){
            $('.li').text('3-14清洁门式钢架线性导轨');
        }


        $('.jump').attr('href','index1.html?name='+name);

    });
</script>
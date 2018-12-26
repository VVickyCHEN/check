<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1.0, maximum-scale = 1.0, user-scalable = 0" />
    <title></title>
    <script src="/check/Public/Home/js/rem.js"></script>
    <link rel="stylesheet" href="/check/Public/Home/css/login.css">
    <link rel="stylesheet" href="/check/Public/Home/css/base.css">
    <script src="/check/Public/Home/js/jquery-1.12.0.min.js"></script>
    <script src="/check/Public/Home/js/style.js"></script>
    <script src="/check/Public/Home/js/jQueryRotate.js"></script>
    <script src="/check/Public/Home/js/rem.js"></script>

</head>
<body>
    <div id="background">
        <audio src="/check/Public/Home/Music/Music.mp3" id="music" style="display: none"></audio>
        <div class="login">
            <img src="/check/Public/Home/images/login/bg.png">
            <div class="top">
                <ul>
                    <li>
                        <img src="/check/Public/Home/images/login/icon.png">
                        <input type="text" placeholder="您的姓名" id="name"/>
                    </li>
                    <li class="imgAll"><img src="/check/Public/Home/images/login/icon2.png">
                        <input type="text" placeholder="您的工号" id="check">
                    </li>
                </ul>
                <p class="imgAll"><img src="/check/Public/Home/images/login/bg2.png"></p>
            </div>
            <div class="img">
                <img src="/check/Public/Home/images/login/bg1.png">
                <img src="/check/Public/Home/images/login/icon8.png" id="img">
                <img src="/check/Public/Home/images/login/icon9.png" id="img1">
                <img src="/check/Public/Home/images/login/icon10.png" id="img2" class="enlarge">
                <div class="img6"><img src="/check/Public/Home/images/login/icon6.png"></div>
                <div class="img7"><img src="/check/Public/Home/images/login/icon7.png"></div>
                <input type="file" name="file" class="file" onchange="showPreview(this)" accept="image/*" />
                <img id="portrait" src="" style="display:none;" />
                <p>点击按钮拍照</p>
            </div>

            <div class="but">
                <div onclick="confirm()" id="confirm"><img src="/check/Public/Home/images/login/icon4.png"></div>
                <img src="/check/Public/Home/images/login/icon5.png">
                <input type="file" name="file" class="file" onchange="showPreview(this)" accept="image/*"/>
            </div>
        </div>
    </div>
</body>
</html>


<script>
    $("#confirm").click(function () {
        var audios = $('#music');
        var auio ='<audio src="/check/Public/Home/Music/Music.mp3" controls="" id="music" >';
        audios.remove();
        $('#confirm').append(auio);
        $("#music")[0].play();
        $('#music').css({
            display:'none',
        });
    })
    $(".file").click(function () {
        var audios = $('#music');
        var auio ='<audio src="/check/Public/Home/Music/Music.mp3" controls="" id="music" >';
        audios.remove();
        $('.file').append(auio);
        $("#music")[0].play();
        $('#music').css({
            display:'none',
        });
    })
</script>

<script type="text/javascript">
    function showPreview(source) {
        var file = source.files[0];
        if(window.FileReader) {
            var fr = new FileReader();
            console.log(fr);
            var portrait = document.getElementById('portrait');
            fr.onloadend = function(e) {
                portrait.src =e.target.result;
            };
            fr.readAsDataURL(file);
            portrait.style.display = 'block';
        }
    }

</script>
<script>
 
    function confirm() {
        var name = $("#name").val();
        // var name = document.getElementById("name").value;
        var nameReg = /^[\u4e00-\u9fa5]{2,4}$/;
        var check = $("#check").val();
        // var check = document.getElementById("check").value;
        var portrait = $("#portrait").attr("src");
        var checkReg = /^\d{1,3}$/;

        if (name == "" || check == "" ||portrait == ""){
            alert("请完善信息");return false;
        }else if (!nameReg.test(name)) {
            alert("请输入2~4位汉字");return false;
        }else if (!checkReg.test(check)) {
            alert("请输入1~3位工号");return false;
        }else if (portrait == "") {
            alert("请上传照片");return false;
        }else {

            
            var fd = new FormData();

            fd.append('name',name);
            fd.append('check',check);
            fd.append('base64',portrait);
            $.ajax({
                // 提交方式
                type:"post",
                // 提交地址
                url:"<?php echo U('Home/Index/login');?>",
                // async:true：异步提交
                async:true,
                // form中设置了enctype="multipart/form-data" ，请求中的contentType会默认为multipart/form-data。contentType设置为false，避免JQuery对其操作，从而失去分界符，导致服务器不能正常解析文件
                contentType:false,
                // processData默认为true，设置为true时提交时不会序列化data
                processData:false,
                data:fd,
                // 接收回调过来的信息
                success:function(data){
                    if(data.code==1){
                        location.href = "<?php echo U('index1');?>";
                    } else {
                        // 数据添加失败
                        alert(data.info);
                        return false;
                    }
                },
            })
            event.preventDefault();
            
        }
    }

    //图片旋转
    $(function () {
        var rotation = function () {
            $("#img").rotate({
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
    $(function () {
        var rotation = function () {
            $("#img1").rotate({
                angle:0,
                animateTo:-150,
                callback:rotation,
                easing:function (x,t,b,c,d) {
                    return c*(t/d)+b;
                }
            });
        }
        rotation();
    })
</script>
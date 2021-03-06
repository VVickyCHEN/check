<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1.0, maximum-scale = 1.0, user-scalable = 0" />
    <title></title>
    <script src="/check/Public/Home/js/rem.js"></script>
    <link rel="stylesheet" href="/check/Public/Home/css/style2.css">
    <link rel="stylesheet" href="/check/Public/Home/css/base.css">
    <script src="/check/Public/Home/js/jquery-1.12.0.min.js"></script>
    <script src="/check/Public/Home/js/style.js"></script>
</head>
<body>
    <div id="background">
        <input type="hidden" class="program_id" name="<?php echo ($programdata["id"]); ?>">
        <div class="top">
            <img src="/check/Public/Home/images/index2/icon.png" alt="">
            <span><img src="/check/Public/Home/images/icon3.png"> <p id="list" class="li"><?php echo ($programdata["title"]); ?></p></span>
        </div>
        <div class="mid">
            <ul>
                <li><span>转向架`静载试验台</span></li>
                <li><a href="index1.html"><img src="/check/Public/Home/images/index2/icon5.png"></a></li>
            </ul>
            <img src="/check/Public/Home/images/index2/icon2.png" alt="">
        </div>
        <div class="center">
            <p>检查：标准/方法/工具：</p>
            <div class="center_aa"><?php echo ($programdata["standard"]); ?></div>
        </div>
        <div class="but">
            <ul>
                <li>
                    <a class="Jumps" onclick="fine()">
                        <img src="/check/Public/Home/images/index2/icon3.png">
                    </a>*确认无误可点击上传保存按钮
                </li>
                <li>
                    <a href="" class="Jump">
                        <img src="/check/Public/Home/images/index2/icon4.png">
                    </a>*出现问题状况可点击申报按钮
                </li>
            </ul>
        </div>
    </div>
</body>
</html>

<script>  
    var program_id = $('.program_id').attr('name');



    function fine()
    {       
        var fd = new FormData();

        fd.append('program_id',program_id);

        $.post({
            type:"post",
            url:"<?php echo U('fine');?>",
            //async: true 时，ajax请求是异步的
            async:true,
            data:fd,
            // form 标签中设置了enctype = “multipart/form-data”,这样请求中的 contentType 就会默认为 multipart/form-data 。而我们在 ajax 中 contentType 设置为 false 是为了避免 JQuery 对其操作，从而失去分界符，而使服务器不能正常解析文件
            contentType:false,
            // processData 默认为false，当设置为true的时候,jQuery ajax 提交的时候不会序列化 data，而是直接使用data
            processData:false,

            success:function(data){

                if(data.code==1){
                    var program_id = data.info;
                    location.href="<?php echo U('index4');?>?program_id="+program_id;
                }else{
                    alert(data.info);return false;
                }
            }
        }); 
    }

    $(function () {

        var u = navigator.userAgent;
        var isAndroid = u.indexOf('Android') > -1 || u.indexOf('Adr') > -1; //android终端
        var isiOS = !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/); //ios终端

        if(isAndroid){
            // 进入安卓版
            var url = "<?php echo U('index3');?>?program_id="+program_id;
            $('.Jump').attr('href',url);
        }else{   
            var url = "<?php echo U('Home/Index/iphone');?>?program_id="+program_id;    
            $('.Jump').attr('href',url);
        }

    })
</script>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1.0, maximum-scale = 1.0, user-scalable = 0" />
    <title></title>
    <script src="/check/Public/Home/js/rem.js"></script>
    <link rel="stylesheet" href="/check/Public/Home/css/style3.css">
    <link rel="stylesheet" href="/check/Public/Home/css/base.css">
    <script src="/check/Public/Home/js/jquery-1.12.0.min.js"></script>
    <script src="/check/Public/Home/js/style.js"></script>
    <script src="/check/Public/Home/js/recordmp3.js"></script>
    <script type="text/javascript" src="/check/Public/Home/js/imgFileupload.js"></script>
    <link rel="stylesheet" href="/check/Public/Home/css/ia.css">
</head>
<body>
<div id="background">
    <div class="top">
        <img src="/check/Public/Home/images/index2/icon.png" alt="">
        <span><img src="/check/Public/Home/images/icon3.png"><p id="list" class="li"><?php echo ($title); ?></p></span>
    </div>
    <audio src="/check/Public/Home/Music/Music.mp3" id="music" style="display: none"></audio>
    <div class="mid">
        <div class="mid_aa">
            <ul>
                <li onclick="set(1)" id="mid_aa_a">
                    <a href="javascript:;">文字输入</a>
                </li>
                <li onclick="set(2)" id="mid_aa_b">
                    <a href="javascript:;">语音输入</a>
                </li>
                <li onclick="set(3)" id="mid_aa_c">
                    <a href="javascript:;">上传图片</a>
                </li>
                <li onclick="set(4)" id="mid_aa_d">
                    <a href="javascript:;">上传视频</a>
                </li>
            </ul>
        </div>
        <div class="mid_cc">
            <ul>
                <li id="mid_aa_img1">
                    <img src="/check/Public/Home/images/index3/icon11.png">
                </li>
                <li id="mid_aa_img2">
                    <img src="/check/Public/Home/images/index3/icon11.png">
                </li>
                <li id="mid_aa_img3">
                    <img src="/check/Public/Home/images/index3/icon11.png">
                </li>
                <li id="mid_aa_img4">
                    <img src="/check/Public/Home/images/index3/icon11.png">
                </li>
            </ul>
        </div>
        <div class="mid_bb">
            <ul>
                <!-- 获取当前的program_id -->
                <input type="hidden" name="<?php echo ($program_id); ?>" id="program_id">
                <li id="mid_bb_a" style="display: block">
                    <p>实例文字</p>
                    <textarea wrap="hard" id="textarea" cols="">

                    </textarea>
                </li>
                <li id="mid_bb_b" style="display: none">
                    <p>
                        <span id="playRecord">
                            <em class='sk-wave'>
                                <em class='sk-rect sk-rect-1'></em>
                                <em class='sk-rect sk-rect-2'></em>
                                <em class='sk-rect sk-rect-3'></em>
                                <em class='sk-rect sk-rect-4'></em>
                                <em class='sk-rect sk-rect-5'></em>
                           </em>
                            <img src="/check/Public/Home/images/index3/icon4.png" class="play"/>
                        </span>
                        <img src="/check/Public/Home/images/index3/icon3.png" class="luyin">
                    </p>
                    <p class="start_p">
                        <img src="/check/Public/Home/images/index3/icon13.png"  id="start" onclick="funStart()">
                        <img src="/check/Public/Home/images/index3/icon5.png"  id="start1" onclick="funStop()" style="display: none">
                        <span class="startSpan" >点一下输入语音</span>
                    </p>

                    <audio controls  style="display:none " id="video_lu"></audio>
                </li>
                <!-- 图片上传 -->
                <li id="mid_bb_c" style="display: none">
                    <p class="enlarge"><img src="/check/Public/Home/images/index3/icon17.png"></p>
                    <p style="display: none"><img src="" alt=""style="width: 6.86rem;height: 100%" id="bigImg" ></p>
                    <div class="box" style="display: none">
                    </div>
                </li>
                <!-- 视频上传 -->
                <li id="mid_bb_d" style="display: none">
                    <div>
                        <span>
                            <img src="/check/Public/Home/images/index3/icon10.png" >
                        </span>
                        <div id="addVideoDiv">
                            <span class="icon"><img src="/check/Public/Home/images/index3/icon8.png"> </span>
                            <video id="video" controls="controls" onclick="">

                            </video>
                            <label id="vvv" class="ui_button ui_button_primary" for="y">
                               
                                <input style="display: none"  type="file" id="y" name="take-video" class="take-video"  accept="video/*" >
                            </label>
                        </div>
                        <span>
                            <img src="/check/Public/Home/images/index3/icon12.png">
                            <strong>点击上传视频</strong>
                        </span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="but">
        <ul>
            <li id="but_aa"><a onclick="upload()" class="Jumps"> <img src="/check/Public/Home/images/index3/icon1.png"></a></li>
            <li><a href="index2.html" class="jump" onclick="return confirm('确认返回吗')"><img src="/check/Public/Home/images/index3/icon2.png"></a> </li>
        </ul>
    </div>
</div>
</body>
</html>

<script type="text/javascript">
    // 上传
    function upload(){
        var program_id = $('#program_id').attr('name');

        // 文字获取
        var textarea = $('#textarea').val();

        // base64位图片获取
        var img = [];

        var imgul = $('#imgul li');

        for (var i = 0; i < imgul.length; i++) {
            img[i] = imgul.find('img').attr('data-src');
        }

        var video = $('#y').files();
        console.log(video);return false;



            
    }



    var imgFile = new ImgUploadeFiles('.box',function(e){
        this.init({
            MAX : 4, //限制个数
            MH : 5800, //像素限制高度
            MW : 5900, //像素限制宽度
            callback : function(arr){
                console.log(arr)
            }
        });
    });
    //上传视频
    var videoFile = document.getElementById('y')
    function getFileURL(file) {

        var getUrl = null;
        if (window.createObjectURL != undefined) { // basic
            getUrl = window.createObjectURL(file);
        } else if (window.URL != undefined) { // mozilla(firefox)
            getUrl = window.URL.createObjectURL(file);
        } else if (window.webkitURL != undefined) { // webkit or chrome
            getUrl = window.webkitURL.createObjectURL(file);
        }
        return getUrl;
    }

    var selectFile = function() {  //获取视频的大小 ：this.files[0].size
        var url = getFileURL(this.files[0]);//把当前的 files[0] 传进去
        if (url) {
            // var srcNe/check/Public/Home/w = "<source id='v1' src='/check/Public/Home/"+url+"' ></source>";
            $("#video").attr('src',url)
        }
        $("#videoImg").hide();
        $("#video").show();
        $('.icon').css({
            display:'block',
        })
    }
    videoFile.addEventListener('change', selectFile)

    $(function () {
        $('.icon').click(function () {
            $('#video').find('source').attr('src','');
            $('#video').hide();
            $('#mid_bb_d div span:nth-child(3)').css({
                display:'block',
            })
            $('#vvv').show();
            //按钮特效
            var audios = $('#music');
            var auio ='<audio src="/check/Public/Home/Music/Music.mp3" controls="" id="music" >';
            audios.remove();
            $('.icon').append(auio);
            $("#music")[0].play();
            $('#music').css({
                display:'none',
            });
        })
        $('#vvv').click(function () {
            $('#mid_bb_d div span:nth-child(3)').css({
                display:'none',
            })
            //按钮特效
            var audios = $('#music');
            var auio ='<audio src="/check/Public/Home/Music/Music.mp3" controls="" id="music" >';
            audios.remove();
            $('#vvv').append(auio);
            $("#music")[0].play();
            $('#music').css({
                display:'none',
            });
        })
    })
</script>

<Script>
        var recorder = new MP3Recorder({
            debug:true,
            funOk: function () {

            },

            funCancel: function (msg) {

                recorder = null;
            }
        });
        var mp3Blob;

        function funStart() {
            recorder.start();
         }

        function funStop() {
            recorder.getMp3Blob(function (blob) {
                mp3Blob = blob;
                var url = URL.createObjectURL(mp3Blob);
               
                var video_lu = document.getElementById('video_lu');

                video_lu.controls = true;
                video_lu.src =url;
            });
             
            recorder.stop();

        }
        $('#video_lu').on('ended',function () {
            $('.sk-wave').css({
                display:'none',

            })
        })
  
    window.onload = function () {
        var play = 1;
        var playRecord = document.getElementById('playRecord');
        var video_lu = document.getElementById('video_lu');
        playRecord.onclick = function(){

            play ++;
            if (play % 2 == 0){
                video_lu.play();
                $('.sk-wave').css({
                    'display':'block'
                 })
            }else {
                video_lu.pause();
                $('.sk-wave').css({
                    'display':'none'
                })
            }
        }
    }
</Script>


<script>
    $('#but_aa').click(function () {
        var audios = $('#music');
        var auio ='<audio src="/check/Public/Home/Music/Music.mp3" controls="" id="music" >';
        audios.remove();
        $('#but_aa').append(auio);
        $("#music")[0].play();
        $('#music').css({
            display:'none',
        });
    })
    $('#mid_aa_a').click(function () {
        var audios = $('#music');
        var auio ='<audio src="/check/Public/Home/Music/Music.mp3" controls="" id="music" >';
        audios.remove();
        $('#mid_aa_a').append(auio);
        $("#music")[0].play();
        $('#music').css({
            'display':'none'
        });
    })
    $('#mid_aa_b').click(function () {
        var audios = $('#music');
        var auio ='<audio src="/check/Public/Home/Music/Music.mp3" controls="" id="music" >';
        audios.remove();
        $('#mid_aa_b').append(auio);
        $("#music")[0].play();
        $('#music').css({
            'display':'none'
        });
    })
    $('#mid_aa_c').click(function () {
        var audios = $('#music');
        var auio ='<audio src="/check/Public/Home/Music/Music.mp3" controls="" id="music" >';
        audios.remove();
        $('#mid_aa_c').append(auio);
        $("#music")[0].play();
        $('#music').css({
            'display':'none'
        });
    })
    $('#mid_aa_d').click(function () {
        var audios = $('#music');
        var auio ='<audio src="/check/Public/Home/Music/Music.mp3" controls="" id="music" >';
        audios.remove();
        $('#mid_aa_d').append(auio);
        $("#music")[0].play();
        $('#music').css({
            display:'none',
        });
    })

</script>

<script>
    function click(){
        $("#music")[0].play();
    }
    $(".Jumps").click(function () {
        $(".imgList1").css({
            display:'block',
        });
        $("#music")[0].play();
    })
</script>
<script>
    $(function () {
        $(".luyin").click(function () {
            $("#video_lu").attr("src","");
            //按钮音效
            var audios = $('#music');
            var auio ='<audio src="/check/Public/Home/Music/Music.mp3" controls="" id="music" >';
            audios.remove();
            $('.luyin').append(auio);
            $("#music")[0].play();
            $('#music').css({
                display:'none',
            });
        })
    })
</script>
<script>
    $(function () {
        $('#start').click(function () {
            $('#start1').show();
            $(this).hide();
            //音效效果
            var audios = $('#music');
            var auio ='<audio src="/check/Public/Home/Music/Music.mp3" controls="" id="music" >';
            audios.remove();
            $('#start').append(auio);
            $("#music")[0].play();
            $('#music').css({
                display:'none',
            });
        })
        $('#start1').click(function () {
            $('#start').show();
            $(this).hide();
            //音效效果
            var audios = $('#music');
            var auio ='<audio src="/check/Public/Home/Music/Music.mp3" controls="" id="music" >';
            audios.remove();
            $('#start1').append(auio);
            $("#music")[0].play();
            $('#music').css({
                display:'none',
            });
        })
        $('.imgClick').click(function () {
            //音效效果
            var audios = $('#music');
            var auio ='<audio src="/check/Public/Home/Music/Music.mp3" controls="" id="music" >';
            audios.remove();
            $('.imgClick').append(auio);
            $("#music")[0].play();
            $('#music').css({
                display:'none',
            });
        })
        $('.delImg').click(function () {
            //音效效果
            var audios = $('#music');
            var auio ='<audio src="/check/Public/Home/Music/Music.mp3" controls="" id="music" >';
            audios.remove();
            $('.delImg').append(auio);
            $("#music")[0].play();
            $('#music').css({
                display:'none',
            });
        })
    })
</script>


<script>
    $(function () {
        $('.enlarge').click(function () {
            //按钮特效
            var audios = $('#music');
            var auio ='<audio src="/check/Public/Home/Music/Music.mp3" controls="" id="music" >';
            audios.remove();
            $('.enlarge').append(auio);
            $("#music")[0].play();
            $('#music').css({
                display:'none',
            });
            $('#mid_bb_c p:nth-child(2),.box').css({
                display:'block',
            });
            $('.enlarge').css({
                display:'none',
            });
        })
    })
</script>
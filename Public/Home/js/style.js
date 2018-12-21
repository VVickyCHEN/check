$(function () {
    $("#background").css({'width':$(window).width(),'height':$(window).height()})
})

$(document).ready(function () {
    var r = 0;
    $(".mid_a img:nth-child(2),.dj").click(function () {
        $(".mid_aa").slideToggle();
        if($('.mid_bb').css('display')=='block'){
            $('.mid_bb').slideUp();
        }
        $(".dj2").toggle(500);
        r += 45;
        $(".dj").css('transform','rotate('+ r + 'deg)');
    });
    $(".mid_b img:nth-child(1),.dj1").click(function () {
        $(".mid_bb").slideToggle();
        if($('.mid_aa').css('display')=='block'){
            $('.mid_aa').slideUp();
        }
        $(".dj2").toggle(500);
        r += 45;
        $(".dj1").css('transform','rotate('+ r + 'deg)');
    })
});
//切换内容
function set(id) {

    if (id == 1){
        document.getElementById("mid_bb_a").style.display = "block";
        document.getElementById("mid_bb_b").style.display = "none";
        document.getElementById("mid_bb_c").style.display = "none";
        document.getElementById("mid_bb_d").style.display = "none";

        document.getElementById("mid_aa_img1").style.display = "block";
        document.getElementById("mid_aa_img2").style.display = "none";
        document.getElementById("mid_aa_img3").style.display = "none";
        document.getElementById("mid_aa_img4").style.display = "none";
    }
    if (id == 2){
        document.getElementById("mid_bb_a").style.display = "none";
        document.getElementById("mid_bb_b").style.display = "block";
        document.getElementById("mid_bb_c").style.display = "none";
        document.getElementById("mid_bb_d").style.display = "none";

        document.getElementById("mid_aa_img1").style.display = "none";
        document.getElementById("mid_aa_img2").style.display = "block";
        document.getElementById("mid_aa_img3").style.display = "none";
        document.getElementById("mid_aa_img4").style.display = "none";
    }
    if (id == 3){
        document.getElementById("mid_bb_a").style.display = "none";
        document.getElementById("mid_bb_b").style.display = "none";
        document.getElementById("mid_bb_c").style.display = "block";
        document.getElementById("mid_bb_d").style.display = "none";

        document.getElementById("mid_aa_img1").style.display = "none";
        document.getElementById("mid_aa_img2").style.display = "none";
        document.getElementById("mid_aa_img3").style.display = "block";
        document.getElementById("mid_aa_img4").style.display = "none";
    }
    if (id == 4){
        document.getElementById("mid_bb_a").style.display = "none";
        document.getElementById("mid_bb_b").style.display = "none";
        document.getElementById("mid_bb_c").style.display = "none";
        document.getElementById("mid_bb_d").style.display = "block";

        document.getElementById("mid_aa_img1").style.display = "none";
        document.getElementById("mid_aa_img2").style.display = "none";
        document.getElementById("mid_aa_img3").style.display = "none";
        document.getElementById("mid_aa_img4").style.display = "block";
    }
}






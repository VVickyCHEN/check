$(function () {
    $("#background").css({'width':$(window).width(),'height':$(window).height()})
})


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






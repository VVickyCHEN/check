$(document).ready(function(){
    var Uarry=$("#tcontent li");//获取所有的li元素
    $("#tcontent li").click(function(){//点击事件
        //测试直接获取值 var v=$(this).text(); alert(v);

        var count=$(this).index();//获取li的下标
        var Tresult=Uarry.eq(count).text();
        $("#tresult").val(Tresult);
    })
})
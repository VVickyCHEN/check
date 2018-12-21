<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
    <meta name="format-detection"content="telephone=no">
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=nLsK9qUii8uBZlkPAQUozAf9mR5xNVZF"></script>
    <title></title>
</head>
<body>
<div id="allmap" style="width: 100%;height: 500px;">
</div>


<script type="text/javascript">
    // 百度地图API功能
    var map = new BMap.Map("allmap");
    var points = new BMap.Point(113.38207759077,23.138306270767);//固定位置
    map.centerAndZoom(point,12);
    //自身位置
    var geolocation = new BMap.Geolocation();
    geolocation.getCurrentPosition(function(r){console.log(r.point)
        if(this.getStatus() == BMAP_STATUS_SUCCESS){
            var mk = new BMap.Marker(r.point);
            map.addOverlay(mk);//标出所在地
            map.panTo(r.point);//地图中心移动
            //alert('您的位置：'+r.point.lng+','+r.point.lat);//113.30764968,23.1200491
            var points = new BMap.Point(r.point.lng,r.point.lat);//用所定位的经纬度查找所在地省市街道等信息
            var gc = new BMap.Geocoder();
            gc.getLocation(point, function(rs){
                var addComp = rs.addressComponents; 
                console.log(rs.address);//地址信息
                //alert("您现在位置：" +rs.address);//弹出所在地址

            });
        }else {
            alert('failed'+this.getStatus());
        }
       
    },{enableHighAccuracy: true})
    
    
    
    
    
    map.addControl(new BMap.NavigationControl());//创建一个特定样式的地图平移缩放控件
 	map.enableScrollWheelZoom();
	var lng=113.38206727231;
 	var lat=23.138253196657;
 	var point = new BMap.Point(lng,lat);
//在地图首次自动加载的时候以lng=113.38207759077，23.138306270767经纬度显示该地附近的公司。


	allmap(point);
	
//// if(center.lng - 113.38207755077 = 0.0000005 && center.lng - 113.38207755077 = 0.0000010
////      && center.lat - 23.138306270767 = 0.00000002 && center.lat - 23.138306270767 =  - 0.00000012){
////      	alert("成功")
////      	
////      }else(
////      	alert("失败")
////      )
//	

//固定位置
//当点击鼠标左键的时候，获得点击事件，获得点击点经纬度，通过经纬度搜索方圆附近的餐馆。
 	map.addEventListener("click", function(){

  	map.clearOverlays();//清除由于上次事件留下的痕迹。
	var center = map.getCenter();//为得到地图的中心点位，返回GLatLng类型的值.
	lng=center.lng;
	lat=center.lat;
	point = new BMap.Point(lng,lat);
	   allmap(point);
	  });
 	function getSquareBounds(centerPoi,r){
        var a = Math.sqrt(2) * r; //正方形边长
        mPoi = getMecator(centerPoi);
        var x0 = mPoi.x, y0 = mPoi.y;
        var x1 = x0 + a / 2 , y1 = y0 + a / 2;//东北点
        var x2 = x0 - a / 2 , y2 = y0 - a / 2;//西南点

        var ne = getPoi(new BMap.Pixel(x1, y1)), sw = getPoi(new BMap.Pixel(x2, y2));
        return new BMap.Bounds(sw, ne);
    	}
    //根据球面坐标获得平面坐标。
    function getMecator(poi){
        return map.getMapType().getProjection().lngLatToPoint(poi);
    }
    //根据平面坐标获得球面坐标。
    function getPoi(mecator){
        return map.getMapType().getProjection().pointToLngLat(mecator);
    }

 //根据经纬度这个点，搜索方圆附近所有的公司。
    function allmap(point){
  map.centerAndZoom(point,11);
     var circle = new BMap.Circle(point,100,{fillColor:"blue", strokeWeight: 1 ,fillOpacity: 0.3, strokeOpacity: 0.3,});
     map.addOverlay(circle);
     var local = new BMap.LocalSearch(map, {
     renderOptions: {map: map, panel: "results"}});
     var bounds = getSquareBounds(circle.getCenter(),circle.getRadius());
     local.searchInBounds("蒙奇 ",bounds);//以圆形为范围以公司为关键字进行搜索。
 }




	//alert(map.getDistance(points,point).toFixed(2)+"米")
    var far  = map.getDistance(points,point).toFixed(2);
	// alert(far);
 	var allmap = document.getElementById("allmap");
   //  if(far>=1){
   //  	alert("未到工作地点")
   //      allmap.style.display = 'block';
   //  }else{
	 	// window.location.href='index1.html'
   //      allmap.style.display = 'none';
   //  }
    window.location.href="<?php echo U('Index/Index1');?>"

</script>





</body>
</html>
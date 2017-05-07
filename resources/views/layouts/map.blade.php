<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=sGivDuQdACTcej3BsyShpZC4"></script>
<script type="text/javascript">
    var map;
//创建和初始化地图函数：
function initMap(){
    createMap();//创建地图
    setMapEvent();//设置地图事件
    addMapControl();//向地图添加控件
//    addMapOverlay();//向地图添加覆盖物
    baiDuMap()
}
function createMap(){
    map = new BMap.Map("map");
    map.centerAndZoom(new BMap.Point(121.411618,31.256222),15);
}
function setMapEvent(){
    map.enableScrollWheelZoom();
    map.enableKeyboard();
    map.enableDragging();
    map.enableDoubleClickZoom()
}
function addClickHandler(target,window){
    target.addEventListener("click",function(){
    target.openInfoWindow(window);
    });
}
function addMapOverlay(req){
    var markers = [
    {content:"{{Voyager::block('baidu_mao_address')}} <br/>{{Voyager::block('baidu_mao_content')}}",title:"{{Voyager::block('baidu_mao_title')}}",imageOffset: {width:0,height:3},position:req}
    ];
    for(var index = 0; index < markers.length; index++ ){
    var point = new BMap.Point(markers[index].position.lng,markers[index].position.lat);
    var marker = new BMap.Marker(point,{icon:new BMap.Icon("http://api.map.baidu.com/lbsapi/createmap/images/icon.png",new BMap.Size(20,25),{
    imageOffset: new BMap.Size(markers[index].imageOffset.width,markers[index].imageOffset.height)
    })});
    var label = new BMap.Label(markers[index].title,{offset: new BMap.Size(25,5)});
    var opts = {
        width: 200,
        title: markers[index].title,
        enableMessage: false
    };
    var infoWindow = new BMap.InfoWindow(markers[index].content,opts);
    marker.setLabel(label);
    addClickHandler(marker,infoWindow);
    map.addOverlay(marker);
    };
}
//向地图添加控件
function addMapControl(){
    var scaleControl = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
    scaleControl.setUnit(BMAP_UNIT_IMPERIAL);
    map.addControl(scaleControl);
    var navControl = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
    map.addControl(navControl);
    var overviewControl = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:true});
    map.addControl(overviewControl);
}

window.onload= function () {
    initMap();
}

function baiDuMap() {
    // 创建地址解析器实例
    var myGeo = new BMap.Geocoder();
    // 将地址解析结果显示在地图上,并调整地图视野
    myGeo.getPoint("{{Voyager::block('baidu_mao_address')}}", function(point){
        if (point) {
            map.centerAndZoom(point, 16);
            map.addOverlay(new BMap.Marker(point));
            addMapOverlay(point)
        }else{
            alert("地址没有解析到结果!");
        }
    }, "{{Voyager::block('baidu_mao_city')}}");
}
</script>
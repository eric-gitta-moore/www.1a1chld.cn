<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:64:"/www/wwwroot/gopfk.cn/application/index/view/index/shipinok.html";i:1558446840;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $liebiao['name']?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0"/>
<script type="text/javascript" src="/ckplayer/ckplayer.js" charset="UTF-8"></script>
<script type="text/javascript" src="jquery.js"></script>
<link href="/static/index/weui.min.css" rel="stylesheet">
<style type="text/css">
body {background-color: #fff;}
</style>
</head>
<body>
<div style="padding: 20px 15px 15px;background-color: #555;">
<h2 class="rich_media_title" id="activity-name" style="color: #fff;font-size: 14px;font-weight:bold;" ><?php echo $liebiao['name']?></h2>
<div class="rich_media_meta_list" style="margin-bottom:0;">
<a id="post-date" class="rich_media_meta rich_media_meta_text" style="color: #fff;font-weight:bold;" ><?php echo $liebiao['shijian']?></a>
<a class="rich_media_meta rich_media_meta_link rich_media_meta_nickname" style="color:#607fa6;font-weight:bold;"><?php echo config('web_site_title'); ?></a>
</div>
<div class="rich_media_content"  id="video" style="width: 100%; height: 250px;border: solid 1px #323136;padding-left:1px;"></div>
<br/>
<div id="gdt_area" >
<div style="padding-top:10px;font-size:16px;">
<div style="border-bottom: 1px dotted #323136;margin: 0 1px 12px;text-align: center;line-height: 12px;"><span style="position: relative;top: 10px;background: #323136;color: #868686;font-size: 17px;padding: 0 8px">视频推荐</span></div>
<ul style="padding-left:10px;list-style:none;">

<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
<li style="margin-bottom:10px;border-bottom: solid 0.5px #323136;"><a href="<?php echo $vo['dwz']; ?>" style="font-size: 14px;color: #<?php echo randColor(); ?>" class="fuckyou"><?php echo $vo['name']; ?></a></li>
<?php endforeach; endif; else: echo "" ;endif; ?>


</ul>
</div>
</div>
</div>
<script type="text/javascript">
var videoObject = {
container: '#video',
variable: 'player', 
loop: true,
//autoplay: true, 
poster: '<?php echo $liebiao['photo']?>', 
video:'<?php echo $liebiao['url']?>'
};
var player = new ckplayer(videoObject);
</script>
<script type="text/javascript">
function run () {
var index = Math.floor(Math.random()*10);
pmd(index);
};
var times = document.getElementsByClassName('fuckyou').length;
setInterval('run()',times*200);
function pmd (id) {
var colors = new Array('#FF5151','#ffaad5','#ffa6ff','#d3a4ff','#2828FF','#00FFFF','#1AFD9C','#FF8000','#81C0C0','#B766AD');
var color = colors[id];
var tmp = document.getElementsByClassName('fuckyou');
for (var i = 0; i < tmp.length; i++) {
var id = tmp[i];
var moren = id.style.color;
setTimeout(function(id){
id.style.color = color;
},i*200,id);
setTimeout(function(id,moren){
id.style.color = moren;
},i*200+180,id,moren);
};
}
</script>

<div id="dg" style="z-index: 9999;
    position: fixed ! important;
    right: 10px;
    bottom: 30px;
    background: #de4d4d;
    color: #fff;
    width: 35px;
    text-align: center;
    padding: 5px;
    font-size: 18px;
    border-radius: 50px;" onclick="location.href='<?php echo url('rec',['userid'=>$ip['userid'],'ddh'=>$dd2]); ?>'">
已打赏视频
</div>


</body>
</html>
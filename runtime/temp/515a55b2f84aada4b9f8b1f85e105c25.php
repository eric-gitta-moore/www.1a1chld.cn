<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:67:"/www/wwwroot/www.658166.vip/application/dsadmin/view/pay/index.html";i:1536907466;s:71:"/www/wwwroot/www.658166.vip/application/dsadmin/view/public/header.html";i:1550146424;s:71:"/www/wwwroot/www.658166.vip/application/dsadmin/view/public/footer.html";i:1550134066;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo config('WEB_SITE_TITLE'); ?></title>
    <link href="/static/admin/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/static/admin/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="/static/admin/css/animate.min.css" rel="stylesheet">
    <link href="/static/admin/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/static/admin/css/plugins/chosen/chosen.css" rel="stylesheet">
    <link href="/static/admin/css/plugins/switchery/switchery.css" rel="stylesheet">
    <link href="/static/admin/css/style.min.css?v=4.1.0" rel="stylesheet">
    <link href="/static/admin/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <style type="text/css">
    .long-tr th{
        text-align: center
    }
    .long-td td{
        text-align: center
    }
    </style>
	
<script src="/uploadhtml5e/js/hcfile.config-0.3.js?12"></script>
<script src="/uploadhtml5e/js/hcfile-0.3-min.js?37"></script>

<script src="/uploadhtml5e/js/exif.js?19"></script>
<link href="/uploadhtml5e/js/hcfile03.css?3" rel="stylesheet" type="text/css">
</head>
 <link href="/static/admin/css/plugins/datapicker/datepicker3.css" rel="stylesheet">
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <!-- Panel Other -->
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>结算记录 </h5>
        </div>
        <div class="ibox-content">
            <!--搜索框开始-->           
            <div class="row">
                 <form name="admin_list_sea" class="form-search" method="post" action="<?php echo url('index'); ?>">
                        <div class="col-sm-6">
							<div class="input-group date" style="width:50%; float:left">
                                <span class="input-group-addon" onclick="laydate({elem: '#riqi'})"><i class="fa fa-calendar"></i></span>
                                <input type="text" class="form-control" name="riqi" id="riqi"  onclick="laydate()" placeholder="选择日期" value="<?php echo $riqi; ?>">
                            </div>	
                            <div class="input-group">
                                <input type="text" id="key" class="form-control" name="key" value="<?php echo $val; ?>" placeholder="输入需查询的代理ID" value="<?php echo $val; ?>"/>  
														
                                <span class="input-group-btn"> 
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> 搜索</button> 
                                </span>
                            </div>
                        </div>
                    </form>           
            </div>
            <!--搜索框结束-->
			 <div class="hr-line-dashed"></div>
            <div class="example-wrap">
                <div class="example">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="long-tr">
								<th>待支付笔数</th>
                                <th>待支付金额 </th>
                                
                               
                            </tr>
                        </thead>
                       
                          
                           
                        <tbody >  
							
							<tr class="long-td">
								 <td><?php echo $dzfbs; ?></td>
                                <td><?php echo $money1; ?></td>
                               
							   
                               
                            </tr>
						</tbody>
                    </table>
                  
                </div>
            </div>
			
			
            <div class="hr-line-dashed"></div>
            <div class="example-wrap">
                <div class="example">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="long-tr">
								<th><input type="checkbox" name="mmAll" onclick="All(this, 'del_id[]')" style="position:relative;clip: rect(6 15 15 6)"></th>
								<th>ID</th>
                                <th>代理ID</th>
                                <th>结算金额</th>
                               
                                <th>提现时间</th>
								
                                <th>支付状态</th>
								<th>收款信息</th>
								<th>操作</th>
                            </tr>
                        </thead>
                        <script id="list-template" type="text/html">
                            {{# for(var i=0;i<d.length;i++){  }}
                            <tr class="long-td">
								 <td><input type="checkbox" title="1" name="del_id[]" value="{{d[i].id}}" id="del_id"></td>
								 <td>{{d[i].id}}</td>
                                <td>{{d[i].userid}}<a onclick="hedui({{d[i].userid}})" style="color:#ff0000">核对订单</a></td>
                                <td>{{d[i].money}}元</td>
                               <td>{{d[i].shijian}}</td>
                                
							    <td>{{d[i].zt}}</td>
								 <td>{{# if(d[i].type==0){ }}收款人：{{d[i].name}}<br>账号：{{d[i].zhanghao}}<br>账号所属：{{d[i].leixing}}  {{# }else{ }}<img src="{{d[i].imgurl}}" style="max-width:200px;">{{# } }}</td>
								 <td>
								 <a href="javascript:;" onclick="dakuan({{d[i].id}})" class="btn btn-primary btn-xs btn-outline">
                                            <i class="fa fa-paste"></i> 确认打款</a>
											</td>
                            </tr>
                            {{# } }}
                        </script>
                        <tbody id="list-content"></tbody>
                    </table>
                    <div id="AjaxPage" style=" text-align: right;"></div>
                    <div id="allpage" style=" text-align: right;"></div>
                </div>
				<div class="row">
					<div class="col-sm-12">   
					<div  class="col-sm-2" style="width: 100px">
						<div class="input-group" >  
							<a href="javascript:;"><button class="btn btn-outline btn-primary" id="plqr" type="button">批量确认</button></a> 
						</div>
					</div>                                            
                                   
                </div>
            </div>
            </div>
            <!-- End Example Pagination -->
        </div>
    </div>
</div>
<!-- End Panel Other -->
</div>

<!-- 加载动画 -->
<div class="spiner-example">
    <div class="sk-spinner sk-spinner-three-bounce">
        <div class="sk-bounce1"></div>
        <div class="sk-bounce2"></div>
        <div class="sk-bounce3"></div>
    </div>
</div>

<script src="__JS__/jquery-ui.cs.js?v=1.32"></script>
<script src="__JS__/jquery.min.js?v=2.1.4"></script>
<script src="__JS__/bootstrap.min.js?v=3.3.6"></script>
<script src="__JS__/content.min.js?v=1.0.0"></script>
<script src="__JS__/plugins/chosen/chosen.jquery.js"></script>
<script src="__JS__/plugins/iCheck/icheck.min.js"></script>
<script src="__JS__/plugins/layer/laydate/laydate.js"></script>
<script src="__JS__/plugins/switchery/switchery.js"></script><!--IOS开关样式-->
<script src="__JS__/jquery.form.js"></script>
<script src="__JS__/layer/layer.js"></script>
<script src="__JS__/laypage/laypage.js"></script>
<script src="__JS__/laytpl/laytpl.js"></script>
<script src="__JS__/dashang.js"></script>
<script>
    $(document).ready(function(){$(".i-checks").iCheck({checkboxClass:"icheckbox_square-green",radioClass:"iradio_square-green",})});
</script>


<script type="text/javascript">
   
   
function All(e, itemName){
	var aa = document.getElementsByName(itemName);
	for (var i=0; i<aa.length; i++)
	aa[i].checked = e.checked; 
	}
	function checkdel(delid,formname){
	var flag = false;
	for(i=0;i<delid.length;i++){
	if(delid[i].checked == true){
	flag = true;
	break;
	}
	}
	if(!flag){
	return true;
	}else{
	formname.submit();
	}
}
   
 $("#plqr").click(function(){
	
	var aa = document.getElementsByName('del_id[]');
	var n=0;
	var ids="";
	for (var i=0; i<aa.length; i++){
		
		if(aa[i].checked == true){
			
			if(n>0){
                ids += ',';
            }
            ids += aa[i].value;
			n++;
		}
		
	}
	
	if(ids==''){
		layer.msg("请选择完成打款的记录",{icon:0,time:1500,shade: 0.1});
	}else{
		 dashang.zhixing(ids,'<?php echo url("dakuan"); ?>');
	}
	
}) 
   
    //laypage分页
    Ajaxpage();
    function Ajaxpage(curr){
        var key=$('#key').val();
		var riqi=$('#riqi').val();
        $.getJSON('<?php echo url("index"); ?>', {page: curr || 1,key:key,riqi:riqi}, function(data){
            $(".spiner-example").css('display','none'); //数据加载完关闭动画 
            if(data==''){
                $("#list-content").html('<td colspan="20" style="padding-top:10px;padding-bottom:10px;font-size:16px;text-align:center">暂无数据</td>');
            }else{
                var tpl = document.getElementById('list-template').innerHTML;
                laytpl(tpl).render(data, function(html){
                    document.getElementById('list-content').innerHTML = html;
                });
                laypage({
                    cont: $('#AjaxPage'),//容器。值支持id名、原生dom对象，jquery对象,
                    pages:'<?php echo $allpage; ?>',//总页数
                    skip: true,//是否开启跳页
                    skin: '#1AB5B7',//分页组件颜色
                    curr: curr || 1,
                    groups: 3,//连续显示分页数
                    jump: function(obj, first){
                        if(!first){
                            Ajaxpage(obj.curr)
                        }
                        $('#allpage').html('第'+ obj.curr +'页，共'+ obj.pages +'页');
                    }
                });
            }
        });
    }



function dakuan(id){
    dashang.zhixing(id,'<?php echo url("dakuan"); ?>');
}

function hedui(id){
    location.href = './hedui/userid/'+id+'.html';
}

function show(id,name) {
var zt = $("#show"+id+"").html();
if(zt=='点击显示'){  
$("#name"+id+"").html(name);
$("#show"+id+"").html('点击隐藏');
}else if(zt=='点击隐藏'){  
$("#name"+id+"").html('****');
$("#show"+id+"").html('点击显示');
}
}

</script>
</body>
</html>
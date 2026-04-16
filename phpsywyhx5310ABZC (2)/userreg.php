<?php 
include_once 'conn.php';
session_start();

$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	
	$zhanghao=$_POST["zhanghao"];$mima=$_POST["mima"];$xingming=$_POST["xingming"];$xingbie=$_POST["xingbie"];$diqu=$_POST["diqu"];$Email=$_POST["Email"];$zhaopian=$_POST["zhaopian"];
	$sql="select id from yonghuzhuce where zhanghao='".$zhanghao."'";
	$query=mysql_query($sql);
	$rowscount=mysql_num_rows($query);
	if($rowscount>0)
	{
		echo "<script>javascript:alert('对不起，该账号已经存在，请换其他账号再试！！');history.back();</script>";
	}
	else
	{
		$sql="insert into yonghuzhuce(zhanghao,mima,xingming,xingbie,diqu,Email,zhaopian) values('$zhanghao','$mima','$xingming','$xingbie','$diqu','$Email','$zhaopian') ";
		mysql_query($sql);
		
		echo "<script>javascript:alert('注册成功!请待管理员审核后方可正常登录！');location.href='index.php';</script>";
	}
}
?>
<!doctype html>
<html>
<head>
<meta >
<title>助学新版</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="qtimages/css/bootstrap.css" rel="stylesheet">
<link href="qtimages/css/style.css" rel="stylesheet">
<link href="qtimages/css/fonts.css" rel="stylesheet">
<link href="qtimages/css/animate.css" rel="stylesheet">
<link href="qtimages/css/plugins.css" rel="stylesheet">
<link href="qtimages/css/responsive.css" rel="stylesheet">
<link href="qtimages/css/settings.css" rel="stylesheet">
<link href="qtimages/css/captions.css" rel="stylesheet">
<script src="js/jquery.js"></script>

<meta http-equiv="Content-Type" content="text/html; charset=gb2312"></head>
<script language="javascript">
	function check()
{
	if(document.form1.zhanghao.value==""){alert("请输入账号");document.form1.zhanghao.focus();return false;}
	if(document.form1.mima.value==""){alert("请输入密码");document.form1.mima.focus();return false;}
	if(document.form1.mima.value!=document.form1.mima2.value){alert("对不起，两次密码不一致，请重试");document.form1.mima.focus();return false;}
	if(document.form1.xingming.value==""){alert("请输入姓名");document.form1.xingming.focus();return false;}
	if(document.form1.Email.value==""){alert("请输入Email");document.form1.Email.focus();return false;}
	if(document.form1.zhaopian.value==""){alert("请输入照片");document.form1.zhaopian.focus();return false;}
	var strEmail = document.getElementById("Email").value;  
  var reg = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/;
  var email_Flag = reg.test(strEmail);
  if(email_Flag){
  
  }
  else{
   alert("对不起，您输入的邮箱地址格式错误。");
   return false;
  }

}
	
</script>
<script language="javascript">
	
	
	function OpenScript(url,width,height)
{
  var win = window.open(url,"SelectToSort",'width=' + width + ',height=' + height + ',resizable=1,scrollbars=yes,menubar=no,status=yes' );
}
	function OpenDialog(sURL, iWidth, iHeight)
{
   var oDialog = window.open(sURL, "_EditorDialog", "width=" + iWidth.toString() + ",height=" + iHeight.toString() + ",resizable=no,left=0,top=0,scrollbars=no,status=no,titlebar=no,toolbar=no,menubar=no,location=no");
   oDialog.focus();
}
</script>

<body>
<div id="wrap">
  <div class="main-inner-content">
    <header id="header" class="section cover header-bg" data-bg="qtimages/slider.jpg">
      
     <?php include 'qttop.php';?>
      <div id="rev_slider_1_1_wrapper" class="" style="margin:0px auto;padding:0px;margin-top:0px;margin-bottom:0px;max-height:1950px;">
        <div id="rev_slider_1_1" class="rev_slider fullwidthabanner" style="display:none;max-height:1950px;height:1950px; padding-top:40px;">
         
		 
		 
		 <div style=" margin:0 auto; width:1200px;  box-shadow: darkgrey 10px 10px 30px 5px">
				<div style="background-color:#CCCC66; height:50px;  font-size:20px; line-height:50px; padding-left:20px;"><strong>用户注册</strong></div>		
						
						 <form name="form1" method="post" action="">
						<table width="100%" height=623  align="center" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF" >
                        	
                           
                            <tr>
                              <td width="15%" align="right">账号：</td>
                              <td colspan="2"><input name='zhanghao' type='text' id='zhanghao' value=''  placeholder="请输入用户名" style="width:260px; height:30px; border:solid 1px #000000; color:#666666;" />
                                &nbsp;*</td>
                            </tr>
                            <tr>
                              <td align="right">密码：</td>
                              <td width="27%"><input name='mima' type='password' id='mima' value=''  placeholder="请输入密码" style="width:260px; height:30px; border:solid 1px #000000; color:#666666;" /> 
                                &nbsp;*                              </td>
                              <td width="58%">确认密码：
                                <input name='mima2' type='password' id='mima2' value='' placeholder="请输入确认密码" style="width:260px; height:30px; border:solid 1px #000000; color:#666666;" > </td>
                            </tr>
                            <tr>
                              <td align="right">姓名：</td>
                              <td colspan="2"><input name='xingming' type='text' id='xingming' value='' onblur='checkform()' placeholder="请输入姓名" style="width:260px; height:30px; border:solid 1px #000000; color:#666666;"  />
                                &nbsp;*</td>
                            </tr>
                            <tr>
                              <td align="right">性别：</td>
                              <td colspan="2"><select name='xingbie' id='xingbie'   style="width:260px; height:30px; border:solid 1px #000000; color:#666666;">
                                  <option value="男">男</option>
                                  <option value="女">女</option>
                              </select></td>
                            </tr>
                            <tr>
                              <td align="right">地区：</td>
                              <td colspan="2"><select name='diqu' id='diqu' style="width:260px; height:30px; border:solid 1px #000000; color:#666666;">
                    <option value="浙江">浙江</option>
                    <option value="湖北">湖北</option>
                    <option value="河南">河南</option>
                    <option value="北京">北京</option>
                </select></td>
                            </tr>
                            <tr>
                              <td align="right">Email：</td>
                              <td colspan="2"><input name='Email' type='text' id='Email' value='' onblur='checkform()' placeholder="请输入QQ" style="width:260px; height:30px; border:solid 1px #000000; color:#666666;" /> </td>
                            </tr>
                            
                            <tr>
                              <td align="right">照片：</td>
                              <td colspan="2"><input name='zhaopian' type='text' id='zhaopian' size='50' value='' placeholder="请上传照片" style="width:460px; height:30px; border:solid 1px #000000; color:#666666;" />
                                &nbsp;
                                <input name="button" type='button' onClick="javaScript:OpenScript('upfile.php?Result=zhaopian',460,180)" value='上传'  /></td>
                            </tr>
                           
                            <tr>
                              <td>&nbsp;</td>
                              <td colspan="2"><input type="submit" name="Submit5" value="提交" onClick="return check();"  />
                                  <input type="reset" name="Submit22" value="重置"  />
								  <input type="hidden" name="addnew" value="1" />
								  </td>
                            </tr>
                        </table>
					    </form>
						
						
						

						</div>
						
						
						
          <div class="tp-bannertimer tp-bottom hidden"></div>
        </div>
      </div>
      <script type="text/javascript">

								
				var setREVStartSize = function() {
			 		var	tpopt = new Object(); 
						tpopt.startwidth = 1170;
						tpopt.startheight = 950;
						tpopt.container = jQuery('#rev_slider_1_1');
						tpopt.fullScreen = "off";
						tpopt.forceFullWidth="off";

					tpopt.container.closest(".rev_slider_wrapper").css({height:tpopt.container.height()});tpopt.width=parseInt(tpopt.container.width(),0);tpopt.height=parseInt(tpopt.container.height(),0);tpopt.bw=tpopt.width/tpopt.startwidth;tpopt.bh=tpopt.height/tpopt.startheight;if(tpopt.bh>tpopt.bw)tpopt.bh=tpopt.bw;if(tpopt.bh<tpopt.bw)tpopt.bw=tpopt.bh;if(tpopt.bw<tpopt.bh)tpopt.bh=tpopt.bw;if(tpopt.bh>1){tpopt.bw=1;tpopt.bh=1}if(tpopt.bw>1){tpopt.bw=1;tpopt.bh=1}tpopt.height=Math.round(tpopt.startheight*(tpopt.width/tpopt.startwidth));if(tpopt.height>tpopt.startheight&&tpopt.autoHeight!="on")tpopt.height=tpopt.startheight;if(tpopt.fullScreen=="on"){tpopt.height=tpopt.bw*tpopt.startheight;var cow=tpopt.container.parent().width();var coh=jQuery(window).height();if(tpopt.fullScreenOffsetContainer!=undefined){try{var offcontainers=tpopt.fullScreenOffsetContainer.split(",");jQuery.each(offcontainers,function(e,t){coh=coh-jQuery(t).outerHeight(true);if(coh<tpopt.minFullScreenHeight)coh=tpopt.minFullScreenHeight})}catch(e){}}tpopt.container.parent().height(coh);tpopt.container.height(coh);tpopt.container.closest(".rev_slider_wrapper").height(coh);tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(coh);tpopt.container.css({height:"100%"});tpopt.height=coh}else{tpopt.container.height(tpopt.height);tpopt.container.closest(".rev_slider_wrapper").height(tpopt.height);tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(tpopt.height)}
				 }	
				
				// CALL PLACEHOLDER
				setREVStartSize();
				
				
				var tpj=jQuery;				
				tpj.noConflict();				
				var revapi1;
				
				tpj(document).ready(function() {
				
				if(tpj('#rev_slider_1_1').revolution == undefined)
					revslider_showDoubleJqueryError('#rev_slider_1_1');
				else
				   revapi1 = tpj('#rev_slider_1_1').show().revolution(
					{
						dottedOverlay:"none",
						delay:9000,
						startwidth:1170,
						startheight:950,
						hideThumbs:200,
						thumbWidth:100,
						thumbHeight:50,
						thumbAmount:2,
						navigationType:"bullet",
						navigationArrows:"solo",
						navigationStyle:"round",
						touchenabled:"on",
						onHoverStop:"on",
						swipe_velocity: 0.7,
						swipe_min_touches: 1,
						swipe_max_touches: 1,
						drag_block_vertical: false,					
						keyboardNavigation:"off",
						navigationHAlign:"center",
						navigationVAlign:"bottom",
						navigationHOffset:0,
						navigationVOffset:20,
						soloArrowLeftHalign:"left",
						soloArrowLeftValign:"center",
						soloArrowLeftHOffset:20,
						soloArrowLeftVOffset:0,
						soloArrowRightHalign:"right",
						soloArrowRightValign:"center",
						soloArrowRightHOffset:20,
						soloArrowRightVOffset:0,
						shadow:0,
						fullWidth:"on",
						fullScreen:"off",
						spinner:"spinner0",
						stopLoop:"off",
						stopAfterLoops:-1,
						stopAtSlide:-1,
						shuffle:"off",
						autoHeight:"off",						
						forceFullWidth:"off",							
						hideThumbsOnMobile:"off",
						hideNavDelayOnMobile:1500,						
						hideBulletsOnMobile:"off",
						hideArrowsOnMobile:"off",
						hideThumbsUnderResolution:0,
						hideSliderAtLimit:0,
						hideCaptionAtLimit:0,
						hideAllCaptionAtLilmit:0,
						startWithSlide:0,
						fullScreenOffsetContainer: ""	
					});
									
				});	//ready
				
			</script> 
    </header>
    <div id="page-content">
      
     
      
     
     
     <?php include 'yqlj.php';?>
    </div>
  </div>
  <?php include 'qtdown.php';?>
  <div class="sb-slidebar sb-right">
    <div class="sb-menu-trigger"></div>
  </div>
</div>
<script src="js/easing.js"></script> 
<script src="js/hoverIntent.js"></script> 
<script src="js/superfish.js"></script> 
<script src="js/bootstrap.js"></script> 
<script src="js/countto.js"></script> 
<script src="js/waypoint.js"></script> 
<script src="js/typer.js"></script> 
<script src="js/flexslider.js"></script> 
<script src="js/caroufredsel.js"></script> 
<script src="js/wow.js"></script> 
<script src="js/donutchart.js"></script> 
<script src="js/magnificpopup.js"></script> 
<script src="js/masonry.js"></script> 
<script src="js/sidebar.js"></script> 
<script src="js/tweecool.js"></script> 
<script src="js/isotope.js"></script> 
<script src="js/contact.js"></script> 
<script src="js/functions.js"></script> 
<script src="js/jquery.plugins.min.js"></script> 
<script src="js/jquery.revolution.min.js"></script>
</body>
</html>
</html>
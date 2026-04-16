<?php
session_start();
include_once 'conn.php';

?>
<!doctype html>
<html>
<head>
<meta >
<title>商用网页</title>
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
<body>
<div id="wrap">
  <div class="main-inner-content">
    <header id="header" class="section cover header-bg" data-bg="qtimages/slider.jpg">
      
     <?php include 'qttop.php';?>
      <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;max-height:650px;">
        <div id="rev_slider_1_1" class="rev_slider fullwidthabanner" style="display:none;max-height:650px;height:650px;">
          <ul>
            <li data-transition="random-static" data-slotamount="7" data-masterspeed="300" data-saveperformance="off"> <img src="qtimages/transparent.png" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
              <div class="tp-caption sfb stl" data-x="0" data-y="10" data-speed="600" data-start="500" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="600" style="z-index: 2;"> <img src="qtimages/slide_1.png" alt=""> </div>
              <div class="tp-caption small_title sft stb tp-resizeme" data-x="718" data-y="160" data-speed="600" data-start="500" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="600" style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;"> 欢迎登录本站,愿您可以有个好心情! </div>
              <div class="tp-caption nth_big_title hd randomrotate tp-resizeme" data-x="725" data-y="220" data-speed="600" data-start="500" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"> 商用网页 </div>
              <div class="tp-caption hidden-sm hidden-xs black_p sfb stt tp-resizeme" data-x="590" data-y="290" data-speed="600" data-start="500" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="600" style="z-index: 5; max-width: auto; max-height: auto;"> 运用互联网金融解决问题，提升工作效率,提高生活质量! <br>
               欢迎大家登录我站，我站主要是为广大朋友精心制作的一个系统，希望大家能够在我站获得一个好心情，谢谢！<br>
                美丽的军功章有你的一半，也有我的一半！ </div>
             
			<!--  <div class="tp-caption black sfr tp-resizeme" data-x="740" data-y="420" data-speed="600" data-start="500" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="600" style="z-index: 6; max-width: auto; max-height: auto; white-space: nowrap;"> <a class="button" href="#"><span>项目介绍</span></a> </div>
              <div class="tp-caption black sfl tp-resizeme" data-x="840" data-y="420" data-speed="600" data-start="500" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="600" style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;"> <a class="button black" href="#"><span>远景规划</span></a> </div>
            -->
			</li>
            <li data-transition="random" data-slotamount="7" data-masterspeed="300" data-saveperformance="off"> <img src="qtimages/transparent.png" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
              <div class="tp-caption sfb str" data-x="624" data-y="50" data-speed="600" data-start="500" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="600" style="z-index: 2;"> <img src="qtimages/slide_2.png" alt=""> </div>
              <div class="tp-caption small_title sfr tp-resizeme" data-x="100" data-y="220" data-speed="600" data-start="500" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;"> 欢迎登录本站,愿您可以有个好心情! </div>
              <div class="tp-caption nth_big_title sfb tp-resizeme" data-x="30" data-y="275" data-speed="600" data-start="500" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="600" style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"> 商用网页 </div>
              <div class="tp-caption hidden-sm hidden-xs black_p right sfb tp-resizeme" data-x="-60" data-y="340" data-speed="600" data-start="500" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="600" style="z-index: 5; max-width: auto; max-height: auto;"> 运用互联网金融解决问题，提升工作效率,提高生活质量! <br>
                 欢迎大家登录我站，我站主要是为广大朋友精心制作的一个系统，希望大家能够在我站获得一个好心情，谢谢！ </div>
            </li>
          </ul>
          <div class="tp-bannertimer tp-bottom hidden"></div>
        </div>
      </div>
      <script type="text/javascript">

								
				var setREVStartSize = function() {
			 		var	tpopt = new Object(); 
						tpopt.startwidth = 1170;
						tpopt.startheight = 650;
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
						startheight:650,
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
      <div id="sliderbox" class="slider-box">
        <div class="container">
          <div class="row onepixel">
            <div class="col-md-5 bottom-xs-1">
              <div class="gray-box height-group">
                <h5 class="box-title large bottom-0">中国要强，商用网页 必须强。</h5>
                <p>提高群众安全感和满意度。立足资源优势，以市场需求为导向，增强线上线下营销能力,拓宽外部增收渠道。</p>
              </div>
            </div>
            <div class="col-md-7 color-box-wrap">
              <div class="row onepixel">
                <div class="col-md-3 color-box-item bottom-xs-1">
                  <div class="color-box height-group section default" data-bg="qtimages/hover_box_1.jpg" data-bgmark="rgba(34,30,30,0.5)">
                    <div class="color-box-inner">
                      <div class="color-box-content">
                        <h5 class="box-title ">引导和鼓励</h5>
                        <p>制定鼓励社会资本参与商用网页建设，研究制定财税、金融等支持政策。</p>
                      </div>
                      <div class="color-box-icon"> <i class="fa fa-money"></i> </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 color-box-item bottom-xs-1">
                  <div class="color-box height-group section default" data-bg="qtimages/hover_box_2.jpg" data-bgmark="rgba(34,30,30,0.5)">
                    <div class="color-box-inner">
                      <div class="color-box-content">
                        <h5 class="box-title">服务于大众</h5>
                        <p>服务于大众，疏通产业流通渠道，真正解决百姓的实际问题。</p>
                      </div>
                      <div class="color-box-icon"> <i class="fa fa-globe"></i> </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 color-box-item bottom-xs-1">
                  <div class="color-box height-group section default" data-bg="qtimages/hover_box_3.jpg" data-bgmark="rgba(34,30,30,0.5)">
                    <div class="color-box-inner">
                      <div class="color-box-content">
                        <h5 class="box-title ">线下生活体验</h5>
                        <p>客户洽谈区为一体的多功能服务平台。</p>
                      </div>
                      <div class="color-box-icon"> <i class="fa fa-sitemap"></i> </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 color-box-item bottom-xs-1">
                  <div class="color-box height-group section default" data-bg="qtimages/hover_box_4.jpg" data-bgmark="rgba(34,30,30,0.5)">
                    <div class="color-box-inner">
                      <div class="color-box-content">
                        <h5 class="box-title ">互联网品牌</h5>
                        <p>全面建设现代网络，产、供、销（消）一体化的产业链体系</p>
                      </div>
                      <div class="color-box-icon"> <i class="fa fa-group"></i> </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="features" class="top-40">
        <div class="container">
          <div class="heading-area text-center bottom-30 wow slideInUp" data-wow-duration="0.6s" data-wow-delay="0.3s">
            <h4 class="heading large">商用网页   ————  我们的家！</h4>
            <span class="sub-heading">请体验一下我们的成果 ！</span> </div>
          <div class="row top-40 bottom-40">
            <div class="col-md-3 col-sm-6 bottom-sm-30 bottom-xs-30 wow fadeInRight" data-wow-duration="0.6s" data-wow-delay="0.6s">
              <div class="iconbox alt clearfix">
                <div class="iconbox-icon"> <i class="fa fa-globe"></i> </div>
                <div class="iconbox-content">
                  <h4 class="bottom-10">强大的新闻讯信</h4>
                  <p>及时更新时实新闻，应有尽有。</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 bottom-sm-30 bottom-xs-30  wow fadeInRight" data-wow-duration="0.6s" data-wow-delay="0.9s">
              <div class="iconbox alt clearfix">
                <div class="iconbox-icon"> <i class="fa fa-money"></i> </div>
                <div class="iconbox-content">
                  <h4 class="bottom-10">清淅的图文展示</h4>
                  <p>放眼尽览各类图文信息。</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 bottom-sm-30 bottom-xs-30  wow fadeInLeft" data-wow-duration="0.6s" data-wow-delay="1.2s">
              <div class="iconbox alt clearfix">
                <div class="iconbox-icon"> <i class="fa fa-leaf"></i> </div>
                <div class="iconbox-content">
                  <h4 class=" bottom-10">高效的智能系统</h4>
                  <p>智能，方便，快捷，高效的系统，让您生活工作更加便捷。</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 bottom-sm-30 bottom-xs-30  wow fadeInRight" data-wow-duration="0.6s" data-wow-delay="1.5s">
              <div class="iconbox alt clearfix">
                <div class="iconbox-icon"> <i class="fa fa-group"></i> </div>
                <div class="iconbox-content">
                  <h4 class="bottom-10">安全的管理体制</h4>
                  <p>安全，放心，让你高枕无忧。 </p>
                </div>
              </div>
            </div>
          </div>
          <!--<div class="text-center section hidden-xs hidden-sm wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.9s" data-margin="40px 0 0">
            <div class="flexslider promoslider element" data-margin="0">
              <ul class="slides">
                <li><img src="qtimages/feature_slide_1.png" alt=""></li>
                <li><img src="qtimages/feature_slide_2.png" alt=""></li>
              </ul>
            </div>
          </div>--> 
        </div>
      </div>
      <div id="howtous" class="section cover top-0" data-padding="0" data-bg="qtimages/slider.png" data-bgmark="rgba(30, 129, 58, 0.5)">
        <div class="container white">
          <div class="row">
            <div class="col-md-6">
              <div class="heading-area white top-40 text-left bottom-30 wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.5s">
                <h4 class="heading white large">我们的成长历史</h4>
                <span class="sub-heading">（中国）商用网页成长经历，邀您共赏：</span> </div>
              <div class="stepbox clearfix wow fadeInDown" data-wow-duration="0.6s" data-wow-delay="0.6s">
                <div class="step"> 1 </div>
                <div class="stepcontent">
                  <h3 class="top-20">20XX年，开始创业</h3>
                </div>
              </div>
              <div class="stepbox clearfix wow fadeInDown" data-wow-duration="0.6s" data-wow-delay="0.9s">
                <div class="step"> 2 </div>
                <div class="stepcontent">
                  <h3 class="top-20">20XX年，历经苦难和磨练</h3>
                </div>
              </div>
              <div class="stepbox clearfix wow fadeInDown" data-wow-duration="0.6s" data-wow-delay="1.2s">
                <div class="step"> 3 </div>
                <div class="stepcontent">
                  <h3 class="top-20">20XX年，稍有成绩，成立公司</h3>
                </div>
              </div>
              <div class="stepbox clearfix wow fadeInDown" data-wow-duration="0.6s" data-wow-delay="1.5s">
                <div class="step"> 4 </div>
                <div class="stepcontent">
                  <h3 class="top-20">20XX年，步入正途，走上正轨</h3>
                </div>
              </div>
              <div class="stepbox clearfix wow fadeInDown" data-wow-duration="0.6s" data-wow-delay="1.8s">
                <div class="step"> 5 </div>
                <div class="stepcontent">
                  <h3 class="top-20">20XX年，越做越大，即将上市</h3>
                </div>
              </div>
              <div class="stepbox clearfix wow fadeInDown" data-wow-duration="0.6s" data-wow-delay="2.1s">
                <div class="step"> 6 </div>
                <div class="stepcontent">
                  <h3 class="top-20">至今，已全面稳定。</h3>
                </div>
              </div>
            </div>
            <div class="col-md-6 hidden-xs hidden-sm wow fadeInRight" data-wow-duration="2.4s" data-wow-delay="0.3s">
              <div class="element text-right" data-margin="-100px 0 -40px"> <img src="qtimages/business-8.png" alt=""> </div>
            </div>
          </div>
        </div>
      </div>
	  
	<div id="services" class="top-40">
       <div class="container">
         <div class="heading-area text-center bottom-30 wow fadeInDown" data-wow-duration="0.9s" data-wow-delay="0.3s">
           <h4 class="heading large">企业推荐 </h4>
		  <div class="row nospace service-color-area">
           <?php
		  	$ienterpriseinfos=0;						
  
		
		$sql="select * from enterpriseinfos order by id desc";
	  $query=mysql_query($sql);
	  $rowscount=mysql_num_rows($query);
	 for($ienterpriseinfos=0;$ienterpriseinfos<$rowscount;$ienterpriseinfos++)
	 {
	 	if($ienterpriseinfos<3)
		{
		  ?>
		   <div class="col-md-4">
             <div class="service-box fadein">
               <div class="service-icon"><img src="<?php echo mysql_result($query,$ienterpriseinfos,"pic") ?>" alt=""  width="320" height="250" /></div>
               <div class="service-content top-10">
                  <h3 class="bottom-10 service-title"><?php echo mysql_result($query,$ienterpriseinfos,"enterprisenamec") ?></h3>
                </div>
                <div class="service-action top-20"> <a href="enterpriseinfosdetail.php?id=<?php echo mysql_result($query,$ienterpriseinfos,"id") ?>" class="button white stroke"><span>阅读完整</span></a> </div>
              </div>
            </div>
	   <?php
		}
	}
			?>
          </div>
        </div>
      </div>
	  
	 <div id="team-members" class="section fullcover" data-margin="40px 0 0" data-padding="40px 0" data-bg="qtimages/slider.jpg" data-bgmark="rgba(90, 181, 50, 0.5)">
        <div class="container">
          <div class="row">
<?php
		  	$igoodsinfos=0;						
		$sql="select * from goodsinfos order by id desc";
	  $query=mysql_query($sql);
	  $rowscount=mysql_num_rows($query);
	 for($igoodsinfos=0;$igoodsinfos<$rowscount;$igoodsinfos++)
	 {
	 	if($igoodsinfos<4)
		{
		  ?>
            <div class="col-md-3 bottom-xs-30">
              <div class="team-member">
                <div class="team-member-image"> <a href="goodsinfosdetail.php?id=<?php echo mysql_result($query,$igoodsinfos,"id") ?>"><img class="img-responsive" src="<?php echo mysql_result($query,$igoodsinfos,"ziduantp") ?>" alt=""/></a> </div>
                <div class="team-member-content fadein text-center">
                  <h4 class="bottom-0"><?php echo mysql_result($query,$igoodsinfos,"ziduanxs") ?></h4>
                </div>
              </div> 
            </div>
			<?php
		}
	}
			?>
          </div>
        </div>
      </div>
	  
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

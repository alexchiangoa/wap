
<?php
session_start();
header("Expires: Mon, 26 Jul 1970 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");
header("Content-type: text/html; charset=utf-8");
$C_Patch=$_SERVER['DOCUMENT_ROOT'];

include $C_Patch."/app/member/include/com_chk.php";
include $C_Patch."/app/member/include/address.mem.php";
include $C_Patch."/app/member/cache/website.php";
include_once($C_Patch."/app/member/class/sys_announcement.php");
$msg = sys_announcement::getOneAnnouncement();

include_once($C_Patch."/apiClient.php");

if(isset($_GET['intr'])) {
    echo '<script>location.href="register.php?intr='.$_GET['intr'].'";</script>';
    die();
}
?>
<html><head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>
        半岛PG娱乐城娱乐场官方直营网上真人百家乐、六合彩、彩票、体育投注站 test for git       </title>
    <!--[if lt IE 9]>
    <script src="js/html5.js" type="text/javascript">
    </script>
    <script src="js/css3-mediaqueries.js" type="text/javascript">
    </script>
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.SuperSlide.2.1.1.js"></script>
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/style_index.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/style_xtgg.css" type="text/css" media="all">
    <!--js判断横屏竖屏自动刷新-->
    <script type="text/javascript" src="js/top.js"></script>
    <script language="javascript" src="/skin/js/top.js?v=3.1"></script>
    <script language="javascript" src="/jquery.plugins/layer/layer.min.js"></script>
    <link type="text/css" rel="stylesheet" href="/jquery.plugins/layer/skin/layer.css" id="skinlayercss">
    <script type="text/javascript" src="js/marquee.js"></script>
</head>
<body>
<!--头部开始-->
<header id="header">
    <a href="/index.php" class="ico ico_home"></a>
    <span>半岛PG娱乐城娱乐场</span>
</header>
<!--头部结束-->
<!--banner开始-->
<div class="banner mrg_header">
    <div id="slideBannerBox" class="slideBannerBox" style="height:100px">
        <div class="hd">
        </div>
        <div class="bd">
            <div class="tempWrap" style="overflow:hidden; position:relative; width:100%">
                <div class="tempWrap" style="overflow:hidden; position:relative; width:100%">
                    <ul style="width: 1242px; left: 0px; position: relative; overflow: hidden; padding: 0px; margin: 0px;">
                        <li style="float: left; width: 414px;">
                            <a href="#">
                                <img src="images/banner/171122/banner2.jpg">
                            </a>
                        </li>
                        <li style="float: left; width: 414px;">
                            <a href="#">
                                <img src="images/banner/171122/banner2.jpg">
                            </a>
                        </li>
                        <!----
                        <li style="float: left; width: 414px;">
                            <a href="#">
                                <img src="images/banner/banner1.jpg">
                            </a>
                        </li>
                        <li style="float: left; width: 414px;">
                            <a href="#">
                                <img src="/newindex/b_2.jpg">
                            </a>
                        </li>
                        <li style="float: left; width: 414px;">
                            <a href="#">
                                <img src="/newindex/b_3.jpg">
                            </a>
                        </li>
                        --->
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(".slideBannerBox").slide({
            mainCell: ".bd ul",
            effect: "leftLoop",
            autoPlay: true,
            delayTime: 1000,
            mouseOverStop: true
        });
    </script>
</div>
<!-- 系统公告 -->
<div id="xtgg">
    <img src="images/ggtp.png" style="float:left;margin-left: 10px;margin-top: 2px;">
    <div id="scrlContainer" style="visibility: visible; width: 333px;">
        <div id="scrlContent" style="left: -760px;">
            <?php echo $msg?>
        </div>
    </div>
</div>
<div class="clear"></div>
<!--banner结算-->
<!--内容开始-->
<div id="main" class="cl">
    <div class="content w">
        <?php if(!$uid){ ?>
            <div class="ctop_nav">
                <ul>
                    <li class="nav">
                        <a href="login.php">
                            会员登录
                        </a>
                    </li>
                    <li class="nav">
                        <a href="register.php">
                            立即注册
                        </a>
                    </li>
                    <li class="nav">
                        <a href="javascript:void(0);" onClick="menu_url(62);return false;">
                            在线客服
                        </a>
                    </li>
                </ul>
            </div>
        <?php }else{

            $userid=intval($_SESSION["userid"]);
            $sql	=	"select money,user_pass_naked, pg_username,hq_username, video_username, money from user_list where user_id='".$userid."' limit 0,1";
            $query	=	$mysqli->query($sql);
            $row	=	$query->fetch_array();

            include('vendors/pg/api.class.php');
            include('vendors/hq/api.class.php');
            include('vendors/video/api.class.php');

            $pg = new PG();
            $hq = new HQ();
            $video = new Video();
            ?>

            <div class="ctop ctop_info">
                <label class="ico ico_user"><?php echo $username?></label>
                <label class="ico ico_balance"><span id="user_money"><?php echo $row['money']?></span></label>
            </div>
            <div class="c1top">
                <div class="lbg">
                    <div class="rbg">
                        <ul class="cl">
                            <li class="li1">
                                <a href="member/userinfo.php">我的账户</a>
                            </li>
                            <li class="li2">
                                <a href="member/huikuan.php">线上存款</a>
                            </li>
                            <li class="li3">
                                <a href="member/getmoney.php">线上取款</a>
                            </li>
                            <li class="li4">
                                <a href="member/zr_money.php">额度转换</a>
                            </li>
                            <li class="li5">
                                <a href="member/orders.php">财务记录</a>
                            </li>
                            <li class="li6">
                                <a href="record/lottery/lottery.php">下注记录</a>
                            </li>
                            <li class="li7">
                                <a href="common/result.php">开奖结果</a>
                            </li>
                            <li class="li8">
                                <a href="../logout.php">安全登出</a>
                            </li>
                        </ul>
                    </div><!--.rbg-->
                </div><!--.lbg-->
            </div>
        <?php } ?>
        <div class="c2">
            <div class="slideTxtBox">
                <div class="bd">
                    <ul class="cl">
                        <li>
                            <a <?php if(!$uid){ ?>href="javascript:void(0)" onClick="alert('请登录后操作')"<?php }else{ ?>
                                <?php if( (date('w') == 5 || date('w') == 1) && (date('H:i') >= '07:30' && date('H:i') <= '08:00')) { ?>
                                    onClick="alert('APP更新维护中'); return false;"
                                <?php }?>
                                href="pglivegame://com.pglivegame.www/login?username=<?php echo $_SESSION["username"]?>&password=<?php echo $row['user_pass_naked']?>&platform=pg666888"<?php } ?> title="PG真人" target="_blank">
                                <img src="images/game/PG-Logo.png" alt="PG真人">
                                PG真人
                            </a>
                        </li>
                        <li>
                            <a <?php if(!$uid){ ?>href="javascript:void(0)" onClick="alert('请登录后操作')"<?php }else{
                            ?>href="hq://login?username=<?php echo $_SESSION["username"]?>&password=<?php echo $row['user_pass_naked']?>&platform=pg666888"<?php } ?> title="HQ真人">
                                <img src="images/game/HQ-Logo.png" alt="HQ真人">
                                HQ真人
                            </a>
                        </li>
                        <li>
                            <a <?php if(!$uid){ ?>href="javascript:void(0)" onClick="alert('请登录后操作')"<?php }else{ ?>href="/vendors/platform/ag/index.php" target="_blank"<?php } ?> title="AG真人">
                                <img src="images/game/c1imgag.png" alt="AG真人">
                                AG真人
                            </a>
                        </li>
                        <li>
                            <a <?php if(!$uid){ ?>href="javascript:void(0)" onClick="alert('请登录后操作')"<?php }else{ ?> onClick="alert('暂不支持手机访问，请使用电脑版进入')" href="javascript:void(0); /vendors/platform/bb/index.php" target="_blank"<?php } ?> title="BBIN真人">
                                <img src="images/game/c1imgbbin.png" alt="BBIN真人">
                                BBIN真人
                            </a>
                        </li>

                        </li>
                        <li>
                            <a <?php if(!$uid){ ?>href="javascript:void(0)" onClick="alert('请登录后操作')"<?php }else{ ?>href="/vendors/platform/sb/index.php" target="_blank"<?php } ?> title="沙巴体育">
                                <img src="images/game/c1imgjst_sp_ismart2.png" alt="沙巴体育">
                                沙巴体育
                            </a>
                        </li>

                        <li>
                            <a href="lotto/index.php" title="香港六合彩">
                                <img src="images/game/c2img_lhc.png" alt="香港六合彩">
                            </a>
                            香港六合彩
                            </a>
                        </li>
                        <li>
                            <a href="lottery/cqssc.php" title="重庆时时彩">
                                <img src="images/game/c2img_ssc_cq.png" alt="重庆时时彩">
                            </a>
                            重庆时时彩
                        </li>
                        <li style="display: none">
                            <a href="lottery/tjssc.php" title="天津时时彩">
                                <img src="images/game/tjssc.png" alt="天津时时彩">
                            </a>
                            天津时时彩
                        </li>
                        <li>
                            <a href="lottery/bjsc.php" title="北京PK拾">
                                <img src="images/game/c2img_pk10.png" alt="北京PK拾">
                            </a>
                            北京PK拾
                        </li>
                        <li>
                            <a href="lottery/gdkls.php" title="广东快乐10分">
                                <img src="images/game/c2img_klsf_gd.png" alt="广东快乐10分">
                            </a>
                            广东快乐10分
                        </li>
                        <li>
                            <a href="lottery/cqkls.php" title="重庆快乐10分">
                                <img src="images/game/cqsf.png" alt="重庆快乐10分">
                            </a>
                            重庆快乐10分
                        </li>
                        <li style="display: none">
                            <a href="lottery/tjkls.php" title="天津快乐10分">
                                <img src="images/game/tjsf.png" alt="天津快乐10分">
                            </a>
                            天津快乐10分
                        </li>

                        <li>
                            <a href="lottery/3d.php" title="福彩3D">
                                <img src="images/game/c2img_3d.png" alt="福彩3D">
                            </a>
                            福彩3D
                        </li>
                        <li>
                            <a href="lottery/pl3.php" title="排列三">
                                <img src="images/game/c2img_pl3.png" alt="排列三">
                            </a>
                            排列三
                        </li>

                        <li>
                            <a href="lottery/kl8.php" title="北京快乐8">
                                <img src="images/game/c2img_kl8.png" alt="北京快乐8">
                            </a>
                            北京快乐8
                        </li>
                        <li>
                            <a <?php if(!$uid){ ?>href="javascript:void(0)" onClick="alert('请登录后操作')"<?php }else{ ?>href="pgegame://com.pgegame.www/login?username=<?php echo Video::AGENT.$_SESSION["username"]?>&password=<?php echo $video->password($_SESSION["username"])?>"<?php } ?> title="PG电子" target="_blank">
                                <img src="images/game/PG-Logo.png" alt="PG电子">
                            </a>
                            PG电子
                        </li>
                        <li>
                            <a <?php if(!$uid){ ?>href="javascript:void(0)" onClick="alert('请登录后操作')"<?php }else{ ?>href="/vendors/platform/vr/index.php"<?php } ?> title="VR彩票" target="_blank">
                                <img src="images/game/vr.Logo.png" alt="VR彩票">
                            </a>
                            VR彩票
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <!--.c2-->
        <div class="c3">
            <div class="lbg">
                <div class="rbg">
                    <ul class="cl">
                        <li class="li1">
                            <div class="lbg1">
                                <div class="rbg1">
                                    <div class="bg1">
                                        <a class="cl" href="javascript:void(0);" onClick="window.open(&quot;https://fir.im/pq67&quot;);">
                                            <div class="f fl">
                                                <img src="https://www.pg666888.com/img/pg-live.png" style="display: block;width: 58px; height: 58px; " >
                                            </div>
                                            <div class="f fr">
                                                <h3 style="padding: 0">半岛真人
                                                </h3>
                                                <p>

                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="li2">
                            <div class="lbg1">
                                <div class="rbg1">
                                    <div class="bg1">
                                        <a class="cl" href="javascript:void(0);" onClick="window.open(&quot;https://fir.im/e379&quot;);" target="self">
                                            <div class="f fl" style="width: 58px; height: 58px; display: block;">
                                                <img src="https://www.pg666888.com/img/pg-game.png" style="display: block;width: 58px; height: 58px; " >
                                            </div>
                                            <div class="f fr">
                                                <h3 style="padding: 0">半岛电子
                                                </h3>
                                                <p></p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--.c2-->
        <div class="c3">
            <div class="lbg">
                <div class="rbg">
                    <ul class="cl">
                        <li class="li1">
                            <div class="lbg1">
                                <div class="rbg1">
                                    <div class="bg1">
                                        <a class="cl" href="javascript:void(0);" onClick="window.open(&quot;https://www.dmwtz.com/d00/index.html&quot;);">
                                            <div class="f fl">
                                                <img src="https://www.pg666888.com/img/hq-live.png" style="display: block;width: 58px; height: 58px; " >
                                            </div>
                                            <div class="f fr">
                                                <h3 style="padding: 0">环球真人
                                                </h3>
                                                <p>

                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="li2">
                            <div class="lbg1">
                                <div class="rbg1">
                                    <div class="bg1">
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!--.c2-->
        <div class="c3">
            <div class="lbg">
                <div class="rbg">
                    <ul class="cl">
                        <li class="li1">
                            <div class="lbg1">
                                <div class="rbg1">
                                    <div class="bg1">
                                        <a class="cl" href="javascript:void(0);" onClick="window.open(&quot;https://www.pg666888.com/index.php?pc=1&quot;);">
                                            <div class="f fl">
                                                <img src="images/c3img1.png" alt="">
                                            </div>
                                            <div class="f fr">
                                                <h3>
                                                    电脑版
                                                </h3>
                                                <p>
                                                    www.pg666888.com
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="li2">
                            <div class="lbg1">
                                <div class="rbg1">
                                    <div class="bg1">
                                        <a class="cl" href="javascript:void(0);"  id="lnkService" target="self">
                                            <div class="f fl">
                                                <img src="images/c3img2.png" alt="">
                                            </div>
                                            <div class="f fr">
                                                <h3>
                                                    在线客服
                                                </h3>
                                                <p>
                                                    7x24为您服务
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--底部开始-->
<!--底部-->
<div style="height:50px;"></div>
<center>
    <?php if(!$uid){ ?>
        <a href="javascript:window.location.href='/login.php';" class="ui-link">登录</a><em>|</em>
        <a href="javascript:window.location.href='/register.php';" class="ui-link">注册</a><em>|</em>
        <a href="javascript:window.scrollTo(0,0);" class="ui-link">返回顶部</a>
    <?php }else{ ?>
        <a href="javascript:window.scrollTo(0,0);" class="ui-link">返回顶部</a>
    <?php } ?>
</center>
<div class="pad_footer copyright">Copyright © 半岛PG娱乐城娱乐场 Reserved</div>

<div id="footer">
    <?php if(!$uid){ ?>
        <footer class="footer">
            <ul>
                <li>
                    <a href="javascript:void(0);" onClick="javascript:window.location.href='/login.php'" class="ico_u">我的账户</a>
                </li>
                <li>
                    <a href="javascript:void(0);" onClick="javascript:window.location.href='/login.php'" class="ico_money">线上存款</a>
                </li>
                <li>
                    <a href="javascript:void(0);" onClick="javascript:window.location.href='/login.php'" class="ico_money">线上取款</a>
                </li>
                <li style="border-right:none;">
                    <a href="javascript:void(0);"class="ico_kf" id="lnkService2">在线客服</a>
                </li>
            </ul>
        </footer>
    <?php }else{ ?>
        <footer class="footer">
            <ul>
                <li>
                    <a href="javascript:void(0);" onClick="javascript:window.location.href='/member/userinfo.php'" class="ico_u">我的账户</a>
                </li>
                <li>
                    <a href="javascript:void(0);" onClick="javascript:window.location.href='/member/huikuan.php'" class="ico_money">线上存款</a>
                </li>
                <li>
                    <a href="javascript:void(0);" onClick="javascript:window.location.href='/member/getmoney.php'" class="ico_money">线上取款</a>
                </li>
                <li style="border-right:none;">
                    <a href="javascript:void(0);" class="ico_kf" id="lnkService2">在线客服</a>
                </li>
            </ul>
        </footer>
    <?php } ?>
</div>        <!--底部结束-->
<script>
    $('#lnkService').click(function(){
        $('#live800iconlink').click();
    });
    $('#lnkService2').click(function(){
        $('#live800iconlink').click();
    });
</script>
</body></html>
<?php if ($uid) { ?>
    <script language="javascript">
        function top_money() {
            $.getJSON("/app/member/getdata.php?callback=?", function (json) {
                    if (json.close == 1) {
                        parent.location.href = '/close.php';
                    }
                    $("#tz_money").html(json.tz_money);
                    $("#user_money").html(json.user_money);
                    $("#live_money").html(json.live_money);
                    if(json.unread_count && json.unread_count>0){
                        $("#msg_num").html(json.unread_count);
                        shake($("#msg_num_total"),"red",5);
                        $("#mp3").html("<embed src='/images/new_info.mp3' width='0' height='0'></embed>");
                    }else{
                        $("#msg_num").html(0);
                    }

                }
            );
            setTimeout("top_money()", 5000);
        }
        top_money();
    </script>
<?php } ?>
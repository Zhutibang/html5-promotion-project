<!-- ACCESS_TIME -->
<!-- ACCESS_DOMAIN -->
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <title>测测你的花心指数</title>
    <meta name="keywords" content="测测你的花心指数" />
    <meta name="description" content="测测你的花心指数" />
    <!-- BAIDU_TONGJI -->
    <!-- WX_USER_INFO -->
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="jQueryRotate.2.2.js"></script>
    <script type="text/javascript" src="jquery.easing.min.js"></script>
    <link rel="stylesheet" href="zp.css" />
    <style>
        #disk {
            background: url(wenzhangku.gif) no-repeat
        }
        
        .retry {
            margin: 10px;
        }
        
        button {
            padding: 4px;
        }
        
        input {
            border: 1px solid #C7C7C7;
        }
    </style>

    <script type="text/javascript">
        var info = new Array()
        info[0] = "60%，外表看似淡定，其实内心翻腾厉害"
        info[1] = "63%，一见美女or帅哥脚就粘在地上了"
        info[2] = "90%，宇宙超级花心大萝卜"
        info[3] = "20%，老实本分，轻易不乱搞"
        info[4] = "100%，牡丹花下死，做鬼也风流"
        info[5] = "0%，我的心里只有爱的人"
        info[6] = "70%，吃着碗里看着锅里"
        info[7] = "96%，天生情种，招蜂引蝶"
        info[8] = "83%，恋爱次数数也数不清"
        info[9] = "5%，爱人太难搞，一个足够"
        info[10] = "30%，友情爱情傻傻分不清楚"
        info[11] = "50%，有贼心你没贼胆"


        function choujiang() {
            if ($("#name").val() == "") {
                alert("请输入名字");
                $("#name").focus();
                return false;
            }

            $.post("do.php", {
                name: $("#name").val()
            }, function(data) {
                var a = data * 30 + 15;
                $("#startbtn").rotate({
                    duration: 3000,
                    angle: 0,
                    animateTo: 1440 + a,
                    easing: $.easing.easeOutSine,
                    callback: function() {

                        var infos = "经鉴定“" + $("#name").val() + "”的花心指数" + info[data] + "。";
                        $(document).attr('title', infos + "测测你的花心指数");
                        var infos = "<font color=orange><b>【测试结果】</b></font><br />" + infos;
                        $("#tip").html(infos);
                        $("#info").css({
                            display: ""
                        });
                    }
                });

            });

        }

        function retry() {
            $("#info").css({
                display: "none"
            });
        }
    </script>
</head>

<body>



    <div id="main">
        <h1>测测你的花心指数</h1>

        <div class="demo">
            <div id="disk"></div>
            <div id="start"><img src="start.png" id="startbtn" onClick="choujiang()"></div>
        </div>

        <div class="shuru">请输入您的名字：
            <input value="" id="name">
        </div>
    </div>

    <div id="info" style="display:none;">
        <div id="tip"></div>

        <div class="retry">
            <button onClick="retry()">重新测试</button>
            <button onClick="location.href='http://zhutibang.cn?m=ceo&p=follow'">关注我们</button>
        </div>

    </div>


    <div id="footad">
    </div>



    <footer style="margin-top:10px; font-size:10px; color:#bbb; text-align:center;">
        郑重承诺：本页面为纯静态HTML制作，绝不收集任何用户信息!
    </footer>

    <textarea id="adhtml" style="display:none">
        <button onClick="location.href='http://zhutibang.cn?m=ceo&p=follow'">关注我们</button>
    </textarea>


    <script>
        infos = $("#adhtml").val();
        $("#footad").append(infos);
    </script>
    <!-- ZHUTIBANG_COPYRIGHT -->
    <!-- BOTTOM_BANNER -->
</body>

</html>

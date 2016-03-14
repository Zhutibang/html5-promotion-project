<!-- ACCESS_TIME -->
<!-- ACCESS_DOMAIN -->
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <title>测测年薪多少才配得上你？</title>
    <meta name="keywords" content="测测年薪多少才配得上你？" />
    <meta name="description" content="测测年薪多少才配得上你？" />
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
        info[0] = "一百万"
        info[1] = "二十万"
        info[2] = "三十万"
        info[3] = "五十万"
        info[4] = "七十万"
        info[5] = "九十万"
        info[6] = "三百万"
        info[7] = "四十万"
        info[8] = "六十万"
        info[9] = "五百万"
        info[10] = "一千万"
        info[11] = "四百万"


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

                        var infos = "年薪" + info[data] + "才配得上“" + $("#name").val() + "”的才华！";
                        $(document).attr('title', infos + "测测年薪多少才配得上你？");
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
        <h1>测测年薪多少才配得上你？</h1>

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

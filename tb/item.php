<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>剁手薅羊毛</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/clipboard.min.js"></script>
</head>
<body>
<div class="container-fluid">
    <div class="text-center div-font" style="max-width: 100%">
        <div>
            <!-- <input id="copy-target" class="text-center border-0" style="color: #aaaaaa" value=""> -->
            <label id="copy-target" style="font-size: 3rem"></label>
            <!-- <h1  id="copy-target"></h1> -->
        </div>
        <button id="copy-btn" class="btn btn-lg btn-danger copy-btn" data-clipboard-target="#copy-target" style="font-size: 3rem">点我复制淘口令</button>
        <div style="font-size: 2rem">打开「手机淘宝」即可「领取优惠券」并购买</div>

        <img src="images/ly.jpg" width="300px" height="300px;">
        <div class="product-tip" style="font-size: 2rem">
            长按识别二维码 <br>
            关注微信公众号 剁手薅羊毛<br>
            获取更多神价格商品
        </div>
    </div>
    <script>
        $(function () {
            $('#copy-target').html("￥<?php echo $_GET['item_id'];?>￥");
        });

        var clipboard = new Clipboard('#copy-btn');
        var interval = undefined;
        clipboard.on('success', function(e) {
            $('#copy-btn').html("已复制");
            if (interval != undefined) {
                clearInterval(interval);
            }

            interval = setInterval(function () {
                $('#copy-btn').html('点我复制淘口令');
            }, 3000);
        });

        clipboard.on('error', function(e) {
            var el = $('#copy-target')[0];

            var editable = el.contentEditable;
            var readOnly = el.readOnly;
            el.contentEditable = true;
            el.readOnly = false;

            var range = document.createRange();
            range.selectNodeContents(el);
            var sel = window.getSelection();
            sel.removeAllRanges();
            sel.addRange(range);
            el.setSelectionRange(0, 999999);

            el.contentEditable = editable;
            el.readOnly = readOnly;

            $('#copy-btn').html("复制失败,请长按文字复制");
            if (interval != undefined) {
                clearInterval(interval);
            }

            interval = setInterval(function () {
                $('#copy-btn').html('点我复制淘口令');
            }, 3000);
        });
    </script>
</body>
</html>

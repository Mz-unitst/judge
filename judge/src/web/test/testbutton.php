<html>
<head>
    <style>
        div {width:600px;margin:200px auto;}

        .btn {
            background-color:#44c767;
            -moz-border-radius:28px;
            -webkit-border-radius:28px;
            border-radius:28px;
            border:1px solid #18ab29;
            display:inline-block;
            cursor:pointer;
            color:#ffffff;
            font-family:Arial;
            font-size:17px;
            padding:16px 31px;
            text-decoration:none;
            text-shadow:0px 1px 0px #2f6627;
        }
        .btn:hover {
            background-color:#5cbf2a;
        }
        .btn:active {
            position:relative;
            top:1px;
        }

        #btn2 {float:right;}

    </style>

    <script type="text/javascript" language="javascript" src="jquery.js"></script>
    <script type="text/javascript" language="javascript">
        function fun(n) {
            console.log('button has clicked');
            $.ajax({
                url:"server.php",           //the page containing php script
                type: "POST",               //request type
                data:{action: n.value},
                success:function(result){
                    alert(result);
                }
            });
        }

        function fun2(n) {
            var url = "server.php";
            var data = {
                action : n.value
            };
            jQuery.post(url, data, callback);
        }
        function callback(data) {
            alert(data);
        }
    </script>
</head>

<body>
<div>
    <button type="button" class="btn" id="btn1" οnclick="fun(this)"  value="btn1">按钮1</button>
    <button type="button" class="btn" id="btn2" οnclick="fun2(this)" value="btn2">按钮2</button>
</div>
</body>


</html>
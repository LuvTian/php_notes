<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">
    <style>
        *{margin: 0;padding: 0;}
        body{
            width: 100%;
            height: 100%;
            /* position: fixed; */
            background: url(http://7xlaft.com1.z0.glb.clouddn.com/meitu/meinv1920x1080.jpg) no-repeat 50% 0;
        }
        .Login{
            width: 480px;
            height: 320px;
            border: 1px solid red;
            background: #fff;
            opacity: 0.8;
            position: fixed;
            top: 24%;
            left: 50%;
            margin-left: -240px;
        }
        .top{
            overflow: hidden;
        }
        .switch{
            float: left;
            width: 209px;
            height: 50px;
            margin: auto 0;
            border-bottom: 1px solid  #999;
            line-height: 50px;
            text-align: center;
        }
        .switch a{
            cursor: pointer;
        }
        .switch_bootom{
            width: 70px;
            height: 1.5px;
            position: absolute;
            left: 68px;
            top: 50px;
            background: #f00;
            clear: both;
        }
        input{
            /* display: block; */
            margin: 30px auto;
        }
        .username{
            /* margin-top: 50px; */
        }
    </style>
</head>
<body>
    <div class="Login">
        <div class="top">
            <div class="switch"><a >用户登录</a></div>
            <div class="switch"><a >用户注册</a></div>
        </div>
        <div class="switch_bootom"></div>
        <form action="doLogin.php" method="post">
            <label for="">用户名：</label><input type="text" id="username" class="username" name="uName"><br>
            <label for="">密码：</label><input type="password" id="userpass" class="userpass" name="uPass"><br>
            <input type="submit" id="submit" class="LoginSubmit" value="登陆">
            <input type="reset" value="重置">
        </form>
        <p>
            <a href="">忘记密码</a> |
            <a href="">注册新账号</a> |
            <a href="">意见反馈</a>
        </p>
    </div>
</body>
</html>

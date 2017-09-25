<!DOCTYPE html>
<html class="bg-black">
<head>
    <base href="/"/>
    <meta charset="UTF-8">
    <title>AdminLTE | Log in</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/style_form.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
  <div class="login-page">
  <div class="form">

    <form action="/admin/login" method="post" class="login-form">
        
            <? if(isset($mess1)):?>
            <div class="alert alert-danger">
                <?= $mess1 ?>
            </div>
            <? endif ?>
            
                <input type="text" name="login" class="form-control" placeholder="Логин" required/>
            
            
                <input type="password" name="password" class="form-control" placeholder="Пароль" required/>
            
        
        
            <button type="submit" name="send" >Войти</button>

           
    
    </form>
</div>
    </div>


<!-- jQuery 2.0.2 -->
<!-- Bootstrap -->

</body>
</html>
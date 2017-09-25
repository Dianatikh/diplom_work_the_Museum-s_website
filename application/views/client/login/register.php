<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Войти в систему</title>
  
      <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../css/AdminLTE.css" rel="stylesheet" type="text/css"> 
  
      <link rel="stylesheet" href="../css/style_form.css">

  
</head>

<body>
<div class="login-page">
  <div class="form">

                                <h4>Регистрация</h4>
                                <form action="register" method="post" class="login-form">
                                    <? if(isset($mess)):?>
                                        <div class="alert alert-<?= $mess_type?>"><?= $mess?></div>
                                    <? endif ?>
                                  <input name="login" type="text" placeholder="логин"/>
      <input name="name" type="text" placeholder="имя"/>
      <input name="password" type="password" placeholder="пароль"/>
      <input name="email" type="email" placeholder="почта"/>
      <button>зарегистрироваться</button>
      <p class="message">Уже зарегистрированы? <a href="index">Войти</a></p>
                                    

                                </form>
            
    </div>
</div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="../js/index.js"></script>

</body>
</html>

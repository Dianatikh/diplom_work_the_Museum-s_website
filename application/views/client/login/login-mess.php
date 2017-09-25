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
   <? if (isset($mess)): ?>
    <div class="alert alert-<?= $mess_type ?>"><?= $mess ?></div>
    <? if (isset($reload)): ?>
        <script>
            setTimeout(
                function () {
                    window.location = window.location
                }, 1000
            )
        </script>
    <? endif ?>
<? endif ?>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="../js/index.js"></script>

</body>
</html>

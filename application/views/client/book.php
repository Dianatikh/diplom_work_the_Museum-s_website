  <div class="banner-top" >  
        
  <img class="banner" src="../../img/news.png" alt="" style="height: 400px; width:100%;">
	
    </div>
       <div class="title">
         
		<h1>Книга отзывов</h1>
		<em></em>
		
<ol class="breadcrumb">
  <li><a href="../../main">Главная</a></li>
  <li class="active">Книга отзывов</li>
</ol>
</div>
<div class="container">

<? if(!empty($book)): ?>
<div class="row">
                    <? foreach($book as $b):?>
						<div class="col-xs-12 col-md-10">
<div class="comment"> <strong><?= $b['login'] ?></strong> <i><?=$b['date'];?></i> 
                    <? if ($_SESSION['user']['id']== $b['id_users']): ?>        
                                
                
                
                
                                            <a href="/book/delCom/<?= $b['id_book'] ?>" class="delete_item"
                               data-confirm-title="Удалить?" data-confirm-message="Вы действительно хотите  удалить отзыв?">
                                <span class="glyphicon glyphicon-remove"></span>
                            </a>
                <? endif ?>
                    
                    <p><?=$b['message'];?></p>
            </div>
						
						
</div>		
						<? endforeach; ?>
						</div>
<? endif;?>

<br>
<br>
 <? if (isset($_SESSION['user'])): ?>
<div id="addCommentContainer">
<p><h3>Добавить отзыв</h3></p>
<br>
<form id="addCommentForm" method="post" action="book/addCom" enctype="multipart/form-data">
<div>
<textarea name="message" id="body" class="col-xs-12 col-md-10"></textarea>
</div>

<div class="clearfix"> </div>
<br>
<div>
<input class="btn btn-success col-md-3" type="submit" id="submit" value="Отправить" />

</div>


</form>
</div>
                <? else: ?>
<p> Oставлять отзывы могут только авторизованные пользователи </p>        <a class="play-icon  enter" href="login" ><i> Войти </i></a>
    <? endif ?>
</div>
<br>
<br>



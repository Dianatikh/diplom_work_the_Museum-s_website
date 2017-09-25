	<div class="banner-top" >   
             
    <img class="banner" src="../../img/news.png" alt="" style="height: 400px; width:100%;">
	
    </div>
        
        
    <div class="title">
         
		<h1>Экскурсии</h1>
		<em></em>
		
<ol class="breadcrumb">
  <li><a href="main">Главная</a></li>
  <li class="active">Экскурсии</li>
</ol>
</div>
<div class="container">

<? if(!empty($tours)): ?>
<div class="row">
<ul id="da-thumbs" class="da-thumbs">
<? foreach($tours as $ts):?>
<div class="col-xs-7 col-md-4">
<li>
 <a href="/tours/tour/<?=$ts['id'];?>" class="thumbnail">
<img  src="/images/<?=$ts['image'];?>" alt="">
<div><span><?=$ts['title'];?></span></div>
</a>
</li>
</div>		
<? endforeach; ?>
</ul>
</div>
<? endif;?>
</div>
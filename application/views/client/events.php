	<div class="banner-top" >
      
      
    
        
           
      <img class="banner" src="../../img/news.png" alt="" style="height: 400px; width:100%;">
	
    </div>
        
        
    <div class="title">
         
		<h1>Мероприятия</h1>
		<em></em>
		
<ol class="breadcrumb">
  <li><a href="main">Главная</a></li>
  <li class="active">Мероприятия</li>
</ol>
</div>
<div class="container">

<? if(!empty($events)): ?>
<div class="row">
<ul id="da-thumbs" class="da-thumbs">
<? foreach($events as $ev):?>
<div class="col-xs-7 col-md-4">
<li>
 <a href="/events/event/<?=$ev['id_ev'];?>" class="thumbnail">
<img  src="/images/<?=$ev['image'];?>" alt="">
<div><span><?=$ev['title'];?></span></div>
</a>
</li>
</div>		
<? endforeach; ?>
</ul>
</div>
<? endif;?>
</div>
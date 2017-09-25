	<div class="banner-top" >
      
      
    
        
           
      <img class="banner" src="../../img/news.png" alt="" style="height: 400px; width:100%;">
	
    </div>
        
        
    <div class="title">
         
		<h1>Новости</h1>
		<em></em>
		
<ol class="breadcrumb">
  <li><a href="main">Главная</a></li>
  <li class="active">Новости</li>
</ol>
</div>
<div class="container">


    
<? if(!empty($articles)): ?>
<div class="row">
                   <ul id="da-thumbs" class="da-thumbs">
                    <?  $first = true; foreach($articles as $art):?>
						<div <? if ($first) : ?>class="col-xs-7 col-md-8 col-lg-8"<? if ($first) {
       $first = false;
    } endif;?> class="col-xs-7 col-md-4 col-lg-4">
						<li>
						 <a href="/articles/article/<?=$art['id_art'];?>" class="thumbnail">
							<img class="preview" src="/images/<?=$art['preview_pic'];?>" alt="">
								
                            
							<div><span><p><?=$art['title'];?></p>
                           <i><?=$art['date'];?></i></span></div>		
                            
								
                            </a>
                            </li>
								
</div>		
						<? endforeach; ?>
    </ul>
						</div>
<? endif;?>
</div>

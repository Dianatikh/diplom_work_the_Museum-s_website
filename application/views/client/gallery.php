	<div class="banner-top" >
      
      
    
        
           
      <img class="banner" src="img/news.png" alt="" style="height: 400px; width:100%;">
	
    </div>
        
        
    <div class="title">
         
		<h1>Галерея</h1>
		<em></em>
		
<ol class="breadcrumb">
  <li><a href="main">Главная</a></li>
  <li class="active">Галерея</li>
</ol>
</div>

<div class="container gallery-container">
<div class="tz-gallery">

<? if(!empty($gallery)): ?>
<div class="row">
                    <? foreach($gallery as $photo):?>
<div class="col-xs-6 col-md-3">
						 
<a class="lightbox thumbnail" href="/images/<?=$photo['image'];?>">
    <img  src="/images/<?=$photo['image'];?>" alt="">
</a>

</div>
				 
                    <? endforeach; ?>
</div>
<? endif;?>

</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
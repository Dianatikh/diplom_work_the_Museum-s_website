<!DOCTYPE html>
<html>
<head>
<title>:3</title>
<link href="../../../../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<!--theme-style-->
	

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
<link rel="stylesheet" href="../../fluid-gallery.css" type="text/css" media="all" >
<link href="../../css/style.css" rel="stylesheet" type="text/css" media="all" />

<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />





<script src="../../js/jquery.min.js"></script>

<style>



    .photo{
	float:left;
    margin: 0px auto 40px auto;
	overflow:hidden; /* this is important */
	position:relative; /* this is important too */
	border:1px solid #ccc;
	width:100%;
	height:500px;
	}
.photo img{
	position:absolute;
	top:-30%;
	left:0px;
    
    width:100%;
	}
    
    
    
    
    
    
    
    
    
    
    table {

border-collapse: collapse;
text-align: center;
        float: right;
}
th, td:first-child {
background: #8D8C8B;
color: white;
padding: 15px 30px;

}
th, td {
border-style: solid;
border-width: 0 1px 1px 0;
border-color: white;
}
td {
background: #8D8C8B;
padding: 15px 20px;
}
th:first-child, td:first-child {
text-align: left;
    }
    
    .info{
        margin: 20px 0;
        text-align:justify;


    </style>

</head>
<body>
<!--header-->

<div class="container">
		<div class="head">
			<div class=" logo col-lg-2 col-md-2 col-sm-2 col-xs-4 ">
				<a href="../../../main"><img src="../../img/logo.png" alt=""></a>	
					<div class="clearfix"> </div>
			</div>
			
		</div>
			<div class="clearfix"> </div>
	</div>
	
    <div class="header">
	<div class="header-top">
		<div class="container">
		<div class="col-sm-12  header-login">
         <div class="eng">
                 <a href="404"><b>ENG</b></a>
                 <a href="main"><b>RUS</b></a>
         </div>
                    
           <div class="btn-menu">
        <a href="../../../tickets/add" style="margin:0;" rel="nofollow" target="_blank"><button type="button" class="btn btn-default">Купить билет</button> </a>
		
<!--noindex-->
     <a href="http://maltsov.com/site_rd/" style="margin:0;" rel="nofollow" target="_blank"> <button  href="" type="button" class="btn btn-default">Магазин</button> </a>
<!--/noindex-->
		
		
        </div>
				<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> поиск </i></a>	
       
				<div class="clearfix"> </div>
		</div>
    </div>		
    </div>
    
      <div class="container">

      <!-- Static navbar -->
      <nav class="navbar navbar-inverse col-lg-10 col-md-10">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="../../main">Главная</a></li>
	           <li ><a href="../../articles">Новости</a></li>
	            <li ><a href="../../tours">Экскурсии</a></li>
	            <li ><a href="../../events">Мероприятия</a></li>
	            
	            <li >
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Галерея<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="../../gallery">Фотографии</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Видео</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Виртуальный тур</a></li>                 
                  
                </ul>
              </li>
	            <li ><a href="../../book">Гостям</a></li>
	            <li ><a href="../../about">О музее</a></li>
	            
	             <? if (isset($_SESSION['user'])): ?>
                <li>
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user"> Аккаунт</i><span class="caret"></span></a>
                <ul class="dropdown-menu">
                <li>  <a href="../../../tickets" >Билеты</a></li>
                  <li role="separator" class="divider"></li>
                  <li>  <a href="./../../toursEdit" >Экскурсии</a></li>
                  <li role="separator" class="divider"></li>
                  <li>  <a href="../../request" >Заявки</a></li>
                  <li role="separator" class="divider"></li>
                <li>  <a href="../../login/logout" >Выход</a></li>      
                  
                </ul>
              </li>  
                                    <? else: ?>
                                    <a class="play-icon  enter" href="login/login" ><i class="glyphicon glyphicon-user"> Войти </i></a>
                <? endif ?>
	         <!--  <a class="play-icon  enter" href="login"><i class="glyphicon glyphicon-user"> Войти </i></a>    -->        
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
    </div>
</div>
   <div class="banner-top" >
      
      
    
        
           
      <img class="banner" src="../../img/news.png" alt="" style="height: 400px; width:100%;">
	
    </div>
       <div class="title">
         
		<h1><?=$tour['title'];?></h1>
		<em></em>
		
<ol class="breadcrumb">
  <li><a href="../../main">Главная</a></li>
  <li><a href="../../tours">Экскурсии</a></li>
  <li class="active"><?=$tour['title'];?></li>
</ol>
</div>
    
    <div class="news container">
    
    

        
            <? if(isset($tour['image'])){ ?>
               
                <div class=" photo col-lg-12 col-md-12">
                   
                    <?=$tour['image']?>
        </div>
                  
            <? } ?>       
    			
    <div class="clearfix"> </div>
<div class="info col-lg-8 col-md-8">
                   

            <?=$tour['description']?>
        
</div>  
        
<div class="info col-lg-4 col-md-4">
<table>
  <tr>
    <th>Минимальное количество человек</th>
    <td><span class="date"><b>       <?=$tour['min_count']?></b></span></td>
  </tr>
  <? if(isset($tour['max_count'])){ ?>
  <tr>
    <th>Максимальное количество человек</th>
    <td><span class="date"><b>       <?=$tour['max_count']?></b></span></td>
  </tr>
  <? } ?>   
  <? if(isset($tour['price_student'])){ ?>
  <tr>
    <th>Студент</th>
    <td><span class="date"><b>       <?=$tour['price_student']?> руб.</b></span></td>
  </tr>
  <? } ?>   
  <tr>
    <th>Взрослый</th>
    <td><span class="date"><b>       <?=$tour['price_people']?> руб.</b></span></td>
  </tr>
  <? if(isset($tour['price_school'])){ ?>
  <tr>
    <th>Школьник</th>
    <td><span class="date"><b>       <?=$tour['price_school']?> руб.</b></span></td>
  </tr>
  <? } ?>   
  

</table>
</div>
            <div class="clearfix"></div>      
                   
  <a href="../../../toursEdit/add/<?=$tour['id']?>" style="margin:0;" rel="nofollow"><button type="button" class="btn btn-large btn-success pull-center " style="padding:25px"; ><h3>Заказать экскурсию</h3></button> </a>
		            
                    
    <br>
    <br>                
                    
                    
                    
                    
    


</div>
   						<!--
				
						-->
					
	<link href="../../css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
			<script src="../../js/jquery.magnific-popup.js" type="text/javascript"></script>
			<script src="../../js/plugins.js"></script>
		<script src="../../js/beetle.js"></script>
			<!---//pop-up-box---->
			<div id="small-dialog" class="mfp-hide">
				<div class="search-top">
					<div class="login-search">
				
						<input type="submit" value="">
						<input type="text" value="Поиск..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Поиск..';}">		
					</div>
					<p>Введите фразу для поиска</p>
				</div>				
			</div>
		 <script>
			$(document).ready(function() {
			$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
			});
																						
			});
		</script>		
						<!----->
</div>
			<div class="clearfix"></div>
	
<script src="../../js/bootstrap.min.js"></script>
 <footer>
   <div class="container">
    <div class="name col-lg-4 col-md-4 col-sm-4 col-xs-4">
        2017 ©  Музей дятьковского хрусталя.
Разработка сайта
    </div>
    <div class="menu col-lg-4 col-md-4 col-sm-4 col-xs-4">
        <ul class="nav navbar-nav">
              <li ><a href="main">Главная</a></li>
	           <li><a href="contacts">Контакты</a></li>
	           <li ><a href="map">Карта сайта</a></li>
        </ul>
    </div>
    <div class="eng ">
         <a href="404"><b>ENG</b></a>
        <a href="main"><b>RUS</b></a>
    </div>
    </div>
</footer>
 
</body>
</html>

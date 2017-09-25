<!DOCTYPE html>
<html>
<head>
<title>:3</title>
<link href="../../../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<!--theme-style-->
<link href="../../../css/style.css" rel="stylesheet" type="text/css" media="all" />	
<link href="../../../css/style_news.css" rel="stylesheet" type="text/css" media="all" />	

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
<link rel="stylesheet" href="../../../fluid-gallery.css" type="text/css" media="all" >


<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script src="../../../js/jquery.min.js"></script>
<script>
	$(document).ready(function() {
		$('.down').click(function () {
			var $input = $(this).parent().find('input');
			var count = parseInt($input.val()) - 1;
			count = count < 0 ? 0 : count;
			$input.val(count);
			$input.change();
			return false;
		});
		$('.up').click(function () {
			var $input = $(this).parent().find('input');
			$input.val(parseInt($input.val()) + 1);
			$input.change();
			return false;
		});
	});
    
    
</script>



<script>
         
$(document).ready(function(){
    $("#kol1").change(function () {
        
        
  
        var min = parseFloat($("#min").val());
        var max = parseFloat($("#max").val());
        
          
        var kol1 = parseInt($("#kol1").val());
        var kol2 = parseInt($("#kol2").val());
        var kol3 = parseInt($("#kol3").val());
        
    if(!kol1)
    var kol1=0;
    if(!kol2)
    var kol2=0;
    if(!kol3)
    var kol3=0;
        
        
         if(kol1+kol2+kol3<min){
             
             $("#error").addClass("alert alert-danger");
             $("h4").addClass("alert alert-danger");

           
             document.getElementById('error').innerHTML = "Слишком маленькое количество людей записано на экскурсию ";
             $('#submit').attr('disabled', true); 

            
        }
        else
        
             if(kol1+kol2+kol3>max)
         {
             $("#error").addClass("alert alert-danger");
             $("h4").addClass("alert alert-danger");
        
             document.getElementById('error').innerHTML = "Слишком большое количество людей записано на экскурсию";
             $('#submit').attr('disabled', true); 
             
         }
        else 
            {
                $("#error").removeClass("alert alert-danger");
             $("h4").removeClass("alert alert-danger");
                document.getElementById('error').innerHTML = "";
                $('#submit').attr('disabled', false); 
            }
        
         
        var price = $("#price1").val();
        var price = parseInt(price);  
        
 
        var result = kol1 * price;
 
        $("#sum").val(result);
        
        document.getElementById('sum1').innerHTML = result;
        
        
  
        
         sum2 = parseInt(document.getElementById("sum2").innerHTML);
         sum3 = parseInt(document.getElementById("sum3").innerHTML);
        if(!sum2)
    var sum2=0;
        if(!sum3)
             var sum3=0;
            
        
        document.getElementById('total_sum').innerHTML = result+sum2+sum3;
     });
    $("#kol2").change(function () {
                var min = parseFloat($("#min").val());
        var max = parseFloat($("#max").val());
        
          
        var kol1 = parseInt($("#kol1").val());
        var kol2 = parseInt($("#kol2").val());
        var kol3 = parseInt($("#kol3").val());
        
    if(!kol1)
    var kol1=0;
    if(!kol2)
    var kol2=0;
    if(!kol3)
    var kol3=0;
        
        
        if(kol1+kol2+kol3<min){
             
             $("#error").addClass("alert alert-danger");
             $("h4").addClass("alert alert-danger");

           
             document.getElementById('error').innerHTML = "Слишком маленькое количество людей записано на экскурсию ";
             $('#submit').attr('disabled', true); 

            
        }
        else
        
             if(kol1+kol2+kol3>max)
         {
             $("#error").addClass("alert alert-danger");
             $("h4").addClass("alert alert-danger");
        
             document.getElementById('error').innerHTML = "Слишком большое количество людей записано на экскурсию";
             $('#submit').attr('disabled', true); 
             
         }
        else 
            {
                $("#error").removeClass("alert alert-danger");
             $("h4").removeClass("alert alert-danger");
                document.getElementById('error').innerHTML = "";
                $('#submit').attr('disabled', false); 
            }
        
        
         
        var price = $("#price2").val();
        var price = parseInt(price);  
        
 
        var result = kol2 * price;
 
       
        document.getElementById('sum2').innerHTML = result;
        
   
        
         sum1 = parseInt(document.getElementById("sum1").innerHTML);
         sum3 = parseInt(document.getElementById("sum3").innerHTML);
        
    if(!sum1)
    var sum1=0;
    if(!sum3)
     var sum3=0;
        
        
        
        
        
        document.getElementById('total_sum').innerHTML = result+sum1+sum3;
     });
    $("#kol3").change(function () {
                var min = parseFloat($("#min").val());
        var max = parseFloat($("#max").val());
        
          
        var kol1 = parseInt($("#kol1").val());
        var kol2 = parseInt($("#kol2").val());
        var kol3 = parseInt($("#kol3").val());
        
    if(!kol1)
    var kol1=0;
    if(!kol2)
    var kol2=0;
    if(!kol3)
    var kol3=0;
        
        
        if(kol1+kol2+kol3<min){
             
             $("#error").addClass("alert alert-danger");
             $("h4").addClass("alert alert-danger");

           
             document.getElementById('error').innerHTML = "Слишком маленькое количество людей записано на экскурсию ";
             $('#submit').attr('disabled', true); 

            
        }
        else
        
             if(kol1+kol2+kol3>max)
         {
             $("#error").addClass("alert alert-danger");
             $("h4").addClass("alert alert-danger");
        
             document.getElementById('error').innerHTML = "Слишком большое количество людей записано на экскурсию";
             $('#submit').attr('disabled', true); 
             
         }
        else 
            {
                $("#error").removeClass("alert alert-danger");
             $("h4").removeClass("alert alert-danger");
                document.getElementById('error').innerHTML = "";
                $('#submit').attr('disabled', false); 
            }
        
         
        var price = $("#price3").val();
        var price = parseInt(price);  
        
 
        var result = count * price;
 
        
        document.getElementById('sum3').innerHTML = result;
        
        
        
        
         sum2 = parseInt(document.getElementById("sum2").innerHTML);
         sum1 = parseInt(document.getElementById("sum1").innerHTML);
    
        if(!sum2)
        var sum2=0;
        if(!sum1)
         var sum1=0;
        
        document.getElementById('total_sum').innerHTML = result+sum2+sum1;
     });
    
});
    
</script>









</script>
<style>
.amount {

}
.amount span {
	display:inline-block;
	width:20px;
	height:20px;
	background:#ededed;
	cursor:pointer;
	text-align:center;
}
.amount span:hover {
	background:#dfdfdf;
}
.amount input {
	width:30px;
	text-align:center;
}
    </style>

</head>
<body>
<!--header-->

<div class="container">
		<div class="head">
			<div class=" logo col-lg-2 col-md-2 col-sm-2 col-xs-4 ">
				<a href="../../main"><img src="../../../img/logo.png" alt=""></a>	
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
                                    <a class="play-icon  enter" href="login/index" ><i class="glyphicon glyphicon-user"> Войти </i></a>
                <? endif ?>
	         <!--  <a class="play-icon  enter" href="login"><i class="glyphicon glyphicon-user"> Войти </i></a>    -->        
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
    </div>
</div>
    
     <?php include $this->view_path_folder . '/' . $content_view; ?>
    
				
						
						<!--
				
						-->
					
	<link href="../../../css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
        <script type="text/javascript" src='../../../js/comment.js'></script>

			<script src="../../../js/jquery.magnific-popup.js" type="text/javascript"></script>
			<script src="../../../js/plugins.js"></script>
		<script src="../../../js/beetle.js"></script>
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
		</div>	
	</div>	
</div>
<script src="../../../js/bootstrap.min.js"></script>
<script src="../../../js/jquery.hoverdir.js"></script>
<script src="../../../js/modernizr.custom.97074.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
$(function() {	
$(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );
});
</script>
 <footer>
   <div class="container">
    <div class="name col-lg-4 col-md-4 col-sm-4 col-xs-4">
        2017 ©  Музей дятьковского хрусталя.
Разработка сайта
    </div>
    <div class="menu col-lg-4 col-md-4 col-sm-4 col-xs-4">
        <ul class="nav navbar-nav">
              <li ><a href="../../../main">Главная</a></li>
	           <li><a href="../../../contacts">Контакты</a></li>
	           <li ><a href="../../map">Карта сайта</a></li>
        </ul>
    </div>
    <div class="eng ">
         <a href="404"><b>ENG</b></a>
        <a href="../../main"><b>RUS</b></a>
    </div>
    </div>
</footer>
 
</body>
</html>
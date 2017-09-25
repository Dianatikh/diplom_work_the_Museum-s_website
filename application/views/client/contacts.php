
	<div class="banner-top" >
      
      
    
        
           
      <img class="banner" src="img/contact.png" alt="" style="
    height: 400px; width:100%;">
	
    </div>
        
        
    <div class="title">
         
		<h1>Контакты</h1>
		<em></em>
		
<ol class="breadcrumb">
  <li><a href="../main">Главная</a></li>
  <li class="active">Контакты</li>
</ol>
	</div>
</div>	
		
			<div class="contact">
					
				<div class="contact-form">
					<div class="container">
					<div class=" col-md-6 contact-left">

					
			
<div class="address col-md-12">
					
					<div class=" address-grid">
							<i class="glyphicon glyphicon-map-marker"></i>
							<div class="address1">
								<h3>Адрес</h3>
								<em></em>
								<p>Брянская обл. г. Дятьково,  ул. Ленина,159</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class=" address-grid ">
							<i class="glyphicon glyphicon-phone"></i>
							<div class="address1">
                                <h3>Телефон</h3>
                                <em></em>
								<p>(48333)  3-37-78,  3-38-28</p>
                                                             
                                </div>
							<div class="clearfix"> </div>
                                </div>
						
						<div class=" address-grid ">
							<i class="glyphicon glyphicon-bell"></i>
							<div class="address1">
								<h3>Режим работы</h3>
								<em></em>
								<p>с 10-00 до 18-00 кроме  понедельника.</p>
							</div>
							<div class="clearfix"> </div>
						
                </div>
</div>
				</div>
<div class="col-md-6 contact-top">
<div class="address col-md-12">
				<div style="max-width: 700px;" style="min-width: 300px;">
<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A24a93f0804a5545c95dc2bbf0c47b262f65a9c0342e75e2ed44c07a1ad6d9aad&amp;width=100%&amp;height=300&amp;lang=ru_RU&amp;scroll=true"></script>
    </div>
                
</div>
					<!--	-->			
				</div>
		<div class="clearfix"></div>
                    
		</div>
		</div>
		
            
    
            
    </div><!--//contact-->
    <div class="row">
<div class="row-form col-sm-10 col-sm-offset-1">
    <div class="well">
    <h3>Отправить сообщение</h3>
    <form action="/contacts/send"     method="post">
        <div class="row">
             <? if(isset($mess)):?>
                                        <div class="alert alert-<?= $mess_type?>"><?= $mess?></div>
                                    <? endif ?>
            <div class="form-group col-sm-6">
                <label for="name" class="h4">Имя</label>
                <input type="text" class="form-control" " placeholder="Введите ваше имя" required   name="name">
                
            </div>
            <div class="form-group col-sm-6">
                <label for="email" class="h4">Email</label>
                <input name="email" type="email" class="form-control" id="email" placeholder="Введите вашу почту" required>
                
            </div>
        </div>
        <div class="form-group">
            <label for="msg" class="h4 ">Сообщение</label>
            <textarea name="msg" id="message" class="form-control" rows="5" placeholder="Текст вашего сообщения" required></textarea>
            
        </div>
        <label><span class="red">*</span> Введите защитный код:         </label>
<table width="100%"><tr>
<td valign="top" align="right" width="56%">
<?php 
  $i=1;
  do
{
	$num[$i] = mt_rand(0,9);
	echo "<img src='img/cap/".$num[$i].".png' border='0' align='center' vspace='5px'>";
	$i++;
	}
	while ($i<5);
	$captcha = $num[1].$num[2].$num[3].$num[4];
                                         
?> &nbsp;
                                          &nbsp;</td>
<td valign="top" align="left" width="44%">
<input name="captcha" type="hidden" value="<?php echo $captcha ;?>">
<input class="cap" name="pr" type="text" maxlength="4">
</td></tr></table>
     
<button  type="submit" id="form-submit" class="btn btn-success btn-lg pull-right ">Отправить</button>

       
        <div class="clearfix"></div>
    </form>
    
    </div>
</div>
</div>

			</div>
			
		</div>
	<!--//content-->
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

	<script src="js/simpleCart.min.js"> </script>
<!-- slide -->
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/validator.min.js"></script>
<script type="text/javascript" src="js/form-scripts.js"></script>
 

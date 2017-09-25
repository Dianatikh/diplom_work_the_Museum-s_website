
     
     
     
     <div class="banner-top" > 
      
    
        
           
      <img class="banner" src="../../../img/contact.png" alt="" style="
    height: 400px; width:100%;">	
    </div>
    <section class="col-lg-10 connectedSortable">
            <div class="title">
         
		<h1>Забронировать экскурсию</h1>
		<em></em>
		
<ol class="breadcrumb">
  <li><a href="../../../../main">Главная</a></li>
  <li><a href="../../../tours">Экскурсии</a></li>
  <li class="active">Забронировать </li>
</ol>
	</div>
    <!-- quick email widget -->
    <div class="container">
    <div class="box box-info">
        
         <div class="box-body" style="margin:0 100px;">
           
           <br>
           
            <form action="/toursEdit/add/<?= $tour['id'] ?>" method="post">
            
               
               <input type="hidden" name="id_tour" value="<?= $tour['id'] ?>">
               <input type="hidden" name="id_user" value="<?= $_SESSION['user']['id'] ?>">
               
               <h3><?= $tour['title'] ?></h3>
                   <br>
               
     <div class="form-group">
                   
                    <label>Дата:</label>

                    <div class="input-group">
                        
                        
                        <input type="date" class="form-control pull-right" id="datepicker" name="start_date"
                               value=""/>
                
                    <!-- /.input group -->
                </div>
                <br>
 <div>
                    <textarea name="note" class="textarea" placeholder="Описание "
                              style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
               <br>
               
    <table class="table table-bordered col-lg-4">
            <div id="error" ><h4></h4></div>
    <th>Категория</th>
    <th>Цена, руб.</th>
    <th>Количество</th>
    <th>Сумма, руб.</th>
       
            
            <tr>
                <td>Взрослые</td>
                <td><?= $tour['price_people'] ?></td>
<td>
<div class="amount" >
<span class="down">-</span>
<input id="kol1" type="text" name="count_people" value="0" />
<span class="up">+</span>
</div>
</td>
               <input id="price1"  type="hidden" value="<?= $tour['price_people'] ?>" />
               <input id="price2"  type="hidden" value="<?= $tour['price_school'] ?>" />
               <input id="price3"  type="hidden" value="<?= $tour['price_student'] ?>" />
               
               <input id="max"  type="hidden" value="<?= $tour['max_count'] ?>" />
               <input id="min"  type="hidden" value="<?= $tour['min_count'] ?>" />
               
            
                <td > <i id="sum1"></i> руб.</td>
            </tr>    
          
            <tr>

                <td>Школьники</td>
                <td><?= $tour['price_school'] ?></td>
<td>
<div class="amount" >
<span class="down">-</span>
<input id="kol2" type="text" name="count_school" value="0" />
<span class="up">+</span>
</div>
</td>
                <td> <i id="sum2"></i> руб.</td>
                
            </tr>
           
            <tr>
                <td>студенты</td>
                 <td><?= $tour['price_student'] ?></td>
<td>
<div class="amount" >
<span class="down">-</span>
<input id="kol3" type="text" name="count_student" value="0" />
<span class="up">+</span>
</div>
</td>
                <td ><i id="sum3"></i> руб.</td>
            </tr>
           
            <tr>
                <td>Всего</td>
                <td id="total_sum">руб.</td>
            </tr>
           
    </table>
               
               
               
               
                <div class="box-footer clearfix">
                   <br>
                     <? if (isset($_SESSION['user'])): ?>
                    <button class="pull-right btn btn-default" style="padding:10px;" id ="submit" onclick="check()" type="submit" name="send">Забронировать <i
                            class="fa fa-arrow-circle-right"></i></button>
                       
                        <? else: ?>
                    <p> нужно войти</p>
                    <? endif ?>
                </div>
            </form>
            <br>
            
        </div>
    </div>
    </div>

</section><!-- /.Left col -->
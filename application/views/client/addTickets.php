
     
     
     
     <div class="banner-top" > 
      
    
        
           
      <img class="banner" src="../../../img/contact.png" alt="" style="
    height: 400px; width:100%;">	
    </div>
    <section class="col-lg-10 connectedSortable">
            <div class="title">
         
		<h1>Купить билет</h1>
		<em></em>
		
<ol class="breadcrumb">
  <li><a href="../main">Главная</a></li>
  <li class="active">Купить билеты</li>
</ol>
	</div>
    <!-- quick email widget -->
    <div class="container">
    <div class="box box-info">
        <div class="box-header">
        
            <!-- tools box -->

            <!-- /. tools -->
        </div>
        <div class="box-body">
           <h3>Входной билет с открытой датой на экспозицию музея</h3>
           <br>
           
            <form action="/tickets/add" method="post">
            
               <input type="hidden" name="id" value="<?= $tickets['id'] ?>">
               <input type="hidden" name="id_user" value="<?= $_SESSION['user']['id'] ?>">
               
               
    <table class="table table-bordered col-lg-4">
            
    <th>Категория</th>
    <th>Цена</th>
    <th>Количество</th>
    <th>Сумма</th>
       
            
            <tr>
                <td>Взрослые (Граждане России и СНГ)</td>
                <td>100 руб.</td>
<td>
<div class="amount" >
<span class="down">-</span>
<input id="kol1" type="text" name="count_people" value="0" />
<span class="up">+</span>
</div>
</td>
               <input id="price1"  type="hidden" value="100" />
               <input id="price2"  type="hidden" value="100" />
               <input id="price3"  type="hidden" value="80" />
               
            
                <td > <i id="sum1"></i> руб.</td>
            </tr>    
            <tr>

                <td>Взрослые (иностранные граждане)</td>
                <td>100 руб.</td>
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
                <td>Школьники и студенты</td>
                 <td>80 руб.</td>
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
                    <button class="pull-right btn btn-default" style="padding:10px;" type="submit" name="send">Купить <i
                            class="fa fa-arrow-circle-right"></i></button>
                        <? else: ?>
                    <p>Для того, чтобы купить билет, нужно войти</p>
                    <? endif ?>
                </div>
            </form>
            <br>
            
        </div>
    </div>
    </div>

</section><!-- /.Left col -->
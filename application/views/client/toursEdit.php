<!-- Left col -->	<div class="banner-top" >   
        
      <img class="banner" src="../../img/contact.png" alt="" style="
    height: 400px; width:100%;">
	
    </div>
   
<section class="col-lg-12">
    <div class="box-info">
           <div class="title">
         
		<h1>Забранированные вами экскурсии</h1>
		<em></em>
		
<ol class="breadcrumb">
  <li><a href="../main">Главная</a></li>
  <li><a href="../tours">Экскурсии</a></li>
  
  <li class="active">Забронированная экскурсия</li>
</ol>
	</div>
</div>	
<div class="container">
        
         <a href="./../../tours" class="btn btn-success" style="padding: 20px 40px;"><h3>Забронировать экскурсию</h3></a>
        <br/><br/>
        
        <br/><br/>
       
            

  
       
            <? if (!empty($data['tour'])): ?>
                <? foreach ($data['tour'] as $tour): ?>
<table class="table table-bordered col-lg-4">
                
            <tr>
                <th>Название экскурсии</th>
                <td><?= $tour['title'] ?></td>
                
            </tr>
            <tr>
                <th>Дата экскурсии</th>
                <td><?= $tour['start_date'] ?></td>
                
            </tr>
            <tr>
                <th>Примечания</th>
                <td><?= $tour['note'] ?></td>
                
            </tr>
    </table>
    <table class="table table-bordered col-lg-4">
            <tr>
                <td></td>
                <th>Цена, руб</th>
                <th>Кол-во, чел.</th>
                <th>Сумма, руб.</th>
            </tr> 
                
            <tr>
                <th>Взрослые</th>
                <td><?= $tour['price_people'] ?></td>
                <td><?= $tour['count_people'] ?></td>
                <td><?= $tour['count_people']*$tour['price_people'] ?> руб.</td>
            </tr>    
            <tr>

                <th>Школьники</th>
                <td><?= $tour['price_school'] ?></td>
                <td><?= $tour['count_school'] ?></td>
                <td><?= $tour['count_school']*$tour['price_school'] ?> руб.</td>
                
            </tr>
            <tr>
                <th>Студенты</th>
                <td><?= $tour['price_student'] ?></td>
                <td><?= $tour['count_student'] ?></td>
                <td><?= $tour['count_student']*$tour['price_student'] ?> руб.</td>
            </tr>
            <tr>
                <th>Общая сумма</th>
                <td><?= $tour['count_people']*$tour['price_people']+$tour['count_school']*$tour['price_school']+$tour['count_student']*$tour['price_student'] ?></td>
                
            </tr>
                
                        
 </table>
                
                    
                                
                                            
                          <div>  
                         <a href="/toursEdit/tourEdit/<?= $tour['id_tc'] ?>">
                                <span class="glyphicon glyphicon-edit">редактировать</span>
                            </a>
                            <a href="/toursEdit/delete/<?= $tour['id_tc'] ?>" class="delete_item"
                               data-confirm-title="Удалить запись?"
                               data-confirm-message="Вы действительно хотите удалить эту запись?">
                                <span class="glyphicon glyphicon-trash">удалить</span>
                            </a>
                            <br>
                            <br>
            </div>
                    
                                    <? endforeach ?>
            <? endif ?>
        
         
        <div class="clearfix"></div>
    </div>
</section>
</div>
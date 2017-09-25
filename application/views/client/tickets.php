<!-- Left col -->	<div class="banner-top" >   
        
      <img class="banner" src="../../img/contact.png" alt="" style="
    height: 400px; width:100%;">
	
    </div>
   
<section class="col-lg-12">
    <div class="box-info">
           <div class="title">
         
		<h1>Список ваших билетов</h1>
		<em></em>
		
<ol class="breadcrumb">
  <li><a href="../main">Главная</a></li>
  <li class="active">Билет</li>
</ol>
	</div>
</div>	
<div class="container">
        <? if (!isset($data['ticket'])){ ?>
         <a href="/tickets/add" class="btn btn-success" style="padding: 20px 40px;"><h3>Купить билет</h3></a>
        <br/><br/>
        <? } else {?>
        <br/><br/>
        <table class="table table-bordered col-lg-4">
            
    <th>Категория</th>
    <th>Количество</th>
    <th>Сумма</th>
       
            <? if (!empty($data['ticket'])): ?>
                <? foreach ($data['ticket'] as $ticket): ?>
            <tr>
                <td>Взрослые (Граждане России и СНГ)</td>
                <td><?= $ticket['count_people'] ?></td>
                <td><?= $ticket['count_people']*100 ?> руб.</td>
            </tr>    
            <tr>

                <td>Взрослые (иностранные граждане)</td>
                <td><?= $ticket['count_school'] ?></td>
                <td><?= $ticket['count_school']*100 ?> руб.</td>
                
            </tr>
            <tr>
                <td>Школьники и студенты</td>
                <td><?= $ticket['count_student'] ?></td>
                <td><?= $ticket['count_student']*80 ?> руб.</td>
            </tr>
                
                        
 
                
                    
                                
                                            
                          <div>  
                        
                            <a href="/tickets/delete/<?= $ticket['id'] ?>" class="delete_item"
                               data-confirm-title="Удалить запись?"
                               data-confirm-message="Вы действительно хотите удалить эту запись?">
                                <span class="glyphicon glyphicon-trash">удалить</span>
                            </a>
                            <br>
                            <br>
            </div>
                    
                                    <? endforeach ?>
            <? endif ?>
        </table>
         <? } ?>
        <div class="clearfix"></div>
    </div>
</section>
</div>
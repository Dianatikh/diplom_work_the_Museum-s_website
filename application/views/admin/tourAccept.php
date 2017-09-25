<section class="col-lg-12">
    
           <div class="title">
         
		<h3>Список забронированных экскурсий</h3>
		<em></em>
<!--<ol class="breadcrumb">
  <li><a href="../admin/tours">Экскурсии</a></li>
  <li class="active">Забронированные экскурсии</li>
</ol>
-->
	</div>
	
        
        
        <table class="table table-bordered col-lg-4">
            <tr>
                <th style="">#</th>
                <th>Пользователь</th>
                <th>Экскурсия</th>
                <th>Замечания</th>
                <th>Дата</th>
                <th>Число людей <br> кат./число/руб. </th>
                <th>Почта</th>
            
               
                
            </tr>
            <? if (!empty($data['tours'])): ?>
                <? foreach ($data['tours'] as $tr): ?>
                    <tr>
                        <td><?= $tr['id_tc'] ?></td>
                        <td><?= $tr['login'] ?></td>
                        <td><?= $tr['title'] ?></td>
                        <td><?= $tr['note'] ?></td>
                        <td><?= $tr['start_date'] ?></td>           
                        
                        
                        <td>
                        <table сlass="table table-condensed">
                            <tr>
                                <td>Взрослые/</td>
                                <td><?= $tr['count_people'] ?>/</td>
                                <td><?= $tr['count_people']*$tr['count_people'] ?></td>
                            </tr>
                             <? if (!empty($tr['count_student'])): ?>
                             <tr>
                                 <td>Студенты/</td>
                                <td><?= $tr['count_student'] ?>/</td>
                                <td><?= $tr['count_student']*$tr['price_student'] ?></td>
                             </tr>
                             <? endif ?>
                             <? if (!empty($tr['count_school'])): ?>
                             <tr>
                                 <td>Школьники/</td>
                                <td><?= $tr['count_school'] ?>/</td>
                                <td><?= $tr['count_school']*$tr['price_school'] ?></td>
                             </tr>
                             <? endif ?>
                              
                            
                        </table>
                        </td>
                    
                        <td><?= $tr['email'] ?></td>
                        
                        
                    </tr>
                <? endforeach ?>
            <? endif ?>
        </table>
        <div class="clearfix"></div>
    </div>
</section>
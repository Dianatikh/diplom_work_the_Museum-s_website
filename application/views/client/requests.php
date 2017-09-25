<!-- Left col -->	<div class="banner-top" >   
        
      <img class="banner" src="../../img/contact.png" alt="" style="
    height: 400px; width:100%;">
	
    </div>
<section class="col-lg-12">
    <div class="box-info">
           <div class="title">
         
		<h1>Список заявок</h1>
		<em></em>
		
<ol class="breadcrumb">
  <li><a href="../main">Главная</a></li>
  <li class="active">Список заявок</li>
</ol>
	</div>
</div>	
        
        <a href="/request/add" class="btn btn-success">Добавить заявку</a>
        <br/><br/>
        <table class="table table-bordered col-lg-4">
            <tr>
                <th style="">#</th>
                <th>Название</th>
                <th>Телефон</th>
                <th>Статус</th>
               
                <th>ред.</th>
                <th style="">удал.</th>
            </tr>
            <? if (!empty($data['request'])): ?>
                <? foreach ($data['request'] as $request): ?>
                    <tr>
                        <td><?= $request['id'] ?></td>
                        <td><?= $request['tittle'] ?></td>
                        <td><?= $request['tel'] ?></td>
                        <td><? if ($request['is_active']==1) { ?> утверждена <? } else  if ($request['is_active']==0) { ?> не рассмотрена <? } else { ?> отклонена <? } ?> </td>
                        
                        <td>
                            <a href="/request/request/<?= $request['id'] ?>">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a>
                        </td>
                        <td>
                            <a href="/request/delete/<?= $request['id'] ?>" class="delete_item"
                               data-confirm-title="Удалить запись?"
                               data-confirm-message="Вы действительно хотите удалить эту запись?">
                                <span class="glyphicon glyphicon-trash"></span>
                            </a>
                        </td>
                    </tr>
                <? endforeach ?>
            <? endif ?>
        </table>
        <div class="clearfix"></div>
    </div>
</section>
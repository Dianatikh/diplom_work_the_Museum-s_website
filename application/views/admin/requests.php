<section class="col-lg-12">
    <div class="box-info">
           <div class="title">
         
		<h3>Список заявок</h3>
		<em></em>
	</div>
</div>	
        
        <br/><br/>
        <table class="table table-bordered col-lg-4">
            <tr>
                <th style="">#</th>
                <th>Название</th>
                <th>Телефон</th>
                <th>Описание</th>
                <th>Статус</th>
               
                <th>утвердить</th>
                <th style="">отклонить</th>
            </tr>
            <? if (!empty($data['request'])): ?>
                <? foreach ($data['request'] as $request): ?>
                    <tr>
                        <td><?= $request['id'] ?></td>
                        <td><?= $request['tittle'] ?></td>
                        <td><?= $request['tel'] ?></td>
                        <td><?= $request['description'] ?></td>
                        <td><? if ($request['is_active']==1) { ?> утверждена <? } else  if ($request['is_active']==0) { ?> не рассмотрена <? } else { ?> отклонена <? } ?> </td>
                        
                        <td>
                            <a href="/admin/request/ok/<?= $request['id'] ?>" class="delete_item"
                            data-confirm-title="Утвердить?"
                               data-confirm-message="Вы действительно хотите  утвердить эту заявку?">
                                <span class="glyphicon glyphicon-ok"></span>
                            </a>
                        </td>
                        <td>
                            <a href="/admin/request/remove/<?= $request['id'] ?>" class="delete_item"
                               data-confirm-title="Отклонить?"
                               data-confirm-message="Вы действительно хотите  отклонить эту заявку?">
                                <span class="glyphicon glyphicon-remove"></span>
                            </a>
                        </td>
                    </tr>
                <? endforeach ?>
            <? endif ?>
        </table>
        <div class="clearfix"></div>
    </div>
</section>
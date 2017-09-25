<!-- Left col -->
<section class="col-lg-12">
    <div class="box-info">
        <h3 class="box-title">Список мероприятий</h3>
        <a href="/admin/events/add" class="btn btn-success">Добавить</a>
        <br/><br/>
        <table class="table table-bordered col-lg-11 articles_table">
            <tr>
                <th style="">#</th>
                <th>Название</th>
                <th>Изображение</th>
                <th>Дата начала</th>
                <th>Дата окончания</th>
                
                <th>ред.</th>
                <th>удал.</th>
            </tr>
            <? if (!empty($events)): ?>
                <? foreach ($events as $key => $event): ?>
                    <tr>
                        <td><?= $event['id_ev'] ?></td>
                        <td class="title_td"><?= $event['title'] ?></td>
                        <td>
                            <? if (isset($event['image'])) { ?>
                                <img src="images/<?= $event['image'] ?>" alt="" class="preview">
                                <? } ?>
                    
                        </td>
                        <td><?= $event['start_date'] ?></td>
                        <td><?= $event['finish_date'] ?></td>
                    
                        <td>
                            <a href="/admin/events/event/<?= $event['id_ev'] ?>">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a>
                        </td>
                        <td>
                            <a href="/admin/events/delete/<?= $event['id_ev'] ?>" class="delete_item"
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

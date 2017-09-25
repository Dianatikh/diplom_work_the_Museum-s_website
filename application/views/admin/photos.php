<!-- Left col -->
<section class="col-lg-12">
    <div class="box-info">
        <h3 class="box-title">Список фотографий</h3>
        <a href="/admin/photos/add" class="btn btn-success">Добавить фото</a>
        <br/><br/>
        <table class="table table-bordered col-lg-11 articles_table">
            <tr>
                <th style="">#</th>
                <th>Комментарий</th>
                <th>Фото</th>
                <th>ред.</th>
                <th>удал.</th>
            </tr>
            <? if (!empty($photos)): ?>
                <? foreach ($photos as $key => $photo): ?>
                    <tr>
                        <td><?= $photo['id'] ?></td>
                        <td class="title_td"><?= $photo['comment'] ?></td>
                        <td>
                            <? if (isset($photo['image'])) { ?>
                                <img src="images/<?= $photo['image'] ?>" alt="" class="preview">
                                <? } ?>
            
                        </td>
                        <td>
                       
                            <a href="/admin/photos/photo/<?= $photo['id'] ?>">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a>
                        </td>
                        <td>
                            <a href="/admin/photos/delete/<?= $photo['id'] ?>" class="delete_item"
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

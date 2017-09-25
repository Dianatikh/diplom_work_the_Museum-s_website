<!-- Left col -->
<section class="col-lg-12">
    <div class="box-info">
        <h3 class="box-title">Список Экскурсий</h3>
        <a href="/admin/tours/add" class="btn btn-success">Добавить экскурсию</a>
        <br/><br/>
        <table class="table table-bordered col-lg-11 articles_table">
            <tr>
                <th style="">#</th>
                <th>Название</th>
                <th>Изображение</th>
                <th>Мин., людей</th>
                <th>Макс., людей</th>
                <th>Взрослые, руб.</th>
                <th>Студенты, руб.</th>
                <th>Школьники, руб.</th>
                
                
                <th>ред.</th>
                <th>удал.</th>
            </tr>
            <? if (!empty($tours)): ?>
                <? foreach ($tours as $key => $tour): ?>
                    <tr>
                        <td><?= $tour['id'] ?></td>
                        <td class="title_td"><?= $tour['title'] ?></td>
                        <td>
                            <? if (isset($tour['image'])) { ?>
                                <img src="images/<?= $tour['image'] ?>" alt="" class="preview">
                                <? } ?>
                    
                        </td>
                        <td><?= $tour['min_count'] ?></td>
                        <td><?= $tour['max_count'] ?></td>
                        <td><?= $tour['price_people'] ?></td>
                        <td><?= $tour['price_school'] ?></td>
                        <td><?= $tour['price_student'] ?></td>
                    
                        <td>
                            <a href="/admin/tours/tour/<?= $tour['id'] ?>">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a>
                        </td>
                        <td>
                            <a href="/admin/tours/delete/<?= $tour['id'] ?>" class="delete_item"
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
        <a href="/admin/tours/custom" class="btn-large btn-defolt">Посмотреть забронированные экскурсии</a>
    </div>
</section>

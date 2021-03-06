<section class="col-lg-7 connectedSortable">
    <!-- quick email widget -->
    <div class="box box-info">
        <div class="box-header">
            <h3 class="box-title">Редактировать категорию</h3>
            <!-- tools box -->
            <div class="pull-right box-tools">
                <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i
                        class="fa fa-times"></i></button>
            </div>
            <!-- /. tools -->
        </div>
        <div class="box-body">
            <form action="/admin/categories/category/<?= $category['id'] ?>" method="post">
                <input type="hidden" name="id" value="<?= $category['id'] ?>">
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Название категории" value="<?=$category['name']?>" />
                </div>
                <div>
                    <textarea name="description" class="textarea" placeholder="Описание "
                              style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?=$category['description']?></textarea>
                </div>
                <div class="box-footer clearfix">
                    <button class="pull-right btn btn-default" type="submit" name="send">Редактировать <i
                            class="fa fa-arrow-circle-right"></i></button>
                </div>
            </form>
        </div>
    </div>

</section><!-- /.Left col -->
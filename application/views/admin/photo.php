<?php

?>
<!-- Left col -->
<section class="col-lg-12 connectedSortable">
    <!-- quick email widget -->
    <div class="box box-info">
        <div class="box-body">
            <h3 class="box-title">Редактировать фото</h3>
            <!--       ////////////////////////////////  form     //////////////////////////////       -->
            <form action="/admin/photos/photo/<?= $photo['id'] ?>" method="post" name="form1" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $photo['id'] ?>">
                <?= $photo['image'] ?>

                <div class="callout callout-info"><span class="glyphicon glyphicon-paperclip"></span> 
                </div>


                <div class='box'>
                    <div class='box-header'>
                        <h3 class='box-title'>Комментарий</h3>
                        <!-- tools box -->
                        <div class="pull-right box-tools">
                            <button class="btn btn-default btn-sm" data-widget='collapse' data-toggle="tooltip"
                                    title="Collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-default btn-sm" data-widget='remove' data-toggle="tooltip"
                                    title="Remove"><i class="fa fa-times"></i></button>
                        </div>
                        <!-- /. tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class='box-body pad'>
                        <div>
                            <textarea name="comment" class="textarea" id="editor1"
                                      placeholder="Place some text here"
                                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                <?= $photo['comment'] ?>
                            </textarea>
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <? if (isset($photo['mess'])): ?>
                        <div class="alert alert-danger alert-dismissible">
                            <?= $photo['mess']; ?>
                        </div>
                    <? endif ?>
                    <label for="exampleInputFile">Загрузка файлов</label>
                    <!--        error mess for pictures                -->
                    <? if (!empty($photo['mess'][0])) {
                        foreach ($photo['mess'] as $mess) {
                            echo '
                                    <div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <span><i class="icon fa fa-ban"></i></span>
                                        ' . $mess . '
                                    </div>
                                    ';
                        }
                    }?>
                    <input name="image[]" type="file" multiple="multiple" id="exampleInputFile">

                    <p class="help-block">Выберите файлы для загрузки</p>
                </div>
                <div class="box-footer clearfix">
                    <button type="submit" class="pull-right btn btn-default" name="send">Редактировать <i
                            class="fa fa-arrow-circle-right"></i></button>
                </div>
            </form>
            <!--       ////////////////////////////////  end form   //////////////////////////////       -->
        </div>
    </div>

</section><!-- /.Left col -->

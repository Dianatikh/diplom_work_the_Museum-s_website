<?php

?>
<!-- Left col -->
<section class="col-lg-12 connectedSortable">
    <!-- quick email widget -->
    <div class="box box-info">
        <div class="box-body">
            <h3 class="box-title">Редактировать статью</h3>
            <!--       ////////////////////////////////  form     //////////////////////////////       -->
            <form action="/admin/events/event/<?= $event['id_ev'] ?>" method="post" name="form1" enctype="multipart/form-data">
                <input type="hidden" name="id_ev" value="<?= $event['id_ev'] ?>">
                <div class="form-group">
                    <input type="text" class="form-control" name="title" placeholder="" value="<?= $event['title'] ?>"/>
                </div>
                <?= $event['image'] ?>

                <div class="callout callout-info"><span class="glyphicon glyphicon-paperclip"></span> 
                </div>

                <!--          datepicker          -->
                <div class="form-group">
                    <label>Дата:</label>

                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right" id="datepicker" name="start_date"
                               value="<?= $event['start_date'] ?>"/>
                    </div>
                    <!-- /.input group -->
                </div>
                                <!--          datepicker          -->
                <div class="form-group">
                    <label>Дата:</label>

                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right" id="datepicker" name="finish_date"
                               value="<?= $event['finish_date'] ?>"/>
                    </div>
                    <!-- /.input group -->
                </div>
           
                <!--            HTML editor            -->
                <div class='box'>
                    <div class='box-header'>
                        <h3 class='box-title'>Текст</h3>
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
                            <textarea name="description" class="textarea" id="editor1"
                                      placeholder="Place some text here"
                                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                <?= $event['description'] ?>
                            </textarea>
                        </div>
                    </div>
                </div>
                <!-- Select multiple category-->
        
                <div class="form-group">
                    <? if (isset($event['mess'])): ?>
                        <div class="alert alert-danger alert-dismissible">
                            <?= $event['mess']; ?>
                        </div>
                    <? endif ?>
                    <label for="exampleInputFile">Загрузка файлов</label>
                    <!--        error mess for pictures                -->
                    <? if (!empty($event['mess'][0])) {
                        foreach ($event['mess'] as $mess) {
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

<!-- Left col -->
<section class="col-lg-10 connectedSortable">
    <!-- quick email widget -->
    <div class="box box-info">
        <div class="box-header">
            <h3 class="box-title">Добавить фотографию</h3>
            <!-- tools box -->
            <div class="pull-right box-tools">
                <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i
                        class="fa fa-times"></i></button>
            </div>
            <!-- /. tools -->
        </div>
        <div class="box-body">
            <!--       ////////////////////////////////  form     //////////////////////////////       -->
            <form action="/admin/photos/add/" method="post" name="add_photos" enctype="multipart/form-data">
     
                <div>
                    <textarea name="comment" class="textarea" placeholder="Описание "
                              style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
     
        
                <div class="form-group">
                    <label for="exampleInputFile">Загрузка фото</label>
                    <input name="image[]" type="file" multiple="multiple" id="exampleInputFile">

                    <p class="help-block">Выберите файлы для загрузки</p>
                </div>
                <div class="box-footer clearfix">
                    <button type="submit" class="pull-right btn btn-default" name="send">Добавить <i
                            class="fa fa-arrow-circle-right"></i></button>
                </div>
            </form>
            <!--       ////////////////////////////////  end form   //////////////////////////////       -->
        </div>
    </div>

</section><!-- /.Left col -->
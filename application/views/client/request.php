	<div class="banner-top" >
      <img class="banner" src="../../../img/contact.png" alt="" style="
    height: 400px; width:100%;">
	
    </div>
    <section class="col-lg-7 connectedSortable">
    <!-- quick email widget -->
        <div class="title">
         
		<h1>Редактировать заявку</h1>
		<em></em>
		
<ol class="breadcrumb">
  <li><a href="../main">Главная</a></li>
  <li><a href="../">Список заявок</a></li>
  <li class="active">Редактировать заявку</li>
</ol>
	</div>
    <div class="box box-info">
        <div class="box-header">
            
            <!-- tools box -->
            <div class="pull-right box-tools">
                <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i
                        class="fa fa-times"></i></button>
            </div>
            <!-- /. tools -->
        </div>
        <div class="box-body">
            <form action="/request/request/<?= $request['id'] ?>" method="post">
                <input type="hidden" name="id" value="<?= $request['id'] ?>">
                <div class="form-group">
                    <input type="text" class="form-control" name="tittle" placeholder="Название" value="<?=$request['tittle']?>" />
                </div>
                <div class="form-group">
                    <input type="tel" class="form-control" name="tel" placeholder="Телефон" value="<?=$request['tel']?>" />
                </div>
                <div>
                    <textarea name="description" class="textarea" placeholder="Описание "
                              style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?=$request['description']?></textarea>
                </div>
                <div class="box-footer clearfix">
                    <button class="pull-right btn btn-default" type="submit" name="send">Редактировать <i
                            class="fa fa-arrow-circle-right"></i></button>
                </div>
            </form>
        </div>
    </div>

</section><!-- /.Left col -->
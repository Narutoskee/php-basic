<?php
$page = getPage($connection, $_GET['name']);
if(!$page){
    echo "Article not found";
}
?>


<div class="content">
    <div class="animated fadeIn">


        <div class="row">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Добавить</strong> статью
                    </div>
                    <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Название статьи</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="name" class="form-control" value="<?=$page['name']?>"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Содержание статьи</label></div>
                                <div class="col-12 col-md-9"><textarea name="content" id="textarea-input" rows="9" placeholder="Content..." class="form-control"><?=$page['content']?></textarea></div>
                                <script>
                                    CKEDITOR.replace('content');
                                </script>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-9">
                                    <div class="form-check">
                                        <div class="checkbox">
                                            <label for="checkbox1" class="form-check-label ">
                                                <input type="checkbox" id="checkbox1" name="active" value="true"
                                                       <?=$page['active']?"checked":""?>
                                                       class="form-check-input">Активность
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Reset
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>


    </div><!-- .animated -->
</div><!-- .content -->
<?php
$catlist = getCatList($connection);
?>

<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Stripped Table</strong>
                    </div>
                    <div class="card-body">
                        <a href="?action=add_category" class="btn btn-info">Создать категорию</a>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Название категории</th>
                                <th scope="col">Действие</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($catlist as $cat):?>
                            <tr>
                                <th scope="row"><?=$cat['catid']?></th>
                                <td><?=$cat['catname']?></td>
                                <td>Edit</td>
                            </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->
<?php
$pages = getList($connection);
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
                        <a href="?action=add_page" class="btn btn-info">Создать</a>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Название статьи</th>
                                <th scope="col">Действие</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($pages as $page):?>
                            <tr>
                                <th scope="row"><?=$page['id']?></th>
                                <td><?=$page['name']?></td>
                                <td>
                                    <a href="?action=edit_page&id=<?=$page['id']?>">Edit</a>
                                </td>
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
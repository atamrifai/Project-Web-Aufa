<?= $this->extend('admin'); ?>
<?= $this->section('content'); ?>
<h1>Edit</h1>
<div class="row">
    <div class="col-lg-12 mb-30">
        <div class="portlet-box">
            <div class="portlet-header flex-row flex d-flex align-items-center">
                <div class="flex d-flex flex-column">
                    <h3>List Slide at Home Section</h3>
                    <span>Please take action</span>
                </div>

            </div>
            <div class="portlet-body no-padding">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Sub Title</th>
                            <th>Picture</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;  ?>
                        <?php foreach ($tb_home as $home) : ?>
                            <tr>

                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $home['title_slide']; ?></td>
                                <td><?= $home['sub_title_slide']; ?></td>
                                <td><?= $home['picture_slide']; ?></td>
                                <td>
                                    <a href="<?= $base_url ?>/4543523/<?= $home['slug']; ?>" class="btn btn-warning">Detail</a>
                                </td>
                            </tr>

                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
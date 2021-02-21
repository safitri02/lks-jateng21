<?= get_header(); ?>
<?= the_post(); ?>
<div class="container">
    <div class="detail">
        <div class="row content-center mt-5">
            <div class="col-md-10">
                <h2><?= the_title() ?></h2>
                <div class="subtitle">
                    <p>Kategori : <?= the_category(',') ?></p>
                    <p>Tangal Posting : <?= the_date() ?></p>
                </div>
                <div class="content mt-3">
                    <?= the_content(); ?>
                </div>
            </div>
        </div>
    </div>
</div>


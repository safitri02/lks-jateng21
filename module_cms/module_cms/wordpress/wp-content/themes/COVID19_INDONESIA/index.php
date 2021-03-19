<?= get_header(); ?>

<div class="jumbotron">
     <div class="row">
         <div class="col-md-6">
             <div class="slogan">
                 <h1>Bagaimana cara mencegah COVID-19 dan tetap aman?</h1>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt maxime nesciunt quas veniam rem unde harum molestias enim. Nam, ea facilis? Exercitationem cupiditate doloremque ratione, provident perferendis ipsa obcaecati dolorem?</p>

                 <a href="#" class="btn mt-5" style="margin-top:50px;">Selengkapnya</a>
             </div>
         </div>
         <div class="col-md-6">
             <div class="img">
                 <img src="<?= get_bloginfo('stylesheet_directory') ?>/asset/img/1.jpg">
             </div>
         </div>
     </div>
 </div>

<div class="container mb-5">
<div class="covid">
    <div class="row">
        <div class="col-md-6">
            <img src="<?= get_bloginfo('stylesheet_directory') ?>/asset/img/covid.jpg">
        </div>
    <div class="col-md-6">
        <div class="capt mt-5">
            <h4 class="text-biru mb-3">Tentang Virus Corona</h4>
            <h2 class="judul"> Apa Itu virus corona?</h2>
            <p class="p mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi debitis quia nam! Eaque sit aliquam aliquid tenetur. Amet voluptates nobis quas, ipsa enim vitae numquam nesciunt earum ratione iste sint!</p>
            <p class="p">Yet way get cold spot its week. Almost do am or limits hearts. Resolve parties but why she shewing Are off under folly death wrote cause her way spite. Plan upon yet way get cold spot its week. Almost do am or limits hearts. Resolve parties but why she shewing Jennings</p>
        </div>
    </div>
</div>
</div>

    <h2 class="text-center mt-5 mb-5 text-biru">Berita Terbaru COVID-19</h2>
    <div class="pencegahan">
    <div class="row">

    <?php
    $query = new WP_Query([
        'category_name' => 'news-updates',
        'post_type' => 'post',
        'post_per_page' => 3,
        'post_status' => 'publish'
        ]);

        if($query->have_posts()){
            while($query->have_posts()){
                $query->the_post();
        
        ?>

            <div class="col-md-4">
                <div class="card">
                    <h3 style="margin-bottom:20px;"><a href="<?= the_permalink() ?>"> <?= the_title(); ?> </a></h3>
                    <p><?= substr(get_the_excerpt(), 0, 150) ?>... <a href="<?= the_permalink(); ?>">Lanjut Baca</a></p>
                </div>
            </div>

        <?php 
            }
        }
    ?>
    
<div class="event">
<h2 class="text-center mt-5 mb-5 text-biru">Semua Events COVID-19</h2>
    <div class="row">
        
<?php 
 $query = new WP_Query([
    'category_name' => 'covid-19-events',
    'post_type' => 'post',
    'post_per_page' => 3,
    'post_status' => 'publish'
 ]);

if($query->have_posts()){
    while($query->have_posts()){
        $query->the_post();

?>

    <div class="col-md-4">
        <div class="card">
            <h3><a href="<?= the_permalink(); ?>"> <?= the_title(); ?> </a></h3>
            <p><?= substr(get_the_excerpt(), 0, 200) ?>.... <a href="<?= the_permalink(); ?>">Lanjut baca</a></p>
        </div>
    </div>

    <?php 
    }
}

?>

    </div>
</div> 


        </div>
    </div>
</div>

<?= get_footer(); ?>

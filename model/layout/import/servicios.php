    
<?php 

$servicios = json_decode(file_get_contents("data/dataService.json") , true);
    
?>
    <section class="popular-categories section-gap">
        <div class="container">
            <div class="categories-header">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="common-heading mb-30">
                            <h2 class="title">Servicios Populares</h2>
                        </div>
                    </div>
                    <div class="col-auto">
                        <a href="#" class="main-btn mb-30">Donar ahora <i
                                class="far fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center fancy-icon-boxes">

            <?php foreach($servicios as $servicio): ?>
                <div class="col-xl-4 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="0s">
                    <div class="fancy-box-item mt-30">
                        <div class="icon">
                            <i class="<?= $servicio["icon"] ?>"></i>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="project-details.html"><?= $servicio["name"] ?></a></h4>
                            <p><?= $servicio["desc"] ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
            </div>
        </div>
    </section>
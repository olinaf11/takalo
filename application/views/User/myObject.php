 <!-- Normal Breadcrumb Begin -->
 <section class="normal-breadcrumb set-bg" data-setbg="img/normal-breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                        <h2>Mes Produits</h2>
                        <p>Ici vous retrouverez vos produits.</p>
                    </div>
                </div>
            </div>
        </div>
 </section>
    <!-- Normal Breadcrumb End -->

    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <?php foreach ($listObjet as $objet){ ?>
                            <div class="col-lg-6 col-md-6 ">
                                <div class="blog__item set-bg" data-setbg="<?php echo base_url('assets/img/'.$objet['lien'])?>"></div>
                                <div class="product__item__text">
                                    <ul>
                                        <li><a href="<?php echo base_url('Detail?idObjet='.$objet['idObjet'])?>">Modifier</a></li>
                                        <li><a href="#" style="color:red;">Supprimer</a></li>
                                    </ul>
                                    <h5><a href="#"><?=$objet['nomObjet']?></a></h5>
                                </div>
                            </div>
                        <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
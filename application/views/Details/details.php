<!-- Anime Section Begin -->
    <section class="anime-details spad">
        <div class="container">
            <div class="anime__details__content">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="anime__details__pic set-bg" data-setbg="<?php echo base_url('assets/img/'.$objet['lien'])?>">
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="anime__details__text">
                            <div class="anime__details__title">
                                <h3><?=$objet['nomObjet']?></h3>
                                <span><?=$objet['nomUser']?></span>
                            </div>
                            <div class="anime__details__btn">
                                <div class="login__form">
                                   <form method="get" action="<?=base_url('')?>">
                                       <div class="input__item">
                                            <input type="text" value="<?=$objet['nomObjet']?>">
                                       </div>
                                       <div class="input__item">
                                            <input type="number" value="<?=$objet['prix']?>">
                                       </div>
                                       <div class="input__item">
                                            <input type="categorie" value="<?=$objet['nomCat']?>">
                                       </div>
                                       <input type="submit" class="site-btn" value="Modifiez">
                                   </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
       
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div class="anime__details__review">
                    <div class="section-title">
                        <h5>Historique/</h5>
                        <h5>Derniers Proprietaire:</h5>
                    </div>
                    <div class="anime__review__item">

                        <div class="anime__review__item__text">
                            <h6>Louis Tyler - <span>20 Hour ago</span></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Js Plugins -->
        <script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js')?>"> </script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"> </script>
    <script src="<?php echo base_url('assets/js/player.js')?>"> </script>
    <script src="<?php echo base_url('assets/js/jquery.nice-select.min.js')?>"> </script>
    <script src="<?php echo base_url('assets/js/mixitup.min.js')?>"> </script>
    <script src="<?php echo base_url('assets/js/jquery.slicknav.js')?>"> </script>
    <script src="<?php echo base_url('assets/js/owl.carousel.min.js')?>"> </script>
    <script src="<?php echo base_url('assets/js/main.js')?>"> </script>

    </body>

    </html>
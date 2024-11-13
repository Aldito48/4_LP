<footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="footer-brand">
                <a href="<?=base_url()?>about.php" class="logo">
                    <img src="<?=base_url()?>assets/images/doctrip-white.png" alt="DocTrip logo" />
                </a>

                <p class="footer-text">
                    <?=footerFormat($dataProfile['about'])?>
                </p>
            </div>

            <div class="footer-contact">
                <h4 class="contact-title">Hubungi Kami</h4>

                <ul>
                    <?php
                        if (mysqli_num_rows($resultWA) > 0) {
                            while ($dataWA = mysqli_fetch_array($resultWA)) {
                    ?>
                                <li class="contact-item">
                                    <ion-icon name="logo-whatsapp"></ion-icon>

                                    <a
                                        href="https://wa.me/<?=waFormat($dataWA['account'])?>"
                                        target="_blank"
                                        class="contact-link"
                                    ><?=numberFormat($dataWA['account'])?> (<?=$dataWA['name']?>)</a>
                                </li>
                    <?php
                            }
                        }
                    ?>
                </ul>
            </div>

            <div class="footer-form">
                <h4 class="contact-title">Alamat Kami</h4>
                <a href="<?=$dataProfile['location']?>" class="contact-link" target="_blank"><?=$dataProfile['address']?></a>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <p class="copyright">
                <?=date('Y')?> &copy; <a href=""><?=$dataProfile['name']?></a>. All rights reserved.
            </p>

            <ul class="footer-bottom-list">
                <li>
                    <a href="#" class="footer-bottom-link">Privacy Policy</a>
                </li>

                <li>
                    <a href="#" class="footer-bottom-link">Term & Condition</a>
                </li>

                <li>
                    <a href="#" class="footer-bottom-link">FAQ</a>
                </li>
            </ul>
        </div>
    </div>
</footer>
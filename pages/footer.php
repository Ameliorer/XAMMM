<footer>

    <a href="/~XAMMM/pages/avis_clients.php" class="carou">
        <?php
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/~XAMMM/lib/footer.php";
        include_once($path);
        carousel ();
        ?>
    </a>

    <div class="contact">
        <h2>Nous contacter</h2>
        <form class="contactForm" method="post" id="contactForm" name="contactForm">
            <div class="row">
                <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Nom et Prénom">
                </div>
                <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet du mail">
                </div>
                <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 form-group">
                    <textarea class="form-control" name="message" id="message" cols="30" rows="5" placeholder="Ecrivez votre message"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input type="submit" value="Envoyez" class="btn btn-primary rounded-0 py-2 px-4">
                    <span class="submitting"></span>
                </div>
            </div>
        </form>

        <div id="form-message-warning mt-4"></div>
        <div id="form-message-success">
            Votre message a été envoyé, Merci !
        </div>

    </div>

    <div class="catch">
        <div class="social_media">
            <a href="https://www.facebook.com/yallahskydive">
                <img src="/~XAMMM/images/logo-facebook.png">
            </a>

            <a href="https://www.instagram.com/parachutisme_71/">
                <img src="/~XAMMM/images/logo-instagram.png">
            </a>

            <a href="https://www.yumping.fr/parachutisme/diagonale-chute-libre--e19681999">
                <img src="/~XAMMM/images/logo-yumping.png">
            </a>
        </div>
        <h2>4000 m, 200 km/h, 50 sec</h2>
        <div class="links">
            <a href="/~XAMMM/pages/legal_notice.php" class="link">
                mentions légales
            </a>
            <a href="/~XAMMM/pages/CGV.php" class="link">
                conditions générales de vente
            </a>
        </div>
        <h4> tous droits réservés © XAMMM | 2022</h4>
    </div>



    <script src='/~XAMMM/scripts/axios.min.js'></script>
    <script src="/~XAMMM/scripts/footer.js"></script>
    <link rel="stylesheet" href="/~XAMMM/styles/footer.css">

</footer>


</body>
</html>

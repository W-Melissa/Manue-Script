<?php 
session_start();
require_once "header.php";
?>
        <main class="m-5 p-5">
            <h2 class="mb-5">Me Contacter</h2>
            <?php if(isset($_SESSION['newsession'])): 
                session_unset()?>
                <p class="bg-info text-center fw-bold bg-opacity-50 py-3">Votre message a bien été envoyé</p>
            <?php endif; ?>
            <div class="row">
                <div id="leftRow" class="col-xl-4">
                    <p class="m-xl-5 m-0"><span class="fw-bold"> Par E-Mail :</span> contact@manuescript.fr</p>
                    <div class="row">
                        <div class="text-center d-none d-xl-block">
                            <img src="../images/contact.jpg" alt="Image d'illustration" class="rounded-circle">
                        </div>
                        <div class="d-flex align-items-center ms-xl-5">
                            <p class="fw-bold mb-0">Retrouvez moi également sur les réseaux sociaux</p>
                            <a href="https://www.instagram.com/manue.script/"><img src="../images/insta_contact.png" alt="Logo Instagram" height="50px"></a>
                            <a href="https://www.linkedin.com/in/emmanuelle-ordoquy-thuaux-manue-script-6a8892233/"><img src="../images/linkedin_contact.png" alt="Logo LinkedIn" height="50px"></a>
                        </div>
                    </div>
                </div>
                <form action="../model/registrationmail.php" method="POST" class="my-5 offset-xl-1 col-xl-7" id="rightRow">
                    <div class="mb-3">
                        <label for="nom" class="form-label">Votre nom :</label>
                        <input type="text" class="form-control" id="nom" placeholder="Nom" name="nom" maxlength="255" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Votre email :</label>
                        <input type="email" class="form-control" id="email" placeholder="exemple@email.com" name="email" maxlength="255" required>
                    </div>
                    <div class="mb-3">
                        <label for="objMsg" class="form-label">Objet :</label>
                        <input type="text" class="form-control" id="objetMsg" placeholder="Sujet de votre message..." name="objMsg" maxlength="255" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Votre message :</label>
                        <textarea class="form-control" id="message" rows="3" name="message" maxlength="2000" required></textarea>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary bg-info border-info" type="submit" name="submit">ENVOYER</button>
                    </div>
                </form>
            </div>
        </main>
        <div id="contact2" class="d-none d-xl-block"></div>
        <footer class="container-fluid p-5">
            <div class="row">
                <div id="menuFooter" class="col-12 col-xl-3 offset-xl-1 d-none d-xl-block">
                    <h3>MENU</h3>
                    <ul class="ps-0">
                        <li>Accueil</li>
                        <li>Rédaction web</li>
                        <li>Mon histoire</li>
                        <li>Me contacter</li>
                    </ul>
                </div>
                <div id="scheduleFooter" class="col-11 col-md-5 col-xl-3 offset-1 d-none d-md-block">
                    <h3>HORAIRES</h3>
                    <p>Lundi et Mardi de 8h30 à 16h30 <br>
                    Jeudi et Vendredi de 8h30 à 16h30</p>
                    <p id="siret" class="fw-bold">Siret : 91178911300014</p>
                </div>
                <div id="contactFooter" class="col-11 col-md-5 col-xl-3 offset-1">
                    <h3>Manue'Script</h3>
                    <p>Emanuelle Ordoquy - Thuaux <br>
                    Rédactrice Web SEO - Correctrice <br>
                    Située entre les Landes et le Pays Basque</p>
                </div>
            </div>
        </footer>
        <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!-- Bootstrap End -->
    </body>
</html>
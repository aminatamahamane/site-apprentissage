<html lang="html">

<head>
    <link rel="stylesheet" href="contact.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>


<body>
    <div>
        <nav class="navbar">
            <div class="max-width">
                
                <div class="menu-btn">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </nav>

    </div>
    <!-- contact section  -->
    <section class="contact" id="contact" style="background: #525050;">
        <div class="max-width">
            <h2 class="title" style="color: white;">Contactez-nous</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Nom</div>
                                <div class="sub-title">technoCours</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Addresse</div>
                                <div class="sub-title">HAMDALLAYE, MAli</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">technocours@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
               <div class="column right">
    <div class="text">Message</div>
    <form action="bail.php" method="POST">
        <div class="fields">
            <div class="field name">
                <input type="text" placeholder="Nom" required>
            </div>
            <div class="field email">
                <input type="email" placeholder="Email" required>
            </div>
        </div>
        <div class="field">
            <input type="text" placeholder="Sujet" required>
        </div>
        <div class="field textarea">
            <textarea cols="30" rows="10" placeholder="Message.." required></textarea>
        </div>
        <div class="button-area">
            <button type="submit">Envoyer</button>
        </div>
    </form>
</div>

            </div>
        </div>
    </section>




</body>

</html>
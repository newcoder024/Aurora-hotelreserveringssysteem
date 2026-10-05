<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact - Aurora Hotel</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>

<?php include 'header.php'; ?>

<main>

    <!-- Contact intro -->
    <section class="contact-hero">
        <div class="contact-hero-content">
            <span class="contact-label">HOTEL AURORA GOUDA</span>
            <h1>Contact</h1>
            <p>
                We helpen u graag. Neem contact op via onderstaand<br>
                formulier of bezoek ons direct in het hart van Gouda.
            </p>
        </div>
    </section>


    <!-- Contact gedeelte -->
    <section class="contact-section">

        <div class="contact-container">

            <!-- Gegevens links -->
            <div class="contact-info">

                <h2>Onze gegevens</h2>

                <div class="contact-item">
                    <div class="contact-icon">⌖</div>
                    <div>
                        <span class="contact-item-title">ADRES</span>
                        <p>
                            Markt 1, 2801 JJ Gouda<br>
                            Nederland
                        </p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">♧</div>
                    <div>
                        <span class="contact-item-title">TELEFOON</span>
                        <p>+31 (0)182 123 456</p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">✉</div>
                    <div>
                        <span class="contact-item-title">E-MAIL</span>
                        <p>info@hotelauroragouda.nl</p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">◷</div>
                    <div>
                        <span class="contact-item-title">RECEPTIE</span>
                        <p>Dagelijks 07:00 – 23:00</p>
                    </div>
                </div>


                <div class="contact-line"></div>

                <div class="check-info">
                    <h3>Check-in &amp; Check-out</h3>

                    <div class="check-columns">

                        <div>
                            <span>CHECK-IN</span>
                            <p>vanaf 15:00</p>
                        </div>

                        <div>
                            <span>CHECK-OUT</span>
                            <p>voor 11:00</p>
                        </div>

                    </div>
                </div>

            </div>


            <!-- Formulier rechts -->
            <div class="contact-form">

                <form action="#" method="post">

                    <div class="contact-form-row">

                        <div class="contact-field">
                            <label for="naam">NAAM *</label>
                            <input
                                type="text"
                                id="naam"
                                name="naam"
                                placeholder="Uw naam"
                                required
                            >
                        </div>

                        <div class="contact-field">
                            <label for="email">E-MAIL *</label>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                placeholder="uw@email.nl"
                                required
                            >
                        </div>

                    </div>


                    <div class="contact-field">
                        <label for="onderwerp">ONDERWERP</label>
                        <input
                            type="text"
                            id="onderwerp"
                            name="onderwerp"
                            placeholder="Bijv. Reservering, Faciliteiten, Overig"
                        >
                    </div>


                    <div class="contact-field">
                        <label for="bericht">BERICHT *</label>
                        <textarea
                            id="bericht"
                            name="bericht"
                            placeholder="Uw bericht..."
                            required
                        ></textarea>
                    </div>


                    <button type="submit" class="contact-submit">
                        VERSTUUR BERICHT →
                    </button>

                </form>

            </div>

        </div>

    </section>

</main>

<?php include 'footer.php'; ?>

</body>
</html>
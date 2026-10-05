

<!doctype html>
<html lang="nl">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Aurora Hotel</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>

<?php include 'header.php'; ?>

<?php if (isset($_GET["gelukt"])): ?>
  <p class="form-succes">Bedankt! Je reservering is ontvangen. Je krijgt binnenkort een bevestiging via email.</p>
<?php endif; ?>

<main class="page">
  <h2 class="page-title">Reserverings-formulier</h2>

  <div class="form-card">
    <form action="reservering-db.php" method="post">

      <div class="form-row two-col">
        <div class="field">
          <label for="naam">Naam *</label>
          <input type="text" id="naam" name="naam" required />
        </div>
        <div class="field">
          <label for="achternaam">Achternaam *</label>
          <input type="text" id="achternaam" name="achternaam" required />
        </div>
      </div>

      <div class="form-row">
        <div class="field">
          <label for="email">Email *</label>
          <input type="email" id="email" name="email" required />
        </div>
      </div>

      <div class="form-row three-col">
        <div class="field">
          <label for="telefoon">Telefoon *</label>
          <input type="tel" id="telefoon" name="telefoon" required />
        </div>
        <div class="field">
          <label for="volwassenen">Volwassenen</label>
          <select id="volwassenen" name="volwassenen">
            <option value="">Select</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
          </select>
        </div>
        <div class="field">
          <label for="kinderen">Kinderen</label>
          <select id="kinderen" name="kinderen">
            <option value="">Select</option>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
          </select>
        </div>
      </div>

      <div class="form-row">
        <div class="field field-narrow">
          <label for="huisdieren">Huisdieren</label>
          <select id="huisdieren" name="huisdieren">
            <option value="">Select</option>
            <option value="ja">Ja</option>
            <option value="nee">Nee</option>
          </select>
        </div>
      </div>

      <div class="form-row two-col">
        <div class="field">
          <label for="kamer">Gekozen kamer *</label>
          <select id="kamer" name="kamer" required>
            <option value="eenpersoons">Eenpersoonskamer</option>
            <option value="tweepersoons" selected>Tweepersoonskamer</option>
          </select>
        </div>
        <div class="field">
          <label for="aantal_kamers">Aantal kamers *</label>
          <input type="number" id="aantal_kamers" name="aantal_kamers" min="1" value="1" required />
        </div>
      </div>

      <div class="form-row two-col">
        <div class="field">
          <label for="aankomstdatum">Check-in *</label>
          <input type="date" id="aankomstdatum" name="aankomstdatum" required />
        </div>
        <div class="field">
          <label for="vertrekdatum">Check-out *</label>
          <input type="date" id="vertrekdatum" name="vertrekdatum" required />
        </div>
      </div>

      <button type="submit" class="submit-btn">Boek nu</button>

      <p class="form-note">Let op! Wijzigingen of annuleringen kunnen alleen telefonisch behandeld worden</p>
    </form>
  </div>
</main>

<?php include 'footer.php'; ?>

</body>
</html>
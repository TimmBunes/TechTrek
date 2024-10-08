<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
      <!-- Logo -->
      <a class="navbar-brand" href="<?= base_url() ?>">
      <img src="images/GoGustoLogo.png" alt="Logo" style="width: 50px;">
      </a>
      <a class="brand-name nav-link" href="landing.php">GoGusto</a>
      <!-- Toggler for mobile view -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Links -->
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active custom-nav-link" href="<?= base_url() ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link custom-nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link custom-nav-link" aria-current="page" href="tourpackage.html">Tour Package</a>
          </li>
          <li class="nav-item">
            <a class="nav-link custom-nav-link" href="termsandcon.html">Terms & Conditions</a>
          </li>
          <li class="nav-item"></li>
            <a class="nav-link custom-nav-link" href="contactUs.html">Contact Us</a>
          </li>
          <button class="btn custom-btn" id="exploreBtn" onclick="window.location.href='quote.html'">Plan Your Trip</button>
        </ul>
      </div>
    </div>
  </nav>
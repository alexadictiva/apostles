<div class="wrapper">
  <header>
    <section class="brand">
      <a href="./index.php">
        <img src="./assets/images/logo.png" alt="Logo" />
        <span class="titleBolder">
          <strong> THE TWELVE APOSTLES</strong> INC.</span
        >
      </a>
    </section>
    <section class="menu">
      <button class="menuBottom" id="menuBottom">
        <img src="./assets/icon/menuIcon.svg" />
      </button>
      <div class="navContainer" id="navContainer">
        <nav class="menuContainer">
          <ul class="menuDropdown">
            <li class="menuItem">
              <a class="menuLink" href="./about.php">About us</a>
            </li>
            <li class="menuItem">
              <a class="menuLink" href="./portfolio.php">Portfolio</a>
            </li>
            <li class="menuItem">
              <a class="menuLink" href="./distribution.php">Distribution</a>
            </li>
            <li class="menuItem">
              <a class="menuLink" href="./network.php">Network</a>
            </li>
            <li class="menuItem">
              <a class="menuLink" href="./index.php#contactus">Contact us</a>
            </li>
          </ul>
        </nav>
      </div>
    </section>
    <script>
      let botonMenu = document.querySelector("#menuBottom");
      botonMenu.addEventListener("click", mostrarMenu);

      let navContainer = document.querySelector(".navContainer");
      let body = document.querySelector("body");
      let container = document.querySelector("main");

      function mostrarMenu() {
        navContainer.classList.toggle("hidden");
        body.classList.toggle("showed");
      }
    </script>
  </header>
</div>

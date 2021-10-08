<?php
include './components/head.php';
include './components/header.php';

?>

<main>
  <section id="network">
    <h1 class="title">NETWORK</h1>
    <hr />
    <div class="map-container">
      <picture>
        <source
          media="(max-width: 414px)"
          srcset="./assets/images/map/mobile/mapMobile.jpg"
        />
        <source
          media="(max-width: 768px)"
          srcset="./assets/images/map/tablet/mapTablet.jpg"
        />
        <source
          media="(min-width: 769px)"
          srcset="./assets/images/map/desktop/mapDesktop.jpg"
        />
        <img src="./assets/images/map/mobile/mapMobile.jpg" alt="Map" />
      </picture>
    </div>
    <div class="description-network">
      <p>
        The Twelve Apostles Inc. has organized the logistic of the company, in
        different strategic locations in order to achieve regional integration
        and create an ideal resource for this kind of business.
        <br />
        Our head office is located in <span>Panama City</span> (Panama) and the
        distribution centers branches are located in different cities achieving
        vertical integration: <span>Asunción</span> (Paraguay),
        <span>Buenos Aires</span> (Argentina) and
        <span>Montevideo</span> (Uruguay).
      </p>
    </div>
    <div class="description-cloud-container">
      <div class="description-cloud-content">
        <p>
          ¨WE ARE A REGIONAL DISTRIBUTOR OF INTERNATIONAL BRANDS SPECIALIZING IN
          MULTIPLE MARKET CHANNELS, RELATED TO MARKET LEADERS AND ALWAYS
          ACHIEVING TO PROVIDE THE BEST PRODUCT / PRICE COMBINATION¨
        </p>
      </div>
      <div class="description-cloud-author">
        <p>The Twelve Apostles Inc. Director</p>
      </div>
    </div>
  </section>
</main>

<?php
include './components/footer.php';
?>

<?php
include './components/head.php';
include './components/header.php';

?>

<main>
  <section id="distribution">
    <h1 class="title">DISTRIBUTION</h1>
    <hr />
    <div class="distribution-container">
        <div class="distribution-cards-container">
        <article class="card-container">
          <div class="card-container-image">
            <picture>
              <source
                media="(max-width: 414px)"
                srcset="
                  ./assets/images/distribution/mobile/independentBoutiques.jpg
                "
              />
              <source
                media="(max-width: 768px)"
                srcset="
                  ./assets/images/distribution/tablet/independentBoutiques.jpg
                "
              />
              <source
                media="(min-width: 769px)"
                srcset="
                  ./assets/images/distribution/desktop/independentBoutiques.jpg
                "
              />
              <img
                src="./assets/images/distribution/mobile/independentBoutiques.jpg"
                alt=""
              />
            </picture>
          </div>
          <div class="card-container-title">
            <h3>Independent Boutiques</h3>
          </div>
        </article>
        <article class="card-container">
          <div class="card-container-image">
            <picture>
              <source
                media="(max-width: 414px)"
                srcset="
                  ./assets/images/distribution/mobile/retailChainStores.jpg
                "
              />
              <source
                media="(max-width: 768px)"
                srcset="
                  ./assets/images/distribution/tablet/retailChainStores.jpg
                "
              />
              <source
                media="(min-width: 769px)"
                srcset="
                  ./assets/images/distribution/desktop/retailChainStores.jpg
                "
              />
              <img
                src="./assets/images/distribution/mobile/retailChainStores.jpg"
                alt=""
              />
            </picture>
          </div>
          <div class="card-container-title">
            <h3>Retail Chain Stores</h3>
          </div>
        </article>
        <article class="card-container">
          <div class="card-container-image">
            <picture>
              <source
                media="(max-width: 414px)"
                srcset="./assets/images/distribution/mobile/specialtyStores.jpg"
              />
              <source
                media="(max-width: 768px)"
                srcset="./assets/images/distribution/tablet/specialtyStores.jpg"
              />
              <source
                media="(min-width: 769px)"
                srcset="
                  ./assets/images/distribution/desktop/specialtyStores.jpg
                "
              />
              <img
                src="./assets/images/distribution/mobile/specialtyStores.jpg"
                alt=""
              />
            </picture>
          </div>
          <div class="card-container-title">
            <h3>Specialty Store</h3>
          </div>
        </article>
        <article class="card-container">
          <div class="card-container-image">
            <picture>
              <source
                media="(max-width: 414px)"
                srcset="./assets/images/distribution/mobile/corporateSales.jpg"
              />
              <source
                media="(max-width: 768px)"
                srcset="./assets/images/distribution/tablet/corporateSales.jpg"
              />
              <source
                media="(min-width: 769px)"
                srcset="./assets/images/distribution/desktop/corporateSales.jpg"
              />
              <img
                src="./assets/images/distribution/mobile/corporateSales.jpg"
                alt=""
              />
            </picture>
          </div>
          <div class="card-container-title">
            <h3>Corporate Sales</h3>
          </div>
        </article>
        <article class="card-container">
          <div class="card-container-image">
            <picture>
              <source
                media="(max-width: 414px)"
                srcset="
                  ./assets/images/distribution/mobile/departmentStores.jpg
                "
              />
              <source
                media="(max-width: 768px)"
                srcset="
                  ./assets/images/distribution/tablet/departmentStores.jpg
                "
              />
              <source
                media="(min-width: 769px)"
                srcset="
                  ./assets/images/distribution/desktop/departmentStores.jpg
                "
              />
              <img
                src="./assets/images/distribution/mobile/departmentStores.jpg"
                alt=""
              />
            </picture>
          </div>
          <div class="card-container-title">
            <h3>Department Store</h3>
          </div>
        </article>
        <article class="card-container">
          <div class="card-container-image">
            <picture>
              <source
                media="(max-width: 414px)"
                srcset="./assets/images/distribution/mobile/eCommerce.jpg"
              />
              <source
                media="(max-width: 768px)"
                srcset="./assets/images/distribution/tablet/eCommerce.jpg"
              />
              <source
                media="(min-width: 769px)"
                srcset="./assets/images/distribution/desktop/eCommerce.jpg"
              />
              <img
                src="./assets/images/distribution/mobile/eCommerce.jpg"
                alt=""
              />
            </picture>
          </div>
          <div class="card-container-title">
            <h3>E-commerce</h3>
          </div>
        </article>
      </div>
      <div class="distribution-description-container">
        <p>
          The Twelve Apostles Inc. has established commercial relationships with
          various kind of clients thanks to the requirement of the new
          distribution landscape. This allows brands to maximize the reach on a
          global scale. We rely on relationships with market-leaders to provide the perfect price/product mix. Currently, Twelve Apostles Inc. distributes the multiple brand products over a variety of market channels.
        </p>
      </div>
    
    </div>
  </section>
</main>

<?php
include './components/footer.php';
?>

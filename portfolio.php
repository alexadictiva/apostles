<?php
include './components/head.php';
include './components/header.php';

?>
<main>
  <section id="portfolio">
    <h1 class="title">PORTFOLIO</h1>
    <hr />
    <div
      class="
        swiper
        mySwiper
        swiper-initialized swiper-horizontal swiper-pointer-events
      "
    >
      <div
        class="swiper-wrapper"
        id="swiper-wrapper-10ca7effd10de9e6e0"
        aria-live="polite"
      >
        <!-- Start Image1 -->
        <div
          class="swiper-slide swiper-slide-active slide1"
          role="group"
          aria-label="1 / 6"
          style="width: 320px"
        >
          <div class="portfolio-image portfolio-image1"></div>
          <div class="alignement">
            <div>
              <h4>WATCHES</h4>
              <p>Mid-Tier, Fashion & Luxury</p>
            </div>

            <div
              class="
                swiper-pagination
                swiper-pagination-fraction
                swiper-pagination-horizontal
              "
            >
              <!-- <span class="swiper-pagination-current"> 1</span> /
              <span class="swiper-pagination-total">6</span> -->
            </div>
          </div>
        </div>
        <!-- Finish Image1 -->
        <!-- Start Image2 -->
        <div
          class="swiper-slide swiper-slide-active slide2"
          role="group"
          aria-label="2 / 6"
          style="width: 320px"
        >
          <div class="portfolio-image portfolio-image2"></div>
          <div class="alignement">
            <div>
              <h4>JEWLERY</h4>
              <p>Low-Tier, Mid-Tier & Fashion</p>
            </div>

            <div
              class="
                swiper-pagination
                swiper-pagination-fraction
                swiper-pagination-horizontal
              "
            >
              <span class="swiper-pagination-current"> 1</span> /
              <span class="swiper-pagination-total">6</span>
            </div>
          </div>
        </div>
        <!-- Finish Image2 -->
        <!-- Start Image3 -->
        <div
          class="swiper-slide swiper-slide-active slide3"
          role="group"
          aria-label="3 / 6"
          style="width: 320px"
        >
          <div class="portfolio-image portfolio-image3"></div>
          <div class="alignement">
            <div>
              <h4>HANDBAGS</h4>
              <p>Leather & Fashion</p>
            </div>

            <div
              class="
                swiper-pagination
                swiper-pagination-fraction
                swiper-pagination-horizontal
              "
            >
              <span class="swiper-pagination-current"> 1</span> /
              <span class="swiper-pagination-total">6</span>
            </div>
          </div>
        </div>
        <!-- Finish Image3 -->
        <!-- Start Image4 -->
        <div
          class="swiper-slide swiper-slide-active slide4"
          role="group"
          aria-label="4 / 6"
          style="width: 320px"
        >
          <div class="portfolio-image portfolio-image4"></div>
          <div class="alignement">
            <div>
              <h4>TRAVEL GEAR</h4>
              <p>Leather & Fashion</p>
            </div>

            <div
              class="
                swiper-pagination
                swiper-pagination-fraction
                swiper-pagination-horizontal
              "
            >
              <span class="swiper-pagination-current"> 1</span> /
              <span class="swiper-pagination-total">6</span>
            </div>
          </div>
        </div>
        <!-- Finish Image4 -->
        <!-- Start Image5 -->
        <div
          class="swiper-slide swiper-slide-active slide5"
          role="group"
          aria-label="5 / 6"
          style="width: 320px"
        >
          <div class="portfolio-image portfolio-image5"></div>
          <div class="alignement">
            <div>
              <h4>HOME GOODS</h4>
              <p>Appliances, Kitchen Ware, Table Ware & Cook Ware</p>
            </div>

            <div
              class="
                swiper-pagination
                swiper-pagination-fraction
                swiper-pagination-horizontal
              "
            >
              <span class="swiper-pagination-current"> 1</span> /
              <span class="swiper-pagination-total">6</span>
            </div>
          </div>
        </div>
        <!-- Finish Image5 -->
        <!-- Start Image6 -->
        <div
          class="swiper-slide swiper-slide-active slide6"
          role="group"
          aria-label="6 / 6"
          style="width: 320px"
        >
          <div class="portfolio-image portfolio-image6"></div>
          <div class="alignement">
            <div>
              <h4>&</h4>
              <p>MORE TO COME...</p>
            </div>

            <div
              class="
                swiper-pagination
                swiper-pagination-fraction
                swiper-pagination-horizontal
              "
            >
              <span class="swiper-pagination-current"> 1</span> /
              <span class="swiper-pagination-total">6</span>
            </div>
          </div>
        </div>
        <!-- Finish Image6 -->
      </div>
      <!-- inicio flechas -->
      <div
        class="arrow-next"
        tabindex="0"
        role="button"
        aria-label="Next slide"
        aria-controls="swiper-wrapper-fda3f4823a8469d6"
        aria-disabled="false"
      >
        <img src="./assets/icon/arrow-next.svg" alt="arrow next icon" />
      </div>
      <div
        class="arrow-back"
        tabindex="-1"
        role="button"
        aria-label="Previous slide"
        aria-controls="swiper-wrapper-fda3f4823a8469d6"
        aria-disabled="true"
      >
        <img src="./assets/icon/arrow-back.svg" alt="arrow black icon" />
      </div>
      <!-- fin flechas -->
    </div>
    <div class="portfolio-description">
      <p>
        Our portfolio covers a diverse range of brand categories. As the company
        represents multiple markets, our target end-consumer is to combine an
        excellent product with the best competitive price. In order to be
        successful, we find the best deals from brands by always putting the
        effort in finding the proper product for all the specific customers.
        Currently, The Twelve Apostles Inc. handles over multiple international
        brands and a broad spectrum of product categories.
      </p>
    </div>
  </section>
</main>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
  console.log("si funciona en portafolio");
  var swiper = new Swiper(".mySwiper", {
    loop: true,
    autoplay: true,
    duration: 2500,
    pagination: {
      el: ".swiper-pagination",
      type: "fraction",
    },
    navigation: {
      nextEl: ".arrow-next",
      prevEl: ".arrow-back",
    },
  });
</script>

<?php
include './components/footer.php';
?>

<?php
include './components/head.php';
include './components/header.php';

?>
<main>
  <section id="portfolio">
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
        <div
          class="swiper-slide swiper-slide-active slide1"
          role="group"
          aria-label="1 / 6"
          style="width: 320px"
        >
          <!-- Image1 -->
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
              <span class="swiper-pagination-current"> 1</span> /
              <span class="swiper-pagination-total">6</span>
            </div>
          </div>
        </div>
      </div>
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
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
</script>

<?php
include './components/footer.php';
?>

<?php
include './components/head.php';
include './components/header.php';
?>

<main>
  <section id="intro">
    <div class="intro-container">
      <div class="intro-description-bolder">
        <p>REGIONAL DISTRIBUTOR OF INTERNATIONAL BRANDS</p>
      </div>
      <div class="intro-description-normal">
        <h1>ACHIEVING GROWTH</h1>
      </div>
    </div>
  </section>
  <section class="cards-main-view">
    <article class="card-main card1">
      <h2>PORTFOLIO</h2>
      <p>
        The Twelve Apostles Inc. portfolio covers a diverse range of brand
        categories. As the company represents multiple markets, our target
        end-consumer is to combine an excellent product with the best
        competitive price.
      </p>
      <a href="./portfolio.php" class="read-more-btn">Read More</a>
    </article>
    <article class="card-main card2">
      <h2>DISTRIBUTION</h2>
      <p>
        The Twelve Apostles Inc. has established commercial relationships with
        various kind of clients thanks to the requirement of the new
        distribution landscape. This allows brands to maximize the reach on a
        global scale.
      </p>
      <a href="./distribution.php" class="read-more-btn">Read More</a>
    </article>
    <article class="card-main card3">
      <h2>NETWORK</h2>
      <p>
        The Twelve Apostles Inc. has organized the logistic of the company, in
        different strategic locations in order to achieve regional integration
        and create an ideal resource for this kind of business.
      </p>
      <a href="./network.php" class="read-more-btn">Read More</a>
    </article>
  </section>
  <section class="about-main-view">
    <div class="overlay">
      <h2>ABOUT US</h2>
      <p>
        The Twelve Apostles Inc. is a long experience company in distributing
        international brands. We specialized in regional sale of a wide variety
        of products. During the years we have been in the market, we have
        established solid relationships with our distribution brands and with
        our clients. We always encouraged to bring to our customers the best
        product that is on the global market. Currently, we are specialized in
        distributing a variety of watches, jewelry, handbags, travel gear and
        home goods. Our future vision is to grow with new leading brands, market
        channels and product innovation.
      </p>
      <a href="./about.php" class="read-more-btn">Read More</a>
    </div>
  </section>
  <section id="contactus">
    <h2>CONTACT US</h2>
    <div class="contactus-content">
      <div class="form-container">
        <p>
          Calle 53E World Trade Center <br />
          14th Floor Esc. 1404 <br />
          Panama City, Panama
        </p>
        <p>
          For more information, complete the following form and we will contact
          you shortly.
        </p>
        <form action="POST" id="form">
          <div class="form-control">
            <input type="text" placeholder="Name" id="name" name="name" />
          </div>
          <div class="form-control">
            <input type="mail" placeholder="Email" id="email" name="email" />
          </div>
          <div class="form-control">
            <input
              type="text"
              placeholder="Subject"
              id="subject"
              name="subject"
            />
          </div>
          <div class="form-control">
            <textarea
              name="message"
              id="message"
              cols="30"
              placeholder="Type your message here..."
              rows="10"
            ></textarea>
          </div>
          <button type="submit" class="btn-sumbit">Submit</button>
        </form>
        <a id="mailto" href="mailto:nicolewaingarten@nihebal.com.ar">MAIL</a>
      </div>
      <div class="contactus-description">
        <div class="map-container">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.9103833789372!2d-79.52242598569356!3d8.98039379222216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8faca8e3edc9e20d%3A0x7f7d590dc09caff!2sWorld%20Trade%20Center%20Panama!5e0!3m2!1ses-419!2sar!4v1634491759669!5m2!1ses-419!2sar"  loading="lazy" id="map"></iframe>
        </div>
      </div>
    </div>
  </section>
</main>
<script>
/*Form*/

const form = document
  .querySelector("#form")
  .addEventListener("submit", handleSubmit);
const mailto = document.querySelector("#mailto");

function handleSubmit(event) {
  event.preventDefault();

  const formulario = new FormData(this);
  console.log(formulario.get("name"));
  console.log(formulario.get("email"));
  console.log(formulario.get("subject"));
  console.log(formulario.get("message"));

  mailto.setAttribute(
    "href", `mailto:academiatrucking@gmail.com?subject=${formulario.get("name")}, ${formulario.get("subject")}&body=${formulario.get("email")}, <br/> ${formulario.get("message")}`
  );

  mailto.click();
}

</script>




<?php
include './components/footer.php';
?>

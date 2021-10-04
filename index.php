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
        <form action="POST">
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
      </div>
      <div class="contactus-description">
        <div class="map-container">
          <section id="map"></section>
        </div>
      </div>
    </div>
  </section>
</main>

<script>
  // Google maps
  function initMap() {
    const zoom = 16.8;
    const src = "./assets/icon/marker.svg";
    const lat = "8.9801229";
    const lng = "-79.5204547";
    const url = "https://goo.gl/maps/QJ6FPPMYhuJdxL6u5";
    const center = {
      lat: parseFloat(lat),
      lng: parseFloat(lng),
    };
    const bounds = new google.maps.LatLngBounds();
    const map = new google.maps.Map(document.getElementById("map"), {
      styles,
      zoom,
      center,
      gestureHandling: "cooperative",
      disableDefaultUI: true,
      zoomControl: true,
      mapTypeControl: false,
      scaleControl: false,
      streetViewControl: false,
      rotateControl: false,
      fullscreenControl: true,
    });

    const latLng = new google.maps.LatLng(lat, lng);
    const marker = new google.maps.Marker({
      position: latLng,
      map,
      icon: src,
    });

    google.maps.event.addListener(marker, "click", function () {
      window.open(url);
    });

    bounds.extend(latLng);

    // Marker to fit zoom
    map.panTo(center);
  }

  const styles = [
    {
        "featureType": "administrative",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "lightness": 33
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [
            {
                "color": "#f2e5d4"
            }
        ]
    },
    {
        "featureType": "poi.park",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#c5dac6"
            }
        ]
    },
    {
        "featureType": "poi.park",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "all",
        "stylers": [
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#c5c6c6"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#e4d7c6"
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#fbfaf7"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#acbcc9"
            }
        ]
    }
];
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtl7KXyLNeWMKPLtQ0QWqWXvlbuLEUvqQ&callback=initMap"></script>
<?php
include './components/footer.php';
?>

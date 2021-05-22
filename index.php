<?php include('header.php')?>
    <nav class="breadcrumb">
      <div class="container">
        <ul class="breadcrumb-list">
          <li class="breadcrumb-list__item">
            <a href="index.php" class="breadcrumb-list__link">Home</a>
          </li>
          <li class="breadcrumb-list__item">
            <a href="#" class="breadcrumb-list__link">Flash Offers</a>
          </li>
          <li class="breadcrumb-list__item">Grand Hilton Hotel</li>
        </ul>
      </div>
    </nav>
    <!-- /.breadcrumb -->
    <section class="hotel">
      <div class="container">
        <div class="hotel-info">
          <div class="hotel-info__text">
            <div class="hotel-wrapper">
              <div class="stars">
                <svg class="icon stars__icon">
                  <use xlink:href="img/sprite.svg#star"></use>
                </svg>
                <svg class="icon stars__icon">
                  <use xlink:href="img/sprite.svg#star"></use>
                </svg>
                <svg class="icon stars__icon">
                  <use xlink:href="img/sprite.svg#star"></use>
                </svg>
                <svg class="icon stars__icon">
                  <use xlink:href="img/sprite.svg#star"></use>
                </svg>
                <svg class="icon stars__icon">
                  <linearGradient id="linear-gradient">
                    <stop offset="0%" stop-color="#F2994A" />
                    <stop offset="100%" stop-color="white" />
                  </linearGradient>

                  <use fill="url(#linear-gradient)" xlink:href="img/sprite.svg#star"></use>
                </svg>
              </div>
              <h1 class="hotel-name hotel-info__name">GRAND HILTON HOTEL</h1>
              <span class="offer hotel-info__offer">Flash Offer</span>
            </div>
            <p class="hotel-description hotel-info__description">Half-Board/ All Inclusive + Complimentary Activities&nbsp;+ Child Stays Free</p>
          </div>
          <!-- /.hotel-info__text -->
          <div class="rating hotel-info__rating">
            <span class="rating__text">User Rattings</span>
            <span class="rating__counter">4.5/<small class="rating__counter-small">5</small></span>
          </div>
          <!-- /.hotel-info__rating -->
        </div>
        <!-- /.hotel-info -->
        <div class="hotel-grid">
          <div class="swiper-container hotel-slider hotel__slider">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide hotel-slider__slide">
                <img class="hotel-slider__img" src="img/slide.jpg" alt="slide" />
              </div>
              <div class="swiper-slide hotel-slider__slide">
                <img class="hotel-slider__img" src="img/slide-2.jpg" alt="slide 2" />
              </div>
              <div class="swiper-slide hotel-slider__slide">
                <img class="hotel-slider__img" src="img/slide-3.jpg" alt="slide 3" />
              </div>
              <div class="swiper-slide hotel-slider__slide">
                <img class="hotel-slider__img" src="img/slide-4.jpg" alt="slide 4" />
              </div>
              <div class="swiper-slide hotel-slider__slide">
                <img class="hotel-slider__img" src="img/slide-5.jpg" alt="slide 5" />
              </div>
            </div>

            <button class="hotel-slider__button hotel-slider__button--prev">
              <svg class="hotel-slider__button-icon">
                <use xlink:href="img/sprite.svg#arrow-prev"></use>
              </svg>
            </button>
            <button class="hotel-slider__button hotel-slider__button--next">
              <svg class="hotel-slider__button-icon">
                <use xlink:href="img/sprite.svg#arrow-next"></use>
              </svg>
            </button>
          </div>
          <!-- /.hotel-slider -->
          <div class="hotel-right">
            <div class="booking hotel-right__booking">
              <div class="booking__info">
                <div class="booking__price">
                  <span class="booking__start">price starts as</span>
                  <strong class="booking__cost">$ 8,500</strong>
                  <span class="booking__rent">per room / night</span>
                </div>
                <!-- /.price -->
                <div class="booking__room">
                  <div class="booking__text">
                    <svg class="booking-icon booking__icon">
                      <use xlink:href="img/sprite.svg#user"></use>
                    </svg>
                    <span class="booking__description">2 x Guests</span>
                  </div>
                  <div class="booking__text">
                    <svg class="booking-icon booking__icon">
                      <use xlink:href="img/sprite.svg#home"></use>
                    </svg>
                    <span class="booking__description">1 x Room</span>
                  </div>
                </div>
                <!-- /.booking-room -->
              </div>
              <!-- /.booking__info -->
              <div class="call-center booking__call-center">
                <span class="call-center__text">Quick Booking</span>
                <a href="tel:12100" class="call-center__link">
                  <svg class="booking-icon call-center__icon">
                    <use xlink:href="img/sprite.svg#phone-call"></use>
                  </svg>
                  <span class="call-center__number">12100</span>
                </a>
              </div>
              <!-- /.booking__call-center -->
              <button data-toggle="modal" class="button booking__button">View Other Options</button>
            </div>
            <!-- /.booking -->
            <div class="map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.5414446132645!2d98.29703101534484!3d7.8382577086555685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x305025650c33dbab%3A0xa67a542329d011e1!2z0J_RhdGD0LrQtdGCLCDQmtCw0YDQvtC9LCDQntGC0LXQu9GMINCl0LjQu9GC0L7QvQ!5e0!3m2!1sru!2sru!4v1620746147267!5m2!1sru!2sru"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
                class="map__iframe"
              ></iframe>
            </div>
            <!-- /.map -->
          </div>
          <!-- /.hotel-rigth -->
        </div>
        <!-- /.hotel-grid -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.hotel -->

    <section class="packages">
      <div class="container">
        <h2 class="title packages__title">Other Packages</h2>
        <div class="packages-wrapper">
          <div class="package package--active">
            <img src="img/package-1.jpg" alt="image: package-1" class="package__img" />
            <span class="offer package__offer">Flash Offer</span>
            <!-- /.packages-img -->
            <div class="package-info">
              <div class="package-rating package-info__rating">
                <svg class="icon package-rating__icon">
                  <use xlink:href="img/sprite.svg#star"></use>
                </svg>
                <svg class="icon package-rating__icon">
                  <use xlink:href="img/sprite.svg#star"></use>
                </svg>
                <svg class="icon package-rating__icon">
                  <use xlink:href="img/sprite.svg#star"></use>
                </svg>
                <svg class="icon package-rating__icon">
                  <use xlink:href="img/sprite.svg#star"></use>
                </svg>
                <svg class="icon package-rating__icon">
                  <use xlink:href="img/sprite.svg#star"></use>
                </svg>
              </div>
              <!-- /.reviews-slider__rating -->
              <h3 class="package-info__title">Hotel Blue Haven</h3>
              <p class="package-info__text">
                Aute quis duis excepteur excepteur ipsum cat eiusmod consectetur enim laborum magna llit. Ipsum est fugiat velit ea llamco do esse ut in veniam
                sun in onsequat. Aute quis duis epteur excepteur ipsum occaecat eiusmod nsectetur enim laborum magna mollit. Ipsum est fugiat velit ea ullamco
                do
              </p>
              <div class="package-info__room">
                <div class="package-info__line-text">
                  <svg class="package-icon package-info__icon">
                    <use xlink:href="img/sprite.svg#map-pin"></use>
                  </svg>
                  <span class="package-info__description">1749 Wheeler Ridge Delaware</span>
                </div>
                <div class="package-info__line-text">
                  <svg class="package-icon package-info__icon">
                    <use xlink:href="img/sprite.svg#user"></use>
                  </svg>
                  <span class="package-info__description">2 x Guests</span>
                </div>
                <div class="package-info__line-text">
                  <svg class="package-icon package-info__icon">
                    <use xlink:href="img/sprite.svg#home"></use>
                  </svg>
                  <span class="package-info__description">1 x Room</span>
                </div>
              </div>
              <!-- /.packages-item-room -->
              <div class="prices package-info__prices">
                <span class="prices__old-price">$ 10,500</span>
                <span class="prices__price">$ 8,500</span>
              </div>
              <button data-toggle="modal" class="button package-info__button">Book Now</button>
            </div>
          </div>
          <!-- /.package -->
          <div class="package">
            <img src="img/package-2.jpg" alt="image: package-2" class="package__img" />
            <span class="offer package__offer">Flash Offer</span>
            <!-- /.packages-img -->
            <div class="package-info">
              <div class="package-rating package-info__rating">
                <svg class="icon package-rating__icon">
                  <use xlink:href="img/sprite.svg#star"></use>
                </svg>
                <svg class="icon package-rating__icon">
                  <use xlink:href="img/sprite.svg#star"></use>
                </svg>
                <svg class="icon package-rating__icon">
                  <use xlink:href="img/sprite.svg#star"></use>
                </svg>
                <svg class="icon package-rating__icon">
                  <use xlink:href="img/sprite.svg#star"></use>
                </svg>
                <svg class="icon package-rating__icon">
                  <use xlink:href="img/sprite.svg#star"></use>
                </svg>
              </div>
              <h3 class="package-info__title">LUX* Belle Mare</h3>
              <p class="package-info__text">
                Aute quis duis excepteur excepteur ipsum cat eiusmod consectetur enim laborum magna llit. Ipsum est fugiat velit ea llamco do esse ut in veniam
                sun in onsequat. Aute quis duis epteur excepteur ipsum occaecat eiusmod nsectetur enim laborum magna mollit. Ipsum est fugiat velit ea ullamco
                do
              </p>
              <div class="package-info__room">
                <div class="package-info__line-text">
                  <svg class="package-icon package-info__icon">
                    <use xlink:href="img/sprite.svg#map-pin"></use>
                  </svg>
                  <span class="package-info__description">1749 Wheeler Ridge Delaware</span>
                </div>
                <div class="package-info__line-text">
                  <svg class="package-icon package-info__icon">
                    <use xlink:href="img/sprite.svg#user"></use>
                  </svg>
                  <span class="package-info__description">2 x Guests</span>
                </div>
                <div class="package-info__line-text">
                  <svg class="package-icon package-info__icon">
                    <use xlink:href="img/sprite.svg#home"></use>
                  </svg>
                  <span class="package-info__description">1 x Room</span>
                </div>
              </div>
              <!-- /.packages-item-room -->
              <div class="prices package-info__prices">
                <span class="prices__old-price">$ 8,500</span>
                <span class="prices__price">$ 3,000</span>
              </div>
              <button data-toggle="modal" class="button package-info__button">Book Now</button>
            </div>
          </div>
          <!-- /.package -->
          <div class="package">
            <img src="img/package-3.jpg" alt="image: package-3" class="package__img" />
            <span class="offer package__offer">Flash Offer</span>
            <!-- /.packages-img -->
            <div class="package-info">
              <div class="package-rating package-info__rating">
                <svg class="icon package-rating__icon">
                  <use xlink:href="img/sprite.svg#star"></use>
                </svg>
                <svg class="icon package-rating__icon">
                  <use xlink:href="img/sprite.svg#star"></use>
                </svg>
                <svg class="icon package-rating__icon">
                  <use xlink:href="img/sprite.svg#star"></use>
                </svg>
                <svg class="icon package-rating__icon">
                  <use xlink:href="img/sprite.svg#star"></use>
                </svg>
                <svg class="icon package-rating__icon">
                  <use xlink:href="img/sprite.svg#star"></use>
                </svg>
              </div>
              <h3 class="package-info__title">White Palace</h3>
              <p class="package-info__text">
                Aute quis duis excepteur excepteur ipsum cat eiusmod consectetur enim laborum magna llit. Ipsum est fugiat velit ea llamco do esse ut in veniam
                sun in onsequat. Aute quis duis epteur excepteur ipsum occaecat eiusmod nsectetur enim laborum magna mollit. Ipsum est fugiat velit ea ullamco
                do
              </p>
              <div class="package-info__room">
                <div class="package-info__line-text">
                  <svg class="package-icon package-info__icon">
                    <use xlink:href="img/sprite.svg#map-pin"></use>
                  </svg>
                  <span class="package-info__description">1749 Wheeler Ridge Delaware</span>
                </div>
                <div class="package-info__line-text">
                  <svg class="package-icon package-info__icon">
                    <use xlink:href="img/sprite.svg#user"></use>
                  </svg>
                  <span class="package-info__description">2 x Guests</span>
                </div>
                <div class="package-info__line-text">
                  <svg class="package-icon package-info__icon">
                    <use xlink:href="img/sprite.svg#home"></use>
                  </svg>
                  <span class="package-info__description">1 x Room</span>
                </div>
              </div>
              <!-- /.packages-item-room -->
              <div class="prices package-info__prices">
                <span class="prices__old-price">$ 10,500</span>
                <span class="prices__price">$ 9,500</span>
              </div>
              <button data-toggle="modal" class="button package-info__button">Book Now</button>
            </div>
          </div>
          <!-- /.package -->
          <div class="package">
            <img src="img/package-4.jpg" alt="image: package-4" class="package__img" />
            <span class="offer package__offer">Flash Offer</span>
            <!-- /.packages-img -->
            <div class="package-info">
              <div class="package-rating package-info__rating">
                <svg class="icon package-rating__icon">
                  <use xlink:href="img/sprite.svg#star"></use>
                </svg>
                <svg class="icon package-rating__icon">
                  <use xlink:href="img/sprite.svg#star"></use>
                </svg>
                <svg class="icon package-rating__icon">
                  <use xlink:href="img/sprite.svg#star"></use>
                </svg>
                <svg class="icon package-rating__icon">
                  <use xlink:href="img/sprite.svg#star"></use>
                </svg>
                <svg class="icon package-rating__icon">
                  <use xlink:href="img/sprite.svg#star"></use>
                </svg>
              </div>
              <h3 class="package-info__title">Luxury Place</h3>
              <p class="package-info__text">
                Aute quis duis excepteur excepteur ipsum cat eiusmod consectetur enim laborum magna llit. Ipsum est fugiat velit ea llamco do esse ut in veniam
                sun in onsequat. Aute quis duis epteur excepteur ipsum occaecat eiusmod nsectetur enim laborum magna mollit. Ipsum est fugiat velit ea ullamco
                do
              </p>
              <div class="package-info__room">
                <div class="package-info__line-text">
                  <svg class="package-icon package-info__icon">
                    <use xlink:href="img/sprite.svg#map-pin"></use>
                  </svg>
                  <span class="package-info__description">1749 Wheeler Ridge Delaware</span>
                </div>
                <div class="package-info__line-text">
                  <svg class="package-icon package-info__icon">
                    <use xlink:href="img/sprite.svg#user"></use>
                  </svg>
                  <span class="package-info__description">2 x Guests</span>
                </div>
                <div class="package-info__line-text">
                  <svg class="package-icon package-info__icon">
                    <use xlink:href="img/sprite.svg#home"></use>
                  </svg>
                  <span class="package-info__description">1 x Room</span>
                </div>
              </div>
              <!-- /.packages-item-room -->
              <div class="prices package-info__prices">
                <span class="prices__old-price">$ 4,500</span>
                <span class="prices__price">$ 2,500</span>
              </div>
              <button data-toggle="modal" class="button package-info__button">Book Now</button>
            </div>
          </div>
          <!-- /.package -->
          <div class="package">
            <img src="img/package-5.jpg" alt="image: package-5" class="package__img" />
            <span class="offer package__offer">Flash Offer</span>
            <!-- /.packages-img -->
            <div class="package-info">
              <div class="package-rating package-info__rating">
                <svg class="icon package-rating__icon">
                  <use xlink:href="img/sprite.svg#star"></use>
                </svg>
                <svg class="icon package-rating__icon">
                  <use xlink:href="img/sprite.svg#star"></use>
                </svg>
                <svg class="icon package-rating__icon">
                  <use xlink:href="img/sprite.svg#star"></use>
                </svg>
                <svg class="icon package-rating__icon">
                  <use xlink:href="img/sprite.svg#star"></use>
                </svg>
                <svg class="icon package-rating__icon">
                  <use xlink:href="img/sprite.svg#star"></use>
                </svg>
              </div>
              <h3 class="package-info__title">Hotel Five Star</h3>
              <p class="package-info__text">
                Aute quis duis excepteur excepteur ipsum cat eiusmod consectetur enim laborum magna llit. Ipsum est fugiat velit ea llamco do esse ut in veniam
                sun in onsequat. Aute quis duis epteur excepteur ipsum occaecat eiusmod nsectetur enim laborum magna mollit. Ipsum est fugiat velit ea ullamco
                do
              </p>
              <div class="package-info__room">
                <div class="package-info__line-text">
                  <svg class="package-icon package-info__icon">
                    <use xlink:href="img/sprite.svg#map-pin"></use>
                  </svg>
                  <span class="package-info__description">1749 Wheeler Ridge Delaware</span>
                </div>
                <div class="package-info__line-text">
                  <svg class="package-icon package-info__icon">
                    <use xlink:href="img/sprite.svg#user"></use>
                  </svg>
                  <span class="package-info__description">2 x Guests</span>
                </div>
                <div class="package-info__line-text">
                  <svg class="package-icon package-info__icon">
                    <use xlink:href="img/sprite.svg#home"></use>
                  </svg>
                  <span class="package-info__description">1 x Room</span>
                </div>
              </div>
              <!-- /.packages-item-room -->
              <div class="prices package-info__prices">
                <span class="prices__old-price">$ 6,500</span>
                <span class="prices__price">$ 3,500</span>
              </div>
              <button data-toggle="modal" class="button package-info__button">Book Now</button>
            </div>
          </div>
          <!-- /.package -->
        </div>
        <!-- /.packeges-wrapper -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.packages -->

    <section class="newsletter" data-parallax="scroll" data-image-src="./img/parallax.jpg">
      <div class="newsletter-wrapper">
        <h2 class="newsletter-title newsletter-wrapper__title">
          subscribe to our
          <span class="newsletter-title__strong">Newsletter</span>
        </h2>
        <form action="send.php" method="POST" class="subscribe newsletter__subscribe">
          <input type="email" class="subscribe__input" placeholder="Your email address" name="email" required/>
          <button class="subscribe__button">Send</button>
        </form>
      </div>
      <!-- /.newsletter-wrapper -->
    </section>
    <!-- /.newsletter -->

    <section class="reviews">
      <div class="container">
        <h2 class="title reviews__title">What people thinks about&nbsp;us</h2>
        <div class="swiper-container reviews-slider reviews__slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="reviews-slider__slide">
                <div class="reviews-slider__profile">
                  <img src="img/reviews-avatar-1.jpg" alt="Photo: Megan Fox" class="reviews-slider__avatar" />
                  <h3 class="reviews-slider__username">Megan Fox</h3>
                  <span class="reviews-slider__date">Stayed 18 Nov, 2019</span>
                  <div class="reviews-rating reviews-slider__rating">
                    <svg class="icon reviews-rating__icon">
                      <use xlink:href="img/sprite.svg#star"></use>
                    </svg>
                    <svg class="icon reviews-rating__icon">
                      <use xlink:href="img/sprite.svg#star"></use>
                    </svg>
                    <svg class="icon reviews-rating__icon">
                      <use xlink:href="img/sprite.svg#star"></use>
                    </svg>
                    <svg class="icon reviews-rating__icon">
                      <use xlink:href="img/sprite.svg#star"></use>
                    </svg>
                    <svg class="icon reviews-rating__icon">
                      <use xlink:href="img/sprite.svg#star"></use>
                    </svg>
                  </div>
                  <!-- /.reviews-slider__rating -->
                </div>
                <!-- /.reviews-slider__profile-->
                <div class="reviews-slider__text">
                  It was very nice hotel with cleanliness. Staff behavior was good and polite. They welcome us very well. Issue was only that Lift was not in
                  working and we were allotted to 3rd floor and amenities articles were in corner of gallery which were giving bad feeling. Breakfast was good
                  and support of the staff was also very nice. Location is not good as per atmosphere, it is very nearby most of the popular places but self
                  location in a narrow street is not good. Overall it was a good experience and could recommend.
                </div>
                <!-- /.reviews-slider__text -->
              </div>
              <!-- /.reviews-slider__slide -->
            </div>

            <div class="swiper-slide">
              <div class="reviews-slider__slide">
                <div class="reviews-slider__profile">
                  <img src="img/reviews-avatar-2.jpg" alt="Photo: Cristin Voltaniala" class="reviews-slider__avatar" />
                  <h3 class="reviews-slider__username">Cristin Voltaniala</h3>
                  <span class="reviews-slider__date">Stayed 1 Jan, 2020</span>
                  <div class="reviews-rating reviews-slider__rating">
                    <svg class="icon reviews-rating__icon">
                      <use xlink:href="img/sprite.svg#star"></use>
                    </svg>
                    <svg class="icon reviews-rating__icon">
                      <use xlink:href="img/sprite.svg#star"></use>
                    </svg>
                    <svg class="icon reviews-rating__icon">
                      <use xlink:href="img/sprite.svg#star"></use>
                    </svg>
                    <svg class="icon reviews-rating__icon">
                      <use xlink:href="img/sprite.svg#star"></use>
                    </svg>
                    <svg class="icon reviews-rating__icon">
                      <use xlink:href="img/sprite.svg#star"></use>
                    </svg>
                  </div>
                  <!-- /.reviews-slider__rating -->
                </div>
                <!-- /.reviews-slider__profile-->
                <div class="reviews-slider__text">It was very nice hotel with cleanliness.</div>
                <!-- /.reviews-slider__text -->
              </div>
              <!-- /.reviews-slider__slide -->
            </div>

            <div class="swiper-slide">
              <div class="reviews-slider__slide">
                <div class="reviews-slider__profile">
                  <img src="img/reviews-avatar-3.jpg" alt="Photo: Puer Mett" class="reviews-slider__avatar" />
                  <h3 class="reviews-slider__username">Puer Mett</h3>
                  <span class="reviews-slider__date">Stayed 1 Aug, 2020</span>
                  <div class="reviews-rating reviews-slider__rating">
                    <svg class="icon reviews-rating__icon">
                      <use xlink:href="img/sprite.svg#star"></use>
                    </svg>
                    <svg class="icon reviews-rating__icon">
                      <use xlink:href="img/sprite.svg#star"></use>
                    </svg>
                    <svg class="icon reviews-rating__icon">
                      <use xlink:href="img/sprite.svg#star"></use>
                    </svg>
                    <svg class="icon reviews-rating__icon">
                      <use xlink:href="img/sprite.svg#star"></use>
                    </svg>
                    <svg class="icon reviews-rating__icon">
                      <use xlink:href="img/sprite.svg#star"></use>
                    </svg>
                  </div>
                  <!-- /.reviews-slider__rating -->
                </div>
                <!-- /.reviews-slider__profile-->
                <div class="reviews-slider__text">
                  It was very nice hotel with cleanliness. Staff behavior was good and polite. They welcome us very well. Issue was only that Lift was not in
                  working and we were allotted to 3rd floor and amenities articles were in corner of gallery which were giving bad feeling. Breakfast was good
                  and support of the staff was also very nice. Location is not good as per atmosphere.It was very nice hotel with cleanliness. Staff behavior
                  was good and polite. They welcome us very well. Issue was only that Lift was not in working and we were allotted to 3rd floor and amenities
                  articles were in corner of gallery which were giving bad feeling. Breakfast was good and support of the staff was also very nice. Location is
                  not good as per atmosphere, it is very nearby most of the popular places but self location in a narrow street is not good. Overall it was a
                  good experience and could recommend. It was very nice hotel with cleanliness. Staff behavior was good and polite. They welcome us very well.
                  Issue was only that Lift was not in working and we were allotted to 3rd floor and amenities articles were in corner of gallery which were
                  giving bad feeling. Breakfast was good and support of the staff was also very nice. Location is not good as per atmosphere, it is very nearby
                  most of the popular places but self location in a narrow street is not good. Overall it was a good experience and could recommend.
                </div>
                <!-- /.reviews-slider__text -->
              </div>
              <!-- /.reviews-slider__slide -->
            </div>

            <div class="swiper-slide">
              <div class="reviews-slider__slide">
                <div class="reviews-slider__profile">
                  <img src="img/reviews-avatar-4.jpg" alt="Photo: Ron Holder" class="reviews-slider__avatar" />
                  <h3 class="reviews-slider__username">Ron Holder</h3>
                  <span class="reviews-slider__date">Stayed 20 Sep, 2021</span>
                  <div class="reviews-rating reviews-slider__rating">
                    <svg class="icon reviews-rating__icon">
                      <use xlink:href="img/sprite.svg#star"></use>
                    </svg>
                    <svg class="icon reviews-rating__icon">
                      <use xlink:href="img/sprite.svg#star"></use>
                    </svg>
                    <svg class="icon reviews-rating__icon">
                      <use xlink:href="img/sprite.svg#star"></use>
                    </svg>
                    <svg class="icon reviews-rating__icon">
                      <use xlink:href="img/sprite.svg#star"></use>
                    </svg>
                    <svg class="icon reviews-rating__icon">
                      <use xlink:href="img/sprite.svg#star"></use>
                    </svg>
                  </div>
                  <!-- /.reviews-slider__rating -->
                </div>
                <!-- /.reviews-slider__profile-->
                <div class="reviews-slider__text">
                  It was very nice hotel with cleanliness. Staff behavior was good and polite. They welcome us very well. Issue was only that Lift was not in
                  working and we were allotted to 3rd floor and amenities articles were in corner of gallery which were giving bad feeling. Breakfast was good
                  and support of the staff was also very nice. Location is not good as per atmosphere, it is very nearby most of the popular places but self
                  location in a narrow street is not good. Overall it was a good experience and could recommend. It was very nice hotel with cleanliness. Staff
                  behavior was good and polite. They welcome us very well. Issue was only that Lift was not in working and we were allotted to 3rd floor and
                  amenities articles were in corner of gallery which were giving bad feeling. Breakfast was good and support of the staff was also very nice.
                  Location is not good as per atmosphere, it is very nearby most of the popular places but self location in a narrow street is not good. Overall
                  it was a good experience and could recommend.
                </div>
                <!-- /.reviews-slider__text -->
              </div>
              <!-- /.reviews-slider__slide -->
            </div>
          </div>

          <button class="reviews-slider__button reviews-slider__button--prev">
            <svg class="reviews-slider__button-icon">
              <use xlink:href="img/sprite.svg#arrow-prev"></use>
            </svg>
          </button>
          <button class="reviews-slider__button reviews-slider__button--next">
            <svg class="reviews-slider__button-icon">
              <use xlink:href="img/sprite.svg#arrow-next"></use>
            </svg>
          </button>
        </div>
        <!-- /.reviews-slider -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.reviews -->

    <section class="activities">
      <div class="container">
        <h2 class="activities__title">Other Activities</h2>
        <div class="activities-wrapper">
          <div class="card activities__card">
            <img src="img/activities-1.jpg" alt="The curious corner of chamarel" class="card__image" />
            <h3 class="card__title">The curious corner of&nbsp;chamarel</h3>
            <button data-toggle="modal" class="button card__button">Book Now</button>
          </div>
          <!-- /.card activities__card -->
          <div class="card activities__card">
            <img src="img/activities-2.jpg" alt="Gymkhana club golf course" class="card__image" />
            <h3 class="card__title">Gymkhana club golf course</h3>
            <button data-toggle="modal" class="button card__button">Book Now</button>
          </div>
          <!-- /.card activities__card -->
          <div class="card activities__card">
            <img src="img/activities-3.jpg" alt="Tamarind falls hiking trip - full day" class="card__image" />
            <h3 class="card__title">Tamarind falls hiking trip&nbsp;-&nbsp;full day</h3>
            <button data-toggle="modal" class="button card__button">Book Now</button>
          </div>
          <!-- /.card activities__card -->
          <div class="card activities__card">
            <img src="img/activities-4.jpg" alt="The blue marine discovery quest" class="card__image" />
            <h3 class="card__title">The blue marine discovery quest</h3>
            <button data-toggle="modal" class="button card__button">Book Now</button>
          </div>
          <!-- /.card activities__card -->
        </div>
        <!-- /.activities-wrapper -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.activities -->

<?php include('footer.php')?>
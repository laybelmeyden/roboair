<footer>

    <!-- Contact Section Start -->
    <section id="contact" class="section-padding">    
      <div class="container">
        <div class="row contact-form-area wow fadeInUp" data-wow-delay="0.4s">          
          <div class="col-md-6 col-lg-6 col-sm-12">
            <div class="contact-block">
              <form id="contactForm" method="POST" action="/contact_f">
              {{ csrf_field() }}
              <input type="email" class="form-control hidden" id="name" name="email" value="ns@rusinnovations.com">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" id="name" name="name_1" placeholder="Ваше имя" required data-error="введите ваше имя">
                      <div class="help-block with-errors"></div>
                    </div>                                 
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="email" placeholder="Ваша почта" id="email" class="form-control" name="name_2" required data-error="введите вашу почту">
                      <div class="help-block with-errors"></div>
                    </div> 
                  </div>
                   <!-- <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" placeholder="Subject" id="msg_subject" class="form-control" required data-error="Please enter your subject">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div> -->
                  <div class="col-md-12">
                    <div class="form-group"> 
                      <textarea class="form-control" id="message" placeholder="Ваше сообщение" name="name_3" rows="5" data-error="Введите сообщение" required></textarea>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="submit-button">
                      <button class="btn btn-common" id="form-submit" type="submit">Отправить</button>
                    </div>
                  </div>
                </div>            
              </form>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-sm-12">
            <div class="contact-right-area wow fadeIn">
              <!-- <div class="contact-title">
                <h1>We're a friendly bunch..</h1>
                <p>We create projects for companies and startups with a passion for quality</p>
              </div> -->
              <h2>Контакты</h2>
              <div class="contact-right">
                <div class="single-contact">
                  <div class="contact-icon">
                    <i class="lni-map-marker"></i>
                  </div>
                  <p>г. Омск ул. Маршала Жукова, д 72, корп 1</p>
                </div>
                <div class="single-contact">
                  <div class="contact-icon">
                    <i class="lni-envelope"></i>
                  </div>
                  <p><a href="mailto:ns@anoasi.com">ns@anoasi.com</a></p>
                </div>
                <div class="single-contact">
                  <div class="contact-icon">
                    <i class="lni-phone-handset"></i>
                  </div>
                  <p><a href="tel:89153103447">89153103447</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 
    </section>
    <!-- Contact Section End -->
    
    <!-- Copyright Section Start -->
    <div class="copyright">
      <div class="container">
        <div class="row">
          <!-- <div class="col-lg-4 col-md-3 col-xs-12">
            <div class="footer-logo">
              <img src="assets/img/logo.png" alt="">
            </div>
          </div> -->
          <!-- <div class="col-lg-4 col-md-4 col-xs-12">     
            <div class="social-icon text-center">
              <a class="facebook" href="#"><i class="lni-facebook-filled"></i></a>
              <a class="twitter" href="#"><i class="lni-twitter-filled"></i></a>
              <a class="instagram" href="#"><i class="lni-instagram-filled"></i></a>
              <a class="linkedin" href="#"><i class="lni-linkedin-filled"></i></a>
            </div>
          </div> -->
          <div class="col-lg-12 col-md-12 col-xs-12">
            <p class="float-center">ASI Creative Croup <br>*сайт сделан за счет средств Фонда президентских грантов</p>
          </div> 
        </div>
      </div>
    </div>
    <!-- Copyright Section End -->
</footer>
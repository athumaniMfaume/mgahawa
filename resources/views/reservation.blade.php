<section class="section" id="reservation">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="left-text-content">
                    <div class="section-heading">
                        <h6>Contact Us</h6>
                        <h2>Here You Can Make A Reservation Or Just walkin to our cafe</h2>
                    </div>
                    <p>Donec pretium est orci, non vulputate arcu hendrerit a. Fusce a eleifend riqsie, namei sollicitudin urna diam, sed commodo purus porta ut.</p>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="phone">
                                <i class="fa fa-phone"></i>
                                <h4>Phone Numbers</h4>
                                <span><a href="#">080-090-0990</a><br><a href="#">080-090-0880</a></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="message">
                                <i class="fa fa-envelope"></i>
                                <h4>Emails</h4>
                                <span><a href="#">hello@company.com</a><br><a href="#">info@company.com</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-form">
                    <form id="contact" action="{{url('reservation')}}" method="post">

                        @csrf
                      <div class="row">
                        <div class="col-lg-12">
                            <h4>Table Reservation</h4>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                          <fieldset>
                            <input name="name" type="text" id="name" placeholder="Your Name*">
                                            
                          </fieldset>
                          @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                        </div>
                        <div class="col-lg-6 col-sm-12">
                          <fieldset>
                          <input name="email" type="text" id="email"  placeholder="Your Email Address">
                        </fieldset>
                          @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                        </div>
                        <div class="col-lg-6 col-sm-12">
                          <fieldset>
                            <input name="phone" type="text" id="phone" placeholder="Phone Number*">
                          </fieldset>
                            @error('phone')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                        </div>
                        <div class="col-md-6 col-sm-12">
                          <input type="number" name="guest" placeholder="number of guest">
                            @error('guest')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                        </div>
                        <div class="col-lg-6">
                            <div id="filterDate2">
                              <div class="input-group date" data-date-format="dd/mm/yyyy">
                                <input  name="date" id="date" type="text" class="form-control" placeholder="dd/mm/yyyy">
                                <div class="input-group-addon" >
                                  <span class="glyphicon glyphicon-th"></span>
                                </div>
                              </div>
                            </div>
                              @error('date')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                        </div>
                        <div class="col-md-6 col-sm-12">
                          <input type="time" name="time">
                            @error('time')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                        </div>
                        <div class="col-lg-12">
                          <fieldset>
                            <textarea name="message" rows="6" id="message" placeholder="Message" ></textarea>
                          </fieldset>
                            @error('message')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                        </div>
                        <div class="col-lg-12">
                          <fieldset>
                            <button type="submit" id="form-submit" class="main-button-icon">Make A Reservation</button>
                          </fieldset>
                        </div>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

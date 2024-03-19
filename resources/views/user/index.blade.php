@include('user.asset.header')


    <!-- Header Start -->
    <div class="container-fluid bg-primary px-0 px-md-5 mb-5">
        <div class="row align-items-center px-3">
            <div class="col-lg-6 text-center text-lg-left">
                <h4 class="text-white mb-4 mt-5 mt-lg-0">Kids Learning Center</h4>
                <h1 class="display-3 font-weight-bold text-white">New Approach to Kids Education</h1>
                <p class="text-white mb-4">{{$kidkinder->desc}}</p>
                <a href="" class="btn btn-secondary mt-1 py-3 px-5">Learn More</a>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <img class="img-fluid mt-5" src="{{$kidkinder->img}}" alt="">
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Facilities Start -->
    <div class="container-fluid pt-5">
        <div class="container pb-3">
            <div class="row">
                @foreach($facilities as $facility)
                    <div class="col-lg-4 col-md-6 pb-1">
                        <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                            <img src="{{$facility->icon}}" width="70px" height="70px" style="background: #5bc0de" class="flaticon-050-fence h1 font-weight-normal text-primary mb-3">
                            <div class="pl-4">
                                <h4>{{$facility->title}}</h4>
                                <p class="m-0">{{$facility->desc}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Facilities Start -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid rounded mb-5 mb-lg-0" src="{{asset('UserAssets/img/about-1.jpg')}}" alt="">
                </div>
                <div class="col-lg-7">
                    <p class="section-title pr-5"><span class="pr-2">Learn About Us</span></p>
                    <h1 class="mb-4">Best School For Your Kids</h1>
                    <p>Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos,
                        ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est
                        dolor</p>
                    <div class="row pt-2 pb-4">
                        <div class="col-6 col-md-4">
                            <img class="img-fluid rounded" src="{{asset('UserAssets/img/about-2.jpg')}}" alt="">
                        </div>
                        <div class="col-6 col-md-8">
                            <ul class="list-inline m-0">
                                <li class="py-2 border-top border-bottom"><i class="fa fa-check text-primary mr-3"></i>Labore eos amet dolor amet diam</li>
                                <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Etsea et sit dolor amet ipsum</li>
                                <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Diam dolor diam elitripsum vero.</li>
                            </ul>
                        </div>
                    </div>
                    <a href="" class="btn btn-primary mt-2 py-2 px-4">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Class Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Popular Classes</span></p>
                <h1 class="mb-4">Classes for Your Kids</h1>
            </div>
            <div class="row">
                @foreach($courses as $course)
                    <div class="col-lg-4 mb-5">
                        <div class="card border-0 bg-light shadow-sm pb-2">
                            <img class="card-img-top mb-2" src="{{$course->img}}" alt="">
                            <div class="card-body text-center">
                                <h4 class="card-title">{{$course->title}}</h4>
                                <p class="card-text">{{$course->desc}}</p>
                            </div>
                            <div class="card-footer bg-transparent py-4 px-5">
                                <div class="row border-bottom">
                                    <div class="col-6 py-1 text-right border-right"><strong>Age of Kids</strong></div>
                                    <div class="col-6 py-1">{{$course->kids_age}}</div>
                                </div>
                                <div class="row border-bottom">
                                    <div class="col-6 py-1 text-right border-right"><strong>Total Seats</strong></div>
                                    <div class="col-6 py-1">{{$course->seats_num}}</div>
                                </div>
                                <div class="row border-bottom">
                                    <div class="col-6 py-1 text-right border-right"><strong>Class Time</strong></div>
                                    <div class="col-6 py-1">{{$course->time}}</div>
                                </div>
                                <div class="row">
                                    <div class="col-6 py-1 text-right border-right"><strong>Tution Fee</strong></div>
                                    <div class="col-6 py-1">${{$course->price}} / Month</div>
                                </div>
                            </div>
                            <a href="" class="btn btn-primary px-4 mx-auto mb-4">Join Now</a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Class End -->


    <!-- Registration Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <p class="section-title pr-5"><span class="pr-2">Book A Seat</span></p>
                    <h1 class="mb-4">Book A Seat For Your Kid</h1>
                    <p>Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos,
                        ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est
                        dolor</p>
                    <ul class="list-inline m-0">
                        <li class="py-2"><i class="fa fa-check text-success mr-3"></i>Labore eos amet dolor amet diam</li>
                        <li class="py-2"><i class="fa fa-check text-success mr-3"></i>Etsea et sit dolor amet ipsum</li>
                        <li class="py-2"><i class="fa fa-check text-success mr-3"></i>Diam dolor diam elitripsum vero.</li>
                    </ul>
                    <a href="" class="btn btn-primary mt-4 py-2 px-4">Book Now</a>
                </div>
                <div class="col-lg-5">
                    <div class="card border-0">
                        <div class="card-header bg-secondary text-center p-4">
                            <h1 class="text-white m-0">Book A Seat</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-primary p-5">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" placeholder="Your Name" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control border-0 p-4" placeholder="Your Email" required="required" />
                                </div>
                                <div class="form-group">
                                    <select class="custom-select border-0 px-4" style="height: 47px;">
                                        <option selected>Select A Class</option>
                                        <option value="1">Class 1</option>
                                        <option value="2">Class 1</option>
                                        <option value="3">Class 1</option>
                                    </select>
                                </div>
                                <div>
                                    <button class="btn btn-secondary btn-block border-0 py-3" type="submit">Book Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Registration End -->


    <!-- Team Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Our Teachers</span></p>
                <h1 class="mb-4">Meet Our Teachers</h1>
            </div>
            <div class="row">
                @foreach($teachers as $teacher)
                    <div class="col-md-6 col-lg-3 text-center team mb-5">
                        <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%;">
                            <img class="img-fluid w-100" src="{{$teacher->img}}" alt="" >
                            <div
                                class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                                <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                   href="{{$teacher->twitter}}"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                   href="{{$teacher->facebook}}"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px;"
                                   href="{{$teacher->linkedin}}"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <h4>{{$teacher->name}}</h4>
                        <i>{{$teacher->specialist}}</i>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container p-0">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Testimonial</span></p>
                <h1 class="mb-4">What Parents Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                @foreach($reviews as $review)
                    <div class="testimonial-item px-3">
                        <div class="bg-light shadow-sm rounded mb-4 p-4">
                            <h3 class="fas fa-quote-left text-primary mr-3"></h3>
                            Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor tempor ipsum clita
                        </div>
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle" src="{{asset('UserAssets/img/testimonial-1.jpg')}}" style="width: 70px; height: 70px;" alt="Image">
                            <div class="pl-3">
                                <h5>Parent Name</h5>
                                <i>Profession</i>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Gallery Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Our Gallery</span></p>
                <h1 class="mb-4">Our Kids School Gallery</h1>
            </div>
            <div class="row">
                <div class="col-12 text-center mb-2">
                    <ul class="list-inline mb-4" id="portfolio-flters">
                        <li class="btn btn-outline-primary m-1 active" data-filter="*">All</li>
                        <li class="btn btn-outline-primary m-1" data-filter=".first">Playing</li>
                        <li class="btn btn-outline-primary m-1" data-filter=".second">Drawing</li>
                        <li class="btn btn-outline-primary m-1" data-filter=".third">Reading</li>
                    </ul>
                </div>
            </div>
            <div class="row portfolio-container">
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="{{asset('UserAssets/img/portfolio-1.jpg')}}" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="{{asset('UserAssets/img/portfolio-1.jpg')}}" data-lightbox="portfolio">
                                <i class="fas fa-search  text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="{{asset('UserAssets/img/portfolio-2.jpg')}}" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="{{asset('UserAssets/img/portfolio-2.jpg')}}" data-lightbox="portfolio">
                                <i class="fas fa-search text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item third">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="{{asset('UserAssets/img/portfolio-3.jpg')}}" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="{{asset('UserAssets/img/portfolio-3.jpg')}}" data-lightbox="portfolio">
                                <i class="fas fa-search  text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="{{asset('UserAssets/img/portfolio-4.jpg')}}" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="{{asset('UserAssets/img/portfolio-4.jpg')}}" data-lightbox="portfolio">
                                <i class="fas fa-search  text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="{{asset('UserAssets/img/portfolio-5.jpg')}}" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="{{asset('UserAssets/img/portfolio-5.jpg')}}" data-lightbox="portfolio">
                                <i class="fas fa-search  text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item third">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="{{asset('UserAssets/img/portfolio-6.jpg')}}" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="{{asset('UserAssets/img/portfolio-6.jpg')}}" data-lightbox="portfolio">
                                <i class="fas fa-search  text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery End -->


    <!-- Blog Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Latest Blog</span></p>
                <h1 class="mb-4">Latest Articles From Blog</h1>
            </div>
            <div class="row pb-3">
                @foreach($blogs as $blog)
                    <div class="col-lg-4 mb-4">
                        <div class="card border-0 shadow-sm mb-2">
                            <img class="card-img-top mb-2" src="{{$blog->img}}" alt="">
                            <div class="card-body bg-light text-center p-4">
                                <h4 class="">{{$blog->title}}</h4>
                                <div class="d-flex justify-content-center mb-3">
                                    <small class="mr-3"><i class="fa fa-user text-primary"></i>{{$blog->user->name}}</small>
                                    <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                                    <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                                </div>
                                <p>{{$blog->short_desc}}</p>
                                <a href="" class="btn btn-primary px-4 mx-auto my-2">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Blog End -->



@include('user.asset.footer')

@extends('frontEnd.layouts.master')
@section('title', 'Md. Suoraf Mia - Content Creator')
@section('content')

    <section class="about-section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4 wow slideInLeft">
                    <div class="about-me" id="sticker">
                        <div class="about-short">
                            <div class="about-img">
                                <img src="{{asset($abouts->image)}}" alt="">
                            </div>
                            <h2>{{$abouts->title}}</h2>
                            <p><span class="typer"  data-words="Tusted Person, {{$abouts->designation}}" data-delay="100" data-deleteDelay="1000"></span></p>
                            <div class="social">
                                <ul>
                                    @foreach($socialmedias as $key=>$value)
                                    <li>
                                        <a href="{{$value->link}}" target="_blank" class="facebook" style="color:{{$value->color}} !important">
                                            <i class="{{$value->icon}}"></i></a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <!-- about short end -->
                        <div class="about-personal">
                            <div class="personal-info">
                                <div class="icon">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div class="content">
                                    <p><small>Phone</small></p>
                                    <p>{{$contact->phone}}</p>
                                </div>
                            </div>
                            <!-- personal-info-item -->
                            <div class="personal-info">
                                <div class="icon">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div class="content">
                                    <p><small>Email</small></p>
                                    <p>{{$contact->email}}</p>
                                </div>
                            </div>
                            <!-- personal-info-item -->
                            <div class="personal-info">
                                <div class="icon">
                                    <i class="fa-solid fa-location-crosshairs"></i>
                                </div>
                                <div class="content">
                                    <p><small>Location</small></p>
                                    <p>{{$contact->address}}
                                </div>
                            </div>
                            <!-- personal-info-item -->
                            <div class="personal-info border-none">
                                <div class="icon">
                                    <i class="fa-solid fa-calendar-days"></i>
                                </div>
                                <div class="content">
                                    <p><small>Designation</small></p>
                                    <p>{{$abouts->designation}}</p>
                                </div>
                            </div>
                            <!-- personal-info-item -->
                        </div>
                        <!-- <div class="banner-btn text-center">
                            <a href="" class="d-button"><i class="fa-solid fa-cloud-arrow-down"></i> Download CV</a>
                        </div> -->
                    </div>
                </div>
                <!-- col-6 end -->
                <div class="col-lg-8 col-sm-8">
                    <div class="about-details">
                        <div class="section-title">
                            <h1 class="wow fadeInUp">About Me</h1>
                            <p class="wow fadeInUp">Welcome to my profile</p>
                        </div>
                        <div class="about-bio wow fadeInUp">
                            {!!$abouts->description!!}
                        </div>
                        <div class="about-circle">
                            <div class="row">
                                @foreach($counters as $key=>$value)
                                <div class="col-sm-4 wow fadeInUp">
                                    <div class="circle-item">
                                        <h3><span class="counter">{{$value->count}}</span>+</h3>
                                        <p>{{$value->name}}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- about end -->
                    <div class="experience-education">
                        <div class="row">

                            <div class="col-sm-6">
                                <div class="experience-title">
                                    <h1 class="wow fadeInUp">experience</h1>
                                </div>
                                @foreach($experience as $key=>$value)
                                <div class="experience-item wow fadeInUp">
                                    <div class="date">
                                        <p><i class="fa-solid fa-calendar-days"></i> {{$value->start_date}}-{{$value->end_date}}</p>
                                    </div>
                                    <div class="organization">
                                        <h4>{{$value->title}}</h4>
                                    </div>
                                    <div class="content">
                                        <p>{!!$value->description!!}</p>
                                    </div>
                                </div>
                                @endforeach
                                <!-- experience-item end -->
                               
                            </div>
                            <!-- experience col-6 end -->
                            <div class="col-sm-6">
                                <div class="education-title">
                                    <h1 class="wow fadeInUp">education</h1>
                                </div>
                                @foreach($education as $key=>$value)
                                <div class="education-item wow fadeInUp">
                                    <div class="date">
                                        <p><i class="fa-solid fa-calendar-days"></i> {{$value->start_date}} -  {{$value->end_date}}</p>
                                    </div>
                                    <div class="organization">
                                        <h4>{{$value->title}}</h4>
                                    </div>
                                    <div class="content">
                                        <p>{!!$value->description!!}</p>
                                    </div>
                                </div>
                                @endforeach
                                <!-- education-item end -->

                            </div>
                            <!-- experience col-6 end -->
                        </div>
                    </div>
                    <!-- experience-education -->
                    <div class="skills-section">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="skills-title">
                                    <h1 class="wow fadeInUp">my skills</h1>
                                </div>
                            </div>
                            @foreach($skills as $key=>$value)
                            <div class="col-sm-6 wow fadeInUp">
                                <div  class="skillsbar-{{$key +1}} barfiller">
                                    <div class="tipWrap">
                                        <span class="tip"></span>
                                    </div>
                                     <span class="fill" data-percentage="{{$value->count}}"></span>
                                     <p>{{$value->name}}</p>
                                </div>
                            </div>
                            <!-- skillsbar col end -->
                           @endforeach

                        </div>
                    </div>
    <section id="portfolio" class="portfolio-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
               <div class="section-title">
                    <h1 class="wow fadeInUp">My Portfolio</h1>
                    <p class="wow fadeInUp">Showcasing some of my best work</p>
                </div>
            </div>
        </div>
        <!--sectoion title-->
        <div class="row">
            <div class="col-sm-12 text-right wow zoomIn">
                <div class="button-group portfolio-isotop-btn">

                    <button data-filter="*" class="active">all</button>
                    @foreach($category as $key=>$category)
                    <button data-filter=".{{$key}}">{{$category->category_name}}</button>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="portfolio-inner">
                    <div class="row " id="lightgallery">
                        @foreach($portfolios as $key=>$value)
                        <div class="col-lg-4 col-md-4 col-sm-6 single-portfolio {{$key}} wow fadeInUp" data-src="{{asset($value->image)}}" data-title="Web Design" data-desc="Description 1">
                            <div class="portfolio-item">
                               <a href="">
                                    <img src="{{asset($value->image)}}" alt="">
                               </a>
                                <div class="portfolio-overlay">
                                    <p>{{$value->title}}</p>
                                    <a><i class="fa-solid fa-expand"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- portfolio col end  -->

                    </div>
                </div>
            </div>
        </div>
</section>

<section class="blog-area" id="blog">
        <div class="container">
        <div class="row">
            <div class="col-lg-12">
               <div class="section-title">
                    <h1 class="wow fadeInUp">My Blog</h1>
                    <p class="wow fadeInUp">Showcasing some of my best work</p>
                </div>
            </div>
        </div>
            <div class="row">
                @foreach($blogs as $key=>$value)
                <div class="col-sm-6">
                    <div class="blog-widget">
                        <div class="blog-img">
                            <img src="{{asset($value->image)}}" alt="">
                        
                            <div class="details-btn">
                                <a href="{{$value->link}}" target="_blank">
                                    Details
                                </a>
                            </div>
                        </div>
                        <div class="blog-title">
                            <a href="{{$value->link}}" target="_blank">
                               {{$value->title}}
                            </a>
                            
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="com_title" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="heading-part">
                        <p class="wow fadeInUp">Contact</p>
                        <h2 class="wow fadeInUp">Contact With Me</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <div class="cont-info">
                        <div class="google_map">
                            <iframe src="{{$contact->maplink}}" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="about-personal cont-item-inner">
                            <div class="personal-info cont-item">
                              <div class="icon">
                                <i class="fa-solid fa-phone"></i>
                              </div>
                              <div class="content">
                                <p><small>Phone</small></p>
                                <p>{{$contact->phone}}</p>
                              </div>
                            </div>
                            <!-- personal-info-item -->
                            <div class="personal-info cont-item">
                              <div class="icon">
                                <i class="fa-solid fa-envelope"></i>
                              </div>
                              <div class="content">
                                <p><small>Email</small></p>
                                <p>{{$contact->email}}</p>
                              </div>
                            </div>
                            <!-- personal-info-item -->
                            <div class="personal-info cont-item">
                              <div class="icon">
                                <i class="fa-solid fa-location-crosshairs"></i>
                              </div>
                              <div class="content">
                                <p><small>location</small></p>
                                <p>{{$contact->address}}</p>
                              </div>
                            </div>
                            <!-- personal-info-item -->
                            <div class="social">
                              <ul>
                                @foreach($socialmedias as $key=>$value)
                                    <li>
                                        <a href="{{$value->link}}" target="_blank" class="facebook" style="color:{{$value->color}} !important">
                                            <i class="{{$value->icon}}"></i></a>
                                    </li>
                                    @endforeach
                              </ul>
                            </div>
                          </div>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="cont-form">
                        <form action="{{route('contact_save')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">your name</label>
                                        <input type="text" name="name" id="name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="phoneNumber">phone number</label>
                                        <input type="text" name="phoneNumber" id="phoneNumber" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="email">email</label>
                                        <input type="email" name="email" id="email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                    <label for="subject">subject</label>
                                    <input type="subject" name="subject" id="subject" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                    <label for="contact_text">your message</label>
                                    <textarea name="contact_text" id="contact_text" cols="30" rows="10" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                     <button type="submit" class="form-control">Send Message <i class="fa-solid fa-arrow-right-long"></i></button>
                                    
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>  
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="copyright">
                        <p>© Copyright 2024 All Right Reserved. Design & Developed By <a href="https://websolutionit.com/" target="_blank">Websolution IT</a></p>
                    </div>
                </div>
            </div>
        </div>

    </section>



                </div>
                <!-- col-6 end -->

            </div>
            <!-- about-row-end -->
            
        </div>  
        <!-- container end -->
    </section>




@endsection

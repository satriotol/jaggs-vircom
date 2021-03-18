@extends('layouts.main')
@section('content')
<!-- ======= Tentang Section ======= -->

<main>
    <section id="tentang" class="tentang mt-5">
        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="col-md-6 ">
                    <a onclick="lightbox()" href="{{asset('app/img/chefs/chefs-1.jpg')}}"
                                data-lightbox="gallery1">
                    <img src="{{asset('app/img/about.jpg')}}" alt="" width="500px" height="300px"></a>
                </div>
                <div class="col-md-6">
                    {{$company->description}}
                </div>
            </div>
        </div>
    </section><!-- End Chefs Section -->
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
        <div class="container owl-carousel testimonials-carousel" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-md-12 text-center">
                <h1 style="color: #aaaaaa;; ">{{$lomba}} Aktif</h1>
            </div>
        </div>

    </section><!-- End Testimonials Section -->
    <div class="container-fluid mt-5" style="padding-right: 0px; padding-left: 0px;">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Visi & Misi</h1>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12 ">
                    <h1>Visi</h1>
                    <p>{{$company->vision}}</p>
                </div>
                <div class="col-md-12 mt-4">
                    <h1>Misi</h1>
                    <p>{{$company->mission}}</p>
                </div>
            </div>
        </div>
        <!-- ======= Chefs Section ======= -->
        <section id="tentang" class="tentang">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Team Kita</h2>
                    <p>Our Team</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="member" data-aos="zoom-in" data-aos-delay="100">
                            <a onclick="lightbox()" href="{{asset('app/img/chefs/chefs-1.jpg')}}"
                                data-lightbox="gallery1">
                            <img src="{{asset('app/img/chefs/chefs-1.jpg')}}" width="300px" data-lightbox="gallery1"
                                class="img-fluid" alt=""></a>
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4 style="font-weight:bold;">Walter White</h4>
                                    <span style="color:  #cda45e; font-weight:bold;">Master Chef</span>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, tenetur?
                                        Sunt, obcaecati. Hic labore velit distinctio maxime nobis sunt, commodi
                                        voluptatum. Fugit non atque tempore adipisci saepe iste, debitis veniam qui eum
                                        eos quia sed illo ea magni culpa modi? Qui doloremque quia in dolore molestiae
                                        eveniet alias beatae quam?</p>
                                </div>
                                <div class="social">
                                    <a href=""><i class="icofont-twitter"></i></a>
                                    <a href=""><i class="icofont-facebook"></i></a>
                                    <a href=""><i class="icofont-instagram"></i></a>
                                    <a href=""><i class="icofont-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <a onclick="lightbox()" href="{{asset('app/img/chefs/chefs-2.jpg')}}"
                                data-lightbox="gallery2">
                                <img src="{{asset('app/img/chefs/chefs-2.jpg')}}" width="300px" data-lightbox="gallery2"
                                    class="img-fluid" alt="">
                            </a>
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4 style="font-weight:bold;">Sarah Jhonson</h4>
                                    <span style="color:  #cda45e;  font-weight:bold;">Patissier</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui molestias sunt
                                        libero at. Dolore enim repellendus, ipsam ullam rerum repudiandae et ratione ad
                                        perspiciatis esse eveniet veniam quibusdam sequi doloremque voluptatum?
                                        Accusamus obcaecati quidem facilis nostrum in explicabo, numquam molestiae eum
                                        labore quo unde doloremque ipsum nulla delectus corporis fuga?</p>
                                </div>
                                <div class="social">
                                    <a href=""><i class="icofont-twitter"></i></a>
                                    <a href=""><i class="icofont-facebook"></i></a>
                                    <a href=""><i class="icofont-instagram"></i></a>
                                    <a href=""><i class="icofont-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="member" data-aos="zoom-in" data-aos-delay="300">
                            <a onclick="lightbox()" href="{{asset('app/img/chefs/chefs-3.jpg')}}"
                                data-lightbox="gallery3"> <img src="{{asset('app/img/chefs/chefs-3.jpg')}}"
                                    width="300px" alt="">
                            </a>
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4 style=" font-weight:bold;">William Anderson</h4>
                                    <span style="color:  #cda45e;  font-weight:bold;">Cook</span>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia perferendis
                                        optio nisi, quisquam atque quaerat eius. Fuga pariatur amet ducimus error nobis
                                        doloremque, aut, excepturi quod blanditiis beatae ullam aperiam facilis iusto
                                        quaerat vero. Repudiandae nobis animi aliquam, dignissimos obcaecati eaque, aut
                                        commodi quam nam sequi ut quis vero culpa?</p>
                                </div>
                                <div class="social">
                                    <a href=""><i class="icofont-twitter"></i></a>
                                    <a href=""><i class="icofont-facebook"></i></a>
                                    <a href=""><i class="icofont-instagram"></i></a>
                                    <a href=""><i class="icofont-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Chefs Section -->

</main>

<!-- End #main -->
@endsection
@section('script')
@endsection

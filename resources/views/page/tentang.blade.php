@extends('layouts.main')
@section('content')
<!-- ======= Tentang Section ======= -->
<main>
    <section id="tentang" class="tentang mt-5">
        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="col-md-6 ">
                    <img src="{{asset('app/img/about.jpg')}}" alt="" width="500px" height="300px">
                </div>
                <div class="col-md-6">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime quibusdam, praesentium aperiam,
                    aliquid, esse molestiae itaque deleniti aspernatur eius omnis non quod nihil sunt. Dolore animi
                    quaerat itaque numquam praesentium cum minus dolorem amet harum culpa autem, consequuntur cupiditate
                    illum excepturi expedita ipsa quod cumque commodi. Fuga eum, vel, perspiciatis maiores tempore,
                    voluptate qui expedita eos officiis dolorum explicabo ad. Architecto sunt amet dolorum, eveniet
                    molestiae illum pariatur fugit earum fuga voluptas natus quo. Labore reprehenderit, illum
                    exercitationem officia rerum dolor vitae temporibus distinctio? Reiciendis error, cum dignissimos
                    temporibus illo cumque vero aperiam, ad quia porro ut. Excepturi, ipsam veritatis.
                </div>
            </div>
        </div>
    </section><!-- End Chefs Section -->
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
        <div class="owl-carousel testimonials-carousel" data-aos="zoom-in" data-aos-delay="100"></div>
        <div class="row">
            <div class="col-lg-4 offset-2 text-center">
                <h1 style="color: #aaaaaa;; ">999</h1>
                <H1 style="color: #aaaaaa;;">Lomba</H1>
            </div>
            <div class="col-lg-4 col-6 text-center">
                <H1 style="color: #aaaaaa;;">999</H1>
                <H1 style="color: #aaaaaa;;">Lomba Selesai</H1>
            </div>
        </div>
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
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque quas aut qui, praesentium ducimus
                        fugiat magni asperiores quo repellendus. Molestiae, quaerat? Odio quod repellat eos laudantium
                        debitis repudiandae aperiam nostrum dolore, tenetur nobis eaque possimus, doloremque inventore
                        quo ex magnam incidunt, velit magni vitae! Similique, assumenda! Pariatur repudiandae
                        accusantium atque porro ex dolor cumque, doloremque soluta fugit consectetur ratione provident
                        vitae eveniet nihil sint, eos alias voluptas. Illum, cum qui autem optio nam sunt itaque quo
                        illo totam fugit sapiente alias neque debitis eum facere dicta voluptas? Doloremque, sed, ab
                        asperiores accusantium praesentium mollitia esse sapiente at veritatis natus commodi!</p>
                </div>
                <div class="col-md-12 mt-4">
                    <h1>Misi</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint officiis itaque obcaecati, repellat
                        repellendus nobis eos numquam ea ut dicta odit, dolor provident dolore excepturi dolorum at
                        neque facere quaerat? Qui similique at quaerat nulla atque animi ab enim debitis distinctio
                        ipsam pariatur alias, deleniti quasi adipisci dolor, magnam iure culpa corporis molestias odio
                        quas? Neque molestiae reprehenderit beatae impedit dolores, natus, possimus sequi soluta vero
                        eligendi eaque. Magnam blanditiis quasi omnis, voluptatibus ad repellat atque beatae maxime
                        voluptas quisquam dolores nihil eveniet sit distinctio sed aliquam, unde fuga necessitatibus
                        vero quae in. Amet sed ducimus sit impedit nemo ab?</p>
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
                            <img src="{{asset('app/img/chefs/chefs-1.jpg')}}" width="300px" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4 style="font-weight:bold;">Walter White</h4>
                                    <span style="color:  #cda45e; font-weight:bold;">Master Chef</span>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, tenetur? Sunt, obcaecati. Hic labore velit distinctio maxime nobis sunt, commodi voluptatum. Fugit non atque tempore adipisci saepe iste, debitis veniam qui eum eos quia sed illo ea magni culpa modi? Qui doloremque quia in dolore molestiae eveniet alias beatae quam?</p>
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
                            <img src="{{asset('app/img/chefs/chefs-1.jpg')}}" width="300px"class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4 style="font-weight:bold;">Sarah Jhonson</h4>
                                    <span style="color:  #cda45e;  font-weight:bold;">Patissier</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui molestias sunt libero at. Dolore enim repellendus, ipsam ullam rerum repudiandae et ratione ad perspiciatis esse eveniet veniam quibusdam sequi doloremque voluptatum? Accusamus obcaecati quidem facilis nostrum in explicabo, numquam molestiae eum labore quo unde doloremque ipsum nulla delectus corporis fuga?</p>
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
                            <img  src="{{asset('app/img/chefs/chefs-3.jpg')}}" width="300px" class="img-fluid mklbItem" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4 style=" font-weight:bold;">William Anderson</h4>
                                    <span style="color:  #cda45e;  font-weight:bold;">Cook</span>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia perferendis optio nisi, quisquam atque quaerat eius. Fuga pariatur amet ducimus error nobis doloremque, aut, excepturi quod blanditiis beatae ullam aperiam facilis iusto quaerat vero. Repudiandae nobis animi aliquam, dignissimos obcaecati eaque, aut commodi quam nam sequi ut quis vero culpa?</p>
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

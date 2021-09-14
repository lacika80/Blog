<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="\public\css\swiper.css" rel="stylesheet">
</head>

<body>
    <?php
    require "header.php"
    ?>
    <!--<section id="homepage-slider">
        <div class="container-fluid no-padding">
            <div class="row-fluid no-padding">
                <div class="col-12 no-padding">
                    <div class="swiper-container homepage-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide bg" style="background: url('public/images/minta.jpg')">
                                <div class="content">
                                </div>
                            </div>
                            <div class="swiper-slide bg" style="background: url('public/images/minta2.jpg')">
                                <div class="content">
                                </div>
                            </div>
                            <div class="swiper-slide bg" style="background: url('public/images/minta3.jpg')">
                                <div class="content">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
        </section> -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">Slide 1</div>
            <div class="swiper-slide">Slide 2</div>
            <div class="swiper-slide">Slide 3</div>
            <div class="swiper-slide">Slide 4</div>
            <div class="swiper-slide">Slide 5</div>
            <div class="swiper-slide">Slide 6</div>
            <div class="swiper-slide">Slide 7</div>
            <div class="swiper-slide">Slide 8</div>
            <div class="swiper-slide">Slide 9</div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    <section class="mt-5 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>Bemutatkozás</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem asperiores qui, culpa
                            animi amet quaerat eligendi voluptatum dolorem, ea, autem at consequuntur laudantium sunt.
                            Laborum numquam delectus dolorem eaque assumenda. Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Explicabo quae eum pariatur ea deserunt tempore sit nam, magni neque? Quae
                            similique consequatur aliquam qui voluptatem, facere hic? Nulla, esse quis.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="mt-5 mb-5">
            <div class="container">
                <!-- BLOG ITEM -->
                <div class="row">
                    <div class="col-12 mb-5">
                        <div class="card w-100">
                            <div class="card-body">
                                <h5 class="card-title">Blog cím</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                                <a href="#" class="btn btn-primary">Tovább olvasom</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- BLOG ITEM -->

                <!-- BLOG ITEM -->
                <div class="row">
                    <div class="col-12 mb-5">
                        <div class="card w-100">
                            <div class="card-body">
                                <h5 class="card-title">Blog cím</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                                <a href="#" class="btn btn-primary">Tovább olvasom</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- BLOG ITEM -->

                <!-- BLOG ITEM -->
                <div class="row">
                    <div class="col-12 mb-5">
                        <div class="card w-100">
                            <div class="card-body">
                                <h5 class="card-title">Blog cím</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                                <a href="#" class="btn btn-primary">Tovább olvasom</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- BLOG ITEM -->
            </div>
        </section>
    <?php
    require "footer.php"
    ?>
    <script>
        $(document).ready(function() {
            var swiper = new Swiper(".mySwiper", {
                direction: 'horizontal',
                loop: true,
                speed: 600,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });
        });
    </script>
</body>

</html>
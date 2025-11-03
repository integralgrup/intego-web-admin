@extends('layouts.main')

@section('content')

<main class="main-field header-space  aboutHeader about-us-page">
    <section class="relative translate-y-14 max-w-[1920px] mx-auto" id="breadcrumb">

        <div class="absolute bottom-[-150px] group-[&.rtl]/html:left-0 group-[&.rtl]/html:right-auto group-[&.rtl]/html:rotate-180 right-0 z-[1] md:hidden pointer-events-none">
            <img src="../assets/image/about123.png" alt="">
        </div>
        <div class="pl-[200px] group-[&.rtl]/html:!pl-0 2xl:pl-[100px] xl:pl-[50px] sm:pl-[20px] group-[&.rtl]/html:pr-[100px] 2xl:group-[&.rtl]/html:pr-[100px] xl:group-[&.rtl]/html:pr-[50px] sm:group-[&.rtl]/html:pr-[20px]">
            <div class="wrapper flex items-center justify-between lg:flex-col-reverse lg:gap-[35px]">
                <div class="breadcrumb sm:pr-[20px]">
                    <div dir class="list flex justify-start items-center mb-[30px] lg:mb-[20px] gap-5 lg:justify-center">
                        <a href="{{env('HTTP_DOMAIN')}}" class="text-gray gap-10 text-[18px] leading-[28px] hover:text-secondary font-medium duration-500">Home</a>
                        <div class="text-gray">/</div>
                        <a href="page-about.php" title="Galeri" class="text-gray text-[18px] leading-[28px] hover:text-secondary font-medium duration-500">About Us</a>
                    </div>
                    <div dir class="text-editor sm:gap-[60px] lg:text-center items-center lg:items-center gap-[100px] relative editor-h2:text-secondary [&>h2>span]:text-[#1679BE] editor-h2:font-bold editor-h2:leading-[64px] 2xl:editor-h2:leading-[56px] xl:editor-h2:leading-[48px] lg:editor-h2:leading-[40px] md:editor-h2:leading-[34px] sm:editor-h2:leading-[28px] editor-h2:max-w-[700px] sm:editor-h2:max-w-[450px] editor-h3:italic editor-h3:font-medium  editor-h3:leading-[48px] 2xl:editor-h3:text-leading-[42px] xl:editor-h3:leading-[36px] lg:editor-h3:leading-[32px] md:editor-h3:leading-[28px] editor-h3:text-gray editor-h3:max-w-[405px]">
                        <h2><span>Intego produces outdoor</span> playgrounds and equipment</h2>
                        <h3>We Produce The World’s Entertainment</h3>
                        <div class="absolute top-[60%] left-[13%] lg:left-[20%] sm:top-[40%] sm:hidden">
                            <img src="../assets/image/quate.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="image aspect-[96/66] h-[660px] 2xl:aspect-[85/58] 2xl:h-[580px] xl:aspect-[70/50] xl:h-[500px] lg:w-full sm:h-[400px] xs:h-[350px]">
                    <img class="w-full h-full object-cover object-center rounded-tl-full xs:rounded-tl-[100px] group-[&.rtl]/html:rounded-tl-none group-[&.rtl]/html:rounded-bl-none group-[&.rtl]/html:rounded-tr-full group-[&.rtl]/html:rounded-br-full rounded-bl-full xs:rounded-bl-[100px]" src="../assets/image/trademark/newdetail.jpeg" alt="">
                </div>
            </div>
        </div>

    </section>

    <section class="page-about-tabs relative z-20 ">
        <div class="f-nav nav-content absolute top-0 -mt-50 [&.fixed]:mt-0 sm:mt-20 left-[50%] translate-x-[-50%] rounded-full py-[12.5px] md:py-0 w-full z-[9] duration-450 bg-white border-[10px] border-solid border-[#FAFAFA] shadow-xl max-w-[1400px]">
            <div class="wrapper flex justify-between max-w-[1440px] m-auto min-md:px-[30px]" dir="">
                <div class="hand-field absolute top-[calc(50%-5px)] right-[12px] animate-x duration-450 [&.is-scroll]:opacity-0 hidden sm:block z-20">
                    <div class="image h-[24px] w-[24px] overflow-hidden translate-z-0">
                        <img src="../assets/image/hand.png" class="w-full h-full object-contain object-center" loading="lazy" alt="">
                     </div>
                </div>
                <div class="  nav w-full flex justify-between gap-20">
                    <div class="w-full tabs-scroll lg:overflow-auto scrollbar scrollbar-w-[8px] scrollbar-h-[5px] scrollbar-track-rounded-[5px] scrollbar-thumb-rounded-[5px] scrollbar-thumb-[#0055A3]/50 scrollbar-track-primary-200 py-[5px]  scroll-smooth" id="menu-center">
                        <div id="fixed-bar" class="fixed-bar lg:overflow-x-auto lg:overflow-y-hidden w-full z-[200]   transition-all duration-450 flex justify-center">
                            <div class="bar lg:overflow-x-auto lg:overflow-y-hidden">
                                <div class="container lg:px-0">
                                    <div class="flex items-center gap-[20px]">
                                        <?php $items = [
                                            [
                                                'title' => 'Who We Are',
                                                'section' => '#about-us-section',
                                                'id' => 'about-us',
                                            ],
                                            [
                                                'title' => 'How We Do It',
                                                'section' => '#certificates-section',
                                                'id' => 'certificates',
                                            ],
                                            [
                                                'title' => 'What We Are Doing',
                                                'section' => '#mission-vision-section',
                                                'id' => 'mission-vision',
                                            ],
                                            [
                                                'title' => 'Certificates',
                                                'section' => '#what-we-do-section',
                                                'id' => 'what-we-do',
                                            ],
                                            [
                                                'title' => 'Vision & Mission',
                                                'section' => '#brands-section',
                                                'id' => 'brands',
                                            ],
                                            [
                                                'title' => 'Our Other Brands',
                                                'section' => '#brands-section2',
                                                'id' => 'brands2',
                                            ]
                                        ];
                                        foreach ($items as $key => $item) : ?>
                                            <div class="item w-full flex items-center [&.active]:bg-[#0F62AB] hover:bg-[#0F62AB] [&.active]:delay-[350ms] p-4 duration-300 rounded-full justify-center scrollable group whitespace-nowrap cursor-pointer relative lg:py-3" data-scrollable="<?= $item['section'] ?>" data-section-id="<?= $item['id'] ?>">
                                                <p class="text-[18px] leading-[40px] font-medium text-[#7B8A99] transition-all duration-300 group-[&.active]:text-white group-hover:text-white inline-flex items-center justify-center relative after:w-0 group-[&.active]:after:w-full after:h-[6px] after:absolute after:bottom-[-20px] after:bg-secondary-main after:rounded-t-[5px] after:transition-all after:duration-450"><?= $item['title'] ?></p>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="about-us-section" data-section-id="about-us" class="Slider-about pt-60 pb-24 lg:pb-20 sm:pb-12 relative overflow-hidden section max-w-[1920px] mx-auto">
        <div class="absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 pointer-events-none z-[-1]">
            <img src="../assets/image/yellowshadow.png" alt="">
        </div>
        <div class="container max-w-[1520px] mx-auto">
            <div class="wrapper">
                <div class="text-editor editor-h2:text-secondary [&>h2>span]:text-[#0F62AB] editor-h2:font-bold flex items-center justify-center pb-[50px]">
                    <h2>Who<span>We Are</span></h2>
                </div>
            </div>
        </div>
        <div class="container max-w-[1520px] mx-auto">
            <div class="wrapper grid grid-cols-2 lg:grid-cols-1 gap-[125px] 2xl:gap-[50px] xl:gap-[30px] lg:gap-[60px] md:gap-[30px]">
                <div class="flex flex-col gap-[60px]">
                    <div dir class="text-editor editor-h2:text-secondary [&>h2>span]:text-[#1679BE] editor-h2:font-bold max-w-[700px] md:editor-h2:text-center md:editor-h2:justify-center">
                        <h2><span>Intego produces outdoor</span> playgrounds and equipment</h2>
                    </div>

                    <div class="swiper mobileCards relative w-full h-full overflow-visible">
                        <ul class="swiper-wrapper w-full h-fit">
                            <li class="swiper-slide group/slide relative text-center items-center flex justify-center lg:rounded-lg ">
                                <div class="aspect-[43/43] h-[430px] sm:aspect-[30/30] sm:h-[300px] group-[&.swiper-slide-active]/slide:blur-0 blur-[5px] duration-500 transition-all ease-in-out">
                                    <img class="w-full h-full rounded-[30px] object-cover object-center" src="../assets/image/rectangle15.jpeg" alt="">
                                </div>
                            </li>
                            <li class="swiper-slide group/slide relative text-center items-center flex justify-center lg:rounded-lg ">
                                <div class="aspect-[43/43] h-[430px] sm:aspect-[30/30] sm:h-[300px] group-[&.swiper-slide-active]/slide:blur-0 blur-[5px] duration-500 transition-all ease-in-out">
                                    <img class="w-full h-full rounded-[30px] object-cover object-center" src="../assets/image/rectangle14.jpeg" alt="">
                                </div>
                            </li>
                            <li class="swiper-slide group/slide relative text-center items-center flex justify-center lg:rounded-lg ">
                                <div class="aspect-[43/43] h-[430px] sm:aspect-[30/30] sm:h-[300px] group-[&.swiper-slide-active]/slide:blur-0 blur-[5px] duration-500 transition-all ease-in-out">
                                    <img class="w-full h-full rounded-[30px] object-cover object-center" src="../assets/image/rectangle13.jpeg" alt="">
                                </div>
                            </li>

                        </ul>
                                    <div data-paginationLoad class="lasting-pagination mt-[70px] !flex !items-center !justify-center [&_span]:w-[25px] [&_span]:h-[25px] [&_span]:animateConic [&_span]:opacity-100 [&_span]:bg-transparent [&_span]:relative [&_span]:z-10 [&_span]:before:absolute [&_span]:before:top-1/2 [&_span]:before:left-1/2 [&_span]:before:-translate-x-1/2 [&_span]:before:-translate-y-1/2 [&_span]:before:w-[10px] [&_span]:before:h-[10px] [&_span]:before:rounded-full [&_span.swiper-pagination-bullet-active]:before:bg-secondary [&_span]:before:bg-[#F2F3F5] "></div>

                    </div>
                </div>
                <div id="" class="text-content flex flex-col justify-end items-start">
                    <div dir class="text-contents text-editor pb-[50px] [&_h3]:text-gray/30 [&_h3]:font-semibold [&_p]:font-medium min-md:[&_h3]:max-w-[630px] min-md:[&_p]:max-w-[630px] [&_p]:text-gray">
                        <h3 class="text"> Intego contributes to make the world more enjoyable with game groups it produces </h3>
                        <p>With 15 years of experience, we are working to make cities more livable with our Children'sPlaygrounds, Outdoor Sports Equipment, Rubber Floor Covering and Urban Furniture products.</p>
                        <p>As Intego, we offer hundreds of different products to our valued customers with our high quality understanding and modern productionfacility. </p>
                    </div>
                    <button class="bg-secondary rounded-full px-7 py-4 sm:w-full [box-shadow:10px_10px_30px_0px_rgba(249,_177,_0,_0.25)] before:absolute before:left-0 before:top-0 before:hover:top-full before:w-full before:h-full before:hover:bg-[#FFD61B] overflow-hidden isolate relative before:duration-500">
                        <a class="flex items-center justify-center gap-[15px]" href="page-about.php">
                            <span dir class="text-white text-[18px] font-semibold">About Us</span>
                            <i class="icon icon-arrow-right-2 flex items-center justify-center -rotate-45 text-white"></i>
                        </a>
                    </button>
                </div>
            </div>

        </div>
    </section>
    <section id="certificates-section" data-section-id="certificates" class="other-brands w-full relative overflow-hidden py-28 lg:py-20 sm:py-8 sens section max-w-[1920px] mx-auto">
        <div class="content">
            <div class="container max-w-[1660px] mx-auto">
                <div class="wrapper">
                    <div class="text-editor editor-h2:text-secondary [&>h2>span]:text-[#0F62AB] editor-h2:font-bold flex items-center justify-center">
                        <h2>How We<span> Do It</span></h2>
                    </div>
                </div>
            </div>
            <div class="container max-w-[1660px] mx-auto">
                <div class="w-full relative after:absolute after:right-[-30px] after:translate-x-1/2 after:top-0 after:w-[600px] after:h-[130px] after:bg-[linear-gradient(270deg,_#FFF_-1.7%,_rgba(255,255,255,0.00)_93.32%)] after:z-2 after:pointer-events-none">
                    <div class="grid grid-cols-[minmax(0,1fr)_minmax(0,1fr)] lg:items-center md:grid-cols-1 md:gap-[15px]">
                        <div class="w-full h-auto lg:h-max flex-grow  md:order-1 flex items-center  relative lg:bg-[#FFF8EA] lg:rounded-[50px]">
                            <div class="absolute top-1/2 -translate-y-1/2 left-[100px] lg:hidden aspect-[100/48] h-[480px] 2xl:aspect-[90/40] 2xl:h-[400px] xl:aspect-[75/40] xl:h-[400px] lg:aspect-[76/40] lg:h-[400px] z-[-1] group-hover/slide:opacity-100 opacity-100 md:hidden">
                                <img src="../assets/image/newDetail.png" alt="">
                            </div>
                            <div class="absolute top-[16%] left-[16%] p-3 z-10 [mask-image:url('../../assets/image/smallproduct.svg')] [mask-size:contain] [mask-repeat:no-repeat] [mask-position:center] bg-secondary md:hidden">
                                <img src="../assets/image/icon-tab.png" alt="">
                            </div>
                            <div class="flex flex-col w-full pt-[30px] pl-[15px] relative">
                                <div class="brand-slider2 mb-[30px] relative overflow-visible reveal 2xl:pl-[100px] lg:pl-[160px] md:pl-0 pb-[100px] sm:pb-[10px] xl:!pl-0 pr-[60px] group-[&.rtl]/html:pr-0 group-[&.rtl]/html:pl-[60px] md:pb-0 md:mb-0 md:pr-0">
                                    <!-- <div class="absolute bg-[linear-gradient(270deg,_#FEF7E5_0%,_rgba(254,_247,_229,_0.00)_100%)] w-[300px] translate-x-[600px] h-[82px] z-[1]   pointer-events-none"></div> -->
                                    <div class="swiper-wrapper">
                                        <?php $brands = [
                                            [
                                                'text' => 'Design',
                                                'text-2' => '01'
                                            ],
                                            [
                                                'text' => 'Installation',
                                                'text-2' => '02'
                                            ],
                                            [
                                                'text' => 'Design',
                                                'text-2' => '03'
                                            ],
                                            [
                                                'text' => 'Installation',
                                                'text-2' => '04'
                                            ],
                                            [
                                                'text' => 'Design',
                                                'text-2' => '05'
                                            ],

                                        ];
                                        for ($i = 0; $i < 2; $i++) : foreach ($brands as $key => $item) :  ?>
                                                <div class="swiper-slide group cursor-pointer transition-all duration-450 opacity-0 [&.swiper-slide-active]:opacity-100 [&.swiper-slide-next]:opacity-100 md:[&.swiper-slide-next]:opacity-0 [&.swiper-slide-next_+_.swiper-slide]:opacity-0  ">
                                                    <div class="item md:w-full p-[20px] lg:px-0 md:py-0 text-center lg:text-start md:text-center relative">
                                                        <span dir class="text-[48px] 2xl:text-[40px] xl:text-[36px] lg:text-[32px] md:text-[28px] sm:text-[24px] xs:text-[20px] bg-gradient-to-l from-[#7B8A9966]/10 to-[#7B8A99]/40 group-[&.swiper-slide-active]:!text-secondary duration-500  bg-clip-text text-transparent font-semibold "> <?= $item['text'] ?></span>
                                                        <span dir class="absolute top-0 left-[10%] md:hidden lg:left-0 text-secondary font-semibold text-[20px] opacity-0 group-[&.swiper-slide-active]:opacity-100 duration-500"><?= $item['text-2'] ?></span>
                                                    </div>
                                                </div>
                                        <?php
                                            endforeach;
                                        endfor; ?>
                                    </div>
                                </div>
                                <div class="text-slider2 min-md:max-w-[500px] md:w-full overflow-hidden mb-[80px] xl:mb-[40px] sm:mb-[30px] reveal min-md:absolute min-xl:left-[37%] min-md:top-1/2 min-md:left-[25%]">
                                    <div class="swiper-wrapper">
                                        <?php for ($i = 1; $i <= 10; $i++) : ?>
                                            <div class="swiper-slide">
                                                <div class="item w-full ">
                                                    <div dir class="text-editor md:text-center w-full max-w-full editor-p:text-gray editor-p:font-medium editor-p:leading-[28px] line-clamp-3">
                                                        <p>As Intego, we offer hundreds of different products to our valued customers with our high quality understanding and modern production facility. </p>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endfor; ?>
                                    </div>
                                </div>
                                <div class="flex items-center gap-[100px] xl:gap-[60px] lg:gap-[30px] md:gap-[20px] pb-[20px] min-md:pl-[35%] md:justify-center sm:pb-0 sm:py-20 md:hidden">
                                    <div class="nav-buttons flex group-[&.rtl]/html:flex-row-reverse items-center gap-[20px] xs:gap-[10px] md:ml-0 reveal-button-left">
                                        <div class="brand-prev group/nav cursor-pointer pointer-events-auto flex items-center justify-center w-[70px] md:w-[50px] aspect-square rounded-full  relative z-10 transition-all duration-450 [&.brand-disabled]:pointer-events-none">
                                            <i class="text-[20px] leading-none h-[20px] text-secondary-main transition-all duration-450 group-[&.brand-disabled]/nav:text-secondary-main/60"></i>
                                            <svg class="group" xmlns="http://www.w3.org/2000/svg" width="40" height="22" viewBox="0 0 40 22" fill="none">
                                                <path class="group-hover:!stroke-secondary duration-500" d="M10.1392 21L1 11M1 11L10.1392 1M1 11H39" stroke="#DEDFE0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>

                                        <div class="brand-next group/nav cursor-pointer pointer-events-auto flex items-center justify-center w-[70px] md:w-[50px] aspect-square rounded-full  relative z-10 transition-all duration-450 [&.brand-disabled]:pointer-events-none">
                                            <i class="text-[20px] leading-none h-[20px] text-secondary-main transition-all duration-450 group-[&.brand-disabled]/nav:text-secondary-main/60"></i>
                                            <svg class="group" xmlns="http://www.w3.org/2000/svg" width="40" height="22" viewBox="0 0 40 22" fill="none">
                                                <path class="group-hover:!stroke-secondary duration-500" d="M31.7444 1L39 11M39 11L31.7444 21M39 11H1" stroke="#DEDFE0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                    </div>
                                    <!--<div id="website-button" class="reveal-button-right">
                                        <?php
                                        $link = "#";
                                        $title = "Visit Website";
                                        $background = "bg-secondary-50 backdrop-blur-[15px]";
                                        $backgroundHover = "before:bg-primary-main";
                                        $textColor = "text-secondary-main";
                                        $textColorHover = "group-hover/button:min-md:text-white";
                                        //include 'layout/button.php';
                                        ?>
                                    </div>-->
                                </div>
                            </div>
                        </div>
                        
                        <div class="reveal-image 2xl:translate-x-0 xl:-translate-x-[200px] md:translate-x-0 ">
                            <div class="image-wrapper  relative">
                                <div class="imageSlider2 md:w-full">
                                    <div class="swiper-wrapper">
                                        <?php
                                        $list = [
                                            [
                                                "image" => "about.png",
                                            ],
                                            [
                                                "image" => "rectangle.png",
                                            ],
                                            [
                                                "image" => "rectangle2.png",
                                            ],
                                            [
                                                "image" => "rectangle3.png",
                                            ],
                                            [
                                                "image" => "rectangle4.png",
                                            ],
                                            [
                                                "image" => "rectangle5.png",
                                            ],
                                            [
                                                "image" => "rectangle6.png",
                                            ],
                                            [
                                                "image" => "rectangle7.png",
                                            ],
                                            [
                                                "image" => "rectangle8.png",
                                            ],
                                            [
                                                "image" => "rectangle2.png",
                                            ],
                                            [
                                                "image" => "about.png",
                                            ],
                                            [
                                                "image" => "rectangle.png",
                                            ],
                                            [
                                                "image" => "rectangle2.png",
                                            ],
                                            [
                                                "image" => "rectangle3.png",
                                            ],
                                            [
                                                "image" => "rectangle4.png",
                                            ],
                                            [
                                                "image" => "rectangle5.png",
                                            ],
                                            [
                                                "image" => "rectangle6.png",
                                            ],
                                            [
                                                "image" => "rectangle7.png",
                                            ],
                                            [
                                                "image" => "rectangle8.png",
                                            ],
                                            [
                                                "image" => "rectangle2.png",
                                            ],
                                        ];
                                        foreach ($list as $key => $item) : ?>
                                            <div class="swiper-slide group min-md:!opacity-100 z-0  min-md:pointer-events-none min-md:[&.swiper-slide-prev]:z-1  min-md:[&.swiper-slide-active]:z-5 min-md:[&.swiper-slide-next]:z-4   md:w-full">
                                                <div class="image min-md:shadow-[0_10px_60px_-15px_rgba(252,186,3,0.15)] min-md:pointer-events-none block min-md:aspect-[8/8] md:scale-90 md:group-[&.swiper-slide-active]:scale-100 min-md:h-[800px] md:h-[480px] min-md:[mask-image:url('../../assets/image/newdetail.svg')] min-md:[mask-size:contain] min-md:[mask-repeat:no-repeat] min-md:[mask-position:center] min-xl:aspect-[40/40] min-xl:h-[400px] min-2xl:aspect-[68/50] min-2xl:h-[500px] sm:h-[350px] md:w-full rounded-[50px]  overflow-hidden isolate duration-1000 ease-manidar  group-[&.swiper-slide-prev]:opacity-0  min-md:blur-[5px]  min-md:group-[&.swiper-slide-active]:blur-0 min-md:translate-x-[40%] min-md:scale-[0.5] min-md:group-[&.swiper-slide-active]:pointer-events-auto min-md:group-[&.swiper-slide-active]:opacity-100 min-md:group-[&.swiper-slide-active]:translate-x-0 min-md:group-[&.swiper-slide-active]:scale-75 xl:group-[&.swiper-slide-active]:scale-[0.6] xl:scale-[0.4]">
                                                    <img class="w-full h-full object-cover object-center duration-450 group-hover:scale-105" src="../assets/image/project/<?= $item['image'] ?>" alt="" loading="lazy">
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="md:flex items-center md:justify-center hidden">
                                    <div class="nav-buttons flex items-center gap-[20px] xs:gap-[10px] md:ml-0 reveal-button-left">
                                        <div class="brand-prev group/nav cursor-pointer pointer-events-auto flex items-center justify-center w-[70px] md:w-[50px] aspect-square rounded-full  relative z-10 transition-all duration-450 [&.brand-disabled]:pointer-events-none">
                                            <i class="text-[20px] leading-none h-[20px] text-secondary-main transition-all duration-450 group-[&.brand-disabled]/nav:text-secondary-main/60"></i>
                                            <svg class="group" xmlns="http://www.w3.org/2000/svg" width="40" height="22" viewBox="0 0 40 22" fill="none">
                                                <path class="group-hover:!stroke-secondary duration-500" d="M10.1392 21L1 11M1 11L10.1392 1M1 11H39" stroke="#DEDFE0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>

                                        <div class="brand-next group/nav cursor-pointer pointer-events-auto flex items-center justify-center w-[70px] md:w-[50px] aspect-square rounded-full  relative z-10 transition-all duration-450 [&.brand-disabled]:pointer-events-none">
                                            <i class="text-[20px] leading-none h-[20px] text-secondary-main transition-all duration-450 group-[&.brand-disabled]/nav:text-secondary-main/60"></i>
                                            <svg class="group" xmlns="http://www.w3.org/2000/svg" width="40" height="22" viewBox="0 0 40 22" fill="none">
                                                <path class="group-hover:!stroke-secondary duration-500" d="M31.7444 1L39 11M39 11L31.7444 21M39 11H1" stroke="#DEDFE0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="mission-vision-section" data-section-id="mission-vision" class="py-28 lg:py-20 sm:py-10 overflow-hidden sens relative section max-w-[1920px] mx-auto">
        <div class="container max-w-[1440px] mx-auto">
            <div class="wrapper">
                <div class="text-editor editor-h2:text-secondary [&>h2>span]:text-[#0F62AB] editor-h2:font-bold flex items-center justify-center pb-[60px] sm:pb-[30px]">
                    <h2>What We<span> Are Doing</span></h2>
                </div>
            </div>
        </div>
        <div class="container max-w-[1440px] mx-auto">
            <div class="wrapper grid grid-cols-2 lg:grid-cols-1 lg:flex lg:flex-col-reverse">
                <div class="productCategories swiper w-full !overflow-visible z-6 relative max-h-[650px]">
                    <div class="swiper-wrapper">
                        <?php
                        $list = [
                            [
                                'img' => 'rectangle.png',
                            ],
                            [
                                'img' => 'rectangle2.png'
                            ],
                            [
                                'img' => 'rectangle3.png'
                            ],
                            [
                                'img' => 'rectangle4.png'
                            ],
                            [
                                'img' => 'rectangle5.png'
                            ],
                            [
                                'img' => 'rectangle6.png'
                            ],
                            [
                                'img' => 'rectangle7.png'
                            ],
                            [
                                'img' => 'rectangle8.png'
                            ],
                            [
                                'img' => 'rectangle.png',
                            ],
                            [
                                'img' => 'rectangle2.png'
                            ],
                            [
                                'img' => 'rectangle3.png'
                            ],
                            [
                                'img' => 'rectangle4.png'
                            ],
                            [
                                'img' => 'rectangle5.png'
                            ],
                            [
                                'img' => 'rectangle6.png'
                            ],
                            [
                                'img' => 'rectangle7.png'
                            ],
                            [
                                'img' => 'rectangle8.png'
                            ]
                        ];
                        foreach ($list as $key => $item) : ?>
                            <div class="swiper-slide group !opacity-100 z-0  pointer-events-none [&.swiper-slide-prev]:z-6 [&.swiper-slide-active]:z-5 [&.swiper-slide-next]:z-4 [&.swiper-slide-next+.swiper-slide]:z-3 [&.swiper-slide-next+.swiper-slide+.swiper-slide]:z-2">
                                <div class="image  shadow-[0_10px_60px_-15px_rgba(252,186,3,0.15)] pointer-events-none block aspect-[77/55] h-[550px] 2xl:aspect-[68/50] 2xl:h-[500px] sm:h-[350px] rounded-[50px] lg:w-full overflow-hidden isolate duration-1000 ease-manidar opacity-0 translate-x-[-30%] scale-[0.5] group-[&.swiper-slide-active]:pointer-events-auto group-[&.swiper-slide-active]:opacity-100 group-[&.swiper-slide-active]:translate-x-0 group-[&.swiper-slide-active]:scale-100 group-[&.swiper-slide-next]:opacity-50 group-[&.swiper-slide-next]:scale-90 group-[&.swiper-slide-next]:translate-x-[-10%] group-[&.swiper-slide-next+.swiper-slide]:opacity-25 group-[&.swiper-slide-next+.swiper-slide]:scale-[0.8] group-[&.swiper-slide-next+.swiper-slide]:translate-x-[-20%] group-[&.swiper-slide-prev]:translate-x-[10%] group-[&.swiper-slide-prev]:scale-110">
                                    <img class="w-full h-full object-cover object-center duration-450 group-hover:scale-105" src="../assets/image/project/<?= $item['img'] ?>" alt="" loading="lazy">
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="flex justify-center items-center gap-[30px] pr-[150px] sm:p-0 pointer-events-auto z-20 absolute lg:left-1/2 lg:-translate-x-1/2 lg:bottom-[-12%] text-[24px] xl:text-[22px] md:text-[16px] font-semibold group-hover/item:font-bold group-hover/item:translate-x-1 duration-500 leading-[36px] text-white-[-10%] right-0">
                        <div class="product-prev group/swiperNews-button !flex !items-center [&.swiper-button-disabled]:opacity-25 !justify-center !text-black pointer-events-auto cursor-pointer">
                            <i class="icon text-3xl text-secondary duration-500">
                                <svg class="group" xmlns="http://www.w3.org/2000/svg" width="40" height="22" viewBox="0 0 40 22" fill="none">
                                    <path class="group-hover:!stroke-secondary duration-500" d="M10.1392 21L1 11M1 11L10.1392 1M1 11H39" stroke="#DEDFE0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </i>
                        </div>
                        <div class="product-next group/swiperNews-button !flex !items-center [&.swiper-button-disabled]:opacity-25 !justify-center !text-black pointer-events-auto cursor-pointer">
                            <i class="icon text-3xl text-secondary duration-500">
                                <svg class="group" xmlns="http://www.w3.org/2000/svg" width="40" height="22" viewBox="0 0 40 22" fill="none">
                                    <path class="group-hover:!stroke-secondary duration-500" d="M31.7444 1L39 11M39 11L31.7444 21M39 11H1" stroke="#DEDFE0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </i>
                        </div>
                    </div>
                </div>
                <div class="productImages pl-[130px] py-[20px] pr-[30px] xsm:p-10 xs:p-0  rounded-[50px] swiper-autoplay-on-viewport swiper !overflow-hidden animate-carousel w-full max-h-[600px] -translate-y-5 sm:!h-auto">
                    <div class="absolute top-0 left-0 w-full h-full pointer-events-none">
                        <img class="w-full h-full" src="../assets/image/about2.png" alt="">
                    </div>
                    <div class="swiper-wrapper text-center">
                        <?php
                        $list = [
                            [
                                'text' => 'What we are doing 1',
                                'img' => '../assets/image/product/rectangle2.png',
                            ],
                            [
                                'text' => 'What we are doing 2',
                                'img' => '../assets/image/product/rectangle8.png',
                            ],
                            [
                                'text' => 'What we are doing 3',
                                'img' => '../assets/image/product/rectangle9.png',
                            ],
                            [
                                'text' => 'What we are doing 4',
                                'img' => '../assets/image/product/rectangle10.png',
                            ],
                            [
                                'text' => 'What we are doing 5',
                                'img' => '../assets/image/product/rectangle11.png',
                            ],
                            [
                                'text' => 'What we are doing 6',
                                'img' => '../assets/image/product/rectangle8.png',
                            ],
                            [
                                'text' => 'What we are doing 7',
                                'img' => '../assets/image/product/rectangle9.png',
                            ],
                            [
                                'text' => 'What we are doing 8',
                                'img' => '../assets/image/product/rectangle10.png',
                            ],
                            [
                                'text' => 'What we are doing 1',
                                'img' => '../assets/image/product/rectangle2.png',
                            ],
                            [
                                'text' => 'What we are doing 2',
                                'img' => '../assets/image/product/rectangle8.png',
                            ],
                            [
                                'text' => 'What we are doing 3',
                                'img' => '../assets/image/product/rectangle9.png',
                            ],
                            [
                                'text' => 'What we are doing 4',
                                'img' => '../assets/image/product/rectangle10.png',
                            ],
                            [
                                'text' => 'What we are doing 5',
                                'img' => '../assets/image/product/rectangle11.png',
                            ],
                            [
                                'text' => 'What we are doing 6',
                                'img' => '../assets/image/product/rectangle8.png',
                            ],
                            [
                                'text' => 'What we are doing 7',
                                'img' => '../assets/image/product/rectangle9.png',
                            ],
                            [
                                'text' => 'What we are doing 8',
                                'img' => '../assets/image/product/rectangle10.png',
                            ],
                        ];
                        foreach ($list as $key => $item) : ?>
                            <div class="swiper-slide flex items-center group relative group cursor-pointer ">
                                <div class="relative z-20 overflow-hidden flex items-center justify-start gap-[50px] xl:gap-[30px] lg:gap-[15px] p-[12px_20px_12px_16px]
                                group-[&.swiper-slide-active]:before:absolute
                                group-[&.swiper-slide-active]:before:top-0
                                group-[&.swiper-slide-active]:before:left-0
                                group-[&.swiper-slide-active]:before:w-full
                                group-[&.swiper-slide-active]:before:h-full
                                group-[&.swiper-slide-active]:before:bg-white/20
                                group-[&.swiper-slide-active]:before:border
                                group-[&.swiper-slide-active]:before:border-solid
                                group-[&.swiper-slide-active]:before:border-white/40
                                group-[&.swiper-slide-active]:before:rounded-[30px]
                                group-[&.swiper-slide-active]:before:[mask-image:linear-gradient(to_left,transparent_25%,black_50%)]">
                                    <div class="image aspect-[9/9] h-[90px] xl:aspect-[6/6] xl:h-[60px] md:hidden [mask-image:url('../../assets/image/smallproduct.svg')] [mask-size:contain] [mask-repeat:no-repeat] [mask-position:center] bg-[#F1F8FE]">
                                        <img class="w-full h-full object-contain object-center p-3" src="<?= $item['img'] ?>" alt="">
                                    </div>
                                    <div dir class="text-[24px] xl:text-[22px] md:text-[15px] font-semibold group-hover/item:font-bold group-hover/item:translate-x-1 duration-500 leading-[36px] text-white"><?= $item['text'] ?></div>
                                    <i class="icon icon-arrow-right-2 sm:-rotate-45 flex items-center justify-center text-white group-[&.swiper-slide-active]:opacity-100 opacity-0 xs:opacity-100"></i>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="swiper-scrollbar !bg-white/10 w-[8px] rtl !absolute !top-1/2 !-translate-y-1/2 !left-24 !h-[500px] lg:hidden "></div>
                </div>

            </div>
        </div>
    </section>
    <section id="what-we-do-section" data-section-id="what-we-do" class="reference-field overflow-hidden py-28 lg:py-20 sm:py-8 relative section max-w-[1920px] mx-auto">
        <div class="container max-w-[1520px] mx-auto">
            <div class="wrapper">
                <div class="text-editor editor-h2:text-secondary editor-h2:font-bold flex items-center justify-center pb-[60px]">
                    <h2>Certificates</h2>
                </div>
            </div>
        </div>
        <div class="container max-w-[1520px] mx-auto">
            <div class="wrapper">
                <div class="swiperReferenceCarousel overflow-hidden isolate">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="item py-3 sm:py-0 rounded-[20px] w-full h-[150px] sm:h-[200px]">
                                <img class="w-full h-full object-contain object-center" clas src="../assets/image/reference/1.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="item py-3 sm:py-0 rounded-[20px] w-full h-[150px] sm:h-[200px]">
                                <img class="w-full h-full object-contain object-center" clas src="../assets/image/reference/2.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="item py-3 sm:py-0 rounded-[20px] w-full h-[150px] sm:h-[200px]">
                                <img class="w-full h-full object-contain object-center" clas src="../assets/image/reference/3.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="item py-3 sm:py-0 rounded-[20px] w-full h-[150px] sm:h-[200px]">
                                <img class="w-full h-full object-contain object-center" clas src="../assets/image/reference/4.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="item py-3 sm:py-0 rounded-[20px] w-full h-[150px] sm:h-[200px]">
                                <img class="w-full h-full object-contain object-center" clas src="../assets/image/reference/5.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="item py-3 sm:py-0 rounded-[20px] w-full h-[150px] sm:h-[200px]">
                                <img class="w-full h-full object-contain object-center" clas src="../assets/image/reference/1.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="item py-3 sm:py-0 rounded-[20px] w-full h-[150px] sm:h-[200px]">
                                <img class="w-full h-full object-contain object-center" clas src="../assets/image/reference/2.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="item py-3 sm:py-0 rounded-[20px] w-full h-[150px] sm:h-[200px]">
                                <img class="w-full h-full object-contain object-center" clas src="../assets/image/reference/3.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="item py-3 sm:py-0 rounded-[20px] w-full h-[150px] sm:h-[200px]">
                                <img class="w-full h-full object-contain object-center" clas src="../assets/image/reference/4.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="item py-3 sm:py-0 rounded-[20px] w-full h-[150px] sm:h-[200px]">
                                <img class="w-full h-full object-contain object-center" clas src="../assets/image/reference/5.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="item py-3 sm:py-0 rounded-[20px] w-full h-[150px] sm:h-[200px]">
                                <img class="w-full h-full object-contain object-center" clas src="../assets/image/reference/1.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="item py-3 sm:py-0 rounded-[20px] w-full h-[150px] sm:h-[200px]">
                                <img class="w-full h-full object-contain object-center" clas src="../assets/image/reference/2.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="item py-3 sm:py-0 rounded-[20px] w-full h-[150px] sm:h-[200px]">
                                <img class="w-full h-full object-contain object-center" clas src="../assets/image/reference/3.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="item py-3 sm:py-0 rounded-[20px] w-full h-[150px] sm:h-[200px]">
                                <img class="w-full h-full object-contain object-center" clas src="../assets/image/reference/4.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="item py-3 sm:py-0 rounded-[20px] w-full h-[150px] sm:h-[200px]">
                                <img class="w-full h-full object-contain object-center" clas src="../assets/image/reference/5.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="brands-section" data-section-id="brands" class="mission-field py-28 lg:py-20 sm:py-8 sens relative section max-w-[1920px] mx-auto">
        <div class="container max-w-[1560px] mx-auto">
            <div class="wrapper">
                <div class="text-editor editor-h2:text-secondary [&>h2>span]:text-[#0F62AB] editor-h2:font-bold flex items-center justify-center pb-[60px] sm:pb-[30px]">
                    <h2>Vision &<span> Mission</span></h2>
                </div>
            </div>
        </div>
        <div class="container max-w-[1560px] mx-auto sm:px-[20px]">
            <div class="wrapper flex items-center justify-center md:items-start md:justify-start gap-[80px] xl:gap-[60px] lg:gap-[40px] md:hidden">
                <div class="flex group flex-col items-start justify-start relative md:w-auto md:shrink-0">
                    <div class="absolute top-[-10px] left-0 w-full h-full group-hover:-rotate-6 duration-500 z-[-1] md:hidden">
                        <img class="w-full h-full object-contain object-center" src="../assets/image/ornek.png" alt="">
                    </div>
                    <div class="border-[25px] border-solid border-[#FAFAFA] bg-white hover:border-[#FFF8EA] sm:border-[#FFF8EA] p-16 xl:p-8 lg:p-5 duration-500 rounded-[120px] md:min-w-[400px]">
                        <div class="flex items-center justify-start gap-[30px] pb-[30px] lg:pb-[20px] relative">
                            <div class="image w-[90px] h-[90px] opacity-100 group-hover:opacity-0 duration-500 sm:opacity-0 block">
                                <img class="w-full h-full object-cover object-center" src="../assets/image/mission.png" alt="">
                            </div>
                            <div class="image w-[90px] h-[90px] absolute top-0 left-0 group-[&.rtl]/html:right-0 group-[&.rtl]/html:left-auto group-hover:opacity-100 duration-500 opacity-0 sm:opacity-100">
                                <img class="w-full h-full object-cover object-center" src="../assets/image/visionsecondary.png" alt="">
                            </div>
                            <h2 class="text-[48px] 2xl:text-[40px] xl:text-[36px] lg:text-[32px] md:text-[28px] sm:text-[25px] lg:leading-[32px] md:leading-[28px] font-semibold leading-[36px] text-gray/50 group-hover:text-secondary sm:text-secondary duration-500">Vision</h2>
                        </div>
                        <div dir class="text-editor xs:text-center editor-p:max-w-[500px] editor-p:text-gray editor-p:leading-[28px] editor-p:font-medium">
                            <p>With 15 years of experience, we are working to make cities more livable with our Children's Playgrounds, Outdoor Sports Equipment, Rubber Floor Covering and Urban Furniture products. </p>
                            <p>As Intego, we offer hundreds of different products to our valued customers with our high quality understanding and modern production facility. </p>
                        </div>
                    </div>
                </div>
                <div class="flex group flex-col items-start justify-start relative md:w-auto md:shrink-0">
                    <div class="absolute top-[-10px] left-0 w-full h-full group-hover:-rotate-6 duration-500 z-[-1] md:hidden">
                        <img class="w-full h-full object-contain object-center" src="../assets/image/ornek.png" alt="">
                    </div>
                    <div class="border-[25px] border-solid border-[#FAFAFA] bg-white hover:border-[#FFF8EA] sm:border-[#FFF8EA] p-16 xl:p-8 lg:p-5 duration-500 rounded-[120px] md:min-w-[400px]">
                        <div class="flex items-center justify-start gap-[30px] pb-[30px] lg:pb-[20px] relative">
                            <div class="image w-[90px] h-[90px] opacity-100 group-hover:opacity-0 duration-500 sm:opacity-0 block">
                                <img class="w-full h-full object-cover object-center" src="../assets/image/vision.png" alt="">
                            </div>
                            <div class="image w-[90px] h-[90px] absolute top-0 left-0 group-[&.rtl]/html:right-0 group-[&.rtl]/html:left-auto group-hover:opacity-100 duration-500 opacity-0 sm:opacity-100">
                                <img class="w-full h-full object-cover object-center" src="../assets/image/missionsecondary.png" alt="">
                            </div>
                            <h2 class="text-[48px] 2xl:text-[40px] xl:text-[36px] lg:text-[32px] md:text-[28px] sm:text-[25px] lg:leading-[32px] md:leading-[28px] font-semibold leading-[36px] text-gray/50 group-hover:text-secondary sm:text-secondary duration-500">Mission</h2>
                        </div>
                        <div dir class="text-editor xs:text-center editor-p:max-w-[500px] editor-p:text-gray editor-p:leading-[28px] editor-p:font-medium">
                            <p>With 15 years of experience, we are working to make cities more livable with our Children's Playgrounds, Outdoor Sports Equipment, Rubber Floor Covering and Urban Furniture products. </p>
                            <p>As Intego, we offer hundreds of different products to our valued customers with our high quality understanding and modern production facility. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                        <div class="swiperMission overflow-hidden isolate">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                <div class="flex group flex-col items-start justify-start relative">
                                        <div class="absolute top-[-10px] left-0 w-full h-full group-hover:-rotate-6 duration-500 z-[-1] md:hidden">
                                            <img class="w-full h-full object-contain object-center" src="../assets/image/ornek.png" alt="">
                                        </div>
                                        <div class="border-[15px] border-solid border-[#FAFAFA] bg-white hover:border-[#FFF8EA] sm:border-[#FFF8EA] p-16 xl:p-8 duration-500 rounded-[120px] w-full">
                                            <div class="flex items-center justify-start gap-[30px] pb-[30px] lg:pb-[20px] relative">
                                                <div class="image w-[70px] h-[70px] sm:w-[50px] sm:h-[50px] opacity-100 group-hover:opacity-0 duration-500 sm:opacity-0 block">
                                                    <img class="w-full h-full object-cover object-center" src="../assets/image/mission.png" alt="">
                                                </div>
                                                <div class="image w-[70px] h-[70px] sm:w-[50px] sm:h-[50px] absolute top-0 left-0 group-[&.rtl]/html:right-0 group-[&.rtl]/html:left-auto group-hover:opacity-100 duration-500 opacity-0 sm:opacity-100">
                                                    <img class="w-full h-full object-cover object-center" src="../assets/image/visionsecondary.png" alt="">
                                                </div>
                                                <h2 class="text-[48px] 2xl:text-[40px] xl:text-[36px] lg:text-[32px] md:text-[28px] sm:text-[25px] lg:leading-[32px] md:leading-[28px] font-semibold leading-[36px] text-gray/50 group-hover:text-secondary sm:text-secondary duration-500">Vision</h2>
                                            </div>
                                            <div dir class="text-editor xs:text-center editor-p:text-gray editor-p:leading-[28px] editor-p:font-medium">
                                                <p>With 15 years of experience, we are working to make cities more livable with our Children's Playgrounds, Outdoor Sports Equipment, Rubber Floor Covering and Urban Furniture products. </p>
                                                <p>As Intego, we offer hundreds of different products to our valued customers with our high quality understanding and modern production facility. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="flex group flex-col items-start justify-start relative md:w-auto md:shrink-0">
                            <div class="absolute top-[-10px] left-0 w-full h-full group-hover:-rotate-6 duration-500 z-[-1] md:hidden">
                                <img class="w-full h-full object-contain object-center" src="../assets/image/ornek.png" alt="">
                            </div>
                                        <div class="border-[15px] border-solid border-[#FAFAFA] bg-white hover:border-[#FFF8EA] sm:border-[#FFF8EA] p-16 xl:p-8 duration-500 rounded-[120px] w-full">
                                <div class="flex items-center justify-start gap-[30px] pb-[30px] lg:pb-[20px] relative">
                                    <div class="image w-[70px] h-[70px] sm:w-[50px] sm:h-[50px] opacity-100 group-hover:opacity-0 duration-500 sm:opacity-0 block">
                                        <img class="w-full h-full object-cover object-center" src="../assets/image/vision.png" alt="">
                                    </div>
                                    <div class="image w-[70px] h-[70px] sm:w-[50px] sm:h-[50px] absolute top-0 left-0 group-[&.rtl]/html:right-0 group-[&.rtl]/html:left-auto group-hover:opacity-100 duration-500 opacity-0 sm:opacity-100">
                                        <img class="w-full h-full object-cover object-center" src="../assets/image/missionsecondary.png" alt="">
                                    </div>
                                    <h2 class="text-[48px] 2xl:text-[40px] xl:text-[36px] lg:text-[32px] md:text-[28px] sm:text-[25px] lg:leading-[32px] md:leading-[28px] font-semibold leading-[36px] text-gray/50 group-hover:text-secondary sm:text-secondary duration-500">Mission</h2>
                                </div>
                                            <div dir class="text-editor xs:text-center editor-p:text-gray editor-p:leading-[28px] editor-p:font-medium">
                                    <p>With 15 years of experience, we are working to make cities more livable with our Children's Playgrounds, Outdoor Sports Equipment, Rubber Floor Covering and Urban Furniture products. </p>
                                    <p>As Intego, we offer hundreds of different products to our valued customers with our high quality understanding and modern production facility. </p>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
              <div class="nav-buttons md:flex items-center justify-center pt-[20px] gap-[20px] hidden xs:gap-[10px] md:ml-0">
                                        <div class="swiperMission-prev group/nav cursor-pointer pointer-events-auto flex items-center justify-center w-[70px] md:w-[50px] aspect-square rounded-full  relative z-10 transition-all duration-450 [&.brand-disabled]:pointer-events-none">
                                            <i class="text-[20px] leading-none h-[20px] text-secondary-main transition-all duration-450 group-[&.brand-disabled]/nav:text-secondary-main/60"></i>
                                            <svg class="group" xmlns="http://www.w3.org/2000/svg" width="40" height="22" viewBox="0 0 40 22" fill="none">
                                                <path class="group-hover:!stroke-secondary duration-500" d="M10.1392 21L1 11M1 11L10.1392 1M1 11H39" stroke="#DEDFE0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>

                                        <div class="swiperMission-next group/nav cursor-pointer pointer-events-auto flex items-center justify-center w-[70px] md:w-[50px] aspect-square rounded-full  relative z-10 transition-all duration-450 [&.brand-disabled]:pointer-events-none">
                                            <i class="text-[20px] leading-none h-[20px] text-secondary-main transition-all duration-450 group-[&.brand-disabled]/nav:text-secondary-main/60"></i>
                                            <svg class="group" xmlns="http://www.w3.org/2000/svg" width="40" height="22" viewBox="0 0 40 22" fill="none">
                                                <path class="group-hover:!stroke-secondary duration-500" d="M31.7444 1L39 11M39 11L31.7444 21M39 11H1" stroke="#DEDFE0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                    </div>
                        </div>
        </div>
    </section>
    <section id="brands-section2" data-section-id="brands2" class="other-brands w-full overflow-hidden py-28 lg:py-20 sm:py-8 sens relative section max-w-[1920px] mx-auto">
        <div class="container max-w-[1560px] mx-auto">
            <div class="wrapper">
                <div class="text-editor editor-h2:text-secondary [&>h2>span]:text-[#0F62AB] editor-h2:font-bold flex items-center justify-center pb-[60px] sm:pb-[30px]">
                    <h2>Our<span> Other Brands</span></h2>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container max-w-[1660px] mx-auto">
                <div class="w-full relative after:absolute after:right-[-30px] after:translate-x-1/2 after:top-0 after:w-[600px] after:h-[130px] after:bg-[linear-gradient(270deg,_#FFF_-1.7%,_rgba(255,255,255,0.00)_93.32%)] after:z-2 after:pointer-events-none">
                    <div class="flex md:flex-col-reverse w-full gap-[30px] lg:gap-[20px]">
                        <div class="reveal-image aspect-[70/70] h-[700px] 2xl:aspect-[60/60] 2xl:h-[600px] xl:aspect-[50/50] xl:h-[500px] lg:aspect-[47/47] lg:h-[470px] md:w-full md:h-[500px] sm:h-[370px] 2xs:h-[340px]">
                            <div class="image-wrapper  relative">
                                <div class="imageSlider aspect-[70/70] h-[700px] 2xl:aspect-[60/60] 2xl:h-[600px] xl:aspect-[50/50] xl:h-[500px] lg:aspect-[47/47] lg:h-[470px] md:w-full md:h-[500px] sm:h-[370px] 2xs:h-[340px] overflow-hidden animate-carousel min-md:[mask-image:url('../../assets/image/newdetail.svg')] min-md:[mask-size:contain] min-md:[mask-repeat:no-repeat] min-md:[mask-position:center]">
                                    <div class="swiper-wrapper">
                                        <?php
                                        $list = [
                                            [
                                                "image" => "about.png",
                                            ],
                                            [
                                                "image" => "rectangle.png",
                                            ],
                                            [
                                                "image" => "rectangle2.png",
                                            ],
                                            [
                                                "image" => "rectangle3.png",
                                            ],
                                            [
                                                "image" => "rectangle4.png",
                                            ],

                                        ];
                                        foreach ($list as $key => $item) : ?>
                                            <div class="swiper-slide">
                                                <div class=" rounded-[20px] aspect-[70/70] h-[700px] 2xl:aspect-[60/60] 2xl:h-[600px] xl:aspect-[50/50] xl:h-[500px] lg:aspect-[47/47] lg:h-[470px] md:w-full md:h-[500px] sm:h-[370px] 2xs:h-[340px] grid place-items-center ">
                                                    <img src="../assets/image/project/<?= $item["image"] ?>" alt="About Us" class="w-full h-full md:h-[500px] sm:h-[370px] 2xs:h-[340px] object-cover duration-450 md:rounded-[50px]" />
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-1/2 md:w-full h-auto flex-grow lg:w-full  md:order-1 flex items-center  relative lg:bg-[#FFF8EA] md:rounded-[50px] lg:rounded-[60px]">
                            <div class="absolute top-1/2 -translate-y-1/2 left-[-70px] group-[&.rtl]/html:left-auto group-[&.rtl]/html:right-[-70px] aspect-[100/48] h-[480px] 2xl:aspect-[96/45] 2xl:h-[450px] xl:aspect-[75/40] xl:h-[400px] lg:aspect-[76/40] lg:h-[400px] z-[-1] group-hover/slide:opacity-100 opacity-100 lg:hidden ">
                                <img src="../assets/image/newDetail.png" alt="">
                            </div>
                            <div class="flex flex-col w-full pt-[30px] pl-[15px] relative overflow-hidden isolate">
                                <div class="brand-slider mb-[30px] relative overflow-hidden reveal 2xl:pl-[100px] lg:pl-[160px] sm:pl-0">
                                    <div class="swiper-wrapper xl:ms-[-150px] md:ms-0 ">
                                        <?php $brands = [
                                            ['link' => 'avengrass.com', 'image' => 'about-us-brands.jpg'],
                                            ['link' => 'echran.com', 'image' => 'about-us-mv.jpg'],
                                            ['link' => 'integralgroup.com', 'image' => 'blog.jpg'],
                                            ['link' => 'wepadel.com', 'image' => 'news-page-1.jpg'],
                                            ['link' => 'wepadbol.com', 'image' => 'news-page-2.jpg'],

                                        ];
                                        for ($i = 0; $i < 1; $i++) : foreach ($brands as $key => $item) :  ?>
                                                <div class="swiper-slide group cursor-pointer transition-all duration-450 opacity-0 [&.swiper-slide-active]:opacity-100 [&.swiper-slide-prev]:opacity-100 [&.swiper-slide-next]:opacity-100 [&.swiper-slide-next_+_.swiper-slide]:opacity-100" data-id="<?= $key ?>">
                                                    <div class="item w-[230px] md:w-full py-[20px] h-[130px]" data-website="https://<?= $item['link'] ?>">
                                                        <img src="../assets/image/trademark/logo-<?= $key + 1 ?>.svg" alt="Logo" width="277" height="82" class="w-full h-full scale-[0.60] grayscale opacity-25 group-[&.swiper-slide-active]:scale-100 group-[&.swiper-slide-active]:grayscale-0 group-[&.swiper-slide-active]:opacity-100 transition-all duration-450">
                                                    </div>
                                                </div>
                                        <?php
                                            endforeach;
                                        endfor; ?>
                                    </div>
                                </div>
                                <div class="text-slider md:w-full overflow-visible animate-carousel mb-[80px] xl:mb-[40px] sm:mb-[20px] sm:group-[&.rtl]/html:px-[30px] reveal pr-[50px] group-[&.rtl]/html:pl-[50px] group-[&.rtl]/html:pr-0 2xl:pr-[100px] sm:pr-0">
                                    <div class="swiper-wrapper">

                                    <?php for ($i = 0; $i < 5; $i++) : ?>
                                        <div class="swiper-slide">
                                            <div class="item w-full flex items-center justify-between lg:block">
                                                <div dir class="text-editor w-full min-md:max-w-[500px] editor-p:text-gray editor-p:font-medium editor-p:leading-[28px]">
                                                    <p>As Intego, we offer hundreds of different products to our valued customers with our high quality understanding and modern production facility. </p>
                                                </div>
                                                 <a target="_blank" href="https://www.avengrass.com/" class="block lg:flex lg:items-center lg:gap-4">
                                                        <i class="icon icon-arrow-right-2 flex items-center justify-center bg-secondary p-7 xsm:p-4 text-white text-[12px] -rotate-45 rounded-full hover:rotate-0 duration-500 hover:bg-[#0F62AB] cursor-pointer lg:w-fit lg:h-fit"></i>
                                                        <div class="hidden lg:block text-[18px] font-semibold text-secondary">Visit Website</div>
                                                    </a>
                                            </div>
                                        </div>
                                    <?php endfor; ?>
                                    
                                    </div>
                                </div>
                                <div class="flex items-center gap-[100px] xl:gap-[60px] lg:gap-[30px] md:gap-[20px] pb-[20px]">
                                    <div class="nav-buttons flex group-[&.rtl]/html:flex-row-reverse items-center gap-[20px] xs:gap-[10px] md:ml-0 reveal-button-left group-[&.rtl]/html:px-[30px]">
                                        <div class="brand-prev group/nav cursor-pointer pointer-events-auto flex items-center justify-center w-[70px] md:w-[50px] aspect-square rounded-full  relative z-10  [&.brand-disabled]:pointer-events-none">
                                            <i class="text-[20px] leading-none h-[20px] text-secondary-main transition-all duration-450 group-[&.brand-disabled]/nav:text-secondary-main/60"></i>
                                            <svg class="group" xmlns="http://www.w3.org/2000/svg" width="40" height="22" viewBox="0 0 40 22" fill="none">
                                                <path class="group-hover:!stroke-secondary duration-500" d="M10.1392 21L1 11M1 11L10.1392 1M1 11H39" stroke="#DEDFE0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>

                                        <div class="brand-next group/nav cursor-pointer pointer-events-auto flex items-center justify-center w-[70px] md:w-[50px] aspect-square rounded-full  relative z-10  [&.brand-disabled]:pointer-events-none">
                                            <i class="text-[20px] leading-none h-[20px] text-secondary-main transition-all duration-450 group-[&.brand-disabled]/nav:text-secondary-main/60"></i>
                                            <svg class="group" xmlns="http://www.w3.org/2000/svg" width="40" height="22" viewBox="0 0 40 22" fill="none">
                                                <path class="group-hover:!stroke-secondary duration-500" d="M31.7444 1L39 11M39 11L31.7444 21M39 11H1" stroke="#DEDFE0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                    </div>
                                    <!--<div id="website-button" class="reveal-button-right">
                                        <?php
                                        $link = "#";
                                        $title = "Visit Website";
                                        $background = "bg-secondary-50 backdrop-blur-[15px]";
                                        $backgroundHover = "before:bg-primary-main";
                                        $textColor = "text-secondary-main";
                                        $textColorHover = "group-hover/button:min-md:text-white";
                                        //include 'layout/button.php';
                                        ?>
                                    </div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

@endsection

@section('scripts')
    <script>
    gsap.registerPlugin(SplitText, ScrollTrigger);

    const split = new SplitText(".text-contents .text", {
        type: "chars",
    });

    const tl = gsap.timeline({
            scrollTrigger: {
                trigger: "#about-us-section",
                start: "30% 50%", // ScrollTrigger'ın tetiklendiği noktadan 100px aşağıda ve 80% sağda başla
                end: "50% 50%",
                scrub: 1,
                // markers: true,
            }
        })
        .set(split.chars, {
            color: "#111",
            stagger: 10,
        }, 0.1);
</script>

<script>
    // Tüm 'current' sınıfına sahip butonları seç
    const buttons = document.querySelectorAll('.current');

    // Her bir butona tıklama olayı ekleyerek aktif sınıfını yönet
    buttons.forEach(button => {
        button.addEventListener('click', function() {
            // Önce tüm butonlardan 'active' sınıfını kaldır
            buttons.forEach(btn => btn.classList.remove('active'));

            // Tıklanan butona 'active' sınıfını ekle
            this.classList.add('active');
        });
    });
</script>

<script>
    if (document.querySelector(".productCategories, .productImages")) {
        let productCategories = new Swiper(".productCategories", {
            modules: [A, N, Px, EF, C],
            speed: 1000,
            slidesPerView: 1,
            resistance: true,
            resistanceRatio: 0,
            loop: false,
            effect: 'fade',

            allowTouchMove: true,
            navigation: {
                prevEl: '.product-prev',
                nextEl: '.product-next',
            },
        })





        let productImages = new Swiper(".productImages", {
            modules: [A, P, N, Px, C, S],
            speed: 1000,
            loop: false,
            centeredSlides: false,
            direction: 'horizontal',
            slidesPerView: 1,
            spaceBetween: 10,
            slideToClickedSlide: true,
            resistance: true,
            resistanceRatio: 0,
            watchSlidesProgress: true,
            mousewheel: true,
            scrollbar: {
                el: ".swiper-scrollbar",
            },
            breakpoints: {

                769: {
                    direction: 'horizontal',
                    slidesPerView: 1,
                    centeredSlides: false,
                    allowTouchMove: true,
                },
                1024: {
                    direction: 'horizontal',
                    slidesPerView: 2,
                    centeredSlides: false,
                    allowTouchMove: true,
                    spaceBetween: 20,
                },
                1280: {
                    direction: 'vertical',
                    slidesPerView: 4,
                    spaceBetween: 0,
                    centeredSlides: true,
                    allowTouchMove: true,
                }
            }
        })
        productCategories.controller.control = productImages;

        productImages.controller.control = productCategories;
    }
</script>

<script>
    if (document.querySelector(".brand-slider2")) {



        let brandSlider2 = new Swiper(".brand-slider2", {
            modules: [A, N, EC, EF, C],
            slidesPerView: 1.2,
            spaceBetween: 0,
            speed: 1000,
            loop: false,
            resistance: true,
            allowMouseEvents: true,
            slideToClickedSlide: true,
            centeredSlides: true,
            resistanceRatio: 0,
            watchSlidesProgress: true,
            navigation: {
                nextEl: ".brand-next",
                prevEl: ".brand-prev",

            },


            breakpoints: {
                768: {
                    slidesPerView: 2.2,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 2.5,
                    spaceBetween: 100,

                },
                1280: {
                    slidesPerView: 3,
                    spaceBetween: 105,
                },
                1400: {
                    slidesPerView: 2,
                    spaceBetween: 5,
                },
                1680: {
                    slidesPerView: 2.5,
                    spaceBetween: 10,
                },
            }
        })

        let textSlider2 = new Swiper(".text-slider2", {
            modules: [A, N, EC, EF, C],
            slidesPerView: 1,
            speed: 1000,
            spaceBetween: 30,
            centeredSlides: true,
            loop: false,
            resistance: true,
            allowTouchMove: false,
            resistanceRatio: 0,
            watchSlidesProgress: true,
        })



        let imageSlider2 = new Swiper(".imageSlider2", {
            modules: [A, P, N, Px, EC, EF, C],
            slidesPerView: 1,
            speed: 1000,
            parallax: true,
            spaceBetween: 0,
            effect: 'fade',
            centeredSlides: true,
            loop: false,
            allowTouchMove: false,
            resistance: true,
            resistanceRatio: 0,
            watchSlidesProgress: true,

        })




        brandSlider2.controller.control = textSlider2;
        textSlider2.controller.control = imageSlider2;

    }
</script>

<script>
    var mobileCards = new Swiper(".mobileCards", {
        modules: [A, P, N, Px, EC, C, ECards],
        effect: "cards",
        grabCursor: true,
        initialSlide: 2, // Kartların başlangıçta ters sırayla olması için ilk görünen kartın indeksi
        slidesPerView: "auto",
        loop: false, // Slider sonsuz döngü içinde olsun
        pagination: {
            el: ".lasting-pagination",
            clickable: true,
        },
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
            pauseOnMouseEnter: true,
        },
        cardsEffect: {
            perSlideRotate: 10, // Rotation angle of second and subsequent slides
            slideShadows: false, // Shadow presence of second and subsequent slides(true/false)

        },

    });

    function isElementInView(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    function checkSwiperVisibility() {
        const swiperElement = document.querySelector('.mobileCards'); // Swiper elementinizi seçin
        if (isElementInView(swiperElement)) {
            // Eğer swiper görünüyorsa ve daha önce autoplay başlamadıysa
            if (!mobileCards.autoplay.running) {
                mobileCards.autoplay.start();
            }
        } else {
            // Swiper görünmüyorsa ve autoplay çalışıyorsa durdur
            if (mobileCards.autoplay.running) {
                mobileCards.autoplay.stop();
            }
        }
    }

    // Scroll event listener ekleyin
    window.addEventListener('scroll', checkSwiperVisibility);
    // Sayfa yüklendiğinde de kontrol edin
    window.addEventListener('load', checkSwiperVisibility);

   if (document.querySelector(".brand-slider")) {
    // --- Brand Slider ---
    let brandSlider = new Swiper(".brand-slider", {
        modules: [A, N, EC, EF, C],
        slidesPerView: 1.2,
        spaceBetween: 0,
        speed: 1000,
        loop: false,
        resistance: true,
        allowMouseEvents: true,
        slideToClickedSlide: true,
        centeredSlides: true,
        resistanceRatio: 0,
        watchSlidesProgress: true,
        autoplay: false,
        navigation: {
            nextEl: ".brand-next",
            prevEl: ".brand-prev",
        },
        breakpoints: {
            768: { slidesPerView: 2.2, spaceBetween: 20 },
            1024: { slidesPerView: 2.5, spaceBetween: 100 },
            1280: { slidesPerView: 3.4, spaceBetween: 105 },
            1400: { slidesPerView: 3.2, spaceBetween: 5 },
            1680: { slidesPerView: 3.1, spaceBetween: 10 },
        }
    });

    // --- Text Slider ---
    let textSlider = new Swiper(".text-slider", {
        modules: [A, N, EC, EF, C],
        slidesPerView: 1,
        speed: 1000,
        spaceBetween: 60,
        loop: false,
        resistance: true,
        allowTouchMove: false,
        resistanceRatio: 0,
        watchSlidesProgress: true,
    });

    // --- Image Slider ---
    let imageSlider = new Swiper(".imageSlider", {
        modules: [A, P, N, EC, C],
        slidesPerView: 1,
        speed: 1000,
        spaceBetween: 0,
        loop: false,
        resistance: true,
        resistanceRatio: 0,
        effect: "creative",
        creativeEffect: {
            prev: { opacity: 0, scale: 1.7 },
            next: { opacity: 0, scale: 1.7 },
        },
        watchSlidesProgress: true,
        lazy: true,
    });

    // --- Slider Senkronizasyonu ---
function syncSliders(mainSlider, ...otherSliders) {
    mainSlider.on('slideChange', () => {
        otherSliders.forEach(slider => {
            if (slider.activeIndex !== mainSlider.activeIndex) {
                // Animasyonlu senkronizasyon
                slider.slideTo(mainSlider.activeIndex, mainSlider.params.speed, false);
            }
        });
    });
}


    // Hepsini birbirine bağla
    syncSliders(brandSlider, textSlider, imageSlider);
    syncSliders(textSlider, brandSlider, imageSlider);
    syncSliders(imageSlider, brandSlider, textSlider);

    // --- Autoplay Visibility Kontrolü ---
    function isElementInView(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    function checkSwiperVisibility() {
        const swiperElement = document.querySelector('.brand-slider');
        if (isElementInView(swiperElement)) {
            if (!brandSlider.autoplay.running) brandSlider.autoplay.start();
        } else {
            if (brandSlider.autoplay.running) brandSlider.autoplay.stop();
        }
    }

    window.addEventListener('scroll', checkSwiperVisibility);
    window.addEventListener('load', checkSwiperVisibility);
}



    var swiperReferenceCarousel = new Swiper(".swiperReferenceCarousel", {
        modules: [A, P, N, ECo, C],
        spaceBetween: 10,
        loop: true,
        centeredSlides: true,
        speed: 1500,
        slidesPerView: 1,

        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            1440: {
                slidesPerView: 5,
                spaceBetween: 35,
            },
            1560: {
                slidesPerView: 5,
                spaceBetween: 40,
            }
        }
    });
</script>

<script>
    if (document.querySelector(".swiperMission")) {
        const swiperMission = new Swiper(".swiperMission", {
            modules: [A, N, EC, EF, C],
            slidesPerView: 1,
            spaceBetween:20,
             speed: 1000,
            loop: false,
            resistance: true,
            allowMouseEvents: true,
            slideToClickedSlide: true,
            centeredSlides: true,
            resistanceRatio: 0,
            watchSlidesProgress: true,
            autoplay: false,
            autoplay: {
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            navigation: {
                nextEl: ".swiperMission-next",
                prevEl: ".swiperMission-prev",

            },     
        }) 
    }
</script>
@endsection

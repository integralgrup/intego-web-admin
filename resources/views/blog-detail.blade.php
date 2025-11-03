@extends('layouts.main')

@section('content')
    <main class="main-field header-space">
        <section class="New-detail pt-[50px] relative max-w-[1920px] mx-auto">
            <div class="absolute top-[-26%] group-[&.rtl]/html:right-[-22%] group-[&.rtl]/html:left-auto left-[-22%] pointer-events-none z-[-1]">
                <img src="../assets/image/yellowshadow.png" alt="">
            </div>
            <div class="absolute top-[1%] right-0 z-[-1] pointer-events-none sm:w-full">
                <img class="sm:w-full" src="../assets/image/groupnew.png" alt="">
            </div>
            <div class="breadcrumb">
                <div class="list flex justify-center items-center xl:justify-start mb-[30px] lg:mb-[20px] gap-5 sm:hidden pl-[200px] 2xl:pl-[0px] xl:pl-[150px] md:pl-0 md:items-center md:justify-center md:m-0">
                    <a href="{{env('HTTP_DOMAIN')}}" class="text-gray hover:text-secondary gap-10 text-[18px] leading-[28px] hover:text-sebg-secondary font-medium duration-500">Home</a>
                    <div class="text-gray">/</div>
                    <a href="page-new.php" title="Galeri" class="text-gray hover:text-secondary text-[18px] leading-[28px] hover:text-sebg-secondary font-medium duration-500">News</a>
                </div>
            </div>
            <div class="container max-w-[1800px]">
                <div class="wrapper grid grid-cols-2 md:grid-cols-1 md:flex-col-reverse md:flex gap-[100px] lg:gap-[50px]">
                    <div class="flex group-[&.rtl]/html:flex-row-reverse sm:block items-start justify-center gap-[100px] lg:gap-[50px] md:gap-[30px] pt-[50px] md:pt-[30px] sm:pt-0">
                        <div class="block h-full justify-center xs:py-[20px] pt-[205px] md:pt-0">
                            <div class="slider-field h-auto sticky-item sticky md:relative top-[24px] transition-all duration-350 sm:hidden">
                                <ul class="flex flex-col gap-[30px] xl:gap-[20px] lg:gap-[15px] md:justify-center !pt-[40px]">
                                    <li class="group/li relative z-20">
                                        <a target="_blank" href="https://www.facebook.com/" class="flex group cursor-pointer">
                                            <i class="icon icon-facebook-2 text-[20px] h-[20px] text-[#828282] block leading-none duration-500 group-hover:text-secondary"></i>
                                        </a>
                                    </li>
                                    <li class="relative z-20">
                                        <a class="xs:px-0 cursor-pointer sens">
                                            <div class="reveal group flex items-center text-[27px] text-[#B0B0B0] cursor-pointer [&_input]:opacity-0 [&_input]:z-[-1] [&_input]:w-0 [&_input]:h-0 [&_input]:absolute" id="copy-link">
                                                <i class="icon-link text-[20px] h-[20px] leading-none transition-all duration-450 text-[#B0B0B0] group-hover:text-secondary"></i>
                                                <div class="tooltip md:hidden absolute opacity-0 rounded-[5px] group-hover:opacity-100 -translate-x-9 translate-y-0 group-hover:translate-x-[35px] -rotate-90 px-[20px] bg-secondary transition-all duration-450 grid place-items-center h-[30px] group-[&.copied]:bg-secondary group-[&.copied]:translate-y-[19px]">
                                                    <div class="icon-triangle-down absolute left-1/2 top-full -translate-y-[30%] -translate-x-1/2 text-primary-400 transition-all duration-300 group-[&.copied]:text-neon"></div>
                                                    <span id="span" class="text-[14px] leading-none font-medium text-white">Kopyala</span>
                                                    <span id="copy-text" class="hidden opacity-0 invisible h-0 w-0 overflow-hidden">Kopyala</span>
                                                    <span id="copied-text" class="hidden opacity-0 invisible h-0 w-0 overflow-hidden">Kopyalandı</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="group/li relative z-20">
                                        <a target="_blank" href="https://wa.me/05336913463" class="flex group cursor-pointer">
                                            <i class="icon icon-whatsapp text-[20px] h-[20px] text-[#828282] block leading-none duration-500 group-hover:text-secondary"></i>
                                        </a>
                                    </li>
                                    <li class="group/li relative z-20">
                                        <a target="_blank" href="https://twitter.com/" class="flex group cursor-pointer">
                                            <i class="icon icon-x text-[20px] h-[20px] text-[#828282] block leading-none duration-500 group-hover:text-secondary"></i>
                                        </a>
                                    </li>
                                    <li class="group/li relative z-20">
                                        <a target="_blank" href="https://www.linkedin.com/" class="flex group cursor-pointer">
                                            <i class="icon icon-linkedin text-[20px] h-[20px] text-[#828282] block leading-none duration-500 group-hover:text-secondary"></i>
                                        </a>
                                    </li>
                                    <li class="group/li relative z-20 group">
                                        <a class="cursor-pointer sens">
                                            <div class="reveal group flex items-center text-[27px] text-[#B0B0B0] cursor-pointer" id="print">
                                                <i class="icon-printer text-[18px] leading-none transition-all duration-450 text-[#B0B0B0] group-hover:text-secondary"></i>
                                                <div class="tooltip md:hidden absolute opacity-0 rounded-[5px] group-hover:opacity-100 -rotate-90 -translate-x-7  group-hover:translate-x-[35px] px-[20px] bg-secondary transition-all duration-450 grid place-items-center h-[30px]">
                                                    <div class="icon-triangle-down absolute left-1/2 top-full -translate-y-[30%] -translate-x-1/2 text-primary-400"></div>
                                                    <span class="text-[14px] leading-none font-medium text-white">Yazdır</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div dir class="text-editor sm:text-center editor-h2:font-bold [&_:is(h1,h2,h3,h4,h5)]:text-black editor-p:font-medium editor-p:text-gray editor-li:text-gray">
                            <div class="flex items-center justify-start sm:justify-center gap-[60px] sm:gap-[40px]">
                                <div class="flex items-center gap-[25px]">
                                    <i class="icon icon-calendar flex items-center justify-center text-secondary"></i>
                                    <span>{{ \Carbon\Carbon::parse($blog['created_at'])->format('d F Y') }}</span>
                                </div>
                                <div class="image ">
                                    <img class="!m-0" src="../assets/image/star.png" alt="">
                                </div>
                            </div>
                            <h2>{{ $blog['title'] }}</h2>
                            <p>{!! $blog['description'] !!}</p>
                        </div>
                    </div>

                    <div class="carousel-field hand  ">
                        <div class="about-swiper swiper rounded-[30px] sticky-item sticky md:relative top-[24px] transition-all duration-350">
                            <div class="swiper-wrapper">
                                <?php foreach ($blogSlider as $item) : ?>
                                    <div class="swiper-slide ">
                                        <a href="{{ asset( getFolder(['uploads_folder','blog_images_folder'], $item['lang']) . '/' . $item['media_file'] ) }}" data-fancybox="gallery">
                                            <div class="content group/slide relative">
                                                <div class="image-field relative">
                                                    <div class="image w-full h-[620px] xl:h-[550px] lg:h-[500px] md:h-[420px] sm:h-[320px] rounded-[50px] overflow-hidden isolate">
                                                        <img loading="lazy" src="{{ asset( getFolder(['uploads_folder','blog_images_folder'], $item['lang']) . '/' . $item['media_file'] ) }}" alt="" class="w-full h-full object-cover object-center  " data-swiper-parallax-x="50%">
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div data-paginationLoad class="relative z-20 !left-[35%] group-[&.rtl]/html:!right-[35%] group-[&.rtl]/html:!left-auto py-5 [&_span.swiper-pagination-bullet-active]:before:bg-secondary lasting-pagination [&_span]:w-[24px] [&_span]:h-[24px] [&_span]:animateConic [&_span]:opacity-100 [&_span]:bg-transparent [&_span]:relative [&_span]:z-10 [&_span]:before:absolute [&_span]:before:top-1/2 [&_span]:before:left-1/2 [&_span]:before:-translate-x-1/2 [&_span]:before:-translate-y-1/2 [&_span]:before:w-[10px] [&_span]:before:h-[10px] [&_span]:before:rounded-full [&_span]:before:bg-[#F2F3F5] group-[&.swiper-slide-active]/slide:[&_span]:before:bg-red-400 "></div>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <section class="slider py-28 lg:py-20 md:py-16 sm:py-10 sens max-w-[1920px] mx-auto">
            <div class="container wrapper max-w-[1520px] px-70 2xl:px-90 md:px-30 mx-auto">
                <div class="flex justify-between items-center md:flex-col md:gap-[20px] md:justify-center gap-[71px] lg:gap-[60px] mb-[20px] py-[50px] sm:py-[20px]">
                    <div class="text-editor editor-h2:font-bold">
                        <h2 class="text-secondary">
                            <span class="text-[#1679BE]">Other</span>
                            News
                        </h2>
                    </div>
                    <div class="flex group-[&.rtl]/html:flex-row-reverse justify-center items-center gap-[30px] md:hidden">
                        <div class="swiperNewCarousel-prev group/swiperNews-button !flex !items-center   !justify-center !text-black pointer-events-auto cursor-pointer">
                            <i class="icon text-3xl  duration-500 ">
                                <svg class="group" xmlns="http://www.w3.org/2000/svg" width="40" height="22" viewBox="0 0 40 22" fill="none">
                                    <path class="group-hover:!stroke-secondary stroke-secondary group-[&.swiper-button-disabled]/swiperNews-button:stroke-gray/30 duration-500" d="M10.1392 21L1 11M1 11L10.1392 1M1 11H39" stroke="#DEDFE0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </i>
                        </div>
                        <div class="swiperNewCarousel-next group/swiperNews-button !flex !items-center   !justify-center !text-black pointer-events-auto cursor-pointer">
                            <i class="icon text-3xl duration-500 ">
                                <svg class="group" xmlns="http://www.w3.org/2000/svg" width="40" height="22" viewBox="0 0 40 22" fill="none">
                                    <path class="group-hover:!stroke-secondary stroke-secondary group-[&.swiper-button-disabled]/swiperNews-button:stroke-gray/30 duration-500" d="M31.7444 1L39 11M39 11L31.7444 21M39 11H1" stroke="#DEDFE0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </i>
                        </div>
                    </div>
                    <div class="flex items-center justify-center text-center">
                        <a href="page-new.php" class="button dot group/button before:absolute before:left-0 before:top-0 before:hover:top-full before:w-full before:h-full before:hover:bg-[#FFD61B] before:duration-500 bg-secondary [box-shadow:10px_10px_30px_0px_rgba(249,_177,_0,_0.25)] px-[32px] py-[18px] isolate w-fit flex px-30 rounded-[100px] space-x-6 relative overflow-hidden">
                            <span class="text text-xl flex items-center text-center text-white font-semibold">All News</span>
                            <i class="icon icon-arrow-right-2 -rotate-45 flex items-center justify-center text-white"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="wrapper pl-[150px] 2xl:pl-[30px] md:pl-0 md:py-8 md:rounded-[50px] md:bg-[#FEF7E5]">
                <div class="swiperNewCarousel !overflow-hidden animate-carousel w-full">
                    <div class="swiper-wrapper">
                        <?php foreach ($blogs as $item) : ?>
                            <a href="{{env('HTTP_DOMAIN') . '/' . getUrl('blog_url') .'/' . $item['seo_url']}}" class="swiper-slide w-full group/slide block relative">
                                <div class="flex md:flex-col items-center gap-[70px] 2xl:gap-[40px] md:gap-4  ">
                                    <div class="absolute top-[5%] right-[15%] !opacity-0 group-[&.swiper-slide-active]/slide:!opacity-100 duration-500 ">
                                        <i class="icon icon-arrow-right-2 -rotate-45 flex items-center justify-center text-[12px] bg-secondary rounded-full p-7 text-white hover:bg-[#1679BE] duration-500"></i>
                                    </div>
                                    <div class="absolute top-0 left-[10%] group-[&.rtl]/html:left-auto group-[&.rtl]/html:right-[10%] aspect-[92/48] h-[480px] lg:aspect-[76/40] lg:h-[400px] z-[-1] group-[&.swiper-slide-active]/slide:opacity-100 opacity-0 md:hidden">
                                        <img src="../assets/image/newDetail.png" alt="">
                                    </div>
                                    <div class="absolute top-0 left-[10%] group-[&.rtl]/html:left-auto group-[&.rtl]/html:right-[10%] aspect-[92/48] h-[480px] lg:aspect-[76/40] lg:h-[400px] z-[-1] opacity-100 group-[&.swiper-slide-active]/slide:opacity-0 duration-500 md:hidden">
                                        <img src="../assets/image/newdetailblue.png" alt="">
                                    </div>
                                    <div class="image aspect-[48/48] lg:aspect-[40/40] lg:h-[400px] h-[480px] md:aspect-[35/35] md:h-[350px] sm:aspect-[30/30] sm:h-[300px] [mask-image:url('../../assets/image/newdetail.svg')] [mask-size:contain] [mask-repeat:no-repeat] [mask-position:center]">
                                        <img class="w-full h-full object-cover object-center" src="{{ asset( getFolder(['uploads_folder','blog_images_folder'], $item['lang']) . '/' . $item['image'] ) }}" alt="">
                                    </div>
                                    <div>
                                        <div dir class="text-editor sm:px-[30px] md:text-center md:items-center editor-p:text-gray  [&_:is(h1,h2,h3,h4,h5)]:text-black [&_:is(h1,h2,h3,h4,h5)]:!m-0 [&_:is(h1,h2,h3,h4,h5)]:font-bold editor-h3:max-w-[410px] editor-p:max-w-[460px] lg:editor-p:max-w-[400px]">
                                            <div class="flex items-center gap-[24px] [&>span]:text-gray">
                                                <i class="icon icon-calendar flex items-center justify-center text-secondary"></i>
                                                <span>{{ \Carbon\Carbon::parse($item['created_at'])->format('d F Y') }}</span>
                                            </div>
                                            <h3>{{ $item['title'] }}</h3>
                                            <p>{!! mb_substr($item['description'], 0, 100) !!}...</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>
            <div class="  justify-center items-center gap-[30px] pt-[20px] hidden md:flex">
                <div class="swiperNewCarousel-prev group/swiperNews-button !flex !items-center   !justify-center !text-black pointer-events-auto cursor-pointer">
                    <i class="icon text-3xl  duration-500 ">
                        <svg class="group" xmlns="http://www.w3.org/2000/svg" width="40" height="22" viewBox="0 0 40 22" fill="none">
                            <path class="group-hover:!stroke-secondary stroke-secondary group-[&.swiper-button-disabled]/swiperNews-button:stroke-gray/30 duration-500" d="M10.1392 21L1 11M1 11L10.1392 1M1 11H39" stroke="#DEDFE0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </i>
                </div>
                <div class="swiperNewCarousel-next group/swiperNews-button !flex !items-center   !justify-center !text-black pointer-events-auto cursor-pointer">
                    <i class="icon text-3xl duration-500 ">
                        <svg class="group" xmlns="http://www.w3.org/2000/svg" width="40" height="22" viewBox="0 0 40 22" fill="none">
                            <path class="group-hover:!stroke-secondary stroke-secondary group-[&.swiper-button-disabled]/swiperNews-button:stroke-gray/30 duration-500" d="M31.7444 1L39 11M39 11L31.7444 21M39 11H1" stroke="#DEDFE0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </i>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('scripts')
    <script>
    var aboutswip = new Swiper(".about-swiper", {
        modules: [A, P, N, Px, EC, C],
        slidesPerView: 1,
        speed: 1000,
        parallax: true,
        loop: true,
        centeredSlides: true,
        autoplay: {
            delay: 5100,
            disableOnInteraction: false,
        },

        lazy: true,
        pagination: {
            el: ".lasting-pagination",
            clickable: true,
        },

        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            480: {
                slidesPerView: 1,
            },
            769: {
                slidesPerView: 1,
            },

            1200: {
                slidesPerView: 1,
            },
            1280: {
                slidesPerView: 1,
            },
        },
    });

    var swiperNewCarousel = new Swiper(".swiperNewCarousel", {
        modules: [A, P, N, Px, EC, C],
        slidesPerView: 1,

        speed: 1200,
        parallax: true,
        loop: true,

        // autoplay: {
        //     delay: 3500,
        //     disableOnInteraction: false,
        //     pauseOnMouseEnter: true,
        // },
        navigation: {
            prevEl: '.swiperNewCarousel-prev',
            nextEl: '.swiperNewCarousel-next',
        },
        breakpoints: {
            769: {
                slidesPerView: 1,
            },

            1440: {
                slidesPerView: 1.2,
            },
            1520: {
                slidesPerView: 1.3,
            },
            1680: {
                slidesPerView: 1.5,
            }
        },
        lazy: true,
        pagination: {
            el: ".about-pagination",
            speed: 1000,
            clickable: true,
            dynamicBullets: true,
        },


    });

    if (window.innerWidth > 1024) {
        const stickyItems = document.querySelectorAll(".sticky-item");
        const header = document.querySelector("header")
        stickyItems.forEach(item => {
            window.addEventListener("scroll", () => {
                if (!header.classList.contains("is-hidden") && header.classList.contains("is-fixed")) {
                    item.style.top = "200px";
                } else if (header.classList.contains("is-hidden")) {
                    item.removeAttribute("style");
                }
            })
        })
    }




    const copyLink = document.getElementById("copy-link"),
        printPage = document.getElementById("print");

    if (copyLink && printPage) {
        copyLink.addEventListener("click", () => {
            const span = document.getElementById("span"),
                copyText = document.getElementById("copy-text"),
                copiedText = document.getElementById("copied-text"),
                pageLink = window.location.href;
            navigator.clipboard.writeText(pageLink)
                .then(() => {
                    span.innerText = copiedText.innerText;
                    copyLink.classList.add("copied");
                    setTimeout(() => {
                        span.innerText = copyText.innerText;
                        copyLink.classList.remove("copied");
                    }, 5000)
                })
        })

        printPage.addEventListener("click", () => {
            window.print()
        })
    }
</script>
@endsection
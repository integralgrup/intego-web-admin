@extends('layouts.main')

@section('content')

<main class="header-space-padding overflow-hidden isolate">

    <section class="Slider-about relative py-20 sm:py-8 max-w-[1920px] mx-auto">
        <div class="absolute top-1/2 -translate-x-1/2 left-[60%] pointer-events-none -translate-y-1/2  z-[-1]">
            <img src="../assets/image/yellowshadow.png" alt="">
        </div>
        <div class="absolute top-1/2 2xl:top-[70%] -translate-y-1/2 right-0 z-[-1] md:w-full lg:hidden">
            <img class="md:w-full" src="../assets/image/group123.png" alt="">
        </div>
        <div class="">
            <div class="wrapper grid grid-cols-2 lg:grid-cols-1 gap-[125px] sm:gap-[20px] xs:gap-[10px] px-[30px]">
                <div class="product-categories-image-carousel swiper w-full !overflow-visible z-6 relative pl-[22%] xl:pl-[15%] sm:px-0 sens">
                    <div class="swiper-wrapper">
                        <?php
                        
                        foreach ($project->gallery as $key => $item) : ?>
                            <a href="{{ asset( getFolder(['uploads_folder','project_images_folder'], $item->lang) . '/' . $item->image ) }}" data-fancybox="gallery" class="swiper-slide group !opacity-100 z-0 block pointer-events-none [&.swiper-slide-prev]:z-6 [&.swiper-slide-active]:z-5 [&.swiper-slide-next]:z-4 [&.swiper-slide-next+.swiper-slide]:z-3 [&.swiper-slide-next+.swiper-slide+.swiper-slide]:z-2">
                                <div class="image min-sm:shadow-[0_10px_60px_-15px_rgba(252,186,3,0.15)] pointer-events-none block aspect-[77/55] h-[550px] 2xl:aspect-[66/44] 2xl:h-[440px] lg:aspect-[60/40] lg:h-[400px] sm:w-full sm:h-full rounded-[50px] overflow-hidden isolate duration-1000 ease-manidar opacity-0 translate-x-[-30%] scale-[0.5] group-[&.swiper-slide-active]:pointer-events-auto group-[&.swiper-slide-active]:opacity-100 group-[&.swiper-slide-active]:translate-x-0 group-[&.swiper-slide-active]:scale-100 group-[&.swiper-slide-next]:opacity-50 group-[&.swiper-slide-next]:scale-90 group-[&.swiper-slide-next]:translate-x-[-10%] group-[&.swiper-slide-next+.swiper-slide]:opacity-25 group-[&.swiper-slide-next+.swiper-slide]:scale-[0.8] group-[&.swiper-slide-next+.swiper-slide]:translate-x-[-20%] group-[&.swiper-slide-prev]:translate-x-[10%] group-[&.swiper-slide-prev]:scale-110">
                                    <img class="w-full h-full object-cover object-center duration-450 group-hover:scale-105" src="{{ asset( getFolder(['uploads_folder','project_images_folder'], $item->lang) . '/' . $item->image ) }}" alt="" loading="lazy">
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                    <a href="#scroll" class="flex items-center gap-[15px] absolute left-[65%] bottom-[-10%] lg:bottom-[-40%] -translate-x-1/2 cursor-pointer z-20 group sm:hidden">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path class="group-hover:translate-y-2 duration-500" d="M12.8996 5.99961C12.8996 5.50255 12.4967 5.09961 11.9996 5.09961C11.5025 5.09961 11.0996 5.50255 11.0996 5.99961V9.59961C11.0996 10.0967 11.5025 10.4996 11.9996 10.4996C12.4967 10.4996 12.8996 10.0967 12.8996 9.59961V5.99961Z" fill="#F9B100" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.40039 9.6C2.40039 4.29806 6.69845 0 12.0004 0C17.3023 0 21.6004 4.29806 21.6004 9.6V14.4C21.6004 19.702 17.3023 24 12.0004 24C6.69845 24 2.40039 19.702 2.40039 14.4V9.6ZM19.8004 9.6V14.4C19.8004 18.7079 16.3083 22.2 12.0004 22.2C7.69258 22.2 4.20039 18.7079 4.20039 14.4V9.6C4.20039 5.29219 7.69258 1.8 12.0004 1.8C16.3083 1.8 19.8004 5.29219 19.8004 9.6Z" fill="#F9B100" />
                            </svg>
                        </div>
                        <div class="text-[#596C85] font-medium text-[18px]">Scroll Down</div>
                    </a>
                    <div class="flex group-[&.rtl]/html:flex-row-reverse justify-center items-center gap-[30px]  pointer-events-auto z-20 absolute  bottom-[-10%] right-0 lg:bottom-auto lg:top-1/2 lg:right-[5%] sm:bottom-0 sm:relative sm:-translate-y-56 xsm:-translate-y-40 xs:-translate-y-28 2xs:-translate-y-24">
                        <div class="product-categories-prev group/swiperNews-button !flex !items-center text-secondary !justify-center  pointer-events-auto cursor-pointer">
                            <i class="icon text-3xl text-secondary duration-500">
                                <svg class="group" xmlns="http://www.w3.org/2000/svg" width="40" height="22" viewBox="0 0 40 22" fill="none">
                                    <path class="group-hover:!stroke-secondary stroke-secondary group-[&.swiper-button-disabled]/swiperNews-button:stroke-gray/30 duration-500" d="M10.1392 21L1 11M1 11L10.1392 1M1 11H39" stroke="#DEDFE0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </i>
                        </div>
                        <div class="product-categories-next group/swiperNews-button !flex !items-center text-secondary !justify-center  pointer-events-auto cursor-pointer">
                            <i class="icon text-3xl text-secondary duration-500">
                                <svg class="group" xmlns="http://www.w3.org/2000/svg" width="40" height="22" viewBox="0 0 40 22" fill="none">
                                    <path class="group-hover:!stroke-secondary stroke-secondary group-[&.swiper-button-disabled]/swiperNews-button:stroke-gray/30 duration-500" d="M31.7444 1L39 11M39 11L31.7444 21M39 11H1" stroke="#DEDFE0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </i>
                        </div>
                    </div>
                </div>
                <div class="breadcrumb">
                    <div class="list relative z-20 flex justify-end lg:justify-start lg:flex-col lg:items-start lg:inline-flex items-center mb-[30px] lg:mb-[20px] gap-[30px] sm:hidden pr-[25%] xl:pr-[15%] lg:pr-0 lg:pl-[10%]">
                        <div class="flex items-center gap-[20px]">
                            <div class=" border-[2px] border-solid border-[#F2F3F5] p-2 rounded-[8px]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <g clip-path="url(#clip0_19_3389)">
                                        <path d="M11.75 0.9375C10.8818 0.9375 10.0858 1.21262 9.38416 1.75525C8.7115 2.27547 8.26366 2.93806 8 3.41987C7.73634 2.93803 7.2885 2.27547 6.61584 1.75525C5.91422 1.21262 5.11822 0.9375 4.25 0.9375C1.82713 0.9375 0 2.91928 0 5.54731C0 8.3865 2.27947 10.329 5.73028 13.2697C6.31628 13.7692 6.9805 14.3352 7.67088 14.9389C7.76188 15.0186 7.87875 15.0625 8 15.0625C8.12125 15.0625 8.23813 15.0186 8.32913 14.939C9.01956 14.3352 9.68375 13.7691 10.2701 13.2694C13.7205 10.329 16 8.3865 16 5.54731C16 2.91928 14.1729 0.9375 11.75 0.9375Z" fill="#F9B100" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_19_3389">
                                            <rect width="16" height="16" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div class="relative z-20">
                                <span class="text-black font-bold">0</span>
                                <span class="text-gray/75">Beğenme</span>
                            </div>
                        </div>
                         <a href="#get-offer" class="p-[16px_40px] bg-white rounded-full  flex items-center sm:w-full justify-center gap-[15px] border-[4px] border-solid border-[#F2F3F5] before:absolute before:left-0 before:top-0 before:hover:top-full before:w-full before:h-full before:hover:bg-[#FFD61B] overflow-hidden isolate relative before:duration-500">
                    <span class="text-[18px] lg:text-[16px] font-semibold leading-[30px] text-gray">Start Project</span>
                    <span class="font-semibold leading-[30px] flex items-center justify-center text-secondary icon icon-arrow-right-2 text-[16px]"></span>
                </a>
                        <div>
                            
                            <button class="flex items-center gap-[15px] border-[4px] border-solid border-[#F2F3F5] p-4 rounded-full z-20 before:absolute before:left-0 before:top-0 before:hover:top-full before:w-full before:h-full before:hover:bg-[#FFD61B] overflow-hidden isolate relative before:duration-500">
                                <span class="text-[18px] text-[#596C85] font-semibold">Next Project</span>
                                <i class="icon icon-arrow-right-2 flex items-center justify-center text-secondary"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="text-content sens pl-[50px] pb-[50px] pr-[50px] absolute sm:relative w-full sm:pb-0  max-w-[1440px] md:max-w-[800px] sm:max-w-[600px] sm:px-[10%] left-[50%] md:left-1/2 bg-white -translate-x-1/2 bottom-[-5%] sm:bottom-[-15%] flex items-center justify-end lg:justify-center md:justify-end rounded-full [box-shadow:0px_0px_20px_0px_rgba(14,_42,_67,_0.1)] border-[10px] border-solid border-[#FAFAFA]">
                    <div class="pl-[30px] lg:pl-[100px] pt-[50px] sm:p-5 !gap-[10px] text-editor h-full justify-end editor-h2:text-black editor-h2:font-bold editor-p:text-gray editor-p:font-medium editor-p:max-w-[440px] ">
                        <div class="flex items-center gap-[5px]">
                            <i class="icon icon-location-2 flex items-center justify-center text-secondary text-[17px]"></i>
                            <span class="text-gray text-center font-semibold text-[20px] md:text-[18px] sm:text-[16px]">{{ $project->country->title }}</span>
                        </div>
                        <div dir class="text-editor sm:editor-h2:m-0 editor-p:text-[#7B8A99] editor-p:font-medium editor-h2:font-bold xs:editor-h2:text-[16px] xs:editor-p:text-[12px] sm:editor-p:line-clamp-3">
                            <h2>{{$project->title_1}}</h2>
                            <p>{{$project->short_description}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-[120px] lg:py-[80px] sm:py-[40px] relative sens max-w-[1920px] mx-auto">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 pointer-events-none z-[-1] md:hidden">
            <img src="../assets/image/yellowshadow.png" alt="">
        </div>
        <div class="container max-w-[1300px]">
            <div class="wrapper">
                <div dir class="text-editor editor-p:font-medium editor-p:text-gray editor-p:leading-[28px] editor-p:text-center">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
            </div>
        </div>
    </section>

    <section data-id="4" class="faq-field pb-[90px] xl:pb-[80px] lg:pb-[60px] md:pb-[50px] sm:pb-[40px] relative max-w-[1920px] mx-auto">
        <div class="absolute left-1/2 -translate-x-1/2 top-0 pointer-events-none -translate-y-1/2  z-[-1]">
            <img src="../assets/image/yellowshadow.png" alt="">
        </div>
        <div class="wrapper max-w-[1200px] mx-auto w-full px-[30px] gap-[60px] xl:gap-[45px] md:gap-[30px]">
            <div dir class="text-editor editor-h2:text-secondary [&>h2>span]:text-[#1679BE] editor-h2:font-bold text-center">
                <h2><span>Frequently</span>Asked Questions</h2>
            </div>
            <div class="accordion-wrapper grid gap-[40px] pt-[50px]">
                <?php $list = [
                    'How Do We Produce Playgrounds Suitable for Every Area as Intego?',
                    'How Do We Produce Playgrounds Suitable for Every Area as Intego?',
                    'How Do We Produce Playgrounds Suitable for Every Area as Intego?',
                    'How Do We Produce Playgrounds Suitable for Every Area as Intego?',
                ]; ?>

                <?php foreach ($list as $key => $item) : ?>
                    <div dir class="faq-accordion group sens  rounded-[100px] [&.is-active]:rounded-[50px] [&.is-active]:[box-shadow:10px_10px_30px_0px_rgba(249,_177,_0,_0.10)] bg-white [&.is-active]:bg-white border-[2px] border-solid border-black/10 [&.is-active]:border-secondary duration-500<?= $key == 0 ? ' is-active' : ''; ?>">
                        <div class="visible-field cursor-pointer flex items-center justify-between px-[30px] xs:px-[20px] py-[25px] gap-[20px] pr-[20px]">
                            <div class="title text-[20px] lg:text-[18px] sm:text-[16px] font-bold text-gray group-[&.is-active]:text-black duration-500"><?= $item; ?></div>
                            <div class="icon icon-chevron-down flex items-center justify-center text-[14px] h-[14px] md:text-[10px] md:h-[10px] leading-none duration-350 text-secondary group-[&.is-active]:rotate-180 pr-[20px]  group-[&.is-active]:pr-0 group-[&.is-active]:pl-[20px]"></div>
                        </div>
                        <div class="hidden-field h-0 translate-z-0 overflow-hidden isolate duration-600 ease-manidar">
                            <div class="inner px-[30px] pb-[30px] xs:px-[20px] xs:pb-[20px]">
                                <div class="text-editor editor-p:text-gray editor-p:font-medium editor-p:leading-[28px] editor-p:max-w-[950px] ">
                                    <p>With 15 years of experience, we are working to make cities more livable with our Children'sPlaygrounds, Outdoor Sports Equipment, Rubber Floor Covering and Urban Furniture products. As Intego, we offer hundreds of different products to our valued customers with our high quality understanding and modern productionfacility.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="scroll" class="other-products mb-[140px] 2xl:mb-[110px] xl:mb-[70px] lg:mb-[40px] relative overflow-hidden isolate sens max-w-[1920px] mx-auto">
        <div class="content relative z-4">
            <div class="container max-w-[1600px] mx-auto">
                <div class="flex flex-col gap-[30px] xl:gap-[20px] lg:gap-[20px] sm:gap-[40px]">
                    <div>
                        <h2 dir class="text-secondary text-[48px] 2xl:text-[42px] xl:text-[36px] lg:text-[32px] md:text-[28px] sm:text-[25px] font-bold text-center leading-[64px] 2xl:leading-[56px] xl:leading-[48px] lg:leading-[42px] md:leading-[36px] sm:leading-[30px] [&>span]:text-[#1679BE]"><span>Other</span> Products </h2>
                    </div>
                    <div class=" flex items-center justify-between sm:flex-col sm:gap-[20px] sm:text-center xl:pb-[50px] md:pb-0">
                        <div class="relative">
                            <div class="absolute top-[-20px] left-[-70px] 2xl:left-[-20px] sm:top-[-30px]">
                                <img src="../assets/image/quate.png" alt="">
                            </div>
                            <h3 dir class="text-gray text-[32px] xl:text-[28px] lg:text-[24px] md:text-[20px] sm:text-[16px] leading[48px] font-medium max-w-[325px] italic">We Produce The World’s Entertainment</h3>
                        </div>
                        <button class="p-[16px_40px] bg-secondary [box-shadow:10px_10px_30px_0px_rgba(249,_177,_0,_0.25)] before:absolute before:left-0 before:top-0 before:hover:top-full before:w-full before:h-full before:hover:bg-[#FFD61B] overflow-hidden isolate relative before:duration-500 rounded-full flex items-center justify-center gap-[10px]">
                            <div dir class="text-white text-[18px] leading-[30px]">All Products</div>
                            <i class="flex items-center justify-center text-white icon icon-arrow-right-2 -rotate-45 text-[12px]"></i>
                        </button>
                    </div>
                    <div class="slide-area w-full">
                        <div class="other-products-slider overflow-visible animate-carousel">
                            <div class="swiper-wrapper">
                                <?php for ($i = 0; $i < 10; $i++) : ?>
                                    <div class="swiper-slide relative group/item">
                                        <div class="absolute top-[-10px] right-8 z-10 group-[&.swiper-slide-active]/item:!opacity-100 !opacity-0 xl:hidden ">
                                            <i class="icon icon-arrow-right-2 -rotate-45 flex items-center justify-center text-white bg-secondary hover:bg-[#1679BE] duration-500 p-8  md:p-5 rounded-full text-[12px]"></i>
                                        </div>
                                        <div class="item aspect-[48/48] h-[480px] 2xl:aspect-[40/40] 2xl:max-w-[400px] sm:max-w-[350px] xs:max-w-[300px] 2xl:h-[400px] xl:h-[380px] xl:aspect-[38/38] sm:aspect-[35/35] sm:h-[350px] xs:aspect-[30/30] xs:h-[300px] relative w-full [mask-image:url('../../assets/image/product3.svg')] [mask-size:contain] [mask-repeat:no-repeat] [mask-position:center] bg-[#F1F8FE] group-hover/item:bg-[#FEF7E5] group-[&.swiper-slide-active]/item:bg-[#FEF7E5] min-md:group-[&.swiper-slide-active]/item:-translate-y-16 lg:group-[&.swiper-slide-active]/item:translate-y-0 duration-500 ">
                                            <a href="page-product.php" class="block aspect-[48/48] h-[480px] 2xl:aspect-[40/40] 2xl:h-[400px] xl:h-[380px] xl:aspect-[38/38] sm:aspect-[35/35] sm:h-[350px] xs:aspect-[30/30] xs:h-[300px]">
                                                <img class="w-full h-full object-contain object-center" src="../assets/image/product/rectangle1.png" alt="">
                                            </a>
                                        </div>
                                        <div class="absolute top-0 left-0 z-[-1] pointer-events-none aspect-[48/48] h-[480px] 2xl:aspect-[40/40] sm:hidden 2xl:h-[400px] xl:h-[380px] xl:aspect-[38/38] sm:aspect-[35/35] sm:h-[350px] xs:aspect-[30/30] xs:h-[300px] group-[&.swiper-slide-active]/item:-rotate-6 group-hover/item:-rotate-6 group-[&.swiper-slide-active]/item:-translate-y-16 2xl:group-[&.swiper-slide-active]/item:-translate-y-20 xl:group-[&.swiper-slide-active]/item:-translate-y-24 lg:group-[&.swiper-slide-active]/item:translate-y-0 duration-500 isolate p-1">
                                            <img class="aspect-[48/48] h-[480px] 2xl:aspect-[42/42] 2xl:h-[420px] sm:aspect-[35/35] sm:h-[350px] xs:aspect-[30/30] xs:h-[300px] object-contain object-center" src="../assets/image/product.png" alt="">
                                        </div>
                                        <div class="absolute left-[42%] bottom-[-5%] group-[&.swiper-slide-active]/item:-translate-y-16 lg:group-[&.swiper-slide-active]/item:translate-y-0 bg-[#0F62AB] p-5 rounded-full max-w-[220px]">
                                            <span class="text-white text-center font-bold text-[20px] sm:text-[18px] xs:text-[16px] leading-[30px] line-clamp-2">IN-100</span>
                                        </div>
                                    </div>
                                <?php endfor; ?>
                            </div>
                        </div>
                        <div class="flex group-[&.rtl]/html:flex-row-reverse items-center justify-center gap-[40px] mt-[100px]">
                            <div class="other-product-prev flex items-center justify-center cursor-pointer">
                                <svg class="group" xmlns="http://www.w3.org/2000/svg" width="40" height="22" viewBox="0 0 40 22" fill="none">
                                    <path class="group-hover:!stroke-secondary duration-500" d="M10.1392 21L1 11M1 11L10.1392 1M1 11H39" stroke="#DEDFE0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="other-product-next flex items-center justify-center cursor-pointer">
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

    <div id="get-offer" class="content get-offer pointer-events-none px-[270px] 2xl:px-[200px] xl:px-[100px] sm:px-[30px] w-full h-auto max-w-[1920px] mx-auto">
        <div class="flex lg:flex-col items-center">
            <div class="gallery-area min-lg:w-1/2 pr-[45px] xl:pr-[30px] md:pr-0 md:w-full md:order-2">
                <div class="flex flex-col w-full items-center gap-[37px] lg:gap-[25px]">
                    <div class="contact-gallery-slider overflow-hidden w-full">
                        <div class="swiper-wrapper">
                            <?php for ($s = 0; $s <= 3; $s++) : ?>
                                <div class="swiper-slide">
                                    <div class="item w-full h-[550px] xl:h-[450px] lg:h-[400px] sm:h-[320px] rounded-[20px] overflow-hidden isolate [mask-image:url('../../assets/image/newdetail.svg')] [mask-size:contain] [mask-repeat:no-repeat] [mask-position:center]">
                                        <img src="../assets/image/rectangle15.jpeg" alt="Offer" width="740" height="550" class="w-full h-full object-cover">
                                    </div>
                                </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                    <div class="contact-gallery-slider-pagination flex items-center justify-center gap-[7px] [&_.swiper-pagination-bullet]:w-[11px] [&_.swiper-pagination-bullet]:h-[12px] [&_.swiper-pagination-bullet]:-skew-x-12 [&_.swiper-pagination-bullet]:bg-white/16 [&_.swiper-pagination-bullet.swiper-pagination-bullet-active]:bg-primary-main [&_.swiper-pagination-bullet]:rounded-[2px] [&_.swiper-pagination-bullet]:!m-0 [&_.swiper-pagination-bullet]:!opacity-100 [&_.swiper-pagination-bullet]:transition-all [&_.swiper-pagination-bullet]:duration-300"></div>
                </div>

            </div>
            <div class="order-contact-form-field md:order-1 min-lg:w-[50%]">
                <div class="form-wrapper bg-white p-[90px] xl:p-[75px] lg:p-[60px] md:p-[45px] sm:p-0 flex flex-col justify-center">
                    <div dir class="flex flex-col items-start gap-[35px] mb-[48px] sm:mb-[20px] relative [&>p]:text-gray [&>p]:text-[18px] [&>p]:leading-[28px] [&>p]:font-medium">
                        <div class="text-center text-[48px] 2xl:text-[42px] xl:text-[36px] md:text-[32px] sm:text-[25px] font-bold leading-[64px] 2xl:leading-[56px] xl:leading-[48px] lg:leading-[40px] md:leading-[35px] sm:leading-[30px] text-secondary [&>span]:text-[#1679BE]"><span>Contact</span> Form </div>
                        <p class="!text-[18px] text-gray font-medium leading-[28px] sm:!text-[16px]">We will be happy to review our entire product range and provide you with a tailor-made offer to find the best solution for your needs.</p>
                    </div>
                    <div class="form w-full md:mb-[30px] md:w-full md:order-1">
                        <form action="#" class="">
                            <div class="form grid grid-cols-4 sm:grid-cols-1 gap-6">
                                <div class="item group/item col-span-2 sm:col-span-1 relative">
                                    <input type="text" name="name" id="name" class="block h-[65px] sm:h-[50px] py-2 px-5 xs:pr-5 w-full text-[16px] text-gray placeholder:text-gray font-semibold bg-white border border-solid border-[#DDD] appearance-none focus:outline-none focus:ring-0 focus:border-secondary placeholder:text-black/70 placeholder:font-semibold focus:text-black group-[&.error]/item:border-red-500 duration-450 rounded-[10px]" placeholder="Name Surname" required>
                                    <div class="tooltip hidden text-[14px] absolute right-2 top-full -translate-y-1/2 w-fit h-fit rounded-none border border-solid border-red-500 text-red-500 bg-white px-3 py-1 group-[&.error]/item:block z-10">Error</div>
                                </div>
                                <div class="item group/item col-span-2 sm:col-span-1 relative">
                                    <input type="email" name="email" id="email" class="block h-[65px] sm:h-[50px] py-2 px-5 xs:pr-5 w-full text-[16px] text-gray placeholder:text-gray font-semibold bg-white border border-solid border-[#DDD] appearance-none focus:outline-none focus:ring-0 focus:border-secondary placeholder:text-black/70 placeholder:font-semibold focus:text-black group-[&.error]/item:border-red-500 duration-450 rounded-[10px]" placeholder="Your Mail Address" required>
                                    <div class="tooltip hidden text-[14px] absolute right-2 top-full -translate-y-1/2 w-fit h-fit rounded-none border border-solid border-red-500 text-red-500 bg-white px-3 py-1 group-[&.error]/item:block z-10">Error</div>
                                </div>
                                <div class="item group/item col-span-2 sm:col-span-1 relative">
                                    <input type="tel" name="tel" id="tel" class="block h-[65px] sm:h-[50px] py-2 px-5 xs:pr-5 w-full text-[16px] text-gray placeholder:text-gray font-semibold bg-white border border-solid border-[#DDD] appearance-none focus:outline-none focus:ring-0 focus:border-secondary placeholder:text-black/70 placeholder:font-semibold focus:text-black group-[&.error]/item:border-red-500 duration-450 rounded-[10px]" placeholder="Your Telephone Number" required>
                                    <div class="tooltip hidden text-[14px] absolute right-2 top-full -translate-y-1/2 w-fit h-fit rounded-none border border-solid border-red-500 text-red-500 bg-white px-3 py-1 group-[&.error]/item:block z-10">Error</div>
                                </div>
                                <div class="item group/item col-span-2 sm:col-span-1 relative">
                                    <input type="company-name" name="company-name" id="company-name" class="block h-[65px] sm:h-[50px] py-2 px-5 xs:pr-5 w-full text-[16px] text-gray placeholder:text-gray font-semibold bg-white border border-solid border-[#DDD] appearance-none focus:outline-none focus:ring-0 focus:border-secondary placeholder:text-black/70 placeholder:font-semibold focus:text-black group-[&.error]/item:border-red-500 duration-450 rounded-[10px]" placeholder="Company Name" required>
                                    <div class="tooltip hidden text-[14px] absolute right-2 top-full -translate-y-1/2 w-fit h-fit rounded-none border border-solid border-red-500 text-red-500 bg-white px-3 py-1 group-[&.error]/item:block z-10">Error</div>
                                </div>
                                <div class="item group/item col-span-4 sm:col-span-1 relative">
                                    <textarea class="block min-h-[165px] sm:min-h-[120px] py-4 px-5 xs:pr-5 w-full text-[16px] text-gray placeholder:text-gray font-semibold bg-white border border-solid border-[#DDD] appearance-none focus:outline-none focus:ring-0 focus:border-secondary placeholder:text-black/70 placeholder:font-semibold focus:text-black group-[&.error]/item:border-red-500 duration-450 resize-none rounded-[10px]" placeholder="Your message"></textarea>
                                    <div class="tooltip hidden text-[14px] absolute right-2 top-full -translate-y-1/2 w-fit h-fit rounded-none border border-solid border-red-500 text-red-500 bg-white px-3 py-1 group-[&.error]/item:block z-10">Error</div>
                                </div>
                                <div class="item group/item col-span-2 sm:col-span-1 relative">
                                    <div class="form-el flex items-center gap-[15px] h-full">
                                        <input type="checkbox" id="acceptance-request" class="peer cursor-pointer absolute left-0 top-0 w-full h-full opacity-0 z-10">
                                        <div class="box relative shrink-0 h-4 w-4 before:absolute before:duration-450 peer-checked:before:!opacity-100 peer-checked:before:!scale-100 before:scale-0 before:opacity-0 before:left-[50%] before:top-[50%] before:translate-x-[-50%] before:translate-y-[-50%] before:w-[40%] before:h-[40%] before:bg-secondary duration-450 shadow-[0_0_0_1px_rgb(0_0_0/.15)] peer-hover:shadow-[0_0_0_1px_rgb(0_0_0/.5)] peer-checked:!shadow-[0_0_0_1px_rgb(0_0_0/.5)] border-0 bg-transparent group-[&.error]/item:shadow-[0_0_0_1px_rgba(0_0_0/100)] rounded-full before:rounded-full"></div>
                                        <label for="acceptance-request" class="text-[14px] text-black/70 leading-tight duration-450 font-light">I have read the <a href="#popup-gdpr" class="inline-block relative z-20 text-gray font-semibold hover:text-secondary duration-450 underline" data-fancybox>Clarification Text. </a> <br> I accept.</label>
                                        <div class="tooltip hidden text-[14px] absolute right-2 top-full -translate-y-1/2 w-fit h-fit rounded-none border border-solid border-red-500 text-red-500 bg-white px-3 py-1 group-[&.error]/item:block z-10">Error</div>
                                    </div>
                                </div>
                                <div class="item group/item col-span-2 sm:col-span-1 relative loading">
                                    <button type="submit" class="button bg-secondary group/button flex before:absolute before:left-0 before:top-0 before:hover:top-full before:w-full before:h-full before:hover:bg-[#FFD61B] overflow-hidden isolate relative before:duration-500 items-center justify-center gap-[20px] rounded-full p-[19px_30px] [box-shadow:10px_10px_30px_0px_rgba(249,_177,_0,_0.25)]">
                                        <span class="text text-[18px] flex items-center text-white font-normal ">Send</span>
                                        <i class="icon icon-arrow-right-2 -rotate-45  text-[12px] flex items-center justify-center text-white"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

@endsection

@section('scripts')
<script>
    // Faq Accordion
    const faqSlideDown = elem => {
        document.fonts.ready.then(() => {
            elem.style.height = `${elem.scrollHeight}px`;
        });
    }

    const faqSlideUp = elem => {
        elem.style.height = `0px`;
    }

    let faqAccordion = document.querySelectorAll('.faq-accordion');
    if (faqAccordion.length) {
        faqAccordion.forEach(element => {
            // Tıklanınca accordion'ı aç/kapat
            element.querySelector('.visible-field').addEventListener('click', () => {
                if (!element.classList.contains('is-active')) {
                    // Sadece tıklanan bölüm aktif değilse işleme devam et
                    element.classList.add('is-active')
                    if (element.querySelector('.hidden-field')) faqSlideDown(element.querySelector('.hidden-field'));

                    // Diğer accordion elemanlarını pasifleştir
                    faqAccordion.forEach(item => {
                        if (item != element) {
                            item.classList.remove('is-active');
                            if (item.querySelector('.hidden-field')) faqSlideUp(item.querySelector('.hidden-field'));
                        }
                    });
                } else {
                    // Aktif olan bölümün kapanması
                    element.classList.remove('is-active')
                    if (element.querySelector('.hidden-field')) faqSlideUp(element.querySelector('.hidden-field'));
                }
            });
        });

        // Sayfa yüklendiğinde hiçbir accordion'ın açık olmaması için
        faqAccordion.forEach(item => {
            item.classList.remove('is-active');
            if (item.querySelector('.hidden-field')) faqSlideUp(item.querySelector('.hidden-field'));
        });
    }
</script>

<script>
    let newSlider = new Swiper(".other-products-slider", {
        modules: [A, P, N, Px],
        slidesPerView: 1,
        speed: 1000,
        spaceBetween: 0,
        loop: true,
        resistance: true,
        resistanceRatio: 0,
        centeredSlides: true,
        watchSlidesProgress: true,
        autoplay: false,
        autoplay: {
            disableOnInteraction: false,
            pauseOnMouseEnter: true,
        },
        navigation: {
            nextEl: ".other-product-next",
            prevEl: ".other-product-prev",

        },
        breakpoints: {
            600: {
                slidesPerView: 1.2,
            },
            820: {
                slidesPerView: 2,
                centeredSlides: false,
            },

            1380: {
                slidesPerView: 3,
            },

            1560: {
                slidesPerView: 3,
                spaceBetween: 10,
            },
            1680: {
                slidesPerView: 3,
                spaceBetween: 40,
            },
        },

    })


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
        const swiperElement = document.querySelector('.other-products-slider'); // Swiper elementinizi seçin
        if (isElementInView(swiperElement)) {
            // Eğer swiper görünüyorsa ve daha önce autoplay başlamadıysa
            if (!newSlider.autoplay.running) {
                newSlider.autoplay.start();
            }
        } else {
            // Swiper görünmüyorsa ve autoplay çalışıyorsa durdur
            if (newSlider.autoplay.running) {
                newSlider.autoplay.stop();
            }
        }
    }

    // Scroll event listener ekleyin
    window.addEventListener('scroll', checkSwiperVisibility);
    // Sayfa yüklendiğinde de kontrol edin
    window.addEventListener('load', checkSwiperVisibility);


    let productCategoriesImageCarouselParams = {
        modules: [A, P, N, Px, EF, EC, C],
        speed: 1000,
        slidesPerView: 1,
        resistance: true,
        resistanceRatio: 0,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
            pauseOnMouseEnter: true,
        },
        loop: false,
        effect: 'fade',
        allowTouchMove: true,
        navigation: {
            prevEl: '.product-categories-prev',
            nextEl: '.product-categories-next',
        },


    }
    new Swiper('.product-categories-image-carousel', productCategoriesImageCarouselParams);
</script>
@endsection
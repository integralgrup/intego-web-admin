@extends('layouts.main')


@section('content')
<main class="main-field header-space overflow-hidden">

    <section class="relative max-w-[1920px] mx-auto">
        <div class="absolute top-0 right-0 z-[-1] pointer-events-none sm:hidden">
            <img src="../assets/image/group123.png" alt="">
        </div>
        <div class="container max-w-[1600px] mx-auto mb-[100px] lg:mb-[60px]">
            <div class="breadcrumb-area grid grid-cols-[minmax(0,1fr)_minmax(0,2fr)] sm:grid-cols-1 items-center sm:flex-col sm:items-center sm:justify-center sm:gap-[15px] md:w-full reveal py-10 sens">
                <div class="breadcrumb md:w-full relative sm:flex sm:items-center sm:justify-center">
                    <ul class="[&_li_+_li]:before:content-['/'] [&_li_+_li]:before:px-[20px] [&_li_+_li]:before:text-[18px] [&_li_+_li]:before:leading-[28px] [&_li_+_li]:before:font-bold [&_li_+_li]:before:text-gray/75 sm:[&_li_+_li]:before:text-gray flex items-center flex-wrap relative z-2">
                        <li class="inline-flex items-center">
                            <a href="index.php" class="block">
                                <p class="text-[18px] md:text-[15px] leading-[28px] md:leading-[24px] font-medium text-gray/75 group-[&.rtl]/html:text-black group-[&.rtl]/html:hover:text-black hover:text-secondary duration-500 sm:text-gray">Home</p>
                            </a>
                        </li>
                        <li class="inline-flex items-center">
                            <a href="page-playground-area.php" class="block">
                                <p class="text-[18px] md:text-[15px] leading-[28px] md:leading-[24px] font-medium text-gray/75 group-[&.rtl]/html:text-black group-[&.rtl]/html:hover:text-black sm:text-gray duration-500 hover:text-secondary">Playgrounds Area</p>
                            </a>
                        </li>
                    </ul>
                </div>
                 <div class="flex sm:flex-col sm:items-start items-center gap-[15px]">
                 <a href="#get-offer" class="p-[16px_40px] bg-white rounded-full  flex items-center sm:w-full justify-center gap-[15px] border-[4px] border-solid border-[#F2F3F5] before:absolute before:left-0 before:top-0 before:hover:top-full before:w-full before:h-full before:hover:bg-[#FFD61B] overflow-hidden isolate relative before:duration-500">
                    <span class="text-[18px] lg:text-[16px] font-semibold leading-[30px] text-gray">Start Project</span>
                    <span class="font-semibold leading-[30px] flex items-center justify-center text-secondary icon icon-arrow-right-2 text-[16px]"></span>
                </a>
                <button class="p-[16px_40px] bg-white rounded-full  flex items-center sm:w-full justify-center gap-[15px] border-[4px] border-solid border-[#F2F3F5] before:absolute before:left-0 before:top-0 before:hover:top-full before:w-full before:h-full before:hover:bg-[#FFD61B] overflow-hidden isolate relative before:duration-500">
                    <span class="text-[18px] lg:text-[16px] font-semibold leading-[30px] text-gray">Next Area</span>
                    <span class="font-semibold leading-[30px] flex items-center justify-center text-secondary icon icon-arrow-right-2 text-[16px]"></span>
                </button>
                 </div>
            </div>
            <div class="grid grid-cols-[minmax(0,1fr)_minmax(0,2fr)] lg:grid-cols-1 items-center gap-[60px] 2xl:gap-[30px]">
                <div class="productTextSlider overflow-hidden isolate pb-[60px] sm:pb-0 sens">
                    <div class="swiper-wrapper">
                        <?php foreach($play_ground->images as $image) : ?>
                            <div class="swiper-slide">
                                <div class="flex flex-col gap-[40px] w-full">
                                    <div dir class="text-editor md:editor-p:text-black sm:editor-p:text-gray editor-h1:font-bold sm:items-center sm:text-center editor-h1:text-black editor-h1:leading-[64px] 2xl:editor-h1:leading-[56px] xl:editor-h1:leading-[48px] lg:editor-h1:leading-[40px] md:editor-h1:leading-[35px] sm:editor-h1:leading-[30px] editor-p:text-gray editor-p:leading-[28px] editor-p:font-medium editor-p:max-w-[440px]">
                                        <h1>{{ $image->title }}</h1>
                                        <p>{!! $image->description !!}</p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="flex group-[&.rtl]/html:flex-row-reverse items-center justify-start gap-[40px] mt-[100px] absolute bottom-[16%] lg:bottom-0 lg:left-1/2 lg:-translate-x-1/2 sm:bottom-[-6%] z-20 sm:z-20 sm:left-1/2 sm:-translate-x-1/2">
                    <div class="TextSlider-prev flex items-center justify-center cursor-pointer">
                        <svg class="group" xmlns="http://www.w3.org/2000/svg" width="40" height="22" viewBox="0 0 40 22" fill="none">
                            <path class="group-hover:!stroke-secondary duration-500" d="M10.1392 21L1 11M1 11L10.1392 1M1 11H39" stroke="#DEDFE0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="TextSlider-next flex items-center justify-center cursor-pointer">
                        <svg class="group" xmlns="http://www.w3.org/2000/svg" width="40" height="22" viewBox="0 0 40 22" fill="none">
                            <path class="group-hover:!stroke-secondary duration-500" d="M31.7444 1L39 11M39 11L31.7444 21M39 11H1" stroke="#DEDFE0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>
                <div class="image-area w-full flex items-center xl:items-start md:flex-col gap-[10px] 2xl:gap-[25px] md:gap-[20px] lg:items-center lg:justify-center">
                    <div class="productDetailSlider overflow-hidden h-[700px] lg:h-[600px] md:h-[450px] sm:h-[320px] md:w-full sens">
                        <div class="swiper-wrapper">
                            <?php foreach($play_ground->images as $image) : ?>
                            <div class="swiper-slide">
                                <a data-fancybox="gallery" href="{{ asset( getFolder(['uploads_folder','playground_images_folder'], $image['lang']) . '/' . $image['image'] ) }}" class="item block aspect-[80/57] h-[570px] 2xl:aspect-[70/54] 2xl:h-[540px] xl:aspect-[60/50] xl:h-[500px] lg:aspect-auto lg:h-[400px] sm:h-[320px] xs:h-[300px] rounded-[50px]">
                                    <img src="{{ asset( getFolder(['uploads_folder','playground_images_folder'], $image['lang']) . '/' . $image['image'] ) }}" alt="Product" class="w-full h-full object-cover object-center rounded-[50px]">
                                </a>
                            </div>
                            <?php endforeach; ?>

                        </div>
                    </div>
                    <div class="productDetailThumbSlider pb-[30px] md:p-0 min-sm:overflow-y-hidden min-sm:overflow-x-hidden animate-carousel h-[376px] md:h-[160px] sm:h-[100px] md:w-full reveal  px-[15px]">
                        <div class="swiper-wrapper">
                            <?php foreach($play_ground->images as $image) : ?>
                                <div class="swiper-slide group relative">
                                    <div class="item aspect-[13/10] h-[100px] 2xl:aspect-[12/9] 2xl:h-[90px] xl:aspect-[11/8] xl:h-[80px] xs:w-full xs:h-full group-[&.swiper-slide-active]:[box-shadow:10px_10px_30px_0px_rgba(249,_177,_0,_0.25)] duration-500 rounded-[20px] !pointer-events-none">
                                        <img src="{{ asset( getFolder(['uploads_folder','playground_images_folder'], $image['lang']) . '/' . $image['image'] ) }}" alt="Product" class="w-full h-full object-cover object-center rounded-[20px]">
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <div class="swiper-slide hidden sm:block"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>









    <!-- DESKTOP GÖRÜNÜM -->

    

    <div class="container max-w-[1500px] relative z-20 bg-[#1679BE] rounded-[50px] py-20 lg:hidden">
        <div class="absolute top-[6%] left-[-25px] 2xl:left-[-15px] xl:left-2 p-3 z-10 [mask-image:url('../../assets/image/smallproduct.svg')] [mask-size:contain] [mask-repeat:no-repeat] [mask-position:center] bg-secondary md:hidden">
            <img src="../assets/image/icon-tab.png" alt="">
        </div>
        <div class="absolute top-0 left-0 w-full h-full pointer-events-none">
            <img class="w-full h-full object-cover object-center rounded-[50px]" src="../assets/image/Rectangle11.png" alt="">
        </div>
        <div class="wrapper flex items-start gap-[160px] xl:gap-[120px] lg:gap-[80px] md:gap-[40px] md:grid-cols-1">


            <div gsapSticky="wrapper" class="w-1/2 production-step-field relative pt-[150px] duration-450 group/production-step-field md:pt-0">
                <div class="step-field flex flex-col gap-[200px] xl:gap-[60px] lg:gap-[45px] md:gap-[30px] sm:gap-[30px] pb-[60px] lg:pb-[45px] md:pb-[30px]">
                    <?php foreach ($play_ground->gallery as $key => $item) : ?>
                        <div gsapSticky="each" class="item step-item group/item">
                            <div class="content flex flex-col gap-[50px] xl:gap-[40px] lg:gap-[30px] md:gap-[20px] relative pl-[150px] xl:pl-[80px] lg:pl-[30px] md:pl-0">
                                <div class="text-editor editor-h2:text-white editor-h2:font-medium [&>span]:font-bold [&>span]:text-[24px] [&>span]:text-secondary">
                                    <span><?= $key+1 ?></span>
                                    <h2 dir class="!text-white/50 group-[&.active]/item:!text-white font-light group-[&.active]/item:![text-shadow:1px_0_0_currentColor] duration-500"><?= $item['title'] ?></h2>
                                </div>
                                <div class="main-field flex flex-col gap-[50px] xl:gap-[40px] lg:gap-[30px] md:gap-[20px]">
                                    <div class="text-field">
                                        <div class="text-editor-white editor-p:text-white/90 !max-w-full editor-p:text-[18px] editor-li:text-[18px] md:editor-p:text-[18px] md:editor-li:text-[18px] sm:editor-p:text-[16px] sm:editor-li:text-[16px] xs:editor-p:text-[14px] xs:editor-li:text-[14px] editor-p:max-w-[470px] white-marker">
                                            <p dir><?= $item['description'] ?></p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div gsapSticky="image" class="w-1/2 relative flex items-center justify-center before:absolute before:top-1/2 before:-translate-y-1/2 before:-translate-x-1/2 before:left-1/2 before:-rotate-6 before:w-[550px] xl:before:w-[500px] before:h-[550px] xl:before:h-[500px] lg:before:hidden before:bg-secondary before:[mask-image:url('../../assets/image/product3.svg')]  before:[mask-size:contain] before:[mask-repeat:no-repeat] before:[mask-position:center]">
                <div class=" aspect-square w-[550px] xl:w-[500px] lg:w-[450px] md:h-auto flex flex-col justify-between gap-[30px] relative">
                    <!--  -->
                    <div class="image group/image relative w-full h-full translate-z-0 top-0 [mask-image:url('../../assets/image/product3.svg')] [mask-size:contain] [mask-repeat:no-repeat] [mask-position:center]">
                        <?php foreach ($play_ground->gallery as $key => $item) : ?>
                        <div class="image">
                            <img src="{{ asset( getFolder(['uploads_folder','playground_images_folder'], $item['lang']) . '/' . $item['image'] ) }}" class="absolute md:!relative top-0 left-0 z-20 opacity-0 md:!opacity-100 duration-500 w-full h-full object-cover object-center " loading="lazy" alt="">
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <!-- MOBİL GÖRÜNÜM -->

    <div class="comtainer px-[30px] hidden lg:flex lg:items-center lg:justify-center bg-[#1679BE] rounded-[30px] my-12 py-10 relative">
        <div class="absolute top-0 left-0 w-full h-full pointer-events-none">
            <img class="w-full h-full object-cover object-center rounded-[50px]" src="../assets/image/Rectangle11.png" alt="">
        </div>
        <div class="wrapper flex flex-col gap-[30px] relative z-20">
            <?php foreach ($play_ground->gallery as $key => $item) : ?>
                <div class="item flex items-center justify-center flex-col gap-[30px]">
                    <div class="image aspect-square h-[500px] sm:h-[400px] xs:h-[320px]">
                        <img class="w-full h-full object-cover object-center rounded-[50px]" src="{{ asset( getFolder(['uploads_folder','playground_images_folder'], $item['lang']) . '/' . $item['image'] ) }}" loading="lazy" alt="">
                    </div>
                    <div class="text-editor text-center editor-h2:text-white editor-h2:font-medium [&>span]:font-bold [&>span]:text-[24px] [&>span]:text-secondary editor-p:text-white editor-p:max-w-[500px]">
                        <span>0<?= $key + 1 ?></span>
                        <h2><?= $item['title'] ?></h2>
                        <p><?= $item['description'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>




    <section class="other-products pt-[80px] sm:pt-[50px] mb-[140px] 2xl:mb-[110px] xl:mb-[70px] lg:mb-[40px] relative overflow-hidden isolate sens">
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


       <div id="get-offer" class="content get-offer pointer-events-none px-[270px] 2xl:px-[200px] xl:px-[100px] sm:px-[30px] w-full h-auto">
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
</script>



<script>
    let productDetailSlider, productDetailThumbSlider, productTextSlider;

    document.addEventListener("DOMContentLoaded", function() {
        if (document.querySelector(".productDetailSlider") && document.querySelector(".productDetailThumbSlider") && document.querySelector(".productTextSlider")) {

            productDetailThumbSlider = new Swiper(".productDetailThumbSlider", {
                modules: [A, N, Px, T, EF, C],
                slidesPerView: 2,
                speed: 1200,
                spaceBetween: 30,
                loop: false,
                loopAddBlankSlides: true,
                direction: "horizontal",
                resistance: true,
                centeredSlides: false,
                resistanceRatio: 0,
                slideToClickedSlide: true,
                watchSlidesProgress: true,
                navigation: {
                    nextEl: ".TextSlider-next",
                    prevEl: ".TextSlider-prev"
                },

                breakpoints: {
                    480: {
                        direction: "horizontal",
                        slidesPerView: 3,
                        spaceBetween: 0,
                        centeredSlides: true,
                    },
                    624: {
                        direction: "horizontal",
                        slidesPerView: 4,
                        spaceBetween: 0,
                        centeredSlides: true,
                    },
                    768: {
                        direction: "horizontal",
                        slidesPerView: 4,
                        spaceBetween: 0,
                        centeredSlides: true,
                    },
                    1024: {
                        direction: "vertical",
                        slidesPerView: 3,
                        spaceBetween: 50,
                        centeredSlides: true,
                    }
                },

            });

            productDetailSlider = new Swiper(".productDetailSlider", {
                modules: [A, N, Px, T, EF, C],
                slidesPerView: 1,
                speed: 1200,
                spaceBetween: 30,
                loop: false,
                direction: "horizontal",
                resistance: true,
                slideToClickedSlide: false,
                allowTouchMove: false,
                centeredSlides: false,
                resistanceRatio: 0,
                freeMode: true,
                watchSlidesProgress: true,

                breakpoints: {
                    1024: {
                        direction: "vertical"
                    }
                },
            });

            productTextSlider = new Swiper(".productTextSlider", {
                modules: [A, N, Px, T, EF, C],
                slidesPerView: 1,
                speed: 1200,
                spaceBetween: 30,
                loop: false,
                direction: "horizontal",
                resistance: true,
                allowTouchMove: false,
                slideToClickedSlide: false,
                centeredSlides: false,
                resistanceRatio: 0,
                freeMode: true,
                watchSlidesProgress: true,

            });

            productDetailThumbSlider.controller.control = productDetailSlider;
            productDetailSlider.controller.control = productTextSlider;
        }
    });
</script>

<script>
    // PRODUCTION STEP CAROUSEL
    // ------------------------------------------------------------------
    if (document.querySelector('.production-step-carousel')) {
        var productionStepCarousel = new Swiper(".production-step-carousel", {
            modules: [A, N],
            slidesPerView: 1,
            speed: 1000,
            spaceBetween: 30,
            loop: false,
            resistance: true,
            resistanceRatio: 0,
            parallax: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            navigation: {
                nextEl: ".production-step-next",
                prevEl: ".production-step-prev"
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                    autoHeight: true,
                },
                769: {
                    slidesPerView: 2,
                },
            },

        })
    }
    // }
</script>
@endsection
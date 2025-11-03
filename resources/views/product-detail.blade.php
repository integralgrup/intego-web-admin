@extends('layouts.main')

@section('content')

<main class="main-field header-space sub-page">


    <!-- CONTENT -->
    <section class="main-area w-full overflow-hidden relative max-w-[1920px] mx-auto">
        <div class="absolute top-[-8%] left-[-20%] pointer-events-none z-[-1]">
            <img src="../assets/image/yellowshadow.png" alt="">
        </div>
        <div class="absolute top-[250px] right-[-150px] pointer-events-none md:hidden">
            <img src="../assets/image/yellowshadow.png" alt="">
        </div>
        <div class="container max-w-[1600px] mx-auto mb-[100px] lg:mb-[60px]">
            <div class="flex md:flex-col items-center justify-center gap-[60px] xl:gap-[30px] sm:gap-[60px] ">
                <div class="w-1/2 md:w-full pr-[15px] md:pr-0 md:mb-[30px] lg:p-0 sens">
                    <div class="image-area w-full flex items-center md:flex-col-reverse gap-[10px] 2xl:gap-[35px] md:gap-[20px]">
                        <div class="product-detail-thumb-slider overflow-hidden  h-[376px] md:h-[160px] sm:h-[100px] md:w-full reveal ">
                            <div class="swiper-wrapper">
                                <?php for ($i = 0; $i <= 8; $i++) : ?>
                                    <div class="swiper-slide group relative ">
                                        <div class="item  rounded-[5px] aspect-[8/9] h-[90px] border border-solid border-transparent pointer-events-none [mask-image:url('../../assets/image/smallproduct.svg')] [mask-size:contain] [mask-repeat:no-repeat] [mask-position:center] bg-[#F1F8FE] group-[&.swiper-slide-active]:bg-[#FEF7E5] duration-500">
                                            <img src="../assets/image/product/rectangle4.png" alt="Product" class="aspect-[8/9] h-[90px] object-contain object-center">
                                        </div>
                                        <div class="absolute top-0 left-0 aspect-[8/9] h-[90px] group-[&.swiper-slide-active]:rotate-12 duration-500 z-[-1]">
                                            <img class="w-full h-full object-contain object-center" src="../assets/image/smallproduct.png" alt="">
                                        </div>
                                    </div>
                                <?php endfor; ?>
                                <div class="swiper-slide"></div>
                                <div class="swiper-slide"></div>
                            </div>
                            <div class="flex items-start justify-center">
                                <div class="flex group-[&.rtl]/html:flex-row-reverse items-center justify-center gap-[40px] min-md:mt-[100px] sm:pt-[30px] min-md:rotate-90  pointer-events-auto absolute z-20">
                                    <div class="thumb-slider-prev flex items-center justify-center cursor-pointer">
                                        <svg class="group" xmlns="http://www.w3.org/2000/svg" width="40" height="22" viewBox="0 0 40 22" fill="none">
                                            <path class="group-hover:!stroke-secondary duration-500" d="M10.1392 21L1 11M1 11L10.1392 1M1 11H39" stroke="#DEDFE0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="thumb-slider-next flex items-center justify-center cursor-pointer">
                                        <svg class="group" xmlns="http://www.w3.org/2000/svg" width="40" height="22" viewBox="0 0 40 22" fill="none">
                                            <path class="group-hover:!stroke-secondary duration-500" d="M31.7444 1L39 11M39 11L31.7444 21M39 11H1" stroke="#DEDFE0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-detail-slider overflow-hidden h-[700px] lg:h-[600px] md:h-[450px] sm:h-[320px] md:w-full reveal">
                            <div class="swiper-wrapper">
                                <?php for ($i = 0; $i <= 8; $i++) : ?>
                                    <div class="swiper-slide">
                                        <a data-fancybox="gallery" href="../assets/image/product/rectangle4.png" class="item w-full h-full block">
                                            <img src="../assets/image/product/rectangle4.png" alt="Product" width="547" height="772" class="w-full h-full object-contain object-center">
                                        </a>
                                    </div>
                                <?php endfor; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-1/2 md:w-full pl-[15px] md:p-0 sens">
                    <div class="flex flex-col gap-[40px] sm:gap-[20px] w-full md:items-center md:text-center">
                        <div class="breadcrumb-area flex min-md:justify-start md:w-full reveal sm:hidden">
                            <div class="breadcrumb md:w-full relative py-[40px] sm:py-[20px]">
                                <ul dir class="[&_li_+_li]:before:content-['/'] [&_li_+_li]:before:px-[20px] md:justify-center [&_li_+_li]:before:text-[18px] [&_li_+_li]:before:leading-[28px] [&_li_+_li]:before:font-bold [&_li_+_li]:before:text-gray/75 flex items-center flex-wrap relative z-2">
                                    <li class="inline-flex items-center">
                                        <a href="products.php" class="block">
                                            <p class="text-[18px] lg:text-[16px] md:text-[15px] leading-[28px] md:leading-[24px] font-medium text-gray/75 hover:text-secondary duration-500">Products</p>
                                        </a>
                                    </li>

                                    <li class="inline-flex items-center">
                                        <a href="page-product-detail.php" class="block">
                                            <p class="text-[18px] lg:text-[16px] md:text-[15px] leading-[28px] md:leading-[24px] font-medium text-gray/75 hover:text-secondary duration-500">Playgrounds</p>
                                        </a>
                                    </li>
                                    <li class="inline-flex items-center">
                                        <a href="page-playground-area.php" class="block">
                                            <p class="text-[18px] lg:text-[16px] md:text-[15px] leading-[28px] md:leading-[24px] font-medium text-gray/75 hover:text-secondary duration-500">Helicopter Series Playgrounds</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div>
                            <div dir class=" max-w-[200px]  bg-[#0F62AB] p-4 text-white font-bold text-[20px] text-center rounded-[30px]">
                                IN-100
                            </div>
                        </div>
                        <div dir class="text-editor editor-h2:font-semibold editor-h2:text-[#0E2A43] editor-h2:max-w-[525px] editor-h2:leading-[64px] 2xl:editor-h2:leading-[58px] xl:editor-h2:leading-[50px] lg:editor-h2:leading-[40px] md:editor-h2:leading-[30px] editor-p:text-gray editor-p:font-medium editor-p:leading-[28px] editor-p:max-w-[580px]">
                            <h2>Playground with 5 Towers and 7 Slides</h2>

                            <p>With 15 years of experience, we are working to make cities more livable with our Children'sPlaygrounds, Outdoor Sports Equipment, Rubber Floor Covering and Urban Furniture products.</p>
                        </div>
                        <div class="flex items-center xsm:flex-col justify-start gap-[40px] xsm:w-full">
                            <a dir href="#popup-contact" data-fancybox class="p-[16px_40px] bg-secondary xsm:w-full xsm:justify-center before:absolute before:left-0 before:top-0 before:hover:top-full before:w-full before:h-full before:hover:bg-[#FFD61B] overflow-hidden isolate relative before:duration-500 rounded-full flex items-center justify-center gap-[10px] [box-shadow:10px_10px_30px_0px_rgba(249,_177,_0,_0.25)]">
                                <span class="text-[18px] font-semibold leading-[30px] text-white">Get Offer</span>
                                <span class="font-semibold leading-[30px] flex items-center justify-center text-white icon icon-arrow-right-2 -rotate-45 text-[12px]"></span>
                            </a>
                            <a dir href="../assets/file/sample.pdf" download target="_blank" class="p-[16px_40px] xsm:w-full xsm:justify-center buttons bg-white before:absolute before:left-0 before:top-0 before:hover:top-full before:w-full before:h-full before:hover:bg-[#FFD61B] overflow-hidden isolate relative before:duration-500 rounded-full  flex items-center justify-center gap-[10px] border-[4px] border-solid border-[#F2F3F5]">
                                <span class="text-[18px] font-semibold leading-[30px] text-gray">PDF Document</span>
                                <span class="font-semibold leading-[30px] flex items-center justify-center text-secondary icon icon-pdf text-[12px]"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container max-w-[1600px] mx-auto bg-secondary rounded-[50px] sm:rounded-none py-[50px] sm:mb-[50px] relative xs:px-0">
            <div class="absolute top-0 left-0 pointer-events-none w-full h-full md:z-[-1]">
                <img class="w-full h-full" src="../assets/image/products.png" alt="">
            </div>
            <div class="wrapper grid grid-cols-3 lg:grid-cols-2 sm:grid-cols-1 sm:gap-y-0 gap-x-[5px] gap-y-[13px]">
                <div dir class="sens flex items-center sm:justify-start p-[15px] xs:p-[8px] gap-[20px] min-md:before:absolute min-md:before:top-0 min-md:before:left-0 min-md:before:w-full min-md:before:rounded-[30px] min-md:before:border min-md:before:border-solid min-md:before:border-black/0 min-md:before:h-full min-md:before:bg-white/0 min-md:hover:before:bg-white/20 min-md:hover:before:border min-md:hover:before:border-solid min-md:hover:before:border-white/40 min-md:hover:before:rounded-[30px] min-md:hover:before:[mask-image:linear-gradient(to_left,transparent_25%,black_50%)] min-md:before:[mask-image:linear-gradient(to_left,transparent_0%,black_0%)]">
                    <div class="image aspect-[7/7] h-[70px] 2xl:aspect-[6/6] 2xl:h-[60px] xs:aspect-[5/5] xs:h-[50px] flex items-center justify-center [mask-image:url('../../assets/image/smallproduct.svg')] [mask-size:contain] [mask-repeat:no-repeat] [mask-position:center] bg-[#F1F8FE]">
                        <img class="p-3 md:p-2" src="../assets/image/children.png" alt="">
                    </div>
                    <div class="text-[20px] sm:text-[18px] xs:text-[16px] md:leading-[30px] font-bold leading-[48px] text-white">Age Range :</div>
                    <span class="text-[20px] sm:text-[18px] xs:text-[16px] md:leading-[30px] font-medium leading-[48px] text-white">3-12</span>
                </div>
                <div dir class="sens flex items-center sm:justify-start p-[15px] xs:p-[8px] gap-[20px] min-md:before:absolute min-md:before:top-0 min-md:before:left-0 min-md:before:w-full min-md:before:rounded-[30px] min-md:before:border min-md:before:border-solid min-md:before:border-black/0 min-md:before:h-full min-md:before:bg-white/0 min-md:hover:before:bg-white/20 min-md:hover:before:border min-md:hover:before:border-solid min-md:hover:before:border-white/40 min-md:hover:before:rounded-[30px] min-md:hover:before:[mask-image:linear-gradient(to_left,transparent_25%,black_50%)] min-md:before:[mask-image:linear-gradient(to_left,transparent_0%,black_0%)]">
                    <div class="image aspect-[7/7] h-[70px] 2xl:aspect-[6/6] 2xl:h-[60px] xs:aspect-[5/5] xs:h-[50px] flex items-center justify-center [mask-image:url('../../assets/image/smallproduct.svg')] [mask-size:contain] [mask-repeat:no-repeat] [mask-position:center] bg-[#F1F8FE]">
                        <img class="p-3 md:p-2" src="../assets/image/spacing.png" alt="">
                    </div>
                    <div class="text-[20px] sm:text-[18px] xs:text-[16px] md:leading-[30px] font-bold leading-[48px] text-white">Drop Height :</div>
                    <span class="text-[20px] sm:text-[18px] xs:text-[16px] md:leading-[30px] font-medium leading-[48px] text-white">150 cm</span>
                </div>
                <div dir class="sens flex items-center sm:justify-start p-[15px] xs:p-[8px] gap-[20px] min-md:before:absolute min-md:before:top-0 min-md:before:left-0 min-md:before:w-full min-md:before:rounded-[30px] min-md:before:border min-md:before:border-solid min-md:before:border-black/0 min-md:before:h-full min-md:before:bg-white/0 min-md:hover:before:bg-white/20 min-md:hover:before:border min-md:hover:before:border-solid min-md:hover:before:border-white/40 min-md:hover:before:rounded-[30px] min-md:hover:before:[mask-image:linear-gradient(to_left,transparent_25%,black_50%)] min-md:before:[mask-image:linear-gradient(to_left,transparent_0%,black_0%)]">

                    <div class="image aspect-[7/7] h-[70px] 2xl:aspect-[6/6] 2xl:h-[60px] xs:aspect-[5/5] xs:h-[50px] flex items-center justify-center [mask-image:url('../../assets/image/smallproduct.svg')] [mask-size:contain] [mask-repeat:no-repeat] [mask-position:center] bg-[#F1F8FE]">
                        <img class="p-3 md:p-2" src="../assets/image/children.png" alt="">
                    </div>
                    <div class="text-[20px] sm:text-[18px] xs:text-[16px] md:leading-[30px] font-bold leading-[48px] text-white">Security Area :</div>
                    <span class="text-[20px] sm:text-[18px] xs:text-[16px] md:leading-[30px] font-medium leading-[48px] text-white">1000x165 cm</span>
                </div>
                <div dir class="sens flex items-center sm:justify-start p-[15px] xs:p-[8px] gap-[20px] min-md:before:absolute min-md:before:top-0 min-md:before:left-0 min-md:before:w-full min-md:before:rounded-[30px] min-md:before:border min-md:before:border-solid min-md:before:border-black/0 min-md:before:h-full min-md:before:bg-white/0 min-md:hover:before:bg-white/20 min-md:hover:before:border min-md:hover:before:border-solid min-md:hover:before:border-white/40 min-md:hover:before:rounded-[30px] min-md:hover:before:[mask-image:linear-gradient(to_left,transparent_25%,black_50%)] min-md:before:[mask-image:linear-gradient(to_left,transparent_0%,black_0%)]">

                    <div class="image aspect-[7/7] h-[70px] 2xl:aspect-[6/6] 2xl:h-[60px] xs:aspect-[5/5] xs:h-[50px] flex items-center justify-center [mask-image:url('../../assets/image/smallproduct.svg')] [mask-size:contain] [mask-repeat:no-repeat] [mask-position:center] bg-[#F1F8FE]">
                        <img class="p-3 md:p-2" src="../assets/image/internationalchildrens.png" alt="">
                    </div>
                    <div class="text-[20px] sm:text-[18px] xs:text-[16px] md:leading-[30px] font-bold leading-[48px] text-white">Assembly Space :</div>
                    <span class="text-[20px] sm:text-[18px] xs:text-[16px] md:leading-[30px] font-medium leading-[48px] text-white">75 m2</span>
                </div>
                <div dir class="sens flex items-center sm:justify-start p-[15px] xs:p-[8px] gap-[20px] min-md:before:absolute min-md:before:top-0 min-md:before:left-0 min-md:before:w-full min-md:before:rounded-[30px] min-md:before:border min-md:before:border-solid min-md:before:border-black/0 min-md:before:h-full min-md:before:bg-white/0 min-md:hover:before:bg-white/20 min-md:hover:before:border min-md:hover:before:border-solid min-md:hover:before:border-white/40 min-md:hover:before:rounded-[30px] min-md:hover:before:[mask-image:linear-gradient(to_left,transparent_25%,black_50%)] min-md:before:[mask-image:linear-gradient(to_left,transparent_0%,black_0%)]">

                    <div class="image aspect-[7/7] h-[70px] 2xl:aspect-[6/6] 2xl:h-[60px] xs:aspect-[5/5] xs:h-[50px] flex items-center justify-center [mask-image:url('../../assets/image/smallproduct.svg')] [mask-size:contain] [mask-repeat:no-repeat] [mask-position:center] bg-[#F1F8FE]">
                        <img class="p-3 md:p-2" src="../assets/image/selection.png" alt="">
                    </div>
                    <div class="text-[20px] sm:text-[18px] xs:text-[16px] md:leading-[30px] font-bold leading-[48px] text-white">Living Area :</div>
                    <span class="text-[20px] sm:text-[18px] xs:text-[16px] md:leading-[30px] font-medium leading-[48px] text-white">600x1250 cm</span>
                </div>
                <div dir class="sens flex items-center sm:justify-start p-[15px] xs:p-[8px] gap-[20px] min-md:before:absolute min-md:before:top-0 min-md:before:left-0 min-md:before:w-full min-md:before:rounded-[30px] min-md:before:border min-md:before:border-solid min-md:before:border-black/0 min-md:before:h-full min-md:before:bg-white/0 min-md:hover:before:bg-white/20 min-md:hover:before:border min-md:hover:before:border-solid min-md:hover:before:border-white/40 min-md:hover:before:rounded-[30px] min-md:hover:before:[mask-image:linear-gradient(to_left,transparent_25%,black_50%)] min-md:before:[mask-image:linear-gradient(to_left,transparent_0%,black_0%)]">

                    <div class="image aspect-[7/7] h-[70px] 2xl:aspect-[6/6] 2xl:h-[60px] xs:aspect-[5/5] xs:h-[50px] flex items-center justify-center [mask-image:url('../../assets/image/smallproduct.svg')] [mask-size:contain] [mask-repeat:no-repeat] [mask-position:center] bg-[#F1F8FE]">
                        <img class="p-3 md:p-2" src="../assets/image/internationalchildrens.png" alt="">
                    </div>
                    <div class="text-[20px] sm:text-[18px] xs:text-[16px] md:leading-[30px] font-bold leading-[48px] text-white">User Capacity :</div>
                    <span class="text-[20px] sm:text-[18px] xs:text-[16px] md:leading-[30px] font-medium leading-[48px] text-white">45</span>
                </div>
                <div dir class="sens flex items-center sm:justify-start p-[15px] xs:p-[8px] gap-[20px] min-md:before:absolute min-md:before:top-0 min-md:before:left-0 min-md:before:w-full min-md:before:rounded-[30px] min-md:before:border min-md:before:border-solid min-md:before:border-black/0 min-md:before:h-full min-md:before:bg-white/0 min-md:hover:before:bg-white/20 min-md:hover:before:border min-md:hover:before:border-solid min-md:hover:before:border-white/40 min-md:hover:before:rounded-[30px] min-md:hover:before:[mask-image:linear-gradient(to_left,transparent_25%,black_50%)] min-md:before:[mask-image:linear-gradient(to_left,transparent_0%,black_0%)]">

                    <div class="image aspect-[7/7] h-[70px] 2xl:aspect-[6/6] 2xl:h-[60px] xs:aspect-[5/5] xs:h-[50px] flex items-center justify-center [mask-image:url('../../assets/image/smallproduct.svg')] [mask-size:contain] [mask-repeat:no-repeat] [mask-position:center] bg-[#F1F8FE]">
                        <img class="p-3 md:p-2" src="../assets/image/maximize.png" alt="">
                    </div>
                    <div class="text-[20px] sm:text-[18px] xs:text-[16px] md:leading-[30px] font-bold leading-[48px] text-white">Age Range :</div>
                    <span class="text-[20px] sm:text-[18px] xs:text-[16px] md:leading-[30px] font-medium leading-[48px] text-white">3-12</span>
                </div>
                <div dir class="sens flex items-center sm:justify-start p-[15px] xs:p-[8px] gap-[20px] min-md:before:absolute min-md:before:top-0 min-md:before:left-0 min-md:before:w-full min-md:before:rounded-[30px] min-md:before:border min-md:before:border-solid min-md:before:border-black/0 min-md:before:h-full min-md:before:bg-white/0 min-md:hover:before:bg-white/20 min-md:hover:before:border min-md:hover:before:border-solid min-md:hover:before:border-white/40 min-md:hover:before:rounded-[30px] min-md:hover:before:[mask-image:linear-gradient(to_left,transparent_25%,black_50%)] min-md:before:[mask-image:linear-gradient(to_left,transparent_0%,black_0%)]">

                    <div class="image aspect-[7/7] h-[70px] 2xl:aspect-[6/6] 2xl:h-[60px] xs:aspect-[5/5] xs:h-[50px] flex items-center justify-center [mask-image:url('../../assets/image/smallproduct.svg')] [mask-size:contain] [mask-repeat:no-repeat] [mask-position:center] bg-[#F1F8FE]">
                        <img class="p-3 md:p-2" src="../assets/image/playground.png" alt="">
                    </div>
                    <div class="text-[20px] sm:text-[18px] xs:text-[16px] md:leading-[30px] font-bold leading-[48px] text-white">Age Range :</div>
                    <span class="text-[20px] sm:text-[18px] xs:text-[16px] md:leading-[30px] font-medium leading-[48px] text-white">3-12</span>
                </div>
                <div dir class="sens flex items-center sm:justify-start p-[15px] xs:p-[8px] gap-[20px] min-md:before:absolute min-md:before:top-0 min-md:before:left-0 min-md:before:w-full min-md:before:rounded-[30px] min-md:before:border min-md:before:border-solid min-md:before:border-black/0 min-md:before:h-full min-md:before:bg-white/0 min-md:hover:before:bg-white/20 min-md:hover:before:border min-md:hover:before:border-solid min-md:hover:before:border-white/40 min-md:hover:before:rounded-[30px] min-md:hover:before:[mask-image:linear-gradient(to_left,transparent_25%,black_50%)] min-md:before:[mask-image:linear-gradient(to_left,transparent_0%,black_0%)]">

                    <div class="image aspect-[7/7] h-[70px] 2xl:aspect-[6/6] 2xl:h-[60px] xs:aspect-[5/5] xs:h-[50px] flex items-center justify-center [mask-image:url('../../assets/image/smallproduct.svg')] [mask-size:contain] [mask-repeat:no-repeat] [mask-position:center] bg-[#F1F8FE]">
                        <img class="p-3 md:p-2" src="../assets/image/maximize.png" alt="">
                    </div>
                    <div class="text-[20px] sm:text-[18px] xs:text-[16px] md:leading-[30px] font-bold leading-[48px] text-white">Age Range :</div>
                    <span class="text-[20px] sm:text-[18px] xs:text-[16px] md:leading-[30px] font-medium leading-[48px] text-white">3-12</span>
                </div>
            </div>
        </div>



        <div class=" xsm:!px-0 mb-[100px] 2xl:mb-[120px] xl:mb-[90px] lg:mb-[60px]">

            <div class="product-tabs min-xsm:overflow-hidden rounded-[20px] xsm:rounded-0 relative py-[100px]  pt-[70px] xl:p-[45px] sm:p-[20px_30px] transition-all duration-450 will-change-[height,transform]">

                <div class="flex flex-col items-center gap-[70px] lg:gap-[40px] md:gap-[30px] relative z-2">
                    <div id="product-tab-container" class="lg:overflow-y-auto no-scrollbar lg:w-full  ">
                        <div class="hand-field absolute top-16 right-[8px] animate-x duration-450 [&.is-scroll]:opacity-0 hidden sm:block z-20">
                            <div class="image h-[24px] w-[24px] overflow-hidden translate-z-0">
                                <img src="../assets/image/hand.png" class="w-full h-full object-contain object-center" loading="lazy" alt="">
                            </div>
                        </div>
                        <div class="tabs flex items-center gap-[16px] xl:gap-0 sens  rounded-full min-md:border-[10px] min-md:border-solid min-md:border-[#FAFAFA]">
                            <?php $tabs = ['General Features', 'Technical Information', 'Gallery', 'Frequently Asked Questions', 'Get Offer'];
                            foreach ($tabs as $key => $item) : ?>
                                <div class="reveal tab group cursor-pointer py-[18px] lg:py-[14px] md:py-[10px] px-[42px] xl:px-[30px] lg:px-[25px] md:px-[10px] grid place-items-center relative <?= $key == 0 ? 'active' : '' ?>" data-tab-id="<?= $key ?>">
                                    <p class="text-[20px] md:text-[18px] sm:text-[16px] leading-[30px] text-gray font-semibold transition-all duration-300 bg-[#FAFAFA] group-[&.active]:text-white group-[&.active]:bg-secondary  rounded-full p-5 lg:p-4 md:p-3 relative z-2 text-center whitespace-nowrap"><?= $item ?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>





                    <div class="tab-contents w-full relative transition-all duration-450">

                        <div class="absolute top-[-25%] left-[-15%] pointer-events-none z-[-1]">
                            <img src="../assets/image/yellowshadow.png" alt="">
                        </div>
                        <div class="absolute bottom-[-15%] rigt-[-15%] pointer-events-none z-[-1]">
                            <img src="../assets/image/yellowshadow.png" alt="">
                        </div>
                        <?php $list = [
                            [
                                "icon-1" => "1",
                                "icon-2" => "1",
                            ],
                            [
                                "icon-1" => "2",
                                "icon-2" => "2",
                            ],
                            [
                                "icon-1" => "3",
                                "icon-2" => "3",
                            ],

                        ]; ?>
                        <div class=" content active overflow-hidden absolute left-0 top-0 w-full h-full transition-all duration-700 opacity-0 delay-200 translate-y-[50px] [&.active]:opacity-100 [&.active]:delay-500 [&.active]:translate-y-0 [&.active]:relative [&.active]:pointer-events-auto" data-content-id="0">

                            <div class="wrapper relative max-w-[1300px] xl:max-w-[1100px] lg:max-w-[900px] mx-auto ">
                                <div class="absolute bottom-10 sm:bottom-1 xs:bottom-5 left-1/2 -translate-x-1/2 z-20 ">
                                    <div class="swiperImageLine w-full max-w-[800px] sm:max-w-[400px] overflow-hidden animate-carousel">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div dir class="text-editor xs:gap-0 xs:px-[55px] editor-h2:text-white sm:editor-h2:text-[16px] sm:editor-p:text-[15px] editor-h2:font-bold editor-h2:text-center editor-p:text-white/75 editor-p:font-medium editor-p:text-center editor-p:max-w-[710px] lg:editor-p:max-w-[600px] sm:editor-p:max-w-[380px] 2xs:editor-p:max-w-[250px] editor-p:line-clamp-2 lg:items-center lg:text-center">
                                                    <h2>Reliable Equipment</h2>
                                                    <p>As Intego, we offer hundreds of different products to our valued customers with our high quality understanding and modern productionfacility.</p>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div dir class="text-editor xs:gap-0 xs:px-[55px] editor-h2:text-white sm:editor-h2:text-[16px] sm:editor-p:text-[15px] editor-h2:font-bold editor-h2:text-center editor-p:text-white/75 editor-p:font-medium editor-p:text-center editor-p:max-w-[710px] lg:editor-p:max-w-[600px] sm:editor-p:max-w-[380px] 2xs:editor-p:max-w-[250px] editor-p:line-clamp-2 lg:items-center lg:text-center">
                                                    <h2>Örnek 2</h2>
                                                    <p>As Intego, we offer hundreds of different products to our valued customers with our high quality understanding and modern productionfacility.</p>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div dir class="text-editor xs:gap-0 xs:px-[55px] editor-h2:text-white sm:editor-h2:text-[16px] sm:editor-p:text-[15px] editor-h2:font-bold editor-h2:text-center editor-p:text-white/75 editor-p:font-medium editor-p:text-center editor-p:max-w-[710px] lg:editor-p:max-w-[600px] sm:editor-p:max-w-[380px] 2xs:editor-p:max-w-[250px] editor-p:line-clamp-2 lg:items-center lg:text-center">
                                                    <h2>Örnek 3</h2>
                                                    <p>As Intego, we offer hundreds of different products to our valued customers with our high quality understanding and modern productionfacility.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiperTextLine w-full h-full overflow-hidden rounded-[50px]">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide group/slide h-full  ">
                                            <div class="image w-full h-[600px] xl:!h-[550px] lg:h-[450px] md:h-[400px] sm:!h-[350px] overflow-hidden isolate before:absolute before:left-0 before:top-0 before:w-full before:h-full relative before:bg-gradient-to-t before:from-black/70 before:to-transparent before:z-20 before:pointer-events-none">
                                                <img class="w-full h-full object-cover object-center" src="../assets/image/project/rectangle.png" data-swiper-parallax-x="50%" data-swiper-parallax-scale="2">
                                            </div>
                                        </div>
                                        <div class="swiper-slide group/slide h-full ">
                                            <div class="image w-full h-[600px] xl:!h-[550px] lg:h-[450px] md:h-[400px] sm:!h-[350px] overflow-hidden isolate before:absolute before:left-0 before:top-0 before:w-full before:h-full relative before:bg-gradient-to-t before:from-black/70 before:to-transparent before:z-20 before:pointer-events-none">
                                                <img class="w-full h-full object-cover object-center" src="../assets/image/project/rectangle2.png" data-swiper-parallax-x="50%" data-swiper-parallax-scale="2">
                                            </div>
                                        </div>
                                        <div class="swiper-slide group/slide h-full  ">
                                            <div class="image w-full h-[600px] xl:!h-[550px] lg:h-[450px] md:h-[400px] sm:!h-[350px] overflow-hidden isolate before:absolute before:left-0 before:top-0 before:w-full before:h-full relative before:bg-gradient-to-t before:from-black/70 before:to-transparent before:z-20 before:pointer-events-none">
                                                <img class="w-full h-full object-cover object-center" src="../assets/image/project/rectangle3.png" data-swiper-parallax-x="50%" data-swiper-parallax-scale="2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php foreach ($list as $key => $item) : ?>
                                    <div class="item step-icon-item group/item w-max xl:w-fit absolute cursor-pointer <?= $key == 0 ? 'left-[15%] top-[45%] md:top-[30%] sm:top-[20%]' : '' ?> <?= $key == 1 ? 'left-[47%] top-[49%] md:top-[25%]' : '' ?> <?= $key == 2 ? 'left-[75%] top-[45%] md:top-[20%]' : '' ?>" style="<?= $item['icon-position'] ?>">
                                        <div class="flex items-center justify-center <?= $key >= 2 ? 'flex-row-reverse' : '' ?> gap-[10px]">
                                            <div class="content relative duration-450">
                                                <div class="image-field relative z-20 duration-450 ">
                                                    <div class="absolute  top-[-15%] left-[-19%]  sm:left-[-22%] sm:top-[-18%]  aspect-[11/10] h-[100px] sm:aspect-[6/6] sm:h-[60px] opacity-0 pointer-events-none group-[&.is-active]/item:opacity-100 group-[&.is-active]/item:pointer-events-auto duration-500">
                                                        <img class="w-full h-full" src="../assets/image/tab.svg" alt="">
                                                    </div>
                                                    <div class="image group/image aspect-square overflow-hidden translate-z-0 opacity-100 duration-450  p-[40px] sm:p-[20px] group-[&.is-active]/item:opacity-0 [mask-image:url('../../assets/image/pin.svg')]  [mask-size:contain] [mask-repeat:no-repeat] [mask-position:center] bg-[#1679BE] group-[&.is-active]/item:bg-secondary">
                                                        <div class="text-white text-[32px] leading-[64px] font-bold absolute top-1/2  -translate-y-1/2 left-1/2 -translate-x-1/2"><?= $item['icon-1'] ?></div>
                                                    </div>
                                                    <div class="image group/image aspect-square overflow-hidden translate-z-0 absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 opacity-0 p-[40px] sm:p-[20px] duration-450 group-[&.is-active]/item:opacity-100 [mask-image:url('../../assets/image/pin.svg')] [mask-size:contain] [mask-repeat:no-repeat] [mask-position:center] group-hover/item:bg-[#1679BE] bg-secondary group-[&.is-active]/item:bg-secondary">
                                                        <div class="text-white text-[32px] leading-[64px] font-bold absolute top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2"><?= $item['icon-2'] ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>



                        <div class="content technical-information px-[330px] 2xl:px-[230px] xl:px-[130px] lg:px-[50px] md:px-0 pointer-events-none absolute left-0 top-0 w-full h-auto transition-all duration-700 opacity-0 delay-200 translate-y-[50px] [&.active]:opacity-100 [&.active]:delay-500 [&.active]:translate-y-0 [&.active]:relative [&.active]:pointer-events-auto" data-content-id="1">
                            <div class="text-editor w-full max-w-full overflow-x-auto scrollbar scrollbar-w-[3px] scrollbar-track-rounded-[3px] scrollbar-thumb-rounded-[3px] scrollbar-thumb-primary-500 scrollbar-track-primary-500/10">
                                <table>
                                    <thead>
                                        <tr>
                                            <?php for ($i = 0; $i <= 4; $i++) : ?>
                                                <th dir style="text-align: start; font-weight: 400;">Table Header Cell</th>
                                            <?php endfor; ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php for ($x = 0; $x <= 9; $x++) : ?>
                                            <tr>
                                                <?php for ($s = 0; $s <= 4; $s++) : ?>
                                                    <td dir>Table Cell</td>
                                                <?php endfor; ?>
                                            </tr>
                                        <?php endfor; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>



                        <div class="content gallery px-[180px] xl:px-[80px] lg:px-0 pointer-events-none absolute left-0 top-0 w-full h-auto transition-all duration-700 opacity-0 delay-200 translate-y-[50px] [&.active]:opacity-100 [&.active]:delay-500 [&.active]:translate-y-0 [&.active]:relative [&.active]:pointer-events-auto" data-content-id="2">
                            <div class="relative ">
                                <div class="flex flex-row-reverse group-[&.rtl]/html:flex-row items-center justify-center absolute bottom-[-50px] left-1/2 -translate-x-1/2 z-20 gap-10">
                                    <div class="next">
                                        <div class="gallery-next group/nav cursor-pointer pointer-events-auto flex items-center justify-center w-[70px] md:w-[50px] relative z-10">
                                            <i class="text-[20px] leading-none h-[20px] text-white transition-all duration-450 group-[&.gallery-disabled]/nav:text-white/60">
                                                <svg class="group" xmlns="http://www.w3.org/2000/svg" width="40" height="22" viewBox="0 0 40 22" fill="none">
                                                    <path class="group-hover:!stroke-secondary duration-500" d="M31.7444 1L39 11M39 11L31.7444 21M39 11H1" stroke="#DEDFE0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </i>
                                        </div>
                                    </div>

                                    <div class="prev">
                                        <div class="gallery-prev group/nav cursor-pointer pointer-events-auto flex items-center justify-center w-[70px] md:w-[50px] relative z-10">
                                            <i class="text-[20px] leading-none h-[20px] text-white transition-all duration-450 group-[&.gallery-disabled]/nav:text-white/60">
                                                <svg class="group" xmlns="http://www.w3.org/2000/svg" width="40" height="22" viewBox="0 0 40 22" fill="none">
                                                    <path class="group-hover:!stroke-secondary duration-500" d="M10.1392 21L1 11M1 11L10.1392 1M1 11H39" stroke="#DEDFE0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </i>
                                        </div>
                                    </div>

                                </div>
                                <div class="gallery-slider overflow-hidden">
                                    <div class="swiper-wrapper">
                                        <?php for ($i = 1; $i <= 10; $i++) : ?>
                                            <div class="swiper-slide">
                                                <div class="item w-full flex flex-col items-center gap-[34px] group">
                                                    <a href="../assets/image/trademark/newdetail4.jpeg" class="image-wrapper rounded-[20px] overflow-hidden relative aspect-[48/48] h-[480px] sm:aspect-[40/40] sm:h-[400px] xs:aspect-[30/30] xs:h-[300px] 2xs:aspect-[28/28] 2xs:h-[280px] [mask-image:url('../../assets/image/newdetail.svg')] [mask-size:contain] [mask-repeat:no-repeat] [mask-position:center]" data-fancybox="gallery">
                                                        <img src="../assets/image/trademark/newdetail4.jpeg" class="w-full h-full object-cover">
                                                    </a>
                                                    <p dir class="text-[24px] md:text-[20px] leading-[36px] text-gray font-semibold text-center">Photo / Video Name</p>
                                                </div>
                                            </div>
                                        <?php endfor; ?>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="content faq pointer-events-none px-[370px] 2xl:px-[200px] xl:px-[100px] sm:px-0 absolute left-0 top-0 w-full h-auto transition-all duration-700 opacity-0 delay-200 translate-y-[50px] [&.active]:opacity-100 [&.active]:delay-500 [&.active]:translate-y-0 [&.active]:relative [&.active]:pointer-events-auto" data-content-id="3">
                            <div class="faq w-full">
                                <div class="faq-area flex flex-col w-full gap-[40px]">
                                    <?php $faqs = [
                                        [
                                            'title' => 'How Do We Produce Playgrounds Suitable for Every Area as Intego?',
                                            'description' => 'With 15 years of experience, we are working to make cities more livable with our Childrens Playgrounds, Outdoor Sports Equipment, Rubber Floor Covering and Urban Furniture products. As Intego, we offer hundreds of different products to our valued customers with our high quality understanding and modern productionfacility.'
                                        ],

                                        [
                                            'title' => 'How Do We Produce Playgrounds Suitable for Every Area as Intego?',
                                            'description' => 'With 15 years of experience, we are working to make cities more livable with our Childrens Playgrounds, Outdoor Sports Equipment, Rubber Floor Covering and Urban Furniture products. As Intego, we offer hundreds of different products to our valued customers with our high quality understanding and modern productionfacility.'
                                        ],

                                        [
                                            'title' => 'How Do We Produce Playgrounds Suitable for Every Area as Intego?',
                                            'description' => 'With 15 years of experience, we are working to make cities more livable with our Childrens Playgrounds, Outdoor Sports Equipment, Rubber Floor Covering and Urban Furniture products. As Intego, we offer hundreds of different products to our valued customers with our high quality understanding and modern productionfacility.'
                                        ],

                                        [
                                            'title' => 'How Do We Produce Playgrounds Suitable for Every Area as Intego?',
                                            'description' => 'With 15 years of experience, we are working to make cities more livable with our Childrens Playgrounds, Outdoor Sports Equipment, Rubber Floor Covering and Urban Furniture products. As Intego, we offer hundreds of different products to our valued customers with our high quality understanding and modern productionfacility.'
                                        ],
                                    ];
                                    foreach ($faqs as $key => $item) : ?>
                                        <div class="item  cursor-pointer overflow-hidden group/faq flex flex-col py-[25px] px-[90px] xl:px-[65px] lg:px-[45px] md:p-[30px] transition-all duration-450 rounded-[100px] border-[2px] border-solid border-gray/14 [&.active]:border-secondary [&.active]:rounded-[50px] [&.active]:py-[60px] [&.active]:md:p-[30px] [&.active]:md:pb-[50px] relative after:w-full after:absolute after:bottom-0 after:left-o after:h-[1px] after:bg-black/8 last:after:hidden [&.active]:after:bg-transparent <?= $key == 0 ? '' : '' ?>">
                                            <div dir class="flex items-center justify-between sm:gap-[20px]">
                                                <p class="text-[24px] md:text-[20px] xs:text-[18px] xs:leading-tight leading-normal text-gray transition-all duration-450 font-bold group-[&.active]/faq:text-black"><span class="mr-[5px]"><?= $key + 1 ?>.</span><?= $item['title'] ?></p>
                                                <div class="dropdown-icon min-w-[44px] aspect-square flex gap-[6px] items-center justify-center rounded-[5px]  group-[&.active]/faq:bg-primary-main transition-all duration-450 relative before:transition-all before:duration-450 before:w-[5px] before:h-[20px] before:-rotate-45 before:rounded-full after:rounded-full before:bg-secondary after:w-[5px] after:h-[20px] after:rotate-45 after:bg-secondary after:transition-all after:duration-450 group-[&.active]/faq:before:rotate-45 group-[&.active]/faq:after:-rotate-45"></div>
                                            </div>
                                            <p class="text-[19px] lg:text-[17px] md:text-[16px] leading-[30px] text-white group-[&.active]/faq:text-gray font-light tracking-[-0.19px] transition-all duration-450 opacity-0 translate-y-[10px] faq-description group-[&.active]/faq:opacity-100 group-[&.active]/faq:translate-y-0 group-[&.active]/faq:mt-[20px] "><?= $item['description'] ?></p>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>



                        <div class="content get-offer pointer-events-none px-[270px] 2xl:px-[200px] xl:px-[100px] sm:px-0 absolute left-0 top-0 w-full h-auto transition-all duration-700 opacity-0 delay-200 translate-y-[50px] [&.active]:opacity-100 [&.active]:delay-500 [&.active]:translate-y-0 [&.active]:relative [&.active]:pointer-events-auto" data-content-id="4">
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
                    </div>


                </div>
            </div>
        </div>
    </section>


    <section class="other-products xl:pt-20 sm:pt-0 mb-[140px] 2xl:mb-[110px] xl:mb-[70px] lg:mb-[40px] relative overflow-hidden isolate sens max-w-[1920px] mx-auto">
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
</main>

@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var swiperTextLine = new Swiper(".swiperTextLine", {
            modules: [A, P, N, Px, C],
            slidesPerView: 1,
            speed: 1000,
            parallax: true,
            loop: false,
            centeredSlides: true,
            lazy: true,

            pagination: {
                el: ".about-pagination",
                speed: 1000,
                clickable: true,
                dynamicBullets: true,
            },
            navigation: {
                nextEl: ".swiperTextLine-next",
                prevEl: ".swiperTextLine-prev"
            },
            autoplay: false,
            autoplay: {
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
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
            const swiperElement = document.querySelector('.swiperTextLine'); // Swiper elementinizi seçin
            if (isElementInView(swiperElement)) {
                // Eğer swiper görünüyorsa ve daha önce autoplay başlamadıysa
                if (!swiperTextLine.autoplay.running) {
                    swiperTextLine.autoplay.start();
                }
            } else {
                // Swiper görünmüyorsa ve autoplay çalışıyorsa durdur
                if (swiperTextLine.autoplay.running) {
                    swiperTextLine.autoplay.stop();
                }
            }
        }

        // Scroll event listener ekleyin
        window.addEventListener('scroll', checkSwiperVisibility);
        // Sayfa yüklendiğinde de kontrol edin
        window.addEventListener('load', checkSwiperVisibility);

        var swiperImageLine = new Swiper(".swiperImageLine", {
            modules: [A, P, N, Px, C],
            slidesPerView: 1,
            speed: 1000,
            parallax: true,
            loop: false,
            centeredSlides: true,
            lazy: true,

        });
        swiperTextLine.controller.control = swiperImageLine;
        swiperImageLine.controller.control = swiperTextLine;
        let stepIconItem = document.querySelectorAll('.step-icon-item');
        var strokeSvgs = document.querySelectorAll('.strokeSvg');
        stepIconItem[0].classList.add('is-active');

        swiperTextLine.on('slideChange', function() {
            stepIconItem.forEach((item) => {
                item.classList.remove('is-active');
            });
            stepIconItem[swiperTextLine.realIndex % stepIconItem.length].classList.add('is-active');

            // SVG path renklerini güncelle
            var svgPaths = document.querySelectorAll('.strokeSvg'); // Burada düzeltilen kısım
            svgPaths.forEach(function(path) {
                path.setAttribute('stroke', 'black');
            });
            var activeIndex = swiperTextLine.realIndex % stepIconItem.length;
            var pathIndex = activeIndex * 2; // Her adımda iki path olduğu varsayılıyor
            if (svgPaths[pathIndex]) {
                svgPaths[pathIndex].setAttribute('stroke', '#8F1838');
            }
            if (svgPaths[pathIndex]) {
                svgPaths[pathIndex - 1].setAttribute('stroke', '#8F1838');
            }
        });

        stepIconItem.forEach((item, index) => {
            item.addEventListener('click', () => {
                swiperTextLine.slideTo(index);
            });
        });
    });
</script>

<script>
    if (document.querySelector('.product-detail-slider')) {
        let productSliderThumb = new Swiper(".product-detail-thumb-slider", {
            modules: [A, EC, N, T, C],
            slidesPerView: 3,
            speed: 1000,
            spaceBetween: 50,
            loop: true,
            loopAddBlankSlides: true,
            direction: "horizontal",
            resistance: true,
            
            centerInsufficientSlides: false,
            resistanceRatio: 0,
            slideToClickedSlide: true,
            watchSlidesProgress: true,

            speed: 1000,
            // autoplay: {
            //     delay: 5000,
            //     disableOnInteraction: false,
            //     pauseOnMouseEnter: true,
            // },
            breakpoints: {
                1024: {

                    direction: "vertical",
                    slidesPerView: 3,
                }
            },
            on: {
                init: function() {},
                slideChange: function() {},
            },
        })

        let productSlider = new Swiper(".product-detail-slider", {
            modules: [A, EC, N, T, C],
            slidesPerView: 1,
            speed: 1000,
            spaceBetween: 30,
            loop: true,

            direction: "horizontal",
            resistance: true,
            slideToClickedSlide: false,
            centeredSlides: false,
            resistanceRatio: 0,
            freeMode: true,
            watchSlidesProgress: true,
            navigation: {
                nextEl: ".thumb-slider-next",
                prevEl: ".thumb-slider-prev",

            },
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            thumbs: {
                swiper: productSliderThumb,
            },
            breakpoints: {
                1024: {
                    direction: "vertical"
                }
            },
            on: {
                init: function() {

                },
                slideChange: function() {
                    let currentSlideIndex = this.realIndex,
                        currentSlide = this.slides[currentSlideIndex]
                    productSliderThumb.slideTo(currentSlideIndex, 1000)
                },
            },
        })
    }


    if (document.querySelector('.gallery-slider')) {
        let newsSlider = new Swiper(".gallery-slider", {
            modules: [A, N, EC],
            slidesPerView: 1,
            speed: 1000,
            spaceBetween: 10,
            loop: true,
            resistance: true,
            resistanceRatio: 0,
            watchSlidesProgress: true,
            autoplay: false,
            autoplay: {
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            navigation: {
                nextEl: ".gallery-next",
                prevEl: ".gallery-prev",
                disabledClass: "gallery-disabled"
            },
            breakpoints: {

                768: {
                    slidesPerView: 1.2,
                    spaceBetween: 20,
                },
                960: {
                    slidesPerView: 1.5,
                    centeredSlides: true,
                },
                1440: {
                    slidesPerView: 2,

                },
                1600: {
                    slidesPerView: 2.3,
                    centeredSlides: true,
                },
                1760: {
                    slidesPerView: 2.5,
                    spaceBetween: 20,
                    centeredSlides: true,
                },
                1800: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                    centeredSlides: true,
                },
            },

        })
    }

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
        const swiperElement = document.querySelector('.gallery-slider'); // Swiper elementinizi seçin
        if (isElementInView(swiperElement)) {
            // Eğer swiper görünüyorsa ve daha önce autoplay başlamadıysa
            if (!newsSlider.autoplay.running) {
                newsSlider.autoplay.start();
            }
        } else {
            // Swiper görünmüyorsa ve autoplay çalışıyorsa durdur
            if (newsSlider.autoplay.running) {
                newsSlider.autoplay.stop();
            }
        }
    }

    // Scroll event listener ekleyin
    window.addEventListener('scroll', checkSwiperVisibility);
    // Sayfa yüklendiğinde de kontrol edin
    window.addEventListener('load', checkSwiperVisibility);





    let newSliders = new Swiper(".other-products-slider", {
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
            if (!newSliders.autoplay.running) {
                newSliders.autoplay.start();
            }
        } else {
            // Swiper görünmüyorsa ve autoplay çalışıyorsa durdur
            if (newSliders.autoplay.running) {
                newSliders.autoplay.stop();
            }
        }
    }

    // Scroll event listener ekleyin
    window.addEventListener('scroll', checkSwiperVisibility);
    // Sayfa yüklendiğinde de kontrol edin
    window.addEventListener('load', checkSwiperVisibility);
</script>


<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const productTabsArea = document.querySelector(".product-tabs");

        if (productTabsArea) {
            const tabs = productTabsArea.querySelectorAll(".tab");
            const contents = productTabsArea.querySelectorAll(".tab-contents .content");

            productTabsArea.addEventListener("click", (e) => {
                const targetTab = e.target.closest('.tab'); // En yakın .tab elemanını bul
                if (!targetTab) return; // Eğer .tab tıklanmadıysa fonksiyonu bitir

                const tabID = targetTab.getAttribute("data-tab-id");

                tabs.forEach(tab => tab.classList.remove("active"));
                targetTab.classList.add("active");

                contents.forEach(content => {
                    content.classList.remove("active");
                    if (content.getAttribute("data-content-id") === tabID) {
                        content.classList.add("active");
                    }
                });
            });
        }
    });



    // ACCORDİON
    const faqTabs = document.querySelectorAll(".faq .faq-area .item");

    if (faqTabs) {
        function faqTab(ev, faqDesc, descHeight) {
            for (let i = 0; i < faqTabs.length; i++) {
                faqTabs[i].classList.remove("active");
                faqTabs[i].querySelector(".faq-description").style.height = "0px";
            }

            ev.currentTarget.classList.add("active");
            faqDesc.style.height = `${descHeight}px`;
        }

        faqTabs.forEach((tab, index) => {
            const faqDesc = tab.querySelector(".faq-description"),
                descHeight = faqDesc.offsetHeight;
            faqDesc.style.height = "0px";
            tab.addEventListener("click", (e) => {
                if (!tab.classList.contains("active")) {
                    // Sadece tıklanan bölüm aktif değilse işleme devam et
                    faqTab(e, faqDesc, descHeight);
                }
            });
        });
    }


    const formInputElements = document.querySelectorAll(".form-group input:not([type='checkbox']):not([type='radio'])")
    const formTextareaElements = document.querySelectorAll(".form-group textarea")

    const adjustLabel = (mainItem) => {
        const label = mainItem.nextElementSibling;
        if (mainItem.value === "") {
            label.style.transform = "translateY(40px)"
        } else {
            label.style.transform = "translateY(0)"
        }
    }
    formInputElements.forEach(item => {
        item.addEventListener("input", () => {
            adjustLabel(item)
        })

        // Firefox'ta eğer inputa yazı yazıp sonrasında sayfa yenilendiğinde value silinmiyor. CMD + Shift + R yapmak gerekiyor.
        // Bundan dolayı sayfa yenilendiğinde inputun bir değeri varsa yine fonksiyon çalışsın.
        window.addEventListener("load", () => {
            adjustLabel(item)
        })
    })

    formTextareaElements.forEach(item => {
        item.addEventListener("input", () => {
            adjustLabel(item)
        })

        // Firefox'ta eğer inputa yazı yazıp sonrasında sayfa yenilendiğinde value silinmiyor. CMD + Shift + R yapmak gerekiyor.
        // Bundan dolayı sayfa yenilendiğinde inputun bir değeri varsa yine fonksiyon çalışsın.
        window.addEventListener("load", () => {
            adjustLabel(item)
        })
    })


    // News page image to left
    const newsPageImage = document.querySelector(".news-image-area")

    function imageToLeft(image) {
        if (window.innerWidth > mobileLimit) {
            const imageRect = image.getBoundingClientRect()
            image.style.transform = `translateX(-${imageRect.left}px)`;
            image.style.width = `${imageRect.width + imageRect.left}px`;
        }
    }

    if (newsPageImage) imageToLeft(newsPageImage);


    // News Page tab area
    const newsTabArea = document.querySelector(".news-tabs-area");

    if (newsTabArea) {
        const tab = newsTabArea.querySelectorAll(".tab"),
            tabContent = document.querySelectorAll(".news-list .item");

        function newsTabEvent(ev, tabID) {
            let i;

            for (i = 0; i < tab.length; i++) {
                tab[i].classList.remove("active")
            }

            for (i = 0; i < tabContent.length; i++) {
                tabContent[i].classList.remove("active")
            }

            ev.currentTarget.classList.add("active")
            // document.getElementById(tabID).classList.add("active");
            document.querySelectorAll(`.news-list [data-content-id='${tabID}']`).forEach(item => {
                item.classList.add("active")
            })
        }

        function showAllNews(ev) {
            for (let i = 0; i < tab.length; i++) {
                tab[i].classList.remove("active")
            }
            for (let s = 0; s < tabContent.length; s++) {
                tabContent[s].classList.add("active")
            }
            ev.currentTarget.classList.add("active")
        }

        tab.forEach(tab => {
            tab.addEventListener("click", (e) => {
                tabContent.forEach(item => {
                    const tabID = tab.getAttribute("data-tab-id");
                    const contentID = item.getAttribute("data-content-id");
                    console.log("a")
                    if (tabID === contentID) {
                        newsTabEvent(e, `${contentID}`);
                    } else if (tabID === "0") {
                        showAllNews(e)
                    }
                })
            })
        })
    }

    // News detail page copy-print
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

    // About us tabs
    const aboutUsTabArea = document.querySelector(".about-us-tabs")
    if (aboutUsTabArea) {
        window.addEventListener("DOMContentLoaded", () => {
            const tab = aboutUsTabArea.querySelectorAll(".tab"),
                tabContent = aboutUsTabArea.querySelectorAll(".content-area .dot-content"),
                prevTab = aboutUsTabArea.querySelector(".prev-tab"),
                nextTab = aboutUsTabArea.querySelector(".next-tab");

            // Tab Events
            function aboutUsTab(ev, tabID) {
                let i;

                for (i = 0; i < tab.length; i++) {
                    tab[i].classList.remove("active")
                }

                for (i = 0; i < tabContent.length; i++) {
                    tabContent[i].classList.remove("active")
                }

                ev.currentTarget.classList.add("active")
                aboutUsTabArea.querySelector(`[data-dot-id='${tabID}']`).classList.add("active")
            }

            function setActiveFromContent(ev, tabID) {
                let i;

                for (i = 0; i < tab.length; i++) {
                    tab[i].classList.remove("active")
                }

                for (i = 0; i < tabContent.length; i++) {
                    tabContent[i].classList.remove("active")
                }

                ev.currentTarget.classList.add("active")
                aboutUsTabArea.querySelector(`[data-feature-id='${tabID}']`).classList.add("active")
            }

            let p = 0,
                n = 1;
            tab.forEach((tab, index) => {
                const tabID = tab.getAttribute("data-feature-id");
                tab.addEventListener("click", (e) => {

                    /* Prev Next Butonları */
                    if (prevTab && nextTab) {
                        prevTab.setAttribute("data-tab", `${parseInt(tabID)}`)
                        nextTab.setAttribute("data-tab", `${parseInt(tabID) + 1}`)
                        p = parseInt(tabID)
                        n = parseInt(tabID) + 1
                        prevTab.classList.add("active")
                        if (parseInt(tabID) === aboutUsTabArea.querySelectorAll(".tabs .tab").length - 1) {
                            nextTab.classList.remove("active")
                        }
                        if (parseInt(tabID) === 0) {
                            prevTab.classList.remove("active")
                            nextTab.classList.add("active")
                        }
                    }
                    /* Prev Next Butonları */
                    tabContent.forEach(item => {
                        const contentID = item.getAttribute("data-dot-id");
                        aboutUsTabArea.querySelector(".custom-dropdown .placeholder span").innerText = tab.firstElementChild.innerText


                        if (tabID === contentID) {
                            aboutUsTab(e, `${contentID}`);
                        }
                    })
                })
            })

            tabContent.forEach((item, index) => {
                const contentID = item.getAttribute("data-dot-id");
                item.addEventListener("click", (e) => {

                    /* Prev Next Butonları */
                    if (prevTab && nextTab) {
                        prevTab.setAttribute("data-tab", `${parseInt(contentID)}`)
                        nextTab.setAttribute("data-tab", `${parseInt(contentID) + 1}`)
                        p = parseInt(contentID)
                        n = parseInt(contentID) + 1
                        prevTab.classList.add("active")
                        if (parseInt(contentID) === aboutUsTabArea.querySelectorAll(".tabs .tab").length - 1) {
                            nextTab.classList.remove("active")
                        }
                        if (parseInt(contentID) === 0) {
                            prevTab.classList.remove("active")
                            nextTab.classList.add("active")
                        }
                    }
                    /* Prev Next Butonları */

                    tab.forEach(tab => {
                        const tabID = tab.getAttribute("data-feature-id");
                        aboutUsTabArea.querySelector(".custom-dropdown .placeholder span").innerText = tab.firstElementChild.innerText


                        if (tabID === contentID) {
                            setActiveFromContent(e, `${contentID}`);
                        }
                    })
                })
            })

            // Prev ve next butonları
            if (nextTab) {
                nextTab.addEventListener("click", (e) => {
                    p++
                    n++
                    nextTab.setAttribute("data-tab", `${n}`)
                    prevTab.setAttribute("data-tab", `${p}`)
                    prevTab.classList.add("active")

                    tab.forEach((tab, index) => {
                        const tabID = tab.getAttribute("data-feature-id");
                        if (n - 1 === index) {
                            console.log(n)
                            tabContent.forEach(item => {
                                const contentID = item.getAttribute("data-dot-id");

                                if (tabID === contentID) {
                                    aboutUsTab(e, `${contentID}`);
                                    tab.classList.add("active")
                                }
                            })
                        }

                        if (n === aboutUsTabArea.querySelectorAll(".tabs .tab").length) {
                            nextTab.classList.remove("active")
                        }
                    })
                })
            }

            if (prevTab) {
                prevTab.addEventListener("click", (e) => {
                    p--
                    n--
                    nextTab.setAttribute("data-tab", `${n}`)
                    prevTab.setAttribute("data-tab", `${p}`)
                    prevTab.classList.add("active")

                    tab.forEach((tab, index) => {
                        const tabID = tab.getAttribute("data-feature-id");
                        if (p === index) {
                            nextTab.classList.add("active")
                            tabContent.forEach(item => {
                                const contentID = item.getAttribute("data-dot-id");

                                if (tabID === contentID) {
                                    aboutUsTab(e, `${contentID}`);
                                    tab.classList.add("active")
                                }
                            })
                        }

                        if (p === 0) {
                            prevTab.classList.remove("active")
                        }
                    })
                })
            }
        })
    }
</script>
@endsection
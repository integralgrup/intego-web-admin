@extends('layouts.main')


@section('content')
<main class="main-field header-space">
    <section class="New-detail py-[90px] xl:py-[90px] lg:py-[60px] md:py-[40px] sm:py-[30px] relative overflow-hidden isolate max-w-[1920px] mx-auto">
        <div class="absolute top-[-26%] left-[-22%] pointer-events-none z-[-1]">
            <img src="../assets/image/yellowshadow.png" alt="">
        </div>
        <div class="absolute top-[8%] right-0 pointer-events-none sm:w-full">
            <img class="sm:w-full" src="../assets/image/groupnew.png" alt="">
        </div>
        <div class="breadcrumb md:py-[20px]">
            <div class="list flex justify-center items-center mb-[30px] lg:mb-[20px] gap-5 sm:hidden pl-[200px] 2xl:pl-[0px] 2xl:pr-[100px] xl:pr-0 xl:pl-[100px] xl:justify-start md:pl-0 md:items-center md:justify-center md:m-0">
                <a href="{{env('HTTP_DOMAIN')}}" class="text-gray gap-10 text-[18px] leading-[28px] hover:text-secondary font-medium duration-500">Home</a>
                <div class="text-gray">/</div>
                <a href="page-new.php" title="Galeri" class="text-gray text-[18px] leading-[28px] hover:text-secondary font-medium duration-500">News</a>
            </div>
        </div>
        <div class="max-w-[1520px] container mx-auto">
            <div class=" wrapper grid grid-cols-[minmax(0,2fr)_minmax(0,3fr)] sm:flex sm:flex-col-reverse gap-[100px] 2xl:gap-[70px] xl:gap-[40px] sm:gap-[20px] xs:pb-[50px]">
                <div class="flex flex-col items-start justify-center sm:items-center gap-[100px] xl:gap-[60px] md:gap-[40px] sm:gap-[25px]">
                    <div class="swiperTextNew min-xs:overflow-visible  min-xs:animate-carousel w-full sens">
                        <div class="swiper-wrapper">
                            <?php foreach ($blogs as $item) : ?>
                                <div class="swiper-slide group/slide">
                                    <div dir class="text-editor sm:text-center sm:items-center editor-h3:font-bold [&_:is(h1,h2,h3,h4,h5)]:text-black editor-h3:max-w-[410px] editor-p:max-w-[440px] editor-p:font-medium editor-p:text-gray editor-li:text-gray opacity-0 group-[&.swiper-slide-active]/slide:opacity-100 duration-500">
                                        <div class="flex items-center justify-start gap-[60px]">
                                            <div class="flex items-center gap-[25px]">
                                                <i class="icon icon-calendar flex items-center justify-center text-secondary"></i>
                                                <span class="text-gray font-medium"><?= \Carbon\Carbon::parse($item['created_at'])->format('d F Y') ?></span>
                                            </div>
                                        </div>
                                        <h3><?= $item['title'] ?></h3>
                                        <p><?= mb_substr($item['description'], 0, 100) ?>... </p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="flex md:flex-col items-center justify-center gap-[120px] xl:gap-[80px] lg:gap-[40px] sm:gap-[30px]">
                        <div class="flex items-center justify-center text-center">
                            <a href="{{env('HTTP_DOMAIN') . '/' . getUrl('blog_url') .'/' . $blogs[0]['seo_url']}}" class="button dot group/button before:absolute before:left-0 before:top-0 before:hover:top-full before:w-full before:h-full before:hover:bg-[#FFD61B] before:duration-500 bg-secondary px-[26px] sm:px-[20px] py-4 sm:py-3 isolate w-fit flex rounded-[100px] space-x-6 relative overflow-hidden">
                                <span class="text text-xl sm:text-[16px] flex items-center text-center text-white font-semibold">Read More</span>
                                <i class="icon icon-arrow-right-2 -rotate-45 flex items-center justify-center text-white"></i>
                            </a>
                        </div>
                        <div class="flex group-[&.rtl]/html:flex-row-reverse justify-center items-center gap-[30px]">
                            <div class="swiperTextNew-prev group/swiperNews-button !flex !items-center [&.swiper-button-disabled]:opacity-25 !justify-center !text-black pointer-events-auto cursor-pointer">
                                <i class="icon icon-arrow-right-3 text-black duration-500">
                                    <svg class="group" xmlns="http://www.w3.org/2000/svg" width="40" height="22" viewBox="0 0 40 22" fill="none">
                                        <path class="group-hover:!stroke-secondary duration-500" d="M10.1392 21L1 11M1 11L10.1392 1M1 11H39" stroke="#DEDFE0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </i>
                            </div>
                            <div class="swiperTextNew-next group/swiperNews-button !flex !items-center [&.swiper-button-disabled]:opacity-25 !justify-center !text-black pointer-events-auto cursor-pointer">
                                <i class="icon icon-arrow-right-3 text-black duration-500">
                                    <svg class="group" xmlns="http://www.w3.org/2000/svg" width="40" height="22" viewBox="0 0 40 22" fill="none">
                                        <path class="group-hover:!stroke-secondary duration-500" d="M31.7444 1L39 11M39 11L31.7444 21M39 11H1" stroke="#DEDFE0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-field hand sens">
                    <div class="aboutSwipers swiper rounded-[50px]">
                        <div class="swiper-wrapper">
                            <?php for ($i = 1; $i <= 6; $i++) : ?>
                                <div class="swiper-slide ">
                                    <a href="../assets/image/trademark/rectangle-1.jpeg" data-fancybox="gallery">
                                        <div class="content group/slide relative">
                                            <div class="image-field relative">
                                                <div class="image w-full aspect-[84/57] h-[570px] lg:h-[520px] md:h-[450px] sm:h-[320px] overflow-hidden isolate">
                                                    <img loading="lazy" src="../assets/image/trademark/rectangle-1.jpeg" alt="" class="w-full h-full object-cover object-center" data-swiper-parallax-x="50%">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-[120px] md:mt-[80px] sm:mt-[20px] xs:mt-[0px] relative max-w-[1920px] mx-auto">
        <div class="absolute top-[-50px] left-0 pointer-events-none">
            <img src="../assets/image/group22.png" alt="">
        </div>
        <div class="container max-w-[1240px] mx-auto">
            <div class="wrapper">
                <div class="tools-field mt-[-14%]  srb flex lg:flex-col justify-between items-center py-[25px] px-[50px] xs:border-[2px] xs:border-solid xs:border-secondary bg-white border-[10px] border-solid border-[#f6f5f5] [box-shadow:0px_0px_20px_0px_rgba(14,_42,_67,_0.06)] rounded-full  z-20 relative max-w-[1650px] mx-auto lg:rounded-[30px] lg:p-[30px] lg:gap-[30px] lg:mt-0 lg:w-full">
                    <div class="option-wrapper sens lg:w-full">
                        <div class="category-wrapper sm:text-center flex items-center justify-center gap-[40px] sm:gap-[20px] xs:gap-0 py-[20px] overflow-hidden rounded-[30px] sm:px-0">
                            <a href="" class="block lg:text-center lg:w-full relative duration-450  text-white font-medium text-[20px] xl:text-[18px] lg:text-[16px] sm:text-[14px] xs:text-[12px] px-[15px] xs:px-[5px] sm:px-[30px] bg-[#0F62AB] rounded-full p-[14px_30px]">All News</a>
                            <a href="" class="block lg:text-center lg:w-full relative duration-450 text-gray font-medium text-[20px] xl:text-[18px] lg:text-[16px] sm:text-[14px] xs:text-[12px] px-[15px] xs:px-[5px] ">Blog</a>
                            <a href="" class="block lg:text-center lg:w-full relative duration-450 text-gray font-medium text-[20px] xl:text-[18px] lg:text-[16px] sm:text-[14px] xs:text-[12px] px-[15px] xs:px-[5px] ">Category</a>
                        </div>
                    </div>
                    <!-- <div class="mobile-trigger group peer pt-[20px] sm:pt-[15px] hidden lg:flex items-center justify-between pb-[20px] sm:pb-[15px] border border-solid border-secondary rounded-2xl p-3 w-full hover:border-primary duration-450 cursor-pointer md:w-full gap-[10px]">
                        <div class="text text-main">Kategoriler</div>
                        <div class="icon icon-chevron-down text-[10px] h-[10px] block leading-none duration-450 text-black group-hover:rotate-180 group-[&.active]:rotate-180"></div>
                    </div> -->
                    <div class="search-field flex items-center gap-[80px] justify-end lg:justify-normal lg:items-start lg:gap-[30px] lg:flex-col lg:w-full sens">
                        <div class="blogletter-form relative flex items-center overflow-hidden rounded-full w-full h-[66px] bg-[#F6F6F6] px-[30px] md:h-[60px] md:px-[10px] lg:min-w-full xl:min-w-[480px]">
                            <input type="text" placeholder="Search blog and news..." class="input-text text-[18px] placeholder:text-gray md:placeholder:text-[12px] font-medium leading-[19.4px] max-w-full w-full pr-[100px] md:pr-[50px] md:text-[14px]">
                            <button class="button group/button absolute right-[20px] top-[10px] w-fit min-w-[86px] h-[44px] flex items-center justify-center xs:justify-end">
                                <span class="icon icon-search text-secondary text-[16px] font-medium leading-normal"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-10 relative overflow-hidden max-w-[1920px] mx-auto">

        <div class="container max-w-[1060px] mx-auto xs:px-0">
            <div class="wrapper flex xs:flex-col items-center justify-between sm:justify-center sm:gap-[20px] xs:gap-[10px] max-w-[550px] mx-auto py-[60px] sm:pt-0 sm:pb-[30px]">
                <div class="text-gray text-[18px] sm:text-[16px] font-semibold leading-[28px] text-center [&>strong]:text-secondary relative before:absolute before:top-1/2 before:-translate-y-1/2 sm:before:hidden before:right-[-55%] before:h-[56px] before:w-[1px] before:bg-[rgba(123,_138,_153,_0.20)] before:z-20">Total <strong>30</strong> news found.</div>

                <div class="relative before:z-200 before:absolute before:left-0 before:top-1/2 before:w-0 before:duration-500 before:h-[1px] before:bg-red-400 before:pointer-events-none"></div>

                <div class="option-wrapper">
                    <div class="custom-select relative group dropdown">
                        <div class="current duration-350 flex items-center justify-between gap-[15px] cursor-pointer border-l-0 border-r-0 border-t-0 !border-b-[1px] border-solid border-white/20 group-hover:border-white/50 group-[&.is-active]:!border-jaffa-400 group-[&.error]/form:!border-red-600">
                            <span class="text-gray text-[18px] sm:text-[16px] text-center font-semibold leading-[28px]">Short by :</span>
                            <button onclick="myFunction()" class="text text-secondary font-semibold text-[18px] leading-[30px] dropbtn">Latest</button>
                            <div class="icon icon-chevron-down text-black/30 text-[16px] h-[26px]  leading-none duration-350 group-[&.is-active]:rotate-180 flex items-center justify-center"></div>
                        </div>
                        <div id="myDropdown" class="dropdown-content options min-w-[300px] sm:min-w-[200px] xs:min-w-0 shadow-[0px_0px_4px_0px_rgba(0,_0,_0,_0.25)] bg-[#0F62AB] absolute top-full left-0 w-full p-[25px] [border:1px_solid_var(--jaffa-400)] [border-top:0] hidden group-[&.is-active]:block z-10 rounded-[20px]">
                            <form action="#" class="relative mb-[40px] w-full h-[56px]  bg-white rounded-[10px] border border-solid border-[#DDD]">
                                <i class="icon icon-search flex items-center justify-center absolute left-5 top-1/2 -translate-y-1/2 text-secondary"></i>
                                <input id="myInput" onkeyup="filterFunction()" class="absolute top-1/2 pl-[60px] sm:pl-[45px] -translate-y-1/2 lg:top-1/2 lg:-translate-y-1/2 left-0 w-full h-fit text-lg font-normal text-black placeholder:text-[#56697A] sm:placeholder:text-[14px] xs:placeholder:text-[12px]" placeholder="Kategori Ara..." type="text">

                            </form>
                            <div class="list h-full max-h-[185px] grid gap-[10px] overflow-x-hidden  overflow-y-auto">

                                <a class="is-selected option cursor-pointer text-[18px] xs:text-[15px] text-white/60 duration-350 [&.is-selected]:pointer-events-none [&.is-selected]:font-medium [&.is-selected]:text-white font">Örnek 1</a>
                                <a class="option cursor-pointer text-[18px] xs:text-[15px] text-white/60 duration-350 [&.is-selected]:pointer-events-none [&.is-selected]:font-medium [&.is-selected]:text-white font">Örnek 2</a>
                                <a class="option cursor-pointer text-[18px] xs:text-[15px] text-white/60 duration-350 [&.is-selected]:pointer-events-none [&.is-selected]:font-medium [&.is-selected]:text-white font">Örnek 3</a>
                                <a class="option cursor-pointer text-[18px] xs:text-[15px] text-white/60 duration-350 [&.is-selected]:pointer-events-none [&.is-selected]:font-medium [&.is-selected]:text-white font">Örnek 4</a>
                                <a class="option cursor-pointer text-[18px] xs:text-[15px] text-white/60 duration-350 [&.is-selected]:pointer-events-none [&.is-selected]:font-medium [&.is-selected]:text-white font">Örnek 5</a>
                                <a class="option cursor-pointer text-[18px] xs:text-[15px] text-white/60 duration-350 [&.is-selected]:pointer-events-none [&.is-selected]:font-medium [&.is-selected]:text-white font">Örnek 6</a>
                            </div>
                        </div>
                        <input type="hidden" value="All Departments">
                    </div>
                </div>
            </div>
            <div class="wrapper flex flex-col items-center gap-[100px] lg:gap-[80px] md:gap-[60px] sm:gap-[40px]">
                <?php foreach ($blogs as $item) : ?>
                    <div class="flex md:flex-col items-center gap-[70px] 2xl:gap-[40px] md:gap-4 relative group/slide md:w-full md:py-8 md:rounded-[50px] md:bg-[#FEF7E5] sens group">
                        <a href="{{env('HTTP_DOMAIN') . '/' . getUrl('blog_url') .'/' . $item['seo_url']}}" class="absolute top-10 right-10 xs:hidden block group opacity-0 group-hover:opacity-100 duration-500">
                            <i class="icon icon-arrow-right-2 flex items-center justify-center bg-secondary hover:bg-[#0F62AB] group-hover:rotate-0 duration-500 text-white p-8 md:p-5 rounded-full text-[12px] -rotate-45"></i>
                        </a>
                        <div class="absolute top-[-50px] left-[-650px] pointer-events-none md:hidden">
                            <img src="../assets/image/yellowshadow.png" alt="">
                        </div>
                        <div class="absolute top-[-50px] right-[-650px] pointer-events-none md:hidden">
                            <img src="../assets/image/yellowshadow.png" alt="">
                        </div>
                        <div class="absolute top-0 left-[10%] group-[&.rtl]/html:left-auto group-[&.rtl]/html:right-[10%] aspect-[92/48] h-[480px] lg:aspect-[76/40] lg:h-[400px] z-[-1] group-hover/slide:opacity-100 opacity-0 duration-500 md:hidden">
                            <img src="../assets/image/newDetail.png" alt="">
                        </div>
                        <div class="absolute top-0 left-[10%] group-[&.rtl]/html:left-auto group-[&.rtl]/html:right-[10%] aspect-[92/48] h-[480px] lg:aspect-[76/40] lg:h-[400px] z-[-1] opacity-100 group-hover/slide:opacity-0 duration-500 md:hidden">
                            <img src="../assets/image/newdetailblue.png" alt="">
                        </div>
                        <a href="{{env('HTTP_DOMAIN') . '/' . getUrl('blog_url') .'/' . $item['seo_url']}}" class="image block aspect-[48/48] lg:aspect-[40/40] lg:h-[400px] h-[480px] md:aspect-[35/35] md:h-[350px] sm:aspect-[30/30] sm:h-[300px] [mask-image:url('../../assets/image/newdetail.svg')] [mask-size:contain] [mask-repeat:no-repeat] [mask-position:center]">
                            <img class="w-full h-full object-cover object-center" src="{{ asset( getFolder(['uploads_folder','blog_images_folder'], $item['lang']) . '/' . $item['image'] ) }}" alt="">
                        </a>
                        <div>
                            <div class="text-editor sm:px-[30px] md:text-center md:items-center editor-p:text-gray [&_:is(h1,h2,h3,h4,h5)]:text-black [&_:is(h1,h2,h3,h4,h5)]:!m-0 [&_:is(h1,h2,h3,h4,h5)]:font-bold editor-h3:max-w-[410px] editor-p:max-w-[460px] lg:editor-p:max-w-[400px]">
                                <div class="flex items-center gap-[24px]">
                                    <i class="icon icon-calendar flex items-center justify-center text-secondary"></i>
                                    <span class="text-gray font-medium">17 January 2024</span>
                                </div>
                                <h3 dir><?= $item["title"] ?></h3>
                                <p dir><?= mb_substr($item["description"], 0, 100) ?>... </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>
@endsection 

@section('scripts')
<script>
    var aboutSwipers = {
        modules: [A, P, N, Px, EC, C, T],
        speed: 1000,
        loop: true,
        parallax: true,
        navigation: {
            prevEl: '.swiperTextNew-prev',
            nextEl: '.swiperTextNew-next',
        },
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
            pauseOnMouseEnter: true,
        },
    };

    var aboutSwipers = new Swiper('.aboutSwipers', aboutSwipers);


    var swiperTextNew = new Swiper(".swiperTextNew", {
        modules: [A, P, N, Px, EC, C, T],
        slidesPerView: 1,
        loop: true,
        speed: 1000,
        Parallax: true,
    });

    aboutSwipers.controller.control = swiperTextNew;
    swiperTextNew.controller.control = aboutSwipers;




    // Custom Select
    let customSelects = document.querySelectorAll('.custom-select');
    customSelects.forEach(select => {
        select.querySelector('.current').addEventListener('click', () => {
            select.classList.toggle('is-active');
        }, false);
        select.querySelectorAll('.options .list .option').forEach(option => {
            option.addEventListener('click', () => {
                select.querySelector('.current .text').innerHTML = option.innerHTML;
                select.querySelector('input[type="hidden"]').value = option.innerHTML;
                select.classList.remove('is-active');
                select.querySelectorAll('.options .list .option').forEach(option => {
                    option.classList.remove('is-selected');
                });
                option.classList.add('is-selected');
            }, false);
        });
    });


    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    function filterFunction() {
        var input, filter, ul, li, a, i;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        div = document.getElementById("myDropdown");
        a = div.getElementsByTagName("a");
        for (i = 0; i < a.length; i++) {
            txtValue = a[i].textContent || a[i].innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                a[i].style.display = "";
            } else {
                a[i].style.display = "none";
            }
        }
    }


</script>
@endsection
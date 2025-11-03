@extends('layouts.main')

@section('content')

<!-- header-space: HEADER KADAR BOŞLUK BIRAKMAKTADIR. -->
<main class="main-field header-space">
    <section class="New-detail py-[30px] relative max-w-[1920px] mx-auto">
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full z-[-1] md:hidden">
            <img class="w-full h-full" src="../assets/image/yellowshadow.png" alt="">
        </div>
        <div class="breadcrumb">
            <div dir class="list flex justify-center items-center mb-[30px] lg:mb-[20px] gap-5 sm:hidden">
                <a href="{{env('HTTP_DOMAIN')}}" class="text-gray/75 gap-10 text-[18px] leading-[28px] hover:text-secondary font-medium duration-500">Home</a>
                <div class="text-gray/75">/</div>
                <a href="page-product.php" title="Galeri" class="text-gray/75 text-[18px] leading-[28px] hover:text-secondary font-medium duration-500">Products</a>
                <div class="text-gray/75">/</div>
                <a href="page-playground-area.php" title="Galeri" class="text-gray/75 text-[18px] leading-[28px] hover:text-secondary font-medium duration-500">Playgrounds</a>
            </div>
        </div>
        <div class="container max-w-[1200px] mx-auto">
            <div class="wrapper flex items-center justify-center">
                <div dir class="text-editor editor-h2:font-bold editor-h2:text-[#1679BE] [&>h2>strong]:text-secondary text-center editor-p:text-gray editor-p:font-medium editor-p:max-w-[1066px]">
                    <h2>Helicopter Series <strong>Playgrounds</strong></h2>
                    <p>With 15 years of experience, we are working to make cities more livable with our Children'sPlaygrounds, Outdoor Sports Equipment, Rubber Floor Covering and Urban Furniture products. As Intego, we offer hundreds of different products to our valued customers with our high quality understanding and modern productionfacility.</p>
                </div>
            </div>
        </div>
    </section>


    <section class="select-box relative max-w-[1920px] mx-auto ">
        <div class="absolute top-[-60px] right-0 z-[-1] pointer-events-none lg:hidden">
            <img src="../assets/image/groupproject.png" alt="">
        </div>
        <div class="container max-w-[1500px] mx-auto bg-white [box-shadow:0px_0px_20px_0px_rgba(14,_42,_67,_0.06)] sm:p-[15px] duration-500 rounded-full sm:rounded-none border-[10px] border-solid border-[#f6f5f5] filterBox">
            <div class="wrapper flex md:flex-col items-center justify-between gap-[20px] 2xl:gap-[20px] xl:gap-[0px] sm:gap-[15px]">

                <div class="flex xsm:flex-col items-center justify-center gap-[60px] xl:gap-[40px] lg:gap-[20px]">
                    <div class="option-wrapper">
                        <div class="custom-select relative group py-[40px] xl:py-[20px] sm:py-[0px]">
                            <div dir class="current duration-350 flex items-center justify-between gap-[15px] cursor-pointer p-[16px_25px]   2xl:p-[16px_20px] rounded-[100px] bg-[#7B8A99]/5 group-[&.is-active]:bg-secondary group-[&.is-active]:[box-shadow:10px_10px_30px_0px_rgba(249,_177,_0,_0.25)]">
                                <div class="text text-[#56697A] font-semibold text-[18px] md:text-[16px] sm:text-[14px] group-[&.is-active]:text-white duration-500">Product Categories</div>
                                <div class="icon icon-chevron-down text-black/30 text-[16px] h-[20px] group-[&.is-active]:text-white duration-500 leading-none group-[&.is-active]:rotate-180 flex items-center justify-center"></div>
                            </div>
                            <div class="options min-sm:min-w-[350px] xs:min-w-0 shadow-[0px_0px_4px_0px_rgba(0,_0,_0,_0.25)] bg-white absolute top-full left-0 w-full p-[25px] [border:1px_solid_var(--jaffa-400)] [border-top:0] hidden group-[&.is-active]:block z-10 rounded-[20px]">
                                <form class="flex items-center mb-[25px]">
                                    <label for="simple-search" class="sr-only">Search</label>
                                    <div class="relative w-full border border-solid border-[#DDDDDD] rounded-[10px]">
                                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                            <div class="icon icon-search text-secondary text-[20px] h-[26px]  leading-none duration-350 flex items-center justify-center"></div>
                                        </div>
                                        <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Product..." required>
                                    </div>
                                </form>
                                <div class="list h-full max-h-[285px] grid gap-[10px] overflow-x-hidden  overflow-y-auto">
                                    <div class="is-selected option cursor-pointer text-[18px] sm:text-[16px] xs:text-[15px] text-[#28323B] duration-350 hover:text-secondary [&.is-selected]:pointer-events-none [&.is-selected]:font-medium [&.is-selected]:text-secondary font">Helicopter Series Playgrounds</div>
                                    <div class="option cursor-pointer text-[18px] sm:text-[16px] xs:text-[15px] text-[#28323B] duration-350 hover:text-secondary [&.is-selected]:pointer-events-none [&.is-selected]:font-medium [&.is-selected]:text-secondary font">Forest Series Playgrounds</div>
                                    <div class="option cursor-pointer text-[18px] sm:text-[16px] xs:text-[15px] text-[#28323B] duration-350 hover:text-secondary [&.is-selected]:pointer-events-none [&.is-selected]:font-medium [&.is-selected]:text-secondary font">Ship Series Playgrounds</div>
                                    <div class="option cursor-pointer text-[18px] sm:text-[16px] xs:text-[15px] text-[#28323B] duration-350 hover:text-secondary [&.is-selected]:pointer-events-none [&.is-selected]:font-medium [&.is-selected]:text-secondary font">Castle Series Playgrounds</div>
                                    <div class="option cursor-pointer text-[18px] sm:text-[16px] xs:text-[15px] text-[#28323B] duration-350 hover:text-secondary [&.is-selected]:pointer-events-none [&.is-selected]:font-medium [&.is-selected]:text-secondary font">Car Series Playgrounds</div>
                                    <div class="option cursor-pointer text-[18px] sm:text-[16px] xs:text-[15px] text-[#28323B] duration-350 hover:text-secondary [&.is-selected]:pointer-events-none [&.is-selected]:font-medium [&.is-selected]:text-secondary font">Vision Series Playgrounds</div>
                                </div>
                            </div>
                            <input type="hidden" value="All Departments"> <!-- Seçilen değer buraya geliyor / form için değeri burdan çekmelisiniz / valueya ilk değeri yazdırmalısınız -->
                        </div>
                    </div>
                    <div class="option-wrapper">
                        <div class="custom-select relative group py-[40px] xl:py-[20px] sm:py-[0px]">
                            <div dir class="current duration-350 flex items-center justify-between gap-[15px] cursor-pointer p-[16px_25px] xs:p-[16px_20px] rounded-[100px] bg-[#7B8A99]/5 group-[&.is-active]:bg-secondary group-[&.is-active]:[box-shadow:10px_10px_30px_0px_rgba(249,_177,_0,_0.25)]">
                                <div class="text text-[#56697A] font-semibold text-[18px] md:text-[16px] sm:text-[14px] group-[&.is-active]:text-white duration-500">Age Range</div>
                                <div class="icon icon-chevron-down text-black/30 text-[16px] h-[20px] group-[&.is-active]:text-white duration-500 leading-none group-[&.is-active]:rotate-180 flex items-center justify-center"></div>
                            </div>
                            <div class="options min-sm:min-w-[350px] xs:min-w-0 shadow-[0px_0px_4px_0px_rgba(0,_0,_0,_0.25)] bg-white absolute top-full left-0 w-full p-[25px] [border:1px_solid_var(--jaffa-400)] [border-top:0] hidden group-[&.is-active]:block z-10 rounded-[20px]">
                                <form class="flex items-center mb-[25px]">
                                    <label for="simple-search" class="sr-only">Search</label>
                                    <div class="relative w-full border border-solid border-[#DDDDDD] rounded-[10px]">
                                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                            <div class="icon icon-search text-secondary text-[20px] h-[26px]  leading-none duration-350 flex items-center justify-center"></div>
                                        </div>
                                        <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Product..." required>
                                    </div>
                                </form>
                                <div class="list h-full max-h-[285px] grid gap-[10px] overflow-x-hidden  overflow-y-auto">
                                    <div class="is-selected option cursor-pointer text-[18px] sm:text-[16px] xs:text-[15px] text-[#28323B] duration-350 hover:text-secondary [&.is-selected]:pointer-events-none [&.is-selected]:font-medium [&.is-selected]:text-secondary font">0-3</div>
                                    <div class="option cursor-pointer text-[18px] sm:text-[16px] xs:text-[15px] text-[#28323B] duration-350 hover:text-secondary [&.is-selected]:pointer-events-none [&.is-selected]:font-medium [&.is-selected]:text-secondary font">3-6</div>
                                    <div class="option cursor-pointer text-[18px] sm:text-[16px] xs:text-[15px] text-[#28323B] duration-350 hover:text-secondary [&.is-selected]:pointer-events-none [&.is-selected]:font-medium [&.is-selected]:text-secondary font">6-9</div>
                                    <div class="option cursor-pointer text-[18px] sm:text-[16px] xs:text-[15px] text-[#28323B] duration-350 hover:text-secondary [&.is-selected]:pointer-events-none [&.is-selected]:font-medium [&.is-selected]:text-secondary font">9-12</div>
                                    <div class="option cursor-pointer text-[18px] sm:text-[16px] xs:text-[15px] text-[#28323B] duration-350 hover:text-secondary [&.is-selected]:pointer-events-none [&.is-selected]:font-medium [&.is-selected]:text-secondary font">12-15</div>
                                    <div class="option cursor-pointer text-[18px] sm:text-[16px] xs:text-[15px] text-[#28323B] duration-350 hover:text-secondary [&.is-selected]:pointer-events-none [&.is-selected]:font-medium [&.is-selected]:text-secondary font">15-18</div>
                                </div>
                            </div>
                            <input type="hidden" value="All Departments"> <!-- Seçilen değer buraya geliyor / form için değeri burdan çekmelisiniz / valueya ilk değeri yazdırmalısınız -->
                        </div>
                    </div>
                </div>
                <div class="search-field flex items-center gap-[80px] justify-end z-20">
                    <div class="blogletter-form border border-solid border-[#DDDDDD] relative overflow-hidden rounded-full min-w-[489px] sm:min-w-0 w-full h-[66px] bg-[#F6F6F6]  px-[30px] md:h-[60px] md:px-[10px]   xl:min-w-[480px]">
                        <input type="text" placeholder="Arama yap..." class="input-text text-[16px] placeholder:text-[##56697A] md:placeholder:text-[12px] py-[20px] font-medium leading-[19.4px] max-w-full w-full pr-[100px]   md:text-[14px]">
                        <button class="button group/button absolute right-[20px] top-[10px] w-fit min-w-[86px] h-[44px] flex items-center justify-center px-[20px] rounded-full bg-[#1679BE] duration-450 overflow-hidden md:px-[10px] md:min-w-fit md:top-[11px] md:right-[10px] md:h-[35px]">
                            <span class="text text-[16px] font-medium text-white leading-normal">Ara</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-10 relative max-w-[1920px] mx-auto">
        <div class="container max-w-[1060px] mx-auto">
            <div class="wrapper flex xs:flex-col xs:gap-[20px] items-center justify-between max-w-[550px] mx-auto py-[60px] sm:py-[30px]">
                <div class="text-gray text-[18px] font-semibold leading-[28px] text-center relative [&>strong]:text-secondary before:absolute before:top-1/2 before:-translate-y-1/2 sm:before:hidden before:right-[-55%] before:h-[56px] before:w-[1px] before:bg-[rgba(123,_138,_153,_0.20)] before:z-20">Total <strong>30</strong> news found.</div>



                <div class="option-wrapper">
                    <div class="custom-select relative group dropdown">
                        <div dir class="current duration-350 flex items-center justify-between gap-[15px] cursor-pointer border-l-0 border-r-0 border-t-0 !border-b-[1px] border-solid border-white/20 group-hover:border-white/50 group-[&.is-active]:!border-jaffa-400 group-[&.error]/form:!border-red-600">
                            <span class="text-gray text-[18px] text-center font-semibold leading-[28px]">Short by :</span>
                            <button onclick="myFunction()" class="text text-secondary font-semibold text-[18px] leading-[30px] dropbtn">Latest</button>
                            <div class="icon icon-chevron-down text-black/30 text-[16px] h-[20px]  leading-none duration-350 group-[&.is-active]:rotate-180 flex items-center justify-center"></div>
                        </div>
                        <div id="myDropdown" class="dropdown-content options min-w-[300px] xs:min-w-0 shadow-[0px_0px_4px_0px_rgba(0,_0,_0,_0.25)] bg-[#0F62AB] absolute top-full left-0 w-full p-[25px] [border:1px_solid_var(--jaffa-400)] [border-top:0] hidden group-[&.is-active]:block z-10 rounded-[20px]">
                            <div class="list h-full max-h-[185px] grid gap-[10px] overflow-x-hidden  overflow-y-auto">

                                <a class="is-selected option cursor-pointer text-[18px] sm:text-[16px] xs:text-[15px] text-white/60 duration-350 [&.is-selected]:pointer-events-none [&.is-selected]:font-medium [&.is-selected]:text-white font">Örnek 1</a>
                                <a class="option cursor-pointer text-[18px] sm:text-[16px] xs:text-[15px] text-white/60 duration-350 [&.is-selected]:pointer-events-none [&.is-selected]:font-medium [&.is-selected]:text-white font">Örnek 2</a>
                                <a class="option cursor-pointer text-[18px] sm:text-[16px] xs:text-[15px] text-white/60 duration-350 [&.is-selected]:pointer-events-none [&.is-selected]:font-medium [&.is-selected]:text-white font">Örnek 3</a>
                                <a class="option cursor-pointer text-[18px] sm:text-[16px] xs:text-[15px] text-white/60 duration-350 [&.is-selected]:pointer-events-none [&.is-selected]:font-medium [&.is-selected]:text-white font">Örnek 4</a>
                                <a class="option cursor-pointer text-[18px] sm:text-[16px] xs:text-[15px] text-white/60 duration-350 [&.is-selected]:pointer-events-none [&.is-selected]:font-medium [&.is-selected]:text-white font">Örnek 5</a>
                                <a class="option cursor-pointer text-[18px] sm:text-[16px] xs:text-[15px] text-white/60 duration-350 [&.is-selected]:pointer-events-none [&.is-selected]:font-medium [&.is-selected]:text-white font">Örnek 6</a>
                            </div>
                        </div>
                        <input type="hidden" value="All Departments"> <!-- Seçilen değer buraya geliyor / form için değeri burdan çekmelisiniz / valueya ilk değeri yazdırmalısınız -->
                    </div>
                </div>
            </div>

        </div>
        <div class="container max-w-[1600px] mx-auto py-20">
            <div class="wrapper grid grid-cols-3 xl:grid-cols-2 md:grid-cols-1 md:flex md:flex-col md:items-center gap-[80px] xl:gap-[60px] lg:gap-[120px] xs:gap-[15px]">
                <?php
                $list = [
                    [
                        "image" => "rectangle1.png",
                    ],
                    [
                        "image" => "rectangle2.png",
                    ],
                    [
                        "image" => "rectangle3.png",
                    ],
                    [
                        "image" => "rectangle3.png",
                    ],
                    [
                        "image" => "rectangle1.png",
                    ],
                    [
                        "image" => "rectangle2.png",
                    ],
                    [
                        "image" => "rectangle1.png",
                    ],
                    [
                        "image" => "rectangle2.png",
                    ],
                    [
                        "image" => "rectangle3.png",
                    ],
                    [
                        "image" => "rectangle3.png",
                    ],
                    [
                        "image" => "rectangle1.png",
                    ],
                    [
                        "image" => "rectangle2.png",
                    ],
                ];
                foreach ($list as $key => $item) : ?>
                    <div class="relative group/item aspect-[48/48] h-[480px] xsm:aspect-[40/40] xsm:h-[400px] xs:w-full xs:h-auto">
                        <div class="flex flex-col gap-[10px] items-center">
                            <a href="page-product-detail.php" class="image block xs:min-h-[400px] aspect-[48/48] h-[480px] xsm:aspect-[40/40] xsm:h-[400px] xs:w-full xs:h-full xs:rounded-[50px] min-xs:[mask-image:url('../../assets/image/product3.svg')] [mask-size:contain] [mask-repeat:no-repeat] [mask-position:center] bg-[#F1F8FE] group-hover/item:bg-[#FEF7E5] sm:bg-[#FEF7E5] duration-500  overflow-hidden isolate">
                                <img class="aspect-[35/40] h-[400px] mx-auto object-contain object-center" src="../assets/image/product/<?= $item["image"] ?>" alt="">
                            </a>
                            <a href="page-product-detail.php" class="block hover:bg-[#0F62AB] absolute top-8 right-12 bg-secondary rounded-full pointer-events-none group-hover/item:pointer-events-auto opacity-0 group-hover/item:opacity-100 translate-y-4 -translate-x-4 group-hover/item:translate-y-0 sm:opacity-100 sm:translate-y-0 sm:translate-x-0 group-hover/item:translate-x-0 duration-500">
                                <i class="icon icon-arrow-right-2 -rotate-45 text-white text-[12px] flex items-center justify-center p-8  md:p-5 rounded-full"></i>
                            </a>
                            <div class="absolute top-0 left-0 z-[-1] pointer-events-none aspect-[48/48] h-[480px] xsm:aspect-[40/40] xsm:h-[400px] xs:hidden rounded-[50px] group-hover/item:-rotate-6 duration-500 overflow-hidden isolate p-1">
                                <img class="w-full h-full object-cover object-center rounded-[50px]" src="../assets/image/product.png" alt="">
                            </div>

                            <div class="relative inline-flex -translate-y-10  z-20  max-w-[225px]  bg-[#0F62AB] px-10 py-5 rounded-full">
                                <span class="text-white text-center font-bold text-[20px] leading-[30px] line-clamp-2">IN-100</span>
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
    // Custom Select
    let customSelects = document.querySelectorAll('.custom-select');

    customSelects.forEach(select => {
        select.querySelector('.current').addEventListener('click', () => {
            // Diğer tüm seçenekleri kapat
            closeOtherSelects(select);
            select.classList.toggle('is-active');
        }, false);

        select.querySelectorAll('.options .list .option').forEach(option => {
            option.addEventListener('click', () => {
                select.querySelector('.current .text').innerHTML = option.innerHTML;
                select.querySelector('input[type="hidden"]').value = option.getAttribute('data-value') || option.innerHTML; // Değer atamak için data-value kullanılıyorsa
                select.classList.remove('is-active');
                select.querySelectorAll('.options .list .option').forEach(option => {
                    option.classList.remove('is-selected');
                });
                option.classList.add('is-selected');
            }, false);
        });
    });

    function closeOtherSelects(currentSelect) {
        customSelects.forEach(select => {
            if (select !== currentSelect) {
                select.classList.remove('is-active');
            }
        });
    }
</script>


<script>
    /* PRODUCT FİLTER */

    const filter = document.querySelector(".filter");
    const filterBox = document.querySelector(".filterBox");

    filter.addEventListener("click", function() {
        filterBox.classList.toggle("active");
    });
</script>
@endsection
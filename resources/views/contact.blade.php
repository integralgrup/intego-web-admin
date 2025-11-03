@extends('layouts.main')

@section('content')

<?php $pageTitle = 'İletişim'; $pageLink = "page-contact.php"; ?>

<main class="main-field sub-page  ">

    <!-- CONTENT -->
    <section class="contact-page w-full relative md:flex md:flex-col sm:gap-[35px] overflow-hidden max-w-[1920px] mx-auto">

        <div class="absolute left-1/2 -translate-x-1/2 bottom-40 md:bottom-auto md:top-1/2 sm:top-[45%] md:left-[25%] z-20">
            <div class="flex items-center justify-center text-center">
                <a data-fancybox href="#popup-contact" class="button dot group/button before:absolute before:left-0 before:top-0 before:hover:top-full before:w-full before:h-full before:hover:bg-[#89C8F0] before:duration-500 bg-[#1679BE]  md:px-[15px] py-4 isolate w-fit flex px-7 rounded-[100px] space-x-6 md:space-x-3 relative overflow-hidden [box-shadow:4px_4px_30px_0px_rgba(22,_121,_190,_0.35)]">
                    <span class="text text-[18px] md:text-[16px] flex items-center text-center text-white font-semibold">Contact Form</span>
                    <i class="icon icon-mail flex items-center justify-center text-white"></i>
                </a>
            </div>
        </div>

        <div class="min-md:absolute left-0 top-0 w-full h-full md:h-[600px] md:pt-[120px]">

            <div class="w-full relative h-full">

                <div id="map" class="reveal [&_.gm-style_iframe_+_div]:!border-0 w-full h-full min-md:absolute left-0"></div>
            </div>
            <div class="overlay w-full h-full absolute left-0 top-0  bg-[radial-gradient(50%_50%_at_50%_50%,_rgba(255,_255,_255,_0.00)_0%,_#FFF_130%)] pointer-events-none md:hidden"></div>
        </div>
        <div class="relative  z-2 pt-[200px] pb-[100px] md:pt-0 md:pb-[20px] h-full pointer-events-none md:order-2">
            <div class="breadcrumb flex items-start md:items-center md:justify-center relative pointer-events-auto">
                <div class="list flex justify-center items-center mb-[30px] lg:mb-[20px] gap-5 pl-[200px] 2xl:pl-[40px] z-200">
                    <a href="{{env('HTTP_DOMAIN')}}" class="text-gray gap-10 text-[18px] leading-[28px] hover:text-secondary font-medium duration-500">Home</a>
                    <div class="text-gray">/</div>
                    <a href="page-contact.php" title="Galeri" class="text-gray text-[18px] leading-[28px] hover:text-secondary font-medium duration-500">Contact</a>
                </div>
            </div>
            <div class="w-1/3 md:w-full relative z-20 pl-44 pr-14 2xl:px-20 xl:px-16 pt-[60px] pb-[60px] pointer-events-auto md:pt-[30px] rounded-[0px_80px_80px_0px] before:absolute overflow-hidden isolate before:top-0 before:left-0 before:w-full before:h-full  bg-secondary before:pointer-events-none before:z-20">
                <div class="contact-tabs flex flex-col md:flex-row md:flex-wrap gap-[30px] md:gap-0 md:relative">
                    <?php $contact = [];
                    foreach($offices as $item){
                        [
                            'title' => $item->title,
                            'phone' => $item->phone,
                            'email' => $item->email,
                            'address' => $item->address,
                            'link' => $item->map_url
                        ] = $item;
                        $contact[] = $item;
                    }
                    foreach ($contact as $key => $item) : ?>
                        <div dir class="tab reveal sm:w-full z-20 cursor-pointer group/tab md:w-1/3 md:pr-[15px]   will-change-[height] [&.active]:overflow-hidden <?= $key == 0 ? 'active' : '' ?> " data-id="<?= $key ?>">
                            <div class="flex items-center justify-between">
                                <h2 class="title text-[32px] xl:text-[26px] lg:text-[22px] md:text-[20px] sm:text-[18px] xs:text-[16px] leading-[48px] xl:leading-[32px] text-white transition-all duration-450 xsm:flex xsm:items-center font-bold group-[&.active]/tab:text-white"><?= $item['title'] ?></h2>
                                <i class="icon icon-chevron-down opacity-70 flex items-center justify-center text-white group-[&.active]/tab:rotate-180 duration-500"></i>
                            </div>
                            <ul class="flex flex-col gap-[20px] xs:gap-[5px] min-md:h-0 overflow-hidden opacity-0 translate-y-[15px] group-[&.active]/tab:h-auto group-[&.active]/tab:opacity-100 group-[&.active]/tab:translate-y-0 group-[&.active]/tab:min-md:pt-[30px] md:py-[20px] md:pointer-events-none group-[&.active]/tab:md:pointer-events-auto transition-all duration-450 md:absolute md:left-0">
                                <li class="flex items-center gap-[22px] xs:gap-[15px] cursor-auto">
                                    <i class="icon-phone text-white text-[18px]  xs:text-[16px]leading-none inline-block h-[18px] xs:h-[16px]"></i>
                                    <a href="tel:<?= $item['phone'] ?>" class="text-[20px] lg:text-[18px] font-semibold md:text-[16px] sm:text-[15px] leading-[30px] text-white transition-all duration-300 hover:translate-x-[5px]"><?= $item['phone'] ?></a>
                                </li>
                                <li class="flex items-center gap-[22px] xs:gap-[15px] cursor-auto">
                                    <i class="icon-group text-white text-[18px] xs:text-[16px] leading-none inline-block h-[18px] xs:h-[16px]"></i>
                                    <a href="mailto:<?= $item['email'] ?>" class="text-[20px] lg:text-[18px] font-semibold md:text-[16px] sm:text-[15px] leading-[30px] text-white transition-all duration-300 hover:translate-x-[5px]"><?= $item['email'] ?></a>
                                </li>
                                <li class="flex items-center gap-[22px] xs:gap-[15px] cursor-auto">
                                    <i class="icon-location-1 text-white text-[18px] xs:text-[16px] leading-none inline-block h-[18px] xs:h-[16px]"></i>
                                    <a href="<?= $item['link'] ?>" target="_blank" class="text-[20px] lg:text-[18px] md:text-[16px] sm:text-[15px] leading-[30px] text-white transition-all duration-300 hover:translate-x-[5px] font-semibold max-w-[315px]"><?= $item['address'] ?></a>
                                </li>
                            </ul>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
    // Contact tab
    const contactTabs = document.querySelectorAll(".contact-tabs .tab")
    if (contactTabs) {
        function contactTab(ev, title, ul, titleRect) {
            for (let i = 0; i < contactTabs.length; i++) {
                contactTabs[i].classList.remove("active")
                if (window.innerWidth < 1024) {
                    contactTabs[i].style.height = `${titleRect.height}px`
                }
            }

            ev.currentTarget.classList.add("active")
            if (window.innerWidth < 1024) {
                ev.currentTarget.style.height = `${title.clientHeight + ul.clientHeight}px`

            }
        }

        contactTabs.forEach((tab, index) => {
            let ul = tab.querySelector("ul"),
                ulRect = ul.getBoundingClientRect(),
                tabRect = tab.getBoundingClientRect(),
                title = tab.querySelector(".title"),
                titleRect = title.getBoundingClientRect()

            if (window.innerWidth < 1024) {
                tab.style.height = `${titleRect.height}px`
                if (index === 0) {
                    tab.style.height = `${title.clientHeight + ul.clientHeight}px`
                }
            }

            setTimeout(() => {
                tab.classList.add("md:transition-all", "md:duration-700", "[&.active]:md:delay-300")
                ul.classList.add("group-[&.active]/tab:md:delay-500")
            }, 300)

            tab.addEventListener("click", (e) => {
                contactTab(e, title, ul, titleRect)
            })
        })
    }

    // Location List
    window.locations = [
        /* Buraya tab miktarı kadar lokasyon girebilirsiniz ve konum, zoom, url ve marker özelliklerini değiştirebilirsiniz. */
        {
            latLng: {
                lat: 40.90966926258905,
                lng: 29.20370886735402
            },
            zoom: 15,
            marker: `<a href="https://pentayazilim.com" target="_blank" class="relative group flex items-center"> 
                    <i class="icon-location-2 text-[45px] leading-none text-[#0F62AB] relative after:absolute after:bottom-0 after:left-1/2 after:-translate-x-1/2 after:w-[41px] after:h-[8px] after:rounded-full after:opacity-50 after:bg-[radial-gradient(50%_50%_at_50%_50%,_#2E485C_0%,_rgba(46,72,92,0.00)_100%)]"></i>
                </a>`
        },
        {
            latLng: {
                lat: 40.90966926258905,
                lng: 29.20370886735402
            },
            zoom: 15,
            marker: `<a href="https://pentayazilim.com" target="_blank" class="relative group flex items-center">
                    <i class="icon-location-2 text-[45px] leading-none text-[#0F62AB] relative after:absolute after:bottom-0 after:left-1/2 after:-translate-x-1/2 after:w-[41px] after:h-[8px] after:rounded-full after:opacity-50 after:bg-[radial-gradient(50%_50%_at_50%_50%,_#2E485C_0%,_rgba(46,72,92,0.00)_100%)]"></i>
                </a>`
        },

        {
            latLng: {
                lat: 40.90966926258905,
                lng: 29.20370886735402
            },
            zoom: 15,
            marker: `<a href="https://pentayazilim.com" target="_blank" class="relative group flex items-center">
                    <i class="icon-location-2 text-[45px] leading-none text-[#0F62AB] relative after:absolute after:bottom-0 after:left-1/2 after:-translate-x-1/2 after:w-[41px] after:h-[8px] after:rounded-full after:opacity-50 after:bg-[radial-gradient(50%_50%_at_50%_50%,_#2E485C_0%,_rgba(46,72,92,0.00)_100%)]"></i>
                </a>`
        },

        {
            latLng: {
                lat: 40.90966926258905,
                lng: 29.20370886735402
            },
            zoom: 15,
            marker: `<a href="https://pentayazilim.com" target="_blank" class="relative group flex items-center">
                    <i class="icon-location-2 text-[45px] leading-none text-[#0F62AB] relative after:absolute after:bottom-0 after:left-1/2 after:-translate-x-1/2 after:w-[41px] after:h-[8px] after:rounded-full after:opacity-50 after:bg-[radial-gradient(50%_50%_at_50%_50%,_#2E485C_0%,_rgba(46,72,92,0.00)_100%)]"></i>
                </a>`
        },

        {
            latLng: {
                lat: 40.90966926258905,
                lng: 29.20370886735402
            },
            zoom: 15,
            marker: `<a href="https://pentayazilim.com" target="_blank" class="relative group flex items-center">
                    <i class="icon-location-2 text-[45px] leading-none text-[#0F62AB] relative after:absolute after:bottom-0 after:left-1/2 after:-translate-x-1/2 after:w-[41px] after:h-[8px] after:rounded-full after:opacity-50 after:bg-[radial-gradient(50%_50%_at_50%_50%,_#2E485C_0%,_rgba(46,72,92,0.00)_100%)]"></i>
                </a>`
        },
    ];

    // Generate Map Function
    function generateMap(i) {
        window.latLng = locations[i].latLng
        window.mapZoom = locations[i].zoom;

        window.mapMarker = document.createElement('div');
        mapMarker.className = 'map-marker block !pointer-events-auto relative z-30';
        mapMarker.innerHTML = locations[i].marker;

    }
    generateMap(0)

    // Map Change
    let mapButtons = document.querySelectorAll('.contact-page .contact-tabs .tab');
    mapButtons.forEach(button => {
        button.addEventListener('click', () => {
            let i = button.getAttribute('data-id');
            if (i == null) return;
            generateMap(i)
            initMap()
        })
    })
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxycU6lO2UWtUA4BZDIfXrSVyYVqQ0wRM&callback=initMap&libraries=marker&v=beta" defer=""></script>

@endsection
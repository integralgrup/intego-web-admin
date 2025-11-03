<?php $nameofProject = 'Proje Adı';?>

<!DOCTYPE html>
<html class="group/html ltr" lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Açıklama alanı">
    <title><?php if (!empty($pageTitle)) echo $pageTitle . ' - '; ?><?= $nameofProject; ?></title>
    <link rel="shortcut icon" href="../assets/image/logo/logo.png" type="image/x-icon">
    <!-- Önbellek tutmasın diye ekledim; '?id<?= rand(); ?>' yazısını silersin -->
    <link rel="stylesheet" href="../assets/css/style.css?id<?= rand(); ?>">
    <link rel="stylesheet" href="../assets/css/tailwind.css?id<?= rand(); ?>">
    <!-- robots meta -->
    <meta name="robots" content="noindex, nofollow">
</head>

<body class="antialiased font-sans">

<style>
.rtl{
   direction: rtl;
}

.ltr{
    direction:ltr;
}

</style>

<?php 
    $menuItems = \App\Models\Menu::where(['lang' => app()->getLocale(), 'parent_menu_id' => 0, 'menu_type' => 'header'])->with('children')->orderBy('sort')->get();
?>
<header class="[&.active]:!translate-y-0 group/header  header-field h-[160px] [&.is-fixed]:h-[130px] md:h-[120px] sm:[&.is-fixed]:h-[100px] min-lg:[&.sub-about]:[&.is-fixed]:opacity-0 min-lg:[&.sub-about]:[&.is-fixed]:pointer-events-none min-lg:[&.sub-about]:[&.is-fixed]:h-0  z-100 fixed min-md:[&.sub-page]:[&.is-hidden]:-!translate-y-full w-full left-0 [&.is-fixed]:shadow-xl top-0 duration-500 bg-transparent will-change-[height,transform] [&.is-fixed]:!top-0 [&.is-fixed]:!translate-y-0 [&.is-fixed]:!bg-white [&.is-fixed]:shadow-header [&.is-hidden.is-fixed]:!-translate-y-full [&.is-hidden.is-fixed]:shadow-none [&.no-scroll]:absolute [&.no-scroll]:!transform-none [&.no-scroll]:!shadow-none peer md:bg-white">
    <div class="container max-w-[1600px] mx-auto h-full 2xs:px-[20px]">
        <div class="wrapper flex justify-between items-center h-full logo-section">
            <a href="<?=env('HTTP_DOMAIN')?>" class="logo lg:w-[120px] lg:h-[80px] block xs:w-[150px] xs:h-[60px]">
                <img class="w-full h-full object-contain object-center" src="../assets/image/logo/logo.png" alt="">
            </a>
            <div class="  menu-field flex items-center justify-center gap-[100px] 2xl:gap-[50px] xl:gap-[25px] lg:gap-[15px]">
                <ul class="navMenu md:hidden md:overflow-y-auto md:max-h-[calc(100dvh-120px)] md:[&.active]:flex md:absolute md:left-0 md:top-full md:w-full md:flex-col md:bg-secondary md:rounded-b-[30px] flex justify-between items-center gap-[60px] 2xl:gap-[40px] lg:gap-[20px] sm:gap-0 md:items-start">
                    <?php foreach($menuItems as $menuItem): ?> 
                        @if($menuItem->page_type == 'product')
                            <li data-toggle data-target="#offer|body|header" class="md:pl-[30px] sm:py-[15px] sm:border-0 sm:border-b sm:border-solid sm:border-black/15 group/tabs trigger-items tab md:w-full offer cursor-pointer group/sub-menu before:absolute before:bottom-0 before:left-0 before:w-0 before:hover:w-full before:duration-500 before:h-[3px] before:rounded-full before:hover:bg-secondary relative group-[&.rtl]/html:text-end">
                                <span class=" text-gray sub-menu-item md:pointer-events-auto md:z-20 relative min-md:group-hover/sub-menu:text-black md:text-white duration-500 text-[18px] lg:text-[17px] leading-[30px] font-semibold w-full">Products</span>
                                <div data-tabs-subsMenu class="sub-trigger pointer-events-auto z-[999] group/menu-icon absolute right-6 top-[15px] w-[35px] h-[35px] bg-secondary justify-center items-center hidden md:flex cursor-pointer rounded-default duration-450 lg:bg-[#1679BE] lg:rounded-[5px]">
                                    <div class="icon icon-chevron-down absolute left-1/2 -translate-x-1/2 bg-transparent duration-450 md:group-[&.isDrop]/tabs:rotate-180 rounded-full lg:text-white lg:flex"></div>
                                </div>
                                @if(count($menuItem->children) > 0)
                                <section id="offer" class="sub-menu-trigger trigger md:py-[15px] md:hidden md:group-[&.isDrop]/tabs:block sm:overflow-y-auto  sm:h-full min-md:pointer-events-none min-md:opacity-0 min-md:[&.active]:opacity-100 w-screen h-screen !top-0 md:w-full md:h-full min-md:[&.active]:pointer-events-auto group/wrapper fixed md:relative overflow-hidden z-[200] md:opacity-100 t right-0 flex items-end justify-start bg-black/50 md:bg-transparent duration-500">
                                    <div class="min-md:-translate-x-[100%] lg:bg-[#1679BE] lg:rounded-tl-[20px] lg:rounded-bl-[20px] min-md:group-[&.active]/wrapper:-translate-x-0 duration-500 group relative z-50 w-1/3 lg:w-1/2 md:w-full min-lg:bg-secondary min-md:rounded-tr-[80px] ">
                                        <div class="absolute top-0 left-0 w-full h-full pointer-events-none md:hidden">
                                            <img class="w-full h-full object-cover object-center min-md:rounded-tr-[80px]" src="../assets/image/product2.png" alt="">
                                        </div>
                                        <div class="wrapper grid grid-cols-1 gap-x-[5px] gap-y-[13px] h-full p-[68px] 2xl:p-8 xl:p-5 md:gap-0">
                                            @foreach($menuItem->children as $childMenu)
                                            <div class="group/items md:flex-col md:items-start relative group/sub-menus flex items-center justify-between p-[15px] md:p-[3px] gap-[30px] md:gap-0 min-md:before:absolute min-md:before:top-0 min-md:before:left-0 min-md:before:w-full min-md:before:rounded-[30px] min-md:before:border min-md:before:border-solid min-md:before:border-black/0 min-md:before:h-full min-md:before:bg-white/0 min-md:hover:before:bg-white/20 min-md:hover:before:border min-md:hover:before:border-solid min-md:hover:before:border-white/40 min-md:hover:before:rounded-[30px] min-md:hover:before:[mask-image:linear-gradient(to_left,transparent_25%,black_50%)] min-md:before:[mask-image:linear-gradient(to_left,transparent_0%,black_0%)] after:absolute after:right-[100px] after:z-[1] after:top-0 after:w-full after:h-full after:translate-x-full before:pointer-events-none after:pointer-events-none group-[&.rtl]/html:text-end">
                                                <a href="page-product.php" class="flex items-center justify-center gap-[50px] md:group-[&.rtl]/html:w-full md:group-[&.rtl]/html:justify-end">
                                                    <div class="image aspect-[9/9] h-[90px] [mask-image:url('../../assets/image/smallproduct.svg')] [mask-size:contain] [mask-repeat:no-repeat] [mask-position:center] bg-[#F1F8FE] md:hidden">
                                                        <img class="p-3 w-full h-full object-contain object-center" src="../assets/image/product/rectangle2.png" alt="">
                                                    </div>
                                                    <div class="text-[22px] xl:text-[20px] md:text-[16px] font-semibold group-hover/items:font-bold min-md:group-hover/items:translate-x-1 duration-500 leading-[36px] text-white">Playgrounds</div>

                                                </a>
                                                @if(count($childMenu->children) > 0)
                                                <div data-tabs-subsMenu2 class="sub-trigger pointer-events-auto z-[999] group/menu-icon absolute right-0 top-[-7px] w-[35px] h-[35px] bg-secondary justify-center items-center hidden md:flex cursor-pointer rounded-default duration-450 lg:bg-[#1679BE] lg:rounded-[5px]">
                                                    <div class="icon icon-chevron-down absolute left-1/2 -translate-x-1/2 bg-transparent duration-450 group-[&.isDrop]/items:rotate-180 rounded-full lg:text-white lg:flex"></div>
                                                </div>
                                                <i class="flex items-center justify-center pr-[30px] text-white opacity-0 group-hover/items:opacity-100 -translate-x-4 group-hover/items:translate-x-0 duration-500 md:hidden icon icon-arrow-right-2"></i>
                                                <section class="min-md:translate-y-[100%] min-md:translate-x-[100%] min-md:group-[&.rtl]/html:right-auto min-md:group-[&.rtl]/html:left-0 min-md:group-[&.rtl]/html:translate-x-[-100%] lg:block md:w-full min-md:group-hover/sub-menus:translate-y-[0%] md:hidden md:group-[&.isDrop]/items:block sm:overflow-y-auto sm:h-full h-full pointer-events-none min-md:opacity-0 min-md:group-hover/sub-menus:opacity-100 min-md:invisible min-md:group-hover/sub-menus:visible min-md:group-hover/sub-menus:pointer-events-auto group/wrapper z-[100] fixed md:relative bottom-0 right-0 flex items-end justify-end md:bg-transparent duration-1000 ">
                                                    <div class=" duration-500 group relative z-50 w-full md:w-full  bg-[#1679BE] md:rounded-[20px] min-md:rounded-tr-[80px] group-[&.rtl]/html:rounded-tl-[80px] group-[&.rtl]/html:rounded-tr-none pl-10 py-10 md:p-0">
                                                        <div class="wrapper grid grid-cols-1 gap-x-[5px] gap-y-[13px] h-full p-[40px] md:p-[3px] min-md:max-h-[660px] min-md:overflow-y-auto min-md:[direction:rtl]">
                                                            @foreach($childMenu->children as $childMenu2)
                                                            <a href="page-product-detail.php" class="group/item flex items-center justify-between p-[15px] md:p-[3px] gap-[30px] md:group-[&.rtl]/html:justify-end">
                                                                <div class="flex items-center justify-center gap-[20px] min-md:group-hover/item:translate-x-7 duration-500">
                                                                    <div class="text-[24px] 2xl:text-[22px] lg:text-[18px] md:text-[16px] md:pointer-events-auto font-semibold duration-500 leading-[36px] text-white/75 hover:text-white">Helicopter Series Playgrounds</div>
                                                                    <i class="flex items-center justify-center -rotate-45 text-secondary opacity-0 group-hover/item:opacity-100 duration-500 md:hidden icon icon-arrow-right-2"></i>
                                                                </div>
                                                            </a>
                                                            @endforeach
                                                        </div>
                                                </section>
                                                @endif
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </section>
                                @endif
                            </li>
                        @elseif($menuItem->page_type == 'furniture')
                            <li data-toggle data-target="#sub|body" class="md:pl-[30px] sm:py-[15px] sm:border-0 sm:border-b sm:border-solid sm:border-black/15 group/tabs trigger-items tab sub md:w-full cursor-pointer group/sub-menu before:absolute before:bottom-0 before:left-0 before:w-0 before:hover:w-full before:duration-500 before:h-[3px] before:rounded-full before:hover:bg-secondary relative group-[&.rtl]/html:text-end">
                                <span class="text-gray min-md:group-hover/sub-menu:text-black md:text-white  duration-500 text-[18px] lg:text-[17px] leading-[30px] font-semibold">Urban Furniture</span>
                                <div data-tabs-subsMenu class="sub-trigger pointer-events-auto z-[999] group/menu-icon absolute right-6 top-[15px] w-[35px] h-[35px] bg-secondary justify-center items-center hidden md:flex cursor-pointer rounded-default duration-450 lg:bg-[#1679BE] lg:rounded-[5px]">
                                    <div class="icon icon-chevron-down absolute left-1/2 -translate-x-1/2 bg-transparent duration-450 group-[&.isDrop]/tabs:rotate-180 rounded-full lg:text-white lg:flex"></div>
                                </div>
                                <section id="sub" class="sub-menu-trigger trigger md:py-[15px]  md:hidden md:group-[&.isDrop]/tabs:block sm:overflow-y-auto sm:h-full min-md:pointer-events-none min-md:opacity-0 min-md:[&.active]:opacity-100 w-screen h-screen !top-0 md:w-full md:h-full min-md:[&.active]:pointer-events-auto group/wrapper fixed md:relative overflow-hidden z-[150] md:opacity-100 t right-0 flex items-end justify-start bg-black/50 md:bg-transparent duration-500">

                                    <div class="min-md:-translate-x-[100%] md:translate-x-0 md:bg-[#1679BE] md:rounded-l-[20px] min-md:group-[&.active]/wrapper:-translate-x-0 duration-500 group relative z-50 w-[40%] lg:w-1/2 md:w-full   bg-secondary min-md:rounded-tr-[80px]">
                                        <div class="absolute top-0 left-0 w-full h-full pointer-events-none md:hidden">
                                            <img class="w-full h-full object-cover object-center min-md:rounded-tr-[80px]" src="../assets/image/product2.png" alt="">
                                        </div>
                                        <div class="wrapper grid grid-cols-1 gap-x-[5px] gap-y-[13px] h-full p-[68px] 2xl:p-[60px] xl:p-[50px] lg:p-[15px] md:p-3 md:gap-0">
                                            @foreach($menuItem->children as $childMenu)
                                            <a href="page-product-detail.php" class="group/item relative group/sub-menu flex items-center justify-between p-[15px] md:p-[3px] gap-[30px] min-md:before:absolute min-md:before:top-0 min-md:before:left-0 min-md:before:w-full min-md:before:rounded-[30px] min-md:before:border min-md:before:border-solid min-md:before:border-black/0 min-md:before:h-full min-md:before:bg-white/0 min-md:hover:before:bg-white/20 min-md:hover:before:border min-md:hover:before:border-solid min-md:hover:before:border-white/40 min-md:hover:before:rounded-[30px] min-md:hover:before:[mask-image:linear-gradient(to_left,transparent_25%,black_50%)] min-md:before:[mask-image:linear-gradient(to_left,transparent_0%,black_0%)] before:pointer-events-none after:pointer-events-none md:group-[&.rtl]/html:justify-end">
                                                <div class="flex items-center justify-center gap-[30px]  xl:gap-[20px] lg:gap-[15px]">
                                                    <div class="image aspect-[9/9] h-[90px] xl:aspect-[6/6] xl:h-[60px] [mask-image:url('../../assets/image/smallproduct.svg')] [mask-size:contain] [mask-repeat:no-repeat] [mask-position:center] bg-[#F1F8FE] md:hidden">
                                                        <img class="p-3 w-full h-full object-contain object-center" src="../assets/image/product/rectangle2.png" alt="">
                                                    </div>
                                                    <div class="text-[22px] xl:text-[20px] md:text-[16px] font-semibold group-hover/item:font-bold min-md:group-hover/item:translate-x-1 duration-500 leading-[36px] text-white">Gazebo-Camelia-Pergola</div>
                                                </div>
                                                <i class="flex items-center justify-center pr-[30px] text-white opacity-0 group-hover/item:opacity-100 -translate-x-4 group-hover/item:translate-x-0 duration-500 icon icon-arrow-right-2 xl:hidden"></i>
                                            </a>
                                            @endforeach
                                        </div>
                                    </div>
                                </section>
                            </li>
                        @elseif($menuItem->page_type == 'play_ground')
                            <li data-toggle data-target="#subMenu|body" class="md:pl-[30px] sm:py-[15px] sm:border-0 sm:border-b sm:border-solid sm:border-black/15 group/tabs trigger-items tab md:w-full subMenu cursor-pointer group/sub-menu before:absolute before:bottom-0 before:left-0 before:w-0 before:hover:w-full before:duration-500 before:h-[3px] before:rounded-full min-md:before:hover:bg-secondary relative group-[&.rtl]/html:text-end">
                                <span class="text-gray min-md:group-hover/sub-menu:text-black md:text-white duration-500 text-[18px] lg:text-[17px] leading-[30px] font-semibold">Playground Area</span>
                                <div data-tabs-subsMenu class="sub-trigger pointer-events-auto z-[999] group/menu-icon absolute right-6 top-[15px] w-[35px] h-[35px] bg-secondary justify-center items-center hidden md:flex cursor-pointer rounded-default duration-450 lg:bg-[#1679BE] lg:rounded-[5px]">
                                    <div class="icon icon-chevron-down absolute left-1/2 -translate-x-1/2 bg-transparent duration-450 group-[&.isDrop]/tabs:rotate-180 rounded-full lg:text-white lg:flex"></div>
                                </div>
                                <section id="subMenu" class="sub-menu-trigger trigger md:pt-[20px] md:hidden md:group-[&.isDrop]/tabs:block sm:overflow-y-auto sm:h-full min-md:pointer-events-none min-md:opacity-0 md:opacity-100 min-md:[&.active]:opacity-100 w-screen h-screen md:w-full md:h-full min-md:[&.active]:pointer-events-auto group/wrapper fixed md:relative overflow-hidden z-[150]  top-0 right-0 flex items-end justify-start bg-black/50 md:bg-transparent duration-500">

                                    <div class="min-md:-translate-x-[100%] md:translate-x-0 md:bg-[#1679BE] md:rounded-l-[20px] min-md:group-[&.active]/wrapper:-translate-x-0 duration-500 group relative z-50 w-[55%] lg:w-1/2 md:w-full   bg-secondary min-md:rounded-tr-[80px]">
                                        <div class="absolute top-0 left-0 w-full h-full pointer-events-none md:hidden">
                                            <img class="w-full h-full object-cover object-center min-md:rounded-tr-[80px]" src="../assets/image/product2.png" alt="">
                                        </div>
                                        <div class="wrapper grid grid-cols-2 md:grid-cols-1 gap-x-[5px] gap-y-[13px] h-full p-[48px] md:gap-0 lg:p-3">
                                            @foreach($menuItem->children as $childMenu)
                                            <a href="{{env('HTTP_DOMAIN') . '/' . getUrl('playground_url') .'/' . $childMenu['seo_url']}}" class="group/item relative group/sub-menu flex items-center justify-between p-[15px] md:p-[3px] gap-[30px] min-md:before:absolute min-md:before:top-0 min-md:before:left-0 min-md:before:w-full min-md:before:rounded-[30px] min-md:before:border min-md:before:border-solid min-md:before:border-black/0 min-md:before:h-full min-md:before:bg-white/0 min-md:hover:before:bg-white/20 min-md:hover:before:border min-md:hover:before:border-solid min-md:hover:before:border-white/40 min-md:hover:before:rounded-[30px] min-md:hover:before:[mask-image:linear-gradient(to_left,transparent_25%,black_50%)] min-md:before:[mask-image:linear-gradient(to_left,transparent_0%,black_0%)] before:pointer-events-none after:pointer-events-none md:group-[&.rtl]/html:justify-end">
                                                <div class="flex items-center justify-center gap-[30px]  xl:gap-[20px] lg:gap-[15px]">
                                                    <div class="image aspect-[9/9] h-[90px] xl:aspect-[6/6] xl:h-[60px] [mask-image:url('../../assets/image/smallproduct.svg')] [mask-size:contain] [mask-repeat:no-repeat] [mask-position:center] bg-[#F1F8FE] md:hidden">
                                                        <img class="p-3 w-full h-full object-contain object-center" src="../assets/image/product/rectangle2.png" alt="">
                                                    </div>
                                                    <div class="text-[22px] xl:text-[20px] md:text-[16px] font-semibold group-hover/item:font-bold min-md:group-hover/item:translate-x-1 duration-500 leading-[36px] text-white">Gardens</div>
                                                </div>
                                                <i class="flex items-center justify-center pr-[30px] text-white opacity-0 group-hover/item:opacity-100 -translate-x-4 group-hover/item:translate-x-0 duration-500 icon icon-arrow-right-2 xl:hidden"></i>
                                            </a>
                                            @endforeach
                                        </div>
                                    </div>
                                </section>
                            </li>
                        @else 
                            <li class="md:pl-[30px] sm:py-[15px] md:w-full sm:border-0 sm:border-b sm:border-solid sm:border-black/15 group/sub-menu before:absolute before:bottom-0 before:left-0 before:w-0 before:hover:w-full before:duration-500 before:h-[3px] before:rounded-full before:hover:bg-secondary relative group-[&.rtl]/html:text-end">
                                <a class="text-gray min-md:group-hover/sub-menu:text-black md:text-white duration-500 text-[18px] lg:text-[17px] leading-[30px] font-semibold w-full block group-[&.rtl]/html:text-end" href="<?=env('HTTP_DOMAIN').'/'. $menuItem->seo_url?>">{{ $menuItem->title }}</a>
                            </li>
                        @endif
                    <?php endforeach; ?>
                    
                </ul>
                <div class="contact flex items-center justify-between gap-[20px] lg:gap-[10px] md:justify-center">
                    <button class="group/lang buttonLang relative drop text-[18px] leading-[30px] font-semibold flex items-center xs:pr-[40px] border-[4px] border-solid border-[#F2F3F5] px-[18px] xl:px-[10px] lg:px-[8px] py-[5px] rounded-full uppercase text-[#7B8A99] md:left-[30px] md:relative md:top-0 md:border-0 md:m-0 md:p-0 duration-500">
                        <div class="image mr-2 group-[&.rtl]/html:ml-2 group-[&.rtl]/html:mr-0">
                            <img class="rounded-full p-[10px] bg-[#F2F3F5]" src="../assets/image/en.png" alt="">
                        </div>
                        EN
                        <i class="flex items-center justify-center min-md:group-hover/lang:rotate-180 duration-500  icon icon-chevron-down text-black/50 ml-[10px] group-[&.rtl]/html:mr-[10px] group-[&.rtl]/html:ml-0 text-[15px] md:text-[10px]"></i>

                        <ul class="options bg-white buttonLangItem border border-solid border-black/20 md:hidden md:[&.isLang]:grid p-[16px] sm:p-[15px]  grid grid-cols-2 gap-[10px] sm:gap-[5px] absolute top-full left-[50%] translate-x-[-50%] w-max rounded-[20px] backdrop-blur-xl duration-350 min-md:opacity-0 min-md:pointer-events-none min-md:invisible min-md:translate-y-[15px] min-md:group-hover/lang:opacity-100 min-md:group-hover/lang:pointer-events-auto min-md:group-hover/lang:visible min-md:group-hover/lang:translate-y-0 min-md:group-hover/lang:delay-250">
                            <?php
                            $url = 'http://localhost:8888/'; $list = [
                                ['title' => 'TR', 'image' => '../assets/image/static/tr.png', 'subitem' => ['title' => 'EN','url' => '../assets/image/static/en.png', 'image' => '../assets/image/static/en.png']],
                                ['title' => 'EN', 'image' => '../assets/image/static/en.png', 'subitem' => ['title' => 'TR', 'url' => '../assets/image/static/tr.png', 'image' => '../assets/image/static/tr.png']],
                                ['title' => 'AR', 'image' => '../assets/image/static/ar.png', 'subitem' => ['title' => 'EN', 'url' => '../assets/image/static/en.png', 'image' => '../assets/image/static/en.png']],
                                ['title' => 'RU', 'image' => '../assets/image/static/ru.png', 'subitem' => ['title' => 'EN', 'url' => '../assets/image/static/en.png', 'image' => '../assets/image/static/en.png']],
                                ['title' => 'ES', 'image' => '../assets/image/static/es.png', 'subitem' => ['title' => 'EN', 'url' => '../assets/image/static/en.png', 'image' => '../assets/image/static/en.png']],
                                ['title' => 'FR', 'image' => '../assets/image/static/fr.png', 'subitem' => ['title' => 'EN', 'url' => '../assets/image/static/en.png', 'image' => '../assets/image/static/en.png']],
                            ]; ?>

                            <?php foreach ($list as $key => $item) : ?>
                                <li class="option group/option<?= $item['subitem']['url'] == $url ? ' is-active' : ''; ?>">
                                    <a href="" class="flex items-center border border-solid hover:border-[#FFE646] border-black/10 duration-500 gap-[10px] rounded-[12px] bg-black/10 group-hover/option:bg-secondary px-[12.5px] py-[10px] sm:px-[10px] sm:py-[7.5px] relative">
                                        <div class="image w-[20px] aspect-square shrink-0"><img class="w-full h-full object-cover object-center" src="<?= $item['image']; ?>" alt="" loading="lazy"></div>
                                        <div class="text text-black/70 duration-350 group-hover/option:text-white sm:text-[14px]"><?= $item['title']; ?></div>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>

                    </button>
                    <a class="md:w-full md:px-[30px] md:hidden" href="<?=env('HTTP_DOMAIN').'/'.getUrl('contact_url')?>">
                        <div class="group/button p-[16px_40px] xl:p-[16px_30px] lg:p-[16px_26px] bg-[#1679BE] [box-shadow:4px_4px_30px_0px_rgba(22,_121,_190,_0.35)] flex justify-between items-center md:justify-center gap-[27px] rounded-full before:absolute before:left-0 before:top-0 before:hover:top-full before:w-full before:h-full before:hover:bg-[#89C8F0] overflow-hidden isolate relative before:duration-500 cursor-pointer">
                            <div class="text text-white text-[16px] z-[1] font-semibold">Contact</div>
                        </div>
                    </a>
                </div>

            </div>
            <div class="other-menu flex relative z-20">
                <div class="mobile-menu-field  group/mobile-menu hidden md:flex md:items-center md:cursor-pointer pl-4 md:pl-0">
                    <div class="space-y-2 min-h-[40px] flex flex-col items-center justify-center">
                        <div class="line w-[25px] h-[2px] bg-[#0F62AB] group-hover/mobile-menu:w-[25px] group-[&.sub-page]/header:bg-[#0F62AB] duration-450 flex justify-end min-lg:group-hover/header:bg-[#0F62AB] group-[&.is-fixed]/header:bg-[#0F62AB] group-[&.isHeader]/header:bg-[#0F62AB]  group-[.active]/mobile-menu:w-[25px] group-[.active]/mobile-menu:rotate-45  group-[.active]/mobile-menu:!bg-secondary group-[&.transparent]/header:bg-[#000F24] group-[&.transparent.is-fixed]/header:bg-[#000F24]"></div>
                        <div class="line w-[25px] h-[2px] bg-[#0F62AB] group-hover/mobile-menu:w-[25px] group-[&.sub-page]/header:bg-[#0F62AB] duration-450 flex justify-end min-lg:group-hover/header:bg-[#0F62AB] group-[&.is-fixed]/header:bg-[#0F62AB] group-[&.isHeader]/header:bg-[#0F62AB] group-[.active]/mobile-menu:w-[25px] group-[.active]/mobile-menu:translate-x-6 group-[.active]/mobile-menu:!bg-secondary group-[.active]/mobile-menu:opacity-0   group-[.active]/mobile-menu:m-[-1px] group-[&.transparent]/header:bg-[#000F24] group-[&.transparent.is-fixed]/header:bg-[#000F24]"></div>
                        <div class="line w-[25px] h-[2px] bg-[#0F62AB] group-hover/mobile-menu:w-[25px] group-[&.sub-page]/header:bg-[#0F62AB] duration-450 flex justify-end min-lg:group-hover/header:bg-[#0F62AB] group-[&.is-fixed]/header:bg-[#0F62AB] group-[&.isHeader]/header:bg-[#0F62AB] group-[.active]/mobile-menu:w-[25px] group-[.active]/mobile-menu:-rotate-45 group-[.active]/mobile-menu:!bg-secondary group-[.active]/mobile-menu:m-[-1px] group-[&.transparent]/header:bg-[#000F24] group-[&.transparent.is-fixed]/header:bg-[#000F24]"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
</header>

<penta-yazilim class="block peer-[&.mobile-menu-active]:[&_.mobile-menu-overlay]:opacity-100 peer-[&.mobile-menu-active]:[&_.mobile-menu-overlay]:pointer-events-auto">
    <div id="smooth-wrapper" class="block">
        <div id="smooth-content">
            <div class="mobile-menu-overlay pointer-events-none min-md:hidden opacity-0 transition-all duration-700 delay-100 fixed left-0 top-0 z-[50] bg-black/50 backdrop-blur-[5px] h-full w-full peer-[&.mobile-menu-active]:opacity-100 peer-[&.mobile-menu-active]:pointer-events-auto"></div>




            <script>
                let mobileMenu = document.querySelector(".mobile-menu-field");
                let menu = document.querySelector(".navMenu");
                const buttonLang = document.querySelector(".buttonLang");
                const buttonLangItem = document.querySelector(".buttonLangItem");
                const dataToggle = document.querySelectorAll("[data-toggle]");
                mobileMenu.addEventListener("click", () => {
                    toggleMenu();
                });


                function toggleMenu() {
                    mobileMenu.classList.toggle("active");
                    header.classList.toggle("mobile-menu-active");
                    menu.classList.toggle("active");
                    document.querySelector("body").classList.toggle("overflow-hidden");
                    buttonLangItem.classList.remove("isLang");
                    dataToggle.forEach(subMenu => {
                        subMenu.classList.remove("isDrop");

                    })
                    mobileMenu.classList.remove("overflow-hidden");


                }

                document.querySelector(".mobile-menu-overlay").addEventListener("click", toggleMenu)


                if (window.innerWidth <= 1024) {
                    buttonLang.addEventListener("click", () => {
                        buttonLangItem.classList.toggle("isLang");
                        menu.classList.remove("active");
                        mobileMenu.classList.remove("active");
                        header.classList.remove("mobile-menu-active");
                    })
                }
            </script>


            <script>
                function activateTab() {
                    // Tıklanan alt menü öğesini seç
                    var subMenuItem = event.target;

                    // Ana menü öğesini seç
                    var tabMenu = document.querySelector('.tab-menu');

                    // Tüm alt menü öğelerini seç
                    var subMenuItems = document.querySelectorAll('.sub-menu-item');

                    // Tıklanan alt menü öğesine 'active' sınıfını ekle
                    subMenuItem.classList.add('isDrop');

                    // Diğer alt menü öğelerinden 'active' sınıfını kaldır
                    subMenuItems.forEach(function(item) {
                        if (item !== subMenuItem) {
                            item.classList.remove('isDrop');
                        }
                    });

                    // Ana menü öğesine 'active' sınıfını ekle
                    tabMenu.classList.add('isDrop');

                }
            </script>



            <script>
                const data = document.querySelectorAll("[data-toggle]");

                data.forEach(item => {
                    item.addEventListener("click", () => {
                        document.querySelector("body").classList.toggle("overflow-hidden");
                    });
                })
            </script>

            <script>
                document.querySelector("body").addEventListener("click", (e) => {
                    if (window.innerWidth <= mobileLimit) {
                        const isLangSwitcher = e.target === buttonLangItem || buttonLangItem.contains(e.target);

                        if (isLangSwitcher) {
                            buttonLangItem.classList.toggle("active");
                            buttonLangItem.classList.remove("isLang");



                        } else if (buttonLangItem.classList.contains("active")) {
                            // Tıkladığımız alan dil seçici içerisinde değilse dil seçici kapansın
                            buttonLangItem.classList.remove("active");
                        }
                    }
                })
            </script>
            
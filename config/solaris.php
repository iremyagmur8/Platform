<?php

/*
 * File Types
 *
 * 1-Category
 * 2-Post
 * 3-Banner
 * 4-Gallery
 * 5-Product
 * 6-Video Gallery
 * 7-Contact
 */
return [
    'site' => [
        "name" => "DormitoryInn",
        "google" => "",
        "url" => "https://platform.karip.net",
        "cookiedesc" => "Ziyaretiniz sırasında kişisel verileriniz siteyi kullanımınızı analiz etmek amacıyla çerezler
                aracılığıyla işlenmektedir. Daha fazla bilgi için Çerez Aydınlatma Metni’ni okuyabilirsiniz.",
        "cookiebutton" => "Anladım. Kabul ediyorum",
        "homebutton" => "STARTSEITE"
    ],
    'modules' => [
        "solaris" => array(
            'name' => 'Solaris',
            'icon' => 'icon-Monitor-4 nav-thumbnail',
            'class' => '',),

        "categories" => array(
            'name' => 'Kategoriler',
            'icon' => 'icon-Bookmark nav-thumbnail',
            'class' => '',),


        "posts" => array(
            'name' => 'İçerikler',
            'icon' => 'icon-Newspaper nav-thumbnail',
            'class' => '',),

        "banners" => array(
            'name' => 'Banner Alanları',
            'icon' => 'icon-Coins nav-thumbnail',
            'class' => '',),

        "videogalleries" => array(
            'name' => 'Video Galeri',
            'icon' => 'icon-Video-5 nav-thumbnail',
            'class' => '',),

        "galleries" => array(
            'name' => 'Galeri',
            'icon' => 'icon-Photo nav-thumbnail',
            'class' => '',),


        "admin" => array(
            'name' => 'Yönetim',
            'icon' => 'icon-User nav-thumbnail',
            'class' => '',),
        /*
                "settings" => array(
                    'name' => 'Ayarlar',
                    'icon' => 'icon-Gear nav-thumbnail',
                    'class' => '',),
        */
        "contact" => array(
            'name' => 'İletişim',
            'icon' => 'icon-Mail nav-thumbnail',
            'class' => '',),

        "universities" => array(
            'name' => 'Üniversiteler',
            'icon' => 'icon-Mail nav-thumbnail',
            'class' => '',),

        "dormitories" => array(
            'name' => 'Yurtlar',
            'icon' => 'icon-Mail nav-thumbnail',
            'class' => '',),
    ],

    'catTypes' => [
        "icerikler" => array("id" => 0, "name" => "İçerikler"),
        "galeriler" => array("id" => 2, "name" => "Galeriler"),
        "videolar" => array("id" => 3, "name" => "Videolar"),
        "firmalar" => array("id" => 4, "name" => "Firmalar"),
    ],

    'dormitoriesFeatures' => [
        "Air Conditioning",
        "Free Wi-Fi",
        "24/7 Assistance",
        "Swimming Pool",
        "Bills Included",
        "Cleaning Included",
        "Shuttle",
        "Meal Plan"
    ],
    'catThemes' => [
        "1",
        "2",
        "3",
        "4",
        "calendar",
        "accordion",
        "description",
        "list"
    ],

    'contentThemes' => [
        "Resimli",
        "Düz Yazı",

    ],

    'galleryThemes' => [
        "Slider Yazısız",
        "Slider Yazılı",
        "Slider Yazılı ve Linkli",
    ],

    'videoThemes' => [
        "Slider Yazısız",
        "Slider Yazılı",
        "Slider Yazılı ve Linkli",
    ],

    'sex' => [
        "Slider Yazısız",
        "Slider Yazılı",
        "Slider Yazılı ve Linkli",
    ]

] ?>

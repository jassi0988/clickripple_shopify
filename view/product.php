<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <title>Date</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
    body {
        font-family: "Inter", sans-serif;
        font-style: normal;
        font-weight: normal;
        font-size: 14px;
        line-height: 20px;
        -webkit-text-decoration-line: none;
        text-decoration-line: none;
        letter-spacing: normal;
        text-transform: initial;
        -webkit-text-size-adjust: none;
        color: #272742;
        margin: 0;
        background: #f6f6f9;
        -webkit-font-smoothing: antialiased;
    }

    .flickity-viewport {
        height: 500px !important;
        touch-action: pan-y;
    }

    .carousel-cell {
        width: 22%;

        margin-right: 10px;
    }

    /* cell number */
    .carousel-cell:before {
        display: block;
    }


    .product-card:hover .product-card-actions {
        opacity: 1;
        margin-top: 20px;
        height: 32px;
    }

    .main {
        margin-left: 200px;
        /* Same as the width of the sidenav */
    }

    .product-card {
        transition: top 0.2s, z-index 0.3s;
    }

    .panel {
        background: #fff;
        box-shadow: 0 0 1px rgba(143, 144, 165, 0.7), 0 0 10px rgba(143, 144, 165, 0.2);
        border-radius: 0;
    }

    .panel .panel-header-with-image {
        position: relative;
        padding: 0;
        height: 236px;
        cursor: pointer;
    }

    .product-card__anchor {
        width: 100%;
        height: 100%;
    }

    .panel .panel-header-with-image img {
        border-radius: 0;
        vertical-align: top;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    img {
        border: 0;
    }

    .product-card .product-marked-corner {
        display: none;
    }

    .panel .panel-body {
        padding: 16px 24px;
    }

    .panel>:last-child {
        border-radius: 0;
    }

    .product-card__meta {
        min-height: 141px;
    }

    .product-card .product-card-title {
        width: 100%;
        height: 20px;
        justify-content: space-between;
        align-items: center;
        position: relative;
    }

    .product-card .product-card-link {
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        text-decoration: none;
        color: #272742;
    }

    .product-card .product-price-wrapper {
        display: flex;
        align-items: center;
    }

    h4 {
        font-weight: 600;
        font-size: 14px;
        line-height: 20px;
        color: #272742;
    }

    .product-card-price {
        font-weight: 600;
        font-size: 16px;
        line-height: 20px;
        color: #272742;
    }

    .product-card .product-card-subtitle {
        color: #6f6f85;
    }

    .product-card .product-shipping-info {
        position: relative;
        display: flex;
        justify-content: space-between;
        padding-right: 20px;
        cursor: pointer;
    }

    .product-card__reviews {
        margin: 12px 8px 12px 0;
        display: flex;
        align-items: center;
        line-height: 0;
        height: 16px;
        font-size: 12px;
    }

    .product-card__reviews .product-card__reviews-count:first-child {
        margin-left: 0;
    }

    .product-card__reviews .product-card__reviews-count {
        color: #6f6f85;
        margin-left: 4px;
    }

    label {
        font-weight: 600;
        font-size: 12px;
        line-height: 20px;
        letter-spacing: 0.02em;
    }

    .product-card__stat {
        font-weight: normal;
        font-size: 12px;
        line-height: 20px;
        letter-spacing: 0.02em;
        display: flex;
        color: #6f6f85;
        justify-content: space-between;
    }

    .product-card__stat-name {
        display: flex;
        flex-direction: row;
        align-items: center;
    }

    .product-card__stat-value {
        text-align: right;
    }

    .product-card__stat {
        font-weight: normal;
        font-size: 12px;
        line-height: 20px;
        letter-spacing: 0.02em;
        display: flex;
        color: #6f6f85;
        justify-content: space-between;
    }

    .product-card__stat-name {
        display: flex;
        flex-direction: row;
        align-items: center;
    }

    .product-card__stat-value {
        text-align: right;
    }

    .product-card .product-card-actions {
        opacity: 0;
        filter: alpha(opacity=0);
        transition: height 0.2s, margin 0.3s, opacity 0.4s;
        overflow: hidden;
        height: 0;
        margin-top: 0;
    }

    .btn.btn-block {
        width: 100%;
        justify-content: center;
    }

    .btn-primary {
        color: #fff;
        background-color: #525bff;
        background-image: none;
        outline: none;
    }

    .btn {
        font-weight: 600;
        font-size: 12px;
        line-height: 20px;
        letter-spacing: -0.02em;
        text-transform: uppercase;
        -webkit-text-decoration-line: none;
        text-decoration-line: none;
        transition: background-color 0.2s ease-in-out;
        padding: 6px 12px;
        position: relative;
        display: inline-flex;
        align-items: center;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        cursor: pointer;
        -webkit-user-select: none;
        user-select: none;
        border: 0;
        border-radius: 3px;
    }

    .btn .btn-title {
        overflow: hidden;
        text-overflow: ellipsis;
        max-width: 250px;
        padding-left: 4px;
        padding-right: 4px;
    }

    .product-collection-carousel__product-cards {
        width: 100%;
    }

    .product-collection-carousel__product-cards>ul {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        padding: 0;
        list-style: none;
        margin: -12px;
    }

    .product-collection-carousel__product-cards>ul>li {
        min-width: 200px;
        flex: 1;
        margin: 12px;
        max-width: 270px;
    }
    </style>

    <style>
    .product-search-landing__featured-categories {
        margin-left: 135px;
        width: 80%;
    }

    .featured-categories .panel-body {
        padding: 0 !important;
        overflow: visible !important;
        margin: 0 -1px -1px 0;
    }

    .featured-categories ul.categories-list {
        margin: 0;
        padding: 0;
        list-style: none;
        display: flex;
        flex-wrap: wrap;
    }

    .featured-categories li.featured {
        flex: 1 1 200px;
        justify-content: center;
        border-right: 1px solid #e5e5ec;
        border-bottom: 1px solid #e5e5ec;
        transition: all 100ms linear;
    }

    .featured-categories .featured {
        display: flex;
    }

    .featured-categories .featured button {
        color: #62628d;
        background-color: rgba(0, 0, 0, 0);
        background-image: none;
        outline: none;
        width: 100%;
        margin: 0;
        white-space: pre-wrap;
        border-radius: 0;
        color: #272742;
        text-align: left;
        display: flex;
        align-items: center;
        padding: 12px 24px;
    }

    .featured-categories .featured button>svg {
        flex: 0 1 40px;
    }

    .featured-categories .featured button svg {
        fill: #62628d;
    }

    .btn svg {
        display: block;
    }

    svg:not(:root) {
        overflow: hidden;
    }

    .icon-lg {
        height: 40px;
        width: 40px;
    }


    .featured-categories .featured button svg {
        fill: #62628d;
    }

    .featured-categories .featured button {
        color: #62628d;
        background-color: rgba(0, 0, 0, 0);
        background-image: none;
        outline: none;
        width: 100%;
        margin: 0;
        white-space: pre-wrap;
        border-radius: 0;
        color: #272742;
        text-align: left;
        display: flex;
        align-items: center;
        padding: 12px 24px;
    }

    .btn-primary:active,
    .btn-primary.active {
        color: #fff;
        background-color: #160092;
    }

    .btn {
        font-weight: 600;
        font-size: 12px;
        line-height: 20px;
        letter-spacing: -0.02em;
        text-transform: uppercase;
        -webkit-text-decoration-line: none;
        text-decoration-line: none;
        transition: background-color 0.2s ease-in-out;
        padding: 6px 12px;
        position: relative;
        display: inline-flex;
        align-items: center;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        cursor: pointer;
        -webkit-user-select: none;
        user-select: none;
        border: 0;
        border-radius: 3px;
    }

    .featured-categories .featured button span {
        flex: 3;
        display: flex;
        margin-left: 8px;
    }

    .featured-categories__title {
        font-weight: 600;
        font-size: 14px;
        line-height: 20px;
        color: #272742;
        text-transform: none;
    }

    .page-layout__body {
        flex: 1;
        display: flex;
        flex-direction: row;
        padding: 0 32px;
        max-width: 100%;
    }

    .page-layout__body-content {
        flex: 7;
        max-width: 100%;
    }


    .icon {
        width: 40px;
        height: 40px;
    }

    /*     header */
    .page-layout__header {
        transition: padding 0.2s linear 0s;
        background: rgb(246, 246, 249);
        margin-bottom: 8px;
        padding: 8px 32px;
        position: sticky;
        z-index: 1050;
        top: 0px;
    }

    .explore .main-layout-header,
    .explore-search .main-layout-header,
    .product-sources .main-layout-header,
    .product-source-product .main-layout-header,
    .product-source-search .main-layout-header,
    .product-source-landing .main-layout-header {
        max-width: 100%;
        padding: 0px;
    }

    .main-layout-header {
        display: flex;
    }

    .main-layout-header__title {
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        display: flex;
        flex-direction: row;
        align-items: center;
        margin-right: 40px;
    }

    .main-layout-header__logo-wrapper {
        height: 28px;
        width: 28px;
        margin-right: 16px;
        display: flex;
        justify-content: center;
        align-items: center;
        box-shadow: rgba(0, 0, 0, 0.08) 0px 4px 8px 0px;
        transition: height 0.2s linear 0s, width 0.2s linear 0s;
    }

    .main-layout-header__logo {
        height: 28px;
        width: 28px;
        border-radius: 6px;
        transition: height 0.2s linear 0s, width 0.2s linear 0s;
    }

    .main-layout-header__middle {
        flex: 3 1 0%;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .product-searchbar {
        display: flex;
        flex-flow: row wrap;
        flex: 1 1 0%;
    }

    .product-searchbar .input-block {
        margin-bottom: 0px;
        flex: 1 1 0%;
    }

    .product-searchbar__input {
        width: 500px;
    }

    .input-block {
        position: relative;
        margin-bottom: 24px;
    }

    .input-field {
        position: relative;
        display: flex;
        align-items: center;
        border: 1px solid rgb(142, 142, 176);
        border-radius: 3px;
    }

    .product-searchbar .input-block.product-searchbar--has-icon input {
        padding-left: 40px;
    }

    .product-searchbar__addon-wrapper {
        display: inline-flex;
    }

    .product-searchbar .input-block .dropdown {
        height: 38px;
    }

    .popover {
        position: relative;
        display: inline-block;
    }

    .product-searchbar .input-block .dropdown__toggle {
        height: 100%;
        border-top-left-radius: 0px;
        border-bottom-left-radius: 0px;
        max-width: 200px;
    }

    .btn .btn-title {
        overflow: hidden;
        text-overflow: ellipsis;
        max-width: 250px;
        padding-left: 4px;
        padding-right: 4px;
    }

    .dropdown__title {
        display: flex;
    }

    .product-searchbar .input-block .dropdown__title>span {
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .popover-body-right {
        left: auto;
        right: 0px;

    }

    .dropdown ul.dropdown__list:not(:last-child) {
        border-bottom: 1px solid rgb(208, 208, 222);
    }

    .dropdown ul.dropdown__list {
        margin: 0px;
        padding: 8px 0px;
        text-align: left;
        list-style: none;
    }

    .dropdown ul.dropdown__list>li button.btn-basic {
        background-color: rgb(255, 255, 255);
        background-image: none;
        outline: none;
        font-family: Inter, sans-serif;
        font-style: normal;
        font-weight: normal;
        font-size: 14px;
        line-height: 20px;
        text-decoration-line: none;
        letter-spacing: normal;
        text-transform: initial;
        text-size-adjust: none;
        color: rgb(39, 39, 66);
        border-radius: 0px;
        padding: 4px 16px;
    }

    .dropdown ul.dropdown__list>li>button {
        justify-content: flex-start;
    }

    .btn .btn-title {
        overflow: hidden;
        text-overflow: ellipsis;
        max-width: 250px;
        padding-left: 4px;
        padding-right: 4px;
    }

    .dropdown ul.dropdown__list {
        margin: 0px;
        padding: 8px 0px;
        text-align: left;
        list-style: none;
    }

    .product-searchbar .input-block+button {
        margin-left: 8px;
    }

    .btn-lg {
        padding: 10px 16px;
    }

    .btn-primary {
        color: rgb(255, 255, 255);
        background-color: rgb(82, 91, 255);
        background-image: none;
        outline: none;
    }

    .explore .main-layout-header__actions,
    .explore-search .main-layout-header__actions,
    .product-sources .main-layout-header__actions,
    .product-source-product .main-layout-header__actions,
    .product-source-search .main-layout-header__actions,
    .product-source-landing .main-layout-header__actions {
        flex: 1 1 0%;
    }

    .main-layout-header__actions {
        white-space: nowrap;
        margin-left: 8px;
    }

    .input-field .form-control,
    .input-field input[type="text"],
    .input-field input[type="number"],
    .input-field input[type="tel"],
    .input-field input[type="email"],
    .input-field input[type="password"],
    .input-field input[type="search"],
    .input-field input[type="date"],
    .input-field textarea,
    .input-field select {
        flex: 1 1 auto;
        width: 1%;
        border: none !important;
    }

    .form-control,
    input[type="text"],
    input[type="number"],
    input[type="tel"],
    input[type="email"],
    input[type="password"],
    input[type="search"],
    input[type="date"],
    textarea,
    select {
        font-family: Inter, sans-serif;
        font-style: normal;
        font-weight: normal;
        font-size: 14px;
        line-height: 20px;
        text-decoration-line: none;
        letter-spacing: normal;
        text-transform: initial;
        text-size-adjust: none;
        color: rgb(39, 39, 66);
        border: 1px solid rgb(142, 142, 176);
        border-radius: 3px;
        padding: 9px 16px;
        background-color: rgb(255, 255, 255);
        width: 100%;
        appearance: none;
    }

    .open .popover-body {
        transform: translateY(0);
        opacity: 1;
        visibility: visible;
        pointer-events: all;
        overflow: auto;
        max-height: 70vh;
        max-width: 100vw;
    }

    .popover-body {
        position: absolute;
        z-index: 1000;
        top: 100%;
        min-width: 7rem;
        margin: 4px 0 0;
        background-color: #fff;
        border: 1px solid #d0d0de;
        border-radius: 3px;
        background-clip: padding-box;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.08);
        opacity: 0;
        transition: transform 150ms ease-in-out, opacity 120ms ease-in, visibility 150ms ease-in;
        visibility: hidden;
        pointer-events: none;
        transform: translateY(-8px);
    }

    #hovercolor:hover {
        background-color: #ededf2;

    }

    .hide {
        display: none;
    }

    .show {
        display: block;
    }

    /* End */
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        $(".btn-dropdown").click(function() {
            $(".popover-body").toggleClass("show");
        });
    });

    window.onclick = function(e) {
        if ($(".popover-body").hasClass("show")) {
            $(".popover-body").removeClass(["show"]);
        }
    }
    </script>
</head>

<body>
    <div class="main">
        <div>
            <div class="page-layout__header">
                <div class="main-layout-header">
                    <div class="main-layout-header__title">
                        <div class="main-layout-header__logo-wrapper"><img src="" class="main-layout-header__logo">
                        </div>
                        <!---->
                        <h2>Clickripple</h2>
                        <!---->
                    </div>
                    <div class="main-layout-header__middle">
                        <div class="main-layout-header__content">
                            <form class="product-searchbar">
                                <div class="input-block product-searchbar__input product-searchbar--has-icon"
                                    id="keywords" placeholder="Search products" type="search" value="">
                                    <div class="input-field input-field--no-value input-group"
                                        placeholder="Search products">
                                        <!----> <input placeholder="Search products" id="keywords" type="search"
                                            class="form-control">
                                        <!---->
                                        <!---->
                                        <!---->
                                        <!---->
                                        <div class="product-searchbar__addon-wrapper">
                                            <!---->
                                            <div data-trekkie-id="dropdown"
                                                class="popover dropdown product-searchbar__dropdown open"><span
                                                    class="popover-wrapper"><button type="button"
                                                        class="dropdown__toggle btn btn-basic btn-regular btn-dropdown active "
                                                        tabindex="0">
                                                        <!---->
                                                        <!----> <span class="btn-title"><span class="dropdown__title">
                                                                <!----> <span>in All Categories</span>
                                                            </span></span> <span class="btn-icon-wrap"></span>
                                                    </button></span>
                                                <div class="popover-body popover-body-right hide" id="pop">
                                                    <ul class="dropdown__list">
                                                        <li tabindex="-1"><button type="button"
                                                                class="btn btn-basic btn-regular btn-block"
                                                                tabindex="0">
                                                                <!---->
                                                                <!----> <span class="btn-title"><span>All
                                                                        Categories</span></span>
                                                                <!---->
                                                            </button></li>
                                                    </ul>
                                                    <ul class="dropdown__list">
                                                        <li tabindex="-1"><button type="button"
                                                                class="btn btn-basic btn-regular btn-block"
                                                                id="hovercolor" tabindex="0">
                                                                <!---->
                                                                <!----> <span class="btn-title"><span>Sofa</span></span>
                                                                <!---->
                                                            </button></li>
                                                        <li tabindex="-1"><button type="button"
                                                                class="btn btn-basic btn-regular btn-block "
                                                                id="hovercolor" tabindex="0">
                                                                <!---->
                                                                <!----> <span
                                                                    class="btn-title"><span>Table</span></span>
                                                                <!---->
                                                            </button></li>
                                                        <li tabindex="-1"><button type="button"
                                                                class="btn btn-basic btn-regular btn-block"
                                                                id="hovercolor" tabindex="0">
                                                                <!---->
                                                                <!----> <span
                                                                    class="btn-title"><span>Chair</span></span>
                                                                <!---->
                                                            </button></li>
                                                        <li tabindex="-1"><button type="button"
                                                                class="btn btn-basic btn-regular btn-block"
                                                                id="hovercolor" tabindex="0">
                                                                <!---->
                                                                <!----> <span class="btn-title"><span>Bed</span></span>
                                                                <!---->
                                                            </button></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!---->
                                    <!---->
                                </div> <button type="button" class="btn btn-primary btn-lg">
                                    <!---->
                                    <!----> <span class="btn-title">
                                        Search
                                    </span>
                                    <!---->
                                </button>
                            </form>
                        </div>
                        <div class="main-layout-header__actions">
                            <!---->
                            <!---->
                        </div>
                    </div>

                </div>
            </div>

            <div class="page-layout__body-content">
                <div data-v-538e13d8="" class="notification-messages" slot="notification-messages">

                </div>
                <div>
                    <div>
                        <div class="product-search-landing" search-title="Search Products">
                            <div data-v-57b7f280=""
                                class="panel featured-categories product-search-landing__featured-categories">
                                <div data-v-57b7f280="" class="panel-body">
                                    <ul data-v-57b7f280="" class="categories-list">
                                        <li data-v-57b7f280="" class="featured">
                                            <button type="button" class="margin btn">
                                                <img class="icon" src="./images/cattable.png" />
                                                <span class="featured-categories__title">Table</span>
                                            </button>
                                        </li>
                                        <li data-v-57b7f280="" class="featured">
                                            <button data-v-57b7f280="" type="button" class="margin btn">
                                                <img class="icon" src="./images/cat bed.png" />
                                                <span class="featured-categories__title">Bed</span>
                                            </button>
                                        </li>
                                        <li data-v-57b7f280="" class="featured">
                                            <button data-v-57b7f280="" type="button" class="margin btn">
                                                <img class="icon" src="./images/cat sofa.png" />
                                                <span class="featured-categories__title">Sofa</span>
                                            </button>
                                        </li>

                                        <li data-v-57b7f280="" class="featured">
                                            <button data-v-57b7f280="" type="button" class="margin btn">
                                                <img class="icon" src="./images/cat chair.png" />
                                                <span class="featured-categories__title">Chair</span>
                                            </button>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div>

                                <header data-v-2246a06b="" class="product-collection-carousel__header">
                                    <h3 data-v-2246a06b="">Clickripple Select</h3>


                                </header>
                                <div class="carousel" data-flickity='{ "groupCells": true }'>

                                    <!-- <nav data-v-2246a06b="" class="product-collection-carousel__left-navigation">
                                            <svg data-v-2246a06b="" class="icon-lg">
                                                <use xlink:href="/images/icons.svg?v=2.10.3#icon-chevron-left"></use>
                                            </svg>
                                        </nav> -->



                                    <div data-v-2246a06b="" data-trekkie-id="product-card"
                                        class="product-card-wrapper carousel-cell" style="">
                                        <div class="panel expanding-panel product-card carousel-cell>">

                                            <div class="panel-header-with-image">

                                                <div class="product-card__anchor"><img src="./images/10.jpeg">
                                                </div>

                                                <div class="product-marked-corner"><svg
                                                        class="product-marked-corner__icon">
                                                        <use xlink:href="/images/icons.svg?v=2.10.3#icon-selected">
                                                        </use>
                                                    </svg></div>


                                            </div>
                                            <div class="panel-body">
                                                <div class="" style="max-height: none;">
                                                    <div supplier-texts="[object Object]" class="product-card__meta">
                                                        <div class="product-card-meta">
                                                            <div class="product-card-title"><a
                                                                    class="product-card-link">
                                                                    Twin Size Bed
                                                                </a>

                                                            </div>
                                                        </div>
                                                        <div class="product-price-wrapper">
                                                            <h4><span class="product-card-price">
                                                                    US $14.04
                                                                </span></h4>
                                                        </div> <span class="product-card-subtitle">
                                                            <div>
                                                                <div class="product-shipping-info">
                                                                    Choose shipping country
                                                                </div>


                                                            </div>
                                                        </span>
                                                        <div>
                                                            <div class="product-card__reviews"><label
                                                                    class="product-card__reviews-count">No
                                                                    reviews</label></div>
                                                            <div class="product-card__stat">
                                                                <div class="product-card__stat-name">
                                                                    Imports
                                                                </div>
                                                                <div class="product-card__stat-value">
                                                                    770
                                                                </div>
                                                            </div>
                                                            <div class="product-card__stat">
                                                                <div class="product-card__stat-name">
                                                                    Orders
                                                                </div>
                                                                <div class="product-card__stat-value">
                                                                    0
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div data-trekkie-id="product-card:add-to-import-list"
                                                        class="product-card-actions">
                                                        <button type="button"
                                                            class="btn btn-primary btn-regular btn-block"
                                                            data-trekkie-id="">


                                                            Add to Import List


                                                        </button>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                    <div data-v-2246a06b="" data-trekkie-id="product-card"
                                        class="product-card-wrapper carousel-cell" style="">
                                        <div class="panel expanding-panel product-card">

                                            <div class="panel-header-with-image">

                                                <div class="product-card__anchor"><img src="./images/diningchair.jpg">
                                                </div>

                                                <div class="product-marked-corner"><svg
                                                        class="product-marked-corner__icon">
                                                        <use xlink:href="/images/icons.svg?v=2.10.3#icon-selected">
                                                        </use>
                                                    </svg></div>
                                                <div class="product-in-shop-corner-wrapper"
                                                    aria-describedby="tooltip_9qw8pdi5h5">
                                                    <div class="product-in-shop-corner"><svg
                                                            class="product-in-shop-corner__icon">
                                                            <use
                                                                xlink:href="/images/icons.svg?v=2.10.3#icon-sidebar-store">
                                                            </use>
                                                        </svg></div>
                                                </div>

                                                <div class="tooltip" role="tooltip" id="tooltip_9qw8pdi5h5"
                                                    aria-hidden="true" x-placement="top"
                                                    style="position: absolute; transform: translate3d(179px, -38px, 0px); top: 0px; left: 0px; will-change: transform; visibility: hidden;">
                                                    <div class="tooltip-arrow" style="left: 45px;">
                                                    </div>
                                                    <div class="tooltip-inner">Imported to store</div>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <div class="" style="max-height: none;">
                                                    <div supplier-texts="[object Object]" class="product-card__meta">
                                                        <div class="product-card-meta">
                                                            <div class="product-card-title"><a
                                                                    class="product-card-link">
                                                                    Dining Chair
                                                                </a>

                                                            </div>
                                                        </div>
                                                        <div class="product-price-wrapper">
                                                            <h4><span class="product-card-price">
                                                                    US $10.86
                                                                </span></h4>
                                                        </div> <span class="product-card-subtitle">
                                                            <div>
                                                                <div class="product-shipping-info">
                                                                    Choose shipping country
                                                                </div>


                                                            </div>
                                                        </span>
                                                        <div>
                                                            <div class="product-card__reviews"><label
                                                                    class="product-card__reviews-count">No
                                                                    reviews</label></div>
                                                            <div class="product-card__stat">
                                                                <div class="product-card__stat-name">
                                                                    Imports
                                                                </div>
                                                                <div class="product-card__stat-value">
                                                                    369
                                                                </div>
                                                            </div>
                                                            <div class="product-card__stat">
                                                                <div class="product-card__stat-name">
                                                                    Orders
                                                                </div>
                                                                <div class="product-card__stat-value">
                                                                    1
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div data-trekkie-id="product-card:add-to-import-list"
                                                        class="product-card-actions"><button type="button"
                                                            class="btn btn-primary btn-regular btn-block"
                                                            data-trekkie-id="">

                                                            Add to Import List


                                                        </button></div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                    <div data-v-2246a06b="" data-trekkie-id="product-card"
                                        class="product-card-wrapper carousel-cell" style="">
                                        <div class="panel expanding-panel product-card">

                                            <div class="panel-header-with-image">

                                                <div class="product-card__anchor"><img src="./images/image1.jpg">
                                                </div>

                                                <div class="product-marked-corner"><svg
                                                        class="product-marked-corner__icon">
                                                        <use xlink:href="/images/icons.svg?v=2.10.3#icon-selected">
                                                        </use>
                                                    </svg></div>
                                                <div class="product-in-shop-corner-wrapper"
                                                    aria-describedby="tooltip_9qw8pdi5h5">
                                                    <div class="product-in-shop-corner"><svg
                                                            class="product-in-shop-corner__icon">
                                                            <use
                                                                xlink:href="/images/icons.svg?v=2.10.3#icon-sidebar-store">
                                                            </use>
                                                        </svg></div>
                                                </div>

                                                <div class="tooltip" role="tooltip" id="tooltip_9qw8pdi5h5"
                                                    aria-hidden="true" x-placement="top"
                                                    style="position: absolute; transform: translate3d(179px, -38px, 0px); top: 0px; left: 0px; will-change: transform; visibility: hidden;">
                                                    <div class="tooltip-arrow" style="left: 45px;">
                                                    </div>
                                                    <div class="tooltip-inner">Imported to store</div>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <div class="" style="max-height: none;">
                                                    <div supplier-texts="[object Object]" class="product-card__meta">
                                                        <div class="product-card-meta">
                                                            <div class="product-card-title"><a
                                                                    class="product-card-link">
                                                                    Small Sofa
                                                                </a>

                                                            </div>
                                                        </div>
                                                        <div class="product-price-wrapper">
                                                            <h4><span class="product-card-price">
                                                                    US $10.86
                                                                </span></h4>
                                                        </div> <span class="product-card-subtitle">
                                                            <div>
                                                                <div class="product-shipping-info">
                                                                    Choose shipping country
                                                                </div>


                                                            </div>
                                                        </span>
                                                        <div>
                                                            <div class="product-card__reviews"><label
                                                                    class="product-card__reviews-count">No
                                                                    reviews</label></div>
                                                            <div class="product-card__stat">
                                                                <div class="product-card__stat-name">
                                                                    Imports
                                                                </div>
                                                                <div class="product-card__stat-value">
                                                                    369
                                                                </div>
                                                            </div>
                                                            <div class="product-card__stat">
                                                                <div class="product-card__stat-name">
                                                                    Orders
                                                                </div>
                                                                <div class="product-card__stat-value">
                                                                    1
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div data-trekkie-id="product-card:add-to-import-list"
                                                        class="product-card-actions"><button type="button"
                                                            class="btn btn-primary btn-regular btn-block"
                                                            data-trekkie-id="">

                                                            Add to Import List

                                                        </button></div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                    <div data-v-2246a06b="" data-trekkie-id="product-card"
                                        class="product-card-wrapper carousel-cell" style="">
                                        <div class="panel expanding-panel product-card">

                                            <div class="panel-header-with-image">

                                                <div class="product-card__anchor"><img src="./images/doublebed.jpeg">
                                                </div>

                                                <div class="product-marked-corner"><svg
                                                        class="product-marked-corner__icon">
                                                        <use xlink:href="/images/icons.svg?v=2.10.3#icon-selected">
                                                        </use>
                                                    </svg></div>


                                            </div>
                                            <div class="panel-body">
                                                <div class="" style="max-height: none;">
                                                    <div supplier-texts="[object Object]" class="product-card__meta">
                                                        <div class="product-card-meta">
                                                            <div class="product-card-title"><a
                                                                    class="product-card-link">
                                                                    Double Size bed
                                                                </a>

                                                            </div>
                                                        </div>
                                                        <div class="product-price-wrapper">
                                                            <h4><span class="product-card-price">
                                                                    US $8.91 - $12.6
                                                                </span></h4>
                                                        </div> <span class="product-card-subtitle">
                                                            <div>
                                                                <div class="product-shipping-info">
                                                                    Choose shipping country
                                                                </div>


                                                            </div>
                                                        </span>
                                                        <div>
                                                            <div class="product-card__reviews"><label
                                                                    class="product-card__reviews-count">No
                                                                    reviews</label></div>
                                                            <div class="product-card__stat">
                                                                <div class="product-card__stat-name">
                                                                    Imports
                                                                </div>
                                                                <div class="product-card__stat-value">
                                                                    233
                                                                </div>
                                                            </div>
                                                            <div class="product-card__stat">
                                                                <div class="product-card__stat-name">
                                                                    Orders
                                                                </div>
                                                                <div class="product-card__stat-value">
                                                                    0
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div data-trekkie-id="product-card:add-to-import-list"
                                                        class="product-card-actions"><button type="button"
                                                            class="btn btn-primary btn-regular btn-block"
                                                            data-trekkie-id="">
                                                            <span class="btn-icon-wrap"></span> <span class="btn-title">
                                                                Add to Import List
                                                            </span>

                                                        </button></div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                    <div data-v-2246a06b="" data-trekkie-id="product-card"
                                        class="product-card-wrapper carousel-cell">
                                        <div class="panel expanding-panel product-card">

                                            <div class="panel-header-with-image">

                                                <div class="product-card__anchor"><img src="./images/queen.jpg">
                                                </div>

                                                <div class="product-marked-corner"><svg
                                                        class="product-marked-corner__icon">
                                                        <use xlink:href="/images/icons.svg?v=2.10.3#icon-selected">
                                                        </use>
                                                    </svg></div>


                                            </div>
                                            <div class="panel-body">
                                                <div class="" style="max-height: none;">
                                                    <div supplier-texts="[object Object]" class="product-card__meta">
                                                        <div class="product-card-meta">
                                                            <div class="product-card-title"><a
                                                                    class="product-card-link">
                                                                    Queen Bed
                                                                </a>

                                                            </div>
                                                        </div>
                                                        <div class="product-price-wrapper">
                                                            <h4><span class="product-card-price">
                                                                    US $12.19
                                                                </span></h4>
                                                        </div> <span class="product-card-subtitle">
                                                            <div>
                                                                <div class="product-shipping-info">
                                                                    Choose shipping country
                                                                </div>


                                                            </div>
                                                        </span>
                                                        <div>
                                                            <div class="product-card__reviews"><label
                                                                    class="product-card__reviews-count">No
                                                                    reviews</label></div>
                                                            <div class="product-card__stat">
                                                                <div class="product-card__stat-name">
                                                                    Imports
                                                                </div>
                                                                <div class="product-card__stat-value">
                                                                    270
                                                                </div>
                                                            </div>
                                                            <div class="product-card__stat">
                                                                <div class="product-card__stat-name">
                                                                    Orders
                                                                </div>
                                                                <div class="product-card__stat-value">
                                                                    1
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div data-trekkie-id="product-card:add-to-import-list"
                                                        class="product-card-actions"><button type="button"
                                                            class="btn btn-primary btn-regular btn-block"
                                                            data-trekkie-id="">
                                                            <span class="btn-icon-wrap"></span> <span class="btn-title">
                                                                Add to Import List
                                                            </span>

                                                        </button></div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>



                                    <nav data-v-2246a06b="" class="product-collection-carousel__right-navigation">
                                        <svg data-v-2246a06b="" class="icon-lg">
                                            <use xlink:href="/images/icons.svg?v=2.10.3#icon-chevron-right"></use>
                                        </svg>
                                    </nav>

                                </div>



                                <!-- <div data-v-2246a06b="" class="product-collection-carousel"
                                data-trekkie-collection="product-group:27">
                                <header data-v-2246a06b="" class="product-collection-carousel__header">
                                    <h3 data-v-2246a06b="">Product Watch</h3>
                                    
                                </header>
                                <div data-v-2246a06b="" class="product-collection-carousel__carousel">
                                    <nav data-v-2246a06b="" class="product-collection-carousel__left-navigation">
                                        <svg data-v-2246a06b="" class="icon-lg">
                                            <use xlink:href="/images/icons.svg?v=2.10.3#icon-chevron-left"></use>
                                        </svg>
                                    </nav>
                                    <div data-v-2246a06b="" class="product-collection-carousel__product-cards">
                                        <ul data-v-2246a06b="">
                                            <li data-v-2246a06b="">
                                                <div data-v-2246a06b="" data-trekkie-id="product-card"
                                                    class="product-card-wrapper">
                                                    <div class="panel expanding-panel product-card">
                                                        
                                                        <div class="panel-header-with-image">
                                                            
                                                            <div class="product-card__anchor"><img
                                                                    src="https://ae01.alicdn.com/kf/HLB1uYQvbnjxK1Rjy0Fnq6yBaFXaV/Folding-Pet-Dog-Carrier-Pad-Waterproof-Dog-Seat-Bag-Basket-Safe-Carry-House-Cat-Puppy-Bag.jpg">
                                                            </div>
                                                            
                                                            <div class="product-marked-corner"><svg
                                                                    class="product-marked-corner__icon">
                                                                    <use
                                                                        xlink:href="/images/icons.svg?v=2.10.3#icon-selected">
                                                                    </use>
                                                                </svg></div>
                                                            
                                                            <div class="discount-notice"><span class="old-price">US
                                                                    $5.73 - $15.96</span> <span class="new-discount">
                                                                    29% off
                                                                </span></div>
                                                        </div>
                                                        <div class="panel-body">
                                                            <div class="" style="max-height: none;">
                                                                <div supplier-texts="[object Object]"
                                                                    class="product-card__meta">
                                                                    <div class="product-card-meta">
                                                                        <div class="product-card-title"><a
                                                                                class="product-card-link">
                                                                                Folding Pet Dog Carrier Pad
                                                                                Waterproof
                                                                                Dog Seat Bag Basket Safe Carry House
                                                                                Cat
                                                                                Puppy Bag Dog Car Seat Pet Products
                                                                            </a>
                                                                            
                        </div>
                    </div>
                    <div class="product-price-wrapper">
                        <h4><span class="product-card-price">
                                US $4.07 - $11.33
                            </span></h4>
                    </div> <span class="product-card-subtitle">
                        <div>
                            <div class="product-shipping-info">
                                Choose shipping country
                            </div>
                            
                        </div>
                        </span>
                        <div>
                            <div class="product-card__reviews">
                                <div><svg class="icon-star">
                                        <use xlink:href="/images/icons.svg?v=2.10.3#icon-star">
                                        </use>
                                    </svg><svg class="icon-star">
                                        <use xlink:href="/images/icons.svg?v=2.10.3#icon-star">
                                        </use>
                                    </svg><svg class="icon-star">
                                        <use xlink:href="/images/icons.svg?v=2.10.3#icon-star">
                                        </use>
                                    </svg><svg class="icon-star">
                                        <use xlink:href="/images/icons.svg?v=2.10.3#icon-star">
                                        </use>
                                    </svg><svg class="icon-star">
                                        <use xlink:href="/images/icons.svg?v=2.10.3#icon-star">
                                        </use>
                                    </svg></div> <label class="product-card__reviews-count">(112)</label>
                            </div>
                            <div class="product-card__stat">
                                <div class="product-card__stat-name">
                                    Imports
                                </div>
                                <div class="product-card__stat-value">
                                    826
                                </div>
                            </div>
                            <div class="product-card__stat">
                                <div class="product-card__stat-name">
                                    Orders
                                </div>
                                <div class="product-card__stat-value">
                                    403
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-trekkie-id="product-card:add-to-import-list" class="product-card-actions"><button
                            type="button" class="btn btn-primary btn-regular btn-block" data-trekkie-id="" id="button">
                             <span class="btn-icon-wrap"><svg class="icon-base">
                                    <use xlink:href="/images/icons.svg?v=2.10.3#icon-add">
                                    </use>
                                </svg></span> <span class="btn-title">
                                Add to Import List
                            </span>
                            
                            </button>
                        </div>
                    </div>
                    
                        </div>
                        
                    </div>
                </div>
                </li>
                <li data-v-2246a06b="">
                    <div data-v-2246a06b="" data-trekkie-id="product-card" class="product-card-wrapper">
                        <div class="panel expanding-panel product-card">
                            
                            <div class="panel-header-with-image">
                                
                                <div class="product-card__anchor"><img
                                        src="https://ae01.alicdn.com/kf/HLB1geJrR4TpK1RjSZR0q6zEwXXaM/Imwete-Anti-Blue-Light-Computer-Glasses-Frame-Men-Women-Transparent-Gaming-Glasses-Frames-Protection-Eye-Retro.jpg">
                                </div>
                                
                                <div class="product-marked-corner"><svg class="product-marked-corner__icon">
                                        <use xlink:href="/images/icons.svg?v=2.10.3#icon-selected">
                                        </use>
                                    </svg></div>
                                
                                <div class="discount-notice"><span class="old-price">US
                                        $4.4</span> <span class="new-discount">
                                        40% off
                                    </span></div>
                            </div>
                            <div class="panel-body">
                                <div class="" style="max-height: none;">
                                    <div supplier-texts="[object Object]" class="product-card__meta">
                                        <div class="product-card-meta">
                                            <div class="product-card-title"><a class="product-card-link">
                                                    Imwete Anti Blue Light Computer
                                                    Glasses
                                                    Frame Men Women Transparent Gaming
                                                    Glasses Frames Protection Eye Retro
                                                    Spectacles Frames
                                                </a>
                                                
                                            </div>
                                        </div>
                                        <div class="product-price-wrapper">
                                            <h4><span class="product-card-price">
                                                    US $2.64
                                                </span></h4>
                                        </div> <span class="product-card-subtitle">
                                            <div>
                                                <div class="product-shipping-info">
                                                    Choose shipping country
                                                </div>
                                                
                                                
                                            </div>
                                        </span>
                                        <div>
                                            <div class="product-card__reviews">
                                                <div><svg class="icon-star">
                                                        <use xlink:href="/images/icons.svg?v=2.10.3#icon-star">
                                                        </use>
                                                    </svg><svg class="icon-star">
                                                        <use xlink:href="/images/icons.svg?v=2.10.3#icon-star">
                                                        </use>
                                                    </svg><svg class="icon-star">
                                                        <use xlink:href="/images/icons.svg?v=2.10.3#icon-star">
                                                        </use>
                                                    </svg><svg class="icon-star">
                                                        <use xlink:href="/images/icons.svg?v=2.10.3#icon-star">
                                                        </use>
                                                    </svg><svg class="icon-star">
                                                        <use xlink:href="/images/icons.svg?v=2.10.3#icon-star">
                                                        </use>
                                                    </svg></div> <label class="product-card__reviews-count">(6)</label>
                                            </div>
                                            <div class="product-card__stat">
                                                <div class="product-card__stat-name">
                                                    Imports
                                                </div>
                                                <div class="product-card__stat-value">
                                                    1081
                                                </div>
                                            </div>
                                            <div class="product-card__stat">
                                                <div class="product-card__stat-name">
                                                    Orders
                                                </div>
                                                <div class="product-card__stat-value">
                                                    20
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-trekkie-id="product-card:add-to-import-list" class="product-card-actions">
                                        <button type="button" class="btn btn-primary btn-regular btn-block"
                                            data-trekkie-id="">
                                             <span class="btn-icon-wrap"><svg class="icon-base">
                                                    <use xlink:href="/images/icons.svg?v=2.10.3#icon-add">
                                                    </use>
                                                </svg></span> <span class="btn-title">
                                                Add to Import List
                                            </span>
                                            
                                        </button>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                    </li>
                    <li data-v-2246a06b="">
                        <div data-v-2246a06b="" data-trekkie-id="product-card" class="product-card-wrapper">
                            <div class="panel expanding-panel product-card">
                                
                                <div class="panel-header-with-image">
                                    
                                    <div class="product-card__anchor"><img
                                            src="https://ae01.alicdn.com/kf/HTB1OMCrU5rpK1RjSZFhq6xSdXXaf/Night-Light-Home-Decoration-Bonsai-Style-Party-Cherry-Tree-Shape-LED-Light-DIY-Firework-Christmas-Gift.jpg">
                                    </div>
                                    
                                    <div class="product-marked-corner"><svg class="product-marked-corner__icon">
                                            <use xlink:href="/images/icons.svg?v=2.10.3#icon-selected">
                                            </use>
                                        </svg></div>
                                    
                                    <div class="discount-notice"><span class="old-price">US
                                            $17.86 - $31.79</span> <span class="new-discount">
                                            48% off
                                        </span></div>
                                </div>
                                <div class="panel-body">
                                    <div class="" style="max-height: none;">
                                        <div supplier-texts="[object Object]" class="product-card__meta">
                                            <div class="product-card-meta">
                                                <div class="product-card-title"><a class="product-card-link">
                                                        Night Light Home Decoration Bonsai
                                                        Style
                                                        Party Cherry Tree Shape LED Light
                                                        DIY
                                                        Firework Christmas Gift Plants
                                                        Switch
                                                        Copper
                                                    </a>
                                                    
                                                </div>
                                            </div>
                                            <div class="product-price-wrapper">
                                                <h4><span class="product-card-price">
                                                        US $9.29 - $16.53
                                                    </span></h4>
                                            </div> <span class="product-card-subtitle">
                                                <div>
                                                    <div class="product-shipping-info">
                                                        Choose shipping country
                                                    </div>
                                                    
                                                    
                                                </div>
                                            </span>
                                            <div>
                                                <div class="product-card__reviews">
                                                    <div><svg class="icon-star">
                                                            <use xlink:href="/images/icons.svg?v=2.10.3#icon-star">
                                                            </use>
                                                        </svg><svg class="icon-star">
                                                            <use xlink:href="/images/icons.svg?v=2.10.3#icon-star">
                                                            </use>
                                                        </svg><svg class="icon-star">
                                                            <use xlink:href="/images/icons.svg?v=2.10.3#icon-star">
                                                            </use>
                                                        </svg><svg class="icon-star">
                                                            <use xlink:href="/images/icons.svg?v=2.10.3#icon-star">
                                                            </use>
                                                        </svg><svg class="icon-star">
                                                            <use xlink:href="/images/icons.svg?v=2.10.3#icon-star">
                                                            </use>
                                                        </svg></div> <label
                                                        class="product-card__reviews-count">(10)</label>
                                                </div>
                                                <div class="product-card__stat">
                                                    <div class="product-card__stat-name">
                                                        Imports
                                                    </div>
                                                    <div class="product-card__stat-value">
                                                        1038
                                                    </div>
                                                </div>
                                                <div class="product-card__stat">
                                                    <div class="product-card__stat-name">
                                                        Orders
                                                    </div>
                                                    <div class="product-card__stat-value">
                                                        52
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-trekkie-id="product-card:add-to-import-list"
                                            class="product-card-actions">
                                            <button type="button" class="btn btn-primary btn-regular btn-block"
                                                data-trekkie-id="">
                                                 <span class="btn-icon-wrap"><svg class="icon-base">
                                                        <use xlink:href="/images/icons.svg?v=2.10.3#icon-add">
                                                        </use>
                                                    </svg></span> <span class="btn-title">
                                                    Add to Import List
                                                </span>
                                                
                                            </button>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </li>
                    <li data-v-2246a06b="">
                        <div data-v-2246a06b="" data-trekkie-id="product-card" class="product-card-wrapper">
                            <div class="panel expanding-panel product-card">
                                
                                <div class="panel-header-with-image">
                                    
                                    <div class="product-card__anchor"><img
                                            src="https://ae01.alicdn.com/kf/HTB1x46Je21G3KVjSZFkq6yK4XXac/Chef-Decoration-Pencil-Anti-slip-Accessories-Draw-Tools-Stainless-Steel-Portable-Mini-Sauce-Painting-Coffee-Spoon.jpg">
                                    </div>
                                    
                                    <div class="product-marked-corner"><svg class="product-marked-corner__icon">
                                            <use xlink:href="/images/icons.svg?v=2.10.3#icon-selected">
                                            </use>
                                        </svg></div>
                                    
                                    <div class="discount-notice"><span class="old-price">US
                                            $2.09 - $3.41</span> <span class="new-discount">
                                            17% off
                                        </span></div>
                                </div>
                                <div class="panel-body">
                                    <div class="" style="max-height: none;">
                                        <div supplier-texts="[object Object]" class="product-card__meta">
                                            <div class="product-card-meta">
                                                <div class="product-card-title"><a class="product-card-link">
                                                        Chef Decoration Pencil Anti-slip
                                                        Accessories Draw Tools Stainless
                                                        Steel
                                                        Portable Mini Sauce Painting Coffee
                                                        Spoon Kitchen Home
                                                    </a>
                                                    
                                                </div>
                                            </div>
                                            <div class="product-price-wrapper">
                                                <h4><span class="product-card-price">
                                                        US $1.73 - $2.83
                                                    </span></h4>
                                            </div> <span class="product-card-subtitle">
                                                <div>
                                                    <div class="product-shipping-info">
                                                        Choose shipping country
                                                    </div>
                                                    
                                                    
                                                </div>
                                            </span>
                                            <div>
                                                <div class="product-card__reviews">
                                                    <div><svg class="icon-star">
                                                            <use xlink:href="/images/icons.svg?v=2.10.3#icon-star">
                                                            </use>
                                                        </svg><svg class="icon-star">
                                                            <use xlink:href="/images/icons.svg?v=2.10.3#icon-star">
                                                            </use>
                                                        </svg><svg class="icon-star">
                                                            <use xlink:href="/images/icons.svg?v=2.10.3#icon-star">
                                                            </use>
                                                        </svg><svg class="icon-star">
                                                            <use xlink:href="/images/icons.svg?v=2.10.3#icon-star">
                                                            </use>
                                                        </svg><svg class="icon-star">
                                                            <use xlink:href="/images/icons.svg?v=2.10.3#icon-star">
                                                            </use>
                                                        </svg></div> <label
                                                        class="product-card__reviews-count">(103)</label>
                                                </div>
                                                <div class="product-card__stat">
                                                    <div class="product-card__stat-name">
                                                        Imports
                                                    </div>
                                                    <div class="product-card__stat-value">
                                                        842
                                                    </div>
                                                </div>
                                                <div class="product-card__stat">
                                                    <div class="product-card__stat-name">
                                                        Orders
                                                    </div>
                                                    <div class="product-card__stat-value">
                                                        1613
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-trekkie-id="product-card:add-to-import-list"
                                            class="product-card-actions">
                                            <button type="button" class="btn btn-primary btn-regular btn-block"
                                                data-trekkie-id="">
                                                 <span class="btn-icon-wrap"><svg class="icon-base">
                                                        <use xlink:href="/images/icons.svg?v=2.10.3#icon-add">
                                                        </use>
                                                    </svg></span> <span class="btn-title">
                                                    Add to Import List
                                                </span>
                                                
                                            </button>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </li>
                    </ul>
                </div>
                <nav data-v-2246a06b="" class="product-collection-carousel__right-navigation">
                    <svg data-v-2246a06b="" class="icon-lg">
                        <use xlink:href="/images/icons.svg?v=2.10.3#icon-chevron-right"></use>
                    </svg>
                </nav>
            </div>
            
        </div> -->
                                <!-- <div data-v-2246a06b="" class="product-collection-carousel"
                                data-trekkie-collection="product-group:29">
                                <header data-v-2246a06b="" class="product-collection-carousel__header">
                                    <h3 data-v-2246a06b="">As Featured on YouTube</h3>


                                </header>
                                <div data-v-2246a06b="" class="product-collection-carousel__carousel">
                                    <nav data-v-2246a06b="" class="product-collection-carousel__left-navigation">
                                        <svg data-v-2246a06b="" class="icon-lg">
                                            <use xlink:href="/images/icons.svg?v=2.10.3#icon-chevron-left"></use>
                                        </svg>
                                    </nav>
                                    <div data-v-2246a06b="" class="product-collection-carousel__product-cards">
                                        <ul data-v-2246a06b="">
                                            <li data-v-2246a06b="">
                                                <div data-v-2246a06b="" data-trekkie-id="product-card"
                                                    class="product-card-wrapper">
                                                    <div class="panel expanding-panel product-card">

                                                        <div class="panel-header-with-image">

                                                            <div class="product-card__anchor"><img
                                                                    src="https://ae01.alicdn.com/kf/HTB14.JJXx2rK1RkSnhJq6ykdpXaU/DIDABEAR-Brand-Canvas-Tote-Bag-Women-Handbags-Female-Designer-Large-Capacity-Leisure-Shoulder-Bags-Big-Travel.jpg">
                                                            </div>

                                                            <div class="product-marked-corner"><svg
                                                                    class="product-marked-corner__icon">
                                                                    <use
                                                                        xlink:href="/images/icons.svg?v=2.10.3#icon-selected">
                                                                    </use>
                                                                </svg></div>

                                                            <div class="discount-notice"><span class="old-price">US
                                                                    $31</span> <span class="new-discount">
                                                                    52% off
                                                                </span></div>
                                                        </div>
                                                        <div class="panel-body">
                                                            <div class="" style="max-height: none;">
                                                                <div supplier-texts="[object Object]"
                                                                    class="product-card__meta">
                                                                    <div class="product-card-meta">
                                                                        <div class="product-card-title"><a
                                                                                class="product-card-link">
                                                                                DIDABEAR Brand Canvas Tote Bag Women
                                                                                Handbags Female Designer Large
                                                                                Capacity
                                                                                Leisure Shoulder Bags Big Travel
                                                                                Bags
                                                                                Bolsas
                                                                            </a>

                                                                        </div>
                                                                    </div>
                                                                    <div class="product-price-wrapper">
                                                                        <h4><span class="product-card-price">
                                                                                US $14.88
                                                                            </span></h4>
                                                                    </div> <span class="product-card-subtitle">
                                                                        <div>
                                                                            <div class="product-shipping-info">
                                                                                Choose shipping country
                                                                            </div>


                                                                        </div>
                                                                    </span>
                                                                    <div>
                                                                        <div class="product-card__reviews">
                                                                            <div><svg class="icon-star">
                                                                                    <use
                                                                                        xlink:href="/images/icons.svg?v=2.10.3#icon-star">
                                                                                    </use>
                                                                                </svg><svg class="icon-star">
                                                                                    <use
                                                                                        xlink:href="/images/icons.svg?v=2.10.3#icon-star">
                                                                                    </use>
                                                                                </svg><svg class="icon-star">
                                                                                    <use
                                                                                        xlink:href="/images/icons.svg?v=2.10.3#icon-star">
                                                                                    </use>
                                                                                </svg><svg class="icon-star">
                                                                                    <use
                                                                                        xlink:href="/images/icons.svg?v=2.10.3#icon-star">
                                                                                    </use>
                                                                                </svg><svg class="icon-star">
                                                                                    <use
                                                                                        xlink:href="/images/icons.svg?v=2.10.3#icon-star">
                                                                                    </use>
                                                                                </svg></div> <label
                                                                                class="product-card__reviews-count">(122)</label>
                                                                        </div>
                                                                        <div class="product-card__stat">
                                                                            <div class="product-card__stat-name">
                                                                                Imports
                                                                            </div>
                                                                            <div class="product-card__stat-value">
                                                                                693
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-card__stat">
                                                                            <div class="product-card__stat-name">
                                                                                Orders
                                                                            </div>
                                                                            <div class="product-card__stat-value">
                                                                                755
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div data-trekkie-id="product-card:add-to-import-list"
                                                                    class="product-card-actions"><button type="button"
                                                                        class="btn btn-primary btn-regular btn-block"
                                                                        data-trekkie-id="">
                                                                        <span class="btn-icon-wrap"><svg
                                                                                class="icon-base">
                                                                                <use
                                                                                    xlink:href="/images/icons.svg?v=2.10.3#icon-add">
                                                                                </use>
                                                                            </svg></span> <span class="btn-title">
                                                                            Add to Import List
                                                                        </span>

                                                                    </button></div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </li>
                                            <li data-v-2246a06b="">
                                                <div data-v-2246a06b="" data-trekkie-id="product-card"
                                                    class="product-card-wrapper">
                                                    <div class="panel expanding-panel product-card">

                                                        <div class="panel-header-with-image">

                                                            <div class="product-card__anchor"><img
                                                                    src="https://ae01.alicdn.com/kf/H6a415f4e65e24bacb05b07b7f5a09368D/Touch-Screen-Hard-Knuckle-Tactical-Gloves-PU-Leather-Army-Military-Combat-Airsoft-Outdoor-Sport-Cycling-Paintball.jpg">
                                                            </div>

                                                            <div class="product-marked-corner"><svg
                                                                    class="product-marked-corner__icon">
                                                                    <use
                                                                        xlink:href="/images/icons.svg?v=2.10.3#icon-selected">
                                                                    </use>
                                                                </svg></div>

                                                            <div class="discount-notice"><span class="old-price">US
                                                                    $17.5 - $24.5</span> <span class="new-discount">
                                                                    25% off
                                                                </span></div>
                                                        </div>
                                                        <div class="panel-body">
                                                            <div class="" style="max-height: none;">
                                                                <div supplier-texts="[object Object]"
                                                                    class="product-card__meta">
                                                                    <div class="product-card-meta">
                                                                        <div class="product-card-title"><a
                                                                                class="product-card-link">
                                                                                Touch Screen Hard Knuckle Tactical
                                                                                Gloves PU Leather Army Military
                                                                                Combat
                                                                                Airsoft Outdoor Sport Cycling
                                                                                Paintball
                                                                                Hunting Swat
                                                                            </a>

                                                                        </div>
                                                                    </div>
                                                                    <div class="product-price-wrapper">
                                                                        <h4><span class="product-card-price">
                                                                                US $13.12 - $18.37
                                                                            </span></h4>
                                                                    </div> <span class="product-card-subtitle">
                                                                        <div>
                                                                            <div class="product-shipping-info">
                                                                                Choose shipping country
                                                                            </div>


                                                                        </div>
                                                                    </span>
                                                                    <div>
                                                                        <div class="product-card__reviews">
                                                                            <div><svg class="icon-star">
                                                                                    <use
                                                                                        xlink:href="/images/icons.svg?v=2.10.3#icon-star">
                                                                                    </use>
                                                                                </svg><svg class="icon-star">
                                                                                    <use
                                                                                        xlink:href="/images/icons.svg?v=2.10.3#icon-star">
                                                                                    </use>
                                                                                </svg><svg class="icon-star">
                                                                                    <use
                                                                                        xlink:href="/images/icons.svg?v=2.10.3#icon-star">
                                                                                    </use>
                                                                                </svg><svg class="icon-star">
                                                                                    <use
                                                                                        xlink:href="/images/icons.svg?v=2.10.3#icon-star">
                                                                                    </use>
                                                                                </svg><svg class="icon-star">
                                                                                    <use
                                                                                        xlink:href="/images/icons.svg?v=2.10.3#icon-star">
                                                                                    </use>
                                                                                </svg></div> <label
                                                                                class="product-card__reviews-count">(594)</label>
                                                                        </div>
                                                                        <div class="product-card__stat">
                                                                            <div class="product-card__stat-name">
                                                                                Imports
                                                                            </div>
                                                                            <div class="product-card__stat-value">
                                                                                1361
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-card__stat">
                                                                            <div class="product-card__stat-name">
                                                                                Orders
                                                                            </div>
                                                                            <div class="product-card__stat-value">
                                                                                1613
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div data-trekkie-id="product-card:add-to-import-list"
                                                                    class="product-card-actions"><button type="button"
                                                                        class="btn btn-primary btn-regular btn-block"
                                                                        data-trekkie-id="">
                                                                        <span class="btn-icon-wrap"><svg
                                                                                class="icon-base">
                                                                                <use
                                                                                    xlink:href="/images/icons.svg?v=2.10.3#icon-add">
                                                                                </use>
                                                                            </svg></span> <span class="btn-title">
                                                                            Add to Import List
                                                                        </span>

                                                                    </button></div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </li>
                                            <li data-v-2246a06b="">
                                                <div data-v-2246a06b="" data-trekkie-id="product-card"
                                                    class="product-card-wrapper">
                                                    <div class="panel expanding-panel product-card">

                                                        <div class="panel-header-with-image">

                                                            <div class="product-card__anchor"><img
                                                                    src="https://ae01.alicdn.com/kf/H93c4fcb10f134aada1b451d62c1977f0s/Pet-Dog-Cat-Vest-Outdoor-Travel-Harness-Leash-Set-for-Puppy-Cat-Rabbit-Floral-Pattern-Kitten.jpg">
                                                            </div>

                                                            <div class="product-marked-corner"><svg
                                                                    class="product-marked-corner__icon">
                                                                    <use
                                                                        xlink:href="/images/icons.svg?v=2.10.3#icon-selected">
                                                                    </use>
                                                                </svg></div>

                                                            <div class="discount-notice"><span class="old-price">US
                                                                    $14.97 - $15.77</span> <span class="new-discount">
                                                                    33% off
                                                                </span></div>
                                                        </div>
                                                        <div class="panel-body">
                                                            <div class="" style="max-height: none;">
                                                                <div supplier-texts="[object Object]"
                                                                    class="product-card__meta">
                                                                    <div class="product-card-meta">
                                                                        <div class="product-card-title"><a
                                                                                class="product-card-link">
                                                                                Pet Dog Cat Vest Outdoor Travel
                                                                                Harness
                                                                                Leash Set for Puppy Cat Rabbit
                                                                                Floral
                                                                                Pattern Kitten Walking Harnesses Pet
                                                                                Cat
                                                                                Products
                                                                            </a>

                                                                        </div>
                                                                    </div>
                                                                    <div class="product-price-wrapper">
                                                                        <h4><span class="product-card-price">
                                                                                US $10.03 - $10.57
                                                                            </span></h4>
                                                                    </div> <span class="product-card-subtitle">
                                                                        <div>
                                                                            <div class="product-shipping-info">
                                                                                Choose shipping country
                                                                            </div>


                                                                        </div>
                                                                    </span>
                                                                    <div>
                                                                        <div class="product-card__reviews">
                                                                            <div><svg class="icon-star">
                                                                                    <use
                                                                                        xlink:href="/images/icons.svg?v=2.10.3#icon-star">
                                                                                    </use>
                                                                                </svg><svg class="icon-star">
                                                                                    <use
                                                                                        xlink:href="/images/icons.svg?v=2.10.3#icon-star">
                                                                                    </use>
                                                                                </svg><svg class="icon-star">
                                                                                    <use
                                                                                        xlink:href="/images/icons.svg?v=2.10.3#icon-star">
                                                                                    </use>
                                                                                </svg><svg class="icon-star">
                                                                                    <use
                                                                                        xlink:href="/images/icons.svg?v=2.10.3#icon-star">
                                                                                    </use>
                                                                                </svg><svg class="icon-star">
                                                                                    <use
                                                                                        xlink:href="/images/icons.svg?v=2.10.3#icon-star">
                                                                                    </use>
                                                                                </svg></div> <label
                                                                                class="product-card__reviews-count">(9)</label>
                                                                        </div>
                                                                        <div class="product-card__stat">
                                                                            <div class="product-card__stat-name">
                                                                                Imports
                                                                            </div>
                                                                            <div class="product-card__stat-value">
                                                                                333
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-card__stat">
                                                                            <div class="product-card__stat-name">
                                                                                Orders
                                                                            </div>
                                                                            <div class="product-card__stat-value">
                                                                                462
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div data-trekkie-id="product-card:add-to-import-list"
                                                                    class="product-card-actions"><button type="button"
                                                                        class="btn btn-primary btn-regular btn-block"
                                                                        data-trekkie-id="">
                                                                        <span class="btn-icon-wrap"><svg
                                                                                class="icon-base">
                                                                                <use
                                                                                    xlink:href="/images/icons.svg?v=2.10.3#icon-add">
                                                                                </use>
                                                                            </svg></span> <span class="btn-title">
                                                                            Add to Import List
                                                                        </span>

                                                                    </button></div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </li>
                                            <li data-v-2246a06b="">
                                                <div data-v-2246a06b="" data-trekkie-id="product-card"
                                                    class="product-card-wrapper">
                                                    <div class="panel expanding-panel product-card">

                                                        <div class="panel-header-with-image">

                                                            <div class="product-card__anchor"><img
                                                                    src="https://ae01.alicdn.com/kf/HTB1sl5oeRWD3KVjSZKPq6yp7FXa6/Coquimbo-36-108-LEDS-Night-Light-Bonsai-Tree-Light-Gypsophila-Lights-Home-Party-Wedding-Indoor-Decoration.jpg">
                                                            </div>

                                                            <div class="product-marked-corner"><svg
                                                                    class="product-marked-corner__icon">
                                                                    <use
                                                                        xlink:href="/images/icons.svg?v=2.10.3#icon-selected">
                                                                    </use>
                                                                </svg></div>

                                                            <div class="discount-notice"><span class="old-price">US
                                                                    $19.38 - $20.99</span> <span class="new-discount">
                                                                    42% off
                                                                </span></div>
                                                        </div>
                                                        <div class="panel-body">
                                                            <div class="" style="max-height: none;">
                                                                <div supplier-texts="[object Object]"
                                                                    class="product-card__meta">
                                                                    <div class="product-card-meta">
                                                                        <div class="product-card-title"><a
                                                                                class="product-card-link">
                                                                                Coquimbo 36/108 LEDS Night Light
                                                                                Bonsai
                                                                                Tree Light Gypsophila Lights Home
                                                                                Party
                                                                                Wedding Indoor Decoration Night
                                                                                Light
                                                                            </a>

                                                                        </div>
                                                                    </div>
                                                                    <div class="product-price-wrapper">
                                                                        <h4><span class="product-card-price">
                                                                                US $11.24 - $12.17
                                                                            </span></h4>
                                                                    </div> <span class="product-card-subtitle">
                                                                        <div>
                                                                            <div class="product-shipping-info">
                                                                                Choose shipping country
                                                                            </div>


                                                                        </div>
                                                                    </span>
                                                                    <div>
                                                                        <div class="product-card__reviews">
                                                                            <div><svg class="icon-star">
                                                                                    <use
                                                                                        xlink:href="/images/icons.svg?v=2.10.3#icon-star">
                                                                                    </use>
                                                                                </svg><svg class="icon-star">
                                                                                    <use
                                                                                        xlink:href="/images/icons.svg?v=2.10.3#icon-star">
                                                                                    </use>
                                                                                </svg><svg class="icon-star">
                                                                                    <use
                                                                                        xlink:href="/images/icons.svg?v=2.10.3#icon-star">
                                                                                    </use>
                                                                                </svg><svg class="icon-star">
                                                                                    <use
                                                                                        xlink:href="/images/icons.svg?v=2.10.3#icon-star">
                                                                                    </use>
                                                                                </svg><svg class="icon-star">
                                                                                    <use
                                                                                        xlink:href="/images/icons.svg?v=2.10.3#icon-star">
                                                                                    </use>
                                                                                </svg></div> <label
                                                                                class="product-card__reviews-count">(61)</label>
                                                                        </div>
                                                                        <div class="product-card__stat">
                                                                            <div class="product-card__stat-name">
                                                                                Imports
                                                                            </div>
                                                                            <div class="product-card__stat-value">
                                                                                338
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-card__stat">
                                                                            <div class="product-card__stat-name">
                                                                                Orders
                                                                            </div>
                                                                            <div class="product-card__stat-value">
                                                                                789
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div data-trekkie-id="product-card:add-to-import-list"
                                                                    class="product-card-actions"><button type="button"
                                                                        class="btn btn-primary btn-regular btn-block"
                                                                        data-trekkie-id="">
                                                                        <span class="btn-icon-wrap"><svg
                                                                                class="icon-base">
                                                                                <use
                                                                                    xlink:href="/images/icons.svg?v=2.10.3#icon-add">
                                                                                </use>
                                                                            </svg></span> <span class="btn-title">
                                                                            Add to Import List
                                                                        </span>

                                                                    </button></div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <nav data-v-2246a06b="" class="product-collection-carousel__right-navigation">
                                        <svg data-v-2246a06b="" class="icon-lg">
                                            <use xlink:href="/images/icons.svg?v=2.10.3#icon-chevron-right"></use>
                                        </svg>
                                    </nav>
                                </div>

                            </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

</html>
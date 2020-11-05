<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Date</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        $("#expand").click(function() {
            $("#first-product").toggle();
        });


        $("#expand2").click(function() {
            $("#go-live").toggle();
        });


        $("#find-products").click(function() {
            if ($("#import-products").prop('checked') == true && $("#find-products").prop('checked') ==
                true) {
                $("#change").removeClass("badge-info").addClass("badge-success");
            } else {
                $("#change").removeClass("badge-success").addClass("badge-info");
            }
        });
        $("#import-products").click(function() {
            if ($("#import-products").prop('checked') == true && $("#find-products").prop('checked') ==
                true) {
                $("#change").removeClass("badge-info").addClass("badge-success");
            } else {
                $("#change").removeClass("badge-success").addClass("badge-info");
            }
        });

        $("#design-store").click(function() {
            if ($("#design-store").prop('checked') == true && $("#shipping-settings").prop('checked') ==
                true && $("#shopify-plan").prop('checked') == true && $("#remove-password").prop(
                    'checked') == true) {
                $("#change2").removeClass("badge-info").addClass("badge-success");
            } else {
                $("#change2").removeClass("badge-success").addClass("badge-info");
            }
        });
        $("#shipping-settings").click(function() {
            if ($("#design-store").prop('checked') == true && $("#shipping-settings").prop('checked') ==
                true && $("#shopify-plan").prop('checked') == true && $("#remove-password").prop(
                    'checked') == true) {
                $("#change2").removeClass("badge-info").addClass("badge-success");
            } else {
                $("#change2").removeClass("badge-success").addClass("badge-info");
            }
        });
        $("#shopify-plan").click(function() {
            if ($("#design-store").prop('checked') == true && $("#shipping-settings").prop('checked') ==
                true && $("#shopify-plan").prop('checked') == true && $("#remove-password").prop(
                    'checked') == true) {
                $("#change2").removeClass("badge-info").addClass("badge-success");
            } else {
                $("#change2").removeClass("badge-success").addClass("badge-info");
            }
        });
        $("#remove-password").click(function() {
            if ($("#design-store").prop('checked') == true && $("#shipping-settings").prop('checked') ==
                true && $("#shopify-plan").prop('checked') == true && $("#remove-password").prop(
                    'checked') == true) {
                $("#change2").removeClass("badge-info").addClass("badge-success");
            } else {
                $("#change2").removeClass("badge-success").addClass("badge-info");
            }
        });

    });
    </script>

    <style>
    .main {
        margin-left: 200px;
    }

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
        -moz-osx-font-smoothing: grayscale;
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

    .h1,
    h1 {
        font-weight: normal;
        font-size: 30px;
        line-height: 36px;
        color: #272742;
    }

    .dashboard__title {
        text-align: center;
        margin-bottom: 32px;
    }

    .dashboard__sub-title {
        font-weight: 600;
        font-size: 14px;
        line-height: 20px;
        color: #272742;
        padding-top: 8px;
        color: #6f6f85;
    }

    .panel {
        background: #fff;
        box-shadow: 0 0 1px rgba(143, 144, 165, 0.7), 0 0 10px rgba(143, 144, 165, 0.2);
        border-radius: 0;
    }

    .panel .panel-header {
        font-weight: 600;
        font-size: 16px;
        line-height: 20px;
        color: #272742;
        position: relative;
        padding: 24px 24px 8px 24px;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
    }

    .panel .panel-body:not(:last-child) {
        border-bottom: 1px solid #e5e5ec;
    }

    .page-onboarding__step.panel-body {
        padding: 32px 74px 16px 24px;
    }

    .page-onboarding__step {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        position: relative;
    }



    .page-onboarding__step-body {
        display: flex;
        align-items: baseline;
        margin-right: auto;
        margin-bottom: 16px;
        flex-direction: column;
    }

    .badge-success {
        color: #1a2e08;
        background-color: #c7fda5;
    }

    .badge {
        font-weight: 600;
        font-size: 12px;
        line-height: 20px;
        letter-spacing: 0.02em;
        display: inline-block;
        min-width: 10px;
        padding: 3px 9px;
        line-height: 1;
        vertical-align: middle;
        white-space: nowrap;
        text-align: center;
        border-radius: 10px;
    }

    .page-onboarding__step-body {
        display: flex;
        align-items: baseline;
        margin-right: auto;
        margin-bottom: 16px;
        flex-direction: column;
    }

    .page-onboarding__step-body p {
        margin: 0 0 8px 0;
    }

    .page-onboarding__step-title {
        font-weight: 600;
    }

    .page-onboarding__step-body p:last-of-type {
        margin: 0;
    }

    .page-onboarding__step-body {
        flex-direction: row;
    }

    .page-onboarding__badge {
        margin-right: 8px;
        flex-shrink: 0;
        margin-bottom: 8px;
    }

    ////////////////////////////////////

    .panel .panel-body:not(:last-child) {
        border-bottom: 1px solid #e5e5ec;
    }

    .page-onboarding__step.panel-body {
        padding: 32px 74px 16px 24px;
    }

    .page-onboarding__step-pane {
        max-width: 760px;
    }

    .page-onboarding__step-pane .checkbox-block {
        margin-top: 24px;
    }

    input[type='checkbox']:checked:not(:disabled),
    input[type='checkbox']:checked:active:not(:disabled) {
        background: #525bff;
    }

    .page-onboarding__step-bullet-description {
        color: #6f6f85;
        margin: 8px 0 0 24px !important;
    }

    .page-onboarding__step-sub-bullets {
        color: #7e7ea4;
    }

    .page-onboarding__bullet-title {
        font-weight: 600;
        font-size: 14px;
        line-height: 20px;
        color: #272742;
    }

    .page-onboarding__step-video-link {
        display: inline-flex;
        align-items: center;
        margin-left: 4px;
        padding: 0;
    }

    .page-onboarding__step-video-link svg {
        width: 12px;
        height: 12px;
        margin-left: 4px;
        fill: #62628d;
    }

    .page-onboarding__step-body p:last-of-type {
        margin: 0;
    }

    .page-onboarding__step-sub-bullets li+li {
        margin-top: 16px;
    }

    .page-onboarding__step-chevron {
        position: absolute;
        top: 32px;
        right: 10px;
    }

    .btn-basic svg,
    .btn-default svg {
        fill: #62628d;
    }

    .btn svg {
        display: block;
    }

    .page-onboarding__step-chevron svg {
        transition: transform 200ms linear;
    }

    svg:not(:root) {
        overflow: hidden;
    }

    .icon-base {
        height: 20px;
        width: 20px;
    }

    .badge-info {
        color: #002e36;
        background-color: #b3efff;
    </style>
</head>

<body>

    <div class="main">
        <div class="page-layout__body">
            <!---->
            <div class="page-layout__body-content">
                <div data-v-538e13d8="" class="notification-messages" slot="notification-messages">
                    <!---->
                    <!---->
                </div>
                <div data-v-14ce129f="">
                    <!---->
                    <!---->
                    <!----> <iframe data-v-14ce129f="" id="shopifyIframe"
                        src="https://cdn.shopify.com/s/javascripts/tricorder/xtld-last-shop-frame.html" height="0"
                        width="0" style="display: none; visibility: hidden;"
                        data-gtm-yt-inspected-6551760_457="true"></iframe>
                    <div data-v-14ce129f="" class="dashboard__title">
                        <h1 data-v-14ce129f="">Build Your Business With Clickripple</h1>
                        <h4 data-v-14ce129f="" class="dashboard__sub-title">
                            Below is a short checklist we recommend finishing to make your store a success.
                        </h4>
                    </div>
                    <div data-v-6efd3f88="" data-v-14ce129f="" class="panel">
                        <div data-v-6efd3f88="" class="panel-header -flex -flex-between -flex-wrap">
                            <h3 data-v-6efd3f88="">Let's Get Started!</h3>
                        </div>
                        <div data-v-6efd3f88="" class="panel-body page-onboarding__step page-onboarding__step-1">
                            <div data-v-6efd3f88="" class="page-onboarding__step-body"><span data-v-6efd3f88=""
                                    class="page-onboarding__badge badge badge-success">
                                    Step 1
                                </span>
                                <div data-v-6efd3f88="">
                                    <p data-v-6efd3f88="" class="page-onboarding__step-title">
                                        Create or connect your Shopify store
                                    </p>
                                    <p data-v-6efd3f88="">In order to start selling you have to have a Shopify store.
                                        Start your free trial.</p>
                                </div>
                            </div>
                            <!---->
                        </div>
                        <div data-v-6efd3f88="" class="panel-body page-onboarding__step page-onboarding__step-2">
                            <div data-v-6efd3f88="" class="page-onboarding__step-body"><span data-v-6efd3f88=""
                                    class="page-onboarding__badge badge badge-info" id="change">
                                    Step 2
                                </span>
                                <div data-v-6efd3f88="">
                                    <p data-v-6efd3f88="" class="page-onboarding__step-title">
                                        Add your first product
                                    </p>
                                    <p data-v-6efd3f88="">Find product that you want to sell in your store.</p>
                                    <div data-v-6efd3f88="" id="first-product" class="page-onboarding__step-pane">
                                        <div data-v-6efd3f88="" class="checkbox-block"><input data-v-6efd3f88=""
                                                id="find-products" type="checkbox"> <label data-v-6efd3f88=""
                                                for="find-products">
                                                Find products to sell.
                                            </label></div>
                                        <p data-v-6efd3f88="" class="page-onboarding__step-bullet-description">
                                            There are 2 main ways to find products to sell on Clickripple. Choose which
                                            way
                                            works best for you.
                                        </p>
                                        <ul data-v-6efd3f88="" class="page-onboarding__step-sub-bullets">
                                            <li data-v-6efd3f88=""><strong data-v-6efd3f88=""
                                                    class="page-onboarding__bullet-title">
                                                    Search products in Clickripple.
                                                </strong> <a data-v-6efd3f88="" href="#"
                                                    class="page-onboarding__step-video-link"><span
                                                        data-v-6efd3f88="">How to search for products on
                                                        Clickripple</span>
                                                    <svg data-v-6efd3f88="" class="icon-base">
                                                        <use xlink:href="/images/icons.svg?v=2.10.3#icon-player-list">
                                                        </use>
                                                    </svg></a>
                                                <p data-v-6efd3f88="">Search for products in Clickripple by categories,
                                                    explore product statistics, and import products you like.</p>
                                            </li>
                                            <li data-v-6efd3f88=""><strong data-v-6efd3f88=""
                                                    class="page-onboarding__bullet-title">
                                                    Search products in AliExpress.
                                                </strong> <a data-v-6efd3f88="" href="#"
                                                    class="page-onboarding__step-video-link"><span
                                                        data-v-6efd3f88="">How to search for products on
                                                        AliExpress</span> <svg data-v-6efd3f88="" class="icon-base">
                                                        <use xlink:href="/images/icons.svg?v=2.10.3#icon-player-list">
                                                        </use>
                                                    </svg></a>
                                                <p data-v-6efd3f88="">Search and import products from AliExpress using
                                                    the Clickripple Chrome Extension.</p>
                                            </li>
                                        </ul>
                                        <div data-v-6efd3f88="" class="checkbox-block"><input data-v-6efd3f88=""
                                                id="import-products" type="checkbox"> <label data-v-6efd3f88=""
                                                for="import-products">
                                                Import product to your Shopify store.
                                            </label> <a data-v-6efd3f88="" href="#"
                                                class="page-onboarding__step-video-link"><span data-v-6efd3f88="">How to
                                                    edit and import products</span> <svg data-v-6efd3f88=""
                                                    class="icon-base">
                                                    <use xlink:href="/images/icons.svg?v=2.10.3#icon-player-list"></use>
                                                </svg></a></div>
                                        <p data-v-6efd3f88="" class="page-onboarding__step-bullet-description">
                                            When you have your products in Clickripple, edit them, then import them to
                                            your
                                            Shopify store to start selling.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!---->
                            <div data-v-6efd3f88="" class="page-onboarding__step-chevron"><button data-v-6efd3f88=""
                                    type="button" class="btn btn-basic btn-regular" aria-controls="first-product"
                                    aria-expanded="false" id="expand">
                                    <!----> <span class="btn-icon-wrap"><svg class="icon-base">
                                            <use xlink:href="/images/icons.svg?v=2.10.3#icon-small-arrow-down"></use>
                                        </svg></span> <span class="btn-title"></span>
                                    <!---->
                                </button></div>
                        </div>
                        <div data-v-6efd3f88="" class="panel-body page-onboarding__step page-onboarding__step-3">
                            <div data-v-6efd3f88="" class="page-onboarding__step-body"><span data-v-6efd3f88=""
                                    class="page-onboarding__badge badge badge-info" id="change2">
                                    Step 3
                                </span>
                                <div data-v-6efd3f88="">
                                    <p data-v-6efd3f88="" class="page-onboarding__step-title">
                                        Go live
                                    </p>
                                    <p data-v-6efd3f88="">It's a very exciting step! Check some important things to do
                                        before you go live.</p>
                                    <div data-v-6efd3f88="" id="go-live" class="page-onboarding__step-pane">
                                        <div data-v-6efd3f88="" class="checkbox-block"><input data-v-6efd3f88=""
                                                id="design-store" type="checkbox"> <label data-v-6efd3f88=""
                                                for="design-store">
                                                Design your store.
                                            </label> <a data-v-6efd3f88="" href="#"
                                                class="page-onboarding__step-video-link"><span data-v-6efd3f88="">How to
                                                    edit the store template</span> <svg data-v-6efd3f88=""
                                                    class="icon-base">
                                                    <use xlink:href="/images/icons.svg?v=2.10.3#icon-player-list"></use>
                                                </svg></a></div>
                                        <p data-v-6efd3f88="" class="page-onboarding__step-bullet-description">
                                            Good store design will help you build trust with your customers.
                                        </p>
                                        <div data-v-6efd3f88="" class="checkbox-block"><input data-v-6efd3f88=""
                                                id="shipping-settings" type="checkbox"> <label data-v-6efd3f88=""
                                                for="shipping-settings">
                                                Set up shipping settings.
                                            </label> <a data-v-6efd3f88="" href="#"
                                                class="page-onboarding__step-video-link"><span data-v-6efd3f88="">How to
                                                    setup shipping settings</span></a></div>
                                        <p data-v-6efd3f88="" class="page-onboarding__step-bullet-description">
                                            Set up your preferred shipping zones and shipping prices.
                                        </p>
                                        <div data-v-6efd3f88="" class="checkbox-block"><input data-v-6efd3f88=""
                                                id="shopify-plan" type="checkbox"> <label data-v-6efd3f88=""
                                                for="shopify-plan">
                                                Choose a Shopify plan.
                                            </label></div>
                                        <p data-v-6efd3f88="" class="page-onboarding__step-bullet-description">A <a
                                                href="#">Shopify
                                                subscription plan</a> is necessary in order to go live.</p>
                                        <div data-v-6efd3f88="" class="checkbox-block"><input data-v-6efd3f88=""
                                                id="remove-password" type="checkbox"> <label data-v-6efd3f88=""
                                                for="remove-password">
                                                Remove your store password.
                                            </label></div>
                                        <p data-v-6efd3f88="" class="page-onboarding__step-bullet-description">You only
                                            need to <a href="#">remove
                                                the password from your store</a> and it's live!</p>
                                    </div>
                                </div>
                            </div>
                            <!---->
                            <div data-v-6efd3f88="" class="page-onboarding__step-chevron"><button data-v-6efd3f88=""
                                    type="button" class="btn btn-basic btn-regular" aria-controls="go-live" id="expand2"
                                    aria-expanded="false">
                                    <!----> <span class="btn-icon-wrap"><svg class="icon-base">
                                            <use xlink:href="/images/icons.svg?v=2.10.3#icon-small-arrow-down"></use>
                                        </svg></span> <span class="btn-title"></span>
                                    <!---->
                                </button></div>
                        </div>

                    </div>
                    <div data-v-14ce129f="" class="panel page-onboarding__overview -margin-top-md">
                        <div data-v-14ce129f="" class="panel-header">
                            <h3 data-v-14ce129f="">A Quick Overview</h3>
                        </div>
                        <div data-v-14ce129f="" tabindex="-1" class="panel-body video-player__wrapper">
                            <div data-v-14ce129f="" class="video-player">
                                <div data-v-14ce129f="" class="youtube_responsive_padding"
                                    style="padding: 56.25% 0px 0px; position: relative;">
                                    <div data-v-14ce129f="" class="youtube_responsive_wrapper"
                                        style="height: 100%; left: 0px; position: absolute; top: 0px; width: 100%;">
                                        <iframe data-v-14ce129f="" id="youtubePlayer"
                                            src="https://www.youtube.com/embed/v3Cb01cfiVw?enablejsapi=1"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen="allowfullscreen" width="100%" height="100%"
                                            data-gtm-yt-inspected-6551760_457="true"></iframe>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
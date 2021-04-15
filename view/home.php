<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>MediaSearch</title>
    <meta property="og:type" content="website">
    <meta name="twitter:title" content="MediaSearch :: One query to find them all ">
    <meta name="og:title" content="MediaSearch :: One query to find them all ">
    <meta name="twitter:image" itemprop="image"  content="https://www.mediasearch.dev/assets/img/og-squared.png">
    <meta name="description" content="Tired of typing the same query over and over when you are looking for free hi-res media?
This might be the solution!">
    <meta name="og:description" content="Tired of typing the same query over and over when you are looking for free hi-res media?
This might be the solution!">
    <meta property="og:url" content="https://www.mediasearch.dev">
    <meta property="og:image" itemprop="image" content="https://www.mediasearch.dev/assets/img/og-squared.png">
    <meta property="og:image:secure_url" itemprop="image" content="https://www.mediasearch.dev/assets/img/og-squared.png">
    <meta name="twitter:description" content="Tired of typing the same query over and over when you are looking for free hi-res media?
This might be the solution!">

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css?h=06c11f51794665b0497cf2a8aa6e3d12">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.css">
    <link rel="stylesheet" href="assets/css/styles.min.css?h=daa7969a3b462b8815bc0b80582a8d71">
</head>

<body class="h-100 w-100 bg-image-main">
    <div id="bg-image" >
        <div class="d-flex justify-content-between">
            <a href="/">
                <div id="logo" class="d-inline-block"><img class="mxy-90 ontop"
                        src="assets/img/logo/logo.svg?h=7f70d5327fa12bdbc17571f5b8976726"></div>
            </a><a id="credits" class="d-block mxy-90" href="https://filippovicari.com"><img id="fv-logo"
                    src="assets/img/fv.svg?h=bb224de3d680905982105f74128e365f"></a></div>
        <div id="main-text" class="mxy-90 margin-title ontop">
            <div id="main-title">
                <h1 class="text-white oswald fs-main-title- text-shadow">finding great Assets should be EASIER<br></h1>
            </div>
            <div id="main-subtext">
                <p class="roboto light-grey-color fs-28 mb-0 text-shadow w-md-50">Tired of typing the same query over
                    and over when you are looking for free hi-res media?<br>Do you wish to type the query once and
                    search in multiple websites?&nbsp;<br>This might be what you are looking for!</p>
            </div>
        </div>
        <div class="mxy-90 pb-5">
        <form action="/controller/q.php" class="d-inline-block w-auto">
                    <div class="text-white bg-yellow oswald fs-main-title d-flex align-middle text-center mb-0">
                        <input type="text" required="required" placeholder="Keyword" id="query" class="d-inline-block oswald py-2 px-4  mb-0 mr-0" name="q" value="<?php if(isset($q)){echo $q;} ?>">
                        <button type="submit" class=" d-inline-block h-100 query-btn my-auto">
                            <img src="/assets/img/misc/lens.svg" alt="" srcset="">
                        </button>
                        </div>
                    </form> 

        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/script.min.js?h=54242b27470e51c92964a3da6f09d0b9"></script>
</body>

</html>
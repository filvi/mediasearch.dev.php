<!DOCTYPE html>
<html>
<?php 
if(isset($_REQUEST["q"])){
    $q = $_REQUEST("q");
}
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css?h=06c11f51794665b0497cf2a8aa6e3d12">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="/assets/css/styles.min.css?h=daa7969a3b462b8815bc0b80582a8d71">
</head>

<body id="bg-icon"  class="bg-image-icon">
    <div id="content" class="w-100 h-100">
        <div class="d-flex justify-content-between">
            <a id="logo" class="d-inline-block mxy-90" href="/">
                <div id="logo">
                    <img src="/assets/img/logo/logo-white.svg?h=29f33aed5b4e9df831af9f6f4e0c3435">
                </div>
            </a>
            <a id="credits" class="d-inline-block mxy-90" href="https://filippovicari.com">
                <img id="fv-logo" src="/assets/img/fv.svg?h=bb224de3d680905982105f74128e365f">
            </a>
        </div>
        <div id="flex" class="d-flex align-items-center justify-content-center flex-column query-flex margin-footer">
            <div id="title-query" class="d-flex align-items-center justify-items-center mx-5">
                <div id="text"
                    class="w-100 d-flex flex-column flex-sm-column flex-md-row align-items-center justify-content-around">
                    <h1 class="text-white oswald fs-main-title- mb-0 text-right">icons for
                    <input type="text" id="query-icon" class="d-inline-block oswald border-0 py-3 mx-3 mt-3 mt-md-0"
                        name="q" value="<?php if(isset($q)){echo $q;} ?>">
                        </h1>
                </div>
            </div>
            <h3 class="roboto text-center text-light-yellow mt-2 subtext d-inline-block mx-5 font-weight-normal mt-4">
                Now just choose the website&nbsp;<br>
            </h3>
            <div class="container-fluid mt-4 mb-5">
                <div class="main-content mb-5">
                    <div class="row mb-5">
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 my-2" >
                            <a class="d-flex bg-white border-black-thick mycard flex-column mycard"
                                href="#">
                                <div class="mycard-content text-center">
                                    <img class="w-100 h-100"
                                        src="/assets/img/websites/Everyixel.png?h=594594c908debdbc9ded1289473088ec">
                                </div>
                                <div
                                    class="mycard-footer w-100 bg-mydark text-center align-self-end d-flex align-items-center justify-content-center pb-2">
                                    <a href="#">
                                        <img class="mr-2"
                                            src="/assets/img/misc/ban.svg?h=95ca4de4994ff5d6728de72eb8d65e91">
                                    </a>
                                    <h4 class="oswald text-white d-inline-block mb-0 sitename">EVERYPIXEL</h4>
                                    <a href="#">
                                        <img class="ml-2"
                                            src="/assets/img/misc/heart.svg?h=96557e61f404ec4afc4f5f982aa5c833">
                                    </a>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 my-2" >
                            <a class="d-flex bg-white border-black-thick mycard flex-column" href="#">
                                <div class="mycard-content text-center">
                                    <img class="w-100 h-100"
                                        src="/assets/img/websites/pexels.png?h=d6bb06eb1fb5032c11b1ce9729dfdc75">
                                </div>
                                <div
                                    class="mycard-footer w-100 bg-mydark text-center align-self-end d-flex align-items-center justify-content-center pb-2">
                                    <a href="#">
                                        <img class="mr-2"
                                            src="/assets/img/misc/ban.svg?h=95ca4de4994ff5d6728de72eb8d65e91">
                                    </a>
                                    <h4 class="oswald text-white d-inline-block mb-0 sitename">pexels</h4>
                                    <a href="#">
                                        <img class="ml-2"
                                            src="/assets/img/misc/heart.svg?h=96557e61f404ec4afc4f5f982aa5c833">
                                    </a>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 my-2" >
                            <a class="d-flex bg-white border-black-thick mycard flex-column" href="#">
                                <div class="mycard-content text-center">
                                    <img class="w-100 h-100"
                                        src="/assets/img/websites/unsplash.png?h=493a0c90879f8414ce01d52009094c92">
                                </div>
                                <div
                                    class="mycard-footer w-100 bg-mydark text-center align-self-end d-flex align-items-center justify-content-center pb-2">
                                    <a href="#">
                                        <img class="mr-2"
                                            src="/assets/img/misc/ban.svg?h=95ca4de4994ff5d6728de72eb8d65e91">
                                    </a>
                                    <h4 class="oswald text-white d-inline-block mb-0 sitename">unsplash</h4>
                                    <a href="#">
                                        <img class="ml-2"
                                            src="/assets/img/misc/heart.svg?h=96557e61f404ec4afc4f5f982aa5c833">
                                    </a>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 my-2" >
                            <a class="d-flex bg-white border-black-thick mycard flex-column" href="#">
                                <div class="mycard-content text-center">
                                    <img class="w-100 h-100"
                                        src="/assets/img/websites/visualhunt.png?h=511f450a5d920b524752ac30a2ed6eb6">
                                </div>
                                <div
                                    class="mycard-footer w-100 bg-mydark text-center align-self-end d-flex align-items-center justify-content-center pb-2">
                                    <a href="#">
                                        <img class="mr-2"
                                            src="/assets/img/misc/ban.svg?h=95ca4de4994ff5d6728de72eb8d65e91">
                                    </a>
                                    <h4 class="oswald text-white d-inline-block mb-0 sitename">visualhunt</h4>
                                    <a href="#">
                                        <img class="ml-2"
                                            src="/assets/img/misc/heart.svg?h=96557e61f404ec4afc4f5f982aa5c833">
                                    </a>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 my-2" >
                            <a class="d-flex bg-white border-black-thick mycard flex-column" href="#">
                                <div class="mycard-content text-center">
                                    <img class="w-100 h-100"
                                        src="/assets/img/websites/gratisography.png?h=37c5ec3f2fe8bf1fa4516fbe8e7d11e2">
                                </div>
                                <div
                                    class="mycard-footer w-100 bg-mydark text-center align-self-end d-flex align-items-center justify-content-center pb-2">
                                    <a href="#">
                                        <img class="mr-2 ban"
                                            src="/assets/img/misc/ban.svg?h=95ca4de4994ff5d6728de72eb8d65e91">
                                    </a>
                                    <h4 class="oswald text-white d-inline-block mb-0 sitename">gratisography</h4>
                                    <a href="#">
                                        <img class="ml-2 like"
                                            src="/assets/img/misc/heart.svg?h=96557e61f404ec4afc4f5f982aa5c833">
                                    </a>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 my-2" >
                            <a class="d-flex bg-white border-black-thick mycard flex-column" href="#">
                                <div class="mycard-content text-center">
                                    <img class="w-100 h-100"
                                        src="/assets/img/websites/picjumbo.png?h=7aa1e36445ebcccd6dadb00af84871f8">
                                </div>
                                <div
                                    class="mycard-footer w-100 bg-mydark text-center align-self-end d-flex align-items-center justify-content-center pb-2">
                                    <a href="#">
                                        <img class="mr-2"
                                            src="/assets/img/misc/ban.svg?h=95ca4de4994ff5d6728de72eb8d65e91">
                                    </a>
                                    <h4 class="oswald text-white d-inline-block mb-0 sitename">picjumbo</h4>
                                    <a href="#">
                                        <img class="ml-2"
                                            src="/assets/img/misc/heart.svg?h=96557e61f404ec4afc4f5f982aa5c833">
                                    </a>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 my-2" >
                            <a class="d-flex bg-white border-black-thick mycard flex-column" href="#">
                                <div class="mycard-content text-center">
                                    <img class="w-100 h-100"
                                        src="/assets/img/websites/cupcake.png?h=afc82e1d82e72af69ede8e6b8ca93a29">
                                </div>
                                <div
                                    class="mycard-footer w-100 bg-mydark text-center align-self-end d-flex align-items-center justify-content-center pb-2">
                                    <a href="#">
                                        <img class="mr-2"
                                            src="/assets/img/misc/ban.svg?h=95ca4de4994ff5d6728de72eb8d65e91">
                                    </a>
                                    <h4 class="oswald text-white d-inline-block mb-0 sitename">cupcake</h4>
                                    <a href="#">
                                        <img class="ml-2"
                                            src="/assets/img/misc/heart.svg?h=96557e61f404ec4afc4f5f982aa5c833">
                                    </a>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 my-2" >
                            <a class="d-flex bg-white border-black-thick mycard flex-column" href="#">
                                <div class="mycard-content text-center">
                                    <img class="w-100 h-100"
                                        src="/assets/img/websites/pixabay.png?h=4e16415e4446416c2d4449613bb0f87d">
                                </div>
                                <div
                                    class="mycard-footer w-100 bg-mydark text-center align-self-end d-flex align-items-center justify-content-center pb-2">
                                    <a href="#">
                                        <img class="mr-2"
                                            src="/assets/img/misc/ban.svg?h=95ca4de4994ff5d6728de72eb8d65e91">
                                    </a>
                                    <h4 class="oswald text-white d-inline-block mb-0 sitename">pixabay</h4>
                                    <a href="#">
                                        <img class="ml-2"
                                            src="/assets/img/misc/heart.svg?h=96557e61f404ec4afc4f5f982aa5c833">
                                    </a>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 my-2" >
                            <a class="d-flex bg-white border-black-thick mycard flex-column" href="#">
                                <div class="mycard-content text-center">
                                    <img class="w-100 h-100"
                                        src="/assets/img/websites/pixabay.png?h=4e16415e4446416c2d4449613bb0f87d">
                                </div>
                                <div
                                    class="mycard-footer w-100 bg-mydark text-center align-self-end d-flex align-items-center justify-content-center pb-2">
                                    <a href="#">
                                        <img class="mr-2"
                                            src="/assets/img/misc/ban.svg?h=95ca4de4994ff5d6728de72eb8d65e91">
                                    </a>
                                    <h4 class="oswald text-white d-inline-block mb-0 sitename">pixabay</h4>
                                    <a href="#">
                                        <img class="ml-2"
                                            src="/assets/img/misc/heart.svg?h=96557e61f404ec4afc4f5f982aa5c833">
                                    </a>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 my-2" >
                            <a class="d-flex bg-white border-black-thick mycard flex-column" href="#">
                                <div class="mycard-content text-center">
                                    <img class="w-100 h-100"
                                        src="/assets/img/websites/pixabay.png?h=4e16415e4446416c2d4449613bb0f87d">
                                </div>
                                <div
                                    class="mycard-footer w-100 bg-mydark text-center align-self-end d-flex align-items-center justify-content-center pb-2">
                                    <a href="#">
                                        <img class="mr-2"
                                            src="/assets/img/misc/ban.svg?h=95ca4de4994ff5d6728de72eb8d65e91">
                                    </a>
                                    <h4 class="oswald text-white d-inline-block mb-0 sitename">pixabay</h4>
                                    <a href="#">
                                        <img class="ml-2"
                                            src="/assets/img/misc/heart.svg?h=96557e61f404ec4afc4f5f982aa5c833">
                                    </a>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 my-2" >
                            <a class="d-flex bg-white border-black-thick mycard flex-column" href="#">
                                <div class="mycard-content text-center">
                                    <img class="w-100 h-100"
                                        src="/assets/img/websites/pixabay.png?h=4e16415e4446416c2d4449613bb0f87d">
                                </div>
                                <div
                                    class="mycard-footer w-100 bg-mydark text-center align-self-end d-flex align-items-center justify-content-center pb-2">
                                    <a href="#">
                                        <img class="mr-2"
                                            src="/assets/img/misc/ban.svg?h=95ca4de4994ff5d6728de72eb8d65e91">
                                    </a>
                                    <h4 class="oswald text-white d-inline-block mb-0 sitename">pixabay</h4>
                                    <a href="#">
                                        <img class="ml-2"
                                            src="/assets/img/misc/heart.svg?h=96557e61f404ec4afc4f5f982aa5c833">
                                    </a>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 my-2" >
                            <a class="d-flex bg-white border-black-thick mycard flex-column" href="#">
                                <div class="mycard-content text-center">
                                    <img class="w-100 h-100"
                                        src="/assets/img/websites/pixabay.png?h=4e16415e4446416c2d4449613bb0f87d">
                                </div>
                                <div
                                    class="mycard-footer w-100 bg-mydark text-center align-self-end d-flex align-items-center justify-content-center pb-2">
                                    <a href="#">
                                        <img class="mr-2"
                                            src="/assets/img/misc/ban.svg?h=95ca4de4994ff5d6728de72eb8d65e91">
                                    </a>
                                    <h4 class="oswald text-white d-inline-block mb-0 sitename">pixabay</h4>
                                    <a href="#">
                                        <img class="ml-2"
                                            src="/assets/img/misc/heart.svg?h=96557e61f404ec4afc4f5f982aa5c833">
                                    </a>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 my-2">
                            <a class="d-flex bg-white border-black-thick mycard flex-column" href="#">
                                <div class="mycard-content text-center">
                                    <img class="w-100 h-100"
                                        src="/assets/img/websites/pixabay.png?h=4e16415e4446416c2d4449613bb0f87d">
                                </div>
                                <div
                                    class="mycard-footer w-100 bg-mydark text-center align-self-end d-flex align-items-center justify-content-center pb-2">
                                    <a href="#">
                                        <img class="mr-2"
                                            src="/assets/img/misc/ban.svg?h=95ca4de4994ff5d6728de72eb8d65e91">
                                    </a>
                                    <h4 class="oswald text-white d-inline-block mb-0 sitename">pixabay</h4>
                                    <a href="#">
                                        <img class="ml-2"
                                            src="/assets/img/misc/heart.svg?h=96557e61f404ec4afc4f5f982aa5c833">
                                    </a>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 my-2">
                            <a class="d-flex bg-white border-black-thick mycard flex-column" href="#">
                                <div class="mycard-content text-center">
                                    <img class="w-100 h-100"
                                        src="/assets/img/websites/pixabay.png?h=4e16415e4446416c2d4449613bb0f87d">
                                </div>
                                <div
                                    class="mycard-footer w-100 bg-mydark text-center align-self-end d-flex align-items-center justify-content-center pb-2">
                                    <a href="#">
                                        <img class="mr-2"
                                            src="/assets/img/misc/ban.svg?h=95ca4de4994ff5d6728de72eb8d65e91">
                                    </a>
                                    <h4 class="oswald text-white d-inline-block mb-0 sitename">pixabay</h4>
                                    <a href="#">
                                        <img class="ml-2"
                                            src="/assets/img/misc/heart.svg?h=96557e61f404ec4afc4f5f982aa5c833">
                                    </a>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 my-2">
                            <a class="d-flex bg-white border-black-thick mycard flex-column" href="#">
                                <div class="mycard-content text-center">
                                    <img class="w-100 h-100"
                                        src="/assets/img/websites/pixabay.png?h=4e16415e4446416c2d4449613bb0f87d">
                                </div>
                                <div
                                    class="mycard-footer w-100 bg-mydark text-center align-self-end d-flex align-items-center justify-content-center pb-2">
                                    <a href="#">
                                        <img class="mr-2"
                                            src="/assets/img/misc/ban.svg?h=95ca4de4994ff5d6728de72eb8d65e91">
                                    </a>
                                    <h4 class="oswald text-white d-inline-block mb-0 sitename">pixabay</h4>
                                    <a href="#">
                                        <img class="ml-2"
                                            src="/assets/img/misc/heart.svg?h=96557e61f404ec4afc4f5f982aa5c833">
                                    </a>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 my-2">
                            <a class="d-flex bg-white border-black-thick mycard flex-column" href="#">
                                <div class="mycard-content text-center">
                                    <img class="w-100 h-100"
                                        src="/assets/img/websites/pixabay.png?h=4e16415e4446416c2d4449613bb0f87d">
                                </div>
                                <div
                                    class="mycard-footer w-100 bg-mydark text-center align-self-end d-flex align-items-center justify-content-center pb-2">
                                    <a href="#">
                                        <img class="mr-2"
                                            src="/assets/img/misc/ban.svg?h=95ca4de4994ff5d6728de72eb8d65e91">
                                    </a>
                                    <h4 class="oswald text-white d-inline-block mb-0 sitename">pixabay</h4>
                                    <a href="#">
                                        <img class="ml-2"
                                            src="/assets/img/misc/heart.svg?h=96557e61f404ec4afc4f5f982aa5c833">
                                    </a>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="footer" class="bg-dark-transparent fixed-bottom">
        <div class="container mb-0 my-2">
            <div class="row mb-0">
                <div class="col-sm-12 col-md-6 my-2 my-md-0" id="myfooter-text">
                    <h1 class="text-white oswald text-white mb-0">Need another asset type?</h1>
                </div>
                <div class="col-sm-12 col-md-6 align-lg-self-center" id="footer-icons">
                    <a class="mx-2" href="images.html">
                        <img data-toggle="tooltip" data-bs-tooltip="" class="/assets-bottom"
                            src="/assets/img/assets/images.svg?h=7799906d6e1ff82e95ba4acd18d25a24"
                            title="Search Images">
                    </a>
                    <a class="mx-2" href="vector.html">
                        <img data-toggle="tooltip" data-bs-tooltip="" class="/assets-bottom"
                            src="/assets/img/assets/vector.svg?h=1651652d2d33cc996dd989d7c434eb92"
                            title="Search vectors">
                    </a>
                    <a class="mx-2" href="video.html">
                        <img data-toggle="tooltip" data-bs-tooltip="" class="/assets-bottom"
                            src="/assets/img/assets/video.svg?h=654d72205900eaa083d16e96eb736d49" title="Search videos">
                    </a>
                    <a class="mx-2" href="icon.html">
                        <img data-toggle="tooltip" data-bs-tooltip="" class="/assets-bottom"
                            src="/assets/img/assets/icon.svg?h=52a2637b687f1d24c911a2ffe94897ca" title="Search icons">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js">
    </script>

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js">
    </script>
    <script src="/assets/js/script.min.js?h=54242b27470e51c92964a3da6f09d0b9">
    </script>
</body>

</html>
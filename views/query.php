<!DOCTYPE html>
<html>

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.css">
    <link rel="stylesheet" href="/assets/css/styles.min.css?h=daa7969a3b462b8815bc0b80582a8d71">
</head>
<?php 
if(isset($_REQUEST["q"])){
    $q = $_REQUEST("q");
}
?>

<body id="bg-query">
    <div>
        <div class="d-flex justify-content-between">
            <a id="logo" class="d-inline-block mxy-90" href="/">
                <div id="logo">
                    <img src="/assets/img/logo/logo.svg?h=7f70d5327fa12bdbc17571f5b8976726">
                </div>
            </a>
            <a id="credits" class="d-block mxy-90" href="https://filippovicari.com">
                <img id="fv-logo" src="/assets/img/fv.svg?h=bb224de3d680905982105f74128e365f">
            </a>
        </div>
        <div id="flex" class="d-flex align-items-center justify-content-center flex-column query-flex">
            <div id="title-query" class="d-flex align-items-center justify-items-center">
                <div id="text" class="container w-100">
                    <h1 class="text-white oswald fs-main-title- text-center mb-0">
                        <strong>Your searched:&nbsp;</strong>
                        <input type="text" id="query" class="d-inline-block oswald py-3 w-50 ml-4 px-4 my-2 border-0"
                            name="q" value="<?php if(isset($q)){echo $q;} ?>">
                    </h1>
                    <h3 class="light-grey-color roboto text-center mt-3">What kind of assets are you looking for?<br>
                    </h3>
                </div>
            </div>
            <div class="container mt-2 pb-5">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-3 my-2 d-flex justify-content-center align-items-center">
                        <a class="d-inline-block" href="/img/<?php if(isset($q)){echo $q;} ?>">
                            <img data-bs-hover-animate="pulse" id="box-images" class="w-100 h-100 box-img"
                                src="/assets/img/boxes/images.svg?h=bfbce78c40aa599c3060ca14b48406f2">
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3 my-2 d-flex justify-content-center align-items-center">
                        <a class="d-inline-block" href="/vec/<?php if(isset($q)){echo $q;} ?>">
                            <img data-bs-hover-animate="pulse" id="box-vector" class="w-100 h-100 box-img"
                                src="/assets/img/boxes/vector.svg?h=323204eb8d24fbda11085467cb5cfb3f">
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3 my-2 d-flex justify-content-center align-items-center">
                        <a class="d-inline-block" href="/vid/<?php if(isset($q)){echo $q;} ?>">
                            <img data-bs-hover-animate="pulse" id="box-video" class="w-100 h-100 box-img"
                                src="/assets/img/boxes/video.svg?h=cfc7a0569fc26c6b8bcc4d81034f5084">
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3 my-2 d-flex justify-content-center align-items-center">
                        <a class="d-inline-block" href="/ico/<?php if(isset($q)){echo $q;} ?>">
                            <img data-bs-hover-animate="pulse" id="box-icon" class="w-100 h-100 box-img"
                                src="/assets/img/boxes/icon.svg?h=a88673565b552e2106780d4605f1c06c">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js">
    </script>
    <script src="/assets/js/script.min.js?h=54242b27470e51c92964a3da6f09d0b9">
    </script>
</body>

</html>
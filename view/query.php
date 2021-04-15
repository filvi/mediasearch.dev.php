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

<body>
    <div id="bg-query"></div>
    <div class="d-flex justify-items-between flex-column">
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
        <div id="" class="d-flex actual-content align-items-center justify-content-center flex-column query-flex">
            <div id="title-query" class="d-flex align-items-center justify-items-center">
                <div id="text" class="container w-100 text-center">
                    <form action="/controller/q.php" class="d-inline-block w-auto">
                    <div class="text-white bg-yellow oswald fs-main-title d-flex align-middle text-center mb-0">
                        <input type="text" id="query" class="d-inline-block w-100 oswald py-2 px-4 w-100 mb-0 mr-0" name="q" value="<?php if(isset($q)){echo $q;} ?>">
                        <button type="submit" class=" d-inline-block h-100 query-btn my-auto">
                            <img src="/assets/img/misc/lens.svg" alt="" srcset="">
                        </button>
                        </div>
                    </form> 
                <!-- <h1 class="light-grey-color oswald text-center my-5 display-3">Choose one</h1> -->
                </div>
            </div>
            <div class="container mt-5 pb-5">
                <div class="mb-4">
                    <h4 class="roboto light-grey-color mb-0 text-center">What kind of assets are you looking for?</h4>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-md-6 my-2 d-flex justify-content-md-end justify-content-center">
                        <a class="d-inline-block" href="/image/<?php if(isset($q)){echo $q;} ?>">
                            <img id="box-images" class="box-img"
                                src="/assets/img/boxes/images.svg?h=bfbce78c40aa599c3060ca14b48406f2">
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-6 my-2 d-flex justify-content-md-start justify-content-center">
                        <a class="d-inline-block" href="/vector/<?php if(isset($q)){echo $q;} ?>">
                            <img id="box-vector" class="box-img"
                                src="/assets/img/boxes/vector.svg?h=323204eb8d24fbda11085467cb5cfb3f">
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-6 my-2 d-flex justify-content-md-end justify-content-center">
                        <a class="d-inline-block" href="/video/<?php if(isset($q)){echo $q;} ?>">
                            <img id="box-video" class="box-img"
                                src="/assets/img/boxes/video.svg?h=cfc7a0569fc26c6b8bcc4d81034f5084">
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-6 my-2 d-flex justify-content-md-start justify-content-center">
                        <a class="d-inline-block" href="/icon/<?php if(isset($q)){echo $q;} ?>">
                            <img id="box-icon" class="box-img"
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
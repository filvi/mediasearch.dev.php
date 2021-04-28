<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.css">
    <link rel="stylesheet" href="/assets/css/styles.css">
</head>
<?php 
if(isset($_REQUEST["q"])){
    $q = $_REQUEST("q");
}
?>

<body>
    <div id="bg-query">
        <?php
        include("assets/img/bg/bg-query.svg");
    ?>
    </div>
    <div class="d-flex justify-items-between flex-column">
        <div class="d-flex justify-content-between">
            <a id="logo" class="d-inline-block mxy-90" href="/">
                <div id="logo">
                    <img src="/assets/img/logo/logo.svg">
                </div>
            </a>
            <a id="credits" class="d-block mxy-90" href="https://filippovicari.com">
                <img id="fv-logo" src="/assets/img/fv.svg">
            </a>
        </div>
        <div id="" class="d-flex actual-content align-items-center justify-content-center flex-column query-flex">
            <div id="title-query" class="d-flex align-items-center justify-items-center">
                <div id="text" class="container w-100 text-center">
                    <form action="/controller/q.php" class="d-inline-block w-auto">
                        <div class="text-white bg-yellow oswald fs-main-title d-flex align-middle text-center mb-0">
                            <input type="text" id="query" class="d-inline-block w-100 oswald py-2 px-4 w-100 mb-0 mr-0"
                                name="q" value="<?php if(isset($q)){echo $q;} ?>">
                            <button type="submit" class=" d-inline-block h-100 query-btn my-auto">
                                <img src="/assets/img/misc/lens.svg" alt="" srcset="">
                            </button>
                        </div>
                    </form>
                    <!-- <h1 class="light-grey-color oswald text-center my-5 display-3">Choose one</h1> -->
                </div>
            </div>
            <div class="container mt-5 pb-5">
                <div class="mb-5">
                    <h4 class="roboto text-white mb-0 text-center">What kind of assets are you looking for?</h4>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-md-6 my-2 d-flex justify-content-md-end justify-content-center">
                        <a class="d-inline-block box-img" id="box-images" href="/image/<?php if(isset($q)){echo $q;} ?>">
                            <img  src="../assets/img/boxes/images.svg">
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-6 my-2 d-flex justify-content-md-start justify-content-center">
                        <a class="d-inline-block box-img" id="box-vector" href="/vector/<?php if(isset($q)){echo $q;} ?>">
                            <img  src="../assets/img/boxes/vector.svg">
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-6 my-2 d-flex justify-content-md-end justify-content-center">
                        <a class="d-inline-block box-img" id="box-video" href="/video/<?php if(isset($q)){echo $q;} ?>">
                            <img  src="../assets/img/boxes/video.svg">
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-6 my-2 d-flex justify-content-md-start justify-content-center">
                        <a class="d-inline-block box-img" id="box-icon" href="/icon/<?php if(isset($q)){echo $q;} ?>">
                            <img  src="../assets/img/boxes/icon.svg">

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
    <script src="/assets/js/script.min.js">
    </script>
</body>

</html>
<?php 

ob_start();
include("./view/partials/header.php");
$header = ob_get_clean();
if(isset($_REQUEST["q"])){
    $q = $_REQUEST("q");
}
$header = str_replace("{{title}}", "Vectors for: $q", $header);
echo $header;
$choice = "vector";
?>

<?php
if (isset($_REQUEST['ref'])){
    $bg = "bg-image-banana";
} else {
    $bg = "bg-image-vector";
}
?>
<body>
<div id="bg-vector" class="<?php echo $bg; ?>"></div>
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
        <div id="flex" class=" d-flex align-items-center justify-content-center flex-column query-flex margin-footer">
            <div id="title-query" class=" query-box d-flex align-items-center justify-items-center mx-auto">
                <div
                    class=" my-3 w-100 d-flex flex-column flex-sm-column flex-md-row align-items-center justify-content-around">
                    <h1 class="text-white oswald fs-main-title mb-0 text-right my-2">Vectors for
                    </h1>

                    <form action="/controller/q.php" class="d-inline-block w-auto mx-2 my-2">
                    <div class="text-white bg-yellow oswald fs-main-title d-flex align-middle text-center mb-0">
                        <input type="text" class="d-none" name="fw" value="vec">
                        <input type="text" id="query-vector" class="d-inline-block w-100 oswald py-2 px-4 w-100 mb-0 mr-0" name="q" value="<?php if(isset($q)){echo $q;} ?>">
                        <button type="submit" class=" d-inline-block h-100 query-btn my-auto">
                            <img src="/assets/img/misc/lens.svg" alt="" srcset="">
                        </button>
                        </div>
                    </form> 
                </div>
            </div>
            <div class="container-fluid mt-4 mb-5">
                <div class="main-content mb-5">
                    <div class="row mb-5" id="sitelist">
                        <?php
                    include("models/Websites.php");
                    $counter = 0;
                    foreach ($vectorlist as $sitename => $link) {
                        $lowername = mb_strtolower($sitename);
                        $uppername = mb_strtoupper($sitename);
                        $div =<<<HTML
                            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 my-2" data-index="$counter" data-site="$sitename" data-liked="None" data-section="vector">
                                <a class="d-flex bg-white border-black-thick mycard flex-column mycard" href="$link" target="_blank">
                                    <div class="mycard-content text-center">
                                        <img class="w-100 h-100"
                                            src="/assets/img/websites/$lowername.png?h=594594c908debdbc9ded1289473088ec">
                                    </div>
                                </a>
                                <div
                                    class="mycard-footer w-100 bg-mydark text-center align-self-end d-flex align-items-center justify-content-center pb-2">
                                    <a href="#" onclick="like(this, event, 'false')">
                                        <img class="mr-2" src="/assets/img/misc/ban.svg?h=95ca4de4994ff5d6728de72eb8d65e91">
                                    </a>
                                    <h4 class="oswald text-white d-inline-block mb-0 sitename">$uppername</h4>
                                    <a href="#" onclick="like(this, event, 'true')">
                                        <img class="ml-2"
                                            src="/assets/img/misc/heart.svg?h=96557e61f404ec4afc4f5f982aa5c833">
                                    </a>
                                </div>
                            </div>
                        HTML;
                        echo $div;
                        $counter += 1;
                    }
                    ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="footer" class="bg-dark-transparent fixed-bottom">
        <div class="container mb-0 my-2">
            <div class="row mb-0">
                <div class="col-sm-12 col-md-6 my-2 my-md-0 d-flex align-items-center justify-content-sm-center justify-content-md-end"
                    id="myfooter-text">
                    <h1 class="text-white oswald text-white mb-0 w-100">Need another asset type?</h1>
                </div>
                <div class="col-sm-12 col-md-6 align-lg-self-center" id="footer-icons">
                    <a class="mx-2" href="/image/<?php echo $q; ?>">
                        <img data-toggle="tooltip" data-bs-tooltip="" class="assets-bottom"
                            src="/assets/img/assets/images.svg?h=7799906d6e1ff82e95ba4acd18d25a24"
                            title="Search Images">
                    </a>
                    <a class="mx-2" href="/vector/<?php echo $q; ?>">
                        <img data-toggle="tooltip" data-bs-tooltip="" class="assets-bottom"
                            src="/assets/img/assets/vector.svg?h=1651652d2d33cc996dd989d7c434eb92"
                            title="Search vectors">
                    </a>
                    <a class="mx-2" href="/video/<?php echo $q; ?>">
                        <img data-toggle="tooltip" data-bs-tooltip="" class="assets-bottom"
                            src="/assets/img/assets/video.svg?h=654d72205900eaa083d16e96eb736d49" title="Search videos">
                    </a>
                    <a class="mx-2" href="/icon/<?php echo $q; ?>">
                        <img data-toggle="tooltip" data-bs-tooltip="" class="assets-bottom"
                            src="/assets/img/assets/icon.svg?h=52a2637b687f1d24c911a2ffe94897ca" title="Search icons">
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        
    </script>
    <?php

include("./view/partials/footer.php");
?>
<?php
ob_start();
include("./view/partials/header.php");
$header = ob_get_clean();

$header = str_replace("{{title}}", "This is a 404-eature", $header);
echo $header;
?>
<div id="bg-404" class="w-100 bg-image-404">
    </div>
    <div class="d-flex justify-content-between">
        <a class="d-inline-block mxy-90" href="/">
        <div id="logo"><img src="/assets/img/logo/logo.svg?h=7f70d5327fa12bdbc17571f5b8976726">
    </div>
</a><a id="credits" class="d-block mxy-90" href="https://filippovicari.com"><img id="fv-logo"
src="/assets/img/fv.svg?h=bb224de3d680905982105f74128e365f"></a></div>
<div id="main-text" class="margin-title mxy-90">
    <div id="main-title">
        <h1 class="text-white oswald fs-main-title text-shadow"><strong>This page is not a bug... It’s a
            404-eature</strong><br></h1>
        </div>
        <div id="main-subtext">
            <p class="roboto light-grey-color fs-28 mb-0 w-75 text-shadow">Our scientist are not yet able to
                understand your request, but wont surrender.<br>If you get here with a link it may be broken.<br>
                If the <u>query</u> contained anything else <u>letters</u> or <u>number</u> this might be the cause.</p>
                <h4 class="oswald text-uppercase light-grey-color mt-3">Mistakes can happen</h4>
                <p class="roboto light-grey-color fs-28 my-3 w-75 text-shadow">You may want to <a href="/"
                class="text-warning ">go back to the homepage</a> or listen to a song about mistakes by an emergent
                Italian artist.</p>
            </div>
                
            <div class="mx-auto ">
                <iframe src="https://open.spotify.com/embed/track/1tP7JG8iWuBWhO8hf3KPJU" width="300" height="380" frameborder="0"
                    allowtransparency="true" allow="encrypted-media"></iframe>
                    
                </div>
            </div>
        </div>
<?php include("./view/partials/footer.php"); ?>
<!DOCTYPE html>
<html lang="fa" class="w-100 h-100">

<head>
    <title>Coming Soon...</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

    <link rel="stylesheet" href="./assets/custom/css/style.css">
    <script src="./assets/custom/js/action.js"></script>

    <style>
        .bg-blur {
            background-color: rgba(0, 0, 0, .5);
        }

        .bg-img {
            /*background: url(https://free4kwallpapers.com/uploads/originals/2016/03/05/nature.-wallpaper_.jpg);*/
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
        }
    </style>
</head>

<body class=" w-100 h-100" style="">
    <div class="w-100 h-100 d-flex">
        <div class="d-flex flex-column w-100 justify-content-center shadow">
            <div class="row p-4 bg-blur justify-content-center">
                <h4 id="typing" class="text-light"></h4>
                <h4 class="text-danger invisible">.</h4>
            </div>
            <div class="row p-3 bg-blur justify-content-center">
                <a href="https://www.instagram.com/parsa_lmn/" target="_blank">
                    <i class="fa fa-instagram fa-15x text-light px-2"></i>
                </a>
                <a href="https://t.me/parsa_lmn" target="_blank">
                    <i class="fa fa-paper-plane fa-15x text-light px-2"></i>
                </a>
                <a href="https://ir.linkedin.com/in/parsa-larimian-338738148?trk=people-guest_profile-result-card_result-card_full-click"
                    target="_blank">
                    <i class="fa fa-linkedin fa-15x text-light px-2"></i>
                </a>
            </div>
        </div>
    </div>
    <footer style="position: absolute;bottom: 0;width: 100%;" class="shadow">
        <div class="d-flex justify-content-center p-3 text-white">
            <div class="">Email: &nbsp;</div>
            <div>parsa_lmn@yahoo.com</div>
        </div>
    </footer>

    <script>
        /* type js frame work*/
        var typed = new Typed("#typing", {
            strings: ["Coming Soon","به زودی"],
            typeSpeed: 100,
            backSpeed: 50,
            backDelay: 1500,
            startDelay: 0,
            loop: true
        });
        /* end type js frame work*/
    </script>
    

<?php
$xml=simplexml_load_file('https://www.bing.com/HPImageArchive.aspx?format=xml&idx=0&n=1&mkt=en-US');
$tt= $xml->image[0]->urlBase; 
$url= 'https://bing.com' . $tt . '_1920x1080.jpg';
//echo $bing_daily_img_url;
?>

<script>
var imageUrl = "<?php echo"$url"?>"; 
$("#para").html(imageUrl);
$("body").css({
            'background': 'url(' + imageUrl + ')',
            'background-position': 'center',
            'background-repeat': 'no-repeat',
            'background-size': 'cover'
        });
</script>

</body>

</html>
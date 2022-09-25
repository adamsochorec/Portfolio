<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Form Submission Success!">
    <meta name="keywords" content="success, form submission">
    <meta name="author" content="Adam Sochorec">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success | Adam Sochorec</title>
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/php/"; include($IPATH."head-links.php"); ?>
</head>

<body id="success">
    <main>
        <hr class="hide">
        <article class="wrapper narrow">
            <section class="flex-center">
                <dotlottie-player class="success-lottie" src="/lottie/success.lottie" background="transparent" speed="1"
                    autoplay></dotlottie-player>
            </section>
            <br>
            <h1 id="success" class="v2">Form submitted successfully!</h1>
            <br>
            <section class="flex-center">
                <div class="inputBox">
                    <a aria-describedby="about" href="/about">
                        <div aria-describedby="about" id="btn">return to about</div>
                        <div class="shadow-btn"></div>
                    </a>

                </div>
            </section>
        </article>
        <hr>
    </main>
    <!-- FOOTER START -->
    <footer>
        <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/php/"; include($IPATH."footer.php"); ?>
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <script src="https://unpkg.com/@dotlottie/player-component@1.0.0/dist/dotlottie-player.js"></script>
    </footer>
    <!-- FOOTER END -->
</body>

</html>
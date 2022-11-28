<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Web-projects | Adam Sochorec</title>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-head.php';
    ?>
    <meta name="robots" content="noindex" />
    <meta name="googlebot" content="noindex" />
  </head>

  <body id="web-projects">
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-nav-bar.php';
    ?>
    <main>
      <article id="gallery" class="wrapper-standard">
        <div class="pathname-container">
          <i
            ><span class="pathname"><a href="/works"></a> / </span>
            <span class="pathname-current web"></span
          ></i>
        </div>
        <br />
        <h1>-projects</h1>
        <br />
        <section class="grid-container">
            <a class="hh-stretch" href="/projects/cybersecurity">
                <div class="grid-item cybersecurity">
                  <div class="blur">
                    <span></span>
                  </div>
                </div>
              </a>
          <a class="hh-stretch" href="/projects/zebra-design/zebra-design">
            <div class="grid-item grid-item-1">
              <div class="blur">
                <span>Zebra-design</span>
              </div>
            </div>
          </a>
                <a class="hh-stretch" href="/projects/memos/memos">
                  <div class="grid-item grid-item-2">
                    <div class="blur">
                      <span>Memos</span>
                    </div>
                  </div>
                </a>
                <section>
        </section>
      </article>
    </main>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-footer.php';
    ?>
  </body>
</html>
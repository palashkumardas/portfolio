<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Palash Kumar Das</title>
        <link rel="stylesheet" href="frontend/assets/css/style.css">
        <link rel="stylesheet" href="frontend/assets/css/fontawesome.css">
        <link rel="stylesheet" href="../../cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
        <script src="../../cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
        @vite('resources/css/app.css')
    </head>
    <body>
        <div id="app"></div>
        @vite('resources/js/app.js')
        <script src="frontend/assets/vendors/js/glightbox.min.html"></script>

        <script type="text/javascript">
          const lightbox = GLightbox({
            'touchNavigation': true,
            'href': 'https://www.youtube.com/watch?v=J9lS14nM1xg',
            'type': 'video',
            'source': 'youtube', //vimeo, youtube or local
            'width': 900,
            'autoPlayVideos': 'true',
        });

        </script>
         <script src="frontend/assets/js/bootstrap.bundle.min.js"></script>
    </body>
</html>

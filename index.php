<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My favorite albums</title>
    <!-- Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link rel="stylesheet" href="./css/style.css">

    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <div id="app" class="centered-wrapper">
        <section class="container album-wrapper">
            <div class="album-box" v-for="(album, index) in albumsList">
                <article class="my-album">
                    <img :src="album.cover" alt="">
                    <h2 class="mt-1 mb-1"> {{ album.name }}</h2>
                    <p class="m-0">{{ album.artist }}</p>
                </article>
            </div>
        </section>
    </div>

    <script src="./js/script.js"></script>
</body>

</html>
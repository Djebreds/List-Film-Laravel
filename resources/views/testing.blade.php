<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Author: Refi Ahmad Fauzan , This page for landing page">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style-public-user.css') }}">

    <title>HELLO</title>
</head>

<style>
    body {
        font-family: sans-serif;
        line-height: 1.4;
        font-size: 18px;
        padding: 20px;
        max-width: 640px;
        margin: 0 auto;
    }

    .post {
        border-top: 1px solid #DDD;
        margin: 60px 0;
    }

    .post img {
        display: block;
        max-width: 100%;
    }

    .page-load-status {
        display: none; /* hidden by default */
        padding-top: 20px;
        border-top: 1px solid #DDD;
        text-align: center;
        color: #777;
    }
</style>

<body>

<h1>Infinite Scroll</h1>
<h1>Infinite Scroll</h1>

<div class="container"
     data-infinite-scroll='{ "path": ".pagination__next", "append": ".post", "history": false }'>
    <article class="post">
        <h1>1a - Lorem ipsum dolor sit amet</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tristique mauris nec sapien efficitur, sit amet
            varius est interdum. Curabitur quis sem felis. Curabitur at quam sit amet mi tempor tristique quis in lorem.
            Cras id felis sit amet erat accumsan ornare.</p>
        <p><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/orange-tree.jpg" alt="orange-tree"/></p>
        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
        <p>Nullam vel odio nec turpis consequat iaculis at ut nibh. Nulla interdum lacus vitae sapien porttitor congue
            sagittis ac felis.Curabitur in ligula porttitor, varius purus sed, elementum nibh. Nunc ut libero
            posuere.</p>
    </article>
    <article class="post">
        <h1>1b - Ullamcorper quam at</h1>
        <p>Ullamcorper quam at, hendrerit eros. Mauris quis vehicula enim.</p>
        <p><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/cat-nose.jpg" alt="cat nose"></p>
        <p>Duis elementum nisi tortor, ut elementum quam mattis condimentum. Aenean vitae massa sit amet ligula
            sollicitudin venenatis. Praesent ultrices laoreet hendrerit. Duis tempus ullamcorper enim, ac volutpat augue
            faucibus sit amet.</p>
        <p>Donec at consequat elit. Suspendisse dignissim ante vitae urna rutrum cursus. Morbi finibus semper facilisis.
            In varius sem ut turpis molestie volutpat. Duis ut posuere est. Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Duis malesuada placerat luctus. In eget feugiat sapien. Sed gravida ultrices accumsan.</p>
        <p>In nec ex at mi scelerisque malesuada.</p>
        <p>Nullam arcu diam, mollis sit amet condimentum et, finibus in ex. Morbi bibendum magna vel tortor fringilla
            efficitur. Aliquam sed lectus lacus.</p>
    </article>
    <article class="post">
        <h1>1c - Orci varius natoque penatibus et magnis dis parturient montes</h1>
        <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In varius turpis
            ipsum, et porta eros eleifend ullamcorper. Sed arcu nisl, rhoncus porta fermentum in, eleifend non
            dolor.</p>
        <p>Mauris sagittis a lectus eu fringilla. Maecenas varius cursus aliquam.</p>
        <p>Suspendisse maximus congue augue eu venenatis. Aliquam urna purus, suscipit ut purus vel, iaculis rhoncus
            nulla. Donec a velit elementum, pellentesque metus blandit, lacinia erat. Fusce pulvinar mattis erat ac
            efficitur. Pellentesque aliquam eleifend ligula, eu ullamcorper elit pretium sit amet.</p>
        <p>Praesent placerat eros sem, vel pretium libero pharetra nec. Morbi hendrerit eleifend commodo. Morbi sodales
            nunc purus, consequat eleifend nulla dignissim non.</p>
    </article>
    <article class="post">
        <h1>1d - Donec a urna in turpis maximus</h1>
        <p>Donec a urna in turpis maximus faucibus a nec mauris.</p>
        <p>Donec iaculis, justo a egestas venenatis, dui nisl faucibus urna, sit amet condimentum quam dui ut libero.
            Etiam aliquet urna quis nisi aliquam, vitae tincidunt est feugiat.</p>
        <p>Integer viverra at arcu quis faucibus. Praesent nec venenatis odio. Donec non mattis massa, quis vestibulum
            leo. Etiam eleifend diam ac magna egestas aliquam. Sed vulputate risus eget efficitur auctor. Mauris aliquam
            ac purus at semper. Praesent vulputate hendrerit eros, vitae semper turpis venenatis et. Proin et est felis.
            Etiam sem risus, elementum id cursus quis, laoreet quis orci. Cras eget fermentum lorem, vitae pharetra
            augue. Etiam tincidunt nulla faucibus, egestas lacus sed, semper metus.</p>
    </article>
</div>
<a class="pagination__next" href="{{ Route::current()->getName() }}"></a>

<div class="page-load-status">
    <div class="loader-ellips infinite-scroll-request">
        <span class="loader-ellips__dot"></span>
        <span class="loader-ellips__dot"></span>
        <span class="loader-ellips__dot"></span>
        <span class="loader-ellips__dot"></span>
    </div>
    <p class="infinite-scroll-last">End of content</p>
    <p class="infinite-scroll-error">No more pages to load</p>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.slim.js"
        integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
</script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="https://unpkg.com/infinite-scroll@4/dist/infinite-scroll.pkgd.min.js"></script>
{{--<script src="{{ URL::asset('assets/js/testing.js') }}"></script>--}}

</body>
</html>

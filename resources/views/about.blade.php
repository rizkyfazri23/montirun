@extends('layout.home')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/about/css/dev.style.css">
    <title>About</title>
</head>

<body>
    <br><br><br>
    <div class="container">
        <div class="box">
            <figure class="snip0057 orange">
                <figcaption>
                    <h2>Abdul <span>Arahman</span></h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi harum tempora at sit nesciunt
                        molestias repellendus consequuntur dignissimos delectus est omnis labore dolorem illo quibusdam
                        enim, rem natus, iure quam.
                    </p>
                    <div class="icons">
                        <a href="#"><i class="ion-ios-home"></i></a>
                        <a href="#"><i class="ion-ios-email"></i></a>
                        <a href="#"><i class="ion-ios-telephone"></i>
                        </a>
                    </div>
                </figcaption>
                <div class="image"><img src="/about/dev_img/arahman.png" height="480px" alt="sample4" /></div>
                <div class="position">Developer</div>
            </figure>
            <figure class="snip0057 orange">
                <figcaption>
                    <h2>Tiffany <span>Case</span></h2>
                    <p>That's the whole problem with science. You've got a bunch of empiricists trying to describe
                        things of
                        unimaginable wonder.
                    </p>
                    <div class="icons">
                        <a href="#"><i class="ion-ios-home"></i></a>
                        <a href="#"><i class="ion-ios-email"></i></a>
                        <a href="#"><i class="ion-ios-telephone"></i>
                        </a>
                    </div>
                </figcaption>
                <div class="image"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sq-sample3.jpg"
                        alt="sample3" /></div>
                <div class="position">Software Engineer</div>
            </figure>
        </div>
    </div>
</body>

</html>

@endsection
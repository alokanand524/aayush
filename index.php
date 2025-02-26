<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aayush - Waffers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <nav class="navbar navbar-expand-lg container">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="image/logo/aayus_logo.png" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
   
    
    <section class="hero-slider" id="slider">
        <img src="image/image_1.jpeg" class="active" alt="Wafer 1">
        <img src="image/image_2.jpeg" alt="Wafer 2">
        <img src="image/image_3.jpeg" alt="Wafer 3">
    </section>
    
    <script>
        let slides = document.querySelectorAll(".hero-slider img");
        let currentIndex = 0;
        let interval;

        function startSlider() {
            interval = setInterval(nextSlide, 2000);
        }

        function stopSlider() {
            clearInterval(interval);
        }

        function nextSlide() {
            slides[currentIndex].classList.remove("active");
            currentIndex = (currentIndex + 1) % slides.length;
            slides[currentIndex].classList.add("active");
        }

        // Start the slider initially
        startSlider();

        // Pause the slider on hover, resume on mouse leave
        document.getElementById("slider").addEventListener("mouseenter", stopSlider);
        document.getElementById("slider").addEventListener("mouseleave", startSlider);
    </script>
    
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" href="style.css">

    <title>Document</title>

    <style>
        .people-review {
            width: 100%;
            height: 500px;
            background: linear-gradient(180deg, rgba(2, 0, 36, 1) 0%, rgb(255, 0, 0) 0%, rgba(255, 239, 0, 1) 100%);
            padding: 50px;
        }

        .what-we-say {
            width: 100%;
            height: 500px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        @import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css);
        @import url(https://fonts.googleapis.com/css?family=Raleway:400,800);

        figure.snip1157 {
            font-family: 'Raleway', Arial, sans-serif;
            position: relative;
            overflow: hidden;
            margin: 10px;
            min-width: 220px;
            max-width: 310px;
            width: 100%;
            color: #333;
            text-align: left;
            box-shadow: none !important;
        }

        figure.snip1157 * {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-transition: all 0.35s cubic-bezier(0.25, 0.5, 0.5, 0.9);
            transition: all 0.35s cubic-bezier(0.25, 0.5, 0.5, 0.9);
        }

        figure.snip1157 img {
            max-width: 100%;
            vertical-align: middle;
            height: 90px;
            width: 90px;
            border-radius: 50%;
            margin: 40px 0 0 10px;
        }

        figure.snip1157 blockquote {
            display: block;
            border-radius: 8px;
            position: relative;
            background-color: yellow;
            padding: 25px 50px 30px 50px;
            font-size: 0.8em;
            font-weight: 500;
            margin: 0;
            line-height: 1.6em;
            font-style: italic;
        }

        figure.snip1157 blockquote:before,
        figure.snip1157 blockquote:after {
            font-family: 'FontAwesome';
            content: "\201C";
            position: absolute;
            font-size: 50px;
            opacity: 0.3;
            font-style: normal;
        }

        figure.snip1157 blockquote:before {
            top: 25px;
            left: 20px;
        }

        figure.snip1157 blockquote:after {
            content: "\201D";
            right: 20px;
            bottom: 0;
        }

        figure.snip1157 .arrow {
            top: 100%;
            width: 0;
            height: 0;
            border-left: 0 solid transparent;
            border-right: 25px solid transparent;
            border-top: 25px solid #fafafa;
            margin: 0;
            position: absolute;
        }

        figure.snip1157 .author {
            position: absolute;
            bottom: 45px;
            padding: 0 10px 0 120px;
            margin: 0;
            text-transform: uppercase;
            color: #ffffff;
            -webkit-transform: translateY(50%);
            transform: translateY(50%);
        }

        figure.snip1157 .author h5 {
            opacity: 0.8;
            margin: 0;
            font-weight: 800;
        }

        figure.snip1157 .author h5 span {
            font-weight: 400;
            text-transform: none;
            padding-left: 5px;
        }

        .website-divider-container-976942 {
            overflow: hidden;
            position: relative;
            height: 100%;
            bottom: -37px;
        }

        .divider-img-976942 {
            position: relative;
            width: 100%;
            height: 37px;
            float: right;
            transform: scale(-1, -1);
            top: 0px;
            right: 0px;
            fill: rgb(255 255 255);
            z-index: 1;
        }
    </style>


</head>

<body>
    <?php include 'header.php'; ?>

    <!-- Hero Section -->
    <section class="hero-section py-3 hero-decor position-relative">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 style="color: yellow; font-weight:bold;">Welcome to Chips Wafer</h1>
                    <p>Discover the crunchiest and tastiest chips in town!</p>
                    <a href="about.php" class="btn btn-danger">Learn More</a>
                </div>
                <div class="col-md-6">
                    <img src="image/heroImage.png" alt="Chips" class="img-fluid">
                </div>
            </div>
        </div>

        <!-- SVG Divider -->
        <div id="divider_id" class="website-divider-container-751975">

            <svg xmlns="http://www.w3.org/2000/svg" class="divider-img-751975" viewBox="0 0 1080 137" preserveAspectRatio="none">
                <path d="M 0,10.174557 C 83.419822,8.405668 117.65911,41.78116 204.11379,44.65308 290.56846,47.52499 396.02558,-7.4328 620.04248,94.40134 782.19141,29.627636 825.67279,15.823104 1080,98.55518 V 137 H 0 Z" style="opacity:0.5"></path>
                <path d="M 0,45.10182 C 216.27861,-66.146913 327.90348,63.09813 416.42665,63.52904 504.94982,63.95995 530.42054,22.125806 615.37532,25.210412 700.33012,28.295019 790.77619,132.60682 1080,31.125744 V 137 H 0 Z" style="opacity:0.25"></path>
                <path d="M 0,137 V 59.03716 c 158.97703,52.21241 257.17659,0.48065 375.35967,2.17167 118.18308,1.69101 168.54911,29.1665 243.12679,30.10771 C 693.06415,92.25775 855.93515,29.278599 1080,73.61449 V 137 Z" style="opacity:0.85"></path>
            </svg>

        </div>
    </section>


    <div class="text-container container">
        <span class="blended-text">A A Y U S H</span>
    </div>


    <section class="product-section container">
        <div class="product-info">
            <div class="container-details">
                <div class="image-box">
                    <img src="image/wf_1-Photoroom.png" alt="Sample Image">
                </div>
                <div class="desc-box">
                    <p>This is a description of the image, placed behind it.</p>
                </div>
            </div>

            <div class="container-details">
                <div class="image-box">
                    <img src="image/wf_4-Photoroom.png" alt="Sample Image">
                </div>
                <div class="desc-box">
                    <p>This is a description of the image, placed behind it.</p>
                </div>
            </div>

            <div class="container-details">
                <div class="image-box">
                    <img src="image/wf_3-Photoroom.png" alt="Sample Image">
                </div>
                <div class="desc-box">
                    <p>This is a description of the image, placed behind it.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="container-sec">
        <div class="container flex">
            <div class="image-section"> <img src="image/wf_4-Photoroom.png" alt=""></div>
            <div class="text-section">
                <h1>Modern Web Design</h1>
                <p>Enhance your web presence with a clean, responsive, and modern layout.</p>
                <button>Learn More</button>
            </div>
        </div>
    </section>

    <section class="sec-4">
        <div class="container">
            <div class="body-container">
                <section class="hero">
                    <div class="text-content">
                        <h1>Enjoy healthy and delicious food.</h1>
                        <button class="order-btn">Order Now</button>
                    </div>
                    <div class="image-content">
                        <img src="image/heroImage.png" alt="Milkshake" class="main-image">
                        <div class="testimonial">
                            <p>Hands down, the best milkshakes around. Perfectly blended with fresh ingredients and incredible flavors.</p>
                            <!-- <p><strong>Ryan Garcia</strong> ⭐⭐⭐⭐⭐</p> -->
                        </div>
                    </div>
                </section>
                <section class="food-items">
                    <div class="item">
                        <img src="image/wf_4-Photoroom.png" alt="Cookies">
                    </div>
                    <div class="item">
                        <img src="image/wf_2-Photoroom.png" alt="Pastry">
                    </div>
                    <div class="item">
                        <img src="image/wf_3-Photoroom.png" alt="Chocolate Milkshake">
                    </div>
                </section>
                <section class="ratings">
                    <!-- <p>4.2k+ Rating ⭐ 4.8</p> -->
                </section>
            </div>
        </div>
    </section>





    <!-- Featured Products Section -->
    <section class="featured-products py-5">
        <div class="container">
            <h2 class="text-center mb-4" style="color:red; padding-top: 1rem;">Featured Products</h2>
            <div class="row py-5">
                <div class="col-md-4 adjust-product">
                    <div class="card">
                        <img src="image/wf_4-Photoroom.png" alt="Chips 1">
                        <div class="card-body">
                            <h5 class="card-title">Classic Khichadi</h5>
                            <p class="card-text">A salty flavour of test.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 adjust-product">
                    <div class="card">
                        <img src="image/wf_1-Photoroom.png" alt="Chips 2">
                        <div class="card-body">
                            <h5 class="card-title">Cream Pasta</h5>
                            <p class="card-text">A creamy and tangy perfection.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 adjust-product">
                    <div class="card">
                        <img src="image/wf_3-Photoroom.png" alt="Chips 3">
                        <div class="card-body">
                            <h5 class="card-title">Spicy Kurkure</h5>
                            <p class="card-text">Hot and spicy test</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div id="divider_id" class="website-divider-container-976942">

        <svg xmlns="http://www.w3.org/2000/svg" class="divider-img-976942" viewBox="0 0 1080 200" preserveAspectRatio="none">
            <path d="M 1026,200 1053.0001,4.0031609e-6 1080,200 Z M 972,200 998.99999,4.0031609e-6 1026,200 Z M 917.99997,200 944.99996,6.0047413e-6 972,200 Z M 864,200 890.99998,4.0031609e-6 917.99997,200 Z M 809.99997,200 836.99996,4.0031609e-6 864,200 Z M 755.99999,200 782.99998,4.0031609e-6 809.99997,200 Z M 701.99997,200 729.00001,4.0031609e-6 755.99999,200 Z M 647.99999,200 674.99998,8.0063217e-6 701.99997,200 Z M 593.99997,200 621,8.0063217e-6 647.99999,200 Z M 539.99999,200 566.99998,7.0055315e-6 593.99997,200 Z M 485.99997,200 513,0 539.99999,200 Z m -53.99999,0 27,-200 26.99999,200 z m -54,0 27,-199.9999979984196 L 431.99998,200 Z m -53.99999,0 26.99999,-200 27,200 z m -54,0 27,-200 27,200 z m -54,0 26.99999,-200 27.00001,200 z m -54,0 27,-200 27,200 z M 108,200 134.99999,4.0031609e-6 161.99999,200 Z M 53.999995,200 80.999993,4.0031609e-6 108,200 Z M 0,200 26.999995,3.0023706e-6 53.999995,200 Z"></path>
        </svg>

    </div>
    <section class="people-review">
        <div class="what-we-say container">

            <figure class="snip1157">
                <blockquote>Calvin: You know sometimes when I'm talking, my words can't keep up with my thoughts... I wonder why
                    we think faster than we speak. Hobbes: Probably so we can think twice.
                    <div class="arrow"></div>
                </blockquote>
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sq-sample3.jpg" alt="sq-sample3" />
                <div class="author">
                    <h5>Pelican Steve <span> LIttleSnippets.net</span></h5>
                </div>
            </figure>
            <figure class="snip1157 hover">
                <blockquote>Thank you. before I begin, I'd like everyone to notice that my report is in a professional, clear
                    plastic binder...When a report looks this good, you know it'll get an A. That's a tip kids. Write it down.
                    <div class="arrow"></div>
                </blockquote>
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sq-sample27.jpg" alt="sq-sample27" />
                <div class="author">
                    <h5>Max Conversion<span> LIttleSnippets.net</span></h5>
                </div>
            </figure>
            <figure class="snip1157">
                <blockquote>My behaviour is addictive functioning in a disease process of toxic co-dependency. I need holistic
                    healing and wellness before I'll accept any responsibility for my actions.
                    <div class="arrow"></div>
                </blockquote>
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sq-sample17.jpg" alt="sq-sample17" />
                <div class="author">
                    <h5>Eleanor Faint<span> LIttleSnippets.net</span></h5>
                </div>
            </figure>
        </div>

    </section>


    <!-- <div style="height: 100vh;"></div> -->

    <?php include 'footer.php'; ?>
</body>

</html>
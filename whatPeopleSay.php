<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
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


        /* Demo purposes only */
        html {
            height: 100%;
        }

        body {
            background-color:rgb(255, 0, 0);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-flow: wrap;
            margin: 0;
            height: 100%;
        }
    </style>
</head>

<body>
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
</body>

</html>
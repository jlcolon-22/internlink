<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Title</title>

    <!-- Include jQuery library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <style>
        @charset "UTF-8";

        * {
            outline: none;
        }

        body,
        html {
            margin: 0;
            background: #eee;
            font-family: "Ubuntu", "微軟正黑體", sans-serif;
            letter-spacing: 0.65px;
            font-size: 15px;
            color: #555;
            cursor: default;
        }

        a {
            text-decoration: none;
            color: #555;
            display: block;
            transition-duration: 0.3s;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        h3 {
            color: #3d405b;
            margin: 10px 0;
            text-transform: uppercase;
            font-size: 18px;
        }

        .resume {
            width: 870px;
            background: #fbfbfb;
            margin: 20px auto;
            border: 1px solid #bbb;
            box-shadow: 0 0 20px -3px #bbb;
            position: relative;
            display: flex;
        }

        .resume::before {
            content: "";
            width: 100%;
            height: 6px;
            background: #8d9e78;
            position: absolute;
            bottom: 0;
            left: 0;
        }

        .resume::after {
            content: "";
            display: block;
            clear: both;
        }

        .resume .base,
        .resume .func {
            box-sizing: border-box;
            float: left;
        }

        .resume .base>div,
        .resume .func>div {
            padding-bottom: 10px;
        }

        .resume .base>div:last-of-type,
        .resume .func>div:last-of-type {
            padding-bottom: 0;
        }

        .resume .base {
            width: 280px;
            padding: 30px 15px;
            background: rgba(238, 238, 238, 0.6);
        }

        .resume .base .profile {
            background: #8d9e78;
            padding: 30px 15px 5px 15px;
            margin: -30px -15px 45px -15px;
            position: relative;
            z-index: 2;
        }

        .resume .base .profile::after {
            content: "";
            position: absolute;
            background: #8d9e78;
            width: 100%;
            height: 30px;
            bottom: -15px;
            left: 0;
            transform: skewY(-5deg);
            z-index: -1;
        }

        .resume .base .profile .photo img {
            width: 100%;
            border-radius: 50%;
        }

        .resume .base .profile .info {
            text-align: center;
            color: #fcfcfc;
        }

        .resume .base .profile .info .name {
            margin-top: 10px;
            margin-bottom: 0;
            font-size: 1.5em;
            font-weight: normal;
        }

        .resume .base .contact div {
            line-height: 24px;
        }

        .resume .base .contact div a:hover {
            color: #e07a5f;
        }


        .resume .base .contact div a:hover span::after {
            width: 100%;
        }

        .resume .base .contact div:hover i {
            color: #e07a5f;
        }

        .resume .base .contact div i {
            color: #8d9e78;
            width: 20px;
            height: 20px;
            font-size: 20px;
            text-align: center;
            margin-right: 15px;
            transition-duration: 0.3s;
        }

        .resume .base .contact div span {
            position: relative;
        }

        .resume .base .contact div span::after {
            content: "";
            position: absolute;
            background: #e07a5f;
            height: 1px;
            width: 0;
            bottom: 0;
            left: 0;
            transition-duration: 0.3s;
        }

        .resume .base .follow .box {
            text-align: center;
            vertical-align: middle;
        }

        .resume .base .follow .box a {
            display: inline-block;
            vertical-align: text-bottom;
        }

        .resume .base .follow .box a:hover i {
            background: #e07a5f;
            border-radius: 5px;
            transform: rotate(45deg) scale(0.8);
        }

        .resume .base .follow .box a:hover i::before {
            transform: rotate(-45deg) scale(1.5);
        }

        .resume .base .follow .box i {
            display: inline-block;
            font-size: 30px;
            background: #8d9e78;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            line-height: 60px;
            color: #fcfcfc;
            margin: 0 10px 10px 10px;
            transition-duration: 0.3s;
        }

        .resume .base .follow .box i::before {
            transition-duration: 0.3s;
        }

        .resume .base .follow .box i.fa::before {
            display: block;
        }

        .resume .func {
            width: 645px;
            padding: 30px 25px;
        }

        .resume .func:hover>div {
            transition-duration: 0.3s;
        }

        .resume .func:hover>div:hover h3 {
            letter-spacing: 1.6px;
        }

        .resume .func:hover>div:hover h3 i {
            transform: scale(1.2);
        }

        .resume .func:hover>div:not(:hover) {
            opacity: 0.5;
        }

        .resume .func h3 {
            transition-duration: 0.3s;
            margin-top: 0;
        }

        .resume .func h3 i {
            color: #fcfcfc;
            background: #8d9e78;
            width: 42px;
            height: 42px;
            font-size: 20px;
            line-height: 42px;
            border-radius: 50%;
            text-align: center;
            vertical-align: middle;
            margin-right: 8px;
            transition-duration: 0.3s;
        }

        .resume .func .work,
        .resume .func .edu {
            float: left;
        }

        .resume .func .work small,
        .resume .func .edu small {
            display: block;
            opacity: 0.7;

        }

        .resume .func .work ul li,
        .resume .func .edu ul li {
            position: relative;
            margin-left: 15px;
            padding-left: 25px;
            padding-bottom: 15px;
        }

        .resume .func .work ul li:hover::before,
        .resume .func .edu ul li:hover::before {
            animation: circle 1.2s infinite;
        }

        .resume .func .work ul li:hover span,
        .resume .func .edu ul li:hover span {
            color: #e07a5f;
        }

        @keyframes circle {
            from {
                box-shadow: 0 0 0 0px #3d405b;
            }

            to {
                box-shadow: 0 0 0 6px rgba(61, 64, 91, 0);
            }
        }

        .resume .func .work ul li:first-of-type::before,
        .resume .func .edu ul li:first-of-type::before {
            width: 10px;
            height: 10px;
            left: -2px;
        }

        .resume .func .work ul li:last-of-type,
        .resume .func .edu ul li:last-of-type {
            padding-bottom: 3px;
        }

        .resume .func .work ul li:last-of-type::after,
        .resume .func .edu ul li:last-of-type::after {
            border-radius: 1.5px;
        }

        .resume .func .work ul li::before,
        .resume .func .work ul li::after,
        .resume .func .edu ul li::before,
        .resume .func .edu ul li::after {
            content: "";
            display: block;
            position: absolute;
        }

        .resume .func .work ul li::before,
        .resume .func .edu ul li::before {
            width: 7px;
            height: 7px;
            border: 3px solid #3d405b;
            background: #fcfcfc;
            border-radius: 50%;
            left: 0;
            z-index: 1;
        }

        .resume .func .work ul li::after,
        .resume .func .edu ul li::after {
            width: 3px;
            height: 100%;
            background: #3d405b;
            left: 5px;
            top: 0;
        }

        .resume .func .work ul li span,
        .resume .func .edu ul li span {
            transition-duration: 0.3s;
        }

        .resume .func .work {
            width: 42%;
        }

        .resume .func .edu {
            width: 58%;
        }

        .resume .func .skills-prog {
            clear: both;
        }

        .resume .func .skills-prog ul {
            margin-left: 15px;
        }

        .resume .func .skills-prog ul li {
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            transition-duration: 0.3s;
        }

        .resume .func .skills-prog ul li:hover {
            color: #e07a5f;
        }

        .resume .func .skills-prog ul li:hover .skills-bar .bar {
            background: #e07a5f;
            box-shadow: 0 0 0 1px #e07a5f;
        }

        .resume .func .skills-prog ul li span {
            display: block;
            width: 120px;
        }

        .resume .func .skills-prog ul li .skills-bar {
            background: #cdcdcd;
            height: 2px;
            width: calc(100% - 120px);
            position: relative;
            border-radius: 2px;
        }

        .resume .func .skills-prog ul li .skills-bar .bar {
            position: absolute;
            top: -1px;
            height: 4px;
            background: #8d9e78;
            box-shadow: 0 0 0 #8d9e78;
            border-radius: 5px;
        }

        .resume .func .skills-soft ul {
            display: flex;
            justify-content: space-between;
            text-align: center;
        }

        .resume .func .skills-soft ul li {
            position: relative;
        }

        .resume .func .skills-soft ul li:hover svg .cbar {
            stroke: #e07a5f;
            stroke-width: 4px;
        }

        .resume .func .skills-soft ul li:hover span,
        .resume .func .skills-soft ul li:hover small {
            transform: scale(1.2);
        }

        .resume .func .skills-soft ul li svg {
            width: 95%;
            fill: transparent;
            transform: rotate(-90deg);
        }

        .resume .func .skills-soft ul li svg circle {
            stroke-width: 1px;
            stroke: #cdcdcd;
        }

        .resume .func .skills-soft ul li svg .cbar {
            stroke-width: 3px;
            stroke: #8d9e78;
            stroke-linecap: round;
        }

        .resume .func .skills-soft ul li span,
        .resume .func .skills-soft ul li small {
            position: absolute;
            display: block;
            width: 100%;
            top: 52%;
            transition-duration: 0.3s;
        }

        .resume .func .skills-soft ul li span {
            top: 40%;
        }


        .schooldetail {
            text-transform: uppercase;
        }

        .contact span {
            font-size: 11px;
        }
    </style>
</head>

<body>
    <div class="resume">
        <div class="base">
            <div class="profile">
                <div class="photo"><img
                        src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/764024/profile/profile-512.jpg" /></div>
                <div class="info">
                    <h4 class="name">dsadadad</h4>
                    <small class="schooldetail">283101038<br>BSIT | </small>
                    <small class="job">22</small>
                </div>
            </div>
            <div class="about">
                <h3>About me</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro, doloremque.</p>
            </div>
            <div class="contact">
                <h3>Contact</h3>
                <div class="call"><i class="fa fa-phone"></i><span>091014213</span></div>
                <div class="address"><i class="fa fa-map-marker"></i><span>Antipolo City</span></div>
                <div class="LinkedIn"><i class="fa fa-envelope"></i><span>Linkin</span></div>
                <div class="github"><i class="fa fa-envelope"></i><span>Github</span></div>
                <div class="email"><i class="fa fa-envelope"></i><span>email@gmail.com</span></div>

            </div>
            <div class="follow">
                <h3>Reference</h3>
                <div class="box">

                </div>
            </div>
        </div>
        <div class="func">
            <div class="work">
                <h3><i class="fa fa-briefcase"></i>Education</h3>
                <ul>
                    <li><span>sdadadad</span><small>Jan 9999 - Dec 1321</small></li>
                    <li><span>sdadadad</span><small>Jan 9999 - Dec 1321</small></li>
                    <li><span>sdadadad</span><small>Jan 9999 - Dec 1321</small></li>
                    <li><span>sdadadad</span><small>Jan 9999 - Present</small></li>
                </ul>
            </div>
            <div class="edu">
                <h3><i class="fa fa-graduation-cap"></i>Certification</h3>
                <ul>
                    <li><span>Department of Information Management</span></li>
                    <li><span>Department of Data Processing</span></li>
                </ul>
            </div>

            <!-- program part-->

            <div class="skills-prog">
                <h3><i class="fa fa-code"></i>Programming Skills</h3>
                <ul>

                    <li data-percent="22">
                        <span>JAVA</span>
                        <div class="skills-bar">
                            <div class="bar"></div>
                        </div>
                    </li>

                    <li data-percent="33">
                        <span>JAVASCRIPT</span>
                        <div class="skills-bar">
                            <div class="bar"></div>
                        </div>
                    </li>

                    <li data-percent="33">
                        <span>PHP</span>
                        <div class="skills-bar">
                            <div class="bar"></div>
                        </div>
                    </li>

                    <li data-percent="88">
                        <span>HTML</span>
                        <div class="skills-bar">
                            <div class="bar"></div>
                        </div>
                    </li>


                    <li data-percent="11">
                        <span>CSS</span>
                        <div class="skills-bar">
                            <div class="bar"></div>
                        </div>
                    </li>

                </ul>
            </div>

            <!-- program end-->


            <!-- hardware part-->

            <div class="skills-prog">
                <h3><i class="fa fa-code"></i>Hardware Skills</h3>
                <ul>

                    <li data-percent="33">
                        <span>SSS</span>
                        <div class="skills-bar">
                            <div class="bar"></div>
                        </div>
                    </li>

                    <li data-percent="66">
                        <span>SSSS</span>
                        <div class="skills-bar">
                            <div class="bar"></div>
                        </div>
                    </li>

                    <li data-percent="99">
                        <span>XXXX</span>
                        <div class="skills-bar">
                            <div class="bar"></div>
                        </div>
                    </li>

                    <li data-percent="88">
                        <span>TTTT</span>
                        <div class="skills-bar">
                            <div class="bar"></div>
                        </div>
                    </li>

                    <li data-percent="33">
                        <span>DSADADAD</span>
                        <div class="skills-bar">
                            <div class="bar"></div>
                        </div>
                    </li>

                </ul>
            </div>

            <!-- hardware end-->


            <!-- software part-->

            <div class="skills-soft">
                <h3><i class="fa fa-th-list"></i>Software Skills</h3>
                <ul>

                    <li data-percent="1">
                        <svg viewbox="0 0 100 100">
                            <circle cx="50" cy="50" r="45"></circle>
                            <circle class="cbar" cx="50" cy="50" r="45"></circle>
                        </svg><span>SSS</span><small></small>
                    </li>

                    <li data-percent="44">
                        <svg viewbox="0 0 100 100">
                            <circle cx="50" cy="50" r="45"></circle>
                            <circle class="cbar" cx="50" cy="50" r="45"></circle>
                        </svg><span>XXX</span><small></small>
                    </li>

                    <li data-percent="33">
                        <svg viewbox="0 0 100 100">
                            <circle cx="50" cy="50" r="45"></circle>
                            <circle class="cbar" cx="50" cy="50" r="45"></circle>
                        </svg><span>TTT</span><small></small>
                    </li>

                    <li data-percent="99">
                        <svg viewbox="0 0 100 100">
                            <circle cx="50" cy="50" r="45"></circle>
                            <circle class="cbar" cx="50" cy="50" r="45"></circle>
                        </svg><span>KKK</span><small></small>
                    </li>

                </ul>
            </div>

            <!-- software end -->

        </div>
    </div>
    <script>
        (function() {
            $('.skills-prog li').find('.skills-bar').each(function(i) {
                $(this).find('.bar').delay(i * 150).animate({
                    width: $(this).parents().attr('data-percent') + '%'
                }, 1000, 'linear', function() {
                    return $(this).css({
                        'transition-duration': '.5s'
                    });
                });
            });

            $('.skills-soft li').find('svg').each(function(i) {
                var c, cbar, circle, percent, r;
                circle = $(this).children('.cbar');
                r = circle.attr('r');
                c = Math.PI * (r * 2);
                percent = $(this).parent().data('percent');
                cbar = ((100 - percent) / 100) * c;
                circle.css({
                    'stroke-dashoffset': c,
                    'stroke-dasharray': c
                });
                circle.delay(i * 150).animate({
                    strokeDashoffset: cbar
                }, 1000, 'linear', function() {
                    return circle.css({
                        'transition-duration': '.3s'
                    });
                });
                $(this).siblings('small').prop('Counter', 0).delay(i * 150).animate({
                    Counter: percent
                }, {
                    duration: 1000,
                    step: function(now) {
                        return $(this).text(Math.ceil(now) + '%');
                    }
                });
            });

        }).call(this);
    </script>
</body>

</html>

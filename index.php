<!doctype html>
<html lang="en">

<head>
    <?php
        require "sharedFiles/headtags.php";
    ?>


    <title>MBTI TR</title>

    <style>
        
        .topnav {
            overflow: hidden;
            background-color: #333;
        }

        .topnav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 15px 30px;
            text-decoration: none;
            font-size: 20px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav a.active {
            background-color: #04AA6D;
            padding: 15px 60px;
            color: white;
        }

        .topnav .icon {
            display: none;
        }

        @media screen and (max-width: 600px) {
            .topnav a:not(.active) {
                display: none;
            }

            .topnav a.icon {
                float: right;
                display: block;
            }

            .topnav.responsive {
                position: relative;
            }

            .topnav.responsive .icon {
                position: absolute;
                right: 0;
                top: 0;
            }

            .topnav.responsive a {
                float: none !important;
                display: block;
                text-align: left;
            }
        }

    </style>

</head>

<body>

    <div class="topnav" id="myTopnav">
        <a href="#home" class="active">MBTITR</a>
        <a href="#news">Enagram</a>
        <a href="#contact">MBTI</a>
        <a href="#about">Sosyonik</a>
        <a href="#about" class="fr">İletişim</a>
        <a href="#about" class="fr">Site haritası</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>

</body>

<script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
</script>

</html>
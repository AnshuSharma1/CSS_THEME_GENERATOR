<?php
@session_start();

//If content was sent?
if (count($_POST) > 0) {
    //File open
    $show = fopen("Layout3_show.html", "w") or die("Unable to open file!");
    $style = fopen("Layout3_style.css", "w");

    // Mention of doctype,html,body,meta tags along with mention to css files and google fonts . Mention of title='layout'
    fwrite($show, "<!DOCTYPE html>\n<html>\n<head>\n    <title>Layout</title>\n    <meta charset=\"UTF-8\">\n    <link rel=\"stylesheet\" href=\"Layout3_style.css\">\n    <link href=\"https://fonts.googleapis.com/css?family=Comfortaa|Crete+Round|Dancing+Script|Fresca|Oxygen|Pacifico|Raleway|Roboto|Satisfy|Yantramanav\"
          rel=\"stylesheet\">\n</head>\n");

    //Adding font-style and font-size
    $fontstyle = $_POST['font-style'];
    $fontsize = $_POST['font-size'];
    fwrite($style, "*{\nfont-family:" . $fontstyle . ";\nfont-size:" . $fontsize . "px;\nfont-weight: 400;\nline-height:  1.8;\n}\n");

    fwrite($show, "<body>\n<div class=\"maincontainer\">\n");
    //Setting Container parameters

    //If container is set to be fixed
    $container_width = $_POST['container_width'];
    if ($_POST['container_type'] == "fixed") {
        fwrite($style, ".maincontainer{\nwidth: " . $container_width . "px;\n");

    }

    //If container is set to be fluid
    if ($_POST['container_type'] == "fluid") {
        $container_max_width = $_POST['max-width'];
        $container_min_width = $_POST['min-width'];
        fwrite($style, ".maincontainer{\nmax-width: " . $container_max_width . "px;\n");
        fwrite($style, "min-width: " . $container_min_width . "px; \n");
    }

    //setting alignment of main container and margin accordingly
    if (count($_POST['main-margin']) >= 0) {
        $main_margin = $_POST['main-margin'];
        if ($_POST['cont_align'] == 'Center') {
            fwrite($style, "margin:" . $main_margin . "px auto;\n");
        }
        if ($_POST['cont_align'] == 'Left') {
            fwrite($style, "float: left;\nmargin: " . $main_margin . "px;\n");
        }
        if ($_POST['cont_align'] == 'Right') {
            fwrite($style, "float: right;\nmargin: " . $main_margin . "px;\n");
        }
    }

    //setting padding of main container
    if (count($_POST['main-padding']) > 0) {
        $main_padding = $_POST['main-padding'];
        fwrite($style, "padding :" . $main_padding . "px;\n");
    }

    fwrite($style, "height: 100%;\nposition: relative;\n}\n");
    fwrite($show,"<div class=\"bgimg-1\">\n");

    //Adding navbar/header
    if ($_POST['nav_check'] == 1 && array_key_exists('nav_check', $_POST)) {
        fwrite($show, "<div class=\"navbar\">\n<div class=\"nav-head\">Website name</div>\n");
        $nav_height = $_POST['nav-height'];
        $nav_color = $_POST['nav-color'];
        $nav_back_color = $_POST['nav-back-color'];
        $nav_padding = $nav_height / 2;
        fwrite($style, ".navbar{\nheight: " . $nav_height . "px;\nbackground-color: #" . $nav_back_color . ";\ncolor: #" . $nav_color . ";\npadding: " . $nav_padding . "px;\nfont-size: larger;\n}\n.nav-head{\nfloat:left;\n}\n");

        //checking for navbar menu
        if ($_POST['nav_check_menu'] == 1 && array_key_exists('nav_check_menu', $_POST)) {
            fwrite($show, "<div class=\"nav-items\">\n<li>Home</li>\n<li>Products</li>\n<li>Blog</li>\n</div>\n");
            fwrite($style, ".nav-items{\npadding: 0 10px;\n}\n.nav-items li{\ndisplay: inline-block;\npadding:0 20px;\nfloat: right;\n}\n.nav-items li a{\n text-decoration: none;\n color: white;\n }\n");
        }
        fwrite($show, "</div>\n");
    }

    fwrite($show,"<div class=\"head\">\n <span class=\"main\">Welcome to Layout 3</span>\n </div>\n</div>\n");
    fwrite($show,"<div id=\"home\">
        <h3 > INTRODUCTION </h3>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae culpa cum earum, eius eum explicabo ipsam
            maiores natus necessitatibus non obcaecati porro, praesentium reprehenderit ullam ut. Accusamus ad adipisci aut
            autem culpa cumque cupiditate dolor doloremque doloribus, explicabo fugiat id in incidunt inventore iste iure
            iusto laudantium minus nemo odit officia officiis perferendis quibusdam quidem quis repellat sed sequi similique
            sint temporibus veritatis voluptas voluptates voluptatibus. A accusamus amet aut blanditiis consectetur
            cupiditate dolore eos est eum explicabo facilis fuga harum hic iste maiores maxime minus modi mollitia
            necessitatibus nihil odit officia quas, quibusdam, quos ratione sequi suscipit tempora tenetur.
        </p>
    </div>

    <div class=\"bgimg-2\">
        <div class=\"head\">
            <span class=\"main\">Lorem Ipsum</span>
        </div>
    </div>

    <div id=\"about\" >
        <h3> About </h3>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae culpa cum earum, eius eum explicabo ipsam
            maiores natus necessitatibus non obcaecati porro, praesentium reprehenderit ullam ut. Accusamus ad adipisci aut
            autem culpa cumque cupiditate dolor doloremque doloribus.
            <br><br>
            explicabo fugiat id in incidunt inventore iste iure
            iusto laudantium minus nemo odit officia officiis perferendis quibusdam quidem quis repellat sed sequi similique
            sint temporibus veritatis voluptas voluptates voluptatibus. A accusamus amet aut blanditiis consectetur
            cupiditate dolore eos est eum explicabo facilis fuga harum hic iste maiores maxime minus modi mollitia
            necessitatibus nihil odit officia quas, quibusdam, quos ratione sequi suscipit tempora tenetur.
        </p>
    </div>

    <div class=\"bgimg-3\">
        <div class=\"head\">
            <span class=\"main\">Dolor Sit Amet</span>
        </div>
    </div>

    <div id=\"contact\" >
        <h3> Contact Us </h3>
        <p >
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae culpa cum earum, eius eum explicabo ipsam
            maiores natus necessitatibus non obcaecati porro, praesentium reprehenderit ullam ut. Accusamus ad adipisci aut
            autem culpa cumque cupiditate dolor doloremque doloribus.
        </p>
        <ul>
            <li>Lorem ipsum.</li>
            <li>Aperiam, sunt?</li>
            <li>Est, molestias!</li>
        </ul>
        <p id=\"last\">THANK YOU!</p>
    </div>\n");
    fwrite($style,"body, html {\nheight: 100%;\nmargin: 0;\nposition: relative;\n}\n.bgimg-1, .bgimg-2, .bgimg-3 {\nposition: relative;
background-attachment: fixed;\nbackground-position: center;\nbackground-repeat: no-repeat;\nbackground-size: cover;\nopacity: 0.65;\n}\n
.bgimg-1 {
         min-height: 70%;
         background-image: url('Images/53.jpg');
        }
.bgimg-2 {
            min-height: 70%;
            background-image: url(\"Images/4.jpg\");
        }
.bgimg-3 {
            min-height: 70%;
            background-image: url(\"Images/6.jpg\");
        }
.head   {
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            text-align: center;
        }
.main   {
            background-color: #111;
            color: #fff;
            font-size: larger;
            padding: 18px;
            letter-spacing: 10px;
        }
#home   {
            padding: 20px 50px;
        }
#home h3{
            text-align: center;
            letter-spacing: 5px;
            font-weight: 500;
            font-size: larger;
        }
#home p{
            color: #3c3c3c;
        }
#about,#contact{
            padding: 20px 50px; background-color: #3c3c3c; color: white; text-align: justify;
        }
#about h3,#contact h3{
            text-align: center;font-size: larger; letter-spacing: 5px; font-weight: 500;
        }
#last   {
            text-align: center; letter-spacing: 5px;font-size: larger;
        }\n");

    //Closing of files here
    fwrite($show, "</div>\n</body>\n</html>\n");
    fclose($show);
    fclose($style);
    $_SESSION['submitted'] = true;

    //After checking, go to show and download of layout
    header('location:Layout3_download.php');

}
?>
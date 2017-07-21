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


    //Closing of files here
    fwrite($show, "</div>\n</body>\n</html>\n");
    fclose($show);
    fclose($style);
    $_SESSION['submitted'] = true;

    //After checking, go to show and download of layout
    header('location:Layout3_show.html');

}
?>
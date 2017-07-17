<?php
@session_start();

//If content was sent?
if (count($_POST) > 0) {
    //File open
    $show = fopen("Layout2_show.html", "w") or die("Unable to open file!");
    $style = fopen("Layout2_style.css", "w");
    // Mention of doctype,html,body,meta tags along with mention to css files and google fonts . Mention of title='layout'
    fwrite($show, "<!DOCTYPE html>\n<html>\n<head>\n    <title>Layout</title>\n    <meta charset=\"UTF-8\">\n    <link rel=\"stylesheet\" href=\"Layout2_style.css\">\n    <link href=\"https://fonts.googleapis.com/css?family=Comfortaa|Crete+Round|Dancing+Script|Fresca|Oxygen|Pacifico|Raleway|Roboto|Satisfy|Yantramanav\"
          rel=\"stylesheet\">\n<link rel=\"stylesheet\" href=\"bootstrap/css/bootstrap.min.css\">\n<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>\n<script src=\"bootstrap/js/bootstrap.min.js\"></script>\n<link rel=\"icon\" href=\"bootstrap/fonts/glyphicons-halflings-regular.woff\">\n</head>\n");

    //Adding font-style and font-size
    $fontstyle = $_POST['font-style'];
    $fontsize = $_POST['font-size'];
    fwrite($style, "*{\nfont-family:" . $fontstyle . ";\nfont-size:" . $fontsize . "px;\n}\n");

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

    //setting background color of main container
    $main_back_color = $_POST['main-back-color'];
    fwrite($style, "background-color: #" . $main_back_color . ";\n");

    //setting border of main container
    if ($_POST['border-enable'] == "Yes") {
        $main_border_width = $_POST['main-border-width'];
        $main_border_type = $_POST['main-border-type'];
        $main_border_color = $_POST['main-border-color'];
        fwrite($style, "border: " . $main_border_width . "px " . $main_border_type . " #" . $main_border_color . ";\n");
    }
    elseif ($_POST['border-enable'] == "Yes"){
        $main_border_width = 0;
    }

    fwrite($style, "}\n");

    //Adding navbar/header
    if ($_POST['nav_check'] == 1 && array_key_exists('nav_check', $_POST)) {
        fwrite($show, "<div class=\"navbar\">\n<div class=\"nav-head\">Website name</div>\n");
        $nav_height = $_POST['nav-height'];
        $nav_color = $_POST['nav-color'];
        $nav_back_color = $_POST['nav-back-color'];
        $nav_padding = $nav_height / 2;
        fwrite($style, ".navbar{\nheight: " . $nav_height . "px;\nbackground-color: #" . $nav_back_color . ";\ncolor: #" . $nav_color . ";\npadding: " . $nav_padding . "px;\n}\n.nav-head{\nfloat:left;\n}\n");

        //checking for navbar menu
        if ($_POST['nav_check_menu'] == 1 && array_key_exists('nav_check_menu', $_POST)) {
            fwrite($show, "<div class=\"nav-items\">\n<li>Home</li>\n<li>Products</li>\n<li>Blog</li>\n</div>\n");
            fwrite($style, ".nav-items{\npadding: 0 10px;\n}\n.nav-items li{\ndisplay: inline-block;\npadding:0 20px;\nfloat: right;\n}\n");
        }
        fwrite($show, "</div>\n");
    }
    //Adding style to main-container
    $cont_padding=$_POST['cont-padding'];
    $cont_margin=$_POST['cont-margin'];
    $cont_color=$_POST['text-color'];
    $cont_back_color=$_POST['cont-back-color'];
    fwrite($style,".main-content {\nbackground-color: #".$cont_back_color.";\n padding: ".$cont_padding."px;\nmargin: ".$cont_margin."px;\noverflow: auto;\n");

    if($_POST['text-border']=="Yes"){
        $cont_border_width=$_POST['cont-border-width'];
        $cont_border_type=$_POST['cont-border-type'];
        $cont_border_color=$_POST['cont-border-color'];
        fwrite($style,"border: ".$cont_border_width."px ".$cont_border_type." #".$cont_border_color.";\n");
    }
    elseif ($_POST['text-border']=="No"){
        $cont_border_width=0;
    }
    fwrite($style,"}\np{\ndisplay: inline-block;\n}\n");

    fwrite($style,".text {\ncolor: #".$cont_color.";\n}\n");

    //Adding main container comprising sample text and carousel if selected
    fwrite($show, "<div class=\"main-content\">\n");
    if($_POST['carousel_check'] == 1 && array_key_exists('carousel_check', $_POST)){
        if($_POST['container_type'] == "fixed"){
            global $main_padding, $main_border_width,$cont_border_width,$main_margin;
            $car_img_width=$container_width-2*$main_padding-2*$main_border_width-2*$cont_border_width-$cont_padding-$cont_margin;
            $car_img_height= ($car_img_width/2)-2*$main_padding-2*$main_border_width-2*$cont_border_width-2*$cont_padding-2*$cont_margin;
        }
        if($_POST['container_type'] == "fluid"){
            global $main_padding, $main_border_width,$cont_border_width,$container_max_width,$main_margin;
            $car_img_width=$container_max_width-2*$main_padding-2*$main_border_width-2*$cont_border_width-$cont_padding-$cont_margin;
            $car_img_height= ($car_img_width/2)-2*$main_padding-2*$main_border_width-2*$cont_border_width-2*$cont_padding-2*$cont_margin;
        }
        global $car_img_width,$car_img_height;
        $car_slide_time=$_POST['carousel-slide'];
        $car_cap = array("
                    <div class=\"carousel-caption\">
                        <h3>Lorem</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, nulla..</p>
                    </div>", "
                    <div class=\"carousel-caption\">
                        <h3>Ipsum</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, facere.</p>
                    </div>", "
                    <div class=\"carousel-caption\">
                        <h3>Dolor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, ullam.</p>
                    </div>","
                    <div class=\"carousel-caption\">
                        <h3>Facere</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, iure..</p>
                    </div>");
        fwrite($show,"<div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"".$car_slide_time."\">
            <!-- Indicators -->
            <ol class=\"carousel-indicators\">
                <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
                <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
                <li data-target=\"#myCarousel\" data-slide-to=\"3\"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class=\"carousel-inner\" role=\"listbox\">

                <div class=\"item active\">
                    <img src=\" 4.jpg\" alt=\"Chania\" style=\" width:".$car_img_width."px; height:".$car_img_height."px;\">\n");
                    if($_POST['carousel-caption']=="Yes"){
                        fwrite($show,"$car_cap[0]");
                    }
                fwrite($show,"
                </div>

                <div class=\"item\">
                    <img src=\"6.jpg\" alt=\"Chania\"  style=\" width:".$car_img_width."px; height:".$car_img_height."px;\">\n");
                    if($_POST['carousel-caption']=="Yes"){
                        fwrite($show,"$car_cap[1]");
                    }
                    fwrite($show,"
                </div>
                
                <div class=\"item\">
                    <img src=\"10.jpg\" alt=\"Flower\"   style=\" width:".$car_img_width."px; height:".$car_img_height."px;\">\n");
                    if($_POST['carousel-caption']=="Yes"){
                        fwrite($show,"$car_cap[2]");
                    }
                    fwrite($show,"
                </div>

                <div class=\"item\">
                    <img src=\"53.jpg\" alt=\"Flower\"   style=\" width:".$car_img_width."px; height:".$car_img_height."px;\">\n");
                    if($_POST['carousel-caption']=="Yes"){
                        fwrite($show,"$car_cap[3]");
                    }
                    fwrite($show,"
                </div>
            </div>

            <!-- Left and right controls -->
            <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
                <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Previous</span>
            </a>
            <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
                <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Next</span>
            </a>
        </div>");
    }

    //Adding main container text
    fwrite($show, "\n<br>\n<div class=\"text\">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aperiam dignissimos doloremque error, et
            harum
            illum ipsum nesciunt nihil nobis quam repellendus sit sunt unde, vero vitae voluptatem! Aliquid, asperiores
            perspiciatis. Cumque dicta eum, fuga harum maxime quos reiciendis. Accusamus aliquid architecto deleniti ea,
            eos, inventore modi praesentium quae quia, reiciendis rem reprehenderit suscipit tempore. Dignissimos
            dolores ex
            iusto magnam magni placeat quod recusandae ut voluptatibus? Ab deleniti fugit perferendis, quae quibusdam
            tenetur vel. Corporis culpa eum iste nemo obcaecati, perferendis qui quod sed sunt voluptatibus. Accusamus
            at
            autem delectus distinctio, doloribus esse magnam pariatur, perspiciatis quia ratione repellat sapiente.
            <br><br>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus adipisci alias blanditiis esse expedita
            labore numquam, quis sint totam voluptatem! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam
            minima nostrum suscipit. Atque aut dolore, dolores exercitationem iure odit officiis quo! Consectetur distinctio
            ex, itaque iure minus nemo nostrum tempora.
            <br><br>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda delectus dolor ipsum minus molestias
            sit,
            vel voluptas? Ab aliquid atque cumque dolores error, illo, inventore itaque laboriosam laudantium neque
            nesciunt
            quaerat quas quibusdam quo recusandae voluptas voluptatibus! A cumque deleniti, doloremque eligendi fugit
            harum
            minima modi, odio odit quia vero voluptas voluptate. Architecto, eius explicabo molestias natus quam
            repellat
            sit veritatis! Corporis soluta, voluptatum? Hic iusto possimus rem totam voluptates?\n</div>\n</div>\n");



     //Adding footer
    if ($_POST['footer_check'] == 1 && array_key_exists('footer_check', $_POST)) {

        fwrite($show, "<footer class=\"footer\">\nFooter\n</footer>\n");
        $footer_height = $_POST['footer-height'];
        $footer_color = $_POST['footer-color'];
        $footer_back_color = $_POST['footer-back-color'];
        $footer_padding=$footer_height/3.4;
        fwrite($style, ".footer{\n height: " . $footer_height . "px;\n background-color: #" . $footer_back_color . ";\n color: #".$footer_color.";\n padding: ".$footer_padding."px;\n text-align: center;\n}\n");

    }

    //Closing of files here
    fwrite($show, "</div>\n</body>\n</html>\n");
    fclose($show);
    fclose($style);
    $_SESSION['submitted'] = true;

     //After checking, go to show and download of layout
    header('location:Layout2_download.php');

}
?>
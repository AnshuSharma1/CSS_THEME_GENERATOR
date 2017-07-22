<?php
@session_start();

//If content was sent?
if (count($_POST) > 0) {
    //File open
    $show = fopen("Layout1_show.html", "w") or die("Unable to open file!");
    $style = fopen("Layout1_style.css", "w");
    // Mention of doctype,html,body,meta tags along with mention to css files and google fonts . Mention of title='layout'
    fwrite($show, "<!DOCTYPE html>\n<html>\n<head>\n    <title>Layout</title>\n    <meta charset=\"UTF-8\">\n    <link rel=\"stylesheet\" href=\"Layout1_style.css\">\n    <link href=\"https://fonts.googleapis.com/css?family=Comfortaa|Crete+Round|Dancing+Script|Fresca|Oxygen|Pacifico|Raleway|Roboto|Satisfy|Yantramanav\"
          rel=\"stylesheet\">\n</head>\n");

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

    //Adding main container comprising sample text and side menu if selected
    fwrite($show, "<div class=\"main-content\">\n");

    //Adding side menu
    $side_align=$_POST['side-align'];
    $side_width = $_POST['side-width'];
    if ($_POST['side-check'] == 1 && array_key_exists('side-check', $_POST)) {
        $side_color=$_POST['side-color'];
        $side_back_color=$_POST['side-back-color'];
        fwrite($style,".sidemenu{\npadding: 20px;\nbackground-color: #".$side_back_color.";\ncolor: #".$side_color.";\nfloat: ".$side_align.";\nposition: relative;\nwidth: ".$side_width."px;\nheight: 100%;\n}\nh3{\nmargin-top:0;\n}\n");
        fwrite($show, "<div class=\"sidemenu\">\n<h3>Main</h3>\n<ul>\n<li>Lorem ipsum.</li>\n<li>Non, optio!</li>\n<li>Asperiores, nesciunt?</li>\n</ul>\n<p>
Lorem ipsum dolor sit amet,consectetur adipisicing elit. Alias asperiores, corporis culpa debitis, enim fugiat laborum modi mollitia 
obcaecati perferendis placeat provident rem unde vero.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, odit! </p>\n</div>");
    }

    //Adding main container text
    fwrite($show, "\n<div class=\"text\">
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
    fwrite($style,"}\np{\ndisplay: inline-block;\n}\n");

    $mar=$side_width+40+$cont_padding;

    if ($_POST['side-check'] == 1 && array_key_exists('side-check', $_POST)){
        fwrite($style,".text {\ncolor: #".$cont_color.";\nmargin-".$side_align.": ".$mar."px;\n}\n");
    }
    else{
        fwrite($style,".text {\ncolor: #".$cont_color.";\nmargin: auto;\n}\n");
    }

     //Adding footer
    if ($_POST['footer_check'] == 1 && array_key_exists('footer_check', $_POST)) {

        fwrite($show, "<footer class=\"footer\">\nFooter\n</footer>\n");
        $footer_height = $_POST['footer-height'];
        $footer_color = $_POST['footer-color'];
        $footer_back_color = $_POST['footer-back-color'];
        fwrite($style, ".footer{\n height: " . $footer_height . "px;\n background-color: #" . $footer_back_color . ";\n color: #".$footer_color.";\n padding: 20px;\n text-align: center;\n}\n");

    }

    //Closing of files here
    fwrite($show, "</div>\n</body>\n</html>\n");
    fclose($show);
    fclose($style);
    $_SESSION['submitted'] = true;

     //After checking, go to show and download of layout
    header('location:Layout1_download.php');

}
?>
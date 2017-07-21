<?php
error_reporting(!E_NOTICE);
@session_start();
if ($_SESSION['submitted']) {
    $_SESSION['submitted'] = false;
    header('location:Layout2.php');
}

?>

<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Nunito+Sans|Raleway|Fresca" rel="stylesheet">
<head>
    <title>Layout 3</title>
</head>
<style>
    * {
        font-family: 'Nunito Sans', sans-serif;
    }

    .row {
        margin: 0;
    }

    body {
        background: url("518079-background-hd.jpg");
    }

    #header {
        padding: 20px;
        margin: 20px auto;
        border: 5px double black;
        border-radius: 3px;
        background-color: white;
        width: 75%;
    }

    .subheading {
        font-size: 20px;
        margin: 15px 0 20px 0;
    }

    #header > p:nth-child(3) {
        color: #000089;
        font-size: 17px;
        padding: 10px;
    }

    h3 {
        font-family: 'Nunito Sans', sans-serif;
        font-weight: bold;
        letter-spacing: 2px;
    }

    input {
        vertical-align: top;
    }

    @media only screen and (max-width: 850px) {
        #header {
            width: 90%;
        }
    }

    @media only screen and (max-width: 500px) {
        #header {
            width: 100%;
            padding: 0;
        }
    }

    @media (max-width: 991px) {

        .add-main {
            margin-left: 20px;
            padding: 20px 0;
        }
    }

    @media (min-width: 991px) {

        .add-main {

            padding: 50px 0 50px 20px;
        }

        #border-prop {
            padding-left: 30px;
        }
    }


</style>
<body>

<div id="header">
    <h1 class="text-center">CSS THEME GENERATOR</h1>
    <p class="text-center subheading">LAYOUT 3</p>

    <p>
        Welcome to LAYOUT 3 of CSS THEME GENERATOR! This is a basic layout having parallax scrolling,a header and a container
        some additional CSS settings. <br>
        Enjoy :)
        <br>
        Note: Scale your elements accordingly with the sizes of the elements!<br>
    </p>

    <div style=" margin-top: 30px;padding: 10px;">
        <form action="Layout3_check.php" method="POST">
            <div class="row panel panel-default">
                <div class="row">
                    <h3 class="text-center"> PARALLAX</h3>
                    <hr style="width: 30%; margin: 20px 20px 30px 35%; border-color: #a1a1a1;">
                </div>
                <div class="row text-center">
                    <div class="col-md-8 col-md-offset-2"><img src="parallax.gif" alt="parallax" width="100%"></div>
                </div>
                <div class="row text-center" style="padding-top: 30px;">
                    <h4 class=" col-md-10 col-md-offset-1" style="line-height: 25px;">Parallax scrolling is a web site trend where the background content (i.e. an image) is moved at
                        a different speed than the foreground content while scrolling.</h4>
                </div>
                <div class="row text-center" style="padding-bottom: 30px;">
                    <h2 class=" col-md-10 col-md-offset-1" style="font-size: 20px; font-style: italic;font-family: Candara;letter-spacing: 2px;">PARALLAX EFFECT WILL BE ENABLED BY DEFAULT</h2>
                </div>
            </div>
            <br><br>
            <div class="row panel panel-default">
                <div class="row">
                    <h3 class="text-center"> MAIN CONTAINER</h3>
                    <hr style="width: 30%; margin: 20px 20px 30px 35%; border-color: #a1a1a1;">
                    <div class="row">
                        <label style=" display: block;">
                            <h4 class="text-center"
                                style="margin: 10px;font-family: 'Fresca', sans-serif;font-size: 27px;">What type of
                                container do you want?</h4>
                            <br><br>
                            <span class="col-md-3 col-md-offset-2 col-sm-6 col-xs-6 text-right"
                                  style="font-size: larger;">FIXED <input checked name="container_type" type="radio"
                                                                          value="fixed"
                                                                          id="fixed"></span>                      </span>
                            <span class="col-md-3 col-md-offset-2 col-sm-6 col-xs-6 text-left"
                                  style="font-size: larger;">FLUID <input name="container_type" type="radio"
                                                                          value="fluid" id="fluid"></span>
                        </label>
                    </div> <!-- Type of container: Fluid or Fixed-->
                    <br><br>
                    <div class="row">
                        <div class="test1" style="margin-bottom: 50px;">
                            <div class="col-md-4" style="margin-top: 3px;font-size: larger;text-align: center;">Width:
                            </div>
                            <div class="input-group col-md-6 col-md-offset-1 col-sm-10 col-sm-offset-1  col-xs-10 col-xs-offset-1">
                                <input id="container_width" type="number" min="500" max="1350"
                                       class="form-control" name="container_width"
                                       placeholder="Width of container" value="1000">
                                <span class="input-group-addon">px</span>
                            </div>
                        </div>
                        <div class="test2" style="padding-bottom:40px; ">
                            <div class="row" style="padding-bottom:20px; ">
                                <div class="col-md-4 " style="margin: 3px;font-size: larger;text-align: center;">Min
                                    Width:
                                </div>
                                <div class="input-group col-md-6 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                                    <input id="container_width" type="number" min="500" max="1350"
                                           class="form-control form-inline" name="min-width"
                                           placeholder="Min width of container" value="1000">
                                    <span class="input-group-addon">px</span>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-4 " style="margin-top: 3px;font-size: larger;text-align: center;">Max
                                    Width:
                                </div>
                                <div class="input-group col-md-6 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                                    <input id="container_width" type="number" min="500" max="1350"
                                           class="form-control form-inline" name="max-width"
                                           placeholder="Max width of container" value="1200">
                                    <span class="input-group-addon">px</span>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Type of widths -->
                    <div class="row">
                        <div class="col-md-4" style="margin-top: 3px;font-size: larger;text-align: center;">Alignment:
                        </div>
                        <div class="col-md-8" style="font-size: larger;padding: 0;margin-bottom: 40px;">
                            <div class="radio-inline text-center" style="width: 29%;">
                                <label style="margin-left: 20px;"><input type="radio" name="cont_align" value="Center"
                                                                         checked>Center</label>
                            </div>
                            <div class="radio-inline text-center" style="width: 29%;padding: 0;">
                                <label style="margin-left: 30px;"><input type="radio" name="cont_align" value="Left">Left</label>
                            </div>
                            <div class="radio-inline text-center" style="width: 29%;padding: 0;">
                                <label><input type="radio" name="cont_align" value="Right">Right</label>
                            </div>
                        </div>
                    </div> <!-- Alignment of container -->
                </div>
                <hr style="border-style: dotted;border-color: black;width: 80%;margin: 0 auto;">
                <div class="row" id="main-add" style="padding-bottom: 20px;">
                    <br>
                    <h3 style="font-size: 17px;" class="text-center">Additional CSS settings:</h3>
                    <br><br>
                    <div class="col-md-12 row text-center">
                        <div class="form-group col-md-8 col-md-offset-2">
                            <label for="main-padding">Padding</label>
                            <div class="input-group">
                                <input type="number" name="main-padding" id="main-padding" value="10" min="0"
                                       class="form-control">
                                <span class="input-group-addon">px</span>
                            </div>
                        </div>
                        <div class="form-group col-md-8 col-md-offset-2">
                            <br>
                            <label for="main-margin">Margin</label>
                            <div class="input-group">
                                <input type="number" name="main-margin" id="main-margin" value="0" min="0"
                                       class="form-control">
                                <span class="input-group-addon">px</span>
                            </div>
                        </div>
                    </div>
                </div> <!-- Additional settings -->
            </div>
            <br><br>
            <div class="row panel panel-default" style="padding-bottom: 30px;">
                <h3 class="text-center"> HEADER</h3>
                <hr style="width: 30%; margin: 20px 20px 30px 35%; border-color: #a1a1a1;">
                <br>
                <div class="row">
                    <div class="col-md-7 col-sm-12 col-xs-12 ">
                        <div class="row text-center" style="display: block;font-size: larger;">
                            <label style="padding: 0 20px 0 0;margin: 0;font-size: 18px;" for="header_check">Do you want
                                a header??</label>
                            <input type='hidden' value='0' name='nav_check'>
                            <input type="checkbox" id="header_check" value='1' style="margin-bottom: 20px;"
                                   name="nav_check">
                            <br><br>
                        </div> <!-- Do you want a header?-->
                        <div class="navc">
                            <div class="row" style="padding: 30px 0 0 0;">
                                <div class="form-group row" style="margin-bottom: 50px;">
                                    <div class="col-md-4 "
                                         style="margin-top: 3px;font-size: larger;text-align: center;">Height:
                                    </div>
                                    <div class="input-group col-md-8">
                                        <input id="navbar_height" type="number" min="20" max="100"
                                               class="form-control form-inline" name="nav-height"
                                               placeholder="Height of header" value="30">
                                        <span class="input-group-addon">px</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="padding: 0 ;">
                                <div class="col-md-4 col-md-offset-1 col-sm-6 col-xs-6 text-center"
                                     style="margin-bottom: 20px;padding-left: 0;">
                                    <label for="border-color">Text-color</label>
                                    <input type="text" class="form-control jscolor" style="border-radius: 4px;"
                                           name="nav-color" id="border-color" value="555555">
                                </div>
                                <div class="col-md-4 col-md-offset-1 col-sm-6 col-xs-6 text-center" style="padding: 0;">
                                    <label for="border-color">Background-color</label>
                                    <input type="text" class="form-control jscolor" style="border-radius: 4px;"
                                           name="nav-back-color" id="border-color" value="45E6BD">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 hidden-sm hidden-xs navc"
                         style="text-align:  center; padding-left: 0;padding-right: 30px;">
                        <img src="header.png" alt="Header" width="100%">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 navc">
                        <div class="row text-center">
                            <h3 style="color: black;font-size: 17px;display: inline-block;margin: 30px 0 10px 0; ">Do
                                you want a header menu?</h3>
                            <input type='hidden' value='0' name='nav_check_menu'>
                            <input type="checkbox" class="checkbox-inline" id="nav_check_menu"
                                   style="margin-top: -5px;margin-left: 10px;" name="nav_check_menu" value='1'>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="panel panel-default form-group row" style="padding: 20px;font-family: Cambria;">
                <h3 class="text-center">Font Styling</h3>
                <br>
                <div class="row">
                    <label style="font-size: larger;margin-bottom: 0;padding: 10px;" for="font"
                           class="text-center col-md-4">FONT-STYLE&nbsp</label>
                    <div class="col-md-7" style="padding: 0;">
                        <select name="font-style" id="font" class="form-control">
                            <option value="'Roboto', sans-serif">Roboto</option>
                            <option value="'Raleway', sans-serif">Raleway</option>
                            <option value="'Fresca', sans-serif">Fresca</option>
                            <option value="'Pacifico', cursive">Pacifico</option>
                            <option value="'Dancing Script', cursive">Dancing Script</option>
                            <option value="'Crete Round', serif">Crete Round</option>
                            <option value="'Comfortaa', cursive">Comfortaa</option>
                            <option value="'Satisfy', cursive">Satisfy</option>
                            <option value="'Yantramanav', sans-serif">Yantramanav</option>
                            <option value="'Oxygen', sans-serif">Oxygen</option>
                        </select>
                    </div>

                </div>
                <br>
                <div class="row">
                    <label style=" font-size: larger;margin-bottom: 0; padding: 10px;" class="text-center col-md-4">FONT-SIZE&nbsp</label>
                    <div class="input-group col-md-7 ">
                        <input id="font-size" type="number"
                               class="form-control form-inline " name="font-size"
                               placeholder="Font-size of text" value="16">
                        <span class="input-group-addon">px</span>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 30px;">
                <div class="col-md-8 col-md-offset-2">
                    <button class="btn btn-success form-control" style="margin-bottom: 10px;">Generate Layout</button>
                </div>

            </div>
        </form>
    </div>
</div>


<script src="jquery-3.2.1.min.js"></script>
<script src="jscolor.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        $('.test2').hide();
        $('.navc').hide();
        $('#fixed').click(function () {
            $(".test2").hide();
            $(".test1").show();
        });
        $("#fluid").click(function () {
            $(".test2").show();
            $(".test1").hide();
        });
        $("#header_check").click(function () {
            $(".navc").toggle();
        });
    });
</script>
</body>
</html>
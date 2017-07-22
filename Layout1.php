<?php
error_reporting(!E_NOTICE);
@session_start();
if ($_SESSION['submitted']) {
    $_SESSION['submitted'] = false;
    header('location:Layout1.php');
}

?>
<!DOCTYPE html>
<html>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans|Raleway|Fresca" rel="stylesheet">
    <head>
		<title>Layout 1</title>
	</head>
    <style>
        * {
            font-family: 'Nunito Sans', sans-serif;
        }

        .row{
            margin: 0;
        }
        body{
        background : url("Images/518079-background-hd.jpg");
        }

        #header{
            padding: 20px;
            margin: 20px auto;
            border: 5px double black;
            border-radius: 3px;
            background-color: white;
            width: 75%;
        }
        .subheading{
            font-size: 20px;
            margin: 15px 0 20px 0;
        }
        #header > p:nth-child(3){
                     color: #000089;
                    font-size: 17px;
                    padding: 10px;
                 }
        h3{
            font-family: 'Nunito Sans', sans-serif;
            font-weight: bold;
            letter-spacing: 2px;
        }
        input{
            vertical-align: top;
        }



        @media only screen and (max-width: 850px) {
            #header{
                width:90%;
            }
        }
        @media only screen and (max-width: 500px){
            #header{
                width:100%;
                padding: 0;
            }
        }
        @media (max-width: 991px){

            .add-main{
                margin-left:20px;
                padding: 20px 0 ;
            }
        }
        @media (min-width: 991px){

            .add-main{

                padding: 50px 0 50px 20px ;
            }
            #border-prop{
                padding-left:30px;
            }
        }


    </style>
<body>

<div  id="header">
    <h1 class="text-center">CSS THEME GENERATOR</h1>
    <p class="text-center subheading">LAYOUT 1</p>

    <p>
        Welcome to LAYOUT 1 of CSS THEME GENERATOR! This is a basic layout having a header, a container , side menu and a footer with
        some additional CSS settings. <br>
        Enjoy :)
        <br>
        Note: Scale your elements accordingly with the sizes of the elements!
    </p>

    <div  style=" margin-top: 30px;padding: 10px;">
        <form action="Layout1_check.php" method="POST" >
            <div class="row panel panel-default">
                    <div class="row">
                    <h3 class="text-center" > MAIN CONTAINER</h3>
                    <hr style="width: 30%; margin: 20px 20px 30px 35%; border-color: #a1a1a1;">
                        <div class="row">
                            <label style=" display: block;">
                                <h4 class="text-center" style="margin: 10px;font-family: 'Fresca', sans-serif;font-size: 27px;">What type of container do you want?</h4>
                                <br><br>
                                <span  class="col-md-3 col-md-offset-2 col-sm-6 col-xs-6 text-right" style="font-size: larger;">FIXED <input checked name="container_type" type="radio" value="fixed" id="fixed"></span>                      </span>
                                <span class="col-md-3 col-md-offset-2 col-sm-6 col-xs-6 text-left"  style="font-size: larger;">FLUID <input name="container_type" type="radio" value="fluid" id="fluid"></span>
                            </label>
                        </div> <!-- Type of container: Fluid or Fixed-->
                            <br><br>
                        <div class="row">
                            <div class="test1" style="margin-bottom: 50px;">
                                <div class="col-md-4" style="margin-top: 3px;font-size: larger;text-align: center;">Width:</div>
                                <div class="input-group col-md-6 col-md-offset-1 col-sm-10 col-sm-offset-1  col-xs-10 col-xs-offset-1">
                                    <input id="container_width" type="number" min="500" max="1350"
                                           class="form-control" name="container_width"
                                           placeholder="Width of container" value="1000" >
                                    <span class="input-group-addon">px</span>
                                </div>
                            </div>
                            <div class="test2" style="padding-bottom:40px; ">
                                <div class="row" style="padding-bottom:20px; ">
                                    <div class="col-md-4 " style="margin: 3px;font-size: larger;text-align: center;">Min Width:</div>
                                    <div class="input-group col-md-6 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                                        <input id="container_width" type="number" min="500" max="1350"
                                               class="form-control form-inline" name="min-width"
                                               placeholder="Min width of container" value="1000">
                                        <span class="input-group-addon">px</span>
                                    </div>
                                </div>
                            <br>
                                <div class="row">
                                    <div class="col-md-4 " style="margin-top: 3px;font-size: larger;text-align: center;">Max Width:</div>
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
                            <div class="col-md-4" style="margin-top: 3px;font-size: larger;text-align: center;">Alignment:</div>
                            <div class="col-md-8" style="font-size: larger;padding: 0;margin-bottom: 40px;">
                                <div class="radio-inline text-center" style="width: 29%;" >
                                    <label style="margin-left: 20px;"><input type="radio" name="cont_align" value="Center" checked>Center</label>
                                </div>
                                <div class="radio-inline text-center" style="width: 29%;padding: 0;">
                                    <label style="margin-left: 30px;"><input type="radio" name="cont_align" value="Left" >Left</label>
                                </div>
                                <div class="radio-inline text-center" style="width: 29%;padding: 0;">
                                    <label><input type="radio" name="cont_align" value="Right">Right</label>
                                </div>
                            </div>
                        </div> <!-- Alignment of container -->
                    </div>
                <hr style="border-style: dotted;border-color: black;width: 80%;margin: 0 auto;">
                <div class="row" id="main-add"  style="padding-bottom: 20px;">
                    <br>
                    <h3 style="font-size: 17px;" class="text-center">Additional CSS settings:</h3>
                    <br><br>
                    <div class="col-md-5 row text-center">
                        <div class="form-group col-md-8 col-md-offset-2">
                            <label for="main-padding">Padding</label>
                            <div class="input-group">
                                <input type="number" name="main-padding" id="main-padding" value="10" min="0" class="form-control">
                                <span class="input-group-addon" >px</span>
                            </div>
                        </div>
                        <div class="form-group col-md-8 col-md-offset-2">
                            <br>
                            <label for="main-margin">Margin</label>
                            <div class="input-group">
                                <input type="number" name="main-margin" id="main-margin" value="0" min="0" class="form-control">
                                <span class="input-group-addon" >px</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"><img class="hidden-sm hidden-xs" src="Images/line.png" alt="line"></div>
                    <div class="col-md-6" style="padding-top: 0;">
                        <div class="row text-center" >
                            <div class="col-xs-12" style="margin-bottom: 30px;">
                                <label for="main-back-color">Background-color</label>
                                <input type="text" class="form-control form-inline jscolor" style="border-radius: 4px;"
                                       name="main-back-color" id="text-back-color" value="#FFF9F5">
                            </div>
                        </div>
                        <div class="row">
                            <h4 class="col-xs-6 text-center" style="margin: 0;padding: 0;">
                                Do you want a border?
                            </h4>
                            <div class="col-xs-3 text-center" style="padding: 0;">
                                <label for="border-yes">Yes <input type="radio" id="border-yes" value="Yes" name="border-enable" style="margin-bottom: 10px;"></label>
                            </div>
                            <div class="col-xs-3 text-center" style="padding: 0;">
                                <label for="border-no">No <input  type="radio" id="border-no" value="No" name="border-enable"  style="margin-bottom: 10px;" checked></label>
                            </div>
                        </div>
                        <div class="row border-prop " style="padding:20px 0 0 0;">
                            <div class="col-md-4 col-sm-6" style="margin-bottom: 20px;"><label for="border-width">Border-width</label>
                                <input type="number" id="border-width" name="main-border-width" class="form-control" value="2"></div>
                            <div class="col-md-4 col-sm-6" style="margin-bottom: 20px;"><label for="border-type" id="border-type">Border - type</label>
                                <select id="border-type" class="form-control" name="main-border-type">
                                    <option value="solid">Solid</option>
                                    <option value="dotted">Dotted</option>
                                    <option value="dashed">Dashed</option>
                                    <option value="double">Double</option>
                                    <option value="groove">Groove</option>
                                    <option value="hidden">Hidden</option>
                                    <option value="none">None</option>
                                </select></div>
                            <div class="col-md-4 col-sm-12"><label for="border-color">Border -color</label>
                                <input type="text" class="form-control form-inline jscolor" style="border-radius: 4px;"
                                       name="main-border-color" id="border-color" value="#555555"></div>
                        </div>
                    </div>
                </div> <!-- Additional settings -->
            </div>

            <br><br>

            <div class="row panel panel-default" style="padding-bottom: 30px;">
                <h3 class="text-center" > HEADER</h3>
                <hr style="width: 30%; margin: 20px 20px 30px 35%; border-color: #a1a1a1;">
                <br>
                <div class="row">
                    <div class="col-md-7 col-sm-12 col-xs-12 ">
                        <div class="row text-center" style="display: block;font-size: larger;">
                            <label style="padding: 0 20px 0 0;margin: 0;font-size: 18px;" for="header_check">Do you want a header??</label>
                            <input type='hidden' value='0' name='nav_check'>
                            <input type="checkbox" id="header_check" value='1' style="margin-bottom: 20px;" name="nav_check">
                            <br><br>
                        </div> <!-- Do you want a header?-->
                        <div class="navc">
                            <div class="row" style="padding: 30px 0 0 0;">
                                <div class="form-group row" style="margin-bottom: 50px;">
                                    <div class="col-md-4 " style="margin-top: 3px;font-size: larger;text-align: center;">Height:</div>
                                    <div class="input-group col-md-8">
                                        <input id="navbar_height" type="number" min="20" max="100"
                                               class="form-control form-inline" name="nav-height"
                                               placeholder="Height of header" value="30">
                                        <span class="input-group-addon">px</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="padding: 0 ;">
                                <div class="col-md-4 col-md-offset-1 col-sm-6 col-xs-6 text-center" style="margin-bottom: 20px;padding-left: 0;">
                                    <label for="border-color">Text-color</label>
                                    <input type="text" class="form-control jscolor" style="border-radius: 4px;"
                                           name="nav-color" id="border-color" value="555555">
                                </div>
                                <div class="col-md-4 col-md-offset-1 col-sm-6 col-xs-6 text-center" style="padding: 0;" >
                                    <label for="border-color">Background-color</label>
                                    <input type="text" class="form-control jscolor" style="border-radius: 4px;"
                                           name="nav-back-color" id="border-color" value="45E6BD">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 hidden-sm hidden-xs navc" style="text-align:  center; padding-left: 0;padding-right: 30px;">
                        <img src="Images/header.png" alt="Header" width="100%">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 navc">
                        <div class="row text-center">
                            <h3  style="color: black;font-size: 17px;display: inline-block;margin: 30px 0 10px 0; ">Do you want a header menu?</h3>
                            <input type='hidden' value='0' name='nav_check_menu'>
                            <input type="checkbox" class="checkbox-inline" id="nav_check_menu"  style="margin-top: -5px;margin-left: 10px;" name="nav_check_menu" value='1'>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row panel panel-default">
                <h3 class="text-center" >TEXT CONTAINER</h3>
                <hr style="width: 30%; margin: 20px 20px 30px 35%; border-color: #a1a1a1;">
                <div class="col-md-6 col-md-offset-3 hidden-xs hidden-sm" style="margin-bottom: 50px;">
                    <img src="Images/text-container.png" style="width:90%;" alt="text container demo" >
                </div>
                    <div class="row" style="padding-bottom: 20px;">
                        <br>
                        <div class="col-md-5 row text-center" style="margin-bottom: 20px;">
                            <div class="form-group col-md-8 col-md-offset-2">
                                <label for="cont-padding">Padding</label>
                                <div class="input-group">
                                    <input type="number" id="cont-padding" value="10" class="form-control" name="cont-padding">
                                    <span class="input-group-addon" >px</span>
                                </div>
                            </div>
                            <div class="form-group col-md-8 col-md-offset-2">
                                <br>
                                <label for="cont-margin">Margin</label>
                                <div class="input-group">
                                    <input type="number" id="cont-margin" value="0" class="form-control" name="cont-margin">
                                    <span class="input-group-addon" >px</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1"><img class="hidden-sm hidden-xs" src="Images/line.png" alt="line"></div>
                        <div class="col-md-6">
                            <div class="row text-center" >
                                <div class="col-xs-6 " style="padding-left: 0;">
                                    <label for="text-color">Text-color</label>
                                    <input type="text" class="form-control form-inline jscolor" style="border-radius: 4px;"
                                           name="text-color" id="text-color" value="#292523">
                                </div>
                                <div class="col-xs-6" style="padding:0;">
                                    <label for="cont-back-color">Background-color</label>
                                    <input type="text" class="form-control form-inline jscolor" style="border-radius: 4px;"
                                           name="cont-back-color" id="cont-back-color" value="#FFE4C4">
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <h4 class="col-xs-6" style="margin: 0;padding: 0;">
                                    Do you want a border?
                                </h4>
                                <div class="col-xs-3" style="padding: 0;">
                                    <label for="border-text-yes">Yes &nbsp<input type="radio" id="border-text-yes" value="Yes" name="text-border" style="margin-bottom: 10px;"></label>
                                </div>
                                <div class="col-xs-3" style="padding: 0;">
                                    <label for="border-text-no">No &nbsp<input  type="radio" id="border-text-no" value="No" name="text-border"  style="margin-bottom: 10px;" checked></label>
                                </div>
                            </div>
                            <div class="row border-text-prop " style="padding:30px 0;">
                                <div class="col-md-4 col-sm-6" style="margin-bottom: 20px;"><label for="cont-border-width">Border - width</label>
                                    <input type="number" id="cont-border-width" class="form-control" value="2" name="cont-border-width"></div>
                                <div class="col-md-4 col-sm-6" style="margin-bottom: 20px;"><label for="cont-border-type" id="border-type">Border - type</label>
                                    <select id="cont-border-type" class="form-control" name="cont-border-type">
                                        <option value="dotted">Dotted</option>
                                        <option value="dashed">Dashed</option>
                                        <option value="solid">Solid</option>
                                        <option value="double">Double</option>
                                        <option value="Groove">Groove</option>
                                        <option value="hidden">Hidden</option>
                                        <option value="none">None</option>
                                    </select></div>
                                <div class="col-md-4"><label for="cont-border-color">Border - color</label>
                                    <input type="text" class="form-control form-inline jscolor" style="border-radius: 4px;"
                                           name="cont-border-color" id="cont-border-color" value="#555555"></div>
                            </div>
                        </div>
                    </div>
            </div>
            <br><br>
            <div class="row panel panel-default" style="padding-bottom: 20px;">
                <h3 class="text-center" >SIDE MENU</h3>
                <hr style="width: 30%; margin: 20px 20px 30px 35%; border-color: #a1a1a1;">
                <br>
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12 text-center">
                        <div class="row" style="display: block;font-size: larger;">
                            <label style="padding: 0 20px;margin: 0;font-size: 18px;" for="sidemenu_check">Do you want a side
                                menu??</label>
                            <input type='hidden' value='0' name='side-check'>
                            <input type="checkbox" id="sidemenu_check" value='1' style="margin-bottom: 20px;" name="side-check">
                            <br>
                        </div>
                        <div class="sidec">
                            <div class="row" style="padding: 30px 30px 0 30px;">
                                    <div class="form-group" style="margin-bottom: 50px;">
                                        <div class="col-md-4 " style="margin-top: 3px;font-size: larger;text-align: center;">Width:</div>
                                        <div class="input-group col-md-8">
                                            <input id="side_width" type="number" min="50" max="500"
                                                   class="form-control form-inline" name="side-width"
                                                   placeholder="Width of side menu" value="200">
                                            <span class="input-group-addon">px</span>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 hidden-sm hidden-xs sidec" style="text-align:  center;">
                        <img src="Images/side.png" alt="Side menu" width="95%">
                    </div>
                </div>

                <div class="row sidec">
                    <div class="col-md-7">
                        <div class="col-xs-6 col-md-4 col-md-offset-1 text-center"  style="padding-left: 0;">
                            <label for="side-color">Text-color</label>
                            <input type="text" class="form-control jscolor" style="border-radius: 4px;"
                                   name="side-color" id="side-color" value="1C1C1B">
                        </div>
                        <div class="col-xs-6  col-md-4 col-md-offset-1 text-center" style="padding: 0;">
                            <label for="side-back-color">Background-color</label>
                            <input type="text" class="form-control jscolor" style="border-radius: 4px;"
                                   name="side-back-color" id="side-back-color" value="FF9875">
                        </div>
                    </div>
                </div>
                <div class="row sidec" style="padding-top: 30px;">
                    <div class="col-md-4 text-center" style="font-size: 25px;">Alignment:</div>
                    <div class="col-md-2 col-md-offset-1 col-sm-6 col-xs-6  text-center " style="font-size: 20px;">
                        <label>Left <input type="radio" name="side-align" value="left" checked></label>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-6 col-md-offset-1 text-center" style="font-size: 20px;">
                        <label>Right <input type="radio" name="side-align" value="right"></label>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row form-group panel panel-default" style="padding-bottom: 20px;">
                <h3 class="text-center" >FOOTER</h3>
                <hr style="width: 30%; margin: 20px 20px 30px 35%; border-color: #a1a1a1;">
                <br>
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12 text-center">
                        <div class="row" style="display: block;font-size: larger;">
                            <label style="padding: 0 20px 0 5px;margin: 0;font-size: 18px;" for="footer_check">Do you want a footer??</label>
                            <input type='hidden' value='0' name='footer_check'>
                            <input type="checkbox" id="footer_check" value='1' style="margin-bottom: 20px;" name="footer_check">
                            <br>
                        </div>
                        <div class="footc">
                            <div class="row" style="padding: 50px 30px 0 30px;">
                                <div class="form-group" style="margin-bottom: 50px;">
                                    <div class="col-md-4 " style="margin-top: 3px;font-size: larger;text-align: center;">Height:</div>
                                    <div class="input-group col-md-8">
                                        <input id="footer_height" type="number" min="20" max="150"
                                               class="form-control form-inline" name="footer-height"
                                               placeholder="Height of footer" value="30">
                                        <span class="input-group-addon">px</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 hidden-sm hidden-xs footc" style="text-align:  center;">
                        <img src="Images/footer.png" alt="Footer" width="95%">
                    </div>
                </div>

                <div class="row footc" style="padding-bottom: 30px;">
                    <div class="col-md-7">
                        <div class="col-md-4 col-md-offset-1 text-center col-sm-6 col-xs-6"  style="padding-left: 0;">
                            <label for="foot-color">Text-color</label>
                            <input type="text" class="form-control jscolor" style="border-radius: 4px;"
                                   name="footer-color" id="foot-color" value="555555">
                        </div>
                        <div class="col-md-4 col-md-offset-1 text-center col-sm-6 col-xs-6" style="padding: 0;" >
                            <label for="foot-back-color">Background-color</label>
                            <input type="text" class="form-control jscolor" style="border-radius: 4px;"
                                   name="footer-back-color" id="foot-back-color" value="45E6BD">
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="panel panel-default form-group row" style="padding: 20px;font-family: Cambria;">
                <h3 class="text-center">Font Styling</h3>
                <br>
                <div class="row">
                    <label style="font-size: larger;margin-bottom: 0;padding: 10px;" for="font" class="text-center col-md-4">FONT-STYLE&nbsp</label>
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
                <div class="row" >
                    <label style=" font-size: larger;margin-bottom: 0; padding: 10px;" class="text-center col-md-4">FONT-SIZE&nbsp</label>
                    <div class="input-group col-md-7 ">
                        <input id="font-size" type="number"
                               class="form-control form-inline " name="font-size"
                               placeholder="Font-size of text" value="16" >
                        <span class="input-group-addon">px</span>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 30px;">
                <div class="col-md-8 col-md-offset-2" >
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
        $('.border-prop').hide();
        $('.border-text-prop').hide();
        $('.sidec').hide();
        $('.navc').hide();
        $('.footc').hide();
        $('#fixed').click(function () {
                $(".test2").hide();
                $(".test1").show();
        });
        $("#fluid").click(function () {
            $(".test2").show();
            $(".test1").hide();
        });
        $("#border-yes").click(function () {
            $(".border-prop").show();
        });
        $("#border-no").click(function () {
            $(".border-prop").hide();
        });
        $("#border-text-yes").click(function () {
            $(".border-text-prop").show();
        });
        $("#border-text-no").click(function () {
            $(".border-text-prop").hide();
        });
        $("#sidemenu_check").click(function () {
            $(".sidec").toggle();
        });
        $("#header_check").click(function () {
            $(".navc").toggle();
        });
        $("#footer_check").click(function () {
            $(".footc").toggle();
        });
    });
</script>
</body>
</html>
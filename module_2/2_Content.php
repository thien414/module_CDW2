<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-2 container">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown pl-0">
                    <a class="nav-link text-check pl-0 dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">HOME</a>
                    <div class="dropdown-menu custom" aria-labelledby="navbarDropdown">
                        <div class="container">
                            <div class="row ">
                                <div class="col-md-4 p-0 text-center">
                                    <a href="">
                                        <img src="images/2_img1" alt="" class="img-fluid">
                                    </a>
                                    <p class="text-check pt-3 m-0">HOMEPAGE1</p>
                                    <div class="box"></div>
                                </div>
                                <!-- /.col-md-4  -->
                                <div class="col-md-4 p-0  text-center">
                                    <a href="">
                                        <img src="images/2_img2" alt="" class="img-fluid">
                                    </a>
                                    <p class="text-check pt-3 m-0">HOMEPAGE2</p>
                                    <div class="box"></div>
                                </div>
                                <!-- /.col-md-4  -->
                                <div class="col-md-4 p-0  text-center">
                                    <a href="">
                                        <img src="images/2_img3" alt="" class="img-fluid">
                                    </a>
                                    <p class="text-check pt-3 m-0">HOMEPAGE3</p>
                                    <div class="box"></div>

                                </div>
                                <!-- /.col-md-4  -->
                            </div>
                        </div>
                        <!--  /.container  -->
                    </div>
                </li>
                <li class="nav-item dropdown pl-0">
                    <a class="nav-link text-check pl-0 dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        EXPLORE
                    </a>
                    <div class="dropdown-menu  custom" aria-labelledby="navbarDropdown">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 p-0">
                                    <ul class="nav flex-column">
                                        <li class="nav-item active">
                                            <a class="nav-link text-check p-0" href="#">FEATURES</a>
                                        </li>
                                        <li class="nav-item parent">
                                            <a class="nav-link text-check p-0" href="#">Easy to use<i
                                                    class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            <div class="dropdown-divider m-0 p-0"></div>
                                            <ul class="slidemenu_grandchild">
                                                <li class="p-1"><a href="">Easy to Start</a></li>
                                                <div class="dropdown-divider m-0 p-0"></div>
                                                <li class="p-1"><a href="">Painless Configuration</a></li>
                                                <div class="dropdown-divider m-0 p-0"></div>
                                                <li class="p-1"><a href="">Docs & Support</a></li>
                                            </ul>
                                        </li>

                                        <li class="nav-item parent">
                                            <a class="nav-link text-check p-0" href="#">SEO Friendly<i
                                                    class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            <div class="dropdown-divider m-0 p-0"></div>
                                            <ul class="slidemenu_grandchild">
                                                <li class="p-1"><a href="">Easy to Start</a></li>
                                                <div class="dropdown-divider m-0 p-0"></div>
                                                <li class="p-1"><a href="">Painless Configuration</a></li>
                                                <div class="dropdown-divider m-0 p-0"></div>
                                                <li class="p-1"><a href="">Docs & Support</a></li>
                                            </ul>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link text-check p-0" href="#">Social Icons</a>
                                            <div class="dropdown-divider m-0 p-0"></div>
                                        </li>

                                        <li class="nav-item parent">
                                            <a class="nav-link text-check p-0" href="#">Free Edition Extensions<i
                                                    class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            <div class="dropdown-divider m-0 p-0"></div>
                                            <ul class="slidemenu_grandchild">
                                                <li class="p-1"><a href="">Easy to Start</a></li>
                                                <div class="dropdown-divider m-0 p-0"></div>
                                                <li class="p-1"><a href="">Painless Configuration</a></li>
                                                <div class="dropdown-divider m-0 p-0"></div>
                                                <li class="p-1"><a href="">Docs & Support</a></li>
                                            </ul>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link text-check p-0" href="#">Cookie Law Compliance</a>
                                            <div class="dropdown-divider m-0 p-0"></div>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link text-check p-0" href="#">Diverse Content Types</a>
                                            <div class="dropdown-divider m-0 p-0"></div>
                                        </li>

                                        <li class="nav-item active">
                                            <a class="nav-link text-check p-0" href="#">DESIGN</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-check p-0" href="#">Font Styles</a>
                                            <div class="dropdown-divider m-0 p-0"></div>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link text-check p-0" href="#">Typography</a>
                                            <div class="dropdown-divider m-0 p-0"></div>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link text-check p-0" href="#">Module Styles</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /.col-md-4  -->
                                <div class="col-md-4 p-0">
                                    <ul class="nav flex-column">
                                        <li class="nav-item active">
                                            <a class="nav-link text-check p-0" href="#">LAYOUT</a>
                                        </li>
                                        <li class="nav-item parent">
                                            <a class="nav-link text-check p-0" href="#">Module Positions<i
                                                    class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            <div class="dropdown-divider m-0 p-0"></div>
                                            <ul class="slidemenu_grandchild">
                                                <li class="p-1"><a href="">Easy to Start</a></li>
                                                <div class="dropdown-divider m-0 p-0"></div>
                                                <li class="p-1"><a href="">Painless Configuration</a></li>
                                                <div class="dropdown-divider m-0 p-0"></div>
                                                <li class="p-1"><a href="">Docs & Support</a></li>
                                            </ul>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link text-check p-0" href="#">RTL Layout</a>
                                            <div class="dropdown-divider m-0 p-0"></div>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link text-check p-0" href="#">Responsive Layout</a>
                                            <div class="dropdown-divider m-0 p-0"></div>
                                        </li>

                                        <li class="nav-item parent">
                                            <a class="nav-link text-check p-0" href="#">Blog layout<i
                                                    class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            <div class="dropdown-divider m-0 p-0"></div>
                                            <ul class="slidemenu_grandchild">
                                                <li class="p-1"><a href="">Easy to Start</a></li>
                                                <div class="dropdown-divider m-0 p-0"></div>
                                                <li class="p-1"><a href="">Painless Configuration</a></li>
                                                <div class="dropdown-divider m-0 p-0"></div>
                                                <li class="p-1"><a href="">Docs & Support</a></li>
                                            </ul>
                                        </li>

                                        <li class="nav-item active">
                                            <a class="nav-link text-check p-0" href="#">MENU STYLES</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-check p-0" href="#">Top Menu</a>
                                            <div class="dropdown-divider m-0 p-0"></div>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link text-check p-0" href="#">Main Menu</a>
                                            <div class="dropdown-divider m-0 p-0"></div>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link text-check p-0" href="#">Side Menu</a>
                                            <div class="dropdown-divider m-0 p-0"></div>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link text-check p-0" href="#">Tree Menu</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /.col-md-4  -->
                                <div class="col-md-4 p-0">
                                    <ul class="nav flex-column">
                                        <li class="nav-item active">
                                            <a class="nav-link text-check p-0" href="#">COLOR VARIATIONS</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-check p-0" href="#">Orange Color</a>
                                            <div class="dropdown-divider m-0 p-0"></div>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link text-check p-0" href="#">Red Color</a>
                                            <div class="dropdown-divider m-0 p-0"></div>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link text-check p-0" href="#">Cyan Color</a>
                                            <div class="dropdown-divider m-0 p-0"></div>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link text-check p-0" href="#">Grey Color</a>
                                            <div class="dropdown-divider m-0 p-0"></div>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link text-check p-0" href="#">Brown Color</a>
                                            <div class="dropdown-divider m-0 p-0"></div>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link text-check p-0" href="#">Green Color</a>
                                        </li>
                                    </ul>

                                </div>
                                <!-- /.col-md-4  -->
                            </div>
                        </div>
                        <!--  /.container  -->


                    </div>
                </li>
                <li class="nav-item dropdown pl-0">
                    <a class="nav-link text-check pl-0 dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        PROPERTY
                    </a>
                    <div class="dropdown-menu custom-sigle" aria-labelledby="navbarDropdown">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link text-check p-0" href="#">Category Listing</a>
                                <div class="dropdown-divider m-0 p-0"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-check p-0" href="#">Property Listing</a>
                                <div class="dropdown-divider m-0 p-0"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-check p-0" href="#">Property Details</a>
                                <div class="dropdown-divider m-0 p-0"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-check p-0" href="#">Search Property</a>
                                <div class="dropdown-divider m-0 p-0"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-check p-0" href="#">Add property</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item dropdown pl-0">
                    <a class="nav-link text-check pl-0" href="#" id="navbarDropdown">
                        AGENTS
                    </a>
                </li>
                <li class="nav-item dropdown pl-0">
                    <a class="nav-link text-check pl-0" href="#" id="navbarDropdown">
                        BLOG
                    </a>
                </li>
                <li class="nav-item dropdown pl-0">
                    <a class="nav-link text-check pl-0 dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        PAGES
                    </a>
                    <div class="dropdown-menu custom-sigle" aria-labelledby="navbarDropdown">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link text-check p-0" href="#">About Us</a>
                                <div class="dropdown-divider m-0 p-0"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-check p-0" href="#">Contact</a>
                                <div class="dropdown-divider m-0 p-0"></div>
                            </li>
                            <li class="nav-item parent">
                                <a class="nav-link text-check p-0" href="#">Joomla<i class="fa fa-angle-right"
                                        aria-hidden="true"></i></a>
                                <ul class="slidemenu_grandchild">
                                    <li class="p-1 parents"><a href="">Easy to Start<i class="fa fa-angle-right"
                                                aria-hidden="true"></i></a>
                                        <ul class="slidemenu_grandchilds">
                                            <li class="p-1"><a href="">Easy to Start</a></li>
                                            <div class="dropdown-divider m-0 p-0"></div>
                                            <li class="p-1"><a href="">Painless Configuration</a></li>
                                            <div class="dropdown-divider m-0 p-0"></div>
                                            <li class="p-1"><a href="">Docs & Support</a></li>
                                        </ul>
                                    </li>
                                    <div class="dropdown-divider m-0 p-0"></div>
                                    <li class="p-1"><a href="">Painless Configuration</a></li>
                                    <div class="dropdown-divider m-0 p-0"></div>
                                    <li class="p-1"><a href="">Docs & Support</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item dropdown pl-0">
                    <a class="nav-link text-check pl-0 dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        EXT.STYLES
                    </a>
                    <div class="dropdown-menu custom-sigle" aria-labelledby="navbarDropdown">
                        <ul class="nav flex-column">
                            <li class="nav-item parent">
                                <a class="nav-link text-check p-0" href="#">K2<i
                                                    class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            <div class="dropdown-divider m-0 p-0"></div>
                                            <ul class="slidemenu_grandchild">
                                                <li class="p-1"><a href="">Easy to Start</a></li>
                                                <div class="dropdown-divider m-0 p-0"></div>
                                                <li class="p-1"><a href="">Painless Configuration</a></li>
                                                <div class="dropdown-divider m-0 p-0"></div>
                                                <li class="p-1"><a href="">Docs & Support</a></li>
                                            </ul>
                            </li>
                            <li class="nav-item parent">
                                <a class="nav-link text-check p-0" href="#">Kunena Forum<i
                                                    class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            <div class="dropdown-divider m-0 p-0"></div>
                                            <ul class="slidemenu_grandchild">
                                                <li class="p-1"><a href="">Easy to Start</a></li>
                                                <div class="dropdown-divider m-0 p-0"></div>
                                                <li class="p-1"><a href="">Painless Configuration</a></li>
                                                <div class="dropdown-divider m-0 p-0"></div>
                                                <li class="p-1"><a href="">Docs & Support</a></li>
                                            </ul>
                            </li>
                            <li class="nav-item parent">
                                <a class="nav-link text-check p-0" href="#">OS Property<i
                                                    class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            <ul class="slidemenu_grandchild">
                                                <li class="p-1"><a href="">Easy to Start</a></li>
                                                <div class="dropdown-divider m-0 p-0"></div>
                                                <li class="p-1"><a href="">Painless Configuration</a></li>
                                                <div class="dropdown-divider m-0 p-0"></div>
                                                <li class="p-1"><a href="">Docs & Support</a></li>
                                            </ul>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item dropdown pl-0">
                    <button class="nav-link text-check" href="#" id="navbarDropdown">
                        GET IT
                    </button>
                </li>

            </ul>
        </div>


    </nav>
</div>
<script>
$(document).ready(function() {
    // executes when HTML-Document is loaded and DOM is ready
    // breakpoint and up  
    $(window).resize(function() {
        if ($(window).width() >= 980) {
            // when you hover a toggle show its dropdown menu
            $(".navbar .dropdown-toggle").hover(function() {
                $(this).parent().toggleClass("show");
                $(this).parent().find(".dropdown-menu").toggleClass("show");
            });
            // hide the menu when the mouse leaves the dropdown
            $(".navbar .dropdown-menu").mouseleave(function() {
                $(this).removeClass("show");
            });
            // do something here
        }
    });
    // document ready  
});
</script>
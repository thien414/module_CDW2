<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-40">
    <div class="title">
        <div class="container">
            <h2>Ext. Styles</h2>
            <ul class="d-flex pl-0">
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <span>Ext. Styles</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="container Content">
        <div class="Content_title">
            <h2>JSN Extended Styles Introduction</h2>
        </div>
        <div class="Content_value">
            <p>All extensions are <b>not included </b>in our template packages, you need to download / buy and install them separately.</p>
            <p>Building a great website is what everyone wants to when they start building their own site. It would be more attractive, advantageous and easier to manage with the excellent support of <b>Joomla extensions</b>.</p>
            <p>JoomlaShine designs <b>Extended styles</b> for 3rd party extensions with new looks which are shown on the JSN templates. With extended styles, your websites will be more professional, lively and eye-catching; hence you can actually experience how the extension works.</p>
            <p>Currently, there are many 3rd party extensions are supported by JoomlaShine templates. They are in different extension types, such as:</p>
            <ul>
                <li><b>Content Construction</b>: K2, DJ-Extension</li>
                <li><b>Forum</b>: Kunena, EasyDiscuss</li>
                <li><b>Shopping Cart</b>: VitueMart, MijoShop, RedComponent, HikaShop, J2Store</li>
                <li><b>Blog</b>: EasyBlog</li>
                <li><b>Social Networking</b>: JomSocial, EasySocial</li>
                <li><b>Hotel / Table Booking</b>: Jomres</li>
                <li><b>Event Management</b>: Ohanah</li>
                <li>and <b>other categories</b>.</li>
            </ul>
            <div class="image">
                <img src="./images/40_img1.jpg" alt="">
                <p>Check out the extended styles of <b>JSN Reta</b> and enjoy how they fulfill your needs !</p>
                <p>
                    <a href="#" class="btn btn_show">Demo K2 Style</a>
                    <a href="#" class="btn btn_show">Demo Kunena Style</a>
                    <a href="#" class="btn btn_show">OS Property Style</a>
                </p>
            </div>
        </div>
    </div>
</div>
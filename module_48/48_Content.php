<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-48 container">
    <div class="row">
        <div class="col-lg-4">
            <img src="images/48_user.jpg" alt="">
        </div>
        <div class="col-lg-4">
            <div class="address">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>1852 Boynton Ave, Accord, NY</span>
            </div>
            <div class="gmail">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                <span>ag1@gmail.com</span>
            </div>
            <div class="sample">
            <i class="fa fa-bookmark" aria-hidden="true"></i>
                <span>Sample agent license</span>
            </div>
            <div class="joom">
                <span>JoomlaShine</span>
            </div>
        </div>
        <div class="col-lg-4">

        </div>
    </div>
</div>
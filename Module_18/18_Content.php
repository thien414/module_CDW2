<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-18 container">
    <h2 class="title mt-4">LINK TYPE</h2>
    <p class="create"><i class="fa fa-calendar" aria-hidden="true"></i> Created: 03 October 2017</p>
    <div class="title-link">
        <h2>
        <a href="#" target="_blank" class="text-uppercase">
        <i class="fa fa-link" aria-hidden="true"></i>
        JoomlaShine Templates & Extensions
        </a>
        </h2>
    </div>
    <div class="contents">
        <p>
        Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam auctor eleifend nunc non venenatis. Donec ac nulla lectus.
        </p>
        <p>
        Nullam bibendum ac quam id tempus. Aliquam vitae mi semper, pharetra justo id, pulvinar nunc. Phasellus id elit ut felis pellentesque suscipit sit amet ac nulla. Duis non orci varius, gravida lorem vel, lobortis diam. Nullam ultricies nulla id ante dapibus hendrerit. Donec at est eget nisl commodo mollis a sodales sem. Nullam vitae tempor massa, auctor viverra tortor. Aenean interdum eget tellus ac tempor. Vestibulum ut nunc neque. Aliquam erat volutpat. Curabitur adipiscing tellus nec sem condimentum fermentum. Sed a rutrum nibh.
        </p>
    </div>
</div>
<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-11 ">
    <div class="title">
        <div class="container">
            <h2>EXPLORE</h2>
            <ul class="d-flex pl-0">
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <span>ExploreMenu</span>
                </li>
                <li>
                    <span></span>
                    <a href="#">StylesTree</a>
                </li>
                <li>
                    <span>Menu</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="Content container">
        <div class="row">
            <div class="col-lg-3 Content-1 p-4">
                <ul class="p-0 m-0">
                    <li class="pt-2 pb-2">
                        <h3><i class="fa fa-home" aria-hidden="true"></i> TREE MENU WITH ICONS AND RICH TEXT</h3>
                        <div class="dropdown-divider m-0 p-0"></div>
                    </li>
                    <li class="hv pt-2">
                        <p class="mb-2"><i class="fa fa-home" aria-hidden="true"></i> Homepage</p>
                    </li>
                    <li class="pb-2">
                        <p class="m-0"><i class="fa fa-cubes" aria-hidden="true"></i> Explore</p>
                        <ul class="pl-4">
                            <li class="hv-child pb-2">
                                <div class="dropdown-divider m-0 p-0"></div>
                                <p class="m-0 pt-3">Color Variations</p>
                            </li>
                            <li class="hv-child active pt-2 pb-2">
                                <div class="dropdown-divider m-0 p-0"></div>
                                <p class="m-0 pt-3">Menu Styles</p>
                            </li>
                            <li class="hv-child pt-2 pb-2">
                                <div class="dropdown-divider m-0 p-0"></div>
                                <p class="m-0 pt-3">Design</p>
                            </li>
                            <li class="hv-child pt-2 pb-2">
                                <div class="dropdown-divider m-0 p-0"></div>
                                <p class="m-0 pt-3">Layout</p>
                            </li>
                            <li class="hv-child pt-2 pb-2">
                                <div class="dropdown-divider m-0 p-0"></div>
                                <p class="m-0 pt-3">Feature</p>
                            </li>
                            <li class="hv-child pt-2 pb-2">
                                <div class="dropdown-divider m-0 p-0"></div>
                                <p class="m-0 pt-3">Features</p>
                            </li>
                            <li class="hv-child pt-2 pb-2">
                                <div class="dropdown-divider m-0 p-0"></div>
                                <p class="m-0 pt-3">Color Variations</p>
                            </li>
                        </ul>
                        <div class="dropdown-divider m-0 p-0"></div>
                    </li>
                    <li class="hv pt-2 pb-2">
                        <p><i class="fa fa-building" aria-hidden="true"></i> Property</p>
                        <div class="dropdown-divider m-0 p-0"></div>
                    </li>
                    <li class="hv pt-2 pb-2">
                        <p><i class="fa fa-user" aria-hidden="true"></i> Agents</p>
                        <div class="dropdown-divider m-0 p-0"></div>
                    </li>
                    <li class="hv pt-2 pb-2">
                        <p><i class="fa fa-newspaper-o" aria-hidden="true"></i> Blog</p>
                        <div class="dropdown-divider m-0 p-0"></div>
                    </li>
                    <li class="hv pt-2 pb-2">
                        <p><i class="fa fa-file-text-o" aria-hidden="true"></i> Pages</p>
                        <div class="dropdown-divider m-0 p-0"></div>
                    </li>
                    <li class="hv pt-2 pb-2">
                        <p><i class="fa fa-qrcode" aria-hidden="true"></i> Ext. Styles</p>
                        <div class="dropdown-divider m-0 p-0"></div>
                    </li>
                    <li class="hv pt-2 pb-2">
                        <p><i class="fa fa-download" aria-hidden="true"></i> Get it</p>
                        <div class="dropdown-divider m-0 p-0"></div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 Content-3 p-4">
                <h2>TREE MENU</h2>
                <p class="calendar m-0"><i class="fa fa-calendar" aria-hidden="true"></i> Created: 01 April 2011</p>
                <p class="pl-3 mb-2">Here you can see live demonstration of Tree Menu.</p>
                <p>Tree Menu represents menu items in clear tree-like hierarchy, which is very appropriate for indexing menu. By default all submenu items are collapsed until you select the parent menu item.</p>
                <p>To setup Tree Menu you just need to configure module parameter <b>“Menu Class Suffix”</b> appropriately and the menu system will take care of the rest.</p>
                <h3>TREE MENU WITH ICONS AND RICH TEXT</h3>
                <p class="pl-3 mb-2">Here you can see live demonstration of Tree Menu with icons and rich text.</p>
                <p>Tree Menu can present menu items with icons and descriptive text, pretty much like <span class="check">Main Menu</span> and <span class="check">Side Menu</span>.</p>
                <p>To setup icons you need to configure menu items appropriately just like Main Menu. There are very detailed instructions in template documentation.</p>
                <h3>LOREM IPSUM</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non lorem libero. Vestibulum a leo ac tortor congue euismod. Nam sed nulla tellus. Suspendisse ut hendrerit justo. Sed molestie vestibulum nisl, a sodales urna molestie nec. Etiam neque nisl, malesuada ut egestas ut, facilisis vel leo. Morbi gravida blandit porttitor. Phasellus sed diam ante, quis lobortis tortor. Nunc quis mi congue ipsum fringilla hendrerit nec eget magna.</p>
                <h4>LOREM IPSUM</h4>
                <p>Quisque sed mi non risus egestas cursus. Aenean odio mi, rhoncus sit amet tincidunt placerat, pellentesque ac mi. Mauris est lectus, faucibus vel ultrices eget, lobortis vitae lorem. Nam non nisl vel lorem pulvinar pharetra quis nec augue. Sed in odio lorem. In hac habitasse platea dictumst. Pellentesque elementum, ipsum vel sollicitudin porttitor, felis augue pharetra erat, ut vestibulum dui turpis sed nulla. Suspendisse ac nulla nisi. Fusce sed est a leo gravida bibendum non non odio. Maecenas et tortor sit amet dolor sagittis scelerisque sed sit amet lectus. Suspendisse sollicitudin suscipit velit, eu pellentesque tortor tristique a. Aliquam ut velit dolor, quis convallis orci. Curabitur tincidunt aliquam tellus id tempor. Etiam iaculis erat id metus placerat eget lacinia est eleifend. Ut in interdum mi.</p>
            </div>
            <div class="col-lg-3 Content-1 Content-2 p-4">
                <ul class="p-0 m-0">
                    <li class="pt-2 pb-2">
                        <h3>TREE MENU</h3>
                        <div class="dropdown-divider m-0 p-0"></div>
                    </li>
                    <li class="hv pt-2">
                        <p class="mb-2"><i class="fa fa-home" aria-hidden="true"></i> Homepage</p>
                    </li>
                    <li class="pb-2">
                        <p class="m-0"><i class="fa fa-cubes" aria-hidden="true"></i> Explore</p>
                        <ul class="pl-4">
                            <li class="hv-child pb-2">
                                <div class="dropdown-divider m-0 p-0"></div>
                                <p class="m-0 pt-3">Color Variations</p>
                            </li>
                            <li class="hv-child active pt-2 pb-2">
                                <div class="dropdown-divider m-0 p-0"></div>
                                <p class="m-0 pt-3">Menu Styles</p>
                            </li>
                            <li class="hv-child pt-2 pb-2">
                                <div class="dropdown-divider m-0 p-0"></div>
                                <p class="m-0 pt-3">Design</p>
                            </li>
                            <li class="hv-child pt-2 pb-2">
                                <div class="dropdown-divider m-0 p-0"></div>
                                <p class="m-0 pt-3">Layout</p>
                            </li>
                            <li class="hv-child pt-2 pb-2">
                                <div class="dropdown-divider m-0 p-0"></div>
                                <p class="m-0 pt-3">Feature</p>
                            </li>
                            <li class="hv-child pt-2 pb-2">
                                <div class="dropdown-divider m-0 p-0"></div>
                                <p class="m-0 pt-3">Features</p>
                            </li>
                            <li class="hv-child pt-2 pb-2">
                                <div class="dropdown-divider m-0 p-0"></div>
                                <p class="m-0 pt-3">Color Variations</p>
                            </li>
                        </ul>
                        <div class="dropdown-divider m-0 p-0"></div>
                    </li>
                    <li class="hv pt-2 pb-2">
                        <p><i class="fa fa-building" aria-hidden="true"></i> Property</p>
                        <div class="dropdown-divider m-0 p-0"></div>
                    </li>
                    <li class="hv pt-2 pb-2">
                        <p><i class="fa fa-user" aria-hidden="true"></i> Agents</p>
                        <div class="dropdown-divider m-0 p-0"></div>
                    </li>
                    <li class="hv pt-2 pb-2">
                        <p><i class="fa fa-newspaper-o" aria-hidden="true"></i> Blog</p>
                        <div class="dropdown-divider m-0 p-0"></div>
                    </li>
                    <li class="hv pt-2 pb-2">
                        <p><i class="fa fa-file-text-o" aria-hidden="true"></i> Pages</p>
                        <div class="dropdown-divider m-0 p-0"></div>
                    </li>
                    <li class="hv pt-2 pb-2">
                        <p><i class="fa fa-qrcode" aria-hidden="true"></i> Ext. Styles</p>
                        <div class="dropdown-divider m-0 p-0"></div>
                    </li>
                    <li class="hv pt-2 pb-2">
                        <p><i class="fa fa-download" aria-hidden="true"></i> Get it</p>
                        <div class="dropdown-divider m-0 p-0"></div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
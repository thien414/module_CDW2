<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-39">
    <div class="title">
        <div class="container">
            <h2>PAGES</h2>

            <ul class="d-flex pl-0">
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <span></span>
                    <a href="#">Pages</a>
                </li>
                <li>
                    <span>Joomla</span>
                </li>
                <li>
                    <span>Articles</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="Content container">
        <div class="row">
            <div class="col-lg-3">
                <div class="Content-1 p-4">
                    <ul class="p-0 m-0">
                        <li class="pt-2 pb-2">
                            <h3><i class="fa fa-star" aria-hidden="true"></i> SAMPLE CONTENT</h3>
                            <div class="dropdown-divider m-0 p-0"></div>
                        </li>
                        <li class="hv pt-2 pb-2">
                            <p>About Us</p>
                            <div class="dropdown-divider m-0 p-0"></div>
                        </li>
                        <li class="hv pt-2 pb-2">
                            <p>Contact</p>
                            <div class="dropdown-divider m-0 p-0"></div>
                        </li>
                        <li class="pt-2 check">
                            <p class="m-0">Joomla</p>
                            <ul class="child p-0">
                                <li class="hv pt-2 pb-2 check-two">
                                    <p class="pl-4 active">Articles</p>
                                    <div class="dropdown-divider m-0 p-0"></div>
                                    <ul class="child-two p-0">
                                        <li class="hv pt-2 pb-2">
                                            <p class="pl-4">The Joomla! Project</p>
                                            <div class="dropdown-divider m-0 p-0"></div>
                                        </li>
                                        <li class="hv pt-2 pb-2">
                                            <p class="pl-4">List Layout</p>
                                            <div class="dropdown-divider m-0 p-0"></div>
                                        </li>
                                        <li class="hv pt-2 pb-2">
                                            <p class="pl-4">The Joomla! Community</p>
                                            <div class="dropdown-divider m-0 p-0"></div>
                                        </li>
                                        <li class="hv pt-2">
                                            <p class="pl-4">Using Joomla!</p>
                                            <div class="dropdown-divider m-0 p-0"></div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="hv pt-2">
                                    <p class="pl-4">Newsfeeds</p>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9 ">
                <div class="display-custom font-weight-bold text-right">
                    Display #
                    <select name="limit" id="limit">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                        <option value="25">25</option>
                        <option value="30">30</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                        <option value="0">0</option>
                    </select>
                </div>
                <table class="table table-striped table-hover table-sm table-bordered">
                    <tbody class="Custom">
                        <tr class="Custom-1">
                            <td class="w-1 td-1">Australian Parks</td>
                            <td class="w-1">Written by Parks webmaster</td>
                            <td class="w-2"><div class="d-flex"><span class="td-2 pl-1 pr-1">Hits: 20</span></div></td>
                        </tr>
                        <tr class="Custom-1">
                            <td class="td-1">Cradle Mountain</td>
                            <td>Written by Parks webmaster</td>
                            <td><div class="d-flex"><span class="td-2 pl-1 pr-1">Hits: 25</span></div></td>
                        </tr>
                        <tr class="Custom-1">
                            <td class="td-1">First Blog Post</td>
                            <td></td>
                            <td><div class="d-flex"><span class="td-2 pl-1 pr-1">Hits: 150</span></div></td>
                        </tr>
                        <tr class="Custom-1">
                            <td class="td-1">Second Blog Post</td>
                            <td></td>
                            <td><div class="d-flex"><span class="td-2 pl-1 pr-1">Hits: 26</span></div></td>
                        </tr>
                        <tr class="Custom-1">
                            <td class="td-1">Koala</td>
                            <td>Written by Parks webmaster</td>
                            <td><div class="d-flex"><span class="td-2 pl-1 pr-1">Hits: 25</span></div></td>
                        </tr>
                        <tr class="Custom-1">
                            <td class="td-1">Phyllopteryx</td>
                            <td>Written by Parks webmaster</td>
                            <td><div class="d-flex"><span class="td-2 pl-1 pr-1">Hits: 18</span></div></td>
                        </tr>
                        <tr class="Custom-1">
                            <td class="td-1">Pinnacles</td>
                            <td>Written by Parks webmaster</td>
                            <td><div class="d-flex"><span class="td-2 pl-1 pr-1">Hits: 15</span></div></td>
                        </tr>
                        <tr class="Custom-1">
                            <td class="td-1">Spotted Quoll</td>
                            <td>Written by Parks webmaster</td>
                            <td><div class="d-flex"><span class="td-2 pl-1 pr-1">Hits: 16</span></div></td>
                        </tr>
                        <tr class="Custom-1">
                            <td class="td-1">Wobbegone</td>
                            <td>Written by Parks webmaster</td>
                            <td><div class="d-flex"><span class="td-2 pl-1 pr-1">Hits: 6</span></div></td>
                        </tr>
                        <tr class="Custom-1">
                            <td class="td-1">Blue Mountain Rain Forest</td>
                            <td>Written by Parks webmaster</td>
                            <td><div class="d-flex"><span class="td-2 pl-1 pr-1">Hits: 4</span></div></td>
                        </tr>
                        <tr class="Custom-1">
                            <td class="td-1">Ormiston Pound</td>
                            <td>Written by Parks webmaster</td>
                            <td><div class="d-flex"><span class="td-2 pl-1 pr-1">Hits: 7</span></div></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
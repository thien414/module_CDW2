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
            <div class="col-lg-3 Content-1 p-4">
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
            <div class="col-lg-9">
                <table class="table table-striped table-hover table-sm table-bordered">
                    <thead class="d-none">
                        <tr>
                            <th class="check-1">First</th>
                            <th class="check-2">Last</th>
                            <th class="check-3">Handle</th>
                        </tr>
                    </thead>
                    <tbody class="Custom">
                        <tr class="Custom-1">
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr class="Custom-1">
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr class="Custom-1">
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-43">
    <div class="title">
        <div class="container">
            <h2>EXT. STYLES</h2>

            <ul class="d-flex pl-0">
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <span></span>
                    <a href="#">EXT. STYLES</a>
                </li>
                <li>
                    <span></span>
                    <a href="#">K2</a>
                </li>
                <li>
                    <span>Items</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="Content">
            <div class="Content-title">
                <h2>Studying The Civil War, Finding Shared Values</h2>
            </div>
            <div class="Content-tool">
                <div class="Content-tool-a d-flex">
                    <p class="pr-4">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <span>Super User</span></p>
                    <p>
                        <i class="fa fa-folder-open-o" aria-hidden="true"></i>
                        <span>News</span></p>
                </div>
                <div class="Content-tool-b text-right">
                    <span class="pr-1">
                        font size
                    </span>

                    <i class="fa fa-search-plus" aria-hidden="true"></i>

                    <i class="fa fa-search-minus" aria-hidden="true"></i>
                    <i class="fa fa-print" aria-hidden="true"></i>
                </div>
            </div>
            <div class="Content-text">
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <p>
                    It is a long established fact that a reader will be distracted by the readable content of a page
                    when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                    distribution of letters, as opposed to using 'Content here, content here', making it look like
                    readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                    default model text, and a search for 'lorem ipsum' will uncover many web sites still in their
                    infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose
                    (injected humour and the like).
                </p>
                <p class="pt-4 pb-4">
                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                    classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin
                    professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words,
                    consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical
                    literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33
                    of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This
                    book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of
                    Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                </p>
                <p>
                    The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.
                    Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in
                    their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                </p>
                <div class="day font-italic">
                    Monday, 07 September 2015 02:19
                </div>
                <div class="Content-text-under">
                    <span class="active">
                        Tagged under
                    </span>
                    <span class="btn">
                        #lorem
                    </span>
                    <span class="btn">
                        #lspim
                    </span>
                    <span class="btn">
                        #love
                    </span>
                    <span class="btn">#strong</span>
                </div>
                <div class="Content-text-read d-flex justify-content-between">
                    <p>Read <b>276</b> times</p>
                    <p class="font-italic">Last modified on Tuesday, 08 September 2015 04:23</p>

                </div>
            </div>
            <div class="dropdown-divider m-0 p-0"></div>
            <div class="Content-icon d-flex justify-content-between">
                <div class="btn">
                    <button class="mr-5"><i class="fa fa-twitter" aria-hidden="true"></i> Tweet</button>
                    <button><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like</button>
                    <span>Be the first of your friends to like this.</span>
                </div>
                <div class="icon d-flex align-items-center">
                    <span>Rate this item </span>
                    <div class="Custom-star d-flex">
                    <p class="star m-0"></p>
                    <p class="star m-0"></p>
                    <p class="star m-0"></p>
                    <p class="star m-0"></p>
                    <p class="star m-0"></p>
                    </div>
                    <span> (1 Vote)</span>
                </div>
            </div>
            <div class="Content-user d-flex">
                <div>
                    <img src="images/43_uset.jpg" alt="">
                </div>
                
                <div class="Content-user-text pl-4">
                    <h3>Super User</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            <div class="Content-sup mt-5 mb-4">
                <h3>MORE IN THIS CATEGORY:</h3>
                <ul>
                    <li>
                        <a href="#">Blank University to launch legal action against UK Border Agency</a>
                    </li>
                </ul>
                <h3>LATEST FROM SUPER USER</h3>
                <ul>
                    <li>
                        <a href="#">Blank University to launch legal action against UK Border Agency</a>
                    </li>
                    <li>
                        <a href="#">Dementia prevalence figures in the UK show decline over past 20 years</a>
                    </li>
                </ul>
                <div class="text-right">
                <span>back to top</span></div>
            </div>
            <div class="dropdown-divider m-0 p-0 mb-5"></div>

        </div>
    </div>
</div>
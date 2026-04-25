<?php return ["layout" => function ($opt, $body, $head) { ?>
    <!doctype html>
    <html class="no-js" data-bs-theme="dark">

    <head>
        <?php $opt["layout_essentials_head"]($opt); ?>
        <?php $head($opt); ?>
        <link href="/assets/css/blog.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900" rel="stylesheet">

    </head>

    <body id="top" data-test="dashboard-top">


        <!doctype html>
        <html lang="en">

        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="description" content="">
            <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
            <meta name="generator" content="Hugo 0.101.0">
            <title>Blog Template · Bootstrap v4.6</title>

            <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/blog/">


            <style>
                .bd-placeholder-img {
                    font-size: 1.125rem;
                    text-anchor: middle;
                    -webkit-user-select: none;
                    -moz-user-select: none;
                    -ms-user-select: none;
                    user-select: none;
                }

                @media (min-width: 768px) {
                    .bd-placeholder-img-lg {
                        font-size: 3.5rem;
                    }
                }
            </style>


        </head>

        <body>

            <div class="container">
                <header class="blog-header py-3">
                    <div class="row flex-nowrap justify-content-between align-items-center">
                        <div class="col-4 pt-1">
                            <a class="text-muted" href="#">Subscribe</a>
                        </div>
                        <div class="col-4 text-center">
                            <a class="blog-header-logo text-dark" href="/">Boot Style Blog</a>
                        </div>
                        <div class="col-4 d-flex justify-content-end align-items-center">
                            <a class="text-muted" href="#" aria-label="Search">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24" focusable="false">
                                    <title>Search</title>
                                    <circle cx="10.5" cy="10.5" r="7.5" />
                                    <path d="M21 21l-5.2-5.2" />
                                </svg>
                            </a>
                            <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
                        </div>
                    </div>
                </header>

                <div class="nav-scroller py-1 mb-0">
                    <nav class="nav d-flex justify-content-between">
                        <a class="p-2 text-muted" href="/posts/index">Posts</a>
                        <a class="p-2 text-muted" href="#">Technology</a>
                        <a class="p-2 text-muted" href="#">Design</a>
                        <a class="p-2 text-muted" href="#">Culture</a>
                        <a class="p-2 text-muted" href="#">Business</a>
                        <a class="p-2 text-muted" href="#">Politics</a>
                        <a class="p-2 text-muted" href="#">Opinion</a>
                        <a class="p-2 text-muted" href="#">Science</a>
                        <a class="p-2 text-muted" href="#">Health</a>
                        <a class="p-2 text-muted" href="#">Style</a>
                        <a class="p-2 text-muted" href="#">Travel</a>
                    </nav>
                </div>

                <div class="nav-scroller py-1 mb-2">
                    <nav class="nav d-flex justify-content-between">
                        <a class="p-2 text-muted" href="/posts/index">Index</a>
                        <a class="p-2 text-muted" href="/posts/add">Archive</a>
                        <a class="p-2 text-muted" href="#">Create</a>
                        <a class="p-2 text-muted" href="#">Statistics</a>
                        <a class="p-2 text-muted" href="#">Culture</a>
                        <a class="p-2 text-muted" href="#">Business</a>
                        <a class="p-2 text-muted" href="#">Politics</a>
                        <a class="p-2 text-muted" href="#">Opinion</a>
                        <a class="p-2 text-muted" href="#">Science</a>
                        <a class="p-2 text-muted" href="#">Health</a>
                        <a class="p-2 text-muted" href="#">Style</a>
                        <a class="p-2 text-muted" href="#">Travel</a>
                    </nav>
                </div>

                <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
                    <div class="col-md-6 px-0">
                        <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
                        <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
                        <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
                    </div>
                </div>





                <div class="row mb-2">
                    <div class="col-md-6">
                        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                            <div class="col p-4 d-flex flex-column position-static">
                                <strong class="d-inline-block mb-2 text-primary">World</strong>
                                <h3 class="mb-0">Featured post</h3>
                                <div class="mb-1 text-muted">Nov 12</div>
                                <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="stretched-link">Continue reading</a>
                            </div>
                            <div class="col-auto d-none d-lg-block">
                                <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                                </svg>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                            <div class="col p-4 d-flex flex-column position-static">
                                <strong class="d-inline-block mb-2 text-success">Design</strong>
                                <h3 class="mb-0">Post title</h3>
                                <div class="mb-1 text-muted">Nov 11</div>
                                <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="stretched-link">Continue reading</a>
                            </div>
                            <div class="col-auto d-none d-lg-block">
                                <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                                </svg>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <main role="main" class="container">
                <div class="row">
                    <div class="col-md-8 blog-main">

                        <?php $body($opt); ?>
                    </div>


                    <aside class="col-md-4 blog-sidebar">
                        <div class="p-4 mb-3 bg-light rounded">
                            <h4 class="font-italic">About</h4>
                            <p class="mb-0">Saw you downtown singing the Blues. Watch you circle the drain. Why don't you let me stop by? Heavy is the head that <em>wears the crown</em>. Yes, we make angels cry, raining down on earth from up above.</p>
                        </div>

                        <div class="p-4">
                            <h4 class="font-italic">Archives</h4>
                            <ol class="list-unstyled mb-0">
                                <?php foreach ($opt["request"]->store["sideBarElements"] as $element) { ?>
                                    <li>
                                        <a href="<?= "$opt[root]posts/archive/$element[year]/$element[month]" ?>">
                                            <?= $element["year"] ?>
                                            <?= $element["month_formatted"] ?>
                                            (<?= $element["amount"] ?>)
                                        </a>
                                    </li>
                                <?php } ?>
                            </ol>
                        </div>

                        <div class="p-4">
                            <h4 class="font-italic">Elsewhere</h4>
                            <ol class="list-unstyled">
                                <li><a href="https://github.com/mhmdoch">GitHub</a></li>
                                <li class="font-weight-light">Twitter</li>
                                <li class="font-weight-light">Facebook</li>
                            </ol>
                        </div>
                    </aside><!-- /.blog-sidebar -->





                </div><!-- /.row -->

            </main><!-- /.container -->

            <footer class="blog-footer">
                <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
                <p>
                    <a href="#">Back to top</a>
                </p>
            </footer>



        </body>

        </html>






    </body>

    </html>
<?php }]; ?>
<?php
    $url_host = 'http://' . $_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

    if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
        require_once($dir_block . '/libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/3049.less', 'css/3049.css');
    ?>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">  
    <link href="<?php echo $url_path ?>/css/3049.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <div class="container-3049">
        <div class="row">
            <!-- Bài viết chính -->
            <div class="col-12 col-md-9">
                <div class="row my-5">
                    <div class="col-12 col-md-4">
                        <div class="post">
                            <img src="dWt1tegCBKUiIdKV.jpeg"
                                alt="Person holding a smartphone with a broken screen">
                            <div class="overlay">
                                This is the overlay content
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-8 px-5 mb-5 ">
                        <div class="post-title">10 Tips: Avoid Breaking Glass of your Smartphone</div>
                        <div class="post-content">
                            Femiration we are surrounded possession frequently them. Empilait acable heureuse
                            capitale
                            havresac nul etroites. Tours him route accable ecarter grand. Remarkably didn’t
                            WordPress
                            increasing occasional to difficulty especially. Known tiled he sorry joy balls.
                        </div>
                        <button class="btn-one">READ MORE <i class="move fas fa-arrow-right"></i></button>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="post">
                            <img src="Motherboard-Repair.jpg"
                                alt="Person holding a smartphone with a broken screen">
                            <div class="overlay">
                                This is the overlay content
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-8 px-5 mb-5">
                        <div class="post-title">How to Repair iPhone: 6 Ways Best Online Guides</div>
                        <div class="post-content">
                            Admiration we are surrounded possession frequently them. Empilait acable heureuse
                            capitale
                            havresac nul etroites. Tours him route accable ecarter grand. Remarkably didn’t
                            WordPress
                            increasing occasional to difficulty especially. Known tiled he sorry joy balls. Bed
                            sudden
                            manner indeed now feebly.
                        </div>
                        <button class="btn-one">READ MORE <i class="move fas fa-arrow-right"></i></button>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="post">
                            <img src="tfnchBFIlhgNqeA.jpeg"
                                alt="Person holding a smartphone with a broken screen">
                            <div class="overlay">
                                This is the overlay content
                            </div>
                        </div>
                    </div>


                    <div class="col-12 col-md-8 px-5 mb-5">
                        <div class="post-title">Finding a used Smartphone: Checking the Original</div>
                        <div class="post-content">
                            We are surrounded possession frequently them. Empilait acable heureuse capitale havresac
                            nul
                            etroites. Tours him route accable ecarter grand.
                        </div>
                        <button class="btn-one">READ MORE <i class="move fas fa-arrow-right"></i></button>
                    </div>
                </div>

                <!-- Thêm các bài viết khác tương tự -->
            </div>

            <!-- Sidebar -->
            <div class="col-12 col-md-3">
                <div class="mt-5">
                    <div class="search-box mb-5">
                        <input type="text" placeholder="Search" class="input-siderbar">
                        <i class="fas fa-search"></i>
                    </div>
                    <div class="subscription-box">
                        <h3>Get Even More</h3>
                        <p>"Get all latest content delivered straight to your inbox."</p>
                        <div class="form-search mb-2 d-flex flex-wrap">
                            <input type="email" class="form-email w-100 w-md-auto mb-2 mb-md-0"
                                placeholder="Enter email">
                            <button type="submit" class="btn">GO</button>
                        </div>
                        <p class="note">Don't worry we don't spam</p>
                    </div>
                </div>

                <!-- Thẻ tab -->
                <div class="row g-0 mt-5">
                    <div class="col-6">
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Popular</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Comments</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Recent</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Tags</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- News section -->

                <div class="news-item">
                    <img alt="Person repairing an iPhone"
                        src="dWt1tegCBKUiIdKV.jpeg" />
                    <div class="news-content">
                        <h5>How to Repair iPhone: 6 Ways Best Online Guides</h5>
                        <p>February 8, 2017</p>
                    </div>
                </div>
                <div class="news-item">
                    <img alt="Person repairing an iPhone"
                        src="Motherboard-Repair.jpg" />
                    <div class="news-content">
                        <h5>How to Repair iPhone: 6 Ways Best Online Guides</h5>
                        <p>February 8, 2017</p>
                    </div>
                </div>
                <div class="news-item">
                    <img alt="Person repairing an iPhone"
                        src="tfnchBFIlhgNqeA.jpeg" />
                    <div class="news-content">
                        <h5>How to Repair iPhone: 6 Ways Best Online Guides</h5>
                        <p>February 8, 2017</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>
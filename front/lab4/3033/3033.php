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
    $less->compileFile('less/3033.less', 'css/3033.css');
    ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>3033</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
         integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
         crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="<?php echo $url_path ?>/css/3033.css" rel="stylesheet" type="text/css" />
     <style>

     </style>
 </head>

 <body>
     <div class="container ">
         <div class="row ">
             <div class="col-12 col-md-6 faq-section">
                 <div class="wrapper">
                     <h4 class="question">
                         Will my repair cause data loss on my device?
                         <i class="fa-solid fa-angle-right"></i>
                     </h4>
                     <div class="answer">We give a Guarantee for a Period of 5 years and promise to rectify any fault
                         arising out of
                         faulty workmanship at our cost. However the guarantee does not hold good for mishandling and
                         breakable ...
                     </div>
                 </div>
                 <div class="wrapper">
                     <h4 class="question">
                         Do you provide any guarantee on the repairs?
                         <i class="fa-solid fa-angle-right"></i>
                     </h4>
                     <div class="answer">We give a Guarantee for a Period of 5 years and promise to rectify any fault
                         arising out of
                         faulty workmanship at our cost. However the guarantee does not hold good for mishandling and
                         breakable ...
                     </div>
                 </div>
                 <div class="wrapper">
                     <h4 class="question">
                         What is the procedure for getting phone unlocked?
                         <i class="fa-solid fa-angle-right"></i>
                     </h4>
                     <div class="answer">We give a Guarantee for a Period of 5 years and promise to rectify any fault
                         arising out of
                         faulty workmanship at our cost. However the guarantee does not hold good for mishandling and
                         breakable ...
                     </div>
                 </div>
                 <div class="wrapper">
                     <h4 class="question">
                         How will I get the updates of my repairs?
                         <i class="fa-solid fa-angle-right"></i>
                     </h4>
                     <div class="answer">We give a Guarantee for a Period of 5 years and promise to rectify any fault
                         arising out of
                         faulty workmanship at our cost. However the guarantee does not hold good for mishandling and
                         breakable ...
                     </div>
                 </div>
                 <div class="wrapper">
                     <h4 class="question">
                         What if you find more problems than quoted?
                         <i class="fa-solid fa-angle-right"></i>
                     </h4>
                     <div class="answer">We give a Guarantee for a Period of 5 years and promise to rectify any fault
                         arising out of
                         faulty workmanship at our cost. However the guarantee does not hold good for mishandling and
                         breakable ...
                     </div>
                 </div>
                 <div class="wrapper">
                     <h4 class="question">
                         Whom to contact in case of any grievances
                         <i class="fa-solid fa-angle-right"></i>
                     </h4>
                     <div class="answer">
                         <p></p>
                         We give a Guarantee for a Period of 5 years and promise to rectify any fault
                         arising out of
                         faulty workmanship at our cost. However the guarantee does not hold good for mishandling and
                         breakable ...
                     </div>
                 </div>
             </div>
             <div class="col-12 col-md-6 form-section" style="background-color: #f7f7f7;">
                 <h1 class="mb-2">Ask Your Questions</h1>
                 <form>
                     <div class="mb-4">
                         <input type="text" class="form-control p-3" placeholder="Name*" required>
                     </div>
                     <div class="mb-4">
                         <input type="email" class="form-control p-3" placeholder="Email*" required>
                     </div>
                     <div class="mb-4">
                         <input type="text" class="form-control p-3" placeholder="Subject">
                     </div>
                     <div class="mb-5">
                         <textarea class="form-control p-3" rows="5" placeholder="Your Questions..."></textarea>
                     </div>
                     <button type="submit" class="btn">SUBMIT NOW</button>
                 </form>
             </div>
         </div>
     </div>

     <script src="js/script"></script>
 </body>

 </html>
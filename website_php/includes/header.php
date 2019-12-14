
<!DOCTYPE html>
<html lang="de">

<head>
    <title>WEB</title>
    <meta charset="UTF-8">
    <link href="stylesheet.css" rel="stylesheet" />
    <link <?php if ($topic == 'main') {echo 'href="index-style.css"';}
                else if ($topic == 'cs') {echo 'href="v01-data/v01-style.css"';}
                else if($topic == 'html') {echo 'href="v02a-data/v02a-style.css"';}
                else if($topic == 'css') {echo 'href="v02b-data/v02b-style.css"';}
                else if($topic == 'js-mb') {echo 'href="v02cmb-data/v02c-javascript-mb.css"';}
                else if($topic == 'js') { echo 'href="v02c-data/v02c-style.css"';} ?> rel="stylesheet" />
    <link rel="icon" type="image/png" href="hsmalogo.png" />
</head>

<body>
    <div class="page">
        <div class="header">
            <div>
                <p>Gruppe A-5</p>
                <img src="hsmalogo.png" id="logo">
                <img src="hsmaschriftzug.png" alt="Hochschule Mannheim" class="schriftzug">
            </div>
        </div>

        <nav>
            <ul class="navigation">
                <li><a <?php if($topic == 'main') { echo 'id="activetab"';} ?>href="index.php">Start</a></li>
                <li><a <?php if($topic == 'cs') { echo 'id="activetab"';} ?>href="v01-client-server.php">Server & Client</a></li>
                <li><a <?php if($topic == 'html') { echo 'id="activetab"';} ?>href="v02a-html.php">HTML</a></li>
                <li><a <?php if($topic == 'css') { echo 'id="activetab"';} ?>href="v02b-css.php">CSS</a></li>
                <li><a <?php if($topic == 'js') { echo 'id="activetab"';} ?>href="v02c-javascript.php">JavaScript</a></li>
                <li><a <?php if($topic == 'js-mb') { echo 'id="activetab"';} ?>href="v02c-javascript-mb.php">JavaScript 2</a></li>
                <li><a <?php if($topic == 'jsp') { echo 'id="activetab"';} ?>href="v03a.php">JSP's/Servlets/JaxB </a></li>
                <li><a <?php if($topic == 'php') { echo 'id="activetab"';} ?>href="v03b.php">PHP</a></li>
                <li><a <?php if($topic == 'node') { echo 'id="activetab"';} ?>href="v03c.php">NodeJS</a></li>
            </ul>
        </nav>



            
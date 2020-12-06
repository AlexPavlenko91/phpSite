<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="theme-color" content="#35bc7a"/> <!--meta charset="UTF-8" /-->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>ЖЕК-hmvs</title>
    <link href="../../css/bootstrap.css" rel="stylesheet">
    <style>
        #main {
            width: 100%;
            background: lightgrey;
            display: flex;
            flex-direction: column;
        }

        header, footer {
            display: flex;
            flex-direction: row;
            background: #c4e3f3;
            border: 1px solid blue;
            justify-content: space-around;
        }

        nav {
            display: flex;
            justify-content: space-around;
            background: lightcyan;
            font-size: 25px;
        }

        nav a:active {
            background-color: yellow;
        }
    </style>
</head>
<body>
<div id="main" class="main-holder"> <!--Begin #motopress-main-->
    <header>
        <h1>ЖЕК</h1>
        <div class="img-header"><img src="../../images/logo.png" width="500" height="80"></div>
    </header>
    <div><a href="<?= Url::local("registration"); ?>" class="btn btn-primary">Registration</a></div>
    <div>
        <?= $content ?>
        <div></div>
    </div>

    <footer>
        <h4>Житомир 2020</h4>
    </footer> <!--End #motopress-main-->

</div>
</body>
</html>
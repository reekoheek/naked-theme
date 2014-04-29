<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> <?php echo f('about', 'title') ?></title>

    <script src="<?php echo Theme::base('vendor/jquery/jquery.js') ?>"></script>

    <link rel="stylesheet" href="<?php echo Theme::base('vendor/css/naked.css') ?>">
    <link rel="stylesheet" href="<?php echo Theme::base('vendor/css/main.css') ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="row">
                <div class="span-2">
                    <a class="back-button" href="<?php echo URL::base() ?>">Home</a>
                </div>
                <div class="span-8">
                    <h6 class="label">Account</h6>
                </div>
                <div class="span-2">
                    &nbsp
                </div>
            </div>
        </nav>
    </header>

    <main>
        <?php echo f('notification.show') ?>

        <div id="body">
            <div class="container">
                <?php echo $body ?>
            </div>
        </div>
        <?php // if (isset($flash[ 'error']) || isset($flash[ 'info'])): ?>
        <!-- <div class="row alert-row">
            <?php if (isset($flash[ 'error'])): ?>
            <div class="alert error">
                <?php echo $flash[ 'error']; ?>
            </div>
            <?php endif ?>
            <?php if (isset($flash[ 'info'])): ?>
            <div class="alert success">
                <?php echo $flash[ 'info']; ?>
            </div>
            <?php endif ?>
        </div> -->
        <?php // endif ?>

    </main>
</body>
</html>

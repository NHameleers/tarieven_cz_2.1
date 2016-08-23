<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8">

        <!-- Bootstrap: Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Bootstrap: Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <?php if (isset($title)): ?>
            <title>Tarieven CZ: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>Tarieven CZ</title>
        <?php endif ?>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

        <!-- Bootstrap: Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <!-- Tablesorter: in order to make sortable columns -->
        <script src="/tarieven_cz_2.1/public/js/jquery.tablesorter.min.js"></script>

        <!-- Font awesome for euro signs -->
        <script src="https://use.fontawesome.com/9adb068096.js"></script>

        <!-- Own CSS and JS -->
        <link href="/tarieven_cz_2.1/public/css/styles.css" rel="stylesheet"/>
        <script src="/tarieven_cz_2.1/public/js/scripts.js"></script>

    </head>

    <body>

        <div class="container">

            <div id="top">
                <a href="/tarieven_cz_2.1/"><h1>Tarieven CZ</h1></a>
            </div>

            <div id="middle">

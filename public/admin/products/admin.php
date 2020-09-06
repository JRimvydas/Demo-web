<?php

require_once '../../../bootloader.php';

use App\Views\Navigation;

if (!\App\App::$session->getUser() || \App\App::$session->getUser()->role === \App\Users\User::ROLE_USER) {
    header("Http/1.1 401 Unauthorized");
    exit();
}

$navigation = new Navigation();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Admin page</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <script src="../../assets/js/admin.js" type="module"></script>
</head>
<body>
<?php print $navigation->render(); ?>
<main>
    <div class="wrapper" id="app">

    </div>
</main>
</body>
</html>

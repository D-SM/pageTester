<?php
//    require_once '.http://localhost:63342/pageTester/client/log/checkstatus.php'

//error_reporting(0);
//@ini_set('display_errors', 0);
?>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">

</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

<!--</div>-->
<header class="shadow">
    <section class="description centered">
        <h2><a href="#"><img src="../img/logo.png" height="50"></a>
            Page tester</h2></p>
        <div class="menuTop">
            <nav>
                <ul>
                    <li>
                        <a href="#">Create database</a>
                    </li>
                    <li>
                        <a href="#">Load database</a>
                    </li>
                    <li>
                        <a href="#">Configure tester</a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
</header>
<script type="text/html" id="domainTable">
    <% _.each( dataJson , function(value, key) { %>
    <tr data-id="<%= value.id %>">
        <th scope="row"><%= value.id %></th>
        <td><%= value.name %></td>
        <td><%= value.url %></td>
        <td class="status"></td>
        <td class="robots"></td>
    </tr>
    <% }); %>
</script>
<section>
    <div class="timeStamp centered">
        <p>Data updated: <span data-id="lastUpdateTime">*</span></p>
    </div>
    <div class="container centered shadow">
        <div class="menuContainer">
            <nav>
                <ul>
                    <li>
                        <a href="#">Page</a>
                    </li>
                    <li>
                        <a href="#">Reload</a>
                    </li>
                    <li>
                        <a href="#">Expand all</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="servicesTableContainer">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>URL</th>
                    <th>Status</th>
                    <th>Meta tags</th>
                </tr>
                </thead>
                <tbody class="servicesTable">
                </tbody>
            </table>
        </div>
        <div class="menuBottom">
            <nav>
                <ul>
                    <li>
                        <a href="#">Download statistics</a>
                    </li>
                    <li>
                        <a href="#">Download database</a>
                    </li>
                    <li>
                        <a href="#">Download history statistics</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</section>
<footer>
    <div class="centered">
        <div class="footer-left">
            <p>Some information</p>
        </div>
        <div class="footer-right">
            <p><a href="#">Help</a></p>

            <p><a href="mailto:dawid.smolski@gmail.com">Report a problem</a></p>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/lodash/4.15.0/lodash.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>

<?php

exit;







    function(){

        $.getJSON('../log/status.json', showUrlStatus);
        function showUrlStatus(statusDara){
            $.forEach(data, function() ){

            }
        }


            <% _.each( dataJson , function(value, key) { %>
                <tr data-id="<%= value.id %>">;
        }
            $('[data-id="s"]')

        $('.servicesTable [data-id="$id"]').append(myTemplate({dataJson:data.sites}));

    }
);


    echo '<pre>';
    print_r($key["url"]);
    echo  '</pre>';

//ZAPIS HISTORII STATUSÓW z ładną datą
//$date = new DateTime();
//echo $date->format('Y-m-d H:i:s');
......
Bootstrap do tabelki

<table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

....
Tablica z której ma powstać json
<?php
$servicesArray = [
    '1' => ['name' => 'epity.pl', 'url' => 'https://www.e-pity.pl/'],
    '2' => ['name' => 'druki-formularze.pl', 'url' => 'https://www.druki-formularze.pl/'],
    '3' => ['name' => 'gazetaprawna.pl', 'url' => 'http://formularze.edgp.gazetaprawna.pl/'],
    '4' => ['name' => '500-plus.pl', 'url' => 'http://www.500-plus.pl/'],
    '5' => ['name' => 'cit-8.pl', 'url' => 'http://www.cit-8.pl/'],
    '6' => ['name' => 'e-deklaracje.info.pl', 'url' => 'http://www.e-deklaracje.info.pl/'],
    '7' => ['name' => 'jpk.info.pl', 'url' => 'http://www.jpk.info.pl/'],
    '8' => ['name' => 'nip-2.pl', 'url' => 'http://www.nip-2.pl/'],
    '9' => ['name' => 'pcc-3.pl', 'url' => 'http://www.pcc-3.pl/'],
    '10' => ['name' => 'upl-1.pl', 'url' => 'http://www.upl-1.pl/'],
    '11' => ['name' => 'vat-7.pl', 'url' => 'http://www.vat-7.pl/'],
    '12' => ['name' => 'zapiczki.pit5.pl', 'url' => 'http://www.zapiczki.pit5.pl/'],
    ];

//echo '<pre>';
//print_r($servicesArray);
//echo  '</pre>';


?>

// Generator tabeli
    <table border="1">
        <h1>Tester</h1>
        <thead>
            <tr>
                <th>Name</th>
                <th>Url</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
        <?php
        foreach ($servicesArray as $service => $values){ ?>
            <tr>
                <td><?php echo($values[name])?></php></td>
                <td><?php echo($values[url]) ?></td>
                <td>status</td>
            </tr>
        <?php } ?>
        </tbody>
        </table>

******************
        z popredzeniej strony
        script>
            var QueryString = function () {
                // This function is anonymous, is executed immediately and
                // the return value is assigned to QueryString!
                var query_string = {};
                var query = window.location.search.substring(1);
                var vars = query.split("&");
                for (var i=0;i<vars.length;i++) {
                    var pair = vars[i].split("=");
                    // If first entry with this name
                    if (typeof query_string[pair[0]] === "undefined") {
                        query_string[pair[0]] = decodeURIComponent(pair[1]);
                        // If second entry with this name
                    } else if (typeof query_string[pair[0]] === "string") {
                        var arr = [ query_string[pair[0]],decodeURIComponent(pair[1]) ];
                        query_string[pair[0]] = arr;
                        // If third or later entry with this name
                    } else {
                        query_string[pair[0]].push(decodeURIComponent(pair[1]));
                    }
                }
                return query_string;
            }();

            function check_database(data) {
                var $connectElem = $('body').find('[data-status="database_connect"]');
                var $requestElem = $('body').find('[data-status="database_request"]');

                $connectElem.html(data.status_database_connect);
                if (data.status_database_connect === "OK") {
                    $connectElem.addClass('ok');
                }

                $requestElem.html(data.status_database_request);
                if (data.status_database_request === "OK") {
                    $requestElem.addClass('ok');
                }

            }

            function check_mds(data) {
                var $mds_check = $('body').find('[data-status="mds_offer"]');
                var $mds_offer = $('body').find('[data-status="mds_product"]');

                $mds_check.html(data.mds_offer);
                if (data.mds_offer === "OK") {
                    $mds_check.addClass('ok');
                }

                $mds_offer.html(data.mds_product);
                if (data.mds_product === "OK") {
                    $mds_offer.addClass('ok');
                }
            }

            function check_recommendation(data) {
                var $recommendation = $('body').find('[data-status="recommendation"]');

                $recommendation.html(data.status_recommendation);
                if (data.status_recommendation === "OK") {
                    $recommendation.addClass('ok');
                }
            }

            function parse_xml_oferta(data) {
                var $parse_xml_oferta = $('body').find('[data-status="parse_xml_oferta"]');

                $parse_xml_oferta.html(data.status_parse_xml_error);
                if (data.status_parse_xml_error === "OK") {
                    $parse_xml_oferta.addClass('ok');
                } else {
                    $parse_xml_oferta.addClass('err');
                }
            }

            function parse_xml_geo(data) {
                var $parse_xml_geo = $('body').find('[data-status="parse_xml_geo"]');

                $parse_xml_geo.html(data.status_parse_xml_error);
                if (data.status_parse_xml_error === "OK") {
                    $parse_xml_geo.addClass('ok');
                } else {

                    $parse_xml_geo.addClass('err');
                }
            }

            function parse_xml_opinie(data) {
                var $parse_xml_opinie = $('body').find('[data-status="parse_xml_opinie"]');

                $parse_xml_opinie.html(data.status_parse_xml_error);
                if (data.status_parse_xml_error === "OK") {
                    $parse_xml_opinie.addClass('ok');
                } else {
                    $parse_xml_opinie.addClass('err');
                }
            }

            function get_resources(data){
                var $resources = $('body').find('[data-status="resources"]');
                $resources.html(data.status);
                if(data.status === "OK"){

                    $resources.addClass('ok');
                }else {
                    $resources.addClass('err');
                    $resources.find('.link-more').show();
                }
            }
            function get_mef_comments(data){
                var $mef = $('body').find('[data-status="grep_mef"]');
                $mef.html(data.status);
        //        console.log("mef");
                if(data.status === "OK"){

                    $mef.addClass('ok');
                }else {
                    $mef.addClass('err');
                    $mef.find('.link-more').show();

                }
            }

            function get_hotels_opinions(data){
                var $hotel = $('body').find('[data-status="hotels_opinions"]');
                $hotel.html(data.status);
        //        console.log("$hotel");
                if(data.status === "OK"){

                    $hotel.addClass('ok');
                }else {
                    $hotel.addClass('err');
                    $hotel.find('.link-more').show();

                }
            }

            function get_sync_test_flag(data){
                var $sync_flag = $('body').find('[data-status="sync_flag"]');
                $sync_flag.html(data.status);
        //        console.log("sync_flag");
                if(data.status === "OK"){
                    $sync_flag.addClass('ok');
                }else {
                    $sync_flag.addClass('err');
                    $sync_flag.find('.link-more').show();
                }
                $('#inputSync').val( data.last_log_row[2] );

            }
            function blockSync(ev){
                var url = QueryString;
                var data = {
                    status: $('[data-button-flag]').hasClass('btn-success') ? "false" : "OK",
                    reason: $('#inputSync').val()
                };
                $.getJSON('put_sync_test_flag.php',data, function (data){
        //         console.log(data + "reload");
                    window.location.reload();
                }).done(function(){
                    window.location.reload();
                });
            }



            $.getJSON('get_sync_test_flag.php', function (data){
                if (data.status === "OK"){
                    $('[data-button-flag]').addClass('btn-success');
                } else {
                    $('[data-button-flag]').addClass('btn-danger');
                    $('[data-button-flag]').text('Odblokuj');
                }
        //         console.log(data);
            });

            function get_test_resources(data){
                var $resources = $('body').find('[data-status="test_resources"]');
                $resources.html(data.status);
                if(data.status === "OK"){

                    $resources.addClass('ok');
                }else {
                    $resources.addClass('err');
                }
            }
            function get_mongo_test(data){
                var $main = $('body').find('[data-status="test_mongo_oferta"]');
                var $product = $('body').find('[data-status="test_mongo_zmiana_parametrow_produktu"]');
                var $search = $('body').find('[data-status="test_mongo_wyszukiwanie"]');
                var $autostart = $('body').find('[data-status="test_mongo_autostart"]');

                var $zapamietanie = $('body').find('[data-status="test_mongo_zapamietanie"]');
                var $opis = $('body').find('[data-status="test_mongo_opis"]');
                var $wycieczki = $('body').find('[data-status="test_mongo_wycieczki"]');
                var $zdjecia = $('body').find('[data-status="test_mongo_zdjecia"]');
                var $informacje = $('body').find('[data-status="test_mongo_informacje"]');


                $main.html(data.status_main);
                $product.html(data.status_product);
                $search.html(data.status_search);
                $autostart.html(data.status_autostart);

                $zapamietanie.html(data.status_zapamietanie);
                $opis.html(data.status_opis);
                $wycieczki.html(data.status_wycieczki);
                $zdjecia.html(data.status_zdjecia);
                $informacje.html(data.status_informacje);



                if(data.status_main === "OK"){
                    $main.addClass('ok');
                } else {
                    $main.addClass('err');
                }
                if(data.status_product === "OK"){
                    $product.addClass('ok');
                } else {
                    $product.addClass('err');
                }
                if(data.status_search === "OK"){
                    $search.addClass('ok');
                } else {
                    $search.addClass('err');
                }
                if(data.status_autostart === "OK"){
                    $autostart.addClass('ok');
                } else {
                    $autostart.addClass('err');
                }

                if(data.status_zapamietanie === "OK"){
                    $zapamietanie.addClass('ok');
                } else {
                    $zapamietanie.addClass('err');
                }
                if(data.status_opis === "OK"){
                    $opis.addClass('ok');
                } else {
                    $opis.addClass('err');
                }
                if(data.status_wycieczki === "OK"){
                    $wycieczki.addClass('ok');
                } else {
                    $wycieczki.addClass('err');
                }
                if(data.status_zdjecia === "OK"){
                    $zdjecia.addClass('ok');
                } else {
                    $zdjecia.addClass('err');
                }
                if(data.status_informacje === "OK"){
                    $informacje.addClass('ok');
                } else {
                    $informacje.addClass('err');
                }

            }
            function get_tests_git_branch(data){
                var $branch = $('body').find('[data-status="branches"]');
                $branch.html(data.status);
        //        console.log("branch");
                if(data.status === "OK"){

                    $branch.addClass('ok');
                    $('body').find('[data-js-branches="branches"]').text(data.gitTestBranches);
                }else {
                    $branch.addClass('err');
                    $branch.find('.link-more').show();

                }
            }

            function get_mailer(data) {
                var $mailer_check = $('body').find('[data-status="mailer"]');

                $mailer_check.html(data.status);
                if (data.status === "OK") {
                    $mailer_check.addClass('ok');
                } else {
                    $mailer_check.addClass('err');
                }
            }

            $('.free').one('click', blockSync);
            $.getJSON('get_database_status.php', check_database);
            $.getJSON('get_mds_status.php', check_mds);
            $.getJSON('get_mailer.php', get_mailer);
            $.getJSON('get_recommendation_status.php', check_recommendation);
            $.getJSON('get_parse_xml_oferta.php', parse_xml_oferta);
            $.getJSON('get_parse_xml_geo.php', parse_xml_geo);
            $.getJSON('get_parse_xml_opinie.php', parse_xml_opinie);
            $.getJSON('get_resources_status.php', get_resources);
            $.getJSON('get_mef_comments_list.php', get_mef_comments);
            $.getJSON('get_hotels_opinions.php', get_hotels_opinions);
            $.getJSON('get_sync_test_flag.php', get_sync_test_flag);
            $.getJSON('get_test_resources_status.php', get_test_resources);
            $.getJSON('get_mongo_log.php', get_mongo_test);
            $.getJSON('get_tests_git_branch.php', get_tests_git_branch);
        </script>
        <![endif]-->

       Add your site or application content here
        <div class="row">-->
            <section class="status col-xs-6 col-md-6">
                h1>cms02-w3 |  10.68.1.70</h1>
                <div><span>Database connect:</span>

                    <h2 data-status="database_connect">false</h2></div>
              <div><span>Database request:</span>

                    <<h2 data-status="database_request">false</h2></div>
                <div><span>MDS offer:</span>

                    <h2 data-status="mds_offer">false</h2></div>
                <div><span>MDS product:</span>-->

                    <h2 data-status="mds_product">false</h2></div>
                <div><span>Recommendation:</span>

                    <h2 data-status="recommendation"></h2></div>
                <div><span>Content:</span><img class="content" src="http://content.itaka.pl/cms/img/u/hotel/fuerioc_0.jpg"></div>
                <div><span>Content2:</span><img class="content" src="http://content2.itaka.pl/cms/img/u/hotel/fuerioc_0.jpg"></div>

                <div><span>Mailer:</span>

                    <a href="flag_mailer.json" target="_blank"><h2 data-status="mailer">false</h2></a></div>
            </section>
        </div>
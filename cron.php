<?php
/**
 * Created by PhpStorm.
 * User: webtailor
 * Date: 16.09.16
 * Time: 15:01
 */
require_once 'bootstrap.php';

if (isset($_GET['type'])) {
    if ($_GET['type'] === 'CheckStatus') {
        // http://new.4testing.pl/testing/cron.php?type=CheckStatus
        new \Core\CheckStatus();
    } elseif ($_GET['type'] === 'GetKeywords') {
        // http://new.4testing.pl/testing/cron.php?type=GetKeywords
        new \Core\GetKeywords();
    } elseif ($_GET['type'] === 'GetRobots') {
        // http://new.4testing.pl/testing/cron.php?type=GetRobots
        new \Core\GetRobots();
    }

}

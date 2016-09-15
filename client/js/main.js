/* global $,_ */

$(document).ready(
    function () {
        'use strict';

        //Retrieving data from config.json for table template .each
        $.getJSON('../log/config.json', showUrlTable);
        function showUrlTable(data) {
            $('.servicesTable')
                .append(_.template(_.unescape($('body').find('#domainTable').html()))({dataJson: data.sites}));
        }

        // Retrieving data from status json and adding information to the table per each url
        $.getJSON('../log/data/status.json', showUrlStatus);
        function showUrlStatus(data) {
            var i = 0;
            $.each(_.values(data)[i], function (id, status) {
                $('.servicesTable [data-id="' + status.id + '"] .status').addClass('image' + status.status);
                $('[data-id="lastUpdateTime"]').text(status.time);
                i++;
            });
        }

        // Retrieving data from robots json and adding information to the table per each url
        $.getJSON('../log/data/robots.json', showUrlRobots);
        function showUrlRobots(data) {
            var i = 0;
            $.each(_.values(data)[i], function (id, status) {
                $('.servicesTable [data-id="' + status.id + '"] .robots').addClass('image' + status.robotsMatch);
                i++;
            });
        }

        $.getJSON('../log/data/keywords.json', showUrlKeywords);
        function showUrlKeywords(data) {
            var i = 0;
            $.each(_.values(data)[i], function (id, status) {
                $('.servicesTable [data-id="' + status.id + '"] .keywords').addClass('image' + status.keywordsMatch);
                i++;
            });
        }
    }
);

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
            for (var i = 0; i < _.values(data).length; i++) {
                $.each(_.values(data)[i], function (id, status) {
                    $('.servicesTable [data-id="' + status.id + '"] .status').addClass('image' + status.status);
                    $('[data-id="lastUpdateTime"]').text(status.time);

                });
            }
        }

        // Retrieving data from robots json and adding information to the table per each url
        $.getJSON('../log/data/robots.json', showUrlMetaTag);
        function showUrlMetaTag(data) {
            for (var i = 0; i < _.values(data).length; i++) {
                $.each(_.values(data)[i], function (id, status) {
                    $('.servicesTable [data-id="' + status.id + '"] .robots').addClass('image' + status.robotsMatch);

                });
            }
        }
    }
);

/* global $,_ */

$(document).ready(
    function () {
        'use strict';
        var historyJson;

        //Retrieving data from config.json for table template .each
        $.getJSON('../public/config.json', showUrlTable);
        function showUrlTable(data) {
            $('.servicesTable')
                .append(_.template(_.unescape($('body').find('#domainTable').html()))({dataJson: data.sites}));
        }

        // Retrieving data from status json and adding information to the table per each url
        _.each([1,2,3,4,5,6,7,8,9], function (el) {
            $.getJSON('../log/status_'+ el +'.json', mergeHistoryJson);
        });
        var historyJson = [];
        function mergeHistoryJson(data) {
            historyJson.push(data);
            console.log(historyJson);
        }

        //$.each(_.values(data)[i], function (id, status) {






        // Retrieving data from status json and adding information to the table per each url\
        var historyJson = [];
        function showUrlStatus(data) {
            var i = 0;
            $.each(_.values(data)[i], function (id, status) {
                $('.servicesTable [data-id="' + status.id + '"] .status').addClass('image' + status.status);
                $('[data-id="lastUpdateTime"]').text(status.time);
                i++;
            });
        }

        // Retrieving data from robots json and adding information to the table per each url
        $.getJSON('../log/robots.json', showUrlRobots);
        function showUrlRobots(data) {
            var i = 0;
            $.each(_.values(data)[i], function (id, status) {
                $('.servicesTable [data-id="' + status.id + '"] .robots').addClass('image' + status.robotsMatch);
                i++;
            });
        }

        // Retrieving data from kewords json and adding information to the table per each url
        $.getJSON('../log/keywords.json', showUrlKeywords);
        function showUrlKeywords(data) {
            var i = 0;
            $.each(_.values(data)[i], function (id, status) {
                $('.servicesTable [data-id="' + status.id + '"] .keywords').addClass('image' + status.keywordsMatch);
                i++;
            });
        }
    }
);
//var getUrlParameter = function getUrlParameter(sParam) {
//    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
//        sURLVariables = sPageURL.split('&'),
//        sParameterName,
//        i;
//
//    for (i = 0; i < sURLVariables.length; i++) {
//        sParameterName = sURLVariables[i].split('=');
//
//        if (sParameterName[0] === sParam) {
//            return sParameterName[1] === undefined ? true : sParameterName[1];
//        }
//    }
//};
//console.log(getUrlParameter('time'));
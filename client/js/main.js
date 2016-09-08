$(document).ready(
    function(){

        var templateFind = $('body').find('#domainTable');
        var myTemplate = _.template(_.unescape(templateFind.html()) );
        $.getJSON('../log/config.json', showUrlTable);

        function showUrlTable(data){
            $('.servicesTable').append(myTemplate({dataJson:data.sites}));
        }
    }
);

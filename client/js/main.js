$(document).ready(
    function(){

        var templateFind = $('body').find('#domainTable');
        var myTemplate = _.template(_.unescape(templateFind.html()) );
        $.getJSON('http://localhost:63342/pageTester/log/test.json', showUrlTable);

        function showUrlTable(data){
            $('.servicesTable').append(myTemplate({dataJson:data.sites}));
        }
    }
);

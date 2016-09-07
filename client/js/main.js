$(document).ready(
    function(){
        var myVeryFirstAwesomeTemplate = _.template(_unescape($('#domainTable')).html());

         $.getJSON('http://localhost:63342/pageTester/log/test.json', showUrlTable);
        //var JSONObject = JSON.parse("../log/test.json");


        function showUrlTable(data){
        console.log(data);
           $('#servicesTable').append(myVeryFirstAwesomeTemplate({dataJson:data}));

        }
    }
);

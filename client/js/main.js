$(document).ready(
    function(){

        var templateFind = $('body').find('#domainTable');
        var myTemplate = _.template(_.unescape(templateFind.html()) );

        //retrieving data from config.json for table template
        $.getJSON('../log/config.json', showUrlTable);

        //sending data from config.json for table template
        function showUrlTable(data){
            $('.servicesTable').append(myTemplate({dataJson:data.sites}));
        }

        // retrieving data from status.json for table template
        $.getJSON('../log/status.json', showUrlStatus);
        //add according status in the table to each url
        function showUrlStatus(data){
            for (var i=0; i< _.values(data).length; i++) {
                $.each(_.values(data)[i], function(id, status) {
                    $('.servicesTable [data-id="' +status.id+ '"] .status').addClass('image'+status.status);

                });
            }
        }

        ////change status value to image
        //function changeStatusImage(){
        //    for (var i=0; i< _.values(data).length; i++) {
        //        $.each(_.values(data)[i], function(id, status) {
        //            $('.servicesTable [data-id="' +status.id+ '"] .status').html(status.status);
        //
        //        });
        //    }
        //}
    }
//<% _.each( dataJson , function(value, key) { %>
//        <tr data-id="<%= value.id %>">;
//    }
//    $('[data-id="s"]')
//
//    $('.servicesTable [data-id="$id"]').append(myTemplate({dataJson:data.sites}));


);

(function($) {
    "use strict";
    var HT = {};


    HT.province = () => {
        $(document).on('change', '.province', function(){
           let _this = $(this)
           let province_id = _this.val()
           $.ajax({
                url: 'ajax/location/getLocation',
                type: 'GET',
                dataType: 'json',
                success: function(res){
                   console.log(res);
                },
                error: function(jqXHR, textStatus, errorThrown){
                    console.log('Lỗi: ' + textStatus+ ' '+ errorThrown);
                }
           });
        })
    }

    $(document).ready(function(){
        HT.province();
    });

})(jQuery);
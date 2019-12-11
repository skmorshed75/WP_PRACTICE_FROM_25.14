//Class 25.15
;(function($){
    $(document).ready(function(){

        $("#reservenow").on('click',function(){
alert("reservation clicked");
//alert(mealurl.ajaxurl);
            $.post(mealurl.ajaxurl,{
                action:'reservation',
                name:$("#name").val(),
                email:$("#email").val(),
                phone:$("#phone").val(),
                persons: $("#persons").val(),
                date:$("#date").val(),
                time:$("#time").val(),
                rn:$("#rn").val()
            },function(data){
                console.log(data);
            });
            return false;
        });        
    });
})(jQuery);
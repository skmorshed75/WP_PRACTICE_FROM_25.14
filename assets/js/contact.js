//Class 25.23
;(function($){
    $(document).ready(function(){
        $('#send-message').on('Click',function(){
            $.post(mealurl.ajaxurl,{
                action:'contact',
                cn:$('#contact').val(),
                name:$('#cname').val(),
                email:$('#cemail').val(),
                message:$('#cmessage').val(),
                     
                
            },function(data){
                console.log(data);
            })
            return false;
        })
    });    
})(jQuery);
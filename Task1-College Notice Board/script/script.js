$(document).ready(function(){
    $(".itemQty").on('change',function(){
        var $el = $(this).closest('tr');
        var pid = $el.find(".pid").val();
        var pprice = $el.find(".pprice").val();
        var quantity = $el.find(".itemQty").val();
        location.reload(true);

        $.ajax({
            url:'action.php',
            method:'post',
            cache:false,
            data:{quantity:quantity,pid:pid,pprice:pprice},
            success:function(response)
            {
                console.log(response);
            }
        });
    });
});
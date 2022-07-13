$(document).ready(function(){
    function product(){
        $.ajax({
            url	:	"product.php",
            method:	"POST",
            data	:	{getProduct:1},
            success	:	function(data){
                $("#get_product").html(data);
            }
        });
    }

    $("body").delegate(".atc","click",function(event){
        $.ajax({
            url	:	"atc.php",
            method:	"POST",
            data	:	{count:1, id:$(this).attr('data-id')},
            success	:	function(data){
                $('#msg').html(data);
            }
        })
    });

    product();
});
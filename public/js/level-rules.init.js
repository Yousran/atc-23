$(document).ready(function(){
    $('.select-all').on('click',function(){
        if(this.checked){
            var $all = $(this).parent();
            var $tr = $($all).parent();
            // console.log($tr);
            $($tr).children().each(function(){
                var $box = $(this).children();
                $($box).prop('checked', true);
            });
            // $('.checkbox').each(function(){
                //     this.checked = true;
                // });
            }else{
                var $all = $(this).parent();
                var $tr = $($all).parent();
                // console.log($tr);
                $($tr).children().each(function(){
                    var $box = $(this).children();
                    $($box).prop('checked', false);
            });
        }
    });
    
   
});
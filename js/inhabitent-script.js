(function($) {

    $('.header-search .search-submit').on('click', function(event){
        event.preventDefault();
        
        $('.header-search .search-field').toggle();
        $('.header-search .search-field').focus();
 
        $('.header-search .search-field').on('blur', function(){
            $('.header-search .search-field').hide();
        });
 
        $(document).keydown(function( event ) {
            if ( event.which == 13 ) {
                $('.header-search .search-form').submit();
            }
        });
 
    });
   



})(jQuery);
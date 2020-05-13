jQuery(document).ready(function(){

jQuery('.load-more').click(function() {
    var page = jQuery('.projects .projects-tax').last().attr('data-page');
    var maxPage = jQuery('.projects .projects-tax').last().attr('data-max-page');
    var pageNumber = parseInt(page) + 1;
    if (pageNumber == maxPage) {
      get_more(pageNumber);
      jQuery('.load-more').hide();
    }else if(pageNumber < maxPage) {
      get_more(pageNumber);
    }else{
      jQuery('.load-more').hide();
    }
});



function get_more(page){

    jQuery.ajax({
      type: 'GET',
      url: square.adminAjax,
      data: { action: 'CCAjax', request: 'get_more', page: page },
      timeout: 1000000,
      beforeSend: function() {
      },
      success: function(result) {
        jQuery('.projects').append(result);
      },
      error: function(){
      }
    });
  }
  })

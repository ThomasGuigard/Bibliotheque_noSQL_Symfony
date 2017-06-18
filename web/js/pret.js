
function loadMessageTemplate(id){


  $('#lightbox').remove();
  url = '/../bibliotheque/web/app_dev.php/book/'+id+'/emprunt'

  $.ajax({
    type: "GET",
    dataType: 'json',
    url: url
  })
  .done(function(response){
      template = response;

      lightbox = $("<div id='lightbox' />");
      lightbox.append(template);

      $('body').append(lightbox);
      $('#lightbox').css('display','none')

      $('#popup-pret').html(template.html); //Change the html of the div with the id = "your_div"

      $('#close-popup').click(function () {
        $('#lightbox').remove();
      });
      $('#lightbox').fadeIn('slow');



  })
  .fail(function(jqXHR, textStatus, errorThrown){
      alert('Error : ' + errorThrown);
  });

}

$( document ).ready(function() {
  $(".pret").click( function() {
    loadMessageTemplate($(this).attr('id'));
  });
});

/* Модели */

$( "#ob-click" ).click(function() {
  $( "#ob-check" ).slideToggle( "slow" );
      var src = $(this).attr('src');
    var newsrc = (src=='img/down.png') ? 'img/up.png' : 'img/down.png';
    $(this).attr('src', newsrc );
});

/* Обновления */

$( "#toggler" ).click(function() {
  $( "#box" ).slideToggle( "slow" );
      var src = $(this).attr('src');
    var newsrc = (src=='img/down.png') ? 'img/up.png' : 'img/down.png';
    $(this).attr('src', newsrc );
});

/* Новости */

$( "#ob-click2" ).click(function() {
  $( "#ob-check2" ).slideToggle( "slow" );
      var src = $(this).attr('src');
    var newsrc = (src=='img/down.png') ? 'img/up.png' : 'img/down.png';
    $(this).attr('src', newsrc );
});


/* Новости - Письмо */

$( ".suzu" ).click(function() {
      var src = $(this).attr('src');
    var newsrc = (src=='img/yesmes.png') ? 'img/nomes.png' : 'img/yesmes.png';
    $(this).attr('src', newsrc );
});



/*
<script>
$(document).ready(function() {
  $(".close").click(function() {
  $(".warning").toggleClass("warning-close");
});
});
</script>

<script>
$('.close').click(function(){
	$(".warning").css({display:'none'}, 1000).animate({opacity:'0'}, 1400)
});
</script>
*/

/* Презентация - Аккордион */



$( "#but1" ).click(function() {
      var src = $('#img1').attr('src');
    var newsrc = (src=='img/enter.png') ? 'img/enter2.png' : 'img/enter.png';
    $('#img1').attr('src', newsrc );
});

$( "#but2" ).click(function() {
      var src = $('#img2').attr('src');
    var newsrc = (src=='img/enter.png') ? 'img/enter2.png' : 'img/enter.png';
    $('#img2').attr('src', newsrc );
});

$( "#but3" ).click(function() {
      var src = $('#img3').attr('src');
    var newsrc = (src=='img/enter.png') ? 'img/enter2.png' : 'img/enter.png';
    $('#img3').attr('src', newsrc );
});

$( "#but4" ).click(function() {
      var src = $('#img4').attr('src');
    var newsrc = (src=='img/enter.png') ? 'img/enter2.png' : 'img/enter.png';
    $('#img4').attr('src', newsrc );
});

$( "#but5" ).click(function() {
      var src = $('#img5').attr('src');
    var newsrc = (src=='img/enter.png') ? 'img/enter2.png' : 'img/enter.png';
    $('#img5').attr('src', newsrc );
});

$( "#but6" ).click(function() {
      var src = $('#img6').attr('src');
    var newsrc = (src=='img/enter.png') ? 'img/enter2.png' : 'img/enter.png';
    $('#img6').attr('src', newsrc );
});

$( "#but7" ).click(function() {
      var src = $('#img7').attr('src');
    var newsrc = (src=='img/enter.png') ? 'img/enter2.png' : 'img/enter.png';
    $('#img7').attr('src', newsrc );
});

$( "#but8" ).click(function() {
      var src = $('#img8').attr('src');
    var newsrc = (src=='img/enter.png') ? 'img/enter2.png' : 'img/enter.png';
    $('#img8').attr('src', newsrc );
});

$(document).ready(function() {
	$('#lyrics-left li > a').removeAttr('href');
        $('#lyrics-left > li').click(function(){
				$(this).removeAttr('href');
                if (!$(this).hasClass('selected')) {
                $('#lyrics-left > li').removeClass('selected');
                $(this).addClass('selected');
                $('.lyrics-right div').fadeOut('1500');
                $('.lyrics-right div:eq(' + $('#lyrics-left > li').index(this) + ')').fadeIn('1500');
                }
        });
});

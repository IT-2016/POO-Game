$(function(){

	$('.perso').css('width', (100/$('.perso').length) + '%' );

	console.log($('.perso').length);

	myperso = '';

	$('.choix').click(function(e) {
		e.preventDefault();
		$('.notif').attr('class', 'notif');;

		persoClass = $(this).attr('bat-class');
		$('.' + persoClass).slideUp();		
		$('.perso:not(.'+ persoClass +')').animate({width:  (100/($('.perso').length-1))+'%' }, 500);

		$('button.choix').css('display', 'none');
		$('button.attaque').css('display', 'inline-block');

		myperso = $(this).attr('bat-name');
		$('.myperso').val(myperso);
	});

	$('.armory').click(function() {
		armoryId = $(this).attr('armory-id');
		armoryType = $(this).attr('armory-type');
		armoryPerso = $(this).attr('armory-perso');

		$('.armory[armory-perso="'+ armoryPerso +'"]').removeClass('active');
		$(this).addClass('active');

		$('.inarmory').val(armoryId);
	});

});

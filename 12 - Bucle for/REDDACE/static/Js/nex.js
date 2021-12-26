$(function () {
	var actual_fs, next_fs, prev_fs;
	var formulario =$('form[name=formActividad]');
	function next(elem){
		actual_fs= $(elem).parent();
		next_fs= $(elem).parent().next();
        
        $('#progress li').eq($('fieldset').index(next_fs)).addClass('activo');

		actual_fs.hide(900);
		next_fs.show(900);
	}

 
	$('.prev').click(function(){
		actual_fs= $(this).parent();
		prev_fs= $(this).parent().prev();
        
        $('#progress li').eq($('fieldset').index(actual_fs)).removeClass('activo');

		actual_fs.hide(900);
		prev_fs.show(900);
	});

	
    $('button[name=next]').click(function(){
        $("#a2").css('display', 'grid');
    next($(this));


});

$('button[name=next2]').click(function(){
    $("#a3").css('display', 'grid');
    next($(this));
});

$('button[name=next3]').click(function(){
    $("#a4").css('display', 'grid');
    next($(this));
});
$('button[name=next4]').click(function(){
    $("#a5").css('display', 'grid');
    next($(this));
});
$('button[name=next5]').click(function(){
    $("#a6").css('display', 'grid');
    next($(this));
});
$('.buton2').click(function(){
    location.href='../menu/menu.php'; 
    next($(this));
});


});

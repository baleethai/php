$(function() {
	var currency = '฿';
	$('#qty').keyup(function() {
	    var qty = this.value;
	    $.cookie('qty', qty);
	    if ($('input#is_print').is(':checked')) {
	    	var price = qty * 32;
	    } else {
	    	var price = qty * 28;
	    }
	    $('#total').html(currency + price.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'));
	});

    $('.btn-primary').click(function(event) {
        window.location.href = 'donate.html';
    });

	$('input#is_print').click(function() {
	    if( $(this).is(':checked')) {
	        $.cookie('is_print', 1);
	    } else {
	    	$.cookie('is_print', 0);
	    }
	});

	if ($.cookie('is_print') == 1) {
		$('input#is_print').prop('checked', true);
	} else {
		$('input#is_print').prop('checked', false);
	}

	$('#qty').val($.cookie('qty'));

});
$(function() {
	var currency = '฿';
	var price = 28;
	$('#qty').keyup(function() {
	    var qty = this.value;
	    $.cookie('qty', qty);
	    if ($('input#is_print').is(':checked')) {
	    	var price = qty * 20;
	    } else {
	    	var price = qty * 28;
	    }
	    $('#total').html(currency + price.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'));
	});

	$('input#is_print').click(function() {
	    if( $(this).is(':checked')) {
	        $.cookie('is_print', 1);
	        $('#price-unit').html(currency + 28);
	        $('#qty').val(100).trigger('keyup');
	    } else {
	    	$.cookie('is_print', 0);
	    	$('#price-unit').html(currency + 20);
	    }
	});

	if ($.cookie('is_print') == 1) {
		$('input#is_print').prop('checked', true);
		$('#price-unit').html(currency + 28);
	} else {
		$('input#is_print').prop('checked', false);
		$('#price-unit').html(currency + 20);
	}

	$('#qty').val($.cookie('qty'));

    if ($.cookie('invoice') == 0) {
        $(".invoice").fadeOut(400);
    } else {
        $(".invoice").fadeIn(400);
    }

    $('input#isInvoice').click(function() {
        if( $(this).is(':checked')) {
            $.cookie('invoice', 1);
            $(".invoice").fadeOut(400);
        } else {
            $.cookie('invoice', 0);
            $(".invoice").fadeIn(400);
        }
    });

    $('input#isShipping').click(function() {
        if( $(this).is(':checked')) {
            $.cookie('shipping', 1);
            $(".shipping-address").fadeOut(400);
        } else {
            $.cookie('shipping', 0);
            $(".shipping-address").fadeIn(400);
        }
    });
    if ($.cookie('shipping') == 0) {
        $(".shipping-address").hide();
    } else {
        $(".shipping-address").show();
    }

});
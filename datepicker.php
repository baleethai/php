<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>jquery ui datepickerภาษาไทย ปี พ.ศ.</title>
	<link type="text/css" rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/themes/base/jquery-ui.css" />
</head>

<body>

	<div style="margin:auto;width:95%;">
		<input name="dateInput" type="text" id="dateInput" value="" />
	</div>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js"></script>
	<script type="text/javascript">
	$(function() {
    	var dateBefore=null;
    	$("#dateInput").datepicker({
        	dateFormat: 'dd-mm-yy',
        	showOn: 'button',
	//      buttonImage: 'http://jqueryui.com/demos/datepicker/images/calendar.gif',
    	    buttonImageOnly: false,
        	dayNamesMin: ['อา', 'จ', 'อ', 'พ', 'พฤ', 'ศ', 'ส'],
        	monthNamesShort: ['มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม'],
        	changeMonth: true,
        	changeYear: true,
        	beforeShow:function(){
            if($(this).val()!="") {
                var arrayDate=$(this).val().split("-");
                arrayDate[2]=parseInt(arrayDate[2])-543;
                $(this).val(arrayDate[0]+"-"+arrayDate[1]+"-"+arrayDate[2]);
            }
            setTimeout(function(){
                $.each($(".ui-datepicker-year option"),function(j,k){
                    var textYear=parseInt($(".ui-datepicker-year option").eq(j).val())+543;
                    $(".ui-datepicker-year option").eq(j).text(textYear);
                });
            },50);
        },
        onChangeMonthYear: function(){
            setTimeout(function(){
                $.each($(".ui-datepicker-year option"),function(j,k){
                    var textYear=parseInt($(".ui-datepicker-year option").eq(j).val())+543;
                    $(".ui-datepicker-year option").eq(j).text(textYear);
                });
            },50);
        },
        onClose:function(){
            if($(this).val()!="" && $(this).val()==dateBefore){
                var arrayDate=dateBefore.split("-");
                arrayDate[2]=parseInt(arrayDate[2])+543;
                $(this).val(arrayDate[0]+"-"+arrayDate[1]+"-"+arrayDate[2]);
            }
        },
        onSelect: function(dateText, inst){
            dateBefore=$(this).val();
            var arrayDate=dateText.split("-");
            arrayDate[2]=parseInt(arrayDate[2])+543;
            $(this).val(arrayDate[0]+"-"+arrayDate[1]+"-"+arrayDate[2]);
        }

    });
});
</script>

</body>
</html>
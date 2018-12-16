<!DOCTYPE html>
<html>
<head>
	<title>Upload File</title>
</head>
<body>
<form enctype="multipart/form-data">
    <input name="file" type="file" />
    <input type="button" value="Upload" />
</form>
<progress></progress>
<script type="text/javascript">
$(':file').on('change', function() {
    var file = this.files[0];
    if (file.size > 1024) {
        alert('max upload size is 1k')
    }
});
$(':button').on('click', function() {
    $.ajax({
        // Your server script to process the upload
        url: 'upload.php',
        type: 'POST',

        // Form data
        data: new FormData($('form')[0]),

        // Tell jQuery not to process data or worry about content-type
        // You *must* include these options!
        cache: false,
        contentType: false,
        processData: false,

        // Custom XMLHttpRequest
        xhr: function() {
            var myXhr = $.ajaxSettings.xhr();
            if (myXhr.upload) {
                // For handling the progress of the upload
                myXhr.upload.addEventListener('progress', function(e) {
                    if (e.lengthComputable) {
                        $('progress').attr({
                            value: e.loaded,
                            max: e.total,
                        });
                    }
                } , false);
            }
            return myXhr;
        }
    });
});

</script>
</body>
</html>
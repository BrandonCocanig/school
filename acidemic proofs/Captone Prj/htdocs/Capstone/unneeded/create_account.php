
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="main.css">
<!-- //this is all for the popups
//https://cdnjs.com/libraries/toastr.js/2.1.4
//pulled from this site on load, if needed go and update to lasted version. -->
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
<script type="text/javascript">
// this is the options that will dictate how the notifaction will act
toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": false,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": true,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  }
    </script>


<script>
toastr.info('You will be rederected in 5 secounds.')

setTimeout(function () {
   window.location.href= 'websitelogin.php'; // the redirect goes here

},5000); // 5 seconds
</script>
</body>
</html>
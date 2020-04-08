<!DOCTYPE html>
<html>
<head>
  <title>Laravel 7 CORS Middleware Tutorial</title>
  <script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"  crossorigin="anonymous"></script>
</head>
<body>
<script  type="text/javascript">
  $.ajax({
    type:  "GET",
    dataType:  "json",
    url:  'http://localhost:8000/api/my-api-endpoint',
    success:  function(data){
        console.log(data);
    }
  });
</script>
</body>
</html>
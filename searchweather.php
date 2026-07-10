<!DOCTYPE html>
<html>
<head>
    <title>Weather App</title>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>

<input type="text" id="city" placeholder="Enter City">
<button id="btn">Search</button>

<div id="result"></div>

<script>
$("#btn").click(function(){

    $.post("weather.php",
    {
        city: $("#city").val()
    },
    function(data){
        $("#result").html(data);
    });

});
</script>

</body>
</html>
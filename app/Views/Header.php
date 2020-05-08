<!DOCTYPE html>
<html>

<head>
    <!-- mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- w3css -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- custom script -->
    <script>
        $(document).ready(function(){
            // mean with link
            $(".meanWithLinks").hide();
                // show after X seconds
            setInterval(function(){
                $(".mean").hide();
                $(".meanWithLinks").show();
            }, 1500);
        });
    </script>
</head>

<!-- CSS small -->
<style>
a {
    /* text-decoration: none; */
    /* font-weight: bold; */
}
.upper {
    text-transform: uppercase;
}
</style>
<!-- / CSS small -->

<!-- body begin, end at Footer -->
<body>
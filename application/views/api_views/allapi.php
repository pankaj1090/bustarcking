<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery UI Accordion - Default functionality</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#accordion" ).accordion();
        } );
    </script>
</head>
<body>
<h1>Api_Details</h1>
<div id="accordion">
    <h3>Section 1</h3>
    <div>     
        <p><a href="<?php echo base_url('Apidetails/signup'); ?>">Signup</a></p>
        <p><a href="<?php echo base_url('Apidetails/login'); ?>">Login</a></p>
        <p><a href="<?php echo base_url('Webservice/allbus'); ?>">allbus</a>   (<?php echo base_url('Webservice/allbus'); ?>)</p>
        <p><a href="<?php echo base_url('Webservice/alldrivers'); ?>">alldrivers</a>  (<?php echo base_url('Webservice/alldrivers'); ?>)</p>
        <p><a href="<?php echo base_url('Webservice/allparents'); ?>">allparents</a>  (<?php echo base_url('Webservice/allparents'); ?>)</p>
        <p><a href="<?php echo base_url('Apidetails/get_parent'); ?>">get_parent</a></p>
        <p><a href="<?php echo base_url('Apidetails/get_driver'); ?>">get_driver</a></p>
        <p><a href="<?php echo base_url('Apidetails/get_bus'); ?>">get_bus</a></p>
        <p><a href="<?php echo base_url('Apidetails/update_bus_location'); ?>">update_bus_location</a></p>
    </div>
</body>
</html>
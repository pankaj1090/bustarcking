<html>
<head></head>
<body>

<?php echo form_open('Webservice/update_bus_location'); ?>

<h1>Url is :  <?php echo base_url('Webservice/update_bus_location'); ?> </h1>
This is Post api<br><br>
bus_id *<input type="text" name="bus_id" required><br>
latitude *<input type="text" name="latitude" required><br>
longitude *<input type="text" name="longitude" required><br>
<input type="submit" value="submit"><br>

</form>


</body>
</html>

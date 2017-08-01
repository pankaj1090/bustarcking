<html>
<head>
    <title>Login</title>
</head>
<body>

<?php echo form_open('Webservice/login_api'); ?>

<h1>Url is :  <?php echo base_url('Webservice/login_api'); ?> </h1>
This is Post api<br><br>
mobile_no*<input type="text" name="mobile_no" required><br>
password*<input type="password" name="password" required><br>
<input type="radio" name="role" value="admin" checked> admin<br>
  <input type="radio" name="role" value="parent"> parent<br>
  <input type="radio" name="role" value="driver"> driver  <br>
<input type="submit" value="Login"><br>

</form>


</body>
</html>
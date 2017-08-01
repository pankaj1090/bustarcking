<html>
<head>
	<title>SignUp</title>
</head>
<body>

  <?php echo form_open_multipart('Webservice/signup_api'); ?> 

    <h1>Url is :  <?php echo base_url('Webservice/signup_api'); ?> </h1>
    This is Post api<br><br>
    fullname* <input type="text " name="fullname" required><br>
    mobile_no*<input type="text" name="mobile_no" required><br>
    password*<input type="password" name="password" required><br>  
    children_name*<input type="text" name="children_name" required><br>  
    address *<input type="text" name="address" required><br>  
    standard  *<input type="text" name="standard" required><br>   
    <input type="submit" value="Signup"><br>

</form>
 

</body>
</html>
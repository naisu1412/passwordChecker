<!doctype html>

<html lang="en">
<?PHP
 if(isset($_POST['submit'])) {
       
        $pwd = $_POST['password'];
        $result = '';
        $error = '';

        if( strlen($pwd) < 8 ) {
        $error = "Password too short!";
        }else if( strlen($pwd) > 30 ) {
        $error = "Password too long!";
        }else if( !preg_match("#[0-9]+#", $pwd) ) {
        $error = "Password must include at least one number!";
        }else if( !preg_match("#[a-z]+#", $pwd) ) {
        $error = "Password must include at least one letter!";
        }else if( !preg_match("#[A-Z]+#", $pwd) ) {
        $error = "Password must include at least one CAPS!";
        }else if( !preg_match("#\W+#", $pwd) ) {
        $error = "Password must include at least one symbol!";
        }
        
        if($error != ''){
          $result =  "Password validation failure : $error";
        } else {
          $result =   "Your password is strong.";
        }
        // if (preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $pwd)){
       
        // $result = 'Your Password strong!';
        
        // } else {
       
        // $result = 'Your Password is not strong enough';
    
        }
       
 
?>

<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="node_modules/password-strength-meter/dist/password.min.css" />

    <style lang="">
        .loginContainer {
            padding: 20px;
            margin-top: 10%;
            background-color: #f3ebf1;
            box-shadow: 1px 3px 3px black;
        }
    </style>



</head>
<!--  Documentation: https://www.npmjs.com/package/password-strength-meter  -->

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 loginContainer">
                <div class="well text-center">
                    <h2>Password Strength Meter PHP</h2>
                    <h4> regex</h4>
                </div>
                <div class="form-group text-center">


                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                        <input type="password" name="password" class="form-control">
                        <div id="usermessage"></div>
                        <br>
                        <input type="submit" name="submit" value="Submit Form" class="btn btn-success"><br>

                    </form> 

                </div>
            </div>
        </div>
    </div>


    <!--  Scripts  -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="node_modules/password-strength-meter/dist/password.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-git.min.js"></script>
    <script type="text/javascript"></script>
    <script>
        $(document).ready(function(){
                 $('#usermessage').text('<?php echo $result;?>');  
             
        });     
        </script>
        <script>
    </script>

</body>


</html>
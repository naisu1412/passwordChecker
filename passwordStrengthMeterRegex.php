
<!doctype html>

<html lang="en">

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
<!-- <?php
/*
$pwd = 'samff3232;3ADple';

if (preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $pwd)){
    echo "Your password is strong.";
    
} else {
    echo "Your password is not safe.";
}*/
?> -->

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 loginContainer">
                <div class="well text-center">
                    <h2>Password Strength Meter JS</h2>
                    <h4> npm plugin password strenth meter</h4>
                </div>
                <div class="form-group">
                    <label for="username">
                        Username
                    </label>
                    <input id="username" type="text" class="form-control" placeholder="Username" />
                    <label for="password">
                        Password
                    </label>
                    <input id="password" type="password" class="form-control" placeholder="Password" />
                    <hr>
                    <input id="submit" type="submit" class="form-control btn btn-success" value='Submit' disabled/>
                </div>
            </div>
        </div>
    </div>


    <!--  Scripts  -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="node_modules/password-strength-meter/dist/password.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-git.min.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            // Showing the progress bar since the first moment.
            $('#password').password({
                    animate: false,
                    username: '#username',
                    shortPass: 'The password is too short',
                    badPass: 'Weak; try combining letters & numbers',
                    goodPass: 'Medium; try using special charecters',
                    strongPass: 'Strong password',
                    containsUsername: 'The password contains the username',
                    enterPass: 'Type your password',
                    showPercent: true,
                }
                //will enable the submit button if the score got to 75
            ).on('password.score', function(e, score) {
                if (score >= 75) {
                    $('#submit').removeAttr('disabled');
                } else {
                    $('#submit').attr('disabled', true);
                }
            });



        });
    </script>

</body>


</html>
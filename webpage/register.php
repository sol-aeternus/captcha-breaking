<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Registration Form</title>

	<link rel="stylesheet" href="css/demo.css">
	<link rel="stylesheet" href="css/form-register.css">

</head>

	<div class="main-content">

        <!-- You only need this form and the form-register.css -->

        <form class="form-register" method="post" action="#">

            <div class="form-register-with-email">

                <div class="form-white-background">

                    <div class="form-title-row">
                        <h1>Create an account</h1>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Name</span>
                            <input type="text" name="name">
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Email</span>
                            <input type="email" name="email">
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Password</span>
                            <input type="password" name="password">
                        </label>
                    </div>
                    <div class="form-row">
                        <label>
                            <span></span>
                            <span><img src="<?php echo glob('images/*')[rand(0, count(glob('images/*')) - 1)]; ?>" alt="captcha" style="width:150px;height:50px;"></span>
                        </label>
                    </div>
                    <div class="form-row">
                        <label>
                            <span>Type the letters in the captcha</span>
                            <input type="text" name="captcha">
                        </label>
                    </div>

                    <div class="form-row">
                        <label class="form-checkbox">
                            <input type="checkbox" name="checkbox" checked>
                            <span>I agree to the <a href="#">terms and conditions</a></span>
                        </label>
                    </div>

                    <div class="form-row">
                        <button type="submit">Register</button>
                    </div>

                </div>

              
            </div>

        </form>

    </div>

</body>

</html>

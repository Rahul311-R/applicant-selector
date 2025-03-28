<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Register Now</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
       <link rel="stylesheet" href="css1/bootstrap.min.css">
       <link rel="stylesheet" href="css1/font-awesome.min.css">
      <link rel="stylesheet" href="css1/owl.carousel.css">
    <link rel="stylesheet" href="css1/owl.theme.css">
    <link rel="stylesheet" href="css1/owl.transitions.css">
      <link rel="stylesheet" href="css1/animate.css">
      <link rel="stylesheet" href="css1/normalize.css">
      <link rel="stylesheet" href="css1/main.css">
      <link rel="stylesheet" href="style.css">
       <link rel="stylesheet" href="css1/responsive.css">
      <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

	<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center custom-login">
				<h3>Register Now</h3>

			</div>
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body">
                        <form action="connection.php"method="post">
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label>Fullname</label>
                                    <input type="text" class="form-control"  name="fullname" />
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Birthdate</label>
                                    <input type="date"  class="form-control"  name="birthdate" />
                                </div>
                                <div class="form-group col-lg-12" ">
                                    <label>Gender</label>
                                    <select class="form-control"  name="gender">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                </div>
                                <div class="form-group col-lg-12">
                                <label>Role</label>
                                <input type="text"  class="form-control" name="role" />
                            </div>
                                <div class="form-group col-lg-12">
                                    <label>Email</label>
                                    <input type="text"  class="form-control"  name="email" />
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Password</label>
                                    <input type="password"  class="form-control"  name="password" />
                                </div>
                              </div>
                            <div class="text-center">
                                <button type="submit" name="submit1" class="btn btn-success loginbtn">Register</button>

                            </div>

                            <div class="alert alert-success" id="success" style="margin-top: 10px; display: none">
                                 <strong>Success!</strong> Account Registration successfully.
                            </div>

                            <div class="alert alert-Danger" id="failure" style="margin-top: 10px; display: none">
                                <strong>Already exist</strong> This Username is Already Exit.
                            </div>
                        </form>
                    </div>
                </div>
			</div>

		</div>   
    </div>

    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery-price-slider.js"></script>
    <script src="js/jquery.meanmenu.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>

</html>

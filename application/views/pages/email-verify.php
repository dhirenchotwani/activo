<!DOCTYPE html>

<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Register Email!!</title>
    
    <!-- Icons-->
    <link href="../../assets/global/icons/coreui-icons-master/css/coreui-icons.min.css" rel="stylesheet">
    <link href="../../assets/global/icons/flag-icon-css-master/css/flag-icon.min.css" rel="stylesheet">
    <link href="../../assets/global/icons/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../../assets/global/icons/simple-line-icons-master/css/simple-line-icons.css" rel="stylesheet">

    
    <!-- Main styles for this application-->
    <link href="../../assets/css/style.css" rel="stylesheet">
    <link href="../../assets/vendors/pace-progress/css/pace.min.css" rel="stylesheet">
    
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
  </head>
  <body class="app flex-row align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
         <form action="registerEmail" method="post">
          <div class="card mx-4">
            <div class="card-body p-4">
              <h1>Enter Email to Register!</h1>
              <p class="text-muted">Create your account</p>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="icon-user"></i>
                  </span>
                </div>
                    
                <input class="form-control" type="email" name="email" placeholder="Enter your email">
				</div>
              
              <div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text">
							<i class="cui-briefcase" aria-hidden="true"></i>
						</span>
					</div>
					<select name="user_role_id" class="form-control" id="user_role_id" data-placeholder="Select the User Role">
					<?php
						foreach($role->result_array() as $roles){
							extract($roles);
					?>
					<option value="<?php echo $user_role_id;?>"><?php echo $user_role_name; ?></option>
					<?php
						}
					?>
				  </select>
				
           	
            </div>
              
              
              <div class="input-group mb-3">
				
				<button type="submit" class="btn btn-block btn-success" name="registerEmail">
				REGISTER	  
           </button>
           		
					
				</div>

              
              	
<!--
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="icon-lock"></i>
                  </span>
                </div>
                <input class="form-control" type="password" placeholder="Password">
              </div>
              <div class="input-group mb-4">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="icon-lock"></i>
                  </span>
                </div>
                <input class="form-control" type="password" placeholder="Repeat password">
              </div>
-->
             
              
<!--
            <div class="card-footer p-4">
              <div class="row">
                <div class="col-6">
                  <button class="btn btn-block btn-facebook" type="button">
                    <span>facebook</span>
                  </button>
                </div>
                <div class="col-6">
                  <button class="btn btn-block btn-twitter" type="button">
                    <span>twitter</span>
                  </button>
                </div>
              </div>
            </div>
 -->
          </div>
          </form>
        </div>
      </div>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="assets/global/js/jquery.min.js"></script>
    <script src="assets/global/js/popper.min.js"></script>
    <script src="assets/global/js/bootstrap-min.js"></script>
    <script src="assets/global/js/pace.min.js"></script>
    <script src="assets/global/js/perfect-scrollbar.min.js"></script>
    <script src="assets/global/js/coreui.min.js"></script>
  </body>
</html>
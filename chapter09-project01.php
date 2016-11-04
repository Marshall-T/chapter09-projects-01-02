

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Chapter 9.1 form</title>

 <!-- Bootstrap core CSS -->
 <link href="bootstrap3_defaultTheme/dist/css/bootstrap.css" rel="stylesheet">

 <!-- Custom styles for this template -->
 <link href="chapter09-project01.css" rel="stylesheet">

 <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
 <!--[if lt IE 9]>
   <script src="bootstrap3_defaultTheme/assets/js/html5shiv.js"></script>
   <script src="bootstrap3_defaultTheme/assets/js/respond.min.js"></script>
 <![endif]-->
</head>

<body>



<?php include 'art-header.inc.php' ?>

<div class="container">


   
   <div class="row">
      <div class="col-md-3">
      
        <div class="panel panel-default">
          <div class="panel-heading">Account</div>
          <div class="panel-body">

          <ul class="nav nav-pills nav-stacked">
          <li><a href="#">Login</a></li>
          <li class="active"><a href="#">Register</a></li>

          </ul>  


          </div>
        </div>      
          
      </div>
      <div class="col-md-9">
      
      
<form role="form" class="form-horizontal"  action="art-form-process.php" method ="Post">
   <div class="page-header">
      <h2>Register Account</h2>
      <p>If you already have an account with us, please login at the login page.</p>   
   </div>


<?

    function GetData ( $label, $labelName, $type )
    {
      echo  '   <div class="form-group">';
      echo  '     <label for="' . $label . '" class="col-md-3 control-label">' . $labelName . '</label>';
      echo  '     <div class="col-md-9">';
      echo  '       <input type="' . $type . '" class="form-control" name="' . $label . '" >';
      echo  '     </div>';
      echo  '   </div>';
    }

    GetData ('first', 'First Name', 'text' );
    GetData ('last', 'Last Name', 'text' );
    GetData ('email', 'Email', 'email' );
    GetData ('password1', 'Password', 'password' );
    GetData ('password2', 'Password Confirm', 'password' );

?>

  <div class="form-group">
    <div class="col-md-offset-3 col-md-9">
      <div class="checkbox">
        <label>
          <input type="checkbox" name="privacy" > I agree to the <a href="#">privacy policy</a>
        </label>
      </div>
    </div>
  </div>     


  <div class="form-group">
    <div class="col-md-offset-3 col-md-9">
      <button type="submit" class="btn btn-primary">Register</button>
    </div>
  </div>
   
    
   </form>  
</div>  
</div> 
      

   


</div>  <!-- end container -->

<?php include 'art-footer.inc.php' ?>

 <!-- Bootstrap core JavaScript
 ================================================== -->
 <!-- Placed at the end of the document so the pages load faster -->
 <script src="bootstrap3_defaultTheme/assets/js/jquery.js"></script>
 <script src="bootstrap3_defaultTheme/dist/js/bootstrap.min.js"></script>    
</body>
</html>

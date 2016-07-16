<!DOCTYPE html SYSTEM>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Prateek's Blog</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
                .error {color: #FF0000;}
            </style>

</head>

<body id="page-top" class="index">
    <?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  if (empty($_POST["FULLNAME"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["FULLNAME"]);
  }
  
  if (empty($_POST["EMAIL"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["EMAIL"]);
  } 
   if (empty($_POST["SECURITY"])) {
    $passwordErr = "Password is required";
  } else {
    $email = test_input($_POST["SECURITY"]);
  } 
   if (empty($_POST["NUMBER"])) {
    $numberErr = "number is required";
  } else {
    $email = test_input($_POST["NUMBER"]);
  } 
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;}
?>

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Prateek's Blog</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Daily Updates</a>
                    </li>
                     <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Log In</a>
                    </li>
                   
                    <li>
                        <a class="page-scroll" href="#team">Youtube</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>


     <!-- log in section-->
       <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">LOG IN</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row ">
                                <div class="col-md-offset-4 col-md-6 col-ms-offset-2">
                                    
    <FORM class="col-pad-20" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div>
            <LABEL>NAME:</LABEL>
        <INPUT TYPE="TEXT" PLACEHOLDER="FULLNAME" NAME="FULLNAME" />
        <span class="error">* <?php echo $nameErr;?></span>
         <br><br>
     </div>

  <div>
   <label> EMAIL:</label>
    <input type="email" name="EMAIL" placeholder="EMAIL" />
    <span class="error">* <?php echo $nameErr;?></span>
         <br><br>
  </div>

    <div>
        <label>ADDRESS:</label>
        <INPUT TYPE="TEXT" NAME=" HOME ADDRESS" PLACEHOLDER=" HOME ADDRESS" />      
    </div>

    <div>
        <label>PASSWORD:</label>
        <INPUT TYPE="TEXT" NAME="SECURITY" PLACEHOLDER="SECURITY" />
        <span class="error">* <?php echo $passwordErr;?></span>
         <br><br>
        </div>

    <div >
        <label>PHONE NUMBER:</label>
        <INPUT TYPE="TEXT" NAME="NUMBER" PLACEHOLDER="NUMBER" MAXLENGTH="10" />
        <span class="error">* <?php echo $numberErr;?></span>
         <br><br>
    </div>

      <div>
        <label> CITY: </label>
        <SELECT NAME="CITY" >
        <OPTION VALUE="">---SELECT---</OPTION>
        <OPTION VALUE="MUMBAI">MUMBAI</OPTION>
        <OPTION VALUE="COORG">COORG</OPTION>
        <OPTION VALUE="PUNE">PUNE</OPTION>
        </select>   
    </div>

    <div> 
        <label>GENDER</label>
        <INPUT TYPE="RADIO" NAME=" HOME ADDRESS" />male
        <INPUT TYPE="RADIO" NAME=" HOME ADDRESS" />female   
    </div>

     <div> 
        <label>CHECK</label>
        <INPUT TYPE="CHECKBOX" NAME=" HOME ADDRESS" VALUE="A" />A
        <INPUT TYPE="CHECKBOX" NAME=" HOME ADDRESS" VALUE="B" />B
    </div>

     <div>
        <button type="submit" class="btn btn-primary btn-lg active">submit</button>
        <button type="reset" class="btn btn-default btn-lg active">reset</button>
    </div>
    </div>
    </input>
</FORM>             

                                </div>
            </div>
        </div>
    </section>
      

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js">
   /* $('#services').on("click",function()
    {
   $.ajax({
        url: "partial_services.html",

   }).done(function(responce){
    console.log(responce);
    $('#xyz').html(responce);
   }); 
    }
    );*/
    </script>

</body>

</html>

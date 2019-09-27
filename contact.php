<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contact - The Insightfuls</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
     
    <script src="js/jquery.js"></script>
    <script type="text/javascript">
     $(document).ready(function(){
    $("register").click(function(){
        
        fname = $("#fname").val();
        email = $("#email").val();
        password = $("#password").val();
        
        $.ajax({
            type: "POST",
            url: "sendmsg.php",
            data: "fname="+fname+"&lname="+"&email="+email+"&password="+password,
            success: function(html){
                if(html=='true'){
                    $("#add_err2").html('<div class="alert alert-success">\ <strong>Message</strong> sent!.\ \ </div>');
                }
                
                else if(html == 'fname_long'){
                    $("#add_err2").html('<div class="alert alert-danger"> \ <strong>First name</strong>too long.\ \ <div>');
                }
                
                else if(html == 'fname_short'){
                    $("#add_err2").html('<div class="alert alert-danger"> \ <strong>First name</strong>should exceed 2 characters.\ \ <div>');
                }
                
                else if(html == 'email_long'){
                    $("#add_err2").html('<div class="alert alert-danger"> \ <strong>Email address</strong>invalid.\ \ <div>');
                }
                
                else if(html == 'email_short'){
                    $("#add_err2").html('<div class="alert alert-danger"> \ <strong>Email address</strong>invalid.\ \ <div>');
                }
                
                else if(html == 'eformat'){
                    $("#add_err2").html('<div class="alert alert-danger"> \ <strong>Email address</strong>is not valid.\ \ <div>');
                }
                
                else if(html == 'message_long'){
                    $("#add_err2").html('<div class="alert alert-danger"> \ <strong>Message</strong>cannot exceed more than 100 characters.\ \ <div>');
                }
                
                else{
                    $("#add_err2").html('<div class="alert alert-danger"> \ <strong>Error</strong>please try again.\ \ <div>');
                }
            },
            beforeSend: function(){
                $("#add_err2").html("loading..");
            }
        });
        return false
    });
});
    </script>

</head>

<body>

   <div class="brand">The Insightfuls</div>
    <div class="address-bar">A-51b-2 Gulshan-e-Iqbal | Karachi | Pakistan</div>

   <?php require_once 'nav.php'; ?>
    
    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">WHERE WE ARE?</h2>
                    <hr>
                </div>
                <div class="col-md-8">
                    <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=nipa&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
                </div>
                <div class="col-md-4">
                    <p>Email:
                        <strong><a href="theinsightful@gmail.com">theinsightful@gmail.com</a></strong>
                    </p>
                    <p>Address:
                        <strong>"A-51b-2 Gulshan-e-Iqbal
                            <br>Karachi Pakistan</strong>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>form</strong>
                    </h2>
                    <hr>
                    <div id="add_err2"></div>
                    <form role="form">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Name</label>
                                <input type="text" id="fname" name="fname" maxlength="25" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Email Address</label>
                                <input type="email" id="email" name="email" maxlength="30" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Message</label>
                                <textarea class="form-control" id="message" name="message" maxlength="100" rows="6"></textarea>
                            </div>
                            <div class="form-group col-lg-12">                           
                                <button type="submit"  id="contact" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; The Insightfuls 2019</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/bootstrap.min.js"></script>

</body>

</html>

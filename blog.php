<?php
session_start();

if (isset($_SESSION['login'])){
    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];    

?> 

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog - The Insightfuls</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/business-casual.css" rel="stylesheet">

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

</head>
<body>

     <div class="brand">The Insightfuls</div>
    <div class="address-bar">A-51b-2 Gulshan-e-Iqbal | Karachi | Pakistan</div>

    <?php require_once 'nav.php'; ?>
    
    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <h2 class="text-center"> Welcome <?php echo $fname; echo" "; echo $lname; ?>-<a href="logout.php">Logout</a></h2>
                    <hr>
                    <h2 class="intro-text text-center">Insightfuls
                        <strong>blog</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-1.jpg" alt="">
                    <h2>WHAT ARE MY DREAMS?
                        <br>
                        <small>August 12, 2019</small>
                    </h2>
                    <p>I wake up every day with a different motivation for life and gets lost in it during the day and by night I feel like it isn't worth.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/prog.png" alt="">
                    <h2>PROGRAMMING IN TODAYS WORLD
                        <br>
                        <small>August 25, 2019</small>
                    </h2>
                    <p>There was time when there was simple and manual coding and not any fancy names and concepts for programmig but we can say we came a long way!.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/life.jpg" alt="">
                    <h2>THE 20's
                        <br>
                        <small>September 16, 2019</small>
                    </h2>
                    <p>People used to tell me how important education or personal development is but no one ever told me the importance of life or warned me about the difficulties in the 20's of human life.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="previous"><a href="#">&larr; Older</a>
                        </li>
                        <li class="next"><a href="#">Newer &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <div id="myModal1" class="modal fade" role="dialog">
     <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">What are my dreams?</h4>
             </div>
             <div class="modal-body">
                <p></p>
             </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
         </div>
      </div>
    </div>

    <div id="myModal2" class="modal fade" role="dialog">
     <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">What are my dreams?</h4>
             </div>
             <div class="modal-body">
                <p></p>
             </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
         </div>
      </div>
    </div>


    <div id="myModal3" class="modal fade" role="dialog">
     <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">What are my dreams?</h4>
             </div>
             <div class="modal-body">
                <p></p>
             </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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

    <script src="js/jquery.js"></script>

    <script src="js/bootstrap.min.js"></script>

</body>

</html>

<?php
    
}
else{
    header("location:login.php");
}

?>






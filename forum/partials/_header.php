<?php
  session_start();
    echo 
      '
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
           <a class="navbar-brand" href="forum_index.php">Welcome to VPCSC-Forum</a>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
           </button>

           <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="navbar-nav mr-auto"> 
           </ul>
            <div class="row mx-2">';
               if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)
               {
                 echo 
                    '
                      <form class="form-inline my-2 my-lg-0">
                        <p class="text-light my-0 mx-2">'.$_SESSION['useremail'].'</p>
                        <a href="_logout.php" class="btn btn-outline-success ml-2">Logout</a>
                      </form>';
                }
                else
                {
                  echo '
                        <button class="btn btn-outline-success ml-2"data-toggle="modal" data-target="#loginModal">Login</button>
                        <button class="btn btn-outline-success mx-2"data-toggle="modal" data-target="#signupModale">Signup</button>';
                }
              echo 
                 '</div>
                  </div>
                  </nav>
                ';

  include '_loginModal.php';
  include '_signupModal.php';
  if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="true")
    {
      echo '
            <div class="alert alert-success alert-dismissible fade show my-0" role="alert">
                <strong>Success! </strong>you can now login
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                </button>
            </div>';
    }
  else{
    if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']="false")
    {
      echo '
            <div class="alert alert-success alert-dismissible fade show my-0" role="alert">
                <strong>try agen! </strong>Something is Wrong
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                </button>
            </div>';
    }
  }
?>
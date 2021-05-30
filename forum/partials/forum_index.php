<!doctype html>
<html lang="en">

<head>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="_style.css">
    <title>Welcome to VPCSC-Forum</title>
</head>

<body>
    <div class="p-4 bg-secondary text-white">
        <?php include '_header.php';?>
    </div>
    <?php include '_dbconnect.php';?>



    <!-- Category container starts here -->
    <div class="container my-5 " id="ques">
        <h2 class="text-center my-4">VPCSC-Courses</h2>
        <div class="row">
            <!-- fetch all the categories and  use a  loop to iterate through categories -->
            <?php
                $sql="SELECT * FROM `categories`" ;
                $result=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_assoc($result))
                {
                    $id=$row['category_id'];
                    $cat=$row['category_name'];
                    $desc=$row['category_description'];
                     echo'
                        <div class="col-md-4 my-3 ">
                            <div class="card " style="width: 18rem;">
                                <img class="card-img-top" src="img/card-'. $id .'.jpg" alt="image for this category">
                                <div class="card-body ">
                                    <h5 class="card-title bg-primary "><a href="threadlist.php?catid=' . $id . '"> ' . $cat . ' </a></h5>
                                    <p class="card-text">' . substr($desc,0,20) . '...</p>
                                    <a href="threadlist.php?catid=' . $id . '" class="btn btn-primary">View Threads</a>
                                </div>
                            </div>
                        </div>
           
                    ';
                }
           ?>
        </div>
    </div>


    <div class="p-4 bg-secondary text-white">
        <?php include 'C:\xampp\htdocs\forum\footer.php';?>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
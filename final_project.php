<?php
    include("connection.php");
    if(!empty($_POST)){
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $number = $_POST['number'];
        $ins = "INSERT INTO customer(`name`, `lastname`, `email`, `message`, `number`)VALUES('$name', '$lastname', '$email', '$message', '$number')";
        $query = mysqli_query($conn, $ins);
        if($query){
            header("location: customerhistory.php");
        }
        else{
            echo "Something went wrong";
        }
    }
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap_project.css">
    <title> bootstrap_project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-light">
        <div class="container-fluid justify-content-around">
            <div class="main_class">
                <a class="navbar-brand" href="#">
                    <img src="logo.png" alt="Avatar Logo">
                </a>
            </div>
            <div class="list">
                <ul class="navbar-nav ">
                    <li class="nav-iteam ps-3 pe-3">
                        <a class="nav-link" href="#"> Home</a>
                    </li>
                    <li class="nav-iteam ps-3 pe3-">
                        <a class="nav-link" href="#c4">About Us</a>
                    </li>
                    <li class="nav-iteam ps-3 pe-3">
                        <a class="nav-link" href="#"> Project</a>
                    </li>
                    <li class="nav-iteam ps-3 pe-3">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-iteam ps-3 pe-3">
                        <a class="nav-link" href="#c5">Contect Us</a>
                    </li>
                </ul>
            </div>
            <div class="button">
                <!-- <button type="button" class="btn btn-primary" href=".popupform"> send a Request</button> -->
                <div class="popupform">
        
        
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Send Request</button>
            
            
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                <form method="post" action="">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Name:</label>
                        <input type="text" class="form-control" id="recipient-name" name="name">
                      </div>
                      <div class="mb-3">
                        <label for="last-name" class="col-form-label">Last Name:</label>
                        <input type="text" class="form-control" id="fast-name" name="lastname">
                      </div>
                      <div class="mb-3">
                        <label for="message-text" class="col-form-label">Email :</label>
                        <input type="mail" class="form-control" id="message-text" name="email"></input>
                      </div>
                      <div class="mb-3">
                        <label for="message-text" class="col-form-label">Message :</label>
                        <textarea class="form-control" id="message-text" name="message"></textarea>
                      </div>
                      <div class="mb-3">
                        <label for="message-text" class="col-form-label">Number :</label>
                        <input type="number" class="form-control" id="message-text" name="number"></textarea>
                      </div>
                      
                      

                    
                  </div>
                  <div class="modal-footer">
                       <!-- <button type="submit" class="btn-primary " ><a id="btn" href="table.html">Submit</a></button>  -->
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <!-- <button type="button" class="btn btn-primary"<a href="table.html">Submit</a></button> -->
                      <!-- <button  class="sbtn"><a href="table.html">Submit</a></button> -->
                      <input type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" value="Submit">
                  </div>
</form>
                </div>
              </div>
            </div>
            
            </div>
            
            
            </div>
        </div>
    </nav>
    
    <main>
        <div class="position-reletive ">
            <img src="mountain.jpg" alt="mountain" width="100%" height="600px">
            <div class="position-absolute d-flex " id="position">
                <div class="text-light m-5 ps-5">
                    <p>Understand The Importent of Life</p>
                    <h1 class="display-1"><b class="color">Pure</b> & Healthy <br>Drinking Water</b></h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus at corporis est delectus repellat
                        esse harum </p>
                </div>
                <div class=" ps-5">
                    <img src="bottle-1-1-4@2x.png" alt="img" width="60%" height="100%">
                </div>
            </div>
        </div>

        <div class="d-flex m-5">
            <div>
                <img src="about-1@2x.png" alt="img" width="80%" height="80%">
            </div>
            <div class="text">
                <p class="display-4">We are want safe and Healthy water for Healthy Life</p>
                <p clas="text2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius distinctio commodi eaque
                    nulla error
                    tempora id quia rem, accusamus assumenda doloremque, dignissimos iste optio, numquam dicta ratione
                    alias mollitia aut.<br> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum corporis,
                    itaque reprehenderit error dignissimos accusantium aut provident non, tempore modi, cupiditate quam.
                    Dignissimos quam consectetur, voluptatibus quidem nulla tenetur ut?</p>
                
                <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  About More
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      Water is one of the most important basic needs for living beings. But with the modernization and development of human lifestyles, consumption of water has been at the peak. The shortage of water has been thus increasing at a very rapid rate. States like Kerala and Chennai which had once ample of water is now running out of it. Wastage of water has been proven to be one of its major cause. Water overflow over an hour and careless draining of freshwater from residential, hospitals, and municipal tanks adds flavor to the shortage of drinking water.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
            </div>
        </div>
        <div  id="color">
            <div class="m-5 p-5" id="center">
                <h1>Protect Your Family With Best Water <br>Filtering System Services</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate aut eveniet sed repudiandae
                    reprehenderit ea <br>quam ex nam, fugit accusamus voluptates necessitatibus impedit aliquam explicabo
                   possimus<br> tempora veritatis inventore assumenda?</p>

            </div>
            <div class="d-flex justify-content-center">
                <div>
                    <div class="m-5 pe-5">
                    <h3>Chloride</h3>
                    <p>250 mg/l<br>
                    Lorem ipsum dolor sit amet consectetur <br>adipisicing elit. Sequi, commodi</p>
                    </div>
                    <div class="m-5 pt-5">
                        <h3>Chloride</h3>
                        <p>250 mg/l<br>
                        Lorem ipsum dolor sit, amet consectetur adipisicing<br> elit. Quasi repellendus aut </p>
                    </div>
                </div>
                <div>
                    <img src="water-glass-1.png" alt="img">
                </div>
                <div>
                    <div class="m-5" >
                        <h3>Chloride</h3>
                        <p>
                            250 mg/l<br>
                            Lorem ipsum dolor sit, amet consectetur adipisicing<br> elit. Quasi repellendus aut
                        </p>
                    </div>
                    <div class="m-5 pt-5">
                        <h3>Chloride</h3>
                        <p>
                            250 mg/l<br>
                            Lorem ipsum dolor sit, amet consectetur adipisicing<br> elit. Quasi repellendus aut
                        </p>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-around mt-5">
                <div>
                    <p><b>Nitrates</b><br>
                    2 mg/l</p>
                </div>
                <div>
                    <div>
                        <p><b>Nitrates</b><br>
                        2 mg/l</p>
                    </div>
                </div>
                <div>
                    <div>
                        <p><b>Nitrates</b><br>
                        2 mg/l</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="c4"> 
        <div id="blue" class="d-flex" >
            <div class="p-5">
                <img src="bottle.jpg" alt="img" class="rounded-circle"  width="120%" height="100%">
            </div>
            <div class="text-light p-5" id="alg" width="50%" height="50%">
                <h1>Bottled Water Delivery <br> & Service</h1>
               <h3> give our service to more then 10 countries. We give our delivery service using<br>
                    more then 50 countries within 2hr in anywhrer & Service here in the city.</h3>
                <p class="text11">
                    <ul class="text11">
                        <li>Hyginec and Erganamic Bottles</li>
                        <li>Free Delivery On Weekends</li>
                        <li>5 steps Filtration plants</li>
                        <li>Best For Healthy & Hydration</li>
                    </ul>
                    <div class="text-dark">
                    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Order Today
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Order Today</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Order for today 20% off
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          
        </div>
      </div>
    </div>
  </div>
                    </div>
                </p>

            </div>

        </div> 
        </div>

    </main>
    <footer id="c5">
        <div id="footer_color" class="d-flex justify-content-around p-5">
            <div>
                <img src="logo.png" alt="img">
                <p>Protect Your Family With Best Water<br>
                    Filtering System Services</p>
            </div>
            <div>
               <h2>About us</h2>
               <p>Phone:- 10001-000-101</p>
               <p>Email:- water@4345email.com</p>    
            </div> 
            <div>
                <h2>Contect Us</h2>
                <p>Phone:- 10001-000-101</p>
               <p>Email:- water@4345email.com</p>    
            </div>
            <div></div>

        </div>
    </footer>


</body>

</html>
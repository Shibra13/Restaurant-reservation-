<?php
require "header.php";
?>

<header class="header">
    <div class="row">
        <div class="col-md-12 text-center">
   <a class="logo"><img src="img/goldenchoco-removebg-preview.png" alt="logo"></a>
   </div>
        <div class="col-md-12 text-center">
            <button type="button" onclick="window.location.href='reservation.php'" class="btn btn-outline-light btn-lg"><em>Make a Reservation Now!</em></button>
        </div>
    </div>
</header>



<!--about us section-->

<section id="aboutus">

 <div class="container">
   <h3 class="text-center"><br><br> Golden Choco</h3>
   <div class="row">
<!--carousel-->
     <div class="col-sm"><br><br>
      	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
         <ol class="carousel-indicators">
           <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
           
         </ol>
        <div class="carousel-inner">
           <div class="carousel-item active">
             <img class="d-block w-100" src="img/3.jpeg" alt="First slide">
           </div>
           <div class="carousel-item">
           <img class="d-block w-100" src="img/4.jpeg" alt="Second slide">
           </div>
           <div class="carousel-item">
           <img class="d-block w-100" src="img\image.png" alt="Third slide">
           </div>
        </div>
         <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
         </a>
       </div><br><br>
     </div>

<!--end of carousel-->

     <div class="col-sm">
    	<div class="arranging"><br><hr>
	<h4 class="text-center">Our Story</h4>
	<p><br>Our restaurant was founded in 2018 in Badulla, a beautiful hill-country town in Sri Lanka known for its cool climate and natural scenery. From the beginning, our goal was to serve fresh, tasty food while giving customers a calm and welcoming dining experience.
    Over the years, the restaurant has become a popular place for students, families, and travelers visiting Badulla.
<br> We focus on using locally sourced ingredients and preparing meals that reflect both Sri Lankan flavors and modern food styles.
In 2023, the restaurant was renovated to create a more comfortable and modern space while still keeping its natural hill-country feel. By 2025, we continue to improve our services by offering better seating, friendly customer service, and a peaceful atmosphere.
Our outdoor seating area allows guests to enjoy the cool Badulla weather, scenic views, and a relaxing environment, making it a perfect place to dine, meet friends, or spend quality time with family.<br><br><br></p><hr>
	</div>
     </div>
    </div><br>
  </div>
</section>
<!--end of about us section-->

<div class="header2">
</div>

<!----gallery -->
<div class id="gallery"><br>
    <div class="container">
    <h3 class="text-center"><br>Gallery<br><br></h3>
        <div class="d-flex flex-row flex-wrap justify-content-center">
           <div class="d-flex flex-column">
              <img src="img/chocolate-and-fig-mini-pavlovas.webp" class="img-fluid" style="width:250px; height:200px; object-fit:cover;">
              <img src="img/Chocolate-Mousse-recipe-19032019.webp" class="img-fluid" style="width:250px; height:200px; object-fit:cover;">
           </div>
           <div class="d-flex flex-column">
              <img src="img/524374270283317e12833ce9bde84e64.jpg" class="img-fluid" style="width:250px; height:200px; object-fit:cover;">
              <img src="img/devilys-food-cake-212625-2.jpg" class="img-fluid" style="width:250px; height:200px; object-fit:cover;">
           </div>
           <div class="d-flex flex-column">
               <img src="img/IMG_4369_Heart-Shaped-Chocolate-Eclairs-4x3-fae1512c015d4a5c948f8b37b5e6a191.jpg" class="img-fluid" style="width:250px; height:200px; object-fit:cover;">
               <img src="img/8.jpeg" class="img-fluid" style="width:250px; height:200px; object-fit:cover;">
           </div>
           <div class="d-flex flex-column">
               <img src="img/Thumbprint-Cookies-SQ.jpg" class="img-fluid" style="width:250px; height:200px; object-fit:cover;">
               <img src="img/chocolate_cheesecake_16545_16x9.jpg" class="img-fluid" style="width:250px; height:200px; object-fit:cover;">
           </div>
        </div>
    </div>
</div><br><br>



<!----end of gallery -->

<div class="container" id="reservation">
    <h3 class=" reservation-heading text-center"><br><br>Reservation <br><br></h3>
    <img  src="img/16.jpg" class="img-fluid rounded">
    <button type="button" onclick="window.location.href='reservation.php'" class="btn btn-outline-dark btn-block btn-lg">Make a reservation Now!</button>
        
</div><br><br>

<div class="header2">
</div>

<!-- main page map section-->
<section class="map" id="footer">
    <div class="container">
    <h3 class="text-center"><br><br>Find us!</h3><br>
        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d3150.1829966583578!2d23.75232003459512!3d37.85600838634192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e0!4m3!3m2!1d37.8566691!2d23.752137599999998!4m0!5e0!3m2!1sel!2sgr!4v1524459240043" style= "width:100%;  height:250px; border:0;" allowfullscreen></iframe>
     -->
<iframe
  src="https://www.google.com/maps?q=Restaurant+in+Badulla+Town,+Sri+Lanka&output=embed"
  style="width:100%; height:250px; border:0;"
  allowfullscreen=""
  loading="lazy">
</iframe>


        <div class="row staff">
            <div class="col">
            <h4><strong>Opening Hours</strong></h4>
                       
                <div class="signup-form">
                    <form action="#footer" method="post">
                        <div class="form-group">
                            <label>Enter Date</label>
                            <input type="date" class="form-control" name="date" placeholder="Date" required="required">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="check_schedule" class="btn btn-dark btn-block">Check Open Time</button>
                        </div>
                    </form>
                    
<?php

if(isset($_POST['check_schedule'])){
      
require 'includes/dbh.inc.php';
            
$date= $_POST['date'];
 
    $sql = "SELECT * FROM schedule WHERE date = '$date'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        while($row = $result->fetch_assoc()) {
            echo"
                <table class='table table-sm table-striped table-dark text-center'>
                   <thead>
                    <tr>
                    <th scope='col'>Date</th>
                    <th scope='col'>Open Time</th>
                    <th scope='col'>Close Time</th>
                    </tr>
                   </thead>
                   <tbody>
                    <tr>
                    <th scope='row'><em>". $date . "</em></th>
                    <td>".$row['open_time']."</td>
                    <td>".$row['close_time']."</td>
                    </tr>
                   </tbody>
                </table>";
                }
            }
        else{
         echo"
                <table class='table table-striped table-dark text-center'>
                   <thead>
                    <tr>
                    <th scope='col'>Date</th>
                    <th scope='col'>Open Time</th>
                    <th scope='col'>Close Time</th>
                    </tr>
                   </thead>
                   <tbody>
                    <tr>
                    <th scope='row'><em>". $date . "</em></th>
                    <td>12:00</td>
                    <td>00:00</td>
                    </tr>
                   </tbody>
                </table>";
            }
         
   //close connection
   mysqli_close($conn);
}
?>
                        
                </div><br>
            </div>

            <div class="col">
            <h4 class="text-right"><strong>Visit Us</strong></h4>
          
<p class="text-right">
  Golden Choco<br>
  <i class="fa fa-map-marker"></i>&nbsp;
  Lower Bazaar Road,<br>
  Badulla, Sri Lanka<br><br>
  Email: info@badullarestaurant.lk<br>
  Phone: +94 55 222 3456
</p>

	</div>
    </div>
</section>
<!--end of main page map section-->


<?php
require "footer.php";
?>
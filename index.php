<?php
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BloodBank & Donor Management System</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/modern-business.css" rel="stylesheet">
    <style>
    .navbar-toggler {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    .carousel-item.active,
    .carousel-item-next,
    .carousel-item-prev {
        display: block;
    }
    </style>

</head>

<body>

    <!-- Navigation -->
<?php include('includes/header.php');?>
<?php include('includes/slider.php');?>
   
    <!-- Page Content -->
    <div class="container">

        <h1 class="my-4">Welcome to Cross Blood Services</h1>

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header">The need for blood</h4>
                   
                        <p class="card-text" style="padding-left:2%">We need to maintain a regular supply of all blood types so we can provide it to the hospitals and patients who need it. <br>Some rare sub-types are more common in specific communities, which is why we particularly need more black donors and are always looking for more blood donors from black, Asian and minority ethnic communities.<br>We sometimes need to target specific blood types to increase stock levels. That's why we sometimes contact regular donors with the particular blood type we need, and ask them to give blood </p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header">Blood Tips</h4>
                   
                        <p class="card-text" style="padding-left:2%">Have iron-rich foods, such as red meat, fish, poultry, beans, spinach, iron-fortified cereals or raisins.<br>Get a good night's sleep the night before your donation, eat healthy foods and drink extra liquids.<br>Donating Platelets? Don't take aspirin for 2 days before your appointment.<br>Ask a friend to donate at the same time . You can support each other and do twice as much good! </p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header">Who you could Help</h4>
                   
                        <p class="card-text" style="padding-left:2%">Your blood saves lives. Your blood donation is an amazing gift to people who need it in an emergency or for on-going medical treatment. <br>We need over 6,000 people to give blood every day to meet the needs of hospitals and patients. We specifically need new black donors to provide blood donations for black patients with sickle cell disease. They need life-saving blood from black donors, which provides the closest match to their own. Find out how donated blood is used. </p>
                </div>
            </div>
        </div>
        
<div class="container mt-5">
    <link href="css/custom.css" rel="stylesheet">
	<div class="row">
		<h4>FROM THE BLOG</h4>
	</div>
	<div class="underline"></div>
</div>

<div class="container pb-5 blog">
 <div class="row">
 	<div class="col-md-6">
 		<div class="media mt-5">
					<img src="images/blogcc3.jpg" class="img-fluid mr-3" alt="media1">
					<div class="media-body mt-2">
                        <h5> <a href="blog1.php">Donte Blood because you can save a life</a></h5>
						
						<p><i class="fa fa-user" aria-hidden="true"></i> admin. Date: 12-2-2018</p>
					</div>
				</div>
 	</div>
 	
 	
 	<div class="col-md-6">
 		<div class="media mt-5">
					<img src="images/blog2.jpg" class="img-fluid mr-3" alt="media1">
					<div class="media-body mt-2">
                        <h5><a href="blog2.php">Man awarded lifetime achievement for donating blood</a></h5>
						
						<p><i class="fa fa-user" aria-hidden="true"></i> admin. Date: 12-2-2018</p>
					</div>
				</div>
 	</div>
 </div>
 
 
  <div class="row">
 	<div class="col-md-6">
 		<div class="media mt-5">
					<img src="images/womblod.jpg" class="img-fluid mr-3" alt="media1">
					<div class="media-body mt-2">
                        <h5 ><a href="blog3.php">Blood Donating teens at risk with iron deficiency</a></h5>
						
						<p><i class="fa fa-user" aria-hidden="true"></i> admin. Date: 12-2-2018</p>
					</div>
				</div>
 	</div>
 	
 	
 	<div class="col-md-6">
 		<div class="media mt-5">
					<img src="images/blog1.jpg" class="img-fluid mr-3" alt="media1">
					<div class="media-body mt-2">
                        <h5 ><a href="blog4.php">Wedding turns into Blood Donation Camp</a></h5>
						
						<p><i class="fa fa-user" aria-hidden="true"></i> admin. Date: 12-2-2018</p>
					</div>
				</div>
 	</div>
 </div>
	
</div>
        <!-- /.row -->

        <!-- Portfolio Section -->
        <h2>Some of the Donor</h2>

        <div class="row">
                   <?php 
$status=1;
$sql = "SELECT * from tblblooddonars where status=:status order by rand() limit 6";
$query = $dbh -> prepare($sql);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>

            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top img-fluid" src="images/blood-donor.jpg" alt="" ></a>
                    <div class="card-block">
                        <h4 class="card-title"><a href="#"><?php echo htmlentities($result->FullName);?></a></h4>
<p class="card-text"><b>  Gender :</b> <?php echo htmlentities($result->Gender);?></p>
<p class="card-text"><b>Blood Group :</b> <?php echo htmlentities($result->BloodGroup);?></p>

                    </div>
                </div>
            </div>

            <?php }} ?>
          
 



        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-6">
                <h2>BLOOD GROUPS</h2>
          <p>  blood group of any human being will mainly fall in any one of the following groups.</p>
                <ul>
                
                
<li>A positive or A negative</li>
<li>B positive or B negative</li>
<li>O positive or O negative</li>
<li>AB positive or AB negative.</li>
                </ul>
                <p>A healthy diet helps ensure a successful blood donation, and also makes you feel better! Check out the following recommended foods to eat prior to your donation.</p>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid rounded" src="images/blood-donor (1).jpg" alt="">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="row mb-4">
            <div class="col-md-8">
            <h4>UNIVERSAL DONORS AND RECIPIENTS</h4>
                <p>
The most common blood type is O, followed by type A.

Type O individuals are often called "universal donors" since their blood can be transfused into persons with any blood type. Those with type AB blood are called "universal recipients" because they can receive blood of any type.</p>
            </div>
            <div class="col-md-4">
                <a class="btn btn-lg btn-secondary btn-block" href="become-donor.php">Become a Donor</a>
            </div>
        </div>

    </div>
    <!-- /.container -->



    <!-- Footer -->
  <?php include('includes/footer.php');?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>

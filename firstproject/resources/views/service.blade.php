{{-- <h1>service page</h1> --}}
{{-- {{"$name , $age"}} --}}

@extends('web.main')

@section('section')


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Courier Website</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- bootsrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>

<body>
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
        <div class="container py-5">
            <h1 class="display-3 text-light mb-3 animated slideInDown">Services</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <p class="text-white">
How to create a courier website with tracking using WordPress <br> courier is a person or company that provides a premium, all-inclusive <br> delivery service that transports parcels or consignments from one place to <br> another in the shortest time possible
A courier website with tracking is a site <br> where owners can digitalizethe existing mode of operation, book shipment <br> for customers, create a parcel tracking number, and keep customers more<br> informed by services.
  Customers can track goods from start to finish.</p>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <?php
    if(isset($_POST['btn'])){
    $login_email = $_POST['lemail'];

    $log_query = "select * from form where `orderNum` = '$login_email'";
    $login_conn = mysqli_query($connection, $log_query);

    if(mysqli_num_rows($login_conn) > 0){
?>
<table class="display-nowrap" id="example">
 <thead class="bg-dark text-white">
<tr>
    <th>Status</th>
    <th>Company</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Courier Type</th>
</tr>
</thead>
<tbody>
    <?php
          while ($pro_data = mysqli_fetch_assoc($login_conn)) {
            ?>
            <td>
                <?php echo $pro_data['status'] ?>
            </td>
            <td>
                <?php echo $pro_data['scompany'] ?>
            </td>
            <td>
                <?php echo $pro_data['femail'] ?>
            </td>
            <td>
                <?php echo $pro_data['phone'] ?>
            </td>
            <td>
                <?php echo $pro_data['ctype'] ?>
            </td>

            <?php
        }
    }
}
?>
        </tbody>
      </table>
<!-- track  -->
<form action="service.php" method="post">
    <div class="md:hidden lg:mt-[-5rem] md:mt-[-3rem] mx-[auto] sm:mt-[1rem] mt-[1rem] text-center md:text-left absolute" style="z-index: 9;">
<h2 class="banner-heading react-reveal text-[red] text-2xl sm:text-2xl font-semibold">Track Your Shipment</h2><div class="banner-input react-reveal text-sm flex flex-row my-[.5rem]">
<input type="number" name="lemail" placeholder="Tracking Order Number" class="p-2 md:w-[30rem] sm:w-[18rem] focus:outline-none opacity-75 rounded-l-sm">
<input type="submit" value="Track Shipment" name = "btn"  class="bg-[#D40511] text-white p-3 w-full md:w-[10rem] sm:w-[8rem] rounded-r-sm transition-all duration-500 gradientbg btn btn-danger">
</div>
</form>
<!-- track end  -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">Our Services</h6>
                <h1 class="mb-5">Explore Our Services</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden  mb-4">
                            <img class="img-fluid" src="img/tcs.png" alt="">
                        </div>
                        <h4 class="mb-3">TCS Courier Service</h4>
                        <p>In 1983, with twelve Express Centres and twenty-five shipments is where it started for TCS. Now with a network of more than 1,000 retail centres in the country, serving customers 24-hours a day, Express operation is the bedrock of TCS products and services. Five different classes of TCS Express Centres, including COCO, Franchised, Shop-in-Shop, Agents and IBRS, serve as a one-stop-shop for our customers.</p>
                        <button class="btn btn-success">Price 1200 perkg</button>
                        <br>
                        <a class="btn-slide mt-2" href="courier-form.php"><i class="fa fa-arrow-right"></i><span>Courier Details</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/lepo.png" alt="">
                        </div>
                        <h4 class="mb-3">Leopard Courier Service</h4>
                        <p>Leopards Courier Services offer an unmatched portfolio of services ranging from domestic & international package delivery, warehousing, distribution, transportation, eCommerce, eFulfillment to complete supply chain solutions Leopards Courier Services has been in business for a number of years and has established a name in the industry as a supplier of trustworthy and effective leopards courier services.</p>
                        <button class="btn btn-success" >Price 900 perkg</button>
                        <br>
                        <a class="btn-slide mt-2" href="courier-form.php"><i class="fa fa-arrow-right"></i><span>Courier Details</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/trax.png" alt="">
                        </div>
                        <h4 class="mb-3">Trax Courier service</h4>
                        <p>TRAX offers the most agile last-mile delivery services along with reliable inventory management solutions across a wide network of over 450+ destinations in Pakistan, with the ease and promise of the fastest transfer of funds along with safe and secure delivery across Pakistan and around the world.The delivery process may take 2-5 days, depending on the weight, origin, and the destination of your shipment.</p>
                        <button class="btn btn-success">Price 700 perkg</button>
                        <br>
                        <a class="btn-slide mt-2" href="courier-form.php"><i class="fa fa-arrow-right"></i><span>Courier Details</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->



<!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="text-center">
                <h6 class="text-secondary text-uppercase">Testimonial</h6>
                <h1 class="mb-0">Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item p-4 my-5">
                    <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                    <div class="d-flex align-items-end mb-4">
                        <img class="img-fluid flex-shrink-0" src="img/testimonial-1.jpg" style="width: 80px; height: 80px;">
                        <div class="ms-4">
                            <h5 class="mb-1">Client Name</h5>
                            <p class="m-0">Profession</p>
                        </div>
                    </div>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                </div>
                <div class="testimonial-item p-4 my-5">
                    <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                    <div class="d-flex align-items-end mb-4">
                        <img class="img-fluid flex-shrink-0" src="img/testimonial-2.jpg" style="width: 80px; height: 80px;">
                        <div class="ms-4">
                            <h5 class="mb-1">Client Name</h5>
                            <p class="m-0">Profession</p>
                        </div>
                    </div>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                </div>
                <div class="testimonial-item p-4 my-5">
                    <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                    <div class="d-flex align-items-end mb-4">
                        <img class="img-fluid flex-shrink-0" src="img/testimonial-3.jpg" style="width: 80px; height: 80px;">
                        <div class="ms-4">
                            <h5 class="mb-1">Client Name</h5>
                            <p class="m-0">Profession</p>
                        </div>
                    </div>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                </div>
                <div class="testimonial-item p-4 my-5">
                    <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                    <div class="d-flex align-items-end mb-4">
                        <img class="img-fluid flex-shrink-0" src="img/testimonial-4.jpg" style="width: 80px; height: 80px;">
                        <div class="ms-4">
                            <h5 class="mb-1">Client Name</h5>
                            <p class="m-0">Profession</p>
                        </div>
                    </div>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

</body>

</html>
@endsection

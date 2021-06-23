
<?php
$mysqli = new mysqli("localhost","root","","banhang");
session_start();

$sql="SELECT*FROM customers WHERE customer_email='".$_SESSION['dangnhap']."'  ";
$sql_query=mysqli_query($mysqli,$sql);
$rows=mysqli_fetch_array($sql_query);       
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
</head>
<body>
    <div class="row py-5 px-4">
        <div class="col-md-5 mx-auto">
            <!-- Profile widget -->
            <div class="bg-white shadow rounded overflow-hidden">
                <div class="px-4 pt-0 pb-4 cover">
                    <div class="media align-items-end profile-head">
                     <a href="/Profile/image/70358564_706012969914300_3151589165775192064_n.jpg">  <div class="profile mr-3"><img src="../../image/<?php echo $rows['customer_image'] ?>" alt="..." width="130" class="rounded mb-2 img-thumbnail"></a> <a href="#" class="btn btn-outline-dark btn-sm btn-block">Edit profile</a></div>
                        <div class="media-body mb-5 text-white">
                            <h4 class="mt-0 mb-0"><?php echo $rows['customer_name'] ?></h4>
                            <p class="small mb-4"style="color: black"> <i class="fas fa-map-marker-alt mr-2"></i>Da Nang</p>
                        </div>
                    </div>
                </div>
                <div class="bg-light p-4 d-flex justify-content-end text-center">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <h5 class="font-weight-bold mb-0 d-block">100</h5><small class="text-muted"> <i class="fas fa-image mr-1"></i>Photos</small>
                        </li>
                        <li class="list-inline-item">
                            <h5 class="font-weight-bold mb-0 d-block">500</h5><small class="text-muted"> <i class="fas fa-user mr-1"></i>Followers</small>
                        </li>
                        <li class="list-inline-item">
                            <h5 class="font-weight-bold mb-0 d-block">200</h5><small class="text-muted"> <i class="fas fa-user mr-1"></i>Following</small>
                        </li>
                    </ul>
                </div>
                <div class="px-4 py-3">
                    <h5 class="mb-0">About: <?php echo $rows['customer_email'] ?></h5>
                    <h6 class="mb-0"> <?php echo $rows['customer_contact'] ?></h6>
                    <h6 class="mb-0"><?php echo $rows['customer_address'] ?></h6>
                    <h6 class="mb-0"><?php echo $rows['customer_city'] ?></h6>
                    <h6 class="mb-0"><?php echo $rows['customer_country'] ?></h6>
                </div>
                <div class="py-4 px-4">
                    
                       
                </div>
            </div>
        </div>
    </div>
    <style>
        .profile-head {
    transform: translateY(5rem)
}

.cover {
    background-image: url(/Profile/image/ảnh\ đám\ cưới.jpg);
    background-size: cover;
    background-repeat: no-repeat
}

body {
    background: #654ea3;
    background: linear-gradient(to right, #e96443, #904e95);
    min-height: 100vh
}
h4{
    color: black;
}
        .profile-head {
    transform: translateY(5rem)
}

.cover {
    background-image: url(/Profile/image/ảnh\ đám\ cưới.jpg);
    background-size: cover;
    background-repeat: no-repeat
}

body {
    background: #654ea3;
    background: linear-gradient(to right, #e96443, #904e95);
    min-height: 100vh
}
    </style>
</body>

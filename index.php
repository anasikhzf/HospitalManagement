<!DOCTYPE html>
<html lang="en">
<?php include 'components/head.php'; ?>
<body>
    <?php include 'components/header.php'; ?>
    <!-- Home Section -->
    <section class="home" id="home"></section>

    <!-- About Section -->
    <section class="about py-5" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="assets/img/bg_about.jpg" alt="Logo Rumah Sakit">
                </div>
                <div class="col-md-6">
                    <h3>Why choose RS Telang Indah?</h3>
                    <p>
                        Rumah Telang Indah memiliki reputasi yang sangat baik di komunitas medis dan dikenal dengan kualitas pelayanan kesehatan yang tinggi. Banyak testimoni positif dari pasien yang pernah berobat di sini.
                    </p>
                    <p>
                        Rumah Sakit ini dilengkapi dengan fasilitas medis yang modern dan teknologi terkini, yang memastikan pasien mendapatkan perawatan yang terbaik dan terkini.
                    </p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section class="products py-5 bg-light" id="product">
        <div class="container">
            <h1 class="text-center mb-4">Latest <span class="text-primary">Post</span></h1>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card">
                        <img src="assets/img/post-1.jpg" class="card-img-top" alt="Post">
                        <div class="card-body">
                            <h5 class="card-title">Inspiring stories during a global pandemic</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="assets/img/post-2.jpg" class="card-img-top" alt="Post">
                        <div class="card-body">
                            <h5 class="card-title">Inspiring stories during a global pandemic</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="assets/img/post-3.jpg" class="card-img-top" alt="Post">
                        <div class="card-body">
                            <h5 class="card-title">Inspiring stories during a global pandemic</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="assets/img/post-4.png" class="card-img-top" alt="Post">
                        <div class="card-body">
                            <h5 class="card-title">Inspiring stories during a global pandemic</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="assets/img/post-5.png" class="card-img-top" alt="Post">
                        <div class="card-body">
                            <h5 class="card-title">Inspiring stories during a global pandemic</h5>
                        </div>
                    </div>
                </div>
                <!-- Duplicate similar structure for other posts -->
            </div>
        </div>
    </section>

    <!-- Reviews Section -->
    <section class="review py-5" id="review">
        <div class="container">
            <h1 class="text-center mb-4"><span class="text-primary">Testimoni</span></h1>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="box">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>
                            Ayah saya baru saja menjalani operasi jantung di rumah sakit ini, dan saya tidak bisa cukup mengungkapkan betapa puasnya kami dengan layanan yang diberikan.
                        </p>
                        <div class="d-flex align-items-center">
                            <img src="assets/img/cust1.jpg" class="rounded-circle me-3" alt="User">
                            <div>
                                <h6 class="mb-0">Mikey Septian</h6>
                                <small>puas</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>
                            Ayah saya baru saja menjalani operasi jantung di rumah sakit ini, dan saya tidak bisa cukup mengungkapkan betapa puasnya kami dengan layanan yang diberikan.
                        </p>
                        <div class="d-flex align-items-center">
                            <img src="assets/img/cust2.jpg" class="rounded-circle me-3" alt="User">
                            <div>
                                <h6 class="mb-0">Mikey Septian</h6>
                                <small>puas</small>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Duplicate similar structure for other reviews -->
            </div>
        </div>
    </section>

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <?php include 'components/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

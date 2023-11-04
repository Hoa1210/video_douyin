<?php include "api.php"; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/logo.png">
    <title>Dowload Video Douyin - Tiktok china!</title>
    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="css/style.css" rel="stylesheet">
</head>

<body id="top">
    <main>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <i class="bi-back"></i>
                    <span>DVD</span>
                </a>
                <div class="d-lg-none ms-auto me-4">
                    <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
                </div>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="d-none d-lg-block ms-auto">
                        <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
                    </div>
                </div>
            </div>
        </nav>
        <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12 mx-auto">
                        <h1 class="text-white text-center">Trình Tải Video Douyin</h1>
                        <h6 class="text-center">Tải video douyin không logo, full hd, miễn phí.</h6>
                        <form method="post" action="" class="custom-form mt-4 pt-2 mb-lg-0 mb-5" role="search">
                            <div class="input-group input-group-lg">
                                <span class="input-group-text bi-download" id="basic-addon1">
                                </span>
                                <input name="url" type="search" class="form-control" id="keyword"
                                    placeholder="Hãy dán liên kết douyin vào đây..." value="<?php echo $url; ?>"
                                    aria-label="Tải xuống" required>
                                <button type="submit" class="form-control">Kiểm tra</button>
                            </div>
                            <?php if (!$err) {?>
                            <div class="alert alert-warning alert-dismissible fade show mt-3" role="alert">
                                <strong>Liên kết lỗi!</strong> Vui lòng kiểm tra lại liên kết.
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            <?php }?>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <?php if ($status) { ?>
            <section class="featured-section">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                            <div class="custom-block bg-white shadow-lg">
                                <h5 class="mb-2">Video douyin</h5>
                                <div class="d-flex">
                                    <img src="<?php echo $image; ?>" width="150" alt="video douyin ..">
                                    <div class="d-flex flex-column ms-auto p-2">
                                        <p>
                                            <?php echo $title; ?>
                                        </p>
                                        <a class="btn custom-btn mt-2 mt-lg-3" id="downloadBtn"
                                            href="file.php?url=<?php echo $video ?>">Tải video</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php } ?>
    </main>
    <footer class="site-footer section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12 mb-4 pb-2">
                    <a class="navbar-brand mb-2" href="index.html">
                        <i class="bi-back"></i>
                        <span>DVD</span>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <h6 class="site-footer-title mb-3">Điều khoản</h6>
                    <ul class="site-footer-links">
                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Điều khoản dịch vụ</a>
                        </li>
                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Chính sách bảo mật</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-4 mb-lg-0">
                    <h6 class="site-footer-title mb-3">Liên hệ</h6>
                    <p class="text-white d-flex">
                        <a href="#" class="site-footer-link">
                            Đang cập nhật ...
                        </a>
                    </p>
                </div>
                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-lg-0 ms-auto">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Tiếng việt</button>
                        <ul class="dropdown-menu">
                            <li><button class="dropdown-item" type="button">Đang cập nhật ...</button></li>
                        </ul>
                    </div>
                    <p class="copyright-text mt-lg-5 mt-4">Copyright © 2023 HoaMaDao. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- JAVASCRIPT FILES -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
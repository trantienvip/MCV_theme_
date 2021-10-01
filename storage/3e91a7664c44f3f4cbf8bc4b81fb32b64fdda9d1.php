<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($title); ?></title>
    <link rel="stylesheet" href="public/css/app.css">
    <link rel="stylesheet" href="public/bootrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/fonts/themify-icons/themify-icons.css">

    <link rel="stylesheet" href="public/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="public/owlcarousel/assets/owl.theme.default.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="public/owlcarousel/owl.carousel.min.js"></script>
    <link rel="shortcut icon" href="img/favico.png" type="image/x-icon">
</head>
<body>
    <div class="app">
          
          <nav class="navbar navbar-expand-lg navbar-dark blackss">
            <div class="container menu-mobile">
                <a class="navbar-brand" href=""><img width="100px" src="public/img/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
        
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto col-md-6">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Tin tức 24h <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Tin tức coin
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">ETH</a>
                                <a class="dropdown-item" href="#">BTC</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">SOL</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Nổi bật</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./user">User</a>
                        </li>
                    </ul>
                        <i class="iconsearch ti-search"></i>
                    <form action="search" class="form-search" action="" method="get">
                        <input name="q" type="text" placeholder="Nhập từ khóa tìm kiếm">
                    </form>
                </div>
            </div>
        </nav>
        
        <div class="container">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
            
            <footer>
              <div class="container">
                  <div class="row footertop">
                      <div class="logo col-lg-3 col-md-12">
                          <img width="200px" src="public/img/logo.png"
                              alt="">
                      </div>
                      <div class="info col-lg-5 col-md-12">
                          <p>BitcoinNews là cổng thông tin tiền mã hóa bằng tiếng Việt nhanh nhất và chính xác nhất, mang lại cho độc
                              giả cái nhìn tổng quan về lĩnh vực tiền mã hóa và tiến bộ công nghệ blockchain trên toàn cầu.</p>
                      </div>
                      <div class="social col-lg-4 col-md-12">
                          <h4 class="linkf">Liên kết với chúng tôi</h4>
                          <ul class="list-social">
                              <li><a href=""><i class="ti-facebook"></i></a></li>
                              <li><a href=""><i class="ti-youtube"></i></a></li>
                              <li><a href=""><i class="ti-twitter"></i></a></li>
                              <li><a href=""><i class="ti-instagram"></i></a></li>
                              <li><a href=""><i class="ti-linkedin"></i></a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="copyright">
                      <p>Copyright &copy; 2021 - Blockchain, Inc. All rights reserved</p>
                  </div>
              </div>
          </footer>
            
    </div>
    <script src="public/bootrap/js/bootstrap.min.js"></script>
    <script src="https://widgets.coingecko.com/coingecko-coin-price-marquee-widget.js"></script>

    <script>
      var iconsearch = $('.iconsearch.ti-search');
      var formsearch = $('.form-search');
      iconsearch.click(function(){
          iconsearch.toggleClass('ti-search');
          iconsearch.toggleClass('ti-close');
          formsearch.toggleClass('active')
      });
  </script>
</body>
</html><?php /**PATH D:\TAIXAM\htdocs\PHP2\MVCC\app\views/client-layout/main.blade.php ENDPATH**/ ?>
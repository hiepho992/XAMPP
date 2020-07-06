
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">

    <title>BOOK STORE</title>
</head>

<body>
    <nav class="navbar">
        <div class="img">
            
        </div>
    </nav>
    <header>
        <div class="header">
            <img src="../icon/LogoMakr_2wEt8z.png" alt="image" srcset="" id="logomark">
            <div class="search">
                <form action="http://localhost:9999/database/seachdatabase.php" method="get">
                    <input type="text" name="search" id="search" placeholder="Search">
                    <button type="submit"><i class="fas fa-search"></i></button>
                </form>
                <a href="#"></a>
                <a href="#"></a>        
                <a href="http://localhost:9999/category/orderdetail.php" target="_blank">
                    
                    <span id="count">0 item</span>
                </a>              
            </div>
        </div>
        <div class="list">
            <ul>
                <li><a href="#">TRANG CHỦ</a></li>
                <li><a href="#">GIỚI THIỆU</a></li>
                <li><a href="#">TIN TỨC</a></li>
                <li><a href="#">THỂ LOẠI SÁCH</a>
                    <ul>
                        <!-- <?php foreach ($resultList as $val) : ?>

                            <li><a href="#"><?= $val["typeofbook_name"]; ?></a></li>
                         

                        <?php endforeach; ?> -->
                    </ul>
                </li>
                <!-- <li><a href="#">TABLEWARE</a></li>
                <li><a href="#">TABLEWARE</a></li>
                <li><a href="#">TABLEWARE</a></li> -->
            </ul>
        </div>
        <div class="slide">
            <div class="move-icons">
            <i class="fas fa-chevron-circle-left" onclick="back()"></i>
            <i class="fas fa-chevron-circle-right" onclick="next()"></i>
            </div>
            <div class="move-slide">
                <img src="../icon/slide1.jpg" alt="image" srcset="">
                <img src="../icon/slide2.jpg" alt="image" srcset="">
                <img src="../icon/slide3.jpg" alt="image" srcset="">
                <img src="../icon/slider_2.jpg" alt="image" srcset="">
            </div>

        </div>
    </header>


    <script src="https://kit.fontawesome.com/91752fb16b.js" crossorigin="anonymous"></script>
    <script src="./js/js.js"></script>
</body>

</html>
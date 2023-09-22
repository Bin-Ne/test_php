<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>

    <link rel="stylesheet" href="./style_home_page.css">
    <link rel="stylesheet" href="./assets/fontawesome-free-6.2.1-web/css/all.min.css">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <style>
        body {
            position: relative; 
        }

        .brand-bin{
             /* margin-right: 100px; */
            padding-left: 40px; 
            font-size: 30px;
            font-weight: bold;
            color: #fff;
        }

        .nav-bin > li{
            margin-right: 20px;
        }

        .drop-menu-bin > li{
            font-size: 16px;
        }

        .carousel-bin{
            padding-top:50px;
        }

        .route-bin:hover{
            background-color:dodgerblue;
            /* border-radius: 20px; */
        }

        .footer{
            margin-top: 60px;
            background-color:#525252;
        }

        .contact-bin{
            font-size: 34px;
        }

        .contact-bin i{
            padding: 0px 6px;
        }



        /* #section1 {padding-top:50px;height:500px;color: #fff; background-color:aliceblue;}
        #section2 {padding-top:50px;height:500px;color: #fff; background-color: #673ab7;}
        #section3 {padding-top:50px;height:500px;color: #fff; background-color: #ff9800;}
        #section41 {padding-top:50px;height:500px;color: #fff; background-color: #00bcd4;}
        #section42 {padding-top:50px;height:500px;color: #fff; background-color: #009688;} */
    </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

    <nav class="navbar navbar-inverse navbar-fixed-top" style="font-size: 20px;"> 
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand brand-bin" style="margin-right:60px;font-size:28px;font-weight:bold;color:#fff" href="#">
                Trang chủ
            </a>
            </div>
            <div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav nav-bin">
                    <li><a href="#slider">Slider</a></li>
                    <li><a href="#phat_am">Phát âm</a></li>
                    <li><a href="#app">App tiếng Anh </a></li>
                    <li><a href="#lo_trinh">Lộ trình học</a></li>  
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="http://localhost:81/php/register.php"><span class="glyphicon glyphicon-user"></span> Đăng kí</a></li>
                    <li><a href="http://localhost:81/php/login.php"><span class="glyphicon glyphicon-log-in"></span> Đăng nhập</a></li>
                </ul>
            </div>
            </div>
        </div>
    </nav>    

    <div class="container-fluid">
        <div id="slider">
            <div id="myCarousel" class="carousel slide carousel-bin" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active" style="border-color: #000;width:20px;height:20px;margin-right:16px"></li>
                    <li data-target="#myCarousel" data-slide-to="1" style="border-color: #000;width:20px;height:20px;margin-right:16px"></li>
                    <li data-target="#myCarousel" data-slide-to="2" style="border-color: #000;width:20px;height:20px;margin-right:16px"></li>
                </ol>
                
                <div class="carousel-inner">
                    <div class="item active">
                    <img src="./assets/img/slick1.png" alt="Los Angeles" style="width: 100%;">
                    </div>

                    <div class="item">
                    <img src="./assets/img/slick2.png" alt="Chicago">
                    </div>

                    <div class="item">
                    <img src="./assets/img/slick3.png" alt="New York">
                    </div>
                </div>
                
                <a class="left carousel-control" href="#myCarousel" data-slide="prev" style="color: #000;">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next" style="color: #000;">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        

        <!-- 
            - 1 dòng 3 cột
            - Gồm 1 ảnh bên trái và chữ bên phải, chữ gồm h2 và p
            - Tương tự như web đã đưa link
         -->
        <div id="phat_am">
            <div class="row">
                <div class="row" style="margin-top:100px;text-align: center;">
                    <div class="col col-lg-12">
                        <h2><b>HỌC ĐÁNH VẦN LẦN ĐẦU TIÊN TRÊN THẾ GIỚI</b></h2>
                        <p style="font-size: 20px;">Học 1 quy luật - đọc hàng ngàn từ không cần từ điển - nói có ngữ điệu bất cứ câu nào mà không cần bắt chước bằng quy luật</p>
                    </div>
                </div>

                <div class="row" style="width: 90%;height: 1px;background-color:#dedede;margin:14px auto;"></div>

                <div class="row" style="margin-bottom: 120px;">
                    <div class="col col-lg-4 col-md-4 col-sm-12 col-xs-12" style="background-color:#fff;padding:0px 40px;">
                        <h3><img src="./assets/img/ic1.png" alt="" style="width: 50px;height: 50px;"> <b> Quy tắc Đọc chuẩn bản ngữ mọi từ trong từ điển</b></h3>
                        <p style="font-size:16px;">Kiến thức này ai cũng phải được học nhưng không có trường học nào giảng dạy. Hãy là những người đầu tiên lĩnh hội kiến thức này.</p>
                    </div>

                    <div class="col col-lg-4 col-md-4 col-sm-12 col-xs-12" style="background-color:#fff;padding:0px 40px;">
                        
                        <h3> <img src="./assets/img/ic2.png" alt="" style="width: 50px;height: 50px;"><b> Quy tắc Đọc chuẩn bản ngữ mọi từ trong từ điển</b></h3>
                        <p style="font-size:16px;">Kiến thức này ai cũng phải được học nhưng không có trường học nào giảng dạy. Hãy là những người đầu tiên lĩnh hội kiến thức này.</p>
                    </div>

                    <div class="col col-lg-4 col-md-4 col-sm-12 col-xs-12" style="background-color:#fff;padding:0px 40px;">
                        
                        <h3><img src="./assets/img/ic3.png" alt="" style="width: 50px;height: 50px;"><b> Quy tắc Đọc chuẩn bản ngữ mọi từ trong từ điển</b></h3>
                        <p style="font-size:16px;">Kiến thức này ai cũng phải được học nhưng không có trường học nào giảng dạy. Hãy là những người đầu tiên lĩnh hội kiến thức này.</p>
                    </div>
                </div>
            </div>
            
        </div>
        


        <!-- 
            - Đề xuất các app học tiếng anh cơ bản - app tìm đại cx đc
            - Hình tròn và kèm tên app dưới ảnh
         -->
        <div id="app">
            <div class="row" style="background-color:aliceblue;padding-bottom:20px;margin-bottom:130px">
                
                <!-- <div class="row" style="margin-top:80px"> -->
                    

                    <div class="row" style="padding-top: 20px;margin-top:60px">
                        <div class="row" style="text-align:center">
                            <h2 style="padding-bottom: 30px;"> <b>CÁC APP HỌC TIẾNG ANH HIỆU QUẢ </b> </h2>
                        </div>
                            <div class="col col-lg-3 col-md-3 col-sm-6 col-xs-6" style="text-align: center;">
                                <img src="https://play-lh.googleusercontent.com/iaJR-64YmYN9iKp6Mcp6WAHtSws1OZlpa07smgZI_nIdRzsvjU3D6qZLENTJm3pqsg" alt="" style="width:140px;height:140px;border-radius: 26px;">
                                <h3 style="font-weight: bold;">Doulingo</h3>
                            </div>

                            <div class="col col-lg-3 col-md-3 col-sm-6 col-xs-6" style="text-align: center;">
                                <img src="https://cdn.tgdd.vn/GameApp/3/227690/Screentshots/bucha-hoc-tieng-anh-app-hoc-tieng-anh-giao-tiep-tu-227690-logo-24-08-2020.png" alt="" style="width:140px;height:140px;border-radius: 20px;">
                                <h3 style="font-weight: bold;">Bucha</h3>
                            </div>

                            <div class="col col-lg-3 col-md-3 col-sm-6 col-xs-6" style="text-align: center;">
                                <img src="https://play-lh.googleusercontent.com/R9Xf7kEuaNi5qpA5WDoDd5mQ9syK-HB5LvXoYf3PNAeFbOYh5o2oUjQBwIWXq_Of5Tg" alt="" style="width:140px;height:140px;border-radius: 20px;">
                                <h3 style="font-weight: bold;">Cake</h3>
                            </div>
                            
                            <div class="col col-lg-3 col-md-3 col-sm-6 col-xs-6" style="text-align: center;">
                                <img src="https://play-lh.googleusercontent.com/dwZFBhMpEiKmSSRWAXBi9lr7bBfiXtn_8VYq845pIba6IoKWByGIybcB1ASujAquK9s=w240-h480-rw" alt="" style="width:140px;height:140px;border-radius: 30px;">
                                <h3 style="font-weight: bold;">4English</h3>
                            </div>
                    </div>
                    
                <!-- </div> -->
                
            </div>
        </div>

        


        <!-- 
            - Lộ trình học
            - Màn hình destop sẽ là 2 cột xen kẽ, mobile sẽ là 4 dòng 
         -->
         <div id="lo_trinh">
            <div class="row" style="border: 1px solid #000;border-radius:30px;margin-left:10px;margin-right:10px">
                <div class="row" style="margin-top:60px;padding:0px 60px;">
                    <div class="row">
                        <h2 style="padding-bottom:40px;text-align:center"> <b>LỘ TRÌNH HỌC TIẾNG ANH</b></h2>
                    </div>
                    <div class="col col-lg-6 col-md-6 route-bin" style="background-color:rgb(185, 222, 255); font-size: 18px;border:2px solid rgb(255, 177, 59);border-radius:20px;">
                        <div class="row" style="padding:10px 30px 0px;font-weight: bold;">
                            <img src="https://danhvantienganh.com/public/photos/1/1.png" alt="" style="width: 50px;height: 50px;;;margin-right: 16px;">
                            LEVEL 1. BÌNH DÂN HỌC VỤ
                        </div>
                        <div class="row" style="padding:10px 30px;">
                            Tự tin đọc chuẩn IPA. Phát âm chuẩn mọi từ tiếng Anh dựa vào phiên âm có sẵn, quy trình 4 bước đọc một từ tiếng Anh, giúp người học nói tiếng Anh biết mình đang đọc đúng hay sai, tại sao như vậy                    
                        </div>
                    </div>
                        <div class="col col-lg-6 col-md-6"></div>
                </div>

                <div class="row" style="margin-top:20px;padding:0px 60px">
                    <div class="col col-lg-6 col-md-6"></div>
                    <div class="col col-lg-6 col-md-6 study-enl-bin" style="background-color:rgb(185, 222, 255); font-size: 18px;border:2px solid rgb(10, 87, 255);border-radius:20px;">
                        <div class="row" style="padding:10px 30px 0px;font-weight: bold;">
                            <img src="https://danhvantienganh.com/public/photos/1/2.png" alt="" style="width: 50px;height: 50px;;;margin-right: 16px;">
                            LEVEL 2. QUY TẮC ĐÁNH VẦN TIẾNG ANH
                        </div>
                        <div class="row" style="padding:10px 30px;">
                            Quy luật Đánh vần giúp người học viết phiên âm & nói chuẩn hàng ngàn triệu từ không cần tra từ điển. Đây là hệ thống quy luật logic lần đầu tiên có trên thế giới.                   
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top:20px;padding:0px 60px">
                    <div class="col col-lg-6 col-md-6 study-enl-bin" style="background-color:rgb(185, 222, 255); font-size: 18px;border:2px solid rgb(255, 106, 0);border-radius:20px;">
                        <div class="row" style="padding:10px 30px 0px;font-weight: bold;">
                            <img src="https://danhvantienganh.com/public/photos/1/4.png" alt="" style="width: 50px;height: 50px;;;margin-right: 16px;">
                            LEVEL 3. NÓI TIẾNG ANH THEO QUY LUẬT
                        </div>
                        <div class="row" style="padding:10px 30px;">
                        Hoàn thiện hệ thống quy tắc 3 bước để nói đúng ngữ điệu mọi câu tiếng Anh, không cần phải âm thanh, không cần bắt chước. Tự đọc và viết phiên âm những từ tiếng Anh dài và khó
                        </div>
                    </div>
                    <div class="col col-lg-6 col-md-6"></div>
                </div> 
                <div class="row" style="margin-top:20px;padding:0px 60px;padding-bottom:60px">
                    <div class="col col-lg-6 col-md-6"></div>
                    <div class="col col-lg-6 col-md-6 study-enl-bin" style="background-color:rgb(185, 222, 255); font-size: 18px;border:2px solid red;border-radius:20px;">
                        <div class="row" style="padding:10px 30px 0px;font-weight: bold;">
                            <img src="https://danhvantienganh.com/public/photos/1/3.png" alt="" style="width: 50px;height: 50px;;;margin-right: 16px;">
                            LEVEL 4. THUYẾT TRÌNH TALKITOUT
                        </div>
                        <div class="row" style="padding:10px 30px;">
                        Tự thuyết trình tiếng Anh mọi chủ đề, mọi lĩnh vực với kỹ thuật Talkitout. Bao gồm nói câu có ngữ điệu, nối âm và ngắt câu như diễn giả
                        </div>
                    </div>
                </div>
            </div>
         </div>
        

       
    </div>


    <!-- Footer -->
    <div class="row footer" style="color: #fff;background-color:#333333">
        <div class="col col-lg-2 col-md-2" style="text-align:center;">
            <img style="width:150px;height:150px;margin-left:20px;margin-top:10px" src="https://hcmue.edu.vn/images/lOGO/CNTT.png" 
            alt="footer" style="width: 180px; margin-right: 180px;">
        </div>

        <div class="col col-lg-6 col-md-6" style="padding-left:150px;padding-right:80px;padding-top:0px;padding-bottom:14px;font-size:18px;">
            <h2 style="font-weight: bold;">Về chúng tôi</h2> 
            <p style="text-align: justify;"><i class="fa-solid fa-graduation-cap" style="margin-right:8px;font-size:24px"></i>Sinh viên Trường Đại học Sư phạm Thành phố Hồ Chí Minh</p>
            <p><i class="fa-solid fa-code" style="margin-right:8px;font-size:24px"></i>Ngành Công nghệ thông tin</p>
            <a href="http://localhost:81/profile_slick/profile.php" style="color: #fff;cursor:pointer;"><i class="fa-solid fa-users-line" style="margin-right:8px;font-size:24px"></i>Thành viên nhóm</a>
        </div>

        <div class="col col-lg-4 col-md-4" style="padding:20px 0px;text-align:center">
            <div class="row"><h2 style="font-weight: bold;">Liên lạc</h2></div>
            <div class="row contact-bin">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-solid fa-envelope"></i>
                <i class="fa-brands fa-github"></i>
                <i class="fa-brands fa-linkedin"></i>
            </div>
        </div>
    </div>
</body>
</html>
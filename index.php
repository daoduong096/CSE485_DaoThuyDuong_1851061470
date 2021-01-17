

</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/skins/pink.css">
  <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>CV</title>
</head>
<body>


<?php 
    session_start();
    if(!isset($_SESSION["user"])) {
      header("location:login.php");
    }
?>




  <div class="preloader">
    <div class="loader">

    </div>
  </div>

<div class="main-container">
        
      <div class="aside">
        <button class="nav-toggler">
          <i class="fa fa-bars"></i>
        </button>
          <div class="aside-inner">
            <div class="logo">
              <a href="login.php">Đào Dương</a>
            </div>
            <div class="nav__close">
              <i class="fa fa-times" aria-hidden="true"></i>
            </div>

            <ul class="nav">
              <li><a href="#home"><i class="fa fa-home" aria-hidden="true"></i>Trang chủ</a></li><br>
              <li><a href="#about"><i class="fa fa-address-book" aria-hidden="true"></i>Thông tin cá nhân</a></li><br>
              <li><a href="#experience "><i class="fa fa-align-justify" aria-hidden="true"></i>Kinh nghiệm</a></li><br>
              <li><a href="#blog"><i class="fa fa-th" aria-hidden="true"></i>Blog</a></li><br>
              <li><a href="#contact"><i class="fa fa-address-card-o" aria-hidden="true"></i>Liên hệ</a></li><br> 
              <li><a href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Đăng xuất</a></li>
            </ul> 
            <div class="copyright-text">
              &copy; 2021 My CV 
            </div>
          </div>
        </div>
        <div class="main-content">
          <section class="home section active" id="home">
            <div class="container">
              <div class="intro">
                <img src="images/logo.jpg" alt="profile" width="150" height="150" class="shadow-dark">
                <h1>Đào Thùy Dương</h1>
                
                <div class="social-links">
                  <a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                  <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                  <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>
          </section>
          <!-- About -->
          <section class="about section" id="about">
            <div class="container">
              <div class="row">
                <div class="section-title padd-15">
                  <h2>Thông tin cá nhân</h2>
                </div>
              </div>
              <div class="row">
                <div class="about-content padd-15">
                  <div class="row">
                    <div class="about-text padd-15">
                      <h3> Đào Thùy Dương. <span> Web Developer</span></h3>
                      <p> Xin chào mọi người! Tôi là Dương, 20 tuổi, hiện đang là sinh viên năm 3 khoa CNTT trường Đại học Thủy Lợi</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="personal-info padd-15">
                      <div class="row">
                          <div class="info-iteam padd-15">
                            <p>Ngày sinh: <span>09/06/2000</span></p>
                          </div>
                          <div class="info-iteam padd-15">
                            <p>Tuổi: <span>20</span></p>
                          </div>
                          
                          <div class="info-iteam padd-15">
                            <p>Email: <span>daoduong601@gmail.com</span></p>
                          </div>
                          <div class="info-iteam padd-15">
                            <p>Số điện thoại: <span>(84) 523454502</span></p>
                          </div>
                        </div>
                      </div>
                    <div class="skills padd-15">
                      <div class="row">
                      <h3 class="title">Kỹ năng</h3>
                        <div class="skills-item padd-15">
                          <h5>Javascript</h5>
                          <div class="progress">
                            <div class="progress-in" style="width: 60%"></div>
                            <div class="skills-percent">60%</div>
                          </div>
                        </div>
                        <div class="skills-item padd-15">
                          <h5>C#</h5>
                          <div class="progress">
                            <div class="progress-in" style="width: 70%"></div>
                            <div class="skills-percent">70%</div>
                          </div>
                        </div>
                        <div class="skills-item padd-15">
                          <h5>Bootstrap</h5>
                          <div class="progress">
                            <div class="progress-in" style="width: 50%"></div>
                            <div class="skills-percent">50%</div>
                          </div>
                        </div>
                        <div class="skills-item padd-15">
                          <h5>HTML, CSS</h5>
                          <div class="progress">
                            <div class="progress-in" style="width: 50%"></div>
                            <div class="skills-percent">50%</div>
                          </div>
                        </div>
                        <div class="skills-item padd-15">
                          <h5>Làm việc nhóm</h5>
                          <div class="progress">
                            <div class="progress-in" style="width: 80%"></div>
                            <div class="skills-percent">80%</div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="education padd-15">
                      <h3 class="title">Học vấn</h3>
                      <div class="row">
                        <div class="timeline-box padd-15">
                          <div class="timeline shadow-dark">
                            <h6 class="timeline-date">
                            <i class="fa fa-calendar" aria-hidden="true"></i>2018 - đến nay
                            </h6>
                            <h4 class="timeline-title">
                              Đại học Thủy Lợi
                            </h4>
                            <p class="timeline-text">
                              Tốt nghiệp loại: <br>
                              Điểm trung bình: 
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <div class="target padd-15">
                        <h3 class="title">Mục tiêu nghề nghiệp</h3>
                        <div class="row">
                        <div class="timeline-box">
                          <div class="timeline shadow-dark">
                            <p class="timeline-text">
                            <i class="fa fa-minus" aria-hidden="true"></i>
                             Áp dụng kiến thức đã học để<br> trở thành lập trình viên chuyên nghiệp <br>
                            </p>
                            <p>
                            <i class="fa fa-minus" aria-hidden="true"></i>
                            Gắn bó lâu dài cùng phát triển với công ty.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>     
            </div>
      </section>
      <!-- experience -->
      <section class="experience section" id="experience">
        <div class="container">
          <div class="row">
            <div class="section-title padd-15">
              <h2>Kinh nghiệm làm việc</h2>
            </div>
          </div>
          <div class="stay-time light-violet">
            <p>
              9/2020
              <br /> -<br/>
              2/2021
            </p>
          </div>
          <div class="comments" data-scoll-reveal="enter from the right after .5s">
            <li><span class="bold">Project</span>: Quản lý cửa hàng lưu niệm</li>
            <li><span class="bold">Mô tả</span>:Xây dựng mô hình quản lý cửa hàng và lưu thông tin vào cơ sở dữ liệu.</li>
            <li><span class="bold">Thành viên</span>:2</li>
          </div>
        </div>
      </section> 
      
      <!-- Blog  -->
      <section class="blog section " id="blog">
        <div class="container">
          <div class="row">
            <div class="section-title padd-15">
              <h2>Blog</h2>
            </div>
          </div>
          <div class="row">
            <div class="blog-item padd-15">
              <div class="blog-item-inner shadow-dark">
                <div class="blog-img">
                  <img src="images/8.jpg" alt="blog">
                  <div class="blog-date">
                    10/12/2020
                  </div>
                </div>
                <div class="blog-info">
                  <h4 class="blog-title">Omnifood</h4>
                  <p class="blog-descriptiion">Dịch vụ giao đồ ăn nhanh</p>
                  <p class="blog-tags">Tags: HTML, CSS</p>
                  
                </div>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-google" aria-hidden="true"></i></a>
              </div>
            </div>
            <div class="blog-item padd-15">
              <div class="blog-item-inner shadow-dark">
                <div class="blog-img">
                  <img src="images/7.jpg" alt="blog">
                  <div class="blog-date">
                    12/12/2020
                  </div>
                </div>
                <div class="blog-info">
                  <h4 class="blog-title">Drink</h4>
                  <p class="blog-descriptiion">Cafe</p>
                  <p class="blog-tags">Tags: HTML, Javascript</p>
                  
                </div>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-google" aria-hidden="true"></i></a>
              </div>
            </div>
            <div class="blog-item padd-15">
              <div class="blog-item-inner shadow-dark">
                <div class="blog-img">
                  <img src="images/d.jpg" alt="blog">
                  <div class="blog-date">
                    10/12/2020
                  </div>
                </div>
                <div class="blog-info">
                  <h4 class="blog-title">Book</h4>
                  <p class="blog-descriptiion">Viết lách</p>
                  <p class="blog-tags">Tags:HTML, CSS</p>                 
                </div>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-google" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
        </div>
      </section> 
<!-- contact section -->
      <section class="contact section" id="contact">
        <div class="container">
          <div class="row">
            <div class="section-title padd-15">
              <h2>Liên hệ</h2>
            </div>
          </div>
          <div class="row">
            <div class="contact-info-item padd-15">
              <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
              <h4>SDT</h4>
              <p>(84) 523454502</p>
            </div>
            <div class="contact-info-item padd-15">
              <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
              <h4>Địa chỉ</h4>
              <p>175 Tây Sơn, Đống Đa, Hà Nội</p>
            </div>
            <div class="contact-info-item padd-15">
              <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
              <h4>Email</h4>
              <p>daoduong601@gmail.com</p>
            </div>
          </div>
          <div class="row">
            <div class="contact-form padd-15">
              <div class="row">
                <div class="form-item col-6 padd-15">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Your Name...">
                  </div>
                </div>
                <div class="form-item col-6 padd-15">
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder="Your Email...">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="form-item col-12 padd-15">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Your Subject...">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="form-item col-12 padd-15">
                  <div class="form-group">
                      <textarea class="form-control" placeholder="Your Message..."></textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class=" col-12 padd-15">
                  <a href="index.php"><button type="submit" class="btn">Sent Message </button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> 
    </div>
  </div>
<script src="js/script.js"></script>
</body>
</html>
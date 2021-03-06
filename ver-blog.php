<?php
require_once 'controller/dbc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Blog - DentOS</title>
  <meta content="DentOS" name="description">
  <meta content="DentOS" name="keywords">
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container-fluid">
      <div class="row justify-content-center align-items-center">
        <div class="col-xl-11 d-flex align-items-center justify-content-between">
         <a href="index.php" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid rounded-top"></a>
         <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link  active" href="index.php">Blog</a></li>
            <li><a class="nav-link" href="login.php">Iniciar sesión</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
      </div>
    </div>
  </div>
</header><!-- End Header -->
<main id="main">
  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
      <ol>
        <li><a href="index.html">Home</a></li>
        <li><a href="blog.html">Blog</a></li>
      </ol>
      <h2>Blog</h2>
    </div>
  </section><!-- End Breadcrumbs -->
  <!-- ======= Blog Single Section ======= -->
  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">
      <!-- Datos del blog -->
      <?php
      if(isset($_GET['/']) && !empty($_GET['/']))
      {
        $id = $_GET['/'];
        $stmt_edit = $DB->prepare('SELECT * FROM blog WHERE id =:uid');
        $stmt_edit->execute(array(':uid'=>$id));
        $edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
        extract($edit_row);
      }
      ?>
      <div class="row">
        <div class="col-lg-8 entries">
          <article class="entry entry-single">
            <div class="entry-img">
              <img src="assets/img/blog/blog-<?php echo $id; ?>.jpg" alt="" class="img-fluid">
            </div>
            <h2 class="entry-title">
              <?php echo $titulo;?>
            </h2>
            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a><?php echo $creado_por;?></a></li>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a><time datetime="<?php echo $fecha;?>"><?php echo $fecha;?></time></a></li>
                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a>8</a></li>
              </ul>
            </div>
            <div class="entry-content">
              <p>
                <?php echo $descripcion;?><br><br>
                <?php echo $descripcion;?>
              </p>
              <img src="assets/img/blog/blog-recent-<?php echo $id; ?>.jpg" class="img-fluid" alt="">
              <h3>Ut repellat blanditiis est dolore sunt dolorum quae.</h3>
              <p>
               <?php echo $descripcion;?>
             </p>
           </div>
         </article><!-- End blog entry -->

         <div class="blog-comments">
          <h4 class="comments-count">8 Comments</h4>
          <div id="comment-1" class="comment">
            <div class="d-flex">
              <div class="comment-img"><img src="assets/img/blog/comments-1.jpg" alt=""></div>
              <div>
                <h5><a href="">Georgia Reader</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                <time datetime="2020-01-01">01 Jan, 2020</time>
                <p>
                  Et rerum totam nisi. Molestiae vel quam dolorum vel voluptatem et et. Est ad aut sapiente quis molestiae est qui cum soluta.
                  Vero aut rerum vel. Rerum quos laboriosam placeat ex qui. Sint qui facilis et.
                </p>
              </div>
            </div>
          </div><!-- End comment #1 -->

          <div id="comment-2" class="comment">
            <div class="d-flex">
              <div class="comment-img"><img src="assets/img/blog/comments-2.jpg" alt=""></div>
              <div>
                <h5><a href="">Aron Alvarado</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                <time datetime="2020-01-01">01 Jan, 2020</time>
                <p>
                  Ipsam tempora sequi voluptatem quis sapiente non. Autem itaque eveniet saepe. Officiis illo ut beatae.
                </p>
              </div>
            </div>

            <div id="comment-reply-1" class="comment comment-reply">
              <div class="d-flex">
                <div class="comment-img"><img src="assets/img/blog/comments-3.jpg" alt=""></div>
                <div>
                  <h5><a href="">Lynda Small</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                  <time datetime="2020-01-01">01 Jan, 2020</time>
                  <p>
                    Enim ipsa eum fugiat fuga repellat. Commodi quo quo dicta. Est ullam aspernatur ut vitae quia mollitia id non. Qui ad quas nostrum rerum sed necessitatibus aut est. Eum officiis sed repellat maxime vero nisi natus. Amet nesciunt nesciunt qui illum omnis est et dolor recusandae.

                    Recusandae sit ad aut impedit et. Ipsa labore dolor impedit et natus in porro aut. Magnam qui cum. Illo similique occaecati nihil modi eligendi. Pariatur distinctio labore omnis incidunt et illum. Expedita et dignissimos distinctio laborum minima fugiat.

                    Libero corporis qui. Nam illo odio beatae enim ducimus. Harum reiciendis error dolorum non autem quisquam vero rerum neque.
                  </p>
                </div>
              </div>

              <div id="comment-reply-2" class="comment comment-reply">
                <div class="d-flex">
                  <div class="comment-img"><img src="assets/img/blog/comments-4.jpg" alt=""></div>
                  <div>
                    <h5><a href="">Sianna Ramsay</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                    <time datetime="2020-01-01">01 Jan, 2020</time>
                    <p>
                      Et dignissimos impedit nulla et quo distinctio ex nemo. Omnis quia dolores cupiditate et. Ut unde qui eligendi sapiente omnis ullam. Placeat porro est commodi est officiis voluptas repellat quisquam possimus. Perferendis id consectetur necessitatibus.
                    </p>
                  </div>
                </div>

              </div><!-- End comment reply #2-->

            </div><!-- End comment reply #1-->

          </div><!-- End comment #2-->

          <div id="comment-3" class="comment">
            <div class="d-flex">
              <div class="comment-img"><img src="assets/img/blog/comments-5.jpg" alt=""></div>
              <div>
                <h5><a href="">Nolan Davidson</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                <time datetime="2020-01-01">01 Jan, 2020</time>
                <p>
                  Distinctio nesciunt rerum reprehenderit sed. Iste omnis eius repellendus quia nihil ut accusantium tempore. Nesciunt expedita id dolor exercitationem aspernatur aut quam ut. Voluptatem est accusamus iste at.
                  Non aut et et esse qui sit modi neque. Exercitationem et eos aspernatur. Ea est consequuntur officia beatae ea aut eos soluta. Non qui dolorum voluptatibus et optio veniam. Quam officia sit nostrum dolorem.
                </p>
              </div>
            </div>

          </div><!-- End comment #3 -->

          <div id="comment-4" class="comment">
            <div class="d-flex">
              <div class="comment-img"><img src="assets/img/blog/comments-6.jpg" alt=""></div>
              <div>
                <h5><a href="">Kay Duggan</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                <time datetime="2020-01-01">01 Jan, 2020</time>
                <p>
                  Dolorem atque aut. Omnis doloremque blanditiis quia eum porro quis ut velit tempore. Cumque sed quia ut maxime. Est ad aut cum. Ut exercitationem non in fugiat.
                </p>
              </div>
            </div>
          </div><!-- End comment #4 -->
          <div class="reply-form">
            <h4>Leave a Reply</h4>
            <p>Your email address will not be published. Required fields are marked * </p>
            <form action="">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input name="name" type="text" class="form-control" placeholder="Your Name*">
                </div>
                <div class="col-md-6 form-group">
                  <input name="email" type="text" class="form-control" placeholder="Your Email*">
                </div>
              </div>
              <div class="row">
                <div class="col form-group">
                  <input name="website" type="text" class="form-control" placeholder="Your Website">
                </div>
              </div>
              <div class="row">
                <div class="col form-group">
                  <textarea name="comment" class="form-control" placeholder="Your Comment*"></textarea>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Post Comment</button>
            </form>
          </div>
        </div><!-- End blog comments -->
      </div><!-- End blog entries list -->

      <div class="col-lg-4">
        <div class="sidebar">
          <h3 class="sidebar-title">Search</h3>
          <div class="sidebar-item search-form">
            <form action="">
              <input type="text" class="form-control">
              <button type="submit"><i class="bi bi-search"></i></button>
            </form>
          </div><!-- End sidebar search formn-->
          <h3 class="sidebar-title">Categories</h3>
          <div class="sidebar-item categories">
            <ul>
              <?php foreach ($DB->query('SELECT DISTINCT categoria FROM blog') as $row ){  ?> 
                <li><a href="categoria.php?/=<?php echo $row['categoria']; ?>"><?php echo $row['categoria']; ?></a></li>
                <?php
              }
              ?>
            </ul>
          </div><!-- End sidebar categories-->
          <h3 class="sidebar-title">Posts recientes
          </h3>
          <div class="sidebar-item recent-posts">
           <?php foreach ($DB->query('SELECT * FROM blog LIMIT 6') as $row ){  ?> 
            <div class="post-item clearfix">
              <img src="assets/img/blog/blog-recent-<?php echo $row['id']; ?>.jpg" alt="">
              <h4><a href="ver-blog.php?/=<?php echo $row['id']; ?>"><?php echo $row['titulo']; ?></a></h4>
              <time datetime="<?php echo $row['fecha']; ?>"><?php echo $row['fecha']; ?></time>
            </div>
            <?php
          }
          ?>
        </div><!-- End sidebar recent posts-->
        <h3 class="sidebar-title">Tags</h3>
        <div class="sidebar-item tags">
          <ul>
            <li><a href="#">App</a></li>
            <li><a href="#">IT</a></li>
            <li><a href="#">Business</a></li>
            <li><a href="#">Mac</a></li>
            <li><a href="#">Design</a></li>
            <li><a href="#">Office</a></li>
            <li><a href="#">Creative</a></li>
            <li><a href="#">Studio</a></li>
            <li><a href="#">Smart</a></li>
            <li><a href="#">Tips</a></li>
            <li><a href="#">Marketing</a></li>
          </ul>
        </div><!-- End sidebar tags-->
      </div><!-- End sidebar -->
    </div><!-- End blog sidebar -->
  </div>
</div>
</section><!-- End Blog Single Section -->
</main>

<footer id="footer">
  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong>Jefferson DM</strong>
    </div>
  </div>
</footer>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<script src="assets/vendor/purecounter/purecounter.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/js/main.js"></script>

</body>

</html>
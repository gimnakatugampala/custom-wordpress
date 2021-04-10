
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.3/examples/blog/">
    <title>Blog Template for Bootstrap</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url');?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

  </head>
  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="#">Home</a>
          <a class="blog-nav-item" href="#">New features</a>
          <a class="blog-nav-item" href="#">Press</a>
          <a class="blog-nav-item" href="#">New hires</a>
          <a class="blog-nav-item" href="#">About</a>
        </nav>
      </div>
    </div>


    <section class="showcase">
        <div class="container">
            <h1>Custom Bootstrap Wordpress Theme</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis sint vero velit consectetur a consequuntur placeat porro? Corrupti illo exercitationem alias aut debitis, doloribus nulla repellat ut, soluta maxime delectus.</p>

            <a href="#" class="btn btn-primary btn-lg">Read More</a>
        </div>
    </section>

    <section class="boxes">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="box">
                        <?php if(is_active_sidebar('box1')) :?>
                            <?php dynamic_sidebar('box1');?>
                            <?php endif;?>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="box">
                    <?php if(is_active_sidebar('box2')) :?>
                            <?php dynamic_sidebar('box2');?>
                            <?php endif;?>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="box">
                    <?php if(is_active_sidebar('box3')) :?>
                            <?php dynamic_sidebar('box3');?>
                            <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
    </section>

  

    <footer class="blog-footer">
      <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>

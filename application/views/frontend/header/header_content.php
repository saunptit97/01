  <header class="masthead">
            <div class="header-top">
                <div class="container">
               
               <!--   <div class="side-menu-trigger"><span class="trigger-icon"><i class="icon_menu"></i></span></div>  --><!-- /.side-menu-trigger -->
                 <!--    <a class="navbar-brand hidden-xs" href="<?php echo base_url(); ?>./"><img src="<?php echo base_url(); ?>public/images/logo.png" alt="Site Logo"></a> -->
                   <!--  <div class="menu-search">
                        <div class="form-trigger"><i class="icon_search"></i></div>
                        <form action="#">
                            <input type="text" name="search" id="menu-search" placeholder="Search here..">
                        </form>
                    </div> -->

                    <nav class="sidebar-menu">
                        <a class="navbar-brand" href="<?php echo base_url(); ?>./"><img src="<?php echo base_url(); ?>public/images/logo2.png" alt="Site Logo"></a>
                        <span class="menu-close"><i class="icon_close"></i></span>

                        <ul class="nav navbar-nav">
                            <li class="menu-item menu-item-has-children active">
                                <a href="<?php echo base_url(); ?>#">Công nghệ</a>
                            </li>

                            <li class="menu-item menu-item-has-children">
                                <a href="<?php echo base_url(); ?>#">Lập trình</a>
                                <ul class="sub-menu children">
                                    <li><a href="<?php echo base_url(); ?>standard">Post Standard</a></li>
                                    <li><a href="<?php echo base_url(); ?>sidebar">Post Left Sidebar</a></li>
                                    <li><a href="<?php echo base_url(); ?>image">Post Header Image</a></li>
                                    <li><a href="<?php echo base_url(); ?>side-image">Post Side Image</a></li>
                                    <li><a href="<?php echo base_url(); ?>gallery">Post Gallery</a></li>
                                    <li><a href="<?php echo base_url(); ?>video">Post Video</a></li>
                                    <li><a href="<?php echo base_url(); ?>audio">Post Audio</a></li>
                                    <li><a href="<?php echo base_url(); ?>quote">Post Quote</a></li>
                                </ul>
                            </li>
                            <li class="menu-item"><a href="<?php echo base_url(); ?>categories">Categories</a></li>
                            <li class="menu-item"><a href="<?php echo base_url(); ?>about">About</a></li>
                            <li class="menu-item"><a href="<?php echo base_url(); ?>contact">Contact</a></li>

                        </ul><!-- /.navbar-nav -->

                        <div class="menu-social">
                            <a href="<?php echo base_url(); ?>#"><i class="fa fa-twitter"></i></a>
                            <a href="<?php echo base_url(); ?>#"><i class="fa fa-pinterest-p"></i></a>
                            <a href="<?php echo base_url(); ?>#"><i class="fa fa-facebook"></i></a>
                            <a href="<?php echo base_url(); ?>#"><i class="fa fa-instagram"></i></a>
                            <a href="<?php echo base_url(); ?>#"><i class="fa fa-youtube"></i></a>
                        </div><!-- /.menu-social -->
                    </nav><!-- /.sidebar-menu -->
                </div><!-- /.container -->
            </div><!-- /.header-top -->

            <div class="header-bottom">
                <div class="container">
                    <nav class="navbar navbar-default">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
                                <i class="fa fa-bars"></i>
                            </button>
                            <!--LOGO-->
                        </div>

                        <div id="main-menu" class="collapse navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li class="menu-item">
                                    <a href="<?php echo base_url(); ?>#">Công nghệ </a>
                                </li>

                                <li class="menu-item menu-item-has-children">
                                    <a href="<?php echo base_url(); ?>#">Lập trình <i class="fa fa-angle-down"></i></a>
                                    <ul class="sub-menu children" style="padding: 0" >
                                        <li><a href="<?php echo base_url(); ?>standard">Tất cả</a></li>
                                        <li><a href="<?php echo base_url(); ?>sidebar">Lập trình ứng dụng</a></li>
                                        <li><a href="<?php echo base_url(); ?>image">Lập trình web</a></li>
                                    </ul>
                                </li>
                                 <li class="menu-item"><a href="<?php echo base_url(); ?>categories">Sự kiện</a></li>
                                <li class="menu-item"><a href="<?php echo base_url(); ?>categories">Tools & Tips</a></li>
                                <li class="menu-item"><a href="<?php echo base_url(); ?>about">Chuyên gia nói</a></li>
                                <li class="menu-item"><a href="<?php echo base_url(); ?>contact">Tâm sự code</a></li>
                                   <li class="menu-item search"><div class="menu-search">
                                        <div class="form-trigger"><i class="icon_search"></i></div>
                                            <form action="#">
                                                <input type="text" name="search" id="menu-search" placeholder="Search here..">
                                            </form>
                                        </div>
                                    </li>
                            </ul><!-- /.navbar-nav -->
                        </div><!-- /.navbar-collapse -->
                    </nav>
                </div><!-- /.container -->
            </div><!-- /.header-bottom -->
        </header><!-- /.masthead -->
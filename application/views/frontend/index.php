

<!doctype html>
<html class="no-js" lang="">
<?php $this->load->view('frontend/header/header'); ?>


<body>

    <div class="overlay-wrapper">
        <?php $this->load->view('frontend/header/header_content'); ?>
        <?php 
        // if($content == '/frontend/pages/home'){
        //     $this->load->view('frontend/header/slider'); 
        // }
        ?>


        <section class="main-content">
            <div class="padding">
                <div class="container">
                    <div class="row">
                        <?php $this->load->view($content) ?>
                        <?php if( $content != '/frontend/pages/categories'){
                          $this->load->view('frontend/banner/right');  
                        }  ?>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.padding -->
    </section><!-- /.main-content -->



    <?php $this->load->view('frontend/footer/footer') ?>

</div><!-- /.overlay -->

<script src="<?php echo base_url() ?>public/assets/js/plugins.js"></script>
<script src="<?php echo base_url() ?>public/assets/js/main.js"></script>
</body>
</html>

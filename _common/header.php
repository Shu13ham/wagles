<header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
    <div class="logo-menu-wrapper container d-flex align-items-center">
        <div class="logo" data-aos="fade-right"> 
            <a href="<?php echo $BASE_URL ?>"><img src="/_assets/img/favicon/favicon.png" alt="Wagles Goa Real Estate Builder & Developer" class="img-fluid" width="80px"></a>
            <div style="display:none">
                <h1>Wagles Real Estate Developers Goa</h1>
            </div>
        </div>
        <nav id="navbar" class="navbar" data-aos="fade-left">
            <ul>
                <li><a class="nav-link scrollto <?php if($page=="home"){?>active<?php }?>" href="<?php echo $BASE_URL ?>/">HOME</a></li>
                <li><a class="nav-link scrollto" href="<?php echo $BASE_URL ?>/#about">ABOUT</a></li>
                <li><a class="nav-link scrollto <?php if($page=="projects"){?>active<?php }?>" href="<?php echo $BASE_URL ?>/projects/">PROJECTS</a></li>
                <li><a class="nav-link scrollto <?php if($page=="gallery"){?>active<?php }?>" href="<?php echo $BASE_URL ?>/gallery/">GALLERY</a></li>
                <li><a class="nav-link scrollto <?php if($page=="contact"){?>active<?php }?>" href="<?php echo $BASE_URL ?>/contact/">CONTACT</a></li>
            </ul>
            <i class="d-lg-none d-block fa fa-bars mobile-nav-toggle"></i>
        </nav>
        
    </div>
</header>
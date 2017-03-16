<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en-gb" class="no-js">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--[if lt IE 9]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <title><?php echo ($fit["cpm"]); ?> 优宝网</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if lte IE 8]>
    <script type="text/javascript" src="http://explorercanvas.googlecode.com/svn/trunk/excanvas.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="/Public/structure/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/Public/structure/css/isotope.css" media="screen" />
    <link rel="stylesheet" href="/Public/structure/js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/Public/structure/css/da-slider.css" />
    <!-- Owl Carousel Assets -->
    <link href="/Public/structure/js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="/Public/structure/css/styles.css" />
    <!-- Font Awesome -->
    <link href="/Public/structure/font/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
<header class="header">
    <div class="container">
        <nav class="navbar navbar-inverse" role="navigation">
            <div class="navbar-header">
                <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="/index.php/home/index" class="navbar-brand scroll-top logo"><b>优宝选课网</b></a>
            </div>
            <!--/.navbar-header-->
            <div id="main-nav" class="collapse navbar-collapse">
                <ul class="nav navbar-nav" id="mainNav">
                    <li class="active"><a href="#home" class="scroll-link">课程简介</a></li>
                    <li><a href="#aboutUs" class="scroll-link">课程信息</a></li>
                    <li><a href="#skills" class="scroll-link">课程特色</a></li>
                    <li><a href="#experience" class="scroll-link">课程历史</a></li>
                    <li><a href="#portfolio" class="scroll-link">实拍图片</a></li>
                    <li><a href="#contactUs" class="scroll-link">咨询预订</a></li>
                </ul>
            </div>
            <!--/.navbar-collapse-->
        </nav>
        <!--/.navbar-->
    </div>
    <!--/.container-->
</header>
<!--/.header-->
<div id="#top"></div>
<section id="home">
    <div class="banner-container">
        <img src="/Public/structure/images/banner-bg.jpg" alt="banner" />
        <div class="container banner-content">
            <div id="da-slider" class="da-slider">
                <div class="da-slide">
                    <h2><?php echo ($fit["xcbta"]); ?></h2>
                    <p><?php echo ($fit["xcya"]); ?></p>
                    <div class="da-img"></div>
                </div>
                <div class="da-slide">
                    <h2><?php echo ($fit["xcbtb"]); ?></h2>
                    <p><?php echo ($fit["xcyb"]); ?></p>
                    <div class="da-img"></div>
                </div>
                <div class="da-slide">
                    <h2><?php echo ($fit["xcbtc"]); ?></h2>
                    <p><?php echo ($fit["xcyc"]); ?></p>
                    <div class="da-img"></div>
                </div>

                <!--  <nav class="da-arrows">
                        <span class="da-arrows-prev"></span>
                        <span class="da-arrows-next"></span>
                    </nav> -->
            </div>
        </div>
    </div>
</section>

<section id="introText">
    <div class="container">
        <div class="text-center">
            <h1><?php echo ($fit["cpm"]); ?></h1>
            <p><?php echo ($fit["cjs"]); ?></p>
        </div>
    </div>

</section>

<!--About-->
<section id="aboutUs" class="secPad">
    <div class="container">
        <div class="heading text-center">
            <!-- Heading -->
            <h2>课程费用：<?php echo ($fit["fy"]); ?> 元</h2>
            <p><?php echo ($fit["fysm"]); ?></p>
        </div>
        <div class="row">
            <!-- item -->
            <div class="col-md-4 text-center tileBox">
                <div class="txtHead"> <i class="fa fa-desktop"></i>
                    <h3>适宜 <span class="id-color">人群</span></h3></div>
                <p><?php echo ($fit["mbrq"]); ?></p>
            </div>
            <!-- end: -->

            <!-- item -->
            <div class="col-md-4 text-center tileBox">
                <div class="txtHead"><i class="fa fa-css3"></i>
                    <h3>培训 <span class="id-color">时间</span></h3></div>
                <p><?php echo ($fit["sjsm"]); ?></p>
            </div>
            <!-- end: -->

            <!-- item -->
            <div class="col-md-4 text-center tileBox">
                <div class="txtHead"><i class="fa fa-lightbulb-o"></i>
                    <h3>上课 <span class="id-color">地点</span></h3></div>
                <p><?php echo ($fit["ddsm"]); ?></p>
            </div>
            <!-- end: -->
        </div>
    </div>
</section>

<!--ydl-->
<section id="quote" class="bg-parlex">
    <div class="parlex-back">
        <div class="container secPad text-center">
            <h2>立即预定即享</h2><h3><?php echo ($fit["ydl"]); ?></h3>
        </div>
        <!--/.container-->
    </div>
</section>

<!--Skills-->
<section id="skills" class="secPad white">
    <div class="container">
        <div class="heading text-center">
            <!-- Heading -->
            <h2><strong>本套培训课程的特色</strong></h2>
            <p>现在选择的理由</p>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <h2><?php echo ($fit["tdbta"]); ?></h2>
                <p class="mrgBtm20">
                    <?php echo ($fit["tdjsa"]); ?>
                </p>
            </div>
            <div class="col-sm-6">
                <h2><?php echo ($fit["tdbtb"]); ?></h2>
                <p class="mrgBtm20">
                    <?php echo ($fit["tdjsb"]); ?>
                </p>
            </div>
        </div>
    </div>
</section>


<!--Experience-->
<section id="experience" class="secPad">
    <div class="container">
        <div class="heading text-center">
            <!-- Heading -->
            <h2>本套培训课程历史回顾</h2>
            <p><?php echo ($fit["cpm"]); ?></p>
        </div>
        <div id="timeline"><div class="row timeline-movement timeline-movement-top">
            <div class="timeline-badge timeline-future-movement">
                <a href="#">
                    <span class="glyphicon glyphicon-plus"></span>
                </a>
            </div>
            <div class="timeline-badge timeline-filter-movement">
                <a href="#">
                    <span class="glyphicon glyphicon-time"></span>
                </a>
            </div>

        </div>
            <div class="row timeline-movement">

                <div class="timeline-badge">
                    <span class="timeline-balloon-date-day"><?php echo ($fit["nfa"]); ?></span>
                    <span class="timeline-balloon-date-month">年</span>
                </div>


                <div class="col-sm-6  timeline-item">
                    <div class="row">
                        <div class="col-sm-11">
                            <div class="timeline-panel credits">
                                <ul class="timeline-panel-ul">
                                    <li><span class="importo"><?php echo ($fit["sja"]); ?></span></li>
                                    <li><span class="causale"><?php echo ($fit["sjjsa"]); ?></span> </li>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <!--due -->

            <div class="row timeline-movement">


                <div class="timeline-badge">
                    <span class="timeline-balloon-date-day"><?php echo ($fit["nfb"]); ?></span>
                    <span class="timeline-balloon-date-month">年</span>
                </div>

                <div class="col-sm-offset-6 col-sm-6  timeline-item">
                    <div class="row">
                        <div class="col-sm-offset-1 col-sm-11">
                            <div class="timeline-panel debits">
                                <ul class="timeline-panel-ul">
                                    <li><span class="importo"><?php echo ($fit["sjba"]); ?></span></li>
                                    <li><span class="causale"><?php echo ($fit["sjjsba"]); ?></span> </li>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-sm-6  timeline-item">
                    <div class="row">
                        <div class="col-sm-11">
                            <div class="timeline-panel credits">
                                <ul class="timeline-panel-ul">
                                    <li><span class="importo"><?php echo ($fit["sjbb"]); ?></span></li>
                                    <li><span class="causale"><?php echo ($fit["sjjsbb"]); ?></span> </li>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>

</section>

<!--Portfolio-->
<section id="portfolio" class="page-section section appear clearfix secPad">
    <div class="container">

        <div class="heading text-center">
            <!-- Heading -->
            <h2>实拍照片</h2>
            <p>良好的环境</p>
        </div>

        <div class="row">
            <nav id="filter" class="col-md-12 text-center">
                <ul>
                    <li><a href="#" class="current btn-theme btn-small" data-filter="*">全部</a></li>
                    <li><a href="#" class="btn-theme btn-small" data-filter=".webdesign">精选</a></li>
                    <li><a href="#" class="btn-theme btn-small" data-filter=".photography">最新</a></li>
                    <li><a href="#" class="btn-theme btn-small" data-filter=".print">情景</a></li>
                </ul>
            </nav>
            <div class="col-md-12">
                <div class="row">
                    <div class="portfolio-items isotopeWrapper clearfix" id="3">

                        <article class="col-sm-4 isotopeItem webdesign">
                            <div class="portfolio-item">
                                <img src="/Public/picture/private/<?php echo ($fit["cph"]); ?>1.jpg" alt="" /><!--这里加个分开的文件夹-->
                                <div class="portfolio-desc align-center">
                                    <div class="folio-info">
                                        <a href="/Public/picture/private/<?php echo ($fit["cph"]); ?>1.jpg" class="fancybox">
                                            <h5><?php echo ($fit["cpm"]); ?></h5>
                                            <i class="fa fa-arrows-alt fa-2x"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="col-sm-4 isotopeItem photography">
                            <div class="portfolio-item">
                                <img src="/Public/picture/private/<?php echo ($fit["cph"]); ?>2.jpg" alt="" />
                                <div class="portfolio-desc align-center">
                                    <div class="folio-info">
                                        <a href="/Public/picture/private/<?php echo ($fit["cph"]); ?>2.jpg" class="fancybox">
                                            <h5>良好的环境</h5>
                                            <i class="fa fa-arrows-alt fa-2x"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>


                        <article class="col-sm-4 isotopeItem photography">
                            <div class="portfolio-item">
                                <img src="/Public/picture/private/<?php echo ($fit["cph"]); ?>3.jpg" alt="" />
                                <div class="portfolio-desc align-center">
                                    <div class="folio-info">
                                        <a href="/Public/picture/private/<?php echo ($fit["cph"]); ?>3.jpg" class="fancybox">
                                            <h5><?php echo ($fit["xcbta"]); ?></h5>
                                            <i class="fa fa-arrows-alt fa-2x"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="col-sm-4 isotopeItem print">
                            <div class="portfolio-item">
                                <img src="/Public/picture/private/<?php echo ($fit["cph"]); ?>4.jpg" alt="" />
                                <div class="portfolio-desc align-center">
                                    <div class="folio-info">
                                        <a href="/Public/picture/private/<?php echo ($fit["cph"]); ?>4.jpg" class="fancybox">
                                            <h5>优秀的教学质量</h5>
                                            <i class="fa fa-arrows-alt fa-2x"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>


                        <article class="col-sm-4 isotopeItem webdesign">
                            <div class="portfolio-item">
                                <img src="/Public/picture/private/<?php echo ($fit["cph"]); ?>5.jpg" alt="" />
                                <div class="portfolio-desc align-center">
                                    <div class="folio-info">
                                        <a href="/Public/picture/private/<?php echo ($fit["cph"]); ?>5.jpg" class="fancybox">
                                            <h5><?php echo ($fit["cpm"]); ?></h5>
                                            <i class="fa fa-arrows-alt fa-2x"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="col-sm-4 isotopeItem print">
                            <div class="portfolio-item">
                                <img src="/Public/picture/private/<?php echo ($fit["cph"]); ?>6.jpg" alt="" />
                                <div class="portfolio-desc align-center">
                                    <div class="folio-info">
                                        <a href="/Public/picture/private/<?php echo ($fit["cph"]); ?>6.jpg" class="fancybox">
                                            <h5><?php echo ($fit["xcbtb"]); ?></h5>
                                            <i class="fa fa-arrows-alt fa-2x"></i></a>
                                    </div>
                                </div>
                            </div>
                        </article>


                    </div>

                </div>


            </div>
        </div>

    </div>
</section>


<!--Contact -->
<section id="contactUs" class="page-section secPad">
    <div class="container">

        <div class="row">
            <div class="heading text-center">
                <!-- Heading -->
                <h2>免费预约咨询</h2>
                <p>在下方填写您的手机号，我们将尽快在合适的时间与你联系</p>
            </div>
        </div>

        <div class="row mrgn30">
            <div class="col-sm-12 col-md-8">
                <!--NOTE: Update your email Id in "contact_me.php" file in order to receive emails from your contact form-->
                <form name="sentMessage" id="contactForm"  novalidate method="post" action="/index.php/Home/Detail/order">
                    <h3>您的电话号码：</h3>
                    <div class="control-group">
                        <div class="controls">
                            <input type="text" class="form-control" name="khdh"
                                   placeholder="YOUR PHONE NUMBER" id="name" required
                                   data-validation-required-message="请输入电话号码"
                                   maxlength="40" data-validation-maxlength-message="请检查输入内容" />
                            <input type="hidden" name="cph" value="<?php echo ($fit["cph"]); ?>">
                            <input type="hidden" name="cpm" value="<?php echo ($fit["cpm"]); ?>">
                            <p class="help-block">该机构将会给您回电，请留意手机</p>
                        </div>
                    </div>

                    <div id="success"> </div> <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary pull-right">立即预约</button><br />
                </form>
            </div>
            <div class="col-sm-12 col-md-2">
                <h4>机构地址:</h4>
                <address>
                    <?php echo ($fit["jgdz"]); ?><br/>
                </address>
                <h4>联系电话:</h4>
                <address>
                    <?php echo ($fit["lxdh"]); ?><br>
                </address>
            </div>
        </div>
    </div>
    <!--/.container-->
</section>



<footer>
    <div class="container">
        <div class="social text-center">
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-flickr"></i></a>
            <a href="#"><i class="fa fa-github"></i></a>
        </div>

        <div class="clear"></div>
        <!--CLEAR FLOATS-->
    </div>
</footer>
<!--/.page-section-->
<section class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                Copyright &copy; 2016.YOUBAO CO,LTD. All rights reserved.
            </div>
        </div>
        <!-- / .row -->
    </div>
</section>

<a href="#top" class="topHome"><i class="fa fa-chevron-up fa-2x"></i></a>

<!--[if lte IE 8]><script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script><![endif]-->
<script src="/Public/structure/js/modernizr-latest.js"></script>
<script src="/Public/structure/js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="/Public/structure/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/Public/structure/js/jquery.isotope.min.js" type="text/javascript"></script>
<script src="/Public/structure/js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
<script src="/Public/structure/js/jquery.nav.js" type="text/javascript"></script>
<script src="/Public/structure/js/jquery.cslider.js" type="text/javascript"></script>
<script src="contact/jqBootstrapValidation.js"></script>
<script src="contact/contact_me.js"></script>

<script src="/Public/structure/js/custom.js" type="text/javascript"></script>
<script src="/Public/structure/js/owl-carousel/owl.carousel.js"></script>
</body>
</html>
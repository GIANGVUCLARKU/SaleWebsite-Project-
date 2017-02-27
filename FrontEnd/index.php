<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vietpro Mobile Shop - Website Bán Hàng Trực Tuyến</title>
<link rel="stylesheet" type="text/css" href="css/trangchu.css" />

<link rel="stylesheet" type="text/css" href="css/slideshow.css" />

<?php
switch($_GET['page_layout']){
	case 'danhsachtimkiem': echo '<link rel="stylesheet" type="text/css" href="css/danhsachtimkiem.css" />';
	break;
	
	case 'gioithieu': echo '<link rel="stylesheet" type="text/css" href="css/gioithieu.css" />';
	break;
	
	case 'dichvu': echo '<link rel="stylesheet" type="text/css" href="css/dichvu.css" />';
	break;
	
	case 'lienhe': echo '<link rel="stylesheet" type="text/css" href="css/lienhe.css" />';
	break;
	
	case 'danhsachsp': echo '<link rel="stylesheet" type="text/css" href="css/danhsachsp.css" />';
	break;
	
	case 'chitietsp': echo '<link rel="stylesheet" type="text/css" href="css/chitietsp.css" />';
	break;
	
	case 'giohang': echo '<link rel="stylesheet" type="text/css" href="css/giohang.css" />';
	break;
	
	case 'muahang': echo '<link rel="stylesheet" type="text/css" href="css/muahang.css" />';
	break;
	
	case 'hoanthanh': echo '<link rel="stylesheet" type="text/css" href="css/hoanthanh.css" />';
	break;
}
?>

<script type="text/javascript" src="js/jquery-1.2.6.min.js"></script>

<script type="text/javascript">

/*** 
    Simple jQuery Slideshow Script
    Released by Jon Raasch (jonraasch.com) under FreeBSD license: free to use or modify, not responsible for anything, etc.  Please link out to me if you like it :)
***/

function slideSwitch() {
    var $active = $('#slideshow IMG.active');

    if ( $active.length == 0 ) $active = $('#slideshow IMG:last');

    // use this to pull the anh in the order they appear in the markup
    var $next =  $active.next().length ? $active.next()
        : $('#slideshow IMG:first');

    // uncomment the 3 lines below to pull the anh in random order
    
    // var $sibs  = $active.siblings();
    // var rndNum = Math.floor(Math.random() * $sibs.length );
    // var $next  = $( $sibs[ rndNum ] );


    $active.addClass('last-active');

    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 1000, function() {
            $active.removeClass('active last-active');
        });
}

$(function() {
    setInterval( "slideSwitch()", 2000 );
});

</script>

</head>
<body>

<!-- Wrapper -->
<div id="wrapper">
	<!-- Header -->
    <div id="header">
    	<div id="search-bar">
        	<?php include_once('chucnang/timkiem/timkiem.php');?>
            <?php include_once('chucnang/giohang/giohangcuaban.php');?>
        </div>
        <div id="main-bar">
        	<div id="logo"><a href="index.php"><img src="anh/logo.png" /></a></div>
            <div id="banner"></div>
        </div>
        <div id="navbar">
        	<?php include_once('chucnang/menungang/menungang.php');?>
        </div>
    </div>
    <!-- End Header -->
    <!-- Body -->
    <div id="body">
    	<!-- Left Column -->
    	<div id="l-col">
        	<?php include_once('chucnang/tuvan/tuvan.php');?>
            <?php include_once('chucnang/sanpham/danhmucsp.php');?>
            <?php include_once('chucnang/quangcao/quangcao.php');?>
            <?php include_once('chucnang/thongke/thongke.php');?>
            <!-- <div class="l-sidebar"></div> -->
        </div>
        <!-- End Left Column -->
        
        <!-- Right Column -->
        <div id="r-col">
        	<?php include_once('chucnang/slideshow/slideshow.php');?>
            
            <div id="main">
            	<?php
                switch($_GET['page_layout']){
					case 'danhsachtimkiem': include_once('chucnang/timkiem/danhsachtimkiem.php');
					break;
					
					case 'gioithieu': include_once('chucnang/menungang/gioithieu.php');
					break;
					
					case 'dichvu': include_once('chucnang/menungang/dichvu.php');
					break;
					
					case 'lienhe': include_once('chucnang/menungang/lienhe.php');
					break;
					
					case 'danhsachsp': include_once('chucnang/sanpham/danhsachsp.php');
					break;
					
					case 'chitietsp': include_once('chucnang/sanpham/chitietsp.php');
					break;
					
					case 'giohang': include_once('chucnang/giohang/giohang.php');
					break;
					
					case 'muahang': include_once('chucnang/giohang/muahang.php');
					break;
					
					case 'hoanthanh': include_once('chucnang/giohang/hoanthanh.php');
					break;
					
					default: include_once('chucnang/sanpham/sanphamdacbiet.php');
							 include_once('chucnang/sanpham/sanphammoi.php');
				}
				?>
            </div>
        </div>
        <!-- End Right Column -->
    	    
        <div id="brand"></div>
    </div>
    <!-- End Body -->
    <!-- Footer -->
    <div id="footer">
    	<div id="footer-info">
        	<h4>trung tâm tin học & công nghệ vietpro</h4>
            <p><span>Địa chỉ:</span> Tầng 5, Tòa nhà A4, Ngõ 120 Hoàng Quốc Việt - Cầu Giấy - Hà Nội | <span>Phone</span> (04) 3537 6697</p>
            <p><span>Trụ sở 2:</span> Số 25/178/71 Tây Sơn - Đống Đa - Hà Nội | <span>Hotline</span> 0968 511 155</p>
            <p>Bản quyền thuộc Vietpro Education</p>
        </div>
    </div>
    <!-- End Footer -->
</div>
<!-- End Wrapper -->

</body>
</html>

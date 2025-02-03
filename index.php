<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package EcoScrap
 */
?>

<?php
$TEMPLATE_PATH = parse_url(get_template_directory_uri(), PHP_URL_PATH);
$assets = $TEMPLATE_PATH . '/build/assets';
?>

<!doctype html>
<html class="notranslate" lang="en" translate="no">
<?php include_once 'src/php/header.php'; ?>

<body>
 <noscript>You need to enable JavaScript to run this app.</noscript>
 <div class="wrap" data-scroll-container>
  <header class="main-header">
   <div class="fix main-header__fix">
    <a class="logo" href="#" aria-label="Logo EcoScrap">
					<img loading="lazy" alt="" decoding="async" height="40" src="<?= $assets ?>/img/logo-1.svg" width="136" class="logo__img" /></a>
    <div class="group--nav-btn group">
     <i class="empty-flex-between"></i>
     <nav class="nav">
      <ul class="nav__ul">
       <li class="nav__li">
        <a class="nav__a" href="#"><span class="txt-animation">
          <span class="txt-animation__content" data-hover-txt="Services"><span
            class="txt-animation__content-style">Services</span></span></span>
								</a>
       </li>
       <li class="nav__li">
        <a class="nav__a" href="#"><span class="txt-animation"><span class="txt-animation__content"
           data-hover-txt="Transform"><span class="txt-animation__content-style">Transform</span></span></span></a>
       </li>
       <li class="nav__li">
        <a class="nav__a" href="#"><span class="txt-animation"><span class="txt-animation__content"
           data-hover-txt="Initiatives"><span class="txt-animation__content-style">Initiatives</span></span></span></a>
       </li>
       <li class="nav__li">
        <a class="nav__a" href="#"><span class="txt-animation"><span class="txt-animation__content"
           data-hover-txt="Clean World"><span class="txt-animation__content-style">Clean
            World</span></span></span></a>
       </li>
       <li class="nav__li">
        <a class="nav__a" href="#"><span class="txt-animation"><span class="txt-animation__content"
           data-hover-txt="Waste"><span class="txt-animation__content-style">Waste</span></span></span></a>
       </li>
       <li class="nav__li">
        <a class="nav__a" href="#"><span class="txt-animation"><span class="txt-animation__content"
           data-hover-txt="Testimonials"><span
            class="txt-animation__content-style">Testimonials</span></span></span></a>
       </li>
      </ul>
     </nav>
     <div class="group--btn-lang group">
      <div class="dd">
       <span class="dd__select"><svg class="icons icons--global" height="14.84" width="14.84" role="presentation">
         <use xlink:href="<?= $assets ?>/img/sprite-icons.svg#global"></use>
        </svg>
        <span class="dd__select-txt">English</span>
        <svg class="icons icons--arrow-down" height="6.23" width="12.06" role="presentation">
         <use xlink:href="<?= $assets ?>/img/sprite-icons.svg#arrow-down"></use>
        </svg></span>
       <div class="dd__container">
        <div class="dd__content">
         <ul class="list-2">
          <li class="list-2__it"><a class="list-2__a" href="#">French</a></li>
          <li class="list-2__it"><a class="list-2__a" href="#">German</a></li>
          <li class="list-2__it"><a class="list-2__a" href="#">Spanish</a></li>
         </ul>
        </div>
       </div>
      </div>
      <a class="txt-animation btn btn--fill btn--lg" href="#" aria-label="Sign Up" role="button"><span
        class="txt-animation__content" data-hover-txt="Sign Up" role="presentation"><span
         class="txt-animation__content-style">Sign Up</span></span></a>
     </div>
    </div>
   </div>
  </header>
  <section class="s-2">
   <div class="fix s-2__fix">
    <h1 class="main-title">
     Efficient <span class="select-txt">Scrap</span> Recycling Services Near You
    </h1>
    <p class="main-descr">
     Discover efficient scrap recycling services right in your neighborhood! We're
     dedicated to providing convenient and reliable scrap recycling solutions to
     businesses and individuals alike. Whether you have metal, paper, plastic, or
     electronics to recycle, our experienced team is here to help.
    </p>
    <div class="wrap--btn-s-2">
     <a class="btn btn--outline btn--xxl" href="#" aria-label="View Details" role="button"><span
       class="txt-animation"><span class="txt-animation__content" data-hover-txt="View Details"><span
         class="txt-animation__content-style">View Details</span>
       </span></span><span class="icon-box-2 icon-box-2--fill" role="presentation"><svg
        class="icons icons--arrow-top-right" height="11.43" width="15.1">
        <use xlink:href="<?= $assets ?>/img/sprite-icons.svg#arrow-top-right"></use>
       </svg></span></a>
    </div>
    <h2 class="s-t">6 Educational Programs</h2>
    <div class="js-sb-swiper swiper swiper--sb">
     <div class="swiper-wrapper">
      <div class="swiper-slide">
       <div class="sb">
        <svg class="sb__svg" height="318" width="256" viewBox="0 0 256 318" xmlns="http://www.w3.org/2000/svg">
         <clipPath class="sb__svg-clip" id="clip-1">
          <path
           d="m256,131v-40.5c0-15.46-12.54-28-28-28H28c-15.46,0-28,12.54-28,28v40.5c0,15.46,12.54,28,28,28-15.46,0-28,12.54-28,28v40.5c0,15.46,12.54,28,28,28h200c15.46,0,28-12.54,28-28v-40.5c0-15.46-12.54-28-28-28,15.46,0,28-12.54,28-28Z"
           class="sb__svg-path"></path>
         </clipPath>
         <switch class="sb__svg-switch">
          <foreignObject class="sb__svg-foreign-obj" height="318"
           requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility" width="256" x="0" y="0"><img
            loading="lazy" alt="" decoding="async" height="318" src="<?= $assets ?>/img/1-1x.jpg" width="256"
            class="sb__svg-img"
            srcset="<?= $assets ?>/img/1-1x.webp, <?= $assets ?>/img/1-2x.webp 2x, <?= $assets ?>/img/1-3x.webp 3x, <?= $assets ?>/img/1-4x.webp 4x"
            style="clip-path: url(#clip-1)" />
          </foreignObject>
          <image class="sb__svg-image" height="318" style="clip-path: url(#clip-1)" width="256"
           xlink:href="<?= $assets ?>/img/1-1x.jpg"></image>
         </switch>
        </svg>
       </div>
      </div>
      <div class="swiper-slide">
       <div class="sb">
        <svg class="sb__svg" height="318" width="256" viewBox="0 0 256 318" xmlns="http://www.w3.org/2000/svg">
         <clipPath class="sb__svg-clip" id="clip-2">
          <path
           d="m256,131v-40.5c0-15.46-12.54-28-28-28H28c-15.46,0-28,12.54-28,28v40.5c0,15.46,12.54,28,28,28-15.46,0-28,12.54-28,28v40.5c0,15.46,12.54,28,28,28h200c15.46,0,28-12.54,28-28v-40.5c0-15.46-12.54-28-28-28,15.46,0,28-12.54,28-28Z"
           class="sb__svg-path"></path>
         </clipPath>
         <switch class="sb__svg-switch">
          <foreignObject class="sb__svg-foreign-obj" height="318"
           requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility" width="256" x="0" y="0"><img
            loading="lazy" alt="" decoding="async" height="318" src="<?= $assets ?>/img/2-1x.jpg" width="256"
            class="sb__svg-img"
            srcset="<?= $assets ?>/img/2-1x.webp, <?= $assets ?>/img/2-2x.webp 2x, <?= $assets ?>/img/2-3x.webp 3x, <?= $assets ?>/img/2-4x2.webp 4x"
            style="clip-path: url(#clip-2)" />
          </foreignObject>
          <image class="sb__svg-image" height="318" style="clip-path: url(#clip-2)" width="256"
           xlink:href="<?= $assets ?>/img/2-1x.jpg"></image>
         </switch>
        </svg>
       </div>
      </div>
      <div class="swiper-slide">
       <div class="sb">
        <svg class="sb__svg" height="318" width="256" viewBox="0 0 256 318" xmlns="http://www.w3.org/2000/svg">
         <clipPath class="sb__svg-clip" id="clip-3">
          <path
           d="m256,131v-40.5c0-15.46-12.54-28-28-28H28c-15.46,0-28,12.54-28,28v40.5c0,15.46,12.54,28,28,28-15.46,0-28,12.54-28,28v40.5c0,15.46,12.54,28,28,28h200c15.46,0,28-12.54,28-28v-40.5c0-15.46-12.54-28-28-28,15.46,0,28-12.54,28-28Z"
           class="sb__svg-path"></path>
         </clipPath>
         <switch class="sb__svg-switch">
          <foreignObject class="sb__svg-foreign-obj" height="318"
           requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility" width="256" x="0" y="0"><img
            loading="lazy" alt="" decoding="async" height="318" src="<?= $assets ?>/img/3-1x.jpg" width="256"
            class="sb__svg-img"
            srcset="<?= $assets ?>/img/3-1x.webp, <?= $assets ?>/img/3-2x.webp 2x, <?= $assets ?>/img/3-3x.webp 3x, <?= $assets ?>/img/3-4x.webp 4x"
            style="clip-path: url(#clip-3)" />
          </foreignObject>
          <image class="sb__svg-image" height="318" style="clip-path: url(#clip-3)" width="256"
           xlink:href="<?= $assets ?>/img/3-1x.jpg"></image>
         </switch>
        </svg>
       </div>
      </div>
      <div class="swiper-slide">
       <div class="sb">
        <svg class="sb__svg" height="318" width="256" viewBox="0 0 256 318" xmlns="http://www.w3.org/2000/svg">
         <clipPath class="sb__svg-clip" id="clip-4">
          <path
           d="m256,131v-40.5c0-15.46-12.54-28-28-28H28c-15.46,0-28,12.54-28,28v40.5c0,15.46,12.54,28,28,28-15.46,0-28,12.54-28,28v40.5c0,15.46,12.54,28,28,28h200c15.46,0,28-12.54,28-28v-40.5c0-15.46-12.54-28-28-28,15.46,0,28-12.54,28-28Z"
           class="sb__svg-path"></path>
         </clipPath>
         <switch class="sb__svg-switch">
          <foreignObject class="sb__svg-foreign-obj" height="318"
           requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility" width="256" x="0" y="0"><img
            loading="lazy" alt="" decoding="async" height="318" src="<?= $assets ?>/img/4-1x.jpg" width="256"
            class="sb__svg-img"
            srcset="<?= $assets ?>/img/4-1x.webp, <?= $assets ?>/img/4-2x.webp 2x, <?= $assets ?>/img/4-3x.webp 3x, <?= $assets ?>/img/4-4x.webp 4x"
            style="clip-path: url(#clip-4)" />
          </foreignObject>
          <image class="sb__svg-image" height="318" style="clip-path: url(#clip-4)" width="256"
           xlink:href="<?= $assets ?>/img/4-1x.jpg"></image>
         </switch>
        </svg>
       </div>
      </div>
      <div class="swiper-slide">
       <div class="sb">
        <svg class="sb__svg" height="318" width="256" viewBox="0 0 256 318" xmlns="http://www.w3.org/2000/svg">
         <clipPath class="sb__svg-clip" id="clip-5">
          <path
           d="m256,131v-40.5c0-15.46-12.54-28-28-28H28c-15.46,0-28,12.54-28,28v40.5c0,15.46,12.54,28,28,28-15.46,0-28,12.54-28,28v40.5c0,15.46,12.54,28,28,28h200c15.46,0,28-12.54,28-28v-40.5c0-15.46-12.54-28-28-28,15.46,0,28-12.54,28-28Z"
           class="sb__svg-path"></path>
         </clipPath>
         <switch class="sb__svg-switch">
          <foreignObject class="sb__svg-foreign-obj" height="318"
           requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility" width="256" x="0" y="0"><img
            loading="lazy" alt="" decoding="async" height="318" src="<?= $assets ?>/img/5-1x.jpg" width="256"
            class="sb__svg-img"
            srcset="<?= $assets ?>/img/5-1x.webp, <?= $assets ?>/img/5-2x.webp 2x, <?= $assets ?>/img/5-3x.webp 3x, <?= $assets ?>/img/5-4x.webp 4x"
            style="clip-path: url(#clip-5)" />
          </foreignObject>
          <image class="sb__svg-image" height="318" style="clip-path: url(#clip-5)" width="256"
           xlink:href="<?= $assets ?>/img/5-1x.jpg"></image>
         </switch>
        </svg>
       </div>
      </div>
      <div class="swiper-slide">
       <div class="sb">
        <svg class="sb__svg" height="318" width="256" viewBox="0 0 256 318" xmlns="http://www.w3.org/2000/svg">
         <clipPath class="sb__svg-clip" id="clip-6">
          <path
           d="m256,131v-40.5c0-15.46-12.54-28-28-28H28c-15.46,0-28,12.54-28,28v40.5c0,15.46,12.54,28,28,28-15.46,0-28,12.54-28,28v40.5c0,15.46,12.54,28,28,28h200c15.46,0,28-12.54,28-28v-40.5c0-15.46-12.54-28-28-28,15.46,0,28-12.54,28-28Z"
           class="sb__svg-path"></path>
         </clipPath>
         <switch class="sb__svg-switch">
          <foreignObject class="sb__svg-foreign-obj" height="318"
           requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility" width="256" x="0" y="0"><img
            loading="lazy" alt="" decoding="async" height="318" src="<?= $assets ?>/img/6-1x.jpg" width="256"
            class="sb__svg-img"
            srcset="<?= $assets ?>/img/6-1x.webp, <?= $assets ?>/img/6-2x.webp 2x, <?= $assets ?>/img/6-3x.webp 3x, <?= $assets ?>/img/6-4x.webp 4x"
            style="clip-path: url(#clip-6)" />
          </foreignObject>
          <image class="sb__svg-image" height="318" style="clip-path: url(#clip-6)" width="256"
           xlink:href="<?= $assets ?>/img/6-1x.jpg"></image>
         </switch>
        </svg>
       </div>
      </div>
      <div class="swiper-slide">
       <div class="sb">
        <svg class="sb__svg" height="318" width="256" viewBox="0 0 256 318" xmlns="http://www.w3.org/2000/svg">
         <clipPath class="sb__svg-clip" id="clip-7">
          <path
           d="m256,131v-40.5c0-15.46-12.54-28-28-28H28c-15.46,0-28,12.54-28,28v40.5c0,15.46,12.54,28,28,28-15.46,0-28,12.54-28,28v40.5c0,15.46,12.54,28,28,28h200c15.46,0,28-12.54,28-28v-40.5c0-15.46-12.54-28-28-28,15.46,0,28-12.54,28-28Z"
           class="sb__svg-path"></path>
         </clipPath>
         <switch class="sb__svg-switch">
          <foreignObject class="sb__svg-foreign-obj" height="318"
           requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility" width="256" x="0" y="0"><img
            loading="lazy" alt="" decoding="async" height="318" src="<?= $assets ?>/img/7-1x.jpg" width="256"
            class="sb__svg-img"
            srcset="<?= $assets ?>/img/7-1x.webp, <?= $assets ?>/img/7-2x.webp 2x, <?= $assets ?>/img/7-3x.webp 3x, <?= $assets ?>/img/7-4x.webp 4x"
            style="clip-path: url(#clip-7)" />
          </foreignObject>
          <image class="sb__svg-image" height="318" style="clip-path: url(#clip-7)" width="256"
           xlink:href="<?= $assets ?>/img/7-1x.jpg"></image>
         </switch>
        </svg>
       </div>
      </div>
      <div class="swiper-slide">
       <div class="sb">
        <svg class="sb__svg" height="318" width="256" viewBox="0 0 256 318" xmlns="http://www.w3.org/2000/svg">
         <clipPath class="sb__svg-clip" id="clip-8">
          <path
           d="m256,131v-40.5c0-15.46-12.54-28-28-28H28c-15.46,0-28,12.54-28,28v40.5c0,15.46,12.54,28,28,28-15.46,0-28,12.54-28,28v40.5c0,15.46,12.54,28,28,28h200c15.46,0,28-12.54,28-28v-40.5c0-15.46-12.54-28-28-28,15.46,0,28-12.54,28-28Z"
           class="sb__svg-path"></path>
         </clipPath>
         <switch class="sb__svg-switch">
          <foreignObject class="sb__svg-foreign-obj" height="318"
           requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility" width="256" x="0" y="0"><img
            loading="lazy" alt="" decoding="async" height="318" src="<?= $assets ?>/img/8-1x.jpg" width="256"
            class="sb__svg-img"
            srcset="<?= $assets ?>/img/8-1x.webp, <?= $assets ?>/img/8-2x.webp 2x, <?= $assets ?>/img/8-3x.webp 3x, <?= $assets ?>/img/8-4x.webp 4x"
            style="clip-path: url(#clip-8)" />
          </foreignObject>
          <image class="sb__svg-image" height="318" style="clip-path: url(#clip-8)" width="256"
           xlink:href="<?= $assets ?>/img/8-1x.jpg"></image>
         </switch>
        </svg>
       </div>
      </div>
      <div class="swiper-slide">
       <div class="sb">
        <svg class="sb__svg" height="318" width="256" viewBox="0 0 256 318" xmlns="http://www.w3.org/2000/svg">
         <clipPath class="sb__svg-clip" id="clip-9">
          <path
           d="m256,131v-40.5c0-15.46-12.54-28-28-28H28c-15.46,0-28,12.54-28,28v40.5c0,15.46,12.54,28,28,28-15.46,0-28,12.54-28,28v40.5c0,15.46,12.54,28,28,28h200c15.46,0,28-12.54,28-28v-40.5c0-15.46-12.54-28-28-28,15.46,0,28-12.54,28-28Z"
           class="sb__svg-path"></path>
         </clipPath>
         <switch class="sb__svg-switch">
          <foreignObject class="sb__svg-foreign-obj" height="318"
           requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility" width="256" x="0" y="0"><img
            loading="lazy" alt="" decoding="async" height="318" src="<?= $assets ?>/img/9-1x.jpg" width="256"
            class="sb__svg-img"
            srcset="<?= $assets ?>/img/9-1x.webp, <?= $assets ?>/img/9-2x.webp 2x, <?= $assets ?>/img/9-3x.webp 3x, <?= $assets ?>/img/9-4x.webp 4x"
            style="clip-path: url(#clip-9)" />
          </foreignObject>
          <image class="sb__svg-image" height="318" style="clip-path: url(#clip-9)" width="256"
           xlink:href="<?= $assets ?>/img/9-1x.jpg"></image>
         </switch>
        </svg>
       </div>
      </div>
      <div class="swiper-slide">
       <div class="sb">
        <svg class="sb__svg" height="318" width="256" viewBox="0 0 256 318" xmlns="http://www.w3.org/2000/svg">
         <clipPath class="sb__svg-clip" id="clip-10">
          <path
           d="m256,131v-40.5c0-15.46-12.54-28-28-28H28c-15.46,0-28,12.54-28,28v40.5c0,15.46,12.54,28,28,28-15.46,0-28,12.54-28,28v40.5c0,15.46,12.54,28,28,28h200c15.46,0,28-12.54,28-28v-40.5c0-15.46-12.54-28-28-28,15.46,0,28-12.54,28-28Z"
           class="sb__svg-path"></path>
         </clipPath>
         <switch class="sb__svg-switch">
          <foreignObject class="sb__svg-foreign-obj" height="318"
           requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility" width="256" x="0" y="0"><img
            loading="lazy" alt="" decoding="async" height="318" src="<?= $assets ?>/img/10-1x.jpg" width="256"
            class="sb__svg-img"
            srcset="<?= $assets ?>/img/10-1x.webp, <?= $assets ?>/img/10-2x.webp 2x, <?= $assets ?>/img/10-3x.webp 3x, <?= $assets ?>/img/10-4x.webp 4x"
            style="clip-path: url(#clip-10)" />
          </foreignObject>
          <image class="sb__svg-image" height="318" style="clip-path: url(#clip-10)" width="256"
           xlink:href="<?= $assets ?>/img/10-1x.jpg"></image>
         </switch>
        </svg>
       </div>
      </div>
      <div class="swiper-slide">
       <div class="sb">
        <svg class="sb__svg" height="318" width="256" viewBox="0 0 256 318" xmlns="http://www.w3.org/2000/svg">
         <clipPath class="sb__svg-clip" id="clip-11">
          <path
           d="m256,131v-40.5c0-15.46-12.54-28-28-28H28c-15.46,0-28,12.54-28,28v40.5c0,15.46,12.54,28,28,28-15.46,0-28,12.54-28,28v40.5c0,15.46,12.54,28,28,28h200c15.46,0,28-12.54,28-28v-40.5c0-15.46-12.54-28-28-28,15.46,0,28-12.54,28-28Z"
           class="sb__svg-path"></path>
         </clipPath>
         <switch class="sb__svg-switch">
          <foreignObject class="sb__svg-foreign-obj" height="318"
           requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility" width="256" x="0" y="0"><img
            loading="lazy" alt="" decoding="async" height="318" src="<?= $assets ?>/img/11-1x.jpg" width="256"
            class="sb__svg-img"
            srcset="<?= $assets ?>/img/11-1x.webp, <?= $assets ?>/img/11-2x.webp 2x, <?= $assets ?>/img/11-3x.webp 3x, <?= $assets ?>/img/11-4x.webp 4x"
            style="clip-path: url(#clip-11)" />
          </foreignObject>
          <image class="sb__svg-image" height="318" style="clip-path: url(#clip-11)" width="256"
           xlink:href="<?= $assets ?>/img/11-1x.jpg"></image>
         </switch>
        </svg>
       </div>
      </div>
      <div class="swiper-slide">
       <div class="sb">
        <svg class="sb__svg" height="318" width="256" viewBox="0 0 256 318" xmlns="http://www.w3.org/2000/svg">
         <clipPath class="sb__svg-clip" id="clip-12">
          <path
           d="m256,131v-40.5c0-15.46-12.54-28-28-28H28c-15.46,0-28,12.54-28,28v40.5c0,15.46,12.54,28,28,28-15.46,0-28,12.54-28,28v40.5c0,15.46,12.54,28,28,28h200c15.46,0,28-12.54,28-28v-40.5c0-15.46-12.54-28-28-28,15.46,0,28-12.54,28-28Z"
           class="sb__svg-path"></path>
         </clipPath>
         <switch class="sb__svg-switch">
          <foreignObject class="sb__svg-foreign-obj" height="318"
           requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility" width="256" x="0" y="0"><img
            loading="lazy" alt="" decoding="async" height="318" src="<?= $assets ?>/img/12-1x.jpg" width="256"
            class="sb__svg-img"
            srcset="<?= $assets ?>/img/12-1x.webp, <?= $assets ?>/img/12-2x.webp 2x, <?= $assets ?>/img/12-3x.webp 3x, <?= $assets ?>/img/12-4x.webp 4x"
            style="clip-path: url(#clip-12)" />
          </foreignObject>
          <image class="sb__svg-image" height="318" style="clip-path: url(#clip-12)" width="256"
           xlink:href="<?= $assets ?>/img/12-1x.jpg"></image>
         </switch>
        </svg>
       </div>
      </div>
      <div class="swiper-slide">
       <div class="sb">
        <svg class="sb__svg" height="318" width="256" viewBox="0 0 256 318" xmlns="http://www.w3.org/2000/svg">
         <clipPath class="sb__svg-clip" id="clip-13">
          <path
           d="m256,131v-40.5c0-15.46-12.54-28-28-28H28c-15.46,0-28,12.54-28,28v40.5c0,15.46,12.54,28,28,28-15.46,0-28,12.54-28,28v40.5c0,15.46,12.54,28,28,28h200c15.46,0,28-12.54,28-28v-40.5c0-15.46-12.54-28-28-28,15.46,0,28-12.54,28-28Z"
           class="sb__svg-path"></path>
         </clipPath>
         <switch class="sb__svg-switch">
          <foreignObject class="sb__svg-foreign-obj" height="318"
           requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility" width="256" x="0" y="0"><img
            loading="lazy" alt="" decoding="async" height="318" src="<?= $assets ?>/img/13-1x.jpg" width="256"
            class="sb__svg-img"
            srcset="<?= $assets ?>/img/13-1x.webp, <?= $assets ?>/img/13-2x.webp 2x, <?= $assets ?>/img/13-3x.webp 3x, <?= $assets ?>/img/13-4x.webp 4x"
            style="clip-path: url(#clip-13)" />
          </foreignObject>
          <image class="sb__svg-image" height="318" style="clip-path: url(#clip-13)" width="256"
           xlink:href="<?= $assets ?>/img/13-1x.jpg"></image>
         </switch>
        </svg>
       </div>
      </div>
      <div class="swiper-slide">
       <div class="sb">
        <svg class="sb__svg" height="318" width="256" viewBox="0 0 256 318" xmlns="http://www.w3.org/2000/svg">
         <clipPath class="sb__svg-clip" id="clip-14">
          <path
           d="m256,131v-40.5c0-15.46-12.54-28-28-28H28c-15.46,0-28,12.54-28,28v40.5c0,15.46,12.54,28,28,28-15.46,0-28,12.54-28,28v40.5c0,15.46,12.54,28,28,28h200c15.46,0,28-12.54,28-28v-40.5c0-15.46-12.54-28-28-28,15.46,0,28-12.54,28-28Z"
           class="sb__svg-path"></path>
         </clipPath>
         <switch class="sb__svg-switch">
          <foreignObject class="sb__svg-foreign-obj" height="318"
           requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility" width="256" x="0" y="0"><img
            loading="lazy" alt="" decoding="async" height="318" src="<?= $assets ?>/img/14-1x.jpg" width="256"
            class="sb__svg-img"
            srcset="<?= $assets ?>/img/14-1x.webp, <?= $assets ?>/img/14-2x.webp 2x, <?= $assets ?>/img/14-3x.webp 3x, <?= $assets ?>/img/14-4x.webp 4x"
            style="clip-path: url(#clip-14)" />
          </foreignObject>
          <image class="sb__svg-image" height="318" style="clip-path: url(#clip-14)" width="256"
           xlink:href="<?= $assets ?>/img/14-1x.jpg"></image>
         </switch>
        </svg>
       </div>
      </div>
      <div class="swiper-slide">
       <div class="sb">
        <svg class="sb__svg" height="318" width="256" viewBox="0 0 256 318" xmlns="http://www.w3.org/2000/svg">
         <clipPath class="sb__svg-clip" id="clip-15">
          <path
           d="m256,131v-40.5c0-15.46-12.54-28-28-28H28c-15.46,0-28,12.54-28,28v40.5c0,15.46,12.54,28,28,28-15.46,0-28,12.54-28,28v40.5c0,15.46,12.54,28,28,28h200c15.46,0,28-12.54,28-28v-40.5c0-15.46-12.54-28-28-28,15.46,0,28-12.54,28-28Z"
           class="sb__svg-path"></path>
         </clipPath>
         <switch class="sb__svg-switch">
          <foreignObject class="sb__svg-foreign-obj" height="318"
           requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility" width="256" x="0" y="0"><img
            loading="lazy" alt="" decoding="async" height="318" src="<?= $assets ?>/img/15-1x.jpg" width="256"
            class="sb__svg-img"
            srcset="<?= $assets ?>/img/15-1x.webp, <?= $assets ?>/img/15-2x.webp 2x, <?= $assets ?>/img/15-3x.webp 3x, <?= $assets ?>/img/15-4x.webp 4x"
            style="clip-path: url(#clip-15)" />
          </foreignObject>
          <image class="sb__svg-image" height="318" style="clip-path: url(#clip-15)" width="256"
           xlink:href="<?= $assets ?>/img/15-1x.jpg"></image>
         </switch>
        </svg>
       </div>
      </div>
     </div>
     <div class="arr arr--prev js-arr--prev swiper-button-prev" aria-label="swipe to prev item" role="button">
      <svg class="icons icons--arrow-long-prev" height="14.72" width="75" role="presentation">
       <use xlink:href="<?= $assets ?>/img/sprite-icons.svg#arrow-long-prev"></use>
      </svg>
     </div>
     <div class="arr arr--next js-arr--next swiper-button-next" aria-label="swipe to next item" role="button">
      <svg class="icons icons--arrow-long-next" height="14.72" width="75" role="presentation">
       <use xlink:href="<?= $assets ?>/img/sprite-icons.svg#arrow-long-next"></use>
      </svg>
     </div>
    </div>
   </div>
  </section>
  <section class="s-3">
   <div class="running-line">
    <div class="swiper-wrapper">
     <div class="swiper-slide s-3__it">
      <svg class="icons icons--sun" height="32.01" width="31.19" role="presentation">
       <use xlink:href="<?= $assets ?>/img/sprite-icons.svg#sun"></use>
      </svg>
      <span class="s-3__it-label">Eco-friendly the planet</span>
     </div>
     <div class="swiper-slide s-3__it">
      <svg class="icons icons--sun" height="32.01" width="31.19" role="presentation">
       <use xlink:href="<?= $assets ?>/img/sprite-icons.svg#sun"></use>
      </svg>
      <span class="s-3__it-label">Eco-friendly the planet</span>
     </div>
     <div class="swiper-slide s-3__it">
      <svg class="icons icons--sun" height="32.01" width="31.19" role="presentation">
       <use xlink:href="<?= $assets ?>/img/sprite-icons.svg#sun"></use>
      </svg>
      <span class="s-3__it-label">Eco-friendly the planet</span>
     </div>
     <div class="swiper-slide s-3__it">
      <svg class="icons icons--sun" height="32.01" width="31.19" role="presentation">
       <use xlink:href="<?= $assets ?>/img/sprite-icons.svg#sun"></use>
      </svg>
      <span class="s-3__it-label">Eco-friendly the planet</span>
     </div>
     <div class="swiper-slide s-3__it">
      <svg class="icons icons--sun" height="32.01" width="31.19" role="presentation">
       <use xlink:href="<?= $assets ?>/img/sprite-icons.svg#sun"></use>
      </svg>
      <span class="s-3__it-label">Eco-friendly the planet</span>
     </div>
     <div class="swiper-slide s-3__it">
      <svg class="icons icons--sun" height="32.01" width="31.19" role="presentation">
       <use xlink:href="<?= $assets ?>/img/sprite-icons.svg#sun"></use>
      </svg>
      <span class="s-3__it-label">Eco-friendly the planet</span>
     </div>
     <div class="swiper-slide s-3__it">
      <svg class="icons icons--sun" height="32.01" width="31.19" role="presentation">
       <use xlink:href="<?= $assets ?>/img/sprite-icons.svg#sun"></use>
      </svg>
      <span class="s-3__it-label">Eco-friendly the planet</span>
     </div>
     <div class="swiper-slide s-3__it">
      <svg class="icons icons--sun" height="32.01" width="31.19" role="presentation">
       <use xlink:href="<?= $assets ?>/img/sprite-icons.svg#sun"></use>
      </svg>
      <span class="s-3__it-label">Eco-friendly the planet</span>
     </div>
     <div class="swiper-slide s-3__it">
      <svg class="icons icons--sun" height="32.01" width="31.19" role="presentation">
       <use xlink:href="<?= $assets ?>/img/sprite-icons.svg#sun"></use>
      </svg>
      <span class="s-3__it-label">Eco-friendly the planet</span>
     </div>
     <div class="swiper-slide s-3__it">
      <svg class="icons icons--sun" height="32.01" width="31.19" role="presentation">
       <use xlink:href="<?= $assets ?>/img/sprite-icons.svg#sun"></use>
      </svg>
      <span class="s-3__it-label">Eco-friendly the planet</span>
     </div>
     <div class="swiper-slide s-3__it">
      <svg class="icons icons--sun" height="32.01" width="31.19" role="presentation">
       <use xlink:href="<?= $assets ?>/img/sprite-icons.svg#sun"></use>
      </svg>
      <span class="s-3__it-label">Eco-friendly the planet</span>
     </div>
     <div class="swiper-slide s-3__it">
      <svg class="icons icons--sun" height="32.01" width="31.19" role="presentation">
       <use xlink:href="<?= $assets ?>/img/sprite-icons.svg#sun"></use>
      </svg>
      <span class="s-3__it-label">Eco-friendly the planet</span>
     </div>
     <div class="swiper-slide s-3__it">
      <svg class="icons icons--sun" height="32.01" width="31.19" role="presentation">
       <use xlink:href="<?= $assets ?>/img/sprite-icons.svg#sun"></use>
      </svg>
      <span class="s-3__it-label">Eco-friendly the planet</span>
     </div>
     <div class="swiper-slide s-3__it">
      <svg class="icons icons--sun" height="32.01" width="31.19" role="presentation">
       <use xlink:href="<?= $assets ?>/img/sprite-icons.svg#sun"></use>
      </svg>
      <span class="s-3__it-label">Eco-friendly the planet</span>
     </div>
    </div>
   </div>
  </section>
  <section class="s-4">
   <div class="fix s-4__fix">
    <div class="s-info">
     <h2 class="s-t">Transforming Scrap into Value</h2>
     <p class="s-d">
      Discover efficient scrap recycling neighborhood! We&#39;re dedicated to providing
      convenient reliable.
     </p>
    </div>
    <div class="g-1-lvl">
     <div class="g-1-lvl__it g-1-lvl__it--1">
      <img loading="lazy" alt="" decoding="async" height="590" src="<?= $assets ?>/img/shape-1-1x.jpg" width="460"
       class="shape-primary" srcset="
         <?= $assets ?>/img/shape-1-1x.webp,
         <?= $assets ?>/img/shape-1-2x.webp 2x,
         <?= $assets ?>/img/shape-1-3x.webp 3x,
         <?= $assets ?>/img/shape-1-4x.webp 4x
        " />
     </div>
     <div class="g-1-lvl__it g-1-lvl__it--2">
      <div class="g-2-lvl">
       <img loading="lazy" alt="" decoding="async" height="207" src="<?= $assets ?>/img/shape-1-1x.jpg" width="207"
        class="g-2-lvl__it g-2-lvl__it--1 shape-circle" srcset="
          <?= $assets ?>/img/shape-2-1x.webp,
          <?= $assets ?>/img/shape-2-2x.webp                2x,
          <?= $assets ?>/img/shape-2-3x.webp                3x,
          shared/ui<?= $assets ?>/img/shape/shape-2-4x.webp 4x
         " />
       <div class="g-2-lvl__it txt-box g-2-lvl__it--2">
        <h3 class="txt-box__title">How We Make It?</h3>
        <p class="txt-box__descr">
         UrbanGreen tech’s LED lighting solutions have demonstred energy efficiency gains
        </p>
       </div>
       <img loading="lazy" alt="" decoding="async" height="150" src="<?= $assets ?>/img/shape-3-1x.jpg" width="376"
        class="g-2-lvl__it shape-rounded g-2-lvl__it--3 shape-rounded--1" srcset="
          <?= $assets ?>/img/shape-3-1x.webp,
          <?= $assets ?>/img/shape-3-2x.webp 2x,
          <?= $assets ?>/img/shape-3-3x.webp 3x,
          <?= $assets ?>/img/shape-3-4x.webp 4x
         " />
       <img loading="lazy" alt="" decoding="async" height="150" src="<?= $assets ?>/img/shape-4-1x.jpg" width="264"
        class="g-2-lvl__it shape-rounded g-2-lvl__it--4 shape-rounded--2" srcset="
          <?= $assets ?>/img/shape-4-1x.webp,
          <?= $assets ?>/img/shape-4-2x.webp 2x,
          <?= $assets ?>/img/shape-4-3x.webp 3x,
          <?= $assets ?>/img/shape-4-4x.webp 4x
         " />
       <div class="g-2-lvl__it txt-box g-2-lvl__it--5">
        <h3 class="txt-box__title">80% Energy Efficiency</h3>
        <p class="txt-box__descr">
         UrbanGreen tech’s LED lighting solutions have demonstred energy efficiency gains
         of up to 80% compared to traditional lighting system.
        </p>
       </div>
      </div>
     </div>
    </div>
   </div>
  </section>
  <section class="s-5">
   <div class="fix s-5__fix">
    <h2 class="s-t">Our Initiatives for 2024</h2>
   </div>
   <article class="article-v1">
    <div class="fix article-v1__fix">
     <div class="article-v1__c article-v1__c--1">
      <h3 class="article-v1__t">Tree Planting</h3>
     </div>
     <div class="article-v1__c article-v1__c--2">
      <p class="article-v1__d">
       We offer a comprehensive suite of digital services tailored to meet the diverse
       needs of our clients.
      </p>
      <a class="icon-box-2" href="#" aria-label="read more" role="button"><svg class="icons icons--arrow-top-right"
        height="11.43" width="15.1" role="presentation">
        <use xlink:href="<?= $assets ?>/img/sprite-icons.svg#arrow-top-right"></use>
       </svg></a>
     </div>
    </div>
   </article>
   <div class="fix">
    <div class="dividing-line dividing-line--article"></div>
   </div>
   <article class="article-v1">
    <div class="fix article-v1__fix">
     <div class="article-v1__c article-v1__c--1">
      <h3 class="article-v1__t">Beach Cleanup</h3>
     </div>
     <div class="article-v1__c article-v1__c--2">
      <p class="article-v1__d">
       We offer a comprehensive suite of digital services tailored to meet the diverse
       needs of our clients.
      </p>
      <a class="icon-box-2" href="#" aria-label="read more" role="button"><svg class="icons icons--arrow-top-right"
        height="11.43" width="15.1" role="presentation">
        <use xlink:href="<?= $assets ?>/img/sprite-icons.svg#arrow-top-right"></use>
       </svg></a>
     </div>
    </div>
   </article>
   <div class="fix">
    <div class="dividing-line dividing-line--article"></div>
   </div>
   <article class="article-v1">
    <div class="fix article-v1__fix">
     <div class="article-v1__c article-v1__c--1">
      <h3 class="article-v1__t">Education Events</h3>
     </div>
     <div class="article-v1__c article-v1__c--2">
      <p class="article-v1__d">
       We offer a comprehensive suite of digital services tailored to meet the diverse
       needs of our clients.
      </p>
      <a class="icon-box-2" href="#" aria-label="read more" role="button"><svg class="icons icons--arrow-top-right"
        height="11.43" width="15.1" role="presentation">
        <use xlink:href="<?= $assets ?>/img/sprite-icons.svg#arrow-top-right"></use>
       </svg></a>
     </div>
    </div>
   </article>
   <div class="fix">
    <div class="dividing-line dividing-line--article"></div>
   </div>
   <article class="article-v1">
    <div class="fix article-v1__fix">
     <div class="article-v1__c article-v1__c--1">
      <h3 class="article-v1__t">Park Cleaning</h3>
     </div>
     <div class="article-v1__c article-v1__c--2">
      <p class="article-v1__d">
       We offer a comprehensive suite of digital services tailored to meet the diverse
       needs of our clients.
      </p>
      <a class="icon-box-2" href="#" aria-label="read more" role="button"><svg class="icons icons--arrow-top-right"
        height="11.43" width="15.1" role="presentation">
        <use xlink:href="<?= $assets ?>/img/sprite-icons.svg#arrow-top-right"></use>
       </svg></a>
     </div>
    </div>
   </article>
   <div class="fix">
    <div class="dividing-line dividing-line--article"></div>
   </div>
   <div class="block pt-[4.8rem] text-center">
    <a class="btn btn--outline btn--xxl" href="#" aria-label="View Details" role="button"><span
      class="txt-animation"><span class="txt-animation__content" data-hover-txt="View Details" role="presentation"><span
        class="txt-animation__content-style">View Details</span>
      </span></span><span class="icon-box-2 icon-box-2--fill" role="presentation"><svg
       class="icons icons--arrow-top-right" height="11.43" width="15.1">
       <use xlink:href="<?= $assets ?>/img/sprite-icons.svg#arrow-top-right"></use>
      </svg></span></a>
   </div>
  </section>
  <section class="s-6">
   <div class="fix s-6__fix">
    <h2 class="s-t">Make Our World Cleaner & Greener!</h2>
    <p class="s-d">
     Discover efficient scrap recycling services right in your neighborhood! We're
     dedicated to providing convenient and reliable scrap recycling.
    </p>
   </div>
   <div class="swiper-section swiper-section--shaped">
    <div class="swiper-section__content">
     <div class="shaped-box">
      <div class="shaped-box__content">
       <div class="shaped-box__content-cell shaped-box__content-cell--1">
        <h3 class="shaped-box__t">Protect Our Animal</h3>
        <p class="shaped-box__d">
         Energy efficiency gains to 80% compared traditional lighting system.
        </p>
        <a class="shaped-box__a" href="#">Read More
         <span class="arr-group" role="presentation"><svg class="icons icons--arrow-small-top-right" height="5.17"
           width="6.51" role="presentation">
           <use xlink:href="<?= $assets ?>/img/sprite-icons.svg#arrow-small-top-right"></use>
          </svg></span></a>
       </div>
       <div class="shaped-box__content-cell shaped-box__content-cell--2">
        <img loading="lazy" alt="" decoding="async" height="244" src="<?= $assets ?>/img/1-1x2.jpg" width="185"
         class="shaped-img" srcset="
           <?= $assets ?>/img/1-1x2.webp,
           <?= $assets ?>/img/1-2x2.webp 2x,
           <?= $assets ?>/img/1-3x2.webp 3x,
           <?= $assets ?>/img/1-4x2.webp 4x
          " />
       </div>
      </div>
      <svg class="shaped-box__svg" role="presentation">
       <path
        d="m460,16v126.74c0,.68-.04,1.35-.12,2.01v120.5c0,15.46-12.54,28-28,28h-157.28c-11.85,0-23.07,10.76-34.92,10.76H16c-8.84,0-16-7.16-16-16V43.8C0,28.33,12.54,15.8,28,15.8h117.03c13.82,0,27.11-15.8,40.93-15.8h258.05c8.84,0,16,7.16,16,16h0Z"
        fill-rule="evenodd" />
      </svg>
     </div>
     <div class="shaped-box">
      <div class="shaped-box__content">
       <div class="shaped-box__content-cell shaped-box__content-cell--1">
        <h3 class="shaped-box__t">Protect Our Animal</h3>
        <p class="shaped-box__d">
         Energy efficiency gains to 80% compared traditional lighting system.
        </p>
        <a class="shaped-box__a" href="#">Read More
         <span class="arr-group" role="presentation"><svg class="icons icons--arrow-small-top-right" height="5.17"
           width="6.51">
           <use xlink:href="<?= $assets ?>/img/sprite-icons.svg#arrow-small-top-right"></use>
          </svg></span></a>
       </div>
       <div class="shaped-box__content-cell shaped-box__content-cell--2">
        <img loading="lazy" alt="" decoding="async" height="244" src="<?= $assets ?>/img/1-1x2.jpg" width="185"
         class="shaped-img" srcset="
           <?= $assets ?>/img/3-1x2.webp,
           <?= $assets ?>/img/3-2x2.webp 2x,
           <?= $assets ?>/img/3-3x2.webp 3x,
           <?= $assets ?>/img/3-4x2.webp 4x
          " />
       </div>
      </div>
      <svg class="shaped-box__svg" role="presentation">
       <path
        d="m460,16v126.74c0,.68-.04,1.35-.12,2.01v120.5c0,15.46-12.54,28-28,28h-157.28c-11.85,0-23.07,10.76-34.92,10.76H16c-8.84,0-16-7.16-16-16V43.8C0,28.33,12.54,15.8,28,15.8h117.03c13.82,0,27.11-15.8,40.93-15.8h258.05c8.84,0,16,7.16,16,16h0Z"
        fill-rule="evenodd" />
      </svg>
     </div>
     <div class="shaped-box">
      <div class="shaped-box__content">
       <div class="shaped-box__content-cell shaped-box__content-cell--1">
        <h3 class="shaped-box__t">Protect Our Animal</h3>
        <p class="shaped-box__d">
         Energy efficiency gains to 80% compared traditional lighting system.
        </p>
        <a class="shaped-box__a" href="#">Read More
         <span class="arr-group" role="presentation"><svg class="icons icons--arrow-small-top-right" height="5.17"
           width="6.51">
           <use xlink:href="<?= $assets ?>/img/sprite-icons.svg#arrow-small-top-right"></use>
          </svg></span></a>
       </div>
       <div class="shaped-box__content-cell shaped-box__content-cell--2">
        <img loading="lazy" alt="" decoding="async" height="244" src="<?= $assets ?>/img/1-1x2.jpg" width="185"
         class="shaped-img" srcset="
           <?= $assets ?>/img/2-1x2.webp,
           <?= $assets ?>/img/2-2x2.webp 2x,
           <?= $assets ?>/img/2-3x2.webp 3x,
           <?= $assets ?>/img/2-4x.webp  4x
          " />
       </div>
      </div>
      <svg class="shaped-box__svg" role="presentation">
       <path
        d="m460,16v126.74c0,.68-.04,1.35-.12,2.01v120.5c0,15.46-12.54,28-28,28h-157.28c-11.85,0-23.07,10.76-34.92,10.76H16c-8.84,0-16-7.16-16-16V43.8C0,28.33,12.54,15.8,28,15.8h117.03c13.82,0,27.11-15.8,40.93-15.8h258.05c8.84,0,16,7.16,16,16h0Z"
        fill-rule="evenodd" />
      </svg>
     </div>
     <div class="shaped-box">
      <div class="shaped-box__content">
       <div class="shaped-box__content-cell shaped-box__content-cell--1">
        <h3 class="shaped-box__t">Protect Our Animal</h3>
        <p class="shaped-box__d">
         Energy efficiency gains to 80% compared traditional lighting system.
        </p>
        <a class="shaped-box__a" href="#">Read More
         <span class="arr-group" role="presentation"><svg class="icons icons--arrow-small-top-right" height="5.17"
           width="6.51">
           <use xlink:href="<?= $assets ?>/img/sprite-icons.svg#arrow-small-top-right"></use>
          </svg></span></a>
       </div>
       <div class="shaped-box__content-cell shaped-box__content-cell--2">
        <img loading="lazy" alt="" decoding="async" height="244" src="<?= $assets ?>/img/1-1x2.jpg" width="185"
         class="shaped-img" srcset="
           <?= $assets ?>/img/1-1x2.webp,
           <?= $assets ?>/img/1-2x2.webp 2x,
           <?= $assets ?>/img/1-3x2.webp 3x,
           <?= $assets ?>/img/1-4x2.webp 4x
          " />
       </div>
      </div>
      <svg class="shaped-box__svg" role="presentation">
       <path
        d="m460,16v126.74c0,.68-.04,1.35-.12,2.01v120.5c0,15.46-12.54,28-28,28h-157.28c-11.85,0-23.07,10.76-34.92,10.76H16c-8.84,0-16-7.16-16-16V43.8C0,28.33,12.54,15.8,28,15.8h117.03c13.82,0,27.11-15.8,40.93-15.8h258.05c8.84,0,16,7.16,16,16h0Z"
        fill-rule="evenodd" />
      </svg>
     </div>
     <div class="shaped-box">
      <div class="shaped-box__content">
       <div class="shaped-box__content-cell shaped-box__content-cell--1">
        <h3 class="shaped-box__t">Protect Our Animal</h3>
        <p class="shaped-box__d">
         Energy efficiency gains to 80% compared traditional lighting system.
        </p>
        <a class="shaped-box__a" href="#">Read More
         <span class="arr-group" role="presentation"><svg class="icons icons--arrow-small-top-right" height="5.17"
           width="6.51">
           <use xlink:href="<?= $assets ?>/img/sprite-icons.svg#arrow-small-top-right"></use>
          </svg></span></a>
       </div>
       <div class="shaped-box__content-cell shaped-box__content-cell--2">
        <img loading="lazy" alt="" decoding="async" height="244" src="<?= $assets ?>/img/1-1x2.jpg" width="185"
         class="shaped-img" srcset="
           <?= $assets ?>/img/1-1x2.webp,
           <?= $assets ?>/img/1-2x2.webp 2x,
           <?= $assets ?>/img/1-3x2.webp 3x,
           <?= $assets ?>/img/1-4x2.webp 4x
          " />
       </div>
      </div>
      <svg class="shaped-box__svg" role="presentation">
       <path
        d="m460,16v126.74c0,.68-.04,1.35-.12,2.01v120.5c0,15.46-12.54,28-28,28h-157.28c-11.85,0-23.07,10.76-34.92,10.76H16c-8.84,0-16-7.16-16-16V43.8C0,28.33,12.54,15.8,28,15.8h117.03c13.82,0,27.11-15.8,40.93-15.8h258.05c8.84,0,16,7.16,16,16h0Z"
        fill-rule="evenodd" />
      </svg>
     </div>
    </div>
   </div>
  </section>
  <section class="s-7">
   <div class="fix s-7__fix">
    <h2 class="s-t">Reducing Plastic Waste Through Eco-Friendly Packaging</h2>
    <div class="grid-7">
     <div class="grid-7__it">
      <div class="deco-circle deco-circle--1"></div>
      <div class="deco-circle deco-circle--2"></div>
      <div class="overlay-custom overlay-custom--fill"></div>
      <span class="icon-box-1"><img loading="lazy" loading="lazy" alt="" decoding="async" height="32"
        src="<?= $assets ?>/img/illustrator-green-wrap.svg" width="30" />
      </span><img loading="lazy" alt="" decoding="async" height="358" src="<?= $assets ?>/img/eco-packaging-1-1x.jpg"
       width="267" class="image-fill" srcset="
         <?= $assets ?>/img/eco-packaging-1-1x.webp,
         <?= $assets ?>/img/eco-packaging-1-2x.webp 2x
        " />
     </div>
     <div class="grid-7__it">
      <div class="overlay-custom overlay-custom--fill">
       <div class="el"></div>
       <div class="article-title-1">Recycled/ renewable/ organic fibers.</div>
       <div class="equalizer"><i></i> <i></i> <i></i> <i></i> <i></i></div>
      </div>
      <img loading="lazy" alt="" decoding="async" height="358" src="<?= $assets ?>/img/eco-packaging-2-1x.jpg" width="267"
       class="image-fill" srcset="
         <?= $assets ?>/img/eco-packaging-2-1x.webp,
         <?= $assets ?>/img/eco-packaging-2-2x.webp 2x
        " />
     </div>
     <div class="grid-7__it">
      <div class="overlay-custom">
       <div class="overlay-custom__content">
        <svg class="icons icons--deco-7" height="42" width="41.89">
         <use xlink:href="<?= $assets ?>/img/sprite-icons.svg#deco-7"></use>
        </svg>
        <p class="overlay-custom__content-txt">
         Our mission is to make sustainable food packaging solutions accessible to
         everyone
        </p>
       </div>
       <img loading="lazy" alt="" decoding="async" height="432" src="<?= $assets ?>/img/ornament.svg" width="408"
        class="ornament" />
      </div>
     </div>
     <div class="grid-7__it">
      <div class="overlay-custom overlay-custom--fill">
       <svg class="icons icons--deco-6" height="71.29" width="71.98">
        <use xlink:href="<?= $assets ?>/img/sprite-icons.svg#deco-6"></use>
       </svg>
      </div>
      <img loading="lazy" alt="" decoding="async" height="358" src="<?= $assets ?>/img/eco-packaging-3-1x.jpg" width="267"
       class="image-fill" srcset="
         <?= $assets ?>/img/eco-packaging-3-1x.webp,
         <?= $assets ?>/img/eco-packaging-3-2x.webp 2x
        " />
     </div>
    </div>
   </div>
  </section>
  <section class="s-8">
   <div class="fix s-8__fix">
    <h2 class="s-t">Get to Know What Our Clients Think</h2>
   </div>
   <div class="wide-cell">
    <div class="block-v1">
     <div class="list-3">
      <svg class="icons icons--star" height="21.49" width="22.48">
       <use xlink:href="<?= $assets ?>/img/sprite-icons.svg#star"></use>
      </svg>
      <svg class="icons icons--star" height="21.49" width="22.48">
       <use xlink:href="<?= $assets ?>/img/sprite-icons.svg#star"></use>
      </svg>
      <svg class="icons icons--star" height="21.49" width="22.48">
       <use xlink:href="<?= $assets ?>/img/sprite-icons.svg#star"></use>
      </svg>
      <svg class="icons icons--star" height="21.49" width="22.48">
       <use xlink:href="<?= $assets ?>/img/sprite-icons.svg#star"></use>
      </svg>
      <svg class="icons icons--star" height="21.49" width="22.48">
       <use xlink:href="<?= $assets ?>/img/sprite-icons.svg#star"></use>
      </svg>
     </div>
     <p class="block-v1__descr">
      “Using the copywriting ai tool helped me improve my writing skills by showing me
      where I could improve and offering give me suggestions for how to do so.
     </p>
     <div class="img-info">
      <div class="img-info__im">
       <img loading="lazy" alt="" decoding="async" height="44" src="<?= $assets ?>/img/alexis-simmons-1x.jpg" width="44"
        class="img-1-1" srcset="
          <?= $assets ?>/img/alexis-simmons-1x.webp,
          <?= $assets ?>/img/alexis-simmons-2x.webp 2x,
          <?= $assets ?>/img/alexis-simmons-3x.webp 3x,
          <?= $assets ?>/img/alexis-simmons-4x.webp 4x
         " />
      </div>
      <div class="img-info__in">
       <span class="img-info__title">Alexis Simmons</span>
       <span class="img-info__descr">Product Designer</span>
      </div>
     </div>
    </div>
    <div class="block-v1">
     <div class="list-3">
      <svg class="icons icons--star" height="21.49" width="22.48">
       <use xlink:href="<?= $assets ?>/img/sprite-icons.svg#star"></use>
      </svg>
      <svg class="icons icons--star" height="21.49" width="22.48">
       <use xlink:href="<?= $assets ?>/img/sprite-icons.svg#star"></use>
      </svg>
      <svg class="icons icons--star" height="21.49" width="22.48">
       <use xlink:href="<?= $assets ?>/img/sprite-icons.svg#star"></use>
      </svg>
      <svg class="icons icons--star" height="21.49" width="22.48">
       <use xlink:href="<?= $assets ?>/img/sprite-icons.svg#star"></use>
      </svg>
      <svg class="icons icons--star" height="21.49" width="22.48">
       <use xlink:href="<?= $assets ?>/img/sprite-icons.svg#star"></use>
      </svg>
     </div>
     <p class="block-v1__descr">
      “Using the copywriting ai tool helped me improve my writing skills by showing me
      where I could improve and offering give me suggestions for how to do so.
     </p>
     <div class="img-info">
      <div class="img-info__im">
       <img loading="lazy" alt="" decoding="async" height="44" src="<?= $assets ?>/img/billy-caldwell-1x.jpg" width="44"
        class="img-1-1" srcset="
          <?= $assets ?>/img/billy-caldwell-1x.webp,
          <?= $assets ?>/img/billy-caldwell-2x.webp 2x,
          <?= $assets ?>/img/billy-caldwell-3x.webp 3x,
          <?= $assets ?>/img/billy-caldwell-4x.webp 4x
         " />
      </div>
      <div class="img-info__in">
       <span class="img-info__title">Billy Caldwell</span>
       <span class="img-info__descr">Product Designer</span>
      </div>
     </div>
    </div>
    <div class="block-v1">
     <div class="list-3">
      <svg class="icons icons--star" height="21.49" width="22.48">
       <use xlink:href="<?= $assets ?>/img/sprite-icons.svg#star"></use>
      </svg>
      <svg class="icons icons--star" height="21.49" width="22.48">
       <use xlink:href="<?= $assets ?>/img/sprite-icons.svg#star"></use>
      </svg>
      <svg class="icons icons--star" height="21.49" width="22.48">
       <use xlink:href="<?= $assets ?>/img/sprite-icons.svg#star"></use>
      </svg>
      <svg class="icons icons--star" height="21.49" width="22.48">
       <use xlink:href="<?= $assets ?>/img/sprite-icons.svg#star"></use>
      </svg>
      <svg class="icons icons--star" height="21.49" width="22.48">
       <use xlink:href="<?= $assets ?>/img/sprite-icons.svg#star"></use>
      </svg>
     </div>
     <p class="block-v1__descr">
      “Using the copywriting ai tool helped me improve my writing skills by showing me
      where I could improve and offering give me suggestions for how to do so.
     </p>
     <div class="img-info">
      <div class="img-info__im">
       <img loading="lazy" alt="" decoding="async" height="44" src="<?= $assets ?>/img/devonte-richardson-1x.jpg" width="44"
        class="img-1-1" srcset="
          <?= $assets ?>/img/devonte-richardson-1x.webp,
          <?= $assets ?>/img/devonte-richardson-2x.webp 2x,
          <?= $assets ?>/img/devonte-richardson-3x.webp 3x,
          <?= $assets ?>/img/devonte-richardson-4x.webp 4x
         " />
      </div>
      <div class="img-info__in">
       <span class="img-info__title">Devonte Richardson</span>
       <span class="img-info__descr">Product Designer</span>
      </div>
     </div>
    </div>
   </div>
  </section>
  <footer class="main-footer">
   <div class="fix main-footer__fix">
    <div class="grid-9">
     <div class="grid-9__it grid-9__it--1">
      <a class="logo" href="#" aria-label="Logo EcoScrap"><img loading="lazy" alt="" decoding="async" height="40"
        src="<?= $assets ?>/img/logo-2.svg" width="136" class="logo__img" /></a>
      <p class="short-txt">Whatever you want to ask, our chat has the answers</p>
      <div class="soc">
       <a class="soc-link" href="#" aria-label="The official X (twitter) page for our company"><svg
         class="icons icons--tw" height="10.4" width="12.8" role="presentation">
         <use xlink:href="<?= $assets ?>/img/sprite-icons.svg#soc-tw"></use>
        </svg> </a><a class="soc-link" href="#" aria-label="The official facebook page for our company"><svg
         class="icons icons--fb" height="12.8" width="6.89" role="presentation">
         <use xlink:href="<?= $assets ?>/img/sprite-icons.svg#soc-fb"></use>
        </svg> </a><a class="soc-link" href="#" aria-label="The official linkedin page for our company"><svg
         class="icons icons--in" height="12.81" width="12.82" role="presentation">
         <use xlink:href="<?= $assets ?>/img/sprite-icons.svg#soc-in"></use>
        </svg></a>
      </div>
     </div>
     <div class="grid-9__it grid-9__it--2">
      <h4 class="s9__t">Support</h4>
      <ul class="list-1">
       <li class="list-1__li"><a class="list-1__a" href="#">Weekly Demos</a></li>
       <li class="list-1__li"><a class="list-1__a" href="#">Contact Us</a></li>
       <li class="list-1__li"><a class="list-1__a" href="#">Report a Bug</a></li>
       <li class="list-1__li">
        <a class="list-1__a" href="#">Request a New Feature</a>
       </li>
      </ul>
     </div>
     <div class="grid-9__it grid-9__it--3">
      <h4 class="s9__t">About</h4>
      <ul class="list-1">
       <li class="list-1__li"><a class="list-1__a" href="#">Donate</a></li>
       <li class="list-1__li"><a class="list-1__a" href="#">Careers</a></li>
       <li class="list-1__li"><a class="list-1__a" href="#">Blog</a></li>
       <li class="list-1__li"><a class="list-1__a" href="#">Privacy Policy</a></li>
      </ul>
     </div>
     <div class="grid-9__it grid-9__it--4">
      <h4 class="s9__t">Help</h4>
      <ul class="list-1">
       <li class="list-1__li"><a class="list-1__a" href="#">Help Center</a></li>
       <li class="list-1__li"><a class="list-1__a" href="#">Information</a></li>
       <li class="list-1__li"><a class="list-1__a" href="#">Community</a></li>
       <li class="list-1__li"><a class="list-1__a" href="#">Creator Programme</a></li>
      </ul>
     </div>
     <div class="grid-9__it grid-9__it--5">
      <h4 class="s9__t">Product</h4>
      <ul class="list-1">
       <li class="list-1__li"><a class="list-1__a" href="#">Chat by EcoScrop</a></li>
       <li class="list-1__li"><a class="list-1__a" href="#">Reviews</a></li>
       <li class="list-1__li"><a class="list-1__a" href="#">EcoScrop API</a></li>
       <li class="list-1__li"><a class="list-1__a" href="#">Pricing</a></li>
      </ul>
     </div>
    </div>
    <div class="dividing-line"></div>
    <div class="short-txt short-txt--bottom-footer">
     &copy; 2024 Design Monks. All Right Reserved
    </div>
   </div>
  </footer>
 </div>
</body>
<?php include_once 'src/php/footer.php'; ?>

</html>

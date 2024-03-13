<?php
$root =dirname(dirname(dirname(dirname(dirname(__FILE__)))));

if ( file_exists( $root.'/wp-load.php' ) ) {
    require_once( $root.'/wp-load.php' );
} elseif ( file_exists( $root.'/wp-config.php' ) ) {
    require_once( $root.'/wp-config.php' );
}
header("Content-type: text/css; charset=utf-8");
function hex2rgb($hex) {
   $hex = str_replace("#", "", $hex);

   if(strlen($hex) == 3) {
      $r = hexdec(substr($hex,0,1).substr($hex,0,1));
      $g = hexdec(substr($hex,1,1).substr($hex,1,1));
      $b = hexdec(substr($hex,2,1).substr($hex,2,1));
   } else {
      $r = hexdec(substr($hex,0,2));
      $g = hexdec(substr($hex,2,2));
      $b = hexdec(substr($hex,4,2));
   }
   $rgb = array($r, $g, $b);
   //return implode(",", $rgb); // returns the rgb values separated by commas
   return $rgb; // returns an array with the rgb values
}
global $dashcore_redux_demo; 
$b=$dashcore_redux_demo['main-color-1'];
$rgba = hex2rgb($b);  
?>
.prettyprint .linenums > li:before {
      background-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
}
.icon-3, .icon-accent {
  background-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
}
.btn-3 {
  background-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
  border-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; 
}
.btn-3.disabled, .btn-3:disabled {
    background-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
    border-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; 
}
.btn-outline-3 {
  color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
  background-color: transparent;
  background-image: none;
  border-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; 
}
  .btn-outline-3:hover {
    color: #fff;
    background-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
    border-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; 
}
  .btn-outline-3.disabled, .btn-outline-3:disabled {
    color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
}
  .btn-outline-3:not(:disabled):not(.disabled):active, .btn-outline-3:not(:disabled):not(.disabled).active,
  .show > .btn-outline-3.dropdown-toggle {
    background-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
    border-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; 
}
.btn-accent {
  background-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
  border-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; 
}
.btn-accent.disabled, .btn-accent:disabled {
    background-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
    border-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; 
}
.btn-outline-accent {
  color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
  border-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; 
}
  .btn-outline-accent:hover {
    background-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
    border-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; 
}
  .btn-outline-accent.disabled, .btn-outline-accent:disabled {
    color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
}
  .btn-outline-accent:not(:disabled):not(.disabled):active, .btn-outline-accent:not(:disabled):not(.disabled).active,
  .show > .btn-outline-accent.dropdown-toggle {
    background-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
    border-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; 
}
.ajax-button .loading.btn-3 {
      border-top: 1px solid <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
      border-right: 1px solid <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; 
  }
 .checkbox input:checked + label:before, .radio input:checked + label:before {
      border-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; 
 }
.radio input:checked + label:after {
  color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; 
}
.radio.radio-3 input:checked + label:before {
  border-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; 
}

.radio.radio-3 input:checked + label:after {
  color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; 
}

.radio.radio-3.radio-outlined label:before {
  border-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; 
}
.checkbox input:checked + label:before {
  background: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; 
}
.checkbox.inverted input:checked + label:after {
  color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; 
}
.checkbox.checkbox-3 input:checked + label:before {
  border-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
  background: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; 
}
.checkbox.checkbox-3.checkbox-outlined label:before {
  border-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; 
}
.checkbox.checkbox-3.checkbox-solid label:before {
  border-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
  background: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; 
}
.checkbox.checkbox-3.inverted input:checked + label:after {
  color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; 
}
.bg-3 {
  background-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?> !important; 
}
.bg-3.arrow:after {
    background-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; 
}
.bg-3-gradient {
  background: -webkit-gradient(linear, left top, left bottom, from(#a159ff), to(<?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>));
  background: linear-gradient(#a159ff, <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>); 
}
.b-3 {
  border-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?> !important; 
}
.gradient.gradient-13 {
    background-image: linear-gradient(-135deg, #ffffff 25%, <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?> 100%); 
}
.gradient.gradient-23 {
    background-image: linear-gradient(-135deg, #646f79 25%, <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?> 100%); 
}
.gradient.gradient-31 {
    background-image: linear-gradient(-135deg, <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?> 25%, #ffffff 100%); }
  .gradient.gradient-32 {
    background-image: linear-gradient(-135deg, <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?> 25%, #646f79 100%); }
  .gradient.gradient-34 {
    background-image: linear-gradient(-135deg, <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?> 25%, #028fff 100%); }
  .gradient.gradient-35 {
    background-image: linear-gradient(-135deg, <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?> 25%, #101480 100%); }
  .gradient.gradient-36 {
    background-image: linear-gradient(-135deg, <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?> 25%, #f4f8fb 100%); }
.gradient.gradient-43 {
    background-image: linear-gradient(-135deg, #028fff 25%, <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?> 100%); 
}
.gradient.gradient-53 {
    background-image: linear-gradient(-135deg, #101480 25%, <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?> 100%); }
.gradient.gradient-63 {
    background-image: linear-gradient(-135deg, #f4f8fb 25%, <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?> 100%); 
}
.shape-fill.shape-fill-3 {
    fill: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; 
}
.speech-bubble {
  background: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
}
.speech-bubble:before {
    border-top-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
}
.speech-bubble:after {
    background-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
    border: 1px solid <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;}

@-webkit-keyframes pulse {
  0% {
    -webkit-box-shadow: 0 0 8px 2px <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
            box-shadow: 0 0 8px 2px <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; }
  100% {
    -webkit-box-shadow: 0 0 20px 2px <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
            box-shadow: 0 0 20px 2px <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; } }

@keyframes pulse {
  0% {
    -webkit-box-shadow: 0 0 8px 2px <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
            box-shadow: 0 0 8px 2px <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; }
  100% {
    -webkit-box-shadow: 0 0 20px 2px <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
            box-shadow: 0 0 20px 2px <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; } 
}
.accent {
  color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; 
}
.color-3 {
  color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?> !important; 
}
.heading-line:after {
  background-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; 
}
.accordion.accordion-3 .card {
  border-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; 
}
.accordion.accordion-3 .card-header {
  background-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; 
}
.accordion.accordion-3:not(.accordion-collapsed) .card {
  border-bottom: 1px solid <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?> !important; 
}
.badge-3 {
  background-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; 
}
.badge-outline-3 {
  color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
  border-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; 
}
  .badge-outline-3[href]:hover, .badge-outline-3[href]:focus {
    background-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
    border-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
}
.progress.progress-3 {
    background-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; 
}
.nav-process .nav-item:before, .nav-process .nav-item:after {
    border-top: 1px dashed <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
}
.nav-process.nav-circle .nav-link:before {
    background-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
}
.nav-tabs .nav-link.active {
    color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; 
}
.nav-tabs.tabs-clean .nav-link.active {
    border-bottom-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; 
}
.nav-tabs.tabs-bordered .nav-link.active {
  border-top: 2px solid <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; 
}
.nav-tabs.nav-outlined .nav-link {
    border: 1px solid <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
    color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; }
.nav-tabs.nav-outlined .nav-link.active {
      background-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
}
.nav-tabs.nav-outlined .nav-link:last-child {
      border-right: 1px solid <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; 
}
.nav-tabs.nav-tabs-3 .nav-link.active {
  color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; 
}
.nav-tabs.nav-tabs-3.tabs-clean .nav-link.active {
  border-bottom-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; 
}

.nav-tabs.nav-tabs-3.tabs-bordered .nav-link.active {
  border-top-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?> !important; 
}

.nav-tabs.nav-tabs-3.nav-outlined .nav-link {
  border-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
  color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; 
}
  .nav-tabs.nav-tabs-3.nav-outlined .nav-link.active {
    background-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
}
  .nav-tabs.nav-tabs-3.nav-outlined .nav-link:last-child {
    border-right-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; 
}
.sw-theme-circles > ul.step-anchor > li.clickable > a:hover {
    color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?> !important; 
}
  .sw-theme-circles > ul.step-anchor > li.active:before, .sw-theme-circles > ul.step-anchor > li.active:last-of-type:after, .sw-theme-circles > ul.step-anchor > li.done:before, .sw-theme-circles > ul.step-anchor > li.done:last-of-type:after {
    background-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; 
}
  .sw-theme-circles > ul.step-anchor > li.active > a {
    background: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; 
}
    .sw-theme-circles > ul.step-anchor > li.active > a > small, .sw-theme-circles > ul.step-anchor > li.active > a > .small, .sw-theme-circles > ul.step-anchor > li.active > a > .desc {
      color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; 
  }
  .sw-theme-circles > ul.step-anchor > li.done > a {
    -webkit-box-shadow: 0 0 0 2px <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?> !important;
            box-shadow: 0 0 0 2px <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?> !important;
}
.navigation .navbar-toggler .icon-bar {
      background-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
}
.navigation .nav-link {
    color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
}
@media (max-width: 767.98px) {
        .navigation .nav-link.active, .navigation .nav-link:hover {
          background: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; 
      } 
}
.navigation .btn-outline, .navigation.navbar-sticky .btn-outline {
    color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;;
    border-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; 
}
.navigation .btn-outline:hover, .navigation.navbar-sticky .btn-outline:hover {
      background-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
      border-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; 
}
.navigation .btn-outline.disabled, .navigation .btn-outline:disabled, .navigation.navbar-sticky .btn-outline.disabled, .navigation.navbar-sticky .btn-outline:disabled {
      color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
}
.navigation .btn-outline:not(:disabled):not(.disabled):active, .navigation .btn-outline:not(:disabled):not(.disabled).active,
    .show > .navigation .btn-outline.dropdown-toggle, .navigation.navbar-sticky .btn-outline:not(:disabled):not(.disabled):active, .navigation.navbar-sticky .btn-outline:not(:disabled):not(.disabled).active,
    .show > .navigation.navbar-sticky .btn-outline.dropdown-toggle {
      background-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
      border-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; 
}
.navigation .btn-solid, .navigation.navbar-sticky .btn-solid {
    background-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
    border-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; 
}
.navigation .btn-solid.disabled, .navigation .btn-solid:disabled, .navigation.navbar-sticky .btn-solid.disabled, .navigation.navbar-sticky .btn-solid:disabled {
      background-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
      border-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; 
}
.navigation.navbar-sticky .nav-link.active, .navigation.navbar-sticky .nav-link:hover {
            color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; 
}
.navigation.dark-link .btn-outline {
        color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
        border-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; 
}
.navigation.dark-link .btn-outline:hover {
          background-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
          border-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; 
}
.navigation.dark-link .btn-outline.disabled, .navigation.dark-link .btn-outline:disabled {
          color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
}
.navigation.dark-link .btn-outline:not(:disabled):not(.disabled):active, .navigation.dark-link .btn-outline:not(:disabled):not(.disabled).active,
        .show > .navigation.dark-link .btn-outline.dropdown-toggle {
          background-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
          border-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
}
.navigation.dark-link .btn-solid {
        background-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
        border-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; 
}
.navigation.dark-link .btn-solid.disabled, .navigation.dark-link .btn-solid:disabled {
          background-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
          border-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; 
}
.singl-testimonial .testimonial-img.decorated:before {
      background-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
 }
 .singl-testimonial .reviews-navigation .reviews-nav {
    background-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
}
@media (min-width: 992px) {
    .singl-testimonial .reviews-navigation .reviews-nav:hover {
      background-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
	} 
}
.header .big-circle.bg-3:after {
      background-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; 
}
.header-v8 .shape-main {
    background-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
}
.widget_tag_cloud li a:hover {
    background-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
    border-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
}
#wpcrlLoginSection button {
    background-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
    border-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
}
.navbar-sticky .mega_main_menu > .menu_holder > .menu_inner > ul > li > .item_link .link_text:hover {
    color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>!important;
}
.navbar-sticky .mega_main_menu > .menu_holder > .menu_inner > ul > li:hover > .item_link:after {
    border-top-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>!important;
}
.navbar-expanded .mega_main_menu_ul > li.menu-item-has-children > .item_link > .link_content > .link_text::after {
    color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
    border-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>!important;
}
.navbar-expanded .navbar-collapse .mega_main_menu  .menu_holder .mega_main_menu_ul > li > .item_link:hover {
    background: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>!important;
}
.navbar-expanded .navbar-collapse .mega_main_menu  .menu_holder  .mega_main_menu_ul > li > .item_link > .link_content > .link_text{
    color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>!important;
}
.icon-3:hover, .icon-accent:hover {
    background-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
}
.btn-3:hover {
    border-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; }
.btn-3:not(:disabled):not(.disabled):active, .btn-3:not(:disabled):not(.disabled).active,
  .show > .btn-3.dropdown-toggle {
    background-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
    border-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; }
.btn-accent:hover {
    background-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
    border-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; }
.btn-accent:not(:disabled):not(.disabled):active, .btn-accent:not(:disabled):not(.disabled).active,
  .show > .btn-accent.dropdown-toggle {
    background-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
    border-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; }
.shape-stroke.shape-stroke-3 {
    stroke: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; }
.badge-3[href]:hover, .badge-3[href]:focus {
    background-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; }
.navigation .btn-solid:hover, .navigation.navbar-sticky .btn-solid:hover {
      border-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; }
.navigation .btn-solid:not(:disabled):not(.disabled):active, .navigation .btn-solid:not(:disabled):not(.disabled).active,
    .show > .navigation .btn-solid.dropdown-toggle, .navigation.navbar-sticky .btn-solid:not(:disabled):not(.disabled):active, .navigation.navbar-sticky .btn-solid:not(:disabled):not(.disabled).active,
    .show > .navigation.navbar-sticky .btn-solid.dropdown-toggle {
      background-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
      border-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; }
.navigation.dark-link .btn-solid:hover {
          background-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
          border-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; }
.navigation.dark-link .btn-solid:not(:disabled):not(.disabled):active, .navigation.dark-link .btn-solid:not(:disabled):not(.disabled).active,
        .show > .navigation.dark-link .btn-solid.dropdown-toggle {
          background-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>;
          border-color: <?php echo esc_attr($dashcore_redux_demo['main-color-1']); ?>; }
    <?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Theme tester tool
 *
 * @package   tool_themetester
 * @copyright  Copyright (c) 2015 Moodlerooms Inc. (http://www.moodlerooms.com)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(dirname(__FILE__) . '/../../../../../../../config.php');
require_once($CFG->libdir . '/adminlib.php');

$strheading = 'Theme Tester: Bootstrap 4 CSS : Examples';
$url = new moodle_url('/admin/tool/themetester/bootswatch4.php');

// Start setting up the page.
$params = array();
$PAGE->set_context(context_system::instance());
$PAGE->set_url($url);
$PAGE->set_title($strheading);
$PAGE->set_heading("Examples");
$PAGE->requires->jquery();

$PAGE->requires->css('/admin/tool/themetester/assets/css/docs.min.css');
admin_externalpage_setup('toolthemetester');

echo $OUTPUT->header();

echo html_writer::link(new moodle_url('/admin/tool/themetester/index.php'), '&laquo; Back to index');
echo $OUTPUT->heading($strheading);

?>

<!-- Favicons -->
<link rel="apple-touch-icon" href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/favicon.ico">
<meta name="msapplication-config" content="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


<!-- Twitter -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@getbootstrap">
<meta name="twitter:creator" content="@getbootstrap">
<meta name="twitter:title" content="Examples">
<meta name="twitter:description" content="Quickly get a project started with any of our examples ranging from using parts of the framework to custom components and layouts.">
<meta name="twitter:image" content="/assets/brand/bootstrap-social-logo.png">

<!-- Facebook -->
<meta property="og:url" content="/docs/4.0/examples/index.php">
<meta property="og:title" content="Examples">
<meta property="og:description" content="Quickly get a project started with any of our examples ranging from using parts of the framework to custom components and layouts.">
<meta property="og:type" content="website">
<meta property="og:image" content="/assets/brand/bootstrap-social.png">
<meta property="og:image:secure_url" content="/assets/brand/bootstrap-social.png">
<meta property="og:image:type" content="image/png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">




    
      <main id="content" role="main">
        <main class="bd-content p-5" role="main">
  
  <h2>Custom components</h2>
  <p>Brand new components and templates to help folks quickly get started with Bootstrap and demonstrate best practices for adding onto the framework.</p>
  
    <div class="row">
      <div class="col-sm-6 col-md-4 col-xl-3 mb-3">
        <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/examples/album/">
          <img class="img-thumbnail mb-3" src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/examples/screenshots/album.png" alt="Album screenshot" width="960" height="600">
          <h5 class="mb-1">Album</h5>
        </a>
        <p class="text-muted">Simple one-page template for photo galleries, portfolios, and more.</p>
      </div>
    
  
    
      <div class="col-sm-6 col-md-4 col-xl-3 mb-3">
        <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/examples/pricing/">
          <img class="img-thumbnail mb-3" src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/examples/screenshots/pricing.png" alt="Pricing screenshot" width="960" height="600">
          <h5 class="mb-1">Pricing</h5>
        </a>
        <p class="text-muted">Example pricing page built with Cards and featuring a custom header and footer.</p>
      </div>
    
  
    
      <div class="col-sm-6 col-md-4 col-xl-3 mb-3">
        <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/examples/checkout/">
          <img class="img-thumbnail mb-3" src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/examples/screenshots/checkout.png" alt="Checkout screenshot" width="960" height="600">
          <h5 class="mb-1">Checkout</h5>
        </a>
        <p class="text-muted">Custom checkout form showing our form components and their validation features.</p>
      </div>
    
  
    
      <div class="col-sm-6 col-md-4 col-xl-3 mb-3">
        <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/examples/product/">
          <img class="img-thumbnail mb-3" src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/examples/screenshots/product.png" alt="Product screenshot" width="960" height="600">
          <h5 class="mb-1">Product</h5>
        </a>
        <p class="text-muted">Lean product-focused marketing page with extensive grid and image work.</p>
      </div>
    
  
    
      <div class="col-sm-6 col-md-4 col-xl-3 mb-3">
        <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/examples/cover/">
          <img class="img-thumbnail mb-3" src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/examples/screenshots/cover.png" alt="Cover screenshot" width="960" height="600">
          <h5 class="mb-1">Cover</h5>
        </a>
        <p class="text-muted">A one-page template for building simple and beautiful home pages.</p>
      </div>
    
  
    
      <div class="col-sm-6 col-md-4 col-xl-3 mb-3">
        <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/examples/carousel/">
          <img class="img-thumbnail mb-3" src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/examples/screenshots/carousel.png" alt="Carousel screenshot" width="960" height="600">
          <h5 class="mb-1">Carousel</h5>
        </a>
        <p class="text-muted">Customize the navbar and carousel, then add some new components.</p>
      </div>
    
  
    
      <div class="col-sm-6 col-md-4 col-xl-3 mb-3">
        <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/examples/blog/">
          <img class="img-thumbnail mb-3" src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/examples/screenshots/blog.png" alt="Blog screenshot" width="960" height="600">
          <h5 class="mb-1">Blog</h5>
        </a>
        <p class="text-muted">Magazine like blog template with header, navigation, featured content.</p>
      </div>
    
  
    
      <div class="col-sm-6 col-md-4 col-xl-3 mb-3">
        <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/examples/dashboard/">
          <img class="img-thumbnail mb-3" src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/examples/screenshots/dashboard.png" alt="Dashboard screenshot" width="960" height="600">
          <h5 class="mb-1">Dashboard</h5>
        </a>
        <p class="text-muted">Basic admin dashboard shell with fixed sidebar and navbar.</p>
      </div>
    
  
    
      <div class="col-sm-6 col-md-4 col-xl-3 mb-3">
        <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/examples/sign-in/">
          <img class="img-thumbnail mb-3" src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/examples/screenshots/sign-in.png" alt="Sign-in screenshot" width="960" height="600">
          <h5 class="mb-1">Sign-in</h5>
        </a>
        <p class="text-muted">Custom form layout and design for a simple sign in form.</p>
      </div>
    
  
    
      <div class="col-sm-6 col-md-4 col-xl-3 mb-3">
        <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/examples/sticky-footer/">
          <img class="img-thumbnail mb-3" src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/examples/screenshots/sticky-footer.png" alt="Sticky footer screenshot" width="960" height="600">
          <h5 class="mb-1">Sticky footer</h5>
        </a>
        <p class="text-muted">Attach a footer to the bottom of the viewport when page content is short.</p>
      </div>
    
  
    
      <div class="col-sm-6 col-md-4 col-xl-3 mb-3">
        <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/examples/sticky-footer-navbar/">
          <img class="img-thumbnail mb-3" src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/examples/screenshots/sticky-footer-navbar.png" alt="Sticky footer navbar screenshot" width="960" height="600">
          <h5 class="mb-1">Sticky footer navbar</h5>
        </a>
        <p class="text-muted">Attach a footer to the bottom of the viewport with a fixed top navbar.</p>
      </div>
    </div>
  

  <h2>Framework</h2>
  <p>Examples that focus on implementing uses of built-in components provided by Bootstrap.</p>
  
    <div class="row">
      <div class="col-sm-6 col-md-4 col-xl-3 mb-3">
        <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/examples/starter-template/">
          <img class="img-thumbnail mb-3" src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/examples/screenshots/starter-template.png" alt="Starter template screenshot" width="960" height="600">
          <h5 class="mb-1">Starter template</h5>
        </a>
        <p class="text-muted">Nothing but the basics: compiled CSS and JavaScript.</p>
      </div>
    
  
    
      <div class="col-sm-6 col-md-4 col-xl-3 mb-3">
        <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/examples/grid/">
          <img class="img-thumbnail mb-3" src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/examples/screenshots/grid.png" alt="Grid screenshot" width="960" height="600">
          <h5 class="mb-1">Grid</h5>
        </a>
        <p class="text-muted">Multiple examples of grid layouts with all four tiers, nesting, and more.</p>
      </div>
    
  
    
      <div class="col-sm-6 col-md-4 col-xl-3 mb-3">
        <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/examples/jumbotron/">
          <img class="img-thumbnail mb-3" src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/examples/screenshots/jumbotron.png" alt="Jumbotron screenshot" width="960" height="600">
          <h5 class="mb-1">Jumbotron</h5>
        </a>
        <p class="text-muted">Build around the jumbotron with a navbar and some basic grid columns.</p>
      </div>
    </div>
  

  <h2>Navbars</h2>
  <p>Taking the default navbar component and showing how it can be moved, placed, and extended.</p>
  
    <div class="row">
      <div class="col-sm-6 col-md-4 col-xl-3 mb-3">
        <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/examples/navbars/">
          <img class="img-thumbnail mb-3" src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/examples/screenshots/navbars.png" alt="Navbars screenshot" width="960" height="600">
          <h5 class="mb-1">Navbars</h5>
        </a>
        <p class="text-muted">Demonstration of all responsive and container options for the navbar.</p>
      </div>
    
  
    
      <div class="col-sm-6 col-md-4 col-xl-3 mb-3">
        <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/examples/navbar-static/">
          <img class="img-thumbnail mb-3" src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/examples/screenshots/navbar-static.png" alt="Navbar static screenshot" width="960" height="600">
          <h5 class="mb-1">Navbar static</h5>
        </a>
        <p class="text-muted">Single navbar example of a static top navbar along with some additional content.</p>
      </div>
    
  
    
      <div class="col-sm-6 col-md-4 col-xl-3 mb-3">
        <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/examples/navbar-fixed/">
          <img class="img-thumbnail mb-3" src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/examples/screenshots/navbar-fixed.png" alt="Navbar fixed screenshot" width="960" height="600">
          <h5 class="mb-1">Navbar fixed</h5>
        </a>
        <p class="text-muted">Single navbar example with a fixed top navbar along with some additional content.</p>
      </div>
    
  
    
      <div class="col-sm-6 col-md-4 col-xl-3 mb-3">
        <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/examples/navbar-bottom/">
          <img class="img-thumbnail mb-3" src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/examples/screenshots/navbar-bottom.png" alt="Navbar bottom screenshot" width="960" height="600">
          <h5 class="mb-1">Navbar bottom</h5>
        </a>
        <p class="text-muted">Single navbar example with a bottom navbar along with some additional content.</p>
      </div>
    </div>
  

  <h2>Experiments</h2>
  <p>Examples that focus on future-friendly features or techniques.</p>
  
    <div class="row">
      <div class="col-sm-6 col-md-4 col-xl-3 mb-3">
        <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/examples/floating-labels/">
          <img class="img-thumbnail mb-3" src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/examples/screenshots/floating-labels.png" alt="Floating labels screenshot" width="960" height="600">
          <h5 class="mb-1">Floating labels</h5>
        </a>
        <p class="text-muted">Beautifully simple forms with floating labels over your inputs.</p>
      </div>
    
  
    
      <div class="col-sm-6 col-md-4 col-xl-3 mb-3">
        <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/examples/offcanvas/">
          <img class="img-thumbnail mb-3" src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/examples/screenshots/offcanvas.png" alt="Offcanvas screenshot" width="960" height="600">
          <h5 class="mb-1">Offcanvas</h5>
        </a>
        <p class="text-muted">Turn your expandable navbar into a sliding offcanvas menu.</p>
      </div>
    </div>
  


</main>

      </main>
    

    <footer class="bd-footer text-muted">
  <div class="container-fluid p-3 p-md-5">
    <ul class="bd-footer-links">
      <li><a href="https://github.com/twbs/bootstrap">GitHub</a></li>
      <li><a href="https://twitter.com/getbootstrap">Twitter</a></li>
      <li><a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/examples/">Examples</a></li>
      <li><a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/about/overview/">About</a></li>
    </ul>
    <p>Designed and built with all the love in the world by <a href="https://twitter.com/mdo" target="_blank" rel="noopener">@mdo</a> and <a href="https://twitter.com/fat" target="_blank" rel="noopener">@fat</a>. Maintained by the <a href="https://github.com/orgs/twbs/people">core team</a> with the help of <a href="https://github.com/twbs/bootstrap/graphs/contributors">our contributors</a>.</p>
    <p>Currently v4.0.0. Code licensed <a href="https://github.com/twbs/bootstrap/blob/master/LICENSE" target="_blank" rel="license noopener">MIT</a>, docs <a href="https://creativecommons.org/licenses/by/3.0/" target="_blank" rel="license noopener">CC BY 3.0</a>.</p>
  </div>
</footer>

    <script src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/assets/js/vendor/popper.min.js"></script><script src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/assets/js/vendor/anchor.min.js"></script>
  <script src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/assets/js/vendor/clipboard.min.js"></script>
  <script src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/assets/js/vendor/holder.min.js"></script>
  <script src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/assets/js/src/application.js"></script>
  <script src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/assets/js/src/ie-emulation-modes-warning.js"></script>
  <script src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/assets/js/src/pwa.js"></script>
  </body>
</html>

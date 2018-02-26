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

require_once(dirname(__FILE__) . '/../../../../../config.php');
require_once($CFG->libdir . '/adminlib.php');

$strheading = "Theme Tester: Bootstrap 4 alpha-4 CSS : Bootstrap &middot; The world's most popular mobile-first and responsive front-end framework.";
$url = new moodle_url('/admin/tool/themetester/bootstrap4alpha4.php');

// Start setting up the page.
$params = array();
$PAGE->set_context(context_system::instance());
$PAGE->set_url($url);
$PAGE->set_title($strheading);
$PAGE->set_heading("Bootstrap · The world’s most popular mobile-first and responsive front-end framework.");
$PAGE->requires->jquery();
admin_externalpage_setup('toolthemetester');
$PAGE->add_body_class('bd-home');
echo $OUTPUT->header();

echo html_writer::link(new moodle_url('/admin/tool/themetester/index.php'), '&laquo; Back to index');
echo $OUTPUT->heading($strheading);

?>
    <main class="bd-masthead" id="content">
  <div class="container">
    <span class="bd-booticon outline">B</span>
    <p class="lead">Bootstrap is the most popular HTML, CSS, and JS framework in the world for building responsive, mobile-first projects on the web.</p>
    <p class="lead">
      <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/getting-started/download" class="btn btn-outline-inverse btn-lg" onclick="ga('send', 'event', 'Jumbotron actions', 'Download', 'Download 4.0.0-alpha.4');">Download Bootstrap</a>
    </p>
    <p class="version">Currently v4.0.0-alpha.4</p>
    <script async type="text/javascript" src="https://cdn.carbonads.com/carbon.js?zoneid=1673&serve=C6AILKT&placement=getbootstrapcom" id="_carbonads_js"></script>

  </div>
</main>

<div class="bd-featurette">
  <div class="container">
    <h2 class="bd-featurette-title">Easy to get started.</h2>
    <p class="lead">Quickly include Bootstrap's CSS and JS into any project. Use your favorite package manager, download the source, or use the Bootstrap CDN.</p>

    <div class="row">
      <div class="col-sm-6 m-b-3">
        <h4>Managed dependencies</h4>
        <p>Include Bootstrap's source Sass and JavaScript files via Bower, Composer, Meteor, or npm. Package managed installs don't include documentation, but do include our Gruntfile and readme.</p>
        <p>
          <a class="btn btn-bs btn-outline" href="/admin/tool/themetester/docs/4.0.0-alpha.4/getting-started/download/#package-managers">View install methods</a>
        </p>
      </div>
      <div class="col-sm-6 m-b-3">
        <h4>Bootstrap CDN</h4>
        <p>When you just need to include Bootstrap's compiled CSS and JS, use the Bootstrap CDN, free from the Max CDN folks.</p>
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;link</span> <span class="na">rel=</span><span class="s">"stylesheet"</span> <span class="na">href=</span><span class="s">"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css"</span> <span class="na">integrity=</span><span class="s">"2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj"</span> <span class="na">crossorigin=</span><span class="s">"anonymous"</span><span class="nt">&gt;</span>
<span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js"</span> <span class="na">integrity=</span><span class="s">"VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU"</span> <span class="na">crossorigin=</span><span class="s">"anonymous"</span><span class="nt">&gt;&lt;/script&gt;</span></code></pre></figure>
      </div>
    </div>

    <hr class="half-rule m-t-0">

    <p><strong>Looking for something simpler?</strong> Customized builds of Bootstrap's CSS and JS are also available.</p>
    <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/getting-started/download/#custom-builds" class="btn btn-bs btn-outline">More download options</a>
  </div>
</div>

<div class="bd-featurette">
  <div class="container">
    <h2 class="bd-featurette-title">Designed for everyone, everywhere.</h2>
    <p class="lead">Bootstrap makes front-end web development faster and easier. It's made for folks of all skill levels, devices of all shapes, and projects of all sizes.</p>

    <div class="row">
      <div class="col-sm-4 m-b-3">
        <img src="/admin/tool/themetester/docs/4.0.0-alpha.4/assets/img/sass.png" alt="Sass support" class="img-fluid">
        <h4>Preprocessor</h4>
        <p>Bootstrap ships with vanilla CSS, but its source code utilizes <a href="http://sass-lang.com/">Sass</a>, a popular CSS preprocessor. Quickly get started with precompiled CSS or build on the source.</p>
      </div>
      <div class="col-sm-4 m-b-3">
        <img src="/admin/tool/themetester/docs/4.0.0-alpha.4/assets/img/devices.png" alt="Responsive across devices" class="img-fluid">
        <h4>One framework, every device.</h4>
        <p>Bootstrap easily and efficiently scales your websites and applications with a single code base, from phones to tablets to desktops with CSS media queries.</p>
      </div>
      <div class="col-sm-4 m-b-3">
        <img src="/admin/tool/themetester/docs/4.0.0-alpha.4/assets/img/components.png" alt="Components" class="img-fluid">
        <h4>Full of features</h4>
        <p>With Bootstrap, you get extensive and beautiful documentation for common HTML elements, dozens of custom HTML and CSS components, and awesome jQuery plugins.</p>
      </div>
    </div>

    <hr class="half-rule m-t-0">

    <p><strong>Bootstrap is open source!</strong> It's hosted, developed, and maintained on GitHub by folks like you.</p>
    <a href="https://github.com/twbs/bootstrap" class="btn btn-bs btn-outline">View the GitHub project</a>
  </div>
</div>

<div class="bd-featurette">
  <div class="container">
    <h2 class="bd-featurette-title">Official Bootstrap Themes.</h2>
    <p class="lead">
      Take Bootstrap to the next level with official premium themes. Each theme is its own toolkit featuring all of Bootstrap, brand new components and plugins, full docs, build tools, and more.
    </p>

    <p class="lead">
      <a href="http://themes.getbootstrap.com" class="btn btn-bs btn-outline">Browse themes</a>
    </p>

    <img class="img-fluid m-x-auto" src="/admin/tool/themetester/docs/4.0.0-alpha.4/assets/img/bs-themes.png" alt="Bootstrap Themes" width="1024" height="388">
  </div>
</div>

<div class="bd-featurette">
  <div class="container">
    <h2 class="bd-featurette-title">Built with Bootstrap.</h2>
    <p class="lead">Millions of amazing sites across the web are being built with Bootstrap. Get started on your own with our growing <a href="../examples">collection of examples</a> or by exploring some of our favorites.</p>

    <div class="row bd-featured-sites">
    
      <div class="col-xs-6 col-sm-3">
        <a href="http://expo.getbootstrap.com/2014/10/29/lyft/" target="_blank" title="Lyft">
          <img src="/admin/tool/themetester/docs/4.0.0-alpha.4/assets/img/expo-lyft.jpg" alt="Lyft" class="img-fluid">
        </a>
      </div>
    
      <div class="col-xs-6 col-sm-3">
        <a href="http://expo.getbootstrap.com/2014/09/30/vogue/" target="_blank" title="Vogue">
          <img src="/admin/tool/themetester/docs/4.0.0-alpha.4/assets/img/expo-vogue.jpg" alt="Vogue" class="img-fluid">
        </a>
      </div>
    
      <div class="col-xs-6 col-sm-3">
        <a href="http://expo.getbootstrap.com/2014/03/13/riot-design/" target="_blank" title="Riot Design">
          <img src="/admin/tool/themetester/docs/4.0.0-alpha.4/assets/img/expo-riot.jpg" alt="Riot Design" class="img-fluid">
        </a>
      </div>
    
      <div class="col-xs-6 col-sm-3">
        <a href="http://expo.getbootstrap.com/2014/02/12/newsweek/" target="_blank" title="Newsweek">
          <img src="/admin/tool/themetester/docs/4.0.0-alpha.4/assets/img/expo-newsweek.jpg" alt="Newsweek" class="img-fluid">
        </a>
      </div>
    
    </div>

    <hr class="half-rule">

    <p>We showcase dozens of inspiring projects built with Bootstrap on the Bootstrap Expo.</p>
    <a href="http://expo.getbootstrap.com" class="btn btn-bs btn-outline">Explore the Expo</a>
  </div>
</div>


    <footer class="bd-footer text-muted">
  <div class="container">
    <ul class="bd-footer-links">
      <li><a href="https://github.com/twbs/bootstrap">GitHub</a></li>
      <li><a href="https://twitter.com/getbootstrap">Twitter</a></li>
      <li><a href="/admin/tool/themetester/docs/4.0.0-alpha.4/examples/">Examples</a></li>
      <li><a href="/admin/tool/themetester/docs/4.0.0-alpha.4/about/history/">About</a></li>
    </ul>
    <p>Designed and built with all the love in the world by <a href="https://twitter.com/mdo" target="_blank">@mdo</a> and <a href="https://twitter.com/fat" target="_blank">@fat</a>. Maintained by the <a href="https://github.com/orgs/twbs/people">core team</a> with the help of <a href="https://github.com/twbs/bootstrap/graphs/contributors">our contributors</a>.</p>
    <p>Currently v4.0.0-alpha.4. Code licensed <a rel="license" href="https://github.com/twbs/bootstrap/blob/master/LICENSE" target="_blank">MIT</a>, docs <a rel="license" href="https://creativecommons.org/licenses/by/3.0/" target="_blank">CC BY 3.0</a>.</p>
  </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/admin/tool/themetester/docs/4.0.0-alpha.4/assets/js/vendor/jquery.min.js"><\/script>')</script>

<script src="/admin/tool/themetester/docs/4.0.0-alpha.4/assets/js/vendor/tether.min.js"></script>


  <script src="/admin/tool/themetester/docs/4.0.0-alpha.4/dist/js/bootstrap.js"></script>



  
    <script src="/admin/tool/themetester/docs/4.0.0-alpha.4/assets/js/vendor/anchor.min.js"></script>
  
    <script src="/admin/tool/themetester/docs/4.0.0-alpha.4/assets/js/vendor/clipboard.min.js"></script>
  
    <script src="/admin/tool/themetester/docs/4.0.0-alpha.4/assets/js/vendor/holder.min.js"></script>
  
    <script src="/admin/tool/themetester/docs/4.0.0-alpha.4/assets/js/src/application.js"></script>
  


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="/admin/tool/themetester/docs/4.0.0-alpha.4/assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="/admin/tool/themetester/docs/4.0.0-alpha.4/assets/js/ie-emulation-modes-warning.js"></script>



<script>
Holder.addTheme('gray', {
  bg: '#777',
  fg: 'rgba(255,255,255,.75)',
  font: 'Helvetica',
  fontweight: 'normal'
})
</script>

  </body>
</html>

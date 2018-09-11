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

$strheading = 'Theme Tester: Bootstrap 4 CSS : Build tools';
$url = new moodle_url('/admin/tool/themetester/bootswatch4.php');

// Start setting up the page.
$params = array();
$PAGE->set_context(context_system::instance());
$PAGE->set_url($url);
$PAGE->set_title($strheading);
$PAGE->set_heading("Build tools");
$PAGE->requires->jquery();

$PAGE->requires->css('/admin/tool/themetester/docsearch.min.css');

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
<meta name="twitter:title" content="Build tools">
<meta name="twitter:description" content="Learn how to use Bootstrap’s included npm scripts to build our documentation, compile source code, run tests, and more.">
<meta name="twitter:image" content="/assets/brand/bootstrap-social-logo.png">

<!-- Facebook -->
<meta property="og:url" content="/docs/4.0/getting-started/build-tools/">
<meta property="og:title" content="Build tools">
<meta property="og:description" content="Learn how to use Bootstrap’s included npm scripts to build our documentation, compile source code, run tests, and more.">
<meta property="og:type" content="website">
<meta property="og:image" content="/assets/brand/bootstrap-social.png">
<meta property="og:image:secure_url" content="/assets/brand/bootstrap-social.png">
<meta property="og:image:type" content="image/png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">




    <div class="container-fluid">
      <div class="row flex-xl-nowrap">
        <div class="col-12 col-md-3 col-xl-2 bd-sidebar">
          <form class="bd-search d-flex align-items-center">
  <input type="search" class="form-control" id="search-input" placeholder="Search..." aria-label="Search for..." autocomplete="off">
  <button class="btn btn-link bd-search-docs-toggle d-md-none p-0 ml-3" type="button" data-toggle="collapse" data-target="#bd-docs-nav" aria-controls="bd-docs-nav" aria-expanded="false" aria-label="Toggle docs navigation"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 30 30" width="30" height="30" focusable="false"><title>Menu</title><path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4 7h22M4 15h22M4 23h22"/></svg>
</button>
</form>

<nav class="collapse bd-links" id="bd-docs-nav"><div class="bd-toc-item active">
      <a class="bd-toc-link" href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/getting-started/introduction/">
        Getting started
      </a>

      <ul class="nav bd-sidenav"><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/getting-started/introduction/">
              Introduction
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/getting-started/download/">
              Download
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/getting-started/contents/">
              Contents
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/getting-started/browsers-devices/">
              Browsers & devices
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/getting-started/javascript/">
              JavaScript
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/getting-started/theming/">
              Theming
            </a></li><li class="active bd-sidenav-active">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/getting-started/build-tools/">
              Build tools
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/getting-started/webpack/">
              Webpack
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/getting-started/accessibility/">
              Accessibility
            </a></li></ul>
    </div><div class="bd-toc-item">
      <a class="bd-toc-link" href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/layout/overview/">
        Layout
      </a>

      <ul class="nav bd-sidenav"><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/layout/overview/">
              Overview
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/layout/grid/">
              Grid
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/layout/media-object/">
              Media object
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/layout/utilities-for-layout/">
              Utilities for layout
            </a></li></ul>
    </div><div class="bd-toc-item">
      <a class="bd-toc-link" href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/content/reboot/">
        Content
      </a>

      <ul class="nav bd-sidenav"><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/content/reboot/">
              Reboot
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/content/typography/">
              Typography
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/content/code/">
              Code
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/content/images/">
              Images
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/content/tables/">
              Tables
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/content/figures/">
              Figures
            </a></li></ul>
    </div><div class="bd-toc-item">
      <a class="bd-toc-link" href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/components/alerts/">
        Components
      </a>

      <ul class="nav bd-sidenav"><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/components/alerts/">
              Alerts
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/components/badge/">
              Badge
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/components/breadcrumb/">
              Breadcrumb
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/components/buttons/">
              Buttons
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/components/button-group/">
              Button group
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/components/card/">
              Card
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/components/carousel/">
              Carousel
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/components/collapse/">
              Collapse
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/components/dropdowns/">
              Dropdowns
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/components/forms/">
              Forms
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/components/input-group/">
              Input group
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/components/jumbotron/">
              Jumbotron
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/components/list-group/">
              List group
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/components/modal/">
              Modal
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/components/navs/">
              Navs
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/components/navbar/">
              Navbar
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/components/pagination/">
              Pagination
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/components/popovers/">
              Popovers
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/components/progress/">
              Progress
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/components/scrollspy/">
              Scrollspy
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/components/tooltips/">
              Tooltips
            </a></li></ul>
    </div><div class="bd-toc-item">
      <a class="bd-toc-link" href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/utilities/borders/">
        Utilities
      </a>

      <ul class="nav bd-sidenav"><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/utilities/borders/">
              Borders
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/utilities/clearfix/">
              Clearfix
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/utilities/close-icon/">
              Close icon
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/utilities/colors/">
              Colors
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/utilities/display/">
              Display
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/utilities/embed/">
              Embed
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/utilities/flex/">
              Flex
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/utilities/float/">
              Float
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/utilities/image-replacement/">
              Image replacement
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/utilities/position/">
              Position
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/utilities/screenreaders/">
              Screenreaders
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/utilities/sizing/">
              Sizing
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/utilities/spacing/">
              Spacing
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/utilities/text/">
              Text
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/utilities/vertical-align/">
              Vertical align
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/utilities/visibility/">
              Visibility
            </a></li></ul>
    </div><div class="bd-toc-item">
      <a class="bd-toc-link" href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/extend/approach/">
        Extend
      </a>

      <ul class="nav bd-sidenav"><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/extend/approach/">
              Approach
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/extend/icons/">
              Icons
            </a></li></ul>
    </div><div class="bd-toc-item">
      <a class="bd-toc-link" href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/migration/">
        Migration
      </a>

      <ul class="nav bd-sidenav"></ul>
    </div><div class="bd-toc-item">
      <a class="bd-toc-link" href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/about/overview/">
        About
      </a>

      <ul class="nav bd-sidenav"><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/about/overview/">
              Overview
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/about/brand/">
              Brand
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/about/license/">
              License
            </a></li><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/about/translations/">
              Translations
            </a></li></ul>
    </div></nav>

        </div>

        
          <div class="d-none d-xl-block col-xl-2 bd-toc">
            <ul class="section-nav">
<li class="toc-entry toc-h2"><a href="#tooling-setup">Tooling setup</a></li>
<li class="toc-entry toc-h2"><a href="#using-npm-scripts">Using NPM scripts</a></li>
<li class="toc-entry toc-h2"><a href="#autoprefixer">Autoprefixer</a></li>
<li class="toc-entry toc-h2"><a href="#local-documentation">Local documentation</a></li>
<li class="toc-entry toc-h2"><a href="#troubleshooting">Troubleshooting</a></li>
</ul>
          </div>
        

        <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
          <h1 class="bd-title" id="content">Build tools</h1>
          <p class="bd-lead">Learn how to use Bootstrap’s included npm scripts to build our documentation, compile source code, run tests, and more.</p>
          <h2 id="tooling-setup">Tooling setup</h2>

<p>Bootstrap uses <a href="https://docs.npmjs.com/misc/scripts">NPM scripts</a> for its build system. Our <a href="https://github.com/twbs/bootstrap/blob/v4.0.0/package.json">package.json</a> includes convenient methods for working with the framework, including compiling code, running tests, and more.</p>

<p>To use our build system and run our documentation locally, you’ll need a copy of Bootstrap’s source files and Node. Follow these steps and you should be ready to rock:</p>

<ol>
  <li><a href="https://nodejs.org/download/">Download and install Node.js</a>, which we use to manage our dependencies.</li>
  <li>Navigate to the root <code class="highlighter-rouge">/bootstrap</code> directory and run <code class="highlighter-rouge">npm install</code> to install our local dependencies listed in <a href="https://github.com/twbs/bootstrap/blob/v4.0.0/package.json">package.json</a>.</li>
  <li><a href="https://www.ruby-lang.org/en/documentation/installation/">Install Ruby</a>, install <a href="https://bundler.io/">Bundler</a> with <code class="highlighter-rouge">gem install bundler</code>, and finally run <code class="highlighter-rouge">bundle install</code>. This will install all Ruby dependencies, such as Jekyll and plugins.
    <ul>
      <li><strong>Windows users:</strong> Read <a href="https://jekyllrb.com/docs/windows/">this guide</a> to get Jekyll up and running without problems.</li>
    </ul>
  </li>
</ol>

<p>When completed, you’ll be able to run the various commands provided from the command line.</p>

<h2 id="using-npm-scripts">Using NPM scripts</h2>

<p>Our <a href="https://github.com/twbs/bootstrap/blob/v4.0.0/package.json">package.json</a> includes the following commands and tasks:</p>

<table>
  <thead>
    <tr>
      <th>Task</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><code class="highlighter-rouge">npm run dist</code></td>
      <td><code class="highlighter-rouge">npm run dist</code> creates the <code class="highlighter-rouge">/dist</code> directory with compiled files. <strong>Uses <a href="http://sass-lang.com/">Sass</a>, <a href="https://github.com/postcss/autoprefixer">Autoprefixer</a>, and <a href="https://github.com/mishoo/UglifyJS2">UglifyJS</a>.</strong></td>
    </tr>
    <tr>
      <td><code class="highlighter-rouge">npm test</code></td>
      <td>Same as <code class="highlighter-rouge">npm run dist</code> plus it runs tests locally</td>
    </tr>
    <tr>
      <td><code class="highlighter-rouge">npm run docs</code></td>
      <td>Builds and lints CSS and JavaScript for docs. You can then run the documentation locally via <code class="highlighter-rouge">npm run docs-serve</code>.</td>
    </tr>
  </tbody>
</table>

<p>Run <code class="highlighter-rouge">npm run</code> to see all the npm scripts.</p>

<h2 id="autoprefixer">Autoprefixer</h2>

<p>Bootstrap uses <a href="https://github.com/postcss/autoprefixer">Autoprefixer</a> (included in our build process) to automatically add vendor prefixes to some CSS properties at build time. Doing so saves us time and code by allowing us to write key parts of our CSS a single time while eliminating the need for vendor mixins like those found in v3.</p>

<p>We maintain the list of browsers supported through Autoprefixer in a separate file within our GitHub repository. See <a href="https://github.com/twbs/bootstrap/blob/v4.0.0/package.json">/package.json</a> for details.</p>

<h2 id="local-documentation">Local documentation</h2>

<p>Running our documentation locally requires the use of Jekyll, a decently flexible static site generator that provides us: basic includes, Markdown-based files, templates, and more. Here’s how to get it started:</p>

<ol>
  <li>Run through the <a href="#tooling-setup">tooling setup</a> above to install Jekyll (the site builder) and other Ruby dependencies with <code class="highlighter-rouge">bundle install</code>.</li>
  <li>From the root <code class="highlighter-rouge">/bootstrap</code> directory, run <code class="highlighter-rouge">npm run docs-serve</code> in the command line.</li>
  <li>Open <code class="highlighter-rouge">http://localhost:9001</code> in your browser, and voilà.</li>
</ol>

<p>Learn more about using Jekyll by reading its <a href="https://jekyllrb.com/docs/home/">documentation</a>.</p>

<h2 id="troubleshooting">Troubleshooting</h2>

<p>Should you encounter problems with installing dependencies, uninstall all previous dependency versions (global and local). Then, rerun <code class="highlighter-rouge">npm install</code>.</p>


        </main>
      </div>
    </div>

    <script src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/assets/js/vendor/popper.min.js"></script><script src="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.js"></script><script src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/assets/js/vendor/anchor.min.js"></script>
  <script src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/assets/js/vendor/clipboard.min.js"></script>
  <script src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/assets/js/vendor/holder.min.js"></script>
  <script src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/assets/js/src/application.js"></script>
  <script src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/assets/js/src/ie-emulation-modes-warning.js"></script>
  <script src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/assets/js/src/pwa.js"></script>
  </body>
</html>

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

$strheading = 'Theme Tester: Bootstrap 4 CSS : Tables';
$url = new moodle_url('/admin/tool/themetester/bootswatch4.php');

// Start setting up the page.
$params = array();
$PAGE->set_context(context_system::instance());
$PAGE->set_url($url);
$PAGE->set_title($strheading);
$PAGE->set_heading("Tables");
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
<meta name="twitter:title" content="Tables">
<meta name="twitter:description" content="Documentation and examples for opt-in styling of tables (given their prevalent use in JavaScript plugins) with Bootstrap.">
<meta name="twitter:image" content="/assets/brand/bootstrap-social-logo.png">

<!-- Facebook -->
<meta property="og:url" content="/docs/4.0/content/tables/">
<meta property="og:title" content="Tables">
<meta property="og:description" content="Documentation and examples for opt-in styling of tables (given their prevalent use in JavaScript plugins) with Bootstrap.">
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

<nav class="collapse bd-links" id="bd-docs-nav"><div class="bd-toc-item">
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
            </a></li><li>
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
    </div><div class="bd-toc-item active">
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
            </a></li><li class="active bd-sidenav-active">
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
<li class="toc-entry toc-h2"><a href="#examples">Examples</a></li>
<li class="toc-entry toc-h2"><a href="#table-head-options">Table head options</a></li>
<li class="toc-entry toc-h2"><a href="#striped-rows">Striped rows</a></li>
<li class="toc-entry toc-h2"><a href="#bordered-table">Bordered table</a></li>
<li class="toc-entry toc-h2"><a href="#borderless-table">Borderless table</a></li>
<li class="toc-entry toc-h2"><a href="#hoverable-rows">Hoverable rows</a></li>
<li class="toc-entry toc-h2"><a href="#small-table">Small table</a></li>
<li class="toc-entry toc-h2"><a href="#contextual-classes">Contextual classes</a></li>
<li class="toc-entry toc-h2"><a href="#captions">Captions</a></li>
<li class="toc-entry toc-h2"><a href="#responsive-tables">Responsive tables</a>
<ul>
<li class="toc-entry toc-h3"><a href="#always-responsive">Always responsive</a></li>
<li class="toc-entry toc-h3"><a href="#breakpoint-specific">Breakpoint specific</a></li>
</ul>
</li>
</ul>
          </div>
        

        <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
          <h1 class="bd-title" id="content">Tables</h1>
          <p class="bd-lead">Documentation and examples for opt-in styling of tables (given their prevalent use in JavaScript plugins) with Bootstrap.</p>
          <h2 id="examples">Examples</h2>

<p>Due to the widespread use of tables across third-party widgets like calendars and date pickers, we’ve designed our tables to be <strong>opt-in</strong>. Just add the base class <code class="highlighter-rouge">.table</code> to any <code class="highlighter-rouge">&lt;table&gt;</code>, then extend with custom styles or our various included modifier classes.</p>

<p>Using the most basic table markup, here’s how <code class="highlighter-rouge">.table</code>-based tables look in Bootstrap. <strong>All table styles are inherited in Bootstrap 4</strong>, meaning any nested tables will be styled in the same manner as the parent.</p>

<div class="bd-example">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;thead&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>#<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>First<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Last<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Handle<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/thead&gt;</span>
  <span class="nt">&lt;tbody&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Mark<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Otto<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@mdo<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Jacob<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Thornton<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@fat<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Larry<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>the Bird<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@twitter<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span></code></pre></div>

<p>You can also invert the colors—with light text on dark backgrounds—with <code class="highlighter-rouge">.table-dark</code>.</p>

<div class="bd-example">
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-dark"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;thead&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>#<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>First<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Last<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Handle<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/thead&gt;</span>
  <span class="nt">&lt;tbody&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Mark<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Otto<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@mdo<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Jacob<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Thornton<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@fat<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Larry<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>the Bird<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@twitter<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span></code></pre></div>

<h2 id="table-head-options">Table head options</h2>

<p>Similar to tables and dark tables, use the modifier classes <code class="highlighter-rouge">.thead-light</code> or <code class="highlighter-rouge">.thead-dark</code> to make <code class="highlighter-rouge">&lt;thead&gt;</code>s appear light or dark gray.</p>

<div class="bd-example">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;thead</span> <span class="na">class=</span><span class="s">"thead-dark"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>#<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>First<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Last<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Handle<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/thead&gt;</span>
  <span class="nt">&lt;tbody&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Mark<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Otto<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@mdo<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Jacob<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Thornton<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@fat<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Larry<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>the Bird<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@twitter<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span>

<span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;thead</span> <span class="na">class=</span><span class="s">"thead-light"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>#<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>First<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Last<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Handle<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/thead&gt;</span>
  <span class="nt">&lt;tbody&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Mark<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Otto<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@mdo<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Jacob<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Thornton<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@fat<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Larry<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>the Bird<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@twitter<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span></code></pre></div>

<h2 id="striped-rows">Striped rows</h2>

<p>Use <code class="highlighter-rouge">.table-striped</code> to add zebra-striping to any table row within the <code class="highlighter-rouge">&lt;tbody&gt;</code>.</p>

<div class="bd-example">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-striped"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;thead&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>#<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>First<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Last<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Handle<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/thead&gt;</span>
  <span class="nt">&lt;tbody&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Mark<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Otto<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@mdo<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Jacob<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Thornton<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@fat<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Larry<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>the Bird<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@twitter<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span></code></pre></div>

<div class="bd-example">
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-striped table-dark"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;thead&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>#<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>First<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Last<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Handle<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/thead&gt;</span>
  <span class="nt">&lt;tbody&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Mark<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Otto<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@mdo<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Jacob<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Thornton<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@fat<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Larry<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>the Bird<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@twitter<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span></code></pre></div>

<h2 id="bordered-table">Bordered table</h2>

<p>Add <code class="highlighter-rouge">.table-bordered</code> for borders on all sides of the table and cells.</p>

<div class="bd-example">
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-bordered"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;thead&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>#<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>First<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Last<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Handle<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/thead&gt;</span>
  <span class="nt">&lt;tbody&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Mark<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Otto<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@mdo<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Jacob<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Thornton<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@fat<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td</span> <span class="na">colspan=</span><span class="s">"2"</span><span class="nt">&gt;</span>Larry the Bird<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@twitter<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span></code></pre></div>

<div class="bd-example">
<table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-bordered table-dark"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;thead&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>#<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>First<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Last<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Handle<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/thead&gt;</span>
  <span class="nt">&lt;tbody&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Mark<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Otto<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@mdo<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Jacob<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Thornton<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@fat<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td</span> <span class="na">colspan=</span><span class="s">"2"</span><span class="nt">&gt;</span>Larry the Bird<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@twitter<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span></code></pre></div>

<h2 id="borderless-table">Borderless table</h2>

<p>Add <code class="highlighter-rouge">.table-borderless</code> for a table without borders.</p>

<div class="bd-example">
<table class="table table-borderless">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-borderless"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;thead&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>#<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>First<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Last<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Handle<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/thead&gt;</span>
  <span class="nt">&lt;tbody&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Mark<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Otto<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@mdo<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Jacob<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Thornton<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@fat<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td</span> <span class="na">colspan=</span><span class="s">"2"</span><span class="nt">&gt;</span>Larry the Bird<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@twitter<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span></code></pre></div>

<p><code class="highlighter-rouge">.table-borderless</code> can also be used on dark tables.</p>

<div class="bd-example">
<table class="table table-borderless table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-borderless table-dark"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;thead&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>#<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>First<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Last<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Handle<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/thead&gt;</span>
  <span class="nt">&lt;tbody&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Mark<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Otto<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@mdo<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Jacob<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Thornton<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@fat<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td</span> <span class="na">colspan=</span><span class="s">"2"</span><span class="nt">&gt;</span>Larry the Bird<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@twitter<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span></code></pre></div>

<h2 id="hoverable-rows">Hoverable rows</h2>

<p>Add <code class="highlighter-rouge">.table-hover</code> to enable a hover state on table rows within a <code class="highlighter-rouge">&lt;tbody&gt;</code>.</p>

<div class="bd-example">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-hover"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;thead&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>#<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>First<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Last<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Handle<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/thead&gt;</span>
  <span class="nt">&lt;tbody&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Mark<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Otto<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@mdo<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Jacob<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Thornton<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@fat<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td</span> <span class="na">colspan=</span><span class="s">"2"</span><span class="nt">&gt;</span>Larry the Bird<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@twitter<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span></code></pre></div>

<div class="bd-example">
<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-hover table-dark"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;thead&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>#<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>First<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Last<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Handle<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/thead&gt;</span>
  <span class="nt">&lt;tbody&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Mark<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Otto<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@mdo<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Jacob<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Thornton<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@fat<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td</span> <span class="na">colspan=</span><span class="s">"2"</span><span class="nt">&gt;</span>Larry the Bird<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@twitter<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span></code></pre></div>

<h2 id="small-table">Small table</h2>

<p>Add <code class="highlighter-rouge">.table-sm</code> to make tables more compact by cutting cell padding in half.</p>

<div class="bd-example">
<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-sm"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;thead&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>#<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>First<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Last<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Handle<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/thead&gt;</span>
  <span class="nt">&lt;tbody&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Mark<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Otto<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@mdo<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Jacob<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Thornton<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@fat<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td</span> <span class="na">colspan=</span><span class="s">"2"</span><span class="nt">&gt;</span>Larry the Bird<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@twitter<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span></code></pre></div>

<div class="bd-example">
<table class="table table-sm table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-sm table-dark"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;thead&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>#<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>First<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Last<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Handle<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/thead&gt;</span>
  <span class="nt">&lt;tbody&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Mark<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Otto<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@mdo<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Jacob<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Thornton<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@fat<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td</span> <span class="na">colspan=</span><span class="s">"2"</span><span class="nt">&gt;</span>Larry the Bird<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@twitter<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span></code></pre></div>

<h2 id="contextual-classes">Contextual classes</h2>

<p>Use contextual classes to color table rows or individual cells.</p>

<div class="bd-example">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Class</th>
        <th scope="col">Heading</th>
        <th scope="col">Heading</th>
      </tr>
    </thead>
    <tbody>
      <tr class="table-active">
        <th scope="row">Active</th>
        <td>Cell</td>
        <td>Cell</td>
      </tr>
      <tr>
        <th scope="row">Default</th>
        <td>Cell</td>
        <td>Cell</td>
      </tr>

      
      <tr class="table-primary">
        <th scope="row">Primary</th>
        <td>Cell</td>
        <td>Cell</td>
      </tr>
      <tr class="table-secondary">
        <th scope="row">Secondary</th>
        <td>Cell</td>
        <td>Cell</td>
      </tr>
      <tr class="table-success">
        <th scope="row">Success</th>
        <td>Cell</td>
        <td>Cell</td>
      </tr>
      <tr class="table-danger">
        <th scope="row">Danger</th>
        <td>Cell</td>
        <td>Cell</td>
      </tr>
      <tr class="table-warning">
        <th scope="row">Warning</th>
        <td>Cell</td>
        <td>Cell</td>
      </tr>
      <tr class="table-info">
        <th scope="row">Info</th>
        <td>Cell</td>
        <td>Cell</td>
      </tr>
      <tr class="table-light">
        <th scope="row">Light</th>
        <td>Cell</td>
        <td>Cell</td>
      </tr>
      <tr class="table-dark">
        <th scope="row">Dark</th>
        <td>Cell</td>
        <td>Cell</td>
      </tr>
    </tbody>
  </table>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- On rows --&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"table-active"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>

<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"table-primary"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"table-secondary"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"table-success"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"table-danger"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"table-warning"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"table-info"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"table-light"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"table-dark"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>

<span class="c">&lt;!-- On cells (`td` or `th`) --&gt;</span>
<span class="nt">&lt;tr&gt;</span>
  <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"table-active"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
  
  <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"table-primary"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
  <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"table-secondary"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
  <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"table-success"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
  <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"table-danger"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
  <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"table-warning"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
  <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"table-info"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
  <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"table-light"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
  <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"table-dark"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
<span class="nt">&lt;/tr&gt;</span></code></pre></figure>

<p>Regular table background variants are not available with the dark table, however, you may use <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/utilities/colors/">text or background utilities</a> to achieve similar styles.</p>

<div class="bd-example">
  <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Heading</th>
        <th scope="col">Heading</th>
      </tr>
    </thead>
    <tbody>
      <tr class="bg-primary">
        <th scope="row">1</th>
        <td>Cell</td>
        <td>Cell</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Cell</td>
        <td>Cell</td>
      </tr>
      <tr class="bg-success">
        <th scope="row">3</th>
        <td>Cell</td>
        <td>Cell</td>
      </tr>
      <tr>
        <th scope="row">4</th>
        <td>Cell</td>
        <td>Cell</td>
      </tr>
      <tr class="bg-info">
        <th scope="row">5</th>
        <td>Cell</td>
        <td>Cell</td>
      </tr>
      <tr>
        <th scope="row">6</th>
        <td>Cell</td>
        <td>Cell</td>
      </tr>
      <tr class="bg-warning">
        <th scope="row">7</th>
        <td>Cell</td>
        <td>Cell</td>
      </tr>
      <tr>
        <th scope="row">8</th>
        <td>Cell</td>
        <td>Cell</td>
      </tr>
      <tr class="bg-danger">
        <th scope="row">9</th>
        <td>Cell</td>
        <td>Cell</td>
      </tr>
    </tbody>
  </table>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- On rows --&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"bg-primary"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"bg-success"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"bg-warning"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"bg-danger"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"bg-info"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>

<span class="c">&lt;!-- On cells (`td` or `th`) --&gt;</span>
<span class="nt">&lt;tr&gt;</span>
  <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"bg-primary"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
  <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"bg-success"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
  <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"bg-warning"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
  <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"bg-danger"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
  <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"bg-info"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
<span class="nt">&lt;/tr&gt;</span></code></pre></figure>

<div class="bd-callout bd-callout-warning">
<h5 id="conveying-meaning-to-assistive-technologies">Conveying meaning to assistive technologies</h5>

<p>Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies – such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (e.g. the visible text), or is included through alternative means, such as additional text hidden with the <code class="highlighter-rouge">.sr-only</code> class.</p>
</div>

<p>Create responsive tables by wrapping any <code class="highlighter-rouge">.table</code> with <code class="highlighter-rouge">.table-responsive{-sm|-md|-lg|-xl}</code>, making the table scroll horizontally at each <code class="highlighter-rouge">max-width</code> breakpoint of up to (but not including) 576px, 768px, 992px, and 1120px, respectively.</p>

<div class="bd-callout bd-callout-info">
<p>Note that since browsers do not currently support <a href="https://www.w3.org/TR/mediaqueries-4/#range-context">range context queries</a>, we work around the limitations of <a href="https://www.w3.org/TR/mediaqueries-4/#mq-min-max"><code class="highlighter-rouge">min-</code> and <code class="highlighter-rouge">max-</code> prefixes</a> and viewports with fractional widths (which can occur under certain conditions on high-dpi devices, for instance) by using values with higher precision for these comparisons.</p>
</div>

<h2 id="captions">Captions</h2>

<p>A <code class="highlighter-rouge">&lt;caption&gt;</code> functions like a heading for a table. It helps users with screen readers to find a table and understand what it’s about and decide if they want to read it.</p>

<div class="bd-example">
<table class="table">
  <caption>List of users</caption>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;caption&gt;</span>List of users<span class="nt">&lt;/caption&gt;</span>
  <span class="nt">&lt;thead&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>#<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>First<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Last<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"col"</span><span class="nt">&gt;</span>Handle<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/thead&gt;</span>
  <span class="nt">&lt;tbody&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Mark<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Otto<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@mdo<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Jacob<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Thornton<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@fat<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Larry<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>the Bird<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@twitter<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span></code></pre></div>

<h2 id="responsive-tables">Responsive tables</h2>

<p>Responsive tables allow tables to be scrolled horizontally with ease. Make any table responsive across all viewports by wrapping a <code class="highlighter-rouge">.table</code> with <code class="highlighter-rouge">.table-responsive</code>. Or, pick a maximum breakpoint with which to have a responsive table up to by using <code class="highlighter-rouge">.table-responsive{-sm|-md|-lg|-xl}</code>.</p>

<div class="bd-callout bd-callout-warning">
<h5 id="vertical-clippingtruncation">Vertical clipping/truncation</h5>

<p>Responsive tables make use of <code class="highlighter-rouge">overflow-y: hidden</code>, which clips off any content that goes beyond the bottom or top edges of the table. In particular, this can clip off dropdown menus and other third-party widgets.</p>
</div>

<h3 id="always-responsive">Always responsive</h3>

<p>Across every breakpoint, use <code class="highlighter-rouge">.table-responsive</code> for horizontally scrolling tables.</p>

<div class="bd-example">
  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"table-responsive"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table"</span><span class="nt">&gt;</span>
    ...
  <span class="nt">&lt;/table&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>

<h3 id="breakpoint-specific">Breakpoint specific</h3>

<p>Use <code class="highlighter-rouge">.table-responsive{-sm|-md|-lg|-xl}</code> as needed to create responsive tables up to a particular breakpoint. From that breakpoint and up, the table will behave normally and not scroll horizontally.</p>

<div class="bd-example">

<div class="table-responsive-sm">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Heading</th>
        <th scope="col">Heading</th>
        <th scope="col">Heading</th>
        <th scope="col">Heading</th>
        <th scope="col">Heading</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
      </tr>
    </tbody>
  </table>
</div>

<div class="table-responsive-md">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Heading</th>
        <th scope="col">Heading</th>
        <th scope="col">Heading</th>
        <th scope="col">Heading</th>
        <th scope="col">Heading</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
      </tr>
    </tbody>
  </table>
</div>

<div class="table-responsive-lg">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Heading</th>
        <th scope="col">Heading</th>
        <th scope="col">Heading</th>
        <th scope="col">Heading</th>
        <th scope="col">Heading</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
      </tr>
    </tbody>
  </table>
</div>

<div class="table-responsive-xl">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Heading</th>
        <th scope="col">Heading</th>
        <th scope="col">Heading</th>
        <th scope="col">Heading</th>
        <th scope="col">Heading</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
      </tr>
    </tbody>
  </table>
</div>

</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"table-responsive-sm"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table"</span><span class="nt">&gt;</span>
    ...
  <span class="nt">&lt;/table&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"table-responsive-md"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table"</span><span class="nt">&gt;</span>
    ...
  <span class="nt">&lt;/table&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"table-responsive-lg"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table"</span><span class="nt">&gt;</span>
    ...
  <span class="nt">&lt;/table&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"table-responsive-xl"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table"</span><span class="nt">&gt;</span>
    ...
  <span class="nt">&lt;/table&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>


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

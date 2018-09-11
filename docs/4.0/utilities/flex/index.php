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

$strheading = 'Theme Tester: Bootstrap 4 CSS : Flex';
$url = new moodle_url('/admin/tool/themetester/bootswatch4.php');

// Start setting up the page.
$params = array();
$PAGE->set_context(context_system::instance());
$PAGE->set_url($url);
$PAGE->set_title($strheading);
$PAGE->set_heading("Flex");
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
<meta name="twitter:title" content="Flex">
<meta name="twitter:description" content="Quickly manage the layout, alignment, and sizing of grid columns, navigation, components, and more with a full suite of responsive flexbox utilities. For more complex implementations, custom CSS may be necessary.">
<meta name="twitter:image" content="/assets/brand/bootstrap-social-logo.png">

<!-- Facebook -->
<meta property="og:url" content="/docs/4.0/utilities/flex/">
<meta property="og:title" content="Flex">
<meta property="og:description" content="Quickly manage the layout, alignment, and sizing of grid columns, navigation, components, and more with a full suite of responsive flexbox utilities. For more complex implementations, custom CSS may be necessary.">
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
    </div><div class="bd-toc-item active">
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
            </a></li><li class="active bd-sidenav-active">
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
<li class="toc-entry toc-h2"><a href="#enable-flex-behaviors">Enable flex behaviors</a></li>
<li class="toc-entry toc-h2"><a href="#direction">Direction</a></li>
<li class="toc-entry toc-h2"><a href="#justify-content">Justify content</a></li>
<li class="toc-entry toc-h2"><a href="#align-items">Align items</a></li>
<li class="toc-entry toc-h2"><a href="#align-self">Align self</a></li>
<li class="toc-entry toc-h2"><a href="#fill">Fill</a></li>
<li class="toc-entry toc-h2"><a href="#auto-margins">Auto margins</a>
<ul>
<li class="toc-entry toc-h3"><a href="#with-align-items">With align-items</a></li>
</ul>
</li>
<li class="toc-entry toc-h2"><a href="#wrap">Wrap</a></li>
<li class="toc-entry toc-h2"><a href="#order">Order</a></li>
<li class="toc-entry toc-h2"><a href="#align-content">Align content</a></li>
</ul>
          </div>
        

        <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
          <h1 class="bd-title" id="content">Flex</h1>
          <p class="bd-lead">Quickly manage the layout, alignment, and sizing of grid columns, navigation, components, and more with a full suite of responsive flexbox utilities. For more complex implementations, custom CSS may be necessary.</p>
          <h2 id="enable-flex-behaviors">Enable flex behaviors</h2>

<p>Apply <code class="highlighter-rouge">display</code> utilities to create a flexbox container and transform <strong>direct children elements</strong> into flex items. Flex containers and items are able to be modified further with additional flex properties.</p>

<div class="bd-example">
<div class="d-flex p-2 bd-highlight">I'm a flexbox container!</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex p-2"</span><span class="nt">&gt;</span>I'm a flexbox container!<span class="nt">&lt;/div&gt;</span></code></pre></div>

<div class="bd-example">
<div class="d-inline-flex p-2 bd-highlight">I'm an inline flexbox container!</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-inline-flex p-2"</span><span class="nt">&gt;</span>I'm an inline flexbox container!<span class="nt">&lt;/div&gt;</span></code></pre></div>

<p>Responsive variations also exist for <code class="highlighter-rouge">.d-flex</code> and <code class="highlighter-rouge">.d-inline-flex</code>.</p>

<ul>
  <li><code class="highlighter-rouge">.d-flex</code></li>
  <li><code class="highlighter-rouge">.d-inline-flex</code></li>
  <li><code class="highlighter-rouge">.d-sm-flex</code></li>
  <li><code class="highlighter-rouge">.d-sm-inline-flex</code></li>
  <li><code class="highlighter-rouge">.d-md-flex</code></li>
  <li><code class="highlighter-rouge">.d-md-inline-flex</code></li>
  <li><code class="highlighter-rouge">.d-lg-flex</code></li>
  <li><code class="highlighter-rouge">.d-lg-inline-flex</code></li>
  <li><code class="highlighter-rouge">.d-xl-flex</code></li>
  <li><code class="highlighter-rouge">.d-xl-inline-flex</code></li>
</ul>

<h2 id="direction">Direction</h2>

<p>Set the direction of flex items in a flex container with direction utilities. In most cases you can omit the horizontal class here as the browser default is <code class="highlighter-rouge">row</code>. However, you may encounter situations where you needed to explicitly set this value (like responsive layouts).</p>

<p>Use <code class="highlighter-rouge">.flex-row</code> to set a horizontal direction (the browser default), or <code class="highlighter-rouge">.flex-row-reverse</code> to start the horizontal direction from the opposite side.</p>

<div class="bd-example">
<div class="d-flex flex-row bd-highlight mb-3">
  <div class="p-2 bd-highlight">Flex item 1</div>
  <div class="p-2 bd-highlight">Flex item 2</div>
  <div class="p-2 bd-highlight">Flex item 3</div>
</div>
<div class="d-flex flex-row-reverse bd-highlight">
  <div class="p-2 bd-highlight">Flex item 1</div>
  <div class="p-2 bd-highlight">Flex item 2</div>
  <div class="p-2 bd-highlight">Flex item 3</div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex flex-row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"p-2"</span><span class="nt">&gt;</span>Flex item 1<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"p-2"</span><span class="nt">&gt;</span>Flex item 2<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"p-2"</span><span class="nt">&gt;</span>Flex item 3<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex flex-row-reverse"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"p-2"</span><span class="nt">&gt;</span>Flex item 1<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"p-2"</span><span class="nt">&gt;</span>Flex item 2<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"p-2"</span><span class="nt">&gt;</span>Flex item 3<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<p>Use <code class="highlighter-rouge">.flex-column</code> to set a vertical direction, or <code class="highlighter-rouge">.flex-column-reverse</code>  to start the vertical direction from the opposite side.</p>

<div class="bd-example">
<div class="d-flex flex-column bd-highlight mb-3">
  <div class="p-2 bd-highlight">Flex item 1</div>
  <div class="p-2 bd-highlight">Flex item 2</div>
  <div class="p-2 bd-highlight">Flex item 3</div>
</div>
<div class="d-flex flex-column-reverse bd-highlight">
  <div class="p-2 bd-highlight">Flex item 1</div>
  <div class="p-2 bd-highlight">Flex item 2</div>
  <div class="p-2 bd-highlight">Flex item 3</div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex flex-column"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"p-2"</span><span class="nt">&gt;</span>Flex item 1<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"p-2"</span><span class="nt">&gt;</span>Flex item 2<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"p-2"</span><span class="nt">&gt;</span>Flex item 3<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex flex-column-reverse"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"p-2"</span><span class="nt">&gt;</span>Flex item 1<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"p-2"</span><span class="nt">&gt;</span>Flex item 2<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"p-2"</span><span class="nt">&gt;</span>Flex item 3<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<p>Responsive variations also exist for <code class="highlighter-rouge">flex-direction</code>.</p>

<ul>
  <li><code class="highlighter-rouge">.flex-row</code></li>
  <li><code class="highlighter-rouge">.flex-row-reverse</code></li>
  <li><code class="highlighter-rouge">.flex-column</code></li>
  <li><code class="highlighter-rouge">.flex-column-reverse</code></li>
  <li><code class="highlighter-rouge">.flex-sm-row</code></li>
  <li><code class="highlighter-rouge">.flex-sm-row-reverse</code></li>
  <li><code class="highlighter-rouge">.flex-sm-column</code></li>
  <li><code class="highlighter-rouge">.flex-sm-column-reverse</code></li>
  <li><code class="highlighter-rouge">.flex-md-row</code></li>
  <li><code class="highlighter-rouge">.flex-md-row-reverse</code></li>
  <li><code class="highlighter-rouge">.flex-md-column</code></li>
  <li><code class="highlighter-rouge">.flex-md-column-reverse</code></li>
  <li><code class="highlighter-rouge">.flex-lg-row</code></li>
  <li><code class="highlighter-rouge">.flex-lg-row-reverse</code></li>
  <li><code class="highlighter-rouge">.flex-lg-column</code></li>
  <li><code class="highlighter-rouge">.flex-lg-column-reverse</code></li>
  <li><code class="highlighter-rouge">.flex-xl-row</code></li>
  <li><code class="highlighter-rouge">.flex-xl-row-reverse</code></li>
  <li><code class="highlighter-rouge">.flex-xl-column</code></li>
  <li><code class="highlighter-rouge">.flex-xl-column-reverse</code></li>
</ul>

<h2 id="justify-content">Justify content</h2>

<p>Use <code class="highlighter-rouge">justify-content</code> utilities on flexbox containers to change the alignment of flex items on the main axis (the x-axis to start, y-axis if <code class="highlighter-rouge">flex-direction: column</code>). Choose from <code class="highlighter-rouge">start</code> (browser default), <code class="highlighter-rouge">end</code>, <code class="highlighter-rouge">center</code>, <code class="highlighter-rouge">between</code>, or <code class="highlighter-rouge">around</code>.</p>

<div class="bd-example">
  <div class="d-flex justify-content-start bd-highlight mb-3">
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
  </div>
  <div class="d-flex justify-content-end bd-highlight mb-3">
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
  </div>
  <div class="d-flex justify-content-center bd-highlight mb-3">
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
  </div>
  <div class="d-flex justify-content-between bd-highlight mb-3">
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
  </div>
  <div class="d-flex justify-content-around bd-highlight">
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
  </div>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex justify-content-start"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex justify-content-end"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex justify-content-center"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex justify-content-between"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex justify-content-around"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span></code></pre></figure>

<p>Responsive variations also exist for <code class="highlighter-rouge">justify-content</code>.</p>

<ul>
  <li><code class="highlighter-rouge">.justify-content-start</code></li>
  <li><code class="highlighter-rouge">.justify-content-end</code></li>
  <li><code class="highlighter-rouge">.justify-content-center</code></li>
  <li><code class="highlighter-rouge">.justify-content-between</code></li>
  <li><code class="highlighter-rouge">.justify-content-around</code></li>
  <li><code class="highlighter-rouge">.justify-content-sm-start</code></li>
  <li><code class="highlighter-rouge">.justify-content-sm-end</code></li>
  <li><code class="highlighter-rouge">.justify-content-sm-center</code></li>
  <li><code class="highlighter-rouge">.justify-content-sm-between</code></li>
  <li><code class="highlighter-rouge">.justify-content-sm-around</code></li>
  <li><code class="highlighter-rouge">.justify-content-md-start</code></li>
  <li><code class="highlighter-rouge">.justify-content-md-end</code></li>
  <li><code class="highlighter-rouge">.justify-content-md-center</code></li>
  <li><code class="highlighter-rouge">.justify-content-md-between</code></li>
  <li><code class="highlighter-rouge">.justify-content-md-around</code></li>
  <li><code class="highlighter-rouge">.justify-content-lg-start</code></li>
  <li><code class="highlighter-rouge">.justify-content-lg-end</code></li>
  <li><code class="highlighter-rouge">.justify-content-lg-center</code></li>
  <li><code class="highlighter-rouge">.justify-content-lg-between</code></li>
  <li><code class="highlighter-rouge">.justify-content-lg-around</code></li>
  <li><code class="highlighter-rouge">.justify-content-xl-start</code></li>
  <li><code class="highlighter-rouge">.justify-content-xl-end</code></li>
  <li><code class="highlighter-rouge">.justify-content-xl-center</code></li>
  <li><code class="highlighter-rouge">.justify-content-xl-between</code></li>
  <li><code class="highlighter-rouge">.justify-content-xl-around</code></li>
</ul>

<h2 id="align-items">Align items</h2>

<p>Use <code class="highlighter-rouge">align-items</code> utilities on flexbox containers to change the alignment of flex items on the cross axis (the y-axis to start, x-axis if <code class="highlighter-rouge">flex-direction: column</code>). Choose from <code class="highlighter-rouge">start</code>, <code class="highlighter-rouge">end</code>, <code class="highlighter-rouge">center</code>, <code class="highlighter-rouge">baseline</code>, or <code class="highlighter-rouge">stretch</code> (browser default).</p>

<div class="bd-example">
  <div class="d-flex align-items-start bd-highlight mb-3" style="height: 100px">
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
  </div>
  <div class="d-flex align-items-end bd-highlight mb-3" style="height: 100px">
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
  </div>
  <div class="d-flex align-items-center bd-highlight mb-3" style="height: 100px">
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
  </div>
  <div class="d-flex align-items-baseline bd-highlight mb-3" style="height: 100px">
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
  </div>
  <div class="d-flex align-items-stretch bd-highlight" style="height: 100px">
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
  </div>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex align-items-start"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex align-items-end"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex align-items-center"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex align-items-baseline"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex align-items-stretch"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span></code></pre></figure>

<p>Responsive variations also exist for <code class="highlighter-rouge">align-items</code>.</p>

<ul>
  <li><code class="highlighter-rouge">.align-items-start</code></li>
  <li><code class="highlighter-rouge">.align-items-end</code></li>
  <li><code class="highlighter-rouge">.align-items-center</code></li>
  <li><code class="highlighter-rouge">.align-items-baseline</code></li>
  <li><code class="highlighter-rouge">.align-items-stretch</code></li>
  <li><code class="highlighter-rouge">.align-items-sm-start</code></li>
  <li><code class="highlighter-rouge">.align-items-sm-end</code></li>
  <li><code class="highlighter-rouge">.align-items-sm-center</code></li>
  <li><code class="highlighter-rouge">.align-items-sm-baseline</code></li>
  <li><code class="highlighter-rouge">.align-items-sm-stretch</code></li>
  <li><code class="highlighter-rouge">.align-items-md-start</code></li>
  <li><code class="highlighter-rouge">.align-items-md-end</code></li>
  <li><code class="highlighter-rouge">.align-items-md-center</code></li>
  <li><code class="highlighter-rouge">.align-items-md-baseline</code></li>
  <li><code class="highlighter-rouge">.align-items-md-stretch</code></li>
  <li><code class="highlighter-rouge">.align-items-lg-start</code></li>
  <li><code class="highlighter-rouge">.align-items-lg-end</code></li>
  <li><code class="highlighter-rouge">.align-items-lg-center</code></li>
  <li><code class="highlighter-rouge">.align-items-lg-baseline</code></li>
  <li><code class="highlighter-rouge">.align-items-lg-stretch</code></li>
  <li><code class="highlighter-rouge">.align-items-xl-start</code></li>
  <li><code class="highlighter-rouge">.align-items-xl-end</code></li>
  <li><code class="highlighter-rouge">.align-items-xl-center</code></li>
  <li><code class="highlighter-rouge">.align-items-xl-baseline</code></li>
  <li><code class="highlighter-rouge">.align-items-xl-stretch</code></li>
</ul>

<h2 id="align-self">Align self</h2>

<p>Use <code class="highlighter-rouge">align-self</code> utilities on flexbox items to individually change their alignment on the cross axis (the y-axis to start, x-axis if <code class="highlighter-rouge">flex-direction: column</code>). Choose from the same options as <code class="highlighter-rouge">align-items</code>: <code class="highlighter-rouge">start</code>, <code class="highlighter-rouge">end</code>, <code class="highlighter-rouge">center</code>, <code class="highlighter-rouge">baseline</code>, or <code class="highlighter-rouge">stretch</code> (browser default).</p>

<div class="bd-example">
  <div class="d-flex bd-highlight mb-3" style="height: 100px">
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="align-self-start p-2 bd-highlight">Aligned flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
  </div>
  <div class="d-flex bd-highlight mb-3" style="height: 100px">
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="align-self-end p-2 bd-highlight">Aligned flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
  </div>
  <div class="d-flex bd-highlight mb-3" style="height: 100px">
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="align-self-center p-2 bd-highlight">Aligned flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
  </div>
  <div class="d-flex bd-highlight mb-3" style="height: 100px">
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="align-self-baseline p-2 bd-highlight">Aligned flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
  </div>
  <div class="d-flex bd-highlight" style="height: 100px">
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="align-self-stretch p-2 bd-highlight">Aligned flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
  </div>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"align-self-start"</span><span class="nt">&gt;</span>Aligned flex item<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"align-self-end"</span><span class="nt">&gt;</span>Aligned flex item<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"align-self-center"</span><span class="nt">&gt;</span>Aligned flex item<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"align-self-baseline"</span><span class="nt">&gt;</span>Aligned flex item<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"align-self-stretch"</span><span class="nt">&gt;</span>Aligned flex item<span class="nt">&lt;/div&gt;</span></code></pre></figure>

<p>Responsive variations also exist for <code class="highlighter-rouge">align-self</code>.</p>

<ul>
  <li><code class="highlighter-rouge">.align-self-start</code></li>
  <li><code class="highlighter-rouge">.align-self-end</code></li>
  <li><code class="highlighter-rouge">.align-self-center</code></li>
  <li><code class="highlighter-rouge">.align-self-baseline</code></li>
  <li><code class="highlighter-rouge">.align-self-stretch</code></li>
  <li><code class="highlighter-rouge">.align-self-sm-start</code></li>
  <li><code class="highlighter-rouge">.align-self-sm-end</code></li>
  <li><code class="highlighter-rouge">.align-self-sm-center</code></li>
  <li><code class="highlighter-rouge">.align-self-sm-baseline</code></li>
  <li><code class="highlighter-rouge">.align-self-sm-stretch</code></li>
  <li><code class="highlighter-rouge">.align-self-md-start</code></li>
  <li><code class="highlighter-rouge">.align-self-md-end</code></li>
  <li><code class="highlighter-rouge">.align-self-md-center</code></li>
  <li><code class="highlighter-rouge">.align-self-md-baseline</code></li>
  <li><code class="highlighter-rouge">.align-self-md-stretch</code></li>
  <li><code class="highlighter-rouge">.align-self-lg-start</code></li>
  <li><code class="highlighter-rouge">.align-self-lg-end</code></li>
  <li><code class="highlighter-rouge">.align-self-lg-center</code></li>
  <li><code class="highlighter-rouge">.align-self-lg-baseline</code></li>
  <li><code class="highlighter-rouge">.align-self-lg-stretch</code></li>
  <li><code class="highlighter-rouge">.align-self-xl-start</code></li>
  <li><code class="highlighter-rouge">.align-self-xl-end</code></li>
  <li><code class="highlighter-rouge">.align-self-xl-center</code></li>
  <li><code class="highlighter-rouge">.align-self-xl-baseline</code></li>
  <li><code class="highlighter-rouge">.align-self-xl-stretch</code></li>
</ul>

<h2 id="fill">Fill</h2>

<p>Use the <code class="highlighter-rouge">.flex-fill</code> class on a series of sibling elements to force them into equal widths while taking up all available horizontal space. <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/components/navs/#working-with-flex-utilities">Especially useful for equal-width, or justified, navigation.</a></p>

<div class="bd-example">
<div class="d-flex bd-highlight">
  <div class="p-2 flex-fill bd-highlight">Flex item</div>
  <div class="p-2 flex-fill bd-highlight">Flex item</div>
  <div class="p-2 flex-fill bd-highlight">Flex item</div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"p-2 flex-fill"</span><span class="nt">&gt;</span>Flex item<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"p-2 flex-fill"</span><span class="nt">&gt;</span>Flex item<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"p-2 flex-fill"</span><span class="nt">&gt;</span>Flex item<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<p>Responsive variations also exist for <code class="highlighter-rouge">flex-fill</code>.</p>

<ul>
  <li><code class="highlighter-rouge">.flex-fill</code></li>
  <li><code class="highlighter-rouge">.flex-sm-fill</code></li>
  <li><code class="highlighter-rouge">.flex-md-fill</code></li>
  <li><code class="highlighter-rouge">.flex-lg-fill</code></li>
  <li><code class="highlighter-rouge">.flex-xl-fill</code></li>
</ul>

<h2 id="auto-margins">Auto margins</h2>

<p>Flexbox can do some pretty awesome things when you mix flex alignments with auto margins. Shown below are three examples of controlling flex items via auto margins: default (no auto margin), pushing two items to the right (<code class="highlighter-rouge">.mr-auto</code>), and pushing two items to the left (<code class="highlighter-rouge">.ml-auto</code>).</p>

<p><strong>Unfortunately, IE10 and IE11 do not properly support auto margins on flex items whose parent has a non-default <code class="highlighter-rouge">justify-content</code> value.</strong> <a href="https://stackoverflow.com/a/37535548">See this StackOverflow answer</a> for more details.</p>

<div class="bd-example">
<div class="d-flex bd-highlight mb-3">
  <div class="p-2 bd-highlight">Flex item</div>
  <div class="p-2 bd-highlight">Flex item</div>
  <div class="p-2 bd-highlight">Flex item</div>
</div>

<div class="d-flex bd-highlight mb-3">
  <div class="mr-auto p-2 bd-highlight">Flex item</div>
  <div class="p-2 bd-highlight">Flex item</div>
  <div class="p-2 bd-highlight">Flex item</div>
</div>

<div class="d-flex bd-highlight mb-3">
  <div class="p-2 bd-highlight">Flex item</div>
  <div class="p-2 bd-highlight">Flex item</div>
  <div class="ml-auto p-2 bd-highlight">Flex item</div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"p-2"</span><span class="nt">&gt;</span>Flex item<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"p-2"</span><span class="nt">&gt;</span>Flex item<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"p-2"</span><span class="nt">&gt;</span>Flex item<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"mr-auto p-2"</span><span class="nt">&gt;</span>Flex item<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"p-2"</span><span class="nt">&gt;</span>Flex item<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"p-2"</span><span class="nt">&gt;</span>Flex item<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"p-2"</span><span class="nt">&gt;</span>Flex item<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"p-2"</span><span class="nt">&gt;</span>Flex item<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"ml-auto p-2"</span><span class="nt">&gt;</span>Flex item<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h3 id="with-align-items">With align-items</h3>

<p>Vertically move one flex item to the top or bottom of a container by mixing <code class="highlighter-rouge">align-items</code>, <code class="highlighter-rouge">flex-direction: column</code>, and <code class="highlighter-rouge">margin-top: auto</code> or <code class="highlighter-rouge">margin-bottom: auto</code>.</p>

<div class="bd-example">
<div class="d-flex align-items-start flex-column bd-highlight mb-3" style="height: 200px;">
  <div class="mb-auto p-2 bd-highlight">Flex item</div>
  <div class="p-2 bd-highlight">Flex item</div>
  <div class="p-2 bd-highlight">Flex item</div>
</div>

<div class="d-flex align-items-end flex-column bd-highlight mb-3" style="height: 200px;">
  <div class="p-2 bd-highlight">Flex item</div>
  <div class="p-2 bd-highlight">Flex item</div>
  <div class="mt-auto p-2 bd-highlight">Flex item</div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex align-items-start flex-column"</span> <span class="na">style=</span><span class="s">"height: 200px;"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"mb-auto p-2"</span><span class="nt">&gt;</span>Flex item<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"p-2"</span><span class="nt">&gt;</span>Flex item<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"p-2"</span><span class="nt">&gt;</span>Flex item<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex align-items-end flex-column"</span> <span class="na">style=</span><span class="s">"height: 200px;"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"p-2"</span><span class="nt">&gt;</span>Flex item<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"p-2"</span><span class="nt">&gt;</span>Flex item<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"mt-auto p-2"</span><span class="nt">&gt;</span>Flex item<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="wrap">Wrap</h2>

<p>Change how flex items wrap in a flex container. Choose from no wrapping at all (the browser default) with <code class="highlighter-rouge">.flex-nowrap</code>, wrapping with <code class="highlighter-rouge">.flex-wrap</code>, or reverse wrapping with <code class="highlighter-rouge">.flex-wrap-reverse</code>.</p>

<div class="bd-example">
  <div class="d-flex flex-nowrap bd-highlight" style="width: 8rem;">
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
  </div>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex flex-nowrap"</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/div&gt;</span></code></pre></figure>

<div class="bd-example">
  <div class="d-flex flex-wrap bd-highlight">
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
  </div>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex flex-wrap"</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/div&gt;</span></code></pre></figure>

<div class="bd-example">
  <div class="d-flex flex-wrap-reverse bd-highlight">
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
  </div>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex flex-wrap-reverse"</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/div&gt;</span></code></pre></figure>

<p>Responsive variations also exist for <code class="highlighter-rouge">flex-wrap</code>.</p>

<ul>
  <li><code class="highlighter-rouge">.flex-nowrap</code></li>
  <li><code class="highlighter-rouge">.flex-wrap</code></li>
  <li><code class="highlighter-rouge">.flex-wrap-reverse</code></li>
  <li><code class="highlighter-rouge">.flex-sm-nowrap</code></li>
  <li><code class="highlighter-rouge">.flex-sm-wrap</code></li>
  <li><code class="highlighter-rouge">.flex-sm-wrap-reverse</code></li>
  <li><code class="highlighter-rouge">.flex-md-nowrap</code></li>
  <li><code class="highlighter-rouge">.flex-md-wrap</code></li>
  <li><code class="highlighter-rouge">.flex-md-wrap-reverse</code></li>
  <li><code class="highlighter-rouge">.flex-lg-nowrap</code></li>
  <li><code class="highlighter-rouge">.flex-lg-wrap</code></li>
  <li><code class="highlighter-rouge">.flex-lg-wrap-reverse</code></li>
  <li><code class="highlighter-rouge">.flex-xl-nowrap</code></li>
  <li><code class="highlighter-rouge">.flex-xl-wrap</code></li>
  <li><code class="highlighter-rouge">.flex-xl-wrap-reverse</code></li>
</ul>

<h2 id="order">Order</h2>

<p>Change the <em>visual</em> order of specific flex items with a handful of <code class="highlighter-rouge">order</code> utilities. We only provide options for making an item first or last, as well as a reset to use the DOM order. As <code class="highlighter-rouge">order</code> takes any integer value (e.g., <code class="highlighter-rouge">5</code>), add custom CSS for any additional values needed.</p>

<div class="bd-example">
<div class="d-flex flex-nowrap bd-highlight">
  <div class="order-3 p-2 bd-highlight">First flex item</div>
  <div class="order-2 p-2 bd-highlight">Second flex item</div>
  <div class="order-1 p-2 bd-highlight">Third flex item</div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex flex-nowrap"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"order-3 p-2"</span><span class="nt">&gt;</span>First flex item<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"order-2 p-2"</span><span class="nt">&gt;</span>Second flex item<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"order-1 p-2"</span><span class="nt">&gt;</span>Third flex item<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<p>Responsive variations also exist for <code class="highlighter-rouge">order</code>.</p>

<ul>
  <li><code class="highlighter-rouge">.order-0</code></li>
  <li><code class="highlighter-rouge">.order-1</code></li>
  <li><code class="highlighter-rouge">.order-2</code></li>
  <li><code class="highlighter-rouge">.order-3</code></li>
  <li><code class="highlighter-rouge">.order-4</code></li>
  <li><code class="highlighter-rouge">.order-5</code></li>
  <li><code class="highlighter-rouge">.order-6</code></li>
  <li><code class="highlighter-rouge">.order-7</code></li>
  <li><code class="highlighter-rouge">.order-8</code></li>
  <li><code class="highlighter-rouge">.order-9</code></li>
  <li><code class="highlighter-rouge">.order-10</code></li>
  <li><code class="highlighter-rouge">.order-11</code></li>
  <li><code class="highlighter-rouge">.order-12</code></li>
  <li><code class="highlighter-rouge">.order-sm-0</code></li>
  <li><code class="highlighter-rouge">.order-sm-1</code></li>
  <li><code class="highlighter-rouge">.order-sm-2</code></li>
  <li><code class="highlighter-rouge">.order-sm-3</code></li>
  <li><code class="highlighter-rouge">.order-sm-4</code></li>
  <li><code class="highlighter-rouge">.order-sm-5</code></li>
  <li><code class="highlighter-rouge">.order-sm-6</code></li>
  <li><code class="highlighter-rouge">.order-sm-7</code></li>
  <li><code class="highlighter-rouge">.order-sm-8</code></li>
  <li><code class="highlighter-rouge">.order-sm-9</code></li>
  <li><code class="highlighter-rouge">.order-sm-10</code></li>
  <li><code class="highlighter-rouge">.order-sm-11</code></li>
  <li><code class="highlighter-rouge">.order-sm-12</code></li>
  <li><code class="highlighter-rouge">.order-md-0</code></li>
  <li><code class="highlighter-rouge">.order-md-1</code></li>
  <li><code class="highlighter-rouge">.order-md-2</code></li>
  <li><code class="highlighter-rouge">.order-md-3</code></li>
  <li><code class="highlighter-rouge">.order-md-4</code></li>
  <li><code class="highlighter-rouge">.order-md-5</code></li>
  <li><code class="highlighter-rouge">.order-md-6</code></li>
  <li><code class="highlighter-rouge">.order-md-7</code></li>
  <li><code class="highlighter-rouge">.order-md-8</code></li>
  <li><code class="highlighter-rouge">.order-md-9</code></li>
  <li><code class="highlighter-rouge">.order-md-10</code></li>
  <li><code class="highlighter-rouge">.order-md-11</code></li>
  <li><code class="highlighter-rouge">.order-md-12</code></li>
  <li><code class="highlighter-rouge">.order-lg-0</code></li>
  <li><code class="highlighter-rouge">.order-lg-1</code></li>
  <li><code class="highlighter-rouge">.order-lg-2</code></li>
  <li><code class="highlighter-rouge">.order-lg-3</code></li>
  <li><code class="highlighter-rouge">.order-lg-4</code></li>
  <li><code class="highlighter-rouge">.order-lg-5</code></li>
  <li><code class="highlighter-rouge">.order-lg-6</code></li>
  <li><code class="highlighter-rouge">.order-lg-7</code></li>
  <li><code class="highlighter-rouge">.order-lg-8</code></li>
  <li><code class="highlighter-rouge">.order-lg-9</code></li>
  <li><code class="highlighter-rouge">.order-lg-10</code></li>
  <li><code class="highlighter-rouge">.order-lg-11</code></li>
  <li><code class="highlighter-rouge">.order-lg-12</code></li>
  <li><code class="highlighter-rouge">.order-xl-0</code></li>
  <li><code class="highlighter-rouge">.order-xl-1</code></li>
  <li><code class="highlighter-rouge">.order-xl-2</code></li>
  <li><code class="highlighter-rouge">.order-xl-3</code></li>
  <li><code class="highlighter-rouge">.order-xl-4</code></li>
  <li><code class="highlighter-rouge">.order-xl-5</code></li>
  <li><code class="highlighter-rouge">.order-xl-6</code></li>
  <li><code class="highlighter-rouge">.order-xl-7</code></li>
  <li><code class="highlighter-rouge">.order-xl-8</code></li>
  <li><code class="highlighter-rouge">.order-xl-9</code></li>
  <li><code class="highlighter-rouge">.order-xl-10</code></li>
  <li><code class="highlighter-rouge">.order-xl-11</code></li>
  <li><code class="highlighter-rouge">.order-xl-12</code></li>
</ul>

<h2 id="align-content">Align content</h2>

<p>Use <code class="highlighter-rouge">align-content</code> utilities on flexbox containers to align flex items <em>together</em> on the cross axis. Choose from <code class="highlighter-rouge">start</code> (browser default), <code class="highlighter-rouge">end</code>, <code class="highlighter-rouge">center</code>, <code class="highlighter-rouge">between</code>, <code class="highlighter-rouge">around</code>, or <code class="highlighter-rouge">stretch</code>. To demonstrate these utilities, we’ve enforced <code class="highlighter-rouge">flex-wrap: wrap</code> and increased the number of flex items.</p>

<p><strong>Heads up!</strong> This property has no effect on single rows of flex items.</p>

<div class="bd-example">
  <div class="d-flex align-content-start flex-wrap bd-highlight mb-3" style="height: 200px">
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
  </div>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex align-content-start flex-wrap"</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/div&gt;</span></code></pre></figure>

<div class="bd-example">
  <div class="d-flex align-content-end flex-wrap bd-highlight mb-3" style="height: 200px">
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
  </div>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex align-content-end flex-wrap"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span></code></pre></figure>

<div class="bd-example">
  <div class="d-flex align-content-center flex-wrap bd-highlight mb-3" style="height: 200px">
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
  </div>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex align-content-center flex-wrap"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span></code></pre></figure>

<div class="bd-example">
  <div class="d-flex align-content-between flex-wrap bd-highlight mb-3" style="height: 200px">
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
  </div>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex align-content-between flex-wrap"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span></code></pre></figure>

<div class="bd-example">
  <div class="d-flex align-content-around flex-wrap bd-highlight mb-3" style="height: 200px">
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
  </div>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex align-content-around flex-wrap"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span></code></pre></figure>

<div class="bd-example">
  <div class="d-flex align-content-stretch flex-wrap bd-highlight mb-3" style="height: 200px">
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
    <div class="p-2 bd-highlight">Flex item</div>
  </div>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex align-content-stretch flex-wrap"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span></code></pre></figure>

<p>Responsive variations also exist for <code class="highlighter-rouge">align-content</code>.</p>

<ul>
  <li><code class="highlighter-rouge">.align-content-start</code></li>
  <li><code class="highlighter-rouge">.align-content-end</code></li>
  <li><code class="highlighter-rouge">.align-content-center</code></li>
  <li><code class="highlighter-rouge">.align-content-around</code></li>
  <li><code class="highlighter-rouge">.align-content-stretch</code></li>
  <li><code class="highlighter-rouge">.align-content-sm-start</code></li>
  <li><code class="highlighter-rouge">.align-content-sm-end</code></li>
  <li><code class="highlighter-rouge">.align-content-sm-center</code></li>
  <li><code class="highlighter-rouge">.align-content-sm-around</code></li>
  <li><code class="highlighter-rouge">.align-content-sm-stretch</code></li>
  <li><code class="highlighter-rouge">.align-content-md-start</code></li>
  <li><code class="highlighter-rouge">.align-content-md-end</code></li>
  <li><code class="highlighter-rouge">.align-content-md-center</code></li>
  <li><code class="highlighter-rouge">.align-content-md-around</code></li>
  <li><code class="highlighter-rouge">.align-content-md-stretch</code></li>
  <li><code class="highlighter-rouge">.align-content-lg-start</code></li>
  <li><code class="highlighter-rouge">.align-content-lg-end</code></li>
  <li><code class="highlighter-rouge">.align-content-lg-center</code></li>
  <li><code class="highlighter-rouge">.align-content-lg-around</code></li>
  <li><code class="highlighter-rouge">.align-content-lg-stretch</code></li>
  <li><code class="highlighter-rouge">.align-content-xl-start</code></li>
  <li><code class="highlighter-rouge">.align-content-xl-end</code></li>
  <li><code class="highlighter-rouge">.align-content-xl-center</code></li>
  <li><code class="highlighter-rouge">.align-content-xl-around</code></li>
  <li><code class="highlighter-rouge">.align-content-xl-stretch</code></li>
</ul>

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

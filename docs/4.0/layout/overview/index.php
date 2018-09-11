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

$strheading = 'Theme Tester: Bootstrap 4 CSS : Overview';
$url = new moodle_url('/admin/tool/themetester/bootswatch4.php');

// Start setting up the page.
$params = array();
$PAGE->set_context(context_system::instance());
$PAGE->set_url($url);
$PAGE->set_title($strheading);
$PAGE->set_heading("Overview");
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
<meta name="twitter:title" content="Overview">
<meta name="twitter:description" content="Components and options for laying out your Bootstrap project, including wrapping containers, a powerful grid system, a flexible media object, and responsive utility classes.">
<meta name="twitter:image" content="/assets/brand/bootstrap-social-logo.png">

<!-- Facebook -->
<meta property="og:url" content="/docs/4.0/layout/overview/">
<meta property="og:title" content="Overview">
<meta property="og:description" content="Components and options for laying out your Bootstrap project, including wrapping containers, a powerful grid system, a flexible media object, and responsive utility classes.">
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
    </div><div class="bd-toc-item active">
      <a class="bd-toc-link" href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/layout/overview/">
        Layout
      </a>

      <ul class="nav bd-sidenav"><li class="active bd-sidenav-active">
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
<li class="toc-entry toc-h2"><a href="#containers">Containers</a></li>
<li class="toc-entry toc-h2"><a href="#responsive-breakpoints">Responsive breakpoints</a></li>
<li class="toc-entry toc-h2"><a href="#z-index">Z-index</a></li>
</ul>
          </div>
        

        <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
          <h1 class="bd-title" id="content">Overview</h1>
          <p class="bd-lead">Components and options for laying out your Bootstrap project, including wrapping containers, a powerful grid system, a flexible media object, and responsive utility classes.</p>
          <h2 id="containers">Containers</h2>

<p>Containers are the most basic layout element in Bootstrap and are <strong>required when using our default grid system</strong>. Choose from a responsive, fixed-width container (meaning its <code class="highlighter-rouge">max-width</code> changes at each breakpoint) or fluid-width (meaning it’s <code class="highlighter-rouge">100%</code> wide all the time).</p>

<p>While containers <em>can</em> be nested, most layouts do not require a nested container.</p>

<div class="bd-example">
  <div class="bd-example-container">
    <div class="bd-example-container-header"></div>
    <div class="bd-example-container-sidebar"></div>
    <div class="bd-example-container-body"></div>
  </div>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
  <span class="c">&lt;!-- Content here --&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>

<p>Use <code class="highlighter-rouge">.container-fluid</code> for a full width container, spanning the entire width of the viewport.</p>

<div class="bd-example">
  <div class="bd-example-container bd-example-container-fluid">
    <div class="bd-example-container-header"></div>
    <div class="bd-example-container-sidebar"></div>
    <div class="bd-example-container-body"></div>
  </div>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container-fluid"</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/div&gt;</span></code></pre></figure>

<h2 id="responsive-breakpoints">Responsive breakpoints</h2>

<p>Since Bootstrap is developed to be mobile first, we use a handful of <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/Media_Queries/Using_media_queries">media queries</a> to create sensible breakpoints for our layouts and interfaces. These breakpoints are mostly based on minimum viewport widths and allow us to scale up elements as the viewport changes.</p>

<p>Bootstrap primarily uses the following media query ranges—or breakpoints—in our source Sass files for our layout, grid system, and components.</p>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="c1">// Extra small devices (portrait phones, less than 576px)</span>
<span class="c1">// No media query since this is the default in Bootstrap</span>

<span class="c1">// Small devices (landscape phones, 576px and up)</span>
<span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="m">576px</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>

<span class="c1">// Medium devices (tablets, 768px and up)</span>
<span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="m">768px</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>

<span class="c1">// Large devices (desktops, 992px and up)</span>
<span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="m">992px</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>

<span class="c1">// Extra large devices (large desktops, 1200px and up)</span>
<span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="m">1200px</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span></code></pre></figure>

<p>Since we write our source CSS in Sass, all our media queries are available via Sass mixins:</p>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="k">@include</span> <span class="nd">media-breakpoint-up</span><span class="p">(</span><span class="n">xs</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
<span class="k">@include</span> <span class="nd">media-breakpoint-up</span><span class="p">(</span><span class="n">sm</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
<span class="k">@include</span> <span class="nd">media-breakpoint-up</span><span class="p">(</span><span class="n">md</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
<span class="k">@include</span> <span class="nd">media-breakpoint-up</span><span class="p">(</span><span class="n">lg</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
<span class="k">@include</span> <span class="nd">media-breakpoint-up</span><span class="p">(</span><span class="n">xl</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>

<span class="c1">// Example usage:</span>
<span class="k">@include</span> <span class="nd">media-breakpoint-up</span><span class="p">(</span><span class="n">sm</span><span class="p">)</span> <span class="p">{</span>
  <span class="nc">.some-class</span> <span class="p">{</span>
    <span class="nl">display</span><span class="p">:</span> <span class="nb">block</span><span class="p">;</span>
  <span class="p">}</span>
<span class="p">}</span></code></pre></figure>

<p>We occasionally use media queries that go in the other direction (the given screen size <em>or smaller</em>):</p>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="c1">// Extra small devices (portrait phones, less than 576px)</span>
<span class="k">@media</span> <span class="p">(</span><span class="n">max-width</span><span class="o">:</span> <span class="m">575</span><span class="mi">.98px</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>

<span class="c1">// Small devices (landscape phones, less than 768px)</span>
<span class="k">@media</span> <span class="p">(</span><span class="n">max-width</span><span class="o">:</span> <span class="m">767</span><span class="mi">.98px</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>

<span class="c1">// Medium devices (tablets, less than 992px)</span>
<span class="k">@media</span> <span class="p">(</span><span class="n">max-width</span><span class="o">:</span> <span class="m">991</span><span class="mi">.98px</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>

<span class="c1">// Large devices (desktops, less than 1200px)</span>
<span class="k">@media</span> <span class="p">(</span><span class="n">max-width</span><span class="o">:</span> <span class="m">1199</span><span class="mi">.98px</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>

<span class="c1">// Extra large devices (large desktops)</span>
<span class="c1">// No media query since the extra-large breakpoint has no upper bound on its width</span></code></pre></figure>

<div class="bd-callout bd-callout-info">
<p>Note that since browsers do not currently support <a href="https://www.w3.org/TR/mediaqueries-4/#range-context">range context queries</a>, we work around the limitations of <a href="https://www.w3.org/TR/mediaqueries-4/#mq-min-max"><code class="highlighter-rouge">min-</code> and <code class="highlighter-rouge">max-</code> prefixes</a> and viewports with fractional widths (which can occur under certain conditions on high-dpi devices, for instance) by using values with higher precision for these comparisons.</p>
</div>

<p>Once again, these media queries are also available via Sass mixins:</p>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="k">@include</span> <span class="nd">media-breakpoint-down</span><span class="p">(</span><span class="n">xs</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
<span class="k">@include</span> <span class="nd">media-breakpoint-down</span><span class="p">(</span><span class="n">sm</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
<span class="k">@include</span> <span class="nd">media-breakpoint-down</span><span class="p">(</span><span class="n">md</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
<span class="k">@include</span> <span class="nd">media-breakpoint-down</span><span class="p">(</span><span class="n">lg</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span></code></pre></figure>

<p>There are also media queries and mixins for targeting a single segment of screen sizes using the minimum and maximum breakpoint widths.</p>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="c1">// Extra small devices (portrait phones, less than 576px)</span>
<span class="k">@media</span> <span class="p">(</span><span class="n">max-width</span><span class="o">:</span> <span class="m">575</span><span class="mi">.98px</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>

<span class="c1">// Small devices (landscape phones, 576px and up)</span>
<span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="m">576px</span><span class="p">)</span> <span class="nf">and</span> <span class="p">(</span><span class="n">max-width</span><span class="o">:</span> <span class="m">767</span><span class="mi">.98px</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>

<span class="c1">// Medium devices (tablets, 768px and up)</span>
<span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="m">768px</span><span class="p">)</span> <span class="nf">and</span> <span class="p">(</span><span class="n">max-width</span><span class="o">:</span> <span class="m">991</span><span class="mi">.98px</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>

<span class="c1">// Large devices (desktops, 992px and up)</span>
<span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="m">992px</span><span class="p">)</span> <span class="nf">and</span> <span class="p">(</span><span class="n">max-width</span><span class="o">:</span> <span class="m">1199</span><span class="mi">.98px</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>

<span class="c1">// Extra large devices (large desktops, 1200px and up)</span>
<span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="m">1200px</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span></code></pre></figure>

<p>These media queries are also available via Sass mixins:</p>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="k">@include</span> <span class="nd">media-breakpoint-only</span><span class="p">(</span><span class="n">xs</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
<span class="k">@include</span> <span class="nd">media-breakpoint-only</span><span class="p">(</span><span class="n">sm</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
<span class="k">@include</span> <span class="nd">media-breakpoint-only</span><span class="p">(</span><span class="n">md</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
<span class="k">@include</span> <span class="nd">media-breakpoint-only</span><span class="p">(</span><span class="n">lg</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
<span class="k">@include</span> <span class="nd">media-breakpoint-only</span><span class="p">(</span><span class="n">xl</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span></code></pre></figure>

<p>Similarly, media queries may span multiple breakpoint widths:</p>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="c1">// Example</span>
<span class="c1">// Apply styles starting from medium devices and up to extra large devices</span>
<span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="m">768px</span><span class="p">)</span> <span class="nf">and</span> <span class="p">(</span><span class="n">max-width</span><span class="o">:</span> <span class="m">1199</span><span class="mi">.98px</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span></code></pre></figure>

<p>The Sass mixin for targeting the same screen size range would be:</p>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="k">@include</span> <span class="nd">media-breakpoint-between</span><span class="p">(</span><span class="n">md</span><span class="o">,</span> <span class="n">xl</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span></code></pre></figure>

<h2 id="z-index">Z-index</h2>

<p>Several Bootstrap components utilize <code class="highlighter-rouge">z-index</code>, the CSS property that helps control layout by providing a third axis to arrange content. We utilize a default z-index scale in Bootstrap that’s been designed to properly layer navigation, tooltips and popovers, modals, and more.</p>

<p>These higher values start at an arbitrary number, high and specific enough to ideally avoid conflicts. We need a standard set of these across our layered components—tooltips, popovers, navbars, dropdowns, modals—so we can be reasonably consistent in the behaviors. There’s no reason we couldn’t have used <code class="highlighter-rouge">100</code>+ or <code class="highlighter-rouge">500</code>+.</p>

<p>We don’t encourage customization of these individual values; should you change one, you likely need to change them all.</p>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="nv">$zindex-dropdown</span><span class="p">:</span>          <span class="m">1000</span> <span class="o">!</span><span class="nb">default</span><span class="p">;</span>
<span class="nv">$zindex-sticky</span><span class="p">:</span>            <span class="m">1020</span> <span class="o">!</span><span class="nb">default</span><span class="p">;</span>
<span class="nv">$zindex-fixed</span><span class="p">:</span>             <span class="m">1030</span> <span class="o">!</span><span class="nb">default</span><span class="p">;</span>
<span class="nv">$zindex-modal-backdrop</span><span class="p">:</span>    <span class="m">1040</span> <span class="o">!</span><span class="nb">default</span><span class="p">;</span>
<span class="nv">$zindex-modal</span><span class="p">:</span>             <span class="m">1050</span> <span class="o">!</span><span class="nb">default</span><span class="p">;</span>
<span class="nv">$zindex-popover</span><span class="p">:</span>           <span class="m">1060</span> <span class="o">!</span><span class="nb">default</span><span class="p">;</span>
<span class="nv">$zindex-tooltip</span><span class="p">:</span>           <span class="m">1070</span> <span class="o">!</span><span class="nb">default</span><span class="p">;</span></code></pre></figure>

<p>To handle overlapping borders within components (e.g., buttons and inputs in input groups), we use low single digit <code class="highlighter-rouge">z-index</code> values of <code class="highlighter-rouge">1</code>, <code class="highlighter-rouge">2</code>, and <code class="highlighter-rouge">3</code> for default, hover, and active states. On hover/focus/active, we bring a particular element to the forefront with a higher <code class="highlighter-rouge">z-index</code> value to show their border over the sibling elements.</p>

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

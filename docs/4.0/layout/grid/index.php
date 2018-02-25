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

$strheading = 'Theme Tester: Bootstrap 4 CSS : Grid system';
$url = new moodle_url('/admin/tool/themetester/bootswatch4.php');

// Start setting up the page.
$params = array();
$PAGE->set_context(context_system::instance());
$PAGE->set_url($url);
$PAGE->set_title($strheading);
$PAGE->set_heading("Grid system");
$PAGE->requires->jquery();

$PAGE->requires->css('/admin/tool/themetester/docsearch.min.css');

$PAGE->requires->css('/admin/tool/themetester/assets/css/docs.min.css');
admin_externalpage_setup('toolthemetester');

echo $OUTPUT->header();

echo html_writer::link(new moodle_url('/admin/tool/themetester/index.php'), '&laquo; Back to index');
echo $OUTPUT->heading($strheading);

?>

<!-- Favicons -->
<link rel="apple-touch-icon" href="/admin/tool/themetester/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/admin/tool/themetester/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/admin/tool/themetester/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/admin/tool/themetester/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/admin/tool/themetester/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/admin/tool/themetester/favicon.ico">
<meta name="msapplication-config" content="/admin/tool/themetester/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


<!-- Twitter -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@getbootstrap">
<meta name="twitter:creator" content="@getbootstrap">
<meta name="twitter:title" content="Grid system">
<meta name="twitter:description" content="Use our powerful mobile-first flexbox grid to build layouts of all shapes and sizes thanks to a twelve column system, five default responsive tiers, Sass variables and mixins, and dozens of predefined classes.">
<meta name="twitter:image" content="/assets/brand/bootstrap-social-logo.png">

<!-- Facebook -->
<meta property="og:url" content="/docs/4.0/layout/grid/">
<meta property="og:title" content="Grid system">
<meta property="og:description" content="Use our powerful mobile-first flexbox grid to build layouts of all shapes and sizes thanks to a twelve column system, five default responsive tiers, Sass variables and mixins, and dozens of predefined classes.">
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
      <a class="bd-toc-link" href="/admin/tool/themetester/docs/4.0/getting-started/introduction/">
        Getting started
      </a>

      <ul class="nav bd-sidenav"><li>
            <a href="/admin/tool/themetester/docs/4.0/getting-started/introduction/">
              Introduction
            </a></li><li>
            <a href="/admin/tool/themetester/docs/4.0/getting-started/download/">
              Download
            </a></li><li>
            <a href="/admin/tool/themetester/docs/4.0/getting-started/contents/">
              Contents
            </a></li><li>
            <a href="/admin/tool/themetester/docs/4.0/getting-started/browsers-devices/">
              Browsers & devices
            </a></li><li>
            <a href="/admin/tool/themetester/docs/4.0/getting-started/javascript/">
              JavaScript
            </a></li><li>
            <a href="/admin/tool/themetester/docs/4.0/getting-started/theming/">
              Theming
            </a></li><li>
            <a href="/admin/tool/themetester/docs/4.0/getting-started/build-tools/">
              Build tools
            </a></li><li>
            <a href="/admin/tool/themetester/docs/4.0/getting-started/webpack/">
              Webpack
            </a></li><li>
            <a href="/admin/tool/themetester/docs/4.0/getting-started/accessibility/">
              Accessibility
            </a></li></ul>
    </div><div class="bd-toc-item active">
      <a class="bd-toc-link" href="/admin/tool/themetester/docs/4.0/layout/overview/">
        Layout
      </a>

      <ul class="nav bd-sidenav"><li>
            <a href="/admin/tool/themetester/docs/4.0/layout/overview/">
              Overview
            </a></li><li class="active bd-sidenav-active">
            <a href="/admin/tool/themetester/docs/4.0/layout/grid/">
              Grid
            </a></li><li>
            <a href="/admin/tool/themetester/docs/4.0/layout/media-object/">
              Media object
            </a></li><li>
            <a href="/admin/tool/themetester/docs/4.0/layout/utilities-for-layout/">
              Utilities for layout
            </a></li></ul>
    </div><div class="bd-toc-item">
      <a class="bd-toc-link" href="/admin/tool/themetester/docs/4.0/content/reboot/">
        Content
      </a>

      <ul class="nav bd-sidenav"><li>
            <a href="/admin/tool/themetester/docs/4.0/content/reboot/">
              Reboot
            </a></li><li>
            <a href="/admin/tool/themetester/docs/4.0/content/typography/">
              Typography
            </a></li><li>
            <a href="/admin/tool/themetester/docs/4.0/content/code/">
              Code
            </a></li><li>
            <a href="/admin/tool/themetester/docs/4.0/content/images/">
              Images
            </a></li><li>
            <a href="/admin/tool/themetester/docs/4.0/content/tables/">
              Tables
            </a></li><li>
            <a href="/admin/tool/themetester/docs/4.0/content/figures/">
              Figures
            </a></li></ul>
    </div><div class="bd-toc-item">
      <a class="bd-toc-link" href="/admin/tool/themetester/docs/4.0/components/alerts/">
        Components
      </a>

      <ul class="nav bd-sidenav"><li>
            <a href="/admin/tool/themetester/docs/4.0/components/alerts/">
              Alerts
            </a></li><li>
            <a href="/admin/tool/themetester/docs/4.0/components/badge/">
              Badge
            </a></li><li>
            <a href="/admin/tool/themetester/docs/4.0/components/breadcrumb/">
              Breadcrumb
            </a></li><li>
            <a href="/admin/tool/themetester/docs/4.0/components/buttons/">
              Buttons
            </a></li><li>
            <a href="/admin/tool/themetester/docs/4.0/components/button-group/">
              Button group
            </a></li><li>
            <a href="/admin/tool/themetester/docs/4.0/components/card/">
              Card
            </a></li><li>
            <a href="/admin/tool/themetester/docs/4.0/components/carousel/">
              Carousel
            </a></li><li>
            <a href="/admin/tool/themetester/docs/4.0/components/collapse/">
              Collapse
            </a></li><li>
            <a href="/admin/tool/themetester/docs/4.0/components/dropdowns/">
              Dropdowns
            </a></li><li>
            <a href="/admin/tool/themetester/docs/4.0/components/forms/">
              Forms
            </a></li><li>
            <a href="/admin/tool/themetester/docs/4.0/components/input-group/">
              Input group
            </a></li><li>
            <a href="/admin/tool/themetester/docs/4.0/components/jumbotron/">
              Jumbotron
            </a></li><li>
            <a href="/admin/tool/themetester/docs/4.0/components/list-group/">
              List group
            </a></li><li>
            <a href="/admin/tool/themetester/docs/4.0/components/modal/">
              Modal
            </a></li><li>
            <a href="/admin/tool/themetester/docs/4.0/components/navs/">
              Navs
            </a></li><li>
            <a href="/admin/tool/themetester/docs/4.0/components/navbar/">
              Navbar
            </a></li><li>
            <a href="/admin/tool/themetester/docs/4.0/components/pagination/">
              Pagination
            </a></li><li>
            <a href="/admin/tool/themetester/docs/4.0/components/popovers/">
              Popovers
            </a></li><li>
            <a href="/admin/tool/themetester/docs/4.0/components/progress/">
              Progress
            </a></li><li>
            <a href="/admin/tool/themetester/docs/4.0/components/scrollspy/">
              Scrollspy
            </a></li><li>
            <a href="/admin/tool/themetester/docs/4.0/components/tooltips/">
              Tooltips
            </a></li></ul>
    </div><div class="bd-toc-item">
      <a class="bd-toc-link" href="/admin/tool/themetester/docs/4.0/utilities/borders/">
        Utilities
      </a>

      <ul class="nav bd-sidenav"><li>
            <a href="/admin/tool/themetester/docs/4.0/utilities/borders/">
              Borders
            </a></li><li>
            <a href="/admin/tool/themetester/docs/4.0/utilities/clearfix/">
              Clearfix
            </a></li><li>
            <a href="/admin/tool/themetester/docs/4.0/utilities/close-icon/">
              Close icon
            </a></li><li>
            <a href="/admin/tool/themetester/docs/4.0/utilities/colors/">
              Colors
            </a></li><li>
            <a href="/admin/tool/themetester/docs/4.0/utilities/display/">
              Display
            </a></li><li>
            <a href="/admin/tool/themetester/docs/4.0/utilities/embed/">
              Embed
            </a></li><li>
            <a href="/admin/tool/themetester/docs/4.0/utilities/flex/">
              Flex
            </a></li><li>
            <a href="/admin/tool/themetester/docs/4.0/utilities/float/">
              Float
            </a></li><li>
            <a href="/admin/tool/themetester/docs/4.0/utilities/image-replacement/">
              Image replacement
            </a></li><li>
            <a href="/admin/tool/themetester/docs/4.0/utilities/position/">
              Position
            </a></li><li>
            <a href="/admin/tool/themetester/docs/4.0/utilities/screenreaders/">
              Screenreaders
            </a></li><li>
            <a href="/admin/tool/themetester/docs/4.0/utilities/sizing/">
              Sizing
            </a></li><li>
            <a href="/admin/tool/themetester/docs/4.0/utilities/spacing/">
              Spacing
            </a></li><li>
            <a href="/admin/tool/themetester/docs/4.0/utilities/text/">
              Text
            </a></li><li>
            <a href="/admin/tool/themetester/docs/4.0/utilities/vertical-align/">
              Vertical align
            </a></li><li>
            <a href="/admin/tool/themetester/docs/4.0/utilities/visibility/">
              Visibility
            </a></li></ul>
    </div><div class="bd-toc-item">
      <a class="bd-toc-link" href="/admin/tool/themetester/docs/4.0/extend/approach/">
        Extend
      </a>

      <ul class="nav bd-sidenav"><li>
            <a href="/admin/tool/themetester/docs/4.0/extend/approach/">
              Approach
            </a></li><li>
            <a href="/admin/tool/themetester/docs/4.0/extend/icons/">
              Icons
            </a></li></ul>
    </div><div class="bd-toc-item">
      <a class="bd-toc-link" href="/admin/tool/themetester/docs/4.0/migration/">
        Migration
      </a>

      <ul class="nav bd-sidenav"></ul>
    </div><div class="bd-toc-item">
      <a class="bd-toc-link" href="/admin/tool/themetester/docs/4.0/about/overview/">
        About
      </a>

      <ul class="nav bd-sidenav"><li>
            <a href="/admin/tool/themetester/docs/4.0/about/overview/">
              Overview
            </a></li><li>
            <a href="/admin/tool/themetester/docs/4.0/about/brand/">
              Brand
            </a></li><li>
            <a href="/admin/tool/themetester/docs/4.0/about/license/">
              License
            </a></li><li>
            <a href="/admin/tool/themetester/docs/4.0/about/translations/">
              Translations
            </a></li></ul>
    </div></nav>

        </div>

        
          <div class="d-none d-xl-block col-xl-2 bd-toc">
            <ul class="section-nav">
<li class="toc-entry toc-h2"><a href="#how-it-works">How it works</a></li>
<li class="toc-entry toc-h2"><a href="#grid-options">Grid options</a></li>
<li class="toc-entry toc-h2"><a href="#auto-layout-columns">Auto-layout columns</a>
<ul>
<li class="toc-entry toc-h3"><a href="#equal-width">Equal-width</a></li>
<li class="toc-entry toc-h3"><a href="#setting-one-column-width">Setting one column width</a></li>
<li class="toc-entry toc-h3"><a href="#variable-width-content">Variable width content</a></li>
<li class="toc-entry toc-h3"><a href="#equal-width-multi-row">Equal-width multi-row</a></li>
</ul>
</li>
<li class="toc-entry toc-h2"><a href="#responsive-classes">Responsive classes</a>
<ul>
<li class="toc-entry toc-h3"><a href="#all-breakpoints">All breakpoints</a></li>
<li class="toc-entry toc-h3"><a href="#stacked-to-horizontal">Stacked to horizontal</a></li>
<li class="toc-entry toc-h3"><a href="#mix-and-match">Mix and match</a></li>
</ul>
</li>
<li class="toc-entry toc-h2"><a href="#alignment">Alignment</a>
<ul>
<li class="toc-entry toc-h3"><a href="#vertical-alignment">Vertical alignment</a></li>
<li class="toc-entry toc-h3"><a href="#horizontal-alignment">Horizontal alignment</a></li>
<li class="toc-entry toc-h3"><a href="#no-gutters">No gutters</a></li>
<li class="toc-entry toc-h3"><a href="#column-wrapping">Column wrapping</a></li>
<li class="toc-entry toc-h3"><a href="#column-breaks">Column breaks</a></li>
</ul>
</li>
<li class="toc-entry toc-h2"><a href="#reordering">Reordering</a>
<ul>
<li class="toc-entry toc-h3"><a href="#order-classes">Order classes</a></li>
<li class="toc-entry toc-h3"><a href="#offsetting-columns">Offsetting columns</a>
<ul>
<li class="toc-entry toc-h4"><a href="#offset-classes">Offset classes</a></li>
<li class="toc-entry toc-h4"><a href="#margin-utilities">Margin utilities</a></li>
</ul>
</li>
</ul>
</li>
<li class="toc-entry toc-h2"><a href="#nesting">Nesting</a></li>
<li class="toc-entry toc-h2"><a href="#sass-mixins">Sass mixins</a>
<ul>
<li class="toc-entry toc-h3"><a href="#variables">Variables</a></li>
<li class="toc-entry toc-h3"><a href="#mixins">Mixins</a></li>
<li class="toc-entry toc-h3"><a href="#example-usage">Example usage</a></li>
</ul>
</li>
<li class="toc-entry toc-h2"><a href="#customizing-the-grid">Customizing the grid</a>
<ul>
<li class="toc-entry toc-h3"><a href="#columns-and-gutters">Columns and gutters</a></li>
<li class="toc-entry toc-h3"><a href="#grid-tiers">Grid tiers</a></li>
</ul>
</li>
</ul>
          </div>
        

        <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
          <h1 class="bd-title" id="content">Grid system</h1>
          <p class="bd-lead">Use our powerful mobile-first flexbox grid to build layouts of all shapes and sizes thanks to a twelve column system, five default responsive tiers, Sass variables and mixins, and dozens of predefined classes.</p>
          <h2 id="how-it-works">How it works</h2>

<p>Bootstrap’s grid system uses a series of containers, rows, and columns to layout and align content. It’s built with <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Using_CSS_flexible_boxes">flexbox</a> and is fully responsive. Below is an example and an in-depth look at how the grid comes together.</p>

<p><strong>New to or unfamiliar with flexbox?</strong> <a href="https://css-tricks.com/snippets/css/a-guide-to-flexbox/#flexbox-background">Read this CSS Tricks flexbox guide</a> for background, terminology, guidelines, and code snippets.</p>

<div class="bd-example-row">

<div class="bd-example">
<div class="container">
  <div class="row">
    <div class="col-sm">
      One of three columns
    </div>
    <div class="col-sm">
      One of three columns
    </div>
    <div class="col-sm">
      One of three columns
    </div>
  </div>
</div>
</div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm"</span><span class="nt">&gt;</span>
      One of three columns
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm"</span><span class="nt">&gt;</span>
      One of three columns
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm"</span><span class="nt">&gt;</span>
      One of three columns
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

</div>

<p>The above example creates three equal-width columns on small, medium, large, and extra large devices using our predefined grid classes. Those columns are centered in the page with the parent <code class="highlighter-rouge">.container</code>.</p>

<p>Breaking it down, here’s how it works:</p>

<ul>
  <li>Containers provide a means to center and horizontally pad your site’s contents. Use <code class="highlighter-rouge">.container</code> for a responsive pixel width or <code class="highlighter-rouge">.container-fluid</code> for <code class="highlighter-rouge">width: 100%</code> across all viewport and device sizes.</li>
  <li>Rows are wrappers for columns. Each column has horizontal <code class="highlighter-rouge">padding</code> (called a gutter) for controlling the space between them. This <code class="highlighter-rouge">padding</code> is then counteracted on the rows with negative margins. This way, all the content in your columns is visually aligned down the left side.</li>
  <li>In a grid layout, content must be placed within columns and only columns may be immediate children of rows.</li>
  <li>Thanks to flexbox, grid columns without a specified <code class="highlighter-rouge">width</code> will automatically layout as equal width columns. For example, four instances of <code class="highlighter-rouge">.col-sm</code> will each automatically be 25% wide from the small breakpoint and up. See the <a href="#auto-layout-columns">auto-layout columns</a> section for more examples.</li>
  <li>Column classes indicate the number of columns you’d like to use out of the possible 12 per row. So, if you want three equal-width columns across, you can use <code class="highlighter-rouge">.col-4</code>.</li>
  <li>Column <code class="highlighter-rouge">width</code>s are set in percentages, so they’re always fluid and sized relative to their parent element.</li>
  <li>Columns have horizontal <code class="highlighter-rouge">padding</code> to create the gutters between individual columns, however, you can remove the <code class="highlighter-rouge">margin</code> from rows and <code class="highlighter-rouge">padding</code> from columns with <code class="highlighter-rouge">.no-gutters</code> on the <code class="highlighter-rouge">.row</code>.</li>
  <li>To make the grid responsive, there are five grid breakpoints, one for each <a href="/admin/tool/themetester/docs/4.0/layout/overview/#responsive-breakpoints">responsive breakpoint</a>: all breakpoints (extra small), small, medium, large, and extra large.</li>
  <li>Grid breakpoints are based on minimum width media queries, meaning <strong>they apply to that one breakpoint and all those above it</strong> (e.g., <code class="highlighter-rouge">.col-sm-4</code> applies to small, medium, large, and extra large devices, but not the first <code class="highlighter-rouge">xs</code> breakpoint).</li>
  <li>You can use predefined grid classes (like <code class="highlighter-rouge">.col-4</code>) or <a href="#sass-mixins">Sass mixins</a> for more semantic markup.</li>
</ul>

<p>Be aware of the limitations and <a href="https://github.com/philipwalton/flexbugs">bugs around flexbox</a>, like the <a href="https://github.com/philipwalton/flexbugs#9-some-html-elements-cant-be-flex-containers">inability to use some HTML elements as flex containers</a>.</p>

<h2 id="grid-options">Grid options</h2>

<p>While Bootstrap uses <code class="highlighter-rouge">em</code>s or <code class="highlighter-rouge">rem</code>s for defining most sizes, <code class="highlighter-rouge">px</code>s are used for grid breakpoints and container widths. This is because the viewport width is in pixels and does not change with the <a href="https://drafts.csswg.org/mediaqueries-3/#units">font size</a>.</p>

<p>See how aspects of the Bootstrap grid system work across multiple devices with a handy table.</p>

<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th></th>
      <th class="text-center">
        Extra small<br />
        <small>&lt;576px</small>
      </th>
      <th class="text-center">
        Small<br />
        <small>&ge;576px</small>
      </th>
      <th class="text-center">
        Medium<br />
        <small>&ge;768px</small>
      </th>
      <th class="text-center">
        Large<br />
        <small>&ge;992px</small>
      </th>
      <th class="text-center">
        Extra large<br />
        <small>&ge;1200px</small>
      </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th class="text-nowrap" scope="row">Max container width</th>
      <td>None (auto)</td>
      <td>540px</td>
      <td>720px</td>
      <td>960px</td>
      <td>1140px</td>
    </tr>
    <tr>
      <th class="text-nowrap" scope="row">Class prefix</th>
      <td><code>.col-</code></td>
      <td><code>.col-sm-</code></td>
      <td><code>.col-md-</code></td>
      <td><code>.col-lg-</code></td>
      <td><code>.col-xl-</code></td>
    </tr>
    <tr>
      <th class="text-nowrap" scope="row"># of columns</th>
      <td colspan="5">12</td>
    </tr>
    <tr>
      <th class="text-nowrap" scope="row">Gutter width</th>
      <td colspan="5">30px (15px on each side of a column)</td>
    </tr>
    <tr>
      <th class="text-nowrap" scope="row">Nestable</th>
      <td colspan="5">Yes</td>
    </tr>
    <tr>
      <th class="text-nowrap" scope="row">Column ordering</th>
      <td colspan="5">Yes</td>
    </tr>
  </tbody>
</table>

<h2 id="auto-layout-columns">Auto-layout columns</h2>

<p>Utilize breakpoint-specific column classes for easy column sizing without an explicit numbered class like <code class="highlighter-rouge">.col-sm-6</code>.</p>

<h3 id="equal-width">Equal-width</h3>

<p>For example, here are two grid layouts that apply to every device and viewport, from <code class="highlighter-rouge">xs</code> to <code class="highlighter-rouge">xl</code>. Add any number of unit-less classes for each breakpoint you need and every column will be the same width.</p>

<div class="bd-example-row">

<div class="bd-example">
<div class="container">
  <div class="row">
    <div class="col">
      1 of 2
    </div>
    <div class="col">
      2 of 2
    </div>
  </div>
  <div class="row">
    <div class="col">
      1 of 3
    </div>
    <div class="col">
      2 of 3
    </div>
    <div class="col">
      3 of 3
    </div>
  </div>
</div>
</div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col"</span><span class="nt">&gt;</span>
      1 of 2
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col"</span><span class="nt">&gt;</span>
      2 of 2
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col"</span><span class="nt">&gt;</span>
      1 of 3
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col"</span><span class="nt">&gt;</span>
      2 of 3
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col"</span><span class="nt">&gt;</span>
      3 of 3
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

</div>

<p>Equal-width columns can be broken into multiple lines, but there was a <a href="https://github.com/philipwalton/flexbugs#11-min-and-max-size-declarations-are-ignored-when-wrapping-flex-items">Safari flexbox bug</a> that prevented this from working without an explicit <code class="highlighter-rouge">flex-basis</code> or <code class="highlighter-rouge">border</code>. There are workarounds for older browser versions, but they shouldn’t be necessary if you’re up-to-date.</p>

<div class="bd-example-row">

<div class="bd-example">
<div class="container">
  <div class="row">
    <div class="col">Column</div>
    <div class="col">Column</div>
    <div class="w-100"></div>
    <div class="col">Column</div>
    <div class="col">Column</div>
  </div>
</div>
</div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col"</span><span class="nt">&gt;</span>Column<span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col"</span><span class="nt">&gt;</span>Column<span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"w-100"</span><span class="nt">&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col"</span><span class="nt">&gt;</span>Column<span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col"</span><span class="nt">&gt;</span>Column<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

</div>

<h3 id="setting-one-column-width">Setting one column width</h3>

<p>Auto-layout for flexbox grid columns also means you can set the width of one column and have the sibling columns automatically resize around it. You may use predefined grid classes (as shown below), grid mixins, or inline widths. Note that the other columns will resize no matter the width of the center column.</p>

<div class="bd-example-row">

<div class="bd-example">
<div class="container">
  <div class="row">
    <div class="col">
      1 of 3
    </div>
    <div class="col-6">
      2 of 3 (wider)
    </div>
    <div class="col">
      3 of 3
    </div>
  </div>
  <div class="row">
    <div class="col">
      1 of 3
    </div>
    <div class="col-5">
      2 of 3 (wider)
    </div>
    <div class="col">
      3 of 3
    </div>
  </div>
</div>
</div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col"</span><span class="nt">&gt;</span>
      1 of 3
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-6"</span><span class="nt">&gt;</span>
      2 of 3 (wider)
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col"</span><span class="nt">&gt;</span>
      3 of 3
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col"</span><span class="nt">&gt;</span>
      1 of 3
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-5"</span><span class="nt">&gt;</span>
      2 of 3 (wider)
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col"</span><span class="nt">&gt;</span>
      3 of 3
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

</div>

<h3 id="variable-width-content">Variable width content</h3>

<p>Use <code class="highlighter-rouge">col-{breakpoint}-auto</code> classes to size columns based on the natural width of their content.</p>

<div class="bd-example-row">

<div class="bd-example">
<div class="container">
  <div class="row justify-content-md-center">
    <div class="col col-lg-2">
      1 of 3
    </div>
    <div class="col-md-auto">
      Variable width content
    </div>
    <div class="col col-lg-2">
      3 of 3
    </div>
  </div>
  <div class="row">
    <div class="col">
      1 of 3
    </div>
    <div class="col-md-auto">
      Variable width content
    </div>
    <div class="col col-lg-2">
      3 of 3
    </div>
  </div>
</div>
</div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row justify-content-md-center"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col col-lg-2"</span><span class="nt">&gt;</span>
      1 of 3
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-auto"</span><span class="nt">&gt;</span>
      Variable width content
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col col-lg-2"</span><span class="nt">&gt;</span>
      3 of 3
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col"</span><span class="nt">&gt;</span>
      1 of 3
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-auto"</span><span class="nt">&gt;</span>
      Variable width content
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col col-lg-2"</span><span class="nt">&gt;</span>
      3 of 3
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

</div>

<h3 id="equal-width-multi-row">Equal-width multi-row</h3>

<p>Create equal-width columns that span multiple rows by inserting a <code class="highlighter-rouge">.w-100</code> where you want the columns to break to a new line. Make the breaks responsive by mixing the <code class="highlighter-rouge">.w-100</code> with some <a href="/admin/tool/themetester/docs/4.0/utilities/display/">responsive display utilities</a>.</p>

<div class="bd-example-row">

<div class="bd-example">
<div class="row">
  <div class="col">col</div>
  <div class="col">col</div>
  <div class="w-100"></div>
  <div class="col">col</div>
  <div class="col">col</div>
</div>
</div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col"</span><span class="nt">&gt;</span>col<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col"</span><span class="nt">&gt;</span>col<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"w-100"</span><span class="nt">&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col"</span><span class="nt">&gt;</span>col<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col"</span><span class="nt">&gt;</span>col<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

</div>

<h2 id="responsive-classes">Responsive classes</h2>

<p>Bootstrap’s grid includes five tiers of predefined classes for building complex responsive layouts. Customize the size of your columns on extra small, small, medium, large, or extra large devices however you see fit.</p>

<h3 id="all-breakpoints">All breakpoints</h3>

<p>For grids that are the same from the smallest of devices to the largest, use the <code class="highlighter-rouge">.col</code> and <code class="highlighter-rouge">.col-*</code> classes. Specify a numbered class when you need a particularly sized column; otherwise, feel free to stick to <code class="highlighter-rouge">.col</code>.</p>

<div class="bd-example-row">

<div class="bd-example">
<div class="row">
  <div class="col">col</div>
  <div class="col">col</div>
  <div class="col">col</div>
  <div class="col">col</div>
</div>
<div class="row">
  <div class="col-8">col-8</div>
  <div class="col-4">col-4</div>
</div>
</div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col"</span><span class="nt">&gt;</span>col<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col"</span><span class="nt">&gt;</span>col<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col"</span><span class="nt">&gt;</span>col<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col"</span><span class="nt">&gt;</span>col<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-8"</span><span class="nt">&gt;</span>col-8<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-4"</span><span class="nt">&gt;</span>col-4<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

</div>

<h3 id="stacked-to-horizontal">Stacked to horizontal</h3>

<p>Using a single set of <code class="highlighter-rouge">.col-sm-*</code> classes, you can create a basic grid system that starts out stacked and becomes horizontal at the small breakpoint (<code class="highlighter-rouge">sm</code>).</p>

<div class="bd-example-row">

<div class="bd-example">
<div class="row">
  <div class="col-sm-8">col-sm-8</div>
  <div class="col-sm-4">col-sm-4</div>
</div>
<div class="row">
  <div class="col-sm">col-sm</div>
  <div class="col-sm">col-sm</div>
  <div class="col-sm">col-sm</div>
</div>
</div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-8"</span><span class="nt">&gt;</span>col-sm-8<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-4"</span><span class="nt">&gt;</span>col-sm-4<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm"</span><span class="nt">&gt;</span>col-sm<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm"</span><span class="nt">&gt;</span>col-sm<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm"</span><span class="nt">&gt;</span>col-sm<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

</div>

<h3 id="mix-and-match">Mix and match</h3>

<p>Don’t want your columns to simply stack in some grid tiers? Use a combination of different classes for each tier as needed. See the example below for a better idea of how it all works.</p>

<div class="bd-example-row">

<div class="bd-example">
<!-- Stack the columns on mobile by making one full-width and the other half-width -->
<div class="row">
  <div class="col-12 col-md-8">.col-12 .col-md-8</div>
  <div class="col-6 col-md-4">.col-6 .col-md-4</div>
</div>

<!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
<div class="row">
  <div class="col-6 col-md-4">.col-6 .col-md-4</div>
  <div class="col-6 col-md-4">.col-6 .col-md-4</div>
  <div class="col-6 col-md-4">.col-6 .col-md-4</div>
</div>

<!-- Columns are always 50% wide, on mobile and desktop -->
<div class="row">
  <div class="col-6">.col-6</div>
  <div class="col-6">.col-6</div>
</div>
</div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- Stack the columns on mobile by making one full-width and the other half-width --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-12 col-md-8"</span><span class="nt">&gt;</span>.col-12 .col-md-8<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-6 col-md-4"</span><span class="nt">&gt;</span>.col-6 .col-md-4<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="c">&lt;!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-6 col-md-4"</span><span class="nt">&gt;</span>.col-6 .col-md-4<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-6 col-md-4"</span><span class="nt">&gt;</span>.col-6 .col-md-4<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-6 col-md-4"</span><span class="nt">&gt;</span>.col-6 .col-md-4<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="c">&lt;!-- Columns are always 50% wide, on mobile and desktop --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-6"</span><span class="nt">&gt;</span>.col-6<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-6"</span><span class="nt">&gt;</span>.col-6<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

</div>

<h2 id="alignment">Alignment</h2>

<p>Use flexbox alignment utilities to vertically and horizontally align columns.</p>

<h3 id="vertical-alignment">Vertical alignment</h3>

<div class="bd-example-row bd-example-row-flex-cols">

<div class="bd-example">
<div class="container">
  <div class="row align-items-start">
    <div class="col">
      One of three columns
    </div>
    <div class="col">
      One of three columns
    </div>
    <div class="col">
      One of three columns
    </div>
  </div>
  <div class="row align-items-center">
    <div class="col">
      One of three columns
    </div>
    <div class="col">
      One of three columns
    </div>
    <div class="col">
      One of three columns
    </div>
  </div>
  <div class="row align-items-end">
    <div class="col">
      One of three columns
    </div>
    <div class="col">
      One of three columns
    </div>
    <div class="col">
      One of three columns
    </div>
  </div>
</div>
</div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row align-items-start"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col"</span><span class="nt">&gt;</span>
      One of three columns
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col"</span><span class="nt">&gt;</span>
      One of three columns
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col"</span><span class="nt">&gt;</span>
      One of three columns
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row align-items-center"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col"</span><span class="nt">&gt;</span>
      One of three columns
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col"</span><span class="nt">&gt;</span>
      One of three columns
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col"</span><span class="nt">&gt;</span>
      One of three columns
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row align-items-end"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col"</span><span class="nt">&gt;</span>
      One of three columns
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col"</span><span class="nt">&gt;</span>
      One of three columns
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col"</span><span class="nt">&gt;</span>
      One of three columns
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

</div>

<div class="bd-example-row bd-example-row-flex-cols">

<div class="bd-example">
<div class="container">
  <div class="row">
    <div class="col align-self-start">
      One of three columns
    </div>
    <div class="col align-self-center">
      One of three columns
    </div>
    <div class="col align-self-end">
      One of three columns
    </div>
  </div>
</div>
</div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col align-self-start"</span><span class="nt">&gt;</span>
      One of three columns
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col align-self-center"</span><span class="nt">&gt;</span>
      One of three columns
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col align-self-end"</span><span class="nt">&gt;</span>
      One of three columns
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

</div>

<h3 id="horizontal-alignment">Horizontal alignment</h3>

<div class="bd-example-row">

<div class="bd-example">
<div class="container">
  <div class="row justify-content-start">
    <div class="col-4">
      One of two columns
    </div>
    <div class="col-4">
      One of two columns
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-4">
      One of two columns
    </div>
    <div class="col-4">
      One of two columns
    </div>
  </div>
  <div class="row justify-content-end">
    <div class="col-4">
      One of two columns
    </div>
    <div class="col-4">
      One of two columns
    </div>
  </div>
  <div class="row justify-content-around">
    <div class="col-4">
      One of two columns
    </div>
    <div class="col-4">
      One of two columns
    </div>
  </div>
  <div class="row justify-content-between">
    <div class="col-4">
      One of two columns
    </div>
    <div class="col-4">
      One of two columns
    </div>
  </div>
</div>
</div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row justify-content-start"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-4"</span><span class="nt">&gt;</span>
      One of two columns
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-4"</span><span class="nt">&gt;</span>
      One of two columns
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row justify-content-center"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-4"</span><span class="nt">&gt;</span>
      One of two columns
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-4"</span><span class="nt">&gt;</span>
      One of two columns
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row justify-content-end"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-4"</span><span class="nt">&gt;</span>
      One of two columns
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-4"</span><span class="nt">&gt;</span>
      One of two columns
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row justify-content-around"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-4"</span><span class="nt">&gt;</span>
      One of two columns
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-4"</span><span class="nt">&gt;</span>
      One of two columns
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row justify-content-between"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-4"</span><span class="nt">&gt;</span>
      One of two columns
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-4"</span><span class="nt">&gt;</span>
      One of two columns
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

</div>

<h3 id="no-gutters">No gutters</h3>

<p>The gutters between columns in our predefined grid classes can be removed with <code class="highlighter-rouge">.no-gutters</code>. This removes the negative <code class="highlighter-rouge">margin</code>s from <code class="highlighter-rouge">.row</code> and the horizontal <code class="highlighter-rouge">padding</code> from all immediate children columns.</p>

<p>Here’s the source code for creating these styles. Note that column overrides are scoped to only the first children columns and are targeted via <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/Attribute_selectors">attribute selector</a>. While this generates a more specific selector, column padding can still be further customized with <a href="/admin/tool/themetester/docs/4.0/utilities/spacing/">spacing utilities</a>.</p>

<p><strong>Need an edge-to-edge design?</strong> Drop the parent <code class="highlighter-rouge">.container</code> or <code class="highlighter-rouge">.container-fluid</code>.</p>

<figure class="highlight"><pre><code class="language-sass" data-lang="sass"><span class="nc">.no-gutters</span> <span class="err">{</span>
  <span class="nl">margin-right</span><span class="p">:</span> <span class="m">0</span><span class="err">;</span>
  <span class="nl">margin-left</span><span class="p">:</span> <span class="m">0</span><span class="err">;</span>

  <span class="o">&gt;</span> <span class="nc">.col</span><span class="o">,</span>
  <span class="o">&gt;</span> <span class="o">[</span><span class="nt">class</span><span class="o">*=</span><span class="s2">"col-"</span><span class="o">]</span> <span class="err">{</span>
    <span class="nl">padding-right</span><span class="p">:</span> <span class="m">0</span><span class="err">;</span>
    <span class="nl">padding-left</span><span class="p">:</span> <span class="m">0</span><span class="err">;</span>
  <span class="err">}</span>
<span class="err">}</span></code></pre></figure>

<p>In practice, here’s how it looks. Note you can continue to use this with all other predefined grid classes (including column widths, responsive tiers, reorders, and more).</p>

<div class="bd-example-row">

<div class="bd-example">
<div class="row no-gutters">
  <div class="col-12 col-sm-6 col-md-8">.col-12 .col-sm-6 .col-md-8</div>
  <div class="col-6 col-md-4">.col-6 .col-md-4</div>
</div>
</div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row no-gutters"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-12 col-sm-6 col-md-8"</span><span class="nt">&gt;</span>.col-12 .col-sm-6 .col-md-8<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-6 col-md-4"</span><span class="nt">&gt;</span>.col-6 .col-md-4<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

</div>

<h3 id="column-wrapping">Column wrapping</h3>

<p>If more than 12 columns are placed within a single row, each group of extra columns will, as one unit, wrap onto a new line.</p>

<div class="bd-example-row">

<div class="bd-example">
<div class="row">
  <div class="col-9">.col-9</div>
  <div class="col-4">.col-4<br />Since 9 + 4 = 13 &gt; 12, this 4-column-wide div gets wrapped onto a new line as one contiguous unit.</div>
  <div class="col-6">.col-6<br />Subsequent columns continue along the new line.</div>
</div>
</div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-9"</span><span class="nt">&gt;</span>.col-9<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-4"</span><span class="nt">&gt;</span>.col-4<span class="nt">&lt;br&gt;</span>Since 9 + 4 = 13 <span class="ni">&amp;gt;</span> 12, this 4-column-wide div gets wrapped onto a new line as one contiguous unit.<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-6"</span><span class="nt">&gt;</span>.col-6<span class="nt">&lt;br&gt;</span>Subsequent columns continue along the new line.<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

</div>

<h3 id="column-breaks">Column breaks</h3>

<p>Breaking columns to a new line in flexbox requires a small hack: add an element with <code class="highlighter-rouge">width: 100%</code> wherever you want to wrap your columns to a new line. Normally this is accomplished with multiple <code class="highlighter-rouge">.row</code>s, but not every implementation method can account for this.</p>

<div class="bd-example-row">

<div class="bd-example">
<div class="row">
  <div class="col-6 col-sm-3">.col-6 .col-sm-3</div>
  <div class="col-6 col-sm-3">.col-6 .col-sm-3</div>

  <!-- Force next columns to break to new line -->
  <div class="w-100"></div>

  <div class="col-6 col-sm-3">.col-6 .col-sm-3</div>
  <div class="col-6 col-sm-3">.col-6 .col-sm-3</div>
</div>
</div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-6 col-sm-3"</span><span class="nt">&gt;</span>.col-6 .col-sm-3<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-6 col-sm-3"</span><span class="nt">&gt;</span>.col-6 .col-sm-3<span class="nt">&lt;/div&gt;</span>

  <span class="c">&lt;!-- Force next columns to break to new line --&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"w-100"</span><span class="nt">&gt;&lt;/div&gt;</span>

  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-6 col-sm-3"</span><span class="nt">&gt;</span>.col-6 .col-sm-3<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-6 col-sm-3"</span><span class="nt">&gt;</span>.col-6 .col-sm-3<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

</div>

<p>You may also apply this break at specific breakpoints with our <a href="/admin/tool/themetester/docs/4.0/utilities/display/">responsive display utilities</a>.</p>

<div class="bd-example-row">

<div class="bd-example">
<div class="row">
  <div class="col-6 col-sm-4">.col-6 .col-sm-4</div>
  <div class="col-6 col-sm-4">.col-6 .col-sm-4</div>

  <!-- Force next columns to break to new line at md breakpoint and up -->
  <div class="w-100 d-none d-md-block"></div>

  <div class="col-6 col-sm-4">.col-6 .col-sm-4</div>
  <div class="col-6 col-sm-4">.col-6 .col-sm-4</div>
</div>
</div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-6 col-sm-4"</span><span class="nt">&gt;</span>.col-6 .col-sm-4<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-6 col-sm-4"</span><span class="nt">&gt;</span>.col-6 .col-sm-4<span class="nt">&lt;/div&gt;</span>

  <span class="c">&lt;!-- Force next columns to break to new line at md breakpoint and up --&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"w-100 d-none d-md-block"</span><span class="nt">&gt;&lt;/div&gt;</span>

  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-6 col-sm-4"</span><span class="nt">&gt;</span>.col-6 .col-sm-4<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-6 col-sm-4"</span><span class="nt">&gt;</span>.col-6 .col-sm-4<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

</div>

<h2 id="reordering">Reordering</h2>

<h3 id="order-classes">Order classes</h3>

<p>Use <code class="highlighter-rouge">.order-</code> classes for controlling the <strong>visual order</strong> of your content. These classes are responsive, so you can set the <code class="highlighter-rouge">order</code> by breakpoint (e.g., <code class="highlighter-rouge">.order-1.order-md-2</code>). Includes support for <code class="highlighter-rouge">1</code> through <code class="highlighter-rouge">12</code> across all five grid tiers.</p>

<div class="bd-example-row">

<div class="bd-example">
<div class="container">
  <div class="row">
    <div class="col">
      First, but unordered
    </div>
    <div class="col order-12">
      Second, but last
    </div>
    <div class="col order-1">
      Third, but first
    </div>
  </div>
</div>
</div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col"</span><span class="nt">&gt;</span>
      First, but unordered
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col order-12"</span><span class="nt">&gt;</span>
      Second, but last
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col order-1"</span><span class="nt">&gt;</span>
      Third, but first
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

</div>

<p>There are also responsive <code class="highlighter-rouge">.order-first</code> and <code class="highlighter-rouge">.order-last</code> classes that change the <code class="highlighter-rouge">order</code> of an element by applying <code class="highlighter-rouge">order: -1</code> and <code class="highlighter-rouge">order: 13</code> (<code class="highlighter-rouge">order: $columns + 1</code>), respectively. These classes can also be intermixed with the numbered <code class="highlighter-rouge">.order-*</code> classes as needed.</p>

<div class="bd-example-row">

<div class="bd-example">
<div class="container">
  <div class="row">
    <div class="col order-last">
      First, but last
    </div>
    <div class="col">
      Second, but unordered
    </div>
    <div class="col order-first">
      Third, but first
    </div>
  </div>
</div>
</div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col order-last"</span><span class="nt">&gt;</span>
      First, but last
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col"</span><span class="nt">&gt;</span>
      Second, but unordered
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col order-first"</span><span class="nt">&gt;</span>
      Third, but first
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

</div>

<h3 id="offsetting-columns">Offsetting columns</h3>

<p>You can offset grid columns in two ways: our responsive <code class="highlighter-rouge">.offset-</code> grid classes and our <a href="/admin/tool/themetester/docs/4.0/utilities/spacing/">margin utilities</a>. Grid classes are sized to match columns while margins are more useful for quick layouts where the width of the offset is variable.</p>

<h4 id="offset-classes">Offset classes</h4>

<p>Move columns to the right using <code class="highlighter-rouge">.offset-md-*</code> classes. These classes increase the left margin of a column by <code class="highlighter-rouge">*</code> columns. For example, <code class="highlighter-rouge">.offset-md-4</code> moves <code class="highlighter-rouge">.col-md-4</code> over four columns.</p>

<div class="bd-example-row">

<div class="bd-example">
<div class="row">
  <div class="col-md-4">.col-md-4</div>
  <div class="col-md-4 offset-md-4">.col-md-4 .offset-md-4</div>
</div>
<div class="row">
  <div class="col-md-3 offset-md-3">.col-md-3 .offset-md-3</div>
  <div class="col-md-3 offset-md-3">.col-md-3 .offset-md-3</div>
</div>
<div class="row">
  <div class="col-md-6 offset-md-3">.col-md-6 .offset-md-3</div>
</div>
</div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4"</span><span class="nt">&gt;</span>.col-md-4<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4 offset-md-4"</span><span class="nt">&gt;</span>.col-md-4 .offset-md-4<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-3 offset-md-3"</span><span class="nt">&gt;</span>.col-md-3 .offset-md-3<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-3 offset-md-3"</span><span class="nt">&gt;</span>.col-md-3 .offset-md-3<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-6 offset-md-3"</span><span class="nt">&gt;</span>.col-md-6 .offset-md-3<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

</div>

<p>In addition to column clearing at responsive breakpoints, you may need to reset offsets. See this in action in <a href="/admin/tool/themetester/docs/4.0/examples/grid/">the grid example</a>.</p>

<div class="bd-example-row">

<div class="bd-example">
<div class="row">
  <div class="col-sm-5 col-md-6">.col-sm-5 .col-md-6</div>
  <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0">.col-sm-5 .offset-sm-2 .col-md-6 .offset-md-0</div>
</div>

<div class="row">
  <div class="col-sm-6 col-md-5 col-lg-6">.col-sm-6 .col-md-5 .col-lg-6</div>
  <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">.col-sm-6 .col-md-5 .offset-md-2 .col-lg-6 .offset-lg-0</div>
</div>
</div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-5 col-md-6"</span><span class="nt">&gt;</span>.col-sm-5 .col-md-6<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-5 offset-sm-2 col-md-6 offset-md-0"</span><span class="nt">&gt;</span>.col-sm-5 .offset-sm-2 .col-md-6 .offset-md-0<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-6 col-md-5 col-lg-6"</span><span class="nt">&gt;</span>.col-sm-6 .col-md-5 .col-lg-6<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0"</span><span class="nt">&gt;</span>.col-sm-6 .col-md-5 .offset-md-2 .col-lg-6 .offset-lg-0<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

</div>

<h4 id="margin-utilities">Margin utilities</h4>

<p>With the move to flexbox in v4, you can use margin utilities like <code class="highlighter-rouge">.mr-auto</code> to force sibling columns away from one another.</p>

<div class="bd-example-row">

<div class="bd-example">
<div class="row">
  <div class="col-md-4">.col-md-4</div>
  <div class="col-md-4 ml-auto">.col-md-4 .ml-auto</div>
</div>
<div class="row">
  <div class="col-md-3 ml-md-auto">.col-md-3 .ml-md-auto</div>
  <div class="col-md-3 ml-md-auto">.col-md-3 .ml-md-auto</div>
</div>
<div class="row">
  <div class="col-auto mr-auto">.col-auto .mr-auto</div>
  <div class="col-auto">.col-auto</div>
</div>
</div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4"</span><span class="nt">&gt;</span>.col-md-4<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4 ml-auto"</span><span class="nt">&gt;</span>.col-md-4 .ml-auto<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-3 ml-md-auto"</span><span class="nt">&gt;</span>.col-md-3 .ml-md-auto<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-3 ml-md-auto"</span><span class="nt">&gt;</span>.col-md-3 .ml-md-auto<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-auto mr-auto"</span><span class="nt">&gt;</span>.col-auto .mr-auto<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-auto"</span><span class="nt">&gt;</span>.col-auto<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

</div>

<h2 id="nesting">Nesting</h2>

<p>To nest your content with the default grid, add a new <code class="highlighter-rouge">.row</code> and set of <code class="highlighter-rouge">.col-sm-*</code> columns within an existing <code class="highlighter-rouge">.col-sm-*</code> column. Nested rows should include a set of columns that add up to 12 or fewer (it is not required that you use all 12 available columns).</p>

<div class="bd-example-row">

<div class="bd-example">
<div class="row">
  <div class="col-sm-9">
    Level 1: .col-sm-9
    <div class="row">
      <div class="col-8 col-sm-6">
        Level 2: .col-8 .col-sm-6
      </div>
      <div class="col-4 col-sm-6">
        Level 2: .col-4 .col-sm-6
      </div>
    </div>
  </div>
</div>
</div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-9"</span><span class="nt">&gt;</span>
    Level 1: .col-sm-9
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-8 col-sm-6"</span><span class="nt">&gt;</span>
        Level 2: .col-8 .col-sm-6
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-4 col-sm-6"</span><span class="nt">&gt;</span>
        Level 2: .col-4 .col-sm-6
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

</div>

<h2 id="sass-mixins">Sass mixins</h2>

<p>When using Bootstrap’s source Sass files, you have the option of using Sass variables and mixins to create custom, semantic, and responsive page layouts. Our predefined grid classes use these same variables and mixins to provide a whole suite of ready-to-use classes for fast responsive layouts.</p>

<h3 id="variables">Variables</h3>

<p>Variables and maps determine the number of columns, the gutter width, and the media query point at which to begin floating columns. We use these to generate the predefined grid classes documented above, as well as for the custom mixins listed below.</p>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="nv">$grid-columns</span><span class="p">:</span>      <span class="m">12</span><span class="p">;</span>
<span class="nv">$grid-gutter-width</span><span class="p">:</span> <span class="m">30px</span><span class="p">;</span>

<span class="nv">$grid-breakpoints</span><span class="p">:</span> <span class="p">(</span>
  <span class="o">//</span> <span class="n">Extra</span> <span class="n">small</span> <span class="n">screen</span> <span class="o">/</span> <span class="n">phone</span>
  <span class="n">xs</span><span class="o">:</span> <span class="m">0</span><span class="o">,</span>
  <span class="o">//</span> <span class="n">Small</span> <span class="n">screen</span> <span class="o">/</span> <span class="n">phone</span>
  <span class="n">sm</span><span class="o">:</span> <span class="m">576px</span><span class="o">,</span>
  <span class="o">//</span> <span class="n">Medium</span> <span class="n">screen</span> <span class="o">/</span> <span class="n">tablet</span>
  <span class="n">md</span><span class="o">:</span> <span class="m">768px</span><span class="o">,</span>
  <span class="o">//</span> <span class="n">Large</span> <span class="n">screen</span> <span class="o">/</span> <span class="n">desktop</span>
  <span class="n">lg</span><span class="o">:</span> <span class="m">992px</span><span class="o">,</span>
  <span class="o">//</span> <span class="n">Extra</span> <span class="nb">large</span> <span class="n">screen</span> <span class="o">/</span> <span class="n">wide</span> <span class="n">desktop</span>
  <span class="n">xl</span><span class="o">:</span> <span class="m">1200px</span>
<span class="p">);</span>

<span class="nv">$container-max-widths</span><span class="p">:</span> <span class="p">(</span>
  <span class="n">sm</span><span class="o">:</span> <span class="m">540px</span><span class="o">,</span>
  <span class="n">md</span><span class="o">:</span> <span class="m">720px</span><span class="o">,</span>
  <span class="n">lg</span><span class="o">:</span> <span class="m">960px</span><span class="o">,</span>
  <span class="n">xl</span><span class="o">:</span> <span class="m">1140px</span>
<span class="p">);</span></code></pre></figure>

<h3 id="mixins">Mixins</h3>

<p>Mixins are used in conjunction with the grid variables to generate semantic CSS for individual grid columns.</p>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="c1">// Creates a wrapper for a series of columns</span>
<span class="k">@include</span> <span class="nd">make-row</span><span class="p">();</span>

<span class="c1">// Make the element grid-ready (applying everything but the width)</span>
<span class="k">@include</span> <span class="nd">make-col-ready</span><span class="p">();</span>
<span class="k">@include</span> <span class="nd">make-col</span><span class="p">(</span><span class="nv">$size</span><span class="o">,</span> <span class="nv">$columns</span><span class="o">:</span> <span class="nv">$grid-columns</span><span class="p">);</span>

<span class="c1">// Get fancy by offsetting, or changing the sort order</span>
<span class="k">@include</span> <span class="nd">make-col-offset</span><span class="p">(</span><span class="nv">$size</span><span class="o">,</span> <span class="nv">$columns</span><span class="o">:</span> <span class="nv">$grid-columns</span><span class="p">);</span></code></pre></figure>

<h3 id="example-usage">Example usage</h3>

<p>You can modify the variables to your own custom values, or just use the mixins with their default values. Here’s an example of using the default settings to create a two-column layout with a gap between.</p>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="nc">.example-container</span> <span class="p">{</span>
  <span class="nl">width</span><span class="p">:</span> <span class="m">800px</span><span class="p">;</span>
  <span class="k">@include</span> <span class="nd">make-container</span><span class="p">();</span>
<span class="p">}</span>

<span class="nc">.example-row</span> <span class="p">{</span>
  <span class="k">@include</span> <span class="nd">make-row</span><span class="p">();</span>
<span class="p">}</span>

<span class="nc">.example-content-main</span> <span class="p">{</span>
  <span class="k">@include</span> <span class="nd">make-col-ready</span><span class="p">();</span>

  <span class="k">@include</span> <span class="nd">media-breakpoint-up</span><span class="p">(</span><span class="n">sm</span><span class="p">)</span> <span class="p">{</span>
    <span class="k">@include</span> <span class="nd">make-col</span><span class="p">(</span><span class="m">6</span><span class="p">);</span>
  <span class="p">}</span>
  <span class="k">@include</span> <span class="nd">media-breakpoint-up</span><span class="p">(</span><span class="n">lg</span><span class="p">)</span> <span class="p">{</span>
    <span class="k">@include</span> <span class="nd">make-col</span><span class="p">(</span><span class="m">8</span><span class="p">);</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="nc">.example-content-secondary</span> <span class="p">{</span>
  <span class="k">@include</span> <span class="nd">make-col-ready</span><span class="p">();</span>

  <span class="k">@include</span> <span class="nd">media-breakpoint-up</span><span class="p">(</span><span class="n">sm</span><span class="p">)</span> <span class="p">{</span>
    <span class="k">@include</span> <span class="nd">make-col</span><span class="p">(</span><span class="m">6</span><span class="p">);</span>
  <span class="p">}</span>
  <span class="k">@include</span> <span class="nd">media-breakpoint-up</span><span class="p">(</span><span class="n">lg</span><span class="p">)</span> <span class="p">{</span>
    <span class="k">@include</span> <span class="nd">make-col</span><span class="p">(</span><span class="m">4</span><span class="p">);</span>
  <span class="p">}</span>
<span class="p">}</span></code></pre></figure>

<div class="bd-example">
<div class="example-container">
  <div class="example-row">
    <div class="example-content-main">Main content</div>
    <div class="example-content-secondary">Secondary content</div>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"example-container"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"example-row"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"example-content-main"</span><span class="nt">&gt;</span>Main content<span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"example-content-secondary"</span><span class="nt">&gt;</span>Secondary content<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="customizing-the-grid">Customizing the grid</h2>

<p>Using our built-in grid Sass variables and maps, it’s possible to completely customize the predefined grid classes. Change the number of tiers, the media query dimensions, and the container widths—then recompile.</p>

<h3 id="columns-and-gutters">Columns and gutters</h3>

<p>The number of grid columns can be modified via Sass variables. <code class="highlighter-rouge">$grid-columns</code> is used to generate the widths (in percent) of each individual column while <code class="highlighter-rouge">$grid-gutter-width</code> allows breakpoint-specific widths that are divided evenly across <code class="highlighter-rouge">padding-left</code> and <code class="highlighter-rouge">padding-right</code> for the column gutters.</p>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="nv">$grid-columns</span><span class="p">:</span> <span class="m">12</span> <span class="o">!</span><span class="nb">default</span><span class="p">;</span>
<span class="nv">$grid-gutter-width</span><span class="p">:</span> <span class="m">30px</span> <span class="o">!</span><span class="nb">default</span><span class="p">;</span></code></pre></figure>

<h3 id="grid-tiers">Grid tiers</h3>

<p>Moving beyond the columns themselves, you may also customize the number of grid tiers. If you wanted just four grid tiers, you’d update the <code class="highlighter-rouge">$grid-breakpoints</code> and <code class="highlighter-rouge">$container-max-widths</code> to something like this:</p>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="nv">$grid-breakpoints</span><span class="p">:</span> <span class="p">(</span>
  <span class="n">xs</span><span class="o">:</span> <span class="m">0</span><span class="o">,</span>
  <span class="n">sm</span><span class="o">:</span> <span class="m">480px</span><span class="o">,</span>
  <span class="n">md</span><span class="o">:</span> <span class="m">768px</span><span class="o">,</span>
  <span class="n">lg</span><span class="o">:</span> <span class="m">1024px</span>
<span class="p">);</span>

<span class="nv">$container-max-widths</span><span class="p">:</span> <span class="p">(</span>
  <span class="n">sm</span><span class="o">:</span> <span class="m">420px</span><span class="o">,</span>
  <span class="n">md</span><span class="o">:</span> <span class="m">720px</span><span class="o">,</span>
  <span class="n">lg</span><span class="o">:</span> <span class="m">960px</span>
<span class="p">);</span></code></pre></figure>

<p>When making any changes to the Sass variables or maps, you’ll need to save your changes and recompile. Doing so will output a brand new set of predefined grid classes for column widths, offsets, and ordering. Responsive visibility utilities will also be updated to use the custom breakpoints. Make sure to set grid values in <code class="highlighter-rouge">px</code> (not <code class="highlighter-rouge">rem</code>, <code class="highlighter-rouge">em</code>, or <code class="highlighter-rouge">%</code>).</p>

        </main>
      </div>
    </div>

    <script src="/admin/tool/themetester/assets/js/vendor/popper.min.js"></script><script src="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.js"></script><script src="/admin/tool/themetester/assets/js/vendor/anchor.min.js"></script>
  <script src="/admin/tool/themetester/assets/js/vendor/clipboard.min.js"></script>
  <script src="/admin/tool/themetester/assets/js/vendor/holder.min.js"></script>
  <script src="/admin/tool/themetester/assets/js/src/application.js"></script>
  <script src="/admin/tool/themetester/assets/js/src/ie-emulation-modes-warning.js"></script>
  <script src="/admin/tool/themetester/assets/js/src/pwa.js"></script>
  </body>
</html>

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

$strheading = 'Theme Tester: Bootstrap 4 CSS : Reboot';
$url = new moodle_url('/admin/tool/themetester/bootswatch4.php');

// Start setting up the page.
$params = array();
$PAGE->set_context(context_system::instance());
$PAGE->set_url($url);
$PAGE->set_title($strheading);
$PAGE->set_heading("Reboot");
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
<meta name="twitter:title" content="Reboot">
<meta name="twitter:description" content="Reboot, a collection of element-specific CSS changes in a single file, kickstart Bootstrap to provide an elegant, consistent, and simple baseline to build upon.">
<meta name="twitter:image" content="/assets/brand/bootstrap-social-logo.png">

<!-- Facebook -->
<meta property="og:url" content="/docs/4.0/content/reboot/">
<meta property="og:title" content="Reboot">
<meta property="og:description" content="Reboot, a collection of element-specific CSS changes in a single file, kickstart Bootstrap to provide an elegant, consistent, and simple baseline to build upon.">
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

      <ul class="nav bd-sidenav"><li class="active bd-sidenav-active">
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
<li class="toc-entry toc-h2"><a href="#approach">Approach</a></li>
<li class="toc-entry toc-h2"><a href="#page-defaults">Page defaults</a></li>
<li class="toc-entry toc-h2"><a href="#native-font-stack">Native font stack</a></li>
<li class="toc-entry toc-h2"><a href="#headings-and-paragraphs">Headings and paragraphs</a></li>
<li class="toc-entry toc-h2"><a href="#lists">Lists</a></li>
<li class="toc-entry toc-h2"><a href="#preformatted-text">Preformatted text</a></li>
<li class="toc-entry toc-h2"><a href="#tables">Tables</a></li>
<li class="toc-entry toc-h2"><a href="#forms">Forms</a></li>
<li class="toc-entry toc-h2"><a href="#misc-elements">Misc elements</a>
<ul>
<li class="toc-entry toc-h3"><a href="#address">Address</a></li>
<li class="toc-entry toc-h3"><a href="#blockquote">Blockquote</a></li>
<li class="toc-entry toc-h3"><a href="#inline-elements">Inline elements</a></li>
<li class="toc-entry toc-h3"><a href="#summary">Summary</a></li>
</ul>
</li>
<li class="toc-entry toc-h2"><a href="#html5-hidden-attribute">HTML5 [hidden] attribute</a></li>
</ul>
          </div>
        

        <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
          <h1 class="bd-title" id="content">Reboot</h1>
          <p class="bd-lead">Reboot, a collection of element-specific CSS changes in a single file, kickstart Bootstrap to provide an elegant, consistent, and simple baseline to build upon.</p>
          <h2 id="approach">Approach</h2>

<p>Reboot builds upon Normalize, providing many HTML elements with somewhat opinionated styles using only element selectors. Additional styling is done only with classes. For example, we reboot some <code class="highlighter-rouge">&lt;table&gt;</code> styles for a simpler baseline and later provide <code class="highlighter-rouge">.table</code>, <code class="highlighter-rouge">.table-bordered</code>, and more.</p>

<p>Here are our guidelines and reasons for choosing what to override in Reboot:</p>

<ul>
  <li>Update some browser default values to use <code class="highlighter-rouge">rem</code>s instead of <code class="highlighter-rouge">em</code>s for scalable component spacing.</li>
  <li>Avoid <code class="highlighter-rouge">margin-top</code>. Vertical margins can collapse, yielding unexpected results. More importantly though, a single direction of <code class="highlighter-rouge">margin</code> is a simpler mental model.</li>
  <li>For easier scaling across device sizes, block elements should use <code class="highlighter-rouge">rem</code>s for <code class="highlighter-rouge">margin</code>s.</li>
  <li>Keep declarations of <code class="highlighter-rouge">font</code>-related properties to a minimum, using <code class="highlighter-rouge">inherit</code> whenever possible.</li>
</ul>

<h2 id="page-defaults">Page defaults</h2>

<p>The <code class="highlighter-rouge"><span class="nt">&lt;html&gt;</span></code> and <code class="highlighter-rouge">&lt;body&gt;</code> elements are updated to provide better page-wide defaults. More specifically:</p>

<ul>
  <li>The <code class="highlighter-rouge">box-sizing</code> is globally set on every element—including <code class="highlighter-rouge">*::before</code> and <code class="highlighter-rouge">*::after</code>, to <code class="highlighter-rouge">border-box</code>. This ensures that the declared width of element is never exceeded due to padding or border.
    <ul>
      <li>No base <code class="highlighter-rouge">font-size</code> is declared on the <code class="highlighter-rouge"><span class="nt">&lt;html&gt;</span></code>, but <code class="highlighter-rouge">16px</code> is assumed (the browser default). <code class="highlighter-rouge">font-size: 1rem</code> is applied on the <code class="highlighter-rouge">&lt;body&gt;</code> for easy responsive type-scaling via media queries while respecting user preferences and ensuring a more accessible approach.</li>
    </ul>
  </li>
  <li>The <code class="highlighter-rouge">&lt;body&gt;</code> also sets a global <code class="highlighter-rouge">font-family</code>, <code class="highlighter-rouge">line-height</code>, and <code class="highlighter-rouge">text-align</code>. This is inherited later by some form elements to prevent font inconsistencies.</li>
  <li>For safety, the <code class="highlighter-rouge">&lt;body&gt;</code> has a declared <code class="highlighter-rouge">background-color</code>, defaulting to <code class="highlighter-rouge">#fff</code>.</li>
</ul>

<h2 id="native-font-stack">Native font stack</h2>

<p>The default web fonts (Helvetica Neue, Helvetica, and Arial) have been dropped in Bootstrap 4 and replaced with a “native font stack” for optimum text rendering on every device and OS. Read more about <a href="https://www.smashingmagazine.com/2015/11/using-system-ui-fonts-practical-guide/">native font stacks in this <em>Smashing Magazine</em> article</a>.</p>

<figure class="highlight"><pre><code class="language-sass" data-lang="sass"><span class="nv">$font-family-sans-serif</span><span class="p">:</span>
  <span class="c1">// Safari for OS X and iOS (San Francisco)</span>
  <span class="nt">-apple-system</span><span class="o">,</span>
  <span class="c1">// Chrome &lt; 56 for OS X (San Francisco)</span>
  <span class="nt">BlinkMacSystemFont</span><span class="o">,</span>
  <span class="c1">// Windows</span>
  <span class="s2">"Segoe UI"</span><span class="o">,</span>
  <span class="c1">// Android</span>
  <span class="s2">"Roboto"</span><span class="o">,</span>
  <span class="c1">// Basic web fallback</span>
  <span class="s2">"Helvetica Neue"</span><span class="o">,</span> <span class="nt">Arial</span><span class="o">,</span> <span class="nt">sans-serif</span><span class="o">,</span>
  <span class="c1">// Emoji fonts</span>
  <span class="s2">"Apple Color Emoji"</span><span class="o">,</span> <span class="s2">"Segoe UI Emoji"</span><span class="o">,</span> <span class="s2">"Segoe UI Symbol"</span> <span class="o">!</span><span class="nt">default</span><span class="o">;</span></code></pre></figure>

<p>This <code class="highlighter-rouge">font-family</code> is applied to the <code class="highlighter-rouge">&lt;body&gt;</code> and automatically inherited globally throughout Bootstrap. To switch the global <code class="highlighter-rouge">font-family</code>, update <code class="highlighter-rouge">$font-family-base</code> and recompile Bootstrap.</p>

<h2 id="headings-and-paragraphs">Headings and paragraphs</h2>

<p>All heading elements—e.g., <code class="highlighter-rouge">&lt;h1&gt;</code>—and <code class="highlighter-rouge">&lt;p&gt;</code> are reset to have their <code class="highlighter-rouge">margin-top</code> removed. Headings have <code class="highlighter-rouge">margin-bottom: .5rem</code> added and paragraphs <code class="highlighter-rouge">margin-bottom: 1rem</code> for easy spacing.</p>

<table>
  <thead>
    <tr>
      <th>Heading</th>
      <th>Example</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <p><code class="highlighter-rouge">&lt;h1&gt;&lt;/h1&gt;</code></p>

      </td>
      <td><span class="h1">h1. Bootstrap heading</span></td>
    </tr>
    <tr>
      <td>
        <p><code class="highlighter-rouge">&lt;h2&gt;&lt;/h2&gt;</code></p>

      </td>
      <td><span class="h2">h2. Bootstrap heading</span></td>
    </tr>
    <tr>
      <td>
        <p><code class="highlighter-rouge">&lt;h3&gt;&lt;/h3&gt;</code></p>

      </td>
      <td><span class="h3">h3. Bootstrap heading</span></td>
    </tr>
    <tr>
      <td>
        <p><code class="highlighter-rouge">&lt;h4&gt;&lt;/h4&gt;</code></p>

      </td>
      <td><span class="h4">h4. Bootstrap heading</span></td>
    </tr>
    <tr>
      <td>
        <p><code class="highlighter-rouge">&lt;h5&gt;&lt;/h5&gt;</code></p>

      </td>
      <td><span class="h5">h5. Bootstrap heading</span></td>
    </tr>
    <tr>
      <td>
        <p><code class="highlighter-rouge">&lt;h6&gt;&lt;/h6&gt;</code></p>

      </td>
      <td><span class="h6">h6. Bootstrap heading</span></td>
    </tr>
  </tbody>
</table>

<h2 id="lists">Lists</h2>

<p>All lists—<code class="highlighter-rouge">&lt;ul&gt;</code>, <code class="highlighter-rouge">&lt;ol&gt;</code>, and <code class="highlighter-rouge">&lt;dl&gt;</code>—have their <code class="highlighter-rouge">margin-top</code> removed and a <code class="highlighter-rouge">margin-bottom: 1rem</code>. Nested lists have no <code class="highlighter-rouge">margin-bottom</code>.</p>

<div class="bd-example">


<ul>
  <li>Lorem ipsum dolor sit amet</li>
  <li>Consectetur adipiscing elit</li>
  <li>Integer molestie lorem at massa</li>
  <li>Facilisis in pretium nisl aliquet</li>
  <li>Nulla volutpat aliquam velit
    <ul>
      <li>Phasellus iaculis neque</li>
      <li>Purus sodales ultricies</li>
      <li>Vestibulum laoreet porttitor sem</li>
      <li>Ac tristique libero volutpat at</li>
    </ul>
  </li>
  <li>Faucibus porta lacus fringilla vel</li>
  <li>Aenean sit amet erat nunc</li>
  <li>Eget porttitor lorem</li>
</ul>

<ol>
  <li>Lorem ipsum dolor sit amet</li>
  <li>Consectetur adipiscing elit</li>
  <li>Integer molestie lorem at massa</li>
  <li>Facilisis in pretium nisl aliquet</li>
  <li>Nulla volutpat aliquam velit</li>
  <li>Faucibus porta lacus fringilla vel</li>
  <li>Aenean sit amet erat nunc</li>
  <li>Eget porttitor lorem</li>
</ol>

</div>

<p>For simpler styling, clear hierarchy, and better spacing, description lists have updated <code class="highlighter-rouge">margin</code>s. <code class="highlighter-rouge">&lt;dd&gt;</code>s reset <code class="highlighter-rouge">margin-left</code> to <code class="highlighter-rouge">0</code> and add <code class="highlighter-rouge">margin-bottom: .5rem</code>. <code class="highlighter-rouge">&lt;dt&gt;</code>s are <strong>bolded</strong>.</p>

<div class="bd-example">
  <dl>
    <dt>Description lists</dt>
    <dd>A description list is perfect for defining terms.</dd>
    <dt>Euismod</dt>
    <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem.</dd>
    <dd>Donec id elit non mi porta gravida at eget metus.</dd>
    <dt>Malesuada porta</dt>
    <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
  </dl>
</div>

<h2 id="preformatted-text">Preformatted text</h2>

<p>The <code class="highlighter-rouge">&lt;pre&gt;</code> element is reset to remove its <code class="highlighter-rouge">margin-top</code> and use <code class="highlighter-rouge">rem</code> units for its <code class="highlighter-rouge">margin-bottom</code>.</p>

<div class="bd-example">
<pre>
.example-element {
  margin-bottom: 1rem;
}
</pre>
</div>

<h2 id="tables">Tables</h2>

<p>Tables are slightly adjusted to style <code class="highlighter-rouge">&lt;caption&gt;</code>s, collapse borders, and ensure consistent <code class="highlighter-rouge">text-align</code> throughout. Additional changes for borders, padding, and more come with <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/content/tables/">the <code class="highlighter-rouge">.table</code> class</a>.</p>

<div class="bd-example">
  <table>
    <caption>
      This is an example table, and this is its caption to describe the contents.
    </caption>
    <thead>
      <tr>
        <th>Table heading</th>
        <th>Table heading</th>
        <th>Table heading</th>
        <th>Table heading</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Table cell</td>
        <td>Table cell</td>
        <td>Table cell</td>
        <td>Table cell</td>
      </tr>
      <tr>
        <td>Table cell</td>
        <td>Table cell</td>
        <td>Table cell</td>
        <td>Table cell</td>
      </tr>
      <tr>
        <td>Table cell</td>
        <td>Table cell</td>
        <td>Table cell</td>
        <td>Table cell</td>
      </tr>
    </tbody>
  </table>
</div>

<h2 id="forms">Forms</h2>

<p>Various form elements have been rebooted for simpler base styles. Here are some of the most notable changes:</p>

<ul>
  <li><code class="highlighter-rouge">&lt;fieldset&gt;</code>s have no borders, padding, or margin so they can be easily used as wrappers for individual inputs or groups of inputs.</li>
  <li><code class="highlighter-rouge">&lt;legend&gt;</code>s, like fieldsets, have also been restyled to be displayed as a heading of sorts.</li>
  <li><code class="highlighter-rouge">&lt;label&gt;</code>s are set to <code class="highlighter-rouge">display: inline-block</code> to allow <code class="highlighter-rouge">margin</code> to be applied.</li>
  <li><code class="highlighter-rouge">&lt;input&gt;</code>s, <code class="highlighter-rouge">&lt;select&gt;</code>s, <code class="highlighter-rouge">&lt;textarea&gt;</code>s, and <code class="highlighter-rouge">&lt;button&gt;</code>s are mostly addressed by Normalize, but Reboot removes their <code class="highlighter-rouge">margin</code> and sets <code class="highlighter-rouge">line-height: inherit</code>, too.</li>
  <li><code class="highlighter-rouge">&lt;textarea&gt;</code>s are modified to only be resizable vertically as horizontal resizing often “breaks” page layout.</li>
</ul>

<p>These changes, and more, are demonstrated below.</p>

<form class="bd-example">
  <fieldset>
    <legend>Example legend</legend>

    <p>
      <label for="input">Example input</label>
      <input type="text" id="input" placeholder="Example input" />
    </p>

    <p>
      <label for="select">Example select</label>
      <select id="select">
        <option value="">Choose...</option>
        <optgroup label="Option group 1">
          <option value="">Option 1</option>
          <option value="">Option 2</option>
          <option value="">Option 3</option>
        </optgroup>
        <optgroup label="Option group 2">
          <option value="">Option 4</option>
          <option value="">Option 5</option>
          <option value="">Option 6</option>
        </optgroup>
      </select>
    </p>

    <p>
      <label>
        <input type="checkbox" value="" />
        Check this checkbox
      </label>
    </p>

    <p>
      <label>
        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="" />
        Option one is this and that
      </label>
      <label>
        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" />
        Option two is something else that's also super long to demonstrate the wrapping of these fancy form controls.
      </label>
      <label>
        <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled="" />
        Option three is disabled
      </label>
    </p>

    <p>
      <label for="textarea">Example textarea</label>
      <textarea id="textarea" rows="3"></textarea>
    </p>

    <p>
      <label for="date">Example date</label>
      <input type="date" id="date" />
    </p>

    <p>
      <label for="time">Example time</label>
      <input type="time" id="time" />
    </p>

    <p>
      <label for="output">Example output</label>
      <output name="result" id="output">100</output>
    </p>

    <p>
      <button type="submit">Button submit</button>
      <input type="submit" value="Input submit button" />
      <input type="button" value="Input button" />
    </p>

    <p>
      <button type="submit" disabled="">Button submit</button>
      <input type="submit" value="Input submit button" disabled="" />
      <input type="button" value="Input button" disabled="" />
    </p>
  </fieldset>
</form>

<h2 id="misc-elements">Misc elements</h2>

<h3 id="address">Address</h3>

<p>The <code class="highlighter-rouge">&lt;address&gt;</code> element is updated to reset the browser default <code class="highlighter-rouge">font-style</code> from <code class="highlighter-rouge">italic</code> to <code class="highlighter-rouge">normal</code>. <code class="highlighter-rouge">line-height</code> is also now inherited, and <code class="highlighter-rouge">margin-bottom: 1rem</code> has been added. <code class="highlighter-rouge">&lt;address&gt;</code>s are for presenting contact information for the nearest ancestor (or an entire body of work). Preserve formatting by ending lines with <code class="highlighter-rouge">&lt;br&gt;</code>.</p>

<div class="bd-example">
  <address>
    <strong>Twitter, Inc.</strong><br />
    1355 Market St, Suite 900<br />
    San Francisco, CA 94103<br />
    <abbr title="Phone">P:</abbr> (123) 456-7890
  </address>

  <address>
    <strong>Full Name</strong><br />
    <a href="mailto:#">first.last@example.com</a>
  </address>
</div>

<h3 id="blockquote">Blockquote</h3>

<p>The default <code class="highlighter-rouge">margin</code> on blockquotes is <code class="highlighter-rouge">1em 40px</code>, so we reset that to <code class="highlighter-rouge">0 0 1rem</code> for something more consistent with other elements.</p>

<div class="bd-example">
  <blockquote class="blockquote">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
    <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
  </blockquote>
</div>

<h3 id="inline-elements">Inline elements</h3>

<p>The <code class="highlighter-rouge">&lt;abbr&gt;</code> element receives basic styling to make it stand out amongst paragraph text.</p>

<div class="bd-example">
  Nulla <abbr title="attribute">attr</abbr> vitae elit libero, a pharetra augue.
</div>

<h3 id="summary">Summary</h3>

<p>The default <code class="highlighter-rouge">cursor</code> on summary is <code class="highlighter-rouge">text</code>, so we reset that to <code class="highlighter-rouge">pointer</code> to convey that the element can be interacted with by clicking on it.</p>

<div class="bd-example">
  <details>
    <summary>Some details</summary>
    <p>More info about the details.</p>
  </details>

  <details open="">
    <summary>Even more details</summary>
    <p>Here are even more details about the details.</p>
  </details>
</div>

<h2 id="html5-hidden-attribute">HTML5 <code class="highlighter-rouge">[hidden]</code> attribute</h2>

<p>HTML5 adds <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes/hidden">a new global attribute named <code class="highlighter-rouge">[hidden]</code></a>, which is styled as <code class="highlighter-rouge">display: none</code> by default. Borrowing an idea from <a href="https://purecss.io/">PureCSS</a>, we improve upon this default by making <code class="highlighter-rouge">[hidden] { display: none !important; }</code> to help prevent its <code class="highlighter-rouge">display</code> from getting accidentally overridden. While <code class="highlighter-rouge">[hidden]</code> isn’t natively supported by IE10, the explicit declaration in our CSS gets around that problem.</p>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">hidden</span><span class="nt">&gt;</span></code></pre></figure>

<div class="bd-callout bd-callout-warning">
<h5 id="jquery-incompatibility">jQuery incompatibility</h5>

<p><code class="highlighter-rouge">[hidden]</code> is not compatible with jQuery’s <code class="highlighter-rouge">$(...).hide()</code> and <code class="highlighter-rouge">$(...).show()</code> methods. Therefore, we don’t currently especially endorse <code class="highlighter-rouge">[hidden]</code> over other techniques for managing the <code class="highlighter-rouge">display</code> of elements.</p>
</div>

<p>To merely toggle the visibility of an element, meaning its <code class="highlighter-rouge">display</code> is not modified and the element can still affect the flow of the document, use <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/utilities/visibility/">the <code class="highlighter-rouge">.invisible</code> class</a> instead.</p>

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

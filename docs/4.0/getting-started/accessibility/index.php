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

$strheading = 'Theme Tester: Bootstrap 4 CSS';
$url = new moodle_url('/admin/tool/themetester/bs_css.php');

// Start setting up the page.
$params = array();
$PAGE->set_context(context_system::instance());
$PAGE->set_url($url);
$PAGE->set_title($strheading);
$PAGE->set_heading($strheading);
$PAGE->requires->css('/admin/tool/themetester/bs_docs.min.css');
admin_externalpage_setup('toolthemetester');

echo $OUTPUT->header();

echo html_writer::link(new moodle_url('index.php'), '&laquo; Back to index');
echo $OUTPUT->heading($strheading);

?>

<title>Accessibility · Bootstrap</title>

<!-- Documentation extras -->

<link href="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.css" rel="stylesheet">

<link href="/admin/tool/themetester/assets/css/docs.min.css" rel="stylesheet">

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
<meta name="twitter:title" content="Accessibility">
<meta name="twitter:description" content="A brief overview of Bootstrap’s features and limitations for the creation of accessible content.">
<meta name="twitter:image" content="/assets/brand/bootstrap-social-logo.png">

<!-- Facebook -->
<meta property="og:url" content="/docs/4.0/getting-started/accessibility/">
<meta property="og:title" content="Accessibility">
<meta property="og:description" content="A brief overview of Bootstrap’s features and limitations for the creation of accessible content.">
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
            </a></li><li class="active bd-sidenav-active">
            <a href="/admin/tool/themetester/docs/4.0/getting-started/accessibility/">
              Accessibility
            </a></li></ul>
    </div><div class="bd-toc-item">
      <a class="bd-toc-link" href="/admin/tool/themetester/docs/4.0/layout/overview/">
        Layout
      </a>

      <ul class="nav bd-sidenav"><li>
            <a href="/admin/tool/themetester/docs/4.0/layout/overview/">
              Overview
            </a></li><li>
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
<li class="toc-entry toc-h2"><a href="#overview-and-limitations">Overview and Limitations</a>
<ul>
<li class="toc-entry toc-h3"><a href="#structural-markup">Structural markup</a></li>
<li class="toc-entry toc-h3"><a href="#interactive-components">Interactive components</a></li>
<li class="toc-entry toc-h3"><a href="#color-contrast">Color contrast</a></li>
<li class="toc-entry toc-h3"><a href="#visually-hidden-content">Visually hidden content</a></li>
</ul>
</li>
<li class="toc-entry toc-h2"><a href="#additional-resources">Additional resources</a></li>
</ul>
          </div>
        

        <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
          <h1 class="bd-title" id="content">Accessibility</h1>
          <p class="bd-lead">A brief overview of Bootstrap’s features and limitations for the creation of accessible content.</p>
          <p>Bootstrap provides an easy-to-use framework of ready-made styles, layout tools, and interactive components, allowing developers to create websites and applications that are visually appealing, functionally rich, and accessible out of the box.</p>

<h2 id="overview-and-limitations">Overview and Limitations</h2>

<p>The overall accessibility of any project built with Bootstrap depends in large part on the author’s markup, additional styling, and scripting they’ve included. However, provided that these have been implemented correctly, it should be perfectly possible to create websites and applications with Bootstrap that fulfill <a href="https://www.w3.org/TR/WCAG20/"><abbr title="Web Content Accessibility Guidelines">WCAG</abbr> 2.0</a> (A/AA/AAA), <a href="https://www.section508.gov/">Section 508</a> and similar accessibility standards and requirements.</p>

<h3 id="structural-markup">Structural markup</h3>

<p>Bootstrap’s styling and layout can be applied to a wide range of markup structures. This documentation aims to provide developers with best practice examples to demonstrate the use of Bootstrap itself and illustrate appropriate semantic markup, including ways in which potential accessibility concerns can be addressed.</p>

<h3 id="interactive-components">Interactive components</h3>

<p>Bootstrap’s interactive components—such as modal dialogs, dropdown menus and custom tooltips—are designed to work for touch, mouse and keyboard users. Through the use of relevant <a href="https://www.w3.org/WAI/intro/aria"><abbr title="Web Accessibility Initiative">WAI</abbr>-<abbr title="Accessible Rich Internet Applications">ARIA</abbr></a> roles and attributes, these components should also be understandable and operable using assistive technologies (such as screen readers).</p>

<p>Because Bootstrap’s components are purposely designed to be fairly generic, authors may need to include further <abbr title="Accessible Rich Internet Applications">ARIA</abbr> roles and attributes, as well as JavaScript behavior, to more accurately convey the precise nature and functionality of their component. This is usually noted in the documentation.</p>

<h3 id="color-contrast">Color contrast</h3>

<p>Most colors that currently make up Bootstrap’s default palette—used throughout the framework for things such as button variations, alert variations, form validation indicators—lead to <em>insufficient</em> color contrast (below the recommended <a href="https://www.w3.org/TR/UNDERSTANDING-WCAG20/visual-audio-contrast-contrast.html">WCAG 2.0 color contrast ratio of 4.5:1</a>) when used against a light background. Authors will need to manually modify/extend these default colors to ensure adequate color contrast ratios.</p>

<h3 id="visually-hidden-content">Visually hidden content</h3>

<p>Content which should be visually hidden, but remain accessible to assistive technologies such as screen readers, can be styled using the <code class="highlighter-rouge">.sr-only</code> class. This can be useful in situations where additional visual information or cues (such as meaning denoted through the use of color) need to also be conveyed to non-visual users.</p>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-danger"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>Danger: <span class="nt">&lt;/span&gt;</span>
  This action is not reversible
<span class="nt">&lt;/p&gt;</span></code></pre></figure>

<p>For visually hidden interactive controls, such as traditional “skip” links, <code class="highlighter-rouge">.sr-only</code> can be combined with the <code class="highlighter-rouge">.sr-only-focusable</code> class. This will ensure that the control becomes visible once focused (for sighted keyboard users).</p>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"sr-only sr-only-focusable"</span> <span class="na">href=</span><span class="s">"#content"</span><span class="nt">&gt;</span>Skip to main content<span class="nt">&lt;/a&gt;</span></code></pre></figure>

<h2 id="additional-resources">Additional resources</h2>

<ul>
  <li><a href="https://www.w3.org/TR/WCAG20/">Web Content Accessibility Guidelines (WCAG) 2.0</a></li>
  <li><a href="http://a11yproject.com/">The A11Y Project</a></li>
  <li><a href="https://developer.mozilla.org/en-US/docs/Web/Accessibility">MDN accessibility documentation</a></li>
  <li><a href="https://tenon.io/">Tenon.io Accessibility Checker</a></li>
  <li><a href="https://developer.paciellogroup.com/resources/contrastanalyser/">Colour Contrast Analyser (CCA)</a></li>
  <li><a href="https://github.com/squizlabs/HTML_CodeSniffer">“HTML Codesniffer” bookmarklet for identifying accessibility issues</a></li>
</ul>

        </main>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/admin/tool/themetester/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>

<script src="/admin/tool/themetester/assets/js/vendor/popper.min.js"></script><script src="/admin/tool/themetester/dist/js/bootstrap.js"></script><script src="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.js"></script><script src="/admin/tool/themetester/assets/js/vendor/anchor.min.js"></script>
  <script src="/admin/tool/themetester/assets/js/vendor/clipboard.min.js"></script>
  <script src="/admin/tool/themetester/assets/js/vendor/holder.min.js"></script>
  <script src="/admin/tool/themetester/assets/js/src/application.js"></script>
  <script src="/admin/tool/themetester/assets/js/src/ie-emulation-modes-warning.js"></script>
  <script src="/admin/tool/themetester/assets/js/src/pwa.js"></script>
  </body>
</html>

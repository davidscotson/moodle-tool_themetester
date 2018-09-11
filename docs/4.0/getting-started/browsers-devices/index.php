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

$strheading = 'Theme Tester: Bootstrap 4 CSS : Browsers and devices';
$url = new moodle_url('/admin/tool/themetester/bootswatch4.php');

// Start setting up the page.
$params = array();
$PAGE->set_context(context_system::instance());
$PAGE->set_url($url);
$PAGE->set_title($strheading);
$PAGE->set_heading("Browsers and devices");
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
<meta name="twitter:title" content="Browsers and devices">
<meta name="twitter:description" content="Learn about the browsers and devices, from modern to old, that are supported by Bootstrap, including known quirks and bugs for each.">
<meta name="twitter:image" content="/assets/brand/bootstrap-social-logo.png">

<!-- Facebook -->
<meta property="og:url" content="/docs/4.0/getting-started/browsers-devices/">
<meta property="og:title" content="Browsers and devices">
<meta property="og:description" content="Learn about the browsers and devices, from modern to old, that are supported by Bootstrap, including known quirks and bugs for each.">
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
            </a></li><li class="active bd-sidenav-active">
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
<li class="toc-entry toc-h2"><a href="#supported-browsers">Supported browsers</a>
<ul>
<li class="toc-entry toc-h3"><a href="#mobile-devices">Mobile devices</a></li>
<li class="toc-entry toc-h3"><a href="#desktop-browsers">Desktop browsers</a></li>
</ul>
</li>
<li class="toc-entry toc-h2"><a href="#internet-explorer">Internet Explorer</a></li>
<li class="toc-entry toc-h2"><a href="#modals-and-dropdowns-on-mobile">Modals and dropdowns on mobile</a>
<ul>
<li class="toc-entry toc-h3"><a href="#overflow-and-scrolling">Overflow and scrolling</a></li>
<li class="toc-entry toc-h3"><a href="#ios-text-fields-and-scrolling">iOS text fields and scrolling</a></li>
<li class="toc-entry toc-h3"><a href="#navbar-dropdowns">Navbar Dropdowns</a></li>
</ul>
</li>
<li class="toc-entry toc-h2"><a href="#browser-zooming">Browser zooming</a></li>
<li class="toc-entry toc-h2"><a href="#sticky-hoverfocus-on-ios">Sticky :hover/:focus on iOS</a></li>
<li class="toc-entry toc-h2"><a href="#printing">Printing</a></li>
<li class="toc-entry toc-h2"><a href="#android-stock-browser">Android stock browser</a>
<ul>
<li class="toc-entry toc-h4"><a href="#select-menu">Select menu</a></li>
</ul>
</li>
<li class="toc-entry toc-h2"><a href="#validators">Validators</a></li>
</ul>
          </div>
        

        <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
          <h1 class="bd-title" id="content">Browsers and devices</h1>
          <p class="bd-lead">Learn about the browsers and devices, from modern to old, that are supported by Bootstrap, including known quirks and bugs for each.</p>
          <h2 id="supported-browsers">Supported browsers</h2>

<p>Bootstrap supports the <strong>latest, stable releases</strong> of all major browsers and platforms. On Windows, <strong>we support Internet Explorer 10-11 / Microsoft Edge</strong>.</p>

<p>Alternative browsers which use the latest version of WebKit, Blink, or Gecko, whether directly or via the platform’s web view API, are not explicitly supported. However, Bootstrap should (in most cases) display and function correctly in these browsers as well. More specific support information is provided below.</p>

<h3 id="mobile-devices">Mobile devices</h3>

<p>Generally speaking, Bootstrap supports the latest versions of each major platform’s default browsers. Note that proxy browsers (such as Opera Mini, Opera Mobile’s Turbo mode, UC Browser Mini, Amazon Silk) are not supported.</p>

<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <td></td>
      <th>Chrome</th>
      <th>Firefox</th>
      <th>Safari</th>
      <th>Android Browser &amp; WebView</th>
      <th>Microsoft Edge</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Android</th>
      <td class="text-success">Supported</td>
      <td class="text-success">Supported</td>
      <td class="text-muted">N/A</td>
      <td class="text-success">Android v5.0+ supported</td>
      <td class="text-success">Supported</td>
    </tr>
    <tr>
      <th scope="row">iOS</th>
      <td class="text-success">Supported</td>
      <td class="text-success">Supported</td>
      <td class="text-success">Supported</td>
      <td class="text-muted">N/A</td>
      <td class="text-success">Supported</td>
    </tr>
    <tr>
      <th scope="row">Windows 10 Mobile</th>
      <td class="text-muted">N/A</td>
      <td class="text-muted">N/A</td>
      <td class="text-muted">N/A</td>
      <td class="text-muted">N/A</td>
      <td class="text-success">Supported</td>
    </tr>
  </tbody>
</table>

<h3 id="desktop-browsers">Desktop browsers</h3>

<p>Similarly, the latest versions of most desktop browsers are supported.</p>

<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <td></td>
      <th>Chrome</th>
      <th>Firefox</th>
      <th>Internet Explorer</th>
      <th>Microsoft Edge</th>
      <th>Opera</th>
      <th>Safari</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Mac</th>
      <td class="text-success">Supported</td>
      <td class="text-success">Supported</td>
      <td class="text-muted">N/A</td>
      <td class="text-muted">N/A</td>
      <td class="text-success">Supported</td>
      <td class="text-success">Supported</td>
    </tr>
    <tr>
      <th scope="row">Windows</th>
      <td class="text-success">Supported</td>
      <td class="text-success">Supported</td>
      <td class="text-success">Supported, IE10+</td>
      <td class="text-success">Supported</td>
      <td class="text-success">Supported</td>
      <td class="text-danger">Not supported</td>
    </tr>
  </tbody>
</table>

<p>For Firefox, in addition to the latest normal stable release, we also support the latest <a href="https://www.mozilla.org/en-US/firefox/organizations/faq/">Extended Support Release (ESR)</a> version of Firefox.</p>

<p>Unofficially, Bootstrap should look and behave well enough in Chromium and Chrome for Linux, Firefox for Linux, and Internet Explorer 9, though they are not officially supported.</p>

<p>For a list of some of the browser bugs that Bootstrap has to grapple with, see our <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/browser-bugs/">Wall of browser bugs</a>.</p>

<h2 id="internet-explorer">Internet Explorer</h2>

<p>Internet Explorer 10+ is supported; IE9 and down is not. Please be aware that some CSS3 properties and HTML5 elements are not fully supported in IE10, or require prefixed properties for full functionality. Visit <a href="https://caniuse.com/">Can I use…</a> for details on browser support of CSS3 and HTML5 features.</p>

<p><strong>If you require IE8-9 support, use Bootstrap 3.</strong> It’s the most stable version of our code and is still supported by our team for critical bugfixes and documentation changes. However, no new features will be added to it.</p>

<h2 id="modals-and-dropdowns-on-mobile">Modals and dropdowns on mobile</h2>

<h3 id="overflow-and-scrolling">Overflow and scrolling</h3>

<p>Support for <code class="highlighter-rouge">overflow: hidden;</code> on the <code class="highlighter-rouge">&lt;body&gt;</code> element is quite limited in iOS and Android. To that end, when you scroll past the top or bottom of a modal in either of those devices’ browsers, the <code class="highlighter-rouge">&lt;body&gt;</code> content will begin to scroll. See <a href="https://bugs.chromium.org/p/chromium/issues/detail?id=175502">Chrome bug #175502</a> (fixed in Chrome v40) and <a href="https://bugs.webkit.org/show_bug.cgi?id=153852">WebKit bug #153852</a>.</p>

<h3 id="ios-text-fields-and-scrolling">iOS text fields and scrolling</h3>

<p>As of iOS 9.2, while a modal is open, if the initial touch of a scroll gesture is within the boundary of a textual <code class="highlighter-rouge">&lt;input&gt;</code> or a <code class="highlighter-rouge">&lt;textarea&gt;</code>, the <code class="highlighter-rouge">&lt;body&gt;</code> content underneath the modal will be scrolled instead of the modal itself. See <a href="https://bugs.webkit.org/show_bug.cgi?id=153856">WebKit bug #153856</a>.</p>

<h3 id="navbar-dropdowns">Navbar Dropdowns</h3>

<p>The <code class="highlighter-rouge">.dropdown-backdrop</code> element isn’t used on iOS in the nav because of the complexity of z-indexing. Thus, to close dropdowns in navbars, you must directly click the dropdown element (or <a href="https://developer.mozilla.org/en-US/docs/Web/Events/click#Safari_Mobile">any other element which will fire a click event in iOS</a>).</p>

<h2 id="browser-zooming">Browser zooming</h2>

<p>Page zooming inevitably presents rendering artifacts in some components, both in Bootstrap and the rest of the web. Depending on the issue, we may be able to fix it (search first and then open an issue if need be). However, we tend to ignore these as they often have no direct solution other than hacky workarounds.</p>

<h2 id="sticky-hoverfocus-on-ios">Sticky <code class="highlighter-rouge">:hover</code>/<code class="highlighter-rouge">:focus</code> on iOS</h2>

<p>While <code class="highlighter-rouge">:hover</code> isn’t possible on most touch devices, iOS emulates this behavior, resulting in “sticky” hover styles that persist after tapping one element. These hover styles are only removed when users tap another element. This behavior is considered largely undesirable and appears to not be an issue on Android or Windows devices.</p>

<p>Throughout our v4 alpha and beta releases, we included incomplete and commented out code for opting into a media query shim that would disable hover styles in touch device browsers that emulate hovering. This work was never fully completed or enabled, but to avoid complete breakage, we’ve opted to deprecate <a href="https://github.com/twbs/mq4-hover-shim">this shim</a> and keep the mixins as shortcuts for the pseudo-classes.</p>

<h2 id="printing">Printing</h2>

<p>Even in some modern browsers, printing can be quirky.</p>

<p>As of Safari v8.0, use of the fixed-width <code class="highlighter-rouge">.container</code> class can cause Safari to use an unusually small font size when printing. See <a href="https://github.com/twbs/bootstrap/issues/14868">issue #14868</a> and <a href="https://bugs.webkit.org/show_bug.cgi?id=138192">WebKit bug #138192</a> for more details. One potential workaround is the following CSS:</p>

<figure class="highlight"><pre><code class="language-css" data-lang="css"><span class="k">@media</span> <span class="n">print</span> <span class="p">{</span>
  <span class="nc">.container</span> <span class="p">{</span>
    <span class="nl">width</span><span class="p">:</span> <span class="nb">auto</span><span class="p">;</span>
  <span class="p">}</span>
<span class="p">}</span></code></pre></figure>

<h2 id="android-stock-browser">Android stock browser</h2>

<p>Out of the box, Android 4.1 (and even some newer releases apparently) ship with the Browser app as the default web browser of choice (as opposed to Chrome). Unfortunately, the Browser app has lots of bugs and inconsistencies with CSS in general.</p>

<h4 id="select-menu">Select menu</h4>

<p>On <code class="highlighter-rouge">&lt;select&gt;</code> elements, the Android stock browser will not display the side controls if there is a <code class="highlighter-rouge">border-radius</code> and/or <code class="highlighter-rouge">border</code> applied. (See <a href="https://stackoverflow.com/questions/14744437/html-select-box-not-showing-drop-down-arrow-on-android-version-4-0-when-set-with">this StackOverflow question</a> for details.) Use the snippet of code below to remove the offending CSS and render the <code class="highlighter-rouge">&lt;select&gt;</code> as an unstyled element on the Android stock browser. The user agent sniffing avoids interference with Chrome, Safari, and Mozilla browsers.</p>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;script&gt;</span>
<span class="nx">$</span><span class="p">(</span><span class="kd">function</span> <span class="p">()</span> <span class="p">{</span>
  <span class="kd">var</span> <span class="nx">nua</span> <span class="o">=</span> <span class="nb">navigator</span><span class="p">.</span><span class="nx">userAgent</span>
  <span class="kd">var</span> <span class="nx">isAndroid</span> <span class="o">=</span> <span class="p">(</span><span class="nx">nua</span><span class="p">.</span><span class="nx">indexOf</span><span class="p">(</span><span class="s1">'Mozilla/5.0'</span><span class="p">)</span> <span class="o">&gt;</span> <span class="o">-</span><span class="mi">1</span> <span class="o">&amp;&amp;</span> <span class="nx">nua</span><span class="p">.</span><span class="nx">indexOf</span><span class="p">(</span><span class="s1">'Android '</span><span class="p">)</span> <span class="o">&gt;</span> <span class="o">-</span><span class="mi">1</span> <span class="o">&amp;&amp;</span> <span class="nx">nua</span><span class="p">.</span><span class="nx">indexOf</span><span class="p">(</span><span class="s1">'AppleWebKit'</span><span class="p">)</span> <span class="o">&gt;</span> <span class="o">-</span><span class="mi">1</span> <span class="o">&amp;&amp;</span> <span class="nx">nua</span><span class="p">.</span><span class="nx">indexOf</span><span class="p">(</span><span class="s1">'Chrome'</span><span class="p">)</span> <span class="o">===</span> <span class="o">-</span><span class="mi">1</span><span class="p">)</span>
  <span class="k">if</span> <span class="p">(</span><span class="nx">isAndroid</span><span class="p">)</span> <span class="p">{</span>
    <span class="nx">$</span><span class="p">(</span><span class="s1">'select.form-control'</span><span class="p">).</span><span class="nx">removeClass</span><span class="p">(</span><span class="s1">'form-control'</span><span class="p">).</span><span class="nx">css</span><span class="p">(</span><span class="s1">'width'</span><span class="p">,</span> <span class="s1">'100%'</span><span class="p">)</span>
  <span class="p">}</span>
<span class="p">})</span>
<span class="nt">&lt;/script&gt;</span></code></pre></figure>

<p>Want to see an example? <a href="http://jsbin.com/OyaqoDO/2">Check out this JS Bin demo.</a></p>

<h2 id="validators">Validators</h2>

<p>In order to provide the best possible experience to old and buggy browsers, Bootstrap uses <a href="http://browserhacks.com/">CSS browser hacks</a> in several places to target special CSS to certain browser versions in order to work around bugs in the browsers themselves. These hacks understandably cause CSS validators to complain that they are invalid. In a couple places, we also use bleeding-edge CSS features that aren’t yet fully standardized, but these are used purely for progressive enhancement.</p>

<p>These validation warnings don’t matter in practice since the non-hacky portion of our CSS does fully validate and the hacky portions don’t interfere with the proper functioning of the non-hacky portion, hence why we deliberately ignore these particular warnings.</p>

<p>Our HTML docs likewise have some trivial and inconsequential HTML validation warnings due to our inclusion of a workaround for <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=654072">a certain Firefox bug</a>.</p>

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

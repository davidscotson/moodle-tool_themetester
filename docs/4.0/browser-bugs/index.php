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

<title>Wall of browser bugs · Bootstrap</title>

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
<meta name="twitter:title" content="Wall of browser bugs">
<meta name="twitter:description" content="The most popular HTML, CSS, and JS library in the world.">
<meta name="twitter:image" content="/assets/brand/bootstrap-social-logo.png">

<!-- Facebook -->
<meta property="og:url" content="/docs/4.0/browser-bugs/">
<meta property="og:title" content="Wall of browser bugs">
<meta property="og:description" content="The most popular HTML, CSS, and JS library in the world.">
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

        

        <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
          <h1 class="bd-title" id="content">Wall of browser bugs</h1>
          <p class="bd-lead"></p>
          <p>Bootstrap currently works around several outstanding browser bugs in major browsers to deliver the best cross-browser experience possible. Some bugs, like those listed below, cannot be solved by us.</p>

<p>We publicly list browser bugs that are impacting us here, in the hopes of expediting the process of fixing them. For information on Bootstrap’s browser compatibility, <a href="/admin/tool/themetester/docs/4.0/getting-started/browsers-devices/#supported-browsers">see our browser compatibility docs</a>.</p>

<p>See also:</p>

<ul>
  <li><a href="https://code.google.com/p/chromium/issues/detail?id=536263">Chromium issue 536263: [meta] Issues affecting Bootstrap</a></li>
  <li><a href="https://bugzilla.mozilla.org/show_bug.cgi?id=1230801">Mozilla bug 1230801: Fix the issues that affect Bootstrap</a></li>
  <li><a href="https://bugs.webkit.org/show_bug.cgi?id=159753">WebKit bug 159753: [meta] Issues affecting Bootstrap</a></li>
  <li><a href="https://docs.google.com/document/d/1LPaPA30bLUB_publLIMF0RlhdnPx_ePXm7oW02iiT6o">jQuery’s browser bug workarounds</a></li>
</ul>

<table class="bd-browser-bugs table table-bordered table-hover">
  <thead>
    <tr>
      <th>Browser(s)</th>
      <th>Summary of bug</th>
      <th>Upstream bug(s)</th>
      <th>Bootstrap issue(s)</th>
    </tr>
  </thead>
  <tbody>
    
    <tr>
      <td>Edge
</td>
      <td><p>Visual artifacts in scrollable modal dialogs</p>
</td>
      <td><a href="https://developer.microsoft.com/en-us/microsoft-edge/platform/issues/9011176">Edge issue #9011176</a>
</td>
      <td><a href="https://github.com/twbs/bootstrap/issues/20755">#20755</a>
</td>
    </tr>
    
    <tr>
      <td>Edge
</td>
      <td><p>Native browser tooltip for <code class="highlighter-rouge">title</code> shows on first keyboard focus (in addition to custom tooltip component)</p>
</td>
      <td><a href="https://developer.microsoft.com/en-us/microsoft-edge/platform/issues/6793560">Edge issue #6793560</a>
</td>
      <td><a href="https://github.com/twbs/bootstrap/issues/18692">#18692</a>
</td>
    </tr>
    
    <tr>
      <td>Edge
</td>
      <td><p>Hovered element still remains in <code class="highlighter-rouge">:hover</code> state after scrolling away.</p>
</td>
      <td><a href="https://developer.microsoft.com/en-us/microsoft-edge/platform/issues/5381673">Edge issue #5381673</a>
</td>
      <td><a href="https://github.com/twbs/bootstrap/issues/14211">#14211</a>
</td>
    </tr>
    
    <tr>
      <td>Edge
</td>
      <td><p>CSS <code class="highlighter-rouge">border-radius</code> sometimes causes lines of bleed-through of the <code class="highlighter-rouge">background-color</code> of the parent element.</p>
</td>
      <td><a href="https://developer.microsoft.com/en-us/microsoft-edge/platform/issues/3342037">Edge issue #3342037</a>
</td>
      <td><a href="https://github.com/twbs/bootstrap/issues/16671">#16671</a>
</td>
    </tr>
    
    <tr>
      <td>Edge
</td>
      <td><p><code class="highlighter-rouge">background</code> of <code class="highlighter-rouge">&lt;tr&gt;</code> is only applied to first child cell instead of all cells in the row</p>
</td>
      <td><a href="https://developer.microsoft.com/en-us/microsoft-edge/platform/issues/5865620">Edge issue #5865620</a>
</td>
      <td><a href="https://github.com/twbs/bootstrap/issues/18504">#18504</a>
</td>
    </tr>
    
    <tr>
      <td>Edge
</td>
      <td><p><code class="highlighter-rouge">@-ms-viewport{width: device-width;}</code> has side-effect of making scrollbars auto-hide</p>
</td>
      <td><a href="https://developer.microsoft.com/en-us/microsoft-edge/platform/issues/7165383">Edge issue #7165383</a>
</td>
      <td><a href="https://github.com/twbs/bootstrap/issues/18543">#18543</a>
</td>
    </tr>
    
    <tr>
      <td>Edge
</td>
      <td><p>Background color from lower layer bleeds through transparent border in some cases</p>
</td>
      <td><a href="https://developer.microsoft.com/en-us/microsoft-edge/platform/issues/6274505">Edge issue #6274505</a>
</td>
      <td><a href="https://github.com/twbs/bootstrap/issues/18228">#18228</a>
</td>
    </tr>
    
    <tr>
      <td>Edge
</td>
      <td><p>Hovering over descendant SVG element fires <code class="highlighter-rouge">mouseleave</code> event at ancestor</p>
</td>
      <td><a href="https://developer.microsoft.com/en-us/microsoft-edge/platform/issues/7787318">Edge issue #7787318</a>
</td>
      <td><a href="https://github.com/twbs/bootstrap/issues/19670">#19670</a>
</td>
    </tr>
    
    <tr>
      <td>Edge
</td>
      <td><p>Active <code class="highlighter-rouge">position: fixed;</code> <code class="highlighter-rouge">&lt;button&gt;</code> flickers when scrolling</p>
</td>
      <td><a href="https://developer.microsoft.com/en-us/microsoft-edge/platform/issues/8770398">Edge issue #8770398</a>
</td>
      <td><a href="https://github.com/twbs/bootstrap/issues/20507">#20507</a>
</td>
    </tr>
    
    <tr>
      <td>Firefox
</td>
      <td><p><code class="highlighter-rouge">.table-bordered</code> with an empty <code class="highlighter-rouge">&lt;tbody&gt;</code> is missing borders.</p>
</td>
      <td><a href="https://bugzilla.mozilla.org/show_bug.cgi?id=1023761">Mozilla bug #1023761</a>
</td>
      <td><a href="https://github.com/twbs/bootstrap/issues/13453">#13453</a>
</td>
    </tr>
    
    <tr>
      <td>Firefox
</td>
      <td><p>If the disabled state of a form control is changed via JavaScript, the normal state doesn’t return after refreshing the page.</p>
</td>
      <td><a href="https://bugzilla.mozilla.org/show_bug.cgi?id=654072">Mozilla bug #654072</a>
</td>
      <td><a href="https://github.com/twbs/bootstrap/issues/793">#793</a>
</td>
    </tr>
    
    <tr>
      <td>Firefox
</td>
      <td><p><code class="highlighter-rouge">focus</code> events should not be fired at the <code class="highlighter-rouge">document</code> object</p>
</td>
      <td><a href="https://bugzilla.mozilla.org/show_bug.cgi?id=1228802">Mozilla bug #1228802</a>
</td>
      <td><a href="https://github.com/twbs/bootstrap/issues/18365">#18365</a>
</td>
    </tr>
    
    <tr>
      <td>Firefox
</td>
      <td><p>Wide floated table doesn’t wrap onto new line</p>
</td>
      <td><a href="https://bugzilla.mozilla.org/show_bug.cgi?id=1277782">Mozilla bug #1277782</a>
</td>
      <td><a href="https://github.com/twbs/bootstrap/issues/19839">#19839</a>
</td>
    </tr>
    
    <tr>
      <td>Firefox
</td>
      <td><p>Mouse sometimes not within element for purposes of <code class="highlighter-rouge">mouseenter</code>/<code class="highlighter-rouge">mouseleave</code> when it’s within SVG elements</p>
</td>
      <td><a href="https://bugzilla.mozilla.org/show_bug.cgi?id=577785">Mozilla bug #577785</a>
</td>
      <td><a href="https://github.com/twbs/bootstrap/issues/19670">#19670</a>
</td>
    </tr>
    
    <tr>
      <td>Firefox
</td>
      <td><p>Layout with floated columns breaks when printing</p>
</td>
      <td><a href="https://bugzilla.mozilla.org/show_bug.cgi?id=1315994">Mozilla bug #1315994</a>
</td>
      <td><a href="https://github.com/twbs/bootstrap/issues/21092">#21092</a>
</td>
    </tr>
    
    <tr>
      <td>Firefox (Windows)
</td>
      <td><p>Right border of <code class="highlighter-rouge">&lt;select&gt;</code> menu is sometimes missing when screen is set to uncommon resolution</p>
</td>
      <td><a href="https://bugzilla.mozilla.org/show_bug.cgi?id=545685">Mozilla bug #545685</a>
</td>
      <td><a href="https://github.com/twbs/bootstrap/issues/15990">#15990</a>
</td>
    </tr>
    
    <tr>
      <td>Firefox (OS X &amp; Linux)
</td>
      <td><p>Badge widget causes bottom border of Tabs widget to unexpectedly not overlap</p>
</td>
      <td><a href="https://bugzilla.mozilla.org/show_bug.cgi?id=1259972">Mozilla bug #1259972</a>
</td>
      <td><a href="https://github.com/twbs/bootstrap/issues/19626">#19626</a>
</td>
    </tr>
    
    <tr>
      <td>Chrome (Android)
</td>
      <td><p>Tapping on an <code class="highlighter-rouge">&lt;input&gt;</code> in a scrollable overlay doesn’t scroll the <code class="highlighter-rouge">&lt;input&gt;</code> into view</p>
</td>
      <td><a href="https://bugs.chromium.org/p/chromium/issues/detail?id=595210">Chromium issue #595210</a>
</td>
      <td><a href="https://github.com/twbs/bootstrap/issues/17338">#17338</a>
</td>
    </tr>
    
    <tr>
      <td>Chrome (OS X)
</td>
      <td><p>Clicking above <code class="highlighter-rouge">&lt;input type="number"&gt;</code> increment button flashes the decrement button.</p>
</td>
      <td><a href="https://bugs.chromium.org/p/chromium/issues/detail?id=419108">Chromium issue #419108</a>
</td>
      <td>Offshoot of <a href="https://github.com/twbs/bootstrap/issues/8350">#8350</a> &amp; <a href="https://bugs.chromium.org/p/chromium/issues/detail?id=337668">Chromium issue #337668</a>
</td>
    </tr>
    
    <tr>
      <td>Chrome
</td>
      <td><p>CSS infinite linear animation with alpha transparency leaks memory.</p>
</td>
      <td><a href="https://bugs.chromium.org/p/chromium/issues/detail?id=429375">Chromium issue #429375</a>
</td>
      <td><a href="https://github.com/twbs/bootstrap/issues/14409">#14409</a>
</td>
    </tr>
    
    <tr>
      <td>Chrome
</td>
      <td><p><code class="highlighter-rouge">table-cell</code> borders not overlapping despite <code class="highlighter-rouge">margin-right: -1px</code></p>
</td>
      <td><a href="https://bugs.chromium.org/p/chromium/issues/detail?id=749848">Chromium issue #749848</a>
</td>
      <td><a href="https://github.com/twbs/bootstrap/issues/17438">#17438</a>, <a href="https://github.com/twbs/bootstrap/issues/14237">#14237</a>
</td>
    </tr>
    
    <tr>
      <td>Chrome
</td>
      <td><p>Clicking scrollbar in <code class="highlighter-rouge">&lt;select multiple&gt;</code> with overflowed options will select nearby <code class="highlighter-rouge">&lt;option&gt;</code></p>
</td>
      <td><a href="https://bugs.chromium.org/p/chromium/issues/detail?id=597642">Chromium issue #597642</a>
</td>
      <td><a href="https://github.com/twbs/bootstrap/issues/19810">#19810</a>
</td>
    </tr>
    
    <tr>
      <td>Chrome
</td>
      <td><p>Don’t make <code class="highlighter-rouge">:hover</code> sticky on touch-friendly webpages</p>
</td>
      <td><a href="https://bugs.chromium.org/p/chromium/issues/detail?id=370155">Chromium issue #370155</a>
</td>
      <td><a href="https://github.com/twbs/bootstrap/issues/12832">#12832</a>
</td>
    </tr>
    
    <tr>
      <td>Chrome
</td>
      <td><p><code class="highlighter-rouge">position: absolute</code> element that’s wider than its column is incorrectly clipped to column boundary</p>
</td>
      <td><a href="https://bugs.chromium.org/p/chromium/issues/detail?id=269061">Chromium issue #269061</a>
</td>
      <td><a href="https://github.com/twbs/bootstrap/issues/20161">#20161</a>
</td>
    </tr>
    
    <tr>
      <td>Chrome (Windows &amp; Linux)
</td>
      <td><p>Animation glitch when returning to inactive tab after animations occurred while tab was hidden.</p>
</td>
      <td><a href="https://bugs.chromium.org/p/chromium/issues/detail?id=449180">Chromium issue #449180</a>
</td>
      <td><a href="https://github.com/twbs/bootstrap/issues/15298">#15298</a>
</td>
    </tr>
    
    <tr>
      <td>Chrome
</td>
      <td><p>Significant performance hit for dynamic SVGs with text depending on the number of fonts in <code class="highlighter-rouge">font-family</code>.</p>
</td>
      <td><a href="https://bugs.chromium.org/p/chromium/issues/detail?id=781344">Chromium issue #781344</a>
</td>
      <td><a href="https://github.com/twbs/bootstrap/issues/24673">#24673</a>
</td>
    </tr>
    
    <tr>
      <td>Safari
</td>
      <td><p><code class="highlighter-rouge">rem</code> units in media queries should be calculated using <code class="highlighter-rouge">font-size: initial</code>, not the root element’s <code class="highlighter-rouge">font-size</code></p>
</td>
      <td><a href="https://bugs.webkit.org/show_bug.cgi?id=156684">WebKit bug #156684</a>
</td>
      <td><a href="https://github.com/twbs/bootstrap/issues/17403">#17403</a>
</td>
    </tr>
    
    <tr>
      <td>Safari
</td>
      <td><p>Link to container with id and tabindex results in container being ignored by VoiceOver (affects skip links)</p>
</td>
      <td><a href="https://bugs.webkit.org/show_bug.cgi?id=163658">WebKit bug #163658</a>
</td>
      <td><a href="https://github.com/twbs/bootstrap/issues/20732">#20732</a>
</td>
    </tr>
    
    <tr>
      <td>Safari
</td>
      <td><p>CSS <code class="highlighter-rouge">min-width</code> and <code class="highlighter-rouge">max-width</code> media features should not round fractional pixel</p>
</td>
      <td><a href="https://bugs.webkit.org/show_bug.cgi?id=178261">WebKit bug #178261</a>
</td>
      <td><a href="https://github.com/twbs/bootstrap/issues/25166">#25166</a>
</td>
    </tr>
    
    <tr>
      <td>Safari (OS X)
</td>
      <td><p><code class="highlighter-rouge">px</code>, <code class="highlighter-rouge">em</code>, and <code class="highlighter-rouge">rem</code> should all behave the same in media queries when page zoom is applied</p>
</td>
      <td><a href="https://bugs.webkit.org/show_bug.cgi?id=156687">WebKit bug #156687</a>
</td>
      <td><a href="https://github.com/twbs/bootstrap/issues/17403">#17403</a>
</td>
    </tr>
    
    <tr>
      <td>Safari (OS X)
</td>
      <td><p>Weird button behavior with some <code class="highlighter-rouge">&lt;input type="number"&gt;</code> elements.</p>
</td>
      <td><a href="https://bugs.webkit.org/show_bug.cgi?id=137269">WebKit bug #137269</a>, <a href="https://openradar.appspot.com/18834768">Apple Safari Radar #18834768</a>
</td>
      <td><a href="https://github.com/twbs/bootstrap/issues/8350">#8350</a>, <a href="https://github.com/necolas/normalize.css/issues/283">Normalize #283</a>, <a href="https://bugs.chromium.org/p/chromium/issues/detail?id=337668">Chromium issue #337668</a>
</td>
    </tr>
    
    <tr>
      <td>Safari (OS X)
</td>
      <td><p>Small font size when printing webpage with fixed-width <code class="highlighter-rouge">.container</code>.</p>
</td>
      <td><a href="https://bugs.webkit.org/show_bug.cgi?id=138192">WebKit bug #138192</a>, <a href="https://openradar.appspot.com/19435018">Apple Safari Radar #19435018</a>
</td>
      <td><a href="https://github.com/twbs/bootstrap/issues/14868">#14868</a>
</td>
    </tr>
    
    <tr>
      <td>Safari (iOS)
</td>
      <td><p><code class="highlighter-rouge">transform: translate3d(0,0,0);</code> rendering bug.</p>
</td>
      <td><a href="https://bugs.webkit.org/show_bug.cgi?id=138162">WebKit bug #138162</a>, <a href="https://openradar.appspot.com/18804973">Apple Safari Radar #18804973</a>
</td>
      <td><a href="https://github.com/twbs/bootstrap/issues/14603">#14603</a>
</td>
    </tr>
    
    <tr>
      <td>Safari (iOS)
</td>
      <td><p>Text input’s cursor doesn’t move while scrolling the page.</p>
</td>
      <td><a href="https://bugs.webkit.org/show_bug.cgi?id=138201">WebKit bug #138201</a>, <a href="https://openradar.appspot.com/18819624">Apple Safari Radar #18819624</a>
</td>
      <td><a href="https://github.com/twbs/bootstrap/issues/14708">#14708</a>
</td>
    </tr>
    
    <tr>
      <td>Safari (iOS)
</td>
      <td><p>Can’t move cursor to start of text after entering long string of text into <code class="highlighter-rouge">&lt;input type="text"&gt;</code></p>
</td>
      <td><a href="https://bugs.webkit.org/show_bug.cgi?id=148061">WebKit bug #148061</a>, <a href="https://openradar.appspot.com/22299624">Apple Safari Radar #22299624</a>
</td>
      <td><a href="https://github.com/twbs/bootstrap/issues/16988">#16988</a>
</td>
    </tr>
    
    <tr>
      <td>Safari (iOS)
</td>
      <td><p><code class="highlighter-rouge">display: block</code> causes text of temporal <code class="highlighter-rouge">&lt;input&gt;</code>s to become vertically misaligned</p>
</td>
      <td><a href="https://bugs.webkit.org/show_bug.cgi?id=139848">WebKit bug #139848</a>, <a href="https://openradar.appspot.com/19434878">Apple Safari Radar #19434878</a>
</td>
      <td><a href="https://github.com/twbs/bootstrap/issues/11266">#11266</a>, <a href="https://github.com/twbs/bootstrap/issues/13098">#13098</a>
</td>
    </tr>
    
    <tr>
      <td>Safari (iOS)
</td>
      <td><p>Tapping on <code class="highlighter-rouge">&lt;body&gt;</code> doesn’t fire <code class="highlighter-rouge">click</code> events</p>
</td>
      <td><a href="https://bugs.webkit.org/show_bug.cgi?id=151933">WebKit bug #151933</a>
</td>
      <td><a href="https://github.com/twbs/bootstrap/issues/16028">#16028</a>
</td>
    </tr>
    
    <tr>
      <td>Safari (iOS)
</td>
      <td><p><code class="highlighter-rouge">position:fixed</code> is incorrectly positioned when tab bar is visible on iPhone 6S+ Safari</p>
</td>
      <td><a href="https://bugs.webkit.org/show_bug.cgi?id=153056">WebKit bug #153056</a>
</td>
      <td><a href="https://github.com/twbs/bootstrap/issues/18859">#18859</a>
</td>
    </tr>
    
    <tr>
      <td>Safari (iOS)
</td>
      <td><p>Tapping into an <code class="highlighter-rouge">&lt;input&gt;</code> within a <code class="highlighter-rouge">position:fixed</code> element scrolls to the top of the page</p>
</td>
      <td><a href="https://bugs.webkit.org/show_bug.cgi?id=153224">WebKit bug #153224</a>, <a href="https://openradar.appspot.com/24235301">Apple Safari Radar #24235301</a>
</td>
      <td><a href="https://github.com/twbs/bootstrap/issues/17497">#17497</a>
</td>
    </tr>
    
    <tr>
      <td>Safari (iOS)
</td>
      <td><p><code class="highlighter-rouge">&lt;body&gt;</code> with <code class="highlighter-rouge">overflow:hidden</code> CSS is scrollable on iOS</p>
</td>
      <td><a href="https://bugs.webkit.org/show_bug.cgi?id=153852">WebKit bug #153852</a>
</td>
      <td><a href="https://github.com/twbs/bootstrap/issues/14839">#14839</a>
</td>
    </tr>
    
    <tr>
      <td>Safari (iOS)
</td>
      <td><p>Scroll gesture in text field in <code class="highlighter-rouge">position:fixed</code> element sometimes scrolls <code class="highlighter-rouge">&lt;body&gt;</code> instead of scrollable ancestor</p>
</td>
      <td><a href="https://bugs.webkit.org/show_bug.cgi?id=153856">WebKit bug #153856</a>
</td>
      <td><a href="https://github.com/twbs/bootstrap/issues/14839">#14839</a>
</td>
    </tr>
    
    <tr>
      <td>Safari (iOS)
</td>
      <td><p>Modal with <code class="highlighter-rouge">-webkit-overflow-scrolling: touch</code> doesn’t become scrollable after added text makes it taller</p>
</td>
      <td><a href="https://bugs.webkit.org/show_bug.cgi?id=158342">WebKit bug #158342</a>
</td>
      <td><a href="https://github.com/twbs/bootstrap/issues/17695">#17695</a>
</td>
    </tr>
    
    <tr>
      <td>Safari (iOS)
</td>
      <td><p>Don’t make <code class="highlighter-rouge">:hover</code> sticky on touch-friendly webpages</p>
</td>
      <td><a href="https://bugs.webkit.org/show_bug.cgi?id=158517">WebKit bug #158517</a>
</td>
      <td><a href="https://github.com/twbs/bootstrap/issues/12832">#12832</a>
</td>
    </tr>
    
    <tr>
      <td>Safari (iOS)
</td>
      <td><p>Element which is <code class="highlighter-rouge">position:fixed</code> disappears after opening a <code class="highlighter-rouge">&lt;select&gt;</code> menu</p>
</td>
      <td><a href="https://bugs.webkit.org/show_bug.cgi?id=162362">WebKit bug #162362</a>
</td>
      <td><a href="https://github.com/twbs/bootstrap/issues/20759">#20759</a>
</td>
    </tr>
    
    <tr>
      <td>Safari (iPad Pro)
</td>
      <td><p>Rendering of descendants of <code class="highlighter-rouge">position: fixed</code> element gets clipped on iPad Pro in Landscape orientation</p>
</td>
      <td><a href="https://bugs.webkit.org/show_bug.cgi?id=152637">WebKit bug #152637</a>, <a href="https://openradar.appspot.com/24030853">Apple Safari Radar #24030853</a>
</td>
      <td><a href="https://github.com/twbs/bootstrap/issues/18738">#18738</a>
</td>
    </tr>
    
  </tbody>
</table>

<h1 id="most-wanted-features">Most wanted features</h1>

<p>There are several features specified in Web standards which would allow us to make Bootstrap more robust, elegant, or performant, but aren’t yet implemented in certain browsers, thus preventing us from taking advantage of them.</p>

<p>We publicly list these “most wanted” feature requests here, in the hopes of expediting the process of getting them implemented.</p>

<table class="bd-browser-bugs table table-bordered table-hover">
  <thead>
    <tr>
      <th>Browser(s)</th>
      <th>Summary of feature</th>
      <th>Upstream issue(s)</th>
      <th>Bootstrap issue(s)</th>
    </tr>
  </thead>
  <tbody>
    
    <tr>
      <td>Edge
</td>
      <td><p>Focusable elements should fire focus event / receive :focus styling when they receive Narrator/accessibility focus</p>
</td>
      <td><a href="https://microsoftaccessibility.uservoice.com/forums/307429-microsoft-accessibility-feedback/suggestions/16717318">Microsoft A11y UserVoice idea #16717318</a>
</td>
      <td><a href="https://github.com/twbs/bootstrap/issues/20732">#20732</a>
</td>
    </tr>
    
    <tr>
      <td>Edge
</td>
      <td><p>Implement the <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/:dir"><code class="highlighter-rouge">:dir()</code> pseudo-class</a> from Selectors Level 4</p>
</td>
      <td><a href="https://wpdev.uservoice.com/forums/257854-microsoft-edge-developer/suggestions/12299532">Edge UserVoice idea #12299532</a>
</td>
      <td><a href="https://github.com/twbs/bootstrap/issues/19984">#19984</a>
</td>
    </tr>
    
    <tr>
      <td>Edge
</td>
      <td><p>Implement the HTML5 <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/dialog"><code class="highlighter-rouge">&lt;dialog&gt;</code> element</a></p>
</td>
      <td><a href="https://wpdev.uservoice.com/forums/257854-microsoft-edge-developer/suggestions/6508895">Edge UserVoice idea #6508895</a>
</td>
      <td><a href="https://github.com/twbs/bootstrap/issues/20175">#20175</a>
</td>
    </tr>
    
    <tr>
      <td>Edge
</td>
      <td><p>Fire a <a href="https://developer.mozilla.org/en-US/docs/Web/Events/transitioncancel"><code class="highlighter-rouge">transitioncancel</code> event</a> when a CSS transition is canceled</p>
</td>
      <td><a href="https://wpdev.uservoice.com/forums/257854-microsoft-edge-developer/suggestions/15939898">Edge UserVoice idea #15939898</a>
</td>
      <td><a href="https://github.com/twbs/bootstrap/issues/20618">#20618</a>
</td>
    </tr>
    
    <tr>
      <td>Edge
</td>
      <td><p>Implement the <a href="https://caniuse.com/#feat=css-nth-child-of"><code class="highlighter-rouge">of &lt;selector-list&gt;</code> clause</a> of the <code class="highlighter-rouge">:nth-child()</code> pseudo-class</p>
</td>
      <td><a href="https://wpdev.uservoice.com/forums/257854-microsoft-edge-developer/suggestions/15944476">Edge UserVoice idea #15944476</a>
</td>
      <td><a href="https://github.com/twbs/bootstrap/issues/20143">#20143</a>
</td>
    </tr>
    
    <tr>
      <td>Firefox
</td>
      <td><p>Implement the <a href="https://caniuse.com/#feat=css-nth-child-of"><code class="highlighter-rouge">of &lt;selector-list&gt;</code> clause</a> of the <code class="highlighter-rouge">:nth-child()</code> pseudo-class</p>
</td>
      <td><a href="https://bugzilla.mozilla.org/show_bug.cgi?id=854148">Mozilla bug #854148</a>
</td>
      <td><a href="https://github.com/twbs/bootstrap/issues/20143">#20143</a>
</td>
    </tr>
    
    <tr>
      <td>Firefox
</td>
      <td><p>Implement the HTML5 <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/dialog"><code class="highlighter-rouge">&lt;dialog&gt;</code> element</a></p>
</td>
      <td><a href="https://bugzilla.mozilla.org/show_bug.cgi?id=840640">Mozilla bug #840640</a>
</td>
      <td><a href="https://github.com/twbs/bootstrap/issues/20175">#20175</a>
</td>
    </tr>
    
    <tr>
      <td>Firefox
</td>
      <td><p>When virtual focus is on a button or link, fire actual focus on the element, too</p>
</td>
      <td><a href="https://bugzilla.mozilla.org/show_bug.cgi?id=1000082">Mozilla bug #1000082</a>
</td>
      <td><a href="https://github.com/twbs/bootstrap/issues/20732">#20732</a>
</td>
    </tr>
    
    <tr>
      <td>Chrome
</td>
      <td><p>Fire a <a href="https://developer.mozilla.org/en-US/docs/Web/Events/transitioncancel"><code class="highlighter-rouge">transitioncancel</code> event</a> when a CSS transition is canceled</p>
</td>
      <td><a href="https://bugs.chromium.org/p/chromium/issues/detail?id=642487">Chromium issue #642487</a>
</td>
      <td><a href="https://bugs.chromium.org/p/chromium/issues/detail?id=437860">Chromium issue #437860</a>
</td>
    </tr>
    
    <tr>
      <td>Chrome
</td>
      <td><p>Implement the <a href="https://caniuse.com/#feat=css-nth-child-of"><code class="highlighter-rouge">of &lt;selector-list&gt;</code> clause</a> of the <code class="highlighter-rouge">:nth-child()</code> pseudo-class</p>
</td>
      <td><a href="https://bugs.chromium.org/p/chromium/issues/detail?id=304163">Chromium issue #304163</a>
</td>
      <td><a href="https://github.com/twbs/bootstrap/issues/20143">#20143</a>
</td>
    </tr>
    
    <tr>
      <td>Chrome
</td>
      <td><p>Implement the <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/:dir"><code class="highlighter-rouge">:dir()</code> pseudo-class</a> from Selectors Level 4</p>
</td>
      <td><a href="https://bugs.chromium.org/p/chromium/issues/detail?id=576815">Chromium issue #576815</a>
</td>
      <td><a href="https://github.com/twbs/bootstrap/issues/19984">#19984</a>
</td>
    </tr>
    
    <tr>
      <td>Safari
</td>
      <td><p>Fire a <a href="https://developer.mozilla.org/en-US/docs/Web/Events/transitioncancel"><code class="highlighter-rouge">transitioncancel</code> event</a> when a CSS transition is canceled</p>
</td>
      <td><a href="https://bugs.webkit.org/show_bug.cgi?id=161535">WebKit bug #161535</a>
</td>
      <td><a href="https://github.com/twbs/bootstrap/issues/20618">#20618</a>
</td>
    </tr>
    
    <tr>
      <td>Safari
</td>
      <td><p>Implement the <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/:dir"><code class="highlighter-rouge">:dir()</code> pseudo-class</a> from Selectors Level 4</p>
</td>
      <td><a href="https://bugs.webkit.org/show_bug.cgi?id=64861">WebKit bug #64861</a>
</td>
      <td><a href="https://github.com/twbs/bootstrap/issues/19984">#19984</a>
</td>
    </tr>
    
    <tr>
      <td>Safari
</td>
      <td><p>Implement the HTML5 <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/dialog"><code class="highlighter-rouge">&lt;dialog&gt;</code> element</a></p>
</td>
      <td><a href="https://bugs.webkit.org/show_bug.cgi?id=84635">WebKit bug #84635</a>
</td>
      <td><a href="https://github.com/twbs/bootstrap/issues/20175">#20175</a>
</td>
    </tr>
    
  </tbody>
</table>

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

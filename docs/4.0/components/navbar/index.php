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

$strheading = 'Theme Tester: Bootstrap 4 CSS : Navbar';
$url = new moodle_url('/admin/tool/themetester/bootswatch4.php');

// Start setting up the page.
$params = array();
$PAGE->set_context(context_system::instance());
$PAGE->set_url($url);
$PAGE->set_title($strheading);
$PAGE->set_heading("Navbar");
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
<meta name="twitter:title" content="Navbar">
<meta name="twitter:description" content="Documentation and examples for Bootstrap’s powerful, responsive navigation header, the navbar. Includes support for branding, navigation, and more, including support for our collapse plugin.">
<meta name="twitter:image" content="/assets/brand/bootstrap-social-logo.png">

<!-- Facebook -->
<meta property="og:url" content="/docs/4.0/components/navbar/">
<meta property="og:title" content="Navbar">
<meta property="og:description" content="Documentation and examples for Bootstrap’s powerful, responsive navigation header, the navbar. Includes support for branding, navigation, and more, including support for our collapse plugin.">
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
    </div><div class="bd-toc-item active">
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
            </a></li><li class="active bd-sidenav-active">
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
<li class="toc-entry toc-h2"><a href="#supported-content">Supported content</a>
<ul>
<li class="toc-entry toc-h3"><a href="#brand">Brand</a></li>
<li class="toc-entry toc-h3"><a href="#nav">Nav</a></li>
<li class="toc-entry toc-h3"><a href="#forms">Forms</a></li>
<li class="toc-entry toc-h3"><a href="#text">Text</a></li>
</ul>
</li>
<li class="toc-entry toc-h2"><a href="#color-schemes">Color schemes</a></li>
<li class="toc-entry toc-h2"><a href="#containers">Containers</a></li>
<li class="toc-entry toc-h2"><a href="#placement">Placement</a></li>
<li class="toc-entry toc-h2"><a href="#responsive-behaviors">Responsive behaviors</a>
<ul>
<li class="toc-entry toc-h3"><a href="#toggler">Toggler</a></li>
<li class="toc-entry toc-h3"><a href="#external-content">External content</a>
<ul>
<li class="toc-entry toc-h4"><a href="#collapsed-content">Collapsed content</a></li>
</ul>
</li>
</ul>
</li>
</ul>
          </div>
        

        <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
          <h1 class="bd-title" id="content">Navbar</h1>
          <p class="bd-lead">Documentation and examples for Bootstrap’s powerful, responsive navigation header, the navbar. Includes support for branding, navigation, and more, including support for our collapse plugin.</p>
          <h2 id="how-it-works">How it works</h2>

<p>Here’s what you need to know before getting started with the navbar:</p>

<ul>
  <li>Navbars require a wrapping <code class="highlighter-rouge">.navbar</code> with <code class="highlighter-rouge">.navbar-expand{-sm|-md|-lg|-xl}</code> for responsive collapsing and <a href="#color-schemes">color scheme</a> classes.</li>
  <li>Navbars and their contents are fluid by default. Use <a href="#containers">optional containers</a> to limit their horizontal width.</li>
  <li>Use our <a href="/admin/tool/themetester/docs/4.0/utilities/spacing/">spacing</a> and <a href="/admin/tool/themetester/docs/4.0/utilities/flex/">flex</a> utility classes for controlling spacing and alignment within navbars.</li>
  <li>Navbars are responsive by default, but you can easily modify them to change that. Responsive behavior depends on our Collapse JavaScript plugin.</li>
  <li>Navbars are hidden by default when printing. Force them to be printed by adding <code class="highlighter-rouge">.d-print</code> to the <code class="highlighter-rouge">.navbar</code>. See the <a href="/admin/tool/themetester/docs/4.0/utilities/display/">display</a> utility class.</li>
  <li>Ensure accessibility by using a <code class="highlighter-rouge">&lt;nav&gt;</code> element or, if using a more generic element such as a <code class="highlighter-rouge">&lt;div&gt;</code>, add a <code class="highlighter-rouge">role="navigation"</code> to every navbar to explicitly identify it as a landmark region for users of assistive technologies.</li>
</ul>

<p>Read on for an example and list of supported sub-components.</p>

<h2 id="supported-content">Supported content</h2>

<p>Navbars come with built-in support for a handful of sub-components. Choose from the following as needed:</p>

<ul>
  <li><code class="highlighter-rouge">.navbar-brand</code> for your company, product, or project name.</li>
  <li><code class="highlighter-rouge">.navbar-nav</code> for a full-height and lightweight navigation (including support for dropdowns).</li>
  <li><code class="highlighter-rouge">.navbar-toggler</code> for use with our collapse plugin and other <a href="#responsive-behaviors">navigation toggling</a> behaviors.</li>
  <li><code class="highlighter-rouge">.form-inline</code> for any form controls and actions.</li>
  <li><code class="highlighter-rouge">.navbar-text</code> for adding vertically centered strings of text.</li>
  <li><code class="highlighter-rouge">.collapse.navbar-collapse</code> for grouping and hiding navbar contents by a parent breakpoint.</li>
</ul>

<p>Here’s an example of all the sub-components included in a responsive light-themed navbar that automatically collapses at the <code class="highlighter-rouge">lg</code> (large) breakpoint.</p>

<div class="bd-example">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" />
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-expand-lg navbar-light bg-light"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Navbar<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"navbar-toggler"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"collapse"</span> <span class="na">data-target=</span><span class="s">"#navbarSupportedContent"</span> <span class="na">aria-controls=</span><span class="s">"navbarSupportedContent"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span> <span class="na">aria-label=</span><span class="s">"Toggle navigation"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-toggler-icon"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;/button&gt;</span>

  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"collapse navbar-collapse"</span> <span class="na">id=</span><span class="s">"navbarSupportedContent"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"navbar-nav mr-auto"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item active"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Home <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(current)<span class="nt">&lt;/span&gt;&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item dropdown"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link dropdown-toggle"</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">id=</span><span class="s">"navbarDropdown"</span> <span class="na">role=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
          Dropdown
        <span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span> <span class="na">aria-labelledby=</span><span class="s">"navbarDropdown"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-divider"</span><span class="nt">&gt;&lt;/div&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link disabled"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Disabled<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;/ul&gt;</span>
    <span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-inline my-2 my-lg-0"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control mr-sm-2"</span> <span class="na">type=</span><span class="s">"search"</span> <span class="na">placeholder=</span><span class="s">"Search"</span> <span class="na">aria-label=</span><span class="s">"Search"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-outline-success my-2 my-sm-0"</span> <span class="na">type=</span><span class="s">"submit"</span><span class="nt">&gt;</span>Search<span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/form&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<p>This example uses <a href="/admin/tool/themetester/docs/4.0/utilities/colors/">color</a> (<code class="highlighter-rouge">bg-light</code>) and <a href="/admin/tool/themetester/docs/4.0/utilities/spacing/">spacing</a> (<code class="highlighter-rouge">my-2</code>, <code class="highlighter-rouge">my-lg-0</code>, <code class="highlighter-rouge">mr-sm-0</code>, <code class="highlighter-rouge">my-sm-0</code>) utility classes.</p>

<h3 id="brand">Brand</h3>

<p>The <code class="highlighter-rouge">.navbar-brand</code> can be applied to most elements, but an anchor works best as some elements might require utility classes or custom styles.</p>

<div class="bd-example">
<!-- As a link -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
</nav>

<!-- As a heading -->
<nav class="navbar navbar-light bg-light">
  <span class="navbar-brand mb-0 h1">Navbar</span>
</nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- As a link --&gt;</span>
<span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-light bg-light"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Navbar<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/nav&gt;</span>

<span class="c">&lt;!-- As a heading --&gt;</span>
<span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-light bg-light"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-brand mb-0 h1"</span><span class="nt">&gt;</span>Navbar<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<p>Adding images to the <code class="highlighter-rouge">.navbar-brand</code> will likely always require custom styles or utilities to properly size. Here are some examples to demonstrate.</p>

<div class="bd-example">
<!-- Just an image -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="/admin/tool/themetester/assets/brand/bootstrap-solid.svg" width="30" height="30" alt="" />
  </a>
</nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- Just an image --&gt;</span>
<span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-light bg-light"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"/admin/tool/themetester/assets/brand/bootstrap-solid.svg"</span> <span class="na">width=</span><span class="s">"30"</span> <span class="na">height=</span><span class="s">"30"</span> <span class="na">alt=</span><span class="s">""</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<div class="bd-example">
<!-- Image and text -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="/admin/tool/themetester/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="" />
    Bootstrap
  </a>
</nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- Image and text --&gt;</span>
<span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-light bg-light"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"/admin/tool/themetester/assets/brand/bootstrap-solid.svg"</span> <span class="na">width=</span><span class="s">"30"</span> <span class="na">height=</span><span class="s">"30"</span> <span class="na">class=</span><span class="s">"d-inline-block align-top"</span> <span class="na">alt=</span><span class="s">""</span><span class="nt">&gt;</span>
    Bootstrap
  <span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<h3 id="nav">Nav</h3>

<p>Navbar navigation links build on our <code class="highlighter-rouge">.nav</code> options with their own modifier class and require the use of <a href="#toggler">toggler classes</a> for proper responsive styling. <strong>Navigation in navbars will also grow to occupy as much horizontal space as possible</strong> to keep your navbar contents securely aligned.</p>

<p>Active states—with <code class="highlighter-rouge">.active</code>—to indicate the current page can be applied directly to <code class="highlighter-rouge">.nav-link</code>s or their immediate parent <code class="highlighter-rouge">.nav-item</code>s.</p>

<div class="bd-example">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-expand-lg navbar-light bg-light"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Navbar<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"navbar-toggler"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"collapse"</span> <span class="na">data-target=</span><span class="s">"#navbarNav"</span> <span class="na">aria-controls=</span><span class="s">"navbarNav"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span> <span class="na">aria-label=</span><span class="s">"Toggle navigation"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-toggler-icon"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"collapse navbar-collapse"</span> <span class="na">id=</span><span class="s">"navbarNav"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"navbar-nav"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item active"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Home <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(current)<span class="nt">&lt;/span&gt;&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Features<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Pricing<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link disabled"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Disabled<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;/ul&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<p>And because we use classes for our navs, you can avoid the list-based approach entirely if you like.</p>

<div class="bd-example">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">Features</a>
      <a class="nav-item nav-link" href="#">Pricing</a>
      <a class="nav-item nav-link disabled" href="#">Disabled</a>
    </div>
  </div>
</nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-expand-lg navbar-light bg-light"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Navbar<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"navbar-toggler"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"collapse"</span> <span class="na">data-target=</span><span class="s">"#navbarNavAltMarkup"</span> <span class="na">aria-controls=</span><span class="s">"navbarNavAltMarkup"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span> <span class="na">aria-label=</span><span class="s">"Toggle navigation"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-toggler-icon"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"collapse navbar-collapse"</span> <span class="na">id=</span><span class="s">"navbarNavAltMarkup"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"navbar-nav"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-item nav-link active"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Home <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(current)<span class="nt">&lt;/span&gt;&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-item nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Features<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-item nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Pricing<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-item nav-link disabled"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Disabled<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<p>You may also utilize dropdowns in your navbar nav. Dropdown menus require a wrapping element for positioning, so be sure to use separate and nested elements for <code class="highlighter-rouge">.nav-item</code> and <code class="highlighter-rouge">.nav-link</code> as shown below.</p>

<div class="bd-example">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-expand-lg navbar-light bg-light"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Navbar<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"navbar-toggler"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"collapse"</span> <span class="na">data-target=</span><span class="s">"#navbarNavDropdown"</span> <span class="na">aria-controls=</span><span class="s">"navbarNavDropdown"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span> <span class="na">aria-label=</span><span class="s">"Toggle navigation"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-toggler-icon"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"collapse navbar-collapse"</span> <span class="na">id=</span><span class="s">"navbarNavDropdown"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"navbar-nav"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item active"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Home <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(current)<span class="nt">&lt;/span&gt;&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Features<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Pricing<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item dropdown"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link dropdown-toggle"</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">id=</span><span class="s">"navbarDropdownMenuLink"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>
          Dropdown link
        <span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span> <span class="na">aria-labelledby=</span><span class="s">"navbarDropdownMenuLink"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;/ul&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<h3 id="forms">Forms</h3>

<p>Place various form controls and components within a navbar with <code class="highlighter-rouge">.form-inline</code>.</p>

<div class="bd-example">
<nav class="navbar navbar-light bg-light">
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" />
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-light bg-light"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-inline"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control mr-sm-2"</span> <span class="na">type=</span><span class="s">"search"</span> <span class="na">placeholder=</span><span class="s">"Search"</span> <span class="na">aria-label=</span><span class="s">"Search"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-outline-success my-2 my-sm-0"</span> <span class="na">type=</span><span class="s">"submit"</span><span class="nt">&gt;</span>Search<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;/form&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<p>Align the contents of your inline forms with utilities as needed.</p>

<div class="bd-example">
<nav class="navbar navbar-light bg-light justify-content-between">
  <a class="navbar-brand">Navbar</a>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" />
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-light bg-light justify-content-between"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span><span class="nt">&gt;</span>Navbar<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-inline"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control mr-sm-2"</span> <span class="na">type=</span><span class="s">"search"</span> <span class="na">placeholder=</span><span class="s">"Search"</span> <span class="na">aria-label=</span><span class="s">"Search"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-outline-success my-2 my-sm-0"</span> <span class="na">type=</span><span class="s">"submit"</span><span class="nt">&gt;</span>Search<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;/form&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<p>Input groups work, too:</p>

<div class="bd-example">
<nav class="navbar navbar-light bg-light">
  <form class="form-inline">
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">@</span>
      </div>
      <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" />
    </div>
  </form>
</nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-light bg-light"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-inline"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group-prepend"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-text"</span> <span class="na">id=</span><span class="s">"basic-addon1"</span><span class="nt">&gt;</span>@<span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Username"</span> <span class="na">aria-label=</span><span class="s">"Username"</span> <span class="na">aria-describedby=</span><span class="s">"basic-addon1"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/form&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<p>Various buttons are supported as part of these navbar forms, too. This is also a great reminder that vertical alignment utilities can be used to align different sized elements.</p>

<div class="bd-example">
<nav class="navbar navbar-light bg-light">
  <form class="form-inline">
    <button class="btn btn-outline-success" type="button">Main button</button>
    <button class="btn btn-sm btn-outline-secondary" type="button">Smaller button</button>
  </form>
</nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-light bg-light"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-inline"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-outline-success"</span> <span class="na">type=</span><span class="s">"button"</span><span class="nt">&gt;</span>Main button<span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-sm btn-outline-secondary"</span> <span class="na">type=</span><span class="s">"button"</span><span class="nt">&gt;</span>Smaller button<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;/form&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<h3 id="text">Text</h3>

<p>Navbars may contain bits of text with the help of <code class="highlighter-rouge">.navbar-text</code>. This class adjusts vertical alignment and horizontal spacing for strings of text.</p>

<div class="bd-example">
<nav class="navbar navbar-light bg-light">
  <span class="navbar-text">
    Navbar text with an inline element
  </span>
</nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-light bg-light"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-text"</span><span class="nt">&gt;</span>
    Navbar text with an inline element
  <span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<p>Mix and match with other components and utilities as needed.</p>

<div class="bd-example">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar w/ text</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
    </ul>
    <span class="navbar-text">
      Navbar text with an inline element
    </span>
  </div>
</nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-expand-lg navbar-light bg-light"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Navbar w/ text<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"navbar-toggler"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"collapse"</span> <span class="na">data-target=</span><span class="s">"#navbarText"</span> <span class="na">aria-controls=</span><span class="s">"navbarText"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span> <span class="na">aria-label=</span><span class="s">"Toggle navigation"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-toggler-icon"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"collapse navbar-collapse"</span> <span class="na">id=</span><span class="s">"navbarText"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"navbar-nav mr-auto"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item active"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Home <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(current)<span class="nt">&lt;/span&gt;&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Features<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Pricing<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;/ul&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-text"</span><span class="nt">&gt;</span>
      Navbar text with an inline element
    <span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<h2 id="color-schemes">Color schemes</h2>

<p>Theming the navbar has never been easier thanks to the combination of theming classes and <code class="highlighter-rouge">background-color</code> utilities. Choose from <code class="highlighter-rouge">.navbar-light</code> for use with light background colors, or <code class="highlighter-rouge">.navbar-dark</code> for dark background colors. Then, customize with <code class="highlighter-rouge">.bg-*</code> utilities.</p>

<div class="bd-example">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
      </ul>
      <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" />
        <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
      </ul>
      <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" />
        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>

  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor03">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
      </ul>
      <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" />
        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-dark bg-dark"</span><span class="nt">&gt;</span>
  <span class="c">&lt;!-- Navbar content --&gt;</span>
<span class="nt">&lt;/nav&gt;</span>

<span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-dark bg-primary"</span><span class="nt">&gt;</span>
  <span class="c">&lt;!-- Navbar content --&gt;</span>
<span class="nt">&lt;/nav&gt;</span>

<span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-light"</span> <span class="na">style=</span><span class="s">"background-color: #e3f2fd;"</span><span class="nt">&gt;</span>
  <span class="c">&lt;!-- Navbar content --&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></figure>

<h2 id="containers">Containers</h2>

<p>Although it’s not required, you can wrap a navbar in a <code class="highlighter-rouge">.container</code> to center it on a page or add one within to only center the contents of a <a href="#placement">fixed or static top navbar</a>.</p>

<div class="bd-example">
<div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
  </nav>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-expand-lg navbar-light bg-light"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Navbar<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/nav&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<p>When the container is within your navbar, its horizontal padding is removed at breakpoints lower than your specified <code class="highlighter-rouge">.navbar-expand{-sm|-md|-lg|-xl}</code> class. This ensures we’re not doubling up on padding unnecessarily on lower viewports when your navbar is collapsed.</p>

<div class="bd-example">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
  </div>
</nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-expand-lg navbar-light bg-light"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Navbar<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<h2 id="placement">Placement</h2>

<p>Use our <a href="/admin/tool/themetester/docs/4.0/utilities/position/">position utilities</a> to place navbars in non-static positions. Choose from fixed to the top, fixed to the bottom, or stickied to the top (scrolls with the page until it reaches the top, then stays there). Fixed navbars use <code class="highlighter-rouge">position: fixed</code>, meaning they’re pulled from the normal flow of the DOM and may require custom CSS (e.g., <code class="highlighter-rouge">padding-top</code> on the <code class="highlighter-rouge">&lt;body&gt;</code>) to prevent overlap with other elements.</p>

<p>Also note that <strong><code class="highlighter-rouge">.sticky-top</code> uses <code class="highlighter-rouge">position: sticky</code>, which <a href="https://caniuse.com/#feat=css-sticky">isn’t fully supported in every browser</a></strong>.</p>

<div class="bd-example">
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">Default</a>
</nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-light bg-light"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Default<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<div class="bd-example">
<nav class="navbar fixed-top navbar-light bg-light">
  <a class="navbar-brand" href="#">Fixed top</a>
</nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar fixed-top navbar-light bg-light"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Fixed top<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<div class="bd-example">
<nav class="navbar fixed-bottom navbar-light bg-light">
  <a class="navbar-brand" href="#">Fixed bottom</a>
</nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar fixed-bottom navbar-light bg-light"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Fixed bottom<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<div class="bd-example">
<nav class="navbar sticky-top navbar-light bg-light">
  <a class="navbar-brand" href="#">Sticky top</a>
</nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar sticky-top navbar-light bg-light"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Sticky top<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<h2 id="responsive-behaviors">Responsive behaviors</h2>

<p>Navbars can utilize <code class="highlighter-rouge">.navbar-toggler</code>, <code class="highlighter-rouge">.navbar-collapse</code>, and <code class="highlighter-rouge">.navbar-expand{-sm|-md|-lg|-xl}</code> classes to change when their content collapses behind a button. In combination with other utilities, you can easily choose when to show or hide particular elements.</p>

<p>For navbars that never collapse, add the <code class="highlighter-rouge">.navbar-expand</code> class on the navbar. For navbars that always collapse, don’t add any <code class="highlighter-rouge">.navbar-expand</code> class.</p>

<h3 id="toggler">Toggler</h3>

<p>Navbar togglers are left-aligned by default, but should they follow a sibling element like a <code class="highlighter-rouge">.navbar-brand</code>, they’ll automatically be aligned to the far right. Reversing your markup will reverse the placement of the toggler. Below are examples of different toggle styles.</p>

<p>With no <code class="highlighter-rouge">.navbar-brand</code> shown in lowest breakpoint:</p>

<div class="bd-example">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#">Hidden brand</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" />
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-expand-lg navbar-light bg-light"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"navbar-toggler"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"collapse"</span> <span class="na">data-target=</span><span class="s">"#navbarTogglerDemo01"</span> <span class="na">aria-controls=</span><span class="s">"navbarTogglerDemo01"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span> <span class="na">aria-label=</span><span class="s">"Toggle navigation"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-toggler-icon"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"collapse navbar-collapse"</span> <span class="na">id=</span><span class="s">"navbarTogglerDemo01"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Hidden brand<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"navbar-nav mr-auto mt-2 mt-lg-0"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item active"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Home <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(current)<span class="nt">&lt;/span&gt;&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link disabled"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Disabled<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;/ul&gt;</span>
    <span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-inline my-2 my-lg-0"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control mr-sm-2"</span> <span class="na">type=</span><span class="s">"search"</span> <span class="na">placeholder=</span><span class="s">"Search"</span> <span class="na">aria-label=</span><span class="s">"Search"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-outline-success my-2 my-sm-0"</span> <span class="na">type=</span><span class="s">"submit"</span><span class="nt">&gt;</span>Search<span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/form&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<p>With a brand name shown on the left and toggler on the right:</p>

<div class="bd-example">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" />
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-expand-lg navbar-light bg-light"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Navbar<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"navbar-toggler"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"collapse"</span> <span class="na">data-target=</span><span class="s">"#navbarTogglerDemo02"</span> <span class="na">aria-controls=</span><span class="s">"navbarTogglerDemo02"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span> <span class="na">aria-label=</span><span class="s">"Toggle navigation"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-toggler-icon"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;/button&gt;</span>

  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"collapse navbar-collapse"</span> <span class="na">id=</span><span class="s">"navbarTogglerDemo02"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"navbar-nav mr-auto mt-2 mt-lg-0"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item active"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Home <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(current)<span class="nt">&lt;/span&gt;&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link disabled"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Disabled<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;/ul&gt;</span>
    <span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-inline my-2 my-lg-0"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control mr-sm-2"</span> <span class="na">type=</span><span class="s">"search"</span> <span class="na">placeholder=</span><span class="s">"Search"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-outline-success my-2 my-sm-0"</span> <span class="na">type=</span><span class="s">"submit"</span><span class="nt">&gt;</span>Search<span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/form&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<p>With a toggler on the left and brand name on the right:</p>

<div class="bd-example">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Navbar</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" />
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-expand-lg navbar-light bg-light"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"navbar-toggler"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"collapse"</span> <span class="na">data-target=</span><span class="s">"#navbarTogglerDemo03"</span> <span class="na">aria-controls=</span><span class="s">"navbarTogglerDemo03"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span> <span class="na">aria-label=</span><span class="s">"Toggle navigation"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-toggler-icon"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Navbar<span class="nt">&lt;/a&gt;</span>

  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"collapse navbar-collapse"</span> <span class="na">id=</span><span class="s">"navbarTogglerDemo03"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"navbar-nav mr-auto mt-2 mt-lg-0"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item active"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Home <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(current)<span class="nt">&lt;/span&gt;&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link disabled"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Disabled<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;/ul&gt;</span>
    <span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"form-inline my-2 my-lg-0"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control mr-sm-2"</span> <span class="na">type=</span><span class="s">"search"</span> <span class="na">placeholder=</span><span class="s">"Search"</span> <span class="na">aria-label=</span><span class="s">"Search"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-outline-success my-2 my-sm-0"</span> <span class="na">type=</span><span class="s">"submit"</span><span class="nt">&gt;</span>Search<span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/form&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre></div>

<h3 id="external-content">External content</h3>

<p>Sometimes you want to use the collapse plugin to trigger hidden content elsewhere on the page. Because our plugin works on the <code class="highlighter-rouge">id</code> and <code class="highlighter-rouge">data-target</code> matching, that’s easily done!</p>

<div class="bd-example">
<div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <h4 class="text-white">Collapsed content</h4>
      <span class="text-muted">Toggleable via the navbar brand.</span>
    </div>
  </div>
  <nav class="navbar navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"pos-f-t"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"collapse"</span> <span class="na">id=</span><span class="s">"navbarToggleExternalContent"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"bg-dark p-4"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"text-white"</span><span class="nt">&gt;</span>Collapsed content<span class="nt">&lt;/h4&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>Toggleable via the navbar brand.<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-dark bg-dark"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"navbar-toggler"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"collapse"</span> <span class="na">data-target=</span><span class="s">"#navbarToggleExternalContent"</span> <span class="na">aria-controls=</span><span class="s">"navbarToggleExternalContent"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span> <span class="na">aria-label=</span><span class="s">"Toggle navigation"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"navbar-toggler-icon"</span><span class="nt">&gt;&lt;/span&gt;</span>
    <span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;/nav&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>


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

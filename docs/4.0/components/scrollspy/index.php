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

<title>Scrollspy · Bootstrap</title>

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
<meta name="twitter:title" content="Scrollspy">
<meta name="twitter:description" content="Automatically update Bootstrap navigation or list group components based on scroll position to indicate which link is currently active in the viewport.">
<meta name="twitter:image" content="/assets/brand/bootstrap-social-logo.png">

<!-- Facebook -->
<meta property="og:url" content="/docs/4.0/components/scrollspy/">
<meta property="og:title" content="Scrollspy">
<meta property="og:description" content="Automatically update Bootstrap navigation or list group components based on scroll position to indicate which link is currently active in the viewport.">
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
            </a></li><li class="active bd-sidenav-active">
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
<li class="toc-entry toc-h2"><a href="#example-in-navbar">Example in navbar</a>
<ul>
<li class="toc-entry toc-h4"><a href="#fat">@fat</a></li>
<li class="toc-entry toc-h4"><a href="#mdo">@mdo</a></li>
<li class="toc-entry toc-h4"><a href="#one">one</a></li>
<li class="toc-entry toc-h4"><a href="#two">two</a></li>
<li class="toc-entry toc-h4"><a href="#three">three</a></li>
</ul>
</li>
<li class="toc-entry toc-h2"><a href="#example-with-nested-nav">Example with nested nav</a>
<ul>
<li class="toc-entry toc-h4"><a href="#item-1">Item 1</a></li>
<li class="toc-entry toc-h4"><a href="#item-2">Item 2</a></li>
<li class="toc-entry toc-h4"><a href="#item-3">Item 3</a></li>
</ul>
</li>
<li class="toc-entry toc-h2"><a href="#example-with-list-group">Example with list-group</a>
<ul>
<li class="toc-entry toc-h4"><a href="#item-1-1">Item 1</a></li>
<li class="toc-entry toc-h4"><a href="#item-2-1">Item 2</a></li>
<li class="toc-entry toc-h4"><a href="#item-3-1">Item 3</a></li>
<li class="toc-entry toc-h4"><a href="#item-4">Item 4</a></li>
</ul>
</li>
<li class="toc-entry toc-h2"><a href="#usage">Usage</a>
<ul>
<li class="toc-entry toc-h3"><a href="#via-data-attributes">Via data attributes</a></li>
<li class="toc-entry toc-h3"><a href="#via-javascript">Via JavaScript</a>
<ul>
<li class="toc-entry toc-h4"><a href="#resolvable-id-targets-required">Resolvable ID targets required</a></li>
<li class="toc-entry toc-h4"><a href="#non-visible-target-elements-ignored">Non-:visible target elements ignored</a></li>
</ul>
</li>
<li class="toc-entry toc-h3"><a href="#methods">Methods</a>
<ul>
<li class="toc-entry toc-h4"><a href="#scrollspyrefresh">.scrollspy('refresh')</a></li>
<li class="toc-entry toc-h4"><a href="#scrollspydispose">.scrollspy('dispose')</a></li>
</ul>
</li>
<li class="toc-entry toc-h3"><a href="#options">Options</a></li>
<li class="toc-entry toc-h3"><a href="#events">Events</a></li>
</ul>
</li>
</ul>
          </div>
        

        <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
          <h1 class="bd-title" id="content">Scrollspy</h1>
          <p class="bd-lead">Automatically update Bootstrap navigation or list group components based on scroll position to indicate which link is currently active in the viewport.</p>
          <h2 id="how-it-works">How it works</h2>

<p>Scrollspy has a few requirements to function properly:</p>

<ul>
  <li>If you’re building our JavaScript from source, it <a href="/admin/tool/themetester/docs/4.0/getting-started/javascript/#util">requires <code class="highlighter-rouge">util.js</code></a>.</li>
  <li>It must be used on a Bootstrap <a href="/admin/tool/themetester/docs/4.0/components/navs/">nav component</a> or <a href="/admin/tool/themetester/docs/4.0/components/list-group/">list group</a>.</li>
  <li>Scrollspy requires <code class="highlighter-rouge">position: relative;</code> on the element you’re spying on, usually the <code class="highlighter-rouge">&lt;body&gt;</code>.</li>
  <li>When spying on elements other than the <code class="highlighter-rouge">&lt;body&gt;</code>, be sure to have a <code class="highlighter-rouge">height</code> set and <code class="highlighter-rouge">overflow-y: scroll;</code> applied.</li>
  <li>Anchors (<code class="highlighter-rouge">&lt;a&gt;</code>) are required and must point to an element with that <code class="highlighter-rouge">id</code>.</li>
</ul>

<p>When successfully implemented, your nav or list group will update accordingly, moving the <code class="highlighter-rouge">.active</code> class from one item to the next based on their associated targets.</p>

<h2 id="example-in-navbar">Example in navbar</h2>

<p>Scroll the area below the navbar and watch the active class change. The dropdown items will be highlighted as well.</p>

<div class="bd-example">
  <nav id="navbar-example2" class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <ul class="nav nav-pills">
      <li class="nav-item">
        <a class="nav-link" href="#fat">@fat</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#mdo">@mdo</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#one">one</a>
          <a class="dropdown-item" href="#two">two</a>
          <div role="separator" class="dropdown-divider"></div>
          <a class="dropdown-item" href="#three">three</a>
        </div>
      </li>
    </ul>
  </nav>
  <div data-spy="scroll" data-target="#navbar-example2" data-offset="0" class="scrollspy-example">
    <h4 id="fat">@fat</h4>
    <p>Ad leggings keytar, brunch id art party dolor labore. Pitchfork yr enim lo-fi before they sold out qui. Tumblr farm-to-table bicycle rights whatever. Anim keffiyeh carles cardigan. Velit seitan mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean shorts, williamsburg hoodie minim qui you probably haven't heard of them et cardigan trust fund culpa biodiesel wes anderson aesthetic. Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan ullamco consequat.</p>
    <h4 id="mdo">@mdo</h4>
    <p>Veniam marfa mustache skateboard, adipisicing fugiat velit pitchfork beard. Freegan beard aliqua cupidatat mcsweeney's vero. Cupidatat four loko nisi, ea helvetica nulla carles. Tattooed cosby sweater food truck, mcsweeney's quis non freegan vinyl. Lo-fi wes anderson +1 sartorial. Carles non aesthetic exercitation quis gentrify. Brooklyn adipisicing craft beer vice keytar deserunt.</p>
    <h4 id="one">one</h4>
    <p>Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ea sunt next level locavore single-origin coffee in magna veniam. High life id vinyl, echo park consequat quis aliquip banh mi pitchfork. Vero VHS est adipisicing. Consectetur nisi DIY minim messenger bag. Cred ex in, sustainable delectus consectetur fanny pack iphone.</p>
    <h4 id="two">two</h4>
    <p>In incididunt echo park, officia deserunt mcsweeney's proident master cleanse thundercats sapiente veniam. Excepteur VHS elit, proident shoreditch +1 biodiesel laborum craft beer. Single-origin coffee wayfarers irure four loko, cupidatat terry richardson master cleanse. Assumenda you probably haven't heard of them art party fanny pack, tattooed nulla cardigan tempor ad. Proident wolf nesciunt sartorial keffiyeh eu banh mi sustainable. Elit wolf voluptate, lo-fi ea portland before they sold out four loko. Locavore enim nostrud mlkshk brooklyn nesciunt.</p>
    <h4 id="three">three</h4>
    <p>Ad leggings keytar, brunch id art party dolor labore. Pitchfork yr enim lo-fi before they sold out qui. Tumblr farm-to-table bicycle rights whatever. Anim keffiyeh carles cardigan. Velit seitan mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean shorts, williamsburg hoodie minim qui you probably haven't heard of them et cardigan trust fund culpa biodiesel wes anderson aesthetic. Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan ullamco consequat.</p>
    <p>Keytar twee blog, culpa messenger bag marfa whatever delectus food truck. Sapiente synth id assumenda. Locavore sed helvetica cliche irony, thundercats you probably haven't heard of them consequat hoodie gluten-free lo-fi fap aliquip. Labore elit placeat before they sold out, terry richardson proident brunch nesciunt quis cosby sweater pariatur keffiyeh ut helvetica artisan. Cardigan craft beer seitan readymade velit. VHS chambray laboris tempor veniam. Anim mollit minim commodo ullamco thundercats.
    </p>
  </div>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">id=</span><span class="s">"navbar-example2"</span> <span class="na">class=</span><span class="s">"navbar navbar-light bg-light"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Navbar<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-pills"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#fat"</span><span class="nt">&gt;</span>@fat<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#mdo"</span><span class="nt">&gt;</span>@mdo<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item dropdown"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">role=</span><span class="s">"button"</span> <span class="na">aria-haspopup=</span><span class="s">"true"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span><span class="nt">&gt;</span>Dropdown<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#one"</span><span class="nt">&gt;</span>one<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#two"</span><span class="nt">&gt;</span>two<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">role=</span><span class="s">"separator"</span> <span class="na">class=</span><span class="s">"dropdown-divider"</span><span class="nt">&gt;&lt;/div&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#three"</span><span class="nt">&gt;</span>three<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/nav&gt;</span>
<span class="nt">&lt;div</span> <span class="na">data-spy=</span><span class="s">"scroll"</span> <span class="na">data-target=</span><span class="s">"#navbar-example2"</span> <span class="na">data-offset=</span><span class="s">"0"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;h4</span> <span class="na">id=</span><span class="s">"fat"</span><span class="nt">&gt;</span>@fat<span class="nt">&lt;/h4&gt;</span>
  <span class="nt">&lt;p&gt;</span>...<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;h4</span> <span class="na">id=</span><span class="s">"mdo"</span><span class="nt">&gt;</span>@mdo<span class="nt">&lt;/h4&gt;</span>
  <span class="nt">&lt;p&gt;</span>...<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;h4</span> <span class="na">id=</span><span class="s">"one"</span><span class="nt">&gt;</span>one<span class="nt">&lt;/h4&gt;</span>
  <span class="nt">&lt;p&gt;</span>...<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;h4</span> <span class="na">id=</span><span class="s">"two"</span><span class="nt">&gt;</span>two<span class="nt">&lt;/h4&gt;</span>
  <span class="nt">&lt;p&gt;</span>...<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;h4</span> <span class="na">id=</span><span class="s">"three"</span><span class="nt">&gt;</span>three<span class="nt">&lt;/h4&gt;</span>
  <span class="nt">&lt;p&gt;</span>...<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>

<h2 id="example-with-nested-nav">Example with nested nav</h2>

<p>Scrollspy also works with nested <code class="highlighter-rouge">.nav</code>s. If a nested <code class="highlighter-rouge">.nav</code> is <code class="highlighter-rouge">.active</code>, its parents will also be <code class="highlighter-rouge">.active</code>. Scroll the area next to the navbar and watch the active class change.</p>

<div class="bd-example">
  <div class="row">
    <div class="col-4">
      <nav id="navbar-example3" class="navbar navbar-light bg-light flex-column">
        <a class="navbar-brand" href="#">Navbar</a>
        <nav class="nav nav-pills flex-column">
          <a class="nav-link" href="#item-1">Item 1</a>
          <nav class="nav nav-pills flex-column">
            <a class="nav-link ml-3 my-1" href="#item-1-1">Item 1-1</a>
            <a class="nav-link ml-3 my-1" href="#item-1-2">Item 1-2</a>
          </nav>
          <a class="nav-link" href="#item-2">Item 2</a>
          <a class="nav-link" href="#item-3">Item 3</a>
          <nav class="nav nav-pills flex-column">
            <a class="nav-link ml-3 my-1" href="#item-3-1">Item 3-1</a>
            <a class="nav-link ml-3 my-1" href="#item-3-2">Item 3-2</a>
          </nav>
        </nav>
      </nav>
    </div>
    <div class="col-8">
      <div data-spy="scroll" data-target="#navbar-example3" data-offset="0" class="scrollspy-example-2">
        <h4 id="item-1">Item 1</h4>
        <p>Ex consequat commodo adipisicing exercitation aute excepteur occaecat ullamco duis aliqua id magna ullamco eu. Do aute ipsum ipsum ullamco cillum consectetur ut et aute consectetur labore. Fugiat laborum incididunt tempor eu consequat enim dolore proident. Qui laborum do non excepteur nulla magna eiusmod consectetur in. Aliqua et aliqua officia quis et incididunt voluptate non anim reprehenderit adipisicing dolore ut consequat deserunt mollit dolore. Aliquip nulla enim veniam non fugiat id cupidatat nulla elit cupidatat commodo velit ut eiusmod cupidatat elit dolore.</p>
        <h5 id="item-1-1">Item 1-1</h5>
        <p>Amet tempor mollit aliquip pariatur excepteur commodo do ea cillum commodo Lorem et occaecat elit qui et. Aliquip labore ex ex esse voluptate occaecat Lorem ullamco deserunt. Aliqua cillum excepteur irure consequat id quis ea. Sit proident ullamco aute magna pariatur nostrud labore. Reprehenderit aliqua commodo eiusmod aliquip est do duis amet proident magna consectetur consequat eu commodo fugiat non quis. Enim aliquip exercitation ullamco adipisicing voluptate excepteur minim exercitation minim minim commodo adipisicing exercitation officia nisi adipisicing. Anim id duis qui consequat labore adipisicing sint dolor elit cillum anim et fugiat.</p>
        <h5 id="item-1-2">Item 2-2</h5>
        <p>Cillum nisi deserunt magna eiusmod qui eiusmod velit voluptate pariatur laborum sunt enim. Irure laboris mollit consequat incididunt sint et culpa culpa incididunt adipisicing magna magna occaecat. Nulla ipsum cillum eiusmod sint elit excepteur ea labore enim consectetur in labore anim. Proident ullamco ipsum esse elit ut Lorem eiusmod dolor et eiusmod. Anim occaecat nulla in non consequat eiusmod velit incididunt.</p>
        <h4 id="item-2">Item 2</h4>
        <p>Quis magna Lorem anim amet ipsum do mollit sit cillum voluptate ex nulla tempor. Laborum consequat non elit enim exercitation cillum aliqua consequat id aliqua. Esse ex consectetur mollit voluptate est in duis laboris ad sit ipsum anim Lorem. Incididunt veniam velit elit elit veniam Lorem aliqua quis ullamco deserunt sit enim elit aliqua esse irure. Laborum nisi sit est tempor laborum mollit labore officia laborum excepteur commodo non commodo dolor excepteur commodo. Ipsum fugiat ex est consectetur ipsum commodo tempor sunt in proident.</p>
        <h4 id="item-3">Item 3</h4>
        <p>Quis anim sit do amet fugiat dolor velit sit ea ea do reprehenderit culpa duis. Nostrud aliqua ipsum fugiat minim proident occaecat excepteur aliquip culpa aute tempor reprehenderit. Deserunt tempor mollit elit ex pariatur dolore velit fugiat mollit culpa irure ullamco est ex ullamco excepteur.</p>
        <h5 id="item-3-1">Item 3-1</h5>
        <p>Deserunt quis elit Lorem eiusmod amet enim enim amet minim Lorem proident nostrud. Ea id dolore anim exercitation aute fugiat labore voluptate cillum do laboris labore. Ex velit exercitation nisi enim labore reprehenderit labore nostrud ut ut. Esse officia sunt duis aliquip ullamco tempor eiusmod deserunt irure nostrud irure. Ullamco proident veniam laboris ea consectetur magna sunt ex exercitation aliquip minim enim culpa occaecat exercitation. Est tempor excepteur aliquip laborum consequat do deserunt laborum esse eiusmod irure proident ipsum esse qui.</p>
        <h5 id="item-3-2">Item 3-2</h5>
        <p>Labore sit culpa commodo elit adipisicing sit aliquip elit proident voluptate minim mollit nostrud aute reprehenderit do. Mollit excepteur eu Lorem ipsum anim commodo sint labore Lorem in exercitation velit incididunt. Occaecat consectetur nisi in occaecat proident minim enim sunt reprehenderit exercitation cupidatat et do officia. Aliquip consequat ad labore labore mollit ut amet. Sit pariatur tempor proident in veniam culpa aliqua excepteur elit magna fugiat eiusmod amet officia.</p>
      </div>
    </div>
  </div>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">id=</span><span class="s">"navbar-example3"</span> <span class="na">class=</span><span class="s">"navbar navbar-light bg-light"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Navbar<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"nav nav-pills flex-column"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#item-1"</span><span class="nt">&gt;</span>Item 1<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"nav nav-pills flex-column"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link ml-3 my-1"</span> <span class="na">href=</span><span class="s">"#item-1-1"</span><span class="nt">&gt;</span>Item 1-1<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link ml-3 my-1"</span> <span class="na">href=</span><span class="s">"#item-1-2"</span><span class="nt">&gt;</span>Item 1-2<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/nav&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#item-2"</span><span class="nt">&gt;</span>Item2<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#item-3"</span><span class="nt">&gt;</span>Item3<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"nav nav-pills flex-column"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link ml-3 my-1"</span> <span class="na">href=</span><span class="s">"#item-3-1"</span><span class="nt">&gt;</span>Item 3-1<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link ml-3 my-1"</span> <span class="na">href=</span><span class="s">"#item-3-2"</span><span class="nt">&gt;</span>Item 3-2<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/nav&gt;</span>
  <span class="nt">&lt;/nav&gt;</span>
<span class="nt">&lt;/nav&gt;</span>

<span class="nt">&lt;div</span> <span class="na">data-spy=</span><span class="s">"scroll"</span> <span class="na">data-target=</span><span class="s">"#navbar-example3"</span> <span class="na">data-offset=</span><span class="s">"0"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;h4</span> <span class="na">id=</span><span class="s">"item-1"</span><span class="nt">&gt;</span>Item 1<span class="nt">&lt;/h4&gt;</span>
  <span class="nt">&lt;p&gt;</span>...<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;h5</span> <span class="na">id=</span><span class="s">"item-1-1"</span><span class="nt">&gt;</span>Item 1-1<span class="nt">&lt;/h5&gt;</span>
  <span class="nt">&lt;p&gt;</span>...<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;h5</span> <span class="na">id=</span><span class="s">"item-1-2"</span><span class="nt">&gt;</span>Item 2-2<span class="nt">&lt;/h5&gt;</span>
  <span class="nt">&lt;p&gt;</span>...<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;h4</span> <span class="na">id=</span><span class="s">"item-2"</span><span class="nt">&gt;</span>Item 2<span class="nt">&lt;/h4&gt;</span>
  <span class="nt">&lt;p&gt;</span>...<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;h4</span> <span class="na">id=</span><span class="s">"item-3"</span><span class="nt">&gt;</span>Item 3<span class="nt">&lt;/h4&gt;</span>
  <span class="nt">&lt;p&gt;</span>...<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;h5</span> <span class="na">id=</span><span class="s">"item-3-1"</span><span class="nt">&gt;</span>Item 3-1<span class="nt">&lt;/h5&gt;</span>
  <span class="nt">&lt;p&gt;</span>...<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;h5</span> <span class="na">id=</span><span class="s">"item-3-2"</span><span class="nt">&gt;</span>Item 3-2<span class="nt">&lt;/h5&gt;</span>
  <span class="nt">&lt;p&gt;</span>...<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>

<h2 id="example-with-list-group">Example with list-group</h2>

<p>Scrollspy also works with <code class="highlighter-rouge">.list-group</code>s. Scroll the area next to the list group and watch the active class change.</p>

<div class="bd-example">
  <div class="row">
    <div class="col-4">
      <div id="list-example" class="list-group">
        <a class="list-group-item list-group-item-action" href="#list-item-1">Item 1</a>
        <a class="list-group-item list-group-item-action" href="#list-item-2">Item2</a>
        <a class="list-group-item list-group-item-action" href="#list-item-3">Item 3</a>
        <a class="list-group-item list-group-item-action" href="#list-item-4">Item 4</a>
      </div>
    </div>
    <div class="col-8">
      <div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example">
        <h4 id="list-item-1">Item 1</h4>
        <p>Ex consequat commodo adipisicing exercitation aute excepteur occaecat ullamco duis aliqua id magna ullamco eu. Do aute ipsum ipsum ullamco cillum consectetur ut et aute consectetur labore. Fugiat laborum incididunt tempor eu consequat enim dolore proident. Qui laborum do non excepteur nulla magna eiusmod consectetur in. Aliqua et aliqua officia quis et incididunt voluptate non anim reprehenderit adipisicing dolore ut consequat deserunt mollit dolore. Aliquip nulla enim veniam non fugiat id cupidatat nulla elit cupidatat commodo velit ut eiusmod cupidatat elit dolore.</p>
        <h4 id="list-item-2">Item 2</h4>
        <p>Quis magna Lorem anim amet ipsum do mollit sit cillum voluptate ex nulla tempor. Laborum consequat non elit enim exercitation cillum aliqua consequat id aliqua. Esse ex consectetur mollit voluptate est in duis laboris ad sit ipsum anim Lorem. Incididunt veniam velit elit elit veniam Lorem aliqua quis ullamco deserunt sit enim elit aliqua esse irure. Laborum nisi sit est tempor laborum mollit labore officia laborum excepteur commodo non commodo dolor excepteur commodo. Ipsum fugiat ex est consectetur ipsum commodo tempor sunt in proident.</p>
        <h4 id="list-item-3">Item 3</h4>
        <p>Quis anim sit do amet fugiat dolor velit sit ea ea do reprehenderit culpa duis. Nostrud aliqua ipsum fugiat minim proident occaecat excepteur aliquip culpa aute tempor reprehenderit. Deserunt tempor mollit elit ex pariatur dolore velit fugiat mollit culpa irure ullamco est ex ullamco excepteur.</p>
        <h4 id="list-item-4">Item 4</h4>
        <p>Quis anim sit do amet fugiat dolor velit sit ea ea do reprehenderit culpa duis. Nostrud aliqua ipsum fugiat minim proident occaecat excepteur aliquip culpa aute tempor reprehenderit. Deserunt tempor mollit elit ex pariatur dolore velit fugiat mollit culpa irure ullamco est ex ullamco excepteur.</p>
      </div>
    </div>
  </div>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">id=</span><span class="s">"list-example"</span> <span class="na">class=</span><span class="s">"list-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action"</span> <span class="na">href=</span><span class="s">"#list-item-1"</span><span class="nt">&gt;</span>Item 1<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action"</span> <span class="na">href=</span><span class="s">"#list-item-2"</span><span class="nt">&gt;</span>Item2<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action"</span> <span class="na">href=</span><span class="s">"#list-item-3"</span><span class="nt">&gt;</span>Item 3<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action"</span> <span class="na">href=</span><span class="s">"#list-item-4"</span><span class="nt">&gt;</span>Item 4<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">data-spy=</span><span class="s">"scroll"</span> <span class="na">data-target=</span><span class="s">"#list-example"</span> <span class="na">data-offset=</span><span class="s">"0"</span> <span class="na">class=</span><span class="s">"scrollspy-example"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;h4</span> <span class="na">id=</span><span class="s">"list-item-1"</span><span class="nt">&gt;</span>Item 1<span class="nt">&lt;/h4&gt;</span>
  <span class="nt">&lt;p&gt;</span>...<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;h4</span> <span class="na">id=</span><span class="s">"list-item-2"</span><span class="nt">&gt;</span>Item 2<span class="nt">&lt;/h4&gt;</span>
  <span class="nt">&lt;p&gt;</span>...<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;h4</span> <span class="na">id=</span><span class="s">"list-item-3"</span><span class="nt">&gt;</span>Item 3<span class="nt">&lt;/h4&gt;</span>
  <span class="nt">&lt;p&gt;</span>...<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;h4</span> <span class="na">id=</span><span class="s">"list-item-4"</span><span class="nt">&gt;</span>Item 4<span class="nt">&lt;/h4&gt;</span>
  <span class="nt">&lt;p&gt;</span>...<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>

<h2 id="usage">Usage</h2>

<h3 id="via-data-attributes">Via data attributes</h3>

<p>To easily add scrollspy behavior to your topbar navigation, add <code class="highlighter-rouge">data-spy="scroll"</code> to the element you want to spy on (most typically this would be the <code class="highlighter-rouge">&lt;body&gt;</code>). Then add the <code class="highlighter-rouge">data-target</code> attribute with the ID or class of the parent element of any Bootstrap <code class="highlighter-rouge">.nav</code> component.</p>

<figure class="highlight"><pre><code class="language-css" data-lang="css"><span class="nt">body</span> <span class="p">{</span>
  <span class="nl">position</span><span class="p">:</span> <span class="nb">relative</span><span class="p">;</span>
<span class="p">}</span></code></pre></figure>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;body</span> <span class="na">data-spy=</span><span class="s">"scroll"</span> <span class="na">data-target=</span><span class="s">"#navbar-example"</span><span class="nt">&gt;</span>
  ...
  <span class="nt">&lt;div</span> <span class="na">id=</span><span class="s">"navbar-example"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-tabs"</span> <span class="na">role=</span><span class="s">"tablist"</span><span class="nt">&gt;</span>
      ...
    <span class="nt">&lt;/ul&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  ...
<span class="nt">&lt;/body&gt;</span></code></pre></figure>

<h3 id="via-javascript">Via JavaScript</h3>

<p>After adding <code class="highlighter-rouge">position: relative;</code> in your CSS, call the scrollspy via JavaScript:</p>

<figure class="highlight"><pre><code class="language-js" data-lang="js"><span class="nx">$</span><span class="p">(</span><span class="s1">'body'</span><span class="p">).</span><span class="nx">scrollspy</span><span class="p">({</span> <span class="na">target</span><span class="p">:</span> <span class="s1">'#navbar-example'</span> <span class="p">})</span></code></pre></figure>

<div class="bd-callout bd-callout-danger">
<h4 id="resolvable-id-targets-required">Resolvable ID targets required</h4>

<p>Navbar links must have resolvable id targets. For example, a <code class="highlighter-rouge">&lt;a href="#home"&gt;home&lt;/a&gt;</code> must correspond to something in the DOM like <code class="highlighter-rouge">&lt;div id="home"&gt;&lt;/div&gt;</code>.</p>
</div>

<div class="bd-callout bd-callout-info">
<h4 id="non-visible-target-elements-ignored">Non-<code class="highlighter-rouge">:visible</code> target elements ignored</h4>

<p>Target elements that are not <a href="https://api.jquery.com/visible-selector/"><code class="highlighter-rouge">:visible</code> according to jQuery</a> will be ignored and their corresponding nav items will never be highlighted.</p>
</div>

<h3 id="methods">Methods</h3>

<h4 id="scrollspyrefresh"><code class="highlighter-rouge">.scrollspy('refresh')</code></h4>

<p>When using scrollspy in conjunction with adding or removing of elements from the DOM, you’ll need to call the refresh method like so:</p>

<figure class="highlight"><pre><code class="language-js" data-lang="js"><span class="nx">$</span><span class="p">(</span><span class="s1">'[data-spy="scroll"]'</span><span class="p">).</span><span class="nx">each</span><span class="p">(</span><span class="kd">function</span> <span class="p">()</span> <span class="p">{</span>
  <span class="kd">var</span> <span class="nx">$spy</span> <span class="o">=</span> <span class="nx">$</span><span class="p">(</span><span class="k">this</span><span class="p">).</span><span class="nx">scrollspy</span><span class="p">(</span><span class="s1">'refresh'</span><span class="p">)</span>
<span class="p">})</span></code></pre></figure>

<h4 id="scrollspydispose"><code class="highlighter-rouge">.scrollspy('dispose')</code></h4>

<p>Destroys an element’s scrollspy.</p>

<h3 id="options">Options</h3>

<p>Options can be passed via data attributes or JavaScript. For data attributes, append the option name to <code class="highlighter-rouge">data-</code>, as in <code class="highlighter-rouge">data-offset=""</code>.</p>

<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th style="width: 100px;">Name</th>
      <th style="width: 100px;">Type</th>
      <th style="width: 50px;">Default</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>offset</td>
      <td>number</td>
      <td>10</td>
      <td>Pixels to offset from top when calculating position of scroll.</td>
    </tr>
  </tbody>
</table>

<h3 id="events">Events</h3>

<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th style="width: 150px;">Event Type</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>activate.bs.scrollspy</td>
      <td>This event fires on the scroll element whenever a new item becomes activated by the scrollspy.</td>
    </tr>
  </tbody>
</table>

<figure class="highlight"><pre><code class="language-js" data-lang="js"><span class="nx">$</span><span class="p">(</span><span class="s1">'[data-spy="scroll"]'</span><span class="p">).</span><span class="nx">on</span><span class="p">(</span><span class="s1">'activate.bs.scrollspy'</span><span class="p">,</span> <span class="kd">function</span> <span class="p">()</span> <span class="p">{</span>
  <span class="c1">// do something…</span>
<span class="p">})</span></code></pre></figure>


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

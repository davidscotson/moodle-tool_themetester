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

$strheading = 'Theme Tester: Bootstrap 4 CSS : List group';
$url = new moodle_url('/admin/tool/themetester/bootswatch4.php');

// Start setting up the page.
$params = array();
$PAGE->set_context(context_system::instance());
$PAGE->set_url($url);
$PAGE->set_title($strheading);
$PAGE->set_heading("List group");
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
<meta name="twitter:title" content="List group">
<meta name="twitter:description" content="List groups are a flexible and powerful component for displaying a series of content. Modify and extend them to support just about any content within.">
<meta name="twitter:image" content="/assets/brand/bootstrap-social-logo.png">

<!-- Facebook -->
<meta property="og:url" content="/docs/4.0/components/list-group/">
<meta property="og:title" content="List group">
<meta property="og:description" content="List groups are a flexible and powerful component for displaying a series of content. Modify and extend them to support just about any content within.">
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
            </a></li><li class="active bd-sidenav-active">
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
<li class="toc-entry toc-h2"><a href="#basic-example">Basic example</a></li>
<li class="toc-entry toc-h2"><a href="#active-items">Active items</a></li>
<li class="toc-entry toc-h2"><a href="#disabled-items">Disabled items</a></li>
<li class="toc-entry toc-h2"><a href="#links-and-buttons">Links and buttons</a></li>
<li class="toc-entry toc-h2"><a href="#flush">Flush</a></li>
<li class="toc-entry toc-h2"><a href="#contextual-classes">Contextual classes</a></li>
<li class="toc-entry toc-h2"><a href="#with-badges">With badges</a></li>
<li class="toc-entry toc-h2"><a href="#custom-content">Custom content</a></li>
<li class="toc-entry toc-h2"><a href="#javascript-behavior">JavaScript behavior</a>
<ul>
<li class="toc-entry toc-h3"><a href="#using-data-attributes">Using data attributes</a></li>
<li class="toc-entry toc-h3"><a href="#via-javascript">Via JavaScript</a></li>
<li class="toc-entry toc-h3"><a href="#fade-effect">Fade effect</a></li>
<li class="toc-entry toc-h3"><a href="#methods">Methods</a>
<ul>
<li class="toc-entry toc-h4"><a href="#tab">$().tab</a></li>
<li class="toc-entry toc-h4"><a href="#tabshow">.tab(‘show’)</a></li>
</ul>
</li>
<li class="toc-entry toc-h3"><a href="#events">Events</a></li>
</ul>
</li>
</ul>
          </div>
        

        <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
          <h1 class="bd-title" id="content">List group</h1>
          <p class="bd-lead">List groups are a flexible and powerful component for displaying a series of content. Modify and extend them to support just about any content within.</p>
          <h2 id="basic-example">Basic example</h2>

<p>The most basic list group is an unordered list with list items and the proper classes. Build upon it with the options that follow, or with your own CSS as needed.</p>

<div class="bd-example">
<ul class="list-group">
  <li class="list-group-item">Cras justo odio</li>
  <li class="list-group-item">Dapibus ac facilisis in</li>
  <li class="list-group-item">Morbi leo risus</li>
  <li class="list-group-item">Porta ac consectetur ac</li>
  <li class="list-group-item">Vestibulum at eros</li>
</ul>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"list-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Cras justo odio<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Dapibus ac facilisis in<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Morbi leo risus<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Porta ac consectetur ac<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Vestibulum at eros<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span></code></pre></div>

<h2 id="active-items">Active items</h2>

<p>Add <code class="highlighter-rouge">.active</code> to a <code class="highlighter-rouge">.list-group-item</code> to indicate the current active selection.</p>

<div class="bd-example">
<ul class="list-group">
  <li class="list-group-item active">Cras justo odio</li>
  <li class="list-group-item">Dapibus ac facilisis in</li>
  <li class="list-group-item">Morbi leo risus</li>
  <li class="list-group-item">Porta ac consectetur ac</li>
  <li class="list-group-item">Vestibulum at eros</li>
</ul>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"list-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item active"</span><span class="nt">&gt;</span>Cras justo odio<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Dapibus ac facilisis in<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Morbi leo risus<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Porta ac consectetur ac<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Vestibulum at eros<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span></code></pre></div>

<h2 id="disabled-items">Disabled items</h2>

<p>Add <code class="highlighter-rouge">.disabled</code> to a <code class="highlighter-rouge">.list-group-item</code> to make it <em>appear</em> disabled. Note that some elements with <code class="highlighter-rouge">.disabled</code> will also require custom JavaScript to fully disable their click events (e.g., links).</p>

<div class="bd-example">
<ul class="list-group">
  <li class="list-group-item disabled">Cras justo odio</li>
  <li class="list-group-item">Dapibus ac facilisis in</li>
  <li class="list-group-item">Morbi leo risus</li>
  <li class="list-group-item">Porta ac consectetur ac</li>
  <li class="list-group-item">Vestibulum at eros</li>
</ul>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"list-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item disabled"</span><span class="nt">&gt;</span>Cras justo odio<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Dapibus ac facilisis in<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Morbi leo risus<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Porta ac consectetur ac<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Vestibulum at eros<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span></code></pre></div>

<h2 id="links-and-buttons">Links and buttons</h2>

<p>Use <code class="highlighter-rouge">&lt;a&gt;</code>s or <code class="highlighter-rouge">&lt;button&gt;</code>s to create <em>actionable</em> list group items with hover, disabled, and active states by adding <code class="highlighter-rouge">.list-group-item-action</code>. We separate these pseudo-classes to ensure list groups made of non-interactive elements (like <code class="highlighter-rouge">&lt;li&gt;</code>s or <code class="highlighter-rouge">&lt;div&gt;</code>s) don’t provide a click or tap affordance.</p>

<p>Be sure to <strong>not use the standard <code class="highlighter-rouge">.btn</code> classes here</strong>.</p>

<div class="bd-example">
<div class="list-group">
  <a href="#" class="list-group-item list-group-item-action active">
    Cras justo odio
  </a>
  <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
  <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
  <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
  <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"list-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action active"</span><span class="nt">&gt;</span>
    Cras justo odio
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action"</span><span class="nt">&gt;</span>Dapibus ac facilisis in<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action"</span><span class="nt">&gt;</span>Morbi leo risus<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action"</span><span class="nt">&gt;</span>Porta ac consectetur ac<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action disabled"</span><span class="nt">&gt;</span>Vestibulum at eros<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<p>With <code class="highlighter-rouge">&lt;button&gt;</code>s, you can also make use of the <code class="highlighter-rouge">disabled</code> attribute instead of the <code class="highlighter-rouge">.disabled</code> class. Sadly, <code class="highlighter-rouge">&lt;a&gt;</code>s don’t support the disabled attribute.</p>

<div class="bd-example">
<div class="list-group">
  <button type="button" class="list-group-item list-group-item-action active">
    Cras justo odio
  </button>
  <button type="button" class="list-group-item list-group-item-action">Dapibus ac facilisis in</button>
  <button type="button" class="list-group-item list-group-item-action">Morbi leo risus</button>
  <button type="button" class="list-group-item list-group-item-action">Porta ac consectetur ac</button>
  <button type="button" class="list-group-item list-group-item-action" disabled="">Vestibulum at eros</button>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"list-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action active"</span><span class="nt">&gt;</span>
    Cras justo odio
  <span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action"</span><span class="nt">&gt;</span>Dapibus ac facilisis in<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action"</span><span class="nt">&gt;</span>Morbi leo risus<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action"</span><span class="nt">&gt;</span>Porta ac consectetur ac<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action"</span> <span class="na">disabled</span><span class="nt">&gt;</span>Vestibulum at eros<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="flush">Flush</h2>

<p>Add <code class="highlighter-rouge">.list-group-flush</code> to remove some borders and rounded corners to render list group items edge-to-edge in a parent container (e.g., cards).</p>

<div class="bd-example">
<ul class="list-group list-group-flush">
  <li class="list-group-item">Cras justo odio</li>
  <li class="list-group-item">Dapibus ac facilisis in</li>
  <li class="list-group-item">Morbi leo risus</li>
  <li class="list-group-item">Porta ac consectetur ac</li>
  <li class="list-group-item">Vestibulum at eros</li>
</ul>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"list-group list-group-flush"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Cras justo odio<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Dapibus ac facilisis in<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Morbi leo risus<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Porta ac consectetur ac<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Vestibulum at eros<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span></code></pre></div>

<h2 id="contextual-classes">Contextual classes</h2>

<p>Use contextual classes to style list items with a stateful background and color.</p>

<div class="bd-example">
<ul class="list-group">
  <li class="list-group-item">Dapibus ac facilisis in</li>

  
  <li class="list-group-item list-group-item-primary">A simple primary list group item</li>
  <li class="list-group-item list-group-item-secondary">A simple secondary list group item</li>
  <li class="list-group-item list-group-item-success">A simple success list group item</li>
  <li class="list-group-item list-group-item-danger">A simple danger list group item</li>
  <li class="list-group-item list-group-item-warning">A simple warning list group item</li>
  <li class="list-group-item list-group-item-info">A simple info list group item</li>
  <li class="list-group-item list-group-item-light">A simple light list group item</li>
  <li class="list-group-item list-group-item-dark">A simple dark list group item</li>
</ul>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"list-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Dapibus ac facilisis in<span class="nt">&lt;/li&gt;</span>

  
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-primary"</span><span class="nt">&gt;</span>A simple primary list group item<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-secondary"</span><span class="nt">&gt;</span>A simple secondary list group item<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-success"</span><span class="nt">&gt;</span>A simple success list group item<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-danger"</span><span class="nt">&gt;</span>A simple danger list group item<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-warning"</span><span class="nt">&gt;</span>A simple warning list group item<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-info"</span><span class="nt">&gt;</span>A simple info list group item<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-light"</span><span class="nt">&gt;</span>A simple light list group item<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-dark"</span><span class="nt">&gt;</span>A simple dark list group item<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span></code></pre></div>

<p>Contextual classes also work with <code class="highlighter-rouge">.list-group-item-action</code>. Note the addition of the hover styles here not present in the previous example. Also supported is the <code class="highlighter-rouge">.active</code> state; apply it to indicate an active selection on a contextual list group item.</p>

<div class="bd-example">
<div class="list-group">
  <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>

  
  <a href="#" class="list-group-item list-group-item-action list-group-item-primary">A simple primary list group item</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">A simple secondary list group item</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-success">A simple success list group item</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-danger">A simple danger list group item</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-warning">A simple warning list group item</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-info">A simple info list group item</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-light">A simple light list group item</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-dark">A simple dark list group item</a>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"list-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action"</span><span class="nt">&gt;</span>Dapibus ac facilisis in<span class="nt">&lt;/a&gt;</span>

  
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action list-group-item-primary"</span><span class="nt">&gt;</span>A simple primary list group item<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action list-group-item-secondary"</span><span class="nt">&gt;</span>A simple secondary list group item<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action list-group-item-success"</span><span class="nt">&gt;</span>A simple success list group item<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action list-group-item-danger"</span><span class="nt">&gt;</span>A simple danger list group item<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action list-group-item-warning"</span><span class="nt">&gt;</span>A simple warning list group item<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action list-group-item-info"</span><span class="nt">&gt;</span>A simple info list group item<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action list-group-item-light"</span><span class="nt">&gt;</span>A simple light list group item<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action list-group-item-dark"</span><span class="nt">&gt;</span>A simple dark list group item<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<div class="bd-callout bd-callout-warning">
<h5 id="conveying-meaning-to-assistive-technologies">Conveying meaning to assistive technologies</h5>

<p>Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies – such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (e.g. the visible text), or is included through alternative means, such as additional text hidden with the <code class="highlighter-rouge">.sr-only</code> class.</p>
</div>

<h2 id="with-badges">With badges</h2>

<p>Add badges to any list group item to show unread counts, activity, and more with the help of some <a href="/admin/tool/themetester/docs/4.0/utilities/flex/">utilities</a>.</p>

<div class="bd-example">
<ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Cras justo odio
    <span class="badge badge-primary badge-pill">14</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Dapibus ac facilisis in
    <span class="badge badge-primary badge-pill">2</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Morbi leo risus
    <span class="badge badge-primary badge-pill">1</span>
  </li>
</ul>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"list-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item d-flex justify-content-between align-items-center"</span><span class="nt">&gt;</span>
    Cras justo odio
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-primary badge-pill"</span><span class="nt">&gt;</span>14<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item d-flex justify-content-between align-items-center"</span><span class="nt">&gt;</span>
    Dapibus ac facilisis in
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-primary badge-pill"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item d-flex justify-content-between align-items-center"</span><span class="nt">&gt;</span>
    Morbi leo risus
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-primary badge-pill"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span></code></pre></div>

<h2 id="custom-content">Custom content</h2>

<p>Add nearly any HTML within, even for linked list groups like the one below, with the help of <a href="/admin/tool/themetester/docs/4.0/utilities/flex/">flexbox utilities</a>.</p>

<div class="bd-example">
<div class="list-group">
  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">List group item heading</h5>
      <small>3 days ago</small>
    </div>
    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
    <small>Donec id elit non mi porta.</small>
  </a>
  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">List group item heading</h5>
      <small class="text-muted">3 days ago</small>
    </div>
    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
    <small class="text-muted">Donec id elit non mi porta.</small>
  </a>
  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">List group item heading</h5>
      <small class="text-muted">3 days ago</small>
    </div>
    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
    <small class="text-muted">Donec id elit non mi porta.</small>
  </a>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"list-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action flex-column align-items-start active"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex w-100 justify-content-between"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;h5</span> <span class="na">class=</span><span class="s">"mb-1"</span><span class="nt">&gt;</span>List group item heading<span class="nt">&lt;/h5&gt;</span>
      <span class="nt">&lt;small&gt;</span>3 days ago<span class="nt">&lt;/small&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"mb-1"</span><span class="nt">&gt;</span>Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;small&gt;</span>Donec id elit non mi porta.<span class="nt">&lt;/small&gt;</span>
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action flex-column align-items-start"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex w-100 justify-content-between"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;h5</span> <span class="na">class=</span><span class="s">"mb-1"</span><span class="nt">&gt;</span>List group item heading<span class="nt">&lt;/h5&gt;</span>
      <span class="nt">&lt;small</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>3 days ago<span class="nt">&lt;/small&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"mb-1"</span><span class="nt">&gt;</span>Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;small</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>Donec id elit non mi porta.<span class="nt">&lt;/small&gt;</span>
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action flex-column align-items-start"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-flex w-100 justify-content-between"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;h5</span> <span class="na">class=</span><span class="s">"mb-1"</span><span class="nt">&gt;</span>List group item heading<span class="nt">&lt;/h5&gt;</span>
      <span class="nt">&lt;small</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>3 days ago<span class="nt">&lt;/small&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"mb-1"</span><span class="nt">&gt;</span>Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;small</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>Donec id elit non mi porta.<span class="nt">&lt;/small&gt;</span>
  <span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="javascript-behavior">JavaScript behavior</h2>

<p>Use the tab JavaScript plugin—include it individually or through the compiled <code class="highlighter-rouge">bootstrap.js</code> file—to extend our list group to create tabbable panes of local content.</p>

<div class="bd-example" role="tabpanel">
  <div class="row">
    <div class="col-4">
      <div class="list-group" id="list-tab" role="tablist">
        <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="tab" href="#list-home" role="tab" aria-controls="list-home">Home</a>
        <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="tab" href="#list-profile" role="tab" aria-controls="list-profile">Profile</a>
        <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="tab" href="#list-messages" role="tab" aria-controls="list-messages">Messages</a>
        <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="tab" href="#list-settings" role="tab" aria-controls="list-settings">Settings</a>
      </div>
    </div>
    <div class="col-8">
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
          <p>Velit aute mollit ipsum ad dolor consectetur nulla officia culpa adipisicing exercitation fugiat tempor. Voluptate deserunt sit sunt nisi aliqua fugiat proident ea ut. Mollit voluptate reprehenderit occaecat nisi ad non minim tempor sunt voluptate consectetur exercitation id ut nulla. Ea et fugiat aliquip nostrud sunt incididunt consectetur culpa aliquip eiusmod dolor. Anim ad Lorem aliqua in cupidatat nisi enim eu nostrud do aliquip veniam minim.</p>
        </div>
        <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
          <p>Cupidatat quis ad sint excepteur laborum in esse qui. Et excepteur consectetur ex nisi eu do cillum ad laborum. Mollit et eu officia dolore sunt Lorem culpa qui commodo velit ex amet id ex. Officia anim incididunt laboris deserunt anim aute dolor incididunt veniam aute dolore do exercitation. Dolor nisi culpa ex ad irure in elit eu dolore. Ad laboris ipsum reprehenderit irure non commodo enim culpa commodo veniam incididunt veniam ad.</p>
        </div>
        <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
          <p>Ut ut do pariatur aliquip aliqua aliquip exercitation do nostrud commodo reprehenderit aute ipsum voluptate. Irure Lorem et laboris nostrud amet cupidatat cupidatat anim do ut velit mollit consequat enim tempor. Consectetur est minim nostrud nostrud consectetur irure labore voluptate irure. Ipsum id Lorem sit sint voluptate est pariatur eu ad cupidatat et deserunt culpa sit eiusmod deserunt. Consectetur et fugiat anim do eiusmod aliquip nulla laborum elit adipisicing pariatur cillum.</p>
        </div>
        <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
          <p>Irure enim occaecat labore sit qui aliquip reprehenderit amet velit. Deserunt ullamco ex elit nostrud ut dolore nisi officia magna sit occaecat laboris sunt dolor. Nisi eu minim cillum occaecat aute est cupidatat aliqua labore aute occaecat ea aliquip sunt amet. Aute mollit dolor ut exercitation irure commodo non amet consectetur quis amet culpa. Quis ullamco nisi amet qui aute irure eu. Magna labore dolor quis ex labore id nostrud deserunt dolor eiusmod eu pariatur culpa mollit in irure.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-4"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"list-group"</span> <span class="na">id=</span><span class="s">"list-tab"</span> <span class="na">role=</span><span class="s">"tablist"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action active"</span> <span class="na">id=</span><span class="s">"list-home-list"</span> <span class="na">data-toggle=</span><span class="s">"list"</span> <span class="na">href=</span><span class="s">"#list-home"</span> <span class="na">role=</span><span class="s">"tab"</span> <span class="na">aria-controls=</span><span class="s">"home"</span><span class="nt">&gt;</span>Home<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action"</span> <span class="na">id=</span><span class="s">"list-profile-list"</span> <span class="na">data-toggle=</span><span class="s">"list"</span> <span class="na">href=</span><span class="s">"#list-profile"</span> <span class="na">role=</span><span class="s">"tab"</span> <span class="na">aria-controls=</span><span class="s">"profile"</span><span class="nt">&gt;</span>Profile<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action"</span> <span class="na">id=</span><span class="s">"list-messages-list"</span> <span class="na">data-toggle=</span><span class="s">"list"</span> <span class="na">href=</span><span class="s">"#list-messages"</span> <span class="na">role=</span><span class="s">"tab"</span> <span class="na">aria-controls=</span><span class="s">"messages"</span><span class="nt">&gt;</span>Messages<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action"</span> <span class="na">id=</span><span class="s">"list-settings-list"</span> <span class="na">data-toggle=</span><span class="s">"list"</span> <span class="na">href=</span><span class="s">"#list-settings"</span> <span class="na">role=</span><span class="s">"tab"</span> <span class="na">aria-controls=</span><span class="s">"settings"</span><span class="nt">&gt;</span>Settings<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-8"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-content"</span> <span class="na">id=</span><span class="s">"nav-tabContent"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-pane fade show active"</span> <span class="na">id=</span><span class="s">"list-home"</span> <span class="na">role=</span><span class="s">"tabpanel"</span> <span class="na">aria-labelledby=</span><span class="s">"list-home-list"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-pane fade"</span> <span class="na">id=</span><span class="s">"list-profile"</span> <span class="na">role=</span><span class="s">"tabpanel"</span> <span class="na">aria-labelledby=</span><span class="s">"list-profile-list"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-pane fade"</span> <span class="na">id=</span><span class="s">"list-messages"</span> <span class="na">role=</span><span class="s">"tabpanel"</span> <span class="na">aria-labelledby=</span><span class="s">"list-messages-list"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-pane fade"</span> <span class="na">id=</span><span class="s">"list-settings"</span> <span class="na">role=</span><span class="s">"tabpanel"</span> <span class="na">aria-labelledby=</span><span class="s">"list-settings-list"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>

<h3 id="using-data-attributes">Using data attributes</h3>

<p>You can activate a list group navigation without writing any JavaScript by simply specifying <code class="highlighter-rouge">data-toggle="list"</code> or on an element. Use these data attributes on <code class="highlighter-rouge">.list-group-item</code>.</p>

<div role="tabpanel">

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- List group --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"list-group"</span> <span class="na">id=</span><span class="s">"myList"</span> <span class="na">role=</span><span class="s">"tablist"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action active"</span> <span class="na">data-toggle=</span><span class="s">"list"</span> <span class="na">href=</span><span class="s">"#home"</span> <span class="na">role=</span><span class="s">"tab"</span><span class="nt">&gt;</span>Home<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action"</span> <span class="na">data-toggle=</span><span class="s">"list"</span> <span class="na">href=</span><span class="s">"#profile"</span> <span class="na">role=</span><span class="s">"tab"</span><span class="nt">&gt;</span>Profile<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action"</span> <span class="na">data-toggle=</span><span class="s">"list"</span> <span class="na">href=</span><span class="s">"#messages"</span> <span class="na">role=</span><span class="s">"tab"</span><span class="nt">&gt;</span>Messages<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action"</span> <span class="na">data-toggle=</span><span class="s">"list"</span> <span class="na">href=</span><span class="s">"#settings"</span> <span class="na">role=</span><span class="s">"tab"</span><span class="nt">&gt;</span>Settings<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="c">&lt;!-- Tab panes --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-content"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-pane active"</span> <span class="na">id=</span><span class="s">"home"</span> <span class="na">role=</span><span class="s">"tabpanel"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-pane"</span> <span class="na">id=</span><span class="s">"profile"</span> <span class="na">role=</span><span class="s">"tabpanel"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-pane"</span> <span class="na">id=</span><span class="s">"messages"</span> <span class="na">role=</span><span class="s">"tabpanel"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-pane"</span> <span class="na">id=</span><span class="s">"settings"</span> <span class="na">role=</span><span class="s">"tabpanel"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>

</div>

<h3 id="via-javascript">Via JavaScript</h3>

<p>Enable tabbable list item via JavaScript (each list item needs to be activated individually):</p>

<figure class="highlight"><pre><code class="language-js" data-lang="js"><span class="nx">$</span><span class="p">(</span><span class="s1">'#myList a'</span><span class="p">).</span><span class="nx">on</span><span class="p">(</span><span class="s1">'click'</span><span class="p">,</span> <span class="kd">function</span> <span class="p">(</span><span class="nx">e</span><span class="p">)</span> <span class="p">{</span>
  <span class="nx">e</span><span class="p">.</span><span class="nx">preventDefault</span><span class="p">()</span>
  <span class="nx">$</span><span class="p">(</span><span class="k">this</span><span class="p">).</span><span class="nx">tab</span><span class="p">(</span><span class="s1">'show'</span><span class="p">)</span>
<span class="p">})</span></code></pre></figure>

<p>You can activate individual list item in several ways:</p>

<figure class="highlight"><pre><code class="language-js" data-lang="js"><span class="nx">$</span><span class="p">(</span><span class="s1">'#myList a[href="#profile"]'</span><span class="p">).</span><span class="nx">tab</span><span class="p">(</span><span class="s1">'show'</span><span class="p">)</span> <span class="c1">// Select tab by name</span>
<span class="nx">$</span><span class="p">(</span><span class="s1">'#myList a:first-child'</span><span class="p">).</span><span class="nx">tab</span><span class="p">(</span><span class="s1">'show'</span><span class="p">)</span> <span class="c1">// Select first tab</span>
<span class="nx">$</span><span class="p">(</span><span class="s1">'#myList a:last-child'</span><span class="p">).</span><span class="nx">tab</span><span class="p">(</span><span class="s1">'show'</span><span class="p">)</span> <span class="c1">// Select last tab</span>
<span class="nx">$</span><span class="p">(</span><span class="s1">'#myList a:nth-child(3)'</span><span class="p">).</span><span class="nx">tab</span><span class="p">(</span><span class="s1">'show'</span><span class="p">)</span> <span class="c1">// Select third tab</span></code></pre></figure>

<h3 id="fade-effect">Fade effect</h3>

<p>To make tabs panel fade in, add <code class="highlighter-rouge">.fade</code> to each <code class="highlighter-rouge">.tab-pane</code>. The first tab pane must also have <code class="highlighter-rouge">.show</code> to make the initial content visible.</p>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-content"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-pane fade show active"</span> <span class="na">id=</span><span class="s">"home"</span> <span class="na">role=</span><span class="s">"tabpanel"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-pane fade"</span> <span class="na">id=</span><span class="s">"profile"</span> <span class="na">role=</span><span class="s">"tabpanel"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-pane fade"</span> <span class="na">id=</span><span class="s">"messages"</span> <span class="na">role=</span><span class="s">"tabpanel"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-pane fade"</span> <span class="na">id=</span><span class="s">"settings"</span> <span class="na">role=</span><span class="s">"tabpanel"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>

<h3 id="methods">Methods</h3>

<h4 id="tab">$().tab</h4>

<p>Activates a list item element and content container. Tab should have either a <code class="highlighter-rouge">data-target</code> or an <code class="highlighter-rouge">href</code> targeting a container node in the DOM.</p>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"list-group"</span> <span class="na">id=</span><span class="s">"myList"</span> <span class="na">role=</span><span class="s">"tablist"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action active"</span> <span class="na">data-toggle=</span><span class="s">"list"</span> <span class="na">href=</span><span class="s">"#home"</span> <span class="na">role=</span><span class="s">"tab"</span><span class="nt">&gt;</span>Home<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action"</span> <span class="na">data-toggle=</span><span class="s">"list"</span> <span class="na">href=</span><span class="s">"#profile"</span> <span class="na">role=</span><span class="s">"tab"</span><span class="nt">&gt;</span>Profile<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action"</span> <span class="na">data-toggle=</span><span class="s">"list"</span> <span class="na">href=</span><span class="s">"#messages"</span> <span class="na">role=</span><span class="s">"tab"</span><span class="nt">&gt;</span>Messages<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"list-group-item list-group-item-action"</span> <span class="na">data-toggle=</span><span class="s">"list"</span> <span class="na">href=</span><span class="s">"#settings"</span> <span class="na">role=</span><span class="s">"tab"</span><span class="nt">&gt;</span>Settings<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-content"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-pane active"</span> <span class="na">id=</span><span class="s">"home"</span> <span class="na">role=</span><span class="s">"tabpanel"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-pane"</span> <span class="na">id=</span><span class="s">"profile"</span> <span class="na">role=</span><span class="s">"tabpanel"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-pane"</span> <span class="na">id=</span><span class="s">"messages"</span> <span class="na">role=</span><span class="s">"tabpanel"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-pane"</span> <span class="na">id=</span><span class="s">"settings"</span> <span class="na">role=</span><span class="s">"tabpanel"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;script&gt;</span>
  <span class="nx">$</span><span class="p">(</span><span class="kd">function</span> <span class="p">()</span> <span class="p">{</span>
    <span class="nx">$</span><span class="p">(</span><span class="s1">'#myList a:last-child'</span><span class="p">).</span><span class="nx">tab</span><span class="p">(</span><span class="s1">'show'</span><span class="p">)</span>
  <span class="p">})</span>
<span class="nt">&lt;/script&gt;</span></code></pre></figure>

<h4 id="tabshow">.tab(‘show’)</h4>

<p>Selects the given list item and shows its associated pane. Any other list item that was previously selected becomes unselected and its associated pane is hidden. <strong>Returns to the caller before the tab pane has actually been shown</strong> (for example, before the <code class="highlighter-rouge">shown.bs.tab</code> event occurs).</p>

<figure class="highlight"><pre><code class="language-js" data-lang="js"><span class="nx">$</span><span class="p">(</span><span class="s1">'#someListItem'</span><span class="p">).</span><span class="nx">tab</span><span class="p">(</span><span class="s1">'show'</span><span class="p">)</span></code></pre></figure>

<h3 id="events">Events</h3>

<p>When showing a new tab, the events fire in the following order:</p>

<ol>
  <li><code class="highlighter-rouge">hide.bs.tab</code> (on the current active tab)</li>
  <li><code class="highlighter-rouge">show.bs.tab</code> (on the to-be-shown tab)</li>
  <li><code class="highlighter-rouge">hidden.bs.tab</code> (on the previous active tab, the same one as for the <code class="highlighter-rouge">hide.bs.tab</code> event)</li>
  <li><code class="highlighter-rouge">shown.bs.tab</code> (on the newly-active just-shown tab, the same one as for the <code class="highlighter-rouge">show.bs.tab</code> event)</li>
</ol>

<p>If no tab was already active, the <code class="highlighter-rouge">hide.bs.tab</code> and <code class="highlighter-rouge">hidden.bs.tab</code> events will not be fired.</p>

<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th style="width: 150px;">Event type</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>show.bs.tab</td>
      <td>This event fires on tab show, but before the new tab has been shown. Use <code>event.target</code> and <code>event.relatedTarget</code> to target the active tab and the previous active tab (if available) respectively.</td>
    </tr>
    <tr>
      <td>shown.bs.tab</td>
      <td>This event fires on tab show after a tab has been shown. Use <code>event.target</code> and <code>event.relatedTarget</code> to target the active tab and the previous active tab (if available) respectively.</td>
    </tr>
    <tr>
      <td>hide.bs.tab</td>
      <td>This event fires when a new tab is to be shown (and thus the previous active tab is to be hidden). Use <code>event.target</code> and <code>event.relatedTarget</code> to target the current active tab and the new soon-to-be-active tab, respectively.</td>
    </tr>
    <tr>
      <td>hidden.bs.tab</td>
      <td>This event fires after a new tab is shown (and thus the previous active tab is hidden). Use <code>event.target</code> and <code>event.relatedTarget</code> to target the previous active tab and the new active tab, respectively.</td>
    </tr>
  </tbody>
</table>

<figure class="highlight"><pre><code class="language-js" data-lang="js"><span class="nx">$</span><span class="p">(</span><span class="s1">'a[data-toggle="list"]'</span><span class="p">).</span><span class="nx">on</span><span class="p">(</span><span class="s1">'shown.bs.tab'</span><span class="p">,</span> <span class="kd">function</span> <span class="p">(</span><span class="nx">e</span><span class="p">)</span> <span class="p">{</span>
  <span class="nx">e</span><span class="p">.</span><span class="nx">target</span> <span class="c1">// newly activated tab</span>
  <span class="nx">e</span><span class="p">.</span><span class="nx">relatedTarget</span> <span class="c1">// previous active tab</span>
<span class="p">})</span></code></pre></figure>


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

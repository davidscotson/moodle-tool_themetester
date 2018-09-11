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

$strheading = 'Theme Tester: Bootstrap 4 CSS : Badges';
$url = new moodle_url('/admin/tool/themetester/bootswatch4.php');

// Start setting up the page.
$params = array();
$PAGE->set_context(context_system::instance());
$PAGE->set_url($url);
$PAGE->set_title($strheading);
$PAGE->set_heading("Badges");
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
<meta name="twitter:title" content="Badges">
<meta name="twitter:description" content="Documentation and examples for badges, our small count and labeling component.">
<meta name="twitter:image" content="/assets/brand/bootstrap-social-logo.png">

<!-- Facebook -->
<meta property="og:url" content="/docs/4.0/components/badge/">
<meta property="og:title" content="Badges">
<meta property="og:description" content="Documentation and examples for badges, our small count and labeling component.">
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
    </div><div class="bd-toc-item active">
      <a class="bd-toc-link" href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/components/alerts/">
        Components
      </a>

      <ul class="nav bd-sidenav"><li>
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0/components/alerts/">
              Alerts
            </a></li><li class="active bd-sidenav-active">
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
<li class="toc-entry toc-h2"><a href="#example">Example</a></li>
<li class="toc-entry toc-h2"><a href="#contextual-variations">Contextual variations</a></li>
<li class="toc-entry toc-h2"><a href="#pill-badges">Pill badges</a></li>
<li class="toc-entry toc-h2"><a href="#links">Links</a></li>
</ul>
          </div>
        

        <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
          <h1 class="bd-title" id="content">Badges</h1>
          <p class="bd-lead">Documentation and examples for badges, our small count and labeling component.</p>
          <h2 id="example">Example</h2>

<p>Badges scale to match the size of the immediate parent element by using relative font sizing and <code class="highlighter-rouge">em</code> units.</p>

<div class="bd-example">
<div class="h1">Example heading <span class="badge badge-secondary">New</span></div>
<div class="h2">Example heading <span class="badge badge-secondary">New</span></div>
<div class="h3">Example heading <span class="badge badge-secondary">New</span></div>
<div class="h4">Example heading <span class="badge badge-secondary">New</span></div>
<div class="h5">Example heading <span class="badge badge-secondary">New</span></div>
<div class="h6">Example heading <span class="badge badge-secondary">New</span></div>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;h1&gt;</span>Example heading <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-secondary"</span><span class="nt">&gt;</span>New<span class="nt">&lt;/span&gt;&lt;/h1&gt;</span>
<span class="nt">&lt;h2&gt;</span>Example heading <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-secondary"</span><span class="nt">&gt;</span>New<span class="nt">&lt;/span&gt;&lt;/h2&gt;</span>
<span class="nt">&lt;h3&gt;</span>Example heading <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-secondary"</span><span class="nt">&gt;</span>New<span class="nt">&lt;/span&gt;&lt;/h3&gt;</span>
<span class="nt">&lt;h4&gt;</span>Example heading <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-secondary"</span><span class="nt">&gt;</span>New<span class="nt">&lt;/span&gt;&lt;/h4&gt;</span>
<span class="nt">&lt;h5&gt;</span>Example heading <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-secondary"</span><span class="nt">&gt;</span>New<span class="nt">&lt;/span&gt;&lt;/h5&gt;</span>
<span class="nt">&lt;h6&gt;</span>Example heading <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-secondary"</span><span class="nt">&gt;</span>New<span class="nt">&lt;/span&gt;&lt;/h6&gt;</span></code></pre></figure>

<p>Badges can be used as part of links or buttons to provide a counter.</p>

<div class="bd-example">
<button type="button" class="btn btn-primary">
  Notifications <span class="badge badge-light">4</span>
</button>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>
  Notifications <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-light"</span><span class="nt">&gt;</span>4<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/button&gt;</span></code></pre></div>

<p>Note that depending on how they are used, badges may be confusing for users of screen readers and similar assistive technologies. While the styling of badges provides a visual cue as to their purpose, these users will simply be presented with the content of the badge. Depending on the specific situation, these badges may seem like random additional words or numbers at the end of a sentence, link, or button.</p>

<p>Unless the context is clear (as with the “Notifications” example, where it is understood that the “4” is the number of notifications), consider including additional context with a visually hidden piece of additional text.</p>

<div class="bd-example">
<button type="button" class="btn btn-primary">
  Profile <span class="badge badge-light">9</span>
  <span class="sr-only">unread messages</span>
</button>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>
  Profile <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-light"</span><span class="nt">&gt;</span>9<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>unread messages<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/button&gt;</span></code></pre></div>

<h2 id="contextual-variations">Contextual variations</h2>

<p>Add any of the below mentioned modifier classes to change the appearance of a badge.</p>

<div class="bd-example">
<span class="badge badge-primary">Primary</span>
<span class="badge badge-secondary">Secondary</span>
<span class="badge badge-success">Success</span>
<span class="badge badge-danger">Danger</span>
<span class="badge badge-warning">Warning</span>
<span class="badge badge-info">Info</span>
<span class="badge badge-light">Light</span>
<span class="badge badge-dark">Dark</span>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-primary"</span><span class="nt">&gt;</span>Primary<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-secondary"</span><span class="nt">&gt;</span>Secondary<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-success"</span><span class="nt">&gt;</span>Success<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-danger"</span><span class="nt">&gt;</span>Danger<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-warning"</span><span class="nt">&gt;</span>Warning<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-info"</span><span class="nt">&gt;</span>Info<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-light"</span><span class="nt">&gt;</span>Light<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-dark"</span><span class="nt">&gt;</span>Dark<span class="nt">&lt;/span&gt;</span></code></pre></div>

<div class="bd-callout bd-callout-warning">
<h5 id="conveying-meaning-to-assistive-technologies">Conveying meaning to assistive technologies</h5>

<p>Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies – such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (e.g. the visible text), or is included through alternative means, such as additional text hidden with the <code class="highlighter-rouge">.sr-only</code> class.</p>
</div>

<h2 id="pill-badges">Pill badges</h2>

<p>Use the <code class="highlighter-rouge">.badge-pill</code> modifier class to make badges more rounded (with a larger <code class="highlighter-rouge">border-radius</code> and additional horizontal <code class="highlighter-rouge">padding</code>). Useful if you miss the badges from v3.</p>

<div class="bd-example">
<span class="badge badge-pill badge-primary">Primary</span>
<span class="badge badge-pill badge-secondary">Secondary</span>
<span class="badge badge-pill badge-success">Success</span>
<span class="badge badge-pill badge-danger">Danger</span>
<span class="badge badge-pill badge-warning">Warning</span>
<span class="badge badge-pill badge-info">Info</span>
<span class="badge badge-pill badge-light">Light</span>
<span class="badge badge-pill badge-dark">Dark</span>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-pill badge-primary"</span><span class="nt">&gt;</span>Primary<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-pill badge-secondary"</span><span class="nt">&gt;</span>Secondary<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-pill badge-success"</span><span class="nt">&gt;</span>Success<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-pill badge-danger"</span><span class="nt">&gt;</span>Danger<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-pill badge-warning"</span><span class="nt">&gt;</span>Warning<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-pill badge-info"</span><span class="nt">&gt;</span>Info<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-pill badge-light"</span><span class="nt">&gt;</span>Light<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge badge-pill badge-dark"</span><span class="nt">&gt;</span>Dark<span class="nt">&lt;/span&gt;</span></code></pre></div>

<h2 id="links">Links</h2>

<p>Using the contextual <code class="highlighter-rouge">.badge-*</code> classes on an <code class="highlighter-rouge">&lt;a&gt;</code> element quickly provide <em>actionable</em> badges with hover and focus states.</p>

<div class="bd-example">
<a href="#" class="badge badge-primary">Primary</a>
<a href="#" class="badge badge-secondary">Secondary</a>
<a href="#" class="badge badge-success">Success</a>
<a href="#" class="badge badge-danger">Danger</a>
<a href="#" class="badge badge-warning">Warning</a>
<a href="#" class="badge badge-info">Info</a>
<a href="#" class="badge badge-light">Light</a>
<a href="#" class="badge badge-dark">Dark</a>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"badge badge-primary"</span><span class="nt">&gt;</span>Primary<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"badge badge-secondary"</span><span class="nt">&gt;</span>Secondary<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"badge badge-success"</span><span class="nt">&gt;</span>Success<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"badge badge-danger"</span><span class="nt">&gt;</span>Danger<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"badge badge-warning"</span><span class="nt">&gt;</span>Warning<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"badge badge-info"</span><span class="nt">&gt;</span>Info<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"badge badge-light"</span><span class="nt">&gt;</span>Light<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"badge badge-dark"</span><span class="nt">&gt;</span>Dark<span class="nt">&lt;/a&gt;</span></code></pre></div>


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

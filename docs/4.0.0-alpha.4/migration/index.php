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

$strheading = "Theme Tester: Bootstrap 4 alpha-4 CSS";
$url = new moodle_url('/admin/tool/themetester/docs/4.0.0-alpha4/getting-started/introduction/index.php');

// Start setting up the page.
$params = array();
$PAGE->set_context(context_system::instance());
$PAGE->set_url($url);
$PAGE->set_title($strheading);
$PAGE->set_heading("Migrating to v4");
$PAGE->requires->jquery();
admin_externalpage_setup('toolthemetester');
$PAGE->add_body_class('bd-docs'); //   <body class="bd-docs" data-spy="scroll" data-target=".bd-sidenav-active">
echo $OUTPUT->header();

echo html_writer::link(new moodle_url('/admin/tool/themetester/index.php'), '&laquo; Back to index');
echo $OUTPUT->heading($strheading);

?>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-3 push-md-9 bd-sidebar">
          <form class="bd-search hidden-sm-down">
  <input type="text" class="form-control" id="search-input" placeholder="Search..." autocomplete="off">
  <div class="dropdown-menu bd-search-results" id="search-results"></div>
</form>

<nav class="bd-links" id="docsNavbarContent">
  
  
  
  

  

  <div class="bd-toc-item ">
    
        <a class="bd-toc-link" href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/getting-started/introduction">
      
        Getting started
      </a>

      <ul class="nav bd-sidenav">
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/getting-started/introduction">
              Introduction
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/getting-started/download">
              Download
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/getting-started/contents">
              Contents
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/getting-started/browsers-devices">
              Browsers & devices
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/getting-started/javascript">
              JavaScript
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/getting-started/options">
              Options
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/getting-started/flexbox">
              Flexbox
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/getting-started/build-tools">
              Build tools
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/getting-started/best-practices">
              Best practices
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/getting-started/accessibility">
              Accessibility
            </a>

            
          </li>
        
      </ul>
    </div>
  
  
  
  

  

  <div class="bd-toc-item ">
    
        <a class="bd-toc-link" href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/layout/overview">
      
        Layout
      </a>

      <ul class="nav bd-sidenav">
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/layout/overview">
              Overview
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/layout/grid">
              Grid
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/layout/flexbox-grid">
              Flexbox grid
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/layout/media-object">
              Media object
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/layout/responsive-utilities">
              Responsive utilities
            </a>

            
          </li>
        
      </ul>
    </div>
  
  
  
  

  

  <div class="bd-toc-item ">
    
        <a class="bd-toc-link" href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/content/reboot">
      
        Content
      </a>

      <ul class="nav bd-sidenav">
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/content/reboot">
              Reboot
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/content/typography">
              Typography
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/content/code">
              Code
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/content/images">
              Images
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/content/tables">
              Tables
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/content/figures">
              Figures
            </a>

            
          </li>
        
      </ul>
    </div>
  
  
  
  

  

  <div class="bd-toc-item ">
    
        <a class="bd-toc-link" href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/components/alerts">
      
        Components
      </a>

      <ul class="nav bd-sidenav">
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/components/alerts">
              Alerts
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/components/breadcrumb">
              Breadcrumb
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/components/buttons">
              Buttons
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/components/button-group">
              Button group
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/components/card">
              Card
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/components/carousel">
              Carousel
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/components/collapse">
              Collapse
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/components/dropdowns">
              Dropdowns
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/components/forms">
              Forms
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/components/input-group">
              Input group
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/components/jumbotron">
              Jumbotron
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/components/list-group">
              List group
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/components/modal">
              Modal
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/components/navs">
              Navs
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/components/navbar">
              Navbar
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/components/pagination">
              Pagination
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/components/popovers">
              Popovers
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/components/progress">
              Progress
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/components/scrollspy">
              Scrollspy
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/components/tag">
              Tag
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/components/tooltips">
              Tooltips
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/components/utilities">
              Utilities
            </a>

            
          </li>
        
      </ul>
    </div>
  
  
  
  

  

  <div class="bd-toc-item ">
    
        <a class="bd-toc-link" href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/about/history">
      
        About
      </a>

      <ul class="nav bd-sidenav">
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/about/history">
              History
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/about/team">
              Team
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/about/brand">
              Brand
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/about/license">
              License
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/about/translations">
              Translations
            </a>

            
          </li>
        
      </ul>
    </div>
  
  
  
  

  

  <div class="bd-toc-item active">
    
        <a class="bd-toc-link" href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/migration/">
      
        Migration
      </a>

      <ul class="nav bd-sidenav">
        
      </ul>
    </div>
  
</nav>

        </div>
        <div class="col-xs-12 col-md-9 pull-md-3 bd-content">
          <h1 class="bd-title" id="content">Migrating to v4</h1>
          <p>Bootstrap 4 is a major rewrite of almost the entire project. The most notable changes are summarized immediately below, followed by more specific class and behavioral changes to relevant components.</p>

<div class="bd-callout bd-callout-info">
<p><strong>Heads up!</strong> This will be in flux as work on the v4 alphas progresses. Until then consider it incomplete, and we’d love pull requests to help keep it up to date.</p>
</div>

<h2 id="summary">Summary</h2>

<p>Here are the big ticket items you’ll want to be aware of when moving from v3 to v4.</p>

<h3 id="browser-support">Browser support</h3>

<ul>
  <li>Dropped IE8 and iOS 6 support. v4 is now only IE9+ and iOS 7+. For sites needing either of those, use v3.</li>
  <li>Added official support for Android v5.0 Lollipop’s Browser and WebView. Earlier versions of the Android Browser and WebView remain only unofficially supported.</li>
</ul>

<h3 id="global-changes">Global changes</h3>

<ul>
  <li>Switched from <a href="http://lesscss.org/">Less</a> to <a href="http://sass-lang.com/">Sass</a> for our source CSS files.</li>
  <li>Switched from <code class="highlighter-rouge">px</code> to <code class="highlighter-rouge">rem</code> as our primary CSS unit, though pixels are still used for media queries and grid behavior as viewports are not affected by type size.</li>
  <li>Global font-size increased from <code class="highlighter-rouge">14px</code> to <code class="highlighter-rouge">16px</code>.</li>
  <li>Added a new grid tier for ~<code class="highlighter-rouge">480px</code> and below.</li>
  <li>Replaced the separate optional theme with configurable options via SCSS variables (e.g., <code class="highlighter-rouge">$enable-gradients: true</code>).</li>
</ul>

<h3 id="grid-system">Grid system</h3>

<ul>
  <li>Added support for flexbox (set <code class="highlighter-rouge">$enable-flex: true</code> and recompile) in the grid mixins and predefined classes.</li>
  <li>As part of flexbox, included support for vertical and horizontal alignment classes.</li>
  <li>Overhauled grid mixins to merge <code class="highlighter-rouge">make-col-span</code> into <code class="highlighter-rouge">make-col</code> for a singular mixin.</li>
  <li>Added a new <code class="highlighter-rouge">sm</code> grid tier below <code class="highlighter-rouge">768px</code> for more granular control. We now have <code class="highlighter-rouge">xs</code>, <code class="highlighter-rouge">sm</code>, <code class="highlighter-rouge">md</code>, <code class="highlighter-rouge">lg</code>, and <code class="highlighter-rouge">xl</code>. This also means every tier has been bumped up one level (so <code class="highlighter-rouge">.col-md-6</code> in v3 is now <code class="highlighter-rouge">.col-lg-6</code> in v4).</li>
  <li>Changed grid system media query breakpoints and container widths to account for new grid tier and ensure columns are evenly divisible by <code class="highlighter-rouge">12</code> at their max width.</li>
  <li>Grid breakpoints and container widths are now handled via Sass maps (<code class="highlighter-rouge">$grid-breakpoints</code> and <code class="highlighter-rouge">$container-max-widths</code>) instead of a handful of separate variables. These replace the <code class="highlighter-rouge">@screen-*</code> variables entirely and allow you to fully customize the grid tiers.</li>
  <li>Media queries have also changed. Instead of repeating our media query declarations with the same value each time, we now have <code class="highlighter-rouge">@include media-breakpoint-up/down/only</code>. Now, instead of writing <code class="highlighter-rouge">@media (min-width: @screen-sm-min) { ... }</code>, you can write <code class="highlighter-rouge">@include media-breakpoint-up(sm) { ... }</code>.</li>
</ul>

<h3 id="components">Components</h3>

<ul>
  <li>Dropped panels, thumbnails, and wells for a new all-encompassing component, cards.</li>
  <li>Dropped the Glyphicons icon font. If you need icons, some options are:
    <ul>
      <li>the upstream version of <a href="http://glyphicons.com/">Glyphicons</a></li>
      <li><a href="https://octicons.github.com/">Octicons</a></li>
      <li><a href="https://fortawesome.github.io/Font-Awesome/">Font Awesome</a></li>
    </ul>
  </li>
  <li>Dropped the Affix jQuery plugin. We recommend using a <code class="highlighter-rouge">position: sticky</code> polyfill instead. <a href="http://html5please.com/#sticky">See the HTML5 Please entry</a> for details and specific polyfill recommendations.
    <ul>
      <li>If you were using Affix to apply additional, non-<code class="highlighter-rouge">position</code> styles, the polyfills might not support your use case. One option for such uses is the third-party <a href="https://github.com/acch/scrollpos-styler">ScrollPos-Styler</a> library.</li>
    </ul>
  </li>
  <li>Dropped the pager component as it was essentially slightly customized buttons.</li>
  <li>Refactored nearly all components to use more un-nested classes instead of children selectors.</li>
</ul>

<h3 id="misc">Misc</h3>
<ul>
  <li>Non-responsive usage of Bootstrap is no longer supported.</li>
  <li>Dropped the online Customizer in favor of more extensive setup documentation and customized builds.</li>
</ul>

<h2 id="by-component">By component</h2>

<p>This list highlights key changes by component between v3.x.x and v4.0.0.</p>

<h3 id="reboot">Reboot</h3>

<p>New to Bootstrap 4 is the Reboot, a new stylesheet that builds on Normalize with our own somewhat opinionated reset styles. Selectors appearing in this file only use elements—there are no classes here. This isolates our reset styles from our component styles for a more modular approach. Some of the most important resets this includes are the <code class="highlighter-rouge">box-sizing: border-box</code> change, moving from <code class="highlighter-rouge">em</code> to <code class="highlighter-rouge">rem</code> units on many elements, link styles, and many form element resets.</p>

<h3 id="typography">Typography</h3>

<ul>
  <li>Moved all <code class="highlighter-rouge">.text-</code> utilities to the <code class="highlighter-rouge">_utilities.scss</code> file.</li>
  <li>Dropped <code class="highlighter-rouge">.page-header</code> as, aside from the border, all it’s styles can be applied via utilities.</li>
  <li><code class="highlighter-rouge">.dl-horizontal</code> has been dropped. Instead, use <code class="highlighter-rouge">.row</code> on <code class="highlighter-rouge">&lt;dl&gt;</code> and use grid column classes (or mixins) on its <code class="highlighter-rouge">&lt;dt&gt;</code> and <code class="highlighter-rouge">&lt;dd&gt;</code> children.</li>
  <li>Custom <code class="highlighter-rouge">&lt;blockquote&gt;</code> styling has moved to classes—<code class="highlighter-rouge">.blockquote</code> and the <code class="highlighter-rouge">.blockquote-reverse</code> modifier.</li>
  <li><code class="highlighter-rouge">.list-inline</code> now requires that its children list items have the new <code class="highlighter-rouge">.list-inline-item</code> class applied to them.</li>
</ul>

<h3 id="images">Images</h3>

<ul>
  <li>Renamed <code class="highlighter-rouge">.img-responsive</code> to <code class="highlighter-rouge">.img-fluid</code>.</li>
</ul>

<h3 id="tables">Tables</h3>

<ul>
  <li>Nearly all instances of the <code class="highlighter-rouge">&gt;</code> selector have been removed, meaning nested tables will now automatically inherit styles from their parents. This greatly simplifies our selectors and potential customizations.</li>
  <li>Responsive tables no longer require a wrapping element. Instead, just put the <code class="highlighter-rouge">.table-responsive</code> right on the <code class="highlighter-rouge">&lt;table&gt;</code>.</li>
  <li>Renamed <code class="highlighter-rouge">.table-condensed</code> to <code class="highlighter-rouge">.table-sm</code> for consistency.</li>
  <li>Added a new <code class="highlighter-rouge">.table-inverse</code> option.</li>
  <li>Added a new <code class="highlighter-rouge">.table-reflow</code> option.</li>
  <li>Added table header modifiers: <code class="highlighter-rouge">.thead-default</code> and <code class="highlighter-rouge">.thead-inverse</code>.</li>
  <li>Renamed contextual classes to have a <code class="highlighter-rouge">.table-</code>-prefix. Hence <code class="highlighter-rouge">.active</code>, <code class="highlighter-rouge">.success</code>, <code class="highlighter-rouge">.warning</code>, <code class="highlighter-rouge">.danger</code> and <code class="highlighter-rouge">.table-info</code> to <code class="highlighter-rouge">.table-active</code>, <code class="highlighter-rouge">.table-success</code>, <code class="highlighter-rouge">.table-warning</code>, <code class="highlighter-rouge">.table-danger</code> and <code class="highlighter-rouge">.table-info</code>.</li>
</ul>

<h3 id="forms">Forms</h3>

<ul>
  <li>Moved element resets to the <code class="highlighter-rouge">_reboot.scss</code> file.</li>
  <li>Renamed <code class="highlighter-rouge">.control-label</code> to <code class="highlighter-rouge">.form-control-label</code>.</li>
  <li>Renamed <code class="highlighter-rouge">.input-lg</code> and <code class="highlighter-rouge">.input-sm</code> to <code class="highlighter-rouge">.form-control-lg</code> and <code class="highlighter-rouge">.form-control-sm</code>, respectively.</li>
  <li>Dropped <code class="highlighter-rouge">.form-group-*</code> classes for simplicity’s sake. Use <code class="highlighter-rouge">.form-control-*</code> classes instead now.</li>
  <li>Dropped <code class="highlighter-rouge">.help-block</code> and replaced it with <code class="highlighter-rouge">.form-text</code> for block-level help text. For inline help text and other flexible options, use utility classes like <code class="highlighter-rouge">.text-muted</code>.</li>
  <li>Horizontal forms overhauled:
    <ul>
      <li>Dropped the <code class="highlighter-rouge">.form-horizontal</code> class requirement.</li>
      <li><code class="highlighter-rouge">.form-group</code> no longer applies styles from the <code class="highlighter-rouge">.row</code> via mixin, so <code class="highlighter-rouge">.row</code> is now required for horizontal grid layouts (e.g., <code class="highlighter-rouge">&lt;div class="form-group row"&gt;</code>).</li>
      <li>Added new <code class="highlighter-rouge">.form-control-label</code> class to vertically center labels with <code class="highlighter-rouge">.form-control</code>s.</li>
    </ul>
  </li>
</ul>

<h3 id="buttons">Buttons</h3>

<ul>
  <li>Renamed <code class="highlighter-rouge">.btn-default</code> to <code class="highlighter-rouge">.btn-secondary</code>.</li>
  <li>Dropped the <code class="highlighter-rouge">.btn-xs</code> class entirely as <code class="highlighter-rouge">.btn-sm</code> is proportionally much smaller than v3’s.</li>
  <li>The <a href="http://getbootstrap.com/javascript/#buttons-methods">stateful button</a> feature of the <code class="highlighter-rouge">button.js</code> jQuery plugin has been dropped. This includes the <code class="highlighter-rouge">$().button(string)</code> and <code class="highlighter-rouge">$().button('reset')</code> methods. We advise using a tiny bit of custom JavaScript instead, which will have the benefit of behaving exactly the way you want it to.
    <ul>
      <li>Note that the other features of the plugin (button checkboxes, button radios, single-toggle buttons) have been retained in v4.</li>
    </ul>
  </li>
</ul>

<h3 id="button-group">Button group</h3>

<ul>
  <li>Dropped the <code class="highlighter-rouge">.btn-group-xs</code> class entirely given removal of <code class="highlighter-rouge">.btn-xs</code>.</li>
</ul>

<h3 id="dropdowns">Dropdowns</h3>

<ul>
  <li>Switched from parent selectors to singular classes for all components, modifiers, etc.</li>
  <li>Simplified dropdown styles to no longer ship with upward or downward facing arrows attached to the dropdown menu.</li>
  <li>Dropdowns can be built with <code class="highlighter-rouge">&lt;div&gt;</code>s or <code class="highlighter-rouge">&lt;ul&gt;</code>s now.</li>
  <li>Rebuilt dropdown styles and markup to provide easy, built-in support for <code class="highlighter-rouge">&lt;a&gt;</code> and <code class="highlighter-rouge">&lt;button&gt;</code> based dropdown items.</li>
  <li>Renamed <code class="highlighter-rouge">.divider</code> to <code class="highlighter-rouge">.dropdown-divider</code>.</li>
  <li>Dropdown items now require <code class="highlighter-rouge">.dropdown-item</code>.</li>
  <li>Dropdown toggles no longer require an explicit <code class="highlighter-rouge">&lt;span class="caret"&gt;&lt;/span&gt;</code>; this is now provided automatically via CSS’s <code class="highlighter-rouge">::after</code> on <code class="highlighter-rouge">.dropdown-toggle</code>.</li>
</ul>

<h3 id="grid-system-1">Grid system</h3>

<ul>
  <li>Added a new <code class="highlighter-rouge">~480px</code> grid breakpoint, meaning there are now five total tiers.</li>
  <li>Renamed the responsive grid modifier classes from <code class="highlighter-rouge">.col-{breakpoint}-{modifier}-{size}</code> to <code class="highlighter-rouge">.{modifier}-{breakpoint}-{size}</code> for simpler grid classes. For example, instead of <code class="highlighter-rouge">.col-md-3.col-md-push-9</code> it’s <code class="highlighter-rouge">col-md-3.push-md-9</code>.</li>
  <li>Overhauled the grid mixins to merge <code class="highlighter-rouge">make-col</code> and <code class="highlighter-rouge">make-col-span</code> into a single <code class="highlighter-rouge">make-col</code> mixin, thereby ensuring mixins and predefined classes utilize the same float/flex behaviors.</li>
  <li>Added flexbox utility classes for grid system and components.</li>
</ul>

<h3 id="list-groups">List groups</h3>

<ul>
  <li>Replaced <code class="highlighter-rouge">a.list-group-item</code> with an explicit class, <code class="highlighter-rouge">.list-group-item-action</code>, for styling link and button versions of list group items.</li>
</ul>

<h3 id="modal">Modal</h3>

<ul>
  <li>The <code class="highlighter-rouge">remote</code> option (which could be used to automatically load and inject external content into a modal) and the corresponding <code class="highlighter-rouge">loaded.bs.modal</code> event were removed. We recommend instead using client-side templating or a data binding framework, or calling <a href="http://api.jquery.com/load/">jQuery.load</a> yourself.</li>
</ul>

<h3 id="navs">Navs</h3>

<ul>
  <li>Dropped nearly all <code class="highlighter-rouge">&gt;</code> selectors for simpler styling via un-nested classes.</li>
  <li>Instead of HTML-specific selectors like <code class="highlighter-rouge">.nav &gt; li &gt; a</code>, we use separate classes for <code class="highlighter-rouge">.nav</code>s, <code class="highlighter-rouge">.nav-item</code>s, and <code class="highlighter-rouge">.nav-link</code>s. This makes your HTML more flexible while bringing along increased extensibility.</li>
</ul>

<h3 id="navbar">Navbar</h3>

<ul>
  <li>Dropped the <code class="highlighter-rouge">.navbar-form</code> class entirely. It’s no longer necessary.</li>
</ul>

<h3 id="pagination">Pagination</h3>

<ul>
  <li>Explicit classes (<code class="highlighter-rouge">.page-item</code>, <code class="highlighter-rouge">.page-link</code>) are now required on the descendants of <code class="highlighter-rouge">.pagination</code>s</li>
  <li>Dropped the <code class="highlighter-rouge">.pager</code> component entirely as it was little more than customized outline buttons.</li>
</ul>

<h3 id="breadcrumbs">Breadcrumbs</h3>

<ul>
  <li>An explicit class, <code class="highlighter-rouge">.breadcrumb-item</code>, is now required on the descendants of <code class="highlighter-rouge">.breadcrumb</code>s</li>
</ul>

<h3 id="labels-badges-and-tags">Labels, badges, and tags</h3>

<ul>
  <li>Renamed <code class="highlighter-rouge">.label</code> to <code class="highlighter-rouge">.tag</code> to disambiguate from the <code class="highlighter-rouge">&lt;label&gt;</code> element.</li>
  <li>Dropped the <code class="highlighter-rouge">.badge</code> component as it was nearly identical to labels/tags. Use the <code class="highlighter-rouge">.tag-pill</code> modifier together with the label component instead for that rounded look.</li>
  <li>Tags are no longer floated automatically in list groups and other components. Utility classes are now required for that.</li>
</ul>

<h3 id="panels-thumbnails-and-wells">Panels, thumbnails, and wells</h3>

<p>Dropped entirely for the new card component.</p>

<h4 id="panels">Panels</h4>

<ul>
  <li><code class="highlighter-rouge">.panel</code> to <code class="highlighter-rouge">.card</code></li>
  <li><code class="highlighter-rouge">.panel-default</code> removed and no replacement</li>
  <li><code class="highlighter-rouge">.panel-group</code> removed and no replacement. <code class="highlighter-rouge">.card-group</code> is not a replacement, it is different.</li>
  <li><code class="highlighter-rouge">.panel-heading</code> to <code class="highlighter-rouge">.card-header</code></li>
  <li><code class="highlighter-rouge">.panel-title</code> to <code class="highlighter-rouge">.card-header</code>. Depending on the desired look, you may also want to use <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/content/typography/#headings">heading elements or classes</a> (e.g. <code class="highlighter-rouge">&lt;h3&gt;</code>, <code class="highlighter-rouge">.h3</code>) or bold elements or classes (e.g. <code class="highlighter-rouge">&lt;strong&gt;</code>, <code class="highlighter-rouge">&lt;b&gt;</code>, <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/components/utilities/#font-weight-and-italics"><code class="highlighter-rouge">.font-weight-bold</code></a>). Note that <code class="highlighter-rouge">.card-title</code>, while similarly named, produces a different look than <code class="highlighter-rouge">.panel-title</code>.</li>
  <li><code class="highlighter-rouge">.panel-body</code> to <code class="highlighter-rouge">.card-block</code></li>
  <li><code class="highlighter-rouge">.panel-footer</code> to <code class="highlighter-rouge">.card-footer</code></li>
  <li><code class="highlighter-rouge">.panel-primary</code> to <code class="highlighter-rouge">.card-primary</code> and <code class="highlighter-rouge">.card-inverse</code> (or use <code class="highlighter-rouge">.bg-primary</code> on <code class="highlighter-rouge">.card-header</code>)</li>
  <li><code class="highlighter-rouge">.panel-success</code> to <code class="highlighter-rouge">.card-success</code> and <code class="highlighter-rouge">.card-inverse</code> (or use <code class="highlighter-rouge">.bg-success</code> on <code class="highlighter-rouge">.card-header</code>)</li>
  <li><code class="highlighter-rouge">.panel-info</code> to <code class="highlighter-rouge">.card-info</code> and <code class="highlighter-rouge">.card-inverse</code> (or use <code class="highlighter-rouge">.bg-info</code> on <code class="highlighter-rouge">.card-header</code>)</li>
  <li><code class="highlighter-rouge">.panel-warning</code> to <code class="highlighter-rouge">.card-warning</code> and <code class="highlighter-rouge">.card-inverse</code> (or use <code class="highlighter-rouge">.bg-warning</code> on <code class="highlighter-rouge">.card-header</code>)</li>
  <li><code class="highlighter-rouge">.panel-danger</code> to <code class="highlighter-rouge">.card-danger</code> and <code class="highlighter-rouge">.card-inverse</code> (or use <code class="highlighter-rouge">.bg-danger</code> on <code class="highlighter-rouge">.card-header</code>)</li>
</ul>

<h3 id="carousel">Carousel</h3>

<ul>
  <li>Renamed <code class="highlighter-rouge">.item</code> to <code class="highlighter-rouge">.carousel-item</code>.</li>
</ul>

<h3 id="utilities">Utilities</h3>

<ul>
  <li>Added <code class="highlighter-rouge">.pull-{xs,sm,md,lg,xl}-{left,right,none}</code> classes for responsive floats and removed <code class="highlighter-rouge">.pull-left</code> and <code class="highlighter-rouge">.pull-right</code> since they’re redundant to <code class="highlighter-rouge">.pull-xs-left</code> and <code class="highlighter-rouge">.pull-xs-right</code>.</li>
  <li>Added responsive variations to our text alignment classes <code class="highlighter-rouge">.text-{xs,sm,md,lg,xl}-{left,center,right}</code> and removed the redundant <code class="highlighter-rouge">.text-{left,center,right}</code> utilities as they are the same as the <code class="highlighter-rouge">xs</code> variation.</li>
  <li>Dropped <code class="highlighter-rouge">.center-block</code> for the new <code class="highlighter-rouge">.m-x-auto</code> class.</li>
</ul>

<h3 id="vendor-prefix-mixins">Vendor prefix mixins</h3>
<p>Bootstrap 3’s <a href="http://webdesign.about.com/od/css/a/css-vendor-prefixes.htm">vendor prefix</a> mixins, which were deprecated in v3.2.0, have been removed in Bootstrap 4. Since we use <a href="https://github.com/postcss/autoprefixer">Autoprefixer</a>, they’re no longer necessary.</p>

<p>Removed the following mixins: <code class="highlighter-rouge">animation</code>, <code class="highlighter-rouge">animation-delay</code>, <code class="highlighter-rouge">animation-direction</code>, <code class="highlighter-rouge">animation-duration</code>, <code class="highlighter-rouge">animation-fill-mode</code>, <code class="highlighter-rouge">animation-iteration-count</code>, <code class="highlighter-rouge">animation-name</code>, <code class="highlighter-rouge">animation-timing-function</code>, <code class="highlighter-rouge">backface-visibility</code>, <code class="highlighter-rouge">box-sizing</code>, <code class="highlighter-rouge">content-columns</code>, <code class="highlighter-rouge">hyphens</code>, <code class="highlighter-rouge">opacity</code>, <code class="highlighter-rouge">perspective</code>, <code class="highlighter-rouge">perspective-origin</code>, <code class="highlighter-rouge">rotate</code>, <code class="highlighter-rouge">rotateX</code>, <code class="highlighter-rouge">rotateY</code>, <code class="highlighter-rouge">scale</code>, <code class="highlighter-rouge">scaleX</code>, <code class="highlighter-rouge">scaleY</code>, <code class="highlighter-rouge">skew</code>, <code class="highlighter-rouge">transform-origin</code>, <code class="highlighter-rouge">transition-delay</code>, <code class="highlighter-rouge">transition-duration</code>, <code class="highlighter-rouge">transition-property</code>, <code class="highlighter-rouge">transition-timing-function</code>, <code class="highlighter-rouge">transition-transform</code>, <code class="highlighter-rouge">translate</code>, <code class="highlighter-rouge">translate3d</code>, <code class="highlighter-rouge">user-select</code></p>

<h2 id="documentation">Documentation</h2>

<p>Our documentation received an upgrade across the board as well. Here’s the low down:</p>

<ul>
  <li>We’re still using Jekyll, but we have custom plugins in the mix:
    <ul>
      <li><code class="highlighter-rouge">example.rb</code> is a fork of the default <code class="highlighter-rouge">highlight.rb</code> plugin, allowing for easier example-code handling.</li>
      <li><code class="highlighter-rouge">callout.rb</code> is a similar fork of that, but designed for our special docs callouts.</li>
    </ul>
  </li>
  <li>All docs content has been rewritten in Markdown (instead of HTML) for easier editing.</li>
  <li>Pages have been reorganized for simpler content and a more approachable hierarchy.</li>
  <li>We moved from regular CSS to SCSS to take full advantage of Bootstrap’s variables, mixins, and more.</li>
</ul>

<h2 id="whats-new">What’s new</h2>

<p>We’ve added new components and changed some existing ones. Here are the new or updated styles.</p>

<table>
  <thead>
    <tr>
      <th>Component</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Cards</td>
      <td>New, more flexible component to replace v3’s panels, thumbnails, and wells.</td>
    </tr>
    <tr>
      <td>New navbar</td>
      <td>Replaces the previous navbar with a new, simpler component.</td>
    </tr>
    <tr>
      <td>New progress bars</td>
      <td>Replaces the old <code class="highlighter-rouge">.progress</code> <code class="highlighter-rouge">&lt;div&gt;</code> with a real <code class="highlighter-rouge">&lt;progress&gt;</code> element.</td>
    </tr>
    <tr>
      <td>New table variants</td>
      <td>Adds <code class="highlighter-rouge">.table-inverse</code>, table head options, replaces <code class="highlighter-rouge">.table-condensed</code> with <code class="highlighter-rouge">.table-sm</code>, and <code class="highlighter-rouge">.table-reflow</code>.</td>
    </tr>
    <tr>
      <td>New utility classes</td>
      <td> </td>
    </tr>
  </tbody>
</table>

<p>TODO: audit new classes that didn’t exist in v3</p>

<h2 id="whats-removed">What’s removed</h2>
<p>The following components have been removed in v4.0.0.</p>

<table>
  <thead>
    <tr>
      <th>Component</th>
      <th>Removed from 3.x.x</th>
      <th>4.0.0 Equivalent</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Panels</td>
      <td> </td>
      <td>Cards</td>
    </tr>
    <tr>
      <td>Thumbnails</td>
      <td> </td>
      <td>Cards</td>
    </tr>
    <tr>
      <td>Wells</td>
      <td> </td>
      <td>Cards</td>
    </tr>
    <tr>
      <td>Justified navs</td>
      <td> </td>
      <td> </td>
    </tr>
  </tbody>
</table>

<p>TODO: audit classes in v3 that aren’t present in v4</p>

<h3 id="responsive-utilities">Responsive utilities</h3>

<p>All <code class="highlighter-rouge">@screen-</code> variables have been removed in v4.0.0. Use the <code class="highlighter-rouge">media-breakpoint-up()</code>, <code class="highlighter-rouge">media-breakpoint-down()</code>, or <code class="highlighter-rouge">media-breakpoint-only()</code> Sass mixins or the <code class="highlighter-rouge">$grid-breakpoints</code> Sass map instead.</p>

<p>The responsive utility classes have also been overhauled.</p>

<ul>
  <li>The <code class="highlighter-rouge">.hidden</code> and <code class="highlighter-rouge">.show</code> classes have been removed because they conflicted with jQuery’s <code class="highlighter-rouge">$(...).hide()</code> and <code class="highlighter-rouge">$(...).show()</code> methods. Instead, try toggling the <code class="highlighter-rouge">[hidden]</code> attribute, use inline styles like <code class="highlighter-rouge">style="display: none;"</code> and <code class="highlighter-rouge">style="display: block;"</code>, or toggle the <code class="highlighter-rouge">.invisible</code> class.</li>
  <li>The old classes (<code class="highlighter-rouge">.hidden-xs</code> <code class="highlighter-rouge">.hidden-sm</code> <code class="highlighter-rouge">.hidden-md</code> <code class="highlighter-rouge">.hidden-lg</code> <code class="highlighter-rouge">.visible-xs-block</code> <code class="highlighter-rouge">.visible-xs-inline</code> <code class="highlighter-rouge">.visible-xs-inline-block</code> <code class="highlighter-rouge">.visible-sm-block</code> <code class="highlighter-rouge">.visible-sm-inline</code> <code class="highlighter-rouge">.visible-sm-inline-block</code> <code class="highlighter-rouge">.visible-md-block</code> <code class="highlighter-rouge">.visible-md-inline</code> <code class="highlighter-rouge">.visible-md-inline-block</code> <code class="highlighter-rouge">.visible-lg-block</code> <code class="highlighter-rouge">.visible-lg-inline</code> <code class="highlighter-rouge">.visible-lg-inline-block</code>) are gone.</li>
  <li>They have been replaced by <code class="highlighter-rouge">.hidden-xs-up</code> <code class="highlighter-rouge">.hidden-xs-down</code> <code class="highlighter-rouge">.hidden-sm-up</code> <code class="highlighter-rouge">.hidden-sm-down</code> <code class="highlighter-rouge">.hidden-md-up</code> <code class="highlighter-rouge">.hidden-md-down</code> <code class="highlighter-rouge">.hidden-lg-up</code> <code class="highlighter-rouge">.hidden-lg-down</code>.</li>
  <li>The <code class="highlighter-rouge">.hidden-*-up</code> classes hide the element when the viewport is at the given breakpoint or larger (e.g. <code class="highlighter-rouge">.hidden-md-up</code> hides an element on medium, large, and extra-large devices).</li>
  <li>The <code class="highlighter-rouge">.hidden-*-down</code> classes hide the element when the viewport is at the given breakpoint or smaller (e.g. <code class="highlighter-rouge">.hidden-md-down</code> hides an element on extra-small, small, and medium devices).</li>
</ul>

<p>Rather than using explicit <code class="highlighter-rouge">.visible-*</code> classes, you make an element visible by simply not hiding it at that screen size. You can combine one <code class="highlighter-rouge">.hidden-*-up</code> class with one <code class="highlighter-rouge">.hidden-*-down</code> class to show an element only on a given interval of screen sizes (e.g. <code class="highlighter-rouge">.hidden-sm-down.hidden-xl-up</code> shows the element only on medium and large devices).</p>

<p>Note that the changes to the grid breakpoints in v4 means that you’ll need to go one breakpoint larger to achieve the same results (e.g. <code class="highlighter-rouge">.hidden-md</code> is more similar to <code class="highlighter-rouge">.hidden-lg-down</code> than to <code class="highlighter-rouge">.hidden-md-down</code>). The new responsive utility classes don’t attempt to accommodate less common cases where an element’s visibility can’t be expressed as a single contiguous range of viewport sizes; you will instead need to use custom CSS in such cases.</p>

<h2 id="misc-notes-to-prioritize">Misc notes to prioritize</h2>

<ul>
  <li>Removed the <code class="highlighter-rouge">min--moz-device-pixel-ratio</code> typo hack for retina media queries</li>
  <li>Change buttons’ <code class="highlighter-rouge">[disabled]</code> to <code class="highlighter-rouge">:disabled</code> as IE9+ supports <code class="highlighter-rouge">:disabled</code>. However <code class="highlighter-rouge">fieldset[disabled]</code> is still necessary because <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/fieldset#Browser_compatibility">native disabled fieldsets are still buggy in IE11</a>.</li>
</ul>

<p>TODO: audit list of stuff in v3 that was marked as deprecated</p>

<h2 id="additional-notes">Additional notes</h2>
<ul>
  <li>Removed support for styled nested tables (for now)</li>
</ul>

        </div>
      </div>
    </div>

    <footer class="bd-footer text-muted">
  <div class="container">
    <ul class="bd-footer-links">
      <li><a href="https://github.com/twbs/bootstrap">GitHub</a></li>
      <li><a href="https://twitter.com/getbootstrap">Twitter</a></li>
      <li><a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/examples/">Examples</a></li>
      <li><a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/about/history/">About</a></li>
    </ul>
    <p>Designed and built with all the love in the world by <a href="https://twitter.com/mdo" target="_blank">@mdo</a> and <a href="https://twitter.com/fat" target="_blank">@fat</a>. Maintained by the <a href="https://github.com/orgs/twbs/people">core team</a> with the help of <a href="https://github.com/twbs/bootstrap/graphs/contributors">our contributors</a>.</p>
    <p>Currently v4.0.0-alpha.4. Code licensed <a rel="license" href="https://github.com/twbs/bootstrap/blob/master/LICENSE" target="_blank">MIT</a>, docs <a rel="license" href="https://creativecommons.org/licenses/by/3.0/" target="_blank">CC BY 3.0</a>.</p>
  </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/assets/js/vendor/jquery.min.js"><\/script>')</script>

<script src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/assets/js/vendor/tether.min.js"></script>


  <script src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/dist/js/bootstrap.js"></script>



  
    <script src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/assets/js/vendor/anchor.min.js"></script>
  
    <script src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/assets/js/vendor/clipboard.min.js"></script>
  
    <script src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/assets/js/vendor/holder.min.js"></script>
  
    <script src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/assets/js/src/application.js"></script>
  


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/assets/js/ie-emulation-modes-warning.js"></script>


<script src="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/assets/js/vendor/jekyll-search.min.js"></script>

<script>
SimpleJekyllSearch.init({
  searchInput: document.getElementById('search-input'),
  resultsContainer: document.getElementById('search-results'),
  searchResultTemplate: '<a class="dropdown-item" href="{url}">{title}</a>',
  noResultsText: '<div class="dropdown-item no-results">Sorry, there are no results for that search.</div>',
  json: '/admin/tool/themetester/docs/4.0.0-alpha.4/search.json'
})
</script>


<script>
Holder.addTheme('gray', {
  bg: '#777',
  fg: 'rgba(255,255,255,.75)',
  font: 'Helvetica',
  fontweight: 'normal'
})
</script>

  </body>
</html>

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
$PAGE->set_heading("Grid system");
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
    
        <a class="bd-toc-link" href="/admin/tool/themetester/docs/4.0.0-alpha.4/getting-started/introduction">
      
        Getting started
      </a>

      <ul class="nav bd-sidenav">
        
          
          
          

          

          <li class="">
            <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/getting-started/introduction">
              Introduction
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/getting-started/download">
              Download
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/getting-started/contents">
              Contents
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/getting-started/browsers-devices">
              Browsers & devices
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/getting-started/javascript">
              JavaScript
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/getting-started/options">
              Options
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/getting-started/flexbox">
              Flexbox
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/getting-started/build-tools">
              Build tools
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/getting-started/best-practices">
              Best practices
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/getting-started/accessibility">
              Accessibility
            </a>

            
          </li>
        
      </ul>
    </div>
  
  
  
  

  

  <div class="bd-toc-item active">
    
        <a class="bd-toc-link" href="/admin/tool/themetester/docs/4.0.0-alpha.4/layout/overview">
      
        Layout
      </a>

      <ul class="nav bd-sidenav">
        
          
          
          

          

          <li class="">
            <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/layout/overview">
              Overview
            </a>

            
          </li>
        
          
          
          

          

          <li class="active bd-sidenav-active">
            <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/layout/grid">
              Grid
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/layout/flexbox-grid">
              Flexbox grid
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/layout/media-object">
              Media object
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/layout/responsive-utilities">
              Responsive utilities
            </a>

            
          </li>
        
      </ul>
    </div>
  
  
  
  

  

  <div class="bd-toc-item ">
    
        <a class="bd-toc-link" href="/admin/tool/themetester/docs/4.0.0-alpha.4/content/reboot">
      
        Content
      </a>

      <ul class="nav bd-sidenav">
        
          
          
          

          

          <li class="">
            <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/content/reboot">
              Reboot
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/content/typography">
              Typography
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/content/code">
              Code
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/content/images">
              Images
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/content/tables">
              Tables
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/content/figures">
              Figures
            </a>

            
          </li>
        
      </ul>
    </div>
  
  
  
  

  

  <div class="bd-toc-item ">
    
        <a class="bd-toc-link" href="/admin/tool/themetester/docs/4.0.0-alpha.4/components/alerts">
      
        Components
      </a>

      <ul class="nav bd-sidenav">
        
          
          
          

          

          <li class="">
            <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/components/alerts">
              Alerts
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/components/breadcrumb">
              Breadcrumb
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/components/buttons">
              Buttons
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/components/button-group">
              Button group
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/components/card">
              Card
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/components/carousel">
              Carousel
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/components/collapse">
              Collapse
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/components/dropdowns">
              Dropdowns
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/components/forms">
              Forms
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/components/input-group">
              Input group
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/components/jumbotron">
              Jumbotron
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/components/list-group">
              List group
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/components/modal">
              Modal
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/components/navs">
              Navs
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/components/navbar">
              Navbar
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/components/pagination">
              Pagination
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/components/popovers">
              Popovers
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/components/progress">
              Progress
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/components/scrollspy">
              Scrollspy
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/components/tag">
              Tag
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/components/tooltips">
              Tooltips
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/components/utilities">
              Utilities
            </a>

            
          </li>
        
      </ul>
    </div>
  
  
  
  

  

  <div class="bd-toc-item ">
    
        <a class="bd-toc-link" href="/admin/tool/themetester/docs/4.0.0-alpha.4/about/history">
      
        About
      </a>

      <ul class="nav bd-sidenav">
        
          
          
          

          

          <li class="">
            <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/about/history">
              History
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/about/team">
              Team
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/about/brand">
              Brand
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/about/license">
              License
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
            <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/about/translations">
              Translations
            </a>

            
          </li>
        
      </ul>
    </div>
  
  
  
  

  

  <div class="bd-toc-item ">
    
        <a class="bd-toc-link" href="/admin/tool/themetester/docs/4.0.0-alpha.4/migration/">
      
        Migration
      </a>

      <ul class="nav bd-sidenav">
        
      </ul>
    </div>
  
</nav>

        </div>
        <div class="col-xs-12 col-md-9 pull-md-3 bd-content">
          <h1 class="bd-title" id="content">Grid system</h1>
          <p>Bootstrap includes a powerful mobile-first grid system for building layouts of all shapes and sizes. It’s based on a 12 column layout and has multiple tiers, one for each <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/layout/overview/#responsive-breakpoints">media query range</a>. You can use it with Sass mixins or our predefined classes.</p>

<h2 id="contents">Contents</h2>

<ul id="markdown-toc">
  <li><a href="#contents" id="markdown-toc-contents">Contents</a></li>
  <li><a href="#how-it-works" id="markdown-toc-how-it-works">How it works</a></li>
  <li><a href="#quick-start-example" id="markdown-toc-quick-start-example">Quick start example</a></li>
  <li><a href="#grid-options" id="markdown-toc-grid-options">Grid options</a></li>
  <li><a href="#sass-mixins" id="markdown-toc-sass-mixins">Sass mixins</a>    <ul>
      <li><a href="#variables" id="markdown-toc-variables">Variables</a></li>
      <li><a href="#mixins" id="markdown-toc-mixins">Mixins</a></li>
      <li><a href="#example-usage" id="markdown-toc-example-usage">Example usage</a></li>
    </ul>
  </li>
  <li><a href="#predefined-classes" id="markdown-toc-predefined-classes">Predefined classes</a>    <ul>
      <li><a href="#example-stacked-to-horizontal" id="markdown-toc-example-stacked-to-horizontal">Example: Stacked-to-horizontal</a></li>
      <li><a href="#example-mobile-and-desktop" id="markdown-toc-example-mobile-and-desktop">Example: Mobile and desktop</a></li>
      <li><a href="#example-mobile-tablet-desktop" id="markdown-toc-example-mobile-tablet-desktop">Example: Mobile, tablet, desktop</a></li>
      <li><a href="#example-column-wrapping" id="markdown-toc-example-column-wrapping">Example: Column wrapping</a></li>
      <li><a href="#example-responsive-column-resets" id="markdown-toc-example-responsive-column-resets">Example: Responsive column resets</a></li>
      <li><a href="#example-offsetting-columns" id="markdown-toc-example-offsetting-columns">Example: Offsetting columns</a></li>
      <li><a href="#example-nesting-columns" id="markdown-toc-example-nesting-columns">Example: Nesting columns</a></li>
      <li><a href="#example-column-ordering" id="markdown-toc-example-column-ordering">Example: Column ordering</a></li>
    </ul>
  </li>
  <li><a href="#customizing-the-grid" id="markdown-toc-customizing-the-grid">Customizing the grid</a>    <ul>
      <li><a href="#columns-and-gutters" id="markdown-toc-columns-and-gutters">Columns and gutters</a></li>
      <li><a href="#grid-tiers" id="markdown-toc-grid-tiers">Grid tiers</a></li>
    </ul>
  </li>
</ul>

<h2 id="how-it-works">How it works</h2>

<p>At a high level, here’s how the grid system works:</p>

<ul>
  <li>There are three major components—containers, rows, and columns.</li>
  <li>Containers—<code class="highlighter-rouge">.container</code> for fixed width or <code class="highlighter-rouge">.container-fluid</code> for full width—center your site’s contents and help align your grid content.</li>
  <li>Rows are horizontal groups of columns that ensure your columns are lined up properly.</li>
  <li>Content should be placed within columns, and only columns may be immediate children of rows.</li>
  <li>Column classes indicate the number of columns you’d like to use out of the possible 12 per row. So if you want three equal-width columns, you’d use <code class="highlighter-rouge">.col-sm-4</code>.</li>
  <li>Column <code class="highlighter-rouge">width</code>s are set in percentages, so they’re always fluid and sized relative to their parent element.</li>
  <li>Columns have horizontal <code class="highlighter-rouge">padding</code> to create the gutters between individual columns.</li>
  <li>There are five grid tiers, one for each <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/layout/overview/#responsive-breakpoints">responsive breakpoint</a>: extra small, small, medium, large, and extra large.</li>
  <li>Grid tiers are based on minimum widths, meaning they apply to that one tier and all those above it (e.g., <code class="highlighter-rouge">.col-sm-4</code> applies to small, medium, large, and extra large devices).</li>
  <li>You can use predefined grid classes or Sass mixins for more semantic markup.</li>
</ul>

<p>Sounds good? Great, let’s move on to seeing all that in an example.</p>

<h2 id="quick-start-example">Quick start example</h2>

<p>If you’re using Bootstrap’s compiled CSS, this the example you’ll want to start with.</p>

<div class="bd-example" data-example-id="">
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      One of three columns
    </div>
    <div class="col-sm-4">
      One of three columns
    </div>
    <div class="col-sm-4">
      One of three columns
    </div>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-4"</span><span class="nt">&gt;</span>
      One of three columns
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-4"</span><span class="nt">&gt;</span>
      One of three columns
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-4"</span><span class="nt">&gt;</span>
      One of three columns
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<p>The above example creates three equal-width columns on small, medium, large, and extra large devices using our <a href="#predefined-classes">predefined grid classes</a>. Those columns are centered in the page with the parent <code class="highlighter-rouge">.container</code>.</p>

<h2 id="grid-options">Grid options</h2>

<p>While Bootstrap uses <code class="highlighter-rouge">em</code>s or <code class="highlighter-rouge">rem</code>s for defining most sizes, <code class="highlighter-rouge">px</code>s are used for grid breakpoints and container widths. This is because the viewport width is in pixels and does not change with the <a href="https://drafts.csswg.org/mediaqueries-3/#units">font size</a>.</p>

<p>See how aspects of the Bootstrap grid system work across multiple devices with a handy table.</p>

<div class="table-responsive">
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th></th>
        <th class="text-xs-center">
          Extra small<br />
          <small>&lt;544px</small>
        </th>
        <th class="text-xs-center">
          Small<br />
          <small>&ge;544px</small>
        </th>
        <th class="text-xs-center">
          Medium<br />
          <small>&ge;768px</small>
        </th>
        <th class="text-xs-center">
          Large<br />
          <small>&ge;992px</small>
        </th>
        <th class="text-xs-center">
          Extra large<br />
          <small>&ge;1200px</small>
        </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th class="text-nowrap" scope="row">Grid behavior</th>
        <td>Horizontal at all times</td>
        <td colspan="4">Collapsed to start, horizontal above breakpoints</td>
      </tr>
      <tr>
        <th class="text-nowrap" scope="row">Container width</th>
        <td>None (auto)</td>
        <td>576px</td>
        <td>720px</td>
        <td>940px</td>
        <td>1140px</td>
      </tr>
      <tr>
        <th class="text-nowrap" scope="row">Class prefix</th>
        <td><code>.col-xs-</code></td>
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
        <td colspan="5">1.875rem / 30px (15px on each side of a column)</td>
      </tr>
      <tr>
        <th class="text-nowrap" scope="row">Nestable</th>
        <td colspan="5">Yes</td>
      </tr>
      <tr>
        <th class="text-nowrap" scope="row">Offsets</th>
        <td colspan="5">Yes</td>
      </tr>
      <tr>
        <th class="text-nowrap" scope="row">Column ordering</th>
        <td colspan="5">Yes</td>
      </tr>
    </tbody>
  </table>
</div>

<h2 id="sass-mixins">Sass mixins</h2>

<p>When using Bootstrap’s source Sass files, you have the option of using Sass variables and mixins to create custom, semantic, and responsive page layouts. Our <a href="#predefined-classes">predefined grid classes</a> use these same variables and mixins to provide a whole suite of ready-to-use classes for fast responsive layouts.</p>

<h3 id="variables">Variables</h3>

<p>Variables and maps determine the number of columns, the gutter width, and the media query point at which to begin floating columns. We use these to generate the predefined grid classes documented above, as well as for the custom mixins listed below.</p>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="nv">$grid-columns</span><span class="p">:</span>      <span class="m">12</span><span class="p">;</span>
<span class="nv">$grid-gutter-width</span><span class="p">:</span> <span class="m">30px</span><span class="p">;</span>

<span class="nv">$grid-breakpoints</span><span class="p">:</span> <span class="p">(</span>
  <span class="o">//</span> <span class="n">Extra</span> <span class="n">small</span> <span class="n">screen</span> <span class="o">/</span> <span class="n">phone</span>
  <span class="n">xs</span><span class="o">:</span> <span class="m">0</span><span class="o">,</span>
  <span class="o">//</span> <span class="n">Small</span> <span class="n">screen</span> <span class="o">/</span> <span class="n">phone</span>
  <span class="n">sm</span><span class="o">:</span> <span class="m">544px</span><span class="o">,</span>
  <span class="o">//</span> <span class="n">Medium</span> <span class="n">screen</span> <span class="o">/</span> <span class="n">tablet</span>
  <span class="n">md</span><span class="o">:</span> <span class="m">768px</span><span class="o">,</span>
  <span class="o">//</span> <span class="n">Large</span> <span class="n">screen</span> <span class="o">/</span> <span class="n">desktop</span>
  <span class="n">lg</span><span class="o">:</span> <span class="m">992px</span><span class="o">,</span>
  <span class="o">//</span> <span class="n">Extra</span> <span class="nb">large</span> <span class="n">screen</span> <span class="o">/</span> <span class="n">wide</span> <span class="n">desktop</span>
  <span class="n">xl</span><span class="o">:</span> <span class="m">1200px</span>
<span class="p">);</span>

<span class="nv">$container-max-widths</span><span class="p">:</span> <span class="p">(</span>
  <span class="n">sm</span><span class="o">:</span> <span class="m">576px</span><span class="o">,</span>
  <span class="n">md</span><span class="o">:</span> <span class="m">720px</span><span class="o">,</span>
  <span class="n">lg</span><span class="o">:</span> <span class="m">940px</span><span class="o">,</span>
  <span class="n">xl</span><span class="o">:</span> <span class="m">1140px</span>
<span class="p">);</span></code></pre></figure>

<h3 id="mixins">Mixins</h3>

<p>Mixins are used in conjunction with the grid variables to generate semantic CSS for individual grid columns.</p>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="c1">// Creates a wrapper for a series of columns
</span><span class="k">@mixin</span> <span class="nf">make-row</span><span class="p">(</span><span class="nv">$gutter</span><span class="o">:</span> <span class="nv">$grid-gutter-width</span><span class="p">)</span> <span class="p">{</span>
  <span class="k">@if</span> <span class="nv">$enable-flex</span> <span class="p">{</span>
    <span class="nl">display</span><span class="p">:</span> <span class="n">flex</span><span class="p">;</span>
    <span class="nl">flex-wrap</span><span class="p">:</span> <span class="n">wrap</span><span class="p">;</span>
  <span class="p">}</span> <span class="k">@else</span> <span class="p">{</span>
    <span class="k">@include</span> <span class="nd">clearfix</span><span class="p">();</span>
  <span class="p">}</span>
  <span class="nl">margin-left</span><span class="p">:</span>  <span class="p">(</span><span class="nv">$gutter</span> <span class="o">/</span> <span class="m">-2</span><span class="p">);</span>
  <span class="nl">margin-right</span><span class="p">:</span> <span class="p">(</span><span class="nv">$gutter</span> <span class="o">/</span> <span class="m">-2</span><span class="p">);</span>
<span class="p">}</span>

<span class="c1">// Make the element grid-ready (applying everything but the width)
</span><span class="k">@mixin</span> <span class="nf">make-col-ready</span><span class="p">(</span><span class="nv">$size</span><span class="o">,</span> <span class="nv">$columns</span><span class="o">:</span> <span class="nv">$grid-columns</span><span class="o">,</span> <span class="nv">$gutter</span><span class="o">:</span> <span class="nv">$grid-gutter-width</span><span class="p">)</span> <span class="p">{</span>
  <span class="nl">position</span><span class="p">:</span> <span class="nb">relative</span><span class="p">;</span>
  <span class="nl">min-height</span><span class="p">:</span> <span class="m">1px</span><span class="p">;</span> <span class="c1">// Prevent collapsing
</span>  <span class="nl">padding-right</span><span class="p">:</span> <span class="p">(</span><span class="nv">$gutter</span> <span class="o">/</span> <span class="m">2</span><span class="p">);</span>
  <span class="nl">padding-left</span><span class="p">:</span>  <span class="p">(</span><span class="nv">$gutter</span> <span class="o">/</span> <span class="m">2</span><span class="p">);</span>

  <span class="c1">// Prevent columns from becoming too narrow when at smaller grid tiers by
</span>  <span class="c1">// always setting `width: 100%;`. This works because we use `flex` values
</span>  <span class="c1">// later on to override this initial width.
</span>  <span class="k">@if</span> <span class="nv">$enable-flex</span> <span class="p">{</span>
    <span class="nl">width</span><span class="p">:</span> <span class="m">100%</span><span class="p">;</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="k">@mixin</span> <span class="nf">make-col</span><span class="p">(</span><span class="nv">$size</span><span class="o">,</span> <span class="nv">$columns</span><span class="o">:</span> <span class="nv">$grid-columns</span><span class="o">,</span> <span class="nv">$gutter</span><span class="o">:</span> <span class="nv">$grid-gutter-width</span><span class="p">)</span> <span class="p">{</span>
  <span class="k">@if</span> <span class="nv">$enable-flex</span> <span class="p">{</span>
    <span class="nl">flex</span><span class="p">:</span> <span class="m">0</span> <span class="m">0</span> <span class="nf">percentage</span><span class="p">(</span><span class="nv">$size</span> <span class="o">/</span> <span class="nv">$columns</span><span class="p">);</span>
    <span class="c1">// Add a `max-width` to ensure content within each column does not blow out
</span>    <span class="c1">// the width of the column. Applies to IE10+ and Firefox. Chrome and Safari
</span>    <span class="c1">// do not appear to require this.
</span>    <span class="nl">max-width</span><span class="p">:</span> <span class="nf">percentage</span><span class="p">(</span><span class="nv">$size</span> <span class="o">/</span> <span class="nv">$columns</span><span class="p">);</span>
  <span class="p">}</span> <span class="k">@else</span> <span class="p">{</span>
    <span class="nl">float</span><span class="p">:</span> <span class="nb">left</span><span class="p">;</span>
    <span class="nl">width</span><span class="p">:</span> <span class="nf">percentage</span><span class="p">(</span><span class="nv">$size</span> <span class="o">/</span> <span class="nv">$columns</span><span class="p">);</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="c1">// Get fancy by offsetting, or changing the sort order
</span><span class="k">@mixin</span> <span class="nf">make-col-offset</span><span class="p">(</span><span class="nv">$columns</span><span class="p">)</span> <span class="p">{</span>
  <span class="nl">margin-left</span><span class="p">:</span> <span class="nf">percentage</span><span class="p">((</span><span class="nv">$columns</span> <span class="o">/</span> <span class="nv">$grid-columns</span><span class="p">));</span>
<span class="p">}</span>
<span class="k">@mixin</span> <span class="nf">make-col-push</span><span class="p">(</span><span class="nv">$columns</span><span class="p">)</span> <span class="p">{</span>
  <span class="nl">left</span><span class="p">:</span> <span class="nf">percentage</span><span class="p">((</span><span class="nv">$columns</span> <span class="o">/</span> <span class="nv">$grid-columns</span><span class="p">));</span>
<span class="p">}</span>
<span class="k">@mixin</span> <span class="nf">make-col-pull</span><span class="p">(</span><span class="nv">$columns</span><span class="p">)</span> <span class="p">{</span>
  <span class="nl">right</span><span class="p">:</span> <span class="nf">percentage</span><span class="p">((</span><span class="nv">$columns</span> <span class="o">/</span> <span class="nv">$grid-columns</span><span class="p">));</span>
<span class="p">}</span></code></pre></figure>

<h3 id="example-usage">Example usage</h3>

<p>You can modify the variables to your own custom values, or just use the mixins with their default values. Here’s an example of using the default settings to create a two-column layout with a gap between.</p>

<p>See it in action in <a href="http://jsbin.com/ruxona/edit">this rendered example</a>.</p>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="nc">.container</span> <span class="p">{</span>
  <span class="nl">max-width</span><span class="p">:</span> <span class="m">60em</span><span class="p">;</span>
  <span class="k">@include</span> <span class="nd">make-container</span><span class="p">();</span>
<span class="p">}</span>
<span class="nc">.row</span> <span class="p">{</span>
  <span class="k">@include</span> <span class="nd">make-row</span><span class="p">();</span>
<span class="p">}</span>
<span class="nc">.content-main</span> <span class="p">{</span>
  <span class="k">@include</span> <span class="nd">make-col-ready</span><span class="p">();</span>

  <span class="k">@media</span> <span class="p">(</span><span class="n">max-width</span><span class="o">:</span> <span class="m">32em</span><span class="p">)</span> <span class="p">{</span>
    <span class="k">@include</span> <span class="nd">make-col</span><span class="p">(</span><span class="m">6</span><span class="p">);</span>
  <span class="p">}</span>
  <span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="m">32</span><span class="mi">.1em</span><span class="p">)</span> <span class="p">{</span>
    <span class="k">@include</span> <span class="nd">make-col</span><span class="p">(</span><span class="m">8</span><span class="p">);</span>
  <span class="p">}</span>
<span class="p">}</span>
<span class="nc">.content-secondary</span> <span class="p">{</span>
  <span class="k">@include</span> <span class="nd">make-col-ready</span><span class="p">();</span>

  <span class="k">@media</span> <span class="p">(</span><span class="n">max-width</span><span class="o">:</span> <span class="m">32em</span><span class="p">)</span> <span class="p">{</span>
    <span class="k">@include</span> <span class="nd">make-col</span><span class="p">(</span><span class="m">6</span><span class="p">);</span>
  <span class="p">}</span>
  <span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="m">32</span><span class="mi">.1em</span><span class="p">)</span> <span class="p">{</span>
    <span class="k">@include</span> <span class="nd">make-col</span><span class="p">(</span><span class="m">4</span><span class="p">);</span>
  <span class="p">}</span>
<span class="p">}</span></code></pre></figure>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"content-main"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"content-secondary"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>

<h2 id="predefined-classes">Predefined classes</h2>

<p>In addition to our semantic mixins, Bootstrap includes an extensive set of prebuilt classes for quickly creating grid columns. It includes options for device-based column sizing, reordering columns, and more.</p>

<h3 id="example-stacked-to-horizontal">Example: Stacked-to-horizontal</h3>

<p>Using a single set of <code class="highlighter-rouge">.col-md-*</code> grid classes, you can create a basic grid system that starts out stacked on mobile devices and tablet devices (the extra small to small range) before becoming horizontal on desktop (medium) devices. Place grid columns within any <code class="highlighter-rouge">.row</code>.</p>

<div class="bd-example-row">

<div class="bd-example" data-example-id="">
<div class="row">
  <div class="col-md-1">col-md-1</div>
  <div class="col-md-1">col-md-1</div>
  <div class="col-md-1">col-md-1</div>
  <div class="col-md-1">col-md-1</div>
  <div class="col-md-1">col-md-1</div>
  <div class="col-md-1">col-md-1</div>
  <div class="col-md-1">col-md-1</div>
  <div class="col-md-1">col-md-1</div>
  <div class="col-md-1">col-md-1</div>
  <div class="col-md-1">col-md-1</div>
  <div class="col-md-1">col-md-1</div>
  <div class="col-md-1">col-md-1</div>
</div>
<div class="row">
  <div class="col-md-8">col-md-8</div>
  <div class="col-md-4">col-md-4</div>
</div>
<div class="row">
  <div class="col-md-4">col-md-4</div>
  <div class="col-md-4">col-md-4</div>
  <div class="col-md-4">col-md-4</div>
</div>
<div class="row">
  <div class="col-md-6">col-md-6</div>
  <div class="col-md-6">col-md-6</div>
</div>
</div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>col-md-1<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>col-md-1<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>col-md-1<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>col-md-1<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>col-md-1<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>col-md-1<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>col-md-1<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>col-md-1<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>col-md-1<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>col-md-1<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>col-md-1<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span class="nt">&gt;</span>col-md-1<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-8"</span><span class="nt">&gt;</span>col-md-8<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4"</span><span class="nt">&gt;</span>col-md-4<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4"</span><span class="nt">&gt;</span>col-md-4<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4"</span><span class="nt">&gt;</span>col-md-4<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4"</span><span class="nt">&gt;</span>col-md-4<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-6"</span><span class="nt">&gt;</span>col-md-6<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-6"</span><span class="nt">&gt;</span>col-md-6<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

</div>

<h3 id="example-mobile-and-desktop">Example: Mobile and desktop</h3>

<p>Don’t want your columns to simply stack in smaller devices? Use the extra small and medium device grid classes by adding <code class="highlighter-rouge">.col-xs-*</code> and <code class="highlighter-rouge">.col-md-*</code> to your columns. See the example below for a better idea of how it all works.</p>

<div class="bd-example-row">

<div class="bd-example" data-example-id="">
<!-- Stack the columns on mobile by making one full-width and the other half-width -->
<div class="row">
  <div class="col-xs-12 col-md-8">.col-xs-12 .col-md-8</div>
  <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
</div>

<!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
<div class="row">
  <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
  <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
  <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
</div>

<!-- Columns are always 50% wide, on mobile and desktop -->
<div class="row">
  <div class="col-xs-6">.col-xs-6</div>
  <div class="col-xs-6">.col-xs-6</div>
</div>
</div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- Stack the columns on mobile by making one full-width and the other half-width --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-12 col-md-8"</span><span class="nt">&gt;</span>.col-xs-12 .col-md-8<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-md-4"</span><span class="nt">&gt;</span>.col-xs-6 .col-md-4<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="c">&lt;!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-md-4"</span><span class="nt">&gt;</span>.col-xs-6 .col-md-4<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-md-4"</span><span class="nt">&gt;</span>.col-xs-6 .col-md-4<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-md-4"</span><span class="nt">&gt;</span>.col-xs-6 .col-md-4<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="c">&lt;!-- Columns are always 50% wide, on mobile and desktop --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6"</span><span class="nt">&gt;</span>.col-xs-6<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6"</span><span class="nt">&gt;</span>.col-xs-6<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

</div>

<h3 id="example-mobile-tablet-desktop">Example: Mobile, tablet, desktop</h3>

<p>Build on the previous example by creating even more dynamic and powerful layouts with tablet <code class="highlighter-rouge">.col-sm-*</code> classes.</p>

<div class="bd-example-row">

<div class="bd-example" data-example-id="">
<div class="row">
  <div class="col-xs-12 col-sm-6 col-md-8">.col-xs-12 .col-sm-6 .col-md-8</div>
  <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
</div>
<div class="row">
  <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
  <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
  <!-- Optional: clear the XS cols if their content doesn't match in height -->
  <div class="clearfix hidden-sm-up"></div>
  <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
</div>
</div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-12 col-sm-6 col-md-8"</span><span class="nt">&gt;</span>.col-xs-12 .col-sm-6 .col-md-8<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-md-4"</span><span class="nt">&gt;</span>.col-xs-6 .col-md-4<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-sm-4"</span><span class="nt">&gt;</span>.col-xs-6 .col-sm-4<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-sm-4"</span><span class="nt">&gt;</span>.col-xs-6 .col-sm-4<span class="nt">&lt;/div&gt;</span>
  <span class="c">&lt;!-- Optional: clear the XS cols if their content doesn't match in height --&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"clearfix hidden-sm-up"</span><span class="nt">&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-sm-4"</span><span class="nt">&gt;</span>.col-xs-6 .col-sm-4<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

</div>

<h3 id="example-column-wrapping">Example: Column wrapping</h3>

<p>If more than 12 columns are placed within a single row, each group of extra columns will, as one unit, wrap onto a new line.</p>

<div class="bd-example-row">

<div class="bd-example" data-example-id="">
<div class="row">
  <div class="col-xs-9">.col-xs-9</div>
  <div class="col-xs-4">.col-xs-4<br />Since 9 + 4 = 13 &gt; 12, this 4-column-wide div gets wrapped onto a new line as one contiguous unit.</div>
  <div class="col-xs-6">.col-xs-6<br />Subsequent columns continue along the new line.</div>
</div>
</div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-9"</span><span class="nt">&gt;</span>.col-xs-9<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-4"</span><span class="nt">&gt;</span>.col-xs-4<span class="nt">&lt;br&gt;</span>Since 9 + 4 = 13 <span class="ni">&amp;gt;</span> 12, this 4-column-wide div gets wrapped onto a new line as one contiguous unit.<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6"</span><span class="nt">&gt;</span>.col-xs-6<span class="nt">&lt;br&gt;</span>Subsequent columns continue along the new line.<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

</div>

<h3 id="example-responsive-column-resets">Example: Responsive column resets</h3>

<p>With the four tiers of grids available you’re bound to run into issues where, at certain breakpoints, your columns don’t clear quite right as one is taller than the other. To fix that, use a combination of a <code class="highlighter-rouge">.clearfix</code> and our <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/layout/responsive-utilities/">responsive utility classes</a>.</p>

<div class="bd-example-row">

<div class="bd-example" data-example-id="">
<div class="row">
  <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
  <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>

  <!-- Add the extra clearfix for only the required viewport -->
  <div class="clearfix hidden-sm-up"></div>

  <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
  <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
</div>
</div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-sm-3"</span><span class="nt">&gt;</span>.col-xs-6 .col-sm-3<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-sm-3"</span><span class="nt">&gt;</span>.col-xs-6 .col-sm-3<span class="nt">&lt;/div&gt;</span>

  <span class="c">&lt;!-- Add the extra clearfix for only the required viewport --&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"clearfix hidden-sm-up"</span><span class="nt">&gt;&lt;/div&gt;</span>

  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-sm-3"</span><span class="nt">&gt;</span>.col-xs-6 .col-sm-3<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-sm-3"</span><span class="nt">&gt;</span>.col-xs-6 .col-sm-3<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

</div>

<p>In addition to column clearing at responsive breakpoints, you may need to <strong>reset offsets, pushes, or pulls</strong>. See this in action in <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/examples/grid/">the grid example</a>.</p>

<div class="bd-example-row">

<div class="bd-example" data-example-id="">
<div class="row">
  <div class="col-sm-5 col-md-6">.col-sm-5 .col-md-6</div>
  <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0">.col-sm-5 .offset-sm-2 .col-md-6 .offset-md-0</div>
</div>

<div class="row">
  <div class="col-sm-6 col-md-5 col-lg-6">.col.col-sm-6.col-md-5.col-lg-6</div>
  <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">.col-sm-6 .col-md-5 .offset-md-2 .col-lg-6 .offset-lg-0</div>
</div>
</div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-5 col-md-6"</span><span class="nt">&gt;</span>.col-sm-5 .col-md-6<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-5 offset-sm-2 col-md-6 offset-md-0"</span><span class="nt">&gt;</span>.col-sm-5 .offset-sm-2 .col-md-6 .offset-md-0<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-6 col-md-5 col-lg-6"</span><span class="nt">&gt;</span>.col.col-sm-6.col-md-5.col-lg-6<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0"</span><span class="nt">&gt;</span>.col-sm-6 .col-md-5 .offset-md-2 .col-lg-6 .offset-lg-0<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

</div>

<h3 id="example-offsetting-columns">Example: Offsetting columns</h3>

<p>Move columns to the right using <code class="highlighter-rouge">.offset-md-*</code> classes. These classes increase the left margin of a column by <code class="highlighter-rouge">*</code> columns. For example, <code class="highlighter-rouge">.offset-md-4</code> moves <code class="highlighter-rouge">.col-md-4</code> over four columns.</p>

<div class="bd-example-row">

<div class="bd-example" data-example-id="">
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

<h3 id="example-nesting-columns">Example: Nesting columns</h3>

<p>To nest your content with the default grid, add a new <code class="highlighter-rouge">.row</code> and set of <code class="highlighter-rouge">.col-sm-*</code> columns within an existing <code class="highlighter-rouge">.col-sm-*</code> column. Nested rows should include a set of columns that add up to 12 or fewer (it is not required that you use all 12 available columns).</p>

<div class="bd-example-row">

<div class="bd-example" data-example-id="">
<div class="row">
  <div class="col-sm-9">
    Level 1: .col-sm-9
    <div class="row">
      <div class="col-xs-8 col-sm-6">
        Level 2: .col-xs-8 .col-sm-6
      </div>
      <div class="col-xs-4 col-sm-6">
        Level 2: .col-xs-4 .col-sm-6
      </div>
    </div>
  </div>
</div>
</div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-9"</span><span class="nt">&gt;</span>
    Level 1: .col-sm-9
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-8 col-sm-6"</span><span class="nt">&gt;</span>
        Level 2: .col-xs-8 .col-sm-6
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-4 col-sm-6"</span><span class="nt">&gt;</span>
        Level 2: .col-xs-4 .col-sm-6
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

</div>

<h3 id="example-column-ordering">Example: Column ordering</h3>

<p>Easily change the order of our built-in grid columns with <code class="highlighter-rouge">.push-md-*</code> and <code class="highlighter-rouge">.pull-md-*</code> modifier classes.</p>

<div class="bd-example-row">

<div class="bd-example" data-example-id="">
<div class="row">
  <div class="col-md-9 push-md-3">.col-md-9 .push-md-3</div>
  <div class="col-md-3 pull-md-9">.col-md-3 .pull-md-9</div>
</div>
</div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-9 push-md-3"</span><span class="nt">&gt;</span>.col-md-9 .push-md-3<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-3 pull-md-9"</span><span class="nt">&gt;</span>.col-md-3 .pull-md-9<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

</div>

<h2 id="customizing-the-grid">Customizing the grid</h2>

<p>Using our built-in grid Sass variables and maps, it’s possible to completely customize the predefined grid classes. Change the number of tiers, the media query dimensions, and the container widths—then recompile.</p>

<h3 id="columns-and-gutters">Columns and gutters</h3>

<p>The number of grid columns and their horizontal padding (aka, gutters) can be modified via Sass variables. <code class="highlighter-rouge">$grid-columns</code> is used to generate the widths (in percent) of each individual column while <code class="highlighter-rouge">$grid-gutter-width</code> is divided evenly across <code class="highlighter-rouge">padding-left</code> and <code class="highlighter-rouge">padding-right</code> for the column gutters.</p>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="nv">$grid-columns</span><span class="p">:</span> <span class="m">12</span><span class="p">;</span>
<span class="nv">$grid-gutter-width</span><span class="p">:</span> <span class="m">30px</span><span class="p">;</span></code></pre></figure>

<h3 id="grid-tiers">Grid tiers</h3>

<p>Moving beyond the columns themselves, you may also customize the number of grid tiers. If you wanted just three grid tiers, you’d update the <code class="highlighter-rouge">$grid-breakpoints</code> and <code class="highlighter-rouge">$container-max-widths</code> to something like this:</p>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="nv">$grid-breakpoints</span><span class="p">:</span> <span class="p">(</span>
  <span class="n">sm</span><span class="o">:</span> <span class="m">480px</span><span class="o">,</span>
  <span class="n">md</span><span class="o">:</span> <span class="m">768px</span><span class="o">,</span>
  <span class="n">lg</span><span class="o">:</span> <span class="m">1024px</span>
<span class="p">);</span>

<span class="nv">$container-max-widths</span><span class="p">:</span> <span class="p">(</span>
  <span class="n">sm</span><span class="o">:</span> <span class="m">420px</span><span class="o">,</span>
  <span class="n">md</span><span class="o">:</span> <span class="m">720px</span><span class="o">,</span>
  <span class="n">lg</span><span class="o">:</span> <span class="m">940px</span>
<span class="p">);</span></code></pre></figure>

<p>When making any changes to the Sass variables or maps, you’ll need to save your changes and recompile. Doing so will out a brand new set of predefined grid classes for column widths, offsets, pushes, and pulls. Responsive visibility utilities will also be updated to use the custom breakpoints.</p>

        </div>
      </div>
    </div>

    <footer class="bd-footer text-muted">
  <div class="container">
    <ul class="bd-footer-links">
      <li><a href="https://github.com/twbs/bootstrap">GitHub</a></li>
      <li><a href="https://twitter.com/getbootstrap">Twitter</a></li>
      <li><a href="/admin/tool/themetester/docs/4.0.0-alpha.4/examples/">Examples</a></li>
      <li><a href="/admin/tool/themetester/docs/4.0.0-alpha.4/about/history/">About</a></li>
    </ul>
    <p>Designed and built with all the love in the world by <a href="https://twitter.com/mdo" target="_blank">@mdo</a> and <a href="https://twitter.com/fat" target="_blank">@fat</a>. Maintained by the <a href="https://github.com/orgs/twbs/people">core team</a> with the help of <a href="https://github.com/twbs/bootstrap/graphs/contributors">our contributors</a>.</p>
    <p>Currently v4.0.0-alpha.4. Code licensed <a rel="license" href="https://github.com/twbs/bootstrap/blob/master/LICENSE" target="_blank">MIT</a>, docs <a rel="license" href="https://creativecommons.org/licenses/by/3.0/" target="_blank">CC BY 3.0</a>.</p>
  </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/admin/tool/themetester/docs/4.0.0-alpha.4/assets/js/vendor/jquery.min.js"><\/script>')</script>

<script src="/admin/tool/themetester/docs/4.0.0-alpha.4/assets/js/vendor/tether.min.js"></script>


  <script src="/admin/tool/themetester/docs/4.0.0-alpha.4/dist/js/bootstrap.js"></script>



  
    <script src="/admin/tool/themetester/docs/4.0.0-alpha.4/assets/js/vendor/anchor.min.js"></script>
  
    <script src="/admin/tool/themetester/docs/4.0.0-alpha.4/assets/js/vendor/clipboard.min.js"></script>
  
    <script src="/admin/tool/themetester/docs/4.0.0-alpha.4/assets/js/vendor/holder.min.js"></script>
  
    <script src="/admin/tool/themetester/docs/4.0.0-alpha.4/assets/js/src/application.js"></script>
  


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="/admin/tool/themetester/docs/4.0.0-alpha.4/assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="/admin/tool/themetester/docs/4.0.0-alpha.4/assets/js/ie-emulation-modes-warning.js"></script>


<script src="/admin/tool/themetester/docs/4.0.0-alpha.4/assets/js/vendor/jekyll-search.min.js"></script>

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

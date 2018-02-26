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
$PAGE->set_heading("Utility classes");
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
  
  
  
  

  

  <div class="bd-toc-item ">
    
        <a class="bd-toc-link" href="/admin/tool/themetester/docs/4.0.0-alpha.4/layout/overview">
      
        Layout
      </a>

      <ul class="nav bd-sidenav">
        
          
          
          

          

          <li class="">
            <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/layout/overview">
              Overview
            </a>

            
          </li>
        
          
          
          

          

          <li class="">
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
  
  
  
  

  

  <div class="bd-toc-item active">
    
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
        
          
          
          

          

          <li class="active bd-sidenav-active">
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
          <h1 class="bd-title" id="content">Utility classes</h1>
          <p>Bootstrap includes dozens of utilities—classes with a single purpose. They’re designed to reduce the frequency of highly repetitive declarations in your CSS while allowing for quick and easy development.</p>

<h2 id="contents">Contents</h2>

<ul id="markdown-toc">
  <li><a href="#contents" id="markdown-toc-contents">Contents</a></li>
  <li><a href="#spacing" id="markdown-toc-spacing">Spacing</a>    <ul>
      <li><a href="#horizontal-centering" id="markdown-toc-horizontal-centering">Horizontal centering</a></li>
    </ul>
  </li>
  <li><a href="#text-alignment" id="markdown-toc-text-alignment">Text alignment</a></li>
  <li><a href="#text-transform" id="markdown-toc-text-transform">Text transform</a></li>
  <li><a href="#font-weight-and-italics" id="markdown-toc-font-weight-and-italics">Font weight and italics</a></li>
  <li><a href="#contextual-colors-and-backgrounds" id="markdown-toc-contextual-colors-and-backgrounds">Contextual colors and backgrounds</a></li>
  <li><a href="#widths" id="markdown-toc-widths">Widths</a></li>
  <li><a href="#css-display-block-inline-inline-block" id="markdown-toc-css-display-block-inline-inline-block">CSS <code class="highlighter-rouge">display</code> (<code class="highlighter-rouge">block</code>, <code class="highlighter-rouge">inline</code>, <code class="highlighter-rouge">inline-block</code>)</a></li>
  <li><a href="#close-icon" id="markdown-toc-close-icon">Close icon</a></li>
  <li><a href="#responsive-floats" id="markdown-toc-responsive-floats">Responsive floats</a></li>
  <li><a href="#clearfix" id="markdown-toc-clearfix">Clearfix</a></li>
  <li><a href="#fixed-positioning" id="markdown-toc-fixed-positioning">Fixed positioning</a></li>
  <li><a href="#invisible-content" id="markdown-toc-invisible-content">Invisible content</a></li>
  <li><a href="#screen-readers-and-keyboard-users" id="markdown-toc-screen-readers-and-keyboard-users">Screen readers and keyboard users</a></li>
  <li><a href="#image-replacement" id="markdown-toc-image-replacement">Image replacement</a></li>
  <li><a href="#responsive-embeds" id="markdown-toc-responsive-embeds">Responsive embeds</a></li>
</ul>

<h2 id="spacing">Spacing</h2>

<p>Assign <code class="highlighter-rouge">margin</code> or <code class="highlighter-rouge">padding</code> to an element or a subset of its sides with shorthand classes. Includes support for individual properties, all properties, and vertical and horizontal properties. All classes are multiples on the global default value, <code class="highlighter-rouge">1rem</code>.</p>

<p>The classes are named using the format: <code class="highlighter-rouge"><span class="p">{</span><span class="err">property</span><span class="p">}</span><span class="err">-</span><span class="p">{</span><span class="err">sides</span><span class="p">}</span><span class="err">-</span><span class="p">{</span><span class="err">size</span><span class="p">}</span></code></p>

<p>Where <em>property</em> is one of:</p>

<ul>
  <li><code class="highlighter-rouge">m</code> - for classes that set <code class="highlighter-rouge">margin</code></li>
  <li><code class="highlighter-rouge">p</code> - for classes that set <code class="highlighter-rouge">padding</code></li>
</ul>

<p>Where <em>sides</em> is one of:</p>

<ul>
  <li><code class="highlighter-rouge">t</code> - for classes that set <code class="highlighter-rouge">margin-top</code> or <code class="highlighter-rouge">padding-top</code></li>
  <li><code class="highlighter-rouge">b</code> - for classes that set <code class="highlighter-rouge">margin-bottom</code> or <code class="highlighter-rouge">padding-bottom</code></li>
  <li><code class="highlighter-rouge">l</code> - for classes that set <code class="highlighter-rouge">margin-left</code> or <code class="highlighter-rouge">padding-left</code></li>
  <li><code class="highlighter-rouge">r</code> - for classes that set <code class="highlighter-rouge">margin-right</code> or <code class="highlighter-rouge">padding-right</code></li>
  <li><code class="highlighter-rouge">x</code> - for classes that set both <code class="highlighter-rouge">*-left</code> and <code class="highlighter-rouge">*-right</code></li>
  <li><code class="highlighter-rouge">y</code> - for classes that set both <code class="highlighter-rouge">*-top</code> and <code class="highlighter-rouge">*-bottom</code></li>
  <li><code class="highlighter-rouge">a</code> - for classes that set a <code class="highlighter-rouge">margin</code> or <code class="highlighter-rouge">padding</code> on all 4 sides of the element</li>
</ul>

<p>Where <em>size</em> is one of:</p>

<ul>
  <li><code class="highlighter-rouge">0</code> - for classes that eliminate the <code class="highlighter-rouge">margin</code> or <code class="highlighter-rouge">padding</code> by setting it to <code class="highlighter-rouge">0</code></li>
  <li><code class="highlighter-rouge">1</code> - (by default) for classes that set the <code class="highlighter-rouge">margin</code> or <code class="highlighter-rouge">padding</code> to <code class="highlighter-rouge">$spacer-x</code> or <code class="highlighter-rouge">$spacer-y</code></li>
  <li><code class="highlighter-rouge">2</code> - (by default) for classes that set the <code class="highlighter-rouge">margin</code> or <code class="highlighter-rouge">padding</code> to <code class="highlighter-rouge">$spacer-x * 1.5</code> or <code class="highlighter-rouge">$spacer-y * 1.5</code></li>
  <li><code class="highlighter-rouge">3</code> - (by default) for classes that set the <code class="highlighter-rouge">margin</code> or <code class="highlighter-rouge">padding</code> to <code class="highlighter-rouge">$spacer-x * 3</code> or <code class="highlighter-rouge">$spacer-y * 3</code></li>
</ul>

<p>(You can add more sizes by adding entries to the <code class="highlighter-rouge">$spacers</code> Sass map variable.)</p>

<p>Here are some representative examples of these classes:</p>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="nc">.m-t-0</span> <span class="p">{</span>
  <span class="nl">margin-top</span><span class="p">:</span> <span class="m">0</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span>
<span class="p">}</span>

<span class="nc">.m-l-1</span> <span class="p">{</span>
  <span class="nl">margin-left</span><span class="p">:</span> <span class="nv">$spacer-x</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span>
<span class="p">}</span>

<span class="nc">.p-x-2</span> <span class="p">{</span>
  <span class="nl">padding-left</span><span class="p">:</span> <span class="p">(</span><span class="nv">$spacer-x</span> <span class="o">*</span> <span class="m">1</span><span class="mi">.5</span><span class="p">)</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span>
  <span class="nl">padding-right</span><span class="p">:</span> <span class="p">(</span><span class="nv">$spacer-x</span> <span class="o">*</span> <span class="m">1</span><span class="mi">.5</span><span class="p">)</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span>
<span class="p">}</span>

<span class="nc">.p-a-3</span> <span class="p">{</span>
  <span class="nl">padding</span><span class="p">:</span> <span class="p">(</span><span class="nv">$spacer-y</span> <span class="o">*</span> <span class="m">3</span><span class="p">)</span> <span class="p">(</span><span class="nv">$spacer-x</span> <span class="o">*</span> <span class="m">3</span><span class="p">)</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span>
<span class="p">}</span></code></pre></figure>

<h3 id="horizontal-centering">Horizontal centering</h3>
<p>Additionally, Bootstrap also includes an <code class="highlighter-rouge">.m-x-auto</code> class for horizontally centering fixed-width block level content by setting the horizontal margins to <code class="highlighter-rouge">auto</code>.</p>

<div class="bd-example">
  <div class="m-x-auto" style="width: 200px; background-color: rgba(86,61,124,.15);">
    Centered element
  </div>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"m-x-auto"</span> <span class="na">style=</span><span class="s">"width: 200px;"</span><span class="nt">&gt;</span>
  Centered element
<span class="nt">&lt;/div&gt;</span></code></pre></figure>

<h2 id="text-alignment">Text alignment</h2>

<p>Easily realign text to components with text alignment classes.</p>

<div class="bd-example" data-example-id="">
<p class="text-justify">Justified text.</p>
<p class="text-nowrap">No wrap text.</p>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-justify"</span><span class="nt">&gt;</span>Justified text.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-nowrap"</span><span class="nt">&gt;</span>No wrap text.<span class="nt">&lt;/p&gt;</span></code></pre></div>

<p>For left, right, and center alignment, responsive classes are available that use the same viewport width breakpoints as the grid system.</p>

<div class="bd-example" data-example-id="">
<p class="text-xs-left">Left aligned text on all viewport sizes.</p>
<p class="text-xs-center">Center aligned text on all viewport sizes.</p>
<p class="text-xs-right">Right aligned text on all viewport sizes.</p>

<p class="text-sm-left">Left aligned text on viewports sized SM (small) or wider.</p>
<p class="text-md-left">Left aligned text on viewports sized MD (medium) or wider.</p>
<p class="text-lg-left">Left aligned text on viewports sized LG (large) or wider.</p>
<p class="text-xl-left">Left aligned text on viewports sized XL (extra-large) or wider.</p>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-xs-left"</span><span class="nt">&gt;</span>Left aligned text on all viewport sizes.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-xs-center"</span><span class="nt">&gt;</span>Center aligned text on all viewport sizes.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-xs-right"</span><span class="nt">&gt;</span>Right aligned text on all viewport sizes.<span class="nt">&lt;/p&gt;</span>

<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-sm-left"</span><span class="nt">&gt;</span>Left aligned text on viewports sized SM (small) or wider.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-md-left"</span><span class="nt">&gt;</span>Left aligned text on viewports sized MD (medium) or wider.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-lg-left"</span><span class="nt">&gt;</span>Left aligned text on viewports sized LG (large) or wider.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-xl-left"</span><span class="nt">&gt;</span>Left aligned text on viewports sized XL (extra-large) or wider.<span class="nt">&lt;/p&gt;</span></code></pre></div>

<h2 id="text-transform">Text transform</h2>

<p>Transform text in components with text capitalization classes.</p>

<div class="bd-example" data-example-id="">
<p class="text-lowercase">Lowercased text.</p>
<p class="text-uppercase">Uppercased text.</p>
<p class="text-capitalize">CapiTaliZed text.</p>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-lowercase"</span><span class="nt">&gt;</span>Lowercased text.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-uppercase"</span><span class="nt">&gt;</span>Uppercased text.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-capitalize"</span><span class="nt">&gt;</span>CapiTaliZed text.<span class="nt">&lt;/p&gt;</span></code></pre></div>

<p>Note how <code class="highlighter-rouge">text-capitalize</code> only changes the first letter of each word, leaving the case of any other letters unaffected.</p>

<h2 id="font-weight-and-italics">Font weight and italics</h2>

<p>Quickly change the weight (boldness) of text or italicize text.</p>

<div class="bd-example" data-example-id="">
<p class="font-weight-bold">Bold text.</p>
<p class="font-weight-normal">Normal weight text.</p>
<p class="font-italic">Italic text.</p>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"font-weight-bold"</span><span class="nt">&gt;</span>Bold text.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"font-weight-normal"</span><span class="nt">&gt;</span>Normal weight text.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"font-italic"</span><span class="nt">&gt;</span>Italic text.<span class="nt">&lt;/p&gt;</span></code></pre></div>

<h2 id="contextual-colors-and-backgrounds">Contextual colors and backgrounds</h2>

<p>Convey meaning through color with a handful of emphasis utility classes. These may also be applied to links and will darken on hover just like our default link styles.</p>

<div class="bd-example" data-example-id="">
<p class="text-muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
<p class="text-primary">Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
<p class="text-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
<p class="text-info">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
<p class="text-warning">Etiam porta sem malesuada magna mollis euismod.</p>
<p class="text-danger">Donec ullamcorper nulla non metus auctor fringilla.</p>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-primary"</span><span class="nt">&gt;</span>Nullam id dolor id nibh ultricies vehicula ut id elit.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-success"</span><span class="nt">&gt;</span>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-info"</span><span class="nt">&gt;</span>Maecenas sed diam eget risus varius blandit sit amet non magna.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-warning"</span><span class="nt">&gt;</span>Etiam porta sem malesuada magna mollis euismod.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-danger"</span><span class="nt">&gt;</span>Donec ullamcorper nulla non metus auctor fringilla.<span class="nt">&lt;/p&gt;</span></code></pre></div>

<p>Contextual text classes also work well on anchors with the provided hover and focus states.</p>

<div class="bd-example" data-example-id="">
<a href="#" class="text-muted">Muted link</a>
<a href="#" class="text-primary">Primary link</a>
<a href="#" class="text-success">Success link</a>
<a href="#" class="text-info">Info link</a>
<a href="#" class="text-warning">Warning link</a>
<a href="#" class="text-danger">Danger link</a>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>Muted link<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"text-primary"</span><span class="nt">&gt;</span>Primary link<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"text-success"</span><span class="nt">&gt;</span>Success link<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"text-info"</span><span class="nt">&gt;</span>Info link<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"text-warning"</span><span class="nt">&gt;</span>Warning link<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"text-danger"</span><span class="nt">&gt;</span>Danger link<span class="nt">&lt;/a&gt;</span></code></pre></div>

<p>Similar to the contextual text color classes, easily set the background of an element to any contextual class. Anchor components will darken on hover, just like the text classes.</p>

<div class="bd-example" data-example-id="">
<div class="bg-primary">Nullam id dolor id nibh ultricies vehicula ut id elit.</div>
<div class="bg-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</div>
<div class="bg-info">Maecenas sed diam eget risus varius blandit sit amet non magna.</div>
<div class="bg-warning">Etiam porta sem malesuada magna mollis euismod.</div>
<div class="bg-danger">Donec ullamcorper nulla non metus auctor fringilla.</div>
<div class="bg-inverse">Cras mattis consectetur purus sit amet fermentum.</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"bg-primary"</span><span class="nt">&gt;</span>Nullam id dolor id nibh ultricies vehicula ut id elit.<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"bg-success"</span><span class="nt">&gt;</span>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"bg-info"</span><span class="nt">&gt;</span>Maecenas sed diam eget risus varius blandit sit amet non magna.<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"bg-warning"</span><span class="nt">&gt;</span>Etiam porta sem malesuada magna mollis euismod.<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"bg-danger"</span><span class="nt">&gt;</span>Donec ullamcorper nulla non metus auctor fringilla.<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"bg-inverse"</span><span class="nt">&gt;</span>Cras mattis consectetur purus sit amet fermentum.<span class="nt">&lt;/div&gt;</span></code></pre></div>

<div class="bd-callout bd-callout-info">
<h4 id="dealing-with-specificity">Dealing with specificity</h4>

<p>Sometimes contextual classes cannot be applied due to the specificity of another selector. In some cases, a sufficient workaround is to wrap your element’s content in a <code class="highlighter-rouge">&lt;div&gt;</code> with the class.</p>
</div>

<div class="bd-callout bd-callout-warning">
<h4 id="conveying-meaning-to-assistive-technologies">Conveying meaning to assistive technologies</h4>

<p>Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies – such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (e.g. the visible text), or is included through alternative means, such as additional text hidden with the <code class="highlighter-rouge">.sr-only</code> class.</p>
</div>

<h2 id="widths">Widths</h2>

<p>Easily make an element as wide as its parent using the <code class="highlighter-rouge">.w-100</code> utility class, which sets <code class="highlighter-rouge">width: 100%</code>.</p>

<div class="bd-example" data-example-id="">
<img class="w-100" data-src="holder.js/200px100?outline=yes&amp;text=Width%20%3D%20100%25" alt="Width = 100%" />
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"w-100"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"Width = 100%"</span><span class="nt">&gt;</span></code></pre></div>

<h2 id="css-display-block-inline-inline-block">CSS <code class="highlighter-rouge">display</code> (<code class="highlighter-rouge">block</code>, <code class="highlighter-rouge">inline</code>, <code class="highlighter-rouge">inline-block</code>)</h2>

<p>Use <code class="highlighter-rouge">.d-block</code>, <code class="highlighter-rouge">.d-inline</code>, or <code class="highlighter-rouge">.d-inline-block</code> to simply set an element’s <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/display"><code class="highlighter-rouge">display</code> property</a> to <code class="highlighter-rouge">block</code>, <code class="highlighter-rouge">inline</code>, or <code class="highlighter-rouge">inline-block</code> (respectively).</p>

<p>To make an element <code class="highlighter-rouge">display: none</code>, use our <a href="../layout/responsive-utilities/">responsive utilities</a> instead.</p>

<div class="bd-example" data-example-id="">
<div class="d-inline bg-success">Inline</div>
<div class="d-inline bg-success">Inline</div>

<span class="d-block bg-primary">Block</span>

<div class="d-inline-block bg-warning">
  <h3>inline-block</h3>
  Boot that strap!
</div>
<div class="d-inline-block bg-warning">
  <h3>inline-block</h3>
  Strap that boot!
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-inline bg-success"</span><span class="nt">&gt;</span>Inline<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-inline bg-success"</span><span class="nt">&gt;</span>Inline<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"d-block bg-primary"</span><span class="nt">&gt;</span>Block<span class="nt">&lt;/span&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-inline-block bg-warning"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;h3&gt;</span>inline-block<span class="nt">&lt;/h3&gt;</span>
  Boot that strap!
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"d-inline-block bg-warning"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;h3&gt;</span>inline-block<span class="nt">&lt;/h3&gt;</span>
  Strap that boot!
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="close-icon">Close icon</h2>

<p>Use a generic close icon for dismissing content like modals and alerts. <strong>Be sure to include text for screen readers</strong>, as we’ve done with <code class="highlighter-rouge">aria-label</code>.</p>

<div class="bd-example" data-example-id="">
<button type="button" class="close" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"close"</span> <span class="na">aria-label=</span><span class="s">"Close"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;times;</span><span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/button&gt;</span></code></pre></div>

<h2 id="responsive-floats">Responsive floats</h2>

<p>These utility classes float an element to the left or right, or disable floating, based on the current viewport size using the <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/float">CSS <code class="highlighter-rouge">float</code> property</a>. <code class="highlighter-rouge">!important</code> is included to avoid specificity issues. These use the same viewport width breakpoints as the grid system.</p>

<p>Two similar non-responsive Sass mixins (<code class="highlighter-rouge">pull-left</code> and <code class="highlighter-rouge">pull-right</code>) are also available.</p>

<div class="bd-example" data-example-id="">
<div class="pull-xs-left">Float left on all viewport sizes</div><br />
<div class="pull-xs-right">Float right on all viewport sizes</div><br />
<div class="pull-xs-none">Don't float on all viewport sizes</div><br />

<div class="pull-sm-left">Float left on viewports sized SM (small) or wider</div><br />
<div class="pull-md-left">Float left on viewports sized MD (medium) or wider</div><br />
<div class="pull-lg-left">Float left on viewports sized LG (large) or wider</div><br />
<div class="pull-xl-left">Float left on viewports sized XL (extra-large) or wider</div><br />
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"pull-xs-left"</span><span class="nt">&gt;</span>Float left on all viewport sizes<span class="nt">&lt;/div&gt;&lt;br&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"pull-xs-right"</span><span class="nt">&gt;</span>Float right on all viewport sizes<span class="nt">&lt;/div&gt;&lt;br&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"pull-xs-none"</span><span class="nt">&gt;</span>Don't float on all viewport sizes<span class="nt">&lt;/div&gt;&lt;br&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"pull-sm-left"</span><span class="nt">&gt;</span>Float left on viewports sized SM (small) or wider<span class="nt">&lt;/div&gt;&lt;br&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"pull-md-left"</span><span class="nt">&gt;</span>Float left on viewports sized MD (medium) or wider<span class="nt">&lt;/div&gt;&lt;br&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"pull-lg-left"</span><span class="nt">&gt;</span>Float left on viewports sized LG (large) or wider<span class="nt">&lt;/div&gt;&lt;br&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"pull-xl-left"</span><span class="nt">&gt;</span>Float left on viewports sized XL (extra-large) or wider<span class="nt">&lt;/div&gt;&lt;br&gt;</span></code></pre></div>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="c1">// Related simple non-responsive mixins
</span><span class="nc">.element</span> <span class="p">{</span>
  <span class="k">@include</span> <span class="nd">pull-left</span><span class="p">;</span>
<span class="p">}</span>
<span class="nc">.another-element</span> <span class="p">{</span>
  <span class="k">@include</span> <span class="nd">pull-right</span><span class="p">;</span>
<span class="p">}</span></code></pre></figure>

<h2 id="clearfix">Clearfix</h2>

<p>Easily clear <code class="highlighter-rouge">float</code>s by adding <code class="highlighter-rouge">.clearfix</code> <strong>to the parent element</strong>. Utilizes <a href="http://nicolasgallagher.com/micro-clearfix-hack/">the micro clearfix</a> as popularized by Nicolas Gallagher. Can also be used as a mixin.</p>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"clearfix"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span></code></pre></figure>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="c1">// Mixin itself
</span><span class="nc">.clearfix</span><span class="o">()</span> <span class="p">{</span>
  <span class="k">&amp;</span><span class="nd">:before</span><span class="o">,</span>
  <span class="k">&amp;</span><span class="nd">:after</span> <span class="p">{</span>
    <span class="nl">content</span><span class="p">:</span> <span class="s2">" "</span><span class="p">;</span>
    <span class="nl">display</span><span class="p">:</span> <span class="n">table</span><span class="p">;</span>
  <span class="p">}</span>
  <span class="k">&amp;</span><span class="nd">:after</span> <span class="p">{</span>
    <span class="nl">clear</span><span class="p">:</span> <span class="nb">both</span><span class="p">;</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="c1">// Usage as a mixin
</span><span class="nc">.element</span> <span class="p">{</span>
  <span class="k">@include</span> <span class="nd">clearfix</span><span class="p">;</span>
<span class="p">}</span></code></pre></figure>

<h2 id="fixed-positioning">Fixed positioning</h2>

<p>The <code class="highlighter-rouge">.pos-f-t</code> class can be used to easily position elements at the top of the viewport and make them as wide as the viewport. <strong>Be sure you understand the ramifications of fixed-position elements within your project.</strong> Here’s how the class is defined:</p>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="nc">.pos-f-t</span> <span class="p">{</span>
  <span class="nl">position</span><span class="p">:</span> <span class="nb">fixed</span><span class="p">;</span>
  <span class="nl">top</span><span class="p">:</span> <span class="m">0</span><span class="p">;</span>
  <span class="nl">right</span><span class="p">:</span> <span class="m">0</span><span class="p">;</span>
  <span class="nl">left</span><span class="p">:</span> <span class="m">0</span><span class="p">;</span>
  <span class="nl">z-index</span><span class="p">:</span> <span class="nv">$zindex-navbar-fixed</span><span class="p">;</span>
<span class="p">}</span></code></pre></figure>

<h2 id="invisible-content">Invisible content</h2>

<p>The <code class="highlighter-rouge">.invisible</code> class can be used to toggle only the visibility of an element, meaning its <code class="highlighter-rouge">display</code> is not modified and the element can still affect the flow of the document.</p>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"invisible"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span></code></pre></figure>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="c1">// Class
</span><span class="nc">.invisible</span> <span class="p">{</span>
  <span class="nl">visibility</span><span class="p">:</span> <span class="nb">hidden</span><span class="p">;</span>
<span class="p">}</span>

<span class="c1">// Usage as a mixin
</span><span class="nc">.element</span> <span class="p">{</span>
  <span class="k">@include</span> <span class="nd">invisible</span><span class="p">;</span>
<span class="p">}</span></code></pre></figure>

<h2 id="screen-readers-and-keyboard-users">Screen readers and keyboard users</h2>

<p>Hide an element to all devices <strong>except screen readers</strong> with <code class="highlighter-rouge">.sr-only</code>. Combine <code class="highlighter-rouge">.sr-only</code> with <code class="highlighter-rouge">.sr-only-focusable</code> to show the element again when it’s focused (e.g. by a keyboard-only user). Can also be used as mixins.</p>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"sr-only sr-only-focusable"</span> <span class="na">href=</span><span class="s">"#content"</span><span class="nt">&gt;</span>Skip to main content<span class="nt">&lt;/a&gt;</span></code></pre></figure>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="c1">// Usage as a mixin
</span><span class="nc">.skip-navigation</span> <span class="p">{</span>
  <span class="k">@include</span> <span class="nd">sr-only</span><span class="p">;</span>
  <span class="k">@include</span> <span class="nd">sr-only-focusable</span><span class="p">;</span>
<span class="p">}</span></code></pre></figure>

<h2 id="image-replacement">Image replacement</h2>

<p>Utilize the <code class="highlighter-rouge">.text-hide</code> class or mixin to help replace an element’s text content with a background image.</p>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">"text-hide"</span><span class="nt">&gt;</span>Custom heading<span class="nt">&lt;/h1&gt;</span></code></pre></figure>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="c1">// Usage as a mixin
</span><span class="nc">.heading</span> <span class="p">{</span>
  <span class="k">@include</span> <span class="nd">text-hide</span><span class="p">;</span>
<span class="p">}</span></code></pre></figure>

<h2 id="responsive-embeds">Responsive embeds</h2>

<p>Allow browsers to determine video or slideshow dimensions based on the width of their containing block by creating an intrinsic ratio that will properly scale on any device.</p>

<p>Rules are directly applied to <code class="highlighter-rouge">&lt;iframe&gt;</code>, <code class="highlighter-rouge">&lt;embed&gt;</code>, <code class="highlighter-rouge">&lt;video&gt;</code>, and <code class="highlighter-rouge">&lt;object&gt;</code> elements; optionally use an explicit descendant class <code class="highlighter-rouge">.embed-responsive-item</code> when you want to match the styling for other attributes.</p>

<p><strong>Pro-Tip!</strong> You don’t need to include <code class="highlighter-rouge">frameborder="0"</code> in your <code class="highlighter-rouge">&lt;iframe&gt;</code>s as we override that for you.</p>

<div class="bd-example" data-example-id="">
<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="//www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen=""></iframe>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"embed-responsive embed-responsive-16by9"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;iframe</span> <span class="na">class=</span><span class="s">"embed-responsive-item"</span> <span class="na">src=</span><span class="s">"//www.youtube.com/embed/zpOULjyy-n8?rel=0"</span> <span class="na">allowfullscreen</span><span class="nt">&gt;&lt;/iframe&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<p>Aspect ratios can be customized with modifier classes.</p>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- 21:9 aspect ratio --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"embed-responsive embed-responsive-21by9"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;iframe</span> <span class="na">class=</span><span class="s">"embed-responsive-item"</span> <span class="na">src=</span><span class="s">"..."</span><span class="nt">&gt;&lt;/iframe&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="c">&lt;!-- 16:9 aspect ratio --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"embed-responsive embed-responsive-16by9"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;iframe</span> <span class="na">class=</span><span class="s">"embed-responsive-item"</span> <span class="na">src=</span><span class="s">"..."</span><span class="nt">&gt;&lt;/iframe&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="c">&lt;!-- 4:3 aspect ratio --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"embed-responsive embed-responsive-4by3"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;iframe</span> <span class="na">class=</span><span class="s">"embed-responsive-item"</span> <span class="na">src=</span><span class="s">"..."</span><span class="nt">&gt;&lt;/iframe&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="c">&lt;!-- 1:1 aspect ratio --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"embed-responsive embed-responsive-1by1"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;iframe</span> <span class="na">class=</span><span class="s">"embed-responsive-item"</span> <span class="na">src=</span><span class="s">"..."</span><span class="nt">&gt;&lt;/iframe&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>


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

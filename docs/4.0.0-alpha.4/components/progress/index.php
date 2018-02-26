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
$PAGE->set_heading("Progress");
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
        
          
          
          

          

          <li class="active bd-sidenav-active">
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
          <h1 class="bd-title" id="content">Progress</h1>
          <p>Stylize <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/progress">the HTML5 <code class="highlighter-rouge">&lt;progress&gt;</code> element</a> with a few extra classes and some crafty browser-specific CSS. Be sure to read up on the browser support.</p>

<h2 id="contents">Contents</h2>

<ul id="markdown-toc">
  <li><a href="#contents" id="markdown-toc-contents">Contents</a></li>
  <li><a href="#example" id="markdown-toc-example">Example</a></li>
  <li><a href="#ie9-support" id="markdown-toc-ie9-support">IE9 support</a></li>
  <li><a href="#contextual-alternatives" id="markdown-toc-contextual-alternatives">Contextual alternatives</a>    <ul>
      <li><a href="#striped" id="markdown-toc-striped">Striped</a></li>
      <li><a href="#animated-stripes" id="markdown-toc-animated-stripes">Animated stripes</a></li>
    </ul>
  </li>
</ul>

<h2 id="example">Example</h2>

<p>To caption a progress bar, simply add a <code class="highlighter-rouge">&lt;div&gt;</code> with your caption text, <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/components/utilities/#text-alignment">align the text using a utility class</a>, and associate the caption with the <code class="highlighter-rouge">&lt;progress&gt;</code> element using the <code class="highlighter-rouge">aria-describedby</code> attribute.</p>

<div class="bd-example" data-example-id="">
<div class="text-xs-center" id="example-caption-1">Reticulating splines&hellip; 0%</div>
<progress class="progress" value="0" max="100" aria-describedby="example-caption-1"></progress>

<div class="text-xs-center" id="example-caption-2">Reticulating splines&hellip; 25%</div>
<progress class="progress" value="25" max="100" aria-describedby="example-caption-2"></progress>

<div class="text-xs-center" id="example-caption-3">Reticulating splines&hellip; 50%</div>
<progress class="progress" value="50" max="100" aria-describedby="example-caption-3"></progress>

<div class="text-xs-center" id="example-caption-4">Reticulating splines&hellip; 75%</div>
<progress class="progress" value="75" max="100" aria-describedby="example-caption-4"></progress>

<div class="text-xs-center" id="example-caption-5">Reticulating splines&hellip; 100%</div>
<progress class="progress" value="100" max="100" aria-describedby="example-caption-5"></progress>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"text-xs-center"</span> <span class="na">id=</span><span class="s">"example-caption-1"</span><span class="nt">&gt;</span>Reticulating splines<span class="ni">&amp;hellip;</span> 0%<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;progress</span> <span class="na">class=</span><span class="s">"progress"</span> <span class="na">value=</span><span class="s">"0"</span> <span class="na">max=</span><span class="s">"100"</span> <span class="na">aria-describedby=</span><span class="s">"example-caption-1"</span><span class="nt">&gt;&lt;/progress&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"text-xs-center"</span> <span class="na">id=</span><span class="s">"example-caption-2"</span><span class="nt">&gt;</span>Reticulating splines<span class="ni">&amp;hellip;</span> 25%<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;progress</span> <span class="na">class=</span><span class="s">"progress"</span> <span class="na">value=</span><span class="s">"25"</span> <span class="na">max=</span><span class="s">"100"</span> <span class="na">aria-describedby=</span><span class="s">"example-caption-2"</span><span class="nt">&gt;&lt;/progress&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"text-xs-center"</span> <span class="na">id=</span><span class="s">"example-caption-3"</span><span class="nt">&gt;</span>Reticulating splines<span class="ni">&amp;hellip;</span> 50%<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;progress</span> <span class="na">class=</span><span class="s">"progress"</span> <span class="na">value=</span><span class="s">"50"</span> <span class="na">max=</span><span class="s">"100"</span> <span class="na">aria-describedby=</span><span class="s">"example-caption-3"</span><span class="nt">&gt;&lt;/progress&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"text-xs-center"</span> <span class="na">id=</span><span class="s">"example-caption-4"</span><span class="nt">&gt;</span>Reticulating splines<span class="ni">&amp;hellip;</span> 75%<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;progress</span> <span class="na">class=</span><span class="s">"progress"</span> <span class="na">value=</span><span class="s">"75"</span> <span class="na">max=</span><span class="s">"100"</span> <span class="na">aria-describedby=</span><span class="s">"example-caption-4"</span><span class="nt">&gt;&lt;/progress&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"text-xs-center"</span> <span class="na">id=</span><span class="s">"example-caption-5"</span><span class="nt">&gt;</span>Reticulating splines<span class="ni">&amp;hellip;</span> 100%<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;progress</span> <span class="na">class=</span><span class="s">"progress"</span> <span class="na">value=</span><span class="s">"100"</span> <span class="na">max=</span><span class="s">"100"</span> <span class="na">aria-describedby=</span><span class="s">"example-caption-5"</span><span class="nt">&gt;&lt;/progress&gt;</span></code></pre></div>

<h2 id="ie9-support">IE9 support</h2>

<p>Internet Explorer 9 doesn’t support the HTML5 <code class="highlighter-rouge">&lt;progress&gt;</code> element, but we can work around that.</p>

<div class="bd-example" data-example-id="">
<div class="text-xs-center" id="example-caption-6">Reticulating splines&hellip; 25%</div>
<progress class="progress" value="25" max="100" aria-describedby="example-caption-6">
  <div class="progress">
    <span class="progress-bar" style="width: 25%;"></span>
  </div>
</progress>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"text-xs-center"</span> <span class="na">id=</span><span class="s">"example-caption-6"</span><span class="nt">&gt;</span>Reticulating splines<span class="ni">&amp;hellip;</span> 25%<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;progress</span> <span class="na">class=</span><span class="s">"progress"</span> <span class="na">value=</span><span class="s">"25"</span> <span class="na">max=</span><span class="s">"100"</span> <span class="na">aria-describedby=</span><span class="s">"example-caption-6"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"progress-bar"</span> <span class="na">style=</span><span class="s">"width: 25%;"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/progress&gt;</span></code></pre></div>

<h2 id="contextual-alternatives">Contextual alternatives</h2>

<p>Progress bars use some of the same button and alert classes for consistent styles.</p>

<div class="bd-example" data-example-id="">
<progress class="progress progress-success" value="25" max="100"></progress>
<progress class="progress progress-info" value="50" max="100"></progress>
<progress class="progress progress-warning" value="75" max="100"></progress>
<progress class="progress progress-danger" value="100" max="100"></progress>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;progress</span> <span class="na">class=</span><span class="s">"progress progress-success"</span> <span class="na">value=</span><span class="s">"25"</span> <span class="na">max=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/progress&gt;</span>
<span class="nt">&lt;progress</span> <span class="na">class=</span><span class="s">"progress progress-info"</span> <span class="na">value=</span><span class="s">"50"</span> <span class="na">max=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/progress&gt;</span>
<span class="nt">&lt;progress</span> <span class="na">class=</span><span class="s">"progress progress-warning"</span> <span class="na">value=</span><span class="s">"75"</span> <span class="na">max=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/progress&gt;</span>
<span class="nt">&lt;progress</span> <span class="na">class=</span><span class="s">"progress progress-danger"</span> <span class="na">value=</span><span class="s">"100"</span> <span class="na">max=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/progress&gt;</span></code></pre></div>

<h3 id="striped">Striped</h3>

<p>Uses a gradient to create a striped effect.</p>

<div class="bd-example" data-example-id="">
<progress class="progress progress-striped" value="10" max="100"></progress>
<progress class="progress progress-striped progress-success" value="25" max="100"></progress>
<progress class="progress progress-striped progress-info" value="50" max="100"></progress>
<progress class="progress progress-striped progress-warning" value="75" max="100"></progress>
<progress class="progress progress-striped progress-danger" value="100" max="100"></progress>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;progress</span> <span class="na">class=</span><span class="s">"progress progress-striped"</span> <span class="na">value=</span><span class="s">"10"</span> <span class="na">max=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/progress&gt;</span>
<span class="nt">&lt;progress</span> <span class="na">class=</span><span class="s">"progress progress-striped progress-success"</span> <span class="na">value=</span><span class="s">"25"</span> <span class="na">max=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/progress&gt;</span>
<span class="nt">&lt;progress</span> <span class="na">class=</span><span class="s">"progress progress-striped progress-info"</span> <span class="na">value=</span><span class="s">"50"</span> <span class="na">max=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/progress&gt;</span>
<span class="nt">&lt;progress</span> <span class="na">class=</span><span class="s">"progress progress-striped progress-warning"</span> <span class="na">value=</span><span class="s">"75"</span> <span class="na">max=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/progress&gt;</span>
<span class="nt">&lt;progress</span> <span class="na">class=</span><span class="s">"progress progress-striped progress-danger"</span> <span class="na">value=</span><span class="s">"100"</span> <span class="na">max=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/progress&gt;</span></code></pre></div>

<h3 id="animated-stripes">Animated stripes</h3>

<p>The striped gradient can also be animated. Add <code class="highlighter-rouge">.progress-animated</code> to <code class="highlighter-rouge">.progress</code> to animate the stripes right to left via CSS3 animations.</p>

<p><strong>Animated progress bars do not work in IE9 and Opera 12</strong> – as they don’t support CSS3 animations – <strong>nor in IE10+ and Microsoft Edge</strong> – as they currently don’t support CSS3 animations on the <a href="https://msdn.microsoft.com/en-us/library/windows/apps/hh465757.aspx"><code class="highlighter-rouge">::-ms-fill</code> pseudo-element</a>.</p>

<div class="bd-example">
  <progress class="progress progress-striped" value="25" max="100"></progress>
  <button type="button" class="btn btn-secondary bd-activate-animated-progressbar" data-toggle="button" aria-pressed="false" autocomplete="off">
    Toggle animation
  </button>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;progress</span> <span class="na">class=</span><span class="s">"progress progress-striped progress-animated"</span> <span class="na">value=</span><span class="s">"25"</span> <span class="na">max=</span><span class="s">"100"</span><span class="nt">&gt;&lt;/progress&gt;</span></code></pre></figure>


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

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
$PAGE->set_heading("Tables");
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
  
  
  
  

  

  <div class="bd-toc-item active">
    
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
        
          
          
          

          

          <li class="active bd-sidenav-active">
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
  
  
  
  

  

  <div class="bd-toc-item ">
    
        <a class="bd-toc-link" href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/migration/">
      
        Migration
      </a>

      <ul class="nav bd-sidenav">
        
      </ul>
    </div>
  
</nav>

        </div>
        <div class="col-xs-12 col-md-9 pull-md-3 bd-content">
          <h1 class="bd-title" id="content">Tables</h1>
          <p>Due to the widespread use of tables across third-party widgets like calendars and date pickers, we’ve designed our tables to be <strong>opt-in</strong>. Just add the base class <code class="highlighter-rouge">.table</code> to any <code class="highlighter-rouge">&lt;table&gt;</code>, then extend with custom styles or our various included modifier classes.</p>

<h2 id="contents">Contents</h2>

<ul id="markdown-toc">
  <li><a href="#contents" id="markdown-toc-contents">Contents</a></li>
  <li><a href="#examples" id="markdown-toc-examples">Examples</a></li>
  <li><a href="#table-head-options" id="markdown-toc-table-head-options">Table head options</a></li>
  <li><a href="#striped-rows" id="markdown-toc-striped-rows">Striped rows</a></li>
  <li><a href="#bordered-table" id="markdown-toc-bordered-table">Bordered table</a></li>
  <li><a href="#hoverable-rows" id="markdown-toc-hoverable-rows">Hoverable rows</a></li>
  <li><a href="#small-table" id="markdown-toc-small-table">Small table</a></li>
  <li><a href="#contextual-classes" id="markdown-toc-contextual-classes">Contextual classes</a></li>
  <li><a href="#responsive-tables" id="markdown-toc-responsive-tables">Responsive tables</a>    <ul>
      <li><a href="#reflow" id="markdown-toc-reflow">Reflow</a></li>
    </ul>
  </li>
</ul>

<h2 id="examples">Examples</h2>

<p>Using the most basic table markup, here’s how <code class="highlighter-rouge">.table</code>-based tables look in Bootstrap.</p>

<div class="bd-example" data-example-id="">
<table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;thead&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th&gt;</span>#<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>First Name<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Last Name<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Username<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/thead&gt;</span>
  <span class="nt">&lt;tbody&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Mark<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Otto<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@mdo<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Jacob<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Thornton<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@fat<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Larry<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>the Bird<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@twitter<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span></code></pre></div>

<p>You can also invert the colors—with light text on dark backgrounds—with <code class="highlighter-rouge">.table-inverse</code>.</p>

<div class="bd-example" data-example-id="">
<table class="table table-inverse">
  <thead>
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-inverse"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;thead&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th&gt;</span>#<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>First Name<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Last Name<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Username<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/thead&gt;</span>
  <span class="nt">&lt;tbody&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Mark<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Otto<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@mdo<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Jacob<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Thornton<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@fat<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Larry<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>the Bird<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@twitter<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span></code></pre></div>

<h2 id="table-head-options">Table head options</h2>

<p>Similar to default and inverse tables, use one of two modifier classes to make <code class="highlighter-rouge">&lt;thead&gt;</code>s appear light or dark gray.</p>

<div class="bd-example" data-example-id="">
<table class="table">
  <thead class="thead-inverse">
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

<table class="table">
  <thead class="thead-default">
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;thead</span> <span class="na">class=</span><span class="s">"thead-inverse"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th&gt;</span>#<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>First Name<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Last Name<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Username<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/thead&gt;</span>
  <span class="nt">&lt;tbody&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Mark<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Otto<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@mdo<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Jacob<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Thornton<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@fat<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Larry<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>the Bird<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@twitter<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span>

<span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;thead</span> <span class="na">class=</span><span class="s">"thead-default"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th&gt;</span>#<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>First Name<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Last Name<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Username<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/thead&gt;</span>
  <span class="nt">&lt;tbody&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Mark<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Otto<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@mdo<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Jacob<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Thornton<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@fat<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Larry<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>the Bird<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@twitter<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span></code></pre></div>

<h2 id="striped-rows">Striped rows</h2>

<p>Use <code class="highlighter-rouge">.table-striped</code> to add zebra-striping to any table row within the <code class="highlighter-rouge">&lt;tbody&gt;</code>.</p>

<div class="bd-example" data-example-id="">
<table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-striped"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;thead&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th&gt;</span>#<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>First Name<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Last Name<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Username<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/thead&gt;</span>
  <span class="nt">&lt;tbody&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Mark<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Otto<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@mdo<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Jacob<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Thornton<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@fat<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Larry<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>the Bird<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@twitter<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span></code></pre></div>

<div class="bd-example" data-example-id="">
<table class="table table-striped table-inverse">
  <thead>
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-striped table-inverse"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;thead&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th&gt;</span>#<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>First Name<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Last Name<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Username<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/thead&gt;</span>
  <span class="nt">&lt;tbody&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Mark<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Otto<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@mdo<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Jacob<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Thornton<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@fat<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Larry<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>the Bird<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@twitter<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span></code></pre></div>

<h2 id="bordered-table">Bordered table</h2>

<p>Add <code class="highlighter-rouge">.table-bordered</code> for borders on all sides of the table and cells.</p>

<div class="bd-example" data-example-id="">
<table class="table table-bordered">
  <thead>
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@TwBootstrap</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-bordered"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;thead&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th&gt;</span>#<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>First Name<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Last Name<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Username<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/thead&gt;</span>
  <span class="nt">&lt;tbody&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Mark<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Otto<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@mdo<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Mark<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Otto<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@TwBootstrap<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Jacob<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Thornton<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@fat<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>4<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td</span> <span class="na">colspan=</span><span class="s">"2"</span><span class="nt">&gt;</span>Larry the Bird<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@twitter<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span></code></pre></div>

<div class="bd-example" data-example-id="">
<table class="table table-bordered table-inverse">
  <thead>
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@TwBootstrap</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-bordered table-inverse"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;thead&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th&gt;</span>#<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>First Name<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Last Name<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Username<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/thead&gt;</span>
  <span class="nt">&lt;tbody&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Mark<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Otto<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@mdo<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Mark<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Otto<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@TwBootstrap<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Jacob<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Thornton<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@fat<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>4<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td</span> <span class="na">colspan=</span><span class="s">"2"</span><span class="nt">&gt;</span>Larry the Bird<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@twitter<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span></code></pre></div>

<h2 id="hoverable-rows">Hoverable rows</h2>

<p>Add <code class="highlighter-rouge">.table-hover</code> to enable a hover state on table rows within a <code class="highlighter-rouge">&lt;tbody&gt;</code>.</p>

<div class="bd-example" data-example-id="">
<table class="table table-hover">
  <thead>
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-hover"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;thead&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th&gt;</span>#<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>First Name<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Last Name<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Username<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/thead&gt;</span>
  <span class="nt">&lt;tbody&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Mark<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Otto<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@mdo<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Jacob<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Thornton<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@fat<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td</span> <span class="na">colspan=</span><span class="s">"2"</span><span class="nt">&gt;</span>Larry the Bird<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@twitter<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span></code></pre></div>

<div class="bd-example" data-example-id="">
<table class="table table-hover table-inverse">
  <thead>
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-hover table-inverse"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;thead&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th&gt;</span>#<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>First Name<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Last Name<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Username<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/thead&gt;</span>
  <span class="nt">&lt;tbody&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Mark<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Otto<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@mdo<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Jacob<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Thornton<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@fat<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td</span> <span class="na">colspan=</span><span class="s">"2"</span><span class="nt">&gt;</span>Larry the Bird<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@twitter<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span></code></pre></div>

<h2 id="small-table">Small table</h2>

<p>Add <code class="highlighter-rouge">.table-sm</code> to make tables more compact by cutting cell padding in half.</p>

<div class="bd-example" data-example-id="">
<table class="table table-sm">
  <thead>
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-sm"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;thead&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th&gt;</span>#<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>First Name<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Last Name<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Username<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/thead&gt;</span>
  <span class="nt">&lt;tbody&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Mark<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Otto<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@mdo<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Jacob<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Thornton<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@fat<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td</span> <span class="na">colspan=</span><span class="s">"2"</span><span class="nt">&gt;</span>Larry the Bird<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@twitter<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span></code></pre></div>

<div class="bd-example" data-example-id="">
<table class="table table-sm table-inverse">
  <thead>
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-sm table-inverse"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;thead&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th&gt;</span>#<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>First Name<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Last Name<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Username<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/thead&gt;</span>
  <span class="nt">&lt;tbody&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Mark<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Otto<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@mdo<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Jacob<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Thornton<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@fat<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td</span> <span class="na">colspan=</span><span class="s">"2"</span><span class="nt">&gt;</span>Larry the Bird<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>@twitter<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span></code></pre></div>

<h2 id="contextual-classes">Contextual classes</h2>

<p>Use contextual classes to color table rows or individual cells.</p>

<div class="table-responsive">
  <table class="table table-bordered table-striped">
    <colgroup>
      <col class="col-xs-1" />
      <col class="col-xs-7" />
    </colgroup>
    <thead>
      <tr>
        <th>Class</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">
          <code>.table-active</code>
        </th>
        <td>Applies the hover color to a particular row or cell</td>
      </tr>
      <tr>
        <th scope="row">
          <code>.table-success</code>
        </th>
        <td>Indicates a successful or positive action</td>
      </tr>
      <tr>
        <th scope="row">
          <code>.table-info</code>
        </th>
        <td>Indicates a neutral informative change or action</td>
      </tr>
      <tr>
        <th scope="row">
          <code>.table-warning</code>
        </th>
        <td>Indicates a warning that might need attention</td>
      </tr>
      <tr>
        <th scope="row">
          <code>.table-danger</code>
        </th>
        <td>Indicates a dangerous or potentially negative action</td>
      </tr>
    </tbody>
  </table>
</div>

<div class="bd-example">
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Column heading</th>
        <th>Column heading</th>
        <th>Column heading</th>
      </tr>
    </thead>
    <tbody>
      <tr class="table-active">
        <th scope="row">1</th>
        <td>Column content</td>
        <td>Column content</td>
        <td>Column content</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Column content</td>
        <td>Column content</td>
        <td>Column content</td>
      </tr>
      <tr class="table-success">
        <th scope="row">3</th>
        <td>Column content</td>
        <td>Column content</td>
        <td>Column content</td>
      </tr>
      <tr>
        <th scope="row">4</th>
        <td>Column content</td>
        <td>Column content</td>
        <td>Column content</td>
      </tr>
      <tr class="table-info">
        <th scope="row">5</th>
        <td>Column content</td>
        <td>Column content</td>
        <td>Column content</td>
      </tr>
      <tr>
        <th scope="row">6</th>
        <td>Column content</td>
        <td>Column content</td>
        <td>Column content</td>
      </tr>
      <tr class="table-warning">
        <th scope="row">7</th>
        <td>Column content</td>
        <td>Column content</td>
        <td>Column content</td>
      </tr>
      <tr>
        <th scope="row">8</th>
        <td>Column content</td>
        <td>Column content</td>
        <td>Column content</td>
      </tr>
      <tr class="table-danger">
        <th scope="row">9</th>
        <td>Column content</td>
        <td>Column content</td>
        <td>Column content</td>
      </tr>
    </tbody>
  </table>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- On rows --&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"table-active"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"table-success"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"table-warning"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"table-danger"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"table-info"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>

<span class="c">&lt;!-- On cells (`td` or `th`) --&gt;</span>
<span class="nt">&lt;tr&gt;</span>
  <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"table-active"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
  <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"table-success"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
  <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"table-warning"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
  <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"table-danger"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
  <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"table-info"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
<span class="nt">&lt;/tr&gt;</span></code></pre></figure>

<p>Regular table background variants are not available with the inverse table, however, you may use <a href="/components/utilities/#contextual-colors-and-backgrounds">text or background utilities</a> to achieve similar styles.</p>

<div class="bd-example">
  <table class="table table-inverse">
    <thead>
      <tr>
        <th>#</th>
        <th>Column heading</th>
        <th>Column heading</th>
        <th>Column heading</th>
      </tr>
    </thead>
    <tbody>
      <tr class="bg-primary">
        <th scope="row">1</th>
        <td>Column content</td>
        <td>Column content</td>
        <td>Column content</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Column content</td>
        <td>Column content</td>
        <td>Column content</td>
      </tr>
      <tr class="bg-success">
        <th scope="row">3</th>
        <td>Column content</td>
        <td>Column content</td>
        <td>Column content</td>
      </tr>
      <tr>
        <th scope="row">4</th>
        <td>Column content</td>
        <td>Column content</td>
        <td>Column content</td>
      </tr>
      <tr class="bg-info">
        <th scope="row">5</th>
        <td>Column content</td>
        <td>Column content</td>
        <td>Column content</td>
      </tr>
      <tr>
        <th scope="row">6</th>
        <td>Column content</td>
        <td>Column content</td>
        <td>Column content</td>
      </tr>
      <tr class="bg-warning">
        <th scope="row">7</th>
        <td>Column content</td>
        <td>Column content</td>
        <td>Column content</td>
      </tr>
      <tr>
        <th scope="row">8</th>
        <td>Column content</td>
        <td>Column content</td>
        <td>Column content</td>
      </tr>
      <tr class="bg-danger">
        <th scope="row">9</th>
        <td>Column content</td>
        <td>Column content</td>
        <td>Column content</td>
      </tr>
    </tbody>
  </table>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- On rows --&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"bg-primary"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"bg-success"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"bg-warning"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"bg-danger"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"bg-info"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>

<span class="c">&lt;!-- On cells (`td` or `th`) --&gt;</span>
<span class="nt">&lt;tr&gt;</span>
  <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"bg-primary"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
  <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"bg-success"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
  <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"bg-warning"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
  <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"bg-danger"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
  <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"bg-info"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
<span class="nt">&lt;/tr&gt;</span></code></pre></figure>

<div class="bd-callout bd-callout-warning">
<h4 id="conveying-meaning-to-assistive-technologies">Conveying meaning to assistive technologies</h4>

<p>Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies – such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (e.g. the visible text), or is included through alternative means, such as additional text hidden with the <code class="highlighter-rouge">.sr-only</code> class.</p>
</div>

<h2 id="responsive-tables">Responsive tables</h2>

<p>Create responsive tables by wrapping any <code class="highlighter-rouge">.table</code> in <code class="highlighter-rouge">.table-responsive</code> to make them scroll horizontally on small devices (under 768px). When viewing on anything larger than 768px wide, you will not see any difference in these tables.</p>

<div class="bd-callout bd-callout-warning">
<h4 id="vertical-clippingtruncation">Vertical clipping/truncation</h4>

<p>Responsive tables make use of <code class="highlighter-rouge">overflow-y: hidden</code>, which clips off any content that goes beyond the bottom or top edges of the table. In particular, this can clip off dropdown menus and other third-party widgets.</p>
</div>

<div class="bd-callout bd-callout-warning">
<h4 id="firefox-and-fieldsets">Firefox and fieldsets</h4>

<p>Firefox has some awkward fieldset styling involving <code class="highlighter-rouge">width</code> that interferes with the responsive table. This cannot be overridden without a Firefox-specific hack that we <strong>don’t</strong> provide in Bootstrap:</p>

<figure class="highlight"><pre><code class="language-css" data-lang="css"><span class="k">@-moz-document</span> <span class="n">url-prefix</span><span class="p">()</span> <span class="p">{</span>
  <span class="nt">fieldset</span> <span class="p">{</span> <span class="nl">display</span><span class="p">:</span> <span class="nb">table-cell</span><span class="p">;</span> <span class="p">}</span>
<span class="p">}</span></code></pre></figure>

<p>For more information, read <a href="https://stackoverflow.com/questions/17408815/fieldset-resizes-wrong-appears-to-have-unremovable-min-width-min-content/17863685#17863685">this Stack Overflow answer</a>.</p>
</div>

<div class="bd-example">
  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th>Table heading</th>
          <th>Table heading</th>
          <th>Table heading</th>
          <th>Table heading</th>
          <th>Table heading</th>
          <th>Table heading</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>#</th>
          <th>Table heading</th>
          <th>Table heading</th>
          <th>Table heading</th>
          <th>Table heading</th>
          <th>Table heading</th>
          <th>Table heading</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"table-responsive"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table"</span><span class="nt">&gt;</span>
    ...
  <span class="nt">&lt;/table&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>

<h3 id="reflow">Reflow</h3>
<p>Turn traditional tables on their side by using <code class="highlighter-rouge">table-reflow</code>. When using reflow, the table header becomes the first column of the table, the first row within the table body becomes the second column, the second row becomes the third column, etc.</p>

<div class="bd-callout bd-callout-warning">
<h4 id="content-order-and-complex-tables">Content order and complex tables</h4>

<p>Beware that the <code class="highlighter-rouge">table-reflow</code> style changes the visual order of content. Make sure that you only apply this style to well-formed and simple data tables (and in particular, don’t use this for layout tables) with appropriate <code class="highlighter-rouge">&lt;th&gt;</code> table header cells for each row and column.</p>

<p>In addition, this class will not work correctly for tables with cells that span multiple rows or columns (using <code class="highlighter-rouge">rowspan</code> or <code class="highlighter-rouge">colspan</code> attributes).</p>

</div>

<div class="bd-example" data-example-id="">
<table class="table table-reflow">
  <thead>
    <tr>
      <th>#</th>
      <th>Table heading</th>
      <th>Table heading</th>
      <th>Table heading</th>
      <th>Table heading</th>
      <th>Table heading</th>
      <th>Table heading</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Table cell</td>
      <td>Table cell</td>
      <td>Table cell</td>
      <td>Table cell</td>
      <td>Table cell</td>
      <td>Table cell</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Table cell</td>
      <td>Table cell</td>
      <td>Table cell</td>
      <td>Table cell</td>
      <td>Table cell</td>
      <td>Table cell</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Table cell</td>
      <td>Table cell</td>
      <td>Table cell</td>
      <td>Table cell</td>
      <td>Table cell</td>
      <td>Table cell</td>
    </tr>
  </tbody>
</table>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table table-reflow"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;thead&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th&gt;</span>#<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Table heading<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Table heading<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Table heading<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Table heading<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Table heading<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Table heading<span class="nt">&lt;/th&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/thead&gt;</span>
  <span class="nt">&lt;tbody&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Table cell<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Table cell<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Table cell<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Table cell<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Table cell<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Table cell<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Table cell<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Table cell<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Table cell<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Table cell<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Table cell<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Table cell<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th</span> <span class="na">scope=</span><span class="s">"row"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;td&gt;</span>Table cell<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Table cell<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Table cell<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Table cell<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Table cell<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Table cell<span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span></code></pre></div>


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

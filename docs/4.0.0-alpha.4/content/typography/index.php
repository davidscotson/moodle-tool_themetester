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
$PAGE->set_heading("Typography");
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
        
          
          
          

          

          <li class="active bd-sidenav-active">
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
          <h1 class="bd-title" id="content">Typography</h1>
          <p>Bootstrap includes simple and easily customized typography for headings, body text, lists, and more. For even more control, check out the <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/components/utilities/">textual utility classes</a>.</p>

<h2 id="contents">Contents</h2>

<ul id="markdown-toc">
  <li><a href="#contents" id="markdown-toc-contents">Contents</a></li>
  <li><a href="#global-settings" id="markdown-toc-global-settings">Global settings</a></li>
  <li><a href="#headings" id="markdown-toc-headings">Headings</a>    <ul>
      <li><a href="#customizing-headings" id="markdown-toc-customizing-headings">Customizing headings</a></li>
    </ul>
  </li>
  <li><a href="#display-headings" id="markdown-toc-display-headings">Display headings</a></li>
  <li><a href="#lead" id="markdown-toc-lead">Lead</a></li>
  <li><a href="#inline-text-elements" id="markdown-toc-inline-text-elements">Inline text elements</a></li>
  <li><a href="#text-utilities" id="markdown-toc-text-utilities">Text utilities</a></li>
  <li><a href="#abbreviations" id="markdown-toc-abbreviations">Abbreviations</a></li>
  <li><a href="#blockquotes" id="markdown-toc-blockquotes">Blockquotes</a>    <ul>
      <li><a href="#naming-a-source" id="markdown-toc-naming-a-source">Naming a source</a></li>
      <li><a href="#reverse-layout" id="markdown-toc-reverse-layout">Reverse layout</a></li>
    </ul>
  </li>
  <li><a href="#lists" id="markdown-toc-lists">Lists</a>    <ul>
      <li><a href="#unstyled" id="markdown-toc-unstyled">Unstyled</a></li>
      <li><a href="#inline" id="markdown-toc-inline">Inline</a></li>
      <li><a href="#description-list-alignment" id="markdown-toc-description-list-alignment">Description list alignment</a></li>
    </ul>
  </li>
  <li><a href="#responsive-typography" id="markdown-toc-responsive-typography">Responsive typography</a></li>
</ul>

<h2 id="global-settings">Global settings</h2>

<p>Bootstrap sets basic global display, typography, and link styles. Specifically, we:</p>

<ul>
  <li>Use a <a href="/content/reboot/#native-font-stack">native font stack</a> that selects the best <code class="highlighter-rouge">font-family</code> for each OS and device.</li>
  <li>Use the <code class="highlighter-rouge">$font-family-base</code>, <code class="highlighter-rouge">$font-size-base</code>, and <code class="highlighter-rouge">$line-height-base</code> attributes as our typographic base applied to the <code class="highlighter-rouge">&lt;body&gt;</code>.</li>
  <li>Set the global link color via <code class="highlighter-rouge">$link-color</code> and apply link underlines only on <code class="highlighter-rouge">:hover</code>.</li>
  <li>Use <code class="highlighter-rouge">$body-bg</code> to set a <code class="highlighter-rouge">background-color</code> on the <code class="highlighter-rouge">&lt;body&gt;</code> (<code class="highlighter-rouge">#fff</code> by default).</li>
</ul>

<p>These styles can be found within <code class="highlighter-rouge">_reboot.scss</code>, and the global variables are defined in <code class="highlighter-rouge">_variables.scss</code>.</p>

<h2 id="headings">Headings</h2>

<p>All HTML headings, <code class="highlighter-rouge">&lt;h1&gt;</code> through <code class="highlighter-rouge">&lt;h6&gt;</code>, are available.</p>

<div class="bd-example bd-example-type">
  <table class="table">
    <tbody>
      <tr>
        <td><h1>h1. Bootstrap heading</h1></td>
        <td class="type-info">Semibold 36px</td>
      </tr>
      <tr>
        <td><h2>h2. Bootstrap heading</h2></td>
        <td class="type-info">Semibold 30px</td>
      </tr>
      <tr>
        <td><h3>h3. Bootstrap heading</h3></td>
        <td class="type-info">Semibold 24px</td>
      </tr>
      <tr>
        <td><h4>h4. Bootstrap heading</h4></td>
        <td class="type-info">Semibold 18px</td>
      </tr>
      <tr>
        <td><h5>h5. Bootstrap heading</h5></td>
        <td class="type-info">Semibold 14px</td>
      </tr>
      <tr>
        <td><h6>h6. Bootstrap heading</h6></td>
        <td class="type-info">Semibold 12px</td>
      </tr>
    </tbody>
  </table>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;h1&gt;</span>h1. Bootstrap heading<span class="nt">&lt;/h1&gt;</span>
<span class="nt">&lt;h2&gt;</span>h2. Bootstrap heading<span class="nt">&lt;/h2&gt;</span>
<span class="nt">&lt;h3&gt;</span>h3. Bootstrap heading<span class="nt">&lt;/h3&gt;</span>
<span class="nt">&lt;h4&gt;</span>h4. Bootstrap heading<span class="nt">&lt;/h4&gt;</span>
<span class="nt">&lt;h5&gt;</span>h5. Bootstrap heading<span class="nt">&lt;/h5&gt;</span>
<span class="nt">&lt;h6&gt;</span>h6. Bootstrap heading<span class="nt">&lt;/h6&gt;</span></code></pre></figure>

<p><code class="highlighter-rouge">.h1</code> through <code class="highlighter-rouge">.h6</code> classes are also available, for when you want to match the font styling of a heading but cannot use the associated HTML element.</p>

<div class="bd-example" data-example-id="">
<p class="h1">h1. Bootstrap heading</p>
<p class="h2">h2. Bootstrap heading</p>
<p class="h3">h3. Bootstrap heading</p>
<p class="h4">h4. Bootstrap heading</p>
<p class="h5">h5. Bootstrap heading</p>
<p class="h6">h6. Bootstrap heading</p>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"h1"</span><span class="nt">&gt;</span>h1. Bootstrap heading<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"h2"</span><span class="nt">&gt;</span>h2. Bootstrap heading<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"h3"</span><span class="nt">&gt;</span>h3. Bootstrap heading<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"h4"</span><span class="nt">&gt;</span>h4. Bootstrap heading<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"h5"</span><span class="nt">&gt;</span>h5. Bootstrap heading<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"h6"</span><span class="nt">&gt;</span>h6. Bootstrap heading<span class="nt">&lt;/p&gt;</span></code></pre></div>

<h3 id="customizing-headings">Customizing headings</h3>

<p>Use the included utility classes to recreate the small secondary heading text from Bootstrap 3.</p>

<div class="bd-example" data-example-id="">
<h3>
  Fancy display heading
  <small class="text-muted">With faded secondary text</small>
</h3>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;h3&gt;</span>
  Fancy display heading
  <span class="nt">&lt;small</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>With faded secondary text<span class="nt">&lt;/small&gt;</span>
<span class="nt">&lt;/h3&gt;</span></code></pre></div>

<h2 id="display-headings">Display headings</h2>

<p>Traditional heading elements are designed to work best in the meat of your page content. When you need a heading to stand out, consider using a <strong>display heading</strong>—a larger, slightly more opinionated heading style.</p>

<div class="bd-example bd-example-type">
  <table class="table">
    <tbody>
      <tr>
        <td><h1 class="display-1">Display 1</h1></td>
      </tr>
      <tr>
      <td><h1 class="display-2">Display 2</h1></td>
      </tr>
      <tr>
      <td><h1 class="display-3">Display 3</h1></td>
      </tr>
      <tr>
      <td><h1 class="display-4">Display 4</h1></td>
      </tr>
    </tbody>
  </table>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">"display-1"</span><span class="nt">&gt;</span>Display 1<span class="nt">&lt;/h1&gt;</span>
<span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">"display-2"</span><span class="nt">&gt;</span>Display 2<span class="nt">&lt;/h1&gt;</span>
<span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">"display-3"</span><span class="nt">&gt;</span>Display 3<span class="nt">&lt;/h1&gt;</span>
<span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">"display-4"</span><span class="nt">&gt;</span>Display 4<span class="nt">&lt;/h1&gt;</span></code></pre></figure>

<h2 id="lead">Lead</h2>

<p>Make a paragraph stand out by adding <code class="highlighter-rouge">.lead</code>.</p>

<div class="bd-example" data-example-id="">
<p class="lead">
  Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.
</p>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"lead"</span><span class="nt">&gt;</span>
  Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.
<span class="nt">&lt;/p&gt;</span></code></pre></div>

<h2 id="inline-text-elements">Inline text elements</h2>

<p>Styling for common inline HTML5 elements.</p>

<div class="bd-example" data-example-id="">
<p>You can use the mark tag to <mark>highlight</mark> text.</p>
<p><del>This line of text is meant to be treated as deleted text.</del></p>
<p><s>This line of text is meant to be treated as no longer accurate.</s></p>
<p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
<p><u>This line of text will render as underlined</u></p>
<p><small>This line of text is meant to be treated as fine print.</small></p>
<p><strong>This line rendered as bold text.</strong></p>
<p><em>This line rendered as italicized text.</em></p>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;p&gt;</span>You can use the mark tag to <span class="nt">&lt;mark&gt;</span>highlight<span class="nt">&lt;/mark&gt;</span> text.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p&gt;&lt;del&gt;</span>This line of text is meant to be treated as deleted text.<span class="nt">&lt;/del&gt;&lt;/p&gt;</span>
<span class="nt">&lt;p&gt;&lt;s&gt;</span>This line of text is meant to be treated as no longer accurate.<span class="nt">&lt;/s&gt;&lt;/p&gt;</span>
<span class="nt">&lt;p&gt;&lt;ins&gt;</span>This line of text is meant to be treated as an addition to the document.<span class="nt">&lt;/ins&gt;&lt;/p&gt;</span>
<span class="nt">&lt;p&gt;&lt;u&gt;</span>This line of text will render as underlined<span class="nt">&lt;/u&gt;&lt;/p&gt;</span>
<span class="nt">&lt;p&gt;&lt;small&gt;</span>This line of text is meant to be treated as fine print.<span class="nt">&lt;/small&gt;&lt;/p&gt;</span>
<span class="nt">&lt;p&gt;&lt;strong&gt;</span>This line rendered as bold text.<span class="nt">&lt;/strong&gt;&lt;/p&gt;</span>
<span class="nt">&lt;p&gt;&lt;em&gt;</span>This line rendered as italicized text.<span class="nt">&lt;/em&gt;&lt;/p&gt;</span></code></pre></div>

<p><code class="highlighter-rouge">.mark</code> and <code class="highlighter-rouge">.small</code> classes are also available to apply the same styles as <code class="highlighter-rouge">&lt;mark&gt;</code> and <code class="highlighter-rouge">&lt;small&gt;</code> while avoiding any unwanted semantic implications that the tags would bring.</p>

<p>While not shown above, feel free to use <code class="highlighter-rouge">&lt;b&gt;</code> and <code class="highlighter-rouge">&lt;i&gt;</code> in HTML5. <code class="highlighter-rouge">&lt;b&gt;</code> is meant to highlight words or phrases without conveying additional importance while <code class="highlighter-rouge">&lt;i&gt;</code> is mostly for voice, technical terms, etc.</p>

<h2 id="text-utilities">Text utilities</h2>

<p>Change text alignment, transform, style, weight, and color with our <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/components/utilities/#text-alignment">text utilities</a>.</p>

<h2 id="abbreviations">Abbreviations</h2>

<p>Stylized implementation of HTML’s <code class="highlighter-rouge">&lt;abbr&gt;</code> element for abbreviations and acronyms to show the expanded version on hover. Abbreviations with a <code class="highlighter-rouge">title</code> attribute have a light dotted bottom border and a help cursor on hover, providing additional context on hover and to users of assistive technologies.</p>

<p>Add <code class="highlighter-rouge">.initialism</code> to an abbreviation for a slightly smaller font-size.</p>

<div class="bd-example" data-example-id="">
<p><abbr title="attribute">attr</abbr></p>
<p><abbr title="HyperText Markup Language" class="initialism">HTML</abbr></p>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;p&gt;&lt;abbr</span> <span class="na">title=</span><span class="s">"attribute"</span><span class="nt">&gt;</span>attr<span class="nt">&lt;/abbr&gt;&lt;/p&gt;</span>
<span class="nt">&lt;p&gt;&lt;abbr</span> <span class="na">title=</span><span class="s">"HyperText Markup Language"</span> <span class="na">class=</span><span class="s">"initialism"</span><span class="nt">&gt;</span>HTML<span class="nt">&lt;/abbr&gt;&lt;/p&gt;</span></code></pre></div>

<h2 id="blockquotes">Blockquotes</h2>

<p>For quoting blocks of content from another source within your document. Wrap <code class="highlighter-rouge">&lt;blockquote class="blockquote"&gt;</code> around any <abbr title="HyperText Markup Language">HTML</abbr> as the quote.</p>

<div class="bd-example" data-example-id="">
<blockquote class="blockquote">
  <p class="m-b-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
</blockquote>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;blockquote</span> <span class="na">class=</span><span class="s">"blockquote"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"m-b-0"</span><span class="nt">&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;/blockquote&gt;</span></code></pre></div>

<h3 id="naming-a-source">Naming a source</h3>

<p>Add a <code class="highlighter-rouge">&lt;footer class="blockquote-footer"&gt;</code> for identifying the source. Wrap the name of the source work in <code class="highlighter-rouge">&lt;cite&gt;</code>.</p>

<div class="bd-example" data-example-id="">
<blockquote class="blockquote">
  <p class="m-b-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
  <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
</blockquote>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;blockquote</span> <span class="na">class=</span><span class="s">"blockquote"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"m-b-0"</span><span class="nt">&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;footer</span> <span class="na">class=</span><span class="s">"blockquote-footer"</span><span class="nt">&gt;</span>Someone famous in <span class="nt">&lt;cite</span> <span class="na">title=</span><span class="s">"Source Title"</span><span class="nt">&gt;</span>Source Title<span class="nt">&lt;/cite&gt;&lt;/footer&gt;</span>
<span class="nt">&lt;/blockquote&gt;</span></code></pre></div>

<h3 id="reverse-layout">Reverse layout</h3>

<p>Add <code class="highlighter-rouge">.blockquote-reverse</code> for a blockquote with right-aligned content.</p>

<div class="bd-example" data-example-id="">
<blockquote class="blockquote blockquote-reverse">
  <p class="m-b-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
  <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
</blockquote>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;blockquote</span> <span class="na">class=</span><span class="s">"blockquote blockquote-reverse"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"m-b-0"</span><span class="nt">&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;footer</span> <span class="na">class=</span><span class="s">"blockquote-footer"</span><span class="nt">&gt;</span>Someone famous in <span class="nt">&lt;cite</span> <span class="na">title=</span><span class="s">"Source Title"</span><span class="nt">&gt;</span>Source Title<span class="nt">&lt;/cite&gt;&lt;/footer&gt;</span>
<span class="nt">&lt;/blockquote&gt;</span></code></pre></div>

<h2 id="lists">Lists</h2>

<h3 id="unstyled">Unstyled</h3>

<p>Remove the default <code class="highlighter-rouge">list-style</code> and left margin on list items (immediate children only). <strong>This only applies to immediate children list items</strong>, meaning you will need to add the class for any nested lists as well.</p>

<div class="bd-example" data-example-id="">
<ul class="list-unstyled">
  <li>Lorem ipsum dolor sit amet</li>
  <li>Consectetur adipiscing elit</li>
  <li>Integer molestie lorem at massa</li>
  <li>Facilisis in pretium nisl aliquet</li>
  <li>Nulla volutpat aliquam velit
    <ul>
      <li>Phasellus iaculis neque</li>
      <li>Purus sodales ultricies</li>
      <li>Vestibulum laoreet porttitor sem</li>
      <li>Ac tristique libero volutpat at</li>
    </ul>
  </li>
  <li>Faucibus porta lacus fringilla vel</li>
  <li>Aenean sit amet erat nunc</li>
  <li>Eget porttitor lorem</li>
</ul>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"list-unstyled"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li&gt;</span>Lorem ipsum dolor sit amet<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;</span>Consectetur adipiscing elit<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;</span>Integer molestie lorem at massa<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;</span>Facilisis in pretium nisl aliquet<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;</span>Nulla volutpat aliquam velit
    <span class="nt">&lt;ul&gt;</span>
      <span class="nt">&lt;li&gt;</span>Phasellus iaculis neque<span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li&gt;</span>Purus sodales ultricies<span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li&gt;</span>Vestibulum laoreet porttitor sem<span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li&gt;</span>Ac tristique libero volutpat at<span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;/ul&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;</span>Faucibus porta lacus fringilla vel<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;</span>Aenean sit amet erat nunc<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;</span>Eget porttitor lorem<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span></code></pre></div>

<h3 id="inline">Inline</h3>

<p>Remove a list’s bullets and apply some light <code class="highlighter-rouge">margin</code> with a combination of two classes, <code class="highlighter-rouge">.list-inline</code> and <code class="highlighter-rouge">.list-inline-item</code>.</p>

<div class="bd-example" data-example-id="">
<ul class="list-inline">
  <li class="list-inline-item">Lorem ipsum</li>
  <li class="list-inline-item">Phasellus iaculis</li>
  <li class="list-inline-item">Nulla volutpat</li>
</ul>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"list-inline"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-inline-item"</span><span class="nt">&gt;</span>Lorem ipsum<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-inline-item"</span><span class="nt">&gt;</span>Phasellus iaculis<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-inline-item"</span><span class="nt">&gt;</span>Nulla volutpat<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span></code></pre></div>

<h3 id="description-list-alignment">Description list alignment</h3>

<p>Align terms and descriptions horizontally by using our grid system’s predefined classes (or semantic mixins). For longer terms, you can optionally add a <code class="highlighter-rouge">.text-truncate</code> class to truncate the text with an ellipsis.</p>

<div class="bd-example" data-example-id="">
<dl class="row">
  <dt class="col-sm-3">Description lists</dt>
  <dd class="col-sm-9">A description list is perfect for defining terms.</dd>

  <dt class="col-sm-3">Euismod</dt>
  <dd class="col-sm-9">Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
  <dd class="col-sm-9 offset-sm-3">Donec id elit non mi porta gravida at eget metus.</dd>

  <dt class="col-sm-3">Malesuada porta</dt>
  <dd class="col-sm-9">Etiam porta sem malesuada magna mollis euismod.</dd>

  <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
  <dd class="col-sm-9">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>

  <dt class="col-sm-3">Nesting</dt>
  <dd class="col-sm-9">
    <dl class="row">
      <dt class="col-sm-4">Nested definition list</dt>
      <dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.</dd>
    </dl>
  </dd>
</dl>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;dl</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;dt</span> <span class="na">class=</span><span class="s">"col-sm-3"</span><span class="nt">&gt;</span>Description lists<span class="nt">&lt;/dt&gt;</span>
  <span class="nt">&lt;dd</span> <span class="na">class=</span><span class="s">"col-sm-9"</span><span class="nt">&gt;</span>A description list is perfect for defining terms.<span class="nt">&lt;/dd&gt;</span>

  <span class="nt">&lt;dt</span> <span class="na">class=</span><span class="s">"col-sm-3"</span><span class="nt">&gt;</span>Euismod<span class="nt">&lt;/dt&gt;</span>
  <span class="nt">&lt;dd</span> <span class="na">class=</span><span class="s">"col-sm-9"</span><span class="nt">&gt;</span>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.<span class="nt">&lt;/dd&gt;</span>
  <span class="nt">&lt;dd</span> <span class="na">class=</span><span class="s">"col-sm-9 offset-sm-3"</span><span class="nt">&gt;</span>Donec id elit non mi porta gravida at eget metus.<span class="nt">&lt;/dd&gt;</span>

  <span class="nt">&lt;dt</span> <span class="na">class=</span><span class="s">"col-sm-3"</span><span class="nt">&gt;</span>Malesuada porta<span class="nt">&lt;/dt&gt;</span>
  <span class="nt">&lt;dd</span> <span class="na">class=</span><span class="s">"col-sm-9"</span><span class="nt">&gt;</span>Etiam porta sem malesuada magna mollis euismod.<span class="nt">&lt;/dd&gt;</span>

  <span class="nt">&lt;dt</span> <span class="na">class=</span><span class="s">"col-sm-3 text-truncate"</span><span class="nt">&gt;</span>Truncated term is truncated<span class="nt">&lt;/dt&gt;</span>
  <span class="nt">&lt;dd</span> <span class="na">class=</span><span class="s">"col-sm-9"</span><span class="nt">&gt;</span>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.<span class="nt">&lt;/dd&gt;</span>

  <span class="nt">&lt;dt</span> <span class="na">class=</span><span class="s">"col-sm-3"</span><span class="nt">&gt;</span>Nesting<span class="nt">&lt;/dt&gt;</span>
  <span class="nt">&lt;dd</span> <span class="na">class=</span><span class="s">"col-sm-9"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;dl</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;dt</span> <span class="na">class=</span><span class="s">"col-sm-4"</span><span class="nt">&gt;</span>Nested definition list<span class="nt">&lt;/dt&gt;</span>
      <span class="nt">&lt;dd</span> <span class="na">class=</span><span class="s">"col-sm-8"</span><span class="nt">&gt;</span>Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.<span class="nt">&lt;/dd&gt;</span>
    <span class="nt">&lt;/dl&gt;</span>
  <span class="nt">&lt;/dd&gt;</span>
<span class="nt">&lt;/dl&gt;</span></code></pre></div>

<h2 id="responsive-typography">Responsive typography</h2>

<p><em>Responsive typography</em> refers to scaling text and components by simply adjusting the root element’s <code class="highlighter-rouge">font-size</code> within a series of media queries. Bootstrap doesn’t do this for you, but it’s fairly easy to add if you need it.</p>

<p>Here’s an example of it in practice. Choose whatever <code class="highlighter-rouge">font-size</code>s and media queries you wish.</p>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="nt">html</span> <span class="p">{</span>
  <span class="nl">font-size</span><span class="p">:</span> <span class="m">14px</span><span class="p">;</span>
<span class="p">}</span>

<span class="k">@include</span> <span class="nd">media-breakpoint-up</span><span class="p">(</span><span class="n">sm</span><span class="p">)</span> <span class="p">{</span>
  <span class="nt">html</span> <span class="p">{</span>
    <span class="nl">font-size</span><span class="p">:</span> <span class="m">16px</span><span class="p">;</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="k">@include</span> <span class="nd">media-breakpoint-up</span><span class="p">(</span><span class="n">md</span><span class="p">)</span> <span class="p">{</span>
  <span class="nt">html</span> <span class="p">{</span>
    <span class="nl">font-size</span><span class="p">:</span> <span class="m">20px</span><span class="p">;</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="k">@include</span> <span class="nd">media-breakpoint-up</span><span class="p">(</span><span class="n">lg</span><span class="p">)</span> <span class="p">{</span>
  <span class="nt">html</span> <span class="p">{</span>
    <span class="nl">font-size</span><span class="p">:</span> <span class="m">28px</span><span class="p">;</span>
  <span class="p">}</span>
<span class="p">}</span></code></pre></figure>


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

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
$PAGE->set_heading("Buttons");
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
  
  
  
  

  

  <div class="bd-toc-item active">
    
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
        
          
          
          

          

          <li class="active bd-sidenav-active">
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
          <h1 class="bd-title" id="content">Buttons</h1>
          <p>Use Bootstrap’s custom button styles for actions in forms, dialogs, and more. Includes support for a handful of contextual variations, sizes, states, and more.</p>

<h2 id="contents">Contents</h2>

<ul id="markdown-toc">
  <li><a href="#contents" id="markdown-toc-contents">Contents</a></li>
  <li><a href="#examples" id="markdown-toc-examples">Examples</a></li>
  <li><a href="#button-tags" id="markdown-toc-button-tags">Button tags</a></li>
  <li><a href="#outline-buttons" id="markdown-toc-outline-buttons">Outline buttons</a></li>
  <li><a href="#sizes" id="markdown-toc-sizes">Sizes</a></li>
  <li><a href="#active-state" id="markdown-toc-active-state">Active state</a></li>
  <li><a href="#disabled-state" id="markdown-toc-disabled-state">Disabled state</a></li>
  <li><a href="#button-plugin" id="markdown-toc-button-plugin">Button plugin</a>    <ul>
      <li><a href="#toggle-states" id="markdown-toc-toggle-states">Toggle states</a></li>
      <li><a href="#checkbox-and-radio-buttons" id="markdown-toc-checkbox-and-radio-buttons">Checkbox and radio buttons</a></li>
      <li><a href="#methods" id="markdown-toc-methods">Methods</a></li>
    </ul>
  </li>
</ul>

<h2 id="examples">Examples</h2>

<p>Bootstrap includes six predefined button styles, each serving its own semantic purpose.</p>

<div class="bd-example" data-example-id="">
<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
<button type="button" class="btn btn-primary">Primary</button>

<!-- Secondary, outline button -->
<button type="button" class="btn btn-secondary">Secondary</button>

<!-- Indicates a successful or positive action -->
<button type="button" class="btn btn-success">Success</button>

<!-- Contextual button for informational alert messages -->
<button type="button" class="btn btn-info">Info</button>

<!-- Indicates caution should be taken with this action -->
<button type="button" class="btn btn-warning">Warning</button>

<!-- Indicates a dangerous or potentially negative action -->
<button type="button" class="btn btn-danger">Danger</button>

<!-- Deemphasize a button by making it look like a link while maintaining button behavior -->
<button type="button" class="btn btn-link">Link</button>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- Provides extra visual weight and identifies the primary action in a set of buttons --&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Primary<span class="nt">&lt;/button&gt;</span>

<span class="c">&lt;!-- Secondary, outline button --&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span><span class="nt">&gt;</span>Secondary<span class="nt">&lt;/button&gt;</span>

<span class="c">&lt;!-- Indicates a successful or positive action --&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-success"</span><span class="nt">&gt;</span>Success<span class="nt">&lt;/button&gt;</span>

<span class="c">&lt;!-- Contextual button for informational alert messages --&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-info"</span><span class="nt">&gt;</span>Info<span class="nt">&lt;/button&gt;</span>

<span class="c">&lt;!-- Indicates caution should be taken with this action --&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-warning"</span><span class="nt">&gt;</span>Warning<span class="nt">&lt;/button&gt;</span>

<span class="c">&lt;!-- Indicates a dangerous or potentially negative action --&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-danger"</span><span class="nt">&gt;</span>Danger<span class="nt">&lt;/button&gt;</span>

<span class="c">&lt;!-- Deemphasize a button by making it look like a link while maintaining button behavior --&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-link"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/button&gt;</span></code></pre></div>

<div class="bd-callout bd-callout-warning">
<h4 id="conveying-meaning-to-assistive-technologies">Conveying meaning to assistive technologies</h4>

<p>Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies – such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (e.g. the visible text), or is included through alternative means, such as additional text hidden with the <code class="highlighter-rouge">.sr-only</code> class.</p>
</div>

<h2 id="button-tags">Button tags</h2>

<p>The <code class="highlighter-rouge">.btn</code> classes are designed to be used with the <code class="highlighter-rouge">&lt;button&gt;</code> element. However, you can also use these classes on <code class="highlighter-rouge">&lt;a&gt;</code> or <code class="highlighter-rouge">&lt;input&gt;</code> elements (though some browsers may apply a slightly different rendering).</p>

<p>When using button classes on <code class="highlighter-rouge">&lt;a&gt;</code> elements that are used to trigger in-page functionality (like collapsing content), rather than linking to new pages or sections within the current page, these links should be given a <code class="highlighter-rouge">role="button"</code> to appropriately convey their purpose to assistive technologies such as screen readers.</p>

<div class="bd-example" data-example-id="">
<a class="btn btn-primary" href="#" role="button">Link</a>
<button class="btn btn-primary" type="submit">Button</button>
<input class="btn btn-primary" type="button" value="Input" />
<input class="btn btn-primary" type="submit" value="Submit" />
<input class="btn btn-primary" type="reset" value="Reset" />
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">role=</span><span class="s">"button"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span> <span class="na">type=</span><span class="s">"submit"</span><span class="nt">&gt;</span>Button<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">value=</span><span class="s">"Input"</span><span class="nt">&gt;</span>
<span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">value=</span><span class="s">"Submit"</span><span class="nt">&gt;</span>
<span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span> <span class="na">type=</span><span class="s">"reset"</span> <span class="na">value=</span><span class="s">"Reset"</span><span class="nt">&gt;</span></code></pre></div>

<h2 id="outline-buttons">Outline buttons</h2>

<p>In need of a button, but not the hefty background colors they bring? Replace the default modifier classes with the <code class="highlighter-rouge">.btn-outline-*</code> ones to remove all background images and colors on any button.</p>

<div class="bd-example" data-example-id="">
<button type="button" class="btn btn-outline-primary">Primary</button>
<button type="button" class="btn btn-outline-secondary">Secondary</button>
<button type="button" class="btn btn-outline-success">Success</button>
<button type="button" class="btn btn-outline-info">Info</button>
<button type="button" class="btn btn-outline-warning">Warning</button>
<button type="button" class="btn btn-outline-danger">Danger</button>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-outline-primary"</span><span class="nt">&gt;</span>Primary<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-outline-secondary"</span><span class="nt">&gt;</span>Secondary<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-outline-success"</span><span class="nt">&gt;</span>Success<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-outline-info"</span><span class="nt">&gt;</span>Info<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-outline-warning"</span><span class="nt">&gt;</span>Warning<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-outline-danger"</span><span class="nt">&gt;</span>Danger<span class="nt">&lt;/button&gt;</span></code></pre></div>

<h2 id="sizes">Sizes</h2>

<p>Fancy larger or smaller buttons? Add <code class="highlighter-rouge">.btn-lg</code> or <code class="highlighter-rouge">.btn-sm</code> for additional sizes.</p>

<div class="bd-example" data-example-id="">
<button type="button" class="btn btn-primary btn-lg">Large button</button>
<button type="button" class="btn btn-secondary btn-lg">Large button</button>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-lg"</span><span class="nt">&gt;</span>Large button<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary btn-lg"</span><span class="nt">&gt;</span>Large button<span class="nt">&lt;/button&gt;</span></code></pre></div>

<div class="bd-example" data-example-id="">
<button type="button" class="btn btn-primary btn-sm">Small button</button>
<button type="button" class="btn btn-secondary btn-sm">Small button</button>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-sm"</span><span class="nt">&gt;</span>Small button<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary btn-sm"</span><span class="nt">&gt;</span>Small button<span class="nt">&lt;/button&gt;</span></code></pre></div>

<p>Create block level buttons—those that span the full width of a parent—by adding <code class="highlighter-rouge">.btn-block</code>.</p>

<div class="bd-example" data-example-id="">
<button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
<button type="button" class="btn btn-secondary btn-lg btn-block">Block level button</button>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-lg btn-block"</span><span class="nt">&gt;</span>Block level button<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary btn-lg btn-block"</span><span class="nt">&gt;</span>Block level button<span class="nt">&lt;/button&gt;</span></code></pre></div>

<h2 id="active-state">Active state</h2>

<p>Buttons will appear pressed (with a darker background, darker border, and inset shadow) when active. <strong>There’s no need to add a class to <code class="highlighter-rouge">&lt;button&gt;</code>s as they use a pseudo-class</strong>. However, you can still force the same active appearance with <code class="highlighter-rouge">.active</code> (and include the <code>aria-pressed="true"</code> attribute) should you need to replicate the state programmatically.</p>

<div class="bd-example" data-example-id="">
<a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Primary link</a>
<a href="#" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Link</a>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-lg active"</span> <span class="na">role=</span><span class="s">"button"</span> <span class="na">aria-pressed=</span><span class="s">"true"</span><span class="nt">&gt;</span>Primary link<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-secondary btn-lg active"</span> <span class="na">role=</span><span class="s">"button"</span> <span class="na">aria-pressed=</span><span class="s">"true"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span></code></pre></div>

<h2 id="disabled-state">Disabled state</h2>

<p>Make buttons look inactive by adding the <code class="highlighter-rouge">disabled</code> boolean attribute to any <code class="highlighter-rouge">&lt;button&gt;</code> element.</p>

<div class="bd-callout bd-callout-info">
<p><strong>Heads up!</strong> IE9 and below render disabled buttons with gray, shadowed text that we can’t override.</p>
</div>

<div class="bd-example" data-example-id="">
<button type="button" class="btn btn-lg btn-primary" disabled="">Primary button</button>
<button type="button" class="btn btn-secondary btn-lg" disabled="">Button</button>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-lg btn-primary"</span> <span class="na">disabled</span><span class="nt">&gt;</span>Primary button<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary btn-lg"</span> <span class="na">disabled</span><span class="nt">&gt;</span>Button<span class="nt">&lt;/button&gt;</span></code></pre></div>

<p>Disabled buttons using the <code class="highlighter-rouge">&lt;a&gt;</code> element behave a bit different:</p>

<ul>
  <li><code class="highlighter-rouge">&lt;a&gt;</code>s don’t support the <code class="highlighter-rouge">disabled</code> attribute, so you must add the <code class="highlighter-rouge">.disabled</code> class to make it visually appear disabled.</li>
  <li>Some future-friendly styles are included to disable all <code class="highlighter-rouge">pointer-events</code> on anchor buttons. In browsers which support that property, you won’t see the disabled cursor at all.</li>
  <li>Disabled buttons should include the <code class="highlighter-rouge">aria-disabled="true"</code> attribute to indicate the state of the element to assistive technologies.</li>
</ul>

<div class="bd-example" data-example-id="">
<a href="#" class="btn btn-primary btn-lg disabled" role="button" aria-disabled="true">Primary link</a>
<a href="#" class="btn btn-secondary btn-lg disabled" role="button" aria-disabled="true">Link</a>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-lg disabled"</span> <span class="na">role=</span><span class="s">"button"</span> <span class="na">aria-disabled=</span><span class="s">"true"</span><span class="nt">&gt;</span>Primary link<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-secondary btn-lg disabled"</span> <span class="na">role=</span><span class="s">"button"</span> <span class="na">aria-disabled=</span><span class="s">"true"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span></code></pre></div>

<div class="bd-callout bd-callout-warning">
<h4 id="link-functionality-caveat">Link functionality caveat</h4>

<p>The <code class="highlighter-rouge">.disabled</code> class uses <code class="highlighter-rouge">pointer-events: none</code> to try to disable the link functionality of <code class="highlighter-rouge">&lt;a&gt;</code>s, but that CSS property is not yet standardized. In addition, even in browsers that do support <code class="highlighter-rouge">pointer-events: none</code>, keyboard navigation remains unaffected, meaning that sighted keyboard users and users of assistive technologies will still be able to activate these links. So to be safe, add a <code class="highlighter-rouge">tabindex="-1"</code> attribute on these links (to prevent them from receiving keyboard focus) and use custom JavaScript to disable their functionality.</p>
</div>

<h2 id="button-plugin">Button plugin</h2>

<p>Do more with buttons. Control button states or create groups of buttons for more components like toolbars.</p>

<h3 id="toggle-states">Toggle states</h3>

<p>Add <code class="highlighter-rouge">data-toggle="button"</code> to toggle a button’s <code class="highlighter-rouge">active</code> state. If you’re pre-toggling a button, you must manually add the <code class="highlighter-rouge">.active</code> class <strong>and</strong> <code class="highlighter-rouge">aria-pressed="true"</code> to the <code class="highlighter-rouge">&lt;button&gt;</code>.</p>

<div class="bd-example" data-example-id="">
<button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
  Single toggle
</button>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span> <span class="na">data-toggle=</span><span class="s">"button"</span> <span class="na">aria-pressed=</span><span class="s">"false"</span> <span class="na">autocomplete=</span><span class="s">"off"</span><span class="nt">&gt;</span>
  Single toggle
<span class="nt">&lt;/button&gt;</span></code></pre></div>

<h3 id="checkbox-and-radio-buttons">Checkbox and radio buttons</h3>

<p>Bootstrap’s <code class="highlighter-rouge">.button</code> styles can be applied to other elements, such as <code class="highlighter-rouge">&lt;label&gt;</code>s, to provide checkbox or radio style button toggling. Add <code class="highlighter-rouge">data-toggle="buttons"</code> to a <code class="highlighter-rouge">.btn-group</code> containing those modified buttons to enable toggling in their respective styles.</p>

<p>The checked state for these buttons is <strong>only updated via <code class="highlighter-rouge">click</code> event</strong> on the button. If you use another method to update the input—e.g., with <code class="highlighter-rouge">&lt;input type="reset"&gt;</code> or by manually applying the input’s <code class="highlighter-rouge">checked</code> property—you’ll need to toggle <code class="highlighter-rouge">.active</code> on the <code class="highlighter-rouge">&lt;label&gt;</code> manually.</p>

<p>Note that pre-checked buttons require you to manually add the <code class="highlighter-rouge">.active</code> class to the input’s <code class="highlighter-rouge">&lt;label&gt;</code>.</p>

<div class="bd-example" data-example-id="">
<div class="btn-group" data-toggle="buttons">
  <label class="btn btn-primary active">
    <input type="checkbox" checked="" autocomplete="off" /> Checkbox 1 (pre-checked)
  </label>
  <label class="btn btn-primary">
    <input type="checkbox" autocomplete="off" /> Checkbox 2
  </label>
  <label class="btn btn-primary">
    <input type="checkbox" autocomplete="off" /> Checkbox 3
  </label>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span> <span class="na">data-toggle=</span><span class="s">"buttons"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"btn btn-primary active"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">checked</span> <span class="na">autocomplete=</span><span class="s">"off"</span><span class="nt">&gt;</span> Checkbox 1 (pre-checked)
  <span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">autocomplete=</span><span class="s">"off"</span><span class="nt">&gt;</span> Checkbox 2
  <span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">autocomplete=</span><span class="s">"off"</span><span class="nt">&gt;</span> Checkbox 3
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<div class="bd-example" data-example-id="">
<div class="btn-group" data-toggle="buttons">
  <label class="btn btn-primary active">
    <input type="radio" name="options" id="option1" autocomplete="off" checked="" /> Radio 1 (preselected)
  </label>
  <label class="btn btn-primary">
    <input type="radio" name="options" id="option2" autocomplete="off" /> Radio 2
  </label>
  <label class="btn btn-primary">
    <input type="radio" name="options" id="option3" autocomplete="off" /> Radio 3
  </label>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span> <span class="na">data-toggle=</span><span class="s">"buttons"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"btn btn-primary active"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"options"</span> <span class="na">id=</span><span class="s">"option1"</span> <span class="na">autocomplete=</span><span class="s">"off"</span> <span class="na">checked</span><span class="nt">&gt;</span> Radio 1 (preselected)
  <span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"options"</span> <span class="na">id=</span><span class="s">"option2"</span> <span class="na">autocomplete=</span><span class="s">"off"</span><span class="nt">&gt;</span> Radio 2
  <span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"options"</span> <span class="na">id=</span><span class="s">"option3"</span> <span class="na">autocomplete=</span><span class="s">"off"</span><span class="nt">&gt;</span> Radio 3
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h3 id="methods">Methods</h3>

<table>
  <thead>
    <tr>
      <th>Method</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><code class="highlighter-rouge">$().button('toggle')</code></td>
      <td>Toggles push state. Gives the button the appearance that it has been activated.</td>
    </tr>
  </tbody>
</table>

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

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
$PAGE->set_heading("Popovers");
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
        
          
          
          

          

          <li class="active bd-sidenav-active">
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
          <h1 class="bd-title" id="content">Popovers</h1>
          <p>Add small overlay content, like those found in iOS, to any element for housing secondary information.</p>

<h2 id="contents">Contents</h2>

<ul id="markdown-toc">
  <li><a href="#contents" id="markdown-toc-contents">Contents</a></li>
  <li><a href="#overview" id="markdown-toc-overview">Overview</a></li>
  <li><a href="#example-enable-popovers-everywhere" id="markdown-toc-example-enable-popovers-everywhere">Example: Enable popovers everywhere</a></li>
  <li><a href="#example-using-the-container-option" id="markdown-toc-example-using-the-container-option">Example: Using the <code class="highlighter-rouge">container</code> option</a></li>
  <li><a href="#static-popover" id="markdown-toc-static-popover">Static popover</a></li>
  <li><a href="#live-demo" id="markdown-toc-live-demo">Live demo</a>    <ul>
      <li><a href="#four-directions" id="markdown-toc-four-directions">Four directions</a></li>
      <li><a href="#dismiss-on-next-click" id="markdown-toc-dismiss-on-next-click">Dismiss on next click</a></li>
    </ul>
  </li>
  <li><a href="#usage" id="markdown-toc-usage">Usage</a>    <ul>
      <li><a href="#options" id="markdown-toc-options">Options</a></li>
      <li><a href="#methods" id="markdown-toc-methods">Methods</a>        <ul>
          <li><a href="#popoveroptions" id="markdown-toc-popoveroptions"><code class="highlighter-rouge">$().popover(options)</code></a></li>
          <li><a href="#popovershow" id="markdown-toc-popovershow"><code class="highlighter-rouge">.popover('show')</code></a></li>
          <li><a href="#popoverhide" id="markdown-toc-popoverhide"><code class="highlighter-rouge">.popover('hide')</code></a></li>
          <li><a href="#popovertoggle" id="markdown-toc-popovertoggle"><code class="highlighter-rouge">.popover('toggle')</code></a></li>
          <li><a href="#popoverdispose" id="markdown-toc-popoverdispose"><code class="highlighter-rouge">.popover('dispose')</code></a></li>
        </ul>
      </li>
      <li><a href="#events" id="markdown-toc-events">Events</a></li>
    </ul>
  </li>
</ul>

<h2 id="overview">Overview</h2>

<p>Things to know when using the popover plugin:</p>

<ul>
  <li>Popovers rely on the 3rd party library <a href="http://github.hubspot.com/tether/">Tether</a> for positioning. You must include <a href="https://github.com/HubSpot/tether/blob/master/dist/js/tether.min.js">tether.min.js</a> before bootstrap.js in order for popovers to work!</li>
  <li>Popovers require the <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/components/tooltips">tooltip plugin</a> as a dependency.</li>
  <li>Popovers are opt-in for performance reasons, so <strong>you must initialize them yourself</strong>.</li>
  <li>Zero-length <code class="highlighter-rouge">title</code> and <code class="highlighter-rouge">content</code> values will never show a popover.</li>
  <li>Specify <code class="highlighter-rouge">container: 'body'</code> to avoid rendering problems in more complex components (like our input groups, button groups, etc).</li>
  <li>Triggering popovers on hidden elements will not work.</li>
  <li>Popovers for <code class="highlighter-rouge">.disabled</code> or <code class="highlighter-rouge">disabled</code> elements must be triggered on a wrapper element.</li>
  <li>When triggered from hyperlinks that span multiple lines, popovers will be centered. Use <code class="highlighter-rouge">white-space: nowrap;</code> on your <code class="highlighter-rouge">&lt;a&gt;</code>s to avoid this behavior.</li>
</ul>

<p>Got all that? Great, let’s see how they work with some examples.</p>

<h2 id="example-enable-popovers-everywhere">Example: Enable popovers everywhere</h2>

<p>One way to initialize all popovers on a page would be to select them by their <code class="highlighter-rouge">data-toggle</code> attribute:</p>

<figure class="highlight"><pre><code class="language-js" data-lang="js"><span class="nx">$</span><span class="p">(</span><span class="kd">function</span> <span class="p">()</span> <span class="p">{</span>
  <span class="nx">$</span><span class="p">(</span><span class="s1">'[data-toggle="popover"]'</span><span class="p">).</span><span class="nx">popover</span><span class="p">()</span>
<span class="p">})</span></code></pre></figure>

<h2 id="example-using-the-container-option">Example: Using the <code class="highlighter-rouge">container</code> option</h2>

<p>When you have some styles on a parent element that interfere with a popover, you’ll want to specify a custom <code class="highlighter-rouge">container</code> so that the popover’s HTML appears within that element instead.</p>

<figure class="highlight"><pre><code class="language-js" data-lang="js"><span class="nx">$</span><span class="p">(</span><span class="kd">function</span> <span class="p">()</span> <span class="p">{</span>
  <span class="nx">$</span><span class="p">(</span><span class="s1">'.example-popover'</span><span class="p">).</span><span class="nx">popover</span><span class="p">({</span>
    <span class="na">container</span><span class="p">:</span> <span class="s1">'body'</span>
  <span class="p">})</span>
<span class="p">})</span></code></pre></figure>

<h2 id="static-popover">Static popover</h2>

<p>Four options are available: top, right, bottom, and left aligned.</p>

<div class="bd-example bd-example-popover-static">
  <div class="popover popover-top">
    <div class="popover-arrow"></div>
    <h3 class="popover-title">Popover top</h3>
    <div class="popover-content">
      <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
    </div>
  </div>

  <div class="popover popover-right">
    <div class="popover-arrow"></div>
    <h3 class="popover-title">Popover right</h3>
    <div class="popover-content">
      <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
    </div>
  </div>

  <div class="popover popover-bottom">
    <div class="popover-arrow"></div>
    <h3 class="popover-title">Popover bottom</h3>

    <div class="popover-content">
      <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
    </div>
  </div>

  <div class="popover popover-left">
    <div class="popover-arrow"></div>
    <h3 class="popover-title">Popover left</h3>
    <div class="popover-content">
      <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
    </div>
  </div>

  <div class="clearfix"></div>
</div>

<h2 id="live-demo">Live demo</h2>

<div class="bd-example" data-example-id="">
<button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-lg btn-danger"</span> <span class="na">data-toggle=</span><span class="s">"popover"</span> <span class="na">title=</span><span class="s">"Popover title"</span> <span class="na">data-content=</span><span class="s">"And here's some amazing content. It's very engaging. Right?"</span><span class="nt">&gt;</span>Click to toggle popover<span class="nt">&lt;/button&gt;</span></code></pre></div>

<h3 id="four-directions">Four directions</h3>

<div class="bd-example popover-demo">
  <div class="bd-example-popovers">
    <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
      Popover on top
    </button>
    <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
      Popover on right
    </button>
    <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
      Popover on bottom
    </button>
    <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
      Popover on left
    </button>
  </div>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span> <span class="na">data-container=</span><span class="s">"body"</span> <span class="na">data-toggle=</span><span class="s">"popover"</span> <span class="na">data-placement=</span><span class="s">"top"</span> <span class="na">data-content=</span><span class="s">"Vivamus sagittis lacus vel augue laoreet rutrum faucibus."</span><span class="nt">&gt;</span>
  Popover on top
<span class="nt">&lt;/button&gt;</span>

<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span> <span class="na">data-container=</span><span class="s">"body"</span> <span class="na">data-toggle=</span><span class="s">"popover"</span> <span class="na">data-placement=</span><span class="s">"right"</span> <span class="na">data-content=</span><span class="s">"Vivamus sagittis lacus vel augue laoreet rutrum faucibus."</span><span class="nt">&gt;</span>
  Popover on right
<span class="nt">&lt;/button&gt;</span>

<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span> <span class="na">data-container=</span><span class="s">"body"</span> <span class="na">data-toggle=</span><span class="s">"popover"</span> <span class="na">data-placement=</span><span class="s">"bottom"</span> <span class="na">data-content=</span><span class="s">"Vivamus
sagittis lacus vel augue laoreet rutrum faucibus."</span><span class="nt">&gt;</span>
  Popover on bottom
<span class="nt">&lt;/button&gt;</span>

<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span> <span class="na">data-container=</span><span class="s">"body"</span> <span class="na">data-toggle=</span><span class="s">"popover"</span> <span class="na">data-placement=</span><span class="s">"left"</span> <span class="na">data-content=</span><span class="s">"Vivamus sagittis lacus vel augue laoreet rutrum faucibus."</span><span class="nt">&gt;</span>
  Popover on left
<span class="nt">&lt;/button&gt;</span></code></pre></figure>

<h3 id="dismiss-on-next-click">Dismiss on next click</h3>

<p>Use the <code class="highlighter-rouge">focus</code> trigger to dismiss popovers on the next click that the user makes.</p>

<div class="bd-callout bd-callout-danger">
<h4 id="specific-markup-required-for-dismiss-on-next-click">Specific markup required for dismiss-on-next-click</h4>

<p>For proper cross-browser and cross-platform behavior, you must use the <code class="highlighter-rouge">&lt;a&gt;</code> tag, <em>not</em> the <code class="highlighter-rouge">&lt;button&gt;</code> tag, and you also must include a <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes#tabindex"><code class="highlighter-rouge">tabindex</code></a> attribute.</p>
</div>

<div class="bd-example" data-example-id="">
<a tabindex="0" class="btn btn-lg btn-danger" role="button" data-toggle="popover" data-trigger="focus" title="Dismissible popover" data-content="And here's some amazing content. It's very engaging. Right?">Dismissible popover</a>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;a</span> <span class="na">tabindex=</span><span class="s">"0"</span> <span class="na">class=</span><span class="s">"btn btn-lg btn-danger"</span> <span class="na">role=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"popover"</span> <span class="na">data-trigger=</span><span class="s">"focus"</span> <span class="na">title=</span><span class="s">"Dismissible popover"</span> <span class="na">data-content=</span><span class="s">"And here's some amazing content. It's very engaging. Right?"</span><span class="nt">&gt;</span>Dismissible popover<span class="nt">&lt;/a&gt;</span></code></pre></div>

<figure class="highlight"><pre><code class="language-js" data-lang="js"><span class="nx">$</span><span class="p">(</span><span class="s1">'.popover-dismiss'</span><span class="p">).</span><span class="nx">popover</span><span class="p">({</span>
  <span class="na">trigger</span><span class="p">:</span> <span class="s1">'focus'</span>
<span class="p">})</span></code></pre></figure>

<h2 id="usage">Usage</h2>

<p>Enable popovers via JavaScript:</p>

<figure class="highlight"><pre><code class="language-js" data-lang="js"><span class="nx">$</span><span class="p">(</span><span class="s1">'#example'</span><span class="p">).</span><span class="nx">popover</span><span class="p">(</span><span class="nx">options</span><span class="p">)</span></code></pre></figure>

<h3 id="options">Options</h3>

<p>Options can be passed via data attributes or JavaScript. For data attributes, append the option name to <code class="highlighter-rouge">data-</code>, as in <code class="highlighter-rouge">data-animation=""</code>.</p>

<div class="table-responsive">
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
        <td>animation</td>
        <td>boolean</td>
        <td>true</td>
        <td>Apply a CSS fade transition to the popover</td>
      </tr>
      <tr>
        <td>container</td>
        <td>string | false</td>
        <td>false</td>
        <td>
          <p>Appends the popover to a specific element. Example: <code>container: 'body'</code>. This option is particularly useful in that it allows you to position the popover in the flow of the document near the triggering element - which will prevent the popover from floating away from the triggering element during a window resize.</p>
        </td>
      </tr>
      <tr>
        <td>content</td>
        <td>string | element | function</td>
        <td>''</td>
        <td>
          <p>Default content value if <code>data-content</code> attribute isn't present.</p>
          <p>If a function is given, it will be called with its <code>this</code> reference set to the element that the popover is attached to.</p>
        </td>
      </tr>
      <tr>
        <td>delay</td>
        <td>number | object</td>
        <td>0</td>
        <td>
         <p>Delay showing and hiding the popover (ms) - does not apply to manual trigger type</p>
         <p>If a number is supplied, delay is applied to both hide/show</p>
         <p>Object structure is: <code>delay: { "show": 500, "hide": 100 }</code></p>
        </td>
      </tr>
      <tr>
        <td>html</td>
        <td>boolean</td>
        <td>false</td>
        <td>Insert HTML into the popover. If false, jQuery's <code>text</code> method will be used to insert content into the DOM. Use text if you're worried about XSS attacks.</td>
      </tr>
      <tr>
        <td>placement</td>
        <td>string | function</td>
        <td>'right'</td>
        <td>
          <p>How to position the popover - top | bottom | left | right | auto.<br />When "auto" is specified, it will dynamically reorient the popover. For example, if placement is "auto left", the popover will display to the left when possible, otherwise it will display right.</p>
          <p>When a function is used to determine the placement, it is called with the popover DOM node as its first argument and the triggering element DOM node as its second. The <code>this</code> context is set to the popover instance.</p>
        </td>
      </tr>
      <tr>
        <td>selector</td>
        <td>string</td>
        <td>false</td>
        <td>If a selector is provided, popover objects will be delegated to the specified targets. In practice, this is used to enable dynamic HTML content to have popovers added. See <a href="https://github.com/twbs/bootstrap/issues/4215">this</a> and <a href="http://jsbin.com/zopod/1/edit">an informative example</a>.</td>
      </tr>
      <tr>
        <td>template</td>
        <td>string</td>
        <td><code>'&lt;div class="popover" role="tooltip"&gt;&lt;div class="popover-arrow"&gt;&lt;/div&gt;&lt;h3 class="popover-title"&gt;&lt;/h3&gt;&lt;div class="popover-content"&gt;&lt;/div&gt;&lt;/div&gt;'</code></td>
        <td>
          <p>Base HTML to use when creating the popover.</p>
          <p>The popover's <code>title</code> will be injected into the <code>.popover-title</code>.</p>
          <p>The popover's <code>content</code> will be injected into the <code>.popover-content</code>.</p>
          <p><code>.popover-arrow</code> will become the popover's arrow.</p>
          <p>The outermost wrapper element should have the <code>.popover</code> class.</p>
        </td>
      </tr>
      <tr>
        <td>title</td>
        <td>string | element | function</td>
        <td>''</td>
        <td>
          <p>Default title value if <code>title</code> attribute isn't present.</p>
          <p>If a function is given, it will be called with its <code>this</code> reference set to the element that the popover is attached to.</p>
        </td>
      </tr>
      <tr>
        <td>trigger</td>
        <td>string</td>
        <td>'click'</td>
        <td>How popover is triggered - click | hover | focus | manual. You may pass multiple triggers; separate them with a space. `manual` cannot be combined with any other trigger.</td>
      </tr>
      <tr>
        <td>constraints</td>
        <td>Array</td>
        <td>'hover focus'</td>
        <td>An array of constraints - passed through to Tether. For more information refer to Tether's <a href="http://github.hubspot.com/tether/#constraints">constraint docs</a>.</td>
      </tr>
      <tr>
        <td>offset</td>
        <td>string</td>
        <td>'0 0'</td>
        <td>Offset of the popover relative to its target. For more information refer to Tether's <a href="http://github.hubspot.com/tether/#offset">offset docs</a>.</td>
      </tr>
    </tbody>
  </table>
</div>

<div class="bd-callout bd-callout-info">
<h4 id="data-attributes-for-individual-popovers">Data attributes for individual popovers</h4>

<p>Options for individual popovers can alternatively be specified through the use of data attributes, as explained above.</p>
</div>

<h3 id="methods">Methods</h3>

<h4 id="popoveroptions"><code class="highlighter-rouge">$().popover(options)</code></h4>

<p>Initializes popovers for an element collection.</p>

<h4 id="popovershow"><code class="highlighter-rouge">.popover('show')</code></h4>

<p>Reveals an element’s popover. <strong>Returns to the caller before the popover has actually been shown</strong> (i.e. before the <code class="highlighter-rouge">shown.bs.popover</code> event occurs). This is considered a “manual” triggering of the popover. Popovers whose both title and content are zero-length are never displayed.</p>

<figure class="highlight"><pre><code class="language-js" data-lang="js"><span class="nx">$</span><span class="p">(</span><span class="s1">'#element'</span><span class="p">).</span><span class="nx">popover</span><span class="p">(</span><span class="s1">'show'</span><span class="p">)</span></code></pre></figure>

<h4 id="popoverhide"><code class="highlighter-rouge">.popover('hide')</code></h4>

<p>Hides an element’s popover. <strong>Returns to the caller before the popover has actually been hidden</strong> (i.e. before the <code class="highlighter-rouge">hidden.bs.popover</code> event occurs). This is considered a “manual” triggering of the popover.</p>

<figure class="highlight"><pre><code class="language-js" data-lang="js"><span class="nx">$</span><span class="p">(</span><span class="s1">'#element'</span><span class="p">).</span><span class="nx">popover</span><span class="p">(</span><span class="s1">'hide'</span><span class="p">)</span></code></pre></figure>

<h4 id="popovertoggle"><code class="highlighter-rouge">.popover('toggle')</code></h4>

<p>Toggles an element’s popover. <strong>Returns to the caller before the popover has actually been shown or hidden</strong> (i.e. before the <code class="highlighter-rouge">shown.bs.popover</code> or <code class="highlighter-rouge">hidden.bs.popover</code> event occurs). This is considered a “manual” triggering of the popover.</p>

<figure class="highlight"><pre><code class="language-js" data-lang="js"><span class="nx">$</span><span class="p">(</span><span class="s1">'#element'</span><span class="p">).</span><span class="nx">popover</span><span class="p">(</span><span class="s1">'toggle'</span><span class="p">)</span></code></pre></figure>

<h4 id="popoverdispose"><code class="highlighter-rouge">.popover('dispose')</code></h4>

<p>Hides and destroys an element’s popover. Popovers that use delegation (which are created using <a href="#options">the <code class="highlighter-rouge">selector</code> option</a>) cannot be individually destroyed on descendant trigger elements.</p>

<figure class="highlight"><pre><code class="language-js" data-lang="js"><span class="nx">$</span><span class="p">(</span><span class="s1">'#element'</span><span class="p">).</span><span class="nx">popover</span><span class="p">(</span><span class="s1">'dispose'</span><span class="p">)</span></code></pre></figure>

<h3 id="events">Events</h3>

<div class="table-responsive">
  <table class="table table-bordered table-striped">
    <thead>
     <tr>
        <th style="width: 150px;">Event Type</th>
        <th>Description</th>
     </tr>
    </thead>
    <tbody>
      <tr>
        <td>show.bs.popover</td>
        <td>This event fires immediately when the <code>show</code> instance method is called.</td>
      </tr>
      <tr>
        <td>shown.bs.popover</td>
        <td>This event is fired when the popover has been made visible to the user (will wait for CSS transitions to complete).</td>
      </tr>
      <tr>
        <td>hide.bs.popover</td>
        <td>This event is fired immediately when the <code>hide</code> instance method has been called.</td>
      </tr>
      <tr>
        <td>hidden.bs.popover</td>
        <td>This event is fired when the popover has finished being hidden from the user (will wait for CSS transitions to complete).</td>
      </tr>
    </tbody>
  </table>
</div>

<figure class="highlight"><pre><code class="language-js" data-lang="js"><span class="nx">$</span><span class="p">(</span><span class="s1">'#myPopover'</span><span class="p">).</span><span class="nx">on</span><span class="p">(</span><span class="s1">'hidden.bs.popover'</span><span class="p">,</span> <span class="kd">function</span> <span class="p">()</span> <span class="p">{</span>
  <span class="c1">// do something…</span>
<span class="p">})</span></code></pre></figure>


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

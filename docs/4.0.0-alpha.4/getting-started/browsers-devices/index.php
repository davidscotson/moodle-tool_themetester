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
$PAGE->set_heading("Browsers and devices");
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
  
  
  
  

  

  <div class="bd-toc-item active">
    
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
        
          
          
          

          

          <li class="active bd-sidenav-active">
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
          <h1 class="bd-title" id="content">Browsers and devices</h1>
          <p>Bootstrap supports a wide variety of modern browsers and devices, and some older ones. See which exact ones below, as well as detailed information on known quirks and bugs.</p>

<h2 id="contents">Contents</h2>

<ul id="markdown-toc">
  <li><a href="#contents" id="markdown-toc-contents">Contents</a></li>
  <li><a href="#supported-browsers" id="markdown-toc-supported-browsers">Supported browsers</a>    <ul>
      <li><a href="#mobile-devices" id="markdown-toc-mobile-devices">Mobile devices</a></li>
      <li><a href="#desktop-browsers" id="markdown-toc-desktop-browsers">Desktop browsers</a></li>
    </ul>
  </li>
  <li><a href="#internet-explorer-9--10" id="markdown-toc-internet-explorer-9--10">Internet Explorer 9 &amp; 10</a></li>
  <li><a href="#supporting-internet-explorer-8" id="markdown-toc-supporting-internet-explorer-8">Supporting Internet Explorer 8</a></li>
  <li><a href="#ie-compatibility-modes" id="markdown-toc-ie-compatibility-modes">IE Compatibility modes</a></li>
  <li><a href="#internet-explorer-10-in-windows-phone-8" id="markdown-toc-internet-explorer-10-in-windows-phone-8">Internet Explorer 10 in Windows Phone 8</a></li>
  <li><a href="#modals-and-dropdowns-on-mobile" id="markdown-toc-modals-and-dropdowns-on-mobile">Modals and dropdowns on mobile</a>    <ul>
      <li><a href="#overflow-and-scrolling" id="markdown-toc-overflow-and-scrolling">Overflow and scrolling</a></li>
      <li><a href="#ios-text-fields-and-scrolling" id="markdown-toc-ios-text-fields-and-scrolling">iOS text fields and scrolling</a></li>
      <li><a href="#navbar-dropdowns" id="markdown-toc-navbar-dropdowns">Navbar Dropdowns</a></li>
    </ul>
  </li>
  <li><a href="#browser-zooming" id="markdown-toc-browser-zooming">Browser zooming</a></li>
  <li><a href="#sticky-hoverfocus-on-mobile" id="markdown-toc-sticky-hoverfocus-on-mobile">Sticky <code class="highlighter-rouge">:hover</code>/<code class="highlighter-rouge">:focus</code> on mobile</a></li>
  <li><a href="#printing" id="markdown-toc-printing">Printing</a></li>
  <li><a href="#android-stock-browser" id="markdown-toc-android-stock-browser">Android stock browser</a>    <ul>
      <li><a href="#select-menu" id="markdown-toc-select-menu">Select menu</a></li>
    </ul>
  </li>
  <li><a href="#validators" id="markdown-toc-validators">Validators</a></li>
</ul>

<h2 id="supported-browsers">Supported browsers</h2>

<p>Bootstrap supports the <strong>latest, stable releases</strong> of all major browsers and platforms. On Windows, <strong>we support Internet Explorer 9-11 / Microsoft Edge</strong>.</p>

<p>Alternative browsers which use the latest version of WebKit, Blink, or Gecko, whether directly or via the platform’s web view API, are not explicitly supported. However, Bootstrap should (in most cases) display and function correctly in these browsers as well. More specific support information is provided below.</p>

<h3 id="mobile-devices">Mobile devices</h3>

<p>Generally speaking, Bootstrap supports the latest versions of each major platform’s default browsers. Note that proxy browsers (such as Opera Mini, Opera Mobile’s Turbo mode, UC Browser Mini, Amazon Silk) are not supported.</p>

<div class="table-responsive">
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <td></td>
        <th>Chrome</th>
        <th>Firefox</th>
        <th>Safari</th>
        <th>Android Browser &amp; WebView</th>
        <th>Microsoft Edge</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">Android</th>
        <td class="text-success">Supported</td>
        <td class="text-success">Supported</td>
        <td class="text-muted">N/A</td>
        <td class="text-success">Android v5.0+ supported</td>
        <td class="text-muted">N/A</td>
      </tr>
      <tr>
        <th scope="row">iOS</th>
        <td class="text-success">Supported</td>
        <td class="text-success">Supported</td>
        <td class="text-success">Supported</td>
        <td class="text-muted">N/A</td>
        <td class="text-muted">N/A</td>
      </tr>
      <tr>
        <th scope="row">Windows 10 Mobile</th>
        <td class="text-muted">N/A</td>
        <td class="text-muted">N/A</td>
        <td class="text-muted">N/A</td>
        <td class="text-muted">N/A</td>
        <td class="text-success">Supported</td>
      </tr>
    </tbody>
  </table>
</div>

<h3 id="desktop-browsers">Desktop browsers</h3>

<p>Similarly, the latest versions of most desktop browsers are supported.</p>

<div class="table-responsive">
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <td></td>
        <th>Chrome</th>
        <th>Firefox</th>
        <th>Internet Explorer</th>
        <th>Microsoft Edge</th>
        <th>Opera</th>
        <th>Safari</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">Mac</th>
        <td class="text-success">Supported</td>
        <td class="text-success">Supported</td>
        <td class="text-muted">N/A</td>
        <td class="text-muted">N/A</td>
        <td class="text-success">Supported</td>
        <td class="text-success">Supported</td>
      </tr>
      <tr>
        <th scope="row">Windows</th>
        <td class="text-success">Supported</td>
        <td class="text-success">Supported</td>
        <td class="text-success">Supported</td>
        <td class="text-success">Supported</td>
        <td class="text-success">Supported</td>
        <td class="text-danger">Not supported</td>
      </tr>
    </tbody>
  </table>
</div>

<p>For Firefox, in addition to the latest normal stable release, we also support the latest <a href="https://www.mozilla.org/en-US/firefox/organizations/faq/">Extended Support Release (ESR)</a> version of Firefox.</p>

<p>Unofficially, Bootstrap should look and behave well enough in Chromium and Chrome for Linux, Firefox for Linux, and Internet Explorer 8 and below, though they are not officially supported.</p>

<p>For a list of some of the browser bugs that Bootstrap has to grapple with, see our <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/browser-bugs/">Wall of browser bugs</a>.</p>

<h2 id="internet-explorer-9--10">Internet Explorer 9 &amp; 10</h2>

<p>Internet Explorer 9 &amp; 10 are also supported, however, please be aware that some CSS3 properties and HTML5 elements are not fully supported.</p>

<div class="table-responsive">
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th scope="col">Feature</th>
        <th scope="col">Internet Explorer 9</th>
        <th scope="col">Internet Explorer 10</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row"><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/transition"><code>transition</code></a></th>
        <td class="text-danger">Not supported</td>
        <td class="text-success">Supported</td>
      </tr>
      <tr>
        <th scope="row"><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/Input#attr-placeholder"><code>placeholder</code></a></th>
        <td class="text-danger">Not supported</td>
        <td class="text-success">Supported</td>
      </tr>
      <tr>
        <th scope="row"><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Using_CSS_flexible_boxes">Flexbox</a></th>
        <td class="text-danger">Not supported</td>
        <td class="text-warning">Partially supported, with <code>-ms</code> prefix<br /><a href="http://caniuse.com/#feat=flexbox">See <em>Can I use</em> for details</a></td>
      </tr>
    </tbody>
  </table>
</div>

<p>Visit <a href="http://caniuse.com/">Can I use…</a> for details on browser support of CSS3 and HTML5 features.</p>

<h2 id="supporting-internet-explorer-8">Supporting Internet Explorer 8</h2>

<p>As of v4, Bootstrap no longer supports IE8. <strong>If you require IE8 support, we recommend you use Bootstrap 3.</strong> It’s still supported by our team for bugfixes and documentation changes, but no new features will be added to it.</p>

<p>Alternatively, you may add some third party JavaScript to backfill support for IE8 to Bootstrap 4. You’ll need the following:</p>

<ul>
  <li><a href="https://en.wikipedia.org/wiki/HTML5_Shiv">The HTML5 shiv</a></li>
  <li><a href="https://github.com/scottjehl/Respond">Respond.js</a></li>
  <li><a href="https://github.com/chuckcarpenter/REM-unit-polyfill">Rem unit polyfill</a></li>
</ul>

<p>No support will be provided for this, though you may find some help from the community in <a href="https://bootstrap-slack.herokuapp.com">our Slack channel</a>.</p>

<h2 id="ie-compatibility-modes">IE Compatibility modes</h2>

<p>Bootstrap is not supported in the old Internet Explorer compatibility modes. To be sure you’re using the latest rendering mode for IE, consider including the appropriate <code class="highlighter-rouge">&lt;meta&gt;</code> tag in your pages:</p>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;meta</span> <span class="na">http-equiv=</span><span class="s">"X-UA-Compatible"</span> <span class="na">content=</span><span class="s">"IE=edge"</span><span class="nt">&gt;</span></code></pre></figure>

<p>Confirm the document mode by opening the debugging tools: press <kbd>F12</kbd> and check the “Document Mode”.</p>

<p>This tag is included in all of Bootstrap’s documentation and examples to ensure the best rendering possible in each supported version of Internet Explorer.</p>

<p>See <a href="https://stackoverflow.com/questions/6771258/whats-the-difference-if-meta-http-equiv-x-ua-compatible-content-ie-edge">this StackOverflow question</a> for more information.</p>

<h2 id="internet-explorer-10-in-windows-phone-8">Internet Explorer 10 in Windows Phone 8</h2>

<p>Internet Explorer 10 in Windows Phone 8 versions older than <a href="http://blogs.windows.com/windows_phone/b/wpdev/archive/2013/10/14/introducing-windows-phone-preview-for-developers.aspx">Update 3 (a.k.a. GDR3)</a> doesn’t differentiate <strong>device width</strong> from <strong>viewport width</strong> in <code class="highlighter-rouge">@-ms-viewport</code> at-rules, and thus doesn’t properly apply the media queries in Bootstrap’s CSS. To address this, you’ll need to <strong>include the following JavaScript to work around the bug</strong>.</p>

<figure class="highlight"><pre><code class="language-js" data-lang="js"><span class="c1">// Copyright 2014-2015 The Bootstrap Authors</span>
<span class="c1">// Copyright 2014-2015 Twitter, Inc.</span>
<span class="c1">// Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)</span>
<span class="k">if</span> <span class="p">(</span><span class="nx">navigator</span><span class="p">.</span><span class="nx">userAgent</span><span class="p">.</span><span class="nx">match</span><span class="p">(</span><span class="sr">/IEMobile</span><span class="se">\/</span><span class="sr">10</span><span class="se">\.</span><span class="sr">0/</span><span class="p">))</span> <span class="p">{</span>
  <span class="kd">var</span> <span class="nx">msViewportStyle</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">createElement</span><span class="p">(</span><span class="s1">'style'</span><span class="p">)</span>
  <span class="nx">msViewportStyle</span><span class="p">.</span><span class="nx">appendChild</span><span class="p">(</span>
    <span class="nb">document</span><span class="p">.</span><span class="nx">createTextNode</span><span class="p">(</span>
      <span class="s1">'@-ms-viewport{width:auto!important}'</span>
    <span class="p">)</span>
  <span class="p">)</span>
  <span class="nb">document</span><span class="p">.</span><span class="nx">head</span><span class="p">.</span><span class="nx">appendChild</span><span class="p">(</span><span class="nx">msViewportStyle</span><span class="p">)</span>
<span class="p">}</span></code></pre></figure>

<p>For more information and usage guidelines, read <a href="http://timkadlec.com/2013/01/windows-phone-8-and-device-width/">Windows Phone 8 and Device-Width</a>.</p>

<p>As a heads up, we include this in all of Bootstrap’s documentation and examples as a demonstration.</p>

<h2 id="modals-and-dropdowns-on-mobile">Modals and dropdowns on mobile</h2>

<h3 id="overflow-and-scrolling">Overflow and scrolling</h3>

<p>Support for <code class="highlighter-rouge">overflow: hidden;</code> on the <code class="highlighter-rouge">&lt;body&gt;</code> element is quite limited in iOS and Android. To that end, when you scroll past the top or bottom of a modal in either of those devices’ browsers, the <code class="highlighter-rouge">&lt;body&gt;</code> content will begin to scroll. See <a href="https://bugs.chromium.org/p/chromium/issues/detail?id=175502">Chrome bug #175502</a> (fixed in Chrome v40) and <a href="https://bugs.webkit.org/show_bug.cgi?id=153852">WebKit bug #153852</a>.</p>

<h3 id="ios-text-fields-and-scrolling">iOS text fields and scrolling</h3>

<p>As of iOS 9.2, while a modal is open, if the initial touch of a scroll gesture is within the boundary of a textual <code class="highlighter-rouge">&lt;input&gt;</code> or a <code class="highlighter-rouge">&lt;textarea&gt;</code>, the <code class="highlighter-rouge">&lt;body&gt;</code> content underneath the modal will be scrolled instead of the modal itself. See <a href="https://bugs.webkit.org/show_bug.cgi?id=153856">WebKit bug #153856</a>.</p>

<h3 id="navbar-dropdowns">Navbar Dropdowns</h3>

<p>The <code class="highlighter-rouge">.dropdown-backdrop</code> element isn’t used on iOS in the nav because of the complexity of z-indexing. Thus, to close dropdowns in navbars, you must directly click the dropdown element (or <a href="https://developer.mozilla.org/en-US/docs/Web/Events/click#Safari_Mobile">any other element which will fire a click event in iOS</a>).</p>

<h2 id="browser-zooming">Browser zooming</h2>

<p>Page zooming inevitably presents rendering artifacts in some components, both in Bootstrap and the rest of the web. Depending on the issue, we may be able to fix it (search first and then open an issue if need be). However, we tend to ignore these as they often have no direct solution other than hacky workarounds.</p>

<h2 id="sticky-hoverfocus-on-mobile">Sticky <code class="highlighter-rouge">:hover</code>/<code class="highlighter-rouge">:focus</code> on mobile</h2>
<p>Even though real hovering isn’t possible on most touchscreens, most mobile browsers emulate hovering support and make <code class="highlighter-rouge">:hover</code> “sticky”. In other words, <code class="highlighter-rouge">:hover</code> styles start applying after tapping an element and only stop applying after the user taps some other element. On mobile-first sites, this behavior is normally undesirable.</p>

<p>Bootstrap includes a workaround for this, although it is disabled by default. By setting <code class="highlighter-rouge">$enable-hover-media-query</code> to <code class="highlighter-rouge">true</code> when compiling from Sass, Bootstrap will use <a href="https://github.com/twbs/mq4-hover-shim">mq4-hover-shim</a> to disable <code class="highlighter-rouge">:hover</code> styles in browsers that emulate hovering, thus preventing sticky <code class="highlighter-rouge">:hover</code> styles. There are some caveats to this workaround; see the shim’s documentation for details.</p>

<h2 id="printing">Printing</h2>

<p>Even in some modern browsers, printing can be quirky.</p>

<p>As of Safari v8.0, use of the fixed-width <code class="highlighter-rouge">.container</code> class can cause Safari to use an unusually small font size when printing. See <a href="https://github.com/twbs/bootstrap/issues/14868">issue #14868</a> and <a href="https://bugs.webkit.org/show_bug.cgi?id=138192">WebKit bug #138192</a> for more details. One potential workaround is the following CSS:</p>

<figure class="highlight"><pre><code class="language-css" data-lang="css"><span class="k">@media</span> <span class="n">print</span> <span class="p">{</span>
  <span class="nc">.container</span> <span class="p">{</span>
    <span class="nl">width</span><span class="p">:</span> <span class="nb">auto</span><span class="p">;</span>
  <span class="p">}</span>
<span class="p">}</span></code></pre></figure>

<h2 id="android-stock-browser">Android stock browser</h2>

<p>Out of the box, Android 4.1 (and even some newer releases apparently) ship with the Browser app as the default web browser of choice (as opposed to Chrome). Unfortunately, the Browser app has lots of bugs and inconsistencies with CSS in general.</p>

<h4 id="select-menu">Select menu</h4>

<p>On <code class="highlighter-rouge">&lt;select&gt;</code> elements, the Android stock browser will not display the side controls if there is a <code class="highlighter-rouge">border-radius</code> and/or <code class="highlighter-rouge">border</code> applied. (See <a href="https://stackoverflow.com/questions/14744437/html-select-box-not-showing-drop-down-arrow-on-android-version-4-0-when-set-with">this StackOverflow question</a> for details.) Use the snippet of code below to remove the offending CSS and render the <code class="highlighter-rouge">&lt;select&gt;</code> as an unstyled element on the Android stock browser. The user agent sniffing avoids interference with Chrome, Safari, and Mozilla browsers.</p>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;script&gt;</span>
<span class="nx">$</span><span class="p">(</span><span class="kd">function</span> <span class="p">()</span> <span class="p">{</span>
  <span class="kd">var</span> <span class="nx">nua</span> <span class="o">=</span> <span class="nx">navigator</span><span class="p">.</span><span class="nx">userAgent</span>
  <span class="kd">var</span> <span class="nx">isAndroid</span> <span class="o">=</span> <span class="p">(</span><span class="nx">nua</span><span class="p">.</span><span class="nx">indexOf</span><span class="p">(</span><span class="s1">'Mozilla/5.0'</span><span class="p">)</span> <span class="o">&gt;</span> <span class="o">-</span><span class="mi">1</span> <span class="o">&amp;&amp;</span> <span class="nx">nua</span><span class="p">.</span><span class="nx">indexOf</span><span class="p">(</span><span class="s1">'Android '</span><span class="p">)</span> <span class="o">&gt;</span> <span class="o">-</span><span class="mi">1</span> <span class="o">&amp;&amp;</span> <span class="nx">nua</span><span class="p">.</span><span class="nx">indexOf</span><span class="p">(</span><span class="s1">'AppleWebKit'</span><span class="p">)</span> <span class="o">&gt;</span> <span class="o">-</span><span class="mi">1</span> <span class="o">&amp;&amp;</span> <span class="nx">nua</span><span class="p">.</span><span class="nx">indexOf</span><span class="p">(</span><span class="s1">'Chrome'</span><span class="p">)</span> <span class="o">===</span> <span class="o">-</span><span class="mi">1</span><span class="p">)</span>
  <span class="k">if</span> <span class="p">(</span><span class="nx">isAndroid</span><span class="p">)</span> <span class="p">{</span>
    <span class="nx">$</span><span class="p">(</span><span class="s1">'select.form-control'</span><span class="p">).</span><span class="nx">removeClass</span><span class="p">(</span><span class="s1">'form-control'</span><span class="p">).</span><span class="nx">css</span><span class="p">(</span><span class="s1">'width'</span><span class="p">,</span> <span class="s1">'100%'</span><span class="p">)</span>
  <span class="p">}</span>
<span class="p">})</span>
<span class="nt">&lt;/script&gt;</span></code></pre></figure>

<p>Want to see an example? <a href="http://jsbin.com/OyaqoDO/2">Check out this JS Bin demo.</a></p>

<h2 id="validators">Validators</h2>

<p>In order to provide the best possible experience to old and buggy browsers, Bootstrap uses <a href="http://browserhacks.com">CSS browser hacks</a> in several places to target special CSS to certain browser versions in order to work around bugs in the browsers themselves. These hacks understandably cause CSS validators to complain that they are invalid. In a couple places, we also use bleeding-edge CSS features that aren’t yet fully standardized, but these are used purely for progressive enhancement.</p>

<p>These validation warnings don’t matter in practice since the non-hacky portion of our CSS does fully validate and the hacky portions don’t interfere with the proper functioning of the non-hacky portion, hence why we deliberately ignore these particular warnings.</p>

<p>Our HTML docs likewise have some trivial and inconsequential HTML validation warnings due to our inclusion of a workaround for <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=654072">a certain Firefox bug</a>.</p>

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

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
$PAGE->set_heading("Wall of browser bugs");
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
          <h1 class="bd-title" id="content">Wall of browser bugs</h1>
          <p>Bootstrap currently works around several outstanding browser bugs in major browsers to deliver the best cross-browser experience possible. Some bugs, like those listed below, cannot be solved by us.</p>

<p>We publicly list browser bugs that are impacting us here, in the hopes of expediting the process of fixing them. For information on Bootstrap’s browser compatibility, <a href="<?php echo $CFG->wwwroot ?>/admin/tool/themetester/docs/4.0.0-alpha.4/getting-started/browsers-devices/#supported-browsers">see our browser compatibility docs</a>.</p>

<p>Also see <a href="https://docs.google.com/document/d/1LPaPA30bLUB_publLIMF0RlhdnPx_ePXm7oW02iiT6o">jQuery’s browser bug workarounds</a>.</p>

<p>See also:</p>

<ul>
  <li><a href="https://code.google.com/p/chromium/issues/detail?id=536263">Chromium issue 536263: [meta] Issues affecting Bootstrap</a></li>
  <li><a href="https://bugzilla.mozilla.org/show_bug.cgi?id=1230801">Mozilla bug 1230801: Fix the issues that affect Bootstrap</a></li>
  <li><a href="https://bugs.webkit.org/show_bug.cgi?id=159753">WebKit bug 159753: [meta] Issues affecting Bootstrap</a></li>
  <li><a href="https://docs.google.com/document/d/1LPaPA30bLUB_publLIMF0RlhdnPx_ePXm7oW02iiT6o">jQuery’s browser bug workarounds</a></li>
</ul>

<div class="table-responsive">
  <table class="bd-browser-bugs table table-bordered table-hover">
    <thead>
      <tr>
        <th>Browser(s)</th>
        <th>Summary of bug</th>
        <th>Upstream bug(s)</th>
        <th>Bootstrap issue(s)</th>
      </tr>
    </thead>
    <tbody>
      
      <tr>
        <td>Microsoft Edge
</td>
        <td><p>Dynamically generated <code class="highlighter-rouge">&lt;label&gt;&lt;input type="file"&gt;&lt;/label&gt;</code> causes infinite loop of file dialogs.</p>
</td>
        <td><a href="https://developer.microsoft.com/en-us/microsoft-edge/platform/issues/8282613">Edge issue #8282613</a>
</td>
        <td><a href="https://github.com/twbs/bootstrap/issues/20335">#20335</a>
</td>
      </tr>
      
      <tr>
        <td>Microsoft Edge
</td>
        <td><p>Native browser tooltip for <code class="highlighter-rouge">title</code> shows on first keyboard focus (in addition to custom tooltip component)</p>
</td>
        <td><a href="https://developer.microsoft.com/en-us/microsoft-edge/platform/issues/6793560">Edge issue #6793560</a>
</td>
        <td><a href="https://github.com/twbs/bootstrap/issues/18692">#18692</a>
</td>
      </tr>
      
      <tr>
        <td>Microsoft Edge
</td>
        <td><p>Hovered element still remains in <code class="highlighter-rouge">:hover</code> state after scrolling away.</p>
</td>
        <td><a href="https://developer.microsoft.com/en-us/microsoft-edge/platform/issues/5381673">Edge issue #5381673</a>
</td>
        <td><a href="https://github.com/twbs/bootstrap/issues/14211">#14211</a>
</td>
      </tr>
      
      <tr>
        <td>Microsoft Edge
</td>
        <td><p>When hovering over a <code class="highlighter-rouge">&lt;select&gt;</code> menu item, the cursor for the element underneath the menu is displayed.</p>
</td>
        <td><a href="https://developer.microsoft.com/en-us/microsoft-edge/platform/issues/817822">Edge issue #817822</a>
</td>
        <td><a href="https://github.com/twbs/bootstrap/issues/14528">#14528</a>
</td>
      </tr>
      
      <tr>
        <td>Microsoft Edge
</td>
        <td><p>CSS <code class="highlighter-rouge">border-radius</code> sometimes causes lines of bleed-through of the <code class="highlighter-rouge">background-color</code> of the parent element.</p>
</td>
        <td><a href="https://developer.microsoft.com/en-us/microsoft-edge/platform/issues/3342037">Edge issue #3342037</a>
</td>
        <td><a href="https://github.com/twbs/bootstrap/issues/16671">#16671</a>
</td>
      </tr>
      
      <tr>
        <td>Microsoft Edge
</td>
        <td><p><code class="highlighter-rouge">background</code> of <code class="highlighter-rouge">&lt;tr&gt;</code> is only applied to first child cell instead of all cells in the row</p>
</td>
        <td><a href="https://developer.microsoft.com/en-us/microsoft-edge/platform/issues/5865620">Edge issue #5865620</a>
</td>
        <td><a href="https://github.com/twbs/bootstrap/issues/18504">#18504</a>
</td>
      </tr>
      
      <tr>
        <td>Microsoft Edge
</td>
        <td><p><code class="highlighter-rouge">@-ms-viewport{width: device-width;}</code> has side-effect of making scrollbars auto-hide</p>
</td>
        <td><a href="https://developer.microsoft.com/en-us/microsoft-edge/platform/issues/7165383">Edge issue #7165383</a>
</td>
        <td><a href="https://github.com/twbs/bootstrap/issues/18543">#18543</a>
</td>
      </tr>
      
      <tr>
        <td>Microsoft Edge
</td>
        <td><p>Background color from lower layer bleeds through transparent border in some cases</p>
</td>
        <td><a href="https://developer.microsoft.com/en-us/microsoft-edge/platform/issues/6274505">Edge issue #6274505</a>
</td>
        <td><a href="https://github.com/twbs/bootstrap/issues/18228">#18228</a>
</td>
      </tr>
      
      <tr>
        <td>Microsoft Edge
</td>
        <td><p>Hovering over descendant SVG element fires <code class="highlighter-rouge">mouseleave</code> event at ancestor</p>
</td>
        <td><a href="https://developer.microsoft.com/en-us/microsoft-edge/platform/issues/7787318">Edge issue #7787318</a>
</td>
        <td><a href="https://github.com/twbs/bootstrap/issues/19670">#19670</a>
</td>
      </tr>
      
      <tr>
        <td>Firefox
</td>
        <td><p><code class="highlighter-rouge">.table-bordered</code> with an empty <code class="highlighter-rouge">&lt;tbody&gt;</code> is missing borders.</p>
</td>
        <td><a href="https://bugzilla.mozilla.org/show_bug.cgi?id=1023761">Mozilla bug #1023761</a>
</td>
        <td><a href="https://github.com/twbs/bootstrap/issues/13453">#13453</a>
</td>
      </tr>
      
      <tr>
        <td>Firefox
</td>
        <td><p>If the disabled state of a form control is changed via JavaScript, the normal state doesn’t return after refreshing the page.</p>
</td>
        <td><a href="https://bugzilla.mozilla.org/show_bug.cgi?id=654072">Mozilla bug #654072</a>
</td>
        <td><a href="https://github.com/twbs/bootstrap/issues/793">#793</a>
</td>
      </tr>
      
      <tr>
        <td>Firefox
</td>
        <td><p><code class="highlighter-rouge">focus</code> events should not be fired at the <code class="highlighter-rouge">document</code> object</p>
</td>
        <td><a href="https://bugzilla.mozilla.org/show_bug.cgi?id=1228802">Mozilla bug #1228802</a>
</td>
        <td><a href="https://github.com/twbs/bootstrap/issues/18365">#18365</a>
</td>
      </tr>
      
      <tr>
        <td>Firefox
</td>
        <td><p>Wide floated table doesn’t wrap onto new line</p>
</td>
        <td><a href="https://bugzilla.mozilla.org/show_bug.cgi?id=1277782">Mozilla bug #1277782</a>
</td>
        <td><a href="https://github.com/twbs/bootstrap/issues/19839">#19839</a>
</td>
      </tr>
      
      <tr>
        <td>Firefox
</td>
        <td><p>Mouse sometimes not within element for purposes of <code class="highlighter-rouge">mouseenter</code>/<code class="highlighter-rouge">mouseleave</code> when it’s within SVG elements</p>
</td>
        <td><a href="https://bugzilla.mozilla.org/show_bug.cgi?id=577785">Mozilla bug #577785</a>
</td>
        <td><a href="https://github.com/twbs/bootstrap/issues/19670">#19670</a>
</td>
      </tr>
      
      <tr>
        <td>Firefox
</td>
        <td><p><code class="highlighter-rouge">position: absolute</code> element that’s wider than its column renders differently than other browsers</p>
</td>
        <td><a href="https://bugzilla.mozilla.org/show_bug.cgi?id=1282363">Mozilla bug #1282363</a>
</td>
        <td><a href="https://github.com/twbs/bootstrap/issues/20161">#20161</a>
</td>
      </tr>
      
      <tr>
        <td>Firefox
</td>
        <td><p><code class="highlighter-rouge">min-width: 0</code> has no effect on <code class="highlighter-rouge">&lt;fieldset&gt;</code></p>
</td>
        <td><a href="https://bugzilla.mozilla.org/show_bug.cgi?id=504622">Mozilla bug #504622</a>
</td>
        <td><a href="https://github.com/twbs/bootstrap/issues/12359">#12359</a>
</td>
      </tr>
      
      <tr>
        <td>Firefox (Windows)
</td>
        <td><p>Right border of <code class="highlighter-rouge">&lt;select&gt;</code> menu is sometimes missing when screen is set to uncommon resolution</p>
</td>
        <td><a href="https://bugzilla.mozilla.org/show_bug.cgi?id=545685">Mozilla bug #545685</a>
</td>
        <td><a href="https://github.com/twbs/bootstrap/issues/15990">#15990</a>
</td>
      </tr>
      
      <tr>
        <td>Firefox (OS X &amp; Linux)
</td>
        <td><p>Badge widget causes bottom border of Tabs widget to unexpectedly not overlap</p>
</td>
        <td><a href="https://bugzilla.mozilla.org/show_bug.cgi?id=1259972">Mozilla bug #1259972</a>
</td>
        <td><a href="https://github.com/twbs/bootstrap/issues/19626">#19626</a>
</td>
      </tr>
      
      <tr>
        <td>Chrome (Android)
</td>
        <td><p>Tapping on an <code class="highlighter-rouge">&lt;input&gt;</code> in a scrollable overlay doesn’t scroll the <code class="highlighter-rouge">&lt;input&gt;</code> into view</p>
</td>
        <td><a href="https://bugs.chromium.org/p/chromium/issues/detail?id=595210">Chromium issue #595210</a>
</td>
        <td><a href="https://github.com/twbs/bootstrap/issues/17338">#17338</a>
</td>
      </tr>
      
      <tr>
        <td>Chrome (OS X)
</td>
        <td><p>Clicking above <code class="highlighter-rouge">&lt;input type="number"&gt;</code> increment button flashes the decrement button.</p>
</td>
        <td><a href="https://bugs.chromium.org/p/chromium/issues/detail?id=419108">Chromium issue #419108</a>
</td>
        <td>Offshoot of <a href="https://github.com/twbs/bootstrap/issues/8350">#8350</a> &amp; <a href="https://bugs.chromium.org/p/chromium/issues/detail?id=337668">Chromium issue #337668</a>
</td>
      </tr>
      
      <tr>
        <td>Chrome
</td>
        <td><p>CSS infinite linear animation with alpha transparency leaks memory.</p>
</td>
        <td><a href="https://bugs.chromium.org/p/chromium/issues/detail?id=429375">Chromium issue #429375</a>
</td>
        <td><a href="https://github.com/twbs/bootstrap/issues/14409">#14409</a>
</td>
      </tr>
      
      <tr>
        <td>Chrome
</td>
        <td><p><code class="highlighter-rouge">:focus</code> <code class="highlighter-rouge">outline</code> style causes cursor to not be displayed when toggling a <code class="highlighter-rouge">readonly</code> <code class="highlighter-rouge">&lt;input&gt;</code> to read-write.</p>
</td>
        <td><a href="https://bugs.chromium.org/p/chromium/issues/detail?id=465274">Chromium issue #465274</a>
</td>
        <td><a href="https://github.com/twbs/bootstrap/issues/16022">#16022</a>
</td>
      </tr>
      
      <tr>
        <td>Chrome
</td>
        <td><p><code class="highlighter-rouge">table-cell</code> borders not overlapping despite <code class="highlighter-rouge">margin-right: -1px</code></p>
</td>
        <td><a href="https://bugs.chromium.org/p/chromium/issues/detail?id=534750">Chromium issue #534750</a>
</td>
        <td><a href="https://github.com/twbs/bootstrap/issues/17438">#17438</a>, <a href="https://github.com/twbs/bootstrap/issues/14237">#14237</a>
</td>
      </tr>
      
      <tr>
        <td>Chrome
</td>
        <td><p>Clicking scrollbar in <code class="highlighter-rouge">&lt;select multiple&gt;</code> with overflowed options will select nearby <code class="highlighter-rouge">&lt;option&gt;</code></p>
</td>
        <td><a href="https://bugs.chromium.org/p/chromium/issues/detail?id=597642">Chromium issue #597642</a>
</td>
        <td><a href="https://github.com/twbs/bootstrap/issues/19810">#19810</a>
</td>
      </tr>
      
      <tr>
        <td>Chrome
</td>
        <td><p>Don’t make <code class="highlighter-rouge">:hover</code> sticky on touch-friendly webpages</p>
</td>
        <td><a href="https://bugs.chromium.org/p/chromium/issues/detail?id=370155">Chromium issue #370155</a>
</td>
        <td><a href="https://github.com/twbs/bootstrap/issues/12832">#12832</a>
</td>
      </tr>
      
      <tr>
        <td>Chrome (Windows &amp; Linux)
</td>
        <td><p>Animation glitch when returning to inactive tab after animations occurred while tab was hidden.</p>
</td>
        <td><a href="https://bugs.chromium.org/p/chromium/issues/detail?id=449180">Chromium issue #449180</a>
</td>
        <td><a href="https://github.com/twbs/bootstrap/issues/15298">#15298</a>
</td>
      </tr>
      
      <tr>
        <td>Safari
</td>
        <td><p><code class="highlighter-rouge">rem</code> units in media queries should be calculated using <code class="highlighter-rouge">font-size: initial</code>, not the root element’s <code class="highlighter-rouge">font-size</code></p>
</td>
        <td><a href="https://bugs.webkit.org/show_bug.cgi?id=156684">WebKit bug #156684</a>
</td>
        <td><a href="https://github.com/twbs/bootstrap/issues/17403">#17403</a>
</td>
      </tr>
      
      <tr>
        <td>Safari (OS X)
</td>
        <td><p><code class="highlighter-rouge">px</code>, <code class="highlighter-rouge">em</code>, and <code class="highlighter-rouge">rem</code> should all behave the same in media queries when page zoom is applied</p>
</td>
        <td><a href="https://bugs.webkit.org/show_bug.cgi?id=156687">WebKit bug #156687</a>
</td>
        <td><a href="https://github.com/twbs/bootstrap/issues/17403">#17403</a>
</td>
      </tr>
      
      <tr>
        <td>Safari (OS X)
</td>
        <td><p>Weird button behavior with some <code class="highlighter-rouge">&lt;input type="number"&gt;</code> elements.</p>
</td>
        <td><a href="https://bugs.webkit.org/show_bug.cgi?id=137269">WebKit bug #137269</a>, <a href="https://openradar.appspot.com/18834768">Apple Safari Radar #18834768</a>
</td>
        <td><a href="https://github.com/twbs/bootstrap/issues/8350">#8350</a>, <a href="https://github.com/necolas/normalize.css/issues/283">Normalize #283</a>, <a href="https://bugs.chromium.org/p/chromium/issues/detail?id=337668">Chromium issue #337668</a>
</td>
      </tr>
      
      <tr>
        <td>Safari (OS X)
</td>
        <td><p>Small font size when printing webpage with fixed-width <code class="highlighter-rouge">.container</code>.</p>
</td>
        <td><a href="https://bugs.webkit.org/show_bug.cgi?id=138192">WebKit bug #138192</a>, <a href="https://openradar.appspot.com/19435018">Apple Safari Radar #19435018</a>
</td>
        <td><a href="https://github.com/twbs/bootstrap/issues/14868">#14868</a>
</td>
      </tr>
      
      <tr>
        <td>Safari (iPad)
</td>
        <td><p><code class="highlighter-rouge">&lt;select&gt;</code> menu on iPad causes shifting of hit-testing areas</p>
</td>
        <td><a href="https://bugs.webkit.org/show_bug.cgi?id=150079">WebKit bug #150079</a>, <a href="https://openradar.appspot.com/23082521">Apple Safari Radar #23082521</a>
</td>
        <td><a href="https://github.com/twbs/bootstrap/issues/14975">#14975</a>
</td>
      </tr>
      
      <tr>
        <td>Safari (iOS)
</td>
        <td><p><code class="highlighter-rouge">transform: translate3d(0,0,0);</code> rendering bug.</p>
</td>
        <td><a href="https://bugs.webkit.org/show_bug.cgi?id=138162">WebKit bug #138162</a>, <a href="https://openradar.appspot.com/18804973">Apple Safari Radar #18804973</a>
</td>
        <td><a href="https://github.com/twbs/bootstrap/issues/14603">#14603</a>
</td>
      </tr>
      
      <tr>
        <td>Safari (iOS)
</td>
        <td><p>Text input’s cursor doesn’t move while scrolling the page.</p>
</td>
        <td><a href="https://bugs.webkit.org/show_bug.cgi?id=138201">WebKit bug #138201</a>, <a href="https://openradar.appspot.com/18819624">Apple Safari Radar #18819624</a>
</td>
        <td><a href="https://github.com/twbs/bootstrap/issues/14708">#14708</a>
</td>
      </tr>
      
      <tr>
        <td>Safari (iOS)
</td>
        <td><p>Can’t move cursor to start of text after entering long string of text into <code class="highlighter-rouge">&lt;input type="text"&gt;</code></p>
</td>
        <td><a href="https://bugs.webkit.org/show_bug.cgi?id=148061">WebKit bug #148061</a>, <a href="https://openradar.appspot.com/22299624">Apple Safari Radar #22299624</a>
</td>
        <td><a href="https://github.com/twbs/bootstrap/issues/16988">#16988</a>
</td>
      </tr>
      
      <tr>
        <td>Safari (iOS)
</td>
        <td><p><code class="highlighter-rouge">display: block</code> causes text of temporal <code class="highlighter-rouge">&lt;input&gt;</code>s to become vertically misaligned</p>
</td>
        <td><a href="https://bugs.webkit.org/show_bug.cgi?id=139848">WebKit bug #139848</a>, <a href="https://openradar.appspot.com/19434878">Apple Safari Radar #19434878</a>
</td>
        <td><a href="https://github.com/twbs/bootstrap/issues/11266">#11266</a>, <a href="https://github.com/twbs/bootstrap/issues/13098">#13098</a>
</td>
      </tr>
      
      <tr>
        <td>Safari (iOS)
</td>
        <td><p>Tapping on <code class="highlighter-rouge">&lt;body&gt;</code> doesn’t fire <code class="highlighter-rouge">click</code> events</p>
</td>
        <td><a href="https://bugs.webkit.org/show_bug.cgi?id=151933">WebKit bug #151933</a>
</td>
        <td><a href="https://github.com/twbs/bootstrap/issues/16028">#16028</a>
</td>
      </tr>
      
      <tr>
        <td>Safari (iOS)
</td>
        <td><p><code class="highlighter-rouge">position:fixed</code> is incorrectly positioned when tab bar is visible on iPhone 6S+ Safari</p>
</td>
        <td><a href="https://bugs.webkit.org/show_bug.cgi?id=153056">WebKit bug #153056</a>
</td>
        <td><a href="https://github.com/twbs/bootstrap/issues/18859">#18859</a>
</td>
      </tr>
      
      <tr>
        <td>Safari (iOS)
</td>
        <td><p>Tapping into an <code class="highlighter-rouge">&lt;input&gt;</code> within a <code class="highlighter-rouge">position:fixed</code> element scrolls to the top of the page</p>
</td>
        <td><a href="https://bugs.webkit.org/show_bug.cgi?id=153224">WebKit bug #153224</a>, <a href="https://openradar.appspot.com/24235301">Apple Safari Radar #24235301</a>
</td>
        <td><a href="https://github.com/twbs/bootstrap/issues/17497">#17497</a>
</td>
      </tr>
      
      <tr>
        <td>Safari (iOS)
</td>
        <td><p><code class="highlighter-rouge">&lt;body&gt;</code> with <code class="highlighter-rouge">overflow:hidden</code> CSS is scrollable on iOS</p>
</td>
        <td><a href="https://bugs.webkit.org/show_bug.cgi?id=153852">WebKit bug #153852</a>
</td>
        <td><a href="https://github.com/twbs/bootstrap/issues/14839">#14839</a>
</td>
      </tr>
      
      <tr>
        <td>Safari (iOS)
</td>
        <td><p>Scroll gesture in text field in <code class="highlighter-rouge">position:fixed</code> element sometimes scrolls <code class="highlighter-rouge">&lt;body&gt;</code> instead of scrollable ancestor</p>
</td>
        <td><a href="https://bugs.webkit.org/show_bug.cgi?id=153856">WebKit bug #153856</a>
</td>
        <td><a href="https://github.com/twbs/bootstrap/issues/14839">#14839</a>
</td>
      </tr>
      
      <tr>
        <td>Safari (iOS)
</td>
        <td><p>Tapping from one <code class="highlighter-rouge">&lt;input&gt;</code> to another in an overlay can cause shaking/jiggling effect</p>
</td>
        <td><a href="https://bugs.webkit.org/show_bug.cgi?id=158276">WebKit bug #158276</a>
</td>
        <td><a href="https://github.com/twbs/bootstrap/issues/19927">#19927</a>
</td>
      </tr>
      
      <tr>
        <td>Safari (iOS)
</td>
        <td><p>Modal with <code class="highlighter-rouge">-webkit-overflow-scrolling: touch</code> doesn’t become scrollable after added text makes it taller</p>
</td>
        <td><a href="https://bugs.webkit.org/show_bug.cgi?id=158342">WebKit bug #158342</a>
</td>
        <td><a href="https://github.com/twbs/bootstrap/issues/17695">#17695</a>
</td>
      </tr>
      
      <tr>
        <td>Safari (iOS)
</td>
        <td><p>Don’t make <code class="highlighter-rouge">:hover</code> sticky on touch-friendly webpages</p>
</td>
        <td><a href="https://bugs.webkit.org/show_bug.cgi?id=158517">WebKit bug #158517</a>
</td>
        <td><a href="https://github.com/twbs/bootstrap/issues/12832">#12832</a>
</td>
      </tr>
      
      <tr>
        <td>Safari (iPad Pro)
</td>
        <td><p>Rendering of descendants of <code class="highlighter-rouge">position: fixed</code> element gets clipped on iPad Pro in Landscape orientation</p>
</td>
        <td><a href="https://bugs.webkit.org/show_bug.cgi?id=152637">WebKit bug #152637</a>, <a href="https://openradar.appspot.com/24030853">Apple Safari Radar #24030853</a>
</td>
        <td><a href="https://github.com/twbs/bootstrap/issues/18738">#18738</a>
</td>
      </tr>
      
    </tbody>
  </table>
</div>

<h1 id="most-wanted-features">Most wanted features</h1>

<p>There are several features specified in Web standards which would allow us to make Bootstrap more robust, elegant, or performant, but aren’t yet implemented in certain browsers, thus preventing us from taking advantage of them.</p>

<p>We publicly list these “most wanted” feature requests here, in the hopes of expediting the process of getting them implemented.</p>

<div class="table-responsive">
  <table class="bd-browser-bugs table table-bordered table-hover">
    <thead>
      <tr>
        <th>Browser(s)</th>
        <th>Summary of feature</th>
        <th>Upstream issue(s)</th>
        <th>Bootstrap issue(s)</th>
      </tr>
    </thead>
    <tbody>
      
      <tr>
        <td>Microsoft Edge
</td>
        <td><p>Implement the <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/:dir"><code class="highlighter-rouge">:dir()</code> pseudo-class</a> from Selectors Level 4</p>
</td>
        <td><a href="https://wpdev.uservoice.com/forums/257854-microsoft-edge-developer/suggestions/12299532">Edge UserVoice idea #12299532</a>
</td>
        <td><a href="https://github.com/twbs/bootstrap/issues/19984">#19984</a>
</td>
      </tr>
      
      <tr>
        <td>Microsoft Edge
</td>
        <td><p>Implement <a href="http://html5please.com/#position:sticky">sticky positioning</a> from CSS Positioned Layout Level 3</p>
</td>
        <td><a href="https://wpdev.uservoice.com/forums/257854-microsoft-edge-developer/suggestions/6263621">Edge UserVoice idea #6263621</a>
</td>
        <td><a href="https://github.com/twbs/bootstrap/issues/17021">#17021</a>
</td>
      </tr>
      
      <tr>
        <td>Microsoft Edge
</td>
        <td><p>Implement the HTML5 <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/dialog"><code class="highlighter-rouge">&lt;dialog&gt;</code> element</a></p>
</td>
        <td><a href="https://wpdev.uservoice.com/forums/257854-microsoft-edge-developer/suggestions/6508895">Edge UserVoice idea #6508895</a>
</td>
        <td><a href="https://github.com/twbs/bootstrap/issues/20175">#20175</a>
</td>
      </tr>
      
      <tr>
        <td>Firefox
</td>
        <td><p>Fire a <a href="https://developer.mozilla.org/en-US/docs/Web/Events/transitioncancel"><code class="highlighter-rouge">transitioncancel</code> event</a> when a CSS transition is canceled</p>
</td>
        <td><a href="https://bugzilla.mozilla.org/show_bug.cgi?id=1264125">Mozilla bug #1264125</a>
</td>
        <td><a href="https://bugzilla.mozilla.org/show_bug.cgi?id=1182856">Mozilla bug #1182856</a>
</td>
      </tr>
      
      <tr>
        <td>Firefox
</td>
        <td><p>Implement the <a href="http://caniuse.com/#feat=css-nth-child-of"><code class="highlighter-rouge">of &lt;selector-list&gt;</code> clause</a> of the <code class="highlighter-rouge">:nth-child()</code> pseudo-class</p>
</td>
        <td><a href="https://bugzilla.mozilla.org/show_bug.cgi?id=854148">Mozilla bug #854148</a>
</td>
        <td><a href="https://github.com/twbs/bootstrap/issues/20143">#20143</a>
</td>
      </tr>
      
      <tr>
        <td>Firefox
</td>
        <td><p>Implement the HTML5 <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/dialog"><code class="highlighter-rouge">&lt;dialog&gt;</code> element</a></p>
</td>
        <td><a href="https://bugzilla.mozilla.org/show_bug.cgi?id=840640">Mozilla bug #840640</a>
</td>
        <td><a href="https://github.com/twbs/bootstrap/issues/20175">#20175</a>
</td>
      </tr>
      
      <tr>
        <td>Chrome
</td>
        <td><p>Implement the <a href="http://caniuse.com/#feat=css-nth-child-of"><code class="highlighter-rouge">of &lt;selector-list&gt;</code> clause</a> of the <code class="highlighter-rouge">:nth-child()</code> pseudo-class</p>
</td>
        <td><a href="https://bugs.chromium.org/p/chromium/issues/detail?id=304163">Chromium issue #304163</a>
</td>
        <td><a href="https://github.com/twbs/bootstrap/issues/20143">#20143</a>
</td>
      </tr>
      
      <tr>
        <td>Chrome
</td>
        <td><p>Implement the <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/:dir"><code class="highlighter-rouge">:dir()</code> pseudo-class</a> from Selectors Level 4</p>
</td>
        <td><a href="https://bugs.chromium.org/p/chromium/issues/detail?id=576815">Chromium issue #576815</a>
</td>
        <td><a href="https://github.com/twbs/bootstrap/issues/19984">#19984</a>
</td>
      </tr>
      
      <tr>
        <td>Chrome
</td>
        <td><p>Implement <a href="http://html5please.com/#position:sticky">sticky positioning</a> from CSS Positioned Layout Level 3</p>
</td>
        <td><a href="https://bugs.chromium.org/p/chromium/issues/detail?id=231752">Chromium issue #231752</a>
</td>
        <td><a href="https://github.com/twbs/bootstrap/issues/17021">#17021</a>
</td>
      </tr>
      
      <tr>
        <td>Safari
</td>
        <td><p>Implement the <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/:dir"><code class="highlighter-rouge">:dir()</code> pseudo-class</a> from Selectors Level 4</p>
</td>
        <td><a href="https://bugs.webkit.org/show_bug.cgi?id=64861">WebKit bug #64861</a>
</td>
        <td><a href="https://github.com/twbs/bootstrap/issues/19984">#19984</a>
</td>
      </tr>
      
      <tr>
        <td>Safari
</td>
        <td><p>Implement the HTML5 <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/dialog"><code class="highlighter-rouge">&lt;dialog&gt;</code> element</a></p>
</td>
        <td><a href="https://bugs.webkit.org/show_bug.cgi?id=84635">WebKit bug #84635</a>
</td>
        <td><a href="https://github.com/twbs/bootstrap/issues/20175">#20175</a>
</td>
      </tr>
      
    </tbody>
  </table>
</div>

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

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
$PAGE->set_heading("Reboot");
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
  
  
  
  

  

  <div class="bd-toc-item active">
    
        <a class="bd-toc-link" href="/admin/tool/themetester/docs/4.0.0-alpha.4/content/reboot">
      
        Content
      </a>

      <ul class="nav bd-sidenav">
        
          
          
          

          

          <li class="active bd-sidenav-active">
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
          <h1 class="bd-title" id="content">Reboot</h1>
          <p>Part of Bootstrap’s job is to provide an elegant, consistent, and simple baseline to build upon. We use Reboot, a collection of element-specific CSS changes in a single file, to kickstart that.</p>

<p>Reboot builds upon Normalize, providing many HTML elements with somewhat opinionated styles using only element selectors. Additional styling is done only with classes. For example, we reboot some <code class="highlighter-rouge">&lt;table&gt;</code> styles for a simpler baseline and later provide <code class="highlighter-rouge">.table</code>, <code class="highlighter-rouge">.table-bordered</code>, and more.</p>

<h2 id="contents">Contents</h2>

<ul id="markdown-toc">
  <li><a href="#contents" id="markdown-toc-contents">Contents</a></li>
  <li><a href="#approach" id="markdown-toc-approach">Approach</a></li>
  <li><a href="#page-defaults" id="markdown-toc-page-defaults">Page defaults</a></li>
  <li><a href="#native-font-stack" id="markdown-toc-native-font-stack">Native font stack</a></li>
  <li><a href="#headings-and-paragraphs" id="markdown-toc-headings-and-paragraphs">Headings and paragraphs</a></li>
  <li><a href="#lists" id="markdown-toc-lists">Lists</a></li>
  <li><a href="#preformatted-text" id="markdown-toc-preformatted-text">Preformatted text</a></li>
  <li><a href="#tables" id="markdown-toc-tables">Tables</a></li>
  <li><a href="#forms" id="markdown-toc-forms">Forms</a></li>
  <li><a href="#misc-elements" id="markdown-toc-misc-elements">Misc elements</a>    <ul>
      <li><a href="#address" id="markdown-toc-address">Address</a></li>
      <li><a href="#blockquote" id="markdown-toc-blockquote">Blockquote</a></li>
      <li><a href="#inline-elements" id="markdown-toc-inline-elements">Inline elements</a></li>
    </ul>
  </li>
  <li><a href="#html5-hidden-attribute" id="markdown-toc-html5-hidden-attribute">HTML5 <code class="highlighter-rouge">[hidden]</code> attribute</a></li>
  <li><a href="#click-delay-optimization-for-touch" id="markdown-toc-click-delay-optimization-for-touch">Click delay optimization for touch</a></li>
</ul>

<h2 id="approach">Approach</h2>

<p>Here are our guidelines and reasons for choosing what to override in Reboot:</p>

<ul>
  <li>Update some browser default values to use <code class="highlighter-rouge">rem</code>s instead of <code class="highlighter-rouge">em</code>s for scalable component spacing.</li>
  <li>Avoid <code class="highlighter-rouge">margin-top</code>. Vertical margins can collapse, yielding unexpected results. More importantly though, a single direction of <code class="highlighter-rouge">margin</code> is a simpler mental model.</li>
  <li>For easier scaling across device sizes, block elements should use <code class="highlighter-rouge">rem</code>s for <code class="highlighter-rouge">margin</code>s.</li>
  <li>Keep declarations of <code class="highlighter-rouge">font</code>-related properties to a minimum, using <code class="highlighter-rouge">inherit</code> whenever possible.</li>
</ul>

<h2 id="page-defaults">Page defaults</h2>

<p>The <code class="highlighter-rouge"><span class="nt">&lt;html&gt;</span></code> and <code class="highlighter-rouge">&lt;body&gt;</code> elements are updated to provide better page-wide defaults. More specifically:</p>

<ul>
  <li>The <code class="highlighter-rouge">box-sizing</code> is globally set on every element—including <code class="highlighter-rouge">*:before</code> and <code class="highlighter-rouge">*:after</code>, to <code class="highlighter-rouge">border-box</code>. This ensures that the declared width of element is never exceeded due to padding or border.</li>
  <li>A base <code class="highlighter-rouge">font-size: 16px</code> is declared on the <code class="highlighter-rouge"><span class="nt">&lt;html&gt;</span></code> and <code class="highlighter-rouge">font-size: 1rem</code> on the <code class="highlighter-rouge">&lt;body&gt;</code> for easy responsive type-scaling via media queries.</li>
  <li>The <code class="highlighter-rouge">&lt;body&gt;</code> also sets a global <code class="highlighter-rouge">font-family</code> and <code class="highlighter-rouge">line-height</code>. This is inherited later by some form elements to prevent font inconsistencies.</li>
  <li>For safety, the <code class="highlighter-rouge">&lt;body&gt;</code> has a declared <code class="highlighter-rouge">background-color</code>, defaulting to <code class="highlighter-rouge">#fff</code>.</li>
</ul>

<h2 id="native-font-stack">Native font stack</h2>

<p>The default web fonts (Helvetica Neue, Helvetica, and Arial) have been dropped in Bootstrap 4 and replaced with a “native font stack” for optimum text rendering on every device and OS. Read more about <a href="https://www.smashingmagazine.com/2015/11/using-system-ui-fonts-practical-guide/">native font stacks in this <em>Smashing Magazine</em> article</a>.</p>

<figure class="highlight"><pre><code class="language-sass" data-lang="sass"><span class="nv">$font-family-sans-serif</span><span class="p">:</span>
  <span class="c1">// Safari for OS X and iOS (San Francisco)
</span>  <span class="nt">-apple-system</span><span class="o">,</span>
  <span class="c1">// Chrome for OS X (San Francisco)
</span>  <span class="nt">BlinkMacSystemFont</span><span class="o">,</span>
  <span class="c1">// Windows
</span>  <span class="s2">"Segoe UI"</span><span class="o">,</span>
  <span class="c1">// Android
</span>  <span class="s2">"Roboto"</span><span class="o">,</span>
  <span class="c1">// Linux
</span>  <span class="s2">"Oxygen"</span><span class="o">,</span> <span class="o">//</span> <span class="nt">KDE</span>
  <span class="s2">"Ubuntu"</span><span class="o">,</span>
  <span class="s2">"Cantarell"</span><span class="o">,</span> <span class="o">//</span> <span class="nt">GNOME</span>
  <span class="c1">// Firefox OS [R.I.P.]
</span>  <span class="s2">"Fira Sans"</span><span class="o">,</span>
  <span class="c1">// Older Android
</span>  <span class="s2">"Droid Sans"</span><span class="o">,</span>
  <span class="c1">// Basic web fallback
</span>  <span class="s2">"Helvetica Neue"</span><span class="o">,</span> <span class="nt">Arial</span><span class="o">,</span> <span class="nt">sans-serif</span> <span class="o">!</span><span class="nt">default</span><span class="o">;</span></code></pre></figure>

<p>This <code class="highlighter-rouge">font-family</code> is applied to the <code class="highlighter-rouge">&lt;body&gt;</code> and automatically inherited globally throughout Bootstrap. To switch the global <code class="highlighter-rouge">font-family</code>, update <code class="highlighter-rouge">$font-family-base</code> and recompile Bootstrap.</p>

<h2 id="headings-and-paragraphs">Headings and paragraphs</h2>

<p>All heading elements—e.g., <code class="highlighter-rouge">&lt;h1&gt;</code>—and <code class="highlighter-rouge">&lt;p&gt;</code> are reset to have their <code class="highlighter-rouge">margin-top</code> removed. Headings have <code class="highlighter-rouge">margin-bottom: .5rem</code> added and paragraphs <code class="highlighter-rouge">margin-bottom: 1rem</code> for easy spacing.</p>

<div class="bd-example">

<h1 id="h1-heading">h1 heading</h1>
<p>Curabitur blandit tempus porttitor. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>

<h2 id="h2-heading">h2 heading</h2>
<p>Curabitur blandit tempus porttitor. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>

<h3 id="h3-heading">h3 heading</h3>
<p>Curabitur blandit tempus porttitor. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>

<h4 id="h4-heading">h4 heading</h4>
<p>Curabitur blandit tempus porttitor. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>

<h5 id="h5-heading">h5 heading</h5>
<p>Curabitur blandit tempus porttitor. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>

<h6 id="h6-heading">h6 heading</h6>
<p>Curabitur blandit tempus porttitor. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>

</div>

<h2 id="lists">Lists</h2>

<p>All lists—<code class="highlighter-rouge">&lt;ul&gt;</code>, <code class="highlighter-rouge">&lt;ol&gt;</code>, and <code class="highlighter-rouge">&lt;dl&gt;</code>—have their <code class="highlighter-rouge">margin-top</code> removed and a <code class="highlighter-rouge">margin-bottom: 1rem</code>. Nested lists have no <code class="highlighter-rouge">margin-bottom</code>.</p>

<div class="bd-example">

<ul>
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

<ol>
  <li>Lorem ipsum dolor sit amet</li>
  <li>Consectetur adipiscing elit</li>
  <li>Integer molestie lorem at massa</li>
  <li>Facilisis in pretium nisl aliquet</li>
  <li>Nulla volutpat aliquam velit</li>
  <li>Faucibus porta lacus fringilla vel</li>
  <li>Aenean sit amet erat nunc</li>
  <li>Eget porttitor lorem</li>
</ol>

</div>

<p>For simpler styling, clear hierarchy, and better spacing, description lists have updated <code class="highlighter-rouge">margin</code>s. <code class="highlighter-rouge">&lt;dd&gt;</code>s reset <code class="highlighter-rouge">margin-left</code> to <code class="highlighter-rouge">0</code> and add <code class="highlighter-rouge">margin-bottom: .5rem</code>. <code class="highlighter-rouge">&lt;dt&gt;</code>s are <strong>bolded</strong>.</p>

<div class="bd-example">

<dl>
  <dt>Description lists</dt>
  <dd>A description list is perfect for defining terms.</dd>
  <dt>Euismod</dt>
  <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem.</dd>
  <dd>Donec id elit non mi porta gravida at eget metus.</dd>
  <dt>Malesuada porta</dt>
  <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
</dl>

</div>

<h2 id="preformatted-text">Preformatted text</h2>

<p>The <code class="highlighter-rouge">&lt;pre&gt;</code> element is reset to remove its <code class="highlighter-rouge">margin-top</code> and use <code class="highlighter-rouge">rem</code> units for its <code class="highlighter-rouge">margin-bottom</code>.</p>

<div class="bd-example">

<pre>
.example-element {
  margin-bottom: 1rem;
}
</pre>

</div>

<h2 id="tables">Tables</h2>

<p>Tables are slightly adjusted to style <code class="highlighter-rouge">&lt;caption&gt;</code>s, collapse borders, and ensure consistent <code class="highlighter-rouge">text-align</code> throughout. Additional changes for borders, padding, and more come with <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/content/tables/">the <code class="highlighter-rouge">.table</code> class</a>.</p>

<div class="bd-example">
  <table>
    <caption>
      This is an example table, and this is its caption to describe the contents.
    </caption>
    <thead>
      <tr>
        <th>Table heading</th>
        <th>Table heading</th>
        <th>Table heading</th>
        <th>Table heading</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Table cell</td>
        <td>Table cell</td>
        <td>Table cell</td>
        <td>Table cell</td>
      </tr>
      <tr>
        <td>Table cell</td>
        <td>Table cell</td>
        <td>Table cell</td>
        <td>Table cell</td>
      </tr>
      <tr>
        <td>Table cell</td>
        <td>Table cell</td>
        <td>Table cell</td>
        <td>Table cell</td>
      </tr>
    </tbody>
  </table>
</div>

<h2 id="forms">Forms</h2>

<p>Various form elements have been rebooted for simpler base styles. Here are some of the most notable changes:</p>

<ul>
  <li><code class="highlighter-rouge">&lt;fieldset&gt;</code>s have no borders, padding, or margin so they can be easily used as wrappers for individual inputs or groups of inputs.</li>
  <li><code class="highlighter-rouge">&lt;legend&gt;</code>s, like fieldsets, have also been restyled to be displayed as a heading of sorts.</li>
  <li><code class="highlighter-rouge">&lt;label&gt;</code>s are set to <code class="highlighter-rouge">display: inline-block</code> to allow <code class="highlighter-rouge">margin</code> to be applied.</li>
  <li><code class="highlighter-rouge">&lt;input&gt;</code>s, <code class="highlighter-rouge">&lt;select&gt;</code>s, <code class="highlighter-rouge">&lt;textarea&gt;</code>s, and <code class="highlighter-rouge">&lt;button&gt;</code>s are mostly addressed by Normalize, but Reboot removes their <code class="highlighter-rouge">margin</code> and sets <code class="highlighter-rouge">line-height: inherit</code>, too.</li>
  <li><code class="highlighter-rouge">&lt;textarea&gt;</code>s are modified to only be resizable vertically as horizontal resizing often “breaks” page layout.</li>
</ul>

<p>These changes, and more, are demonstrated below.</p>

<form class="bd-example">
  <fieldset>
    <legend>Example legend</legend>

    <p>
      <label for="input">Example input</label>
      <input type="text" id="input" placeholder="Example input" />
    </p>

    <p>
      <label for="select">Example select</label>
      <select id="select">
        <option value="">Choose...</option>
        <optgroup label="Option group 1">
          <option value="">Option 1</option>
          <option value="">Option 2</option>
          <option value="">Option 3</option>
        </optgroup>
        <optgroup label="Option group 2">
          <option value="">Option 4</option>
          <option value="">Option 5</option>
          <option value="">Option 6</option>
        </optgroup>
      </select>
    </p>

    <p>
      <label>
        <input type="checkbox" value="" />
        Check this checkbox
      </label>
    </p>

    <p>
      <label>
        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="" />
        Option one is this and that
      </label>
      <label>
        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" />
        Option two is something else that's also super long to demonstrate the wrapping of these fancy form controls.
      </label>
      <label>
        <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled="" />
        Option three is disabled
      </label>
    </p>

    <p>
      <label for="textarea">Example textarea</label>
      <textarea id="textarea" rows="3"></textarea>
    </p>

    <p>
      <label for="time">Example temporal</label>
      <input type="datetime-local" id="time" />
    </p>

    <p>
      <label for="output">Example output</label>
      <output name="result" id="output">100</output>
    </p>

    <p>
      <button type="submit">Button submit</button>
      <input type="submit" value="Input submit button" />
      <input type="button" value="Input button" />
    </p>

    <p>
      <button type="submit" disabled="">Button submit</button>
      <input type="submit" value="Input submit button" disabled="" />
      <input type="button" value="Input button" disabled="" />
    </p>
  </fieldset>
</form>

<h2 id="misc-elements">Misc elements</h2>

<h3 id="address">Address</h3>

<p>The <code class="highlighter-rouge">&lt;address&gt;</code> element is updated to reset the browser default <code class="highlighter-rouge">font-style</code> from <code class="highlighter-rouge">italic</code> to <code class="highlighter-rouge">normal</code>. <code class="highlighter-rouge">line-height</code> is also now inherited, and <code class="highlighter-rouge">margin-bottom: 1rem</code> has been added. <code class="highlighter-rouge">&lt;address&gt;</code>s are for presenting contact information for the nearest ancestor (or an entire body of work). Preserve formatting by ending lines with <code class="highlighter-rouge">&lt;br&gt;</code>.</p>

<div class="bd-example">
  <address>
    <strong>Twitter, Inc.</strong><br />
    1355 Market St, Suite 900<br />
    San Francisco, CA 94103<br />
    <abbr title="Phone">P:</abbr> (123) 456-7890
  </address>

  <address>
    <strong>Full Name</strong><br />
    <a href="mailto:#">first.last@example.com</a>
  </address>
</div>

<h3 id="blockquote">Blockquote</h3>

<p>The default <code class="highlighter-rouge">margin</code> on blockquotes is <code class="highlighter-rouge">1em 40px</code>, so we reset that to <code class="highlighter-rouge">0 0 1rem</code> for something more consistent with other elements.</p>

<div class="bd-example">
  <blockquote class="blockquote">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
    <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
  </blockquote>
</div>

<h3 id="inline-elements">Inline elements</h3>

<p>The <code class="highlighter-rouge">&lt;abbr&gt;</code> element receives basic styling to make it stand out amongst paragraph text.</p>

<div class="bd-example">
  Nulla <abbr title="attribute">attr</abbr> vitae elit libero, a pharetra augue.
</div>

<h2 id="html5-hidden-attribute">HTML5 <code class="highlighter-rouge">[hidden]</code> attribute</h2>

<p>HTML5 adds <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes/hidden">a new global attribute named <code class="highlighter-rouge">[hidden]</code></a>, which is styled as <code class="highlighter-rouge">display: none</code> by default. Borrowing an idea from <a href="http://purecss.io">PureCSS</a>, we improve upon this default by making <code class="highlighter-rouge">[hidden] { display: none !important; }</code> to help prevent its <code class="highlighter-rouge">display</code> from getting accidentally overridden. While <code class="highlighter-rouge">[hidden]</code> isn’t natively supported by IE9-10, the explicit declaration in our CSS gets around that problem.</p>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">hidden</span><span class="nt">&gt;</span></code></pre></figure>

<div class="bd-callout bd-callout-warning">
<h4 id="jquery-incompatibility">jQuery incompatibility</h4>

<p><code class="highlighter-rouge">[hidden]</code> is not compatible with jQuery’s <code class="highlighter-rouge">$(...).hide()</code> and <code class="highlighter-rouge">$(...).show()</code> methods. This could potentially change in jQuery 3, but we’re not holding our breath. Therefore, we don’t currently especially endorse <code class="highlighter-rouge">[hidden]</code> over other techniques for managing the <code class="highlighter-rouge">display</code> of elements.</p>
</div>

<p>To merely toggle the visibility of an element, meaning its <code class="highlighter-rouge">display</code> is not modified and the element can still affect the flow of the document, use <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/components/utilities/#invisible-content">the <code class="highlighter-rouge">.invisible</code> class</a> instead.</p>

<h2 id="click-delay-optimization-for-touch">Click delay optimization for touch</h2>

<p>Traditionally, browsers on touchscreen devices have a delay of approximately 300ms between the end of a “tap” – the moment when a finger/stylus is lifted from screen – and the <a href="https://developer.mozilla.org/en-US/docs/Web/Events/click"><code class="highlighter-rouge">click</code> event</a> being fired. This delay is necessary for these browsers to correctly handle “double-tap to zoom” gestures without prematurely triggering actions or links after the first “tap”, but it can make your site feel slightly sluggish and unresponsive.</p>

<p>Most mobile browsers automatically optimize away this 300ms delay for sites that use the <code class="highlighter-rouge">width=device-width</code> property as part of their <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/getting-started/introduction/#responsive-meta-tag">responsive meta tag</a> (as well as for sites that disable zooming, for instance with <code class="highlighter-rouge">user-scalable=no</code>, though this practice is strongly discouraged for accessibility and usability reasons). The biggest exceptions here are IE11 on Windows Phone 8.1, and iOS Safari (and any other iOS WebView-based browser) <a href="https://webkit.org/blog/5610/more-responsive-tapping-on-ios/">prior to iOS 9.3</a>.</p>

<p>On touch-enabled laptop/desktop devices, IE11 and Microsoft Edge are currently the only browsers with “double-tap to zoom” functionality. As the <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/getting-started/introduction/#responsive-meta-tag">responsive meta tag</a> is ignored by all desktop browsers, using <code class="highlighter-rouge">width=device-width</code> will have no effect on the 300ms delay here.</p>

<p>To address this problem in IE11 and Microsoft Edge on desktop, as well as IE11 on Windows Phone 8.1, Bootstrap explicitly uses the <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/touch-action"><code class="highlighter-rouge">touch-action:manipulation</code> CSS property</a> on all interactive elements (such as buttons and links). This property essentially disables double-tap functionality on those elements, eliminating the 300ms delay.</p>

<p>In the case of old iOS versions (prior to 9.3), the suggested approach is to use additional scripts such as <a href="https://github.com/ftlabs/fastclick">FastClick</a> to explicitly work around the delay.</p>

<p>For further details, see the compatibility table for <a href="http://patrickhlauke.github.io/touch/tests/results/#suppressing-300ms-delay">suppressing 300ms delay for touchscreen interactions</a>.</p>

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

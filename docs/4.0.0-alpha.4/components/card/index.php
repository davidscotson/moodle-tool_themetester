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
$PAGE->set_heading("Cards");
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
        
          
          
          

          

          <li class="active bd-sidenav-active">
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
          <h1 class="bd-title" id="content">Cards</h1>
          <p>A <strong>card</strong> is a flexible and extensible content container. It includes options for headers and footers, a wide variety of content, contextual background colors, and powerful display options.</p>

<p>If you’re familiar with Bootstrap 3, cards replace our old panels, wells, and thumbnails. Similar functionality to those components is available as modifier classes for cards.</p>

<h2 id="contents">Contents</h2>

<ul id="markdown-toc">
  <li><a href="#contents" id="markdown-toc-contents">Contents</a></li>
  <li><a href="#example" id="markdown-toc-example">Example</a></li>
  <li><a href="#content-types" id="markdown-toc-content-types">Content types</a></li>
  <li><a href="#sizing" id="markdown-toc-sizing">Sizing</a></li>
  <li><a href="#text-alignment" id="markdown-toc-text-alignment">Text alignment</a></li>
  <li><a href="#header-and-footer" id="markdown-toc-header-and-footer">Header and footer</a></li>
  <li><a href="#header-nav" id="markdown-toc-header-nav">Header nav</a></li>
  <li><a href="#image-caps" id="markdown-toc-image-caps">Image caps</a></li>
  <li><a href="#image-overlays" id="markdown-toc-image-overlays">Image overlays</a></li>
  <li><a href="#inverted-text" id="markdown-toc-inverted-text">Inverted text</a></li>
  <li><a href="#background-variants" id="markdown-toc-background-variants">Background variants</a></li>
  <li><a href="#outline-variants" id="markdown-toc-outline-variants">Outline variants</a></li>
  <li><a href="#groups" id="markdown-toc-groups">Groups</a></li>
  <li><a href="#decks" id="markdown-toc-decks">Decks</a></li>
  <li><a href="#columns" id="markdown-toc-columns">Columns</a></li>
</ul>

<h2 id="example">Example</h2>

<p>Cards require a small amount of markup and classes to provide you with as much control as possible. These classes and markup are flexible though and can typically be remixed and extended with ease. For example, if your card has no flush content like images, feel free to put the <code class="highlighter-rouge">.card-block</code> class on the <code class="highlighter-rouge">.card</code> element to consolidate your markup.</p>

<div class="bd-example" data-example-id="">
<div class="card">
  <img class="card-img-top" data-src="holder.js/100px180/" alt="Card image cap" />
  <div class="card-block">
    <h4 class="card-title">Card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"card-img-top"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"Card image cap"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Card title<span class="nt">&lt;/h4&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>Some quick example text to build on the card title and make up the bulk of the card's content.<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Go somewhere<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="content-types">Content types</h2>

<p>Cards support a wide variety of content, including images, text, list groups, links, and more. Mix and match multiple content types to create the card you need.</p>

<div class="bd-example" data-example-id="">
<div class="card">
  <img class="card-img-top" data-src="holder.js/100px180/?text=Image cap" alt="Card image cap" />
  <div class="card-block">
    <h4 class="card-title">Card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Cras justo odio</li>
    <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Vestibulum at eros</li>
  </ul>
  <div class="card-block">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"card-img-top"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"Card image cap"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Card title<span class="nt">&lt;/h4&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>Some quick example text to build on the card title and make up the bulk of the card's content.<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"list-group list-group-flush"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Cras justo odio<span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Dapibus ac facilisis in<span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Vestibulum at eros<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"card-link"</span><span class="nt">&gt;</span>Card link<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"card-link"</span><span class="nt">&gt;</span>Another link<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<p>Lists can be added to a card by adding a list group.</p>

<div class="bd-example" data-example-id="">
<div class="card">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Cras justo odio</li>
    <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Vestibulum at eros</li>
  </ul>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"list-group list-group-flush"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Cras justo odio<span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Dapibus ac facilisis in<span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Vestibulum at eros<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<p><code class="highlighter-rouge">.card-img-top</code> places an image to the top of the card. With <code class="highlighter-rouge">.card-text</code>, text can be added to the card. Text within <code class="highlighter-rouge">.card-text</code> can also be styled with the standard HTML tags.</p>

<div class="bd-example" data-example-id="">
<div class="card">
  <img class="card-img-top" data-src="holder.js/100px180/?text=Image cap" alt="Card image cap" />
  <div class="card-block">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"card-img-top"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"Card image cap"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>Some quick example text to build on the card title and make up the bulk of the card's content.<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<p>Card titles are used by adding <code class="highlighter-rouge">.card-title</code> to a <code class="highlighter-rouge">&lt;h*&gt;</code> tag. In the same way, links are added and placed next to each other by adding <code class="highlighter-rouge">.card-link</code> to  a <code class="highlighter-rouge">&lt;a&gt;</code> tag.</p>

<div class="bd-example" data-example-id="">
<div class="card card-block">
  <h4 class="card-title">Card title</h4>
  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  <a href="#" class="card-link">Card link</a>
  <a href="#" class="card-link">Another link</a>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-block"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Card title<span class="nt">&lt;/h4&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>Some quick example text to build on the card title and make up the bulk of the card's content.<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"card-link"</span><span class="nt">&gt;</span>Card link<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"card-link"</span><span class="nt">&gt;</span>Another link<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<p>Subtitles are used by adding a <code class="highlighter-rouge">.card-subtitle</code> to an <code class="highlighter-rouge">&lt;h*&gt;</code> tag. If the <code class="highlighter-rouge">.card-title</code> and the <code class="highlighter-rouge">.card-subtitle</code> items are placed in a <code class="highlighter-rouge">.card-block</code> item, the card title and subtitle are aligned nicely.</p>

<p>The multiple content types can be easily combined to create the card you need. See below for an example.</p>

<div class="bd-example" data-example-id="">
<div class="card">
  <div class="card-block">
    <h4 class="card-title">Card title</h4>
    <h6 class="card-subtitle text-muted">Support card subtitle</h6>
  </div>
  <img data-src="holder.js/100px180/?text=Image" alt="Card image" />
  <div class="card-block">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Card title<span class="nt">&lt;/h4&gt;</span>
    <span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">"card-subtitle text-muted"</span><span class="nt">&gt;</span>Support card subtitle<span class="nt">&lt;/h6&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"Card image"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>Some quick example text to build on the card title and make up the bulk of the card's content.<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"card-link"</span><span class="nt">&gt;</span>Card link<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"card-link"</span><span class="nt">&gt;</span>Another link<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="sizing">Sizing</h2>

<p>Constrain the width of cards via custom CSS, our predefined grid classes, or with custom styles using our grid mixins.</p>

<p>Using the grid:</p>

<div class="bd-example" data-example-id="">
<div class="row">
  <div class="col-sm-6">
    <div class="card card-block">
      <h3 class="card-title">Special title treatment</h3>
      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card card-block">
      <h3 class="card-title">Special title treatment</h3>
      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-6"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-block"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;h3</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Special title treatment<span class="nt">&lt;/h3&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>With supporting text below as a natural lead-in to additional content.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Go somewhere<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-6"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-block"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;h3</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Special title treatment<span class="nt">&lt;/h3&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>With supporting text below as a natural lead-in to additional content.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Go somewhere<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<p>Using custom widths:</p>

<div class="bd-example" data-example-id="">
<div class="card card-block" style="width: 18rem;">
  <h3 class="card-title">Special title treatment</h3>
  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
  <a href="#" class="btn btn-primary">Go somewhere</a>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-block"</span> <span class="na">style=</span><span class="s">"width: 18rem;"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;h3</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Special title treatment<span class="nt">&lt;/h3&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>With supporting text below as a natural lead-in to additional content.<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Go somewhere<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="text-alignment">Text alignment</h2>

<p>You can quickly change the text alignment of any card—in its entirety or specific parts—with our <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/components/utilities/#text-alignment">text align classes</a>.</p>

<div class="bd-example" data-example-id="">
<div class="card card-block">
  <h4 class="card-title">Special title treatment</h4>
  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
  <a href="#" class="btn btn-primary">Go somewhere</a>
</div>

<div class="card card-block text-xs-center">
  <h4 class="card-title">Special title treatment</h4>
  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
  <a href="#" class="btn btn-primary">Go somewhere</a>
</div>

<div class="card card-block text-xs-right">
  <h4 class="card-title">Special title treatment</h4>
  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
  <a href="#" class="btn btn-primary">Go somewhere</a>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-block"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Special title treatment<span class="nt">&lt;/h4&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>With supporting text below as a natural lead-in to additional content.<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Go somewhere<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-block text-xs-center"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Special title treatment<span class="nt">&lt;/h4&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>With supporting text below as a natural lead-in to additional content.<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Go somewhere<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-block text-xs-right"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Special title treatment<span class="nt">&lt;/h4&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>With supporting text below as a natural lead-in to additional content.<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Go somewhere<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="header-and-footer">Header and footer</h2>

<p>Add an optional header and/or footer within a card.</p>

<div class="bd-example" data-example-id="">
<div class="card">
  <div class="card-header">
    Featured
  </div>
  <div class="card-block">
    <h4 class="card-title">Special title treatment</h4>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-header"</span><span class="nt">&gt;</span>
    Featured
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Special title treatment<span class="nt">&lt;/h4&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>With supporting text below as a natural lead-in to additional content.<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Go somewhere<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<p>Card headers can be styled by adding <code class="highlighter-rouge">.card-header</code> to <code class="highlighter-rouge">&lt;h*&gt;</code> elements.</p>

<div class="bd-example" data-example-id="">
<div class="card">
  <h3 class="card-header">Featured</h3>
  <div class="card-block">
    <h4 class="card-title">Special title treatment</h4>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;h3</span> <span class="na">class=</span><span class="s">"card-header"</span><span class="nt">&gt;</span>Featured<span class="nt">&lt;/h3&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Special title treatment<span class="nt">&lt;/h4&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>With supporting text below as a natural lead-in to additional content.<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Go somewhere<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<div class="bd-example" data-example-id="">
<div class="card">
  <div class="card-header">
    Quote
  </div>
  <div class="card-block">
    <blockquote class="card-blockquote">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
    </blockquote>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-header"</span><span class="nt">&gt;</span>
    Quote
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;blockquote</span> <span class="na">class=</span><span class="s">"card-blockquote"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;footer&gt;</span>Someone famous in <span class="nt">&lt;cite</span> <span class="na">title=</span><span class="s">"Source Title"</span><span class="nt">&gt;</span>Source Title<span class="nt">&lt;/cite&gt;&lt;/footer&gt;</span>
    <span class="nt">&lt;/blockquote&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<div class="bd-example" data-example-id="">
<div class="card text-xs-center">
  <div class="card-header">
    Featured
  </div>
  <div class="card-block">
    <h4 class="card-title">Special title treatment</h4>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  <div class="card-footer text-muted">
    2 days ago
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card text-xs-center"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-header"</span><span class="nt">&gt;</span>
    Featured
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Special title treatment<span class="nt">&lt;/h4&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>With supporting text below as a natural lead-in to additional content.<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Go somewhere<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-footer text-muted"</span><span class="nt">&gt;</span>
    2 days ago
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="header-nav">Header nav</h2>

<p>Use Bootstrap’s nav pills or tabs within a card header. Be sure to always include a <code class="highlighter-rouge">.pull-*-*</code> utility class for proper alignment.</p>

<div class="bd-example" data-example-id="">
<div class="card text-xs-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs pull-xs-left">
      <li class="nav-item">
        <a class="nav-link active" href="#">Active</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
  <div class="card-block">
    <h4 class="card-title">Special title treatment</h4>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card text-xs-center"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-header"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-tabs card-header-tabs pull-xs-left"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link active"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Active<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link disabled"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Disabled<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;/ul&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Special title treatment<span class="nt">&lt;/h4&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>With supporting text below as a natural lead-in to additional content.<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Go somewhere<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<div class="bd-example" data-example-id="">
<div class="card text-xs-center">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills pull-xs-left">
      <li class="nav-item">
        <a class="nav-link active" href="#">Active</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
  <div class="card-block">
    <h4 class="card-title">Special title treatment</h4>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card text-xs-center"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-header"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-pills card-header-pills pull-xs-left"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link active"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Active<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link disabled"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Disabled<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;/ul&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Special title treatment<span class="nt">&lt;/h4&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>With supporting text below as a natural lead-in to additional content.<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Go somewhere<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="image-caps">Image caps</h2>

<p>Similar to headers and footers, cards include top and bottom image caps.</p>

<div class="bd-example" data-example-id="">
<div class="card">
  <img class="card-img-top" data-src="holder.js/100px180/" alt="Card image cap" />
  <div class="card-block">
    <h4 class="card-title">Card title</h4>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div>
<div class="card">
  <div class="card-block">
    <h4 class="card-title">Card title</h4>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
  <img class="card-img-bottom" data-src="holder.js/100px180/" alt="Card image cap" />
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"card-img-top"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"Card image cap"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Card title<span class="nt">&lt;/h4&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;&lt;small</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>Last updated 3 mins ago<span class="nt">&lt;/small&gt;&lt;/p&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Card title<span class="nt">&lt;/h4&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;&lt;small</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>Last updated 3 mins ago<span class="nt">&lt;/small&gt;&lt;/p&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"card-img-bottom"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"Card image cap"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="image-overlays">Image overlays</h2>

<p>Turn an image into a card background and overlay your card’s text. Depending on the image, you may or may not need <code class="highlighter-rouge">.card-inverse</code> (see below).</p>

<div class="bd-example" data-example-id="">
<div class="card card-inverse">
  <img class="card-img" data-src="holder.js/100px270/#55595c:#373a3c/text:Card image" alt="Card image" />
  <div class="card-img-overlay">
    <h4 class="card-title">Card title</h4>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-inverse"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"card-img"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"Card image"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-img-overlay"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Card title<span class="nt">&lt;/h4&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;&lt;small</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>Last updated 3 mins ago<span class="nt">&lt;/small&gt;&lt;/p&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="inverted-text">Inverted text</h2>

<p>Cards include a class for quickly toggling <strong>the text color</strong>. By default, cards use dark text and assume a light background. <strong>Add <code class="highlighter-rouge">.card-inverse</code> for white text</strong> and specify the <code class="highlighter-rouge">background-color</code> and <code class="highlighter-rouge">border-color</code> to go with it.</p>

<p>You can also use <code class="highlighter-rouge">.card-inverse</code> with the <a href="#background-variants">contextual backgrounds variants</a>.</p>

<div class="bd-example" data-example-id="">
<div class="card card-inverse" style="background-color: #333; border-color: #333;">
  <div class="card-block">
    <h3 class="card-title">Special title treatment</h3>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-inverse"</span> <span class="na">style=</span><span class="s">"background-color: #333; border-color: #333;"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h3</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Special title treatment<span class="nt">&lt;/h3&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>With supporting text below as a natural lead-in to additional content.<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span><span class="nt">&gt;</span>Go somewhere<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="background-variants">Background variants</h2>

<p>Cards include their own variant classes for quickly changing the <code class="highlighter-rouge">background-color</code> and <code class="highlighter-rouge">border-color</code> of a card. <strong>Darker colors require the use of <code class="highlighter-rouge">.card-inverse</code>.</strong></p>

<div class="bd-example" data-example-id="">
<div class="card card-inverse card-primary text-xs-center">
  <div class="card-block">
    <blockquote class="card-blockquote">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
    </blockquote>
  </div>
</div>
<div class="card card-inverse card-success text-xs-center">
  <div class="card-block">
    <blockquote class="card-blockquote">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
    </blockquote>
  </div>
</div>
<div class="card card-inverse card-info text-xs-center">
  <div class="card-block">
    <blockquote class="card-blockquote">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
    </blockquote>
  </div>
</div>
<div class="card card-inverse card-warning text-xs-center">
  <div class="card-block">
    <blockquote class="card-blockquote">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
    </blockquote>
  </div>
</div>
<div class="card card-inverse card-danger text-xs-center">
  <div class="card-block">
    <blockquote class="card-blockquote">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
    </blockquote>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-inverse card-primary text-xs-center"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;blockquote</span> <span class="na">class=</span><span class="s">"card-blockquote"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;footer&gt;</span>Someone famous in <span class="nt">&lt;cite</span> <span class="na">title=</span><span class="s">"Source Title"</span><span class="nt">&gt;</span>Source Title<span class="nt">&lt;/cite&gt;&lt;/footer&gt;</span>
    <span class="nt">&lt;/blockquote&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-inverse card-success text-xs-center"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;blockquote</span> <span class="na">class=</span><span class="s">"card-blockquote"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;footer&gt;</span>Someone famous in <span class="nt">&lt;cite</span> <span class="na">title=</span><span class="s">"Source Title"</span><span class="nt">&gt;</span>Source Title<span class="nt">&lt;/cite&gt;&lt;/footer&gt;</span>
    <span class="nt">&lt;/blockquote&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-inverse card-info text-xs-center"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;blockquote</span> <span class="na">class=</span><span class="s">"card-blockquote"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;footer&gt;</span>Someone famous in <span class="nt">&lt;cite</span> <span class="na">title=</span><span class="s">"Source Title"</span><span class="nt">&gt;</span>Source Title<span class="nt">&lt;/cite&gt;&lt;/footer&gt;</span>
    <span class="nt">&lt;/blockquote&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-inverse card-warning text-xs-center"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;blockquote</span> <span class="na">class=</span><span class="s">"card-blockquote"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;footer&gt;</span>Someone famous in <span class="nt">&lt;cite</span> <span class="na">title=</span><span class="s">"Source Title"</span><span class="nt">&gt;</span>Source Title<span class="nt">&lt;/cite&gt;&lt;/footer&gt;</span>
    <span class="nt">&lt;/blockquote&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-inverse card-danger text-xs-center"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;blockquote</span> <span class="na">class=</span><span class="s">"card-blockquote"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;footer&gt;</span>Someone famous in <span class="nt">&lt;cite</span> <span class="na">title=</span><span class="s">"Source Title"</span><span class="nt">&gt;</span>Source Title<span class="nt">&lt;/cite&gt;&lt;/footer&gt;</span>
    <span class="nt">&lt;/blockquote&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<div class="bd-callout bd-callout-warning">
<h4 id="conveying-meaning-to-assistive-technologies">Conveying meaning to assistive technologies</h4>

<p>Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies – such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (e.g. the visible text), or is included through alternative means, such as additional text hidden with the <code class="highlighter-rouge">.sr-only</code> class.</p>
</div>

<h2 id="outline-variants">Outline variants</h2>

<p>In need of a colored card, but not the hefty background colors they bring? Replace the default modifier classes with the <code class="highlighter-rouge">.card-outline-*</code> ones to style just the <code class="highlighter-rouge">border-color</code> of a card.</p>

<div class="bd-example" data-example-id="">
<div class="card card-outline-primary text-xs-center">
  <div class="card-block">
    <blockquote class="card-blockquote">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
    </blockquote>
  </div>
</div>
<div class="card card-outline-secondary text-xs-center">
  <div class="card-block">
    <blockquote class="card-blockquote">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
    </blockquote>
  </div>
</div>
<div class="card card-outline-success text-xs-center">
  <div class="card-block">
    <blockquote class="card-blockquote">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
    </blockquote>
  </div>
</div>
<div class="card card-outline-info text-xs-center">
  <div class="card-block">
    <blockquote class="card-blockquote">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
    </blockquote>
  </div>
</div>
<div class="card card-outline-warning text-xs-center">
  <div class="card-block">
    <blockquote class="card-blockquote">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
    </blockquote>
  </div>
</div>
<div class="card card-outline-danger text-xs-center">
  <div class="card-block">
    <blockquote class="card-blockquote">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
    </blockquote>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-outline-primary text-xs-center"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;blockquote</span> <span class="na">class=</span><span class="s">"card-blockquote"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;footer&gt;</span>Someone famous in <span class="nt">&lt;cite</span> <span class="na">title=</span><span class="s">"Source Title"</span><span class="nt">&gt;</span>Source Title<span class="nt">&lt;/cite&gt;&lt;/footer&gt;</span>
    <span class="nt">&lt;/blockquote&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-outline-secondary text-xs-center"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;blockquote</span> <span class="na">class=</span><span class="s">"card-blockquote"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;footer&gt;</span>Someone famous in <span class="nt">&lt;cite</span> <span class="na">title=</span><span class="s">"Source Title"</span><span class="nt">&gt;</span>Source Title<span class="nt">&lt;/cite&gt;&lt;/footer&gt;</span>
    <span class="nt">&lt;/blockquote&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-outline-success text-xs-center"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;blockquote</span> <span class="na">class=</span><span class="s">"card-blockquote"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;footer&gt;</span>Someone famous in <span class="nt">&lt;cite</span> <span class="na">title=</span><span class="s">"Source Title"</span><span class="nt">&gt;</span>Source Title<span class="nt">&lt;/cite&gt;&lt;/footer&gt;</span>
    <span class="nt">&lt;/blockquote&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-outline-info text-xs-center"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;blockquote</span> <span class="na">class=</span><span class="s">"card-blockquote"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;footer&gt;</span>Someone famous in <span class="nt">&lt;cite</span> <span class="na">title=</span><span class="s">"Source Title"</span><span class="nt">&gt;</span>Source Title<span class="nt">&lt;/cite&gt;&lt;/footer&gt;</span>
    <span class="nt">&lt;/blockquote&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-outline-warning text-xs-center"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;blockquote</span> <span class="na">class=</span><span class="s">"card-blockquote"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;footer&gt;</span>Someone famous in <span class="nt">&lt;cite</span> <span class="na">title=</span><span class="s">"Source Title"</span><span class="nt">&gt;</span>Source Title<span class="nt">&lt;/cite&gt;&lt;/footer&gt;</span>
    <span class="nt">&lt;/blockquote&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-outline-danger text-xs-center"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;blockquote</span> <span class="na">class=</span><span class="s">"card-blockquote"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;footer&gt;</span>Someone famous in <span class="nt">&lt;cite</span> <span class="na">title=</span><span class="s">"Source Title"</span><span class="nt">&gt;</span>Source Title<span class="nt">&lt;/cite&gt;&lt;/footer&gt;</span>
    <span class="nt">&lt;/blockquote&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="groups">Groups</h2>

<p>Use card groups to render cards as a single, attached element with equal width and height columns. By default, card groups use <code class="highlighter-rouge">display: table;</code> and <code class="highlighter-rouge">table-layout: fixed;</code> to achieve their uniform sizing. However, enabling <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/getting-started/flexbox">flexbox mode</a> can switch that to use <code class="highlighter-rouge">display: flex;</code> and provide the same effect.</p>

<p>Only applies to small devices and above.</p>

<div class="bd-example" data-example-id="">
<div class="card-group">
  <div class="card">
    <img class="card-img-top" data-src="holder.js/100px180/" alt="Card image cap" />
    <div class="card-block">
      <h4 class="card-title">Card title</h4>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" data-src="holder.js/100px180/" alt="Card image cap" />
    <div class="card-block">
      <h4 class="card-title">Card title</h4>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" data-src="holder.js/100px180/" alt="Card image cap" />
    <div class="card-block">
      <h4 class="card-title">Card title</h4>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"card-img-top"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"Card image cap"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Card title<span class="nt">&lt;/h4&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;&lt;small</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>Last updated 3 mins ago<span class="nt">&lt;/small&gt;&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"card-img-top"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"Card image cap"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Card title<span class="nt">&lt;/h4&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>This card has supporting text below as a natural lead-in to additional content.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;&lt;small</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>Last updated 3 mins ago<span class="nt">&lt;/small&gt;&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"card-img-top"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"Card image cap"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Card title<span class="nt">&lt;/h4&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;&lt;small</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>Last updated 3 mins ago<span class="nt">&lt;/small&gt;&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="decks">Decks</h2>

<p>Need a set of equal width and height cards that aren’t attached to one another? Use card decks. By default, card decks require two wrapping elements: <code class="highlighter-rouge">.card-deck-wrapper</code> and a <code class="highlighter-rouge">.card-deck</code>. We use table styles for the sizing and the gutters on <code class="highlighter-rouge">.card-deck</code>. The <code class="highlighter-rouge">.card-deck-wrapper</code> is used to negative margin out the <code class="highlighter-rouge">border-spacing</code> on the <code class="highlighter-rouge">.card-deck</code>.</p>

<p>Only applies to small devices and above.</p>

<p><strong>ProTip!</strong> If you enable <a href="/admin/tool/themetester/docs/4.0.0-alpha.4/getting-started/flexbox/">flexbox mode</a>, you can remove the <code class="highlighter-rouge">.card-deck-wrapper</code>.</p>

<div class="bd-example" data-example-id="">
<div class="card-deck-wrapper">
  <div class="card-deck">
    <div class="card">
      <img class="card-img-top" data-src="holder.js/100px200/" alt="Card image cap" />
      <div class="card-block">
        <h4 class="card-title">Card title</h4>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" data-src="holder.js/100px200/" alt="Card image cap" />
      <div class="card-block">
        <h4 class="card-title">Card title</h4>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" data-src="holder.js/100px200/" alt="Card image cap" />
      <div class="card-block">
        <h4 class="card-title">Card title</h4>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-deck-wrapper"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-deck"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"card-img-top"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"Card image cap"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Card title<span class="nt">&lt;/h4&gt;</span>
        <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.<span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;&lt;small</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>Last updated 3 mins ago<span class="nt">&lt;/small&gt;&lt;/p&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"card-img-top"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"Card image cap"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Card title<span class="nt">&lt;/h4&gt;</span>
        <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>This card has supporting text below as a natural lead-in to additional content.<span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;&lt;small</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>Last updated 3 mins ago<span class="nt">&lt;/small&gt;&lt;/p&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"card-img-top"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"Card image cap"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Card title<span class="nt">&lt;/h4&gt;</span>
        <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.<span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;&lt;small</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>Last updated 3 mins ago<span class="nt">&lt;/small&gt;&lt;/p&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="columns">Columns</h2>

<p>Cards can be organized into <a href="http://masonry.desandro.com">Masonry</a>-like columns with just CSS by wrapping them in <code class="highlighter-rouge">.card-columns</code>. Cards are ordered from top to bottom and left to right when wrapped in <code class="highlighter-rouge">.card-columns</code>.</p>

<p>Only applies to small devices and above.</p>

<p><strong>Heads up!</strong> This is <strong>not available in IE9 and below</strong> as they have no support for the <a href="https://developer.mozilla.org/en-US/docs/Web/Guide/CSS/Using_multi-column_layouts"><code class="highlighter-rouge">column-*</code> CSS properties</a>.</p>

<div class="bd-example" data-example-id="">
<div class="card-columns">
  <div class="card">
    <img class="card-img-top" data-src="holder.js/100px160/" alt="Card image cap" />
    <div class="card-block">
      <h4 class="card-title">Card title that wraps to a new line</h4>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
  </div>
  <div class="card card-block">
    <blockquote class="card-blockquote">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer>
        <small class="text-muted">
          Someone famous in <cite title="Source Title">Source Title</cite>
        </small>
      </footer>
    </blockquote>
  </div>
  <div class="card">
    <img class="card-img-top" data-src="holder.js/100px160/" alt="Card image cap" />
    <div class="card-block">
      <h4 class="card-title">Card title</h4>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card card-block card-inverse card-primary text-xs-center">
    <blockquote class="card-blockquote">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
      <footer>
        <small>
          Someone famous in <cite title="Source Title">Source Title</cite>
        </small>
      </footer>
    </blockquote>
  </div>
  <div class="card card-block text-xs-center">
    <h4 class="card-title">Card title</h4>
    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
  <div class="card">
    <img class="card-img" data-src="holder.js/100px260/" alt="Card image" />
  </div>
  <div class="card card-block text-xs-right">
    <blockquote class="card-blockquote">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer>
        <small class="text-muted">
          Someone famous in <cite title="Source Title">Source Title</cite>
        </small>
      </footer>
    </blockquote>
  </div>
  <div class="card card-block">
    <h4 class="card-title">Card title</h4>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-columns"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"card-img-top"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"Card image cap"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Card title that wraps to a new line<span class="nt">&lt;/h4&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-block"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;blockquote</span> <span class="na">class=</span><span class="s">"card-blockquote"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;footer&gt;</span>
        <span class="nt">&lt;small</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>
          Someone famous in <span class="nt">&lt;cite</span> <span class="na">title=</span><span class="s">"Source Title"</span><span class="nt">&gt;</span>Source Title<span class="nt">&lt;/cite&gt;</span>
        <span class="nt">&lt;/small&gt;</span>
      <span class="nt">&lt;/footer&gt;</span>
    <span class="nt">&lt;/blockquote&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"card-img-top"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"Card image cap"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-block"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Card title<span class="nt">&lt;/h4&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>This card has supporting text below as a natural lead-in to additional content.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;&lt;small</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>Last updated 3 mins ago<span class="nt">&lt;/small&gt;&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-block card-inverse card-primary text-xs-center"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;blockquote</span> <span class="na">class=</span><span class="s">"card-blockquote"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;footer&gt;</span>
        <span class="nt">&lt;small&gt;</span>
          Someone famous in <span class="nt">&lt;cite</span> <span class="na">title=</span><span class="s">"Source Title"</span><span class="nt">&gt;</span>Source Title<span class="nt">&lt;/cite&gt;</span>
        <span class="nt">&lt;/small&gt;</span>
      <span class="nt">&lt;/footer&gt;</span>
    <span class="nt">&lt;/blockquote&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-block text-xs-center"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Card title<span class="nt">&lt;/h4&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>This card has supporting text below as a natural lead-in to additional content.<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;&lt;small</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>Last updated 3 mins ago<span class="nt">&lt;/small&gt;&lt;/p&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"card-img"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"Card image"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-block text-xs-right"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;blockquote</span> <span class="na">class=</span><span class="s">"card-blockquote"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p&gt;</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;footer&gt;</span>
        <span class="nt">&lt;small</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>
          Someone famous in <span class="nt">&lt;cite</span> <span class="na">title=</span><span class="s">"Source Title"</span><span class="nt">&gt;</span>Source Title<span class="nt">&lt;/cite&gt;</span>
        <span class="nt">&lt;/small&gt;</span>
      <span class="nt">&lt;/footer&gt;</span>
    <span class="nt">&lt;/blockquote&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card card-block"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span class="nt">&gt;</span>Card title<span class="nt">&lt;/h4&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;&lt;small</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>Last updated 3 mins ago<span class="nt">&lt;/small&gt;&lt;/p&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<p>Card columns can also be extended and customized with some additional code. Shown below is an extension of the <code class="highlighter-rouge">.card-columns</code> class using the same CSS we use—CSS columns— to generate a set of responsive tiers for changing the number of columns.</p>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="nc">.card-columns</span> <span class="p">{</span>
  <span class="k">@include</span> <span class="nd">media-breakpoint-only</span><span class="p">(</span><span class="n">lg</span><span class="p">)</span> <span class="p">{</span>
    <span class="nl">column-count</span><span class="p">:</span> <span class="m">4</span><span class="p">;</span>
  <span class="p">}</span>
  <span class="k">@include</span> <span class="nd">media-breakpoint-only</span><span class="p">(</span><span class="n">xl</span><span class="p">)</span> <span class="p">{</span>
    <span class="nl">column-count</span><span class="p">:</span> <span class="m">5</span><span class="p">;</span>
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

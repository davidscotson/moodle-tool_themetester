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

require_once(dirname(__FILE__) . '/../../../config.php');
require_once($CFG->libdir . '/adminlib.php');
require_once($CFG->dirroot.'/lib/formslib.php');


$strheading = 'Theme Tester: Font Awesome';
$url = new moodle_url('/admin/tool/themetester/fontawesome.php');
$PAGE->requires->css('/admin/tool/themetester/fontawesome/assets/css/pygments.css');
// Start setting up the page
$params = array();
$PAGE->set_context(context_system::instance());
$PAGE->set_url($url);
$PAGE->set_title($strheading);
$PAGE->set_heading($strheading);

admin_externalpage_setup('toolthemetester');

echo $OUTPUT->header();

echo html_writer::link(new moodle_url('index.php'), '&laquo; Back to index');
echo $OUTPUT->heading($strheading);

echo $OUTPUT->box_start();
echo $OUTPUT->container('Font Awesome example page');
echo $OUTPUT->container_start();
?>

<div class="jumbotron jumbotron-ad hidden-print">
  <div class="container">

    <h1><i class="fa fa-magic" aria-hidden="true"></i>&nbsp; Examples</h1>
    <p>Lots of easy ways to use Font Awesome</p>

  </div>
</div>

<div class="container">

  <div class="alert alert-success gg">
    <div class="gg-col min-width">
      <i class="fa fa-universal-access fa-2x" aria-hidden"true"></i>
    </div>
    <div class="gg-col padding-left">
      <p class="margin-bottom-none">The following examples are kept simple and assume use of <a href="../get-started/get-started-cdn">Font Awesome CDN</a>, which provides auto-accessibility support. If you are not using the Font Awesome CDN, please see the <a href="../examples/#accessible">manual accessibility examples</a> and read more about <a href="../accessibility">making your icons more awesome for all users</a></p>
    </div>
  </div>

  <section id="basic">
  <h2 class="page-header">
    Basic Icons
    <div class="pull-right text-default h6 margin-top padding-top-sm hidden-xs">
      <a href="https://github.com/FortAwesome/Font-Awesome/blob/v4.7.0/less/core.less" class="text-muted padding-right">View LESS</a>
      <a href="https://github.com/FortAwesome/Font-Awesome/blob/v4.7.0/scss/_core.scss" class="text-muted">View SASS</a>
    </div>
  </h2>

  <div class="row">
    <div class="col-md-3 col-sm-4">
      <p>
        <i class="fa fa-camera-retro"></i>
        <span class="sr-only">Example: basic icon</span>
        fa-camera-retro
      </p>
    </div>
    <div class="col-md-9 col-sm-8">
      <p>
        You can place Font Awesome icons just about anywhere using the CSS Prefix <code>fa</code> and the icon's
        name. Font Awesome is designed to be used with inline elements (we like the <code>&lt;i&gt;</code> tag for
        brevity, but using a <code>&lt;span&gt;</code> is more semantically correct).
      </p>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa fa-camera-retro&quot;</span><span class="nt">&gt;&lt;/i&gt;</span> fa-camera-retro
</code></pre></div>
      <div class="alert alert-success">
        <ul class="fa-ul">
          <li>
            <i class="fa fa-info-circle fa-lg fa-li" aria-hidden="true"></i>
            <strong class="sr-only">Example: basic icon</strong>
            If you change the font-size of the icon's container, the icon gets bigger. Same things goes for color,
            drop shadow, and anything else that gets inherited using CSS.
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

  <section id="larger">
  <h2 class="page-header">
    Larger Icons
    <div class="pull-right text-default h6 margin-top padding-top-sm hidden-xs">
      <a href="https://github.com/FortAwesome/Font-Awesome/blob/v4.7.0/less/larger.less" class="text-muted padding-right">View LESS</a>
      <a href="https://github.com/FortAwesome/Font-Awesome/blob/v4.7.0/scss/_larger.scss" class="text-muted">View SASS</a>
    </div>
  </h2>
  <div class="row">
    <div class="col-md-3 col-sm-4">
      <p><i class="fa fa-camera-retro fa-lg" aria-hidden="true"></i> fa-lg</p>
      <p><i class="fa fa-camera-retro fa-2x" aria-hidden="true"></i> fa-2x</p>
      <p><i class="fa fa-camera-retro fa-3x" aria-hidden="true"></i> fa-3x</p>
      <p><i class="fa fa-camera-retro fa-4x" aria-hidden="true"></i> fa-4x</p>
      <p><i class="fa fa-camera-retro fa-5x" aria-hidden="true"></i> fa-5x</p>
    </div>
    <div class="col-md-9 col-sm-8">
      <p>
        To increase icon sizes relative to their container, use the <code>fa-lg</code> (33% increase), <code>fa-2x</code>,
        <code>fa-3x</code>, <code>fa-4x</code>, or <code>fa-5x</code> classes.
      </p>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa fa-camera-retro fa-lg&quot;</span><span class="nt">&gt;&lt;/i&gt;</span> fa-lg
<span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa fa-camera-retro fa-2x&quot;</span><span class="nt">&gt;&lt;/i&gt;</span> fa-2x
<span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa fa-camera-retro fa-3x&quot;</span><span class="nt">&gt;&lt;/i&gt;</span> fa-3x
<span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa fa-camera-retro fa-4x&quot;</span><span class="nt">&gt;&lt;/i&gt;</span> fa-4x
<span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa fa-camera-retro fa-5x&quot;</span><span class="nt">&gt;&lt;/i&gt;</span> fa-5x
</code></pre></div>
      <div class="alert alert-success">
        <ul class="fa-ul">
          <li>
            <i class="fa fa-exclamation-triangle fa-li fa-lg"></i>
            If your icons are getting chopped off on top and bottom, make sure you have
            sufficient line-height.
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

  <section id="fixed-width">
  <h2 class="page-header">
    Fixed Width Icons
    <div class="pull-right text-default h6 margin-top padding-top-sm hidden-xs">
      <a href="https://github.com/FortAwesome/Font-Awesome/blob/v4.7.0/less/fixed-width.less" class="text-muted padding-right">View LESS</a>
      <a href="https://github.com/FortAwesome/Font-Awesome/blob/v4.7.0/scss/_fixed-width.scss" class="text-muted">View SASS</a>
    </div>
  </h2>
  <div class="row">
    <div class="col-md-3 col-sm-4">
      <div class="list-group">
        <a class="list-group-item" href="#"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp; Home</a>
        <a class="list-group-item" href="#"><i class="fa fa-book fa-fw" aria-hidden="true"></i>&nbsp; Library</a>
        <a class="list-group-item" href="#"><i class="fa fa-pencil fa-fw" aria-hidden="true"></i>&nbsp; Applications</a>
        <a class="list-group-item" href="#"><i class="fa fa-cog fa-fw" aria-hidden="true"></i>&nbsp; Settings</a>
      </div>
    </div>
    <div class="col-md-9 col-sm-8">
      <p>
        Use <code>fa-fw</code> to set icons at a fixed width. Great to use when different icon widths throw off alignment.
        Especially useful in things like nav lists &amp; list groups.
      </p>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;list-group&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">&quot;list-group-item&quot;</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa fa-home fa-fw&quot;</span> <span class="na">aria-hidden=</span><span class="s">&quot;true&quot;</span><span class="nt">&gt;&lt;/i&gt;</span><span class="ni">&amp;nbsp;</span> Home<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">&quot;list-group-item&quot;</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa fa-book fa-fw&quot;</span> <span class="na">aria-hidden=</span><span class="s">&quot;true&quot;</span><span class="nt">&gt;&lt;/i&gt;</span><span class="ni">&amp;nbsp;</span> Library<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">&quot;list-group-item&quot;</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa fa-pencil fa-fw&quot;</span> <span class="na">aria-hidden=</span><span class="s">&quot;true&quot;</span><span class="nt">&gt;&lt;/i&gt;</span><span class="ni">&amp;nbsp;</span> Applications<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">&quot;list-group-item&quot;</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa fa-cog fa-fw&quot;</span> <span class="na">aria-hidden=</span><span class="s">&quot;true&quot;</span><span class="nt">&gt;&lt;/i&gt;</span><span class="ni">&amp;nbsp;</span> Settings<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>
    </div>
  </div>
</section>

  <section id="list">
  <h2 class="page-header">
    List Icons
    <div class="pull-right text-default h6 margin-top padding-top-sm hidden-xs">
      <a href="https://github.com/FortAwesome/Font-Awesome/blob/v4.7.0/less/list.less" class="text-muted padding-right">View LESS</a>
      <a href="https://github.com/FortAwesome/Font-Awesome/blob/v4.7.0/scss/_list.scss" class="text-muted">View SASS</a>
    </div>
  </h2>
  <div class="row">
    <div class="col-md-3 col-sm-4">
      <ul class="fa-ul">
        <li><i class="fa-li fa fa-check-square"></i>List icons</li>
        <li><i class="fa-li fa fa-check-square"></i>can be used</li>
        <li><i class="fa-li fa fa-spinner fa-spin"></i>as bullets</li>
        <li><i class="fa-li fa fa-square"></i>in lists</li>
      </ul>
    </div>
    <div class="col-md-9 col-sm-8">
      <p>Use <code>fa-ul</code> and <code>fa-li</code> to easily replace default bullets in unordered lists.</p>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">&quot;fa-ul&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li&gt;&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa-li fa fa-check-square&quot;</span><span class="nt">&gt;&lt;/i&gt;</span>List icons<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa-li fa fa-check-square&quot;</span><span class="nt">&gt;&lt;/i&gt;</span>can be used<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa-li fa fa-spinner fa-spin&quot;</span><span class="nt">&gt;&lt;/i&gt;</span>as bullets<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa-li fa fa-square&quot;</span><span class="nt">&gt;&lt;/i&gt;</span>in lists<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span>
</code></pre></div>
    </div>
  </div>
</section>

  <section id="bordered-pulled">
  <h2 class="page-header">
    Bordered &amp; Pulled Icons
    <div class="pull-right text-default h6 margin-top padding-top-sm hidden-xs">
      <a href="https://github.com/FortAwesome/Font-Awesome/blob/v4.7.0/less/bordered-pulled.less" class="text-muted padding-right">View LESS</a>
      <a href="https://github.com/FortAwesome/Font-Awesome/blob/v4.7.0/scss/_bordered-pulled.scss" class="text-muted">View SASS</a>
    </div>
  </h2>
  <div class="row">
    <div class="col-md-3 col-sm-4">
      <p>
        <i class="fa fa-quote-left fa-3x fa-pull-left fa-border" aria-hidden="true"></i>
        &hellip;tomorrow we will run faster, stretch out our arms farther&hellip; And then one fine morning&mdash;
        So we beat on, boats against the current, borne back ceaselessly into the past.
      </p>
    </div>
    <div class="col-md-9 col-sm-8">
      <p>
        Use <code>fa-border</code> and <code>fa-pull-right</code> or <code>fa-pull-left</code> for easy pull quotes or
        article icons.
      </p>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa fa-quote-left fa-3x fa-pull-left fa-border&quot;</span> <span class="na">aria-hidden=</span><span class="s">&quot;true&quot;</span><span class="nt">&gt;&lt;/i&gt;</span>
...tomorrow we will run faster, stretch out our arms farther...
And then one fine morning<span class="ni">&amp;mdash;</span> So we beat on, boats against the
current, borne back ceaselessly into the past.
</code></pre></div>
    </div>
  </div>
</section>

  <section id="animated">
  <h2 class="page-header">
    Animated Icons
    <div class="pull-right text-default h6 margin-top padding-top-sm hidden-xs">
      <a href="https://github.com/FortAwesome/Font-Awesome/blob/v4.7.0/less/animated.less" class="text-muted padding-right">View LESS</a>
      <a href="https://github.com/FortAwesome/Font-Awesome/blob/v4.7.0/scss/_animated.scss" class="text-muted">View SASS</a>
    </div>
  </h2>
  <div class="row">
    <div class="col-md-3 col-sm-4">
      <p>
        <i class="fa fa-spinner fa-spin fa-3x fa-fw margin-bottom"></i>
        <span class="sr-only">Loading example (with fa-spinner icon)</span>

        <i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw margin-bottom"></i>
        <span class="sr-only">Loading (with fa-circle-o-notch icon)</span>

        <i class="fa fa-refresh fa-spin fa-3x fa-fw margin-bottom"></i>
        <span class="sr-only">Loading example (with fa-refresh icon)</span>

        <i class="fa fa-cog fa-spin fa-3x fa-fw margin-bottom"></i>
        <span class="sr-only">Loading example (with fa-cog icon)</span>

        <i class="fa fa-spinner fa-pulse fa-3x fa-fw margin-bottom"></i>
        <span class="sr-only">Loading example (with fa-spinner icon)</span>
      </p>
    </div>
    <div class="col-md-9 col-sm-8">
      <p>
        Use the <code>fa-spin</code> class to get any icon to rotate, and use <code>fa-pulse</code> to have it rotate
        with 8 steps. Works well with <code>fa-spinner</code>, <code>fa-refresh</code>, and <code>fa-cog</code>.
      </p>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa fa-spinner fa-spin fa-3x fa-fw&quot;</span><span class="nt">&gt;&lt;/i&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;sr-only&quot;</span><span class="nt">&gt;</span>Loading...<span class="nt">&lt;/span&gt;</span>

<span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa fa-circle-o-notch fa-spin fa-3x fa-fw&quot;</span><span class="nt">&gt;&lt;/i&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;sr-only&quot;</span><span class="nt">&gt;</span>Loading...<span class="nt">&lt;/span&gt;</span>

<span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa fa-refresh fa-spin fa-3x fa-fw&quot;</span><span class="nt">&gt;&lt;/i&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;sr-only&quot;</span><span class="nt">&gt;</span>Loading...<span class="nt">&lt;/span&gt;</span>

<span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa fa-cog fa-spin fa-3x fa-fw&quot;</span><span class="nt">&gt;&lt;/i&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;sr-only&quot;</span><span class="nt">&gt;</span>Loading...<span class="nt">&lt;/span&gt;</span>

<span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa fa-spinner fa-pulse fa-3x fa-fw&quot;</span><span class="nt">&gt;&lt;/i&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;sr-only&quot;</span><span class="nt">&gt;</span>Loading...<span class="nt">&lt;/span&gt;</span>
</code></pre></div>
      <p class="alert alert-success">
        <i class="fa fa-exclamation-triangle fa-lg" aria-hidden="true"></i><strong class="sr-only">Note:</strong>
        Some browsers on some platforms have issues with animated icons resulting in a jittery wobbling effect. See
        <a href="https://github.com/FortAwesome/Font-Awesome/issues/671" class="alert-link" target="_blank">issue #671</a>
        for examples and possible workarounds.
      </p>
      <p class="alert alert-success">
        <i class="fa fa-info-circle fa-lg" aria-hidden="true"></i><strong class="sr-only">Note:</strong> CSS3 animations aren't supported in IE8 - IE9.
      </p>
    </div>
  </div>
</section>

  <section id="rotated-flipped">
  <h2 class="page-header">
    Rotated &amp; Flipped
    <div class="pull-right text-default h6 margin-top padding-top-sm hidden-xs">
      <a href="https://github.com/FortAwesome/Font-Awesome/blob/v4.7.0/less/rotated-flipped.less" class="text-muted padding-right">View LESS</a>
      <a href="https://github.com/FortAwesome/Font-Awesome/blob/v4.7.0/scss/_rotated-flipped.scss" class="text-muted">View SASS</a>
    </div>
  </h2>
  <div class="row">
    <div class="col-md-3 col-sm-4">
      <p style="font-size: 18px;">
        <i class="fa fa-shield" aria-hidden="true"></i>&nbsp; normal<br>
        <i class="fa fa-shield fa-rotate-90" aria-hidden="true"></i>&nbsp; fa-rotate-90<br>
        <i class="fa fa-shield fa-rotate-180" aria-hidden="true"></i>&nbsp; fa-rotate-180<br>
        <i class="fa fa-shield fa-rotate-270" aria-hidden="true"></i>&nbsp; fa-rotate-270<br>
        <i class="fa fa-shield fa-flip-horizontal" aria-hidden="true"></i>&nbsp; fa-flip-horizontal<br>
        <i class="fa fa-shield fa-flip-vertical" aria-hidden="true"></i>&nbsp; fa-flip-vertical
      </p>
    </div>
    <div class="col-md-9 col-sm-8">
      <p>
        To arbitrarily rotate and flip icons, use the <code>fa-rotate-*</code> and <code>fa-flip-*</code> classes.
      </p>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa fa-shield&quot;</span><span class="nt">&gt;&lt;/i&gt;</span> normal<span class="nt">&lt;br&gt;</span>
<span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa fa-shield fa-rotate-90&quot;</span><span class="nt">&gt;&lt;/i&gt;</span> fa-rotate-90<span class="nt">&lt;br&gt;</span>
<span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa fa-shield fa-rotate-180&quot;</span><span class="nt">&gt;&lt;/i&gt;</span> fa-rotate-180<span class="nt">&lt;br&gt;</span>
<span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa fa-shield fa-rotate-270&quot;</span><span class="nt">&gt;&lt;/i&gt;</span> fa-rotate-270<span class="nt">&lt;br&gt;</span>
<span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa fa-shield fa-flip-horizontal&quot;</span><span class="nt">&gt;&lt;/i&gt;</span> fa-flip-horizontal<span class="nt">&lt;br&gt;</span>
<span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa fa-shield fa-flip-vertical&quot;</span><span class="nt">&gt;&lt;/i&gt;</span> fa-flip-vertical
</code></pre></div>
    </div>
  </div>
</section>

  <section id="stacked">
  <h2 class="page-header">
    Stacked Icons
    <div class="pull-right text-default h6 margin-top padding-top-sm hidden-xs">
      <a href="https://github.com/FortAwesome/Font-Awesome/blob/v4.7.0/less/stacked.less" class="text-muted padding-right">View LESS</a>
      <a href="https://github.com/FortAwesome/Font-Awesome/blob/v4.7.0/scss/_stacked.scss" class="text-muted">View SASS</a>
    </div>
  </h2>
  <div class="row">
    <div class="col-md-3 col-sm-4">
      <div class="margin-bottom">
        <span class="fa-stack fa-lg" aria-hidden="true">
          <i class="fa fa-square-o fa-stack-2x"></i>
          <i class="fa fa-twitter fa-stack-1x"></i>
        </span>
        fa-twitter on fa-square-o<br>
        <span class="fa-stack fa-lg" aria-hidden="true">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-flag fa-stack-1x fa-inverse"></i>
        </span>
        fa-flag on fa-circle<br>
        <span class="fa-stack fa-lg" aria-hidden="true">
          <i class="fa fa-square fa-stack-2x"></i>
          <i class="fa fa-terminal fa-stack-1x fa-inverse"></i>
        </span>
        fa-terminal on fa-square<br>
        <span class="fa-stack fa-lg" aria-hidden="true">
          <i class="fa fa-camera fa-stack-1x"></i>
          <i class="fa fa-ban fa-stack-2x text-danger"></i>
        </span>
        fa-ban on fa-camera
      </div>
    </div>
    <div class="col-md-9 col-sm-8">
      <p>
        To stack multiple icons, use the <code>fa-stack</code> class on the parent, the <code>fa-stack-1x</code>
        for the regularly sized icon, and <code>fa-stack-2x</code> for the larger icon. <code>fa-inverse</code>
        can be used as an alternative icon color. You can even throw <a href="#larger">larger icon</a> classes on the parent
        to get further control of sizing.
      </p>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;fa-stack fa-lg&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa fa-square-o fa-stack-2x&quot;</span><span class="nt">&gt;&lt;/i&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa fa-twitter fa-stack-1x&quot;</span><span class="nt">&gt;&lt;/i&gt;</span>
<span class="nt">&lt;/span&gt;</span>
fa-twitter on fa-square-o<span class="nt">&lt;br&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;fa-stack fa-lg&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa fa-circle fa-stack-2x&quot;</span><span class="nt">&gt;&lt;/i&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa fa-flag fa-stack-1x fa-inverse&quot;</span><span class="nt">&gt;&lt;/i&gt;</span>
<span class="nt">&lt;/span&gt;</span>
fa-flag on fa-circle<span class="nt">&lt;br&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;fa-stack fa-lg&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa fa-square fa-stack-2x&quot;</span><span class="nt">&gt;&lt;/i&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa fa-terminal fa-stack-1x fa-inverse&quot;</span><span class="nt">&gt;&lt;/i&gt;</span>
<span class="nt">&lt;/span&gt;</span>
fa-terminal on fa-square<span class="nt">&lt;br&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;fa-stack fa-lg&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa fa-camera fa-stack-1x&quot;</span><span class="nt">&gt;&lt;/i&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa fa-ban fa-stack-2x text-danger&quot;</span><span class="nt">&gt;&lt;/i&gt;</span>
<span class="nt">&lt;/span&gt;</span>
fa-ban on fa-camera
</code></pre></div>
    </div>
  </div>
</section>

  <section id="bootstrap">
  <h2 class="page-header">Bootstrap 3 Examples</h2>
  <div class="row">
    <div class="col-md-3 col-sm-4">
      <p>
        <a class="btn btn-danger" href="#">
          <i class="fa fa-trash-o fa-lg"></i> Delete</a>
        <a class="btn btn-default btn-sm" href="#">
          <i class="fa fa-cog"></i> Settings</a>
      </p>
      <p>
        <a class="btn btn-lg btn-success" href="#">
          <i class="fa fa-flag fa-2x pull-left"></i> Font Awesome<br>Version 4.7.0</a>
      </p>
      <div class="margin-bottom">
        <div class="btn-group">
          <a class="btn btn-default" href="#">
            <i class="fa fa-align-left" title="Align Left"></i>
          </a>
          <a class="btn btn-default" href="#">
            <i class="fa fa-align-center" title="Align Center"></i>
          </a>
          <a class="btn btn-default" href="#">
            <i class="fa fa-align-right" title="Align Right"></i>
          </a>
          <a class="btn btn-default" href="#">
            <i class="fa fa-align-justify" title="Align Justify"></i>
          </a>
        </div>
      </div>
      <div class="margin-bottom">
        <div class="input-group margin-bottom-sm">
          <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
          <input class="form-control" type="text" placeholder="Email address">
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
          <input class="form-control" type="password" placeholder="Password">
        </div>
      </div>
      <div class="margin-bottom">
        <div class="btn-group open">
          <a class="btn btn-primary" href="#"><i class="fa fa-user fa-fw"></i> User</a>
          <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
            <span class="fa fa-caret-down" title="Toggle dropdown menu"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="#"><i class="fa fa-pencil fa-fw"></i> Edit</a></li>
            <li><a href="#"><i class="fa fa-trash-o fa-fw"></i> Delete</a></li>
            <li><a href="#"><i class="fa fa-ban fa-fw"></i> Ban</a></li>
            <li class="divider"></li>
            <li><a href="#"><i class="fa fa-unlock"></i> Make admin</a></li>
          </ul>
        </div>
      </div>

    </div>
    <div class="col-md-9 col-sm-8">
      <p>
        Font Awesome works great with the full range of Bootstrap components.
      </p>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">&quot;btn btn-danger&quot;</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa fa-trash-o fa-lg&quot;</span><span class="nt">&gt;&lt;/i&gt;</span> Delete<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">&quot;btn btn-default btn-sm&quot;</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa fa-cog&quot;</span><span class="nt">&gt;&lt;/i&gt;</span> Settings<span class="nt">&lt;/a&gt;</span>

<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">&quot;btn btn-lg btn-success&quot;</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa fa-flag fa-2x pull-left&quot;</span><span class="nt">&gt;&lt;/i&gt;</span> Font Awesome<span class="nt">&lt;br&gt;</span>Version 4.7.0<span class="nt">&lt;/a&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;btn-group&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">&quot;btn btn-default&quot;</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa fa-align-left&quot;</span> <span class="na">title=</span><span class="s">&quot;Align Left&quot;</span><span class="nt">&gt;&lt;/i&gt;</span>
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">&quot;btn btn-default&quot;</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa fa-align-center&quot;</span> <span class="na">title=</span><span class="s">&quot;Align Center&quot;</span><span class="nt">&gt;&lt;/i&gt;</span>
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">&quot;btn btn-default&quot;</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa fa-align-right&quot;</span> <span class="na">title=</span><span class="s">&quot;Align Right&quot;</span><span class="nt">&gt;&lt;/i&gt;</span>
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">&quot;btn btn-default&quot;</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa fa-align-justify&quot;</span> <span class="na">title=</span><span class="s">&quot;Align Justify&quot;</span><span class="nt">&gt;&lt;/i&gt;</span>
  <span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;input-group margin-bottom-sm&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;input-group-addon&quot;</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa fa-envelope-o fa-fw&quot;</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">&quot;form-control&quot;</span> <span class="na">type=</span><span class="s">&quot;text&quot;</span> <span class="na">placeholder=</span><span class="s">&quot;Email address&quot;</span><span class="nt">&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;input-group&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;input-group-addon&quot;</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa fa-key fa-fw&quot;</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">&quot;form-control&quot;</span> <span class="na">type=</span><span class="s">&quot;password&quot;</span> <span class="na">placeholder=</span><span class="s">&quot;Password&quot;</span><span class="nt">&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;btn-group open&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">&quot;btn btn-primary&quot;</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa fa-user fa-fw&quot;</span><span class="nt">&gt;&lt;/i&gt;</span> User<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">&quot;btn btn-primary dropdown-toggle&quot;</span> <span class="na">data-toggle=</span><span class="s">&quot;dropdown&quot;</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;fa fa-caret-down&quot;</span> <span class="na">title=</span><span class="s">&quot;Toggle dropdown menu&quot;</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">&quot;dropdown-menu&quot;</span><span class="nt">&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa fa-pencil fa-fw&quot;</span><span class="nt">&gt;&lt;/i&gt;</span> Edit<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa fa-trash-o fa-fw&quot;</span><span class="nt">&gt;&lt;/i&gt;</span> Delete<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa fa-ban fa-fw&quot;</span><span class="nt">&gt;&lt;/i&gt;</span> Ban<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">&quot;divider&quot;</span><span class="nt">&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa fa-unlock&quot;</span><span class="nt">&gt;&lt;/i&gt;</span> Make admin<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>
    </div>
  </div>
</section>

  <section id="custom">
  <h2 class="page-header">Custom CSS</h2>
  <div class="row">
    <div class="col-md-3 col-sm-4">
      <p>Anything you can do with CSS font styles, you can do with Font Awesome.</p>
    </div>
    <div class="col-md-9 col-sm-8">
      <p>Star Ratings (inspired by <a href="http://css-tricks.com/star-ratings/" target="_blank">CSS Tricks</a>)</p>
      <div class="well">
        <span class="rating">
          <span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span>
        </span>
      </div>
    </div>
  </div>
</section>

  <section id="accessible">
  <h2 class="page-header">
    Accessibility-Minded
  </h2>
  <div class="row">
    <div class="col-md-3 col-sm-4">
      <p>
        <a class="btn btn-default" href="path/to/settings" aria-label="Settings">
          <i class="fa fa-cog" aria-hidden="true"></i>
        </a>

        <a class="btn btn-danger" href="path/to/settings" aria-label="Delete">
          <i class="fa fa-trash-o" aria-hidden="true"></i>
        </a>

        <a class="btn btn-primary" href="#navigation-main" aria-label="Skip to main navigation">
          <i class="fa fa-bars" aria-hidden="true"></i>
        </a>
      </p>

      <p>
        <i class="fa fa-refresh fa-spin fa-3x fa-fw" aria-hidden="true"></i>
        <span class="sr-only">Refreshing...</span>

        <i class="fa fa-cog fa-spin fa-3x fa-fw" aria-hidden="true"></i>
        <span class="sr-only">Saving. Hang tight!</span>
      </p>

      <p>
        <div class="input-group margin-bottom-sm">
          <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw" aria-hidden="true"></i></span>
          <input class="form-control" type="text" placeholder="Email address">
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-key fa-fw" aria-hidden="true"></i></span>
          <input class="form-control" type="password" placeholder="Password">
        </div>
      </p>

      <p>
        <a href="path/to/shopping/cart" class="btn btn-primary" aria-label="View 3 items in your shopping cart">
          <i class="fa fa-shopping-cart" aria-hidden="true"></i>
        </a>
      </p>

      <p>
        <i class="fa fa-battery-half" aria-hidden="true"></i>
        <span class="sr-only">Battery level: 50%</span>
      </p>
    </div>
    <div class="col-md-9 col-sm-8">
      <p>
        With <a href="../accessibility/">our thoughts on icon accessibility</a> in mind, If an icon only adds some extra decoration or branding, it does not need to be announced to users as they are navigating your site or app aurally. Alternatively, if an icon conveys meaning in your content or interface, ensure that this meaning is also conveyed to assistive technologies through alternative displays or text.
      </p>

<div class="highlight"><pre><code class="html"><span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">&quot;btn btn-default&quot;</span> <span class="na">href=</span><span class="s">&quot;path/to/settings&quot;</span> <span class="na">aria-label=</span><span class="s">&quot;Settings&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa fa-cog&quot;</span> <span class="na">aria-hidden=</span><span class="s">&quot;true&quot;</span><span class="nt">&gt;&lt;/i&gt;</span>
<span class="nt">&lt;/a&gt;</span>

<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">&quot;btn btn-danger&quot;</span> <span class="na">href=</span><span class="s">&quot;path/to/settings&quot;</span> <span class="na">aria-label=</span><span class="s">&quot;Delete&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa fa-trash-o&quot;</span> <span class="na">aria-hidden=</span><span class="s">&quot;true&quot;</span><span class="nt">&gt;&lt;/i&gt;</span>
<span class="nt">&lt;/a&gt;</span>

<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">&quot;btn btn-primary&quot;</span> <span class="na">href=</span><span class="s">&quot;#navigation-main&quot;</span> <span class="na">aria-label=</span><span class="s">&quot;Skip to main navigation&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa fa-bars&quot;</span> <span class="na">aria-hidden=</span><span class="s">&quot;true&quot;</span><span class="nt">&gt;&lt;/i&gt;</span>
<span class="nt">&lt;/a&gt;</span>
</code></pre></div>

<div class="highlight"><pre><code class="html"><span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa fa-refresh fa-spin fa-3x fa-fw&quot;</span> <span class="na">aria-hidden=</span><span class="s">&quot;true&quot;</span><span class="nt">&gt;&lt;/i&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;sr-only&quot;</span><span class="nt">&gt;</span>Refreshing...<span class="nt">&lt;/span&gt;</span>

<span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa fa-cog fa-spin fa-3x fa-fw&quot;</span> <span class="na">aria-hidden=</span><span class="s">&quot;true&quot;</span><span class="nt">&gt;&lt;/i&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;sr-only&quot;</span><span class="nt">&gt;</span>Saving. Hang tight!<span class="nt">&lt;/span&gt;</span>
</code></pre></div>

<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;input-group margin-bottom-sm&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;input-group-addon&quot;</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa fa-envelope-o fa-fw&quot;</span> <span class="na">aria-hidden=</span><span class="s">&quot;true&quot;</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">&quot;form-control&quot;</span> <span class="na">type=</span><span class="s">&quot;text&quot;</span> <span class="na">placeholder=</span><span class="s">&quot;Email address&quot;</span><span class="nt">&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;input-group&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;input-group-addon&quot;</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa fa-key fa-fw&quot;</span> <span class="na">aria-hidden=</span><span class="s">&quot;true&quot;</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">&quot;form-control&quot;</span> <span class="na">type=</span><span class="s">&quot;password&quot;</span> <span class="na">placeholder=</span><span class="s">&quot;Password&quot;</span><span class="nt">&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>

<div class="highlight"><pre><code class="html"><span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">&quot;path/to/shopping/cart&quot;</span> <span class="na">class=</span><span class="s">&quot;btn btn-primary&quot;</span> <span class="na">aria-label=</span><span class="s">&quot;View 3 items in your shopping cart&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa fa-shopping-cart&quot;</span> <span class="na">aria-hidden=</span><span class="s">&quot;true&quot;</span><span class="nt">&gt;&lt;/i&gt;</span>
<span class="nt">&lt;/a&gt;</span>
</code></pre></div>

<div class="highlight"><pre><code class="html"><span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;fa fa-battery-half&quot;</span> <span class="na">aria-hidden=</span><span class="s">&quot;true&quot;</span><span class="nt">&gt;&lt;/i&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;sr-only&quot;</span><span class="nt">&gt;</span>Battery level: 50%<span class="nt">&lt;/span&gt;</span>
</code></pre></div>
    </div>
  </div>
</section>

</div>

  </div>
  <footer id="footer" class="footer hidden-print">
  <div class="container text-center">
    <div>
      <i class="fa fa-flag" aria-hidden="true"></i> Font Awesome 4.7.0
      <span class="hide-xs">&middot;</span><br class="hide-sm hide-md hide-lg">
      Created by <a href="https://fontawesome.com">Font Awesome</a>
    </div>
    <div>
      Font Awesome licensed under <a href="http://scripts.sil.org/OFL">SIL OFL 1.1</a>
      <span class="hide-xs">&middot;</span><br class="hide-sm hide-md hide-lg">
      Code licensed under <a href="http://opensource.org/licenses/mit-license.html">MIT License</a>
      <span class="hide-xs hide-sm">&middot;</span><br class="hide-md hide-lg">
      Documentation licensed under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>
    </div>
    <div>
      Thanks to <a href="http://tracking.maxcdn.com/c/148092/3982/378/"><i class="fa fa-maxcdn"></i> MaxCDN</a> for providing the excellent <a href="https://www.bootstrapcdn.com/fontawesome/">BootstrapCDN for Font Awesome</a>
    </div>
    <div class="project">
      <a href="https://github.com/FortAwesome/Font-Awesome">GitHub Project</a> &middot;
      <a href="https://github.com/FortAwesome/Font-Awesome/issues">Issues</a> &middot;
      <a href="/v3.2.1">Old 3.2.1 Docs</a>
    </div>
  </div>
</footer>

  <div class="modal" id="modal-fa5" tabindex="-1" role="dialog" aria-labelledby="modal-fa5-label">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-fa5">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i><span class="close"></span></button>
        <h3 class="modal-title" id="modal-fa5-label">Font Awesome 5 Released!</h3>
      </div>
      <div class="modal-body">
        <div class="row margin-bottom-lg margin-top">
          <div class="col-md-2 col-sm-2 col-xs-2 text-right padding-right-sm">
            <i class="fas fas-trophy-alt fas-3x fas-fw text-muted hidden-xs"></i>
            <i class="fas fas-trophy-alt fas-2x fas-fw text-muted hidden-sm hidden-md hidden-lg"></i>
          </div>
          <div class="col-md-9 col-sm-9 col-xs-9">
            <h4 class="page-header margin-top-none padding-bottom-sm margin-bottom-sm">More Icons</h4>
            <p>
              Get 893 icons right now with FA Free, plus another 1,283 icons with Pro, which also gets you another 46 icon category packs as we finish them!
            </p>
          </div>
        </div>
        <div class="row margin-bottom-lg">
          <div class="col-md-2 col-sm-2 col-xs-2 text-right padding-right-sm">
            <i class="fas fas-flask fas-3x fas-fw text-muted hidden-xs"></i>
            <i class="fas fas-flask fas-2x fas-fw text-muted hidden-sm hidden-md hidden-lg"></i>
          </div>
          <div class="col-md-9 col-sm-9 col-xs-9">
            <h4 class="page-header margin-top-none padding-bottom-sm margin-bottom-sm">All-New SVG</h4>
            <p>
              Our all-new SVG with JavaScript gives you all the power of SVG without the usual hassle.
            </p>
          </div>
        </div>
        <div class="row margin-bottom-lg">
          <div class="col-md-2 col-sm-2 col-xs-2 text-right padding-right-sm">
            <i class="fas fas-rocket fas-3x fas-fw text-muted hidden-xs"></i>
            <i class="fas fas-rocket fas-2x fas-fw text-muted hidden-sm hidden-md hidden-lg"></i>
          </div>
          <div class="col-md-9 col-sm-9 col-xs-10">
            <h4 class="page-header margin-top-none padding-bottom-sm margin-bottom-sm">Tons More</h4>
            <p>
              Ligatures for easier desktop use, shim for quick upgrades from 4, and more styles, icons, and tools with FA Pro.
            </p>
          </div>
        </div>

        <a target="_blank" href="https://fontawesome.com/?utm_source=font_awesome_homepage&utm_medium=display&utm_campaign=fa5_released&utm_content=auto_modal" class="btn btn-fa5 btn-lg btn-block">
          <h3 class="margin-top margin-bottom strong">
            Font Awesome 5 &nbsp;<i class="fas fas-external-link" aria-hidden="true"></i>
          </h3>
        </a>

      </div>
    </div>
<?php
echo $OUTPUT->container_end();
echo $OUTPUT->box_end();
echo $OUTPUT->footer();

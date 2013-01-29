<?php defined('_JEXEC') or die;

/**
 * File       video.php
 * Created    1/17/13 11:49 AM
 * Author     Matt Thomas
 * Website    http://betweenbrain.com
 * Email      matt@betweenbrain.com
 * Support    https://github.com/betweenbrain/
 * Copyright  Copyright (C) 2013 betweenbrain llc. All Rights Reserved.
 * License    GNU GPL v3 or later
 */

$doc->addStyleSheet($template . '/css/video.css', 'text/css', 'screen');

// Load common header
if (JFile::exists($header)) {
	include $header;
}

?>
<h1>Video Layout</h1>
<?php if ($this->countModules('nav')) : ?>
<nav id="nav" class="clear clearfix">
	<jdoc:include type="modules" name="nav" style="raw" />
</nav>
<?php endif ?>

<?php if ($this->getBuffer('message')) : ?>
<jdoc:include type="message" />
<?php endif ?>

<jdoc:include type="component" />

<div id="content-below" class="clearfix <?php echo $contentBelowClass ?>">
	<?php if ($this->countModules('content-below-1')) : ?>
	<div class="content-below-1">
		<jdoc:include type="modules" name="content-below-1" style="xhtml" module-class="gutter" />
	</div>
	<?php endif ?>

	<?php if ($this->countModules('content-below-2')) : ?>
	<div class="content-below-2">
		<jdoc:include type="modules" name="content-below-2" style="xhtml" module-class="gutter" />
	</div>
	<?php endif ?>

	<?php if ($this->countModules('content-below-3')) : ?>
	<div class="content-below-3">
		<jdoc:include type="modules" name="content-below-3" style="xhtml" module-class="gutter" />
	</div>
	<?php endif ?>

	<?php if ($this->countModules('content-below-4')) : ?>
	<div class="content-below-4">
		<jdoc:include type="modules" name="content-below-4" style="xhtml" module-class="gutter" />
	</div>
	<?php endif ?>

	<?php if ($this->countModules('content-below-5')) : ?>
	<div class="content-below-5">
		<jdoc:include type="modules" name="content-below-5" style="xhtml" module-class="gutter" />
	</div>
	<?php endif ?>

	<?php if ($this->countModules('content-below-6')) : ?>
	<div class="content-below-6">
		<jdoc:include type="modules" name="content-below-6" style="xhtml" module-class="gutter" />
	</div>
	<?php endif ?>
</div>

<?php
// Load common footer
if (JFile::exists($footer)) {
	include $footer;
}
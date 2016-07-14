<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_tags
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;
$published = $this->state->get('filter.published');
?>

<div class="row-fluid">
	<div class="control-group span6">
		<div class="controls">
			<?php echo JLayoutHelper::render('joomla.html.batch.language', array()); ?>
		</div>
	</div>
	<div class="control-group span6">
		<div class="controls">
			<?php echo JLayoutHelper::render('joomla.html.batch.access', array()); ?>
		</div>
	</div>
</div>
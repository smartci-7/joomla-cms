<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_contact
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$published = $this->state->get('filter.published');
?>
<div class="modal hide fade" id="collapseModal">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&#215;</button>
		<h3><?php echo JText::_('COM_CONTACT_BATCH_OPTIONS'); ?></h3>
	</div>
	<div class="modal-body modal-batch">
		<p><?php echo JText::_('COM_CONTACT_BATCH_TIP'); ?></p>
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
		<div class="row-fluid">
		<?php if ($published >= 0) : ?>
			<div class="control-group span6">
				<div class="controls">
					<?php echo JLayoutHelper::render('joomla.html.batch.item', array('extension' => 'com_contact')); ?>
				</div>
			</div>
		<?php endif; ?>
		<div class="control-group span6">
			<div class="controls">
				<?php echo JLayoutHelper::render('joomla.html.batch.tag', array()); ?>
			</div>
		</div>
		<div class="row-fluid">
			<div class="control-group">
				<div class="controls">
					<?php echo JLayoutHelper::render('joomla.html.batch.tag', array()); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="modal-footer">
		<button class="btn" type="button" onclick="document.getElementById('batch-category-id').value='';document.getElementById('batch-access').value='';document.getElementById('batch-language-id').value='';document.getElementById('batch-user-id').value='';document.getElementById('batch-tag-id').value=''" data-dismiss="modal">
			<?php echo JText::_('JCANCEL'); ?>
		</button>
		<button class="btn btn-primary" type="submit" onclick="Joomla.submitbutton('contact.batch');">
			<?php echo JText::_('JGLOBAL_BATCH_PROCESS'); ?>
		</button>
	</div>
</div>

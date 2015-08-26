<?php defined('_JEXEC') or die('Restricted access'); ?>

				<div class="control-group">
					<div class="control-label">
						##codestart## echo $this->form->getLabel('<?php echo $this->field->get('key') ?>'); ##codeend##
					</div>
<?php if ($this->field->get('formfield', 'text') =='editor'): ?>
				##codestart##  ##codeend##
				<div class="clr"></div>
				##codestart##  ##codeend##
<?php endif; ?>
					<div class="controls">
						##codestart## echo $this->form->getInput('<?php echo $this->field->get('key') ?>');  ##codeend##
					</div>
				</div>

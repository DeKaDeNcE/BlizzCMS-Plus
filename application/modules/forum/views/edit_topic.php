<section class="uk-section uk-section-xsmall uk-padding-remove slider-section">
	<div class="uk-background-cover uk-height-small header-section"></div>
</section>
<section class="uk-section uk-section-xsmall main-section" data-uk-height-viewport="expand: true">
	<div class="uk-container">
		<div class="uk-card-default myaccount-card uk-margin-small">
			<div class="uk-card-header">
				<div class="uk-grid uk-grid-small">
					<div class="uk-width-expand@m">
						<h4 class="uk-h4 uk-text-bold"><i class="fas fa-pen-square"></i> <?= $this->lang->line('button_edit_topic'); ?></h4>
					</div>
					<div class="uk-width-auto@m">
						<a href="<?= base_url('forum'); ?>" class="uk-button uk-button-default uk-button-small"><i class="fas fa-arrow-circle-left"></i></a>
					</div>
				</div>
			</div>
			<div class="uk-card-body">
				<?= form_open('', 'id="editopicForm" onsubmit="EditTopicForm(event)"'); ?>
				<div class="uk-modal-body">
					<div class="uk-margin uk-light">
						<label class="uk-form-label"><?= $this->lang->line('placeholder_title'); ?></label>
						<div class="uk-form-controls">
							<div class="uk-inline uk-width-1-1">
								<span class="uk-form-icon uk-form-icon-flip"><i class="fas fa-pen fa-lg"></i></span>
								<input class="uk-input" name="edit_title" value="<?= $this->forum_model->getTopicTitle($idlink); ?>" type="text" placeholder="<?= $this->forum_model->getTopicTitle($idlink); ?>" required>
							</div>
						</div>
					</div>
					<div class="uk-margin uk-light">
						<label class="uk-form-label"><?= $this->lang->line('placeholder_description'); ?></label>
						<div class="uk-form-controls">
							<div class="uk-width-1-1">
								<textarea class="uk-textarea tinyeditor" name="edit_description" rows="10" cols="80"><?= $this->forum_model->getTopicDescription($idlink); ?></textarea>
							</div>
						</div>
					</div>
					<?php if(is_authorized('mod')): ?>
						<div class="uk-margin">
							<div class="uk-form-controls">
								<div class="uk-grid uk-grid-small uk-child-width-auto uk-flex uk-flex-center" data-uk-grid>
									<label><input class="uk-checkbox" type="checkbox" name="topic_pinned" <?php if($this->forum_model->getTopicPinned($idlink) == '1') echo 'checked'; ?>> <?= $this->lang->line('placeholder_highl'); ?></label>
									<label><input class="uk-checkbox" type="checkbox" name="topic_locked" <?php if($this->forum_model->getTopicLocked($idlink) == '1') echo 'checked'; ?>> <?= $this->lang->line('placeholder_lock'); ?></label>
								</div>
							</div>
						</div>
					<?php endif; ?>
				<div class="uk-margin">
					<button class="uk-button uk-button-default uk-width-1-1" type="submit" id="button_topic"><i class="fas fa-plus-circle"></i> <?= $this->lang->line('button_edit'); ?></button>
				</div>
				<?= form_close(); ?>
			</div>
		</div>
	</div>
</section>
<?= $tiny ?>

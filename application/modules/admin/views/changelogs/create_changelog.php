<section class="uk-section uk-section-xsmall" data-uk-height-viewport="expand: true">
	<div class="uk-container">
		<div class="uk-grid uk-grid-small uk-margin-small" data-uk-grid>
			<div class="uk-width-expand uk-heading-line">
				<h3 class="uk-h3"><i
						class="fas fa-plus-circle"></i> <?= $this->lang->line('placeholder_create_changelog'); ?></h3>
			</div>
			<div class="uk-width-auto">
				<a href="<?= base_url('admin/changelogs'); ?>" class="uk-icon-button"><i
						class="fas fa-arrow-circle-left"></i></a>
			</div>
		</div>
		<div class="uk-card uk-card-default">
			<div class="uk-card-body">
				<?= form_open('', 'id="addchangelogForm" onsubmit="AddChangelogForm(event)"'); ?>
				<div class="uk-margin-small">
					<label class="uk-form-label"><?= $this->lang->line('placeholder_title'); ?></label>
					<div class="uk-form-controls">
						<div class="uk-inline uk-width-1-1">
							<span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: pencil"></span>
							<input class="uk-input" type="text" id="changelog_title"
								   placeholder="<?= $this->lang->line('placeholder_title'); ?>" required>
						</div>
					</div>
				</div>
				<div class="uk-margin-small">
					<label class="uk-form-label"><?= $this->lang->line('placeholder_description'); ?></label>
					<div class="uk-form-controls">
						<textarea class="uk-textarea tinyeditor" id="changelog_description" rows="12"></textarea>
					</div>
				</div>
				<div class="uk-margin-small">
					<button class="uk-button uk-button-primary uk-width-1-1" type="submit" id="button_changelog"><i
							class="fas fa-check-circle"></i> <?= $this->lang->line('button_create'); ?></button>
				</div>
				<?= form_close(); ?>
			</div>
		</div>
	</div>
</section>
<?= $tiny ?>
<script>
	function AddChangelogForm(e) {
		e.preventDefault();

		var title = $.trim($('#changelog_title').val());
		var description = tinymce.get('changelog_description').getContent();
		if (title == '') {
			$.amaran({
				'theme': 'awesome error',
				'content': {
					title: '<?= $this->lang->line('notification_title_error'); ?>',
					message: '<?= $this->lang->line('notification_title_empty'); ?>',
					info: '',
					icon: 'fas fa-times-circle'
				},
				'delay': 5000,
				'position': 'top right',
				'inEffect': 'slideRight',
				'outEffect': 'slideRight'
			});
			return false;
		}
		$.ajax({
			url: "<?= base_url($lang . '/admin/changelogs/add'); ?>",
			method: "POST",
			data: {title, description},
			dataType: "text",
			beforeSend: function () {
				$.amaran({
					'theme': 'awesome info',
					'content': {
						title: '<?= $this->lang->line('notification_title_info'); ?>',
						message: '<?= $this->lang->line('notification_checking'); ?>',
						info: '',
						icon: 'fas fa-sign-in-alt'
					},
					'delay': 5000,
					'position': 'top right',
					'inEffect': 'slideRight',
					'outEffect': 'slideRight'
				});
			},
			success: function (response) {
				if (!response)
					alert(response);

				if (response) {
					$.amaran({
						'theme': 'awesome ok',
						'content': {
							title: '<?= $this->lang->line('notification_title_success'); ?>',
							message: '<?= $this->lang->line('notification_changelog_created'); ?>',
							info: '',
							icon: 'fas fa-check-circle'
						},
						'delay': 5000,
						'position': 'top right',
						'inEffect': 'slideRight',
						'outEffect': 'slideRight'
					});
				}
				$('#addchangelogForm')[0].reset();
			}
		});
	}
</script>

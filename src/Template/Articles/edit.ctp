<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Modifier un article</h1>
</div>
<?php
	echo $this->Form->create($article);
	echo $this->Form->control('user_id', ['type' => 'hidden']);
?>
<div class="form-group">
	<?php
		echo $this->Form->control('title', [
			'label' => 'Titre',
			'class' => "form-control",
		]);
	?>
</div>
<div class="form-group">
	<?php
		echo $this->Form->control('body', ['rows' => '3', 'label' => 'Contenu', 'class' => "form-control",]);
	?>
</div>
<div class="form-group">
	<?php
		echo $this->Form->button(__('Sauvegarder l\'article'), ['label' => 'Sauvegarder',
			'class' => "btn btn-primary"]);
	?>
</div>
<?php
	echo $this->Form->end();
?>

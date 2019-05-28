<h1>Créer un nouvel article</h1>

<?php
	echo $this->Form->create($article);
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





<div class="card shadow mb-12">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary"><?= h($article->title) ?></h6>
      <div class="dropdown no-arrow">
        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Gérer
        </a>
        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-158px, 19px, 0px);">
          <div class="dropdown-header">Actions</div>
          <?= $this->Html->link('Modifier ', ['action' => 'edit', $article->slug], ['class' => "dropdown-item"]) ?>
  		  <?= $this->Form->postLink('Supprimer', ['action' => 'delete', $article->slug], ['confirm' => 'Êtes-vous sûr ?', 'class' => "dropdown-item"]) ?>
        </div>
      </div>
    </div>
    <!-- Card Body -->
    <div class="card-body">
    	<p><?= h($article->body) ?></p>
		<p><small>Crée le : <?= $article->created->format(DATE_RFC850) ?></small></p>
    </div>
</div>
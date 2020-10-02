<!-- src/Template/Articles/add.cpt -->

<h1>Ajouter un article</h1>
<?= $this->Form->create($article) ?>
<?= $this->Form->control('title') ?>
<?= $this->Form->control('body', ['rows' => '3']) ?>
<?= $this->Form->control('tags._ids', ['options' => $tags]) ?>
<?= $this->Form->button(__('Sauvegarder l\'article')) ?>
<?= $this->Form->end() ?>
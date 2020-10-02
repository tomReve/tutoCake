<!-- src/Template/Articles/edit.ctp -->

<h1>Modifier un article</h1>
<?= $this->Form->create($article) ?>
<?= $this->Form->control('user_id', ['type'=>'hidden']) ?>
<?= $this->Form->control('title') ?>
<?= $this->Form->control('body', ['rows' => 3]) ?>
<?= $this->Form->control('tags._ids', ['options' => $tags]) ?>
<?= $this->Form->button(__('Sauvegarder l\'article')) ?>
<?= $this->Form->end() ?>
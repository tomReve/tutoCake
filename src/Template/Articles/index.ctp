<!-- Fichier : src/Template/Articles/index.ctp -->

<h1>Articles</h1>
<?= $this->Html->link('Ajouter un article', ['action' => 'add']) ?>
<table>
    <tr>
        <th>Titre</th>
        <th>Créé le</th>
        <th>Actions</th>
    </tr>

    <?php foreach($articles as $article): ?>
    <tr>
        <td>
            <?= $this->Html->link($article->title, ['action' => 'view', $article->slug]) ?>
        </td>
        <td>
            <?= $article->created->format(DATE_RFC850) ?>
        </td>
        <td>
            <?= $this->Html->link('Modifier', ['action' => 'edit', $article->slug]) ?>
            <?= $this->Form->postLink('Supprimer', ['action' => 'delete', $article->slug], ['confirm' => 'Êtes-vous sûr ?']) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<h1>
    Articles avec les tags <?= $this->Text->toList(h($tags), 'ou') ?>
</h1>
<section>
    <?php foreach($articles as $article): ?>
        <article>
            <h4>
                <?= $this->Html->link($article->title, ['controller' => 'Articles', 'action' => 'view', $article->slug]) ?>
            </h4>
            <span><?= h($article->created) ?></span>
        </article>
    <?php endforeach; ?>
</section>
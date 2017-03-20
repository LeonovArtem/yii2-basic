<?php if (!empty($posts)): ?>
    <?php foreach ($posts as $post): ?>
        <div class="panel panel-warning">
            <div class="panel-heading">
                <h3 class="panel-title"><a
                        href="<?= \yii\helpers\Url::to(['post/view', 'id' => $post->id]) ?>"><?= $post->title ?></a>
                </h3>
            </div>
            <div class="panel-body"><?= $post->description ?></div>
        </div>
    <? endforeach; ?>
    <div class="text-center">
        <?= \yii\widgets\LinkPager::widget(['pagination' => $pages]) ?>
    </div>
<? endif; ?>


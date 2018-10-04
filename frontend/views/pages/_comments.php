<?php

use yii\helpers\Html;
use yii\widgets\Pjax;

?>
<h4>Список комментариев:</h4>
<?php Pjax::begin(['enablePushState' => false]); ?>
<?php foreach ($comments as $comment) { ?>
    <?= $comment->text; ?><br>
<?php } ?>
<?= Html::beginForm(['comment/add'], 'post', ['data-pjax' => '', 'class' => 'form-inline']); ?>
<?= Html::input('text', 'text', Yii::$app->request->post('string'), ['class' => 'form-control']) ?>
<?= Html::hiddenInput('id', $model->id) ?>
<?= Html::submitButton('Добавить комментарий', ['class' => 'btn btn-lg btn-primary', 'name' => 'hash-button']) ?>
<?= Html::endForm() ?>
<?php Pjax::end(); ?>

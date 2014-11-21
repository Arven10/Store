<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\shop\PhotoModel $model
 */

$this->title = 'Create Photo Model';
$this->params['breadcrumbs'][] = ['label' => 'Photo Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="photo-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

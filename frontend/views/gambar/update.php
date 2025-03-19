<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Gambar $model */

$this->title = 'Update Gambar: ' . $model->inde;
$this->params['breadcrumbs'][] = ['label' => 'Gambars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->inde, 'url' => ['view', 'inde' => $model->inde]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="gambar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

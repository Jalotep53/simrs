<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Jgmlm $model */

$this->title = 'Update Jgmlm: ' . $model->tgl;
$this->params['breadcrumbs'][] = ['label' => 'Jgmlms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tgl, 'url' => ['view', 'tgl' => $model->tgl, 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jgmlm-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

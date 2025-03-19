<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Jurnal $model */

$this->title = 'Update Jurnal: ' . $model->no_jurnal;
$this->params['breadcrumbs'][] = ['label' => 'Jurnals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_jurnal, 'url' => ['view', 'no_jurnal' => $model->no_jurnal]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jurnal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

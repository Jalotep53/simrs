<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Tampreturbeli $model */

$this->title = 'Update Tampreturbeli: ' . $model->no_faktur;
$this->params['breadcrumbs'][] = ['label' => 'Tampreturbelis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_faktur, 'url' => ['view', 'no_faktur' => $model->no_faktur, 'kode_brng' => $model->kode_brng]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tampreturbeli-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

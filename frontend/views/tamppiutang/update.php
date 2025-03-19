<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Tamppiutang $model */

$this->title = 'Update Tamppiutang: ' . $model->kode_brng;
$this->params['breadcrumbs'][] = ['label' => 'Tamppiutangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_brng, 'url' => ['view', 'kode_brng' => $model->kode_brng, 'no_batch' => $model->no_batch, 'no_faktur' => $model->no_faktur]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tamppiutang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

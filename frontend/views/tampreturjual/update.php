<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Tampreturjual $model */

$this->title = 'Update Tampreturjual: ' . $model->nota_jual;
$this->params['breadcrumbs'][] = ['label' => 'Tampreturjuals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nota_jual, 'url' => ['view', 'nota_jual' => $model->nota_jual, 'kode_brng' => $model->kode_brng, 'no_batch' => $model->no_batch, 'no_faktur' => $model->no_faktur]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tampreturjual-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

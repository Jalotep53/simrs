<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Tampreturpiutang $model */

$this->title = 'Update Tampreturpiutang: ' . $model->nota_piutang;
$this->params['breadcrumbs'][] = ['label' => 'Tampreturpiutangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nota_piutang, 'url' => ['view', 'nota_piutang' => $model->nota_piutang, 'kode_brng' => $model->kode_brng, 'no_batch' => $model->no_batch]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tampreturpiutang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

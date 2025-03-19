<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PerkiraanBiayaRanap $model */

$this->title = 'Update Perkiraan Biaya Ranap: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Perkiraan Biaya Ranaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="perkiraan-biaya-ranap-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

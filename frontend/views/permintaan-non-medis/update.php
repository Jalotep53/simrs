<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PermintaanNonMedis $model */

$this->title = 'Update Permintaan Non Medis: ' . $model->no_permintaan;
$this->params['breadcrumbs'][] = ['label' => 'Permintaan Non Medis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_permintaan, 'url' => ['view', 'no_permintaan' => $model->no_permintaan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="permintaan-non-medis-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

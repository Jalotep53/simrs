<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\InacbgKlaimBaru2 $model */

$this->title = 'Update Inacbg Klaim Baru2: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Inacbg Klaim Baru2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="inacbg-klaim-baru2-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

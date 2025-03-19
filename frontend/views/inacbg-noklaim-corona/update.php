<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\InacbgNoklaimCorona $model */

$this->title = 'Update Inacbg Noklaim Corona: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Inacbg Noklaim Coronas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="inacbg-noklaim-corona-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

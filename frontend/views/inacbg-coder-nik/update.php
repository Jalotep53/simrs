<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\InacbgCoderNik $model */

$this->title = 'Update Inacbg Coder Nik: ' . $model->nik;
$this->params['breadcrumbs'][] = ['label' => 'Inacbg Coder Niks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nik, 'url' => ['view', 'nik' => $model->nik]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="inacbg-coder-nik-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

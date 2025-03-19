<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\IpsrsHibah $model */

$this->title = 'Update Ipsrs Hibah: ' . $model->no_hibah;
$this->params['breadcrumbs'][] = ['label' => 'Ipsrs Hibahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_hibah, 'url' => ['view', 'no_hibah' => $model->no_hibah]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ipsrs-hibah-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

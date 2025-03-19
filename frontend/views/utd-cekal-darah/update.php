<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\UtdCekalDarah $model */

$this->title = 'Update Utd Cekal Darah: ' . $model->no_donor;
$this->params['breadcrumbs'][] = ['label' => 'Utd Cekal Darahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_donor, 'url' => ['view', 'no_donor' => $model->no_donor]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="utd-cekal-darah-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

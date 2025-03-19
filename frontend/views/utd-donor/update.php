<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\UtdDonor $model */

$this->title = 'Update Utd Donor: ' . $model->no_donor;
$this->params['breadcrumbs'][] = ['label' => 'Utd Donors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_donor, 'url' => ['view', 'no_donor' => $model->no_donor]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="utd-donor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

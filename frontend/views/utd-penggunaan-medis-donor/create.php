<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\UtdPenggunaanMedisDonor $model */

$this->title = 'Create Utd Penggunaan Medis Donor';
$this->params['breadcrumbs'][] = ['label' => 'Utd Penggunaan Medis Donors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="utd-penggunaan-medis-donor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

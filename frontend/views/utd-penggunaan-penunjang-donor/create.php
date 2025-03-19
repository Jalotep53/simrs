<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\UtdPenggunaanPenunjangDonor $model */

$this->title = 'Create Utd Penggunaan Penunjang Donor';
$this->params['breadcrumbs'][] = ['label' => 'Utd Penggunaan Penunjang Donors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="utd-penggunaan-penunjang-donor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

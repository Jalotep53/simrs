<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\IpsrsDetailTitipFaktur $model */

$this->title = 'Update Ipsrs Detail Titip Faktur: ' . $model->no_tagihan;
$this->params['breadcrumbs'][] = ['label' => 'Ipsrs Detail Titip Fakturs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_tagihan, 'url' => ['view', 'no_tagihan' => $model->no_tagihan, 'no_faktur' => $model->no_faktur]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ipsrs-detail-titip-faktur-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

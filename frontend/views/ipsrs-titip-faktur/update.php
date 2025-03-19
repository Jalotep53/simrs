<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\IpsrsTitipFaktur $model */

$this->title = 'Update Ipsrs Titip Faktur: ' . $model->no_tagihan;
$this->params['breadcrumbs'][] = ['label' => 'Ipsrs Titip Fakturs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_tagihan, 'url' => ['view', 'no_tagihan' => $model->no_tagihan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ipsrs-titip-faktur-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

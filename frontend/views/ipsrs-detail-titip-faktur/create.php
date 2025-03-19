<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\IpsrsDetailTitipFaktur $model */

$this->title = 'Create Ipsrs Detail Titip Faktur';
$this->params['breadcrumbs'][] = ['label' => 'Ipsrs Detail Titip Fakturs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ipsrs-detail-titip-faktur-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

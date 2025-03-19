<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\DetailTitipFaktur $model */

$this->title = 'Create Detail Titip Faktur';
$this->params['breadcrumbs'][] = ['label' => 'Detail Titip Fakturs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-titip-faktur-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

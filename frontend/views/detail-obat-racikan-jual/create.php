<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\DetailObatRacikanJual $model */

$this->title = 'Create Detail Obat Racikan Jual';
$this->params['breadcrumbs'][] = ['label' => 'Detail Obat Racikan Juals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-obat-racikan-jual-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

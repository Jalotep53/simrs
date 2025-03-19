<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ResepDokterRacikanDetail $model */

$this->title = 'Create Resep Dokter Racikan Detail';
$this->params['breadcrumbs'][] = ['label' => 'Resep Dokter Racikan Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resep-dokter-racikan-detail-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

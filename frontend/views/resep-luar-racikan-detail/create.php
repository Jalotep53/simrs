<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ResepLuarRacikanDetail $model */

$this->title = 'Create Resep Luar Racikan Detail';
$this->params['breadcrumbs'][] = ['label' => 'Resep Luar Racikan Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resep-luar-racikan-detail-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

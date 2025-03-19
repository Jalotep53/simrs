<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PemeriksaanGinekologiRanap $model */

$this->title = 'Create Pemeriksaan Ginekologi Ranap';
$this->params['breadcrumbs'][] = ['label' => 'Pemeriksaan Ginekologi Ranaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pemeriksaan-ginekologi-ranap-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

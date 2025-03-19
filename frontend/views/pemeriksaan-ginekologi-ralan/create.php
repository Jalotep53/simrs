<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PemeriksaanGinekologiRalan $model */

$this->title = 'Create Pemeriksaan Ginekologi Ralan';
$this->params['breadcrumbs'][] = ['label' => 'Pemeriksaan Ginekologi Ralans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pemeriksaan-ginekologi-ralan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

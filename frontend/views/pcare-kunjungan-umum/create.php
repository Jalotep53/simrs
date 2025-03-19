<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PcareKunjunganUmum $model */

$this->title = 'Create Pcare Kunjungan Umum';
$this->params['breadcrumbs'][] = ['label' => 'Pcare Kunjungan Umums', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pcare-kunjungan-umum-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

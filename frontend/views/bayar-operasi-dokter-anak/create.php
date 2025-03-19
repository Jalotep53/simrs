<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BayarOperasiDokterAnak $model */

$this->title = 'Create Bayar Operasi Dokter Anak';
$this->params['breadcrumbs'][] = ['label' => 'Bayar Operasi Dokter Anaks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bayar-operasi-dokter-anak-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

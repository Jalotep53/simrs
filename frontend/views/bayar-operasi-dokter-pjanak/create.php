<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BayarOperasiDokterPjanak $model */

$this->title = 'Create Bayar Operasi Dokter Pjanak';
$this->params['breadcrumbs'][] = ['label' => 'Bayar Operasi Dokter Pjanaks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bayar-operasi-dokter-pjanak-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

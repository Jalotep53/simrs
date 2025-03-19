<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BayarOperasiDokterUmum $model */

$this->title = 'Create Bayar Operasi Dokter Umum';
$this->params['breadcrumbs'][] = ['label' => 'Bayar Operasi Dokter Umums', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bayar-operasi-dokter-umum-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

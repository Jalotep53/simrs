<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BayarOperasiDokterAnestesi $model */

$this->title = 'Create Bayar Operasi Dokter Anestesi';
$this->params['breadcrumbs'][] = ['label' => 'Bayar Operasi Dokter Anestesis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bayar-operasi-dokter-anestesi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

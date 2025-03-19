<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BayarJmDokter $model */

$this->title = 'Create Bayar Jm Dokter';
$this->params['breadcrumbs'][] = ['label' => 'Bayar Jm Dokters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bayar-jm-dokter-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

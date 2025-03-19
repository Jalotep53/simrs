<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BridgingSuratKontrolBpjs $model */

$this->title = 'Create Bridging Surat Kontrol Bpjs';
$this->params['breadcrumbs'][] = ['label' => 'Bridging Surat Kontrol Bpjs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bridging-surat-kontrol-bpjs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

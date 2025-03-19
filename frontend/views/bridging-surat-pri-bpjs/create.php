<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BridgingSuratPriBpjs $model */

$this->title = 'Create Bridging Surat Pri Bpjs';
$this->params['breadcrumbs'][] = ['label' => 'Bridging Surat Pri Bpjs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bridging-surat-pri-bpjs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

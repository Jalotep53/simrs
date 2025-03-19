<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ReferensiMobilejknBpjsBatal $model */

$this->title = 'Create Referensi Mobilejkn Bpjs Batal';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Mobilejkn Bpjs Batals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="referensi-mobilejkn-bpjs-batal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SuratPenolakanAnjuranMedis $model */

$this->title = 'Create Surat Penolakan Anjuran Medis';
$this->params['breadcrumbs'][] = ['label' => 'Surat Penolakan Anjuran Medis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-penolakan-anjuran-medis-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SkpKriteriaPenilaian $model */

$this->title = 'Create Skp Kriteria Penilaian';
$this->params['breadcrumbs'][] = ['label' => 'Skp Kriteria Penilaians', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skp-kriteria-penilaian-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

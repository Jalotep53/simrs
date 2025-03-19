<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianMedisHemodialisa $model */

$this->title = 'Create Penilaian Medis Hemodialisa';
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Medis Hemodialisas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-medis-hemodialisa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

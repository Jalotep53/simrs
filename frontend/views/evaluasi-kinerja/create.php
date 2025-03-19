<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\EvaluasiKinerja $model */

$this->title = 'Create Evaluasi Kinerja';
$this->params['breadcrumbs'][] = ['label' => 'Evaluasi Kinerjas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="evaluasi-kinerja-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

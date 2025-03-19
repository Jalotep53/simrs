<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianPreOperasi $model */

$this->title = 'Create Penilaian Pre Operasi';
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Pre Operasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-pre-operasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

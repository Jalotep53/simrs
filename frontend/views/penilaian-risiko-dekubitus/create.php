<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianRisikoDekubitus $model */

$this->title = 'Create Penilaian Risiko Dekubitus';
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Risiko Dekubituses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-risiko-dekubitus-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

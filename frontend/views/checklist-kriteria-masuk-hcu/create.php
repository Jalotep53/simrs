<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ChecklistKriteriaMasukHcu $model */

$this->title = 'Create Checklist Kriteria Masuk Hcu';
$this->params['breadcrumbs'][] = ['label' => 'Checklist Kriteria Masuk Hcus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="checklist-kriteria-masuk-hcu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

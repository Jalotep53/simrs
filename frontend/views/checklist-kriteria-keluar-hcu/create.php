<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ChecklistKriteriaKeluarHcu $model */

$this->title = 'Create Checklist Kriteria Keluar Hcu';
$this->params['breadcrumbs'][] = ['label' => 'Checklist Kriteria Keluar Hcus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="checklist-kriteria-keluar-hcu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

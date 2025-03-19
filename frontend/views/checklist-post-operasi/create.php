<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ChecklistPostOperasi $model */

$this->title = 'Create Checklist Post Operasi';
$this->params['breadcrumbs'][] = ['label' => 'Checklist Post Operasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="checklist-post-operasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

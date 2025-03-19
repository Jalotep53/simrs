<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianPreAnestesi $model */

$this->title = 'Create Penilaian Pre Anestesi';
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Pre Anestesis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-pre-anestesi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

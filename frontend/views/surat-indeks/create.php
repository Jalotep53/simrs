<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SuratIndeks $model */

$this->title = 'Create Surat Indeks';
$this->params['breadcrumbs'][] = ['label' => 'Surat Indeks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-indeks-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

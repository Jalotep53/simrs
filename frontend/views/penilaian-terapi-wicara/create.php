<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianTerapiWicara $model */

$this->title = 'Create Penilaian Terapi Wicara';
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Terapi Wicaras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-terapi-wicara-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

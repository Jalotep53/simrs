<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianPasienTerminal $model */

$this->title = 'Create Penilaian Pasien Terminal';
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Pasien Terminals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-pasien-terminal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

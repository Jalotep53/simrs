<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SuratCutiHamil $model */

$this->title = 'Create Surat Cuti Hamil';
$this->params['breadcrumbs'][] = ['label' => 'Surat Cuti Hamils', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-cuti-hamil-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

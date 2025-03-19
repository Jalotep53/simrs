<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ResumePasienRanap $model */

$this->title = 'Create Resume Pasien Ranap';
$this->params['breadcrumbs'][] = ['label' => 'Resume Pasien Ranaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resume-pasien-ranap-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatSpecimenLabMb $model */

$this->title = 'Create Satu Sehat Specimen Lab Mb';
$this->params['breadcrumbs'][] = ['label' => 'Satu Sehat Specimen Lab Mbs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="satu-sehat-specimen-lab-mb-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SuratRak $model */

$this->title = 'Create Surat Rak';
$this->params['breadcrumbs'][] = ['label' => 'Surat Raks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-rak-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

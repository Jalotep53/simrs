<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SuratHamil $model */

$this->title = 'Create Surat Hamil';
$this->params['breadcrumbs'][] = ['label' => 'Surat Hamils', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-hamil-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SuratPersetujuanUmum $model */

$this->title = 'Create Surat Persetujuan Umum';
$this->params['breadcrumbs'][] = ['label' => 'Surat Persetujuan Umums', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-persetujuan-umum-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

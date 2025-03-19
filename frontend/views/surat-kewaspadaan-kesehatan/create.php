<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SuratKewaspadaanKesehatan $model */

$this->title = 'Create Surat Kewaspadaan Kesehatan';
$this->params['breadcrumbs'][] = ['label' => 'Surat Kewaspadaan Kesehatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-kewaspadaan-kesehatan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

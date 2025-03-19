<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianKorbanKekerasan $model */

$this->title = 'Create Penilaian Korban Kekerasan';
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Korban Kekerasans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-korban-kekerasan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

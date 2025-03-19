<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianUlangNyeri $model */

$this->title = 'Create Penilaian Ulang Nyeri';
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Ulang Nyeris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-ulang-nyeri-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

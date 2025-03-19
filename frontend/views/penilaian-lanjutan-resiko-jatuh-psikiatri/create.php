<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianLanjutanResikoJatuhPsikiatri $model */

$this->title = 'Create Penilaian Lanjutan Resiko Jatuh Psikiatri';
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Lanjutan Resiko Jatuh Psikiatris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-lanjutan-resiko-jatuh-psikiatri-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

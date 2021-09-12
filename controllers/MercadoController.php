<?php

namespace app\controllers;

use app\models\Mercado;
use app\models\MercadoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MercadoController implements the CRUD actions for Mercado model.
 */
class MercadoController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Mercado models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MercadoSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Mercado model.
     * @param int $idMercado Id Mercado
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idMercado)
    {
        return $this->render('view', [
            'model' => $this->findModel($idMercado),
        ]);
    }

    /**
     * Creates a new Mercado model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Mercado();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'idMercado' => $model->idMercado]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Mercado model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $idMercado Id Mercado
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idMercado)
    {
        $model = $this->findModel($idMercado);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idMercado' => $model->idMercado]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Mercado model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idMercado Id Mercado
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idMercado)
    {
        $this->findModel($idMercado)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Mercado model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idMercado Id Mercado
     * @return Mercado the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idMercado)
    {
        if (($model = Mercado::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}

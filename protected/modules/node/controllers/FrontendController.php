<?php

class FrontendController extends Controller
{
    public function actionIndex($slug)
    {
        $this->render('index', array());
    }
}

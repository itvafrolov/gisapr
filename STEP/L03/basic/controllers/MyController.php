<?php
namespace app\controllers;
use yii\web\Controller;

class MyController extends Controller
{
    public function actionTest1()
    {
        return "Hello! Test1";
    }

    public function actionTest2()
    {
        return $this->render('wtest2');
    }

    public function actionTest3()
    {
        $name = 'Viacheslav';
        $age = 43;        
        //return $this->render('wtest3', ['name' => $name, 'age' => $age]);
        return $this->render('wtest3', compact('name' , 'age'));
    }


    public function actionListstudents()
    {
        $students = Student::find()->
                        select('id, fname, lname, mname, email, age ')->
                        orderBy('age DESC')->all();
                        
        return $this->render('students', compact('students'));
    }
    
    public function actionListstudents2()
    {
        $query = Student::find()->
                        select('id, fname, lname, mname, email, age ')->
                        orderBy('age DESC');
        $pages = new \yii\data\Pagination(
                            [
                                'totalCount' => $query->count(),
                                'pageSize' => 2
                            ]
                        );
           
        $students = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('students2', compact('students', 'pages'));
    }

}



?>
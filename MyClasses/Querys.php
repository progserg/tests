<?php
require_once(__DIR__ . '/DBConnect.php');
class Query
{

    ///////////////////////////////////////////////
    //Запросы к Questions
    //////////////////////////////////////////////
    //selectЫ

    protected $selectQuestions = 'SELECT * FROM `questions`';

    protected $selectQuestionByNumber = 'SELECT * FROM `questions` WHERE `number`= :num_question';

    //insertЫ


    protected $addQuestion = 'INSERT INTO `questions`(`number`, `question`, `answer1`, `answer2`, `answer3`) VALUES (:num_question, :question, :answer1, :answer2, :answer3)';

    //deletЫ

    protected $deleteQuestion = 'DELETE FROM `questions` WHERE `id`= :id';

    //updatЫ

    protected $changeQuestion = 'UPDATE `questions` SET `number`= :num_question,`question`= :question,`answer1`= :answer1,`answer2`= :answer2,`answer3`= :answer3 WHERE `id` = :id';


    /////////////////////////////////////////////////////////////////

    //Вопросы
    public function selectQuestionByNumber($num_question)
    {
        $query = Database:: prepare($this->selectQuestionByNumber);
        $query->execute([':num_question' => $num_question]);
        return $query->fetch();
    }


    public function selectQuestions()
    {
        $query = Database:: prepare($this->selectQuestions);
        $query->execute();
        return $query;
    }
    public function addQuestion($num_question, $question, $answer1, $answer2, $answer3)
    {
        $values = [':num_question'=>$num_question, ':question'=>$question, ':answer1'=>$answer1, ':answer2'=>$answer2, ':answer3'=>$answer3];
        $query = Database:: prepare($this->addQuestion);
        return $query->execute($values);
    }

    public function deleteQuestion($id)
    {
        $query = Database:: prepare($this->deleteQuestion);
        return $query->execute([':id' => $id]);
    }

    public function changeQuestion($id, $num_question, $question, $answer1, $answer2, $answer3)
    {
        $values = [':id'=>$id, ':num_question'=>$num_question, ':question'=>$question, ':answer1'=>$answer1, ':answer2'=>$answer2, ':answer3'=>$answer3];
        $query = Database:: prepare($this->changeQuestion);
        return $query->execute($values);
    }
}
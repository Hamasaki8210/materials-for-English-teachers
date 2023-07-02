<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkArticleVisibility extends Model
{
    use HasFactory;

    public $timestamps = false;

    // initialize work_article_visibilities table
    public function setInitialVisibility($article_number)
    {

        // initialize truncating work_article_visibilities table
        $this->truncate();

        // set "1" in all columns according to how many the articles area
        $data = [];
        for ($i = 1; $i <= $article_number; $i++) {
            $data[] = [
                'article_id' => $i,
                'article' => '1',
                'reading_bold' => '1',
                'reading_session' => '1',
                'vocab_session' => '1',
                'question_session' => '1',
                'practice_session' => '1',
                'answer_session' => '1',
            ];
        }
        $this->insert($data);
    }

    // update work_artcle_visibilities table when users change the visible/invisible status
    public function updateWorkArticleVisilibity($db_column_name, $article_id, $isCheckedForDb)
    {
        $visibility = $this->where('article_id', $article_id)
            ->update(
                [
                    $db_column_name => $isCheckedForDb
                ]
            );
    }

    public function getVisibleWorkArticles()
    {
        $results = $this->where('article', '1')->get();
        return $results;
    }

    // set page number for each page according to the visibility
    public function setPageNumber()
    {
        $visible_article_datas = $this->getVisibleWorkArticles();
        $total_page_number = 0;
        $reading_page_num = "";
        $question_page_num = "";
        $practice_page_num = "";
        $answer_page_num = "";
        $update_data = [];
        $target_update_id = "";

        // update the page number in the work table
        foreach($visible_article_datas as $index => $visible_article_data){

            // get target article id
            $target_update_id = $visible_article_data->article_id;

            // if reading or vocab session is visible, set page number for reading page
            if($visible_article_data->reading_session === "1" || $visible_article_data->vocab_session === "1"){
                $total_page_number++;
                $reading_page_num = $total_page_number;
            }else{
                $reading_page_num = null;
            }
            // if question session is visible, set page number for question page
            if($visible_article_data->question_session === "1"){
                $total_page_number++;
                $question_page_num = $total_page_number;
            }else{
                $question_page_num = null;
            }
            // if practice session is visible, set page number for practice page
            if($visible_article_data->practice_session === "1"){
                $total_page_number++;
                $practice_page_num = $total_page_number;
            }else{
                $practice_page_num = null;
            }
            // if answer session is visible, set page number for answer page
            if($visible_article_data->answer_session === "1"){
                $total_page_number++;
                $answer_page_num = $total_page_number;
            }else{
                $answer_page_num = null;
            }

            $page_numbers = $this->where('article_id', $target_update_id)
            ->update(
                [
                    "reading_page_number" => $reading_page_num,
                    "question_page_number" => $question_page_num,
                    "practice_page_number" => $practice_page_num,
                    "answer_page_number" => $answer_page_num
                ]
            );
        }
    }
}

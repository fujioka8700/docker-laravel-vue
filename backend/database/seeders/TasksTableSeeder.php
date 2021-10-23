<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // for ($i = 1; $i <= 10; $i++) {
        //     Task::create([
        //         'title' => 'title' . $i,
        //         'content' => 'content' . $i,
        //         'person_in_charge' => 'person_in_charge' . $i,
        //     ]);
        // }

        $SakuraMusic = array(
            [
                "title" => "檄! 帝国華撃団",
                "content" => "サクラ大戦",
                "person_in_charge" => "帝国華劇団 花組",
            ],
            [
                "title" => "春が来る",
                "content" => "サクラ大戦2",
                "person_in_charge" => "横山智佐",
            ],
            [
                "title" => "絶対運命のタンゴ",
                "content" => "サクラ大戦2",
                "person_in_charge" => "富沢美智恵",
            ],
            [
                "title" => "生きてる喜び",
                "content" => "サクラ大戦2",
                "person_in_charge" => "高野麗",
            ],
            [
                "title" => "南風 GO! GO!",
                "content" => "サクラ大戦2",
                "person_in_charge" => "田中真弓",
            ],
            [
                "title" => "愛しのジャンポール",
                "content" => "サクラ大戦2",
                "person_in_charge" => "西原久美子",
            ],
            [
                "title" => "メトロで行こう",
                "content" => "サクラ大戦2",
                "person_in_charge" => "渕崎ゆり子",
            ],
            [
                "title" => "もしも…",
                "content" => "サクラ大戦2",
                "person_in_charge" => "岡本麻弥",
            ],
            [
                "title" => "イカルスの翼",
                "content" => "サクラ大戦2",
                "person_in_charge" => "伊倉一恵",
            ],
            [
                "title" => "夢のつづき",
                "content" => "サクラ大戦",
                "person_in_charge" => "帝国華劇団 花組",
            ],
            [
                "title" => "花咲く乙女",
                "content" => "サクラ大戦2",
                "person_in_charge" => "帝国華劇団 花組",
            ],
        );

        for ($i = 0; $i < count($SakuraMusic); $i++) {
            Task::create([
                'title' => $SakuraMusic[$i]['title'],
                'content' => $SakuraMusic[$i]['content'],
                'person_in_charge' => $SakuraMusic[$i]['person_in_charge']
            ]);
        }
    }
}

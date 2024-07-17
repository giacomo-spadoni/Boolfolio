<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $HTML = new Technology();
        $HTML->name = "HTML";
        $HTML->icon = "fa-brands fa-html5";
        $HTML->save();

        $CSS = new Technology();
        $CSS->name = "CSS";
        $CSS->icon = "fa-brands fa-css3-alt";
        $CSS->save();

        $Javascript = new Technology();
        $Javascript->name = "Javascript";
        $Javascript->icon = "fa-brands fa-Javascript5";
        $Javascript->save();

        $VueJs = new Technology();
        $VueJs->name = "VueJs";
        $VueJs->icon = "fa-brands fa-js";
        $VueJs->save();

        $PHP = new Technology();
        $PHP->name = "PHP";
        $PHP->icon = "fa-brands fa-php";
        $PHP->save();

        $Laravel = new Technology();
        $Laravel->name = "Laravel";
        $Laravel->icon = "fa-brands fa-laravel";
        $Laravel->save();

        $MySql = new Technology();
        $MySql->name = "MySql";
        $MySql->icon = "fa-regular fa-file-code";
        $MySql->save();
    }
}

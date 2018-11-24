<?php

use Illuminate\Database\Seeder;

class AllQuestions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        App\Question::create([
            'Title' => 'How do I use Git and Github?',
            'Description' => 'A paragraph is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences. Though not required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose. ',
            'Tags' => 'git, github,vcs',
        ]);

         App\Question::create([
            'Title' => 'What will i learn from codetrek?',
            'Description' => 'A paragraph is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences. Though not required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose. ',
            'Tags' => 'bootstrap, frontend',
        ]);

          App\Question::create([
            'Title' => 'what is bootstrap?',
            'Description' => 'A paragraph is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences. Though not required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose. ',
            'Tags' => 'fontawesome, icons',
        ]);

           App\Question::create([
            'Title' => 'When will the codetrek start?',
            'Description' => 'A paragraph is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences. Though not required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose. ',
            'Tags' => 'codetrek, bootcamp',
        ]);

    }
}

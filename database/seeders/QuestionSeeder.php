<?php
declare(strict_types=1);

namespace Database\Seeders;


use App\Models\Question;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->delete();

        $javaQuestions = [
            'What is the size of byte variable?',
            'What is the size of long variable?',
            'What is the default value of double variable?',
            'Which of the following is true about String?',
            'What is instance variable?',
            'What is JRE?',
            'What is NullPointerException?',
            'What happens when threads yield() method is called?',
            'What will happen if static modifier is removed from the signature of the main method?',
            'When finally block gets executed?'
        ];

        foreach ($javaQuestions as $question) {
            $this->createQuestions($question, 1);
        }

        $phpQuestions = [
            'Which of the following is true about php.ini file?',
            'Which of the following type of variables are floating-point numbers, like 3.14159 or 49.1?',
            'Which of the following magic constant of PHP returns current line number of the file?',
            'Which of the following array represents an array containing one or more arrays?',
            'Which of the following can be used to get information sent via get/post method in PHP?',
            'Doubly quoted strings are treated almost literally, whereas singly quoted strings replace
             variables with their values as well as specially interpreting certain character sequences.',
            'Can you assign the default values to a function parameters?',
            'Which of the following provides content type of the uploaded file in PHP?',
            'Which of the following method of Exception class returns the code of exception when error occurred?',
            'Which of the following method acts as a constructor function in a PHP class?'
        ];

        foreach ($phpQuestions as $question) {
            $this->createQuestions($question, 2);
        }

        $javaScriptQuestions = [
            'Which of the following is an advantage of using JavaScript?',
            'Which of the following type of variable is visible everywhere in your JavaScript code?',
            'Which built-in method returns the index within the calling String object of the first
             occurrence of the specified value?',
            'Which built-in method returns the string representation of the number\'s value?',
            'Which of the following function of Number object returns a string value version of the current number?',
            'Which of the following function of String object returns the index within the calling String object of
             the first occurrence of the specified value?',
            'Which of the following function of String object returns the calling string value converted to lower
             case while respecting the current locale?',
            'Which of the following function of String object causes a string to be displayed in the specified size as if it were in a <font\ size = \'size\'> tag?',
            'Which of the following function of Array object applies a function simultaneously against two values of the array (from left-to-right) as to reduce it to a single value?',
            'Which of the following function of Array object adds and/or removes elements from an array?'
        ];

        foreach ($javaScriptQuestions as $question) {
            $this->createQuestions($question, 3);
        }
    }

    private function createQuestions(string $item, int $testId): void
    {
        $question = new Question();
        $question->title = $item;
        $question->save();

        $question->tests()->sync([$testId]);
    }
}

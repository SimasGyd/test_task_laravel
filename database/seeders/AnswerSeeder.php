<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $answers = [
            [
                ['8 bit', 1, true],
                ['16 bit', 0, false],
                ['32 bit', 0, false],
                ['64 bit', 0, false]
            ],
            [
                ['8 bit', 0, false],
                ['16 bit', 0, false],
                ['32 bit', 0, false],
                ['64 bit', 1, true]
            ],
            [
                ['0.0d', 1, true],
                ['0.0f', 0, false],
                ['0', 0, false],
                ['not defined', 0, false]
            ],
            [
                ['String is mutable.', 0, false],
                ['String is immutable.', 1, true],
                ['String is a data type.', 0, false],
                ['None of the above.', 0, false]
            ],
            [
                ['Instance variables are static variables within a class but outside any method.', 0, false],
                ['Instance variables are variables defined inside methods, constructors or blocks.', 0, false],
                ['Instance variables are variables within a class but outside any method', 1, true],
                ['None of the above.', 0, false]
            ],
            [
                ['JRE is a java based GUI application', 0, false],
                ['JRE is an application development framework.', 0, false],
                ['JRE is an implementation of the Java Virtual Machine which executes Java programs.', 1, true],
                ['None of the above.', 0, false]
            ],
            [
                ['A NullPointerException is thrown when calling the instance method of a null object or modifying/accessing field of a null object.', 1, true],
                ['A NullPointerException is thrown when object is set as null.', 0, false],
                ['A NullPointerException is thrown when object property is set as null.', 0, false],
                ['None of the above.', 0, false]
            ],
            [
                ['Thread returns to the ready state.', 1, true],
                ['Thread returns to the waiting state.', 0, false],
                ['Thread starts running.', 0, false],
                ['None of the above.', 0, false]
            ],
            [
                ['Compilation Error.', 0, false],
                ['RunTime Error: NoSuchMethodError.', 1, true],
                ['Program will compile and run without any output.', 0, false],
                ['Program will compile and run to show the required output.', 0, false]
            ],
            [
                ['Always when try block get executed, no matter exception occurred or not.', 1, true],
                ['Always when a method get executed, no matter exception occurred or not.', 0, false],
                ['Always when a try block get executed, if exception do not occur.', 0, false],
                ['Only when exception occurs in try block code.', 0, false]
            ],
            [
                ['The PHP configuration file, php.ini, is the final and most immediate way to affect PHP\'s functionality.', 0, false],
                ['The php.ini file is read each time PHP is initialized.', 0, false],
                ['Both of the above.', 1, true],
                ['None of the above.', 0, false]
            ],
            [
                ['Integers', 0, false],
                ['Doubles', 1, true],
                ['Booleans', 0, false],
                ['Strings', 0, false]
            ],
            [
                ['_LINE_', 1, true],
                ['_FILE_', 0, false],
                ['_FUNCTION_', 0, false],
                ['_CLASS_', 0, false]
            ],
            [
                ['Numeric Array', 0, false],
                ['Associative Array', 0, false],
                ['Multidimensional Array', 1, true],
                ['None of the above.', 0, false]
            ],
            [
                ['$_REQUEST', 1, true],
                ['$REQUEST', 0, false],
                ['$REQUEST_PAGE', 0, false],
                ['None of the above.', 0, false]
            ],
            [
                ['true', 0, false],
                ['false', 1, true],
            ],
            [
                ['true', 1, true],
                ['false', 0, false],
            ],
            [
                ['$_FILES[\'file\'][\'name\']', 0, false],
                ['$_FILES[\'file\'][\'name\']', 0, false],
                ['$_FILES[\'file\'][\'size\']', 0, false],
                ['$_FILES[\'file\'][\'type\']', 1, true]
            ],
            [
                ['getMessage()', 0, false],
                ['getCode()', 1, true],
                ['getFile()', 0, false],
                ['getLine()', 0, false]
            ],
            [
                ['class_name()', 0, false],
                ['__construct', 1, true],
                ['constructor', 0, false],
                ['None of the above.', 0, false]
            ],
            [
                ['Less server interaction', 0, false],
                ['Immediate feedback to the visitors', 0, false],
                ['Increased interactivity', 0, false],
                ['All of the above.', 1, true]
            ],
            [
                ['global variable', 1, true],
                ['local variable', 0, false],
                ['Both of the above.', 0, false],
                ['None of the above.', 0, false]
            ],
            [
                ['getIndex()', 0, false],
                ['location()', 0, false],
                ['indexOf()', 1, true],
                ['None of the above.', 0, false]
            ],
            [
                ['toValue()', 0, false],
                ['toNumber()', 0, false],
                ['toString()', 1, true],
                ['None of the above.', 0, false]
            ],
            [
                ['toString()', 1, true],
                ['toFixed()', 0, false],
                ['toLocaleString()', 0, false],
                ['toPrecision()', 0, false]
            ],
            [
                ['substr()', 0, false],
                ['search()', 0, false],
                ['lastIndexOf()', 0, false],
                ['indexOf()', 1, true]
            ],
            [
                ['toLocaleLowerCase()', 1, true],
                ['toLowerCase()', 0, false],
                ['toString()', 0, false],
                ['substring()', 0, false]
            ],
            [
                ['fixed()', 0, false],
                ['fontcolor()', 0, false],
                ['fontsize()', 1, true],
                ['bold()', 1, false]
            ],
            [
                ['pop()', 0, false],
                ['push()', 0, false],
                ['reduce()', 1, true],
                ['reduceRight()', 0, false]
            ],
            [
                ['toSource()', 0, false],
                ['sort()', 0, false],
                ['splice()', 1, true],
                ['unshift()', 0, false]
            ]
        ];

        $questions = Question::all();

        foreach ($answers as $key => $answer) {
            $this->createAnswer($answer, $questions[$key]);
        }
    }

    private function createAnswer(array $result, $question): void
    {
        foreach ($result as $item) {
            $answer = new Answer();
            $answer->title = $item[0];
            $answer->points = $item[1];
            $answer->is_valid = $item[2];
            $answer->save();

            $answer->questions()->sync([$question->id]);
        }
    }
}

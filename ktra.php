<?php
// TRẮC NGHIỆM
// Câu 1: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => 9 )
// Câu 2: True
// Câu 3: a
// Câu 4: a
// Câu 5: b 

// THỰC HÀNH
// bài 1
echo "Bài 1"."<br>";
function generateFibonacci($n) {
    $fibonacciArray = array();
    switch($n){
        case 0:
            return $fibonacciArray;
        case 1:
            $fibonacciArray[] = 0;
            break;
        case 2:
            $fibonacciArray[] = 0;
            $fibonacciArray[] = 1;
            break;
        default: 
        $fibonacciArray[] = 0;
        $fibonacciArray[] = 1;
        for ($i = 2; $i < $n; $i++) {
            $fibonacciArray[] = $fibonacciArray[$i - 1] + $fibonacciArray[$i - 2];
        }
    }
    
    return $fibonacciArray;
}
$n = 10;
echo "Dãy số Fibonacci đầu tiên có $n phần tử là: ";
$fibonacciSeries = generateFibonacci($n);
foreach($fibonacciSeries as $value){
    echo $value . " ";
}
// bài 2
echo "<br>"."Bài 2 "."<br>";
$students = array(
    'Student_1' => array(
        'id' => '1',
        'name' => "Huy",
        'age' => 16,
        'grade' => 9
    ),
    'Student_2' => array(
        'id' => '2',
        'name' => 'Quang',
        'age' => 16,
        'grade' => 8
    ),
    'Student_3' => array(
        'id' => '3',
        'name' => 'Tuấn',
        'age' => 16,
        'grade' => 10
    )
);
echo "Thông tin của tất cả học sinh là:"."<br>";
foreach ($students as $key => $student) {
    echo $key."<br>";
    echo "id: " .$student['id']."<br>";
    echo "Name: " . $student['name'] . "<br>";
    echo "Age: " . $student['age'] . "<br>";
    echo "Grade: " . $student['grade'] . "<br>";
    echo "-----------------"."<br>";
}

function maxGrade($students){
    $max = 0;
    $studentmax = null;
    foreach($students as $student){
        if($student['grade'] > $max){
            $max = $student['grade'];
            $studentmax = $student;
        }
    }
    return $studentmax;
}
$studentmaxx = maxGrade($students);
echo "Thông  tin học sinh có điểm cao nhất là: "."<br>";
echo "Id: ".$studentmaxx['id']."<br>";
echo "Name: ".$studentmaxx['name']."<br>";
echo "Age: ".$studentmaxx['age']."<br>";
echo "Grade: ".$studentmaxx['grade']."<br>";
?>
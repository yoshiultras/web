<?php 
function analyze_text($text) {
    $text = iconv('utf-8//IGNORE', 'windows-1251//IGNORE', $text);
    $char_count = strlen($text);
    $letter_count = preg_match_all('/[a-zA-Zа-яА-Я]/', $text);
    $lowercase_count = preg_match_all('/[a-zа-я]/', $text);
    $uppercase_count = preg_match_all('/[A-ZА-Я]/', $text);
    $punctuation_count = preg_match_all('/[^\w\s]/', $text);
    $digit_count = preg_match_all('/[0-9]/', $text);
    $word_count = str_word_count($text);
    $char_freq = array_count_values(str_split(strtolower($text)));
    ksort($char_freq);
    $word_freq = array_count_values(str_word_count(strtolower($text), 1));
    ksort($word_freq);
    
    echo "1. Количество символов: ".$char_count.'<br>';
    echo "2. Количество букв: ".$letter_count.'<br>';
    echo "3.1. Количество строчных букв: ".$lowercase_count.'<br>';
    echo "3.2.   Количество заглавных букв: ".$uppercase_count.'<br>';
    echo "4. Количество знаков препинания: ".$punctuation_count.'<br>';
    echo "5. Количество цифр: ".$digit_count.'<br>';
    echo "6. Количество слов: ".$word_count.'<br>';
    echo "7. Количество вхождений каждого символа:".'<br>';
    foreach ($char_freq as $char => $freq) {
      echo $char.':'.$freq.'<br>';
    }
    echo "8. Список всех слов и количество их вхождений, отсортированный по алфавиту:".'<br>';
    foreach ($word_freq as $word => $freq) {
      echo $word.':'.$freq.'<br>';
    }
}
    
  
// function test_it( $text ) {
//     // количество символов в тексте определяется функцией размера текста
//     echo 'Количество символов: '.strlen($text).'<br>';
//     // определяем ассоциированный массив с цифрами
//     $cifra=array( '0'=>true, '1'=>true, '2'=>true, '3'=>true, '4'=>true,
//     '5'=>true, '6'=>true, '7'=>true, '8'=>true, '9'=>true );
//     // вводим переменные для хранения информации о:
//     $cifra_amount=0; // количество цифр в тексте
//     $word_amount=0; // количество слов в тексте
//     $word=''; // текущее слово
//     $words=array(); // список всех слов
//     for($i=0; $i<strlen($text); $i++) // перебираем все символы текста
//     {
//         if( array_key_exists($text[$i], $cifra) ) // если встретилась цифра
//         $cifra_amount++; // увеличиваем счетчик цифр
//         // если в тексте встретился пробел или текст закончился
//         if( $text[$i]==' ' || $i==strlen($text)-1 ) {
//             if( $word ) { // если есть текущее слово
            
//                 // если текущее слово сохранено в списке слов
//                 if( isset($words[$word]) )
//                     $words[ $word ]++; // увеличиваем число его повторов
//                 else
//                     $words[ $word ]=1; // первый повтор слова
//                 }
//                 $word=''; // сбрасываем текущее слово
//             }
//             else // если слово продолжается
//             $word.=$text[$i]; //добавляем в текущее слово новый символ
//         }
//         // выводим количество цифр в тексте
//         echo 'Количество цифр: '.$cifra_amount.'<br>';
//         // выводим количество слов в тексте
//         echo 'Количество слов: '.count($words).'<br>';
//     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Анализ текста</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <?php if(isset($_POST['text'])) {
                $text = $_POST['text'];
                echo '<p>'.$text.'</p>';
                analyze_text($text);
            } else {
                echo '<h1 class="text-danger">Нет текста для анализа<h1>';
            }
        ?>
        <a class="btn btn-primary" href="index.html">Обратно к анализу</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
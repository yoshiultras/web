
<?php 
function analyze_text($text) {

    $letter_count = 0;
    $lower_count = 0;
    $upper_coount = 0;
    $marks_count = 0;
    $digits_count = 0;
    $word_count = 0;
    $each_symbol_count = array();
    $each_word_count = array();
    if (isset($_POST['text']) && $_POST['text']) {
        $text = iconv("utf-8", "cp1251", $_POST['text']); 
        $word = '';
        for($i = 0; $i < strlen($text); $i++){
            if ($text[$i] === ' ') {
                if($word) {
                    $word_count += 1;
                    if (isset($each_word_count[$word])) $each_word_count[$word] += 1;
                    else  $each_word_count[$word] = 1;
                }
                $word = '';
            } else if (preg_match('/[.,\/#!$%\^&\*;:{}=\-_`~()]/', $text[$i])) {
                $marks_count += 1;
                if($word) {
                    $word_count += 1;
                    if (isset($each_word_count[$word])) $each_word_count[$word] += 1;
                    else  $each_word_count[$word] = 1;
                }
                $word = '';
            } else if (preg_match('/[a-z]/', $text[$i]) || preg_match('/[а-я]/', iconv("cp1251", "utf-8", $text[$i]))) {
                $letter_count += 1;
                $lower_count += 1;
                $word .= $text[$i];
            } else if (preg_match('/[A-Z]/', $text[$i]) || preg_match('/[А-Я]/', iconv("cp1251", "utf-8", $text[$i]))) {
                $letter_count += 1;
                $upper_coount += 1;
                $word .= $text[$i];
            } else if (preg_match('/[0-9]/', $text[$i])) {
                $digits_count += 1;
                if($word) {
                    $word_count += 1;
                    if (isset($each_word_count[$word])) $each_word_count[$word] += 1;
                    else  $each_word_count[$word] = 1;
                }
                $word = '';
            }
            if (isset($each_symbol_count[$text[$i]])) $each_symbol_count[$text[$i]] += 1;
            else $each_symbol_count[$text[$i]] = 1;
            if($i === strlen($text) - 1) {
                if($word) {
                    $word_count += 1;
                    if (isset($each_word_count[$word])) $each_word_count[$word] += 1;
                    else  $each_word_count[$word] = 1;
                }
            }
        }
        echo "1. Количество символов: ".strlen($text).'<br>';
        echo "2. Количество букв: ".$letter_count.'<br>';
        echo "3.1. Количество строчных букв: ".$lower_count.'<br>';
        echo "3.2.   Количество заглавных букв: ".$upper_coount.'<br>';
        echo "4. Количество знаков препинания: ".$marks_count.'<br>';
        echo "5. Количество цифр: ".$digits_count.'<br>';
        echo "6. Количество слов: ".$word_count.'<br>';
        echo "7. Количество вхождений каждого символа:".'<br>';
            foreach($each_symbol_count as $key => $value) {
                $key = iconv("cp1251", "utf-8", $key);
                if ($key === ' ') {
                    echo "'{$key}': {$value} <br>";
                    continue;
                }
                echo "{$key}: {$value} <br>";
            }


            echo "8. Список всех слов и количество их вхождений, отсортированный по алфавиту:".'<br>';
            foreach($each_word_count as $key => $value) {
                $key = iconv("cp1251", "utf-8", $key);
                if ($key === ' ') {
                    echo "'{$key}': {$value} <br>";
                    continue;
                }
                echo "{$key}: {$value} <br>";
            }

    // $text = iconv('utf-8', 'windows-1251', $text);
    // $char_count = strlen($text);
    // $letter_count = preg_match_all('/[a-zA-Zа-яА-Я]/u', $text);
    // $lowercase_count = preg_match_all('/[a-zа-я]/u', $text);
    // $uppercase_count = preg_match_all('/[A-ZА-Я]/u', $text);
    // $punctuation_count = preg_match_all('/[^\w\s]/', $text);
    // $digit_count = preg_match_all('/[0-9]/', $text);
    // $word_freq = array();
    // for($i = 0; $i < strlen($text); $i++){
    //     if (preg_match('/[^\w]/', $text[i])) {
    //         if($word) {
    //             $word_count += 1;
    //             if (isset($each_word_count[$word])) $each_word_count[$word] += 1;
    //                 else  $each_word_count[$word] = 1;
    //         }
    //         $word = '';
    //     } else if (preg_match('/[a-zA-Z]/', $text[$i]) || preg_match('/[а-яА-Я]/', iconv("cp1251", "utf-8", $text[$i]))) {
    //         $word .= $text[$i];
    //     } 
    //     if($i === strlen($text) - 1) {
    //         if($word) {
    //             $word_count += 1;
    //             if (isset($each_word_count[$word])) $each_word_count[$word] += 1;
    //                 else  $each_word_count[$word] = 1;
    //         }
    //     }
    // }
    // $char_freq = array_count_values(str_split(strtolower($text)));
    // ksort($char_freq);
    // ksort($word_freq);
    
    // echo "1. Количество символов: ".$char_count.'<br>';
    // echo "2. Количество букв: ".$letter_count.'<br>';
    // echo "3.1. Количество строчных букв: ".$lowercase_count.'<br>';
    // echo "3.2.   Количество заглавных букв: ".$uppercase_count.'<br>';
    // echo "4. Количество знаков препинания: ".$punctuation_count.'<br>';
    // echo "5. Количество цифр: ".$digit_count.'<br>';
    // echo "6. Количество слов: ".$word_count.'<br>';
    // echo "7. Количество вхождений каждого символа:".'<br>';
    // foreach ($char_freq as $char => $freq) {
    //   echo $char.':'.$freq.'<br>';
    // }
    // echo "8. Список всех слов и количество их вхождений, отсортированный по алфавиту:".'<br>';
    // foreach ($word_freq as $word => $freq) {
    //   echo $word.':'.$freq.'<br>';
    // }
}
}
    
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Анализ текста</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <?php if(!isset($_POST['text']) || empty($_POST['text'])) {
                echo '<h1 class="text-danger">Нет текста для анализа<h1>';
            } else {
                $text = $_POST['text'];
                echo '<p>'.$text.'</p>';
                analyze_text($text);
            }
        ?>
        <a class="btn btn-primary" href="index.html">Обратно к анализу</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
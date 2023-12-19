<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Саливонов Н.А. 221-361 лаб9 в4</title>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light">
        <div class="container-fluid">
            <img src="https://mospolytech.ru/upload/medialibrary/5fa/Logo_Polytech_rus_main.jpg" alt="" width="300" height="70">
        </div>
    </nav>
    <main class="bg-light">
        <div class="container">
            <div class="row">

                <div class="col-md-2">
                        <?php
                        $min_value = -10;
                        $max_value = 322;

                        $max = -1000000;
                        $min = 10000000;
                        $sum = 0;
                        $count = 0;
                        $sr = 0;

                        $x = -10;
                        $encounting = 40;
                        $step = 3;
                        $type = 'E';

                        if ($type == 'B') {
                            echo '<ul>';
                        } else if ($type == 'C') {
                            echo '<ol>';
                        } else if ($type == 'D') {
                            echo '<table class="valueTable">';
                        }


                        for ($i = 0; $i < $encounting; $i++, $x += $step) {
                            if ($x == 5) {
                                $f = 'error';
                            } else if ($x <= 10) {
                                $f = (5 - $x)/(1 - ($x/5));
                            } else {
                                if ($x < 20) {
                                    $f = ($x * $x) / 4 + 7;
                                } else {
                                        $f = 2 * $x - 21;
                                    }
                                }
                            if($f != "error"){
                                $result = round($f,3);
                            } else{
                                $result = $f;
                            }

                            if($result<$min && $result != "error"){
                                $min = $result;
                            }

                            if($result>$max && $result != "error"){
                                $max = $result;
                            }

                            if($result != "error"){
                                $sum += $result;
                                $count ++;
                            }
                            

                            if ($type == 'A') {
                                echo 'f(' . $x . ')=' . $result;
                                if ($i < $encounting - 1) {
                                    echo '<br>';
                                }
                            } else if ($type == 'B') {
                                echo '<li>f(' . $x . ')=' . $result . '</li>';
                            } else if ($type == 'C') {
                                echo '<li>f(' . $x . ')=' . $result . '</li>';
                            } else if ($type == 'D') {
                                echo '<tr><th class="valueColumn">' . $i + 1 . '</th><th class="valueColumn">' . $x . '</th><th class="valueColumn">' . $result . '</th></tr>';
                            } else if ($type == 'E') {
                                echo '<div class="result">f(' . $x . ')=' . $result . '</div>';
                            }
                            if (($f >= $max_value || $f < $min_value) && $f != "error") {
                                break;
                            }
                        }

                        $sr = round(($sum/$count),3);

                        if ($type == 'B') {
                            echo '</ul>';
                        } else if ($type == 'C') {
                            echo '</ol>';
                        } else if ($type == 'D') {
                            echo '</table>';
                        }
                        ?>
                        </div>
                    <div class="col-md-2">
                        <?php
                        $min_value = -10;
                        $max_value = 320;

                        $x = -10;
                        $encounting = 100;
                        $step = 2;
                        $type1 = 'B';

                        $i = 0;
                        if ($type1 == 'B') {
                            echo '<ul>';
                        } else if ($type1 == 'C') {
                            echo '<ol>';
                        } else if ($type1 == 'D') {
                            echo '<table class="valueTable">';
                        }

                        do {
                            if ($x == 5) {
                                $f = 'error';
                            } else if ($x <= 10) {
                                $f = (5 - $x)/(1 - ($x/5));
                            } else {
                                if ($x < 20) {
                                    $f = ($x * $x) / 4 + 7;
                                } else {
                                        $f = 2 * $x - 21;
                                    }
                                }
                            

                            if($f != "error"){
                                $result = round($f,3);
                            } else{
                                $result = $f;
                            }

                            if ($type1 == 'A') {
                                echo 'f(' . $x . ')=' . $result;
                                if ($i < $encounting - 1) {
                                    echo '<br>';
                                }
                            } else if ($type1 == 'B') {
                                echo '<li>f(' . $x . ')=' . $result . '</li>';
                            } else if ($type1 == 'C') {
                                echo '<li>f(' . $x . ')=' . $result . '</li>';
                            } else if ($type1 == 'D') {
                                echo '<tr><th class="valueColumn">' . $i + 1 . '</th><th class="valueColumn">' . $x . '</th><th class="valueColumn">' . $result . '</th></tr>';
                            } else if ($type1 == 'E') {
                                echo '<div class="result">f(' . $x . ')=' . $result . '</div>';
                            }

                            $i++;
                            $x += $step;
                        }
                        while ($i < $encounting && (($f < $max_value && $f > $min_value) || $f == "error"));

                        if ($type1 == 'B') {
                            echo '</ul>';
                        } else if ($type1 == 'C') {
                            echo '</ol>';
                        } else if ($type1 == 'D') {
                            echo '</table>';
                        }
                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php
                        $min_value = 5;
                        $max_value = 322;

                        $x = -10;
                        $encounting = 100;
                        $step = 2;
                        $type2 = 'C';

                        $i = 0;
                        $f = 0;

                        if ($type2 == 'B') {
                            echo '<ul>';
                        } else if ($type2 == 'C') {
                            echo '<ol>';
                        } else if ($type2 == 'D') {
                            echo '<table class="valueTable">';
                        }

                        while ($i < $encounting) {

                            if ($x == 5) {
                                $f = 'error';
                            } else if ($x <= 10) {
                                $f = (5 - $x)/(1 - ($x/5));
                            } else {
                                if ($x < 20) {
                                    $f = ($x * $x) / 4 + 7;
                                } else {
                                        $f = 2 * $x - 21;
                                    }
                                }

                            if($f != "error"){
                                $result = round($f,3);
                            } else{
                                $result = $f;
                            }

                            if ($type2 == 'A') {
                                echo 'f(' . $x . ')=' . $result;
                                if ($i < $encounting - 1) {
                                    echo '<br>';
                                }
                            } else if ($type2 == 'B') {
                                echo '<li>f(' . $x . ')=' . $result . '</li>';
                            } else if ($type2 == 'C') {
                                echo '<li>f(' . $x . ')=' . $result . '</li>';
                            } else if ($type2 == 'D') {
                                echo '<tr><th class="valueColumn">' . $i + 1 . '</th><th class="valueColumn">' . $x . '</th><th class="valueColumn">' . $result . '</th></tr>';
                            } else if ($type2 == 'E') {
                                echo '<div class="result">f(' . $x . ')=' . $result . '</div>';
                            }

                            if (($f >= $max_value || $f < $min_value) && $f != "error") {
                                break;
                            }
                            // (($f < $max_value && $f > $min_value) || $f == "error")
                            $i++;
                            $x += $step;
                        }
                        if ($type2 == 'B') {
                            echo '</ul>';
                        } else if ($type2 == 'C') {
                            echo '</ol>';
                        } else if ($type2 == 'D') {
                            echo '</table>';
                        }
                        ?>
                        </div>



            </div>
            <h3><?php echo "Минимальное: " . $min . ""?></h3>
            <h3><?php echo "Максимальное: " . $max . ""?></h3>
            <h3><?php echo "Среднее: " . $sr . ""?></h3>
        </div>
    </main>
    <footer class="fixed-bottom bg-dark text-white">
        <div class="container pt-2">
            <div class="row"> 
                <?php
                echo '<p class="col-md-2"> Верстка1: ' . $type . ' </p>';
                echo '<p class="col-md-2"> Верстка2: ' . $type1 . ' </p>';
                echo '<p class="col-md-2"> Верстка3: ' . $type2 . ' </p>'
                    ?>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
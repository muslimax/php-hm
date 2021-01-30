
        <main class="main">
            <? 
                // $name = 'Вася';
                // echo 'Привет <br>' . $name;
                echo "<h1>Привет Мир!</h1>";
            
            ?>
<!-- 
            <?= "<h1>Привет $name</h1>"?>

            <?
                $a = 6; 
                if ($a > 6) {
                   echo "$a > 6";
                } else if($a < 6) {
                    echo "$a < 6";
                } elseif($a == 6) {
                    echo "$a == 6";
                } 
                else {
                    echo "Ошибка!";
                } 
                date_default_timezone_set("Asia/Tashkent")
                
            ?>
            <p>Выберите ваш год рождения</p>
            <select>
                <? 
                $year = date("Y"); 
                for ($i = $year - 80; $i < $year; $i++) : ?>
                  
                   <option value="<?= $i?>"><?= $i?></option>
                <?  endfor; ?>
            </select>
            <br>  -->
            <!--  echo "<option value=\"$i\">$i</option>"; // "\" - экраннирование символов -->
            <p></p>
           
            <? 
                $arr = ["", "Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"];
                $month = date("n");
                echo date("d - $arr[$month] - Y; H:i:s") . "<br>";


               
                  //Ассоциативные массивы
                $arr_b = [
                 "a" => "sto",
                 "b" => "двести",
                 "c" => [
                     "e" => "триста",
                     "d" => "четыреста"
                ]
                ];
                 echo $arr_b["b"] . "<br>";

                foreach ($arr_b as $key => $value) {
                    
                    if (gettype($value) == "array") {
                        foreach ($value as $a) {
                            echo "<p>$key = $a</p>";
                        }
                    } else {
                        echo "<p>$key = $value</p>";
                    }  
                }

                var_dump($arr_b);

            ?>
            <p></p>

            <form method="post">
            <fieldset>
            
                <label for="name">Имя</label>
                <input type="text" id="name" name="name">
                <br>
                <br>
                <label>Фамилия:
                    <input type="text" id="name" name="surname">
                </label>
            </fieldset>
            <button>Отправить</button>

            </form>
            <? 
            var_dump($_GET);
            var_dump($_POST);
            $name = strip_tags($_POST['name']);
            $surname = htmlspecialchars($_POST['surname']);
            echo "<p>Ваше имя: $name</p>";
            echo "<p>Ваша фамилия: $surname</p>";
            ?>
           
        </main>
  
  

        <main class="main">
            <section class="head">
                <h2 class="head__title">Таблица умножения</h2>
                <p class="head__date">Сегодня 03 Март 2020 год</p>
            </section>
            <form action="" class="form" method="post">
                <label class="form__label">
                    <span class="form__text">Количество колонок</span>
                    <input type="text" class="form__input" name="col">
                </label>
                <label class="form__label">
                    <span class="form__text">Количество строк</span>
                    <input type="text" class="form__input" name="row">
                </label>
                <button class="form__btn">Отправить</button>
            </form>
                <?
                $col = strip_tags($_POST['col']);
                $row = strip_tags($_POST['row']);
                ?>
            <div class="table">

            <?

            $tableRow = "table__row";
            $tableCol = "table__col";

                for ($i=1; $i <= $row ; $i++) { 
                   echo "<div class='$tableRow'>";
                   for ($j=1; $j <= $col; $j++) { 
                       echo("<div class='$tableCol'>" .$i*$j. "</div>");
                   }
                   echo "</div>";
                }
            
            ?>


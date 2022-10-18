    <?php
        $quotes = array(); // Initializing an empty array
        $quotes[] = " Если человек долго поднимался по чужой лестнице, то, прежде чем найти свою, ему нужно спуститься.";
    	$quotes[] = " Будьте внимательны к своим мыслям, они — начало поступков. ";
    	$quotes[] = " Кто не борется, тот непобедим. ";
    	$quotes[] = " Достойный муж делает много, но не хвалится сделанным; совершает заслуги, но не признает их, потому что он не желает обнаруживать свою мудрость. ";
    	$quotes[] = " Хотя в мире нет предмета, который был бы слабее и нежнее воды, но она может разрушить самый твердый предмет ";
    	$quotes[] = " Кто думает, что постиг всё, тот ничего не знает. ";
    	$quotes[] = " Если в тебе недостаток веры, то бытие не верит в тебя. ";
    	$quotes[] = " Никогда не говори «никогда», потому что «дни бегут так быстро и ничто не остается неизменным. ";
    	$quotes[] = " Победа над другими даёт силу, победа над собой — бесстрашие. ";
        $quotes[] = " У хорошего путешественника нет точных планов и намерения попасть куда-то. ";
        $quotes[] = " Я всегда могу возвыситься над оскорбившими меня, простив их. ";
        $quotes[] = " Никогда не осуждайте человека, пока не пройдете долгий путь в его ботинках. ";
        $quotes[] = " Тот, кто знает и делает вид незнающего, тот на высоте. Кто без знаний делает вид знающего, тот больной. ";
        $quotes[] = " Если кто-то причинил тебе зло, не мсти. Сядь на берегу реки, и вскоре ты увидишь, как мимо тебя проплывает труп твоего врага. ";
        $quotes[] = " Закон достойных — творить добро и не ссориться. ";
        $quotes[] = " Знающий людей разумен, а знающий себя самого прозорлив. ";
        $quotes[] = " Когда я освобождаюсь от того, кто я есть, я становлюсь тем, кем я могу быть. ";
        $quotes[] = " Природа никогда не спешит, но всегда успевает. ";
        $quotes[] = " Быть спокойным, непринуждённым и великодушным — это лекарство. ";
        $quotes[] = " Пробуя на вкус, не думай о том, что считается вкусным. ";
    	// $number = mt_rand(0, count($quotes) - 1);
        
        $date = file_get_contents('../txt/date.txt'); // get the date of the quote of the day from a text file
        $todate = date('d.m.Y'); // Current system date
               
        if ($date !== $todate) {            // if the recording date and the current system date do not match, then the next day has come
            $qkey = array_rand($quotes, 1); // array key
            $quote = $quotes[$qkey];        // get a new random quote
            file_put_contents('../txt/quote.txt', $quote); // write (overwrite) the quote to a text file
            file_put_contents('../txt/date.txt', $todate); // write (overwrite) the current date to a text file
        } else {
            $quote = file_get_contents('../txt/quote.txt'); // if the recording date and the current system date match, we take a quote from the file
        }
        echo "<p class='h4 text-center'><span>$quote<span></p><br>"; // displaying a quote
        echo '<p class="h5 text-right"><span class="badge badge-primary">' . date ('d.m.Y') . '</span>'; // displaying the current date
    ?>

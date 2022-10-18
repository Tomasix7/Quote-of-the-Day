# Quote-of-the-Day
This PHP script prints one random quote from an array and displays it for one day

1. Reloading the page does not select a new quote until the system time changes to the next date.
2. For simplicity, the database is not used here, so the quotes array is contained in one quotes_1.php file. And the recording of the necessary data is carried out in text files .txt .
3. You need to create empty text files date.txt and quote.txt yourself and specify the path to them in file_get_contents('path to the file' ) and file_put _contents('path to the file', $data).
4. When you run the script for the first time, write any text in the quote.txt file, and it will be displayed until the end of the current day. When the system date changes, the file will be overwritten with a random quote from the $quotes array.
5. You can change and add to the $quotes array with your own quotes or any other strings that you already have.
6. Naturally, you can customize the html and css inside the echo construct yourself.


Этот скрипт PHP выводит одну случайную цитату из массива и показывает её в течении одних суток.
1. Перезагрузка страницы не приводит к выбору новой цитаты, пока системное время не сменится на следующую дату.
2. Для простоты здесь не используется база данных, поэтому массив с цитатами содержится в одном файле quotes_1.php. И запись необходимых данных осуществляется в текстовые файлы .txt .
3. Пустые текстовые файлы date.txt и quote.txt вам нужно создать самостоятельно и указать путь к ним в file_get_contents('путь к файлу' ) и file_put _contents('путь к файлу', $data).
4. При первом запуске скрипта напишите любой текст в файле quote.txt, и он будет отображаться до истечения текущих суток. Когда системная дата сменится файл будет перезаписан случайной цитатой из массива $quotes. 
5. Вы можете менять и пополнять массив $quotes своими цитатами или любыми другими строками, по образцу уже имеющихся.
6. Естественно, вы можете самостоятельно настраивать html и css внутри конструкта echo.

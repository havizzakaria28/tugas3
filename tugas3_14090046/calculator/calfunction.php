<html>

<head><title></title></head>



<?php

            $input_number1 = $_GET['input_number1'];

            $input_number2 = $_GET['input_number2'];

            $opt= $_GET['opt'];

            $hasil = 0;

                        

            $input_number1 =  $input_number1 / 1;

            $input_number2 = $input_number2 / 1;

            

            if($opt=="+")

            {

                        $hasil=$input_number1+$input_number2;

                        echo "<font face='Terminal'>";

                        echo "$hasil";

                        

                        //simpan ke log

                        $file='C:\xampp\htdocs\calculator\log.txt';

                        $fo=fopen($file,'w');

                        $data=$hasil;

                        fwrite($fo,$data);

                        fclose($fo);

            }

            else if($opt=="-")

            {

                        $hasil=$input_number1-$input_number2;

                        echo "<font face='Terminal'>";

                        echo "$hasil";

                        

                        //simpan ke log

                        $file='C:\xampp\htdocs\calculator\log.txt';

                        $fo=fopen($file,'w');

                        $data=$hasil;

                        fwrite($fo,$data);

                        fclose($fo);

            }

            else if($opt=="*")

            {

                        $hasil=$input_number1*$input_number2;

                        echo "<font face='Terminal'>";

                        echo "$hasil";

                        

                        //simpan ke log

                        $file='C:\xampp\htdocs\calculator\log.txt';

                        $fo=fopen($file,'w');

                        $data=$hasil;

                        fwrite($fo,$data);

                        fclose($fo);

            }

            else if($opt=="/")

            {

                        $hasil=$input_number1 / $input_number2;

                        echo "<font face='Terminal'>";

                        echo "$hasil";

                        

                        //simpan ke log

                        $file='C:\xampp\htdocs\calculator\log.txt';

                        $fo=fopen($file,'w');

                        $data=$hasil;

                        fwrite($fo,$data);

                        fclose($fo);

            }

            else if($opt=="%")

            {

                        $hasil=($input_number1 * $input_number2) / 100;

                        echo "<font face='Terminal'>";

                        echo "$hasil";

                        

                        //simpan ke log

                        $file='C:\xampp\htdocs\calculator\log.txt';

                        $fo=fopen($file,'w');

                        $data=$hasil;

                        fwrite($fo,$data);

                        fclose($fo);

            }

            
            

            
            else

            {

                        echo 'Operator cannot defined';

                        echo '<br>';

                        echo 'Calculation function is aborted ...';

                        exit;

            }

?>

</body>
</html> "
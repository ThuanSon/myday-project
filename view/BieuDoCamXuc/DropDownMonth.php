<?php
    function DropDownMonth() {
        $no = 12;
        echo ('<select name="thang" id="thang">');
        for ($i=1; $i <= $no; $i++) { 
            echo '<option class="ThangValue" value="'.$i.'">Tháng '.$i.'</option>';
        }
        echo '</select>';
    }
?>
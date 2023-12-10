<?php
    echo "<formid = \"F\" method=\"post\" action=\"<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>\">";
        echo "<input type=\"text\" id=\"quesF\" name=\"securityQuestion\" placeholder=\"<?php $seq_Q;?>\" required readonly>";
        echo "<input type=\"password\" name=\"AnsF\" placeholder=\" إجابة سؤال الامان\" required >";
        echo "<div id=\"Confirm\">";
            echo "<button>نأكيد</button>";
        echo "</div>";
    echo "</form>";
?>
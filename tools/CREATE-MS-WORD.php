<?php
    if(isset($_SERVER['REQUEST_METHOD']) && strip_tags($_SERVER['REQUEST_METHOD']) == strip_tags('POST')){
        if (isset($_POST['create_doc'])) {
            if (isset($_POST['doc']))
            //  && !empty($_POST['topic']) && isset($_POST['bodyContent']) && !empty($_POST['bodyContent'])) 
             {

                $Output = "<h1>".$_POST['topic']."</h1><p>".nl2br($_POST['bodyContent'])."</p>";

                $head_name = $_POST['topic'];
                $format = $_POST['select_format'];
                $filename = "BSP-$head_name-".date("d-m-Y")."doc";
                if (! empty($format)) {
                    echo "<script>alert('select your file format!')</script>"; 
                }

                header("Cache-Control: ");
                @header("Pragma: ");
                header("Expires: 0");
                header("Content-Type: application/vnd.msword");
                header("content-disposition: attachment; filename=".$filename);

                echo "<html";
                echo $Output;
                echo "</html>";
            }
            else {
                echo "<script>alert('All fields are required!')</script>"; 
			    echo "<script>window.location='../index.php'</script>";
            }
            // elseif (isset($_POST['pdf'])) {
            //     header('Content-Type: application/pdf'); // Output PDF
            //     header('Content-Disposition: attachment; filename='$filename); // PDF option is called for the header
            //     readfile('original.pdf');
            // }
        }
        else {
            die('Sorry, no proper data was passed');
        }
    }
    else {
        die('Access Denied');
    }
?>

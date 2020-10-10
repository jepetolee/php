<?php
    function print_title(){
        if(isset($_GET['id'])){
            echo htmlspecialchars($_GET['id']);
        } else {
            echo "Welcome";
        }
    }
    function print_description(){
        if(isset($_GET['id'])){
            echo htmlspecialchars(file_get_contents("data/" .  basename($_GET['id']));
        } else {
            echo "Hello, Dolly's PHP World!";
        }
    }
    function print_list(){
        $lists = scandir('./data');
        foreach($lists as $list){
            $list=htmlspecialchars($list);
            if($list != '.' and $list != '..'){
                echo "<li><a href=\"index.php?id=$list\">$list</a></li>";
            }
        }
    }
?>

<html>
    <body>
        <?php
        class car {
            public $name ;
             public function set_name($name){
                $this->name= $name;
             
             }
        }
      
        $message = new car();
        $message->set_name("BMW");
        echo $message->name;
       
        ?>
    </body>
</html>
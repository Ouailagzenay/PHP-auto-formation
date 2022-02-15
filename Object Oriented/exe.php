<html>
    <body>
        <?php
        class setHello{
            public  function set_hello()
            {
               echo 'hello : ';
            }

        }
        class setName extends setHello{
            public function set_name(){
                echo 'ouail agzenay ';
            }
        }
        $message = new setName();
        $message->set_hello();
        $message->set_name();
        
        ?>
    </body>
</html>
<?php 
                    
                        $connection = mysqli_connect('localhost','d106314_military','Stalker2202','d106314_military'); 
                        mysqli_set_charset( $connection,'utf8' );
                    
                        
                        function get_singles_all() {
                            global $connection;
                            $single =$connection->query("select * from single ");
                             return $single;
                        }
                        function get_single_by_id($id) {
                            global $connection;
                            $single =$connection->query("select * from single where id =$id");
                            foreach ($single as $singles);
                             return $singles;
                        }
                       function get_single_by_kategory($kategory) {
                            global $connection;
                            $cats =$connection->query("select * from single where kategory =$kategory");
                          
                             return $cats;
                        }
                        function get_single_by_search() {
                            global $connection;
                            if(isset($_POST['submit'])){
                            $search = $_POST['search'];
                            $query = mysqli_query($connect,"select * from single where title like '%$search%'");
                            return $query;}
                   }
                   
                        
                        ?>
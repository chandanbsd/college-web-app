<?php
    class event{
        private $db;

        public function __construct(){
            $this->db = new Database;
        }


        public function getAllPostDates(){
            $this->db->query("SELECT post_date, categories.name AS cname 
                            FROM events
                            INNER JOIN categories 
                            ON events.category_id = categories.id
                            ORDER BY post_date DESC
                            ");
            // Assign Result Set
            $results = $this->db->resultSet();

            return $results;
        }

        // Get All events 
        public function getAllevents(){
            $this->db->query("SELECT events.*, categories.name AS cname 
                            FROM events
                            INNER JOIN categories 
                            ON events.category_id = categories.name
                            ORDER BY post_date DESC
                            ");
            // Assign Result Set
            $results = $this->db->resultSet();

            return $results;
        }

        //Get Categories
        // public function getCategories(){
        //     $this->db->query("SELECT * FROM categories");
        //     // Assign Result Set
        //     $results = $this->db->resultSet();
        //     return $results;
        // }


        //Get events By Category
        // public function getByCategory($category){
        //                 $this->db->query("SELECT events.*, categories.name AS cname 
        //                     FROM events, categories
        //                     INNER JOIN categories 
        //                     ON events.category_id = categories.id
        //                     WHERE events.category_id = $category
        //                     ORDER BY post_date DESC");
        //             }

         // Get events By Category
        

        //Get category
        // public function getCategory($category_id){
        //     $this->db->query("SELECT * FROM categories WHERE id = :category_id");
        //     $this->db->bind(':category_id', $category_id);
        //     //Assign Row
        //     $row = $this->db->single();
        //     return $row;
        // }

        ///////////////////////////////////////
            // Get Categories
        public function getCategories(){
            $this->db->query("SELECT * FROM categories");
            // Assign Result Set
            $results = $this->db->resultSet();

            return $results;
        }

        // Get Jobs By Category
        public function getByCategory($category){
            $this->db->query("SELECT events.*, categories.name AS cname 
                        FROM events 
                        INNER JOIN categories
                        ON events.category_id = categories.name 
                        WHERE categories.id = $category
                        ORDER BY post_date DESC 
                        ");
            // Assign Result Set
            $results = $this->db->resultSet();

            return $results;
        }

        // Get category
        public function getCategory($category_id){
            $this->db->query("SELECT * FROM categories WHERE id = :category_id");

            $this->db->bind(':category_id', $category_id);

            // Assign Row
            $row = $this->db->single();

            return $row;
        }

        public function getCategoryName($category_id){
            $this->db->query("SELECT * FROM categories WHERE id = :category_id");

            $this->db->bind(':category_id', $category_id);

            // Assign Row
            $row = $this->db->single();

            return $row;
        }
    






        ////////////////////////////////////////////////////////
        public function getDepts(){
            $this->db->query("SELECT * FROM dept");
            // Assign Result Set
            $results = $this->db->resultSet();
            return $results;
        }


        //Get events By Category
        public function getByDept($dept){
                        $this->db->query("SELECT events.*, dept.name AS dname 
                            FROM events
                            INNER JOIN dept 
                            ON events.dept = dept.name
                            WHERE events.dept = :exg
                            ORDER BY post_date DESC
                            ");
            // Assign Result Set
              $this->db->bind(':exg', $dept);          
            $results = $this->db->resultSet();

            return $results;
        }

        //Get category
        public function getDept($dept_id){
            $this->db->query("SELECT * FROM dept WHERE name = :dept_id");

            $this->db->bind(':dept_id', $dept_id);

            //Assign Row
            $row = $this->db->single();

            return $row;
        }

        ///////////////////////////////////////////////////////////


        ////////////////////////////////////////////////////////
        public function getSems(){
            $this->db->query("SELECT * FROM sem");
            // Assign Result Set
            $results = $this->db->resultSet();
            return $results;
        }


        //Get events By Category
        public function getBySem($sem){
                        $this->db->query("SELECT events.*, sem.name AS dname 
                            FROM events
                            INNER JOIN sem 
                            ON events.sem = sem.name
                            WHERE events.sem = :exg
                            ORDER BY post_date DESC
                            ");
            // Assign Result Set
              $this->db->bind(':exg', $sem);          
            $results = $this->db->resultSet();

            return $results;
        }

        //Get category
        public function getSem($sem_id){
            $this->db->query("SELECT * FROM sem WHERE name = :sem_id");

            $this->db->bind(':sem_id', $sem_id);

            //Assign Row
            $row = $this->db->single();

            return $row;
        }

        ///////////////////////////////////////////////////////////




        ////////////////////////////////////////////////////////
        public function getSecs(){
            $this->db->query("SELECT * FROM sec");
            // Assign Result Set
            $results = $this->db->resultSet();
            return $results;
        }


        //Get events By Category
        public function getBySec($sec){
                        $this->db->query("SELECT events.*, sec.name AS dname 
                            FROM events
                            INNER JOIN sec
                            ON events.sec = sec.name
                            WHERE events.sec = :exg
                            ORDER BY post_date DESC
                            ");
            // Assign Result Set
              $this->db->bind(':exg', $sec);          
            $results = $this->db->resultSet();

            return $results;
        }

        //Get category
        public function getSec($sec_id){
            $this->db->query("SELECT * FROM sec WHERE name = :sec_id");

            $this->db->bind(':sec_id', $sec_id);

            //Assign Row
            $row = $this->db->single();

            return $row;
        }

        ///////////////////////////////////////////////////////////











        //Get event
        public function getevent($id){
            $this->db->query("SELECT * FROM events WHERE id = :id");

            $this->db->bind(':id', $id);

            //Assign Row
            $row = $this->db->single();

            return $row;
        }

        // Create event
        public function create($data){
            //Insert Query
            // $this->db->query("INSERT INTO events (category_id, event_title, club, description, location, fee, contact_user, contact_email)
            // VALUES (:category_id,:event_title, :club, :description, :location, :fee, :contact_user, :contact_email)");
            // //Bind Data

             $this->db->query("INSERT INTO events (category_id, dept,sem,sec, event_title, description, contact_user, contact_email)
              VALUES (:category_id,:dept,:sem,:sec,:event_title, :description, :contact_user, :contact_email)");
           
            $this->db->bind(':category_id', $data['category_id']);
            $this->db->bind(':dept', $data['dept']);
            $this->db->bind(':sem', $data['sem']);
            $this->db->bind(':sec', $data['sec']);
            $this->db->bind(':event_title', $data['event_title']);
           // $this->db->bind(':club', $data['club']);
            $this->db->bind(':description', $data['description']);
           // $this->db->bind(':location', $data['location']);
           // $this->db->bind(':fee', $data['fee']);
            $this->db->bind(':contact_user', $data['contact_user']);
            $this->db->bind(':contact_email', $data['contact_email']);

            //Execute
            if($this->db->execute()){
                return true;
            } else {
                return false;
            }
        }

        ///myfunc to user
         public function createU($data)
         {
            
            $this->db->query("INSERT INTO registrations (usn,name,email,id) 
            VALUES (:usn,:name,:email,:id)");
            
            $this->db->bind(':usn', $data['usn']);
            $this->db->bind(':name', $data['name']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':id', $data['id']);

            if($this->db->execute()){
                return true;
            } else {
                return false;
            }
        }

        public function displayU($data)
        {
            $this->db->query("SELECT * FROM registrations ");
            //Assign Row
            $row = $this->db->single();

            return $row;
        }

        //Delete event
        public function delete($id){
            //Insert Query
            $this->db->query("DELETE FROM events WHERE id = $id");
            //Execute
            if($this->db->execute()){
                return true;
            } else {
                return false;
            }
        }

        //Update event
        public function update($id, $data){
            //Insert Query
            $this->db->query("UPDATE events
                SET
                category_id = :category_id,
                dept = :dept,
                sem = :sem,
                sec = :sec,
                event_title = :event_title,
               
                description = :description,
             
                contact_user = :contact_user,
                contact_email = :contact_email
                WHERE id = $id");

            //Bind Data
            $this->db->bind(':category_id', $data['category_id']);
            $this->db->bind(':dept', $data['dept']);
            $this->db->bind(':sem', $data['sem']);
            $this->db->bind(':sec', $data['sec']);
            $this->db->bind(':event_title', $data['event_title']);
         
            $this->db->bind(':description', $data['description']);
            $this->db->bind(':contact_user', $data['contact_user']);
            $this->db->bind(':contact_email', $data['contact_email']);

            //Execute
            if($this->db->execute()){
                return true;
            } else {
                return false;
            }
        }
    }
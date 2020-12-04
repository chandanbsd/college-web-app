<?php
    class event{
        private $db;

        public function __construct(){
            $this->db = new Database;
        }

        // Get All events 
        public function getAllevents(){
            $this->db->query("SELECT events.*, categories.name AS cname 
                            FROM events
                            INNER JOIN categories 
                            ON events.category_id = categories.id
                            ORDER BY post_date DESC
                            ");
            // Assign Result Set
            $results = $this->db->resultSet();

            return $results;
        }

        //Get Categories
        public function getCategories(){
            $this->db->query("SELECT * FROM categories");
            // Assign Result Set
            $results = $this->db->resultSet();
            return $results;
        }

        //Get events By Category
        public function getByCategory($category){
                        $this->db->query("SELECT events.*, categories.name AS cname 
                            FROM events
                            INNER JOIN categories 
                            ON events.category_id = categories.id
                            WHERE events.category_id = $category
                            ORDER BY post_date DESC
                            ");
            // Assign Result Set
            $results = $this->db->resultSet();

            return $results;
        }

        //Get category
        public function getCategory($category_id){
            $this->db->query("SELECT * FROM categories WHERE id = :category_id");

            $this->db->bind(':category_id', $category_id);

            //Assign Row
            $row = $this->db->single();

            return $row;
        }

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
            $this->db->query("INSERT INTO events (category_id, event_title, club, description, location, fee, contact_user, contact_email)
            VALUES (:category_id,:event_title, :club, :description, :location, :fee, :contact_user, :contact_email)");
            //Bind Data
            $this->db->bind(':category_id', $data['category_id']);

            $this->db->bind(':event_title', $data['event_title']);
            $this->db->bind(':club', $data['club']);
            $this->db->bind(':description', $data['description']);
            $this->db->bind(':location', $data['location']);
            $this->db->bind(':fee', $data['fee']);
            $this->db->bind(':contact_user', $data['contact_user']);
            $this->db->bind(':contact_email', $data['contact_email']);

            //Execute
            if($this->db->execute()){
                return true;
            } else {
                return false;
            }
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
                event_title = :event_title,
                club = :club,
                description = :description,
                location = :location,
                fee = :fee,
                contact_user = :contact_user,
                contact_email = :contact_email
                WHERE id = $id");

            //Bind Data
            $this->db->bind(':category_id', $data['category_id']);
            $this->db->bind(':event_title', $data['event_title']);
            $this->db->bind(':club', $data['club']);
            $this->db->bind(':description', $data['description']);
            $this->db->bind(':location', $data['location']);
            $this->db->bind(':fee', $data['fee']);
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
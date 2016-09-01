 <?php 
    class SqlConnector{
        
        private $host, $user, $pass, $db, $port;
        public $connection;
        
        public function __construct($host = 'localhost', $user = 'root', $pass = null , $db = 'c9', $port = '3306'){
            $this->host = $host;
            $this->user = $user;
            $this->pass = $pass;
            $this->db = $db;
            $this->port = $port;
            $this->connection = $this->connect();
            $this->connection->set_charset("utf8");
        }
        public function connect(){
            $connection = mysqli_connect($this->host, $this->user, $this->pass, $this->db, $this->port )or die( mysql_error() );
            return $connection;
        }
        public function runQuery($query, $kill = null){
            $this->result = mysqli_query($this->connection, $query);
            if(!$this->result){
                printf("Errormessage: %s\n", $this->connection->error);
            }
            mysqli_close($this->connection);
        }
    }
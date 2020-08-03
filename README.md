# conector-db
Singleton pattern to connect database Mysql, Postgrs, Oracle, SQL Server, and others.

# Settings.php example
    class Settings{
        public static $DB_HOST="";
        public static $DB_USER="";
        public static $DB_PASSWORD="";
        public static $DB_NAME="";
    }
    
------
   
#Connect example    
    require_once dirname(__FILE__)."/../vendor/autoload.php";   
    require_once dirname(__FILE__)."/Settings.php";    
    use conector_db\ConectorDB;    
    $conector= ConectorDB::get_conector(Settings::$DB_HOST,Settings::$DB_USER, Settings::$DB_PASSWORD, Settings::$DB_NAME);     
    print_r($conector->select("show tables"));    

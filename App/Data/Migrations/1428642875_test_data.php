<?php
/*
 * test_data migration file
 *
 * @author Dragos Ionita
 * @version 1.0
 * @date 4/10/2015
 */
class Migration_1428642875 extends \Core\Migration {

    public function up() {
        $this->query("INSERT INTO user (first_name, last_name, email) VALUES ('Michael', 'Florida', 'michael_florida@domain.com')");
        $this->query("INSERT INTO user (first_name, last_name, email) VALUES ('Francis', 'Euler', 'francis_euler@domain.com')");
        $this->query("INSERT INTO user (first_name, last_name, email) VALUES ('Helen', 'Rouder', 'helen_rouder@domain.com')");

        $this->query("INSERT INTO user_info (city, birthday) VALUES ('New York', '1978-10-09')");
        $this->query("INSERT INTO user_info (city, birthday) VALUES ('Paris', '1988-11-03')");
        $this->query("INSERT INTO user_info (city, birthday) VALUES ('London', '1990-04-06')");
    }

    public function down() {
        $this->query("TRUNCATE TABLE user");
        $this->query("TRUNCATE TABLE user_info");
    }
}
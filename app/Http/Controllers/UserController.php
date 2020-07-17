<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    //

    public function profile()
    {
        return view('profile');
    }


    public function setupDatabase(){
    	
    		if(!is_null(DB::Table('users'))){
	    		$createTableSqlString ="CREATE TABLE courses (id bigint(20) UNSIGNED NOT NULL,
		          course_title varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
		          description varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
		          credit_unit int(11) NOT NULL,
		          class varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
		          created_at timestamp NULL DEFAULT NULL,
		          updated_at timestamp NULL DEFAULT NULL
		        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";
		        DB::statement($createTableSqlString);


		        $createTableSqlString = "INSERT INTO courses (id, course_title, description, credit_unit, class, created_at, updated_at) VALUES
		        (1, 'Introduction to Logic gates', 'Logic gates and logic theories', 3, '100 Level', '2020-07-17 04:11:39', '2020-07-17 04:11:39'),
		        (2, 'Fundamentals of Java programming', 'Java programming with Java 8', 3, '100 Level', '2020-07-17 04:14:36', '2020-07-17 04:14:36');";
		        DB::statement($createTableSqlString);


		        $createTableSqlString = "CREATE TABLE student_courses (
		              id bigint(20) UNSIGNED NOT NULL,
		              student_id int(11) NOT NULL,
		              course_id int(11) NOT NULL,
		              created_at timestamp NULL DEFAULT NULL,
		              updated_at timestamp NULL DEFAULT NULL
		            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";
		        DB::statement($createTableSqlString);


		        // $createTableSqlString = "INSERT INTO student_courses (id, student_id, course_id, created_at, updated_at) VALUES (5, 1, 1, '2020-07-17 06:01:24', '2020-07-17 06:01:24'), (6, 3, 1, '2020-07-17 06:43:52', '2020-07-17 06:43:52'), (7, 3, 2, '2020-07-17 06:43:52', '2020-07-17 06:43:52');";
		        // DB::statement($createTableSqlString);


		        $createTableSqlString = "CREATE TABLE users (
		              id bigint(20) UNSIGNED NOT NULL,
		              name varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
		              email varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
		              email_verified_at timestamp NULL DEFAULT NULL,
		              password varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
		              user_type varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
		              class varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
		              remember_token varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
		              created_at timestamp NULL DEFAULT NULL,
		              updated_at timestamp NULL DEFAULT NULL
		            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";
		        DB::statement($createTableSqlString);

		        // $createTableSqlString = "INSERT INTO users (id, name, email, email_verified_at, password, user_type, class, remember_token, created_at, updated_at) VALUES
		        //     (1 'admin', 'admin@gmail.com', NULL, '$2y$10$chQLLinoTyevravSbIjqROUYpBjflZ0wFb6f.qpK.GQDl05/0EYyS', 'admin', 'null', NULL, '2020-07-16 21:24:15', '2020-07-16 21:24:15');";
		        // DB::statement($createTableSqlString);

		        // $createTableSqlString = "INSERT INTO users (id, name, email, email_verified_at, password, user_type, class, remember_token, created_at, updated_at) VALUES
		        //     (1, 'Prosper Afemikhe', 'prosper@gmail.com', NULL, '$2y$10$QO9gE9OsPZh15mtIcDHJmu1/fwCOjdmoOCfQUItQCkr2VpLMXAun6', 'student', '100 Level', NULL, '2020-07-16 21:23:15', '2020-07-16 21:23:15'),
		        //     (2, 'admin', 'admin@gmail.com', NULL, '$2y$10$chQLLinoTyevravSbIjqROUYpBjflZ0wFb6f.qpK.GQDl05/0EYyS', 'admin', 'null', NULL, '2020-07-16 21:24:15', '2020-07-16 21:24:15'),
		        //     (3, 'Favour Afemikhe', 'favour@gmail.com', NULL, '$2y$10$hwtomGSbxVgHpTfBRGHo9uxr.TkS8No1MYy9FJYQLfHEJhzQ36XL.', 'student', '100 Level', NULL, '2020-07-17 06:40:39', '2020-07-17 06:40:39');";
		        // DB::statement($createTableSqlString);


		         $createTableSqlString = "ALTER TABLE courses ADD PRIMARY KEY (id);";
		          DB::statement($createTableSqlString);

		          $createTableSqlString = "ALTER TABLE student_courses ADD PRIMARY KEY (id);";
		          DB::statement($createTableSqlString);


		          $createTableSqlString = "ALTER TABLE users ADD PRIMARY KEY (id), ADD UNIQUE KEY users_email_unique (email);";
		          DB::statement($createTableSqlString);

		          $createTableSqlString = "ALTER TABLE courses MODIFY id bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;";
		          DB::statement($createTableSqlString);

		          $createTableSqlString = "ALTER TABLE student_courses MODIFY id bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;";
		          DB::statement($createTableSqlString);

		          $createTableSqlString = "ALTER TABLE users MODIFY id bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;";
		          DB::statement($createTableSqlString);
		   
    		}
    		
		return redirect()->back();          
    }
}

<?php
$password = 'ederson';
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$password1 = 'ederson';

if(password_verify($password1, $hashed_password)) {
   echo 'validado';

// ederson
// $2y$10$LzokgnJGR0Xys9T09DLf/eHJYhOUwUtKGknEjIDkpcrJuaJ9CePeC
}

?>

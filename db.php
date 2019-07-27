<!-- This function is for Connect database to this program. -->
<!-- a php code to connect to a database in localhost
i used xampp to create the database used here
the mysql code is : -->

<!-- create a database with the name "register"
then create a table with the name "users" -->
<!-- -- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1; -->



<?php
$con = mysqli_connect("localhost","root","","register");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>



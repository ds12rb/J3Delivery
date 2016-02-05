<?php


class DatabaseConnection{
	//-----------------------------------------------------
	// Variables
	//-----------------------------------------------------
	public $db_connection;


					//-----------------------------------------------------
					// Variables
					//-----------------------------------------------------
	//================================================================================
	// STATIC FUNCTIONS BEGINS
	//================================================================================


							//============================================================
								// STATIC FUNCTIONS
								//================================================================================

//	============================================================
// DB CONNECTION FUNCTIONS BEGINS
//================================================================================
									/*dbConnect connects to the database and returns a boolean
									indicating the connection	result */
									function dbConnect() {

										$host = "localhost";
										$user = "username";
										$pass = "password";
										$database = "j3delivery";
										// Create connection
										$conn = new mysqli($host, $user, $pass, $database);
										$this->db_connection = $conn;
										return ($conn->connect_errno == NULL) ? TRUE : FALSE;
									}//dbConnect


									/*dbClose closes the mysqli connection*/
									function dbClose() {

										if($this->checkConnection()){
											$thread_id = $this->db_connection->thread_id;
											$this->db_connection->kill($thread_id);
											$this->db_connection->close();
											$this->db_connection = NULL;
										}
									}//dbClose


									/*checkConnection returns true if the mysqli connection is active,
									false otherwise*/
									function checkConnection() {

										if(!$this->db_connection) return FALSE;
										if($this->db_connection == NULL) return FALSE;
										if($this->db_connection->connect_error){
											return FALSE;
										}	else {
											return TRUE;
										}
									}//checkConnection

									/*destructor closes the connection if it is still open*/
									function __destruct() {
										if($this->checkConnection()) $this->dbClose();
									}//desctuctor



									//	============================================================
										// DB CONNECTION FUNCTIONS
										//================================================================================





}

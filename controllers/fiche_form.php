<?php
  include('../lib/app.php');

  // Execute script only for POST method
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = getDatabase();

    // Our SQL query, values will be replaced later
    $sql = "INSERT INTO pt_FormulaireFiche (nom, prenom, email, id_diplome) VALUES (:nom, :prenom, :email, :id_diplome)";

    // Mapped attributes based on sql query values and form input values
    $attributes = array(
      'nom' => $_POST['nom'],
      'prenom' => $_POST['prenom'],
      'email' => $_POST['email'],
      'id_diplome' => $_GET['id_diplome']
    );

    // Prepare the query, avoid injections
    $stmt = $db->prepare($sql);

    // Execute the query and interpolate proper values
    $stmt->execute($attributes);

    // Closing the connexion
    $db = null;

    // Redirect to index with a success message
    header('Location: ../index.php?success=true');
  } else {
    http_response_code(500);
  }
<?php 
if (!session_id()) {
# code...
	session_start();
} 
include_once 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <link href="css/style.css" rel="stylesheet">

  <style>
    /* style.css */

/* Style for event cards */
.card {
    border: 1px solid #ddd;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    margin: 10px;
    transition: transform 0.2s;
}

.card:hover {
    transform: translateY(-5px);
}

/* Style for event images */
.card img {
    max-width: 100%;
    height: auto;
}

/* Style for event name */
.card .name {
    font-size: 20px;
    font-weight: bold;
    margin: 10px 0;
    color: #333;
}

/* Style for event description */
.card .event-description {
    font-size: 14px;
    color: #666;
    margin-bottom: 10px;
}

/* Style for "Book Tickets" button */
.card .btn {
    background-color: #007BFF;
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.card .btn:hover {
    background-color: #0056b3;
}

    </style>
</head>

<body>
 <div class="container" style="border:1px solid red;">
  <div>
    Events available
    <br>
          <?php 
          $count=0;
          $res=$conn->query("select * from eventlist;");
          echo "<div class='row'>";
         
          while ($row=$res->fetch_object()) {
            $_SESSION['movie']=$row->eventId;

            if ($count==4) {

              echo "</div>
              <div class='row'>";
              $count=0;
            }

            echo " 
            <div class='col-md-3'>
                <div class='card h-100'>
                      <img src='uploadimages/".$row->image."'/> 
                      <div class='card-body' style='height:250px'>
                        <h3 class='name'>".$row->Name."</h3>
                        <p>$row->Short_desc</p>

                        <div class='card-footer' style='position:absolute;bottom:0px;'>
                        <form action='ticketProcessing.php' method='post' >
                          <input type='hidden' name='eventId' value='".$row->eventId."' >
                          <input type='submit'  class='btn btn-primary btn-xs btn-block' type='submit' value='Book tickets' name='submit'>
                        </form>
                        </div>
                        </div>
                    </div>
                  </div>";

            $count++;
          } ?>

        </div>
      </div>
    </div>

</body>
</html>
<?php
   require "connection.php";


 

?>

<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://kit.fontawesome.com/your-font-awesome-kit.js" crossorigin="anonymous"></script>
  <!-- <link rel="stylesheet" href="bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="sidebar">
    <div class="brand">
      <span class="hamburger-icon" onclick="toggleSidebar()"><i class="fas fa-bars"></i></span>
      <span class="brand-name"> Dashboard</span>
    </div>
    <ul>
      <li><a href="#" onclick="showSection('section1')"><i class="fas fa-home"></i> Home</a></li>
      <li><a href="#" onclick="showSection('section2')"><i class="fas fa-cogs"></i> User_info</a></li>
      <li><a href="#" onclick="showSection('section3')"><i class="fas fa-user"></i> Sign out</a></li>
    </ul>
  </div>

  <div class="content">
    <section id="section1" class="active">
      <h2>Home</h2>
      <p>Welcome to Admin page.</p>
    </section>

    <section id="section2">
      <div class="table-wrapper"> 
        <div class="table-responsive">
    <h1 class="my-4">Visistors List</h1>
    <table class="table table-bordered ">
    <thead>
      <tr class="col-lg-8">
                <th  >FirstName</th>
                <th >LastName</th>
                <th >Phone Number</th>
                <th >Gender</th>
                <th >Visiting</th>
                <th >Reason for Visit</th>
                <th >Delete</th>
    </tr>
    <tbody>
        <tr>
            <?php  
            // $sql = "SELECT * FROM users WHERE `role` != 'admin'"
                  $row = "SELECT * FROM information WHERE `firstname` != 'admin'";
                  $af = mysqli_query($conn,$row);
                  foreach($af as $nur):
                  ?>
          <td ><?php echo $nur['firstname']; ?></td>
          <td ><?php echo $nur['lastname']; ?></td>
          <td ><?php echo $nur['phone']; ?></td>
          <td ><?php echo $nur['gender']; ?></td>
          <td ><?php echo $nur['visit']; ?></td>
          <td ><?php echo $nur['selects']; ?></td>
          <td>
          <form action="delete.php" method="post">
            <button class="btn btn-primary w-100" type="submit" name="submit" value=<?php echo $nur['id'];?>>Delete</button>
          </form> 
              </tr>
              
<?php endforeach; ?>
</tbody>
    </thead>
  </table>
  </div>
  </div>
    </section>
   

    <section id="section3">
      <h2>Sign out</h2>
      <form action="admin_logout.php" method="post">
      <button name="submit" class="btn btn-danger mt-5">sign out</button>
      </form>
    </section>
 

  <script src="script.js"></script>
</body>
</html>


<script>

function showSection(sectionId) {
  const section = document.getElementById(sectionId);
  if (section) {
    const allSections = document.querySelectorAll('.content section');
    allSections.forEach((sec) => sec.classList.remove('active'));
    section.classList.add('active');
  }
}

function toggleSidebar() {
  const sidebar = document.querySelector('.sidebar');
  sidebar.classList.toggle('collapsed');
}



  

</script>
  <!-- <script src="script.js"></script> -->







  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

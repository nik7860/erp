
<html>
    <head>
    <?php include "ms.php" ?>
        <title>HOD login</title>
        <style type="text/css">
body
{
background: url('nik.jpg');
background-size: cover;

}
.login{
    background: rgba(0, 0, 0, 0.5);
   
   
  
}
</style>
    </head>
    <body >
    
  <?php
   include ('h4.php');
   
   include 'conn.php';
   $ex="Select* from branch";
   $resulte=mysqli_query($con,$ex);
   $nume=mysqli_num_rows($resulte);

 

           
            ?>
            
    <main>
    
        <div class="container login">
            <form class="post-form" action="lvalid.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <br>
            <h4 class="text-center text-uppercase bg-dark text-white">Login Form(HOD)</h4>
    
            <div class="form-group">
          <select name="branch" class="form-control" required >
          <option value="" selected disabled>Select Branch</option>
          <?php for($i=1;$i<=$nume;$i++)
          {
            $rowe=mysqli_fetch_array($resulte);
           ?>
 
      <option value="<?php echo $rowe['branch']; ?>"><?php echo $rowe['branch']; ?></option>
      <?php } ?>
    </select>

  </div>
    <br>
    <input type="password" name="password" class="form-control"placeholder="Enter Password" id="text"required ><br>
    <button type="submit" class="btn bg-primary">Login</button>
    
    </div>
  </form>
 
</div>

    </main>
    
    <?php include "footer.php" ?>
    </body>
</html>
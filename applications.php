<?php 
$count = 1;
$result=mysqli_query($con,"SELECT *FROM aspirant"); ?>

<div class="table-responsive text-nowrap">

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Admission NUmber</th>
        <th scope="col">Political Party</th>
         <th scope="col">Phone</th>
        <th scope="col">Seat</th>
        <th scope="col">Year of Study</th>
        <th scope="col">Verify</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <!--th scope="row">1</th>-->
         <?php while ($row=mysqli_fetch_array($result)){
          ?>
          <tr>
            <td><?php echo $count++ ?></td>
            <td><?php echo $row['asp_name']; ?></td>
             <td><?php echo $row['asp_adm']; ?></td>
              <td><?php echo $row['party']; ?></td>
              <td><?php echo $row['phone']; ?></td>
               <td><?php echo $row['asp_seat']; ?></td>
                <td><?php echo $row['year']; ?></td>
             
              <td><div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" value="">
    <label class="form-check-label" for="exampleCheck1"></label>
  </div></td>
             </tr>
           <?php }?>
       
       
      </tr>
    
    </tbody>
  </table>

</div>
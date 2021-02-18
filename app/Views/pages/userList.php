<table class="striped">
        <thead>
          <tr>
              <th>User ID</th>
              <th>User Name</th>
              <th>Email Id</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($user as $row):?>
          <tr>
           <td><?= $row['user_id'];?></td>
           <td><?= $row['username'];?></td>
           <td><?= $row['emailId'];?></td>
          </tr>
   <?php endforeach;?>
        </tbody>
      </table>


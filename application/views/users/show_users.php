

<header><title>ADMIN - SHOW USER PAGE</title></header>
<head>
  <style type="text/css">
    .table table
    {
      width: 500px;
      margin: auto;
    }
  </style>
</head>
<div class="table">
    <h2 style="text-align: center">Show Users</h2>
    <table border="1" style="width: 500px">
      <thead>
        <tr>
          <th>Username</th>
          <th>Password</th>
          <th>Email</th>
        </tr>
      </thead>
      <tbody>
          <?php
            foreach ($add as $show) 
            {
              echo '<tr>';
                echo '<td>'.$show['username'].'</td>';
                echo '<td>'.$show['password'].'</td>';
                echo '<td>'.$show['email'].'</td>';
              echo '</tr>';
            }
          ?>
      </tbody>
    </table>
  </div>

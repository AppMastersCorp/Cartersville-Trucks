<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        foreach ($users as $user){
            echo '<tr>';
            
            echo '<td>';
            echo $user->name;
            echo '</td>';
            
            echo '<td>';
            echo $user->email;
            echo '</td>';
            
            echo '</tr>';
        }
        ?>
    </tbody>
</table> 
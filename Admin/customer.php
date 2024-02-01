<?php include('includes/header.php'); 

?>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Meter Id</th>
            <th>Gmail</th>
            <th>Edit</th>
        <tr>
    </thead>
    </tbody>
    <?php 
        $customer=getAll('user');

        if(mysqli_num_rows($customer)>0){
            $num=0;
            foreach($customer as $c){
                
                ?>
                    <tr>
                        <td><?=$_SESSION['num']=++$num?></td>
                        <td><?=$c['name']?></td>
                        <td><?=$c['id']?></td>
                        <td><?=$c['email']?></td>
                        <td><i class="material-icons opacity-10">delete</i></td>
                    </tr>
    <?php
                }
        }
    ?>
    
    </tbody>
</table>
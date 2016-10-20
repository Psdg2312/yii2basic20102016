 <?php 
use yii\helpers\Html;

 ?>
<table class="table table-bordered">
    <thead>
      <tr class = "info">
        <th>ลำดับ</th>
        <th>ยี่ห้อคอม</th>
        <th>ปัญหาคอม</th>
        <th></th>
             </tr>
    </thead>
    <tbody>
                
        <?php 
        foreach ($data as $i=>$item) {
        echo '<tr>';
        echo '<td>'.($i+1).'</td>';
        echo '<td>'.$item['brand'].'</td>';
        echo '<td>'.$item['problem'].'</td>';
  
        echo '</tr>';
        }
        
        ?>
        
      
     
    </tbody>
  </table>


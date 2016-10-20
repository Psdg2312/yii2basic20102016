<table class="table table-bordered">
    <thead>
      <tr class = "info">
        <th>ลำดับ</th>
        <th>ยี่ห้อ</th>
        <th>รหัสครุภัณฑ์</th>
        <th>ประเภท cpu</th>
      </tr>
    </thead>
    <tbody>
                
        <?php 
        foreach ($com as $i=>$item) {
        echo '<tr>';
        echo '<td>'.($i+1).'</td>';
        echo '<td>'.$item->brand.'</td>';
        echo '<td>'.$item->asset_code.'</td>';
        echo '<td>'.$item->cpu_type.'</td>';
        echo '</tr>';
        }
        ?>
        
        <td>x</td>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
     
    </tbody>
  </table>
<?php
        foreach ($com as $key=>$value) {
           echo ($key.+1).'::'.$value->brand.'/'.$value->asset_code.'/'.$value->cpu_type. '<br>';
           
            
        }


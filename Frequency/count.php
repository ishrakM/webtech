<!DOCTYPE html>
<html>
<body>

          <table class="table">
              <thead>
                <tr>
                  <th scope="col">Character</th>
                  <th scope="col">Count</th>
                </tr>
              </thead>
              <tbody>

                <?php
                  $charFrequency= count_chars($_POST['comment'],1);
                  foreach($charFrequency as $key=>$value)
                  {
                    echo "<tr>";
                    echo "<td>".chr($key)."</td>" ;
                    echo "<td>".$value."</td>";
                    echo "</tr>";
                  }
                ?>
				
			</tbody>
             </table>	
</br>
        <table class="table">
              <thead>
                <tr>
                  <th scope="col">Character</th>
                  <th scope="col">Count</th>
                </tr>
              </thead>
              <tbody>
			  
                <?php
                  $wordCount= str_word_count($_POST['comment'], 1);
                  foreach($wordCount as $key=>$value)
                  {
                    $wordFrequency= substr_count($_POST['comment'], $value);
                    echo "<tr>";
                    echo "<td>".$value."</td>" ;
                    echo "<td>".$wordFrequency."</td>";
                    echo "</tr>";
                  }
                ?>		
			</tbody>
             </table>	
			 
		<a href="index.php" type="button">Input Another String</a>	 
				
</body>
</html>	
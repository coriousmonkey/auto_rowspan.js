<table id="ItemsTable" border=1 >
    <thead>
        <tr>
     <th>
       Number
     </th>
     <th>
       Number2
     </th>
    </tr>
    </thead>
    
    <tbody>
          <tr>
            <td>a</td>     <td>32174714</td>
          </tr>
          <tr>
            <td>a</td>     <td>32174714</td>
          </tr>
         <tr>
            <td>b</td>     <td>32174713</td>
          </tr>
 
          <tr>
            <td>b</td>     <td>32174713</td>
          </tr>
          <tr>
            <td>b</td>     <td>32174713</td>
          </tr>       
          <tr>
            <td>c</td>     <td>32174713</td>
          </tr>


    </tbody>
</table>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="auto_rowspan.js"></script>
<script>
$(document).ready(function(){
    auto_row_span('#ItemsTable',0);
});
</script>
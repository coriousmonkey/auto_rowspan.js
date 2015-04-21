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
<script>
$(document).ready(function(){
    auto_row_span();
});

function auto_row_span(){
var arr = [];
var n=0;
var rs=1;
var idrs=1;
$( "#ItemsTable tbody tr" ).each(function( index ) {
   myelemen=$( this ).find( "td:eq(0)" );
    arr.push(myelemen.html());
    if(arr[n]==arr[n-1]){
        rs++;
        myelemen.remove();
        myelemen.html(rs);
    }else if(arr[n]!=arr[n-1]){
        myelemen.css( "color", "red" );
        myelemen.attr('id', ''+idrs+'');
        if(n!=0){
            $('#ItemsTable tbody').find('#'+((idrs-1)*1)).attr('rowspan', ''+rs+'');
        }
        rs=1;
        idrs++;
    }
    n++;
});
$('#ItemsTable tbody').find('#'+((idrs-1)*1)).attr('rowspan', ''+rs+'');
}
</script>
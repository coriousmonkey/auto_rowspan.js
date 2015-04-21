function auto_row_span(idtabel,kolom){
var arr = [];
var n=0;
var rs=1;
var idrs=1;
no_kol='col'+kolom;
    $( idtabel+" tbody tr" ).each(function( index ) {
        myelemen=$( this ).find( "td:eq("+kolom+")" );
        arr.push(myelemen.html());
            if(arr[n]==arr[n-1]){
                rs++;
                myelemen.remove();
                myelemen.html(rs);
            }else if(arr[n]!=arr[n-1]){
                myelemen.css( "font-weight", "bold" );
                myelemen.attr('id', no_kol+''+idrs+'');
                if(n!=0){
                    $(idtabel+' tbody').find('#'+no_kol+((idrs-1)*1)).attr('rowspan', ''+rs+'');
                }
                rs=1;
                idrs++;
            }
        n++;
});
$(idtabel+' tbody').find('#'+no_kol+((idrs-1)*1)).attr('rowspan', ''+rs+'');
}
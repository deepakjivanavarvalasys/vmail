 /* ------------------------------------
    Campaign List Custom Javascript
------------------------------------ */

let USER_TABLE;
let URL = $('meta[name="base-path"]').attr('content');
let MONTHS = ['Jan','Feb','Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

   

USER_TABLE = $('#table-users').DataTable({
    "lengthMenu": [ [200,100,50,25,10,-1], [200,100,50,25,10,'All'] ],
    "processing": true,
    "serverSide": true,
    "ajax": {
        "url": 'http://localhost/vmail_laravel/public/manager/getusers',
        data: {

        },
        
    }
    ,
    "columns": [
       
        {
            data: 'name'
        },
        {
            render: function (data, type, row) {
                if(row.role_id=='1') {
                    return 'Admin';
                } else if(row.role_id=='2') 
                {
                    return 'Manager';
                } else if(row.role_id=='3') 
                {
                    return 'EME';
                }
            }
        },
        {
            data: 'email'
        },
        {
            data: 'contact'
        },
        {
            render:function(data,type,row) 
            {
                if(row.status=='1') {
                    return 'Active';
                } else if(row.status=='0') 
                {
                    return 'Inactive';
                }
            }
            
        },
     

    ],
});

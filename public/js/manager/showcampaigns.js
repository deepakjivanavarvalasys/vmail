 /* ------------------------------------
    Campaign List Custom Javascript
------------------------------------ */

let USER_TABLE;
let URL = $('meta[name="base-path"]').attr('content');
let MONTHS = ['Jan','Feb','Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

   

USER_TABLE = $('#table-users').DataTable({
    "fixedColumns": true,

    "lengthMenu": [ [20,500,400,300,200,100,-1], [20,500,400,300,200,100,'All'] ],
    "processing": true,
    "serverSide": true,
    "ajax": {
        "url": 'http://localhost/vmail_laravel/public/manager/getcampaign',
        data: {

        },
        
    }
    ,
    "columns": [
       
        {
            data: 'campaign_number'
        },
        {
            data: 'campaign_name'
        },
        {

            render: function (data, type, row) {
                
                campaign_status=
                '<div class="dropdown hidden space-x-8 sm:-my-px sm:ms-10 sm:flex"><button class="activebtn dropbtn" >'+
                row.campaign_status+'</button><div class="dropdown-content"><a class="" href="?status=inactive">INACTIVE CAMPAIGN</a><a href="?status=hold">HOLD CAMPAIGN</a><a href="?status=complete">MARK AS COMPLETE</a><a href="?status=cancel">MARK AS CANCEL</a><a href="?status=delete">DELETE CAMPAIGN</a><a href="?status=rename">RENAME CAMPAIGN</a></div></div>';

                return campaign_status;

            }
            
        }
     

    ],
});

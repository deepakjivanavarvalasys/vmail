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
                '<div class="dropdown hidden space-x-8 sm:-my-px sm:ms-10 sm:flex"><button class="dropbtn" style="color:#000;">'+
                row.campaign_status+'</button><div class="dropdown-content"><a href="#">INACTIVE CAMPAIGN</a><a href="#">HOLD CAMPAIGN</a><a href="#">MARK AS COMPLETE</a></div></div>';

                return campaign_status;

            }
            
        }
     

    ],
});

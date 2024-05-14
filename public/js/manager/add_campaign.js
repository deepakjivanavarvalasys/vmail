$('#addasset').click(function () {
    var asset = $(this).closest('#asset');
    if (asset.find('input:text').length < 7) {
        asset.append('<div class="col-md-6" style="margin-top:10px;"><label class="block font-medium text-sm text-gray-700 dark:text-gray-300">Asset Name  </label><input type="text" id="assettitle[]" name="assettitle[]" value="" /></div>');
        asset.append('<div class="col-md-6" style="margin-top:10px;"><label class="block font-medium text-sm text-gray-700 dark:text-gray-300">Asset File  </label><input type="file"  id="assetfile[]" name="assetfile[]" value="" /></div>');
        
    }
});


$('#delasset').click(function () {
    var asset = $(this).closest('#asset');
    
    if (asset.find('input:text').length > 1) {
        asset.find('input:text').last().closest('#assettitle[]').remove();
        
    }

});

$('#addpoc').click(function () {
    var poc = $(this).closest('#poc');
    if (poc.find('input:text').length < 7) {
        poc.append('<div class="col-md-6" style="margin-top:10px;"><label class="block font-medium text-sm text-gray-700 dark:text-gray-300">POC Name</label><input type="text" id="poctitle[]" name="poctitle[]" value="" /></div>');
        poc.append('<div class="col-md-6" style="margin-top:10px;"><label class="block font-medium text-sm text-gray-700 dark:text-gray-300">POC Link</label><input type="text"  id="poclink[]" name="poclink[]" value="" /></div>');
        
    }
});


$('#delpoc').click(function () {
    var poc = $(this).closest('#poc');
    
    if (poc.find('input:text').length > 1) {
        poc.find('input:text').last().closest('#poclink[]').remove();
        
    }

});

$('#addcn').click(function () {
    var cn = $(this).closest('#cn');
    if (cn.find('input:text').length < 7) {
        cn.append('<div class="col-md-6" style="margin-top:10px;"><label class="block font-medium text-sm text-gray-700 dark:text-gray-300">CN Title</label><input type="text" id="cntitle[]" name="cntitle[]" value="" /></div>');
        cn.append('<div class="col-md-6" style="margin-top:10px;"><label class="block font-medium text-sm text-gray-700 dark:text-gray-300">CN Link</label><input type="text"  id="cnlink[]" name="cnlink[]" value="" /></div>');
        
    }
});


$('#delcn').click(function () {
    var cn = $(this).closest('#cn');
    
    if (cn.find('input:text').length > 1) {
        cn.find('input:text').last().closest('#cn').remove();
        
    }

});



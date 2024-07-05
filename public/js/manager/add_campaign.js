$('#addasset').click(function () {
    var asset = $(this).closest('#asset');
    if (asset.find('input:text').length < 7) {
        asset.append('<div class="col-md-12" style="margin-top:10px;"><label class="block font-medium text-sm text-gray-700 dark:text-gray-300">Asset Name  </label><input type="text" class="form-control" id="assettitle[]" name="assettitle[]" value="" placeholder="Enter Client Newsletter"/></div>');
        asset.append('<div class="col-md-12" style="margin-top:10px;"><label class="block font-medium text-sm text-gray-700 dark:text-gray-300">Asset File  </label><input type="file"  id="assetfile[]" name="assetfile[]" value="" /></div><hr>');
        
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
        poc.append('<div class="col-md-12" style="margin-top:10px;"><label class="block font-medium text-sm text-gray-700 dark:text-gray-300">POC Name</label><input type="text" class="form-control" id="poctitle[]" name="poctitle[]" value="" placeholder="Enter POC Name"/></div>');
        poc.append('<div class="col-md-12" style="margin-top:10px;"><label class="block font-medium text-sm text-gray-700 dark:text-gray-300">POC Link</label><input type="text"  class="form-control" id="poclink[]" name="poclink[]" value="" placeholder="Enter POC Link"/></div><hr>');
        
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
        cn.append('<div class="col-md-12" style="margin-top:10px;"><label class="block font-medium text-sm text-gray-700 dark:text-gray-300">CN Title</label><input type="text" class="form-control" id="cntitle[]" name="cntitle[]" value="" placeholder="Enter Client Newsletter" /></div>');
        cn.append('<div class="col-md-12" style="margin-top:10px;"><label class="block font-medium text-sm text-gray-700 dark:text-gray-300">CN Link</label><input type="text"  class="form-control" id="cnlink[]" name="cnlink[]" value="" placeholder="Enter Client Newsletter Link"/></div><hr>');
        
    }
});


$('#delcn').click(function () {
    var cn = $(this).closest('#cn');
    
    if (cn.find('input:text').length > 1) {
        cn.find('input:text').last().closest('#cn').remove();
        
    }

});



/*$("#anything").circulate({
    speed:400,
    height:200,
    width:200,
    sizeAdjustment:100,
    loop:false,
    zIndexValues:[1,1,1,1]
});*/


function previewFile(input) {
    var file = $("input[type=file]").get(0).files[0];
    if (file) {
        var reader = new FileReader();
        reader.onload = function () {
            $('#previewImg').attr("src", reader.result);
        }
        reader.readAsDataURL(file);
    }
}
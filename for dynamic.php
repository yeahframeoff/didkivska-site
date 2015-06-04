<script type="text/javascript">
$('#addDynamicExtraFieldButton').click(function(event) {
    addDynamicExtraField();
    return false;
});
 
function addDynamicExtraField() {
        var div = $('<div/>', {
            'class': 'DynamicExtraField'
        }).appendTo($('#DynamicExtraFieldsContainer'));
        var br = $('<br/>').appendTo(div);
        var label = $('<label/>').html("Requirement").appendTo(div);
        var input = $('<input/>', {
            value: '-',
            type: 'button',
            'class': 'DeleteDynamicExtraField'
        }).appendTo(div);
        input.click(function() {
            $(this).parent().remove();
        });
        var br = $('<br/>').appendTo(div);
        var textarea = $('<textarea/>', {
            name: 'DynamicExtraField[]',
            cols: '50',
            rows: '3'
        }).appendTo(div);
    }
//Для удаления первого поля. если оно не динамическое
$('.DeleteDynamicExtraField').click(function(event) {
    $(this).parent().remove();
    return false;
});
</script>


   <input type="button" id="addDynamicExtraFieldButton" value="+">
   
   
   <div id="DynamicExtraFieldsContainer">
        <div id="addDynamicField">
         
        </div>
        <div class="DynamicExtraField">
            <br>
            <label for="DynamicExtraField">Requirement</label>
            <input value="-" type="button" class="DeleteDynamicExtraField">
            <br>
            <textarea name="DynamicExtraField[]" cols="150" id="req"></textarea>
        </div>
    </div>
<input id="submit" type="submit" value="Send Message">